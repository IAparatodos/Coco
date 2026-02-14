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

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			$page_id = get_option('dw-op-blog-page');
			$page_link = $page_id ? get_page_link($page_id) : '';

			// Added by other
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'adrihosan' ) );
			// ---------------

			?>
			<div class="post-footer">
				<div class="go-to-blog"><a href="<?php echo $page_link;?>">
					<?php _e('<strong>Volver</strong> al Blog','adrihosan'); ?>
				</a></div>
				<div class="social-media">
					<?php _e('<strong>Compartir</strong> Post','adrihosan'); ?>
					<?php echo do_shortcode('[addtoany]'); ?>
				</div>
			</div>
			
			<!-- Added by other -->
			<div class="wp-block-tag-cloud"><?php echo $tags_list;?></div>
			<!--  -->

			<div class="related-posts full-width">
				<div class="title"><?php _e('Post relacionados','dw'); ?></div>
				<?php dw_related_posts();?>
			</div>
			<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
