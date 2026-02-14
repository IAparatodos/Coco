<?php





/**

 * Refresh mini-cart counter

 */

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');

function wc_refresh_mini_cart_count($fragments){

	ob_start();

	$count = WC()->cart->get_cart_contents_count();

	?>

	<div id="mini-cart-count" class="counter-items cart-items count-<?php echo $count;?>">

		<?php echo $count;?>

	</div>

	<?php

	$fragments['#mini-cart-count'] = ob_get_clean();

	ob_start();

	wc_cart_totals_order_total_html();

	$total = ob_get_clean();

	$fragments['#mini-cart-total'] = '<span id="mini-cart-total">'. $total . '</span>';

	return $fragments;

}



/**

 * Display category image on category archive

 */

add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );

function woocommerce_category_image() {

	if ( is_product_category() ){

		global $wp_query;

		$cat = $wp_query->get_queried_object();

		$thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );

		$image = wp_get_attachment_url( $thumbnail_id );

		$image_d = get_term_meta($cat->term_id, 'cfpc-image-desktop', true);

		$image_m = get_term_meta($cat->term_id, 'cfpc-image-mobile', true);

		$alt = $cat->name;

	} else {

		$image_d = get_option('dw-op-shop-title-image');

		$image_m = get_option('dw-op-shop-title-image-mobile');

		$alt = 'shop-image';

	}

	if ( !$image_d ) {

		$image_d = $image;

	}

	if ( !$image_m ) {

		$image_m = $image;

	}

	echo '<img class="image-desktop" src="' . $image_d . '" alt="' . $alt . '">';

	echo '<img class="image-mobile" src="' . $image_m . '" alt="' . $alt . '">';

}





/**

 * Change the Add to Cart button text

 */

add_filter('woocommerce_product_add_to_cart_text','dw_customize_add_to_cart_button');  

function dw_customize_add_to_cart_button($text) {

	global $product;

	if ($product) {

		$custom_text = '';

		if ($product->is_type('variable')) {

			$custom_text = get_option('dw-op-cart-btn-text-variable');

		} else {

			$custom_text = get_option('dw-op-cart-btn-text');

		}

		if ($custom_text) $text = $custom_text;

		return $text;

	}

}

add_filter('woocommerce_product_single_add_to_cart_text','dw_customize_single_add_to_cart_button');

function dw_customize_single_add_to_cart_button($text) {

	$custom_text = get_option('dw-op-cart-btn-text');

	if ($custom_text) $text = $custom_text;

	return $text;

}



/**

 * Change sale text

 */

// add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);

// function woocommerce_custom_sale_text($text, $post, $_product) {

// 	$custom_text = get_option('dw-op-sale-text');

// 	if ($custom_text) $text = $custom_text;

// 	return '<span class="flash onsale">' . $text . '</span>';

// }



/**

 * Remove sale flash

 */

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );



/**

 * Product text featured

 */

add_action( 'woocommerce_before_shop_loop_item_title', 'dw_show_product_loop_featured_flash', 10 );

function dw_show_product_loop_featured_flash() {

	global $product;

	if ($product->is_featured()) {

		$text = get_option('dw-op-featured-text');

		if ($text) {

			echo '<div class="featured-flash">' . $text . '</div>';

		} 

	}

}



/**

 * Custom subcategories loop

 */

add_action('woocommerce_before_subcategory_title', 'dw_subcategory_title');

function dw_subcategory_title() {

	echo '<div class="category-title">' . __('Categoría','dw') . '</div>';

}



add_action('woocommerce_after_subcategory_title', 'dw_subcategory_btn');

function dw_subcategory_btn() {

	echo '<div class="btn">' . __('Ver más','dw') . '</div>';

}



/**

 * Function to detect mobile

 */

function isMobileDevice() {

	$useragent = !empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER["HTTP_USER_AGENT"] : '';

	if (!$useragent) return false;

	return preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i',

				$useragent);

}



/**

 * Remove product link if not mobile

 */

if (!isMobileDevice() && !get_option('dw-op-whishlist')) {

	remove_action( 'woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open' );

	remove_action( 'woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_close' );

}



/**

 * Add link in product title

 */

add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open', 30);

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 5);



/**

 * Custom product loop

 */

add_action( 'woocommerce_before_shop_loop_item_title', 'dw_loop_product_categories', 20 );

function dw_loop_product_categories() {

	global $product;

	$product_id = $product->get_id();

	if (!isMobileDevice() && !get_option('dw-op-whishlist')) {

		$link = get_permalink( $product_id );

		echo '<div class="flashes">';

		echo   do_shortcode('[yith_wcwl_add_to_wishlist]');

		echo   '<a href="' . $link . '" class="product-link">';

		echo     '<img src="' . get_theme_file_uri('img/add.svg') . '">';

		echo   '</a>';

		echo '</div>';

	}

	echo '<div class="content">';

	echo '<div class="category-title">';

	$cat_list = wc_get_product_category_list( $product_id );

	$array = explode( ', ', $cat_list );

	$array = array_slice($array, 0, 2);

	echo implode(', ',$array);

	echo '</div>';

}

add_action( 'woocommerce_after_shop_loop_item','dw_end_filter', 90);



/**

 * Add short description in archive product loop

 */

add_action( 'woocommerce_after_shop_loop_item_title', 'dw_excerpt_in_product_archive', 5 );

function dw_excerpt_in_product_archive() {

	echo '<div class="short-description">';

	echo strip_tags(get_the_excerpt(),'<p>');

	echo '</div>';

}



/** 

 * Resize image in product grid/catalog product and category

 */

add_filter( 'single_product_archive_thumbnail_size', function( $size ) {

	return 'medium';

} );

add_filter( 'subcategory_archive_thumbnail_size', function( $size ) {

	return 'medium';

} );



/**

 * Resize single product image

 */

add_filter( 'woocommerce_get_image_size_single', function( $size ) {

	return array(

		'width'  => 500,

		'height' => '',

		'crop'   => 0,

	);

} );





/**

 * Remove result count in archive products

 */

// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );



add_action( 'woocommerce_before_shop_loop', 'dw_init_filter', 12 );

function dw_init_filter() {

	echo '<div class="filter-wrapper">';

	echo '<div class="left">';

}

add_action( 'woocommerce_before_shop_loop', 'dw_end_filter', 35 );

add_action( 'woocommerce_before_shop_loop', 'dw_end_filter', 90 );

function dw_end_filter() {

	echo '</div>';

}



/**

 * Display filter on category archive and remove archive description

 */

// if (is_shop()) {

// 	remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

// 	remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );

// }

add_action( 'woocommerce_before_shop_loop', 'dw_advanced_search', 10 );

function dw_advanced_search() {

	$html = dw_wc_product_search_selects();

	// if ($html && !has_children() && !is_shop()) {

	if ($html && !is_shop()) {

		$class = strpos( $_SERVER['REQUEST_URI'], '?' ) ? ' active' : '';

		echo '<div class="advanced-filter' . $class . '">';

		echo $html;

		echo '</div>';

	} else {

		// if (is_shop()) {

		// 	woocommerce_taxonomy_archive_description();

		// 	woocommerce_product_archive_description();

		// }

	}

}



/**

 * Add pagination on top

 */

add_action( 'woocommerce_before_shop_loop', 'dw_archive_product_pagination', 50 );

function dw_archive_product_pagination() {

	if (has_children() || is_shop()) return;

	echo '<div class="top-pagination">';

	woocommerce_pagination();

	echo '</div>';

}



/**

 * Change pagination icons

 */

add_filter('woocommerce_pagination_args', 'dw_change_pagination_icons', 99, 1);

function dw_change_pagination_icons( $args ) {

	$args['prev_text'] = '<img src="' . get_theme_file_uri('img/load.png') . '">';

	$args['next_text'] = '<img src="' . get_theme_file_uri('img/load-right.png') . '">';

	$args['end_size'] = 1;

	$args['mid_size'] = 1;

	return $args;

}



/**

 * Adds switching link just above the sorting dropdowns

 */

add_action( 'woocommerce_before_shop_loop', 'dw_show_switch_links', 30 ); 

function dw_show_switch_links() {

	if (has_children() || is_shop()) return;

	ob_start();

	?>

	<div class="switcher">

		<button id="grid" class="btn-switcher"><img src="<?php echo get_theme_file_uri('img/grid.svg');?>"></button>

		<button id="table" class="btn-switcher"><img src="<?php echo get_theme_file_uri('img/table.svg');?>"></button>

	</div>

	<?php

	echo ob_get_clean();

}



function has_children() {

	$obj = get_queried_object();

	return get_term_children($obj->term_id,'product_cat');

}



/**

 * Remove Add to Cart Button and Add View Product Button

 */

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );  

add_action( 'woocommerce_after_shop_loop_item', 'dw_view_product_button', 10 );

function dw_view_product_button() {

	global $product;

	$link = $product->get_permalink();

	echo '<a href="' . $link . '" class="button btn addtocartbutton">' . __('Ver producto','dw') . '</a>';

}





/**

 * Single product

 */

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );



add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 10 );



remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );



add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 5 );



add_action( 'wp', 'remove_image_zoom_support', 100 );

function remove_image_zoom_support() {

	remove_theme_support( 'wc-product-gallery-zoom' );

}



remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );



add_action( 'woocommerce_single_product_summary', 'dw_description_title', 4 );

function dw_description_title() {

	echo '<div class="description-title">' . __('Descripción','dw') . '</div>';

}



add_action('woocommerce_before_add_to_cart_form', 'selected_variation_price_replace_variable_price_range');

function selected_variation_price_replace_variable_price_range(){

	global $product;

	if( $product->is_type('variable') ) {

		?>

		<style> 

			.woocommerce-variation-price {

				display:none;

			}

		</style>

		<script>

		jQuery(function($) {

			var p = 'p.price',

					q = $(p).html(),

					s = '.price.pvp del bdi',

					t = $(s).html(),

					d = '.price.pvp',

					e = '.price.pvp ins',

					decimal = ',',

					sep = '.';

			$('form.cart').on('show_variation', function( event, data ) {

				if ( data.price_html ) {

					var currency = '<?php echo get_woocommerce_currency_symbol(); ?>';

					var dto = 0;

					var regular = data.display_regular_price.format(2,3,sep,decimal);

					$(p).html(data.price_html);

					$(s).html(regular + currency);

					if (data.display_regular_price != 0) {

						dto = (data.display_regular_price - data.display_price) / data.display_regular_price * 100;

						dto = dto.format(0,3,sep,decimal);

					}

					$(e).html(dto + '% <?php _e('DTO','dw');?>');

					$(d).css('display','block');

				}

			}).on('hide_variation', function( event ) {

				$(p).html(q);

				$(s).html(t);

				$(d).css('display','none');

			});

			Number.prototype.format = function(n, x, s, c) {

				var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',

						num = this.toFixed(Math.max(0, ~~n));

				return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));

			};

		});

		</script>

		<?php

	}

}



remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );



add_action( 'woocommerce_single_product_summary', 'dw_single_price_pvp', 10 );

function dw_single_price_pvp() {

	global $product;

	$pvp_price = 0;

	$price = 0;

	if ($product->is_type('variable')) {

		$pvp_price = $product->get_variation_regular_price( 'min', true );

		$price = $product->get_variation_sale_price( 'min', true );

	} else if ($product->is_type('simple')) {

		$pvp_price = $product->get_regular_price();

		$price = $product->get_sale_price();

	}

	if ( $pvp_price != 0 && $price ) {

		$dto = number_format(( $pvp_price - $price ) / $pvp_price * 100);

	} else {

		$dto = 0;

	}

	$product_id = $product->get_id();

	$bulk_quantity = get_post_meta( $product_id, '_bulkdiscount_quantity_1', true);

	$bulk_discount = get_post_meta( $product_id, '_bulkdiscount_discount_1', true);

	echo '<div class="price pvp">';

	echo   '<span class="text">' . __('Pvp:','dw') . '</span>';

	echo   '<del>' . wc_price($pvp_price) . '</del>';

	echo   '<ins>' . $dto . '% ' . __('DTO','dw') . '</ins>';

	echo '</div>';

	if ($bulk_quantity && $bulk_discount) {

		$new_price = $price * ( 1 - $bulk_discount / 100);

		echo '<input type="hidden" name="_bulkdiscount_quantity" value="' . $bulk_quantity. '">';

		echo '<input type="hidden" name="_bulkdiscount_discount" value="' . $bulk_discount. '">';

		echo '<input type="hidden" name="_price" value="' . $price . '">';

		echo '<input type="hidden" name="_new_price" value="' . $new_price . '">';

		$attributes = $product->get_attributes();

		$qty = isset($attributes['m2-por-caja']['options'][0]) ? tofloat($attributes['m2-por-caja']['options'][0]) : 0;

		if ($qty) {

			$price_box = floatval($product->get_price()) * $qty;

			$new_price_box = $price_box * ( 1 - $bulk_discount / 100);

			echo '<input type="hidden" name="_price_box" value="' . $price_box . '">';

			echo '<input type="hidden" name="_new_price_box" value="' . $new_price_box . '">';

		}

	}

}



add_action( 'woocommerce_before_add_to_cart_quantity', 'dw_init_row', 10 );

function dw_init_row() {

	echo '<div class="quantity-price" style="margin-top:16px">';

}



add_action( 'woocommerce_after_add_to_cart_quantity', 'dw_price_row', 10 );

function dw_price_row() {

	global $product;

	?>

	<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>

	<?php

	echo '</div>';

	$attributes = $product->get_attributes();

	$qty = isset($attributes['m2-por-caja']['options'][0]) ? tofloat($attributes['m2-por-caja']['options'][0]) : 0;

	if ($qty) {

		$price = floatval($product->get_price()) * $qty;

		echo '<div class="box-price">';

		echo __('La caja sale a','dw') . ' ' . wc_price($price);

		echo '</div>';

	}

}



add_action( 'woocommerce_single_product_summary', 'dw_mail_to_friend', 30 );

function dw_mail_to_friend() {

	global $product;

	echo '<a class="email-link" href="mailto:?subject=' . $product->get_name() . '&body=Enlace: ' . get_permalink($product->get_id()) . '">';

	echo '<img src="' . get_theme_file_uri('img/email-green.png') . '">' . __('Enviar email a un amigo','dw');

	echo '</a>';

}



add_action( 'woocommerce_single_product_summary', 'dw_whishlist', 35 );

function dw_whishlist() {

	if (!isMobileDevice() && !get_option('dw-op-whishlist')) {

		echo do_shortcode('[yith_wcwl_add_to_wishlist]');

	}

}



add_action( 'woocommerce_single_product_summary', 'dw_brands', 45 );

function dw_brands() {

	echo '<div class="brand-upsells">';

	echo '<div class="brands">';

	et_product_brand_image();

	// echo do_shortcode('[addtoany]');

	echo '</div>';

	woocommerce_upsell_display();

	echo '</div>';



	// echo '<div class="mobile-sm">' . do_shortcode('[addtoany]') .'</div>';



}



remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );





remove_action( 'woocommerce_single_product_summary', 'single_product_summary', 45 );



// add_action( 'woocommerce_after_single_product', 'dw_custom_product_block' );

// function dw_custom_product_block() {

// 	$block_id = get_option('dw-op-block-single');

// 	if ($block_id) {

// 		echo '<div class="custom-block">';

// 		$get_block = get_post( $block_id );

// 		$content = $get_block->post_content;	

// 		echo do_blocks($content);

// 		echo '</div>';

// 	}

// }



/**

 * Add a custom product data tab

 */

add_filter( 'woocommerce_product_tabs', 'dw_custom_product_tab' );

function dw_custom_product_tab( $tabs ) {

	global $product;

	$title = get_post_meta($product->get_id(), 'custom_tab1_title', true);

	if ($title && $title != '') {

		$tabs['custom_product_tab'] = array(

			'title' 	=> '<div class="title">' . $title . '</div>',

			'priority' 	=> 50,

			'callback' 	=> 'dw_custom_product_tab_content'

		);

	}

	$title = get_option('dw-op-tab-title');

	if ($title && $title != '') {

		$tabs['custom_general_tab'] = array(

			'title' 	=> '<div class="title">' . $title . '</div>',

			'priority' 	=> 60,

			'callback' 	=> 'dw_custom_general_tab_content'

		);

	}

	if (isset($tabs['description']['title'])) {

		$tabs['description']['title'] = '<div class="title">' . $tabs['description']['title'] . '</div>';

	}

	if (isset($tabs['additional_information']['title'])) {

		$tabs['additional_information']['title'] = '<div class="title">' . $tabs['additional_information']['title'] . '</div>';

	}

	if (isset($tabs['reviews']['title'])) {

		$tabs['reviews']['title'] = '<div class="title">' . $tabs['reviews']['title'] . '</div>';

	}

	$tabs['description']['callback'] = 'dw_description_tab_content';



	return $tabs;

}

function dw_custom_product_tab_content() {

	global $product;

	$content = get_post_meta($product->get_id(), 'custom_tab1', true);

	// Remove wpbakery shortcodes 

	$content = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $content);



	echo $content; 

}

function dw_custom_general_tab_content() {

	$content = get_option('dw-op-tab-content');

	// remove h2

	$content = str_replace('<h2>','<div class="r-h2">',$content);

	$content = str_replace('</h2>','</div>',$content);

	echo $content;

}

function dw_description_tab_content() {

	global $product;

	$content = apply_filters('the_content', $product->get_description());

	// change h to h3 (h2)

	// $content = str_replace('<h2>','<h3>',$content);

	// $content = str_replace('</h2>','</h3>',$content);

	// $content = str_replace('<h3>','<h2>',$content);

	// $content = str_replace('</h3>','</h2>',$content);

	// $content = str_replace('<h4>','<h2>',$content);

	// $content = str_replace('</h4>','</h2>',$content);

	// $content = str_replace('<h5>','<h2>',$content);

	// $content = str_replace('</h5>','</h2>',$content);

	echo $content;

}



/**

 * Remove heading in tabs

 */

add_filter( 'woocommerce_product_description_heading', '__return_empty_string' );

add_filter( 'woocommerce_product_additional_information_heading', '__return_empty_string' );





/**

 * Popup add to cart

 */

add_filter('wc_add_to_cart_message_html', 'dw_add_to_cart_message', 10, 3);

function dw_add_to_cart_message($message, $products, $qty) {

	$product_id = array_key_first( $products );

	$product = wc_get_product( $product_id );

	$image = $product->get_image();

	$title = $product->get_name();

	$link = wc_get_page_permalink( 'shop' );

	ob_start();

	?>

	<div class="popup-container">

		<div class="popup-content">

			<div class="close"><img src="<?php echo get_theme_file_uri('img/close.png');?>"></div>

			<div class="title"><?php echo $title;?></div>

			<div class="content">

				<div class="image"><?php echo $image;?></div>

				<div class="right">

					<div class="message"><?php _e('Producto añadido con éxito a su pedido','dw');?></div>

					<a href="<?php echo $link;?>" class="btn shop-link"><?php _e('Añadir más productos','dw');?></a>

					<a class="btn cart" href="<?php echo wc_get_cart_url();?>"><?php _e('Ir al pedido','dw');?></a>

				</div>

			</div>

		</div>

	</div>

	<?php

	return ob_get_clean();

}





/**

 * Cart

 */

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

add_action('woocommerce_after_cart', 'dw_wc_cross_products');



function dw_wc_cross_products() {

	$cross_sells = WC()->cart->get_cross_sells();

	if ($cross_sells) {

		$title = __('Puede que estés interesado en...','dw');

		echo '<section class="related products cross-sells">';

		echo '<div class="title-related-products">' . $title . '</div>';

		echo dw_products(array(

			'columns'  => 0,

			'class'    => 'slider-products related',

			'type'     => 'slider',

			'post__in' => $cross_sells,

			'number'   => get_option('dw-op-max-products-slider') ? get_option('dw-op-max-products-slider') : 9,

			'orderby'  => 'rand',

		));

		echo '</section>';

	}

}









add_action( 'woocommerce_before_cart', 'dw_cart_header', 5 );

function dw_cart_header($order_received = false) {

	$el1 = $el2 = $el3 = 'span';

	if (is_cart()) {

		$type = 'cart';

		$el1 = 'h1';

	} else {

		if (is_checkout() && !$order_received) {

			$type = 'payment';

			$el2 = 'h1';

		} else {

			if (is_wc_endpoint_url( 'order-received' ) || $order_received) {

				$type = 'thank-you';

				$el3 = 'h1';

			}

		}

	}

	?>

	<div class="wc-header full-width <?php echo $type;?>">

		<div class="wc-header-content">

			<div class="item cart">

				<img src="<?php echo get_theme_file_uri('img/pedido.svg');?>">

				<<?php echo $el1;?>><?php _e('Pedido','dw');?></<?php echo $el1;?>>

			</div>

			<div class="sep"></div>

			<div class="item payment">

				<img src="<?php echo get_theme_file_uri('img/pago.svg');?>">

				<<?php echo $el2;?>><?php _e('Pago','dw');?></<?php echo $el2;?>>

			</div>

			<div class="sep"></div>

			<div class="item thank-you">

				<img src="<?php echo get_theme_file_uri('img/confirmacion.svg');?>">

				<<?php echo $el3;?>><?php _e('Confirmación','dw');?></<?php echo $el3;?>>

			</div>

		</div>

	</div>

	<?php

}



/**

 * Coupon control

 */

add_action( 'woocommerce_cart_coupon', 'dw_coupon_control', 9999 );

function dw_coupon_control() {

	?>

	<div class="coupon-control">

		<?php _e('Código cliente','dw'); ?>

	</div>

	<?php

}





/**

 * Remove city and postal code in shipping calculator

 */

// add_filter( 'woocommerce_shipping_calculator_enable_city', 'dw_shipping_calculator_enable_city', 10, 1 );

// function dw_shipping_calculator_enable_city( $false ) { 

// 	return false; 

// }; 

// add_filter( 'woocommerce_shipping_calculator_enable_postcode', 'dw_shipping_calculator_enable_postcode', 10, 1 );

// function dw_shipping_calculator_enable_postcode( $true ) { 

// 	return false; 

// }; 



/**

 * Remove checkoout coupon message

 */

add_filter( 'woocommerce_checkout_coupon_message', 'dw_remove_checkout_coupon', 10, 1 );

function dw_remove_checkout_coupon() {

	return '';

}





/**

 * Translate strings

 */

add_filter( 'gettext', 'dw_translate_strings', 999, 3 );

function dw_translate_strings( $translated, $untranslated, $domain ) {

	$array_translate = [

		'Cart totals' => 'Total del pedido',

		'Billing details' => 'Datos de facturación',

		'Change address' => 'Calcular gastos de envío',

		'Billing address' => 'Dirección de facturación',

		'Shipping address' => 'Dirección de envío',

		'Product' => 'Producto',

		'Quantity' => 'Cantidad',

		'Price' => 'Precio',

		'Check your email to confirm your subscription.' => 'Comprueba tu correo electrónico para confirmar tu suscripción.',

		'Cart updated.' => 'Pedido actualizado.',

		'Incl. %s discount' => '%s dto.incl.',

		'Your cart is currently empty.' => 'Tu pedido está vacío.',

		'View cart' => 'Ver pedido',

		'Cart' => 'Pedido',

		'Return to cart' => 'Volver al pedido',

		'Cart updated.' => 'Pedido actualizado',

		'Add to cart' => 'Añadir al pedido',

	];

	$translated = isset($array_translate[$untranslated]) ? $array_translate[$untranslated] : $translated;

	return $translated;

}



/**

 * Define the woocommerce_cart_item_remove_link callback 

 */

add_filter( 'woocommerce_cart_item_remove_link', 'dw_wc_cart_item_remove_link', 10, 2 );

function dw_wc_cart_item_remove_link( $sprintf, $cart_item_key ) {

	if ( is_admin() && ! defined( 'DOING_AJAX' ) ) return $sprintf;

	$add_text = '<img src="' . get_theme_file_uri('img/close.png') . '">';

	$sprintf = str_replace('&times;</a>', '<img src="' . get_theme_file_uri('img/close.png') . '"></a>', $sprintf);

	return $sprintf;

};



/** 

 * Proceed Checkout button text

 */

function woocommerce_button_proceed_to_checkout() {

	?>

	<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward">

		<?php _e( 'Realizar pedido', 'dw' ); ?>

	</a>

	<?php

}



/**

 * Add cart banner

 */

add_action( 'woocommerce_cart_collaterals', 'dw_banner_cart', 99 );

function dw_banner_cart() {

	$block_id = get_option('dw-op-block-cart');

	if ($block_id) {

		?>

		<div class="custom-block">
			<div class="grup-quality" style="text-align: center;">
				<a href="https://www.ecommerceverificado.com/www.adrihosan.com/" target="_blank" rel=" noreferrer noopener">
					<img decoding="async" width="" height="" class="img-quality" src="/wp-content/uploads/2025/10/sello-ecomerce-verificado-negro-bgnegro.webp" alt="Seal of quality" style="height: auto;width: 110px;margin: 0 auto 24px;">
				</a>
			</div>
		<?php

			$get_block = get_post( $block_id );

			$content = $get_block->post_content;	

			// echo do_blocks($content);

			echo apply_filters('the_content', $content);

		?>

		</div>

		<?php

	}

}



/**

 * Checkout header

 */

add_action( 'woocommerce_before_checkout_form', 'dw_cart_header', 5);



/**

 * Change label to placeholder in checkout fields

 */

add_filter('woocommerce_checkout_fields', 'dw_override_checkout_fields', 9999, 1);

function dw_override_checkout_fields($fields) {



	$fields['billing']['billing_first_name']['placeholder'] = __('Nombre','dw');

	unset($fields['billing']['billing_first_name']['label']);

	$fields['billing']['billing_last_name']['placeholder'] = __('Apellidos','dw');

	unset($fields['billing']['billing_last_name']['label']);

	$fields['billing']['billing_company']['placeholder'] = __('DNI o CIF','dw');

	unset($fields['billing']['billing_company']['label']);

	$fields['billing']['billing_address_1']['placeholder'] = __('Dirección de la calle','dw');

	unset($fields['billing']['billing_address_1']['label']);

	$fields['billing']['billing_address_2']['placeholder'] = __('Datos adicionales dirección','dw');

	unset($fields['billing']['billing_address_2']['label']);

	$fields['billing']['billing_city']['placeholder'] = __('Localidad / Ciudad', 'dw');

	unset($fields['billing']['billing_city']['label']);

	$fields['billing']['billing_postcode']['placeholder'] = __('Código postal', 'dw');

	unset($fields['billing']['billing_postcode']['label']);

	$fields['billing']['billing_phone']['placeholder'] = __('Teléfono','dw');

	unset($fields['billing']['billing_phone']['label']);

	$fields['billing']['billing_email']['placeholder'] = __('Correo electrónico','dw');

	unset($fields['billing']['billing_email']['label']);



	$fields['shipping']['shipping_first_name']['placeholder'] = __('Nombre','dw');

	unset($fields['shipping']['shipping_first_name']['label']);

	$fields['shipping']['shipping_last_name']['placeholder'] = __('Apellidos','dw');

	unset($fields['shipping']['shipping_last_name']['label']);

	$fields['shipping']['shipping_company']['placeholder'] = __('DNI o CIF','dw');

	$fields['shipping']['shipping_company']['required'] = false;

	unset($fields['shipping']['shipping_company']['label']);

	$fields['shipping']['shipping_address_1']['placeholder'] = __('Dirección de la calle','dw');

	unset($fields['shipping']['shipping_address_1']['label']);

	$fields['shipping']['shipping_address_2']['placeholder'] = __('Datos adicionales dirección','dw');

	unset($fields['shipping']['shipping_address_2']['label']);

	$fields['shipping']['shipping_city']['placeholder'] = __('Localidad / Ciudad', 'dw');

	unset($fields['shipping']['shipping_city']['label']);

	$fields['shipping']['shipping_postcode']['placeholder'] = __('Código postal','dw');

	unset($fields['shipping']['shipping_postcode']['label']);



	$fields['order']['order_comments']['placeholder'] = __('Notas del pedido (opcional)','dw');

	$fields['order']['order_comments']['label'] = '';



	return $fields;

}

/**

 * Especific filter for address fields

 */

add_filter( 'woocommerce_default_address_fields' , 'dw_custom_override_default_address_fields' );

function dw_custom_override_default_address_fields( $address_fields ) {

	$address_fields['address_1']['placeholder'] = __('Dirección de la calle','dw');

	$address_fields['address_2']['placeholder'] = __('Datos adicionales dirección','dw');

	return $address_fields;

}



/**

 * Add Shipping Calculator

 */

// add_action( 'woocommerce_after_checkout_form', 'dw_shipping_calculator', 99 );

// function dw_shipping_calculator() {

// 	$calculator_text = __('Calcular gastos de envío', 'dw');

// 	echo '<div class="shipping-calculator">';

// 	woocommerce_shipping_calculator( $calculator_text );

// 	echo '</div>';

// }





/**

 * Add Checkout banner

 */

add_action( 'woocommerce_checkout_shipping', 'dw_banner_cart', 40 );





/**

 * Checkout order review

 */

add_action( 'woocommerce_checkout_before_order_review_heading', 'dw_init_element', 50 );

function dw_init_element() {

	echo '<div class="order-review">';

}

add_action( 'woocommerce_checkout_after_order_review', 'dw_end_element' );

function dw_end_element() {

	echo '</div>';

}



/**

 * Add a title in payment methods

 */

add_action( 'woocommerce_review_order_before_payment', function() {

	echo '<h3>' . esc_html__('Método de pago', 'dw') . '</h3>';

} );





/**

 * Change Place Order button text on checkout page

 */

add_filter('woocommerce_order_button_text','dw_custom_order_button_text',1);

function dw_custom_order_button_text($order_button_text) {

	$order_button_text = __('Realizar pago','dw');

	return $order_button_text;

}

add_filter( 'woocommerce_order_button_html', 'dw_order_button_html');

function dw_order_button_html( $button ) {

	$return = '<div class="checkout-btn">' . $button . '</div>';

  return $return;

}





/**

 * Redirect page thank-you page woocommerce

 */

add_action( 'woocommerce_thankyou', 'dw_redirect_thankyou');

function dw_redirect_thankyou( $order_id ) {

	$post_id = get_option('dw-op-page-thankyou');

	if ($post_id) {

		$url = get_page_link( $post_id );

		$url = add_query_arg( array( 'order_id' => $order_id ), $url );

		$order = wc_get_order( $order_id );

		if ( ! $order->has_status( 'failed' ) ) {

			wp_safe_redirect( $url );

			exit;

		}

	}

}



/**

 * Add content to woocommerce thankyou

 */

add_action( 'woocommerce_thankyou', 'dw_show_thankyou_after');

function dw_show_thankyou_after( $order_id ) {

	$order = wc_get_order( $order_id );

	if ( ! $order->has_status( 'failed' ) ) {

		$block_id = get_option('dw-op-block-thankyou-after');

		if ($block_id) {

			$get_block = get_post( $block_id );

			$content = $get_block->post_content;	

			echo apply_filters('the_content', $content);

		}

	}

}



add_action( 'woocommerce_before_thankyou', 'dw_show_thankyou_before');

function dw_show_thankyou_before( $order_id ) {

	$order = wc_get_order( $order_id );

	if ( ! $order->has_status( 'failed' ) ) {

		$block_id = get_option('dw-op-block-thankyou-before');

		if ($block_id) {

			$get_block = get_post( $block_id );

			$content = $get_block->post_content;	

			echo apply_filters('the_content', $content);

		}

	}

}





/**

 * Shortcode banner order received

 */

function dw_banner_woocommerce() {

	ob_start();

	dw_cart_header( true );

	return ob_get_clean();

}

add_shortcode('dw-order-received', 'dw_banner_woocommerce');





/**

 * Add related products 

 */

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action( 'woocommerce_after_single_product_summary', 'dw_wc_related_products', 20 );

function dw_wc_related_products() {

	global $product;

	$terms = get_the_terms( $product->get_id(), 'product_cat' );

	$cats_id = [];

	$cat = '';

	foreach ($terms as $term) {

		$cats_id[] = $term->term_id;

		$cat = $term->term_id;

	}

	if ($cat) {

		$title = __('Productos relacionados','dw');

		echo '<section class="related products">';

		echo '<div class="title-related-products">' . $title . '</div>';

		echo dw_products(array(

			'category' => $cat,

			'columns'  => 0,

			'class'    => 'slider-products related',

			'type'     => 'slider',

			'post__not_in' => array($product->get_id()),

			'number'   => get_option('dw-op-max-products-slider') ? get_option('dw-op-max-products-slider') : 9,

			'orderby'  => 'rand',

		));

		echo '</section>';

	}

}



function dw_products($atts) {

	ob_start();



	$defaults = array(

		'number' => -1,

		'order'  => 'DESC',

		'orderby'=> 'date',

	);

	

	$atts = wp_parse_args($atts, $defaults);



	$terms=[];

	$terms[]='exclude-from-catalog';

	$terms[]='exclude-from-search';



	// best selling

	if ('sales' == $atts['orderby']) {

		$atts['orderby'] = 'meta_value_num';

		$atts['meta_key'] = 'total_sales';

	}



	$args = array(

		'post_type' => 'product',

		'orderby'   => $atts['orderby'],

		'order'     => $atts['order'],

		'posts_per_page' => $atts['number'],

		'post_status' => 'publish',

		'tax_query' => array(

			'relation' => 'AND',

			array(

				'taxonomy' => 'product_visibility',

				'field'    => 'name',

				'terms'    => $terms,

				'operator'  => 'NOT IN',

			),

		),

	);



	if (isset($atts['post__not_in'])) {

		$args['post__not_in'] = $atts['post__not_in'];

	}



	if (isset($atts['post__in'])) {

		$args['post__in'] = $atts['post__in'];

	}



	if (isset($atts['meta_key'])) {

		$args['meta_key'] = $atts['meta_key'];

	}



	if (isset($atts['taxonomy'])) {

		$taxonomy = $atts['taxonomy'];

	} else {

		$taxonomy = 'product_cat';

	}



	if (isset($atts['category'])) {

		$args['tax_query'][] = array(

			'taxonomy' => $taxonomy,

			'field'    => 'term_id',

			'terms'    => $atts['category'],

			'operator'  => 'IN',

		);

	}



	if (isset($atts['s'])) {

		$args['s'] = $atts['s'];

	}



	$class = isset($atts['class']) ? $atts['class'] : '';



	global $post;



	$query = new WP_Query( $args );



	echo '<div class="product-loop ' . $class . '">';



	if ($query->have_posts()) {



		$columns = isset($atts['columns']) ? $atts['columns'] : esc_attr( wc_get_loop_prop( 'columns' ) );



		if (isset($atts['type']) && $atts['type'] == 'slider') {

			?>

			<div class="slider-btn left"><img src="<?php echo get_theme_file_uri('img/arrow_left_white.png');?>"></div>

			<div class="slider-btn right"><img src="<?php echo get_theme_file_uri('img/arrow_right_white.png');?>"></div>

			<?php

		}



		?>

		<ul class="products columns-<?php echo $columns; ?>">

		<?php



		while ($query->have_posts()) {

			$query->the_post();

			wc_get_template_part( 'content', 'product' );

		}



		wp_reset_postdata();



		?>

		</ul>

		<?php





	} else {



		echo '<div class="no-results">'.__('No hay productos','dw').'</div>';



	}



	echo '</div>';



	$output = ob_get_clean();



	return $output;

}



add_shortcode('dw-products', 'dw_sc_products');

function dw_sc_products($atts) {

	ob_start();

	$title = isset($atts['title']) ? $atts['title'] : '';

	echo '<section class="dw-products products">';

	if ($title) {

		echo '<h2 class="title-products">' . $title . '</h2>';

	}

	$args = [];

	if (isset($atts['s'])) $args['s'] = $atts['s'];

	if (isset($atts['category'])) {

		$cat = get_term_by('slug',$atts['category'],'product_cat');

		if ($cat) {

			$args['category'] = $cat->term_id;

		}

	}

	$args['tag'] = 'div';

	echo dw_products($args);

	echo '</section>';

	return ob_get_clean();

}





/**

 * Quantity input

 */

add_action( 'woocommerce_before_quantity_input_field', 'dw_wc_qty_input_wrapper' );

function dw_wc_qty_input_wrapper() {

	echo '<div class="qty-wrapper">';

}

add_action( 'woocommerce_after_quantity_input_field', 'dw_wc_qty_input_wrapper_end' );

function dw_wc_qty_input_wrapper_end() {

	echo '<div class="up"></div><div class="sep"></div><div class="down"></div>';

	echo '</div>';

}





/**

 * Change breadcrumb defaults

 */

add_filter( 'woocommerce_breadcrumb_defaults', 'dw_woocommerce_breadcrumbs' );

function dw_woocommerce_breadcrumbs($array) {

	$array['delimiter'] = '<span class="delimiter"> / </span>';

	return $array;

}





add_action( 'wp_enqueue_scripts', 'dw_enqueue_wc_cart' );

function dw_enqueue_wc_cart() {

	if( is_checkout() ) {

		if( wp_script_is( 'wc-cart', 'registered' ) && !wp_script_is( 'wc-cart', 'enqueued' ) ) {

			wp_enqueue_script( 'wc-cart' );

		}

	}

}



/**

 * Function to convert price html to float

 */

function tofloat($num) {

	$num = 	str_replace('m2', '', $num);

	$dotPos = strrpos($num, ',');

	$commaPos = strrpos($num, '.');

	$sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :

			((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);

	if (!$sep) {

			return floatval(preg_replace("/[^0-9]/", "", $num));

	}

	return floatval(

			preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .

			substr($num, $sep+1, strlen($num))

	);

}



/**

 * Change number of products that are displayed per page (shop page)

 */

add_filter( 'loop_shop_per_page', 'dw_loop_shop_per_page', 20 );

function dw_loop_shop_per_page( $cols ) {

	$cols = get_option('dw-op-loop-per-page') ? get_option('dw-op-loop-per-page') : 9;

	return $cols;

}



/**

 * Add archive description after main content

 */

add_action( 'woocommerce_after_main_content', 'dw_term_description', 20 );

function dw_term_description() {

	echo '<div class="archive-description">';

	woocommerce_product_archive_description();

	woocommerce_taxonomy_archive_description();

	echo '</div>';

}





/**

 * Add "dw-products-category" class to HTML Body 

 * if archive wc-page has subcategories

 */

add_filter( 'body_class', 'dw_wc_product_cats_css_body_class' );

function dw_wc_product_cats_css_body_class( $classes ){

	if ( is_tax( 'product_cat' ) || is_shop() ) {

		$cat = get_queried_object();

		$term = get_queried_object();

		$children = get_terms( $term->taxonomy, array(

			'parent'    => $term->term_id,

			'hide_empty' => false

		) );

		if ($children && !is_wp_error($children)) { 

			$classes[] = 'dw-products-category';

		}

	}

	return $classes;

}



/**

 * Remove 'etheme' shortcodes form product content

 */

function dw_remove_shortcodes( $content ) {

	if ( is_product() ) {

		$content = preg_replace ( '/\[etheme(.*?)\]/s' , '' , $content );

	}

	return $content;

}

add_filter( 'the_content', 'dw_remove_shortcodes' );







// if (function_exists('is_woocommerce')) {

	

// 	/**

// 	 * Enable Gutenberg support for WooCommerce Products

// 	 */

// 	add_filter( 'use_block_editor_for_post_type', function ( $can_edit, $post_type ) {

// 	if ( $post_type == 'product' ) {

// 		$can_edit = true;

// 		}

// 		return $can_edit;

// 	}, 10, 2 );

	

// 	/**

// 	 * Conflict with block editor and clasic editor

// 	 */

// 	add_filter( 'wp_default_editor', 'dw_default_editor' );

// 	function dw_default_editor( $editor ) {

// 		global $pagenow;

// 		if ( ($pagenow === 'post.php' || $pagenow === 'post-new.php' ) && get_post_type() == 'product' ) {

// 			$editor = 'html';

// 		}

// 		return $editor;

// 	}



// 	/**

// 	 * Enable taxonomy fields for woocommerce with gutenberg on

// 	 */

// 	function dw_enable_taxonomy_rest( $args ) {

// 		$args['show_in_rest'] = true;

// 		return $args;

// 	}

// 	add_filter( 'woocommerce_taxonomy_args_product_cat', 'dw_enable_taxonomy_rest' );

// 	add_filter( 'woocommerce_taxonomy_args_product_tag', 'dw_enable_taxonomy_rest' );



// }





/**

 * Remove h2 in product loop title template

 */

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

add_action( 'woocommerce_shop_loop_item_title', 'doo_wc_template_loop_product_title', 10 );

function doo_wc_template_loop_product_title() {

	echo '<div class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</div>';

}







/**

 * Filter for Block products grid

 */

add_filter( 'woocommerce_blocks_product_grid_item_html', 'doo_woocommerce_blocks_product_grid_item_html_filter', 10, 3 );

function doo_woocommerce_blocks_product_grid_item_html_filter( $html, $data, $product ) {

	ob_start();

	$product_id = $product->get_id();

	?>

	<li <?php wc_product_class( '', $product ); ?>>

		<?php

		$link = apply_filters( 'woocommerce_loop_product_link', get_permalink($product_id), $product );

		echo '<a href="' . esc_url( $link ) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';

		echo $product->get_image('medium');

		echo '</a>';

		echo '<div class="content">';

		echo '<div class="category-title">';

		$cat_list = wc_get_product_category_list( $product_id );

		$array = explode( ', ', $cat_list );

		$array = array_slice($array, 0, 2);

		echo implode(', ',$array);

		echo '</div>';

		echo '<a href="' . esc_url( $link ) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';

		echo '<div class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . $product->get_name() . '</div>';

		echo '</a>';

		if ( $price_html = $product->get_price_html() ) {

			?>

			<span class="price"><?php echo $price_html; ?></span>

			<?php

		}

		echo '<a href="' . $link . '" class="button btn addtocartbutton">' . __('Ver producto','dw') . '</a>';

		echo '</div';

		?>

	</li>

	<?php

	$html = ob_get_clean();

	return $html;

}





/**

 * Funtion to display subcategories and products cached

 */

function doo_get_product_cats_cached($attr) {

	$cats = isset($attr['sel_categories']) ? $attr['sel_categories'] : [];

	$variant = $attr['variant'] ?? '';

	$filters = isset($attr['filters']) ? $attr['filters'] : false;



	$number = get_option('dw-op-loop-per-page') ?: -1;

	$page = get_query_var('paged') ?: (get_query_var('pagenum') ?: 1);



	// Crear una clave única para el transient

	$transient_key = 'doo_products_' . md5(json_encode($attr) . '_page_' . $page);



	// Intentar obtener de caché

	$cached = get_transient($transient_key);

	if ($cached !== false) {

		return $cached;

	}



	// Si no está en caché, empezar a procesar

	ob_start();



	// Mostrar filtros si aplica

	if ($filters && $variant !== 'subcat' && $variant !== 'categories') {

		$class = strpos($_SERVER['REQUEST_URI'], '?') ? ' active' : '';

		echo '<div class="advanced-filter' . $class . '">';

		echo dw_wc_product_search_selects([]);

		echo '</div>';

	}



	woocommerce_product_loop_start();



	// Mostrar banner solo en primera página y si aplica

	if ($page === 1 && $variant !== 'products') {

		echo doo_render_banner_cats([

			'variant' => $variant,

			'sel_categories' => $cats

		]);

	}



	if ($variant !== 'subcat' && $variant !== 'categories') {

		$terms = ['exclude-from-catalog', 'exclude-from-search'];

		$args = [

			'post_status' => 'publish',

			'post_type' => 'product',

			'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],

			'posts_per_page' => $number,

			'paged' => $page,

			'tax_query' => [

				'relation' => 'AND',

				[

					'taxonomy' => 'product_visibility',

					'field' => 'name',

					'terms' => $terms,

					'operator' => 'NOT IN',

				],

				[

					'taxonomy' => 'product_cat',

					'field' => 'term_id',

					'terms' => $cats,

					'operator' => 'IN',

				],

			],

		];



		$query = new WP_Query($args);



		if ($query->have_posts()) {

			while ($query->have_posts()) {

				$query->the_post();

				wc_get_template_part('content', 'product');

			}

			wp_reset_postdata();

		}



		woocommerce_product_loop_end();



		if ($query->max_num_pages > 1) {

			add_filter('paginate_links', function ($link) {

				return $link . '#advanced-search';

			}, 999);



			$pagination_args = [

				'total' => $query->max_num_pages,

				'current' => $page,

				'base' => esc_url_raw(str_replace(999999999, '%#%', remove_query_arg('add-to-cart', get_pagenum_link(999999999, false)))),

				'format' => '',

			];

			wc_get_template('loop/pagination.php', $pagination_args);

		}

	}



	$content = ob_get_clean();



	// Guardar en transient (10 minutos o ajustable)

	set_transient($transient_key, $content, 10 * HOUR_IN_SECONDS);



	return $content;

}





/**

 * Function to remove transients

 */

// Products

add_action( 'save_post_product', 'doo_clear_product_cat_transients' );

add_action( 'deleted_post', 'doo_clear_product_cat_transients' );



// Product categories (taxonomy product_cat)

add_action( 'created_product_cat', 'doo_clear_product_cat_transients' );

add_action( 'edited_product_cat', 'doo_clear_product_cat_transients' );

add_action( 'delete_product_cat', 'doo_clear_product_cat_transients' );



function doo_clear_product_cat_transients() {

	global $wpdb;



	// Elimina transients normales

	$wpdb->query(

		"DELETE FROM {$wpdb->options}

		WHERE option_name LIKE '_transient_doo_products_%'"

	);



	// Elimina transients timeout

	$wpdb->query(

		"DELETE FROM {$wpdb->options}

		WHERE option_name LIKE '_transient_timeout_doo_products_%'"

	);

}





/**

 * Funtion to display subcategories and products

 */

function doo_get_product_cats($attr) {



	$cats = isset($attr['sel_categories']) ? $attr['sel_categories'] : [];

	$variant = $attr['variant'] ?: '';



	$number = get_option('dw-op-loop-per-page') ?: -1;

	$page = get_query_var('paged') ? get_query_var('paged') : 1;



	if (!get_query_var('paged') && get_query_var('pagenum')) {

		$page = get_query_var('pagenum');

	}



	$terms=[];

	$terms[]='exclude-from-catalog';

	$terms[]='exclude-from-search';

	$args = array(

		'post_status' => 'publish',

		'post_type' => 'product',

		'orderby'=> array('menu_order'=>'ASC','date'=>'DESC'),

		'posts_per_page' => $number,

		'paged' => $page,

		'tax_query' => array(

			'relation' => 'AND',

			array(

				'taxonomy' => 'product_visibility',

				'field'    => 'name',

				'terms'    => $terms,

				'operator'  => 'NOT IN',

			),

			array(

				'taxonomy' => 'product_cat',

				'field'    => 'term_id',

				'terms'    => $cats,

				'operator'  => 'IN',

			),

		),

	);





	ob_start();

	$filters = isset($attr['filters']) ? $attr['filters'] : false;

	if ($filters && $variant != 'subcat' && $variant != 'categories') {

		$class = strpos( $_SERVER['REQUEST_URI'], '?' ) ? ' active' : '';

		?>

		<div class="advanced-filter<?php echo $class; ?>">

			<?php

			echo dw_wc_product_search_selects($args);

			?>

		</div>

		<?php

	}



	woocommerce_product_loop_start();



	if ($page == 1 && $variant != 'products') {

		echo doo_render_banner_cats( array(

			'variant' => $variant,

			'sel_categories' => $cats

		) );

	}

	

	if ($variant != 'subcat' && $variant != 'categories') {



		$terms=[];

		$terms[]='exclude-from-catalog';

		$terms[]='exclude-from-search';

	

		$args = array(

			'post_status' => 'publish',

			'post_type' => 'product',

			'orderby'=> array('menu_order'=>'ASC','date'=>'DESC'),

			'posts_per_page' => $number,

			'paged' => $page,

			'tax_query' => array(

				'relation' => 'AND',

				array(

					'taxonomy' => 'product_visibility',

					'field'    => 'name',

					'terms'    => $terms,

					'operator'  => 'NOT IN',

				),

				array(

					'taxonomy' => 'product_cat',

					'field'    => 'term_id',

					'terms'    => $cats,

					'operator'  => 'IN',

				),

			),

		);

	

		$query = new WP_Query( $args );



		if ($query->have_posts()) {

	

			while ($query->have_posts()) {

				$query->the_post();

				wc_get_template_part( 'content', 'product' );

			}

	

			wp_reset_postdata();

			

		}

	

	}

	

	woocommerce_product_loop_end();



	if ($variant != 'subcat' && $variant != 'categories') {



		if ($query->max_num_pages > 1) {

			add_filter( 'paginate_links', function($link) {

				$link .= '#advanced-search';

				return $link;

			}, 999 );

		}



		$args = array(

			'total'   => $query->max_num_pages,

			'current' => $page,

			'base'    => esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) ),

			'format'  => '',

		);



		wc_get_template( 'loop/pagination.php', $args );



	}





	return ob_get_clean();



}





function doo_menu_cats() {

	$terms = doo_get_child_terms();

	ob_start();

	if (!empty($terms && !is_wp_error( $terms ))) {

		foreach ($terms as $term) {

			$title = get_term_meta($term->term_id, 'doo-cf-text-menu', true) ?: $term->name;

			$link = get_term_meta($term->term_id, 'doo-cf-link-menu', true) ?: get_term_link($term);

			?>

			<li class="menu-item parent">

				<a href="<?php echo $link; ?>"><span><?php echo $title; ?></span><span class="more">+</span><span class="minus">-</span></a>

					<?php

					$child_terms = doo_get_child_terms( $term->term_id, false );

					if (!empty($child_terms && !is_wp_error( $child_terms ))) {

						?>

						<div class="sub-sub-menu">

							<?php

							foreach ($child_terms as $child) {

								if (!get_term_meta($child->term_id, 'doo-cf-hide-menu', true)) {

									$title = get_term_meta($child->term_id, 'doo-cf-text-menu', true) ?: $child->name;

									$link = get_term_meta($child->term_id, 'doo-cf-link-menu', true) ?: get_term_link($child);

									?>

									<div class="menu-item child">

										<a href="<?php echo $link; ?>"><?php echo $title; ?></a>

									</div>

									<?php

								}

								$child_terms2 = doo_get_child_terms( $child->term_id );

								if (!empty($child_terms2 && !is_wp_error( $child_terms2 ))) {

									foreach ($child_terms2 as $child2) {

										$title = get_term_meta($child2->term_id, 'doo-cf-text-menu', true) ?: $child2->name;

										$link = get_term_meta($child2->term_id, 'doo-cf-link-menu', true) ?: get_term_link($child2);

										?>

										<div class="menu-item child level-2">

											<a href="<?php echo $link; ?>"><?php echo $title; ?></a>

										</div>

										<?php

									}

								}

							}

							?>

						</div>

						<?php

					}

				?>

			</li>

			<?php

		}

	}

	return ob_get_clean();

}





function doo_get_child_terms( $parent = 0, $hide = true ) {

	$args = array(

		'taxonomy'   => 'product_cat',

		'hide_empty' => false,

		'orderby'    => 'meta_value_num',

		'order'      => 'ASC',

		'meta_key'   => 'doo-cf-order',

		'parent'     => $parent,

	);

	if ($hide) {

		$args['meta_query'] = array(

			array(

				'key' => 'doo-cf-hide-menu',

				'compare' => 'NOT EXISTS',

			),

		);

	}

	$terms = get_terms($args);

	if (is_wp_error($terms)) {

		$terms = [];

	}

	$args = array(

		'taxonomy'   => 'product_cat',

		'hide_empty' => false,

		'orderby'    => 'name',

		'order'      => 'ASC',

		'parent'     => $parent,

	);

	if ($hide) {

		$args['meta_query'] = array(

			'relation' => 'AND',

			array(

				'key'     => 'doo-cf-order',

				'compare' => 'NOT EXISTS',

			),

			array(

				'key' => 'doo-cf-hide-menu',

				'compare' => 'NOT EXISTS',

			),

		);

	} else {

		$args['meta_query'] = array(

			array(

				'key'     => 'doo-cf-order',

				'compare' => 'NOT EXISTS',

			),

		);

	}

	$terms_without_order = get_terms($args);

	if (is_wp_error($terms_without_order)) {

		$terms_without_order = [];

	}

	return array_merge($terms, $terms_without_order);

}





/**

 * Categories banner

 */

add_action( 'woocommerce_before_shop_loop', 'doo_display_categories_banner', 5);

function doo_display_categories_banner() {

	if (is_shop()) {

			$parent_categories = get_terms([

					'taxonomy' => 'product_cat',

					'parent' => 0,

					'hide_empty' => true,

			]);

			doo_render_category_banner($parent_categories);

	} elseif (is_product_category()) {

			$current_cat = get_queried_object();

			$subcategories = get_terms([

					'taxonomy' => 'product_cat',

					'parent' => $current_cat->term_id,

					'hide_empty' => true,

			]);

			doo_render_category_banner($subcategories, $current_cat->term_id);

	}

}



function doo_render_category_banner($categories, $term_id = 0) {

	if (!empty($categories) && !is_wp_error($categories)) {

			$cats = [];

			foreach ($categories as $term) {

				if ($term && !is_wp_error($term)) {

					$cats[] = $term->term_id;

				}

			}

			echo '<div class="doo-category-banner" data-offset="12" data-parent="' . $term_id . '" data-total="' . count($cats) . '">';

			echo '<div class="doo-category-grid">';

			foreach (array_slice($categories, 0, 12) as $category) {

				$term = get_term($category, 'product_cat');

				if ($term && !is_wp_error($term)) {

					$image_id = get_term_meta($category->term_id, 'thumbnail_id', true);

					$image_url = wp_get_attachment_url($image_id);

					if (!$image_url) {

							$image_url = wc_placeholder_img_src();

					}

					$category_link = get_term_link($category->term_id, 'product_cat');

					

					echo '<div class="doo-category-item">';

					echo '<a href="' . esc_url($category_link) . '">';

					echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" class="rounded-image" />';

					echo '<div>' . esc_html($category->name) . '</div>';

					echo '</a>';

					echo '</div>';

				}

			}

			echo '</div>'; // .doo-category-grid

			if (count($categories) > 12) {

					echo '<button class="button doo-load-more">' . __('Cargar más', 'doo') . '</button>';

			}

			echo '<input type="hidden" name="banner-cats" value="' . implode(',', $cats) . '">';

			echo '</div>'; // .doo-category-banner

	}

}



add_action('wp_enqueue_scripts', 'doo_enqueue_scripts_banner');

function doo_enqueue_scripts_banner() {

	wp_enqueue_script('doo-ajax-load-more', get_template_directory_uri() . '/js/doo-ajax-load-more.js', array('jquery'), '1.0', true);

	wp_localize_script('doo-ajax-load-more', 'dooAjax', array(

			'ajax_url' => admin_url('admin-ajax.php'),

			'nonce' => wp_create_nonce('doo_load_more_nonce'),

	));

}



add_action('wp_ajax_doo_load_more_categories', 'doo_load_more_categories');

add_action('wp_ajax_nopriv_doo_load_more_categories', 'doo_load_more_categories');

function doo_load_more_categories() {

	check_ajax_referer('doo_load_more_nonce', 'nonce');



	$parent_id = intval($_POST['parent_id']);

	$offset = intval($_POST['offset']);

	$cats = explode(',',$_POST['categories']);



	if ($parent_id >= 0) {

		$categories = get_terms([

			'taxonomy' => 'product_cat',

			'parent' => $parent_id,

			'offset' => $offset,

			'number' => 6,

			'hide_empty' => true,

		]);

	} else {

		$categories = get_terms([

			'taxonomy' => 'product_cat',

			'offset' => $offset,

			'number' => 6,

			'hide_empty' => true,

			'include' => $cats,

		]);

	}

	if (!empty($categories) && !is_wp_error($categories)) {

		foreach ($categories as $category) {

			$image_id = get_term_meta($category->term_id, 'thumbnail_id', true);

			$image_url = wp_get_attachment_url($image_id);

			if (!$image_url) {

					$image_url = wc_placeholder_img_src();

			}

			$category_link = get_term_link($category->term_id, 'product_cat');

			

			echo '<div class="doo-category-item">';

			echo '<a href="' . esc_url($category_link) . '">';

			echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" class="rounded-image" />';

			echo '<div>' . esc_html($category->name) . '</div>';

			echo '</a>';

			echo '</div>';

		}

	}



	wp_die();

}





/**

 * Categories for banner block

 */

function doo_render_banner_cats( $attrs = [] ) {

	ob_start();

	$categories = [];

	if ($attrs['variant'] == 'categories') {

		if (!empty($attrs['sel_categories'])) {

			foreach ($attrs['sel_categories'] as $term_id) {

				$term = get_term($term_id, 'product_cat');

				if (!is_wp_error($term)) {

					$categories[] = $term; 

				}

			}

		}

	} else {

		if (!empty($attrs['sel_categories'])) {

			foreach ($attrs['sel_categories'] as $term_id) {

				$added = get_terms([

					'taxonomy' => 'product_cat',

					'parent' => $term_id,

					'hide_empty' => true,

				]);

				if (!empty($added) && !is_wp_error($added)) {

					$categories = array_merge($categories, $added);

				}

			}

		}

	}

	doo_render_category_banner($categories, -1);

	return ob_get_clean();

}





