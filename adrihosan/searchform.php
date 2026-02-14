<?php
/**
 * Search form
 */

global $post;

$page_blog = get_option('dw-op-blog-page');

if ( 'post' == get_post_type() || $page_blog == get_the_ID() || is_search() ) {
	$post_type = 'post';
	$placeholder = __('Buscar en el blog...','dw');
	$text = __('Buscar en el blog:','dw');
} else {
	$post_type = 'product';
	$placeholder = __('Buscar...','dw');
	$text = __('Buscar:','dw');
}
?>

<div class="site-search">

	<div class="search-button"><img src="<?php echo get_theme_file_uri('/img/search.png');?>"></div>
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) );?>">
		<label>
			<span class="screen-reader-text" for="s"><?php echo $text;?></span>
			<input type="search" class="search-field" placeholder="<?php echo $placeholder;?>" value="<?php echo get_search_query();?>" name="s">
			<input type="hidden" name="post_type" value="<?php echo $post_type;?>">
		</label>
		<button type="submit" class="search-submit" value=""><img src="<?php echo get_theme_file_uri('/img/search.png');?>"></button>
	</form>

</div>
