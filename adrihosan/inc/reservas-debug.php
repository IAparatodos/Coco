<?php
/**
 * Diagnostico del sistema de reservas (Google Calendar token + freeBusy).
 *
 * Dos vias de acceso, ambas solo para administradores:
 *
 *   1) wp-admin > Herramientas > Debug Reservas (UI nativa, sin nonce)
 *   2) GET /wp-json/adrihosan/v1/debug-token  (requiere X-WP-Nonce wp_rest)
 *
 * No imprime el access_token completo: solo longitud y prefijo de 8 chars.
 *
 * Cuando terminemos de diagnosticar el problema borra este archivo y la
 * linea correspondiente en functions.php.
 */

add_action( 'rest_api_init', function () {
    register_rest_route( 'adrihosan/v1', '/debug-token', [
        'methods'             => 'GET',
        'callback'            => 'adrihosan_rest_debug_token',
        'permission_callback' => function () {
            return current_user_can( 'manage_options' );
        },
    ] );
} );

function adrihosan_rest_debug_token( WP_REST_Request $request ) {
    return new WP_REST_Response( adrihosan_reservas_debug_payload(), 200 );
}

function adrihosan_reservas_debug_payload() {
    $out = [
        'server_time_utc'   => gmdate( 'c' ),
        'server_time_local' => date( 'c' ),
        'server_tz_setting' => date_default_timezone_get(),
        'wp_timezone'       => function_exists( 'wp_timezone_string' ) ? wp_timezone_string() : 'unknown',
        'constants'         => [
            'ADRIA_GOOGLE_CLIENT_ID'     => defined( 'ADRIA_GOOGLE_CLIENT_ID' ) && ! empty( constant( 'ADRIA_GOOGLE_CLIENT_ID' ) ),
            'ADRIA_GOOGLE_CLIENT_SECRET' => defined( 'ADRIA_GOOGLE_CLIENT_SECRET' ) && ! empty( constant( 'ADRIA_GOOGLE_CLIENT_SECRET' ) ),
            'ADRIA_GOOGLE_REFRESH_TOKEN' => defined( 'ADRIA_GOOGLE_REFRESH_TOKEN' ) && ! empty( constant( 'ADRIA_GOOGLE_REFRESH_TOKEN' ) ),
            'ADRIA_GOOGLE_CALENDAR_ID'   => defined( 'ADRIA_GOOGLE_CALENDAR_ID' ) ? 'defined' : 'default (comercial@adrihosan.com)',
        ],
        'transient_cached_before' => (bool) get_transient( 'adria_google_access_token' ),
    ];

    // Forzar refresh para garantizar que probamos un access_token recien obtenido.
    $token = adrihosan_reservas_get_access_token( true );

    if ( is_wp_error( $token ) ) {
        $out['token_refresh'] = [
            'ok'      => false,
            'code'    => $token->get_error_code(),
            'message' => $token->get_error_message(),
            'data'    => $token->get_error_data(),
        ];
        return $out;
    }

    $out['token_refresh'] = [
        'ok'           => true,
        'token_length' => strlen( $token ),
        'token_prefix' => substr( $token, 0, 8 ) . '...',
    ];

    /* === Test freeBusy proximos 7 dias === */
    $calendar_id = adrihosan_reservas_get_calendar_id();
    $tomorrow    = gmdate( 'Y-m-d', strtotime( '+1 day' ) );
    $week_after  = gmdate( 'Y-m-d', strtotime( '+8 days' ) );
    $time_min    = $tomorrow . 'T00:00:00+02:00';
    $time_max    = $week_after . 'T23:59:59+02:00';

    $busy = adrihosan_google_calendar_freebusy( $calendar_id, $time_min, $time_max, $token );

    if ( is_wp_error( $busy ) ) {
        $out['freebusy_test'] = [
            'ok'      => false,
            'window'  => [ 'start' => $time_min, 'end' => $time_max ],
            'code'    => $busy->get_error_code(),
            'message' => $busy->get_error_message(),
            'data'    => $busy->get_error_data(),
        ];
        return $out;
    }

    $out['freebusy_test'] = [
        'ok'         => true,
        'window'     => [ 'start' => $time_min, 'end' => $time_max ],
        'busy_count' => count( $busy ),
        'busy_raw'   => $busy,
    ];

    /* === Slots que generaria el sistema dia a dia === */
    $out['slots_generated'] = [];
    $current = strtotime( $tomorrow );
    $last    = strtotime( $week_after );
    while ( $current <= $last ) {
        $date_str = gmdate( 'Y-m-d', $current );
        $day_busy = [];
        foreach ( $busy as $b ) {
            $bs = isset( $b['start'] ) ? $b['start'] : '';
            if ( substr( $bs, 0, 10 ) === $date_str ) {
                $day_busy[] = $b;
            }
        }
        $slots = adrihosan_reservas_generar_slots( $date_str, $day_busy );
        $out['slots_generated'][] = [
            'date'        => $date_str,
            'day_of_week' => gmdate( 'l', $current ),
            'busy_today'  => $day_busy,
            'slots_count' => count( $slots ),
            'slots'       => $slots,
        ];
        $current = strtotime( '+1 day', $current );
    }

    return $out;
}

/* ============================================================ */
/* wp-admin > Herramientas > Debug Reservas                     */
/* ============================================================ */

add_action( 'admin_menu', function () {
    add_management_page(
        'Debug Reservas',
        'Debug Reservas',
        'manage_options',
        'adrihosan-debug-reservas',
        'adrihosan_admin_page_debug_reservas'
    );
} );

function adrihosan_admin_page_debug_reservas() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'No tienes permisos.' );
    }

    $payload = adrihosan_reservas_debug_payload();
    $json    = wp_json_encode( $payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

    echo '<div class="wrap">';
    echo '<h1>Debug Reservas - Google Calendar</h1>';
    echo '<p>Diagnostico en vivo del token de Google y de la respuesta freeBusy. Pega este JSON en el chat con Claude para diagnosticar.</p>';
    echo '<p><strong>Resumen rapido:</strong></p>';
    echo '<ul style="margin-left:20px;">';
    echo '<li>Refresh OK: <strong>' . ( ! empty( $payload['token_refresh']['ok'] ) ? 'SI' : 'NO' ) . '</strong></li>';
    if ( isset( $payload['freebusy_test']['ok'] ) ) {
        echo '<li>FreeBusy OK: <strong>' . ( $payload['freebusy_test']['ok'] ? 'SI' : 'NO' ) . '</strong></li>';
        if ( $payload['freebusy_test']['ok'] ) {
            echo '<li>Eventos ocupados (7 dias): <strong>' . intval( $payload['freebusy_test']['busy_count'] ) . '</strong></li>';
        }
    }
    if ( ! empty( $payload['slots_generated'] ) ) {
        $total_slots = 0;
        foreach ( $payload['slots_generated'] as $d ) {
            $total_slots += intval( $d['slots_count'] );
        }
        echo '<li>Slots totales generados (7 dias): <strong>' . $total_slots . '</strong></li>';
    }
    echo '<li>Zona horaria WP: <strong>' . esc_html( $payload['wp_timezone'] ) . '</strong></li>';
    echo '</ul>';
    echo '<h2>JSON completo</h2>';
    echo '<textarea readonly style="width:100%;height:500px;font-family:monospace;font-size:12px;">' . esc_textarea( $json ) . '</textarea>';
    echo '</div>';
}
