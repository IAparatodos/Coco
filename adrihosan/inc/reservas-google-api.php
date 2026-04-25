<?php
/**
 * Google Calendar API wrappers
 * All calls happen server-side — tokens never reach the frontend.
 */

function adrihosan_google_calendar_freebusy( $calendar_id, $time_min, $time_max, $access_token ) {
    $response = wp_remote_post( 'https://www.googleapis.com/calendar/v3/freeBusy', [
        'headers' => [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $access_token,
        ],
        'body'    => wp_json_encode( [
            'timeMin' => $time_min,
            'timeMax' => $time_max,
            'items'   => [ [ 'id' => $calendar_id ] ],
        ] ),
        'timeout' => 20,
    ] );

    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );
    $body = wp_remote_retrieve_body( $response );
    if ( $code < 200 || $code >= 300 ) {
        return new WP_Error( 'freebusy_failed', $body, [ 'status' => $code ] );
    }

    $data = json_decode( $body, true );
    return $data['calendars'][ $calendar_id ]['busy'] ?? [];
}

function adrihosan_google_calendar_create_event( $calendar_id, $event, $access_token ) {
    $response = wp_remote_post(
        "https://www.googleapis.com/calendar/v3/calendars/" . urlencode( $calendar_id ) . "/events",
        [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer ' . $access_token,
            ],
            'body'    => wp_json_encode( $event ),
            'timeout' => 20,
        ]
    );

    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );
    $body = wp_remote_retrieve_body( $response );
    if ( $code < 200 || $code >= 300 ) {
        return new WP_Error( 'create_event_failed', $body, [ 'status' => $code ] );
    }

    return json_decode( $body, true );
}
