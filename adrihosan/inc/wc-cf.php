<?php
/**
 * Woocommerce: Custom Fields for product
 */

// Custom Fields in product (woocommerce)
// Extras tab
function dw_wc_fields_extras() {
	$fields=array(
		array('id'=>'custom_tab1_title','label'=>__('Título tab producto','dw'),'placeholder'=>'','desc_tip'=>true,'description'=>__('Título tab adicional.','dw'),'type'=>'text'),
		array('id'=>'custom_tab1','label'=>__('Contenido tab producto','dw'),'placeholder'=>'','desc_tip'=>true,'description'=>__('Contenido tab adicional.','dw'),'type'=>'editor','rows'=>12),
	);
	return $fields;
}

/**
* Add fields in the WooCommerce product extras tab
*/
function dw_create_extras_custom_fields() {
	global $post;
	$fields=dw_wc_fields_extras();
	$product=wc_get_product($post->ID);
	echo '<div id="dw_product_extra_data" class="panel woocommerce_options_panel hidden">';
	foreach ($fields as $field) {
		dw_wc_field_input($field);
	}
	echo '</div>';
}
add_action('woocommerce_product_data_panels','dw_create_extras_custom_fields');

/**
* Saves the custom fields data to product meta data
*/
function dw_save_custom_fields($post_id) {
	$fields = dw_wc_fields_extras();
	foreach ($fields as $field) {
		if (isset($_POST[$field['id']])&&$_POST[$field['id']]!='') {
			$value='';
			switch ($field['type']) {
				case 'text';case 'number';case 'numeric';case 'select';case 'icon';case 'image':
					$value=esc_attr($_POST[$field['id']]);
				break;
				case 'textarea':
					$value=esc_html($_POST[$field['id']]);
				break;
				case 'editor':
					$value=wp_kses_post($_POST[$field['id']]);
				break;
				case 'combine';
					if (isset($field['added'])) {
						foreach ($field['added'] as $field_add) {
							if (isset($_POST[$field_add['id']])&&$_POST[$field_add['id']]!='') {
								$value=esc_attr($_POST[$field_add['id']]);
								update_post_meta($post_id,$field_add['id'],$value);
							} else {
								delete_post_meta($post_id,$field_add['id']);
							}
						}
					}
					$value=esc_attr($_POST[$field['id']]);
				break;
				default:
					$value=$_POST[$field['id']];
				break;
			}
			update_post_meta($post_id,$field['id'],$value);
		} else {
			delete_post_meta($post_id,$field['id']);
		}
	}
}
add_action('woocommerce_process_product_meta','dw_save_custom_fields');

// Tabs in woocommerce product
function dw_product_settings_tabs( $tabs ) {
	$tabs['extras'] = array(
		'label'    => 'Tab adicional',
		'target'   => 'dw_product_extra_data',
		'class'    => array('show_if_simple','show_if_variable','show_if_grouped'),
		'priority' => 51,
	);
	return $tabs;
}
add_filter('woocommerce_product_data_tabs','dw_product_settings_tabs');

// Icono extras tab
add_action('admin_head', 'dw_css_icon');
function dw_css_icon(){
	echo '<style>
	#woocommerce-product-data ul.wc-tabs li.extras_options.extras_tab a:before{
		content: "\f116";
	}
	</style>';
}

function dw_wc_field_input($field) {
	global $post;
	switch ($field['type']) {
		case 'text'; case 'number':
			woocommerce_wp_text_input($field);
		break;
		case 'textarea':
			woocommerce_wp_textarea_input($field);
		break;
		case 'checkbox':
			woocommerce_wp_checkbox($field);
		break;
		case 'select':
			woocommerce_wp_select($field);
		break;
		case 'icon'; case 'image'; case 'pdf'; case 'video':
			$field_value=get_post_meta($post->ID,$field['id'],true);
			echo '<div>';
			echo '<p class="form-field '.$field['id'].'_field">';
			echo '<label for="'.$field['id'].'">'.$field['label'].'</label>';
			echo '<input type="text" name="'.$field['id'].'"';
			echo ' id="'.$field['id'].'" placeholder="'.$field['placeholder'].'" class="meta-image '.$field['id'].'"';
			echo ' value="'.$field_value.'">';
			echo '<input type="button" class="button image-upload '.$field['id'].'" value="'.__('Subir','dw').'">'; 
			echo '<input type="button" class="button image-reset '.$field['id'].'" value="'.__('Borrar','dw').'">';
			echo '</p>';
			if (!$field['desc_tip']) echo '<span class="description">'.$field['description'].'</span>';
			echo '<p class="wc image-preview '.$field['id'].' '.$field['type'].'">';
			if ($field_value) echo '<img src="'.$field_value.'">';
			else echo '<img src="">';
			echo '</p>';
			$seltext=__('Seleccionar imagen','dw');
			$select=__('Selecciona','dw');
			?>
			<script>
				jQuery(document).ready(function($) {
					var imageSelClass='.image-upload.<?php echo $field['id']; ?>';
					$(imageSelClass).click(function(e) {
						e.preventDefault();
						element=$(this);
						var meta_image_frame;
						var meta_image_preview=element.parent().parent().children('.image-preview');
						var meta_image=element.parent().children('.meta-image');
						if (meta_image_frame) {
							meta_image_frame.open();
							return;
						}
						meta_image_frame=wp.media.frames.meta_image_frame=wp.media({
							title: '<?php echo $seltext; ?>',
							button: {
								text: '<?php echo $select; ?>',
							},
						});
						meta_image_frame.on('select',function() {
							var media_attachment=meta_image_frame
								.state()
								.get('selection')
								.first()
								.toJSON();
							meta_image.attr('value',media_attachment.url);
							meta_image_preview.children('img').attr('src',media_attachment.url);
						});
						meta_image_frame.open();
					});
					var imageResClass='.image-reset.<?php echo $field['id']; ?>';
					$(imageResClass).click(function(e) {
						e.preventDefault();
						element=$(this);
						var meta_image=element.parent().children('.meta-image');
						var meta_image_preview=element.parent().parent().children('.image-preview');
						meta_image.attr('value','');
						meta_image_preview.children('img').attr('src','');
					});
				});
			</script>
			<?php
			echo '</div>';
		break;
		case 'color':
			$field_value=get_post_meta($post->ID,$field['id'],true);
			echo '<p class="form-field" style="display: flex;">';
			echo '<label for="'.$field['id'].'">'.$field['label'].'</label>';
			echo '<input type="text" name="'.$field['id'].'"';
			echo ' id="'.$field['id'].'-id" class="meta-color width-100"';
			if (isset($field_value)) echo ' value="'.$field_value.'"';
			echo '>';
			echo '<input type="button" class="button reset-'.$field['id'].'" value="'.__('Borrar','dw').'">';
			echo '</p>';
			echo '<p class="color-preview '.$field['id'].' '.$field['type'].'"';
			if (isset($field_value)) echo ' style="background-color:'.$field_value.';width:40px;height:40px;border-radius:50%;border:1px solid black;"';
			echo '></p>';
			?>
			<script>
				jQuery('.reset-<?php echo $field['id']; ?>').click(function(e) {
					e.preventDefault();
					jQuery('#<?php echo $field['id']; ?>-id').val('');
				});
			</script>
			<?php
		break;
		case 'editor':
			$content=get_post_meta($post->ID,$field['id'],true);
			$editor_id='dw-editor-'.$field['id'];
			$rows = isset($field['rows']) ? $field['rows'] : 12;
			$settings=array(
				'textarea_name'=>$field['id'],
				'textarea_rows'=>$rows,
				'editor_height' => $rows * 25,
			);
			wp_editor($content,$editor_id,$settings);
			if (!$field['desc_tip']) echo '<span class="description">'.$field['description'].'</span>';
		break;
		case 'date':
			$field_value=get_post_meta($post->ID,$field['id'],true);
			echo '<p class="form-field" style="display: flex;">';
			echo '<label for="'.$field['id'].'">'.$field['label'].'</label>';
			echo '<input type="date" name="'.$field['id'].'"';
			echo ' id="'.$field['id'].'-id" class="meta-color width-100"';
			if (isset($field_value)) echo ' value="'.$field_value.'"';
			echo '>';
			echo '</p>';
		break;
		case 'time':
			$field_value=get_post_meta($post->ID,$field['id'],true);
			echo '<p class="form-field" style="display: flex;">';
			echo '<label for="'.$field['id'].'">'.$field['label'].'</label>';
			echo '<input type="time" name="'.$field['id'].'"';
			echo ' id="'.$field['id'].'-id" class="meta-color width-100"';
			if (isset($field_value)) echo ' value="'.$field_value.'"';
			echo '>';
			echo '</p>';
		break;
	}
}

