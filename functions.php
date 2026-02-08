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
 *   └── categories/           - Contenido por categoría (26 archivos)
 *       ├── ceramica.php
 *       ├── pavimentos.php
 *       ├── azulejos.php
 *       ├── espejos.php
 *       └── ... (ver carpeta para lista completa)
 *
 * @package Adrihosan
 * @version 2.1.0 (Categorías divididas)
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

// 5. Contenido de categorías (un archivo por categoría)
$categories_dir = get_stylesheet_directory() . '/includes/categories/';
foreach (glob($categories_dir . '*.php') as $category_file) {
    require_once $category_file;
}

// =============================================================================
// FIN - Todo el código está organizado en /includes/
// =============================================================================
