<?php 



// **********************************************************************//
// ! Product brand label
// **********************************************************************//

add_action( 'admin_enqueue_scripts', 'et_brand_admin_scripts' );
if(!function_exists('et_brand_admin_scripts')) {
		function et_brand_admin_scripts() {
				$screen = get_current_screen();
				if ( in_array( $screen->id, array('edit-brand') ) )
			wp_enqueue_media();
		}
}
if(!function_exists('et_product_brand_image')) {
	function et_product_brand_image() {
		global $post, $wpdb, $product;
			$terms = wp_get_post_terms( $post->ID, 'brand' );
			if(count($terms)>0) {
				?>
				<div class="sidebar-widget product-brands">
					<div class="widget-title"><span><?php esc_html_e('Fabricante', 'dw') ?></span></div>
							<?php
								foreach($terms as $brand) {
									$image        = '';
									$thumbnail_id = absint( get_term_meta( $brand->term_id, 'thumbnail_id', true ) );
									?>
									<a href="<?php echo get_term_link($brand); ?>">
										<?php
										if ($thumbnail_id) :
											$image = wp_get_attachment_url( $thumbnail_id );
													?>
															<?php if($image != ''): ?>
																	<img src="<?php echo $image; ?>" title="<?php echo $brand->name; ?>" alt="<?php echo $brand->name; ?>" class="brand-image" />
																<?php else: ?>
																	<?php echo $brand->name; ?>
																<?php endif; ?>
													<?php

										else :
												echo $brand->name;
										endif; ?>
									</a>
									<?php
								}
							?>
				</div>
				<?php
			}
	}
}

add_action( 'init', 'et_create_brand_taxonomies', 0 );
if(!function_exists('et_create_brand_taxonomies')) {
	function et_create_brand_taxonomies() {
		$labels = array(
			'name'              => _x( 'Brands', 'royal-core' ),
			'singular_name'     => _x( 'Brand', 'royal-core' ),
			'search_items'      => esc_html__( 'Search Brands', 'royal-core' ),
			'all_items'         => esc_html__( 'All Brands', 'royal-core' ),
			'parent_item'       => esc_html__( 'Parent Brand', 'royal-core' ),
			'parent_item_colon' => esc_html__( 'Parent Brand:', 'royal-core' ),
			'edit_item'         => esc_html__( 'Edit Brand', 'royal-core' ),
			'update_item'       => esc_html__( 'Update Brand', 'royal-core' ),
			'add_new_item'      => esc_html__( 'Add New Brand', 'royal-core' ),
			'new_item_name'     => esc_html__( 'New Brand Name', 'royal-core' ),
			'menu_name'         => esc_html__( 'Brands', 'royal-core' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
						'capabilities'			=> array(
							'manage_terms' 		=> 'manage_product_terms',
				'edit_terms' 		=> 'edit_product_terms',
				'delete_terms' 		=> 'delete_product_terms',
				'assign_terms' 		=> 'assign_product_terms',
						),
			'rewrite'           => array( 'slug' => 'brand' ),
			'show_in_rest'      => true,
		);

		register_taxonomy( 'brand', array( 'product' ), $args );
	}
}

add_action( 'brand_add_form_fields', 'et_brand_fileds' );
if(!function_exists('et_brand_fileds')) {
	function et_brand_fileds() {
		global $woocommerce;
		?>
		<div class="form-field">
			<label><?php esc_html_e( 'Thumbnail', 'royal-core' ); ?></label>
			<div id="brand_thumbnail" style="float:left;margin-right:10px;"><img src="<?php echo wc_placeholder_img_src(); ?>" width="60px" height="60px" /></div>
			<div style="line-height:60px;">
				<input type="hidden" id="brand_thumbnail_id" name="brand_thumbnail_id" />
				<button type="submit" class="upload_image_button button"><?php esc_html_e( 'Upload/Add image', 'royal-core' ); ?></button>
				<button type="submit" class="remove_image_button button"><?php esc_html_e( 'Remove image', 'royal-core' ); ?></button>
			</div>
			<script type="text/javascript">

				// Only show the "remove image" button when needed
				if ( ! jQuery('#brand_thumbnail_id').val() )
					jQuery('.remove_image_button').hide();

				// Uploading files
				var file_frame;

				jQuery(document).on( 'click', '.upload_image_button', function( event ){

					event.preventDefault();

					// If the media frame already exists, reopen it.
					if ( file_frame ) {
						file_frame.open();
						return;
					}

					// Create the media frame.
					file_frame = wp.media.frames.downloadable_file = wp.media({
						title: '<?php _e( 'Choose an image', 'royal-core' ); ?>',
						button: {
							text: '<?php _e( 'Use image', 'royal-core' ); ?>',
						},
						multiple: false
					});

					// When an image is selected, run a callback.
					file_frame.on( 'select', function() {
						attachment = file_frame.state().get('selection').first().toJSON();

						jQuery('#brand_thumbnail_id').val( attachment.id );
						jQuery('#brand_thumbnail img').attr('src', attachment.url );
						jQuery('.remove_image_button').show();
					});

					// Finally, open the modal.
					file_frame.open();
				});

				jQuery(document).on( 'click', '.remove_image_button', function( event ){
					jQuery('#brand_thumbnail img').attr('src', '<?php echo wc_placeholder_img_src(); ?>');
					jQuery('#brand_thumbnail_id').val('');
					jQuery('.remove_image_button').hide();
					return false;
				});

			</script>
			<div class="clear"></div>
		</div>
		<?php
	}
}


add_action( 'brand_edit_form_fields', 'et_edit_brand_fields', 10,2 );
if(!function_exists('et_edit_brand_fields')) {
		function et_edit_brand_fields( $term, $taxonomy ) {
			global $woocommerce;

			$image 			= '';
			$thumbnail_id 	= absint( get_term_meta( $term->term_id, 'thumbnail_id', true ) );
			if ($thumbnail_id) :
				$image = wp_get_attachment_thumb_url( $thumbnail_id );
			else :
				$image = wc_placeholder_img_src();
			endif;
			?>
			<tr class="form-field">
				<th scope="row" valign="top"><label><?php esc_html_e( 'Thumbnail', 'royal-core' ); ?></label></th>
				<td>
					<div id="brand_thumbnail" style="float:left;margin-right:10px;"><img src="<?php echo $image; ?>" width="60px" height="60px" /></div>
					<div style="line-height:60px;">
						<input type="hidden" id="brand_thumbnail_id" name="brand_thumbnail_id" value="<?php echo $thumbnail_id; ?>" />
						<button type="submit" class="upload_image_button button"><?php esc_html_e( 'Upload/Add image', 'royal-core' ); ?></button>
						<button type="submit" class="remove_image_button button"><?php esc_html_e( 'Remove image', 'royal-core' ); ?></button>
					</div>
					<script type="text/javascript">

						// Uploading files
						var file_frame;

						jQuery(document).on( 'click', '.upload_image_button', function( event ){

							event.preventDefault();

							// If the media frame already exists, reopen it.
							if ( file_frame ) {
								file_frame.open();
								return;
							}

							// Create the media frame.
							file_frame = wp.media.frames.downloadable_file = wp.media({
								title: '<?php _e( 'Choose an image', 'royal-core' ); ?>',
								button: {
									text: '<?php _e( 'Use image', 'royal-core' ); ?>',
								},
								multiple: false
							});

							// When an image is selected, run a callback.
							file_frame.on( 'select', function() {
								attachment = file_frame.state().get('selection').first().toJSON();

								jQuery('#brand_thumbnail_id').val( attachment.id );
								jQuery('#brand_thumbnail img').attr('src', attachment.url );
								jQuery('.remove_image_button').show();
							});

							// Finally, open the modal.
							file_frame.open();
						});

						jQuery(document).on( 'click', '.remove_image_button', function( event ){
							jQuery('#brand_thumbnail img').attr('src', '<?php echo wc_placeholder_img_src(); ?>');
							jQuery('#brand_thumbnail_id').val('');
							jQuery('.remove_image_button').hide();
							return false;
						});

					</script>
					<div class="clear"></div>
				</td>
			</tr>
			<?php
		}
}

if(!function_exists('et_brands_fields_save')) {
		function et_brands_fields_save( $term_id, $tt_id, $taxonomy ) {

			if ( isset( $_POST['brand_thumbnail_id'] ) )
				update_woocommerce_term_meta( $term_id, 'thumbnail_id', absint( $_POST['brand_thumbnail_id'] ) );

			delete_transient( 'wc_term_counts' );
		}
}

add_action( 'created_term', 'et_brands_fields_save', 10,3 );
add_action( 'edit_term', 'et_brands_fields_save', 10,3 );