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
    }
}

// Setups específicos para cada categoría
function adrihosan_setup_bano_imitacion_cpu_fix() {
    remove_all_actions('woocommerce_archive_description');
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_bano', 8);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_bano', 20);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_cocina_imitacion_cpu_fix() {
    remove_all_actions('woocommerce_archive_description');
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_cocina', 9);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_cocina', 21);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_hidraulica_original_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_original', 7);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_original', 20);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_espejos_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos', 9);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos', 21);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_espejos_luz_cpu_fix() {
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos_luz', 8);
    add_action('woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos_luz', 21);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
}

function adrihosan_setup_wood_cpu_fix() {
    add_action('woocommerce_before_shop_loop', 'adrihosan_wood_cat_before_loop_final_validated', 5);
    add_action('woocommerce_after_shop_loop', 'adrihosan_wood_cat_after_loop_final', 35);
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section { display: none !important; }</style>';
    });
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

// ============================================================================
// ARCHIVOS DE CATEGORÍAS MODULARIZADOS
// ============================================================================
require get_template_directory() . '/inc/category-bano-imitacion.php';

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
// SISTEMA ANTIGUO - DESACTIVADO (Migrado a sistema modular)
// =============================================================================
// function adrihosan_custom_category_assets() {
//     if ( is_product_category( array(2093, 2510, 1844, 2410, 62, 4564, 2082, 4806, 2083, 4876, 102, 4213, 4247, 2626, 4862, 4865, 4866, 4869, 4877, 2209, 1789 ) ) ) {
//         wp_enqueue_style('adrihosan-category-styles', get_stylesheet_directory_uri() . '/css/category-styles.css', array(), filemtime( get_stylesheet_directory() . '/css/category-styles.css' ));
//         wp_enqueue_script('adrihosan-category-scripts', get_stylesheet_directory_uri() . '/js/category-scripts.js', array(), filemtime( get_stylesheet_directory() . '/js/category-scripts.js' ), true);
//     }
// }
// add_action( 'wp_enqueue_scripts', 'adrihosan_custom_category_assets', 99 ); // DESACTIVADO - Migrado a sistema modular



/******************************************************************************
 * =============================================================================
 * CÓDIGO 10/10 PARA "IMITACIÓN HIDRÁULICO" (ID 2082)
 * - Elimina código sobrante y optimiza SEO.
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla la lógica de la página "Imitación Hidráulico".
 */
function adrihosan_pilar_imitacion_controller() {
    $category_id = 2082; 
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    // Elimina elementos por defecto.
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // Inyecta el contenido personalizado.
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_imitacion_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_imitacion_contenido_inferior', 20 );
}
add_action( 'template_redirect', 'adrihosan_pilar_imitacion_controller' );


/**
 * Inyecta el contenido SUPERIOR para la categoría 2082.
 */
function adrihosan_pilar_imitacion_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/suelo-hidraulico-adrihosan.jpg');">
        <div class="hero-content">
            <h1>Azulejo Imitaci&oacute;n Hidr&aacute;ulico Porcel&aacute;nico</h1>
            <p>Consigue la est&eacute;tica atemporal del mosaico hidr&aacute;ulico sin preocuparte por manchas, ceras o cuidados especiales. La soluci&oacute;n perfecta para el d&iacute;a a d&iacute;a.</p>
            <div class="hero-buttons">
                <a href="#catalogo-imitacion" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#ventajas-porcelanico" class="hero-btn secondary">Ventajas del Porcel&aacute;nico</a>
            </div>
        </div>
    </section>
    <section class="ai-value-section adrihosan-full-width-block" id="ventajas-porcelanico">
        <div class="ai-value-wrapper">
            <div class="section-header">
                <h2>Dise&ntilde;ado para Vivir, no solo para Mirar</h2>
                <p>El porcel&aacute;nico te ofrece lo mejor de dos mundos: la belleza que te enamora y la resistencia que necesitas para tu d&iacute;a a d&iacute;a, sin complicaciones.</p>
            </div>
            <div class="ai-value-grid">
                <div class="ai-value-card"><div class="icon">🛡️</div><h3>Resistencia Extrema</h3><p>A prueba de golpes, rayado y alto tr&aacute;nsito. Un suelo que aguanta el ritmo de tu familia, mascotas incluidas.</p></div>
                <div class="ai-value-card"><div class="icon">🧼</div><h3>Mantenimiento Cero</h3><p>Olv&iacute;date de ceras y productos especiales. Se limpia con cualquier producto convencional, incluso lej&iacute;a.</p></div>
                <div class="ai-value-card"><div class="icon">💧</div><h3>Impermeable y Anti-Manchas</h3><p>Su nula porosidad (inferior al 0,5%) impide la absorci&oacute;n de l&iacute;quidos, evitando manchas para siempre.</p></div>
            </div>
        </div>
    </section>
    <section class="ai-inspiration-section">
        <div class="ai-inspiration-wrapper">
            <h2>Donde la Inspiraci&oacute;n Toma Forma</h2>
            <p class="section-subtitle">Descubre c&oacute;mo el azulejo porcel&aacute;nico de estilo hidr&aacute;ulico puede transformar tus espacios. Insp&iacute;rate con estas ideas y explora en cada categor&iacute;a los modelos aptos para tu proyecto.</p>
            <div class="ai-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/cocina-imitacion" class="ai-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-1.jpg" alt="Cocina moderna con suelo de azulejo imitación hidráulico."><div class="ai-card-content"><h3>Cocinas con Car&aacute;cter</h3><p>Crea salpicaderos &uacute;nicos o suelos que definen el coraz&oacute;n de tu hogar con la m&aacute;xima resistencia y facilidad de limpieza.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/bano-imitacion" class="ai-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan.jpg" alt="Baño elegante con pared de acento de azulejo porcelánico imitación hidráulico."><div class="ai-card-content"><h3>Ba&ntilde;os para Desconectar</h3><p>Zonas de ducha espectaculares y suelos que lo aguantan todo. El estilo que buscas con la tranquilidad que necesitas.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/" class="ai-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-2.jpg" alt="Pared decorativa en un salón con azulejo imitación hidráulico."><div class="ai-card-content"><h3>Paredes Decorativas</h3><p>Transforma cualquier pared en el foco de atenci&oacute;n, desde un recibidor hasta el cabecero de una cama. El l&iacute;mite es tu imaginaci&oacute;n.</p></div></a>
            </div>
        </div>
    </section>
    
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-imitacion" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426278"]'); ?></div>
    
    <section class="ai-product-header-section" id="catalogo-imitacion">
        <div class="ai-product-header-wrapper">
            <h2>Nuestro Cat&aacute;logo de Azulejos Imitaci&oacute;n Hidr&aacute;ulico</h2>
            <p>Explora la colecci&oacute;n completa. Usa los filtros para afinar tu b&uacute;squeda o d&eacute;jate inspirar por la variedad de dise&ntilde;os que combinan el encanto de siempre con la tecnolog&iacute;a de ahora.</p>
        </div>
    </section>
    <?php
}

/**
 * Inyecta el contenido INFERIOR para la categoría 2082.
 */
function adrihosan_pilar_imitacion_contenido_inferior() {
    ?>
    <section class="ai-guide-section adrihosan-full-width-block">
        <div class="ai-guide-wrapper">
            <div class="ai-guide-header">
                <h2>La Decisi&oacute;n Inteligente:<br>Porcel&aacute;nico vs. Hidr&aacute;ulico Aut&eacute;ntico</h2>
                <p>Ambos tienen su encanto, pero solo uno est&aacute; dise&ntilde;ado para la vida moderna. Compara y elige con total seguridad la opci&oacute;n que mejor se adapta a tu hogar y a tu ritmo de vida.</p>
            </div>
            <div class="ai-comparison-grid"><div class="ai-comparison-header"><h3>Baldosa Hidr&aacute;ulica Aut&eacute;ntica</h3></div><div class="ai-comparison-header highlight"><h3>Porcel&aacute;nico Imitaci&oacute;n Hidr&aacute;ulico</h3></div><div class="ai-comparison-cell"><h4>Mantenimiento</h4><p class="con">Requiere sellado inicial y ceras peri&oacute;dicas. Sensible a manchas y productos &aacute;cidos.</p></div><div class="ai-comparison-cell"><h4>Mantenimiento</h4><p class="pro">Nulo. Limpieza con cualquier producto convencional. No necesita ceras ni selladores.</p></div><div class="ai-comparison-cell"><h4>Resistencia</h4><p class="con">Material poroso y m&aacute;s delicado. Sensible a golpes y al desgaste si no se cuida.</p></div><div class="ai-comparison-cell"><h4>Resistencia</h4><p class="pro">Extrema. Material de dureza superior, resistente al rayado, a los golpes y al alto tr&aacute;nsito.</p></div><div class="ai-comparison-cell"><h4>Instalaci&oacute;n</h4><p class="con">M&aacute;s compleja. Requiere mano de obra especializada y tratamiento post-colocaci&oacute;n.</p></div><div class="ai-comparison-cell"><h4>Instalaci&oacute;n</h4><p class="pro">Est&aacute;ndar. Cualquier profesional puede colocarlo sin tratamientos adicionales.</p></div><div class="ai-comparison-cell"><h4>Precio</h4><p class="con">Coste por m² significativamente m&aacute;s elevado debido a su fabricaci&oacute;n artesanal.</p></div><div class="ai-comparison-cell"><h4>Precio</h4><p class="pro">M&aacute;s asequible. Su producci&oacute;n industrial lo hace un 70% m&aacute;s econ&oacute;mico que el producto artesanal.</p></div><div class="ai-comparison-cell"><h4>Apariencia</h4><p class="con">Cada pieza es &uacute;nica con variaciones de color y textura. Requiere un sellado para resaltar los colores.</p></div><div class="ai-comparison-cell"><h4>Apariencia</h4><p class="pro">Dise&ntilde;os precisos e inalterables. Colores vivos y definidos que no se desvanecen.</p></div></div>
        </div>
    </section>
    
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php } ?>

<section class="faq-section-common adrihosan-full-width-block">
    <div class="faq-wrapper-common">
        <h2 class="faq-main-title-common">Dudas Frecuentes sobre el Porcel&aacute;nico Hidr&aacute;ulico</h2>
        <div class="faq-items-wrapper">
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;El suelo imitaci&oacute;n hidr&aacute;ulico necesita mantenimiento o sellado?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>No. A diferencia del mosaico hidr&aacute;ulico original de cemento, nuestro <strong>gres porcel&aacute;nico</strong> es un material no poroso. Olv&iacute;date de aplicar ceras, selladores o tratamientos peri&oacute;dicos. Su superficie vitrificada impide que las manchas de vino, aceite o cal penetren, facilitando una <strong>limpieza diaria</strong> con agua y jab&oacute;n neutro.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Qu&eacute; tama&ntilde;o de junta debo usar para un efecto realista?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>La clave del realismo est&aacute; en la junta. Recomendamos una separaci&oacute;n m&iacute;nima de 1.5 a 2 mm. Evita la junta blanca pura; opta por un <strong>color cemento</strong> o gris perla que se integre con el patr&oacute;n desgastado de la pieza. Una buena elecci&oacute;n de <strong>material de rejuntado</strong> potencia la est&eacute;tica de baldosa individual antigua.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Puedo colocar este azulejo en la zona de ducha?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>S&iacute;, es una de sus mejores aplicaciones. Al tener una absorci&oacute;n de agua casi nula, el <strong>azulejo porcel&aacute;nico</strong> es t&eacute;cnicamente superior para zonas h&uacute;medas. Adem&aacute;s, muchos modelos cuentan con acabado <strong>antideslizante C2</strong>, garantizando tu seguridad sin perder la suavidad al tacto necesaria para ir descalzo.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;C&oacute;mo evito recargar el espacio visualmente?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>Aplica la regla del equilibrio. Si instalas un <strong>suelo con patr&oacute;n geom&eacute;trico</strong> intenso, mantén las paredes en tonos neutros o blancos. Otra opci&oacute;n ganadora es crear una "alfombra" central con el hidr&aacute;ulico y rodearla de un <strong>pavimento base liso</strong> o imitaci&oacute;n madera, zonificando as&iacute; el espacio sin saturarlo.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Es compatible con suelo radiante?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>Totalmente. La densidad del <strong>porcel&aacute;nico rectificado</strong> lo convierte en un excelente conductor t&eacute;rmico. Transmite el calor de forma m&aacute;s eficiente que la madera o el laminado, maximizando el rendimiento de tu sistema de <strong>calefacci&oacute;n radiante</strong> y reduciendo el consumo energ&eacute;tico de tu hogar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;La decisi&oacute;n final te abruma?<span>Soy Ricardo, y estoy aqu&iacute; para ayudarte.</span></h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20azulejos%20imitaci%C3%B3n%20hidr%C3%A1ulico" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

// Cat 2083 (Baño Imitación) - Funciones movidas a inc/category-bano-imitacion.php

/******************************************************************************
 * =============================================================================
 * CÓDIGO 10/10 PARA 'AZULEJO HIDRÁULICO COCINA' (ID: 4876)
 * =============================================================================
 ******************************************************************************/

// DESACTIVADO - Ahora usa adrihosan_master_controller_cpu_fix()
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_cocina', 9 );
function adrihosan_contenido_superior_cocina() {
    if ( is_product_category( 4876 ) && ! is_singular('product') ) {
        remove_all_actions( 'woocommerce_archive_description' );
        add_filter( 'woocommerce_show_page_title', '__return_false' );
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
        ?>
        <header class="ahc-hero-section ahc-main-font ahc-full-width-section">
            <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/AMB-CANET-22-AQUA-BRUNEI-L25-BLANCO-WEB-1-optimized.jpg" alt="Cocina moderna con un salpicadero de azulejo hidráulico de colores vivos" class="hero-bg-image">
            <div class="hero-content">
               
                <h1>Azulejo Imitaci&oacute;n Hidr&aacute;ulico para Cocina</h1>
                <p>El toque de car&aacute;cter que tu cocina necesita. Dise&ntilde;os que resisten el d&iacute;a a d&iacute;a, f&aacute;ciles de limpiar y con una personalidad que no deja a nadie indiferente.</p>
                <div class="hero-buttons">
                    <a href="#catalogo-cocina" class="ahc-boton primario">Ver Dise&ntilde;os</a>
                    <a href="https://www.adrihosan.com/proyecto-categoria/cocinas/" class="ahc-boton secundario" target="_blank" rel="noopener noreferrer">Ver Proyectos de Cocinas</a>
                </div>
            </div>
        </header>
        <section class="ahc-ventajas-section ahc-main-font">
            <div class="section-header">
                <h2 class="ahc-color-oscuro">La Elecci&oacute;n Inteligente para tu Cocina</h2>
                <p class="section-p">El azulejo porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico te da toda la belleza del dise&ntilde;o tradicional sin sus complicaciones. Creado para durar, pensado para vivirlo.</p>
            </div>
            <div class="ahc-ventajas-grid">
                <div class="ahc-ventaja-card"><div class="icon">🛡️</div><h3 class="ahc-color-oscuro">Cero Mantenimiento</h3><p>Olv&iacute;date de ceras y selladores. Su superficie no porosa lo hace inmune a las manchas y a la humedad. Instalar y disfrutar.</p></div>
                <div class="ahc-ventaja-card"><div class="icon">🔥</div><h3 class="ahc-color-oscuro">Resistencia Extrema</h3><p>Soporta el calor, los golpes y los productos de limpieza m&aacute;s exigentes. El aliado perfecto para la zona de fuegos y la encimera.</p></div>
                <div class="ahc-ventaja-card"><div class="icon">🧼</div><h3 class="ahc-color-oscuro">Limpieza F&aacute;cil y R&aacute;pida</h3><p>Una simple pasada con tu limpiador habitual es suficiente para que luzca como el primer d&iacute;a. M&aacute;s tiempo para cocinar, menos para limpiar.</p></div>
                <div class="ahc-ventaja-card"><div class="icon">🎨</div><h3 class="ahc-color-oscuro">Dise&ntilde;os Siempre Perfectos</h3><p>La impresi&oacute;n digital garantiza patrones n&iacute;tidos y colores vivos que no se desgastan con el tiempo ni el uso. Belleza que perdura.</p></div>
            </div>
        </section>
        <section class="ahc-inspiracion-section ahc-main-font">
            <div style="max-width: 1152px; margin: 0 auto; padding: 0 24px;">
                <div class="section-header" style="text-align: center; margin-bottom: 3rem;"><h2 class="ahc-color-oscuro">Ideas que transforman tu cocina</h2><p class="section-p">Desde un detalle sutil a una declaraci&oacute;n de intenciones. Descubre c&oacute;mo integrar el azulejo hidr&aacute;ulico.</p></div>
                <div class="ahc-inspiracion-grid">
                    <a href="#catalogo-cocina" class="ahc-inspiracion-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Salpicadero de cocina con azulejos hidráulicos geométricos en tonos azules y blancos."><div class="card-content"><h3>Salpicaderos con Car&aacute;cter</h3><p>Convierte la pared de la encimera en el punto focal de tu cocina. Un dise&ntilde;o geom&eacute;trico o floral protege de salpicaduras y a&ntilde;ade una dosis masiva de estilo.</p></div></a>
                    <a href="#catalogo-cocina" class="ahc-inspiracion-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-1.jpg" alt="Suelo de cocina que utiliza azulejos hidráulicos para crear un efecto alfombra."><div class="card-content"><h3>Suelos que Delimitan</h3><p>Usa un patr&oacute;n hidr&aacute;ulico para crear una "alfombra" cer&aacute;mica que separe visualmente la zona de cocina del comedor en espacios abiertos.</p></div></a>
                    <a href="#catalogo-cocina" class="ahc-inspiracion-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared.jpg" alt="Pared completa de una zona de office en la cocina revestida con azulejos hidráulicos vintage."><div class="card-content"><h3>Una Pared Protagonista</h3><p>&iquest;Tienes una pared sin m&aacute;s en la zona del office? Rev&iacute;stela por completo y transf&oacute;rmala en una obra de arte. Ideal para dar profundidad y personalidad.</p></div></a>
                </div>
            </div>
        </section>
        
        <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
            <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
        </div>
        
        <div id="destino-filtro-adria-cocina-imitacion" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
        <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426278"]'); ?></div>
        
        <?php // --- TÍTULO H2 ANTES DEL LOOP --- ?>
        <div class="product-loop-header" id="catalogo-cocina">
            <h2 class="product-loop-title">Cat&aacute;logo de Azulejos para Cocina</h2>
        </div>
        <?php
    }
}

// COMENTADO - Duplicado del controlador maestro (línea 81)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_cocina', 21 );
function adrihosan_contenido_inferior_cocina() {
    if ( is_product_category( 4876 ) && ! is_singular('product') ) {
        ?>
        <section class="ap-seo-content-section adrihosan-full-width-block">
            <div class="ap-seo-content-wrapper">
                <h2>Gu&iacute;a para Elegir Azulejos Imitaci&oacute;n Hidr&aacute;ulico para tu Cocina</h2>
                <p>El <strong>azulejo porcel&aacute;nico para cocina</strong> se ha convertido en la opci&oacute;n estrella para quienes desean un dise&ntilde;o con car&aacute;cter sin renunciar a la m&aacute;xima funcionalidad. Inspirados en los cl&aacute;sicos mosaicos, nuestra colecci&oacute;n de <a href="/categoria-producto/baldosa-hidraulica/imitacion/">azulejo imitaci&oacute;n hidr&aacute;ulico</a> ofrece una soluci&oacute;n duradera, higi&eacute;nica y de nulo mantenimiento, ideal para el ritmo de vida actual.</p>
                <h3>La Combinaci&oacute;n Perfecta: Estilo y Resistencia en el Coraz&oacute;n del Hogar</h3>
                <p>La cocina es una de las zonas m&aacute;s exigentes de la casa, expuesta a diario a calor, humedad, grasa y productos de limpieza. El porcel&aacute;nico no solo soporta estas condiciones sin inmutarse, sino que lo hace aportando un valor est&eacute;tico inigualable.</p>
                <ul>
                    <li><strong>Ideal para Salpicaderos:</strong> Como <strong>frontal de cocina</strong>, el porcel&aacute;nico es imbatible. Protege la pared de salpicaduras, es totalmente ign&iacute;fugo (seguro detr&aacute;s de los fuegos) y se limpia con una simple bayeta, manteniendo el dise&ntilde;o intacto para siempre.</li>
                    <li><strong>Suelos a Prueba de Todo:</strong> Un <strong>suelo de cocina resistente</strong> es fundamental. El porcel&aacute;nico no se raya, no se mancha y soporta el tr&aacute;nsito constante. Puedes elegir un dise&ntilde;o que cubra toda la superficie o crear una "alfombra" cer&aacute;mica para delimitar la zona de comedor.</li>
                </ul>
                <p>Al elegir un <strong>azulejo porcel&aacute;nico para tu cocina</strong>, est&aacute;s invirtiendo en tranquilidad. Disfruta de la belleza de un dise&ntilde;o hidr&aacute;ulico sin preocuparte por manchas de aceite, vino o por productos de limpieza agresivos. Es la elecci&oacute;n pr&aacute;ctica para cocinas reales y vividas.</p>
            </div>
        </section>
        <section class="faq-section-common adrihosan-full-width-block">
            <div class="faq-wrapper-common">
                <h2 class="faq-main-title-common">Dudas Frecuentes sobre Azulejos para Cocina</h2>
                <div class="faq-items-wrapper">
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Es resistente a las manchas de aceite, vino o tomate?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Totalmente. El azulejo porcel&aacute;nico tiene una absorci&oacute;n de agua casi nula (inferior al 0.5%), lo que significa que las manchas no penetran. Se limpian f&aacute;cilmente sin dejar rastro, a diferencia del hidr&aacute;ulico de cemento que es poroso y requiere sellado.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Se puede poner en la pared detr&aacute;s de la vitrocer&aacute;mica?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>S&iacute;, es ideal para esa zona. El material porcel&aacute;nico es ign&iacute;fugo y soporta perfectamente las altas temperaturas y los cambios bruscos de calor sin agrietarse ni perder color. Es la opci&oacute;n m&aacute;s segura y duradera para el frente de cocci&oacute;n.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Necesita alg&uacute;n tratamiento o cera despu&eacute;s de instalarlo?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>No, ninguno. Una vez instalado y rejuntado, el azulejo est&aacute; listo para su uso. No necesita ser sellado, encerado ni pulido en ning&uacute;n momento de su vida &uacute;til. Esa es una de sus grandes ventajas: belleza sin mantenimiento.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Qu&eacute; tipo de adhesivo y junta se recomienda?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Se recomienda usar un cemento cola flexible tipo C2TE S1, especialmente si se instala sobre superficies que puedan tener ligeros movimientos. Para la junta, una lechada epoxi o una cementosa aditivada de alta calidad es perfecta, ya que ofrece mayor resistencia a las manchas y a la suciedad.</p></div></div>
                </div>
            </div>
        </section>

        <section class="contact-help-common adrihosan-full-width-block">
            <div class="contact-help-wrapper">
                <div class="contact-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                    <div><h2>&iquest;A&uacute;n con dudas? Te ayudo a elegir.</h2><p>Soy Ricardo. D&eacute;jame asesorarte para que tu cocina quede exactamente como la imaginas.</p></div>
                </div>
                <div class="contact-options-grid-common">
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                    <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                    <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                    <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                    <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
                </div>
            </div>
        </section>
        <?php
    }
}

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'ESPEJOS' (ID: 102)
 * =============================================================================
 ********************************************************************************/
if ( ! function_exists( 'adrihosan_contenido_superior_espejos' ) ) {
    function adrihosan_contenido_superior_espejos() {
        if ( is_product_category( 102 ) && ! is_singular('product') ) {
            remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
            remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
            add_filter( 'woocommerce_show_page_title', '__return_false' );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
            ?>
            <div class="adri-hero-espejos adri-espejos-full-width">
                <img src="https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?q=80&w=2832&auto=format&fit=crop" alt="Baño moderno y luminoso con un espejo elegante" class="adri-hero-espejos__img">
                <div class="adri-hero-espejos__overlay"></div>
                <div class="adri-hero-espejos__content">
                    
            <h1>Espejos de Baño: El Reflejo de tu Estilo</h1>
                    <div class="adri-hero-espejos__text">
                        <p>Un espejo de baño es mucho más que un simple cristal. Es una pieza clave que define el carácter de tu espacio, amplifica la luz y añade un toque de diseño inconfundible.</p>
                        <p class="adri-hero-espejos__text-desktop">¿Buscas un <strong>espejo con luz LED</strong>, la calidez de un <strong>marco de madera</strong> o la funcionalidad del <strong>sistema antivaho</strong>? Descubre todas las opciones a continuación.</p>
                    </div>
                    <nav class="adri-hero-espejos__nav">
                        <a href="#tipos-de-espejo" class="adri-hero-espejos__nav-link">Tipos de Espejo</a>
                        <a href="#guia-de-compra" class="adri-hero-espejos__nav-link">Guía de Compra</a>
                        <a href="#catalogo-completo" class="adri-hero-espejos__nav-link">Ver Todo el Catálogo</a>
                    </nav>
                </div>
            </div>
            <section class="adri-nav-visual-espejos" id="tipos-de-espejo">
                <div class="adri-nav-visual-espejos__container">
                    <header class="adri-nav-visual-espejos__header">
                        <h2 class="adri-nav-visual-espejos__title">Un espejo para cada baño</h2>
                        <p class="adri-nav-visual-espejos__subtitle">Sabemos que cada espacio es único. Empieza tu búsqueda aquí y encuentra el espejo que parece hecho a medida para ti.</p>
                    </header>
                    <div class="adri-nav-visual-espejos__grid">
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/espejo-luz-led-adrihosan.jpg" alt="Espejos de baño con luz LED integrada" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Con Luz LED</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/espejo-redondo-adrihosan.jpg" alt="Elegantes espejos de baño redondos" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Redondos</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-camerino-Adrihosan.jpg" alt="Camerinos de baño con espejo y almacenaje" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Camerinos</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-dorado-bano/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-dorado-Adrihosan.jpg" alt="Espejos de baño con sofisticados marcos dorados" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Dorados</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-sin-marco/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-liso-Adrihosan.jpg" alt="Espejos de baño minimalistas sin marco" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Sin Marco</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-antivaho/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-antivaho-Adrihosan.jpg" alt="Espejos de baño con sistema antivaho" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Con Antivaho</h3></a>
                    </div>
                </div>
            </section>
            <section class="adri-guiarapida-espejos" id="guia-de-compra">
                <div class="adri-guiarapida-espejos__container">
                    <header class="adri-guiarapida-espejos__header">
                        <h2 class="adri-guiarapida-espejos__title">3 Claves para no Equivocarte con tu Espejo</h2>
                        <p class="adri-guiarapida-espejos__subtitle">Elegir el espejo adecuado puede transformar tu baño. Ten en cuenta estos tres puntos y acertarás seguro.</p>
                    </header>
                    <div class="adri-guiarapida-espejos__grid">
                        <div class="adri-guiarapida-espejos__card"><div class="adri-guiarapida-espejos__icon-wrapper"><svg class="adri-guiarapida-espejos__icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5v4m0 0h-4" /></svg></div><h3 class="adri-guiarapida-espejos__card-title">El Tamaño Importa</h3><p class="adri-guiarapida-espejos__card-text">La regla de oro: el espejo no debe ser más ancho que el mueble de baño. Mide tu espacio y busca un espejo que quede centrado y proporcionado para un look equilibrado y profesional.</p></div>
                        <div class="adri-guiarapida-espejos__card"><div class="adri-guiarapida-espejos__icon-wrapper"><svg class="adri-guiarapida-espejos__icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg></div><h3 class="adri-guiarapida-espejos__card-title">La Luz Perfecta</h3><p class="adri-guiarapida-espejos__card-text">La luz frontal es ideal para maquillaje o afeitado, ya que no crea sombras. La retroiluminación aporta una luz ambiental muy decorativa. Elige según tu necesidad principal.</p></div>
                        <div class="adri-guiarapida-espejos__card"><div class="adri-guiarapida-espejos__icon-wrapper"><svg class="adri-guiarapida-espejos__icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg></div><h3 class="adri-guiarapida-espejos__card-title">Funciones Extra</h3><p class="adri-guiarapida-espejos__card-text">¿Harto del vaho tras la ducha? El sistema antivaho es tu mejor aliado. Si te gusta escuchar música, un espejo con Bluetooth integrado es la solución perfecta para un baño moderno.</p></div>
                    </div>
                </div>
            </section>
            <div id="catalogo-completo"></div>
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 98)
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos', 9 );

if ( ! function_exists( 'adrihosan_contenido_inferior_espejos' ) ) {
    function adrihosan_contenido_inferior_espejos() {
        if ( is_product_category( 102 ) && ! is_singular('product') ) {
            ?>
            <section class="adri-seo-espejos adri-espejos-full-width">
                <div class="adri-seo-espejos__container">
                    <h2>Guía Completa para Comprar el Espejo de Baño Ideal</h2>
                    <p>Elegir un <strong>espejo para el cuarto de baño</strong> es una decisión que combina diseño y uso diario. No es solo un objeto donde mirarse, sino una pieza que puede transformar por completo la percepción de tu espacio, aportando luminosidad, amplitud y un toque de carácter. En esta guía te damos las claves para que encuentres el espejo perfecto que se adapte a tu estilo y necesidades.</p>
                    <h3>Elige la Forma que Define tu Estilo</h3>
                    <p>La forma del espejo es el primer gran paso. Cada una transmite una sensación diferente:</p>
                    <ul><li><strong>Espejos Rectangulares:</strong> Un clásico atemporal. Son versátiles y encajan en cualquier diseño, desde el más tradicional al más moderno. Ofrecen la mayor superficie de reflejo, siendo ideales para baños familiares.</li><li><strong>Espejos Redondos:</strong> Perfectos para suavizar las líneas rectas de los muebles y azulejos. Aportan un toque orgánico y de diseño, convirtiéndose en el punto focal del lavabo.</li><li><strong>Espejos Orgánicos:</strong> Para los más atrevidos. Sus formas irregulares y asimétricas son una declaración de estilo y una tendencia en auge en el diseño de interiores.</li></ul>
                    <h3>Tecnología que Facilita tu Día a Día</h3>
                    <p>Los espejos modernos han dejado de ser simples cristales para incorporar tecnología que mejora la experiencia en el baño.</p>
                    <ul><li><strong>Espejos con Luz LED:</strong> La funcionalidad definitiva. Proporcionan una iluminación frontal perfecta para tareas como el maquillaje o el afeitado, sin generar sombras. La mayoría de nuestros modelos ofrecen diferentes temperaturas de luz (cálida, neutra o fría) para que la adaptes a tu gusto.</li><li><strong>Espejos con Sistema Antivaho:</strong> ¿Cansado de no verte después de la ducha? Esta tecnología integra una pequeña resistencia que calienta el cristal, evitando que se forme vaho. Un extra de confort que agradecerás cada día.</li></ul>
                    <h3>El Toque Final: ¿Con o sin Marco?</h3>
                    <p>El marco es el detalle que remata el diseño. Un <strong>espejo sin marco</strong> ofrece un look minimalista y limpio, integrándose perfectamente en la pared. Por otro lado, los <strong>espejos con marco</strong> (negro, dorado, madera) añaden un acento decorativo, permitiéndote coordinarlos con la grifería, los tiradores del mueble o otros accesorios del baño.</p>
                </div>
            </section>
            <section class="adri-faq-espejos adri-espejos-full-width" id="faq">
                <div class="adri-faq-espejos__container">
                    <header class="adri-faq-espejos__header"><h2 class="adri-faq-espejos__title">Resolvemos tus Dudas</h2><p class="adri-faq-espejos__subtitle">Aquí tienes las respuestas a las preguntas más comunes. Si no encuentras lo que buscas, no dudes en contactarnos.</p></header>
                    <div class="adri-faq-espejos__accordion">
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Qué tipo de luz es mejor para un espejo de baño?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>Depende del uso. La <strong>luz neutra (4000K)</strong> es la más recomendada y versátil, ya que reproduce los colores de forma fiel, ideal para maquillarse o afeitarse. La <strong>luz cálida (3000K)</strong> crea un ambiente más relajante, mientras que la <strong>luz fría (6000K)</strong> ofrece la máxima luminosidad. Nuestros espejos LED suelen especificar el tipo de luz que ofrecen.</p></div></div></div>
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Son difíciles de instalar los espejos con luz?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>No especialmente, pero <strong>recomendamos que la instalación eléctrica la realice un profesional cualificado</strong>. El espejo se cuelga en la pared como uno convencional, pero necesita una conexión a un punto de luz cercano, que normalmente es el que se usa para el aplique del baño. Todos nuestros espejos incluyen un manual de instrucciones detallado.</p></div></div></div>
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Qué es el sistema antivaho y cómo funciona?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>El sistema antivaho consiste en una <strong>resistencia eléctrica</strong> situada en la parte trasera del espejo. Al activarla (normalmente con un botón táctil), calienta suavemente la superficie del cristal, evitando que el vapor de la ducha se condense sobre él. Así, tendrás siempre una zona del espejo perfectamente despejada.</p></div></div></div>
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Cómo se limpian los espejos LED para no dañar el sistema?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>La limpieza es muy sencilla. Utiliza un <strong>paño suave de microfibra</strong> y un limpiacristales estándar. Lo más importante es <strong>no pulverizar el líquido directamente sobre el espejo</strong>, sino sobre el paño. Así evitas que el líquido se filtre por los bordes y pueda dañar los componentes electrónicos.</p></div></div></div>
                    </div>
                </div>
            </section>
            <section class="adri-contacto-espejos adri-espejos-full-width" id="contacto">
                <div class="adri-contacto-espejos__container">
                    <div class="adri-contacto-espejos__intro">
                        <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan" class="adri-contacto-espejos__img">
                        <div><h2 class="adri-contacto-espejos__title">¿Aún con dudas? Te ayudo a elegir.</h2><p class="adri-contacto-espejos__subtitle">Soy Ricardo. Déjame asesorarte para que tu nuevo espejo quede exactamente como lo imaginas.</p></div>
                    </div>
                    <div class="adri-contacto-espejos__grid">
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">📍</div><div class="adri-contacto-espejos__link-label">Exposición</div></a>
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">💻</div><div class="adri-contacto-espejos__link-label">Videollamada</div></a>
                        <a href="tel:+34961957136" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">📞</div><div class="adri-contacto-espejos__link-label">Teléfono</div></a>
                        <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre%20espejos!" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">💬</div><div class="adri-contacto-espejos__link-label">Whatsapp</div></a>
                        <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">📝</div><div class="adri-contacto-espejos__link-label">Formulario</div></a>
                        <a href="mailto:hola@adrihosan.com" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">✉️</div><div class="adri-contacto-espejos__link-label">Email</div></a>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 99)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos', 21 );

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'ESPEJOS DE BAÑO CON LUZ' (ID: 4213)
 * =============================================================================
 ********************************************************************************/
if ( ! function_exists( 'adrihosan_contenido_superior_espejos_luz' ) ) {
    function adrihosan_contenido_superior_espejos_luz() {
        if ( is_product_category( 4213 ) && ! is_singular('product') ) {
            remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
            remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
            add_filter( 'woocommerce_show_page_title', '__return_false' );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
            ?>
            <section class="ap-hero-section-luz adrihosan-luz-full-width-block">
                <div class="ap-hero-content-luz">
                    
                    <h2>La Iluminación que lo Cambia Todo</h2>
                    <p>Descubre cómo nuestros espejos con luz LED integrada transforman tu baño en un espacio de precisión, confort y diseño.</p>
                    <div class="ap-hero-buttons-luz">
                        <a href="#tipos-de-luz" class="boton-adrihosan-luz primary">Ver Tipos de Luz</a>
                        <a href="#catalogo-luz" class="boton-adrihosan-luz secondary">Ver Modelos</a>
                    </div>
                </div>
            </section>
            <section id="tipos-de-luz" class="ap-light-types-section adrihosan-luz-full-width-block">
                <div class="ap-light-types-wrapper">
                    <div class="ap-light-types-header">
                        <h2>Funcionalidad o Ambiente. ¿O por qué no ambos?</h2>
                        <p>Cada tipo de iluminación tiene un propósito. Conoce las diferencias clave para elegir el espejo que se adapta perfectamente a tu rutina y estilo.</p>
                    </div>
                    <div class="ap-light-types-grid">
                        <div class="ap-light-type-card"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16"><path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/><path d="M1.646 6.354a.5.5 0 0 1 .708 0L4 8 2.354 9.646a.5.5 0 0 1-.708-.708L3.293 8 1.646 6.354zM14.354 6.354a.5.5 0 0 1 0 .708L12.707 8l1.647 1.646a.5.5 0 0 1-.708.708L12 8l1.646-1.646a.5.5 0 0 1 .708 0zM8 4a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 4zm0 8a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 .5-.5z"/></svg></div><h3>Luz Frontal</h3><p>Perfecta para tareas de precisión. La luz se proyecta directamente hacia ti, eliminando sombras en el rostro. Ideal para maquillarse, afeitarse o ponerse lentillas.</p></div>
                        <div class="ap-light-type-card"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/><path d="M8 4a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zm0 8a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 1 0v3a.5.5 0 0 1-.5.5zM4.5 8a.5.5 0 0 1-.5-.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5zm8 0a.5.5 0 0 1-.5-.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5z"/></svg></div><h3>Retroiluminación</h3><p>Crea un ambiente único y decorativo. La luz se proyecta hacia la pared, generando un halo que hace que el espejo parezca flotar. Aporta profundidad y un toque de diseño.</p></div>
                    </div>
                </div>
            </section>
            <section class="ap-antifog-section adrihosan-luz-full-width-block">
                <div class="ap-antifog-wrapper">
                    <div class="ap-antifog-content">
                        <h2>Se acabó el vaho. Siempre.</h2>
                        <p>Nuestra tecnología antivaho integra una resistencia que calienta sutilmente el espejo para que nunca se empañe. Sales de la ducha y tu reflejo está ahí, nítido e inmediato. Un pequeño lujo que transforma tu día a día.</p>
                    </div>
                    <div class="ap-antifog-image"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-con-luz-Adrihosan-Antivaho.jpg" alt="Espejo de baño con la mitad de la superficie empañada y la otra mitad perfectamente clara gracias al sistema antivaho."></div>
                </div>
            </section>
            <section class="ap-filters-section-luz adrihosan-luz-full-width-block">
                <div class="ap-filters-wrapper-luz">
                    <div class="ap-filter-group-luz"><h3 class="ap-filter-group-title-luz">Filtrar por Forma</h3><div class="ap-filter-buttons-luz"><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?forma-espejo=rectangular" class="ap-filter-btn-luz">Rectangular</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?forma-espejo=redondo" class="ap-filter-btn-luz">Redondo</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?forma-espejo=ovalado" class="ap-filter-btn-luz">Orgánico</a></div></div>
                    <div class="ap-filter-group-luz"><h3 class="ap-filter-group-title-luz">Filtrar por Ancho</h3><div class="ap-filter-buttons-luz"><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=60" class="ap-filter-btn-luz">60 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=80" class="ap-filter-btn-luz">80 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=100" class="ap-filter-btn-luz">100 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=120" class="ap-filter-btn-luz">120 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=140" class="ap-filter-btn-luz">140 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=160" class="ap-filter-btn-luz">160 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=180" class="ap-filter-btn-luz">180 cm</a></div></div>
                </div>
            </section>
            <section class="ap-product-header-section-luz adrihosan-luz-full-width-block">
                <div id="catalogo-luz" class="ap-product-header-wrapper-luz"><h2>Modelos de Espejos con Luz</h2><p>Explora la colección completa. Usa los filtros para afinar tu búsqueda o déjate inspirar por la variedad de diseños.</p></div>
            </section>
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 107)
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos_luz', 8 );

if ( ! function_exists( 'adrihosan_contenido_inferior_espejos_luz' ) ) {
    function adrihosan_contenido_inferior_espejos_luz() {
        if ( is_product_category( 4213 ) && ! is_singular('product') ) {
            ?>
            <section class="ap-tech-guide-section adrihosan-luz-full-width-block">
                <div class="ap-tech-guide-wrapper">
                    <div class="ap-tech-guide-header"><h2>Los Detalles que Marcan la Diferencia</h2><p>Entender la tecnología detrás de tu espejo te ayuda a elegir con total seguridad. Te explicamos los tres conceptos clave que debes conocer.</p></div>
                    <div class="ap-tech-guide-grid">
                        <div class="ap-tech-guide-card"><h3>Temperatura de Color (K)</h3><ul><li><strong>Luz Cálida (3000K):</strong> Crea un ambiente íntimo y relajante. Perfecta para baños donde buscas una sensación de spa.</li><li><strong>Luz Neutra (4000K):</strong> La más versátil. Simula la luz natural del día, reproduciendo los colores con gran fidelidad. Ideal para maquillaje.</li><li><strong>Luz Fría (6000K):</strong> Aporta una sensación de limpieza y energía. Es la más vendida y es perfecta para baños de estilo moderno y funcional.</li></ul></div>
                        <div class="ap-tech-guide-card"><h3>Potencia Lumínica (Lúmenes)</h3><p>Los lúmenes miden la cantidad total de luz que emite el espejo. A más lúmenes, más luminosidad.</p><p>Un espejo para un aseo pequeño puede ser suficiente con <strong>800-1200 lúmenes</strong>, mientras que para un baño principal o para maquillaje profesional, busca modelos por encima de los <strong>2000 lúmenes</strong>.</p></div>
                        <div class="ap-tech-guide-card"><h3>Índice de Reproducción Cromática (CRI)</h3><p>El CRI (en una escala de 0 a 100) mide la capacidad de una luz para mostrar los colores de los objetos de forma realista.</p><p>Para un baño, donde la fidelidad del color es clave al maquillarse o elegir la ropa, busca siempre un <strong>CRI superior a 80</strong>. Todos nuestros modelos cumplen este estándar de calidad.</p></div>
                    </div>
                </div>
            </section>
            <section class="ap-faq-section-luz adrihosan-luz-full-width-block">
                <div class="ap-faq-wrapper-luz">
                    <div class="ap-faq-header-luz"><h2>Instalación y Mantenimiento</h2><p>Resolvemos las dudas más prácticas para que solo tengas que preocuparte de disfrutar tu nuevo espejo.</p></div>
                    <div class="ap-faq-accordion-luz">
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>¿Necesita una instalación eléctrica especial?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Recomendamos que la conexión la realice un electricista cualificado. El espejo se conecta directamente a la red eléctrica, generalmente aprovechando el punto de luz existente del aplique del baño. No necesita transformadores externos, viene todo integrado.</p></div></div></div>
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>Si se funde el LED, ¿se puede reemplazar?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Sí. Aunque la vida útil de nuestras tiras LED supera las 50.000 horas (años de uso normal), están diseñadas para ser reemplazables. Disponemos de recambios para todos nuestros modelos, garantizando la durabilidad de tu inversión.</p></div></div></div>
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>¿Cómo se limpia sin dañar el sistema?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Es muy sencillo. Utiliza un paño de microfibra y tu limpiacristales habitual. El truco es no pulverizar el líquido directamente sobre el espejo, sino sobre el paño. Así evitas que la humedad pueda afectar a los componentes electrónicos.</p></div></div></div>
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>¿Las medidas son Ancho x Alto?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Sí, por norma general, todas las medidas de nuestros espejos se especifican siempre en formato <strong>Ancho x Alto</strong>. Por ejemplo, un espejo de 80x60 cm tiene 80 cm de ancho y 60 cm de alto. ¡Fíjate bien para que encaje perfecto sobre tu mueble!</p></div></div></div>
                    </div>
                </div>
            </section>
            <section class="ap-seo-content-section-luz adrihosan-luz-full-width-block">
                <div class="ap-seo-content-wrapper-luz">
                    <h2>Claves para Acertar con tu Espejo de Baño con Luz</h2>
                    <p>Comprar un <strong>espejo con luz para el baño</strong> es una de las decisiones de diseño más inteligentes que puedes tomar. No solo mejora radicalmente la funcionalidad del espacio, sino que se convierte en una pieza central que define el ambiente y el estilo. En Adrihosan, entendemos que cada detalle cuenta, y por eso te ofrecemos esta guía definitiva para que tu elección sea perfecta.</p>
                    <h3>Más Allá del Reflejo: La Luz como Herramienta Funcional</h3>
                    <p>La principal ventaja de un espejo con luz integrada es, sin duda, la calidad de la iluminación. A diferencia de los apliques tradicionales que crean sombras molestas, la luz integrada ofrece una iluminación uniforme y directa, esencial para tareas de precisión.</p>
                    <ul><li><strong>Luz Frontal:</strong> Ideal para el afeitado o el maquillaje. Proyecta una luz clara y directa sobre el rostro, eliminando cualquier sombra y permitiendo ver los detalles con una nitidez profesional.</li><li><strong>Retroiluminación (Luz Trasera):</strong> Perfecta para crear una atmósfera relajante. La luz se proyecta contra la pared, generando un halo que hace que el espejo parezca flotar. Es un recurso de diseño que aporta profundidad y un toque de lujo a cualquier baño.</li></ul>
                    <h3>La Tecnología que Simplifica tu Rutina: Antivaho y Más</h3>
                    <p>Un espejo de calidad va más allá de la luz. La tecnología antivaho es un extra de confort que marca la diferencia en el día a día. Consiste en una resistencia interna que calienta ligeramente la superficie del cristal, <strong>evitando que se empañe</strong> incluso después de una ducha caliente. Se acabaron las esperas o tener que pasar la toalla. Sales de la ducha y tu espejo está siempre listo para usar.</p>
                    <h3>¿Qué Temperatura de Color Elegir para tu Baño?</h3>
                    <p>La temperatura de la luz LED afecta directamente a cómo percibes los colores y el ambiente de tu baño. Las tres opciones principales ofrecen beneficios distintos:</p>
                    <ul><li><strong>Luz Cálida (2700K-3000K):</strong> Crea un ambiente acogedor y relajante, similar a la luz de una bombilla tradicional. Ideal para baños donde se busca una sensación de spa.</li><li><strong>Luz Neutra (4000K-4500K):</strong> Es la más versátil y recomendada. Se asemeja a la luz natural del día, por lo que reproduce los colores con gran fidelidad, siendo excelente tanto para el maquillaje como para la iluminación general.</li><li><strong>Luz Fría (5000K-6500K):</strong> Proporciona una luz muy blanca y estimulante, que genera una sensación de limpieza y energía. Es la opción más vendida y es perfecta para baños de estilo moderno y minimalista.</li></ul>
                </div>
            </section>
            <section class="ap-help-section-luz adrihosan-luz-full-width-block">
                <div class="ap-help-wrapper-luz">
                    <div class="ap-help-intro-luz"><img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan"><div><h2>¿Necesitas un último consejo?<span>Soy Ricardo, tu experto en iluminación para baños.</span></h2></div></div>
                    <div class="ap-contact-options-grid-luz">
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="ap-contact-option-luz"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="ap-contact-option-luz"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                        <a href="tel:+34961957136" class="ap-contact-option-luz"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                        <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20espejos%20con%20luz" class="ap-contact-option-luz"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                        <a href="mailto:hola@adrihosan.com" class="ap-contact-option-luz"><div class="icon">✉️</div><div class="label">Email</div></a>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 108)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos_luz', 21 );

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'ESPEJO REDONDO BAÑO' (ID: 4247)
 * =============================================================================
 ********************************************************************************/
if ( ! function_exists( 'adrihosan_contenido_superior_espejos_redondo' ) ) {
    function adrihosan_contenido_superior_espejos_redondo() {
        if ( is_product_category( 4247 ) && ! is_singular('product') ) {
            remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
            remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
            add_filter( 'woocommerce_show_page_title', '__return_false' );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
            ?>
            <section class="ap-hero-section-redondo adri-redondo-full-width">
                <div class="ap-hero-content-redondo">
                    
                <h1>Espejos Redondos para Baño</h1>
                
                    <p>Rompe con la rigidez de las líneas rectas. Un espejo redondo suaviza el ambiente, crea un punto focal de diseño y aporta un equilibrio único a tu espacio.</p>
                    <div class="ap-hero-buttons-redondo">
                        <a href="#beneficios-redondos" class="boton-adrihosan-redondo primary">Ver Beneficios</a>
                        <a href="#catalogo-redondos" class="boton-adrihosan-redondo secondary">Ver Modelos</a>
                    </div>
                </div>
            </section>
            <section id="beneficios-redondos" class="ap-benefits-section-redondo adri-redondo-full-width">
                <div class="ap-benefits-wrapper-redondo">
                    <div class="ap-benefits-header-redondo">
                        <h2>El Toque de Diseño que Transforma tu Baño</h2>
                        <p>Un espejo redondo no es solo una tendencia. Es una decisión de diseño inteligente que aporta armonía, dinamismo y un carácter único a tu espacio.</p>
                    </div>
                    <div class="ap-benefits-grid-redondo">
                        <div class="ap-benefit-card-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-bano-redondo-Adrihosan.jpg" alt="Baño con un espejo redondo que suaviza las líneas de un mueble de baño rectangular."><div class="ap-benefit-card-content"><h3>Suaviza el Espacio</h3><p>Los baños suelen estar dominados por ángulos rectos. Un espejo redondo rompe esa rigidez, aportando fluidez y una sensación de calma y equilibrio visual.</p></div></div>
                        <div class="ap-benefit-card-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-bano-redondo-Adrihosan-1.jpg" alt="Un gran espejo redondo con marco negro que actúa como punto focal sobre el lavabo."><div class="ap-benefit-card-content"><h3>Crea un Punto Focal</h3><p>Su forma singular atrae la mirada de forma natural, convirtiéndose en la pieza central de la decoración. Es perfecto para destacar la zona del lavabo y darle protagonismo.</p></div></div>
                        <div class="ap-benefit-card-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-bano-redondo-Adrihosan-2.jpg" alt="Baño con espejo redondo enmarcado, retroiluminado con luz LED blanca."><div class="ap-benefit-card-content"><h3>Versatilidad de Estilos</h3><p>Desde el minimalismo nórdico hasta el industrial o el boho-chic. Con o sin marco, con luz o sin ella, el espejo redondo se adapta y complementa cualquier estilo decorativo.</p></div></div>
                    </div>
                </div>
            </section>
            <section class="ap-filters-section-redondo adri-redondo-full-width">
                <div class="ap-filters-wrapper-redondo">
                    <div class="ap-filter-group-redondo">
                        <h3 class="ap-filter-group-title-redondo">Filtrar por Diámetro</h3>
                        <div class="ap-filter-buttons-redondo">
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=60" class="ap-filter-btn-redondo">60 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=70" class="ap-filter-btn-redondo">70 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=80" class="ap-filter-btn-redondo">80 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=90" class="ap-filter-btn-redondo">90 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=100" class="ap-filter-btn-redondo">100 cm</a>
                        </div>
                    </div>
                    <div class="ap-filter-group-redondo">
                        <h3 class="ap-filter-group-title-redondo">Filtrar por Funcionalidad</h3>
                        <div class="ap-filter-buttons-redondo">
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?funcion-espejo=con-luz-led" class="ap-filter-btn-redondo">Con Luz LED</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?funcion-espejo=antivaho" class="ap-filter-btn-redondo">Con Antivaho</a>
                        </div>
                    </div>
                </div>
            </section>
            <div id="catalogo-redondos" style="scroll-margin-top: 20px;"></div>
            <?php
        }
    }
}
add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos_redondo', 8 );

if ( ! function_exists( 'adrihosan_contenido_inferior_espejos_redondo' ) ) {
    function adrihosan_contenido_inferior_espejos_redondo() {
        if ( is_product_category( 4247 ) && ! is_singular('product') ) {
            ?>
            <section class="ap-seo-section-redondo adri-redondo-full-width">
                <div class="ap-seo-wrapper-redondo">
                    <h2>El Espejo Redondo: La Guía Definitiva para tu Baño</h2>
                    <p>Elegir un <strong>espejo redondo para el baño</strong> es apostar por el diseño y la armonía. A diferencia de las formas tradicionales, un espejo circular tiene la capacidad única de suavizar el ambiente, romper con la rigidez de los azulejos y convertirse en el punto focal indiscutible de la estancia. Te ayudamos a entender por qué es la elección perfecta para ti.</p>
                    <h3>¿Cómo Elegir el Diámetro Ideal?</h3>
                    <p>El tamaño es la clave para que un espejo redondo luzca espectacular. La regla de oro es la proporción: el diámetro del espejo <strong>no debe superar el ancho del mueble de lavabo</strong>. Un espejo ligeramente más estrecho que el mueble crea un efecto visual equilibrado y profesional. Para lavabos dobles, dos espejos redondos idénticos son una solución simétrica y de gran impacto visual.</p>
                    <h3>La Versatilidad del Círculo en la Decoración</h3>
                    <p>Lejos de estar limitado a un solo estilo, el espejo redondo es increíblemente versátil. Un modelo <strong>sin marco</strong> es perfecto para un look minimalista o nórdico. Si buscas un toque más sofisticado o industrial, un <strong>espejo redondo con marco negro o dorado</strong> puede coordinarse con la grifería y los accesorios, creando un diseño cohesivo y lleno de personalidad.</p>
                </div>
            </section>
            <section class="ap-faq-section-redondo adri-redondo-full-width">
                <div class="ap-faq-wrapper-redondo">
                    <div class="ap-faq-header-redondo"><h2>Dudas Habituales sobre Espejos Redondos</h2><p>Resolvemos las preguntas más concretas para que tu elección sea tan clara como el reflejo de tu nuevo espejo.</p></div>
                    <div class="ap-faq-accordion-redondo">
                        <div class="ap-faq-item-redondo"><button class="ap-faq-question-redondo"><span>¿A qué altura debo colgar un espejo redondo?</span><span class="ap-faq-icon-redondo">+</span></button><div class="ap-faq-answer-redondo"><div class="ap-faq-answer-content-redondo"><p>La regla general es colgarlo de forma que el centro del espejo quede a la altura de los ojos de una persona de estatura media, aproximadamente a 1.65 metros del suelo. Sin embargo, lo más importante es que quede visualmente centrado entre el mueble de lavabo y el techo o cualquier aplique superior.</p></div></div></div>
                        <div class="ap-faq-item-redondo"><button class="ap-faq-question-redondo"><span>¿Un espejo redondo hace que el baño parezca más grande?</span><span class="ap-faq-icon-redondo">+</span></button><div class="ap-faq-answer-redondo"><div class="ap-faq-answer-content-redondo"><p>Sí, como cualquier espejo, ayuda a ampliar visualmente el espacio al reflejar la luz. La ventaja del espejo redondo es que sus curvas suaves rompen con la monotonía de las líneas rectas (azulejos, muebles), aportando una sensación de fluidez y dinamismo que puede hacer que el baño se perciba más acogedor y con un diseño más trabajado.</p></div></div></div>
                        <div class="ap-faq-item-redondo"><button class="ap-faq-question-redondo"><span>¿Cómo se limpia un espejo redondo sin marco?</span><span class="ap-faq-icon-redondo">+</span></button><div class="ap-faq-answer-redondo"><div class="ap-faq-answer-content-redondo"><p>La limpieza es igual que la de cualquier otro espejo. Usa un paño de microfibra y un limpiacristales. Para los bordes pulidos, simplemente asegúrate de que el paño esté bien escurrido para no dejar exceso de humedad. Es un proceso sencillo que mantendrá tu espejo impecable.</p></div></div></div>
                    </div>
                </div>
            </section>
            <section class="ap-help-section-redondo adri-redondo-full-width">
                <div class="ap-help-wrapper-redondo">
                    <div class="ap-help-intro-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan"><div><h2>¿Necesitas un último consejo?<span>Soy Ricardo, tu experto en espejos con estilo.</span></h2></div></div>
                    <div class="ap-contact-options-grid-redondo">
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="ap-contact-option-redondo"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="ap-contact-option-redondo"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                        <a href="tel:+34961957136" class="ap-contact-option-redondo"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                        <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20espejos%20redondos" class="ap-contact-option-redondo"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                        <a href="mailto:hola@adrihosan.com" class="ap-contact-option-redondo"><div class="icon">✉️</div><div class="label">Email</div></a>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos_redondo', 21 );

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'CAMERINO BAÑO' (ID: 2626)
 * =============================================================================
 ********************************************************************************/

/**
 * -----------------------------------------------------------------------------
 * BLOQUE 1: Contenido SUPERIOR para Camerinos (Antes de los productos)
 * -----------------------------------------------------------------------------
 */
add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_camerinos', 10 );
function adrihosan_contenido_superior_camerinos() {

    if ( is_product_category( 2626 ) && ! is_singular('product') ) {
        // Limpiamos los elementos por defecto de WooCommerce
        remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
        remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
        add_filter( 'woocommerce_show_page_title', '__return_false' );
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
        ?>
        <section class="ac-hero-section adrihosan-full-width-block">
            <div class="ac-hero-content">
              
    <h1>Camerinos de Baño: El Reflejo del Orden</h1>
    
    
                <p>Gana espacio, elimina el desorden y eleva el diseño de tu baño con la solución 2 en 1 definitiva: espejo y almacenaje en una sola pieza.</p>
                <div class="ac-hero-buttons">
                    <a href="#catalogo-camerinos" class="boton-adrihosan primary">Ver Modelos</a>
                    <a href="#guia-compra" class="boton-adrihosan secondary">Cómo Elegir el Tuyo</a>
                </div>
            </div>
        </section>

        <section class="ac-benefits-section adrihosan-full-width-block">
            <div class="ac-benefits-wrapper">
                <div class="ac-benefits-header">
                    <h2>La Decisión Inteligente para tu Baño</h2>
                    <p>Un camerino no es solo un espejo con armario. Es la pieza clave para un baño más práctico, espacioso y siempre ordenado.</p>
                </div>
                <div class="ac-benefits-grid">
                    <div class="ac-benefit-card">
                        <div class="text-4xl">📦</div>
                        <h3>Despídete del Desorden</h3>
                        <p>Guarda todo lo que necesitas tener a mano pero fuera de la vista. Cepillos, cremas, medicamentos... todo organizado y protegido del polvo y la humedad.</p>
                    </div>
                    <div class="ac-benefit-card">
                        <div class="text-4xl">📏</div>
                        <h3>Doble Función, Mismo Espacio</h3>
                        <p>La solución perfecta para baños de cualquier tamaño. Disfruta de un espejo amplio y de un armario práctico sin sacrificar ni un centímetro de pared.</p>
                    </div>
                    <div class="ac-benefit-card">
                        <div class="text-4xl">✨</div>
                        <h3>Estética Limpia y Unificada</h3>
                        <p>Al combinar espejo y armario en una sola pieza, logras un look más despejado y minimalista, evitando la sobrecarga visual de tener múltiples elementos en la pared.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="guia-compra" class="ac-guia-compra adrihosan-full-width-block">
            <div class="ac-guia-wrapper">
                 <div class="ac-guia-header">
                    <h2>2 Claves para Acertar con tu Camerino</h2>
                    <p>Elegir el modelo adecuado es más fácil de lo que parece. Ten en cuenta estos dos puntos y tu elección será perfecta.</p>
                </div>
                <div class="ac-guia-grid">
                    <div class="ac-guide-card">
                        <h3>1. Mide tu Espacio</h3>
                        <p>La regla de oro: el ancho del camerino no debe superar el ancho del mueble de baño. Esto crea una proporción visual armónica. Si tienes un lavabo doble, dos camerinos idénticos son una solución simétrica y de gran impacto.</p>
                    </div>
                    <div class="ac-guide-card">
                        <h3>2. Piensa en la Iluminación</h3>
                        <p>Nuestros camerinos están diseñados sin luz integrada para darte total libertad. Puedes colocar un aplique de pared encima, dos a los lados o usar la luz general del techo, adaptando la iluminación a tu gusto y al estilo de tu baño.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="catalogo-camerinos" class="ac-filtros adrihosan-full-width-block">
            <div class="ac-filtros-wrapper">
                <div class="ac-filtros-header">
                    <h2>Encuentra tu Modelo Ideal</h2>
                </div>
                <div class="ac-filter-group">
                    <h3 class="ac-filter-group-title">Filtrar por Ancho</h3>
                    <div class="ac-filter-buttons">
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=60" class="ac-filter-btn">60 cm</a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=80" class="ac-filter-btn">80 cm</a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=100" class="ac-filter-btn">100 cm</a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=120" class="ac-filter-btn">120 cm</a>
                    </div>
                     <p class="text-sm">En el listado de productos encontrarás más medidas disponibles.</p>
                </div>
                 <p>Explora nuestra selección completa. Usa los filtros para encontrar el camerino que se adapta perfectamente a tu espacio y necesidades.</p>
            </div>
        </section>
        <?php
    }
}

/**
 * -----------------------------------------------------------------------------
 * BLOQUE 2: Contenido INFERIOR para Camerinos (Después de los productos)
 * -----------------------------------------------------------------------------
 */
add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_camerinos', 22 );
function adrihosan_contenido_inferior_camerinos() {
    if ( is_product_category( 2626 ) && ! is_singular('product') ) {
        ?>
        <section class="ac-faq-section adrihosan-full-width-block">
            <div class="ac-faq-wrapper">
                <div class="ac-faq-header">
                    <h2>Dudas Frecuentes</h2>
                </div>
                <div class="ac-faq-accordion">
                    <div class="ac-faq-item">
                        <button class="ac-faq-question"><span>¿De qué material están hechos los estantes?</span><span class="ac-faq-icon">+</span></button>
                        <div class="ac-faq-answer"><p>Los estantes interiores son fijos para garantizar la máxima estabilidad y robustez. Están fabricados con materiales resistentes a la humedad, como el cristal o la melamina, lo que asegura su durabilidad en el ambiente del baño y facilita su limpieza.</p></div>
                    </div>
                    <div class="ac-faq-item">
                        <button class="ac-faq-question"><span>¿Son difíciles de instalar?</span><span class="ac-faq-icon">+</span></button>
                        <div class="ac-faq-answer"><p>La instalación es muy sencilla, similar a colgar un armario de pared. Vienen con los anclajes necesarios. Solo tienes que asegurarte de usar los tacos adecuados para tu tipo de pared (ladrillo, pladur, etc.) y comprobar que queda perfectamente nivelado.</p></div>
                    </div>
                    <div class="ac-faq-item">
                        <button class="ac-faq-question"><span>¿Puedo elegir el lado de apertura de la puerta?</span><span class="ac-faq-icon">+</span></button>
                        <div class="ac-faq-answer"><p>Si tu camerino es de una sola puerta, es importante que nos indiques en las observaciones de tu pedido hacia qué lado necesitas que abra (derecha o izquierda) para que se ajuste perfectamente a la distribución de tu baño.</p></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ac-seo-section adrihosan-full-width-block">
            <div class="ac-seo-wrapper">
                <div class="ac-seo-header">
                    <h2>Guía para Comprar tu Camerino de Baño Ideal</h2>
                </div>
                <p><strong>Comprar un camerino de baño</strong> es una de las decisiones más prácticas y rentables que puedes tomar al reformar o actualizar tu aseo. Este mueble 2 en 1, que combina un <strong>espejo con un armario</strong>, es la solución definitiva para optimizar el espacio, especialmente en baños pequeños donde cada centímetro cuenta.</p>
                <h3>El Camerino como Solución de Almacenaje</h3>
                <p>El principal beneficio de un <strong>armario espejo para baño</strong> es su capacidad para ocultar el desorden. En lugar de tener botes, cepillos y productos de higiene a la vista sobre la encimera, el camerino te ofrece un espacio de almacenaje discreto y accesible. Esto no solo facilita la limpieza, sino que crea una sensación de orden y amplitud visual, clave para un ambiente relajante.</p>
                <h3>¿Qué Tamaño de Camerino Elegir?</h3>
                <p>La proporción es fundamental. Como norma general, el <strong>ancho del camerino</strong> no debería ser mayor que el del mueble de lavabo sobre el que se instala. Esta simple regla asegura un conjunto visualmente equilibrado y armónico. Para baños con lavabos dobles, una opción muy popular es instalar dos camerinos idénticos, uno sobre cada seno, lo que aporta simetría y duplica el espacio de almacenaje personal.</p>
            </div>
        </section>

        <section class="ac-ayuda-section adrihosan-full-width-block">
            <div class="ac-ayuda-wrapper">
                <div class="ac-ayuda-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                    <div>
                        <h2>¿Necesitas ayuda para decidir?<span>Soy Ricardo. Hablemos y encontraremos el camerino perfecto para tu baño.</span></h2>
                    </div>
                </div>
                <div class="ac-contact-options-grid">
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="ac-contact-option"><div class="icon">📍</div><div class="label">Exposición</div></a>
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="ac-contact-option"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                    <a href="tel:+34961957136" class="ac-contact-option"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                    <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="ac-contact-option"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                    <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="ac-contact-option"><div class="icon">📝</div><div class="label">Formulario</div></a>
                    <a href="mailto:hola@adrihosan.com" class="ac-contact-option"><div class="icon">✉️</div><div class="label">Email</div></a>
                </div>
            </div>
        </section>
        <?php
    }
}

/******************************************************************************
 * =============================================================================
 * PÁGINA PILAR "BALDOSA HIDRÁULICA" (ID: 4564) - VERSIÓN REORGANIZADA
 * Basada en la estructura de la categoría 4865 (Baño)
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla toda la lógica de la página Pilar Baldosa Hidráulica.
 */
function adrihosan_pilar_bh_controller() {
    // ID numérico de la categoría "Baldosa Hidráulica" (Página Pilar).
    $category_id = 4564;

    // Si no estamos en la categoría correcta, no hacemos nada.
    if ( ! is_product_category( $category_id ) ) {
        return;
    }

    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

    // --- Elimina elementos por defecto de WooCommerce ---
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_no_products_found', 'wc_no_products_found', 10 );

    // --- Inyecta contenido personalizado ---
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_bh_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_bh_contenido_inferior', 99 );
}
add_action( 'template_redirect', 'adrihosan_pilar_bh_controller' );

/**
 * Inyecta el contenido superior: Hero, Características, Hub y Best Sellers.
 */
function adrihosan_pilar_bh_contenido_superior() {
    $hero_img_url = get_term_meta( get_queried_object_id(), 'bh_hero_img_url', true ) ?: 'https://www.adrihosan.com/wp-content/uploads/2023/04/fa4a5c7e-d682-41f2-a4a3-c2eafa4fea9d.jpg';
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('<?php echo esc_url( $hero_img_url ); ?>');">
        <div class="hero-content">
            <h1>Baldosa Hidr&aacute;ulica</h1>
            <p>Descubre el universo del suelo hidr&aacute;ulico. Elige entre la autenticidad de la baldosa artesanal o la resistencia del porcel&aacute;nico de imitaci&oacute;n. La soluci&oacute;n perfecta para tu proyecto est&aacute; aqu&iacute;.</p>
            <div class="hero-buttons">
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/" class="hero-btn primary">Ver Colecci&oacute;n Original</a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="hero-btn secondary">Ver Colecci&oacute;n Imitaci&oacute;n</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item"><div class="icon">🎨</div><h3>Dise&ntilde;os &Uacute;nicos</h3><p>Desde patrones geom&eacute;tricos hasta motivos florales. Una colecci&oacute;n que abarca siglos de historia y tendencias actuales.</p></div>
            <div class="bho-feature-item"><div class="icon">🏛️</div><h3>Tradici&oacute;n Artesanal</h3><p>La baldosa original mantiene viva la t&eacute;cnica centenaria del cemento pigmentado, con todo su car&aacute;cter e irregularidad.</p></div>
            <div class="bho-feature-item"><div class="icon">🛡️</div><h3>Resistencia Moderna</h3><p>El porcel&aacute;nico de imitaci&oacute;n ofrece la est&eacute;tica cl&aacute;sica con la durabilidad y el cero mantenimiento del siglo XXI.</p></div>
            <div class="bho-feature-item"><div class="icon">🏠</div><h3>Para Cada Espacio</h3><p>Ba&ntilde;os, cocinas, salones o exteriores. Tenemos la soluci&oacute;n hidr&aacute;ulica perfecta para cada rinc&oacute;n de tu hogar.</p></div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <div class="bho-hub-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-5.jpg" alt="Detalle de una baldosa hidr&aacute;ulica original mostrando su textura artesanal." class="bho-hub-card-img">
                <div class="bho-hub-card-content">
                    <h2>Baldosa Hidr&aacute;ulica Original</h2>
                    <p>El valor de lo aut&eacute;ntico. Piezas artesanales de cemento pigmentado con una textura y profundidad de color inigualables. El alma de la tradici&oacute;n en tu suelo.</p>
                    <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/" class="bho-hub-btn">Ver Colecci&oacute;n Original</a>
                </div>
            </div>
            <div class="bho-hub-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared.jpg" alt="Ambiente de un ba&ntilde;o moderno con azulejo porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico en la pared." class="bho-hub-card-img">
                <div class="bho-hub-card-content">
                    <h2>Porcel&aacute;nico Imitaci&oacute;n Hidr&aacute;ulico</h2>
                    <p>La est&eacute;tica atemporal con la resistencia del porcel&aacute;nico. Dise&ntilde;os precisos, cero mantenimiento y una durabilidad a prueba de todo. La elecci&oacute;n inteligente para el d&iacute;a a d&iacute;a.</p>
                    <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="bho-hub-btn">Ver Colecci&oacute;n Imitaci&oacute;n</a>
                </div>
            </div>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> &iquest;No sabes cu&aacute;l elegir? La <strong>baldosa original</strong> es para amantes de lo artesanal que disfrutan cuidando su suelo. El <strong>porcel&aacute;nico</strong> es para quienes buscan practicidad sin renunciar al dise&ntilde;o.</p>
    </div>

    <section class="ap-product-header-section adrihosan-full-width-block" style="padding-bottom: 0;">
        <div class="ap-product-header-wrapper">
            <h2>Nuestros Best Sellers en Hidr&aacute;ulico</h2>
            <p>Los modelos favoritos de nuestros clientes, seleccionados por su dise&ntilde;o y calidad.</p>
        </div>

        <div id="bh-productos-visibles" style="max-width: 1200px; margin: 20px auto 0; padding: 0 15px;">
            <?php
            echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="baldosa-hidraulica"]');
            ?>
        </div>
    </section>
    <?php
}
/**
 * Inyecta el contenido inferior: Tabla Comparativa, SEO, FAQ y Contacto.
 */
function adrihosan_pilar_bh_contenido_inferior() {
    if ( is_product_category( 4564 ) && ! is_singular('product') ) {
        ?>
        <section class="bhp-comparison-section adrihosan-full-width-block">
            <div class="bhp-comparison-wrapper">
                <h2>Original vs. Imitaci&oacute;n: Ficha T&eacute;cnica Comparativa</h2>
                <table class="bhp-comparison-table">
                    <thead><tr><th>Caracter&iacute;stica</th><th>Baldosa Hidr&aacute;ulica Original</th><th>Porcel&aacute;nico Imitaci&oacute;n Hidr&aacute;ulico</th></tr></thead>
                    <tbody>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Material</strong></td><td data-label="Original">Cemento pigmentado artesanal</td><td data-label="Imitaci&oacute;n">Gres porcel&aacute;nico industrial</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Resistencia a Manchas</strong></td><td data-label="Original">Baja (Material poroso, requiere sellado)</td><td data-label="Imitaci&oacute;n">Total (Nula absorci&oacute;n de agua)</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Mantenimiento</strong></td><td data-label="Original">Delicado, solo con jabones neutros</td><td data-label="Imitaci&oacute;n">Nulo, apto para cualquier producto de limpieza</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Durabilidad</strong></td><td data-label="Original">Alta, envejece y adquiere p&aacute;tina con el tiempo</td><td data-label="Imitaci&oacute;n">Extrema, inalterable al paso del tiempo y al desgaste</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Textura</strong></td><td data-label="Original">T&aacute;ctil, con la irregularidad propia de lo artesanal</td><td data-label="Imitaci&oacute;n">Lisa y uniforme, reproduce el dise&ntilde;o visualmente</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Uso Ideal</strong></td><td data-label="Original">Zonas de bajo tr&aacute;nsito, espacios con encanto, paredes</td><td data-label="Imitaci&oacute;n">Cocinas, ba&ntilde;os, locales comerciales, exteriores</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Precio</strong></td><td data-label="Original">Elevado</td><td data-label="Imitaci&oacute;n">Asequible</td></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="ocultar-en-movil"><strong>Ver Opciones</strong></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/" class="boton-adrihosan primary">Ver Originales</a></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="boton-adrihosan primary">Ver Imitaci&oacute;n</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>

        <?php
        $descripcion_editor = category_description();
        if ( ! empty( $descripcion_editor ) ) {
            echo '<section class="bho-guide-section">'; // SIN adrihosan-full-width-block
            echo '    <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">';
            echo '        <div class="term-description-dinamica" style="text-align: left; font-family: \'Poppins\'; color: #3f6f7b; line-height: 1.8;">';
            echo              $descripcion_editor;
            echo '        </div>';
            echo '    </div>';
            echo '</section>';
        }
        ?>

        <section class="faq-section-common adrihosan-full-width-block">
            <div class="faq-wrapper-common">
                <h2 class="faq-main-title-common">Dudas Frecuentes sobre Suelos Hidr&aacute;ulicos</h2>
                <div class="faq-items-wrapper">
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Cu&aacute;l es m&aacute;s caro, el original o la imitaci&oacute;n?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>La <strong>baldosa hidr&aacute;ulica original</strong> es significativamente m&aacute;s cara debido a su proceso de fabricaci&oacute;n artesanal. El <strong>azulejo porcel&aacute;nico de imitaci&oacute;n</strong>, al ser de producci&oacute;n industrial, ofrece una alternativa mucho m&aacute;s asequible sin renunciar al dise&ntilde;o.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Qu&eacute; opci&oacute;n es mejor para una cocina?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Para la cocina, recomendamos sin dudarlo el <strong>porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico</strong>. Su resistencia a las manchas de aceite, vino o grasa y su facilidad de limpieza con cualquier producto lo convierten en la opci&oacute;n m&aacute;s pr&aacute;ctica y duradera para esta zona tan exigente.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Y para un ba&ntilde;o con ducha?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Igualmente, el <strong>porcel&aacute;nico</strong> es la elecci&oacute;n correcta. Su nula absorci&oacute;n de agua lo hace 100% impermeable, ideal para suelos de ba&ntilde;o e incluso para el interior de la ducha, donde la baldosa de cemento original podr&iacute;a dar problemas de humedad a largo plazo si no se mantiene un sellado perfecto.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Puedo usar calefacci&oacute;n por suelo radiante con ambos?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>S&iacute;, ambos materiales son excelentes conductores t&eacute;rmicos y totalmente compatibles con sistemas de <strong>calefacci&oacute;n por suelo radiante</strong>. Distribuyen el calor de forma eficiente y uniforme, aportando un gran confort a la estancia.</p></div></div>
                </div>
            </div>
        </section>

        <section id="contacto" class="contact-help-common adrihosan-full-width-block">
            <div class="contact-help-wrapper">
                <div class="contact-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo, experto en baldosa hidr&aacute;ulica de Adrihosan">
                    <div><h2>&iquest;Necesitas ayuda? <span>Soy Ricardo, tu experto en materiales.</span></h2></div>
                </div>
                <div class="contact-options-grid-common">
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                    <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                    <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                    <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                    <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
                </div>
            </div>
        </section>
        <?php
    }
}

/******************************************************************************
 * =============================================================================
 * CÓDIGO 10/10 PARA "PAREDES DECORATIVAS" (ID 4806)
 * - Reestructurado y optimizado con contenido SEO ampliado.
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla la lógica de la página de Paredes Decorativas.
 */
function adrihosan_pilar_paredes_controller() {
    $category_id = 4806; 
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    // Elimina elementos por defecto de la plantilla.
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // Inyecta contenido personalizado.
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_paredes_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_paredes_contenido_inferior', 99 );
}
// DESACTIVADO - Ahora usa adrihosan_master_controller_cpu_fix()
// add_action( 'template_redirect', 'adrihosan_pilar_paredes_controller' );


/**
 * Inyecta el contenido superior para la categoría 4806.
 */
function adrihosan_pilar_paredes_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared.jpg');">
        <div class="hero-content">
            <h1>Azulejo Imitaci&oacute;n Hidr&aacute;ulico para Pared</h1>
            <p>Redecora sin obras y transforma tus espacios. Descubre c&oacute;mo un simple cambio de azulejos en la pared puede darle una nueva vida a tu hogar.</p>
            <div class="hero-buttons">
                <a href="#catalogo-paredes" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#ideas-paredes" class="hero-btn secondary">Ver Ideas</a>
            </div>
        </div>
    </section>
    
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <h2>La Elecci&oacute;n Inteligente para tus Paredes</h2>
                <p>Consigue el impacto visual del hidr&aacute;ulico aut&eacute;ntico eliminando sus dos mayores problemas: la instalaci&oacute;n y el mantenimiento diario.</p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card"><div class="icon">🔧</div><h3>Instalaci&oacute;n sin Sorpresas</h3><p>Se coloca como un azulejo normal, sin mano de obra especializada ni tratamientos posteriores. Ahorra tiempo y costes en tu reforma.</p></div>
                <div class="ap-value-card"><div class="icon">🧼</div><h3>Olv&iacute;date del Mantenimiento</h3><p>Perfecto para salpicaderos de cocina y duchas. Su nula porosidad lo hace inmune a las manchas de grasa, cal o humedad.</p></div>
                <div class="ap-value-card"><div class="icon">🛡️</div><h3>Resistencia a Toda Prueba</h3><p>A diferencia del hidr&aacute;ulico tradicional, el porcel&aacute;nico no se raya con facilidad y su color permanece inalterable para siempre.</p></div>
            </div>
        </div>
    </section>
    
    <section class="ap-inspiration-section adrihosan-full-width-block" id="ideas-paredes">
        <div class="ap-inspiration-wrapper">
            <h2>Paredes que Dejan Huella</h2>
            <p class="section-subtitle">Desde un toque sutil a una declaraci&oacute;n de estilo. Descubre c&oacute;mo nuestros azulejos hidr&aacute;ulicos para pared pueden redefinir tus espacios m&aacute;s importantes.</p>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/uso-revestimiento/" class="ap-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Salpicadero de cocina revestido con azulejo hidráulico porcelánico de patrón geométrico."><div class="ap-card-content"><h3>Salpicaderos de Cocina</h3><p>Protege la zona de fuegos con un dise&ntilde;o impactante y una superficie que se limpia sin esfuerzo, por mucho que salpique.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/tono-azul/" class="ap-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-1.jpg" alt="Pared de ducha en un baño moderno, revestida con azulejo hidráulico de imitación."><div class="ap-card-content"><h3>Frentes de Ducha</h3><p>Crea un refugio de calma y estilo en tu ba&ntilde;o. Totalmente impermeables y resistentes a la cal y a los productos de limpieza.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/estilo-hexagonal/" class="ap-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-2.jpg" alt="Pared de acento en un comedor, decorada con azulejos porcelánicos de estilo hidráulico."><div class="ap-card-content"><h3>Paredes de Acento</h3><p>Desde el cabecero de la cama al frontal de una chimenea. Un recurso decorativo para dar personalidad a cualquier estancia.</p></div></a>
            </div>
        </div>
    </section>
    
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-paredes" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>
    
    <div id="catalogo-paredes" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Azulejos para Pared</h2></div>
    <?php
}

/**
 * Inyecta el contenido inferior para la categoría 4806.
 */
function adrihosan_pilar_paredes_contenido_inferior() {
    ?>
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Dudas Frecuentes sobre Azulejos de Pared</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;l es la diferencia entre el azulejo imitaci&oacute;n hidr&aacute;ulico y la baldosa original?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>La principal diferencia radica en el material y mantenimiento. El azulejo imitaci&oacute;n hidr&aacute;ulico es cer&aacute;mico o porcel&aacute;nico, lo que lo hace impermeable y libre de mantenimiento. La baldosa original es de cemento prensado, muy porosa y requiere selladores para evitar manchas permanentes.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es apta la cer&aacute;mica hidr&aacute;ulica para el frontal de la cocina?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es la mejor opci&oacute;n. Al ser un material con acabados resistentes al calor y las manchas , puedes limpiar las salpicaduras de grasa f&aacute;cilmente con productos comunes sin que el dise&ntilde;o del azulejo hidr&aacute;ulico cocina se deteriore.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Puedo personalizar los colores de mis azulejos hidr&aacute;ulicos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan ofrecemos una amplia variedad de modelos configurables y colecciones con diferentes texturas y tonos. Desde el azulejo hidr&aacute;ulico verde hasta el azulejo hidr&aacute;ulico gris, disponemos de opciones para adaptarnos a tu estilo personal.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formato es mejor para una pared peque&ntilde;a: 20x20 o 15x15?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>Para espacios reducidos, el azulejo hidr&aacute;ulico 15x15 aporta un detalle m&aacute;s fino y artesanal. Si buscas una instalaci&oacute;n m&aacute;s r&aacute;pida y un aspecto cl&aacute;sico, el azulejo hidr&aacute;ulico 20x20 es el est&aacute;ndar que mejor encaja en la mayor&iacute;a de reformas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El azulejo hidr&aacute;ulico pared ba&ntilde;o resiste la humedad directa de la ducha?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>Totalmente. Al ser materiales fabricados para resistir el uso diario y la humedad , nuestros azulejos cuentan con una estructura s&oacute;lida y anclajes reforzados que garantizan seguridad y durabilidad en zonas h&uacute;medas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Necesitas un &uacute;ltimo consejo? <span>Soy Ricardo, tu experto en paredes con estilo.</span></h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20azulejos%20para%20pared" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

/******************************************************************************
 * =============================================================================
 * PÁGINA "BALDOSA HIDRÁULICA ORIGINAL" (ID: 4862) - VERSIÓN FINAL COMPLETA
 * =============================================================================
 ******************************************************************************/

// --- BLOQUE 1: Contenido SUPERIOR (Antes de los productos) ---
// COMENTADO - Duplicado del controlador maestro (línea 89)
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_original', 7 );
function adrihosan_contenido_superior_original() {
	if ( is_product_category( 4862 ) && ! is_singular('product') ) {
		remove_all_actions( 'woocommerce_archive_description' );
		add_filter( 'woocommerce_show_page_title', '__return_false' );
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
		?>
		<section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/Baldosa-hidraulica-original-Adrihosan-1.jpg');">
			<div class="hero-content">
				
				<h1>Baldosa Hidráulica Original</h1>
				<p>Siente la belleza del cemento pigmentado. Celebramos la artesanía y el carácter del auténtico suelo hidráulico, creando suelos evocadores e irrepetibles.</p>
				<div class="hero-buttons">
					<a href="#bh-product-grid-anchor" class="hero-btn primary">Ver Colección</a>
					<a href="#bh-guia-original" class="hero-btn secondary">Leer Guía Definitiva</a>
				</div>
			</div>
		</section>
		<section class="bh-features-section adrihosan-full-width-block">
			<div class="section-header">
				<h2>La Esencia de lo Artesanal</h2>
				<p>Cada baldosa es una pequeña obra de arte, con la textura y las variaciones que solo un producto hecho a mano puede ofrecer.</p>
			</div>
			<div class="bh-features-grid">
				<div class="bh-feature-card"><div class="icon">🎨</div><h3>Color y Textura Únicos</h3><p>La pigmentación manual crea una profundidad de color y una textura sedosa inigualables por procesos industriales.</p></div>
				<div class="bh-feature-card"><div class="icon">✨</div><h3>El Encanto Artesanal</h3><p>Cada baldosa es única, con ligeras variaciones que garantizan un suelo con personalidad y valor.</p></div>
				<div class="bh-feature-card"><div class="icon">🌿</div><h3>Energía Eficiente y Sostenible</h3><p>Además de su belleza natural, es un excelente conductor térmico, ideal para sistemas de suelo radiante.</p></div>
				<div class="bh-feature-card"><div class="icon">⏳</div><h3>Durabilidad y Pátina</h3><p>A diferencia de materiales que se desgastan, este suelo envejece. Con el tiempo desarrolla una pátina única que realza su belleza. Es un suelo que no se reemplaza, se hereda.</p></div>
			</div>
		</section>
		<section class="inspiration-section adrihosan-full-width-block">
			<h2 class="inspiration-title">Encuentra tu Estilo</h2>
			<div class="inspiration-grid">
				<a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/bano/" class="inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/baldosa-hidraulica-adrihosan-bano.jpg" alt="Baño con suelo de baldosa hidráulica original"><div class="card-content"><h3>Para Baños</h3></div></a>
				<a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/cocina/" class="inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Baldosa-hidraulica-cocina.jpg" alt="Cocina con suelo de baldosa hidráulica original"><div class="card-content"><h3>Para Cocinas</h3></div></a>
				<a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/exterior/" class="inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-1.jpg" alt="Exterior con suelo de baldosa hidráulica original"><div class="card-content"><h3>Para Exterior</h3></div></a>
			</div>
		</section>
		
		<div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
			<p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
		</div>
		
		<div id="destino-filtro-adria-hidraulica" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
		<div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>
		
		<div class="product-loop-header" id="bh-product-grid-anchor"><h2 class="product-loop-title">Catálogo de Baldosa Hidráulica Original</h2></div>
		<?php
	}
}

// --- BLOQUE 2: Contenido INFERIOR (Después de los productos) ---
// COMENTADO - Duplicado del controlador maestro (línea 90)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_original', 20 );
function adrihosan_contenido_inferior_original() {
	if ( is_product_category( 4862 ) && ! is_singular('product') ) {
		?>
		<section class="bh-custom-section adrihosan-full-width-block">
			<div class="bh-custom-wrapper">
				<div class="bh-custom-text-content">
					<h2>Pide tu baldosa personalizada</h2>
					<p>¿Tienes un diseño en mente o quieres recuperar un modelo antiguo? Nuestro equipo de artesanos puede crear la baldosa hidráulica que necesitas. Contáctanos y haremos realidad tu idea.</p>
					<a href="https://www.adrihosan.com/baldosa-hidraulica-personalizada/" class="bh-custom-cta-btn">Solicitar Diseño</a>
				</div>
				<div class="bh-custom-image-content">
					<img src="https://www.adrihosan.com/wp-content/uploads/2025/09/baldosa-hidraulica-adrihosan-cocina.jpg" alt="Artesano trabajando en la creación de una baldosa hidráulica personalizada.">
				</div>
			</div>
		</section>
		
       <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
    <div class="bh-simulator-wrapper">
        <h2 style="color: #ffffff;">Diseña tu propia baldosa</h2>
        <p style="color: #ffffff;">Con nuestro simulador, puedes combinar colores y patrones para crear una baldosa única. Experimenta, visualiza y descarga tu diseño para solicitar un presupuesto.</p>
        <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn">Abrir Simulador</a>
        <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador de ambientes de Adrihosan en un ordenador portátil" class="bh-simulator-device-img">
    </div>
</section>

		<?php
        // SEO: Contenido din&aacute;mico desde WooCommerce category_description()
        $descripcion_editor = category_description();
        if ( ! empty( $descripcion_editor ) ) {
        ?>
        <section class="bho-seo-section adrihosan-full-width-block">
            <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
                <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                    <?php echo $descripcion_editor; ?>
                </div>
            </div>
        </section>
        <?php } ?>

		<section class="faq-section-common adrihosan-full-width-block">
			<div class="faq-wrapper-common">
				<h2 class="faq-main-title-common">Preguntas Frecuentes sobre Baldosa Hidráulica</h2>
				<div class="faq-items-wrapper">
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Es compatible la baldosa hidráulica con el suelo radiante?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>Rotundamente sí.</strong> De hecho, es uno de los mejores materiales para ello. Al ser una pieza compacta de cemento y polvo de mármol, tiene una inercia térmica excelente: tarda un poco más en calentarse que la madera, pero retiene y irradia el calor durante mucho más tiempo, lo que mejora la eficiencia energética de tu sistema de calefacción.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Por qué las piezas tienen ligeras variaciones de color entre sí?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Porque no son un producto industrial, sino artesanal. A esto se le llama <strong>destonificación natural</strong>. Al fabricarse una a una, factores como la humedad del día o la mezcla manual de pigmentos pueden generar matices sutiles. No es un defecto; es la garantía de que has comprado un suelo auténtico y no una imitación cerámica impresa.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿El suelo hidráulico resbala?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>El acabado natural de la baldosa hidráulica es mate y tiene cierta porosidad, por lo que ofrece un agarre correcto en seco. Si necesitas instalarlo en zonas que estarán habitualmente mojadas o en exteriores con pendiente, recomendamos aplicar un tratamiento líquido antideslizante específico que micro-texturiza la superficie sin alterar su estética.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>Tengo baldosas hidráulicas antiguas, ¿puedo mezclarlas con las nuevas?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>No recomendamos mezclarlas en la misma superficie ("parcheado").</strong> Aunque el diseño sea similar, una baldosa antigua ha perdido viveza y tiene una pátina que jamás coincidirá con el color vibrante de una baldosa nueva. La mejor solución es <strong>crear "alfombras"</strong>: utiliza las piezas antiguas para delimitar una zona central o decorativa, y separa las zonas con las baldosas nuevas alrededor o en estancias contiguas. Así cada una luce su belleza sin competir.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Se puede pulir el suelo hidráulico si se mancha o envejece?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>Rotundamente NO. Está prohibido.</strong> A diferencia del terrazo, la baldosa hidráulica tiene una capa de color (rodadura) de unos milímetros. Si utilizas una pulidora abrasiva, sea ahora o dentro de 50 años, corres el riesgo de eliminar el dibujo y dejar a la vista el cemento base, destruyendo el suelo para siempre. La clave es el <strong>tratamiento sellador</strong> y la limpieza con jabón neutro; con eso, el suelo envejecerá dignamente sin necesidad de agresiones mecánicas.</p></div></div>
				</div>
			</div>
		</section>
		<section class="contact-help-common adrihosan-full-width-block">
			<div class="contact-help-wrapper">
				<div class="contact-intro">
					<img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
					<div><h2>¿Dudas sobre la Baldosa Original?<span>Soy Ricardo, pregúntame.</span></h2></div>
				</div>
				<div class="contact-options-grid-common">
					<a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposición</div></a>
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
					<a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Teléfono</div></a>
					<a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
					<a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
				</div>
			</div>
		</section>
		<?php
	}
}

/******************************************************************************
 * =============================================================================
 * CÓDIGO UNIFICADO Y CORREGIDO PARA LA CATEGORÍA "ORIGINAL / BAÑO" (ID 4865)
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla toda la lógica de la página de Baño.
 */
function adrihosan_pilar_bano_controller() {
    // ID numérico de la categoría "Baño" de Baldosa Hidráullca Original.
    $category_id = 4865;

    // Si no estamos en la categoría correcta, no hacemos nada.
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

    // --- Elimina elementos por defecto de WooCommerce ---
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // --- Inyecta contenido personalizado ---
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_bano_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_bano_contenido_inferior', 99 );
}
add_action( 'template_redirect', 'adrihosan_pilar_bano_controller' );


/**
 * Inyecta el contenido superior: Hero, Características, Inspiración y Filtros.
 */
function adrihosan_pilar_bano_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan.jpg');">
        <div class="hero-content">
            
            <h1>Baldosa Hidr&aacute;ulica Original para Ba&ntilde;o</h1>
            
            <p>Descubre el encanto de la baldosa hidr&aacute;ulica original. Un material con alma que transforma tu ba&ntilde;o en un espacio &uacute;nico, lleno de car&aacute;cter y belleza atemporal.</p>
            <div class="hero-buttons">
                <a href="#lista-productos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto" class="hero-btn secondary">Hablar con un experto</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item"><div class="icon">🎨</div><h3>Textura Inimitable</h3><p>Siente la calidez y la suave irregularidad del cemento pigmentado hecho a mano.</p></div>
            <div class="bho-feature-item"><div class="icon">🏛️</div><h3>Dise&ntilde;os con Historia</h3><p>Cada patr&oacute;n cuenta una historia. Elige entre motivos geom&eacute;tricos, florales o modernistas.</p></div>
            <div class="bho-feature-item"><div class="icon">✨</div><h3>Belleza que Evoluciona</h3><p>La baldosa original envejece contigo, adquiriendo una p&aacute;tina que realza su autenticidad.</p></div>
            <div class="bho-feature-item"><div class="icon">💧</div><h3>Ideal para Zonas H&uacute;medas</h3><p>Con el tratamiento sellador adecuado, es perfectamente apta para suelos de ba&ntilde;o.</p></div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <a href="/categoria-producto/baldosa-hidraulica/original/bano/estilos-hidraulico-bano-contemporaneo/" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan-5.jpg" alt="Baño moderno con baldosa hidráulica original geométrica" class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Estilo Moderno</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/bano/estilos-hidraulico-bano-tradicional/" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan-6.jpg" alt="Baño rústico con suelo de baldosa artesanal floral" class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Estilo R&uacute;stico</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/bano/color-hidraulico-bano-blanco-y-negro/" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan-7.jpg" alt="Baño minimalista con pared de acento en baldosa hidráulica" class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Toque Minimalista</h3></div></a>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-bano" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>
    
    <div id="lista-productos" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Baldosas para Ba&ntilde;o</h2></div>
    <?php
}

function adrihosan_pilar_bano_contenido_inferior() {
    if ( is_product_category( 4865 ) && ! is_singular('product') ) {
        ?>
        <section class="bho-hero-section adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/mantenimiento-suelo-hidraulico.jpg'); min-height: 40vh;">
            <div class="bho-hero-content">
                <div class="eyebrow" style="font-size: 0.9rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; color: #4dd2d0; margin-bottom: 1rem;">Gu&iacute;a T&eacute;cnica Esencial</div>
                <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1.5rem; color: #ffffff; line-height: 1.4;">Protege tu Inversi&oacute;n: Sellado y Cuidado en el Ba&ntilde;o</h2>
                <p style="font-size: clamp(1rem, 2.5vw, 1.1rem); line-height: 1.8; opacity: 0.9; margin-bottom: 2rem;">La baldosa hidr&aacute;ulica es robusta, pero su coraz&oacute;n es poroso. Un buen sellado es el escudo que la proteger&aacute; de la humedad y las manchas.</p>
                <a href="https://www.adrihosan.com/baldosa-hidraulica-colocacion-mantenimiento/" class="bhp-hero-btn bhp-hero-btn-primary">Leer la Gu&iacute;a →</a>
            </div>
        </section>

        <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
            <div class="bh-simulator-wrapper">
                <div class="bh-simulator-image">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador" class="bh-simulator-device-img">
                </div>
                <div class="bh-simulator-text">
                    <h2 style="color: #ffffff;">Diseña tu propia baldosa</h2>
                    <p style="color: #ffffff;">Experimenta y descarga tu diseño para solicitar un presupuesto.</p>
                    <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn" target="_blank">Abrir Simulador</a>
                </div>
            </div>
        </section>

        <?php
        $descripcion_editor = category_description();
        if ( ! empty( $descripcion_editor ) ) {
            echo '<section class="bho-guide-section">'; // SIN adrihosan-full-width-block
            echo '    <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">';
            echo '        <div class="term-description-dinamica" style="text-align: left; font-family: \'Poppins\'; color: #3f6f7b; line-height: 1.8;">';
            echo              $descripcion_editor; 
            echo '        </div>';
            echo '    </div>';
            echo '</section>';
        }
        ?>

       <section class="faq-section-common adrihosan-full-width-block"> <div class="faq-wrapper-common"> <h2 class="faq-main-title-common">Dudas sobre la Baldosa Original en Ba&ntilde;os</h2> <div class="faq-items-wrapper"> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Realmente se puede mojar sin problemas?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p><strong>S&iacute;, sin ninguna duda.</strong> La <strong>baldosa hidr&aacute;ulica original para ba&ntilde;o</strong> es perfectamente apta para zonas h&uacute;medas. Una vez tratada con un sellador profesional hidr&oacute;fugo, el material se vuelve impermeable y repele el agua, manteniendo su belleza intacta durante d&eacute;cadas.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Aparecer&aacute;n manchas de cal o jab&oacute;n?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p><strong>Con un buen sellado no.</strong> El <strong>suelo hidr&aacute;ulico artesanal</strong> requiere un tratamiento protector inicial que evita que la suciedad penetre en el poro. Si usas productos de limpieza neutros, las manchas de cal o jab&oacute;n no ser&aacute;n un problema en tu d&iacute;a a d&iacute;a.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Es resbaladiza la baldosa hidr&aacute;ulica en el ba&ntilde;o?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p>No, al contrario. Su acabado mate natural ofrece una excelente adherencia, superior a muchos azulejos cer&aacute;micos pulidos. La <strong>baldosa hidr&aacute;ulica original</strong> es una opci&oacute;n segura para el suelo del ba&ntilde;o, incluso en la zona de la ducha.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Cu&aacute;nto tiempo tarda en fabricarse un mosaico hidr&aacute;ulico personalizado?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p>Si eliges un dise&ntilde;o de nuestra <strong>amplia gama en stock</strong>, el env&iacute;o es inmediato. Si prefieres usar nuestro <strong>simulador</strong> para crear una pieza &uacute;nica, el proceso de fabricaci&oacute;n manual y fraguado suele tardar entre 4 y 6 semanas, ya que <strong>se fabrican una a una</strong> respetando los tiempos naturales del cemento.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Puedo instalar baldosa hidr&aacute;ulica antigua en la pared del ba&ntilde;o?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p>Absolutamente. <strong>En los ba&ntilde;os es perfecta para los suelos y paredes para poder dar un aspecto vintage que es inigualable</strong>. Su instalaci&oacute;n en paredes aporta una textura y un peso visual que convierte cualquier pared maestra en el centro de todas las miradas.</p> </div> </div> </div> </div> </section>

        <section id="contacto" class="contact-help-common adrihosan-full-width-block">
            <div class="contact-help-wrapper">
                <div class="contact-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan">
                    <div><h2>&iquest;Necesitas ayuda para tu ba&ntilde;o? <span>Soy Ricardo, tu experto en materiales.</span></h2></div>
                </div>
                <div class="contact-options-grid-common">
                    <a href="/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                    <a href="/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                    <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                    <a href="https://api.whatsapp.com/send?phone=+34961957136" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                    <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
                </div>
            </div>
        </section>
        <?php
    }
}

/******************************************************************************
 * =============================================================================
 * CÓDIGO COMPLETO Y CORREGIDO PARA LA CATEGORÍA "ORIGINAL / COCINA" (ID 4866)
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla toda la lógica de la página de Cocina.
 */
function adrihosan_pilar_cocina_controller() {
    // ID numérico de la categoría "Cocina".
    $category_id = 4866; 

    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    // --- Elimina elementos por defecto de la plantilla ---
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // --- Inyecta el contenido HTML personalizado ---
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_cocina_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_cocina_contenido_inferior', 99 );
}
add_action( 'template_redirect', 'adrihosan_pilar_cocina_controller' );

/**
 * Inyecta el contenido superior: Hero, Características, Inspiración y Filtros.
 */
function adrihosan_pilar_cocina_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/Baldosa-hidraulica-cocina.jpg');">
        <div class="hero-content">

            <h1>Baldosa Hidr&aacute;ulica Original para Cocina</h1>

            <p>La baldosa hidr&aacute;ulica original convierte la cocina en una declaraci&oacute;n de estilo. Perfecta para salpicaderos con car&aacute;cter, suelos que cuentan una historia o para enmarcar una isla central.</p>
            <div class="hero-buttons">
                <a href="#catalogo-cocina" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-experto-cocina" class="hero-btn secondary">Hablar con un experto</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item">
                <div class="icon">🔥</div>
                <h3>Resistente al Calor</h3>
                <p>Perfecta para zonas de cocci&oacute;n. El cemento artesanal soporta altas temperaturas sin alterar su color ni estructura, ideal para frontales de cocina.</p>
            </div>
            <div class="bho-feature-item">
                <div class="icon">🧼</div>
                <h3>F&aacute;cil de Limpiar (Sellada)</h3>
                <p>Una vez sellada, su superficie repele las manchas de aceite y grasa, facilitando la limpieza diaria con una simple bayeta y productos neutros.</p>
            </div>
            <div class="bho-feature-item">
                <div class="icon">🖼️</div>
                <h3>Un Salpicadero &Uacute;nico</h3>
                <p>Crea un punto focal inigualable detr&aacute;s de los fuegos o el fregadero. Un toque de arte que protege tus paredes y define el estilo de tu cocina.</p>
            </div>
            <div class="bho-feature-item">
                <div class="icon">🍽️</div>
                <h3>Zona de Comedor Distinguida</h3>
                <p>Delimita visualmente el &aacute;rea de comedor o una isla central, aportando una personalidad y un estilo que solo la baldosa hidr&aacute;ulica puede ofrecer.</p>
            </div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <a href="/categoria-producto/baldosa-hidraulica/original/cocina/?tipo-hidraulico=geometricas" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Cocina moderna con un frontal de baldosa hidráulica original geométrica." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Salpicaderos que Enamoran</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/cocina/?tipo-hidraulico=tradicional" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Porcelnico-Imitacion-Hidraulica-1.jpg" alt="Cocina de estilo rústico con suelo completo de baldosa artesanal con patrones florales." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Suelos con Historia</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/cocina/?tipo-hidraulico=contemporaneo" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/baldosa-hidraulica-adrihosan-cocina.jpg" alt="Cocina minimalista con una isla central y un detalle de suelo hidráulico enmarcado." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Detalles que Marcan la Diferencia</h3></div></a>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-cocina" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>

    <div id="catalogo-cocina" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Baldosas para Cocina</h2></div>

    <?php
}

/**
 * Inyecta el contenido inferior: Guía Técnica (Link), Contenido SEO, FAQ y Contacto.
 */
function adrihosan_pilar_cocina_contenido_inferior() {
    ?>
   <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
    <div class="bh-simulator-wrapper">
        <div class="bh-simulator-image">
            <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador de ambientes de Adrihosan en un ordenador portátil" class="bh-simulator-device-img">
        </div>
        <div class="bh-simulator-text">
            <h2 style="color: #ffffff;">Diseña tu propia baldosa</h2>
            <p style="color: #ffffff;">Con nuestro simulador, puedes combinar colores y patrones para crear una baldosa única. Experimenta, visualiza y descarga tu diseño para solicitar un presupuesto.</p>
            <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn" target="_blank" rel="noopener noreferrer">Abrir Simulador</a>
        </div>
    </div>
</section>

    <section class="hero-section-container guia-tecnica adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/mantenimiento-suelo-hidraulico.jpg'); min-height: 40vh;">
        <div class="hero-content">
            <div class="eyebrow">Gu&iacute;a T&eacute;cnica Esencial</div>
            <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1.5rem; color: #ffffff; line-height: 1.4;">El Secreto de una Cocina Eterna: Sellado y Cuidado</h2>
            <p style="font-size: clamp(1rem, 2.5vw, 1.1rem); line-height: 1.8; opacity: 0.9; margin-bottom: 2rem;">La baldosa hidr&aacute;ulica es robusta, pero su coraz&oacute;n es poroso. Un buen sellado es el escudo que la proteger&aacute; de manchas de aceite, vino o caf&eacute;. Descubre c&oacute;mo hacerlo en nuestra gu&iacute;a.</p>
            <a href="https://www.adrihosan.com/baldosa-hidraulica-colocacion-mantenimiento/" class="hero-btn primary">Leer la Gu&iacute;a →</a>
        </div>
    </section>

    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Dudas sobre la Baldosa Original en Cocinas</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Se mancha con el aceite o el vino?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>Si la baldosa est&aacute; correctamente sellada con un producto hidr&oacute;fugo y ole&oacute;fugo, las manchas no penetrar&aacute;n.</strong> Es importante limpiar cualquier derrame de inmediato con una bayeta y un producto neutro para evitar que permanezca en la superficie.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Puedo usarla como encimera?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>T&eacute;cnicamente s&iacute;, por dureza y resistencia al calor. Sin embargo, no lo recomendamos para zonas de corte directo o contacto constante con &aacute;cidos fuertes (lim&oacute;n, vinagre) si no vas a ser muy riguroso con el mantenimiento del sellado. Para encimeras de batalla, es mejor optar por porcel&aacute;nico.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;C&oacute;mo se limpian las juntas del suelo de la cocina?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Usa un cepillo suave con agua y jab&oacute;n neutro. Evita frotar con estropajos met&aacute;licos o usar productos abrasivos como salfum&aacute;n, ya que podr&iacute;an da&ntilde;ar los bordes de la <strong>baldosa hidr&aacute;ulica original</strong> adyacente. Un buen sellado inicial tambi&eacute;n protege la junta de ennegrecerse.</p></div></div>
            </div>
        </div>
    </section>

    <section id="contacto-experto-cocina" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan" loading="lazy">
                <div><h2>&iquest;Dise&ntilde;amos juntos la cocina de tus sue&ntilde;os?</h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

/******************************************************************************
 * =============================================================================
 * CÓDIGO 10/10 PARA "BALDOSA HIDRÁULICA EXTERIOR" (ID 4869)
 * - Versión unificada y optimizada.
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla la lógica de la página de Exterior.
 */
function adrihosan_pilar_exterior_controller() {
    $category_id = 4869; 
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_exterior_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_exterior_contenido_inferior', 99 );
}
add_action( 'template_redirect', 'adrihosan_pilar_exterior_controller' );


/**
 * Inyecta el contenido superior: Hero, Características, Inspiración y Filtros.
 */
function adrihosan_pilar_exterior_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-5.jpg');">
        <div class="hero-content">

            <h1>Baldosa Hidr&aacute;ulica Original para Exterior</h1>
            <p>Descubre nuestra colecci&oacute;n de baldosa hidr&aacute;ulica original para exterior. La soluci&oacute;n artesanal y duradera para crear terrazas, patios y porches con un car&aacute;cter inigualable.</p>
            <div class="hero-buttons">
                <a href="#catalogo-exterior" class="hero-btn primary">Ver Cat&aacute;logo Exterior</a>
                <a href="#contacto-experto-exterior" class="hero-btn secondary">Asesoramiento experto</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item"><div class="icon">🧊</div><h3>Apta para Heladas</h3><p>Su composici&oacute;n la hace apta para soportar heladas, pero es <strong>imprescindible aplicar un <a href="https://www.adrihosan.com/categoria-producto/ceramica/mantenimiento-de-azulejos/" target="_blank" rel="noopener noreferrer">tratamiento de sellado</a> tras la instalaci&oacute;n</strong> para garantizar su resistencia al agua y al hielo.</p></div>
            <div class="bho-feature-item"><div class="icon">☀️</div><h3>Colores que Perduran al Sol</h3><p>Fabricada con pigmentos minerales, esta baldosa artesanal para exterior mantiene la viveza de sus colores inalterable frente a la exposici&oacute;n solar directa.</p></div>
            <div class="bho-feature-item"><div class="icon">👣</div><h3>Superficie Segura y Antideslizante</h3><p>La textura mate natural del cemento ofrece una superficie segura con un excelente agarre, ideal para zonas de paso y &aacute;reas que puedan mojarse.</p></div>
            <div class="bho-feature-item"><div class="icon">🌱</div><h3>Integraci&oacute;n con la Naturaleza</h3><p>Sus dise&ntilde;os y materiales nobles se integran a la perfecci&oacute;n en jardines, patios y terrazas, creando una transici&oacute;n fluida entre el interior y el exterior.</p></div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <a href="/categoria-producto/baldosa-hidraulica/original/exterior/?tipo-hidraulico=geometricas" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-3.jpg" alt="Terraza con suelo de baldosa hidráulica original para exterior con un diseño geométrico." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Terrazas con Encanto</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/exterior/?tipo-hidraulico=tradicional" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-1.jpg" alt="Patio de estilo mediterráneo con baldosa artesanal para exterior con motivos florales." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Patios Mediterr&aacute;neos</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/exterior/?tipo-hidraulico=florales" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan.jpg" alt="Porche rústico revestido con baldosa hidráulica original para exterior." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Porches Acogedores</h3></div></a>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-exterior" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>

    <div id="catalogo-exterior" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Baldosa Hidr&aacute;ulica para Exterior</h2></div>
    <?php
}

/**
 * Inyecta el contenido inferior.
 */
function adrihosan_pilar_exterior_contenido_inferior() {
    ?>
    <section class="hero-section-container guia-tecnica adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/mantenimiento-suelo-hidraulico.jpg'); min-height: 40vh;">
        <div class="hero-content">
            <div class="eyebrow">Gu&iacute;a T&eacute;cnica Esencial</div>
            <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1.5rem; color: #ffffff; line-height: 1.4;">El Secreto de una Terraza Eterna: Sellado y Cuidado</h2>
            <p style="font-size: clamp(1rem, 2.5vw, 1.1rem); line-height: 1.8; opacity: 0.9; margin-bottom: 2rem;">La baldosa hidr&aacute;ulica es robusta, pero su coraz&oacute;n es poroso. Un buen sellado es el escudo que la proteger&aacute; de la humedad, las heladas y las manchas. Descubre c&oacute;mo hacerlo en nuestra gu&iacute;a.</p>
            <a href="https://www.adrihosan.com/baldosa-hidraulica-colocacion-mantenimiento/" class="hero-btn primary" target="_blank" rel="noopener noreferrer">Leer la Gu&iacute;a →</a>
        </div>
    </section>

    <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="bh-simulator-wrapper">
            <div class="bh-simulator-image">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador de ambientes de Adrihosan en un ordenador portátil" class="bh-simulator-device-img">
            </div>
            <div class="bh-simulator-text">
                <h2 style="color: #ffffff;">Dise&ntilde;a tu propia baldosa</h2>
                <p style="color: #ffffff;">Con nuestro simulador, puedes combinar colores y patrones para crear una baldosa &uacute;nica. Experimenta, visualiza y descarga tu dise&ntilde;o para solicitar un presupuesto.</p>
                <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn" target="_blank" rel="noopener noreferrer">Abrir Simulador</a>
            </div>
        </div>
    </section>
    
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Dudas sobre Hidr&aacute;ulico en Exteriores</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;El sol se comer&aacute; el color de la baldosa?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>No. A diferencia de otros materiales impresos o pl&aacute;sticos, la <strong>baldosa hidr&aacute;ulica original</strong> se fabrica con pigmentos minerales de alta calidad integrados en la capa de rodadura (la "trepa"), que tiene unos 4-5mm de grosor. Esto garantiza que los colores resistan la radiaci&oacute;n UV sin desvanecerse durante d&eacute;cadas.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Resbala si llueve?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>El cemento natural tiene una textura mate que ofrece un agarre aceptable para caminar, similar a una piedra lisa. Sin embargo, para zonas cr&iacute;ticas como rampas o bordes de piscina, recomendamos aplicar un tratamiento antideslizante l&iacute;quido adicional o optar directamente por nuestro <strong>porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico con acabado C3/R11</strong>, espec&iacute;fico para seguridad m&aacute;xima.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Pueden romperse las baldosas con las heladas?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Si est&aacute;n bien instaladas y selladas, no. La clave es el <strong>tratamiento hidr&oacute;fugo</strong>. Al impedir que el agua penetre en el poro del cemento, evitas que esta se congele dentro y fracture la pieza por expansi&oacute;n. Tambi&eacute;n es vital usar un cemento cola flexible para exteriores y respetar las juntas de dilataci&oacute;n.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;C&oacute;mo limpio las manchas de grasa de la barbacoa?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Si el suelo estaba bien sellado, bastar&aacute; con agua caliente y jab&oacute;n neutro. Si la mancha ha penetrado, existen cataplasmas espec&iacute;ficas para absorber grasa en piedra y cemento. Nunca uses desengrasantes &aacute;cidos fuertes. La mejor defensa en la zona de barbacoa es reaplicar el sellador con m&aacute;s frecuencia que en el resto de la terraza.</p></div></div>
            </div>
        </div>
    </section>

    <section id="contacto-experto-exterior" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Proyectamos juntos tu terraza?</h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20la%20baldosa%20hidr%C3%A1ulica%20original%20para%20exterior" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

/********************************************************************************
 * =============================================================================
 * SOLUCIÓN DEFINITIVA CON CSS INYECTADO (ANTI-CACHÉ Y ANTI-TEMA)
 * =============================================================================
 ********************************************************************************/

add_action( 'wp_head', 'adrihosan_custom_category_final_fix_css', 999 );
function adrihosan_custom_category_final_fix_css() {
    // Lista de IDs de TODAS las categorías personalizadas
    $custom_category_ids = array(62, 2082, 4806, 2083, 4876, 102, 4213, 4247, 2626, 4862, 4865, 4866, 4869, 4564, 2209, 1789, 2093);

    // Solo ejecutar si estamos en una de esas categorías
    if ( is_product_category( $custom_category_ids ) ) {
        ?>
        <style type="text/css">
            /*
             * PASO 1: Oculta completamente los contenedores de filtros y herramientas del tema.
             */
            .filter-wrapper,
            .wd-shop-tools {
                display: none !important;
            }

            /*
             * PASO 2 (SOLUCIÓN MEJORADA): Fuerza a la rejilla de productos a posicionarse
             * debajo de cualquier elemento flotante y añade un margen superior robusto.
             * Usamos 'div.products' para aumentar la especificidad sobre las reglas del tema.
             */
            div.products-grid.products {
                clear: both !important;
                margin-top: 250px !important; /* Aumentamos el margen para asegurar el espacio */
            }
        </style>
        <?php
    }
}

// =============================================================================
// LANDING SUELO IMITACIÓN MADERA - ID 2209 (VERSIÓN LIMPIA Y VALIDADA)
// =============================================================================

/**
 * Muestra el contenido ANTES del loop de productos para la categoría Madera.
 */
// COMENTADO - Duplicado del controlador maestro (línea 112)
// add_action('woocommerce_before_shop_loop', 'adrihosan_wood_cat_before_loop_final_validated', 5);
function adrihosan_wood_cat_before_loop_final_validated() {
    // Verificar si estamos en la categoría correcta ANTES de hacer nada
    if (!is_product_category(2209)) {
        return; // Salir temprano si no es la categoría
    }
    
    // Obtener la URL base de la categoría una sola vez
    $category_url = get_term_link(2209, 'product_cat');
    // Verificar si get_term_link dio error
    if (is_wp_error($category_url)) {
       $category_url = '#error-getting-category-url'; // Usar un placeholder en caso de error
    }

    ?>
    <section class="bho-hero-section adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg');">
        <div class="bho-hero-content">
            <p class="bho-hero-title-visual">Suelos Imitación Madera</p>
            <p>La calidez y belleza de la madera con la resistencia invencible del porcelánico. Para interior y exterior.</p>
            <div class="bhp-hero-buttons">
                <a href="#product-loop" class="bhp-hero-btn bhp-hero-btn-primary">Ver Catálogo</a>
                <a href="/proyectos/" class="bhp-hero-btn bhp-hero-btn-secondary">Ver Proyectos Reales</a>
            </div>
        </div>
    </section>
    
    <section class="bho-guide-section">
    <div class="bho-guide-wrapper">
        <h1 class="bho-guide-main-title">Suelo Porcelánico Imitación Madera: La Calidez que Perdura</h1>
        <p>Descubre la solución definitiva para tus suelos: el <strong>suelo porcelánico imitación madera</strong>. En Adrihosan, hemos seleccionado el mejor <strong>gres efecto madera</strong> que captura la belleza y la calidez del parquet sin ninguno de sus inconvenientes. Di adiós al mantenimiento constante, a los arañazos y al miedo a la humedad.</p>
        <p>Nuestro pavimento porcelánico es la opción ideal para cualquier estancia, desde el salón hasta la cocina y el baño, e incluso para tu terraza. Explora el catálogo y usa nuestros filtros para encontrar fácilmente el acabado, tono (como el moderno gris o el clásico roble) y formato que transformará tu espacio.</p>
    </div>
</section>

<section class="bho-hub-section">
             <div class="bho-hub-wrapper">
                <?php
                    // Obtenemos la URL base de la categoría una sola vez
                    $category_url = get_term_link(2209, 'product_cat');
                    // Verificar si get_term_link dio error
                    if (is_wp_error($category_url)) {
                       $category_url = '#error-getting-category-url'; // Usar un placeholder en caso de error
                    }
                ?>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'bano', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-bano-Adrihosan.jpg" alt="Suelo imitación madera en baños" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Baños</h3></div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'cocina', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-cocina-Adrihosan.jpg" alt="Suelo porcelánico imitación madera en cocinas" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Cocinas</h3></div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'terraza', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-terraza-Adrihosan.jpg" alt="Suelo imitación madera en terrazas y exterior" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Terrazas y Exterior</h3></div>
                </a>
                 <a href="<?php echo esc_url(add_query_arg('estancia', 'piscina', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-piscina-Adrihosan.jpg" alt="Suelo imitación madera para piscinas" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Piscinas</h3></div>
                </a>
             </div>
        </section>

   <section class="bho-filters-section">
            <div class="bho-filters-wrapper">
                <h2 class="bho-filters-main-title">Tu Búsqueda, Más Fácil</h2>

                <div class="bho-filter-group">
                    <h3 class="bho-filter-group-title">Acabados y Formatos</h3>
                    <div class="bho-filter-pills">
                        <?php // URL Rectificado ?>
                        <a href="<?php echo esc_url(add_query_arg('corte-azulejo', 'azulejo-rectificado', $category_url)); ?>" class="bho-filter-pill">Acabado Rectificado</a>
                        <?php // URL Espiga ?>
                        <a href="<?php echo esc_url(add_query_arg('estancia', 'espiga', $category_url)); ?>" class="bho-filter-pill">Formato Espiga</a>
                    </div>
                </div>

                <div class="bho-filter-group">
                    <h3 class="bho-filter-group-title">Elige tu Tono</h3>
                    <div class="bho-filter-pills">
                        <?php // URL Gris ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'gris', $category_url)); ?>" class="bho-filter-pill">Tonos Grises</a>
                        <?php // URL Nogal ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'nogal', $category_url)); ?>" class="bho-filter-pill">Tono Nogal</a>
                        <?php // URL Antracita ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'antracita', $category_url)); ?>" class="bho-filter-pill">Antracita</a>
                        <?php // URL Oak ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'oak', $category_url)); ?>" class="bho-filter-pill">Oak</a>
                        <?php // URL Natural ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'natural', $category_url)); ?>" class="bho-filter-pill">Natural</a>
                    </div>
                </div>

                <div class="bho-filter-group">
                    <h3 class="bho-filter-group-title">Elige por Material</h3>
                    <div class="bho-filter-pills">
                        <?php // URL Porcelánico ?>
                        <a href="<?php echo esc_url(add_query_arg('azulejo-tipo', 'suelo-porcelanico', $category_url)); ?>" class="bho-filter-pill">Gres Porcelánico (Máx. Resistencia)</a>
                    </div>
                </div>

            </div>
        </section>

    <div class="product-loop-header">
         <h2 class="product-loop-title" id="product-loop">Nuestro Catálogo de Suelos Imitación Madera</h2>
    </div>
    <?php
}

/**
 * Muestra el contenido DESPUÉS del loop de productos para la categoría Madera.
 */
// COMENTADO - Duplicado del controlador maestro (línea 113)
// add_action('woocommerce_after_shop_loop', 'adrihosan_wood_cat_after_loop_final', 35);
function adrihosan_wood_cat_after_loop_final() {
    // Verificar si estamos en la categoría correcta ANTES de hacer nada
    if (!is_product_category(2209)) {
        return; // Salir temprano si no es la categoría
    }
    ?>


   <section class="faq-section-common">
    <div class="faq-wrapper-common">
        <h2 class="faq-main-title-common">Resolvemos tus Dudas sobre Suelos de Madera Cerámica</h2>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Realmente parece madera natural? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Sí. La tecnología de impresión digital HD de última generación no solo copia la veta, sino que reproduce la textura y el relieve del nudo. El realismo es excepcional, incluso al tacto.</p></div>
        </div>
        <div class="faq-item-common">
            <button class="faq-question-common">¿Qué mantenimiento requiere? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Mínimo. A diferencia del parquet, no necesita lijado, barnizado ni ceras especiales. Se limpia fácilmente con agua y fregasuelos de pH neutro. Es su mayor ventaja.</p></div>
        </div>
        <div class="faq-item-common">
            <button class="faq-question-common">¿Es apto para suelo radiante? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Es ideal. El material porcelánico es un excelente conductor térmico, mucho mejor que la madera natural. Optimiza la eficiencia de los sistemas de calefacción por suelo radiante. Lo más importante en estos casos es usar un </strong>cemento cola Fléxible</strong>, ya que es el que debe absorber las dilataciones y contracciones producidas por la calefacción</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Qué es un suelo "rectificado" y por qué es importante? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Un suelo rectificado tiene los bordes cortados en un ángulo perfecto de 90 grados. Su gran ventaja es que permite una instalación con juntas mínimas (1-2 mm), logrando un efecto visual de superficie continua, mucho más realista y elegante.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Por qué hay tanta diferencia de precio? ¿Qué es mejor, porcelánico o gres? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>La diferencia está en el material. El <strong>Gres Porcelánico</strong> es mucho más denso, resistente a golpes y tiene una absorción de agua casi nula (<0.5%), lo que lo hace apto para todo: exterior, baños y cocinas. El gres de pasta roja es más poroso y económico, pero solo se recomienda para interiores de bajo tránsito. A largo plazo, el porcelánico es siempre una mejor inversión.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Qué debo saber si lo quiero para una terraza o piscina? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Para exterior, es fundamental que el suelo sea <strong>antideslizante Clase 3 (C3)</strong>. Esta es la normativa que garantiza la máxima seguridad en zonas húmedas como terrazas descubiertas o playas de piscina. Además, el porcelánico resiste las heladas y no pierde color con el sol.</p></div>
        </div>
        
        <div class="faq-item-common">
            <button class="faq-question-common">Los tonos grises son tendencia, pero... ¿se ensucian mucho? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Los tonos grises y claros son muy populares por la luz que aportan a estilos nórdicos o minimalistas. En contra de lo que se piensa, un acabado mate y con una veta suave es un gran aliado para disimular el polvo y las pelusas del día a día, a menudo más que un tono oscuro liso.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Es más complicado instalar un suelo en formato espiga? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Sí, la instalación del formato espiga (o <i>herringbone</i>) es más técnica y requiere un profesional experimentado, ya que los cortes y la alineación son más complejos. Sin embargo, el resultado estético es espectacular y aporta un dinamismo y una elegancia que lo diferencian de la instalación tradicional.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Se puede poner en la pared de la ducha o en el frontal de la cocina? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Absolutamente. Al ser porcelánico, su absorción de agua es nula, por lo que es 100% impermeable e inalterable al vapor, al agua directa y a las manchas de grasa o jabón. Es una de las soluciones más limpias y duraderas para estas zonas.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Puedo instalarlo sobre mi suelo antiguo? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>En la mayoría de los casos, sí. Si el suelo actual (terrazo, gres, etc.) está bien nivelado y firmemente adherido, se puede instalar el nuevo porcelánico encima usando un cemento cola flexible específico (tipo C2-S1). Esto ahorra los costes y el desescombro de la demolición.</p></div>
        </div>

    </div>
</section>

    <section id="contacto-experto-madera" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>¿Necesitas ayuda con tu suelo de madera?</h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposición</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20suelos%20imitaci%C3%B3n%20madera" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
             <?php 
             // Opcional: Descomenta la siguiente línea si quieres incluir el shortcode del formulario además de los iconos
             // echo '<div class="contact-form-container" style="margin-top: 30px;">' . do_shortcode('[contact-form-7 id="1234" title="Formulario de Contacto 1"]') . '</div>'; 
             ?>
        </div>
    </section>
    <?php
}

// =============================================================================
// FIN LANDING SUELO IMITACIÓN MADERA
// =============================================================================

/* ========================================================================== */
/* ESTILOS FINALES PARA LA TABLA DE COMPARACIÓN (MÓVIL) */
/* ========================================================================== */
add_action('wp_head', function() {
    // Solo aplicamos esto en la categoría Pilar Hidráulico (ID 4564)
    if ( is_product_category( 4564 ) ) {
        ?>
        <style>
        @media (max-width: 768px) {
            
            /* 1. OCULTAR EL TEXTO "VER OPCIONES" (Usando tu nueva clase) */
            .ocultar-en-movil {
                display: none !important;
            }

            /* 2. PONER LOS BOTONES EN FILA HORIZONTAL */
            .bhp-comparison-table tfoot tr {
                display: flex !important;
                flex-direction: row !important;
                width: 100% !important;
                gap: 10px !important;
                padding: 10px 0 !important;
                border: none !important;
            }

            /* 3. QUE CADA BOTÓN OCUPE EXACTAMENTE LA MITAD */
            .bhp-comparison-table tfoot td {
                display: block !important;
                width: 50% !important;
                flex: 1 1 50% !important; 
                padding: 0 !important;
                margin: 0 !important;
                border: none !important;
                background: transparent !important;
            }

            /* 4. LIMPIEZA DE CUALQUIER TEXTO AUTOMÁTICO */
            .bhp-comparison-table tfoot td::before {
                content: none !important;
                display: none !important;
            }

            /* 5. DISEÑO DE LOS BOTONES */
            .bhp-comparison-table tfoot .boton-adrihosan {
                width: 100% !important;
                display: flex !important;
                justify-content: center;
                align-items: center;
                height: 42px !important;
                font-size: 11px !important;
                margin: 0 !important;
                text-align: center !important;
                padding: 0 5px !important;
            }
        }
        </style>
        <?php
    }
}, 100);

/* ========================================================================== */
/* PÁGINA PILAR CERÁMICA (ID 62) - VERSIÓN MAESTRA TOTAL CON SEO DINÁMICO */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_ceramica_definitiva_controller' );

function adrihosan_ceramica_definitiva_controller() {
    if ( ! is_product_category( 62 ) || is_singular('product') ) {
        return;
    }

    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_ceramica_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_ceramica_inferior_final', 20 );
}

/* ========================================================================== */
/* EL CEREBRO SUPERIOR: HERO BLINDADO + FIX IMAGEN + TRANSPLANTE              */
/* ========================================================================== */

function adrihosan_ceramica_superior_final() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/IMAGEN-1920-X-600-3.jpg');">
        <div class="hero-content">
            <h1>CER&Aacute;MICA: EL ORIGEN DE TU REFORMA</h1>
            <p>Encuentra la base perfecta: desde pavimentos de alta resistencia hasta azulejos que cuentan historias.</p>
            <div class="hero-buttons">
                <a href="#catalogo-ceramica" class="hero-btn primary">Ver Cat&aacute;logo Completo</a>
                <a href="#dos-pilares" class="hero-btn secondary">Explorar Opciones</a>
            </div>
        </div>
    </section>

    <!-- INTRO TEXT -->
    <section class="intro-text-section adrihosan-full-width-block">
        <div class="intro-text-wrapper">
            <p>En Adrihosan hemos seleccionado la mejor cer&aacute;mica t&eacute;cnica y decorativa para cada rinc&oacute;n de tu hogar. Desde pavimentos porcel&aacute;nicos de alta resistencia hasta azulejos de dise&ntilde;o que transforman estancias. <strong>Selecciona el uso principal</strong> para ver las soluciones que mejor se adaptan a tu espacio.</p>
        </div>
    </section>

    <!-- 2. LOS DOS PILARES (Jerarquía Principal) -->
    <section class="pilares-section adrihosan-full-width-block" id="dos-pilares">
        <div class="pilares-wrapper">
            <div class="pilares-grid">
                <!-- BLOQUE A: PAVIMENTOS -->
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/" class="pilar-card">
                    <div class="pilar-image">
                        <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg" alt="Pavimentos y suelos cerámicos">
                    </div>
                    <div class="pilar-content">
                        <h2>PAVIMENTOS</h2>
                        <p class="pilar-subtitle">Suelos que lo aguantan todo</p>
                        <p class="pilar-description">Porcel&aacute;nicos, gres y soluciones de exterior.</p>
                        <span class="pilar-cta">Ver Pavimentos →</span>
                    </div>
                </a>
                <!-- BLOQUE B: AZULEJOS -->
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/" class="pilar-card">
                    <div class="pilar-image">
                        <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/Azulejos-Adrihosan.jpg" alt="Azulejos y revestimientos">
                    </div>
                    <div class="pilar-content">
                        <h2>AZULEJOS</h2>
                        <p class="pilar-subtitle">Paredes que inspiran</p>
                        <p class="pilar-description">Azulejos decorativos, metro y texturas.</p>
                        <span class="pilar-cta">Ver Azulejos →</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO DE ADRI (Asesoramiento Experto) -->
    <section class="consejo-adri-section adrihosan-full-width-block">
        <div class="consejo-adri-wrapper">
            <div class="consejo-adri-content">
                <div class="consejo-icon">💡</div>
                <div class="consejo-text">
                    <p><strong>&iquest;Dudas con la normativa?</strong> No todos los suelos sirven para exterior, ni todos los azulejos aguantan la humedad del ba&ntilde;o. Si no quieres comprar dos veces, escr&iacute;benos. <strong>Te asesoramos gratis.</strong></p>
                </div>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20asesoramiento%20sobre%20cerámica" class="consejo-btn">Preguntar a un experto</a>
            </div>
        </div>
    </section>

    <!-- 4. SELECCIÓN POR ESTANCIA -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estancias-ceramica">
        <div class="ap-inspiration-wrapper">
            <h2>&iquest;Para qu&eacute; estancia lo buscas?</h2>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-bano-600-x-400-1.jpg" alt="Azulejos para baño">
                    <div class="ap-card-content">
                        <h3>Ba&ntilde;o</h3>
                        <p>Resistencia y estilo</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cocina-600-x-400.jpg" alt="Azulejos para cocina">
                    <div class="ap-card-content">
                        <h3>Cocina</h3>
                        <p>F&aacute;cil limpieza</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-terraza-600-x-400.jpg" alt="Azulejos para terraza">
                    <div class="ap-card-content">
                        <h3>Terraza</h3>
                        <p>Antideslizante exterior</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejos-piscinas-adrihosan.jpg" alt="Azulejos para piscina">
                    <div class="ap-card-content">
                        <h3>Piscina</h3>
                        <p>Resistencia total al agua</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. SELECCIÓN POR EFECTO VISUAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <h2>Elige el Efecto Visual</h2>
                <p>Encuentra el acabado que mejor se adapta a tu estilo</p>
            </div>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" alt="Efecto madera">
                    <div class="ap-card-content">
                        <h3>Efecto Madera</h3>
                        <p>Calidez natural</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" alt="Efecto mármol">
                    <div class="ap-card-content">
                        <h3>Efecto M&aacute;rmol</h3>
                        <p>Lujo atemporal</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" alt="Efecto piedra">
                    <div class="ap-card-content">
                        <h3>Efecto Piedra</h3>
                        <p>Autenticidad r&uacute;stica</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" alt="Efecto cemento">
                    <div class="ap-card-content">
                        <h3>Efecto Cemento</h3>
                        <p>Estilo industrial</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. FILTROS POR FORMATO (Pestañas visuales) -->
    <section class="formatos-section adrihosan-full-width-block">
        <div class="formatos-wrapper">
            <h2>Explora por Formato</h2>
            <div class="formatos-tabs">
                <div class="formato-group">
                    <h4>Formatos de Suelo</h4>
                    <div class="formato-buttons">
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/" class="hero-btn primary">Suelo Porcel&aacute;nico</a>
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/" class="hero-btn primary">Gran Formato</a>
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/" class="hero-btn primary">Porcel&aacute;nico Extrafino</a>
                    </div>
                </div>
                <div class="formato-group">
                    <h4>Tipos de Azulejo</h4>
                    <div class="formato-buttons">
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/" class="hero-btn primary">Azulejo Metro</a>
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/" class="hero-btn primary">Hexagonales</a>
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/" class="hero-btn primary">Decorativos</a>
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejo-mosaico/" class="hero-btn primary">Mosaicos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. DESTINO MÓVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-ceramica" class="solo-movil-filtro"></div>
    <div class="filter-container-master"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 8. TÍTULO CATÁLOGO -->
    <div id="catalogo-ceramica" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo Completo de Cer&aacute;mica</h2>
    </div>
    <?php
}

/**
 * BLOQUE INFERIOR: SEO DINÁMICO, FAQs y Contacto
 */
function adrihosan_ceramica_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( 62 ); ?>
        </div>
    </section>

    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Cerámica</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué mantenimiento requiere el suelo porcelánico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Solo requiere limpieza regular con agua y detergente neutro. No necesita ceras ni barnices.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Es necesario dejar junta en azulejos rectificados?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sí, es vital dejar una junta mínima de entre 1.5mm y 2mm para absorber dilataciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan">
                <div><h2>¿Necesitas asesoramiento sincero?<span>Soy Ricardo, y estoy aquí para ayudarte.</span></h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20cerámica" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

add_action( 'wp_head', 'adrihosan_kill_theme_stuff_cat62', 999 );
function adrihosan_kill_theme_stuff_cat62() {
    if ( is_product_category( 62 ) ) {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper { display: none !important; }</style>';
    }
}

/* ========================================================================== */
/* PÁGINA PILAR PORCELÁNICO (ID 2410) - VERSIÓN MAESTRA 2026 */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_pilar_porcelanico_controller' );

function adrihosan_pilar_porcelanico_controller() {
    // Si NO estamos en la categoría 2410, no hacemos nada.
    if ( ! is_product_category( 2410 ) || is_singular('product') ) {
        return;
    }

    // 1. LIMPIEZA TÉCNICA (Eliminar elementos por defecto)
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    // 2. INYECCIÓN DE CONTENIDO PERSONALIZADO
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_porcelanico_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_porcelanico_inferior_final', 20 );
    
    // 3. CSS DE EMERGENCIA (Para ocultar filtros nativos del tema y evitar el desastre visual)
    add_action( 'wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper { display: none !important; }</style>';
    });
}

/**
 * BLOQUE SUPERIOR: Hero, Navegación Visual, Filtros
 */
function adrihosan_porcelanico_superior_final() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/IMAGEN-1920-X-600-3.jpg');">
        <div class="hero-content">
            <h1>Gres Porcel&aacute;nico: La Base de tu Hogar</h1>
            <p>Resistencia extrema, dise&ntilde;o impecable y mantenimiento cero. El suelo definitivo.</p>
            <div class="hero-buttons">
                <a href="#catalogo-porcelanico" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#estancias-porcelanico" class="hero-btn secondary">Filtrar por Uso</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACIÓN POR ESTANCIA -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estancias-porcelanico">
        <div class="ap-inspiration-wrapper">
            <h2>&iquest;D&oacute;nde lo vas a instalar?</h2>
            <p class="section-subtitle">Encuentra el porcel&aacute;nico ideal seg&uacute;n la estancia de tu hogar</p>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/estancia-cocina/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cocina-600-x-400.jpg" alt="Porcelánico para cocina">
                    <div class="ap-card-content">
                        <h3>Cocina</h3>
                        <p>Resistente a manchas y f&aacute;cil limpieza</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/estancia-bano/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-bano-600-x-400-1.jpg" alt="Porcelánico para baño">
                    <div class="ap-card-content">
                        <h3>Ba&ntilde;o</h3>
                        <p>Antideslizante y resistente a la humedad</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/estancia-terraza/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-terraza-600-x-400.jpg" alt="Porcelánico para exterior">
                    <div class="ap-card-content">
                        <h3>Exterior</h3>
                        <p>Resistente a heladas y rayos UV</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/estancia-salon/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg" alt="Porcelánico para salón">
                    <div class="ap-card-content">
                        <h3>Sal&oacute;n</h3>
                        <p>Elegancia y durabilidad para el d&iacute;a a d&iacute;a</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. NAVEGACIÓN POR EFECTO -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <h2>Elige el Efecto</h2>
                <p>Descubre todas las imitaciones disponibles en gres porcel&aacute;nico</p>
            </div>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" alt="Porcelánico efecto madera">
                    <div class="ap-card-content">
                        <h3>Efecto Madera</h3>
                        <p>Calidez sin mantenimiento</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" alt="Porcelánico efecto mármol">
                    <div class="ap-card-content">
                        <h3>Efecto M&aacute;rmol</h3>
                        <p>Lujo asequible y duradero</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" alt="Porcelánico efecto piedra">
                    <div class="ap-card-content">
                        <h3>Efecto Piedra</h3>
                        <p>Natural y atemporal</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" alt="Porcelánico efecto cemento">
                    <div class="ap-card-content">
                        <h3>Efecto Cemento</h3>
                        <p>Estilo industrial y moderno</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> &iquest;Buscas un suelo sin juntas visibles? Selecciona el filtro <strong>&quot;Rectificado&quot;</strong> y pulsa <strong>&quot;FILTRAR&quot;</strong>.</p>
    </div>

    <!-- 5. DESTINO MÓVIL + WIDGET -->
    <div id="destino-filtro-adria-porcelanico" class="solo-movil-filtro"></div>
    <div class="filter-container-master"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <!-- 6. COLECCIONES ESPECIALES -->
    <section class="collections-section">
        <h4>Colecciones Especiales</h4>
        <div class="collections-buttons">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/" class="hero-btn primary">Gran Formato</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/" class="hero-btn primary">Porcel&aacute;nico Extrafino</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/" class="hero-btn primary">Antideslizante C3</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/textura-brillo-2/" class="hero-btn primary">Acabado Pulido</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-rusticos/" class="hero-btn primary">Estilo R&uacute;stico</a>
        </div>
    </section>

    <!-- 7. TÍTULO CATÁLOGO -->
    <div id="catalogo-porcelanico" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Gres Porcel&aacute;nico</h2>
    </div>
    <?php
}

/**
 * BLOQUE INFERIOR: SEO Dinámico, FAQs y Contacto
 */
function adrihosan_porcelanico_inferior_final() {
    // SEO: Contenido dinámico desde WooCommerce
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es recomendable el suelo porcel&aacute;nico para cocinas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es la mejor opci&oacute;n. Los <strong>suelos de cocina porcel&aacute;nicos</strong> no absorben grasas, aceites ni manchas de vino. Son higi&eacute;nicos y soportan la ca&iacute;da de objetos pesados mejor que cualquier otro material.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ten&eacute;is modelos que imiten al m&aacute;rmol pero sean resistentes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Por supuesto. El <strong>porcel&aacute;nico imitaci&oacute;n m&aacute;rmol</strong> consigue la est&eacute;tica lujosa de la piedra natural (con sus vetas y brillo) pero sin la delicadeza ni el mantenimiento que exige el m&aacute;rmol real. No se mancha con &aacute;cidos como el lim&oacute;n.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre porcel&aacute;nico y gres normal?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El porcel&aacute;nico se cuece a mayor temperatura y tiene una absorci&oacute;n de agua casi nula, lo que lo hace mucho m&aacute;s duro y resistente a las heladas. Es apto para cualquier uso. El gres normal (pasta roja) es m&aacute;s blando y solo se recomienda para interiores de menor tr&aacute;nsito.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is ofertas o ten&eacute;is restos de lote?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, disponemos de una secci&oacute;n de <a href="https://www.adrihosan.com/categoria-producto/suelos-porcelanicos-ofertas/" style="color: #3f6f7b; text-decoration: underline;">suelos porcel&aacute;nicos ofertas</a> donde encontrar&aacute;s materiales de primera calidad a precios reducidos por fin de stock o promociones puntuales de f&aacute;brica.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo usar el mismo suelo para la piscina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, siempre que elijas un <strong>porcel&aacute;nico antideslizante con clasificaci&oacute;n C3</strong> y resistencia al hielo. Tenemos modelos espec&iacute;ficos para coronaci&oacute;n de piscina y playa que combinan seguridad y est&eacute;tica.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en porcelánico">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con el porcel&aacute;nico?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Ll&aacute;manos</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=34961957136" class="contact-option-common whatsapp">
                    <div class="icon">💬</div>
                    <div class="label">WhatsApp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

/* ========================================================================== */
/* 1. PÁGINA PILAR GRAN FORMATO (ID 1844) - VERSIÓN FINAL */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_pilar_gran_formato_controller' );

function adrihosan_pilar_gran_formato_controller() {
    // Si NO estamos en la categoría 1844, salir.
    if ( ! is_product_category( 1844 ) || is_singular('product') ) {
        return;
    }

    // Limpieza Técnica
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    // Inyección de Contenido
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_gran_formato_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_gran_formato_inferior_final', 20 );
}

function adrihosan_gran_formato_superior_final() {
    ?>
    <section class="cer-hero-section adrihosan-full-width-block" style="position: relative; background-color: #102e35; background-image: linear-gradient(rgba(16, 46, 53, 0.35), rgba(16, 46, 53, 0.35)), url('https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg'); background-position: center center; background-size: cover; color: #fff; padding: 80px 20px; text-align: center;">
        <div class="cer-hero-content">
            <h1 style="font-family: 'Poppins', sans-serif; color:#4dd2d0; font-weight:800; font-size: 2.8rem; text-shadow: 0 2px 8px rgba(0,0,0,0.6);">Porcelánico Gran Formato</h1>
            <p style="font-family: 'Poppins'; font-size: 1.2rem; max-width: 800px; margin: 0 auto; text-shadow: 0 1px 4px rgba(0,0,0,0.5);">La revolución del espacio. Superficies continuas, mínimas juntas y máxima elegancia.</p>
            <div class="cer-hero-buttons" style="margin-top:35px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="#catalogo-xl-foco" class="btn-adri-master">Ver Catálogo XL</a>
                <a href="#bloque-filtros-visuales" class="btn-adri-master" style="background:transparent !important; border:2px solid #4dd2d0 !important; color:#4dd2d0 !important;">Filtrar por Estilo</a>
            </div>
        </div>
    </section>

    <div id="bloque-filtros-visuales" style="padding-top: 50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">Elige el Estilo</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/estilo-imitacion-marmol/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Mármol</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-cemento/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Cemento</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-piedra/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Piedra</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-suelo-imitacion-madera/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Madera</h3></a>
        </div>
    </div>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Para encontrar tu mosaico ideal, selecciona las características que buscas y no olvides pulsar el botón <strong>"FILTRAR"</strong> para ver los resultados.</p>
    </div>

    <div id="destino-filtro-adria-gran-formato" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <div style="text-align: center; margin: 60px 0;">
        <h4 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; margin-bottom:30px; text-transform:uppercase; letter-spacing: 1px;">Medidas y Acabados Populares</h4>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; max-width: 1100px; margin: 0 auto;">
            <a href="https://www.adrihosan.com/atributo/formato-azulejo/60x120/" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">60x120 cm</a>
            <a href="https://www.adrihosan.com/atributo/formato-azulejo/120x120/" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">120x120 cm</a>
            <a href="https://www.adrihosan.com/atributo/azulejo-tipo/lamina-porcelanica/" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">Lámina XXL</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/textura-brillo/" class="btn-adri-master">Acabado Pulido</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/?filter_acabado=mate" class="btn-adri-master">Acabado Mate</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/slip-si/" class="btn-adri-master">Antideslizante (C3)</a>
        </div>
    </div>

    <div id="catalogo-xl-foco" style="scroll-margin-top: 140px; text-align: center; padding: 50px 0; border-top: 1px solid #eee;">
        <h2 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; text-transform: uppercase;">Catálogo Gran Formato</h2>
    </div>

    <style>.btn-adri-master { display: inline-block !important; background: #4dd2d0 !important; color: #fff !important; padding: 14px 24px !important; border-radius: 4px !important; text-decoration: none !important; font-family: 'Poppins', sans-serif !important; font-weight: 700 !important; text-transform: uppercase !important; font-size: 13px !important; transition: all 0.3s ease !important; box-shadow: 0 4px 6px rgba(0,0,0,0.1); } .btn-adri-master:hover { background: #3f6f7b !important; transform: translateY(-3px); color: #fff !important; } #bloque-filtros-visuales img:hover, .cer-hero-buttons img:hover { transform: scale(1.03); box-shadow: 0 8px 15px rgba(0,0,0,0.15); } @media (max-width: 768px) { .solo-movil-filtro { display: block !important; } #destino-filtro-adria-gran-formato .wpc-filters-open-button-container, #destino-filtro-adria-gran-formato .wpc-filters-open-button-container a, #destino-filtro-adria-gran-formato a.wpc-filters-open-button { display: block !important; visibility: visible !important; opacity: 1 !important; position: static !important; margin: 0 auto !important; width: 90% !important; background: #4dd2d0 !important; color: #fff !important; font-family: 'Poppins', sans-serif !important; font-weight: 800 !important; text-transform: uppercase !important; border-radius: 4px !important; padding: 15px 0 !important; text-align: center !important; border: none !important; box-shadow: 0 4px 10px rgba(77, 210, 208, 0.3) !important; } }</style>
    <script>(function($){"use strict";function moverBotonFiltroXL(){var $bot=$('.wpc-filters-open-button-container');var $hogar=$('#destino-filtro-adria-gran-formato');if($bot.length&&$hogar.length){if($hogar.children().length>0)return;var $el=$bot.first();$el.appendTo($hogar);$el.find('a').text('FILTRAR GRAN FORMATO');$('.wpc-filters-open-button-container').not($el).hide();}}$(document).ready(moverBotonFiltroXL);setTimeout(moverBotonFiltroXL,1500);function adrihosanFuerzaScrollXL(){var $dest=$('#catalogo-xl-foco');if($dest.length){$('html, body').animate({scrollTop:$dest.offset().top-120},800);}}$(document).on('click','.wpc-filters-submit-button',function(){setTimeout(adrihosanFuerzaScrollXL,1000);});$(document).on('feAfterFilterApply',function(){setTimeout(adrihosanFuerzaScrollXL,500);});})(jQuery);</script>
    <?php
}

function adrihosan_gran_formato_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( get_queried_object_id() ); ?>
        </div>
    </section>
    <section class="faq-section adrihosan-full-width-block" style="background: #f9f9f9; padding: 80px 0; font-family: 'Poppins'; border-top: 1px solid #eee;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; margin-bottom: 50px; font-weight: 800; font-size: 2.2rem; color: #102e35;">Preguntas Frecuentes sobre Gran Formato</h2>
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);"><p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Es difícil la instalación?</p><p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Requiere profesionales. Usa doble encolado y cuñas de nivelación.</p></div>
        </div>
    </section>
    <?php
}

/* ========================================================================== */
/* 2. PÁGINA PILAR PORCELÁNICO EXTRAFINO (ID 2510) - VERSIÓN FINAL */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_pilar_extrafino_controller' );

function adrihosan_pilar_extrafino_controller() {
    if ( ! is_product_category( 2510 ) || is_singular('product') ) {
        return;
    }
    // Limpieza Técnica
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    // Inyección de Contenido
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_extrafino_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_extrafino_inferior_final', 20 );
}

function adrihosan_extrafino_superior_final() {
    ?>
    <section class="cer-hero-section adrihosan-full-width-block" style="position: relative; background-color: #102e35; background-image: linear-gradient(rgba(16, 46, 53, 0.50), rgba(16, 46, 53, 0.50)), url('https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg'); background-position: center center; background-size: cover; color: #fff; padding: 80px 20px; text-align: center;">
        <div class="cer-hero-content">
            <h1 style="font-family: 'Poppins', sans-serif; color:#4dd2d0; font-weight:800; font-size: 2.8rem; text-shadow: 0 2px 8px rgba(0,0,0,0.6);">Porcelánico Extrafino: Reforma Sin Escombros</h1>
            <p style="font-family: 'Poppins'; font-size: 1.2rem; max-width: 800px; margin: 0 auto; text-shadow: 0 1px 4px rgba(0,0,0,0.5);">Cambia tu suelo sin levantar el antiguo. Máxima dureza en mínimo espesor (3mm, 5mm, 6mm).</p>
            <div class="cer-hero-buttons" style="margin-top:35px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="#catalogo-extrafino-foco" class="btn-adri-master">Ver Catálogo</a>
                <a href="#bloque-filtros-visuales" class="btn-adri-master" style="background:transparent !important; border:2px solid #4dd2d0 !important; color:#4dd2d0 !important;">Filtrar por Estilo</a>
            </div>
        </div>
    </section>

    <div id="bloque-filtros-visuales" style="padding-top: 50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">Elige el Acabado de tu Reforma</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/estilo-suelos-imitacion-marmol/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Mármol</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-cemento/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Cemento</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/?filter_efecto=piedra" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Piedra</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/estilo-basicos/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/porcelanico-gran-formato-colores-puros.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Colores Puros</h3></a>
        </div>
    </div>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona el acabado y espesor que necesitas, y recuerda pulsar <strong>"FILTRAR"</strong> para ver los porcelánicos disponibles.</p>
    </div>

    <div id="destino-filtro-adria-extrafino" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <div id="catalogo-extrafino-foco" style="scroll-margin-top: 140px; text-align: center; padding: 50px 0; border-top: 1px solid #eee;">
        <h2 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; text-transform: uppercase;">Catálogo Porcelánico Extrafino</h2>
    </div>


    <?php
}

function adrihosan_extrafino_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( get_queried_object_id() ); ?>
        </div>
    </section>
    <section class="faq-section adrihosan-full-width-block" style="background: #f9f9f9; padding: 80px 0; font-family: 'Poppins'; border-top: 1px solid #eee;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; margin-bottom: 50px; font-weight: 800; font-size: 2.2rem; color: #102e35;">Preguntas Frecuentes sobre Lámina Porcelánica</h2>
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);"><p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Qué espesor debo elegir?</p><p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Para paredes 3mm. Para suelos (pavimento), recomendamos 5mm o 6mm.</p></div>
        </div>
    </section>
    <section class="contact-help-common adrihosan-full-width-block" style="background: #102e35; color: #fff; padding: 90px 0;">
        <div class="contact-help-wrapper" style="max-width: 1150px; margin: 0 auto; padding: 0 25px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
            <div class="contact-intro" style="display: flex; align-items: center; gap: 30px; flex: 1; min-width: 320px;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan" style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; border: 4px solid #4dd2d0; flex-shrink: 0; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                <div>
                    <h2 style="color: #4dd2d0; margin-bottom: 12px; font-size: 2.4rem; font-weight: 800; font-family: 'Poppins', sans-serif;">¿Dudas técnicas?</h2>
                    <p style="font-size: 1.2rem; line-height: 1.6; font-family: 'Poppins', sans-serif; opacity: 0.9;">Soy Ricardo. El extrafino requiere una instalación precisa. Llámame al <strong>96 195 71 36</strong>.</p>
                </div>
            </div>
            <div class="contact-options-grid-common" style="display: flex; gap: 20px;">
                <a href="tel:+34961957136" style="background: #4dd2d0; color: #102e35; padding: 20px 40px; border-radius: 8px; text-decoration: none; font-weight: 800; text-align: center; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(77, 210, 208, 0.3);">Llamar</a>
                <a href="https://api.whatsapp.com/send?phone=34961957136" style="background: #25d366; color: #fff; padding: 20px 40px; border-radius: 8px; text-decoration: none; font-weight: 800; text-align: center; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);">WhatsApp</a>
            </div>
        </div>
    </section>
    <?php
}

/* ========================================================================== */
/* 3. PÁGINA PILAR AZULEJO METRO (ID 2093) - VERSIÓN FINAL */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_pilar_metro_controller' );

function adrihosan_pilar_metro_controller() {
    if ( ! is_product_category( 2093 ) || is_singular('product') ) {
        return;
    }
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    add_action( 'woocommerce_before_shop_loop', 'adrihosan_metro_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_metro_inferior_final', 20 );

    // Cargar CSS específico de la categoría inline
    add_action( 'wp_head', 'adrihosan_metro_cargar_css', 99 );
}

function adrihosan_metro_cargar_css() {
    $css_file = get_stylesheet_directory() . '/category-2093.css';
    if ( file_exists( $css_file ) ) {
        echo '<style id="cat-2093-css">' . file_get_contents( $css_file ) . '</style>';
    }
}

function adrihosan_metro_superior_final() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/azulejo-metro-adrihosan.jpg');">
        <div class="hero-content">
            <h1>Azulejo Metro: El Icono del Dise&ntilde;o</h1>
            <p>Del metro de Par&iacute;s a tu hogar. El revestimiento biselado que aporta luz, car&aacute;cter y un estilo atemporal.</p>
            <div class="hero-buttons">
                <a href="#catalogo-metro-foco" class="hero-btn primary">Ver Colecci&oacute;n</a>
                <a href="#estilos-metro" class="hero-btn secondary">Ver Colores</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACIÓN POR ESTILO -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-metro">
        <div class="ap-inspiration-wrapper">
            <h2>Elige tu Estilo</h2>
            <p class="section-subtitle">Selecciona el acabado que mejor encaje con tu proyecto</p>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/tono-blanco/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejo-metro-blanco-adrihosan.jpg" alt="Azulejo metro blanco biselado">
                    <div class="ap-card-content">
                        <h3>Blanco Cl&aacute;sico</h3>
                        <p>El original atemporal</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/tono-negro/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejo-metro-negro-adrihosan.jpg" alt="Azulejo metro negro mate">
                    <div class="ap-card-content">
                        <h3>Negro Industrial</h3>
                        <p>Car&aacute;cter y elegancia</p>
                    </div>
                </a>
                <a href="#catalogo-metro-foco" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejo-metro-colores-adrihosan.jpg" alt="Azulejo metro colores variados">
                    <div class="ap-card-content">
                        <h3>A Todo Color</h3>
                        <p>Personaliza tu espacio</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/textura-mate/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejo-metro-mate-adrihosan.jpg" alt="Azulejo metro acabado mate">
                    <div class="ap-card-content">
                        <h3>Acabado Mate</h3>
                        <p>Tendencia actual</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Selecciona el color, formato o acabado que buscas y recuerda pulsar el bot&oacute;n <strong>&quot;FILTRAR&quot;</strong> para ver los azulejos disponibles.</p>
    </div>

    <!-- 4. DESTINO MÓVIL + WIDGET -->
    <div id="destino-filtro-adria-metro" class="solo-movil-filtro"></div>
    <div class="filter-container-master"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. COLECCIONES / LO MÁS BUSCADO -->
    <section class="collections-section">
        <h4>Lo m&aacute;s buscado</h4>
        <div class="collections-buttons">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/ver-formato-7-5x15/" class="hero-btn primary">7.5x15 cm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/ver-formato-10x20/" class="hero-btn primary">10x20 cm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/ver-formato-10x30/" class="hero-btn primary">10x30 cm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/textura-brillo-2/" class="hero-btn primary">Brillo</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/textura-mate/" class="hero-btn primary">Mate</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/ver-estilo-biselado/" class="hero-btn primary">Biselado</a>
        </div>
    </section>

    <!-- 6. TÍTULO CATÁLOGO -->
    <div id="catalogo-metro-foco" class="product-loop-header">
        <h2 class="product-loop-title">Colecci&oacute;n Azulejo Metro</h2>
    </div>
    <?php
}

function adrihosan_metro_inferior_final() {
    // SEO: Contenido din&aacute;mico desde WooCommerce
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejo Metro</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden colocar en el suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Por norma general, no. El azulejo metro cl&aacute;sico es de pasta blanca o roja, dise&ntilde;ado exclusivamente como revestimiento para paredes. Sin embargo, en Adrihosan disponemos de modelos espec&iacute;ficos fabricados en porcel&aacute;nico que s&iacute; son aptos para pavimento. Revisa siempre la ficha t&eacute;cnica antes de comprar.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son aptos para el interior de la ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, absolutamente. Al ser piezas esmaltadas, son impermeables y protegen perfectamente la pared de la humedad. Son una de las opciones m&aacute;s higi&eacute;nicas y duraderas para zonas mojadas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El biselado hace que sean dif&iacute;ciles de limpiar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es un mito com&uacute;n, pero falso. El bisel (el borde inclinado) es suave y no tiene rincones donde la suciedad se incruste. Se limpian con la misma facilidad que un azulejo liso: agua y jab&oacute;n neutro son suficientes.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; color de junta recomiendas para el azulejo blanco?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del efecto que busques. Si quieres amplitud y limpieza visual, usa una junta blanca. Si buscas el aut&eacute;ntico look industrial o &quot;tipo metro&quot; de Nueva York, atr&eacute;vete con una junta negra o gris antracita para resaltar el patr&oacute;n de colocaci&oacute;n.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hay otras formas de colocaci&oacute;n adem&aacute;s de la &quot;tipo ladrillo&quot;?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>&iexcl;Por supuesto! Aunque la colocaci&oacute;n trabada (tipo ladrillo) es la ic&oacute;nica, hoy es tendencia colocarlos en espiga (herringbone), en vertical (para ganar altura visual) o totalmente alineados (para un toque moderno y ordenado).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejo metro">
                <div>
                    <h2>&iquest;Buscas un color espec&iacute;fico?
                        <span>Soy Ricardo. Tenemos much&iacute;simos colores.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">&#x1F4CD;</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">&#x1F4BB;</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">&#x1F4DE;</div>
                    <div class="label">Ll&aacute;manos</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=34961957136" class="contact-option-common whatsapp">
                    <div class="icon">&#x1F4AC;</div>
                    <div class="label">WhatsApp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

/* ========================================================================== */
/* 4. LIMPIEZA GLOBAL (UNIFICADA) */
/* ========================================================================== */
add_action( 'wp_head', 'adrihosan_fix_category_styles_global', 99 );
function adrihosan_fix_category_styles_global() {
    if ( is_product_category( array( 1844, 2510, 2093, 4862, 4865, 4866, 4869, 2082, 4876, 2083, 4806, 1789 ) ) ) {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper { display: none !important; }</style>';
    }
}

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
/******************************************************************************
 * AZULEJOS BAÑO (ID: 1789)
 * =============================================================================
 ******************************************************************************/

function adrihosan_azulejos_bano_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/IMAGEN-1920-X-600-3.jpg');">
        <div class="hero-content">
            <h1>Azulejos de Ba&ntilde;o: Dise&ntilde;os que crean tu zona de relax</h1>
            <p>Desde porcel&aacute;nicos antideslizantes para la ducha hasta revestimientos que ampl&iacute;an visualmente tu aseo.</p>
            <div class="hero-buttons">
                <a href="#catalogo-bano" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20de%20baño" class="hero-btn secondary" target="_blank">Ayuda por WhatsApp</a>
            </div>
        </div>
    </section>
    
    <!-- 2. NAVEGACIÓN POR ESTILO (Con imágenes) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-bano">
        <div class="ap-inspiration-wrapper">
            <h2>¿Qué estilo buscas para tu baño?</h2>
            <p class="section-subtitle">Explora nuestras colecciones y encuentra el acabado perfecto para tu proyecto</p>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/estilo-suelo-imitacion-madera/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Azulejos efecto madera para baño">
                    <div class="ap-card-content">
                        <h3>Efecto Madera</h3>
                        <p>Calidez total sin el mantenimiento de la madera real</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/estilo-suelos-imitacion-marmol/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-1.jpg" alt="Azulejos efecto mármol para baño">
                    <div class="ap-card-content">
                        <h3>Efecto Mármol</h3>
                        <p>Lujo atemporal en vetas naturales</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/estilo-piedra/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-2.jpg" alt="Azulejos efecto piedra para baño">
                    <div class="ap-card-content">
                        <h3>Efecto Piedra</h3>
                        <p>Conexión natural y textura auténtica</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/estilo-cemento/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-bano.jpg" alt="Azulejos efecto cemento para baño">
                    <div class="ap-card-content">
                        <h3>Efecto Cemento</h3>
                        <p>Look industrial minimalista</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-bano-1.jpg" alt="Azulejos hidráulicos para baño">
                    <div class="ap-card-content">
                        <h3>Hidráulicos</h3>
                        <p>El toque vintage con chispa</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
    <!-- 3. SOLUCIONES RÁPIDAS (Con imágenes) -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <h2>Diseñamos según tu espacio</h2>
                <p>Encuentra la solución perfecta para cada zona de tu baño</p>
            </div>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-bano-3.jpg" alt="Soluciones para baños pequeños">
                    <div class="ap-card-content">
                        <h3>Baños Pequeños</h3>
                        <p>Formatos que amplían visualmente el espacio</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-15x15/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-1.jpg" alt="Azulejos para zona de ducha">
                    <div class="ap-card-content">
                        <h3>Zona de Ducha</h3>
                        <p>Materiales C3 antideslizantes para máxima seguridad</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/AMB-CANET-22-AQUA-BRUNEI-L25-BLANCO-WEB-1-optimized.jpg" alt="Baños modernos">
                    <div class="ap-card-content">
                        <h3>Baños Modernos</h3>
                        <p>Grandes formatos y relieves de última tendencia</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> Selecciona las caracter&iacute;sticas que buscas y recuerda pulsar el bot&oacute;n <strong>&quot;FILTRAR&quot;</strong> para ver los azulejos disponibles.</p>
    </div>

    <!-- 5. DESTINO MÓVIL + WIDGET -->
    <div id="destino-filtro-adria-bano" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>
    
    <!-- 6. TÍTULO CATÁLOGO -->
    <div id="catalogo-bano" class="product-loop-header">
        <h2 class="product-loop-title">Catálogo de Azulejos para Baño</h2>
    </div>
    <?php
}

function adrihosan_azulejos_bano_contenido_inferior() {
    ?>
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- 8. FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos de Baño</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Es mejor el porcelánico o la pasta blanca para las paredes del baño?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La pasta blanca es el revestimiento estrella para paredes interiores por su ligereza y su capacidad para ofrecer colores más puros y texturas sedosas. El porcelánico, debido a su nula porosidad, es la opción técnica superior para el interior de la zona de ducha y para el suelo, donde la resistencia al agua y al impacto es crítica.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué tipo de azulejo de baño es más fácil de limpiar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los azulejos de gran formato con acabado liso o satinado son los más sencillos de mantener, ya que reducen drásticamente el número de juntas donde se acumula la suciedad. Ricardo recomienda evitar los acabados extremadamente rugosos (antideslizantes C3) en paredes, ya que atrapan el jabón y la cal, dificultando la higiene diaria sin aportar ningún beneficio de seguridad en esa zona.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Puedo colocar azulejos de baño yo mismo si soy un aficionado al bricolaje?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sí, siempre que utilices las herramientas y los materiales de colocación adecuados para cada soporte. En Adrihosan recomendamos a los Profesionales del DIY el uso de sistemas de nivelación para evitar "cejas" en piezas de gran formato y el uso de cementos cola específicos para porcelánico de primera calidad.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Cómo elijo los azulejos para baños pequeños para que parezcan más grandes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La estrategia ganadora consiste en utilizar el azulejo baño blanco o tonos muy claros en formato grande y rectificado, lo que genera una sensación de continuidad visual. Además, colocar los azulejos de forma horizontal ayuda a ensanchar visualmente las paredes, reduciendo ese sentimiento de agobio que suele tener el reformista primerizo ante espacios reducidos.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Por qué es importante que la fabricación sea nacional?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La cerámica española destaca internacionalmente por sus estándares de primera calidad y su estabilidad en los calibres. Comprar producto nacional te asegura que, si necesitas reponer piezas en el futuro, los tonos y medidas serán consistentes, algo que rara vez ocurre con materiales de importación de bajo coste que preocupan al propietario con alquiler.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué diseños de azulejos de baño son tendencia actualmente?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Hoy en día triunfan las texturas que conectan con lo natural, como los azulejos imitación piedra o los azulejos imitación cemento para looks industriales. Para quienes buscan un estilo nostálgico, los azulejos imitación hidráulico o el formato azulejo metro siguen siendo opciones líderes por su capacidad de aportar carácter sin pasar de moda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos">
                <div>
                    <h2>Soy Ricardo. ¿Dudas con tu proyecto? Escríbeme.
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Teléfono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20de%20baño" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">✉️</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}


/******************************************************************************
 * =============================================================================
 * AZULEJOS COCINA (ID: 1790)
 * =============================================================================
 ******************************************************************************/

function adrihosan_azulejos_cocina_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2022/05/azulejos-para-cocinas-1.jpg');">
        <div class="hero-content">
            <h1>Azulejos de Cocina: Dise&ntilde;os que inspiran tu lado chef</h1>
            <p>Encuentra el revestimiento perfecto: desde frentes de cocina f&aacute;ciles de limpiar hasta suelos de alta resistencia.</p>
            <div class="hero-buttons">
                <a href="#catalogo-cocina" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20de%20cocina" class="hero-btn secondary" target="_blank">Ayuda por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACIÓN POR ESTILO (Con imágenes) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-cocina">
        <div class="ap-inspiration-wrapper">
            <h2>¿Qué estilo buscas para tu cocina?</h2>
            <p class="section-subtitle">Explora nuestras colecciones y encuentra el acabado perfecto para tu proyecto</p>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Azulejos efecto hidráulico para cocina">
                    <div class="ap-card-content">
                        <h3>Efecto Hidráulico</h3>
                        <p>El toque vintage y colorido</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejos-para-cocinas-metro-adrihosan.jpg" alt="Azulejos estilo metro para cocina">
                    <div class="ap-card-content">
                        <h3>Estilo Metro</h3>
                        <p>El clásico atemporal que nunca falla</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/estilo-suelos-imitacion-marmol/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejo-para-cocina-marmol.jpg" alt="Azulejos efecto mármol para cocina">
                    <div class="ap-card-content">
                        <h3>Efecto Mármol</h3>
                        <p>Elegancia y amplitud para tu cocina</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejo-para-cocina-piedra.jpg" alt="Azulejos efecto piedra para cocina">
                    <div class="ap-card-content">
                        <h3>Efecto Piedra</h3>
                        <p>Texturas naturales y rústicas</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejo-para-cocina-maderajpg.jpg" alt="Suelo porcelánico imitación madera para cocina">
                    <div class="ap-card-content">
                        <h3>Madera Porcelánica</h3>
                        <p>Calidez sin miedo a las manchas</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. ZONAS DE LA COCINA (Segmentación Funcional) -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <h2>Diseñamos según tu zona</h2>
                <p>Encuentra la solución perfecta para cada área de tu cocina</p>
            </div>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/estilo-hexagonal/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-bano-3.jpg" alt="Frentes de cocina splashbacks">
                    <div class="ap-card-content">
                        <h3>Frentes de Cocina</h3>
                        <p>Diseños decorativos para la zona de cocción</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/estilo-imitacion-bambu/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-1.jpg" alt="Azulejos para cocinas pequeñas">
                    <div class="ap-card-content">
                        <h3>Cocinas Pequeñas</h3>
                        <p>Azulejos que aportan luz y sensación de espacio</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/uso-pavimento/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/AMB-CANET-22-AQUA-BRUNEI-L25-BLANCO-WEB-1-optimized.jpg" alt="Suelos de cocina resistentes">
                    <div class="ap-card-content">
                        <h3>Suelos de Cocina</h3>
                        <p>Máxima durabilidad y resistencia antideslizante</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> Selecciona las caracter&iacute;sticas que buscas y recuerda pulsar el bot&oacute;n <strong>&quot;FILTRAR&quot;</strong> para ver los azulejos disponibles.</p>
    </div>

    <!-- 5. DESTINO MÓVIL + WIDGET -->
    <div id="destino-filtro-adria-cocina" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. TÍTULO CATÁLOGO -->
    <div id="catalogo-cocina" class="product-loop-header">
        <h2 class="product-loop-title">Catálogo de Azulejos para Cocina</h2>
    </div>
    <?php
}

function adrihosan_azulejos_cocina_contenido_inferior() {
    ?>
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- 8. FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos de Cocina</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Cómo elijo el mejor azulejo de cocina para una estancia pequeña?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para espacios reducidos, lo ideal es apostar por un azulejo cocina blanco o en tonos neutros claros. Los formatos alargados, como el azulejo metro, ayudan a crear una sensación de continuidad horizontal que ensancha visualmente las paredes. Evita las piezas excesivamente oscuras o con patrones muy cargados que puedan agobiar el ambiente.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué diferencia hay entre un azulejo rectificado y uno normal para el alicatado de cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El azulejo rectificado tiene los bordes cortados en un ángulo perfecto de 90 grados, lo que permite una colocación con juntas casi invisibles (menos de 2 mm). Esto es fundamental en azulejos cocina modernos para lograr un acabado continuo y mucho más higiénico, ya que hay menos espacio para que se acumule la grasa en las juntas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Es seguro comprar cerámica para cocina online en Adrihosan?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Totalmente. Entendemos el miedo del reformista primerizo, por eso todos nuestros azulejos para cocinas viajan por agencia totalmente asegurados. Si alguna pieza sufre daños durante el transporte, nos encargamos de la reposición inmediata sin coste para ti. Tu única preocupación debe ser elegir el diseño que más te guste para tu revestimiento de cocina.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Puedo colocar porcelánico pared cocina sobre azulejos antiguos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sí, es posible realizar un alicatado de cocina sobre el material anterior utilizando cementos cola específicos de alta adherencia. No obstante, es vital que la base antigua esté bien fijada y nivelada. Esta técnica te ahorra tiempo y escombros en tu reforma de cocina, manteniendo la durabilidad del revestimiento pared cocina.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué mantenimiento requiere el frente de cocina de cerámica?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Nuestra cerámica de cocina está diseñada para ser ultra resistente. Para el mantenimiento diario de tus azulejos frente cocina, basta con un paño húmedo y un limpiador neutro. Al ser materiales de baja porosidad, la grasa no penetra en la pieza, garantizando que tu revestimiento para pared de cocina luzca como nuevo durante décadas sin necesidad de tratamientos especiales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos">
                <div>
                    <h2>Soy Ricardo. ¿Dudas con los azulejos para tu cocina?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Teléfono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20de%20cocina" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">✉️</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}


/******************************************************************************
 * =============================================================================
 * AZULEJOS EXTERIOR (ID: 2160)
 * =============================================================================
 ******************************************************************************/

function adrihosan_azulejos_exterior_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
<section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/Azulejos-de-Exterior.jpg');">
    <div class="hero-content">
        <h1>Azulejos de Exterior: Resistencia y Dise&ntilde;o para tu Terraza</h1>
        <p>Olv&iacute;date de baldosas que se rajan con el fr&iacute;o o resbalan cuando llueve. En Adrihosan te ofrecemos soluciones reales en porcel&aacute;nico de exterior y revestimientos de fachada que aguantan lo que les eches.</p>
        <div class="hero-buttons">
            <a href="#catalogo-exterior" class="hero-btn primary">Ver Cat&aacute;logo</a>
            <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20de%20exterior" class="hero-btn secondary" target="_blank">Ayuda por WhatsApp</a>
        </div>
    </div>
</section>

  <!-- 2. NAVEGACIÓN POR USO -->
<section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-exterior">
    <div class="ap-inspiration-wrapper">
        <h2>¿Qué zona vas a reformar?</h2>
        <p class="section-subtitle">Elige según el uso y te mostramos las mejores opciones</p>
        <div class="ap-inspiration-grid">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/slip-si/" class="ap-inspiration-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azueljos-de-exterior-antideslizantes.jpg" alt="Suelo exterior antideslizante">
                <div class="ap-card-content">
                    <h3>Suelo Antideslizante</h3>
                    <p>El "must" de cualquier terraza segura</p>
                </div>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/revestimiento-fachada-exterior/" class="ap-inspiration-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azueljos-de-exterior-fachadas-muros.jpg" alt="Revestimiento fachadas y muros">
                <div class="ap-card-content">
                    <h3>Fachadas y Muros</h3>
                    <p>Revestimiento exterior resistente</p>
                </div>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="ap-inspiration-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azueljos-de-exterior-madera.jpg" alt="Suelo imitación madera exterior">
                <div class="ap-card-content">
                    <h3>Imitación Madera</h3>
                    <p>Calidez sin mantenimiento</p>
                </div>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/" class="ap-inspiration-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejos-piscinas-adrihosan.jpg" alt="Azulejos para piscinas">
                <div class="ap-card-content">
                    <h3>Azulejos Piscinas</h3>
                    <p>Máxima seguridad en zonas húmedas</p>
                </div>
            </a>
        </div>
    </div>
</section>

  <section class="ap-value-section adrihosan-full-width-block">
    <div class="ap-value-wrapper">
        <div class="section-header">
            <h2 style="font-family: 'Poppins', sans-serif; color: #102e35;">Compara y elige el material perfecto</h2>
            <p style="font-family: 'Poppins', sans-serif; color: #3f6f7b;">Cada zona exterior tiene sus necesidades específicas de resistencia y seguridad</p>
        </div>
        <div class="tabla-comparativa-exterior" style="max-width: 1000px; margin: 0 auto; overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; font-family: 'Poppins', sans-serif; font-size: 14px;">
                <thead>
                    <tr style="background: #102e35; color: #fff;">
                        <th style="padding: 15px; text-align: left;">Tipo de Material</th>
                        <th style="padding: 15px; text-align: left;">Uso Recomendado</th>
                        <th style="padding: 15px; text-align: center;">Antideslizante</th>
                        <th style="padding: 15px; text-align: left;">Ventaja Principal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background: #f8f9fa;">
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;"><strong>Porcelánico Exterior</strong></td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Terrazas y Zonas de Paso</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd; text-align: center;">Clase 3 (C3)</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Máxima dureza y antihielo</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;"><strong>Imitación Madera</strong></td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Contorno de Piscinas y Porches</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd; text-align: center;">C3 Antideslizante</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Calidez sin mantenimiento</td>
                    </tr>
                    <tr style="background: #f8f9fa;">
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;"><strong>Revestimiento Pared</strong></td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Fachadas y Muros Exteriores</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd; text-align: center;">N/A</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Protección contra la humedad</td>
                    </tr>
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;"><strong><a href="https://www.adrihosan.com/categoria-producto/suelo-de-barro/" style="color: #4dd2d0; text-decoration: none; font-weight: 600;">Barro Natural</a></strong></td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Patios Rústicos y Jardines</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd; text-align: center;">Alto Natural</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">Autenticidad y tradición mediterránea</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

   <!-- 4. CONSEJO ADRIA -->
<div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
    <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> Para exteriores, busca siempre porcel&aacute;nico antideslizante con clasificaci&oacute;n C3. Es la garant&iacute;a de seguridad cuando llueve o hay humedad. Selecciona las caracter&iacute;sticas que necesitas y pulsa <strong>&quot;FILTRAR&quot;</strong> para encontrar tu azulejo ideal.</p>
</div>

    <!-- 5. DESTINO MÓVIL + WIDGET -->
    <div id="destino-filtro-adria-exterior" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. TÍTULO CATÁLOGO -->
    <div id="catalogo-exterior" class="product-loop-header">
        <h2 class="product-loop-title">Catálogo de Azulejos para Exterior</h2>
    </div>
    <?php
}

function adrihosan_azulejos_exterior_contenido_inferior() {
    ?>
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- 8. FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos de Exterior</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué mantenimiento requiere el suelo exterior antideslizante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Nuestros suelos solo necesitan agua y un detergente neutro. Gracias a la tecnología de superficie, el acabado C3 de Adrihosan no es áspero, lo que evita que la suciedad se incruste como ocurre en otros pavimentos exterior de baja calidad.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Se pueden poner azulejos exterior pared sobre una fachada ya pintada?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No es recomendable directamente. Para garantizar que la baldosa para pared exterior no se desprenda, es necesario picar la pintura o usar imprimaciones especiales. Consulta siempre con un profesional para asegurar que tu revestimiento de muros exteriores sea seguro.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué diferencia hay entre gres de exterior y porcelánico exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El gres convencional es más poroso y menos resistente. El porcelánico para exterior se prensa a mayor presión y se cuece a más temperatura, lo que lo hace prácticamente indestructible ante el clima y el uso diario.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿El precio baldosa exterior incluye el transporte?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan ofrecemos tarifas de envío optimizadas y todos nuestros pedidos viajan con un seguro a todo riesgo. El valor de recibir tus azulejos de exterior en la puerta de casa sin roturas es nuestra prioridad.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Es difícil limpiar el porcelánico exterior imitación madera?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para nada. A diferencia de la madera natural, el suelo porcelánico exterior imitación madera no absorbe manchas. Un fregado normal es suficiente para mantener la calidez estética del material sin el trabajo de mantenimiento de la madera real.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos">
                <div>
                    <h2>Soy Ricardo. ¿Dudas con los azulejos para tu terraza?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Teléfono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20de%20exterior" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">✉️</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}


/******************************************************************************
 * =============================================================================
 * AZULEJOS PISCINAS (ID: 66)
 * =============================================================================
 ******************************************************************************/

function adrihosan_azulejos_piscinas_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/azueljos-para-piscinas.jpg');">
        <div class="hero-content">
            <h1>Azulejos para Piscinas: Dise&ntilde;a tu propio oasis</h1>
            <p>Materiales de alta resistencia t&eacute;cnica, antideslizantes y dise&ntilde;ados para transformar tu piscina en un espacio &uacute;nico. Desde el cl&aacute;sico gresite hasta el porcel&aacute;nico de &uacute;ltima generaci&oacute;n.</p>
            <div class="hero-buttons">
                <a href="#catalogo-piscinas" class="hero-btn primary">Ver Colecci&oacute;n</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20para%20piscina" class="hero-btn secondary" target="_blank">Ayuda por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS RÁPIDOS POR MATERIAL -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-piscinas">
        <div class="ap-inspiration-wrapper">
            <h2>¿Qué material buscas?</h2>
            <p class="section-subtitle">Elige según el tipo de revestimiento para tu piscina</p>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/estilo-bali/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejos-para-piscinas-efecto-bali.jpg" alt="Efecto piedra bali para piscinas">
                    <div class="ap-card-content">
                        <h3>Efecto piedra Bali</h3>
                        <p>El clásico que nunca falla</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/estilo-cemento/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azueljos-para-piscinas-efecto-cemento.jpg" alt="Gres porcelánico para piscinas">
                    <div class="ap-card-content">
                        <h3>Efecto cemento</h3>
                        <p>Máxima resistencia y diseño</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/estilo-pizarra/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejos-para-piscinas-piedra.jpg" alt="Piedra natural para piscinas">
                    <div class="ap-card-content">
                        <h3>Efecto piedra natural</h3>
                        <p>Elegancia mediterránea</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. GUÍA: EFECTO DEL AGUA -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <h2>¿Qué efecto buscas en el agua?</h2>
                <p>El color del azulejo determina el tono de tu piscina</p>
            </div>
            <div class="guia-color-agua" style="max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
                <div class="color-agua-item" style="padding: 20px; background: #f8f9fa; border-radius: 12px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #87CEEB, #00CED1); border-radius: 50%; margin: 0 auto 15px;"></div>
                    <h4 style="font-family: 'Poppins'; color: #102e35; margin: 0 0 8px;">Tonos Blancos/Arena</h4>
                    <p style="font-family: 'Poppins'; font-size: 13px; color: #3f6f7b; margin: 0;">Agua azul caribe/celeste</p>
                </div>
                <div class="color-agua-item" style="padding: 20px; background: #f8f9fa; border-radius: 12px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4169E1, #000080); border-radius: 50%; margin: 0 auto 15px;"></div>
                    <h4 style="font-family: 'Poppins'; color: #102e35; margin: 0 0 8px;">Tonos Grises</h4>
                    <p style="font-family: 'Poppins'; font-size: 13px; color: #3f6f7b; margin: 0;">Agua azul profundo/marino</p>
                </div>
                <div class="color-agua-item" style="padding: 20px; background: #f8f9fa; border-radius: 12px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #3CB371, #228B22); border-radius: 50%; margin: 0 auto 15px;"></div>
                    <h4 style="font-family: 'Poppins'; color: #102e35; margin: 0 0 8px;">Tonos Verdes/Piedra</h4>
                    <p style="font-family: 'Poppins'; font-size: 13px; color: #3f6f7b; margin: 0;">Efecto lago natural/tropical</p>
                </div>
                <div class="color-agua-item" style="padding: 20px; background: #f8f9fa; border-radius: 12px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #2F4F4F, #1a1a2e); border-radius: 50%; margin: 0 auto 15px;"></div>
                    <h4 style="font-family: 'Poppins'; color: #102e35; margin: 0 0 8px;">Tonos Negros/Antracita</h4>
                    <p style="font-family: 'Poppins'; font-size: 13px; color: #3f6f7b; margin: 0;">Efecto espejo moderno</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SECCIÓN TÉCNICA -->
    <section class="ap-tecnica-section adrihosan-full-width-block" style="background: #102e35; padding: 60px 20px;">
        <div style="max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; text-align: center;">
            <div style="color: #fff;">
                <div style="font-size: 40px; margin-bottom: 15px;">🛡️</div>
                <h3 style="font-family: 'Poppins'; font-size: 18px; margin: 0 0 10px; color: #4dd2d0;">Resistencia</h3>
                <p style="font-family: 'Poppins'; font-size: 14px; margin: 0; opacity: 0.9;">Soporta cambios bruscos de temperatura (hielo/deshielo)</p>
            </div>
            <div style="color: #fff;">
                <div style="font-size: 40px; margin-bottom: 15px;">👣</div>
                <h3 style="font-family: 'Poppins'; font-size: 18px; margin: 0 0 10px; color: #4dd2d0;">Seguridad</h3>
                <p style="font-family: 'Poppins'; font-size: 14px; margin: 0; opacity: 0.9;">Certificación antideslizante obligatoria para zonas húmedas</p>
            </div>
            <div style="color: #fff;">
                <div style="font-size: 40px; margin-bottom: 15px;">🧼</div>
                <h3 style="font-family: 'Poppins'; font-size: 18px; margin: 0 0 10px; color: #4dd2d0;">Higiene</h3>
                <p style="font-family: 'Poppins'; font-size: 14px; margin: 0; opacity: 0.9;">Superficies no porosas que evitan algas y bacterias</p>
            </div>
        </div>
    </section>

    <!-- 5. CONSEJO ADRIA -->
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> El porcel&aacute;nico permite usar el mismo material dentro y fuera del agua, creando continuidad visual desde la terraza hasta el vaso de la piscina.</p>
    </div>

    <!-- 6. DESTINO MÓVIL + WIDGET -->
    <div id="destino-filtro-adria-piscinas" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 7. TÍTULO CATÁLOGO -->
    <div id="catalogo-piscinas" class="product-loop-header">
        <h2 class="product-loop-title">Catálogo de Azulejos para Piscinas</h2>
    </div>
    <?php
}

function adrihosan_azulejos_piscinas_contenido_inferior() {
    ?>
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- 8. FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos para Piscinas</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Es mejor el gresite o el gres porcelánico para piscinas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sin duda, el <strong>porcelánico para piscinas</strong> gana en durabilidad e higiene. Al tener piezas más grandes, reduces las juntas donde crecen algas y evitas que las piezas se suelten con el tiempo, algo muy común en el gresite antiguo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué mantenimiento requiere el suelo porcelánico piscina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El mantenimiento es mínimo. Gracias a su baja porosidad, las cremas solares y la cal no penetran. Basta con una limpieza periódica con agua a presión para mantener tu <strong>porcelánico antideslizante para piscinas</strong> como el primer día.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Puedo usar el mismo material para el interior y el suelo exterior piscinas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sí, de hecho es nuestra recomendación para lograr un efecto visual de continuidad. Todos nuestros <strong>azulejos para piscinas</strong> son aptos para inmersión total y para zonas de terraza, resistiendo los rayos UV sin perder color.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Los azulejos para piscinas de color oscuro calientan mucho el agua?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los tonos oscuros como el gris antracita o efecto piedra volcánica pueden aumentar la temperatura del agua un par de grados por la absorción térmica, lo cual es ideal para alargar la temporada de baño en zonas menos calurosas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Es difícil instalar porcelánico antideslizante para piscinas sobre gresite viejo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No es difícil si el vaso es estanco, pero requiere un puente de unión y un adhesivo flexible de alta gama. Siempre recomendamos revisar la impermeabilización antes de colocar los nuevos <strong>azulejos para piscinas</strong> para asegurar un resultado eterno.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- 10. CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos">
                <div>
                    <h2>Soy Ricardo. ¿Dudas con los azulejos para tu piscina?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Teléfono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20para%20piscina" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">✉️</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}


/******************************************************************************
 * =============================================================================
 * PAVIMENTOS Y SUELOS CERÁMICOS (ID: 64)
 * =============================================================================
 ******************************************************************************/

function adrihosan_pavimentos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Suelos y Pavimentos Cer&aacute;micos: La Base de tu Reforma</h1>
            <p>No busques solo un suelo; busca la piel de tu hogar. En Adrihosan seleccionamos pavimentos que aguantan tu ritmo de vida sin perder su esencia.</p>
            <div class="hero-buttons">
                <a href="#catalogo-pavimentos" class="hero-btn primary">Ver Cat&aacute;logo Completo</a>
                <a href="#subcategorias-pavimentos" class="hero-btn secondary">Explorar Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. ACCESO DIRECTO A SUBCATEGORÍAS (Círculos) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="subcategorias-pavimentos">
        <div class="ap-inspiration-wrapper">
            <h2>Explora por Estilo</h2>
            <p class="section-subtitle">Encuentra el pavimento perfecto seg&uacute;n el acabado que buscas</p>
            <div class="ap-inspiration-grid grid-5-cols">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" alt="Suelos imitación madera">
                    <div class="ap-card-content">
                        <h3>Imitaci&oacute;n Madera</h3>
                        <p>Calidez sin mantenimiento</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Baldosa hidráulica">
                    <div class="ap-card-content">
                        <h3>Hidr&aacute;ulicos</h3>
                        <p>El toque vintage y colorido</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-exterior/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-terraza-600-x-400.jpg" alt="Suelo exterior y terrazas">
                    <div class="ap-card-content">
                        <h3>Exterior</h3>
                        <p>Resistente a heladas y UV</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" alt="Porcelánico gran formato">
                    <div class="ap-card-content">
                        <h3>Gran Formato</h3>
                        <p>M&iacute;nimas juntas, m&aacute;xima elegancia</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" alt="Efecto cemento">
                    <div class="ap-card-content">
                        <h3>Efecto Cemento</h3>
                        <p>Estilo industrial moderno</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. BLOQUE DE AUTORIDAD: EL PORCELÁNICO ES EL REY -->
    <section class="authority-section adrihosan-full-width-block">
        <div class="authority-wrapper">
            <div class="section-header">
                <h2>&iquest;Por qu&eacute; un suelo porcel&aacute;nico es la decisi&oacute;n m&aacute;s inteligente?</h2>
                <p>Frente al laminado o la madera natural, el porcel&aacute;nico gana en todos los frentes</p>
            </div>
            <div class="authority-grid">
                <div class="authority-card">
                    <div class="authority-icon">💪</div>
                    <h3>Resistencia Total</h3>
                    <p>Aguanta golpes, rayaduras y el trote de Coc&oacute; sin despeinarse. Ideal para hogares con mascotas y ni&ntilde;os.</p>
                </div>
                <div class="authority-card">
                    <div class="authority-icon">🧹</div>
                    <h3>Limpieza Cero</h3>
                    <p>Cero mantenimiento. Agua, jab&oacute;n neutro y listo. Olv&iacute;date de ceras, barnices o tratamientos especiales.</p>
                </div>
                <div class="authority-card">
                    <div class="authority-icon">🏠</div>
                    <h3>Versatilidad Total</h3>
                    <p>Un mismo material para toda la casa, incluso ba&ntilde;os y cocinas. Continuidad visual sin l&iacute;mites.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE DE MARCAS ESPECIALIZADAS -->
    <section class="brands-section adrihosan-full-width-block">
        <div class="brands-wrapper">
            <h2>Trabajamos con las Mejores Marcas</h2>
            <div class="brands-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/ceramica-vives/" class="brand-card">
                    <h3>Cer&aacute;mica Vives</h3>
                    <p>Para los que buscan dise&ntilde;o y tendencia. Innovaci&oacute;n espa&ntilde;ola en cada pieza.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/techlam/" class="brand-card">
                    <h3>Techlam</h3>
                    <p>Porcel&aacute;nico extrafino de alto nivel. La elecci&oacute;n de arquitectos exigentes.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti-ceramica/" class="brand-card">
                    <h3>Navarti</h3>
                    <p>La mejor relaci&oacute;n calidad-precio para reformas integrales.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- ENLACES ESTRATÉGICOS -->
    <section class="strategic-links-section adrihosan-full-width-block">
        <div class="strategic-links-wrapper">
            <h3>Tambi&eacute;n te puede interesar</h3>
            <div class="strategic-links-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/" class="strategic-link">
                    <span class="link-icon">✨</span>
                    <span class="link-text">Porcel&aacute;nico Extrafino</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/" class="strategic-link">
                    <span class="link-icon">⬡</span>
                    <span class="link-text">Azulejos Hexagonales</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-tecnico-exterior/" class="strategic-link">
                    <span class="link-icon">🏔️</span>
                    <span class="link-text">Suelo T&eacute;cnico Exterior</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/complementos/rodapies/" class="strategic-link">
                    <span class="link-icon">📏</span>
                    <span class="link-text">Rodapi&eacute;s</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Para encontrar tu suelo ideal, usa los filtros de <strong>Ubicaci&oacute;n</strong> y <strong>Acabado</strong>. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO MÓVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-pavimentos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <!-- 6. TÍTULO CATÁLOGO -->
    <div id="catalogo-pavimentos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos y Pavimentos</h2>
    </div>
    <?php
}

function adrihosan_pavimentos_contenido_inferior() {
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Pavimentos Cer&aacute;micos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre un pavimento cer&aacute;mico y un suelo porcel&aacute;nico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>suelo porcel&aacute;nico</strong> es una evoluci&oacute;n t&eacute;cnica del gres convencional, con una absorci&oacute;n de agua casi nula (inferior al 0.5%). Esto lo hace mucho m&aacute;s resistente, impermeable y apto para cualquier estancia, incluyendo exteriores y zonas h&uacute;medas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo elegir el color del suelo para una casa peque&ntilde;a?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los <strong>azulejos en tonos claros</strong> o imitaci&oacute;n madera en colores naturales multiplican la luminosidad y la sensaci&oacute;n de amplitud en espacios reducidos. Evita tonos muy oscuros que absorben la luz y hacen el espacio m&aacute;s peque&ntilde;o visualmente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en suelos">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con el suelo de tu reforma?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Tel&eacute;fono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelos%20y%20pavimentos" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// ============================================================================
// CATEGORÍA 63 - AZULEJOS
// ============================================================================

function adrihosan_azulejos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/Azulejos-Online-Diseno-y-Calidad.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <span>Azulejos</span>
            </nav>
            <h1>Azulejos Online: Dise&ntilde;o y Calidad &quot;Made in Spain&quot;</h1>
            <p>Descubre nuestra selecci&oacute;n de azulejos de fabricaci&oacute;n espa&ntilde;ola. Desde la resistencia del porcel&aacute;nico hasta la delicadeza de la pasta blanca. Viste tus suelos y paredes con las &uacute;ltimas tendencias en cer&aacute;mica: imitaci&oacute;n madera, m&aacute;rmol, estilo metro o hidr&aacute;ulico. Calidad premium directa a tu obra.</p>
            <div class="hero-buttons">
                <a href="#catalogo-azulejos" class="hero-btn primary">Ver Cat&aacute;logo Completo</a>
                <a href="#subcategorias-azulejos" class="hero-btn secondary">Explorar Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACIÓN VISUAL DE SUBCATEGORÍAS (Cluster) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="subcategorias-azulejos">
        <div class="ap-inspiration-wrapper">
            <h2>Explora Nuestros Azulejos por Estilo</h2>
            <p class="section-subtitle">Encuentra el azulejo perfecto seg&uacute;n el acabado que buscas</p>
            <div class="ap-inspiration-grid grid-7-cols">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-de-bano-Adrihosan.jpg" alt="Azulejos Baño">
                    <div class="ap-card-content">
                        <h3>Azulejos Ba&ntilde;o</h3>
                        <p>Dise&ntilde;os para tu oasis</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-de-cocina-Adrihosan.jpg" alt="Azulejos Cocina">
                    <div class="ap-card-content">
                        <h3>Azulejos Cocina</h3>
                        <p>El coraz&oacute;n de tu hogar</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" alt="Imitación Madera">
                    <div class="ap-card-content">
                        <h3>Imitaci&oacute;n Madera</h3>
                        <p>Calidez sin mantenimiento</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" alt="Imitación Mármol">
                    <div class="ap-card-content">
                        <h3>Imitaci&oacute;n M&aacute;rmol</h3>
                        <p>Lujo y elegancia eterna</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-metro-Adrihosan.jpg" alt="Estilo Metro">
                    <div class="ap-card-content">
                        <h3>Estilo Metro</h3>
                        <p>El cl&aacute;sico atemporal</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-hidraulicos-Adrihosan.jpg" alt="Hidráulicos">
                    <div class="ap-card-content">
                        <h3>Hidr&aacute;ulicos</h3>
                        <p>Toque vintage y colorido</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-exterior/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-terraza-600-x-400.jpg" alt="Exteriores">
                    <div class="ap-card-content">
                        <h3>Exteriores</h3>
                        <p>Resistentes a todo</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong>, <strong>Formato</strong> y <strong>Acabado</strong> para encontrar tu azulejo ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MÓVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-azulejos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. TÍTULO CATÁLOGO -->
    <div id="catalogo-azulejos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos</h2>
    </div>
    <?php
}

function adrihosan_azulejos_contenido_inferior() {
  
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

   <!-- BLOQUE SEO ESTRUCTURADO: TIPOS DE AZULEJOS -->
<section class="seo-content-section adrihosan-full-width-block">
    <div class="seo-content-wrapper">
        <h2>Tipos de Azulejos: &iquest;Cu&aacute;l elegir para tu reforma?</h2>
        <!-- Sub-bloque A: Por Material -->
        <div class="material-types-grid">
            <div class="material-card">
                <div class="material-icon">💎</div>
                <h3><a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/ver-tipo-suelo-porcelanico/">Azulejos Porcel&aacute;nicos</a></h3>
                <p>M&aacute;xima resistencia y dureza. Ideales para suelos de alto tr&aacute;nsito y exteriores. Baja absorci&oacute;n de agua (inferior al 0.5%).</p>
            </div>
            <div class="material-card">
                <div class="material-icon">🎨</div>
                <h3><a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/ver-tipo-azulejo-pasta-blanca/">Pasta Blanca</a></h3>
                <p>El rey del revestimiento de paredes. Colores m&aacute;s vivos y acabado perfecto para ba&ntilde;os y cocinas de interior.</p>
            </div>
            <div class="material-card">
                <div class="material-icon">🏠</div>
                <h3><a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/ver-tipo-azulejo-pasta-roja/">Pasta Roja</a></h3>
                <p>La opci&oacute;n econ&oacute;mica y tradicional. Resistencia y calidez para interiores.</p>
            </div>
        </div>
        <!-- Sub-bloque B: Por Acabado -->
        <div class="finish-info-block">
            <h3>Azulejos Rectificados vs. Normales</h3>
            <p>Los <strong>azulejos rectificados</strong> permiten juntas m&iacute;nimas (1-2mm) para un efecto continuo y moderno. Los azulejos con <strong>borde tradicional</strong> requieren juntas de 3-5mm pero ofrecen mayor margen de error en la instalaci&oacute;n.</p>
        </div>
    </div>
</section>

    <!-- TENDENCIAS EN AZULEJOS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Azulejos para el Hogar</h2>
            <p>Desde el encanto del estilo r&uacute;stico hasta la modernidad del acabado cemento. Si buscas calidez, visita nuestros <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/">suelos imitaci&oacute;n madera</a>. Si prefieres el lujo, apuesta por el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/">imitaci&oacute;n m&aacute;rmol</a>.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="trend-link">Efecto Cemento</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-efecto-zellige/" class="trend-link">Efecto Zellige</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/" class="trend-link">Hexagonales</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/" class="trend-link">Decorativos</a>
            </div>
        </div>
    </section>

 

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es la diferencia entre azulejo de pared y de suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los <strong>azulejos de pared</strong> (revestimientos) suelen ser de pasta blanca, m&aacute;s ligeros y con acabados m&aacute;s decorativos. Los <strong>azulejos de suelo</strong> (pavimentos) son m&aacute;s gruesos, resistentes al desgaste y pueden ser antideslizantes. Un porcel&aacute;nico t&eacute;cnico puede usarse en ambas superficies.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Envi&aacute;is muestras de azulejos a casa?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                   <div class="faq-answer-common">
                     <p>Las muestras son <strong>gratuitas</strong>, solo cobramos un peque&ntilde;o importe testimonial por el env&iacute;o. Cont&aacute;ctanos por WhatsApp o tel&eacute;fono para solicitar las tuyas.</p>
                </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; significa que un azulejo es rectificado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un <strong>azulejo rectificado</strong> ha sido cortado con precisi&oacute;n l&aacute;ser tras la cocci&oacute;n, resultando en bordes perfectamente rectos. Esto permite colocarlos con juntas m&iacute;nimas (1-2mm) para un acabado continuo y moderno.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ten&eacute;is azulejos antideslizantes para ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, disponemos de azulejos con clasificaci&oacute;n antideslizante C3 (la m&aacute;xima), ideales para platos de ducha y zonas h&uacute;medas. Busca en nuestros filtros por &quot;antideslizante&quot; o cons&uacute;ltanos directamente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con los azulejos de tu reforma?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Tel&eacute;fono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGORÍA 63 - AZULEJOS
// ============================================================================


// ============================================================================
// CATEGORÍA 2245 - PORCELÁNICO IMITACIÓN MÁRMOL
// ============================================================================

function adrihosan_porcelanico_marmol_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/suelo-porcelanico-imitacion-marmol.jpg');">
        <div class="hero-content">
            <h1>Pavimento Porcel&aacute;nico Imitaci&oacute;n M&aacute;rmol: Distinci&oacute;n y M&aacute;xima Resistencia</h1>
            <p>La majestuosidad de la piedra natural con las ventajas t&eacute;cnicas del porcel&aacute;nico. Dise&ntilde;os de alto impacto visual que transforman tu suelo en una pieza de lujo duradera.</p>
            <div class="hero-buttons">
                <a href="#catalogo-marmol" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-marmol" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. COMPARATIVA TÉCNICA: PORCELÁNICO VS MÁRMOL NATURAL -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; Porcel&aacute;nico y no M&aacute;rmol Natural?</h2>
            <p class="section-subtitle">El porcel&aacute;nico imitaci&oacute;n m&aacute;rmol te ofrece la est&eacute;tica sin los sacrificios</p>

            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">🛡️</div>
                    <h3>Porosidad Cero</h3>
                    <p>A diferencia del m&aacute;rmol, el porcel&aacute;nico <strong>no absorbe manchas</strong> de l&iacute;quidos. Vino, caf&eacute; o aceite: se limpian sin dejar huella.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">💪</div>
                    <h3>Resistencia al Rayado</h3>
                    <p>Ideal para <strong>hogares con mascotas</strong> o mucho tr&aacute;nsito. Las u&ntilde;as de Coc&oacute; o los tacones no le afectan.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">🎨</div>
                    <h3>Realismo Superior</h3>
                    <p>Gracias a la <strong>impresi&oacute;n digital</strong>, cada pieza tiene vetas &uacute;nicas para evitar el efecto "fotocopia". M&aacute;rmol sin repetici&oacute;n.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CLUSTERS DE NAVEGACIÓN -->
    <section class="clusters-section adrihosan-full-width-block">
        <div class="clusters-wrapper">
            <h2>Encuentra tu Porcel&aacute;nico Efecto M&aacute;rmol</h2>
            <p class="section-subtitle">Gu&iacute;ate por tonalidad, formato o acabado seg&uacute;n tu proyecto</p>

            <div class="clusters-grid">
                <!-- CLUSTER 1: Por Tonalidad -->
                <div class="cluster-column">
                    <h3>Por Tonalidad</h3>
                    <ul class="cluster-list">
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/tono-blanco/">Blanco Carrara / Statuario</a></li>
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/tono-negro/">Negro Marquina / Dark</a></li>
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/tono-beige/">Crema y Marfil</a></li>
                    </ul>
                </div>

                <!-- CLUSTER 2: Por Formato -->
                <div class="cluster-column">
                    <h3>Por Formato</h3>
                    <ul class="cluster-list">
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/ver-formato-gran-formato/">Porcel&aacute;nico Gran Formato</a></li>
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/ver-formato-60x120/">Formato Est&aacute;ndar (60x60, 60x120)</a></li>
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/ver-tipo-lamina-porcelanica/">Porcel&aacute;nico Extrafino</a></li>
                    </ul>
                </div>

                <!-- CLUSTER 3: Por Acabado -->
                <div class="cluster-column">
                    <h3>Por Acabado</h3>
                    <ul class="cluster-list">
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/textura-brillo-2/">Pulido Espejo</a></li>
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/textura-mate/">Mate Sedoso</a></li>
                        <li><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/textura-satinado/">Satinado</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> &iquest;Buscas un acabado espec&iacute;fico? Selecciona <strong>&quot;Pulido&quot;</strong>, <strong>&quot;Mate&quot;</strong> o <strong>&quot;Satinado&quot;</strong> en los filtros y pulsa <strong>&quot;FILTRAR&quot;</strong>.</p>
    </div>

    <!-- 5. TÍTULO CATÁLOGO + FILTRO -->
    <div id="catalogo-marmol" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo: Pavimento Porcel&aacute;nico Efecto M&aacute;rmol</h2>
    </div>

    <!-- Filtro Móvil -->
    <div id="destino-filtro-adria-marmol" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0;"></div>
    <div class="filter-container-master"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>
    <?php
}

function adrihosan_porcelanico_marmol_contenido_inferior() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( 2245 ); ?>
        </div>
    </section>

    <!-- 5. ENLACES INTERNOS ESTRATÉGICOS -->
    <section class="enlaces-internos-section adrihosan-full-width-block">
        <div class="enlaces-wrapper">
            <h2>Complementa tu Proyecto</h2>
            <div class="enlaces-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-exterior/" class="enlace-card">
                    <span class="enlace-icon">🏡</span>
                    <div class="enlace-content">
                        <h4>&iquest;Buscas continuidad en el exterior?</h4>
                        <p>Si tu terraza conecta con el sal&oacute;n, mira nuestro <strong>Suelo Exterior y Terrazas</strong>.</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/" class="enlace-card">
                    <span class="enlace-icon">🚿</span>
                    <div class="enlace-content">
                        <h4>&iquest;Es para la zona de aguas?</h4>
                        <p>Para revestir las paredes de tu ducha, visita <strong>Azulejos Ba&ntilde;o</strong> con efecto m&aacute;rmol.</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-mosaico/" class="enlace-card">
                    <span class="enlace-icon">🎯</span>
                    <div class="enlace-content">
                        <h4>Detalles decorativos</h4>
                        <p>Combina tu suelo con un toque diferente usando <strong>Azulejo Mosaico</strong> en zonas puntuales.</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/" class="enlace-card enlace-padre">
                    <span class="enlace-icon">📂</span>
                    <div class="enlace-content">
                        <h4>&iquest;Otros acabados adem&aacute;s del m&aacute;rmol?</h4>
                        <p>Mira nuestra colecci&oacute;n completa de <strong>Suelos Porcel&aacute;nicos</strong>.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

   <section class="faq-section-common adrihosan-full-width-block">
    <div class="faq-wrapper-common">
        <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Porcel&aacute;nico Imitaci&oacute;n M&aacute;rmol</h2>
        <div class="faq-items-wrapper">
            
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Se nota que es una imitaci&oacute;n o parece piedra real?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>Gracias a la tecnolog&iacute;a de impresi&oacute;n digital (Inkjet) de alta definici&oacute;n, es dif&iacute;cil distinguirlo a simple vista. Nuestros porcel&aacute;nicos cuentan con <strong>m&uacute;ltiples caras</strong> (dise&ntilde;os diferentes), lo que significa que las vetas cambian de una baldosa a otra para evitar patrones repetitivos y lograr el realismo ca&oacute;tico y natural del m&aacute;rmol de cantera.</p>
                </div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Se mancha si cae vino o lim&oacute;n como el m&aacute;rmol natural?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>Rotundamente <strong>no</strong>. El m&aacute;rmol natural es poroso y reacciona a los &aacute;cidos, pero el porcel&aacute;nico es un material vitrificado e impermeable. Puedes usarlo en cocinas sin miedo a que se caiga vinagre, lim&oacute;n, aceite o vino. Se limpia simplemente con agua y un jab&oacute;n neutro, sin necesidad de pulidos ni cristalizados peri&oacute;dicos.</p>
                </div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;El acabado pulido brillo resbala mucho?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>El acabado <strong>pulido espejo</strong> es totalmente liso para maximizar el reflejo de la luz. En seco es seguro, pero en mojado puede resbalar. Para salones, pasillos o cocinas es perfecto por su espectacularidad. Si vas a colocarlo dentro de un ba&ntilde;o o una zona h&uacute;meda, te recomendamos optar por el acabado <strong>Mate o Satinado (Silk)</strong>, que mantiene la elegancia de la veta pero con mayor seguridad.</p>
                </div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Puedo colocar estas baldosas en la pared o solo sirven para suelo?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>El porcel&aacute;nico es el material m&aacute;s vers&aacute;til que existe. Al ser tan resistente, sirve perfectamente para <strong>pavimentos de alto tr&aacute;nsito</strong>, pero tambi&eacute;n es la opci&oacute;n favorita para <strong>revestir paredes</strong> de ba&ntilde;os, frentes de cocina o incluso fachadas. Colocar piezas de gran formato imitaci&oacute;n m&aacute;rmol en las paredes crea un efecto de &quot;caja de lujo&quot; muy demandado en decoraci&oacute;n.</p>
                </div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Es resistente a los ara&ntilde;azos de mascotas o tacones?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>S&iacute;, tiene una dureza muy superior a la piedra natural. Mientras que el m&aacute;rmol es una piedra &quot;blanda&quot; que se raya con facilidad, el gres porcel&aacute;nico se cuece a altas temperaturas para lograr una superficie compacta. Aguanta perfectamente el trote diario, las u&ntilde;as de mascotas y el movimiento de muebles sin perder su aspecto original.</p>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- BLOQUE DE AYUDA / CONTACTO -->
    <section id="contacto-marmol" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Necesitas ayuda para elegir?<span>Soy Ricardo, tu experto en porcel&aacute;nico efecto m&aacute;rmol.</span></h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Tel&eacute;fono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20asesoramiento%20sobre%20porcel%C3%A1nico%20imitaci%C3%B3n%20m%C3%A1rmol" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">✉️</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQs: script cargado desde category-common.js -->
    <?php
}

// FIN CATEGORÍA 2245 - PORCELÁNICO IMITACIÓN MÁRMOL
// ============================================================================


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

/**
 * OPCIONAL: Precargar CSS crítico para mejorar rendimiento
 */
function adrihosan_preload_css_critico() {
    if (is_product_category()) {
        $cat_id = get_queried_object_id();
        $css_file = get_stylesheet_directory_uri() . '/assets/css/category-' . $cat_id . '.css';
        
        echo '<link rel="preload" href="' . esc_url($css_file) . '" as="style">' . "\n";
    }
}
add_action('wp_head', 'adrihosan_preload_css_critico', 1);

/**
 * Adrihosan: Ordenación FORZADA para diferenciar categorías
 */
add_action( 'woocommerce_product_query', 'adrihosan_orden_estricto_ids' );

function adrihosan_orden_estricto_ids( $q ) {
    if ( is_admin() || ! $q->is_main_query() ) {
        return;
    }

    // 1. COCINA (ID 4866) -> POR NOMBRE (A-Z)
    // Empezará por "Baldosa A..."
    if ( is_product_category( 4866 ) ) {
        $q->set( 'orderby', 'title' );
        $q->set( 'order', 'ASC' );
    }

    // 2. BAÑO (ID 4865) -> POR NOMBRE INVERSO (Z-A)
    // Empezará por "Baldosa V..." o la última letra.
    // Esto garantiza que la parrilla sea 100% diferente a Cocina.
    elseif ( is_product_category( 4865 ) ) {
        $q->set( 'orderby', 'title' );
        $q->set( 'order', 'DESC' );
    }

    // 3. EXTERIOR (ID 4869) -> ALEATORIO
    // Cada vez que entres cambiará.
    elseif ( is_product_category( 4869 ) ) {
        $q->set( 'orderby', 'rand' );
    }
}

/* ========================================================================== */
/* FIX: Preservar filtros de Filter Everything Pro en paginaci&oacute;n        */
/* ========================================================================== */
add_filter( 'woocommerce_pagination_args', 'adrihosan_preservar_filtros_en_paginacion' );

function adrihosan_preservar_filtros_en_paginacion( $args ) {
    if ( empty( $_GET ) ) {
        return $args;
    }

    $params = $_GET;

    // Eliminar par&aacute;metros est&aacute;ndar de paginaci&oacute;n
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
