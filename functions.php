<?php
/**
 * Adrihosan Theme - functions.php
 *
 * Archivo principal del tema hijo que carga todos los módulos.
 *
 * ESTRUCTURA DE ARCHIVOS:
 * ========================
 * /includes/
 *   ├── core.php              - Setup tema, scripts, estilos, colores
 *   ├── master-controller.php - Controlador centralizado por categoría
 *   ├── category-setup.php    - Funciones setup para cada categoría
 *   ├── utilities.php         - Caché, CSS loader, ordenación, filtros
 *   └── categories.php        - Contenido de todas las categorías
 *
 * @package Adrihosan
 * @version 2.0.0 (Refactorizado)
 */

if (!defined('ABSPATH')) {
    exit;
}

// =============================================================================
// CARGAR MÓDULOS DEL TEMA
// =============================================================================

// 1. Funciones core del tema (setup, scripts, estilos)
require_once get_stylesheet_directory() . '/includes/core.php';

// 2. Utilidades (caché, CSS loader, ordenación)
require_once get_stylesheet_directory() . '/includes/utilities.php';

// 3. Funciones setup de categorías
require_once get_stylesheet_directory() . '/includes/category-setup.php';

// 4. Controlador maestro (switch por categoría)
require_once get_stylesheet_directory() . '/includes/master-controller.php';

// 5. Contenido de categorías (HTML de cada categoría)
require_once get_stylesheet_directory() . '/includes/categories.php';

// =============================================================================
// FIN - Todo el código está organizado en /includes/
// =============================================================================
