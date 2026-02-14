<?php

if (is_admin()) {

	// Custom fields for pages
	function dw_page_fields() {
		$page_fields=array(
			array('name'=>'cfp-class','type'=>'text','label'=>__('Clase(s) CSS adicional(es)','dw'),
				'description'=>__('Separa múltiples clases con espacios.','dw')),
		);
		return $page_fields;
	}

	// Register meta-box for page
	function dw_register_meta_box_page() {
		global $post;
		if ( is_page() && $post->post_parent ) return;
		add_meta_box(
			'dw-meta-box-id-page',
			__('DATOS ADICIONALES','dw'),
			'dw_display_meta_box_page',
			array('page'),
			'side',
			'low'
		);
	}
	add_action('add_meta_boxes','dw_register_meta_box_page');

	// Custom fields to edit "page" posts  
	function dw_display_meta_box_page($post) {
		$page_fields=dw_page_fields();
		$postid=$post->ID;
		echo '<div class="form-fields">'; 
		foreach ($page_fields as $field) {
			$field_value=get_post_meta($postid,$field['name'],true);
			echo '<div class="field">';
				dw_field_cpt_display($field,$field_value,$field['label']);
			echo '</div>';
		}
		echo '</div>';
	}
	
	// Save meta-box content: postype page
	function dw_page_save_fields($post_id) {
		global $post;
		$page_fields=dw_page_fields();
		if (defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE) return;
		if (!current_user_can('edit_post',$post_id)) return;
		if (defined('DOING_AJAX')) return;
		foreach ($page_fields as $field) {
			if (isset($_POST[$field['name']])&&$_POST[$field['name']]!='') {
				update_post_meta($post_id,$field['name'],$_POST[$field['name']]);
			} else {
				if (isset($field['default'])) {
					update_post_meta($post_id,$field['name'],$field['default']);
				} else {
					delete_post_meta($post_id,$field['name']);
				}
			}
		}
	}
	add_action('save_post','dw_page_save_fields');

}


// Page classes in Body Class
function add_page_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$class = get_post_meta( $post->ID, 'cfp-class', true);
		if ($class) $classes[] = $class;
	}
	return $classes;
}
add_filter( 'body_class', 'add_page_body_class' );