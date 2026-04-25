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
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(50) NOT NULL,
        visit_type VARCHAR(20) NOT NULL,
        start_date DATE NOT NULL,
        start_time VARCHAR(10) NOT NULL,
        needs TEXT,
        reminder_24h_sent TINYINT(1) NOT NULL DEFAULT 0,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY idx_start (start_date, start_time),
        KEY idx_reminder (reminder_24h_sent, start_date)
    ) {$charset};";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql );
}

register_activation_hook( __FILE__, 'adrihosan_bookings_create_table' );

add_action( 'after_switch_theme', 'adrihosan_bookings_create_table' );

function adrihosan_bookings_maybe_create_table() {
    if ( get_option( 'adrihosan_bookings_db_version' ) !== '1.0' ) {
        adrihosan_bookings_create_table();
        update_option( 'adrihosan_bookings_db_version', '1.0' );
    }
}
add_action( 'init', 'adrihosan_bookings_maybe_create_table' );

function adrihosan_bookings_save( $data ) {
    global $wpdb;
    $table = adrihosan_bookings_table_name();

    return $wpdb->insert( $table, [
        'name'       => $data['name'],
        'email'      => $data['email'],
        'phone'      => $data['phone'],
        'visit_type' => $data['visitType'],
        'start_date' => $data['startDate'],
        'start_time' => $data['startTime'],
        'needs'      => $data['needs'],
    ], [ '%s', '%s', '%s', '%s', '%s', '%s', '%s' ] );
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
