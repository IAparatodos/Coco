<?php

// Add a post type: proyecto
function doo_proyecto_custom_posttype() {
	$labels = array(
		'name'                => __( 'Proyectos', 'doo' ),
		'singular_name'       => __( 'Proyecto', 'doo' ),
		'menu_name'           => __( 'Proyectos', 'doo' ),
		'parent_item_colon'   => '',
		'all_items'           => __( 'Todos los Proyectos', 'doo' ),
		'view_item'           => __( 'Ver un Proyecto', 'doo' ),
		'add_new_item'        => __( 'Añadir un Proyecto', 'doo' ),
		'add_new'             => __( 'Añadir nuevo', 'doo' ),
		'edit_item'           => __( 'Editar un Proyecto', 'doo' ),
		'update_item'         => __( 'Modificar un Proyecto', 'doo' ),
		'search_items'        => __( 'Buscar un Proyecto', 'doo' ),
		'not_found'           => __( 'No encontrado', 'doo' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'doo' ),
	);
	$args = array(
		'label'               => __( 'Proyecto', 'doo' ),
		'description'         => __( 'Proyectos', 'doo' ),
		'labels'              => $labels,
		'supports'            => array('title','thumbnail', 'excerpt', 'editor','revisions','page-attributes'),
		'taxonomies'          => array('proyecto_cat'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 12,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'menu_icon'           => 'dashicons-store',
		'rewrite'             => array('slug'=>'proyecto'),
		'show_in_rest'        => true,
	);
	register_post_type( 'proyecto', $args );
}
add_action( 'init', 'doo_proyecto_custom_posttype' );

// Create a custom taxonomy for proyecto: proyecto_cat
function doo_create_proyecto_cat_taxonomy() {
	$labels = array(
		'name'              => _x( 'Categoría Proyecto', 'doo' ),
		'singular_name'     => _x( 'Categoría Proyecto', 'doo' ),
		'search_items'      => __( 'Buscar Categoría Proyecto', 'doo' ),
		'all_items'         => __( 'Todas las Categorías Proyecto', 'doo' ),
		'parent_item'       => __( 'Categoría Proyecto padre', 'doo' ),
		'parent_item_colon' => __( 'Categoría Proyecto padre:', 'doo' ),
		'edit_item'         => __( 'Editar Categoría Proyecto', 'doo' ), 
		'update_item'       => __( 'Modificar Categoría Proyecto', 'doo' ),
		'add_new_item'      => __( 'Añadir nueva Categoría Proyecto', 'doo' ),
		'new_item_name'     => __( 'Nombre nueva Categoría Proyecto', 'doo' ),
		'menu_name'         => __( 'Categorías Proyecto', 'doo' ),
	);    
	register_taxonomy('proyecto_cat',array('proyecto'), array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
		'rewrite'           => array(
			'slug' => 'proyecto-categoria',
			'hierarchical'=> true,
		),
	));
}
add_action( 'init', 'doo_create_proyecto_cat_taxonomy' );


if (is_admin()) {

	// Register meta-box for proyecto
	function doo_register_proyecto_meta_box() {
		add_meta_box(
			'dw-meta-box-id',
			__( 'Datos', 'doo' ),
			'doo_display_proyecto_meta_box',
			'proyecto',
			'side',
			'low'
		);
	}
	add_action( 'add_meta_boxes', 'doo_register_proyecto_meta_box' );

	function doo_proyecto_fields() {
		//Define Custom fields
		$fields = [];
		$fields[] = array( 'name'=>'doo-cf-ubicacion', 'type'=>'text', 'label'=>__( 'Ubicación', 'doo' ) );
		return $fields;
	} 

	// Show proyecto meta-box
	function doo_display_proyecto_meta_box( $post ) {
		$fields = doo_proyecto_fields();
		echo '<div class="dw-cpt-form">';
		foreach ($fields as $field) {
			$field_value = get_post_meta( $post->ID, $field['name'], true );
			dw_field_cpt_display( $field, $field_value, true );
		}
		echo '</div>';
	}

	// Save meta-box content: postype proyecto
	function doo_proyecto_save_fields( $post_id ) {
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
		if ( !current_user_can( 'edit_post', $post_id ) ) return;
		if ( defined( 'DOING_AJAX' ) ) return;
		$fields = doo_proyecto_fields();
		foreach ($fields as $field) {
			if ( isset($_POST[$field['name']]) && !empty($_POST[$field['name']]) ) {
				if ( $field['type'] == 'editor') {
					$post_field = wp_kses_post($_POST[$field['name']]);
				} else {
					$post_field = $_POST[$field['name']];
				}
				update_post_meta( $post_id, $field['name'], $post_field );
			} else {
				if ( isset($field['default']) ) {
					update_post_meta( $post_id, $field['name'], $field['default'] );
				} else {
					delete_post_meta( $post_id, $field['name'] );
				}
			}
		}
	}
	add_action( 'save_post_proyecto', 'doo_proyecto_save_fields' );

	// Add the custom columns to post type
	add_filter( 'manage_proyecto_posts_columns', 'doo_proyecto_columns' );
	function doo_proyecto_columns($columns) {
		$columns['img'] = __( 'Imagen destacada', 'doo' );
		$columns['order'] = '<span>' . __( 'Orden', 'doo' ). '</span>';
		return $columns;
	}

	// Add the data to the custom columns for post type
	add_action( 'manage_proyecto_posts_custom_column' , 'doo_proyecto_column', 10, 2 );
	function doo_proyecto_column( $column, $post_id ) {
		if( $column == 'img' ) {
			echo get_the_post_thumbnail( $post_id, array(80,80) );
		}
		if ($column == 'order') {
			echo '<div>' . get_post_field( 'menu_order', $post_id ) . '</div>';
		}
	}

	// Set columns sortable
	add_filter( 'manage_edit-proyecto_sortable_columns', 'doo_sortable_proyecto_column' );
	function doo_sortable_proyecto_column( $columns ) {
		$columns['order'] = array('order','asc');
		return $columns;
	}

	// Manage sortable columns
	add_action( 'pre_get_posts', 'doo_orderby_proyecto_custom_column' );
	function doo_orderby_proyecto_custom_column( $query ) {
		global $pagenow;
		if ( ! is_admin() || 'edit.php' != $pagenow || ! $query->is_main_query() || 'proyecto' != $query->get( 'post_type' ) ) {
			return;
		}
		$orderby = $query->get( 'orderby' );
		switch ( $orderby ) {
			case 'order':case '':
				$query->set( 'orderby', 'menu_order' );
				if ($query->get('order') == '') $query->set( 'order', 'asc');
				break;
			default:
				break;
		}
	}

	
	function doo_proyecto_cat_fields( $term_id = 0 ) {
		// Define Custom fields
		$options_proyecto=[];
		$options_proyecto[0]=__('Seleccionar proyecto','dw');
		$loop=new WP_Query(array('post_type'=>'proyecto','post_status'=>'publish','posts_per_page'=>-1,'orderby'=>'title','order'=>'ASC'));
		if ($loop->found_posts > 0) {
			foreach ($loop->posts as $p) {
				$options_proyecto[$p->ID]=$p->post_title;
			}
		}
		$fields = [];
		$fields[] = array( 'name'=>'doo-cf-image', 'type'=>'image-id', 'label'=>__( 'Imagen', 'doo' ) );
		$fields[] = array( 'name'=>'doo-cf-gallery-items','type'=>'number','min'=>0,'max'=>9,'label'=>__('Número imágenes galería','dw'),
			'description'=>__('Indique el número de imágenes para la galería','dw'),'autosave'=>true);
		$number_items = get_term_meta($term_id, 'doo-cf-gallery-items', true);
		if ($number_items) {
			for ($i=1;$i<=$number_items;$i++) {
				$fields[] = array('name'=>'doo-cf-image-'.$i,'type'=>'image-id','label'=>__('Imagen','dw').' '.$i);
				$fields[] = array('name'=>'doo-cf-proyect-'.$i,'type'=>'select','label'=>__('Proyecto','dw').' '.$i,'options'=>$options_proyecto);
			}
		}
		$fields[] = array( 'name'=>'doo-cf-order', 'type'=>'number', 'label'=>__( 'Orden', 'doo' ), 'default'=>0 );
		return $fields;
	}

	// Custom fields to add proyecto_cat taxonomy
	function doo_proyecto_cat_add_custom_fields( ) {
		$cat_fields = doo_proyecto_cat_fields();
		foreach ($cat_fields as $field) {
			dw_field_cpt_display($field,'',true);
		}
	}
	add_action( 'proyecto_cat_add_form_fields', 'doo_proyecto_cat_add_custom_fields');

	// Custom fields to edit proyecto_cat taxonomy  
	function doo_proyecto_cat_edit_custom_fields( $term ) {
		$term_id = $term->term_id;
		$cat_fields = doo_proyecto_cat_fields( $term_id );
		foreach ($cat_fields as $field) {
			$value = get_term_meta( $term_id, $field['name'], true);
			dw_field_cpt_display( $field, $value, true, true );
		}
	}
	add_action( 'proyecto_cat_edit_form_fields', 'doo_proyecto_cat_edit_custom_fields', 20 );

	// Customs field to save proyecto_cat taxonomy 
	function doo_save_proyecto_cat_custom_fields( $term_id ) {
		$cat_fields = doo_proyecto_cat_fields( $term_id );
		foreach ($cat_fields as $field) {
			if (!empty($_POST[$field['name']]) ) {
				switch ( $field['type'] ) {
					case 'text':
						$value = sanitize_text_field( $_POST[ $field['name'] ] );
						break;
					case 'editor':
						$value = wp_kses_post($_POST[$field['name']]);
						break;
					default:
						$value = $_POST[ $field['name'] ];
					break;
				}
				update_term_meta( $term_id, $field['name'], $value );
			} else {
				if ( isset($field['default']) ) {
					update_term_meta( $term_id, $field['name'], $field['default'] );
				} else {
					delete_term_meta( $term_id, $field['name'] );
				}
			}
		}
	}  
	add_action( 'edited_proyecto_cat', 'doo_save_proyecto_cat_custom_fields' );
	add_action( 'create_proyecto_cat', 'doo_save_proyecto_cat_custom_fields' );

	// Add the custom columns to terms
	add_filter( 'manage_edit-proyecto_cat_columns', 'doo_proyecto_cat_columns' );
	function doo_proyecto_cat_columns($columns) {
		$columns['image'] = __( 'Imagen', 'doo' );
		$columns['order'] = __( 'Orden', 'doo' );
		return $columns;
	}

	// Add the data to the custom columns for post type
	add_action( 'manage_proyecto_cat_custom_column' , 'doo_proyecto_cat_column', 10, 3 );
	function doo_proyecto_cat_column( $string, $column, $term_id ) {
		switch ($column) {
			case 'image':
				echo '<div>' . wp_get_attachment_image( get_term_meta( $term_id, 'doo-cf-image', true ), array(60,60) ) . '</div>';
			break;
			case 'order':
				echo '<div>' . get_term_meta( $term_id, 'doo-cf-order', true ) . '</div>';
			break;
		}
	}

}


/**
 * Loop, proyecto
 */
function doo_single_proyecto( $post_id = 0 ) {
	if ( !$post_id ) return;
	$ubicacion = get_post_meta( $post_id, 'doo-cf-ubicacion', true );
	ob_start();
	?>
	<a href="<?php echo get_permalink($post_id); ?>">
		<div class="item proyecto">
			<div class="image">
				<?php echo get_the_post_thumbnail( $post_id, 'medium_large' ); ?>
			</div>
			<div class="content">
				<h2 class="title"><?php echo get_the_title($post_id); ?></h2>
				<div class="ubicacion"><?php echo $ubicacion; ?></div>
				<div class="excerpt"><?php echo get_the_excerpt( $post_id ); ?></div>
			</div>
		</div>
	</a>
	<?php	
	return ob_get_clean();
}

/**
 * Function proyectos
 */
function doo_proyectos_list( $term_id = 0, $num = -1 ) {
	global $post;
	$query = array(
		'post_type'      => 'proyecto',
		'post_status'    => 'publish',
		'posts_per_page' => $num,
		'orderby'        => 'menu_order'
	);
	if ($term_id) {
		$query['tax_query'] = array( array(
			'taxonomy' => 'proyecto_cat',
			'terms'    => $term_id
		) );
	}
	$posts = new WP_Query($query);
	ob_start();
	?>
	<div class="proyectos list">
		<?php
		if ($posts->have_posts()) {
			while ($posts->have_posts()) {
				$posts->the_post();
				$post_id = $post->ID;
				echo doo_single_proyecto( $post_id );
			}
		}
		?>
	</div>
	<?php
	wp_reset_postdata();
	return ob_get_clean();
}


function doo_proyectos_list_cat() {
	$term = get_queried_object();
	$term_id = $term->term_id;
	return doo_proyectos_list( $term_id );
}
add_shortcode('doo-proyectos-list', 'doo_proyectos_list_cat');


/**
 * Function categorías proyectos
 */
function doo_proyectos_cats() {
	$terms = get_terms( array(
		'taxonomy'   => 'proyecto_cat',
		'hide_empty' => true,
		'orderby'    => 'meta_value_num',
		'meta_key'   => 'doo-cf-order',
		'order'      => 'asc'
	) );
	ob_start();
	if ($terms) {
		?>
		<div class="proyecto-cats grid">
			<?php
			foreach ($terms as $term) {
				?>
				<div class="item proyecto-cat">
					<a href="<?php echo get_term_link($term); ?>">
						<div class="image">
							<?php
							echo wp_get_attachment_image( get_term_meta( $term->term_id, 'doo-cf-image', true ), 'large' );
							?>
						</div>
						<h3 class="title"><?php echo $term->name; ?></h3>
						<div class="btns">
							<div class="btn"><?php esc_html_e('Ver más','doo'); ?></div>
						</div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
	return ob_get_clean();
}
add_shortcode('doo-proyecto-cat', 'doo_proyectos_cats');



/**
 * Function to display gallery of category
 */
function doo_proyecto_cat_gallery() {
	$term = get_queried_object();
	$term_id = $term->term_id;
	ob_start();
	$number_items = get_term_meta($term_id, 'doo-cf-gallery-items', true);
	if ($number_items) {
		?>
		<div class="cat-gallery">
			<?php
			for ($i=1;$i<=$number_items;$i++) {
				$image = wp_get_attachment_image( get_term_meta($term_id, 'doo-cf-image-'.$i,true), 'full');
				$post_id = get_term_meta($term_id,'doo-cf-proyect-'.$i,true);
				$link = get_permalink( $post_id );
				$name = get_the_title( $post_id );
				if ($link && $image && $name) {
					?>
					<div class="item">
						<a href="<?php echo $link; ?>">
							<?php echo $image; ?>
							<div class="name">
								<?php echo $name; ?>
							</div>
						</a>
						<div class="wp-block-button">
							<a class="wp-block-button__link" href="<?php echo $link; ?>">
								<?php esc_html_e('Ver proyecto', 'doo'); ?>
							</a>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<?php
	}
	return ob_get_clean();
}
add_shortcode('doo-proyecto-cat-gallery', 'doo_proyecto_cat_gallery');
