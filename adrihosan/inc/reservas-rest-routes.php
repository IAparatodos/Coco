<?php
/**
 * REST API endpoints for reservations
 *
 * GET  /wp-json/adrihosan/v1/availability?start=YYYY-MM-DD&end=YYYY-MM-DD
 * POST /wp-json/adrihosan/v1/bookings
 *
 * Tokens never reach the frontend. Rate-limited + honeypot + nonce.
 */

add_action( 'rest_api_init', function () {
    register_rest_route( 'adrihosan/v1', '/availability', [
        'methods'             => 'GET',
        'callback'            => 'adrihosan_rest_availability',
        'permission_callback' => '__return_true',
    ] );

    register_rest_route( 'adrihosan/v1', '/bookings', [
        'methods'             => 'POST',
        'callback'            => 'adrihosan_rest_create_booking',
        'permission_callback' => '__return_true',
    ] );
} );

function adrihosan_rest_availability( WP_REST_Request $request ) {
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
    $count = (int) get_transient( $key );
    if ( $count >= 3 ) {
        return new WP_REST_Response( [ 'ok' => false, 'errors' => [ 'rate_limited' ] ], 429 );
    }
    set_transient( $key, $count + 1, HOUR_IN_SECONDS );

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

    $tipo_label = $data['visitType'] === 'presencial' ? 'presencial en el showroom' : 'virtual por videollamada';

    wp_mail(
        $data['email'],
        'Confirmación de tu cita – Adrihosan',
        sprintf(
            "Hola %s,\n\nTu visita %s ha quedado reservada para el %s a las %s.\n\nDuración: 45 minutos\n%s\n\n¡Te esperamos!\nEquipo Adrihosan",
            $data['name'],
            $tipo_label,
            $data['startDate'],
            $data['startTime'],
            $data['visitType'] === 'presencial'
                ? "Dirección: Calle Los Centelles, 48, Valencia"
                : "Recibirás un enlace de videollamada por email antes de la cita."
        )
    );

    wp_mail(
        'comercial@adrihosan.com',
        sprintf( 'Nueva reserva: %s – %s %s', $data['name'], $data['startDate'], $data['startTime'] ),
        sprintf(
            "Nombre: %s\nEmail: %s\nTeléfono: %s\nTipo: %s\nFecha: %s %s\nQué quiere ver: %s",
            $data['name'],
            $data['email'],
            $data['phone'],
            ucfirst( $data['visitType'] ),
            $data['startDate'],
            $data['startTime'],
            $data['needs']
        )
    );

    if ( function_exists( 'adrihosan_bookings_save' ) ) {
        adrihosan_bookings_save( $data );
    }

    if ( function_exists( 'adrihosan_pipedrive_process_booking' ) ) {
        adrihosan_pipedrive_process_booking( $data );
    }

    return new WP_REST_Response( [ 'ok' => true ], 200 );
}
