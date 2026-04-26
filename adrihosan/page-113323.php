<?php
/**
 * Template Name: Contacto Adrihosan
 *
 * El CSS (page-contacto.css) y el JS (reservas-calendar.js) se encolan via
 * wp_enqueue_scripts dentro de adrihosan_cargar_css_categoria() en
 * functions.php, detectando con is_page_template('page-113323.php') o
 * is_page(113323). Eso garantiza compatibilidad con LiteSpeed Cache.
 */

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
