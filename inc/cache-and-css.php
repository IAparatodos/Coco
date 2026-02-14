<?php
/**
 * Cache management, CSS loading, and style fixes
 * @package Adrihosan
 */

/* ========================================================================== */
/* 4. LIMPIEZA GLOBAL (UNIFICADA) */
/* ========================================================================== */
// Estilos .wd-shop-tools ocultos - ahora se cargan solo desde el master controller
// en functions.php (cada setup_*_cpu_fix añade su propio wp_head CSS)

// CACHÉ INTELIGENTE PARA FILTROS - OPTIMIZACIÓN CRÍTICA
function adrihosan_cache_filter_widget($widget_id, $cache_key) {
    // Intentar recuperar del caché (duración: 1 hora = 3600 segundos)
    $cached = get_transient($cache_key);
    
    if ($cached !== false) {
        return $cached;
    }
    
    // Si no existe caché, generar el widget
    $output = do_shortcode("[fe_widget id='$widget_id']");
    
    // Guardar en caché por 1 hora
    set_transient($cache_key, $output, 3600);
    
    return $output;
}

// Limpiar cachés de filtros SOLO cuando se edita/crea un producto (optimizado)
add_action('save_post_product', 'adrihosan_limpiar_cache_filtros', 10, 1);
function adrihosan_limpiar_cache_filtros($post_id) {
    // Solo si es una actualización real, no autoguardado ni revisiones
    if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
        return;
    }
    
    // Array de todas las cachés de filtros
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
    
    // Limpiar todas las cachés de una vez
    foreach ($caches as $cache) {
        delete_transient($cache);
    }
}

/* ========================================================================== */
/* 5. ENQUEUE DE ASSETS EXTERNOS (CSS Y JS) - OPTIMIZACIÓN PASO 2 */
/* ========================================================================== */

// =============================================================================
// SISTEMA INTERMEDIO - DESACTIVADO (Migrado a sistema modular category-{ID}.css)
// =============================================================================
// add_action('wp_enqueue_scripts', 'adrihosan_enqueue_category_assets');
//
// function adrihosan_enqueue_category_assets() {
//     // Solo cargar en categorías específicas y no en productos individuales
//     if (is_singular('product')) {
//         return;
//     }
//
//     // Array lookup es mucho más eficiente que múltiples if statements
//     $cat_assets = array(
//         2093 => 'metro',
//         1844 => 'hidraulico',
//         2510 => 'imitacion',
//         4564 => 'hidraulica',
//         4862 => 'hidraulica-original',
//         4865 => 'hidraulica-bano',
//         4866 => 'hidraulica-cocina',
//         4869 => 'hidraulica-exterior',
//         2082 => 'imitacion-hidraulico',
//         4876 => 'cocina-imitacion',
//         2083 => 'bano-imitacion',
//         4806 => 'paredes',
//         1789 => 'azulejos-bano'
//     );
//
//     // Verificar si estamos en alguna de estas categorías
//     foreach ($cat_assets as $cat_id => $asset_name) {
//         if (is_product_category($cat_id)) {
//             // Cargar CSS
//             wp_enqueue_style(
//                 "adrihosan-{$asset_name}-styles",
//                 get_template_directory_uri() . "/assets/css/categoria-{$asset_name}.css",
//                 array(),
//                 '1.0.0'
//             );
//
//             // Cargar JS
//             wp_enqueue_script(
//                 "adrihosan-{$asset_name}-scripts",
//                 get_template_directory_uri() . "/assets/js/categoria-{$asset_name}.js",
//                 array('jquery'),
//                 '1.0.0',
//                 true
//             );
//
//             // Solo puede ser una categoría a la vez, salir del loop
//             break;
//         }
//     }
// }

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

        // Cargar JS común (FAQs, scroll, etc.)
        wp_enqueue_script(
            'adrihosan-category-common',
            get_stylesheet_directory_uri() . '/assets/js/category-common.js',
            array('jquery'),
            '1.0.0',
            true
        );

        $cat_id = get_queried_object_id();
        $css_file = '/assets/css/category-' . $cat_id . '.css';
        $css_path = get_stylesheet_directory() . $css_file;
        
        // Si existe el archivo CSS específico para esta categoría, cargarlo
        if (file_exists($css_path)) {
            wp_enqueue_style(
                'adrihosan-category-' . $cat_id,
                get_stylesheet_directory_uri() . $css_file,
                array('adrihosan-base-global'),
                '1.0.0'
            );
        }
        
        // Cargar CSS de categorías padre si existen
        $cat = get_term($cat_id, 'product_cat');
        if ($cat && $cat->parent > 0) {
            $parent_css_file = '/assets/css/category-' . $cat->parent . '.css';
            $parent_css_path = get_stylesheet_directory() . $parent_css_file;
            
            if (file_exists($parent_css_path)) {
                wp_enqueue_style(
                    'adrihosan-category-parent-' . $cat->parent,
                    get_stylesheet_directory_uri() . $parent_css_file,
                    array('adrihosan-base-global'),
                    '1.0.0'
                );
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'adrihosan_cargar_css_categoria', 20);

/**
 * OPCIONAL: Precargar CSS crítico para mejorar rendimiento
 */
// Preload CSS - integrado en adrihosan_cargar_css_categoria() que ya tiene el check is_product_category()

// Preservar filtros de FE Pro en la paginación de WooCommerce
add_filter( 'woocommerce_pagination_args', 'adrihosan_preservar_filtros_en_paginacion' );
function adrihosan_preservar_filtros_en_paginacion( $args ) {
    if ( empty( $_GET ) ) {
        return $args;
    }
    $params = $_GET;
    unset( $params['paged'] );
    unset( $params['product-page'] );
    if ( ! empty( $params ) ) {
        $sanitized = array();
        foreach ( $params as $key => $value ) {
            $clean_key = sanitize_text_field( $key );
            if ( is_array( $value ) ) {
                $sanitized[ $clean_key ] = array_map( 'sanitize_text_field', $value );
            } else {
                $sanitized[ $clean_key ] = sanitize_text_field( $value );
            }
        }
        $args['add_args'] = $sanitized;
    }
    return $args;
}
