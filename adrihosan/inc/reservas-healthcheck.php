<?php
/**
 * Healthcheck diario del sistema de reservas.
 *
 * Cada 24 h comprueba:
 *   1. Que el access_token de Google se puede refrescar.
 *   2. Que freeBusy responde sin error para una ventana de 7 dias.
 *
 * Si algo falla, envia email a comercial@adrihosan.com con el detalle del
 * error. Asi sabemos antes que un cliente cuando Google revoca el token,
 * cambian las credenciales, o la API esta caida.
 */

add_action( 'init', function () {
    if ( ! wp_next_scheduled( 'adrihosan_reservas_healthcheck' ) ) {
        wp_schedule_event( time() + HOUR_IN_SECONDS, 'daily', 'adrihosan_reservas_healthcheck' );
    }
} );

add_action( 'adrihosan_reservas_healthcheck', 'adrihosan_reservas_run_healthcheck' );

function adrihosan_reservas_run_healthcheck() {
    $errors = [];

    /* 1. Forzar refresh del token */
    $token = adrihosan_reservas_get_access_token( true );
    if ( is_wp_error( $token ) ) {
        $errors[] = sprintf(
            '[TOKEN] %s - %s',
            $token->get_error_code(),
            $token->get_error_message()
        );
    }

    /* 2. FreeBusy proximos 7 dias */
    if ( empty( $errors ) ) {
        $calendar_id = adrihosan_reservas_get_calendar_id();
        $time_min    = gmdate( 'c', strtotime( '+1 day' ) );
        $time_max    = gmdate( 'c', strtotime( '+8 days' ) );
        $busy        = adrihosan_google_calendar_freebusy( $calendar_id, $time_min, $time_max, $token );
        if ( is_wp_error( $busy ) ) {
            $errors[] = sprintf(
                '[FREEBUSY] %s - %s',
                $busy->get_error_code(),
                $busy->get_error_message()
            );
        }
    }

    if ( empty( $errors ) ) {
        update_option( 'adrihosan_reservas_healthcheck_last_ok', time() );
        delete_option( 'adrihosan_reservas_healthcheck_last_error' );
        return;
    }

    /* Email de alerta */
    $last_ok = get_option( 'adrihosan_reservas_healthcheck_last_ok' );
    $last_ok_str = $last_ok
        ? wp_date( 'Y-m-d H:i:s', $last_ok ) . ' (' . human_time_diff( $last_ok ) . ' atras)'
        : 'nunca';

    $body  = "El healthcheck diario del sistema de reservas ha fallado.\n\n";
    $body .= "Errores detectados:\n";
    foreach ( $errors as $e ) {
        $body .= '  - ' . $e . "\n";
    }
    $body .= "\nUltimo healthcheck OK: " . $last_ok_str . "\n\n";
    $body .= "Pasos para diagnosticar:\n";
    $body .= "  1. Comprueba en wp-config.php que las constantes ADRIA_GOOGLE_*\n";
    $body .= "     siguen presentes.\n";
    $body .= "  2. Si el error es [TOKEN] token_refresh_failed, el refresh_token\n";
    $body .= "     de Google esta revocado. Hay que regenerarlo desde Google\n";
    $body .= "     Cloud Console y actualizar ADRIA_GOOGLE_REFRESH_TOKEN.\n";
    $body .= "  3. Verifica que el OAuth consent screen del proyecto Google\n";
    $body .= "     este en modo 'In production', no 'Testing' (en Testing los\n";
    $body .= "     refresh tokens caducan a los 7 dias).\n";

    wp_mail(
        'comercial@adrihosan.com',
        '[Adrihosan] FALLO en sistema de reservas',
        $body
    );

    update_option( 'adrihosan_reservas_healthcheck_last_error', [
        'time'   => time(),
        'errors' => $errors,
    ] );
}

/**
 * Limpiar el cron si se desactiva el theme.
 */
add_action( 'switch_theme', function () {
    $next = wp_next_scheduled( 'adrihosan_reservas_healthcheck' );
    if ( $next ) {
        wp_unschedule_event( $next, 'adrihosan_reservas_healthcheck' );
    }
} );
