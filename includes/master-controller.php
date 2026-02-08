<?php
/**
 * Controlador Maestro Adrihosan - Optimización CPU
 *
 * Reemplaza múltiples llamadas dispersas a is_product_category()
 * por una sola llamada centralizada.
 *
 * @package Adrihosan
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('template_redirect', 'adrihosan_master_controller_cpu_fix', 1);

function adrihosan_master_controller_cpu_fix() {
    // Solo procesar en categorías de productos
    if (!is_product_category()) {
        return;
    }

    // UNA SOLA QUERY - Obtener ID de categoría actual
    $cat_id = get_queried_object_id();

    // Ejecutar setup específico según categoría
    switch($cat_id) {
        case 2083: // Baño Imitación
            adrihosan_setup_bano_imitacion_cpu_fix();
            break;
        case 4876: // Cocina Imitación
            adrihosan_setup_cocina_imitacion_cpu_fix();
            break;
        case 4862: // Hidráulica Original
            adrihosan_setup_hidraulica_original_cpu_fix();
            break;
        case 102: // Espejos
            adrihosan_setup_espejos_cpu_fix();
            break;
        case 4213: // Espejos con Luz
            adrihosan_setup_espejos_luz_cpu_fix();
            break;
        case 2209: // Wood
            adrihosan_setup_wood_cpu_fix();
            break;
        case 4806: // Paredes Decorativas
            adrihosan_setup_paredes_cpu_fix();
            break;
        case 1789: // Azulejos Baño
            adrihosan_setup_azulejos_bano_cpu_fix();
            break;
        case 1790: // Azulejos Cocina
            adrihosan_setup_azulejos_cocina_cpu_fix();
            break;
        case 2160: // Azulejos Exterior
            adrihosan_setup_azulejos_exterior_cpu_fix();
            break;
        case 66: // Azulejos Piscinas
            adrihosan_setup_azulejos_piscinas_cpu_fix();
            break;
        case 64: // Pavimentos y Suelos
            adrihosan_setup_pavimentos_cpu_fix();
            break;
        case 63: // Azulejos
            adrihosan_setup_azulejos_cpu_fix();
            break;
        case 2245: // Porcelánico Imitación Mármol
            adrihosan_setup_porcelanico_marmol_cpu_fix();
            break;
        case 62: // Cerámica (Página Pilar)
            adrihosan_setup_ceramica_cpu_fix();
            break;
        case 2082: // Imitación Hidráulico
            adrihosan_setup_imitacion_hidraulico_cpu_fix();
            break;
        case 2093: // Azulejo Metro
            adrihosan_setup_metro_cpu_fix();
            break;
        case 2410: // Porcelánico
            adrihosan_setup_porcelanico_cpu_fix();
            break;
        case 2510: // Porcelánico Extrafino
            adrihosan_setup_extrafino_cpu_fix();
            break;
        case 1844: // Gran Formato
            adrihosan_setup_gran_formato_cpu_fix();
            break;
        case 4564: // Baldosa Hidráulica (Página Pilar)
            adrihosan_setup_baldosa_hidraulica_cpu_fix();
            break;
        case 4865: // Baño BH Original
            adrihosan_setup_bano_bh_original_cpu_fix();
            break;
        case 4866: // Cocina BH Original
            adrihosan_setup_cocina_bh_original_cpu_fix();
            break;
        case 4869: // Exterior BH Original
            adrihosan_setup_exterior_bh_original_cpu_fix();
            break;
    }

    // CSS común para ocultar filtros antiguos (se aplica a TODAS las categorías del switch)
    add_action('wp_head', 'adrihosan_ocultar_filtros_antiguos_css', 99);
}

// CSS unificado para ocultar filtros - SE EJECUTA UNA SOLA VEZ
function adrihosan_ocultar_filtros_antiguos_css() {
    echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
}
