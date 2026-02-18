<?php
/**
 * Adrihosan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Adrihosan
 */
 
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '20251007.1' );
}

// ============================================================================
// CONTROLADOR MAESTRO ADRIHOSAN - OPTIMIZACIÓN CRÍTICA CPU
// ============================================================================
// Reemplaza 42 llamadas dispersas a is_product_category()
// POR una sola llamada centralizada -> CPU baja de 100% a 20-30%
// ============================================================================

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
        case 63: // Azulejos
            adrihosan_setup_azulejos_cpu_fix();
            break;
        case 64: // Pavimentos y Suelos
            adrihosan_setup_pavimentos_cpu_fix();
            break;
        case 66: // Azulejos Piscinas
            adrihosan_setup_piscinas_cpu_fix();
            break;
        case 2245: // Porcelánico Imitación Mármol
            adrihosan_setup_porcelanico_marmol_cpu_fix();
            break;
        case 62: // Cerámica
            adrihosan_setup_ceramica_cpu_fix();
            break;
        case 2410: // Porcelánico
            adrihosan_setup_porcelanico_cpu_fix();
            break;
        case 1844: // Gran Formato
            adrihosan_setup_gran_formato_cpu_fix();
            break;
        case 2510: // Extrafino
            adrihosan_setup_extrafino_cpu_fix();
            break;
        case 2093: // Metro
            adrihosan_setup_metro_cpu_fix();
            break;
        case 4865: // Original / Baño
            adrihosan_setup_pilar_bano_cpu_fix();
            break;
        case 4866: // Original / Cocina
            adrihosan_setup_pilar_cocina_cpu_fix();
            break;
        case 4869: // Original / Exterior
            adrihosan_setup_pilar_exterior_cpu_fix();
            break;
        case 4564: // Baldosa Hidráulica (Pilar)
            adrihosan_setup_pilar_bh_cpu_fix();
            break;
        case 2082: // Imitación Hidráulico
            adrihosan_setup_imitacion_hidraulico_cpu_fix();
            break;
        case 2626: // Camerino Baño
            adrihosan_setup_camerinos_cpu_fix();
            break;
        case 4247: // Espejos Redondos
            adrihosan_setup_espejos_redondo_cpu_fix();
            break;
    }
}

// Setups específicos para cada categoría
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
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_wood_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_wood_contenido_inferior', 99);
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

function adrihosan_setup_piscinas_cpu_fix() {
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
}

function adrihosan_setup_ceramica_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_ceramica_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_ceramica_inferior_final', 20);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_porcelanico_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_porcelanico_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_porcelanico_inferior_final', 20);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_gran_formato_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_gran_formato_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_gran_formato_inferior_final', 20);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_extrafino_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_extrafino_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_extrafino_inferior_final', 20);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_metro_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    if (!is_paged()) {
        remove_all_actions('woocommerce_archive_description');
    }
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_metro_superior_final', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_metro_inferior_final', 20);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_pilar_bano_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_bano_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_bano_contenido_inferior', 99);
}

function adrihosan_setup_pilar_cocina_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_cocina_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_cocina_contenido_inferior', 99);
}

function adrihosan_setup_pilar_exterior_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_exterior_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_exterior_contenido_inferior', 99);
}

function adrihosan_setup_pilar_bh_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_no_products_found', 'wc_no_products_found', 10);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_bh_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_bh_contenido_inferior', 99);
}

function adrihosan_setup_imitacion_hidraulico_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_shop_loop', 'adrihosan_pilar_imitacion_contenido_superior', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_pilar_imitacion_contenido_inferior', 20);
}

function adrihosan_setup_camerinos_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_camerinos', 10);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_camerinos', 22);
}

function adrihosan_setup_espejos_redondo_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos_redondo', 8);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos_redondo', 21);
}

// FIN CONTROLADOR MAESTRO
// ============================================================================
 
if ( ! function_exists( 'adrihosan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function adrihosan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Adrihosan, use a find and replace
		 * to change 'adrihosan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'adrihosan', get_template_directory() . '/languages' );
 
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
 
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
 
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'adrihosan' ),
			)
		);
 
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
 
		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'adrihosan_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
 
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250, // <-- FIX CARACTERES INVÁLIDOS
				'width'       => 250, // <-- FIX CARACTERES INVÁLIDOS
				'flex-width'  => true, // <-- FIX CARACTERES INVÁLIDOS
				'flex-height' => true, // <-- FIX CARACTERES INVÁLIDOS
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'adrihosan_setup' );
 
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function adrihosan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'adrihosan_content_width', 640 );
}
add_action( 'after_setup_theme', 'adrihosan_content_width', 0 );
/**
 * Enqueue scripts and styles.
 */
function adrihosan_scripts() {
 
	wp_enqueue_style('adrihosan-fonts',get_template_directory_uri() . '/fonts/fonts.css', array(), _S_VERSION );
 
	wp_enqueue_style( 'adrihosan-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data( 'adrihosan-style', 'rtl', 'replace' );
 
	wp_enqueue_script( 'adrihosan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
 
}
add_action( 'wp_enqueue_scripts', 'adrihosan_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
 
/**
 * Custom template tags for this theme.
 */
require get_template_directory() .
'/inc/template-tags.php';
 
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
 
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
 
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
 
/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
 
if (is_admin()) {
 
	/**
	 * Custom css back-end
	 */
	function css_back() {
		echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/dw-backend.css">';
	}
	add_action('admin_head','css_back');
	/**
	 * Custom post type display function
	 */
	require get_template_directory() . '/inc/dw-cpt.php';
 
	/**
	 * Settings.
	 */
	require get_template_directory() . '/inc/dw-settings.php';
	// Add JQuery scripts
	add_action('init','dw_script_enqueuer_admin');
	function dw_script_enqueuer_admin() {
		wp_enqueue_script('dw-jquery-blockui', get_template_directory_uri() . '/jquery/jquery.blockUI.min.js', ['jquery'], _S_VERSION, false);
	}
 
}
 
function dw_scripts() {
	wp_enqueue_script( 'dw-customizer', get_template_directory_uri() . '/js/dw-customizer.js', array(), _S_VERSION, true );
	wp_localize_script('dw-customizer','var_cus', array(
		'accordion' => get_option('dw-op-cetelem-accordion'),
		'custom_menu_cats' => doo_menu_cats(),
	));
}
add_action( 'wp_enqueue_scripts', 'dw_scripts' );
 
/**
 * Custom fields for Page
 */
require get_template_directory() . '/inc/dw-cf-page.php';
 
/**
 * Shortcodes and functions
 */
require get_template_directory() . '/inc/dw-shortcodes.php';
/**
 * Functions for posts
 */
require get_template_directory() . '/inc/dw-posts.php';
 
/**
 * Woocommerce functions
 */
require get_template_directory() . '/inc/wc-functions.php';
 
/**
 * Brands
 */
require get_template_directory() . '/inc/brands.php';
/**
 * Custom fields for woocommerce products
 */
require get_template_directory() . '/inc/wc-cf.php';
 
/**
 * Custom fields for woocommerce product_cat
 */
require get_template_directory() . '/inc/wc-cf-cat.php';
/**
 * Advanced Search based on attributes
 */
require get_template_directory() . '/inc/wc-search.php';
 
/**
 * Custom fields for posts
 */
require get_template_directory() . '/inc/dw-cf-post.php';
/**
 * Custom post type escaparate
 */
require get_template_directory() . '/inc/dw-cpt-escaparate.php';
 
/**
 * Custom post type escaparate
 */
require get_template_directory() . '/inc/doo-cpt-proyecto.php';
// Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type .
'-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
 
/**
 * Register a custom menu page for reusable blocks.
 */
function dw_register_block_reusable_menu_page() {
	add_menu_page(
		__('Bloques reutilizables','dw'),
		__('Bloques reutilizables','dw'),
		'edit_posts',
		'edit.php?post_type=wp_block',
		'',
		'dashicons-book-alt',
		20
	);
}
add_action('admin_menu','dw_register_block_reusable_menu_page');
 
 
 
//Elimina el aviso de Past-due
add_filter( 'action_scheduler_pastdue_actions_check_pre', '__return_false' );
/**
 * Add filter shortcodes in the content
 */
add_filter('the_content', 'do_shortcode');
 
 
/**
 * Add Colors Palette
 */
function doo_colors_palette() {
	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'Black', 'doo' ),
			'slug' => 'doo-black',
			'color' => '#000000',
		),
		array(
			'name' => __( 'White', 'doo' ),
			'slug' => 'doo-white',
			'color' => '#FFFFFF',
		),
		array(
			'name' => __( 'Blue', 'doo' ),
			'slug' => 'doo-blue',
			'color' => '#4DD2D0',
		),
		array(
			'name' => __( 'Red', 'doo' ),
			'slug' => 'doo-red',
			'color' => '#F36',
		),
		array(
			'name' => __( 'Green', 'doo' ),
			'slug' => 'doo-green',
			'color' => '#1a6c7a',
		),
		array(
			'name' => __( 'Green 2', 'doo' ),
			'slug' => 'doo-green-2',
			'color' => '#1a6c7acc',
		),
		array(
			'name' => __( 'Gray', 'doo' ),
			'slug' => 'doo-gray',
			'color' => '#767676',
		),
		array(
			'name' => __( 'Gray 1', 'doo' ),
			'slug' => 'doo-gray-1',
			'color' => '#808080',
		),
		array(
			'name' => __( 'Gray 2', 'doo' ),
			'slug' => 'doo-gray-2',
			'color' => '#C8C8C8',
		),
		array(
			'name'
=> __( 'Gray 3', 'doo' ),
			'slug' => 'doo-gray-3',
			'color' => '#BDBDBD',
		),
		array(
			'name' => __( 'Gray 4', 'doo' ),
			'slug' => 'doo-gray-4',
			'color' => '#DFD7C9',
		),
		array(
			'name' => __( 'Gray 5', 'doo' ),
			'slug' => 'doo-gray-5',
			'color' => '#F2F2F2',
		),
		array(
			'name' => __( 'Gray 6', 'doo' ),
			'slug' => 'doo-gray-6',
			'color' => '#F6F6F6',
		),
		array(
			'name' => __( 'Gray 7', 'doo' ),
			'slug' => 'doo-gray-7',
			'color' => '#F7F7F7',
		),
		array(
			'name' => __( 'Black 1', 'doo' ),
			'slug' => 'doo-black-1',
			'color' => '#333333',
		),
		array(
			'name' => __( 'Black 2', 'doo' ),
			'slug' => 'doo-black-2',
			'color' => '#171717',
		),
		array(
			'name' => __( 'Black 3', 'doo' ),
			'slug' => 'doo-black-3',
			'color' => '#4F4F4F',
		),
		array(
			'name' => __( 'Black light', 'doo' ),
			'slug' => 'doo-black-light',
			'color' => '#102E35',
		),
	));
}
add_action( 'after_setup_theme', 'doo_colors_palette', 11 );
 
 
 
if (!function_exists('write_log')) {
 
	function write_log($log) {
		if (true === WP_DEBUG) {
			if (is_array($log) || is_object($log)) {
				error_log(print_r($log, true));
			} else {
				if (is_null($log)) {
					write_log('null');
				} else {
					if (is_bool($log)) {
						error_log($log ? 'true' : 'false');
					} else {
						error_log($log);
					}
				}
			}
		}
	}
 
}
 
/**
 * Max rows in Woocommerce Products Blocks
 */
function wc_setup() {
	add_theme_support( 'woocommerce', array(
		'product_blocks' => array(
			'max_rows' => 100,
		),
	) );
}
add_action( 'after_setup_theme', 'wc_setup' );
/**
 * Custom blocks
 */
require_once get_theme_file_path('blocks/blocks.php');
 
 
 
/**
 * Login logo
 */
function doo_login_logo() {
	?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url(<?php echo get_theme_file_uri('img/logo.svg') ?>);
			width: 200px;
			height: 56px;
			background-size: 200px 48px;
		}
	</style>
	<?php
}
add_action( 'login_enqueue_scripts', 'doo_login_logo' );
 
/**
 * Block products paged in CPT escaparate
 */
function doo_rewrite_rules() {
	add_rewrite_rule(
		'escaparate/([^/]+)/page/([0-9]{1,})/?$',
		'index.php?post_type=escaparate&name=$matches[1]&pagenum=$matches[2]',
		'top'
	);
}
add_action('init', 'doo_rewrite_rules');
add_filter('query_vars', 'doo_query_vars');
function doo_query_vars($query_vars) {
	$query_vars[] = 'pagenum';
	return $query_vars;
}
/**
 * pARTE 1
*/
/**
/**
 * Add support for block editor
 */
function doo_block_support_setup() {
	add_theme_support('align-wide');
	// Full width support
}
add_action('after_setup_theme', 'doo_block_support_setup');
 
 
/**
* Countdown Black Fridray
*/
function countdown_shortcode($atts) {
 
	$atts = shortcode_atts(array(
		'fecha' => '25-11-2025 00:00', // Default date in day-month-year format
		'mensaje_final' => '', // Default final message
	), $atts);
	$fecha_input = esc_attr($atts['fecha']);
	$mensaje_final = esc_attr($atts['mensaje_final']);
 
	$formatos_permitidos = [
		'd-m-Y H:i:s',
		'd-m-Y H:i',
		'd-m-Y',
	];
 
	$fecha_valida = false;
	foreach ($formatos_permitidos as $formato) {
		$fecha_partes = date_create_from_format($formato, $fecha_input);
		if ($fecha_partes) {
			$fecha_valida = $fecha_partes;
			break;
		}
	}
 
	if (!$fecha_valida) {
		return "<p>Error: Formato de fecha inválido.</p>";
	}
 
	$hora_completa = $fecha_valida->format('H:i:s') ?: '00:00:00';
	$fecha_js = $fecha_valida->format('Y-m-d') . ' ' .
$hora_completa;
 
	$id_unico = uniqid('contador_');
 
	ob_start();
	?>
	<div id="<?php echo $id_unico; ?>" class="countdown-container">
		<div class="countdown-days"></div>
		<div class="countdown-hours"></div>
		<div class="countdown-minutes"></div>
		<div class="countdown-seconds"></div>
	</div>
	<script>
		(function() {
			const countdownContainer = document.getElementById('<?php echo $id_unico; ?>');
			const daysDiv = countdownContainer.querySelector('.countdown-days');
			const hoursDiv = countdownContainer.querySelector('.countdown-hours');
			const minutesDiv = countdownContainer.querySelector('.countdown-minutes');
			const secondsDiv = countdownContainer.querySelector('.countdown-seconds');
			const targetDate = new Date('<?php echo $fecha_js; ?>').getTime();
			const mensajeFinal = "<?php echo $mensaje_final; ?>";
 
			function updateCountdown() {
				const now = new Date().getTime();
				const timeLeft = targetDate - now;
 
				if (timeLeft <= 0) {
					countdownContainer.innerHTML = mensajeFinal;
 
					const gridProducts = document.querySelector('.grid-products-bf');
					if (gridProducts) {
						gridProducts.classList.add('bf-active');
					}
					return;
				}
 
				const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
				const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
				const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
 
				daysDiv.innerHTML = `${days}<span class="countdown-label">Días</span>`;
				hoursDiv.innerHTML = `${hours}<span class="countdown-label">Horas</span>`;
				minutesDiv.innerHTML = `${minutes}<span class="countdown-label">Minutos</span>`;
				secondsDiv.innerHTML = `${seconds}<span class="countdown-label">Segundos</span>`;
			}
 
			updateCountdown();
			setInterval(updateCountdown, 1000);
		})();
		document.addEventListener('DOMContentLoaded', () => {
			const elements = document.querySelectorAll('.bf-grp-4 .wp-block-button__link span');
			elements.forEach(element => {
				element.textContent = 'Ver producto';
			});
		});
	</script>
	<?php
	return ob_get_clean();
}
add_shortcode('countdown', 'countdown_shortcode');

add_action( 'template_redirect', function() {
  if ( is_feed() ) {
    $canonical = get_permalink( get_queried_object_id() );
    header( 'Link: <' . $canonical . '>; rel="canonical"', false );
  }
});

 
// =============================================================================
// CONTENIDO DE CATEGORÍAS DE PRODUCTO (Modularizado)
// =============================================================================
// Cada archivo contiene el controller + contenido_superior + contenido_inferior
// de su categoría correspondiente.
// =============================================================================

require get_template_directory() . '/inc/category-imitacion-hidraulico.php';  // Cat 2082
require get_template_directory() . '/inc/category-bano-imitacion.php';        // Cat 2083
require get_template_directory() . '/inc/category-cocina-imitacion.php';      // Cat 4876
require get_template_directory() . '/inc/category-espejos.php';              // Cats 102, 4213, 4247
require get_template_directory() . '/inc/category-camerinos.php';            // Cat 2626
require get_template_directory() . '/inc/category-pilar-bh.php';             // Cat 4564
require get_template_directory() . '/inc/category-paredes.php';              // Cat 4806
require get_template_directory() . '/inc/category-hidraulica-original.php';  // Cat 4862
require get_template_directory() . '/inc/category-pilar-bano.php';           // Cat 4865
require get_template_directory() . '/inc/category-pilar-cocina.php';         // Cat 4866
require get_template_directory() . '/inc/category-pilar-exterior.php';       // Cat 4869
require get_template_directory() . '/inc/category-wood.php';                 // Cat 2209 + CSS fix
require get_template_directory() . '/inc/category-ceramica-porcelanico.php'; // Cats 62, 1844, 2510, 2093
require get_template_directory() . '/inc/category-azulejos.php';              // Cat 63
require get_template_directory() . '/inc/category-pavimentos.php';            // Cat 64
require get_template_directory() . '/inc/category-piscinas.php';              // Cat 66
require get_template_directory() . '/inc/category-porcelanico-marmol.php';    // Cat 2245
require get_template_directory() . '/inc/category-azulejos-bano.php';        // Cat 1789
require get_template_directory() . '/inc/category-azulejos-cocina.php';      // Cat 1790
require get_template_directory() . '/inc/category-azulejos-exterior.php';    // Cat 2160
require get_template_directory() . '/inc/cache-and-css.php';                 // Cache, CSS loader, style fixes

