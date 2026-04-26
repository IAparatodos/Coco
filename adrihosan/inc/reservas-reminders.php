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
    $tipo_label_full  = $booking->visit_type === 'presencial' ? 'presencial en el showroom' : 'virtual por videollamada';
    $tipo_label_short = $booking->visit_type === 'presencial' ? 'Presencial (Showroom)' : 'Virtual (Videollamada)';
    $fecha_human      = adrihosan_email_format_date( $booking->start_date );
    $cancel_url       = adrihosan_bookings_cancel_url( $booking->cancellation_token );

    $details = [
        'Tipo de visita' => esc_html( $tipo_label_short ),
        'Fecha'          => esc_html( $fecha_human ),
        'Hora'           => esc_html( $booking->start_time ) . ' h',
        'Duracion'       => '45 minutos',
    ];

    if ( $booking->visit_type === 'presencial' ) {
        $details['Direccion'] = 'C/ Los Centelles, 48 &middot; 46006 Valencia (Ruzafa)<br><span style="font-size:12px;opacity:0.75;">Parking gratuito enfrente: Los Centelles, 45</span>';
    } else {
        $details['Como conectar'] = 'Te enviaremos el enlace de la videollamada por email antes de la cita.';
    }

    adrihosan_email_send(
        $booking->email,
        sprintf( 'Recordatorio: manana tienes cita %s a las %s - Adrihosan', $tipo_label_full, $booking->start_time ),
        [
            'eyebrow'   => 'Recordatorio',
            'title'     => 'Manana tienes tu cita con nosotros',
            'intro'     => sprintf( 'Hola <strong>%s</strong>, te recordamos que manana tienes reservada tu visita %s.', esc_html( $booking->name ), esc_html( $tipo_label_full ) ),
            'details'   => $details,
            'extra'     => '<p style="margin:0;font-family:inherit;font-size:13px;line-height:1.5;color:#3f6f7b;opacity:0.85;">Si necesitas cancelarla, usa el enlace de abajo.</p>',
            'cta_url'   => $cancel_url,
            'cta_label' => 'Cancelar mi cita',
            'signoff'   => '&iexcl;Te esperamos!<br>Equipo Adrihosan',
        ],
        [ 'Cc: ' . $comercial ]
    );
}

function adrihosan_reminder_send_internal( $booking, $comercial ) {
    $tipo_label_short = $booking->visit_type === 'presencial' ? 'Presencial (Showroom)' : 'Virtual (Videollamada)';
    $fecha_human      = adrihosan_email_format_date( $booking->start_date );
    $cancel_url       = adrihosan_bookings_cancel_url( $booking->cancellation_token );

    $details = [
        'Cliente'  => esc_html( $booking->name ),
        'Email'    => '<a href="mailto:' . esc_attr( $booking->email ) . '" style="color:#4dd2d0;text-decoration:none;">' . esc_html( $booking->email ) . '</a>',
        'Telefono' => '<a href="tel:' . esc_attr( $booking->phone ) . '" style="color:#4dd2d0;text-decoration:none;">' . esc_html( $booking->phone ) . '</a>',
        'Tipo'     => esc_html( $tipo_label_short ),
        'Fecha'    => esc_html( $fecha_human ) . ' &middot; ' . esc_html( $booking->start_time ) . ' h',
    ];

    $extra = '';
    if ( ! empty( $booking->needs ) ) {
        $extra = '<div style="padding:14px 16px;background:#f0f7f8;border-left:3px solid #4dd2d0;border-radius:6px;"><strong style="display:block;margin-bottom:6px;color:#3f6f7b;">Que quiere ver:</strong>' . nl2br( esc_html( $booking->needs ) ) . '</div>';
    }

    adrihosan_email_send(
        $comercial,
        sprintf( 'Recordatorio cita manana: %s - %s %s', $booking->name, $booking->start_date, $booking->start_time ),
        [
            'eyebrow'   => 'Recordatorio interno',
            'title'     => 'Cita prevista para manana',
            'intro'     => 'Resumen de la cita que tendras manana:',
            'details'   => $details,
            'extra'     => $extra,
            'cta_url'   => $cancel_url,
            'cta_label' => $cancel_url ? 'Ver / cancelar reserva' : '',
            'signoff'   => '',
        ]
    );
}
