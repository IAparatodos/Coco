<?php
/**
 * CARGADOR MODULAR DE CSS POR CATEGORÍA - ADRIHOSAN
 * 
 * Añade este código a tu functions.php o crea un plugin personalizado.
 * 
 * Estructura de archivos esperada en tu tema:
 * /wp-content/themes/flavor/css/
 *   ├── base-global.css
 *   ├── category-2083.css
 *   ├── category-4876.css
 *   ├── category-4247.css
 *   ├── category-2626.css
 *   ├── category-4862.css
 *   ├── category-62.css
 *   ├── category-2209.css
 *   └── mobile-fixes.css
 */

function adrihosan_cargar_css_categoria() {
    
    // Siempre cargar el CSS base global
    wp_enqueue_style(
        'adrihosan-base-global',
        get_stylesheet_directory_uri() . '/css/base-global.css',
        array(),
        '1.0.0'
    );
    
    // Siempre cargar los fixes móviles
    wp_enqueue_style(
        'adrihosan-mobile-fixes',
        get_stylesheet_directory_uri() . '/css/mobile-fixes.css',
        array('adrihosan-base-global'),
        '1.0.0'
    );
    
    // Solo en páginas de categoría de producto
    if (is_product_category()) {
        
        $cat_id = get_queried_object_id();
        $css_file = '/css/category-' . $cat_id . '.css';
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
            $parent_css_file = '/css/category-' . $cat->parent . '.css';
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
function adrihosan_preload_css_critico() {
    if (is_product_category()) {
        $cat_id = get_queried_object_id();
        $css_file = get_stylesheet_directory_uri() . '/css/category-' . $cat_id . '.css';
        
        echo '<link rel="preload" href="' . esc_url($css_file) . '" as="style">' . "\n";
    }
}
add_action('wp_head', 'adrihosan_preload_css_critico', 1);
