<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adrihosan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


	<!-- Added by other -->
	<!-- <div data-tf-sidetab="DFJkKZt9" data-tf-width="320" data-tf-height="550" data-tf-hide-headers data-tf-open="scroll" data-tf-open-value="60" data-tf-button-color="#102E35" data-tf-button-text="Asistente de compra" data-tf-iframe-props="title=Adrihosan Pavimentos" data-tf-medium="snippet" hidden="utm_campaign=asistente+pavimentos" style="all:unset;"></div><script src="//embed.typeform.com/next/embed.js"></script> -->
	<!--<div data-tf-sidetab="qfz1yAFq" data-tf-width="320" data-tf-height="550" data-tf-open="exit" data-tf-open-value="50" data-tf-button-color="#000000" data-tf-button-text="Ayuda para revestimientos" data-tf-iframe-props="title=Adrihosan Revestimientos" data-tf-medium="snippet" style="all:unset;"></div><script src="//embed.typeform.com/next/embed.js"></script> -->
	<!-- <div data-tf-sidetab="fuoxcWrg" data-tf-width="320" data-tf-height="550" data-tf-hide-headers data-tf-open="scroll" data-tf-open-value="60" data-tf-button-color="#102E35" data-tf-button-text="Asistente de compra" data-tf-iframe-props="title=Adrihosan Fregaderos" data-tf-medium="snippet" hidden="utm_campaign=asistente+fregaderos" style="all:unset;"></div><script src="//embed.typeform.com/next/embed.js"></script> -->
	<!-- <div data-tf-sidetab="B0aKXXpO" data-tf-width="320" data-tf-height="550" data-tf-hide-headers data-tf-open="scroll" data-tf-open-value="60" data-tf-button-color="#102E35" data-tf-button-text="Asistente de compra" data-tf-iframe-props="title=Adrihosan Solid" data-tf-medium="snippet" data-tf-hidden="utm_campaign=asistente+solid" style="all:unset;"></div><script src="//embed.typeform.com/next/embed.js"></script> -->



</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSDZCN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'adrihosan' ); ?></a>

	<header id="masthead" class="site-header full-width">
		<div class="site-header-content">
			<div class="site-branding">
				<?php
				the_custom_logo();
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo get_theme_file_uri('img/menu-movil.svg');?>" width="24" height="24" alt="Menu"></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<?php get_search_form();?>

			<a class="site-cart" href="<?php echo wc_get_cart_url();?>" title="<?php echo __('Pedido','adrihosan');?>">
				<?php
				$count = WC()->cart->get_cart_contents_count();
				if ($count > 0) {
					?>
					<img src="<?php echo get_theme_file_uri('img/cart2.svg');?>" alt="<?php _e('Pedido','adrihosan');?>" width="24" height="24">
					<?php
				} else {
					?>
					<img src="<?php echo get_theme_file_uri('img/cart.svg');?>" alt="<?php _e('Pedido','adrihosan');?>" width="24" height="24">
					<?php
				}
				?>
				<div id="mini-cart-count" class="counter-items cart-items count-<?php echo $count;?>">
					<?php echo $count;?>
				</div>
				<?php
				// Usar get_total() en vez de wc_cart_totals_order_total_html()
				// que ejecuta queries pesadas de impuestos/cupones/envío innecesarias en el header
				$total = WC()->cart->get_total();
				echo '<div class="cart-total">' . __('Pedido:','adrihosan') . ' <span id="mini-cart-total">' . $total . '</span></div>';
				?>
			</a>
		</div>
	</header><!-- #masthead -->
