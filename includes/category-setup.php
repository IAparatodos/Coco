<?php
/**
 * Funciones Setup para categorías
 *
 * Cada función configura hooks y acciones para una categoría específica.
 *
 * @package Adrihosan
 */

if (!defined('ABSPATH')) {
    exit;
}

// =============================================================================
// SETUPS BÁSICOS
// =============================================================================

function adrihosan_setup_bano_imitacion_cpu_fix() {
    remove_all_actions('woocommerce_archive_description');
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_bano', 8);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_bano', 20);
}

function adrihosan_setup_cocina_imitacion_cpu_fix() {
    remove_all_actions('woocommerce_archive_description');
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_cocina', 9);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_cocina', 21);
}

function adrihosan_setup_hidraulica_original_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_original', 7);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_original', 20);
}

function adrihosan_setup_espejos_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos', 9);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos', 21);
}

function adrihosan_setup_espejos_luz_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos_luz', 8);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos_luz', 21);
}

function adrihosan_setup_wood_cpu_fix() {
    add_action('woocommerce_before_shop_loop', 'adrihosan_wood_cat_before_loop_final_validated', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_wood_cat_after_loop_final', 35);
}

function adrihosan_setup_paredes_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_paredes_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_paredes_contenido_inferior', 99);

    // Ocultar filtros antiguos y botones azules
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_azulejos_bano_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_azulejos_bano_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_azulejos_bano_contenido_inferior', 99);

    // Ocultar filtros antiguos
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_azulejos_cocina_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_azulejos_cocina_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_azulejos_cocina_contenido_inferior', 99);

    // Ocultar filtros antiguos
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_azulejos_exterior_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_azulejos_exterior_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_azulejos_exterior_contenido_inferior', 99);

    // Ocultar filtros antiguos
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_azulejos_piscinas_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_azulejos_piscinas_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_azulejos_piscinas_contenido_inferior', 99);

    // Ocultar filtros antiguos
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_pavimentos_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_pavimentos_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pavimentos_contenido_inferior', 99);

    // Ocultar filtros antiguos
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_azulejos_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_azulejos_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_azulejos_contenido_inferior', 99);

    // Ocultar filtros antiguos
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_porcelanico_marmol_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

    add_action('woocommerce_before_shop_loop', 'adrihosan_porcelanico_marmol_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_porcelanico_marmol_contenido_inferior', 99);

    // Ocultar filtros antiguos
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });

    // Cargar CSS específico de la categoría
    add_action('wp_head', 'adrihosan_porcelanico_marmol_cargar_css', 99);
}

function adrihosan_porcelanico_marmol_cargar_css() {
    $css_file = get_stylesheet_directory() . '/category-2245.css';
    if (file_exists($css_file)) {
        echo '<style id="cat-2245-css">' . file_get_contents($css_file) . '</style>';
    }
}

// =============================================================================
// SETUPS MIGRADOS DE CONTROLADORES EXTERNOS
// =============================================================================

// Cat 62: Cerámica (antes en adrihosan_ceramica_definitiva_controller)
function adrihosan_setup_ceramica_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_ceramica_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_ceramica_inferior_final', 20);
}

// Cat 2082: Imitación Hidráulico (antes en adrihosan_pilar_imitacion_controller)
function adrihosan_setup_imitacion_hidraulico_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_imitacion_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_imitacion_contenido_inferior', 20);
}

// Cat 2093: Azulejo Metro (antes en adrihosan_pilar_metro_controller)
function adrihosan_setup_metro_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_metro_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_metro_inferior_final', 20);
    add_action('wp_head', 'adrihosan_metro_cargar_css', 99);
}

// Cat 2410: Porcelánico (antes en adrihosan_pilar_porcelanico_controller)
function adrihosan_setup_porcelanico_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_porcelanico_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_porcelanico_inferior_final', 20);
}

// Cat 2510: Porcelánico Extrafino (antes en adrihosan_pilar_extrafino_controller)
function adrihosan_setup_extrafino_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_extrafino_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_extrafino_inferior_final', 20);
}

// Cat 1844: Gran Formato (antes en adrihosan_pilar_gran_formato_controller)
function adrihosan_setup_gran_formato_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_gran_formato_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_gran_formato_inferior_final', 20);
}

// Cat 4564: Baldosa Hidráulica Pilar (antes en adrihosan_pilar_bh_controller)
function adrihosan_setup_baldosa_hidraulica_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_no_products_found', 'wc_no_products_found', 10);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_bh_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_bh_contenido_inferior', 99);
}

// Cat 4865: Baño BH Original (antes en adrihosan_pilar_bano_controller)
function adrihosan_setup_bano_bh_original_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_bano_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_bano_contenido_inferior', 99);
}

// Cat 4866: Cocina BH Original (antes en adrihosan_pilar_cocina_controller)
function adrihosan_setup_cocina_bh_original_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_cocina_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_cocina_contenido_inferior', 99);
}

// Cat 4869: Exterior BH Original (antes en adrihosan_pilar_exterior_controller)
function adrihosan_setup_exterior_bh_original_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_exterior_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_exterior_contenido_inferior', 99);
}
