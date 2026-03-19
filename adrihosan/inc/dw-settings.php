<?php

// Function to define options fields
function dw_option_fields() {
	$option_fields=[];

	$options_pages=[];
	$options_pages[0]=__('Seleccionar página','dw');
	$loop=new WP_Query(array('post_type'=>'page','post_status'=>'publish','posts_per_page'=>-1,'orderby'=>'title','order'=>'ASC'));
	if ($loop->found_posts > 0) {
		foreach ($loop->posts as $p) {
			$options_pages[$p->ID]=$p->post_title;
		}
	}

	$options_blocks=[];
	$options_blocks[0]=__('Seleccionar bloque','dw');
	$loop=new WP_Query(array('post_type'=>'wp_block','post_status'=>'publish','posts_per_page'=>-1,'orderby'=>'title','order'=>'ASC'));
	if ($loop->found_posts > 0) {
		foreach ($loop->posts as $p) {
			$options_blocks[$p->ID]=$p->post_title;
		}
	}

	$options_menu=[];
	$options_menu[0]=__('Seleccionar Menú','dw');
	$loop=wp_get_nav_menus();
	foreach ($loop as $menu) {
		$options_menu[$menu->term_id]=$menu->name;
	}

	$options_cf=[];
	$options_cf[0]=__('Seleccionar formulario','dw');
	$loop=new WP_Query(array('post_type'=>'wpcf7_contact_form','post_status'=>'publish','posts_per_page'=>-1,'orderby'=>'title','order'=>'ASC'));
	if ($loop->found_posts > 0) {
		foreach ($loop->posts as $cf) {
			$options_cf[$cf->ID]=$cf->post_title;
		}
	}

	// Tab Social media
	$option_fields[] = array('name'=>'tab1','type'=>'tab','label'=>__('Redes Sociales','dw'));
	$option_fields[] = array('name'=>'dw-op-social-media','type'=>'label','label'=>'Shortcode: [dw-social-media]');
	$option_fields[] = array('name'=>'dw-op-sm-items','type'=>'number','min'=>0,'max'=>9,'label'=>__('Número redes sociales','dw'),
		'description'=>__('Indique el número de redes sociales a utilizar','dw'),'autosave'=>true);
	$number_items=get_option('dw-op-sm-items');
	if ($number_items) {
		for ($i=1;$i<=$number_items;$i++) {
			$option_fields[] = array('name'=>'dw-op-sm-label-'.$i,'type'=>'label','label'=>__('Red social','dw').' '.$i);
			$option_fields[] = array('name'=>'dw-op-sm-name-'.$i,'type'=>'text','label'=>__('Nombre','dw'));
			$option_fields[] = array('name'=>'dw-op-sm-slug-'.$i,'type'=>'text','label'=>__('URL','dw'));
			$option_fields[] = array('name'=>'dw-op-sm-icon-'.$i,'type'=>'icon','label'=>__('Icono','dw'));
		}
		$option_fields[] =array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	}

	// Tab Footer
	$option_fields[] = array('name'=>'tab2','type'=>'tab','label'=>__('Footer','dw'));
	$option_fields[] = array('name'=>'dw-op-footer-icon','type'=>'icon','label'=>__('Icono pie página','dw'),
		'description'=>__('Icono para el pie de página','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-address-icon','type'=>'icon','label'=>__('Icono situación','dw'),
		'description'=>__('Icono para la situación','dw'));
	$option_fields[] = array('name'=>'dw-op-address-text','type'=>'editor','label'=>__('Texto situación','dw'));
	$option_fields[] = array('name'=>'dw-op-contact-icon','type'=>'icon','label'=>__('Icono contacto','dw'),
		'description'=>__('Icono para el contacto','dw'));
	$option_fields[] = array('name'=>'dw-op-contact-text','type'=>'editor','label'=>__('Texto contacto','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-footer-menu','type'=>'select','label'=>__('Menú pie','dw'),'options'=>$options_menu);
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-copyright','type'=>'editor','label'=>__('Texto copyright','dw'),'description'=>__('Para usar el año utiliza [year]','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-block-footer','type'=>'select','label'=>__('Bloque pie página','dw'),
		'description'=>__('Seleccionar bloque reutilizable para el pie de página','dw'),
		'options'=>$options_blocks);
	$option_fields[] = array('name'=>'dw-op-block-footer-home','type'=>'select','label'=>__('Bloque pie página home','dw'),
		'description'=>__('Seleccionar bloque reutilizable para el pie de página de la página home','dw'),
		'options'=>$options_blocks);
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');


	// Tab Blog
	$option_fields[] = array('name'=>'tab3','type'=>'tab','label'=>__('Blog','dw'));
	$option_fields[] = array('name'=>'dw-op-blog-page','type'=>'select','label'=>__('Página blog','dw'),
		'options'=>$options_pages);
	$option_fields[] = array('name'=>'dw-op-default-image','type'=>'image','label'=>__('Imagen por defecto','dw'),
		'description'=>__('Imagen por defecto para las entradas','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-post-title-image','type'=>'image','label'=>__('Imagen título','dw'),
		'description'=>__('Imagen fondo para el título de las entradas','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');


	// Tab e-commerce
	$option_fields[] = array('name'=>'tab4','type'=>'tab','label'=>__('e-commerce','dw'));
	$option_fields[] = array('name'=>'dw-op-featured-text','type'=>'text','label'=>__('Texto producto destacado','dw'),
		'description'=>__('Texto personalizado para producto destacado (nuevo)','dw'));
	$option_fields[] = array('name'=>'dw-op-cart-btn-text','type'=>'text','label'=>__('Texto añadir al pedido','dw'),
		'description'=>__('Texto personalizado para el botón de añadir al pedido','dw'));
	$option_fields[] = array('name'=>'dw-op-cart-btn-text-variable','type'=>'text','label'=>__('Texto añadir al pedido','dw'),
		'description'=>__('Texto personalizado para el botón de añadir al pedido producto con opciones','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-attributes-search','type'=>'textarea','label'=>__('Atributos buscador','dw'),
	'description'=>__('Indica los slug, separados por comas, de los atributos para el buscador avanzado','dw'));
	// $option_fields[] = array('name'=>'dw-op-sc-product-category','type'=>'text','label'=>__('Shortcode Filtro','dw'),
	// 	'description'=>__('Shortcode para filtro en página categoría productos','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-shop-title-image','type'=>'image','label'=>__('Imagen tienda','dw'),
		'description'=>__('Imagen fondo para el título de la tienda','dw'));
	$option_fields[] = array('name'=>'dw-op-shop-title-image-mobile','type'=>'image','label'=>__('Imagen tienda','dw'),
		'description'=>__('Imagen fondo para el título de la tienda en móvil','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	// $option_fields[] = array('name'=>'dw-op-block-single','type'=>'select','label'=>__('Bloque página producto','dw'),
	// 	'description'=>__('Seleccionar bloque reutilizable para la página de producto','dw'),
	// 	'options'=>$options_blocks);
	// $option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-tab-title','type'=>'text','label'=>__('Título tab producto','dw'),
		'description'=>__('Título tab adicional para todos los productos','dw'));
	$option_fields[] = array('name'=>'dw-op-tab-content','type'=>'editor','rows'=>20,'label'=>__('Contenido tab producto','dw'),
		'description'=>__('Contenido tab adicional para todos los productos','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-max-products-slider','type'=>'number','label'=>__('Max.Productos relacionados','dw'),
		'description'=>__('Indicar el número máximo de productos relacionados en la ficha del producto','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-block-cart','type'=>'select','label'=>__('Bloque pedido y pago','dw'),
		'description'=>__('Seleccionar bloque reutilizable para la página del pedido y de pago','dw'),
		'options'=>$options_blocks);
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-page-thankyou','type'=>'select','label'=>__('Página pedido recibido','dw'),
		'description'=>__('Seleccionar la página para confirmación de pedido recibido','dw'),
		'options'=>$options_pages);
	$option_fields[] = array('name'=>'dw-op-block-thankyou-before','type'=>'select','label'=>__('Bloque gracias (antes)','dw'),
		'description'=>__('Seleccionar bloque reutilizable para la página gracias (antes)','dw'),
		'options'=>$options_blocks);
	$option_fields[] = array('name'=>'dw-op-block-thankyou-after','type'=>'select','label'=>__('Bloque gracias (después)','dw'),
		'description'=>__('Seleccionar bloque reutilizable para la página gracias (después)','dw'),
		'options'=>$options_blocks);
	
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-loop-per-page','type'=>'number','label'=>__('Productos por página','dw'),
		'description'=>__('Indica el número de productos a mostrar por página','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-cetelem-accordion','type'=>'checkbox','label'=>__('Cetelem acordeón','dw'),
		'description'=>__('Marcar para que en la página producto la forma de pago se muestre como acordeón','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');

	// Tab extras
	$option_fields[] = array('name'=>'tab5','type'=>'tab','label'=>__('Extras','dw'));
	$option_fields[] = array('name'=>'dw-op-whishlist','type'=>'checkbox','label'=>__('Desactivar lista de deseos','dw'),
		'description'=>__('Marcar para desactivar la lista de deseos en el frontend','dw'));
	$option_fields[] = array('name'=>'dw-op-script-label','type'=>'label','label'=>__('Scripts','dw'));
	$option_fields[] = array('name'=>'dw-op-script-head-ck','type'=>'checkbox','label'=>__('Activar script -head-','dw'));
	$option_fields[] = array('name'=>'dw-op-script-head','type'=>'textarea','rows'=>12,'label'=>__('Script -head-','dw'),
		'description'=>__('Script en -head-','dw'));
	$option_fields[] = array('name'=>'dw-op-script-body-ck','type'=>'checkbox','label'=>__('Activar script -body-','dw'));
	$option_fields[] = array('name'=>'dw-op-script-body','type'=>'textarea','rows'=>12,'label'=>__('Script -body-','dw'),
		'description'=>__('Script en -body-','dw'));
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');
	$option_fields[] = array('name'=>'dw-op-page-404','type'=>'select','label'=>__('Página error 404','dw'),
		'description'=>__('Seleccionar la página para el caso de error 404','dw'),
		'options'=>$options_pages);
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');

	// Tab proyectos
	$option_fields[] = array('name'=>'tab6','type'=>'tab','label'=>__('Proyectos','dw'));
	$option_fields[] = array('name'=>'dw-op-proyecto-archive','type'=>'select','label'=>__('Template Archive Proyecto','dw'),
		'description'=>__('Seleccionar el bloque para el template de Archive proyecto','dw'),
		'options'=>$options_blocks);
	$option_fields[] = array('name'=>'dw-op-proyecto-cat','type'=>'select','label'=>__('Template Categoría Proyecto','dw'),
		'description'=>__('Seleccionar el bloque para el template de Categoría proyecto','dw'),
		'options'=>$options_blocks);
	$option_fields[] = array('name'=>'dw-op-proyecto-single','type'=>'select','label'=>__('Template Proyecto individual','dw'),
		'description'=>__('Seleccionar el bloque para el template del proyecto individual','dw'),
		'options'=>$options_blocks);
	$option_fields[] = array('name'=>'dw-op-sep','type'=>'label','label'=>'');

	return $option_fields;
}


function dw_register_options_fields() {
	$option_fields=dw_option_fields();
	foreach ($option_fields as $field) {
		if ($field['type']!='label'&&$field['type']!='tab'&&$field['type']!='table') register_setting('dw_options_group',$field['name']);
		if ($field['type']=='table') {
			foreach ($field['table'] as $option) {
				if (isset($option['name'])) register_setting('dw_options_group',$option['name']);
			}
		}
	}
}
add_action('admin_init','dw_register_options_fields');

function dw_register_options_page() {
	add_menu_page(
		__('Ajustes Adrihosan','dw'),
		__('Ajustes Adrihosan','dw'),
		'edit_pages',
		'dw-menu-options',
		'dw_options_page',
		'dashicons-admin-generic',
		8
	);
}
add_action('admin_menu','dw_register_options_page');

function dw_options_page() {
	$option_fields=dw_option_fields();
	echo '<div class="custom-settings">';
	echo '<h1>'.__('Ajustes Adrihosan','dw').'</h1>';
	echo '<div class="separator"></div>';
	echo '<form method="post" action="options.php">';
	settings_fields('dw_options_group');
	$first=true;
	$first_tab=true;
	foreach ($option_fields as $field) {
		switch ($field['type']) {
			case 'tab':
				if ($first_tab) echo '<ul class="tabs">';
				else {
					if (!$first) echo '</table>';
					echo '</div></li>';
				}
				echo '<li class="tab">';
				if ($first_tab) $selected='checked="checked"';
				else $selected='';
				echo '<input type="radio" name="tabs" '.$selected.' id="tab-'.$field['name'].'">';
				echo '<label for="tab-'.$field['name'].'">'.$field['label'].'</label>';
				echo '<div id="tab-content-'.$field['name'].'" class="content">';
				$first_tab=false;
				$first=true;
			break;
			case 'table':
				echo '</table>';
				echo '<table class="dw-cpt-form form-table"';
				if (isset($field['width'])) echo ' style="width:'.$field['width'].'"';
				echo '>';
				foreach ($field['table'] as $option) {
					switch ($option['type']) {
						case 'html':
							echo $option['value'];
						break;
						default:
							if (isset($option['name'])) {
								echo '<td>';
								$field_value=get_option($option['name']);
								dw_field_cpt_display($option,$field_value);
								echo '</td>';
							}
					}
				}
				echo '</table>';
			break;
			default:
				if ($field['type']=='label'||$first) {
					if (!$first) {
						echo '</table>';
						echo '<div class="separator"></div>';
					}
					echo '<table class="dw-cpt-form form-table">';
					$first=false;
				} 
				echo '<tr valign="top">';
				echo '<th scope="row" class="pad-7">';
				if ($field['type']!='label') echo '<label for="'.$field['name'].'">'.$field['label'].'</label>';
				echo '</th>';
				echo '<td class="pad-7">';
					$field_value=get_option($field['name']);
					if (!$field_value&&isset($field['default'])) $field_value=$field['default'];
					dw_field_cpt_display($field,$field_value);
				echo '</td>';
				echo '</tr>';
		}
	}
	if (!$first) {
		echo '</table>';
	}
	if (!$first_tab) {
		echo '</div></li>';
		echo '</ul>';
	}
	echo '<div class="settings-submit">';
	submit_button();
	echo '</div>';
	echo '</form>';

	echo '</div>';
}
