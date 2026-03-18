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
	<link rel="preload" as="font" type="font/woff2" href="<?php echo get_template_directory_uri(); ?>/fonts/Poppins-SemiBold.woff2" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Critical CSS: desbloquea LCP (header + hero h1) mientras style.css carga async -->
	<style id="critical-css">
	*,::after,::before{box-sizing:inherit}
	html{line-height:1.15;-webkit-text-size-adjust:100%;box-sizing:border-box}
	body{margin:0;font-family:'Poppins',sans-serif}
	img{height:auto;max-width:100%;border-style:none}
	a{color:inherit;text-decoration:none}
	.skip-link.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute!important;height:1px;width:1px;overflow:hidden}
	.custom-logo-link{display:inline-block}
	.site-header{position:fixed;top:0;width:100%;height:118px;background-color:#fff;z-index:99;box-shadow:0 1px 5px 0 rgba(0,0,0,.18)}
	.site-header .site-header-content{display:grid;grid-template-columns:264px 1fr 250px 250px;align-items:center;justify-content:center;max-width:1500px;margin:0 auto;height:118px}
	.site-header .site-header-content img.custom-logo{height:77px;width:264px}
	.full-width{width:100vw;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw}
	.alignfull{width:100%;margin-left:0;margin-right:0}
	.wp-block-cover{position:relative;background-size:cover;background-position:50%;min-height:430px;display:flex;align-items:center;overflow:hidden}
	.wp-block-cover .wp-block-cover__image-background{position:absolute;top:0;left:0;right:0;bottom:0;margin:0;padding:0;width:100%;height:100%;max-width:none;max-height:none;object-fit:cover}
	.wp-block-cover__inner-container{position:relative;z-index:1;width:100%;padding:0 20px}
	.wp-block-cover.alignfull .wp-block-heading{font-size:44px;line-height:150%;font-weight:700;margin:0}
	.has-text-align-center{text-align:center}
	.has-doo-white-color{color:#fff}
	.has-doo-white-color strong{color:#4dd2d0}
	@media(max-width:1500px){.site-header .site-header-content{padding:0 15px}}
	@media(max-width:1300px){.site-header .site-header-content{grid-template-columns:200px 1fr 200px 200px}.site-header .site-header-content img.custom-logo{height:58px;width:198px}}
	@media(max-width:800px){.site-header{height:80px}.site-header .site-header-content{height:80px;grid-template-columns:.2fr .8fr 40px .2fr}.wp-block-cover.alignfull{min-height:250px}.wp-block-cover.alignfull .wp-block-heading{font-size:40px!important;line-height:150%}}
	@media(max-width:600px){.wp-block-cover.alignfull{min-height:200px}.wp-block-cover.alignfull .wp-block-heading{font-size:32px!important;line-height:150%}}
	</style>

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
