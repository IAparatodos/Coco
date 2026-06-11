<?php
/**
 * REST API endpoints for reservations
 *
 * POST /wp-json/adrihosan/v1/availability   body: { start, end }  (YYYY-MM-DD)
 * POST /wp-json/adrihosan/v1/bookings
 *
 * /availability es POST a proposito: LiteSpeed (y cualquier cache/CDN) NUNCA
 * cachea POST, asi que es imposible servir una disponibilidad antigua. Se
 * mantiene GET para pruebas directas, pero el frontend usa POST.
 *
 * Tokens never reach the frontend. Rate-limited + honeypot + nonce.
 */

add_action( 'rest_api_init', function () {
    register_rest_route( 'adrihosan/v1', '/availability', [
        'methods'             => [ 'GET', 'POST' ],
        'callback'            => 'adrihosan_rest_availability',
        'permission_callback' => '__return_true',
    ] );

    register_rest_route( 'adrihosan/v1', '/bookings', [
        'methods'             => 'POST',
        'callback'            => 'adrihosan_rest_create_booking',
        'permission_callback' => '__return_true',
    ] );
} );

/**
 * Guarda central anti-cache para TODO el namespace adrihosan/v1.
 *
 * Regla critica documentada en CLAUDE.md: "endpoints REST nunca cachean".
 * Se ejecuta en rest_pre_dispatch, ANTES de cualquier callback, asi cubre
 * /availability, /bookings y cualquier endpoint futuro sin repetir codigo.
 *
 * IMPORTANTE: esto solo evita que la respuesta ENTRE en cache. Si LiteSpeed
 * ya tiene una respuesta cacheada, la sirve sin ejecutar PHP y este hook ni
 * se llama. Por eso, ademas de este codigo, el endpoint
 * /wp-json/adrihosan/v1/ debe estar en LiteSpeed > Cache > Excludes >
 * "Do Not Cache URIs" (garantia a nivel de servidor).
 */
add_filter( 'rest_pre_dispatch', 'adrihosan_reservas_rest_nocache_guard', 10, 3 );
function adrihosan_reservas_rest_nocache_guard( $result, $server, $request ) {
    if ( 0 === strpos( $request->get_route(), '/adrihosan/v1' ) ) {
        if ( ! headers_sent() ) {
            nocache_headers();
            header( 'Cache-Control: private, no-store, no-cache, must-revalidate, max-age=0' );
            header( 'Pragma: no-cache' );
        }
        do_action( 'litespeed_control_set_nocache', 'adrihosan v1 REST dynamic' );
    }
    return $result;
}

function adrihosan_rest_availability( WP_REST_Request $request ) {
    /* Disponibilidad NUNCA debe cachearse: cambia segun token, eventos
     * de Google y la hora actual (regla min_advance_hours). Si LiteSpeed
     * o cualquier CDN guarda una respuesta antigua, la web muestra
     * "todo no disponible" durante horas aunque ya este libre.
     * (Refuerzo local; la guarda central de arriba ya cubre el namespace.) */
    nocache_headers();
    header( 'Cache-Control: private, no-store, no-cache, must-revalidate, max-age=0' );
    header( 'Pragma: no-cache' );
    if ( function_exists( 'do_action' ) ) {
        do_action( 'litespeed_control_set_nocache', 'adrihosan reservas availability dynamic' );
    }

    $start = sanitize_text_field( $request->get_param( 'start' ) );
    $end   = sanitize_text_field( $request->get_param( 'end' ) );

    if ( empty( $start ) || ! preg_match( '/^\d{4}-\d{2}-\d{2}$/', $start ) ) {
        return new WP_REST_Response( [ 'error' => 'invalid start date' ], 400 );
    }
    if ( empty( $end ) || ! preg_match( '/^\d{4}-\d{2}-\d{2}$/', $end ) ) {
        $end = $start;
    }

    $max_date = gmdate( 'Y-m-d', strtotime( '+' . adrihosan_reservas_max_weeks_ahead() . ' weeks' ) );
    if ( $start > $max_date ) {
        return new WP_REST_Response( [ 'slots' => [] ], 200 );
    }

    $access_token = adrihosan_reservas_get_access_token();
    $busy         = [];

    if ( ! is_wp_error( $access_token ) ) {
        $calendar_id = adrihosan_reservas_get_calendar_id();
        $time_min    = gmdate( 'c', strtotime( $start . 'T00:00:00+02:00' ) );
        $time_max    = gmdate( 'c', strtotime( $end . 'T23:59:59+02:00' ) );
        $result      = adrihosan_google_calendar_freebusy( $calendar_id, $time_min, $time_max, $access_token );
        if ( ! is_wp_error( $result ) ) {
            $busy = $result;
        }
    }

    $days    = [];
    $current = strtotime( $start );
    $last    = strtotime( $end );

    while ( $current <= $last ) {
        $date_str  = gmdate( 'Y-m-d', $current );
        $day_busy  = [];
        foreach ( $busy as $b ) {
            $b_date = substr( $b['start'], 0, 10 );
            if ( $b_date === $date_str ) {
                $day_busy[] = $b;
            }
        }
        $slots  = adrihosan_reservas_generar_slots( $date_str, $day_busy );
        $days[] = [
            'date'  => $date_str,
            'slots' => $slots,
        ];
        $current = strtotime( '+1 day', $current );
    }

    return new WP_REST_Response( [ 'days' => $days ], 200 );
}

function adrihosan_rest_create_booking( WP_REST_Request $request ) {
    $nonce = $request->get_header( 'X-WP-Nonce' );
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        return new WP_REST_Response( [ 'ok' => false, 'errors' => [ 'nonce_invalid' ] ], 403 );
    }

    $honeypot = sanitize_text_field( $request->get_param( 'website_url' ) );
    if ( ! empty( $honeypot ) ) {
        return new WP_REST_Response( [ 'ok' => true ], 200 );
    }

    $ip  = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $key = 'adria_booking_rate_' . md5( $ip );

    // Bypass del rate limit para administradores logueados: asi pruebas
    // internas no nos bloquean. Para visitantes anonimos seguimos
    // limitando a 6 reservas/hora por IP (anti-spam suave).
    $is_admin_user = is_user_logged_in() && current_user_can( 'manage_options' );

    if ( ! $is_admin_user ) {
        $count = (int) get_transient( $key );
        if ( $count >= 6 ) {
            return new WP_REST_Response( [ 'ok' => false, 'errors' => [ 'rate_limited' ] ], 429 );
        }
        set_transient( $key, $count + 1, HOUR_IN_SECONDS );
    }

    $data = [
        'name'      => sanitize_text_field( $request->get_param( 'name' ) ),
        'email'     => sanitize_email( $request->get_param( 'email' ) ),
        'phone'     => sanitize_text_field( $request->get_param( 'phone' ) ),
        'visitType' => sanitize_text_field( $request->get_param( 'visitType' ) ),
        'startDate' => sanitize_text_field( $request->get_param( 'startDate' ) ),
        'startTime' => sanitize_text_field( $request->get_param( 'startTime' ) ),
        'needs'     => sanitize_textarea_field( $request->get_param( 'needs' ) ),
    ];

    $errors = adrihosan_reservas_validar( $data );
    if ( ! empty( $errors ) ) {
        return new WP_REST_Response( [ 'ok' => false, 'errors' => $errors ], 400 );
    }

    $access_token = adrihosan_reservas_get_access_token();
    if ( is_wp_error( $access_token ) ) {
        return new WP_REST_Response( [ 'ok' => false, 'errors' => [ 'calendar_unavailable' ] ], 503 );
    }

    $calendar_id = adrihosan_reservas_get_calendar_id();
    $start_dt    = $data['startDate'] . 'T' . $data['startTime'] . ':00';
    $end_dt      = gmdate( 'Y-m-d\TH:i:s', strtotime( $start_dt ) + ( adrihosan_reservas_duration() * 60 ) );

    $location = $data['visitType'] === 'presencial'
        ? 'Adrihosan Showroom – Calle Los Centelles, 48, Valencia'
        : 'Videollamada (se enviará enlace)';

    $event = [
        'summary'     => sprintf( 'Visita %s – %s', ucfirst( $data['visitType'] ), $data['name'] ),
        'location'    => $location,
        'description' => sprintf(
            "Email: %s\nTeléfono: %s\nQué quiere ver: %s",
            $data['email'],
            $data['phone'],
            $data['needs']
        ),
        'start'       => [ 'dateTime' => $start_dt, 'timeZone' => 'Europe/Madrid' ],
        'end'         => [ 'dateTime' => $end_dt, 'timeZone' => 'Europe/Madrid' ],
    ];

    $result = adrihosan_google_calendar_create_event( $calendar_id, $event, $access_token );
    if ( is_wp_error( $result ) ) {
        return new WP_REST_Response( [ 'ok' => false, 'errors' => [ 'calendar_error' ] ], 500 );
    }

    $google_event_id = $result['id'] ?? null;

    $cancel_token = null;
    if ( function_exists( 'adrihosan_bookings_save' ) ) {
        $cancel_token = adrihosan_bookings_save( $data, $google_event_id );
    }

    $cancel_url  = $cancel_token ? adrihosan_bookings_cancel_url( $cancel_token ) : '';

    $tipo_label_full  = $data['visitType'] === 'presencial' ? 'presencial en el showroom' : 'virtual por videollamada';
    $tipo_label_short = $data['visitType'] === 'presencial' ? 'Presencial (Showroom)' : 'Virtual (Videollamada)';
    $fecha_human      = adrihosan_email_format_date( $data['startDate'] );

    /* === Email cliente: confirmacion === */
    $cliente_intro = sprintf(
        'Hola <strong>%s</strong>, hemos recibido tu solicitud y tu visita %s ha quedado reservada.',
        esc_html( $data['name'] ),
        esc_html( $tipo_label_full )
    );

    $cliente_details = [
        'Tipo de visita' => esc_html( $tipo_label_short ),
        'Fecha'          => esc_html( $fecha_human ),
        'Hora'           => esc_html( $data['startTime'] ) . ' h',
        'Duracion'       => '45 minutos',
    ];

    if ( $data['visitType'] === 'presencial' ) {
        $cliente_details['Direccion'] = 'C/ Los Centelles, 48 &middot; 46006 Valencia (Ruzafa)<br><span style="font-size:12px;opacity:0.75;">Parking gratuito enfrente: Los Centelles, 45</span>';
    } else {
        $cliente_details['Como conectar'] = 'Te enviaremos el enlace de la videollamada por email antes de la cita.';
    }

    $cliente_extra = $cancel_url
        ? '<p style="margin:0;font-family:inherit;font-size:13px;line-height:1.5;color:#3f6f7b;opacity:0.85;">Si necesitas cancelar tu cita, puedes hacerlo desde el siguiente enlace.</p>'
        : '';

    adrihosan_email_send(
        $data['email'],
        'Confirmacion de tu cita - Adrihosan',
        [
            'eyebrow'   => 'Cita confirmada',
            'title'     => 'Tu cita esta reservada',
            'intro'     => $cliente_intro,
            'details'   => $cliente_details,
            'extra'     => $cliente_extra,
            'cta_url'   => $cancel_url,
            'cta_label' => $cancel_url ? 'Cancelar mi cita' : '',
            'signoff'   => '&iexcl;Te esperamos!<br>Equipo Adrihosan',
        ]
    );

    /* === Email interno: nueva reserva para comercial@ === */
    $admin_details = [
        'Cliente'  => esc_html( $data['name'] ),
        'Email'    => '<a href="mailto:' . esc_attr( $data['email'] ) . '" style="color:#4dd2d0;text-decoration:none;">' . esc_html( $data['email'] ) . '</a>',
        'Telefono' => '<a href="tel:' . esc_attr( $data['phone'] ) . '" style="color:#4dd2d0;text-decoration:none;">' . esc_html( $data['phone'] ) . '</a>',
        'Tipo'     => esc_html( $tipo_label_short ),
        'Fecha'    => esc_html( $fecha_human ) . ' &middot; ' . esc_html( $data['startTime'] ) . ' h',
    ];

    $admin_extra = '';
    if ( ! empty( $data['needs'] ) ) {
        $admin_extra = '<div style="padding:14px 16px;background:#f0f7f8;border-left:3px solid #4dd2d0;border-radius:6px;"><strong style="display:block;margin-bottom:6px;color:#3f6f7b;">Que quiere ver:</strong>' . nl2br( esc_html( $data['needs'] ) ) . '</div>';
    }

    adrihosan_email_send(
        'comercial@adrihosan.com',
        sprintf( 'Nueva reserva: %s - %s %s', $data['name'], $data['startDate'], $data['startTime'] ),
        [
            'eyebrow'   => 'Notificacion interna',
            'title'     => 'Nueva reserva desde la web',
            'intro'     => 'Acaba de entrar una nueva cita por la web.',
            'details'   => $admin_details,
            'extra'     => $admin_extra,
            'cta_url'   => $cancel_url,
            'cta_label' => $cancel_url ? 'Ver / cancelar reserva' : '',
            'signoff'   => '',
        ]
    );

    if ( function_exists( 'adrihosan_pipedrive_process_booking' ) ) {
        adrihosan_pipedrive_process_booking( $data );
    }

    return new WP_REST_Response( [ 'ok' => true ], 200 );
}
