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
	<?php
	$font_uri = get_template_directory_uri() . '/fonts/';
	// Producto: precargar SemiBold (título/precio), Regular, Light (breadcrumb 300), Medium (descripción 500)
	// No precargar Bold (700) porque no se usa above-the-fold en producto
	if ( is_singular('product') ) : ?>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-SemiBold.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-Regular.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-Light.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-Medium.woff2" crossorigin>
	<?php else : ?>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-SemiBold.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-Regular.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-Bold.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-Light.woff2" crossorigin>
	<link rel="preload" as="font" type="font/woff2" href="<?php echo $font_uri; ?>Poppins-Medium.woff2" crossorigin>
	<?php endif; ?>
	<link rel="preconnect" href="https://mpc2-prod-26-is5qnl632q-uc.a.run.app" crossorigin>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Critical CSS: desbloquea LCP (header + hero h1) mientras style.css carga async -->
	<style id="critical-css">
	@font-face{font-family:'Poppins Fallback';src:local('Arial');size-adjust:113.07%;ascent-override:92%;descent-override:23%;line-gap-override:0%}
	*,::after,::before{box-sizing:inherit}
	html{line-height:1.15;-webkit-text-size-adjust:100%;box-sizing:border-box}
	body{margin:0;font-family:'Poppins','Poppins Fallback',sans-serif}
	img{height:auto;max-width:100%;border-style:none}
	a{color:inherit;text-decoration:none}
	.skip-link.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute!important;height:1px;width:1px;overflow:hidden}
	.custom-logo-link{display:inline-block}
	.main-navigation ul{list-style:none;margin:0;padding-left:0;display:flex}
	.main-navigation ul.menu{justify-content:space-between;margin:0 0 0 100px;padding:0}
	.main-navigation ul.menu li{height:118px;align-items:center;display:flex;position:relative}
	.main-navigation ul.menu li a{text-transform:uppercase;color:#000;font:normal normal 500 14px/16px 'Poppins','Poppins Fallback',sans-serif;text-decoration:none;display:block}
	.main-navigation ul ul{position:absolute;top:100%;left:-999em;z-index:99999}
	.menu-toggle{display:none}
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
	@media(max-width:800px){.site-header{height:80px}.site-header .site-header-content{height:80px;grid-template-columns:.2fr .8fr 40px .2fr}.main-navigation ul{display:none}.menu-toggle{display:block;min-width:unset;background-color:transparent;border:none;margin:0 auto}.main-navigation ul.menu li{height:auto}.wp-block-cover.alignfull{min-height:250px}.wp-block-cover.alignfull .wp-block-heading{font-size:40px!important;line-height:150%}}
	@media(max-width:600px){.wp-block-cover.alignfull{min-height:200px}.wp-block-cover.alignfull .wp-block-heading{font-size:32px!important;line-height:150%}}
	.adrihosan-full-width-block{width:100vw;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw;box-sizing:border-box}
	.hero-section-container{position:relative;min-height:60vh;display:flex;align-items:center;justify-content:center;padding:60px 20px;box-sizing:border-box;background-size:cover;background-position:center;color:#fff;text-align:center;overflow:hidden;font-family:'Poppins','Poppins Fallback',sans-serif}
	.hero-section-container::after{content:'';position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(63,111,123,.45);z-index:1}
	.hero-content{position:relative;z-index:2;max-width:800px}
	.hero-content h1{font-size:42px;font-weight:700;line-height:1.2;margin:0 0 15px;text-shadow:0 2px 4px rgba(0,0,0,.5)}
	.hero-content p{font-size:18px;line-height:1.6;max-width:650px;margin:0 auto 30px;text-shadow:0 1px 3px rgba(0,0,0,.5)}
	@media(max-width:768px){.hero-section-container{min-height:50vh;padding:40px 15px}.hero-content h1{font-size:28px}.hero-content p{font-size:15px}}
	.woocommerce-breadcrumb{padding:56px 0 12px;font:normal normal 300 16px/25px 'Poppins','Poppins Fallback',sans-serif;font-weight:500;position:relative;z-index:10}
	.woocommerce-breadcrumb .delimiter,.woocommerce-breadcrumb a{color:#767676;font-weight:300}
	.single-product div.product.type-product{display:grid;grid-template-columns:486px 1fr;grid-column-gap:64px}
	.single-product .product_title{height:96px;color:#171717;font:normal normal 600 30px/25px 'Poppins','Poppins Fallback',sans-serif;line-height:50px;grid-column:1/span 2}
	.single-product .woocommerce-product-gallery__image{height:648px}
	.single-product .woocommerce-product-gallery__image img{width:100%;height:auto}
	.single-product .price{font:normal normal 600 25px/22px 'Poppins','Poppins Fallback',sans-serif;color:#4dd2d0}
	.single-product .woocommerce-product-details__short-description{font:normal normal 500 14px/20px 'Poppins','Poppins Fallback',sans-serif;color:#333}
	.single-product .box-price{font:normal normal 500 12px/22px 'Poppins','Poppins Fallback',sans-serif;font-weight:400;line-height:25px;color:#828282;padding:12px 0 8px}
	.single-product a.email-link{font:normal normal 300 13px/20px 'Poppins','Poppins Fallback',sans-serif;color:#333;display:flex;align-items:center}
	.single-product a.email-link img{margin-right:8px;width:19px;height:16px}
	.single-product .single_add_to_cart_button.button{height:44px;font:normal normal 500 18px/30px 'Poppins','Poppins Fallback',sans-serif;margin:45px 0 50px}
	@media(max-width:1100px){.single-product div.product.type-product{grid-template-columns:342.15px 1fr;grid-column-gap:32px;padding:0 15px}.single-product .woocommerce-product-gallery__image{height:456.84px}}
	@media(max-width:800px){.single-product div.product.type-product{display:block;padding:0}.single-product .product_title{height:unset;font:normal normal 600 25px/22px 'Poppins','Poppins Fallback',sans-serif;line-height:34px;padding:0 33px}.single-product .woocommerce-product-gallery__image{text-align:center}.single-product .entry-summary{padding:0 33px}.woocommerce-breadcrumb{font:normal normal 300 14px/25px 'Poppins','Poppins Fallback',sans-serif;margin-bottom:18px}.single-product .woocommerce-product-details__short-description{font:normal normal 300 16px/25px 'Poppins','Poppins Fallback',sans-serif;padding:12px 0}.single-product a.email-link{font:normal normal 300 15px/24px 'Poppins','Poppins Fallback',sans-serif}}
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
