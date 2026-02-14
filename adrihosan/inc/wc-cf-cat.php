<?php

/**
 * Custom fields for product_cat
 */

if (is_admin()) {

	// Custom field for categories in products
	function dw_product_cat_fields() {
		$fields=array(
			array('name'=>'cfpc-image-desktop','label'=>__('Imagen escritorio','dw'),'placeholder'=>'','description'=>__('Selecciona la imagen para la categoría en el escritorio','dw'),'type'=>'image'),
			array('name'=>'cfpc-image-mobile','label'=>__('Imagen móvil','dw'),'placeholder'=>'','description'=>__('Selecciona la imagen para la categoría en el móvil','dw'),'type'=>'image'),
			array('name'=>'doo-cf-text-menu','label'=>__('Texto menú personalizado','dw'),'description'=>__('Texto para el submenu personalizado de categorías con clase "custom-menu-category"','dw'),'type'=>'textarea','rows'=>1),
			array('name'=>'doo-cf-link-menu','label'=>__('Enlace menú personalizado','dw'),'description'=>__('URL personalizada de enlace para el menu personalizado de categorías (en blanco para la página de categoría)','dw'),'type'=>'text'),
			array('name'=>'doo-cf-hide-menu','label'=>__('Ocultar en menú personalizado','dw'),'description'=>__('Marcar para no mostrar en el menú personalizado','dw'),'type'=>'checkbox'),
			array('name'=>'doo-cf-order','label'=>__('Orden para menú personalizado','dw'),'description'=>'','type'=>'number','default'=>0),
		);
		return $fields;
	}

	// Custom fields to add "product_cat" taxonomy  
	function dw_category_add_custom_fields() {
		$cat_fields = dw_product_cat_fields();
		foreach ($cat_fields as $field) {
			echo '<div class="form-field">';
			dw_field_cpt_display($field,'',$field['label']);
			echo '</div>';
		}
	}
	add_action('product_cat_add_form_fields','dw_category_add_custom_fields');

	// Custom fields to edit "product_cat" taxonomy  
	function dw_category_edit_custom_fields($term) {
		$cat_fields = dw_product_cat_fields();
		$term_id=$term->term_id;
		foreach ($cat_fields as $field) {
			$term_meta=get_term_meta($term_id,$field['name'],true);
			dw_field_cpt_display($field,$term_meta,$field['label'],true);
		}
	}
	add_action( 'product_cat_edit_form_fields','dw_category_edit_custom_fields',10,2);

	// Custom fields to save "product_cat" taxonomy 
	function dw_save_category_custom_fields($term_id) {
		// Don't update on Quick Edit
		if (defined('DOING_AJAX')) {
			return $term_id;
		}
		$cat_fields = dw_product_cat_fields();
		foreach ($cat_fields as $field) {
			if (isset($_POST[$field['name']])) {
				$term_meta=$_POST[$field['name']];
				if ($term_meta==''&&isset($field['default'])) {  //Force a data if default and empty
					update_term_meta($term_id,$field['name'],$field['default']);
				} else update_term_meta($term_id,$field['name'],$term_meta);
			} else {
				if (isset($field['default'])) {
					update_term_meta($term_id,$field['name'],$field['default']);
				} else {
					delete_term_meta($term_id,$field['name']);
				}
			}
		}
	}
	add_action('edited_product_cat','dw_save_category_custom_fields');
	add_action('create_product_cat','dw_save_category_custom_fields');

	// Custom fields in Column in product list
	function dw_product_cat_list_header($columns) {
		$new_columns = [];
		foreach( $columns as $key => $column ){
			$new_columns[$key] = $columns[$key];
			if ( $key == 'slug' ) {
				$new_columns['cfpc-image-desktop'] = '<span>'.__('Imagen escritorio','dw').'</span>';
				$new_columns['cfpc-image-mobile'] = '<span>'.__('Imagen móvil','dw').'</span>';
			}
		}
		return $new_columns;
	}
	add_filter( 'manage_edit-product_cat_columns', 'dw_product_cat_list_header' );

	function dw_product_cat_list_content($content, $column_name, $term_id) {
		global $post;
		if ($column_name == 'cfpc-image-desktop' || $column_name == 'cfpc-image-mobile') {
			$cont = get_term_meta($term_id, $column_name, true);
			if ($cont) {
				echo '<img src="'.$cont.'" alt="' . esc_attr__('image','dw') . '" height="48">';
			} else {
				echo '<div class="dashicons dashicons-minus"></div>';
			}
		}
	}
	add_action( 'manage_product_cat_custom_column', 'dw_product_cat_list_content', 10, 3 );

}
