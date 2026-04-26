<?php
/**
 * Pipedrive CRM Integration
 *
 * Required in wp-config.php:
 *   ADRIA_PIPEDRIVE_API_TOKEN
 *
 * Optional:
 *   ADRIA_PIPEDRIVE_PIPELINE_ID       (pipeline "Leds web")
 *   ADRIA_PIPEDRIVE_STAGE_PRESENCIAL  (stage ID de "Visita Showroom")
 *   ADRIA_PIPEDRIVE_STAGE_VIRTUAL     (stage ID de "Visita Virtual")
 *   ADRIA_PIPEDRIVE_OWNER_ID          (usuario asignado)
 */

function adrihosan_pipedrive_api_token() {
    return defined( 'ADRIA_PIPEDRIVE_API_TOKEN' ) ? ADRIA_PIPEDRIVE_API_TOKEN : '';
}

/**
 * Buffer de logs de la integracion durante la request actual.
 * Si al terminar process_booking() hay algun error, se envia el buffer
 * por email al admin para diagnostico (asi no hace falta mirar el log
 * del servidor).
 */
function &adrihosan_pipedrive_log_buffer() {
    static $buf = [];
    return $buf;
}

function adrihosan_pipedrive_log( $msg, $extra = null, $is_error = false ) {
    $line = '[Adrihosan Pipedrive] ' . $msg;
    if ( $extra !== null ) {
        $line .= ' :: ' . wp_json_encode( $extra );
    }
    error_log( $line );

    $buf =& adrihosan_pipedrive_log_buffer();
    $buf[] = [
        'time'     => gmdate( 'H:i:s' ),
        'msg'      => $msg,
        'extra'    => $extra,
        'is_error' => (bool) $is_error,
    ];
}

function adrihosan_pipedrive_send_error_email() {
    $buf = adrihosan_pipedrive_log_buffer();
    if ( empty( $buf ) ) {
        return;
    }
    $has_error = false;
    foreach ( $buf as $entry ) {
        if ( ! empty( $entry['is_error'] ) ) {
            $has_error = true;
            break;
        }
    }
    if ( ! $has_error ) {
        return;
    }

    $body = "La integracion con Pipedrive ha fallado tras una reserva.\n\n";
    $body .= "Traza completa de la request:\n\n";
    foreach ( $buf as $entry ) {
        $body .= '[' . $entry['time'] . '] ' . ( $entry['is_error'] ? 'ERROR: ' : '' ) . $entry['msg'] . "\n";
        if ( $entry['extra'] !== null ) {
            $body .= '  ' . wp_json_encode( $entry['extra'] ) . "\n";
        }
    }
    $body .= "\nLa reserva en si ha funcionado (los emails al cliente y a comercial@ se han enviado),";
    $body .= "\nsolo falta crear la persona/deal en Pipedrive manualmente o reintentar.";

    wp_mail( 'comercial@adrihosan.com', '[Adrihosan] Fallo Pipedrive en reserva', $body );

    // Limpiar buffer para que no se reenvie en otra request
    $buf =& adrihosan_pipedrive_log_buffer();
    $buf = [];
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
        adrihosan_pipedrive_log( 'HTTP transport error in ' . $method . ' ' . $endpoint, [
            'msg' => $response->get_error_message(),
        ], true );
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );
    $raw  = wp_remote_retrieve_body( $response );
    $data = json_decode( $raw, true );

    if ( $code < 200 || $code >= 300 ) {
        adrihosan_pipedrive_log( 'API error ' . $code . ' in ' . $method . ' ' . $endpoint, [
            'response' => is_array( $data ) ? $data : substr( $raw, 0, 500 ),
            'sent'     => $body,
        ], true );
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
    /* exact_match=true evita falsos positivos del search difuso de
     * Pipedrive (que devolveria coincidencias parciales). El email es
     * unico por naturaleza, asi que solo nos vale el match exacto. */
    $result = adrihosan_pipedrive_request(
        'GET',
        '/persons/search?term=' . urlencode( $email ) . '&fields=email&exact_match=true&limit=1'
    );
    if ( is_wp_error( $result ) ) {
        return null;
    }
    $items = $result['data']['items'] ?? [];
    return ! empty( $items ) ? $items[0]['item'] : null;
}

function adrihosan_pipedrive_find_person( $email, $phone ) {
    /* Solo matcheamos por email (clave primaria de facto). El fallback
     * por telefono que habia antes generaba falsos positivos: dos
     * personas distintas pueden compartir telefono (parejas, empresas,
     * datos de prueba) y la reserva se enganchaba a la persona
     * equivocada. Si no hay email match -> crear persona nueva. */
    return adrihosan_pipedrive_search_person_by_email( $email );
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
    $visit_label = $data['visitType'] === 'presencial' ? 'Visita Showroom' : 'Visita Virtual';

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
    $owner_id    = defined( 'ADRIA_PIPEDRIVE_OWNER_ID' ) ? (int) ADRIA_PIPEDRIVE_OWNER_ID : 0;

    if ( $data['visitType'] === 'presencial' && defined( 'ADRIA_PIPEDRIVE_STAGE_PRESENCIAL' ) ) {
        $body['stage_id'] = (int) ADRIA_PIPEDRIVE_STAGE_PRESENCIAL;
    } elseif ( $data['visitType'] === 'virtual' && defined( 'ADRIA_PIPEDRIVE_STAGE_VIRTUAL' ) ) {
        $body['stage_id'] = (int) ADRIA_PIPEDRIVE_STAGE_VIRTUAL;
    }

    if ( $pipeline_id ) {
        $body['pipeline_id'] = $pipeline_id;
    }
    if ( $owner_id ) {
        // Pipedrive API v1: en /deals el campo de propietario es user_id,
        // no owner_id (que es el de /persons). Mezclar los nombres devuelve
        // 'Invalid field(s) in the payload: owner_id' (HTTP 400).
        $body['user_id'] = $owner_id;
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
        adrihosan_pipedrive_log( 'Aborted: ADRIA_PIPEDRIVE_API_TOKEN not defined in wp-config.php', null, true );
        adrihosan_pipedrive_send_error_email();
        return;
    }

    adrihosan_pipedrive_log( 'Processing booking', [
        'email' => $data['email'] ?? null,
        'phone' => $data['phone'] ?? null,
    ] );

    $person = adrihosan_pipedrive_find_person( $data['email'], $data['phone'] );

    if ( $person ) {
        $person_id = $person['id'];
        adrihosan_pipedrive_log( 'Found existing person', [ 'person_id' => $person_id ] );
    } else {
        $new_person = adrihosan_pipedrive_create_person( $data['name'], $data['email'], $data['phone'] );
        if ( ! $new_person ) {
            adrihosan_pipedrive_log( 'Failed to create person, aborting', null, true );
            adrihosan_pipedrive_send_error_email();
            return;
        }
        $person_id = $new_person['id'];
        adrihosan_pipedrive_log( 'Created new person', [ 'person_id' => $person_id ] );
    }

    $deal = adrihosan_pipedrive_create_deal( $person_id, $data );
    if ( ! $deal ) {
        adrihosan_pipedrive_log( 'Failed to create deal, aborting', null, true );
        adrihosan_pipedrive_send_error_email();
        return;
    }
    adrihosan_pipedrive_log( 'Created deal', [ 'deal_id' => $deal['id'] ] );

    adrihosan_pipedrive_add_note( $deal['id'], $person_id, $data );
    adrihosan_pipedrive_log( 'Added note to deal' );

    // Por si alguna sub-llamada (busqueda, nota) tuvo error de API aunque
    // el flujo principal haya seguido: enviar email igualmente.
    adrihosan_pipedrive_send_error_email();
}
