<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Adrihosan
 */

$page_id = get_option('dw-op-page-404');
if ($page_id) {
	$url = get_page_link($page_id);
	if (wp_redirect($url)) {
		exit;
	}
}


get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found full-width">
			<div class="content-error-404">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Página no encontrada', 'adrihosan' ); ?></h1>
				</header><!-- .page-header -->
				
				<div class="page-content">
					<p><?php esc_html_e( 'Parece que no hemos encontrado lo que buscas. Regresa a la página de inicio', 'adrihosan' ); ?></p>
					
					<a href="<?php echo home_url();?>" class="btn"><?php _e('Inicio', 'adrihosan');?></a>
					
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
