<?php
/**
 * Google Calendar API wrappers
 * All calls happen server-side — tokens never reach the frontend.
 *
 * Si Google responde 401 (token cacheado invalidado) se borra el transient
 * y se reintenta UNA vez con un access_token fresco.
 */

function adrihosan_google_calendar_freebusy( $calendar_id, $time_min, $time_max, $access_token ) {
    $do_request = function ( $token ) use ( $calendar_id, $time_min, $time_max ) {
        return wp_remote_post( 'https://www.googleapis.com/calendar/v3/freeBusy', [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer ' . $token,
            ],
            'body'    => wp_json_encode( [
                'timeMin' => $time_min,
                'timeMax' => $time_max,
                'items'   => [ [ 'id' => $calendar_id ] ],
            ] ),
            'timeout' => 20,
        ] );
    };

    $response = $do_request( $access_token );
    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );

    if ( $code === 401 ) {
        $fresh = adrihosan_reservas_get_access_token( true );
        if ( is_wp_error( $fresh ) ) {
            return $fresh;
        }
        $response = $do_request( $fresh );
        if ( is_wp_error( $response ) ) {
            return $response;
        }
        $code = wp_remote_retrieve_response_code( $response );
    }

    $body = wp_remote_retrieve_body( $response );
    if ( $code < 200 || $code >= 300 ) {
        return new WP_Error( 'freebusy_failed', $body, [ 'status' => $code ] );
    }

    $data = json_decode( $body, true );
    return $data['calendars'][ $calendar_id ]['busy'] ?? [];
}

function adrihosan_google_calendar_create_event( $calendar_id, $event, $access_token ) {
    $do_request = function ( $token ) use ( $calendar_id, $event ) {
        return wp_remote_post(
            "https://www.googleapis.com/calendar/v3/calendars/" . urlencode( $calendar_id ) . "/events",
            [
                'headers' => [
                    'Content-Type'  => 'application/json',
                    'Authorization' => 'Bearer ' . $token,
                ],
                'body'    => wp_json_encode( $event ),
                'timeout' => 20,
            ]
        );
    };

    $response = $do_request( $access_token );
    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );

    if ( $code === 401 ) {
        $fresh = adrihosan_reservas_get_access_token( true );
        if ( is_wp_error( $fresh ) ) {
            return $fresh;
        }
        $response = $do_request( $fresh );
        if ( is_wp_error( $response ) ) {
            return $response;
        }
        $code = wp_remote_retrieve_response_code( $response );
    }

    $body = wp_remote_retrieve_body( $response );
    if ( $code < 200 || $code >= 300 ) {
        return new WP_Error( 'create_event_failed', $body, [ 'status' => $code ] );
    }

    return json_decode( $body, true );
}

function adrihosan_google_calendar_delete_event( $calendar_id, $event_id, $access_token ) {
    $do_request = function ( $token ) use ( $calendar_id, $event_id ) {
        return wp_remote_request(
            "https://www.googleapis.com/calendar/v3/calendars/" . urlencode( $calendar_id ) . "/events/" . urlencode( $event_id ),
            [
                'method'  => 'DELETE',
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'timeout' => 20,
            ]
        );
    };

    $response = $do_request( $access_token );
    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );

    if ( $code === 401 ) {
        $fresh = adrihosan_reservas_get_access_token( true );
        if ( is_wp_error( $fresh ) ) {
            return $fresh;
        }
        $response = $do_request( $fresh );
        if ( is_wp_error( $response ) ) {
            return $response;
        }
        $code = wp_remote_retrieve_response_code( $response );
    }

    if ( $code >= 200 && $code < 300 ) {
        return true;
    }

    return new WP_Error( 'delete_event_failed', wp_remote_retrieve_body( $response ), [ 'status' => $code ] );
}
