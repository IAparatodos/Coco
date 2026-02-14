<?php
/**
 * The template for displaying categoria proyecto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Adrihosan
 */

get_header();

?>

	<main id="primary" class="site-main">

		<?php	if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>

		<?php
		$block_id = get_option('dw-op-proyecto-cat');
		if ($block_id) {
			?>
			<div class="proyecto-container">
				<?php
				$get_block = get_post( $block_id );
				$content = $get_block->post_content;	
				echo apply_filters('the_content', $content);
				?>
			</div>
			<?php
		}

		?>

	</main><!-- #main -->

<?php
get_footer();