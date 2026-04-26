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

    $comercial  = 'comercial@adrihosan.com';
    $tipo_label = $booking->visit_type === 'presencial' ? 'presencial en el showroom' : 'virtual por videollamada';

    wp_mail(
        $booking->email,
        'Cita cancelada – Adrihosan',
        sprintf(
            "Hola %s,\n\n" .
            "Tu cita %s del %s a las %s ha sido cancelada.\n\n" .
            "Motivo: %s\n\n" .
            "Si quieres reservar una nueva cita, puedes hacerlo en:\n" .
            "%s\n\n" .
            "Un saludo,\n" .
            "Equipo Adrihosan",
            $booking->name,
            $tipo_label,
            $booking->start_date,
            $booking->start_time,
            $reason,
            home_url( '/contacto/' )
        ),
        [ 'Cc: ' . $comercial ]
    );

    wp_mail(
        $comercial,
        sprintf( 'Cita CANCELADA: %s – %s %s', $booking->name, $booking->start_date, $booking->start_time ),
        sprintf(
            "Se ha cancelado una cita:\n\n" .
            "Nombre: %s\n" .
            "Email: %s\n" .
            "Teléfono: %s\n" .
            "Tipo: %s\n" .
            "Fecha: %s %s\n\n" .
            "Motivo de cancelación: %s",
            $booking->name,
            $booking->email,
            $booking->phone,
            ucfirst( $booking->visit_type ),
            $booking->start_date,
            $booking->start_time,
            $reason
        )
    );

    return new WP_REST_Response( [ 'ok' => true ], 200 );
}
