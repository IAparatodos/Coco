<?php
/**
 * Funciones utilitarias Adrihosan
 *
 * Caché, filtros, CSS loader, ordenación, etc.
 *
 * @package Adrihosan
 */

if (!defined('ABSPATH')) {
    exit;
}

// =============================================================================
// CACHÉ INTELIGENTE PARA FILTROS
// =============================================================================

function adrihosan_cache_filter_widget($widget_id, $cache_key) {
    $cached = get_transient($cache_key);

    if ($cached !== false) {
        return $cached;
    }

    $output = do_shortcode("[fe_widget id='$widget_id']");
    set_transient($cache_key, $output, 3600);

    return $output;
}

// Limpiar cachés de filtros cuando se edita/crea un producto
add_action('save_post_product', 'adrihosan_limpiar_cache_filtros', 10, 1);

function adrihosan_limpiar_cache_filtros($post_id) {
    if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
        return;
    }

    $caches = array(
        'cache_filter_metro',
        'cache_filter_hidraulico',
        'cache_filter_imitacion',
        'cache_filter_hidraulica_original',
        'cache_filter_bano',
        'cache_filter_bano_v2',
        'cache_filter_cocina',
        'cache_filter_exterior',
        'cache_filter_imitacion_hidraulico',
        'cache_filter_cocina_imitacion',
        'cache_filter_bano_imitacion'
    );

    foreach ($caches as $cache) {
        delete_transient($cache);
    }
}

// =============================================================================
// CARGA DE CSS POR CATEGORÍA
// =============================================================================

function adrihosan_cargar_css_categoria() {

    // Siempre cargar el CSS base global
    wp_enqueue_style(
        'adrihosan-base-global',
        get_stylesheet_directory_uri() . '/assets/css/base-global.css',
        array(),
        '1.0.0'
    );

    // Siempre cargar los fixes móviles
    wp_enqueue_style(
        'adrihosan-mobile-fixes',
        get_stylesheet_directory_uri() . '/assets/css/mobile-fixes.css',
        array('adrihosan-base-global'),
        '1.0.0'
    );

    // Solo en páginas de categoría de producto
    if (is_product_category()) {

        // Cargar JS común (FAQs, scroll, filtro móvil, etc.)
        wp_enqueue_script(
            'adrihosan-category-common',
            get_stylesheet_directory_uri() . '/assets/js/category-common.js',
            array('jquery'),
            '1.0.1',
            true
        );

        $cat_id = get_queried_object_id();

        // Buscar CSS primero en /assets/css/, luego en raíz del tema
        $css_file_assets = '/assets/css/category-' . $cat_id . '.css';
        $css_file_root = '/category-' . $cat_id . '.css';
        $css_path_assets = get_stylesheet_directory() . $css_file_assets;
        $css_path_root = get_stylesheet_directory() . $css_file_root;

        // Si existe el archivo CSS específico para esta categoría, cargarlo
        if (file_exists($css_path_assets)) {
            wp_enqueue_style(
                'adrihosan-category-' . $cat_id,
                get_stylesheet_directory_uri() . $css_file_assets,
                array('adrihosan-base-global'),
                '1.0.0'
            );
        } elseif (file_exists($css_path_root)) {
            // Fallback: buscar en la raíz del tema
            wp_enqueue_style(
                'adrihosan-category-' . $cat_id,
                get_stylesheet_directory_uri() . $css_file_root,
                array('adrihosan-base-global'),
                '1.0.0'
            );
        }

        // Cargar CSS de categorías padre si existen
        $cat = get_term($cat_id, 'product_cat');
        if ($cat && $cat->parent > 0) {
            $parent_css_file_assets = '/assets/css/category-' . $cat->parent . '.css';
            $parent_css_file_root = '/category-' . $cat->parent . '.css';
            $parent_css_path_assets = get_stylesheet_directory() . $parent_css_file_assets;
            $parent_css_path_root = get_stylesheet_directory() . $parent_css_file_root;

            if (file_exists($parent_css_path_assets)) {
                wp_enqueue_style(
                    'adrihosan-category-parent-' . $cat->parent,
                    get_stylesheet_directory_uri() . $parent_css_file_assets,
                    array('adrihosan-base-global'),
                    '1.0.0'
                );
            } elseif (file_exists($parent_css_path_root)) {
                wp_enqueue_style(
                    'adrihosan-category-parent-' . $cat->parent,
                    get_stylesheet_directory_uri() . $parent_css_file_root,
                    array('adrihosan-base-global'),
                    '1.0.0'
                );
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'adrihosan_cargar_css_categoria', 20);

// =============================================================================
// ORDENACIÓN FORZADA PARA CATEGORÍAS
// =============================================================================

add_action('woocommerce_product_query', 'adrihosan_orden_estricto_ids');

function adrihosan_orden_estricto_ids($q) {
    if (is_admin() || !$q->is_main_query()) {
        return;
    }

    // COCINA (ID 4866) -> POR NOMBRE (A-Z)
    if (is_product_category(4866)) {
        $q->set('orderby', 'title');
        $q->set('order', 'ASC');
    }
    // BAÑO (ID 4865) -> POR NOMBRE INVERSO (Z-A)
    elseif (is_product_category(4865)) {
        $q->set('orderby', 'title');
        $q->set('order', 'DESC');
    }
    // EXTERIOR (ID 4869) -> ALEATORIO
    elseif (is_product_category(4869)) {
        $q->set('orderby', 'rand');
    }
}

// =============================================================================
// PRESERVAR FILTROS EN PAGINACIÓN
// =============================================================================

add_filter('woocommerce_pagination_args', 'adrihosan_preservar_filtros_en_paginacion');

function adrihosan_preservar_filtros_en_paginacion($args) {
    if (empty($_GET)) {
        return $args;
    }

    $params = $_GET;

    // Eliminar parámetros estándar de paginación
    unset($params['paged']);
    unset($params['product-page']);

    if (!empty($params)) {
        $sanitized = array();
        foreach ($params as $key => $value) {
            $clean_key = sanitize_text_field($key);
            if (is_array($value)) {
                $sanitized[$clean_key] = array_map('sanitize_text_field', $value);
            } else {
                $sanitized[$clean_key] = sanitize_text_field($value);
            }
        }
        $args['add_args'] = $sanitized;
    }

    return $args;
}

// =============================================================================
// FIX ESTILOS GLOBALES (DESACTIVADO - usa CSS por categoría)
// =============================================================================

// function adrihosan_fix_category_styles_global() {
//     if (is_product_category(array(1844, 2510, 2093, 4862, 4865, 4866, 4869, 2082, 4876, 2083, 4806, 1789))) {
//         echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper { display: none !important; }</style>';
//     }
// }
