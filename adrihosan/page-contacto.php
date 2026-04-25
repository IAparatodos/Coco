<?php
/**
 * Template for Contact page (page ID 113323, slug "contacto")
 * WordPress automatically uses this file for /contacto/
 */

$css_path = get_stylesheet_directory() . '/assets/css/page-contacto.css';
if ( file_exists( $css_path ) ) {
    wp_enqueue_style(
        'adrihosan-page-contacto',
        get_stylesheet_directory_uri() . '/assets/css/page-contacto.css',
        [],
        filemtime( $css_path )
    );
}

$js_path = get_stylesheet_directory() . '/assets/js/reservas-calendar.js';
if ( file_exists( $js_path ) && function_exists( 'adrihosan_reservas_duration' ) ) {
    wp_enqueue_script(
        'adrihosan-reservas-calendar',
        get_stylesheet_directory_uri() . '/assets/js/reservas-calendar.js',
        [],
        filemtime( $js_path ),
        true
    );
    wp_localize_script( 'adrihosan-reservas-calendar', 'RESERVAS', [
        'restUrl' => esc_url_raw( rest_url( 'adrihosan/v1' ) ),
        'nonce'   => wp_create_nonce( 'wp_rest' ),
        'config'  => [
            'duration'     => adrihosan_reservas_duration(),
            'minAdvance'   => adrihosan_reservas_min_advance_hours(),
            'lastBuffer'   => adrihosan_reservas_last_slot_buffer(),
            'maxWeeks'     => adrihosan_reservas_max_weeks_ahead(),
            'openingHours' => adrihosan_reservas_horarios(),
        ],
    ] );
}

get_header();
?>
<main id="primary" class="site-main contacto-page">
    <?php
    if ( function_exists( 'adrihosan_contacto_contenido' ) ) {
        echo adrihosan_contacto_contenido();
    } else {
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    }
    ?>
</main>
<?php
get_footer();
