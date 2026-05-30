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

// NOTA: NO cachear el widget de Filter Everything Pro (fe_widget).
// El HTML cacheado es estático y los filtros dejan de funcionar.

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

    // base-global.css y mobile-fixes.css solo usan selectores .tax-product_cat.term-XXXX
    // → No cargar en fichas de producto individual (mejora LCP: -2 CSS bloqueantes)
    if (!is_singular('product')) {
        wp_enqueue_style(
            'adrihosan-base-global',
            get_stylesheet_directory_uri() . '/assets/css/base-global.css',
            array(),
            '1.0.0'
        );

        wp_enqueue_style(
            'adrihosan-mobile-fixes',
            get_stylesheet_directory_uri() . '/assets/css/mobile-fixes.css',
            array('adrihosan-base-global'),
            '1.0.0'
        );
    }

    // Páginas de marca (taxonomy: brand) — mismo patrón que category-{ID}.css
    if ( is_tax( 'brand' ) ) {
        wp_enqueue_script(
            'adrihosan-category-common',
            get_stylesheet_directory_uri() . '/assets/js/category-common.js',
            array('jquery'),
            '1.0.2',
            true
        );

        $term_id = get_queried_object_id();
        $brand_css_file = '/assets/css/brand-' . $term_id . '.css';
        $brand_css_path = get_stylesheet_directory() . $brand_css_file;

        if ( file_exists( $brand_css_path ) ) {
            wp_enqueue_style(
                'adrihosan-brand-' . $term_id,
                get_stylesheet_directory_uri() . $brand_css_file,
                array('adrihosan-base-global'),
                filemtime( $brand_css_path )
            );
        }
    }

    // Solo en páginas de categoría de producto
    if (is_product_category()) {

        // Cargar JS común (FAQs, scroll, etc.)
        wp_enqueue_script(
            'adrihosan-category-common',
            get_stylesheet_directory_uri() . '/assets/js/category-common.js',
            array('jquery'),
            '1.0.2',
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
                filemtime($css_path)
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

    // Home Adrihosan (page ID 164094 o front page)
    if (is_page(164094) || is_front_page()) {
        $home_css_path = get_stylesheet_directory() . '/assets/css/page-home.css';
        if (file_exists($home_css_path)) {
            wp_enqueue_style(
                'adrihosan-page-home',
                get_stylesheet_directory_uri() . '/assets/css/page-home.css',
                array(),
                filemtime($home_css_path)
            );
        }
    }

    // Pagina Contacto Adrihosan (page ID 113323): CSS + calendario de reservas.
    // Detectar tanto por template asignado como por page ID.
    if ( is_page() && ( is_page_template( 'page-113323.php' ) || is_page( 113323 ) ) ) {
        $contacto_css_path = get_stylesheet_directory() . '/assets/css/page-contacto.css';
        if ( file_exists( $contacto_css_path ) ) {
            wp_enqueue_style(
                'adrihosan-page-contacto',
                get_stylesheet_directory_uri() . '/assets/css/page-contacto.css',
                array(),
                filemtime( $contacto_css_path )
            );
        }

        $reservas_js_path = get_stylesheet_directory() . '/assets/js/reservas-calendar.js';
        if ( file_exists( $reservas_js_path ) && function_exists( 'adrihosan_reservas_duration' ) ) {
            wp_enqueue_script(
                'adrihosan-reservas-calendar',
                get_stylesheet_directory_uri() . '/assets/js/reservas-calendar.js',
                array(),
                filemtime( $reservas_js_path ),
                true
            );
            wp_localize_script( 'adrihosan-reservas-calendar', 'RESERVAS', array(
                'restUrl' => esc_url_raw( rest_url( 'adrihosan/v1' ) ),
                'nonce'   => wp_create_nonce( 'wp_rest' ),
                'config'  => array(
                    'duration'     => adrihosan_reservas_duration(),
                    'minAdvance'   => adrihosan_reservas_min_advance_hours(),
                    'lastBuffer'   => adrihosan_reservas_last_slot_buffer(),
                    'maxWeeks'     => adrihosan_reservas_max_weeks_ahead(),
                    'openingHours' => adrihosan_reservas_horarios(),
                ),
            ) );
        }
    }

    // Pagina FAQ general (page ID 5074): solo necesita el JS de acordeones
    // FAQ. El CSS (faq-section-common, etc.) ya vive en base-global.css que
    // se carga arriba en cualquier pagina no-singular-product.
    if ( is_page( 5074 ) ) {
        wp_enqueue_script(
            'adrihosan-category-common',
            get_stylesheet_directory_uri() . '/assets/js/category-common.js',
            array( 'jquery' ),
            '1.0.2',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'adrihosan_cargar_css_categoria', 20);

/**
 * Diferir CSS no crítico: fonts.css se carga con media="print" y cambia a "all" on load.
 * Esto evita que bloquee el render (mejora FCP/LCP).
 */
/**
 * data-no-optimize="1" evita que LiteSpeed Cache recombine el CSS como bloqueante.
 */
function adrihosan_defer_non_critical_css($tag, $handle, $href) {
    $defer_handles = array('adrihosan-fonts');
    if (in_array($handle, $defer_handles, true)) {
        // media="print" no bloquea render; onload cambia a "all" para aplicar estilos
        $tag = str_replace(
            "media='all'",
            "media='print' onload=\"this.media='all'\" data-no-optimize=\"1\"",
            $tag
        );
        // Fallback noscript para usuarios sin JS
        $tag .= '<noscript><link rel="stylesheet" href="' . esc_url($href) . '"></noscript>';
    }
    return $tag;
}
add_filter('style_loader_tag', 'adrihosan_defer_non_critical_css', 10, 3);

/**
 * Ficha de producto: diferir solo CSS que NO afecta al layout del producto.
 * Diferir TODO causaba CLS 1.002 porque woocommerce.css/wcss.css aplicaban
 * estilos de layout tarde. Solo diferimos CSS claramente below-fold o decorativo.
 * Ahorro: ~670ms de render-blocking (los CSS de 670ms duration del informe).
 */
function adrihosan_defer_safe_css_on_product($tag, $handle, $href) {
    if (is_admin() || !is_singular('product')) {
        return $tag;
    }

    // Solo diferir CSS que sabemos que NO causa layout shifts
    $safe_patterns = array(
        'wprevpro',           // Reviews plugin (21.5 KiB, below fold)
        'photoswipe',         // Lightbox (solo al abrir)
        'default-skin',       // Lightbox skin (solo al abrir)
        'joinchat',           // Chat button (no afecta layout)
        'cookieblocker',      // Cookie consent (overlay)
        'block-library',      // WP blocks (14.9 KiB, mayormente sin usar)
        'wc-blocks',          // WC blocks (below fold)
        'widget.css',         // Widget styles (sidebar/footer)
    );

    $should_defer = false;
    foreach ($safe_patterns as $pattern) {
        if (strpos($href, $pattern) !== false) {
            $should_defer = true;
            break;
        }
    }

    if ($should_defer && strpos($tag, "media='all'") !== false) {
        $tag = str_replace(
            "media='all'",
            "media='print' onload=\"this.media='all'\" data-no-optimize=\"1\"",
            $tag
        );
    }

    return $tag;
}
add_filter('style_loader_tag', 'adrihosan_defer_safe_css_on_product', 15, 3);

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
