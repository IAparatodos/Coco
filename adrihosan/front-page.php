<?php
/**
 * Template para la portada estática (Home Adrihosan)
 *
 * WordPress usa front-page.php automáticamente cuando hay una
 * página estática configurada como portada en Ajustes > Lectura.
 * No depende de filtros the_content ni de caché de contenido.
 *
 * @package Adrihosan
 */

$home_css_path = get_stylesheet_directory() . '/assets/css/page-home.css';
if ( file_exists( $home_css_path ) ) {
    wp_enqueue_style(
        'adrihosan-page-home',
        get_stylesheet_directory_uri() . '/assets/css/page-home.css',
        array(),
        filemtime( $home_css_path )
    );
}

get_header();
?>

	<main id="primary" class="site-main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php
				if ( function_exists( 'adrihosan_home_contenido' ) ) {
					echo adrihosan_home_contenido();
				} else {
					while ( have_posts() ) :
						the_post();
						the_content();
					endwhile;
				}
				?>
			</div>
		</article>
	</main>

<?php
get_footer();
