<?php
/**
 * Google OAuth2 Token Management
 *
 * Required constants in wp-config.php:
 *   ADRIA_GOOGLE_CLIENT_ID
 *   ADRIA_GOOGLE_CLIENT_SECRET
 *   ADRIA_GOOGLE_REFRESH_TOKEN
 *   ADRIA_GOOGLE_CALENDAR_ID  (default: comercial@adrihosan.com)
 */

function adrihosan_reservas_get_calendar_id() {
    return defined( 'ADRIA_GOOGLE_CALENDAR_ID' )
        ? ADRIA_GOOGLE_CALENDAR_ID
        : 'comercial@adrihosan.com';
}

function adrihosan_reservas_get_access_token( $force_refresh = false ) {
    if ( ! $force_refresh ) {
        $cached = get_transient( 'adria_google_access_token' );
        if ( $cached ) {
            return $cached;
        }
    } else {
        delete_transient( 'adria_google_access_token' );
    }

    $client_id     = defined( 'ADRIA_GOOGLE_CLIENT_ID' ) ? ADRIA_GOOGLE_CLIENT_ID : '';
    $client_secret = defined( 'ADRIA_GOOGLE_CLIENT_SECRET' ) ? ADRIA_GOOGLE_CLIENT_SECRET : '';
    $refresh_token = defined( 'ADRIA_GOOGLE_REFRESH_TOKEN' ) ? ADRIA_GOOGLE_REFRESH_TOKEN : '';

    if ( empty( $client_id ) || empty( $client_secret ) || empty( $refresh_token ) ) {
        return new WP_Error( 'missing_credentials', 'Google OAuth2 credentials not configured in wp-config.php' );
    }

    $response = wp_remote_post( 'https://oauth2.googleapis.com/token', [
        'body'    => [
            'client_id'     => $client_id,
            'client_secret' => $client_secret,
            'refresh_token' => $refresh_token,
            'grant_type'    => 'refresh_token',
        ],
        'timeout' => 15,
    ] );

    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );
    $body = json_decode( wp_remote_retrieve_body( $response ), true );

    if ( $code < 200 || $code >= 300 || empty( $body['access_token'] ) ) {
        return new WP_Error(
            'token_refresh_failed',
            'Could not refresh Google access token',
            [ 'status' => $code, 'body' => $body ]
        );
    }

    $expires_in = isset( $body['expires_in'] ) ? (int) $body['expires_in'] - 300 : 55 * MINUTE_IN_SECONDS;
    set_transient( 'adria_google_access_token', $body['access_token'], $expires_in );

    return $body['access_token'];
}
