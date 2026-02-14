<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adrihosan
 */


$icon = get_option('dw-op-footer-icon');
$icon1 = get_option('dw-op-address-icon');
$text1 = wpautop(get_option('dw-op-address-text'));
$icon2 = get_option('dw-op-contact-icon');
$text2 = wpautop(get_option('dw-op-contact-text'));
$copyright = get_option('dw-op-copyright');
if ($copyright) {
	$year = date('Y');
	$copyright = str_replace('[year]',$year,$copyright);
}
$menu = get_option('dw-op-footer-menu');
$post_id = get_option('dw-op-page-thankyou');

if (is_cart() || is_checkout() || is_wc_endpoint_url( 'order-received' ) || $post->ID == $post_id) {
	$class = 'woocommerce';
} else {
	$class = '';
}

?>

<?php 
if (!$class) {
	$block_id = get_option('dw-op-block-footer');
	if ($block_id) {
		echo '<div class="custom-block">';
		$get_block = get_post( $block_id );
		$content = $get_block->post_content;	
		// echo do_blocks($content);
		echo apply_filters('the_content', $content);
		echo '</div>';
	}
	if (is_front_page()) {
		$block_id = get_option('dw-op-block-footer-home');
		if ($block_id) {
			echo '<div class="custom-block-home">';
			$get_block = get_post( $block_id );
			$content = $get_block->post_content;
			// echo do_blocks($content);
			echo apply_filters('the_content', $content);
			echo '</div>';
		}
	}
}
?>

	<footer id="colophon" class="site-footer full-width <?php echo $class;?>">

		<?php if (!$class) {
			?>
			<div class="footer-container">
				<div class="footer-content">
					<div class="icon">
						<?php 
						if ($icon) {
							?>
							<img src="<?php echo $icon;?>" alt="footer_icon">
							<?php
						}
						?>
					</div>
					<div class="text item-1">
						<div class="text-icon">
							<?php 
							if ($icon1) {
								?>
								<img src="<?php echo $icon1;?>" alt="icon">
								<?php
							}
							?>
						</div>
						<div class="text-content">
							<?php echo $text1;?>
						</div>
					</div>
					<div class="text item-2">
						<div class="text-icon">
							<?php 
							if ($icon2) {
								?>
								<img src="<?php echo $icon2;?>" alt="icon">
								<?php
							}
							?>
						</div>
						<div class="text-content">
							<?php echo $text2;?>
						</div>
					</div>
						<div class="grup-dw-social-media"><?php echo do_shortcode('[dw-social-media]');?></div>
					<div class="grup-quality" style="text-align: center;">
						<a href="https://www.ecommerceverificado.com/www.adrihosan.com/" target="_blank" rel=" noreferrer noopener">
							<img decoding="async" width="" height="" class="img-quality" src="/wp-content/uploads/2025/10/sello-ecomerce-verificado-blanco.webp" alt="Seal of quality" style="height: auto;width: 110px;margin-top: 12px;margin-bottom: 12px;">
						</a>
					</div>
					<div class="col-right">
						<div class="blog"><?php _e('Blog','dw');?></div>
						<div class="title"><?php _e('Nueva publicación','dw');?></div>
						<?php echo dw_last_2_posts();?>
					</div>
				</div>
			</div>
			<?php
		}

		?>
		<div class="site-info">
			<div class="copyright">
				<?php echo $copyright;?>
			</div>
			<?php
			if ($menu) {
				wp_nav_menu(array('menu' => $menu));
			}
			?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
