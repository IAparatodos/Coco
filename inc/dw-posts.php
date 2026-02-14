<?php

/**
 * Functions and Shortcodes for posts
 */

function dw_footer_post( $post ) {
	$post = get_post( $post );
	$show = '';
	$show.= '<div class="footer-post">';
	$show.=   '<a href="' . get_the_permalink( $post ) . '">';
	$show.=     '<div class="date">' . get_the_date( 'j', $post ) . '<span>' .  get_the_date( 'M' , $post ) . '</span></div>';
	$show.=     '<div class="content">';
	$show.=       '<div class="post-title">'.get_the_title( $post ).'</div>';
	$show.=       '<p class="post-excerpt">'.get_the_excerpt( $post ).'</p>';
	$show.=     '</div>';
	$show.=   '</a>';
	$show.= '</div>';
	return $show;
}


// Last 2 posts (cacheado con transient 1 hora)
function dw_last_2_posts() {
	$cached = get_transient('dw_last_2_posts_html');
	if ($cached !== false) {
		return $cached;
	}

	global $post;
	$show = '<div class="footer-posts">';
	$query = array(
		'post_type'     => 'post',
		'orderby'       => 'date',
		'order'         => 'DESC',
		'posts_per_page'=> 2,
		'post_status'   => 'publish',
	);
	$posts = new WP_Query($query);
	if ($posts->have_posts()) {
		$show .= '<div class="posts-footer-grid">';
		while ($posts->have_posts()) {
			$posts->the_post();
			$show .= dw_footer_post($post);
		}
		$show .= '</div>';
	}
	$show .= '</div>';
	wp_reset_postdata();

	set_transient('dw_last_2_posts_html', $show, HOUR_IN_SECONDS);
	return $show;
}

// Invalidar cache de footer posts al publicar/editar/eliminar posts
function dw_invalidate_footer_posts_cache($post_id) {
	if (get_post_type($post_id) === 'post') {
		delete_transient('dw_last_2_posts_html');
	}
}
add_action('save_post', 'dw_invalidate_footer_posts_cache');
add_action('delete_post', 'dw_invalidate_footer_posts_cache');
add_action('trash_post', 'dw_invalidate_footer_posts_cache');



/**
 * Limit excerpt length
 */
function dw_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'dw_excerpt_length');


/**
 * Default image for posts
 */
function dw_default_image() {
	return get_option('dw-op-default-image');
}


/**
 * Archive post
 */
function dw_single_post( $post, $tag = 'h2' ) {
	$post = get_post($post);
	$post_id = $post->ID;
	$post_thumbnail=get_the_post_thumbnail( $post );
	if (!$post_thumbnail) $post_thumbnail='<img src="'.dw_default_image().'">';
	$categories = get_the_category( $post_id );
	if ($categories) $category=$categories[0]->name;
	else $category='';
	$cat = get_term_by('name',$category,'category');
	$cat_permalink = get_category_link($cat);
	$date = get_the_date('F j, Y \a g:i a', $post);
	$author_id = get_post_field ('post_author', $post_id);
	$author = get_the_author_meta( 'nickname' , $author_id ); 
	// $author = get_the_author();
	// Added
	$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'adrihosan' ), '', $post_id );
	// -----
	$show='';
	$show.='<div class="item-post">';
	$show.=  '<div class="post-image"><a href="'.get_the_permalink( $post_id ).'">'.$post_thumbnail.'</a></div>';
	$show.=  '<div>';
	$show.=    '<a href="'.$cat_permalink.'">';
	$show.=      '<div class="post-category">'.$category.'</div>';
	$show.=    '</a>';
	$show.=    '<a href="'.get_the_permalink( $post_id ).'" class="content">';
	$show.=      '<div class="post-date-author">'.$date.' '.__('por','dw').' '.$author.'</div>';
	$show.=      '<' . $tag . ' class="post-title">'.get_the_title( $post_id ).'</' . $tag . '>';
	$show.=      '<p class="post-excerpt">'.get_the_excerpt( $post ).'</p>';
	$show.=    '</a>';
	// Added
	$show.=    '<div class="tags-links">'.$tags_list.'</div>';
	// -----
	$show.=  '</div>';
	$show.='</div>';
	return $show;
}


function dw_blog($args) {
	$number = get_option( 'posts_per_page' ) ? get_option( 'posts_per_page' ) : 9;
	$show='<div class="last-posts">';
	$query=array(
		'post_type'     => 'post',
		'orderby'       => 'date',
		'order'         => 'DESC',
		'posts_per_page'=> $number,
		'post_status'   => 'publish',
	);
	$posts=new WP_Query($query);
	if ($posts->have_posts()) {
		$show.='<div class="posts-grid">';
		while ($posts->have_posts()) {
			$post = $posts->the_post();
			$show.=dw_single_post($post);
		}
		$show.='</div>';
		if ($posts->found_posts > $number) {
			$show.='<div class="dw-loadmore-posts">'.__('Ver <strong>más posts</strong>','dw').'</div>';
			dw_script_loadmore_posts($posts->found_posts);
		}
	}
	$show.='</div>';
	wp_reset_postdata();
	return $show;
}
add_shortcode('dw-blog','dw_blog');


/**
 * Load more button for posts
 */
function dw_script_loadmore_posts( $published_posts, $cat = '', $search_s = '' ) {
	global $post;
	wp_register_script('dw_loadmore_posts',get_template_directory_uri().'/js/dw-loadmore.js', array('jquery'));
	$postsperpage = get_option( 'posts_per_page' ) ? get_option( 'posts_per_page' ) : 9;
	$num_pages=ceil(($published_posts)/$postsperpage);
	wp_localize_script('dw_loadmore_posts','vars', array(
		'ajaxurl'      => site_url().'/wp-admin/admin-ajax.php',
		'current_page' => 1,
		'max_page'     => $num_pages,
		'postsperpage' => $postsperpage,
		'tr_seemore'   => __('Ver <strong>más posts</strong>','dw'),
		'tr_loading'   => __('Cargando...','dw'),
		'cat'          => $cat,
		's'            => $search_s,
	));
	wp_enqueue_script('dw_loadmore_posts');
}

function dw_ajax_loadmore_posts() {
	global $post;
	$query=array(
		'post_type'     => 'post',
		'orderby'       => 'date',
		'order'         => 'DESC',
		'paged'         => $_POST['page'] + 1,
		'posts_per_page'=> $_POST['postsperpage'],
		'post_status'   => 'publish',
	);
	if (isset($_POST['cat']) && !empty($_POST['cat'])) {
		$query['cat'] = $_POST['cat'];
	}
	if (isset($_POST['s']) && !empty($_POST['s'])) {
		$query['s'] = $_POST['s'];
	}
	query_posts($query);
	$show='';
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			$show.=dw_single_post( $post );
		}
		wp_send_json($show);
	}
	wp_die();
}
add_action('wp_ajax_loadmore_posts', 'dw_ajax_loadmore_posts');
add_action('wp_ajax_nopriv_loadmore_posts', 'dw_ajax_loadmore_posts');


/**
 * Comment fields
 * Add placeholder
 */
add_filter( 'comment_form_defaults', 'dw_comment_textarea_placeholder' );
function dw_comment_textarea_placeholder( $args ) {
	$args['comment_field'] = str_replace( 'textarea', 'textarea placeholder="'.__('Tu comentario ...','dw').'"', $args['comment_field'] );
	$args['comment_field'] = str_replace( 'rows="8"', 'rows="3"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_default_fields', 'dw_comment_placeholders' );
function dw_comment_placeholders( $fields ) {
	$fields['author'] = str_replace(
		'<input',
		'<input placeholder="'
				. __('Nombre','dw')
				. '"',
		$fields['author']
	);
	$fields['email'] = str_replace(
		'<input',
		'<input placeholder="'
			. __('Correo electrónico','dw')
			. '"',
		$fields['email']
	);
	$fields['url'] = str_replace(
		'<input',
		'<input placeholder="'
			.__('Website','dw')
			.'"',
		$fields['url']
	);
	return $fields;
}


/**
 * Custom comment display
 */
function dw_comment_display($comment, $args, $depth) {
	if ( 'div' === $args['style'] ) {
			$tag       = 'div';
			$add_below = 'comment';
	} else {
			$tag       = 'li';
			$add_below = 'div-comment';
	}?>
	<<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
	if ( 'div' != $args['style'] ) { ?>
			<div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
	} ?>
			<div class="comment-author vcard"><?php 
					if ( $args['avatar_size'] != 0 ) {
							echo get_avatar( $comment, $args['avatar_size'] ); 
					} 
					printf( __( '<div class="fn">%s</div>' ), get_comment_author_link() ); ?>
			</div><?php 
			if ( $comment->comment_approved == '0' ) { ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
			} ?>
			<div class="comment-meta commentmetadata">
				<?php printf( 
					__('%1$s a las %2$s','dw'), 
					get_comment_date('j F'),  
					get_comment_time('H:i') 
				); ?>
			</div>

			<?php comment_text(); ?>

			<div class="reply"><?php 
							comment_reply_link( 
									array_merge( 
											$args, 
											array( 
													'add_below' => $add_below, 
													'depth'     => $depth, 
													'max_depth' => $args['max_depth'] 
											) 
									) 
							); ?>
			</div><?php 
	if ( 'div' != $args['style'] ) : ?>
			</div><?php 
	endif;
}


/**
 * Related 3 last posts
 */
function dw_related_posts() {
	global $post;
	$post_id = get_the_ID();
	$categories = get_the_category();
	if ($categories) $category = $categories[0]->term_id;
	else $category=0;
	$show='<div class="last-posts">';
	$query=array(
		'post_type'     => 'post',
		'orderby'       => 'date',
		'order'         => 'DESC',
		'posts_per_page'=> 3,
		'post_status'   => 'publish',
		'post__not_in'  => array($post_id),
		'cat'           => $category,
	);
	$posts=new WP_Query($query);
	if ($posts->have_posts()) {
		$show.='<div class="posts-grid">';
		while ($posts->have_posts()) {
			$p = $posts->the_post();
			$show .= dw_single_post($p, 'div');
		}
		$show.='</div>';
	}
	$show.='</div>';
	wp_reset_postdata();
	echo $show;
}


function doo_last_posts() {
	ob_start();
	dw_related_posts();
	return ob_get_clean();
}
add_shortcode('doo-last-posts','doo_last_posts');


/**
 * Grid selected posts
 */
function doo_posts_grid( $args = [] ) {
	if (empty($args['posts'])) return;
	$post_in = $args['posts'];
	$query=array(
		'post_type'           => 'post',
		'orderby'             => 'date',
		'order'               => 'DESC',
		'posts_per_page'      => -1,
		'post_status'         => 'publish',
		'post__in'            => $post_in,
		'ignore_sticky_posts' => true,
		'fields'              => 'ids'
	);
	$posts = get_posts($query);
	ob_start();
	if ($posts) {
		?>
		<div class="last-posts">
			<div class="posts-grid">
				<?php
				foreach($posts as $post_id) {
					echo dw_single_post($post_id, 'div');
				}
				?>
			</div>
		</div>
		<?php
	}
	echo ob_get_clean();
}