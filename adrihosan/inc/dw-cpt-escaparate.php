<?php

// Add a post type: escaparate
function escaparate_custom_posttype() {
	$labels = array(
		'name'                => __( 'Escaparate', 'dw' ),
		'singular_name'       => __( 'Escaparate', 'dw' ),
		'menu_name'           => __( 'Escaparates', 'dw' ),
		'parent_item_colon'   => __( '', 'dw' ),
		'all_items'           => __( 'Todos los Escaparates', 'dw' ),
		'view_item'           => __( 'Ver un Escaparate', 'dw' ),
		'add_new_item'        => __( 'Añadir un Escaparate', 'dw' ),
		'add_new'             => __( 'Añadir nuevo', 'dw' ),
		'edit_item'           => __( 'Editar un Escaparate', 'dw' ),
		'update_item'         => __( 'Modificar un Escaparate', 'dw' ),
		'search_items'        => __( 'Buscar un Escaparate', 'dw' ),
		'not_found'           => __( 'No encontrado', 'dw' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'dw' ),
	);
	$args = array(
		'label'               => __( 'Escaparate', 'dw' ),
		'description'         => __( 'Páginas de Escaparate', 'dw' ),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'revisions'),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 11,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => true,
		'capability_type'     => 'page',
		'menu_icon'           => 'dashicons-camera-alt',
		'rewrite'             => array(
															'slug'=>'escaparate', 
															'with_front'=>false
														),
		'show_in_rest'        => true,
	);
	register_post_type( 'escaparate', $args );
}
add_action( 'init', 'escaparate_custom_posttype' );

if (is_admin()) {

	// Register meta-box for escaparate
	function dw_register_escaparate_meta_box() {
		add_meta_box(
			'dw-meta-box-id',
			__( 'Escaparates', 'dw' ),
			'dw_display_escaparate_meta_box',
			array('escaparate'),
			'side',
			'low'
		);
	}
	add_action( 'add_meta_boxes', 'dw_register_escaparate_meta_box' );

	function dw_escaparate_fields() {
		$fields=array(
			array('name'=>'cfp-class','type'=>'text','label'=>__('Clase(s) CSS adicional(es)','dw'),
				'description'=>__('Separa múltiples clases con espacios.','dw')),
		);
		return $fields;
	} 

	// Show escaparate meta-box
	function dw_display_escaparate_meta_box( $post ) {
		$fields = dw_escaparate_fields();
		echo '<div class="dw-cpt-form">';
		foreach ($fields as $field) {
			$field_value=get_post_meta($post->ID,$field['name'],true);
			dw_field_cpt_display($field,$field_value,true);
		}
		echo '</div>';
	}

	// Save meta-box content: postype escaparate
	function dw_escaparate_save_fields( $post_id ) {
		$fields = dw_escaparate_fields();
		if (defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE) return;
		if (!current_user_can('edit_post',$post_id)) return;
		if (defined('DOING_AJAX')) return; // Don't update on Quick Edit
		foreach ($fields as $field) {
			if (isset($_POST[$field['name']])&&$_POST[$field['name']]!='') {
				if ($field['type']=='editor') {$post_field=wp_kses_post($_POST[$field['name']]);}
				else {$post_field=$_POST[$field['name']];}
				update_post_meta($post_id,$field['name'],$post_field);
			} else {
				if (isset($field['default'])) {
					update_post_meta($post_id,$field['name'],$field['default']);
				} else {
					delete_post_meta($post_id,$field['name']);
				}
			}
		}
	}
	add_action( 'save_post_escaparate', 'dw_escaparate_save_fields' );

}
