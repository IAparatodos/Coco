<?php
/**
 * Booking cancellation
 *
 * REST endpoints:
 *   GET  /wp-json/adrihosan/v1/booking?token=XXX  → booking details
 *   POST /wp-json/adrihosan/v1/cancel             → cancel booking
 */

add_action( 'rest_api_init', function () {
    register_rest_route( 'adrihosan/v1', '/booking', [
        'methods'             => 'GET',
        'callback'            => 'adrihosan_rest_get_booking',
        'permission_callback' => '__return_true',
    ] );

    register_rest_route( 'adrihosan/v1', '/cancel', [
        'methods'             => 'POST',
        'callback'            => 'adrihosan_rest_cancel_booking',
        'permission_callback' => '__return_true',
    ] );
} );

function adrihosan_rest_get_booking( WP_REST_Request $request ) {
    $token = sanitize_text_field( $request->get_param( 'token' ) );
    if ( empty( $token ) ) {
        return new WP_REST_Response( [ 'error' => 'token_required' ], 400 );
    }

    $booking = adrihosan_bookings_get_by_token( $token );
    if ( ! $booking ) {
        return new WP_REST_Response( [ 'error' => 'not_found' ], 404 );
    }

    return new WP_REST_Response( [
        'name'       => $booking->name,
        'email'      => $booking->email,
        'visitType'  => $booking->visit_type,
        'startDate'  => $booking->start_date,
        'startTime'  => $booking->start_time,
        'needs'      => $booking->needs,
        'status'     => $booking->status,
    ], 200 );
}

function adrihosan_rest_cancel_booking( WP_REST_Request $request ) {
    $token  = sanitize_text_field( $request->get_param( 'token' ) );
    $reason = sanitize_textarea_field( $request->get_param( 'reason' ) );

    if ( empty( $token ) ) {
        return new WP_REST_Response( [ 'ok' => false, 'error' => 'token_required' ], 400 );
    }
    if ( empty( $reason ) ) {
        return new WP_REST_Response( [ 'ok' => false, 'error' => 'reason_required' ], 400 );
    }

    $booking = adrihosan_bookings_get_by_token( $token );
    if ( ! $booking ) {
        return new WP_REST_Response( [ 'ok' => false, 'error' => 'not_found' ], 404 );
    }
    if ( $booking->status === 'cancelled' ) {
        return new WP_REST_Response( [ 'ok' => false, 'error' => 'already_cancelled' ], 400 );
    }

    if ( ! empty( $booking->google_event_id ) ) {
        $access_token = adrihosan_reservas_get_access_token();
        if ( ! is_wp_error( $access_token ) ) {
            $calendar_id = adrihosan_reservas_get_calendar_id();
            adrihosan_google_calendar_delete_event( $calendar_id, $booking->google_event_id, $access_token );
        }
    }

    adrihosan_bookings_cancel( $token, $reason );

    $comercial        = 'comercial@adrihosan.com';
    $tipo_label_full  = $booking->visit_type === 'presencial' ? 'presencial en el showroom' : 'virtual por videollamada';
    $tipo_label_short = $booking->visit_type === 'presencial' ? 'Presencial (Showroom)' : 'Virtual (Videollamada)';
    $fecha_human      = adrihosan_email_format_date( $booking->start_date );

    /* === Email cliente: confirmacion de cancelacion === */
    $cli_details = [
        'Tipo de visita' => esc_html( $tipo_label_short ),
        'Fecha'          => esc_html( $fecha_human ),
        'Hora'           => esc_html( $booking->start_time ) . ' h',
        'Motivo'         => nl2br( esc_html( $reason ) ),
    ];

    adrihosan_email_send(
        $booking->email,
        'Cita cancelada - Adrihosan',
        [
            'eyebrow'   => 'Cita cancelada',
            'title'     => 'Tu cita ha sido cancelada',
            'intro'     => sprintf( 'Hola <strong>%s</strong>, te confirmamos que tu cita %s ha quedado cancelada.', esc_html( $booking->name ), esc_html( $tipo_label_full ) ),
            'details'   => $cli_details,
            'extra'     => '<p style="margin:0;font-family:inherit;font-size:14px;line-height:1.6;color:#3f6f7b;">Si quieres reservar una nueva cita, puedes hacerlo desde el siguiente enlace.</p>',
            'cta_url'   => home_url( '/contacto/' ),
            'cta_label' => 'Reservar nueva cita',
            'signoff'   => 'Un saludo,<br>Equipo Adrihosan',
        ],
        [ 'Cc: ' . $comercial ]
    );

    /* === Email interno: aviso a comercial@ === */
    $admin_details = [
        'Cliente'  => esc_html( $booking->name ),
        'Email'    => '<a href="mailto:' . esc_attr( $booking->email ) . '" style="color:#4dd2d0;text-decoration:none;">' . esc_html( $booking->email ) . '</a>',
        'Telefono' => '<a href="tel:' . esc_attr( $booking->phone ) . '" style="color:#4dd2d0;text-decoration:none;">' . esc_html( $booking->phone ) . '</a>',
        'Tipo'     => esc_html( $tipo_label_short ),
        'Fecha'    => esc_html( $fecha_human ) . ' &middot; ' . esc_html( $booking->start_time ) . ' h',
    ];

    $admin_extra = '<div style="padding:14px 16px;background:#fff5f4;border-left:3px solid #c0392b;border-radius:6px;"><strong style="display:block;margin-bottom:6px;color:#c0392b;">Motivo de la cancelacion:</strong>' . nl2br( esc_html( $reason ) ) . '</div>';

    adrihosan_email_send(
        $comercial,
        sprintf( 'Cita CANCELADA: %s - %s %s', $booking->name, $booking->start_date, $booking->start_time ),
        [
            'eyebrow' => 'Notificacion interna',
            'title'   => 'Una cita ha sido cancelada',
            'intro'   => 'El cliente ha cancelado su reserva. La hora ha quedado libre.',
            'details' => $admin_details,
            'extra'   => $admin_extra,
            'signoff' => '',
        ]
    );

    return new WP_REST_Response( [ 'ok' => true ], 200 );
}
