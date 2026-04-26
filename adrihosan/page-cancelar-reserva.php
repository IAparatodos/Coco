<?php
/**
 * Template for cancellation page (slug "cancelar-reserva")
 * URL: /cancelar-reserva/?token=XXX
 */

$css_path = get_stylesheet_directory() . '/assets/css/page-cancelar-reserva.css';
if ( file_exists( $css_path ) ) {
    wp_enqueue_style(
        'adrihosan-cancelar-reserva',
        get_stylesheet_directory_uri() . '/assets/css/page-cancelar-reserva.css',
        [],
        filemtime( $css_path )
    );
}

$js_path = get_stylesheet_directory() . '/assets/js/reservas-cancel.js';
if ( file_exists( $js_path ) ) {
    wp_enqueue_script(
        'adrihosan-reservas-cancel',
        get_stylesheet_directory_uri() . '/assets/js/reservas-cancel.js',
        [],
        filemtime( $js_path ),
        true
    );
    wp_localize_script( 'adrihosan-reservas-cancel', 'CANCELAR', [
        'restUrl' => esc_url_raw( rest_url( 'adrihosan/v1' ) ),
        'token'   => sanitize_text_field( $_GET['token'] ?? '' ),
    ] );
}

get_header();
?>
<main id="primary" class="site-main cancelar-page">

    <section class="cancelar-hero">
        <div class="cancelar-shell">
            <p class="cancelar-eyebrow">Adrihosan &middot; Gestionar cita</p>
            <h1>Cancelar reserva</h1>
        </div>
    </section>

    <section class="cancelar-flow">
        <div class="cancelar-shell">

            <div class="cancelar-panel" id="cancel-loading">
                <p class="cancelar-loading-text">Cargando datos de la reserva...</p>
            </div>

            <div class="cancelar-panel" id="cancel-not-found" hidden>
                <div class="cancelar-icon">&#10007;</div>
                <h2>Reserva no encontrada</h2>
                <p>El enlace no es v&aacute;lido o la reserva ya no existe.</p>
                <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="cancelar-btn">Volver a contacto</a>
            </div>

            <div class="cancelar-panel" id="cancel-already" hidden>
                <div class="cancelar-icon cancelar-icon--info">&#8505;</div>
                <h2>Reserva ya cancelada</h2>
                <p>Esta cita ya fue cancelada anteriormente.</p>
                <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="cancelar-btn">Reservar nueva cita</a>
            </div>

            <div class="cancelar-panel" id="cancel-form-panel" hidden>
                <h2>Detalles de tu cita</h2>
                <div class="cancelar-details" id="cancel-details"></div>
                <form class="cancelar-form" id="cancel-form" novalidate>
                    <label for="cancel-reason">Motivo de la cancelaci&oacute;n</label>
                    <textarea id="cancel-reason" name="reason" placeholder="Cu&eacute;ntanos por qu&eacute; necesitas cancelar tu cita..." rows="4" required></textarea>
                    <div class="cancelar-form-actions">
                        <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="cancelar-btn-outline">Mantener cita</a>
                        <button type="submit" class="cancelar-btn-danger" id="cancel-submit">Cancelar cita</button>
                    </div>
                </form>
            </div>

            <div class="cancelar-panel" id="cancel-success" hidden>
                <div class="cancelar-icon cancelar-icon--ok">&#10003;</div>
                <h2>Cita cancelada</h2>
                <p>Tu cita ha sido cancelada y la hora ha quedado libre. Hemos enviado un email de confirmaci&oacute;n.</p>
                <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="cancelar-btn">Reservar nueva cita</a>
            </div>

        </div>
    </section>
</main>
<?php
get_footer();
