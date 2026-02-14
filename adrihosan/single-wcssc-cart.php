<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Adrihosan
 */

get_header();
?>

	<main id="primary" class="site-main woocommerce-cart wcssc">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', '' );


			?>
			<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
