<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Adrihosan
 */


if ( is_singular() ) {

	$image = get_option('dw-op-post-title-image');

	?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="post-columns full-width">
				<div class="title-image">
					<img src="<?php echo $image; ?>">
				</div>
				<div class="thumbnail">
					<?php adrihosan_post_thumbnail(); ?>
				</div>
			</div>
			<div class="entry-title">
				<div class="entry-title-content">
					<?php	the_title( '<h1>', '</h1>' ); ?>
				</div>
			</div>
			<?php
			$categories=get_the_category();
			if ($categories) $category=$categories[0]->name;
			else $category='';
			$cat_id = get_term_by('name',$category,'category');
			$cat_permalink = get_category_link($cat_id);
			?>
			<div class="category"><a href="<?php echo $cat_permalink;?>">
				<?php echo $category;?>
			</a></div>
			<div class="entry-meta">
				<?php
				adrihosan_posted_on();
				adrihosan_posted_by();
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->



		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'adrihosan' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			?>
		</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->

	<?php

} else {

	global $post;
	 
	echo dw_single_post( $post );

}