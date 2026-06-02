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

/* ========================================================================== */
/* 6. RESERVAS / DISPONIBILIDAD - EXCLUSIÓN DE CACHÉ (LiteSpeed)               */
/* ========================================================================== */
/**
 * PROBLEMA
 * LiteSpeed Cache guarda el HTML completo de /contacto/ con la disponibilidad
 * de reservas "congelada". Al purgar el caché vuelve a verse bien, pero la
 * disponibilidad se queda obsoleta hasta la siguiente purga (síntoma: "no hay
 * disponibilidad").
 *
 * SOLUCIÓN
 *  A) ESI (recomendado): la página se sigue cacheando, pero el bloque del
 *     calendario de reservas se sirve SIN caché en cada visita ("agujero" en
 *     el caché). Requiere indicar el/los shortcode(s) con los que se inserta
 *     el calendario en adrihosan_reservas_shortcodes().
 *  B) Fallback automático: si no se configura ningún shortcode (el calendario
 *     se inserta con page builder, widget o bloque y no se puede aislar con
 *     ESI), la página de reservas se marca como NO cacheable, de modo que la
 *     disponibilidad siempre sea fresca.
 *
 * Cómo averiguar tu shortcode: edita la página /contacto/ en WordPress y mira
 * qué shortcode renderiza el calendario (p. ej. [ssa_booking], [amelia],
 * [bookly-form], [latepoint_book_form], [mphb_availability_search]...). Añádelo
 * abajo y tendrás ESI puro. Mientras tanto, el fallback ya evita el bug.
 */

// Slug(s) de la(s) página(s) que contienen el calendario de reservas.
if ( ! defined( 'ADRIHOSAN_RESERVAS_PAGES' ) ) {
    define( 'ADRIHOSAN_RESERVAS_PAGES', 'contacto' ); // separa por comas si hay varias
}

/**
 * Shortcode(s) que renderizan el calendario de disponibilidad.
 * Déjalo vacío para usar el fallback (no cachear la página de reservas).
 *
 * @return string[]
 */
function adrihosan_reservas_shortcodes() {
    return array_values( array_filter( array_map( 'trim', array(
        // 'pon_aqui_el_shortcode_del_calendario',
    ) ) ) );
}

/**
 * ¿Está activo LiteSpeed Cache con soporte ESI?
 */
function adrihosan_litespeed_esi_activo() {
    return defined( 'LSCWP_V' ) || has_filter( 'litespeed_esi_url' );
}

/**
 * ESI: convierte el shortcode de reservas en un bloque ESI no cacheado.
 * Sólo actúa si LiteSpeed está activo y hay shortcode(s) configurados.
 */
add_filter( 'do_shortcode_tag', 'adrihosan_reservas_esi_shortcode', 10, 3 );
function adrihosan_reservas_esi_shortcode( $output, $tag, $attr ) {
    $tags = adrihosan_reservas_shortcodes();
    if ( empty( $tags ) || ! in_array( $tag, $tags, true ) ) {
        return $output;
    }
    if ( ! adrihosan_litespeed_esi_activo() ) {
        return $output; // Sin LiteSpeed no hay ESI; se renderiza en vivo.
    }

    $params = array(
        'reservas_tag'  => $tag,
        'reservas_attr' => is_array( $attr ) ? $attr : array(),
    );

    // Genera el marcador ESI. 'no-cache' => el sub-request se ejecuta siempre.
    $esi = apply_filters(
        'litespeed_esi_url',
        'adrihosan-reservas',       // id del bloque ESI
        'Reservas Disponibilidad',  // descripción/wrapper
        $params,                    // parámetros que recibe el loader
        'no-cache',                 // control de caché del fragmento
        true                        // silence (sin comentarios HTML)
    );

    // Si LiteSpeed no devolvió un marcador válido, renderiza el shortcode vivo.
    return ( is_string( $esi ) && $esi !== 'adrihosan-reservas' ) ? $esi : $output;
}

/**
 * Loader ESI: se ejecuta en el sub-request (no cacheado) y re-renderiza el
 * calendario con la disponibilidad actual.
 */
add_action( 'litespeed_esi_load-adrihosan-reservas', 'adrihosan_reservas_esi_load' );
function adrihosan_reservas_esi_load( $params ) {
    // Asegura que este fragmento nunca se cachee.
    do_action( 'litespeed_control_set_nocache', 'Reservas: disponibilidad dinámica' );

    $tag  = isset( $params['reservas_tag'] ) ? $params['reservas_tag'] : '';
    $attr = ( isset( $params['reservas_attr'] ) && is_array( $params['reservas_attr'] ) ) ? $params['reservas_attr'] : array();
    if ( '' === $tag ) {
        return;
    }

    // Reconstruye el shortcode con sus atributos originales.
    $attr_str = '';
    foreach ( $attr as $k => $v ) {
        $attr_str .= is_int( $k ) ? ' ' . $v : ' ' . $k . '="' . esc_attr( $v ) . '"';
    }
    echo do_shortcode( '[' . $tag . $attr_str . ']' );
}

/**
 * Fallback: si NO hay shortcode configurado, marca la página de reservas como
 * NO cacheable para que la disponibilidad siempre sea fresca.
 */
add_action( 'template_redirect', 'adrihosan_reservas_nocache_fallback' );
function adrihosan_reservas_nocache_fallback() {
    // Con ESI por shortcode no hace falta desactivar la caché de la página.
    if ( adrihosan_reservas_shortcodes() ) {
        return;
    }
    $slugs = array_filter( array_map( 'trim', explode( ',', ADRIHOSAN_RESERVAS_PAGES ) ) );
    if ( empty( $slugs ) || ! is_page( $slugs ) ) {
        return;
    }
    do_action( 'litespeed_control_set_nocache', 'Página de reservas: disponibilidad dinámica' );
}
