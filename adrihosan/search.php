<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Adrihosan
 */

get_header();

$image = get_option('dw-op-post-title-image');

?>

	<main id="primary" class="site-main page-blog">

		<?php if ( have_posts() ) { ?>

			<header class="page-header">

				<div class="title-image full-width">
					<div class="wp-block-column">
						<img src="<?php echo $image; ?>">
					</div>
					<div class="wp-block-column">
					</div>
				</div>

				<div class="blog-title">
					<div class="wp-block-group__inner-container">
						<h1 class="page-title search">
							<?php
							printf( esc_html__( 'Resultados búsqueda: %s', 'adrihosan' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</div>
				</div>

			</header><!-- .page-header -->

			<div class="last-posts">

				<div class="posts-grid">
					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', 'search' );
					}
					?>
				</div>

				<?php
				global $wp_query;
				$number = get_option( 'posts_per_page' ) ? get_option( 'posts_per_page' ) : 9;
				if ($wp_query->found_posts > $number) {
					?>
					<div class="dw-loadmore-posts"><?php _e('Ver <strong>más posts</strong>','dw'); ?></div>
					<?php
					$search_s = get_search_query();
					dw_script_loadmore_posts($wp_query->found_posts, $cat_id, $search_s);
				}
				?>
			</div>
			<?php

		} else {

			get_template_part( 'template-parts/content', 'none' );

		}
		?>

	</main><!-- #main -->

<?php
get_footer();