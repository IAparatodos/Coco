<?php

if (is_admin()) {

	// Custom fields for posts
	function dw_post_fields() {
		$fields=array(
			array('name'=>'cfp-subtitle','type'=>'textarea','rows'=>3,'label'=>__('Subtítulo','dw'),
				'description'=>__('Subtítulo a añadir al título','dw')),
		);
		return $fields;
	}
	
	// Register meta-box for post
	function dw_register_meta_box_post() {
		global $post;
		add_meta_box(
			'dw-meta-box-id-post',
			__('DATOS ADICIONALES','dw'),
			'dw_display_meta_box_post',
			array('post'),
			'side',
			'low'
		);
	}
	add_action('add_meta_boxes','dw_register_meta_box_post');
	
	// Custom fields to edit "post" posts  
	function dw_display_meta_box_post($post) {
		$fields=dw_post_fields();
		$postid=$post->ID;
		echo '<div class="form-fields">'; 
		foreach ($fields as $field) {
			$field_value=get_post_meta($postid,$field['name'],true);
			echo '<div class="field">';
				dw_field_cpt_display($field,$field_value,$field['label']);
			echo '</div>';
		}
		echo '</div>';
	}
	
	// Save meta-box content: postype post
	function dw_post_save_fields($post_id) {
		global $post;
		$fields=dw_post_fields();
		if (defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE) return;
		if (!current_user_can('edit_post',$post_id)) return;
		if (defined('DOING_AJAX')) return;
		foreach ($fields as $field) {
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
	add_action('save_post','dw_post_save_fields');

}	


/**
 * Add subtitle inside title for posts
 */
add_filter( 'the_title', 'dw_add_subtitle', 10, 2 );
function dw_add_subtitle( $title, $id = null ) {
	$subtitle = get_post_meta($id, 'cfp-subtitle', true);
	if ($subtitle) {
		$title .= '<span class="subtitle">' . $subtitle . '</span>';
	}
	return $title;
}
