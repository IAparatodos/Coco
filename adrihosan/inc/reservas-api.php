<?php
/**
 * Reservation business logic
 * Horarios, generación de slots, validación.
 */

function adrihosan_reservas_horarios() {
    return [
        1 => [ [ 'start' => '08:00', 'end' => '15:00' ] ], // Lunes
        2 => [ [ 'start' => '08:00', 'end' => '15:00' ] ], // Martes
        3 => [ [ 'start' => '08:00', 'end' => '15:00' ] ], // Miércoles
        4 => [ [ 'start' => '08:00', 'end' => '15:00' ] ], // Jueves
        5 => [ [ 'start' => '08:00', 'end' => '13:00' ] ], // Viernes
        6 => [ [ 'start' => '09:00', 'end' => '13:00' ] ], // Sábado
        0 => [],                                             // Domingo
    ];
}

function adrihosan_reservas_duration() {
    return 45;
}

function adrihosan_reservas_min_advance_hours() {
    return 12;
}

/**
 * Buffer (en minutos) entre reserva y reserva. Se usa en dos sitios:
 *  - Como separacion entre slots: paso = duration + buffer = 60 min.
 *  - Como margen tras el ultimo slot antes del cierre: el ultimo slot
 *    debe terminar buffer minutos antes del cierre.
 */
function adrihosan_reservas_last_slot_buffer() {
    return 15;
}

function adrihosan_reservas_max_weeks_ahead() {
    return 4;
}

function adrihosan_reservas_to_minutes( $time ) {
    $parts = explode( ':', $time );
    return (int) $parts[0] * 60 + (int) $parts[1];
}

function adrihosan_reservas_from_minutes( $total ) {
    return sprintf( '%02d:%02d', intdiv( $total, 60 ), $total % 60 );
}

function adrihosan_reservas_generar_slots( $date_str, $busy = [] ) {
    $duration  = adrihosan_reservas_duration();
    $buffer    = adrihosan_reservas_last_slot_buffer();
    $min_adv   = adrihosan_reservas_min_advance_hours();
    $day_index = (int) gmdate( 'w', strtotime( $date_str ) );
    $horarios  = adrihosan_reservas_horarios();
    $windows   = $horarios[ $day_index ] ?? [];
    $slots     = [];
    $now       = time();

    /* Convertir busy de Google Calendar (ISO-8601 con timezone offset, ej.
     * "2026-05-01T09:30:00+02:00") a minutos en hora LOCAL de la web.
     * Antes se usaba gmdate() que devuelve UTC: 09:30 CEST se transformaba
     * en 07:30 UTC y descuadraba la comparacion con los slots, que sí
     * estan en hora local (08:00, 09:00, ...). */
    $tz = function_exists( 'wp_timezone' ) ? wp_timezone() : new DateTimeZone( 'Europe/Madrid' );
    $busy_minutes = [];
    foreach ( $busy as $b ) {
        $bs = isset( $b['start'] ) ? $b['start'] : '';
        $be = isset( $b['end'] ) ? $b['end'] : '';
        if ( empty( $bs ) || empty( $be ) ) {
            continue;
        }
        try {
            $dt_start = new DateTime( $bs );
            $dt_end   = new DateTime( $be );
            $dt_start->setTimezone( $tz );
            $dt_end->setTimezone( $tz );
        } catch ( Exception $e ) {
            continue;
        }
        $busy_minutes[] = [
            'start' => (int) $dt_start->format( 'G' ) * 60 + (int) $dt_start->format( 'i' ),
            'end'   => (int) $dt_end->format( 'G' ) * 60 + (int) $dt_end->format( 'i' ),
        ];
    }

    foreach ( $windows as $window ) {
        $current = adrihosan_reservas_to_minutes( $window['start'] );
        $limit   = adrihosan_reservas_to_minutes( $window['end'] ) - $duration - $buffer;

        while ( $current <= $limit ) {
            $start_time = adrihosan_reservas_from_minutes( $current );
            $end_time   = adrihosan_reservas_from_minutes( $current + $duration );

            $slot_timestamp = strtotime( $date_str . ' ' . $start_time );
            $too_soon       = ( $slot_timestamp - $now ) < ( $min_adv * 3600 );

            $overlap = false;
            foreach ( $busy_minutes as $bm ) {
                if ( $current < $bm['end'] && ( $current + $duration ) > $bm['start'] ) {
                    $overlap = true;
                    break;
                }
            }

            if ( ! $too_soon && ! $overlap ) {
                $slots[] = [
                    'start' => $start_time,
                    'end'   => $end_time,
                ];
            }

            // Paso = duracion + buffer (= 45 + 15 = 60 min). Asi se respeta
            // el margen entre reservas y los slots quedan en horas redondas
            // a partir del inicio del horario.
            $current += $duration + $buffer;
        }
    }

    return $slots;
}

function adrihosan_reservas_validar( $data ) {
    $errors = [];

    foreach ( [ 'name', 'email', 'phone', 'startDate', 'startTime', 'visitType' ] as $field ) {
        if ( empty( $data[ $field ] ) ) {
            $errors[] = $field;
        }
    }
    if ( ! empty( $errors ) ) {
        return $errors;
    }

    if ( ! in_array( $data['visitType'], [ 'presencial', 'virtual' ], true ) ) {
        $errors[] = 'visitType_invalid';
    }

    if ( ! preg_match( '/^\d{4}-\d{2}-\d{2}$/', $data['startDate'] ) ) {
        $errors[] = 'startDate_invalid';
    }

    if ( ! preg_match( '/^\d{2}:\d{2}$/', $data['startTime'] ) ) {
        $errors[] = 'startTime_invalid';
    }

    if ( ! empty( $errors ) ) {
        return $errors;
    }

    $slot_ts = strtotime( $data['startDate'] . ' ' . $data['startTime'] );
    if ( ( $slot_ts - time() ) < adrihosan_reservas_min_advance_hours() * 3600 ) {
        $errors[] = 'minimum_advance_12h';
    }

    $max_ts = strtotime( '+' . adrihosan_reservas_max_weeks_ahead() . ' weeks' );
    if ( $slot_ts > $max_ts ) {
        $errors[] = 'too_far_ahead';
    }

    $day_index = (int) gmdate( 'w', strtotime( $data['startDate'] ) );
    $horarios  = adrihosan_reservas_horarios();
    $windows   = $horarios[ $day_index ] ?? [];
    $in_window = false;
    $start_min = adrihosan_reservas_to_minutes( $data['startTime'] );
    $end_min   = $start_min + adrihosan_reservas_duration();
    foreach ( $windows as $w ) {
        if ( $start_min >= adrihosan_reservas_to_minutes( $w['start'] ) &&
             $end_min <= adrihosan_reservas_to_minutes( $w['end'] ) ) {
            $in_window = true;
            break;
        }
    }
    if ( ! $in_window ) {
        $errors[] = 'outside_opening_hours';
    }

    return $errors;
}
