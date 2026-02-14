<?php
/**
* The template for custom post type escaparate
*
* @package Adrihosan
*/


get_header();
?>

	<main id="primary" class="site-main">

		<?php	
		// if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); 
		?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
