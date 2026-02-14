<?php
/**
 * Shortcodes
 */

/**
 * Shortcode social media
 */
function dw_shortcode_social_media() {
	$title = get_option('dw-op-sm-title');
	$num = get_option('dw-op-sm-items');
	$show = '';
	if ($num>0) {
		$show .= '<div class="dw-social-media">';
		if ($title) {
			$show .=   '<div class="title">' . $title . '</div>';
		}
		$show .=   '<div class="content">';
		for ($i=1;$i<=$num;$i++) {
			$name=get_option('dw-op-sm-name-'.$i);
			$url=get_option('dw-op-sm-slug-'.$i);
			$icon=get_option('dw-op-sm-icon-'.$i);
			if ($url) {
				$show .= '<a href="'.$url.'" class="social-link" target="_blank" rel="nofollow">';
				$show .=   '<img src="'.$icon.'" alt="'.$name.'" title="'.$name.'">';
				$show .=  '</a>';
			}
		}
		$show .= '</div>';  
		$show .= '</div>';
	}
	return $show;
}
add_shortcode('dw-social-media','dw_shortcode_social_media');


/**
 * Scripts added <body>
 * Archive term_id = 63
 */
// function dw_body_script() {
// 	if ( is_archive() ) {
// 		$term_id = get_queried_object_id();
// 		if ( get_option('dw-op-script-body-ck') && $term_id == 63 ) {
// 	$html = '
// <script>
// window.VIDEOASK_EMBED_CONFIG = {
// "kind": "widget",
// "url": "https://www.videoask.com/fsrvlp5jp",
// "options": {
// "widgetType": "VideoThumbnailWindowTall",
// "text": "GUIA DE COMPRA AZULEJOS",
// "backgroundColor": "#4DD2D0",
// "position": "bottom-right",
// "dismissible": true
// }
// }
// </script>
// <script src="https://www.videoask.com/embed/embed.js"></script>
// ';
// 			if ($html) echo $html;
// 		}
// 	}
// }
// add_action( 'wp_body_open', 'dw_body_script', 50 );



function dw_head_script() {
	if ( get_option('dw-op-script-head-ck') ) {
		$html = get_option('dw-op-script-head');
		if ($html) echo $html;
	}
}
add_action( 'wp_head', 'dw_head_script', 99 );

function dw_body_script() {
	if ( get_option('dw-op-script-body-ck') ) {
		$html = get_option('dw-op-script-body');
		if ($html) echo $html;
	}
}
add_action( 'wp_body_open', 'dw_body_script', 1 );