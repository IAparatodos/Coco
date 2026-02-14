<?php


/**
 * Manipulate args for WP_Query depending on $_POST // $_GET
 */
function dw_manipulate_args_query($args) {
	$search_attributes = get_option('dw-op-attributes-search');
	if ($search_attributes) {
		$search_attributes = array_map('trim',explode(',',$search_attributes));
	} else {
		$search_attributes = [];
	}
	if (!empty($search_attributes)) {
		foreach ($search_attributes as $item) {
			// $attr_val[$item] = isset($_POST[$item]) ? $_POST[$item] : '';
			$attr_val[$item] = isset($_GET[$item]) ? $_GET[$item] : '';
		}
	}
	$tax_query = isset($args['tax_query']) ? $args['tax_query'] : [];
	if (!empty($search_attributes)) {
		foreach ($search_attributes as $item) {
			if (!empty($attr_val[$item])) {
				$tax_query[] = array(
					'taxonomy' => 'pa_' . $item,
					'field'    => 'slug',
					'terms'    => $attr_val[$item],
				);
			}
		}
	}
	$args['tax_query'] = $tax_query;
	return $args;
}



/**
 * Query filters in archive-product
 */
function dw_manipulate_main_query($query) {
	if ( !is_search() && !is_admin() && 
		($query->is_main_query() && 
		( is_post_type_archive( 'product' ) ||
		is_tax( 'product_cat' ) || 
		is_tax( 'product_style' ) ||
		is_product_taxonomy()) ||
		has_block('doo-block/product-cat') ) ) {
		$search_attributes = get_option('dw-op-attributes-search');
		if ($search_attributes) {
			$search_attributes = array_map('trim',explode(',',$search_attributes));
		} else {
			$search_attributes = [];
		}
		if (!empty($search_attributes)) {
			foreach ($search_attributes as $item) {
				// $attr_val[$item] = isset($_POST[$item]) ? $_POST[$item] : '';
				$attr_val[$item] = isset($_GET[$item]) ? $_GET[$item] : '';
			}
		}

		$tax_query = $query->get('tax_query');

		if (!$tax_query) $tax_query = [];

		if (!empty($search_attributes)) {
			foreach ($search_attributes as $item) {
				if (!empty($attr_val[$item])) {
					$tax_query[] = array(
						'taxonomy' => 'pa_' . $item,
						'field'    => 'slug',
						'terms'    => array($attr_val[$item]),
					);
				}
			}
		}

		if (!empty($tax_query)) {
			$query->set('tax_query',$tax_query);
		}

	}

}
add_action('pre_get_posts', 'dw_manipulate_main_query');


function dw_wc_product_search_selects($args = []) {
	if (!$args) {
		global $wp_query;
		$args = $wp_query->query_vars;
		$args = dw_manipulate_args_query($args);
		$args['fields'] = 'ids';
		$tax_query = $wp_query->get('tax_query');
	} else {
		$tax_query = isset($args['tax_query']) ? $args['tax_query'] : [];
	}
	if (!$tax_query) $tax_query = [];
	$search_attributes = get_option('dw-op-attributes-search');
	if ($search_attributes) {
		$search_attributes = array_map('trim',explode(',',$search_attributes));
	} else {
		$search_attributes = [];
	}
	if (!empty($search_attributes)) {
		$html = '';
		foreach ($search_attributes as $item) {
			// $attr_val[$item] = isset($_POST[$item]) ? $_POST[$item] : '';
			$attr_val[$item] = isset($_GET[$item]) ? $_GET[$item] : '';
			$html .= dw_select_attribute($item, $args, $tax_query, $attr_val, 'ul');
		}
		if (!$html) return false;
		$url = strtok( $_SERVER['REQUEST_URI'], '?' );
		if ( strpos( $_SERVER['REQUEST_URI'], '?' ) ) {
			$html .= '<a class="reset-filter" href="' . $url . '"><img alt="reset" title="Reset" src="' . get_theme_file_uri('img/reset.svg') . '"></a>';
		}
		ob_start();
		?>
		<div class="filter-search-btn">
			<div class="filter">
				<span><?php esc_html_e('Filtro búsqueda','dw');?></span>
				<img alt="filtro" src="<?php echo get_theme_file_uri('img/filter.svg');?>">
			</div>
			<img alt="cerrar" class="close" src="<?php echo get_theme_file_uri('img/close.svg');?>">
		</div>
		<div id="advanced-search" class="advanced-search">
			<div class="filter-title"><?php _e('Filtros de búsqueda','dw');?></div>
			<div class="advanced-search-inputs">
				<form class="search-form-inputs" action="" method="get">
					<div class="form-inputs-content">
						<?php	echo $html;?>
					</div>
					<div class="submit dw-hide">
						<input type="submit" id="search-submit" class="btn" value="Mostrar Resultados">
					</div>
				</form>
			</div>
		</div>
		<?php
		return ob_get_clean();
	} else {
		return false;
	}
}


function dw_select_attribute($item, $args, $tax_query, $attr_val, $el = 'select') {
	$options = [];
	$tax = get_taxonomy('pa_' . $item);
	if ($tax) {
		$name = $tax->labels->singular_name;
		$terms=get_terms(array('taxonomy'=>'pa_'. $item, 'hide_empty'=>true));
		$item_sel = false;
		$item_name = false;
		foreach ($terms as $term) {
			$tax_query_new = $tax_query;
			$tax_query_new[] = array(
				'taxonomy' => 'pa_' . $item,
				'field'    => 'slug',
				'terms'    => $term->slug,
			);
			$args_new = $args;
			$args_new['tax_query'] = $tax_query_new;
			$posts = get_posts($args_new);
			if (count($posts)) {
				if ($attr_val[$item] == $term->slug) {
					$selected = 'selected';
					$item_sel = $term->slug;
					$item_name = $term->name;
				} else  {
					$selected = ''; 
				}
				if ($el == 'select') {
					$options[] = '<option value="'.$term->slug.'" '.$selected.'>'.$term->name.'</option>';
				} else {
					$options[] = '<li value="'.$term->slug.'" class="'.$selected.'">'.$term->name.'</li>';
				}
			}
		}
	}
	if (!empty($options)) {
		if ($el == 'select') {
			$html  = '<div class="search-content">';
			$html .=   '<select class="terms" name="'. $item . '">';
			$html .=     '<option value="">' . $name . '</option>';
			foreach ($options as $option) {
				$html .= $option;
			}
			$html .=   '</select>';
			$html .= '</div>';
			return $html;
		} else {
			$selected = $item_sel ? '' : 'selected';
			$item_name = $item_name ? $item_name : $name;
			$html  = '<div class="search-content">';
			$html .=   '<div class="term-value" value="'.$item_sel.'">'.$item_name.'</div>';
			$html .=   '<ul class="terms" name="'. $item . '">';
			$html .=     '<li value="" class="'.$selected.'">' . $name . '</li>';
			foreach ($options as $option) {
				$html .= $option;
			}
			$html .=   '</ul>';
			$html .=   '<input type="hidden" name="'.$item.'" value="'.$item_sel.'">';
			$html .= '</div>';
			return $html;
		}
	}
	return '';
}

