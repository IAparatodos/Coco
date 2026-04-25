<?php
/**
 * Pipedrive CRM Integration
 *
 * Required in wp-config.php:
 *   ADRIA_PIPEDRIVE_API_TOKEN
 *
 * Optional:
 *   ADRIA_PIPEDRIVE_PIPELINE_ID   (pipeline donde crear el deal)
 *   ADRIA_PIPEDRIVE_STAGE_ID      (stage inicial del deal)
 *   ADRIA_PIPEDRIVE_OWNER_ID      (usuario asignado)
 *   ADRIA_PIPEDRIVE_LABEL_PRESENCIAL  (label para visitas presenciales, ej: "Visita Showroom")
 *   ADRIA_PIPEDRIVE_LABEL_VIRTUAL     (label para visitas virtuales, ej: "Web/Visita Showroom")
 */

function adrihosan_pipedrive_api_token() {
    return defined( 'ADRIA_PIPEDRIVE_API_TOKEN' ) ? ADRIA_PIPEDRIVE_API_TOKEN : '';
}

function adrihosan_pipedrive_request( $method, $endpoint, $body = null ) {
    $token = adrihosan_pipedrive_api_token();
    if ( empty( $token ) ) {
        return new WP_Error( 'pipedrive_no_token', 'ADRIA_PIPEDRIVE_API_TOKEN not configured' );
    }

    $url  = 'https://api.pipedrive.com/v1' . $endpoint;
    $url  = add_query_arg( 'api_token', $token, $url );
    $args = [
        'method'  => $method,
        'headers' => [ 'Content-Type' => 'application/json' ],
        'timeout' => 20,
    ];

    if ( $body !== null ) {
        $args['body'] = wp_json_encode( $body );
    }

    $response = wp_remote_request( $url, $args );

    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );
    $data = json_decode( wp_remote_retrieve_body( $response ), true );

    if ( $code < 200 || $code >= 300 ) {
        return new WP_Error( 'pipedrive_api_error', $data['error'] ?? 'API error', [ 'status' => $code ] );
    }

    return $data;
}

function adrihosan_pipedrive_format_phone( $phone ) {
    $phone = preg_replace( '/[^\d+]/', '', $phone );

    if ( strpos( $phone, '+34' ) === 0 ) {
        return $phone;
    }
    if ( strpos( $phone, '0034' ) === 0 ) {
        return '+34' . substr( $phone, 4 );
    }
    if ( strpos( $phone, '34' ) === 0 && strlen( $phone ) >= 11 ) {
        return '+' . $phone;
    }
    if ( preg_match( '/^[6-9]\d{8}$/', $phone ) ) {
        return '+34' . $phone;
    }
    return '+34' . $phone;
}

function adrihosan_pipedrive_search_person_by_email( $email ) {
    $result = adrihosan_pipedrive_request( 'GET', '/persons/search?term=' . urlencode( $email ) . '&fields=email&limit=1' );
    if ( is_wp_error( $result ) ) {
        return null;
    }
    $items = $result['data']['items'] ?? [];
    return ! empty( $items ) ? $items[0]['item'] : null;
}

function adrihosan_pipedrive_search_person_by_phone( $phone ) {
    $formatted = adrihosan_pipedrive_format_phone( $phone );
    $result    = adrihosan_pipedrive_request( 'GET', '/persons/search?term=' . urlencode( $formatted ) . '&fields=phone&limit=1' );
    if ( is_wp_error( $result ) ) {
        return null;
    }
    $items = $result['data']['items'] ?? [];
    return ! empty( $items ) ? $items[0]['item'] : null;
}

function adrihosan_pipedrive_find_person( $email, $phone ) {
    $person = adrihosan_pipedrive_search_person_by_email( $email );
    if ( $person ) {
        return $person;
    }
    return adrihosan_pipedrive_search_person_by_phone( $phone );
}

function adrihosan_pipedrive_create_person( $name, $email, $phone ) {
    $formatted_phone = adrihosan_pipedrive_format_phone( $phone );

    $body = [
        'name'  => $name,
        'email' => [ [ 'value' => $email, 'primary' => true, 'label' => 'work' ] ],
        'phone' => [ [ 'value' => $formatted_phone, 'primary' => true, 'label' => 'mobile' ] ],
    ];

    $owner_id = defined( 'ADRIA_PIPEDRIVE_OWNER_ID' ) ? (int) ADRIA_PIPEDRIVE_OWNER_ID : 0;
    if ( $owner_id ) {
        $body['owner_id'] = $owner_id;
    }

    $result = adrihosan_pipedrive_request( 'POST', '/persons', $body );
    if ( is_wp_error( $result ) ) {
        return null;
    }

    return $result['data'] ?? null;
}

function adrihosan_pipedrive_create_deal( $person_id, $data ) {
    $visit_label = $data['visitType'] === 'presencial' ? 'Visita Showroom' : 'Web/Visita Showroom';

    if ( $data['visitType'] === 'presencial' && defined( 'ADRIA_PIPEDRIVE_LABEL_PRESENCIAL' ) ) {
        $visit_label = ADRIA_PIPEDRIVE_LABEL_PRESENCIAL;
    }
    if ( $data['visitType'] === 'virtual' && defined( 'ADRIA_PIPEDRIVE_LABEL_VIRTUAL' ) ) {
        $visit_label = ADRIA_PIPEDRIVE_LABEL_VIRTUAL;
    }

    $title = sprintf(
        '%s – %s – %s',
        $visit_label,
        $data['name'],
        $data['startDate']
    );

    $body = [
        'title'               => $title,
        'person_id'           => $person_id,
        'expected_close_date' => $data['startDate'],
    ];

    $pipeline_id = defined( 'ADRIA_PIPEDRIVE_PIPELINE_ID' ) ? (int) ADRIA_PIPEDRIVE_PIPELINE_ID : 0;
    $stage_id    = defined( 'ADRIA_PIPEDRIVE_STAGE_ID' ) ? (int) ADRIA_PIPEDRIVE_STAGE_ID : 0;
    $owner_id    = defined( 'ADRIA_PIPEDRIVE_OWNER_ID' ) ? (int) ADRIA_PIPEDRIVE_OWNER_ID : 0;

    if ( $pipeline_id ) {
        $body['pipeline_id'] = $pipeline_id;
    }
    if ( $stage_id ) {
        $body['stage_id'] = $stage_id;
    }
    if ( $owner_id ) {
        $body['owner_id'] = $owner_id;
    }

    $result = adrihosan_pipedrive_request( 'POST', '/deals', $body );
    if ( is_wp_error( $result ) ) {
        return null;
    }

    return $result['data'] ?? null;
}

function adrihosan_pipedrive_add_note( $deal_id, $person_id, $data ) {
    $formatted_phone = adrihosan_pipedrive_format_phone( $data['phone'] );
    $tipo_label      = $data['visitType'] === 'presencial' ? 'Presencial (Showroom)' : 'Virtual (Videollamada)';

    $content = sprintf(
        "<b>Reserva de visita desde la web</b>\n\n" .
        "<b>Nombre:</b> %s\n" .
        "<b>Teléfono:</b> %s\n" .
        "<b>Email:</b> %s\n" .
        "<b>Tipo:</b> %s\n" .
        "<b>Fecha:</b> %s a las %s\n" .
        "<b>Qué quiere ver:</b> %s",
        esc_html( $data['name'] ),
        esc_html( $formatted_phone ),
        esc_html( $data['email'] ),
        $tipo_label,
        esc_html( $data['startDate'] ),
        esc_html( $data['startTime'] ),
        esc_html( $data['needs'] )
    );

    $body = [
        'content'   => $content,
        'deal_id'   => $deal_id,
        'person_id' => $person_id,
        'pinned_to_deal_flag' => 1,
    ];

    adrihosan_pipedrive_request( 'POST', '/notes', $body );
}

/**
 * Entry point: called after a successful booking.
 * 1. Search person by email, then phone
 * 2. Create person if not found
 * 3. Create deal
 * 4. Add note with all details
 */
function adrihosan_pipedrive_process_booking( $data ) {
    if ( empty( adrihosan_pipedrive_api_token() ) ) {
        return;
    }

    $person = adrihosan_pipedrive_find_person( $data['email'], $data['phone'] );

    if ( $person ) {
        $person_id = $person['id'];
    } else {
        $new_person = adrihosan_pipedrive_create_person( $data['name'], $data['email'], $data['phone'] );
        if ( ! $new_person ) {
            return;
        }
        $person_id = $new_person['id'];
    }

    $deal = adrihosan_pipedrive_create_deal( $person_id, $data );
    if ( ! $deal ) {
        return;
    }

    adrihosan_pipedrive_add_note( $deal['id'], $person_id, $data );
}
