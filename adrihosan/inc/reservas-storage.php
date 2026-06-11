<?php
/**
 * Local booking storage
 *
 * Stores bookings in a custom table so WP-Cron can query
 * upcoming appointments and send reminders.
 */

function adrihosan_bookings_table_name() {
    global $wpdb;
    return $wpdb->prefix . 'adrihosan_bookings';
}

function adrihosan_bookings_create_table() {
    $table = adrihosan_bookings_table_name();
    $charset = '';

    global $wpdb;
    if ( ! empty( $wpdb->charset ) ) {
        $charset = "DEFAULT CHARACTER SET {$wpdb->charset}";
    }
    if ( ! empty( $wpdb->collate ) ) {
        $charset .= " COLLATE {$wpdb->collate}";
    }

    $sql = "CREATE TABLE IF NOT EXISTS {$table} (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        cancellation_token VARCHAR(64) NOT NULL,
        google_event_id VARCHAR(255) DEFAULT NULL,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(50) NOT NULL,
        visit_type VARCHAR(20) NOT NULL,
        start_date DATE NOT NULL,
        start_time VARCHAR(10) NOT NULL,
        needs TEXT,
        status VARCHAR(20) NOT NULL DEFAULT 'confirmed',
        cancelled_reason TEXT DEFAULT NULL,
        cancelled_at DATETIME DEFAULT NULL,
        reminder_24h_sent TINYINT(1) NOT NULL DEFAULT 0,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY idx_token (cancellation_token),
        KEY idx_start (start_date, start_time),
        KEY idx_reminder (reminder_24h_sent, start_date),
        KEY idx_status (status)
    ) {$charset};";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
}

register_activation_hook( __FILE__, 'adrihosan_bookings_create_table' );

add_action( 'after_switch_theme', 'adrihosan_bookings_create_table' );

function adrihosan_bookings_maybe_create_table() {
    if ( get_option( 'adrihosan_bookings_db_version' ) !== '1.1' ) {
        adrihosan_bookings_create_table();
        update_option( 'adrihosan_bookings_db_version', '1.1' );
    }
}
add_action( 'init', 'adrihosan_bookings_maybe_create_table' );

function adrihosan_bookings_generate_token() {
    return bin2hex( random_bytes( 32 ) );
}

function adrihosan_bookings_save( $data, $google_event_id = null ) {
    global $wpdb;
    $table = adrihosan_bookings_table_name();
    $token = adrihosan_bookings_generate_token();

    $wpdb->insert( $table, [
        'cancellation_token' => $token,
        'google_event_id'    => $google_event_id,
        'name'               => $data['name'],
        'email'              => $data['email'],
        'phone'              => $data['phone'],
        'visit_type'         => $data['visitType'],
        'start_date'         => $data['startDate'],
        'start_time'         => $data['startTime'],
        'needs'              => $data['needs'],
        'status'             => 'confirmed',
    ], [ '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ] );

    return $token;
}

function adrihosan_bookings_get_by_token( $token ) {
    global $wpdb;
    $table = adrihosan_bookings_table_name();

    return $wpdb->get_row( $wpdb->prepare(
        "SELECT * FROM {$table} WHERE cancellation_token = %s LIMIT 1",
        $token
    ) );
}

function adrihosan_bookings_cancel( $token, $reason ) {
    global $wpdb;
    $table = adrihosan_bookings_table_name();

    return $wpdb->update(
        $table,
        [
            'status'           => 'cancelled',
            'cancelled_reason' => $reason,
            'cancelled_at'     => current_time( 'mysql' ),
        ],
        [ 'cancellation_token' => $token ],
        [ '%s', '%s', '%s' ],
        [ '%s' ]
    );
}

function adrihosan_bookings_cancel_url( $token ) {
    return home_url( '/cancelar-reserva/?token=' . urlencode( $token ) );
}

function adrihosan_bookings_pending_reminders_24h() {
    global $wpdb;
    $table = adrihosan_bookings_table_name();

    $now = new DateTime( 'now', new DateTimeZone( 'Europe/Madrid' ) );
    $from = clone $now;
    $to = clone $now;
    $to->modify( '+25 hours' );

    return $wpdb->get_results( $wpdb->prepare(
        "SELECT * FROM {$table}
         WHERE reminder_24h_sent = 0
           AND status = 'confirmed'
           AND CONCAT(start_date, ' ', start_time, ':00') > %s
           AND CONCAT(start_date, ' ', start_time, ':00') <= %s
         ORDER BY start_date, start_time",
        $from->format( 'Y-m-d H:i:s' ),
        $to->format( 'Y-m-d H:i:s' )
    ) );
}

function adrihosan_bookings_mark_reminder_sent( $booking_id ) {
    global $wpdb;
    $table = adrihosan_bookings_table_name();

    $wpdb->update(
        $table,
        [ 'reminder_24h_sent' => 1 ],
        [ 'id' => $booking_id ],
        [ '%d' ],
        [ '%d' ]
    );
}
