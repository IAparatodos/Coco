<?php
/**
 * Booking reminders via WP-Cron
 *
 * Runs every hour, finds bookings in the next 24-25h window,
 * sends reminder to client + copy to comercial@adrihosan.com.
 * Includes cancellation link.
 */

function adrihosan_reminders_cron_schedule( $schedules ) {
    $schedules['every_hour'] = [
        'interval' => HOUR_IN_SECONDS,
        'display'  => 'Every hour',
    ];
    return $schedules;
}
add_filter( 'cron_schedules', 'adrihosan_reminders_cron_schedule' );

function adrihosan_reminders_schedule_event() {
    if ( ! wp_next_scheduled( 'adrihosan_send_booking_reminders' ) ) {
        wp_schedule_event( time(), 'every_hour', 'adrihosan_send_booking_reminders' );
    }
}
add_action( 'init', 'adrihosan_reminders_schedule_event' );

add_action( 'adrihosan_send_booking_reminders', 'adrihosan_reminders_process' );

function adrihosan_reminders_process() {
    if ( ! function_exists( 'adrihosan_bookings_pending_reminders_24h' ) ) {
        return;
    }

    $bookings = adrihosan_bookings_pending_reminders_24h();
    if ( empty( $bookings ) ) {
        return;
    }

    $comercial = 'comercial@adrihosan.com';

    foreach ( $bookings as $booking ) {
        adrihosan_reminder_send_client( $booking, $comercial );
        adrihosan_reminder_send_internal( $booking, $comercial );
        adrihosan_bookings_mark_reminder_sent( $booking->id );
    }
}

function adrihosan_reminder_send_client( $booking, $comercial ) {
    $tipo_label = $booking->visit_type === 'presencial'
        ? 'presencial en el showroom'
        : 'virtual por videollamada';

    $location_info = $booking->visit_type === 'presencial'
        ? "Dirección: C/ Los Centelles, 48, 46006 Valencia (Ruzafa)\nParking gratuito: Los Centelles, 45"
        : "Recibirás un enlace de videollamada por email antes de la cita.";

    $cancel_url  = adrihosan_bookings_cancel_url( $booking->cancellation_token );

    $subject = sprintf(
        'Recordatorio: tu cita %s mañana a las %s – Adrihosan',
        $tipo_label,
        $booking->start_time
    );

    $body = sprintf(
        "Hola %s,\n\n" .
        "Te recordamos que mañana tienes tu visita %s:\n\n" .
        "Fecha: %s\n" .
        "Hora: %s\n" .
        "Duración: 45 minutos\n\n" .
        "%s\n\n" .
        "Si necesitas cancelar tu cita:\n" .
        "%s\n\n" .
        "¡Te esperamos!\n" .
        "Equipo Adrihosan",
        $booking->name,
        $tipo_label,
        $booking->start_date,
        $booking->start_time,
        $location_info,
        $cancel_url
    );

    $headers = [ 'Cc: ' . $comercial ];

    wp_mail( $booking->email, $subject, $body, $headers );
}

function adrihosan_reminder_send_internal( $booking, $comercial ) {
    $tipo_label = $booking->visit_type === 'presencial' ? 'Presencial' : 'Virtual';
    $cancel_url = adrihosan_bookings_cancel_url( $booking->cancellation_token );

    $subject = sprintf(
        'Recordatorio cita mañana: %s – %s %s',
        $booking->name,
        $booking->start_date,
        $booking->start_time
    );

    $body = sprintf(
        "Recordatorio de cita para mañana:\n\n" .
        "Nombre: %s\n" .
        "Email: %s\n" .
        "Teléfono: %s\n" .
        "Tipo: %s\n" .
        "Fecha: %s\n" .
        "Hora: %s\n" .
        "Qué quiere ver: %s\n\n" .
        "Enlace para cancelar:\n%s",
        $booking->name,
        $booking->email,
        $booking->phone,
        $tipo_label,
        $booking->start_date,
        $booking->start_time,
        $booking->needs,
        $cancel_url
    );

    wp_mail( $comercial, $subject, $body );
}
