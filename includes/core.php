<?php
/**
 * Funciones core del tema Adrihosan
 *
 * Setup del tema, scripts, estilos, colores, etc.
 *
 * @package Adrihosan
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '20251007.1');
}

// =============================================================================
// SETUP DEL TEMA
// =============================================================================

if (!function_exists('adrihosan_setup')) :
    function adrihosan_setup() {
        load_theme_textdomain('adrihosan', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'adrihosan'),
            )
        );

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

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'adrihosan_setup');

function adrihosan_content_width() {
    $GLOBALS['content_width'] = apply_filters('adrihosan_content_width', 640);
}
add_action('after_setup_theme', 'adrihosan_content_width', 0);

// =============================================================================
// SCRIPTS Y ESTILOS
// =============================================================================

function adrihosan_scripts() {
    wp_enqueue_style('adrihosan-fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), _S_VERSION);
    wp_enqueue_style('adrihosan-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('adrihosan-style', 'rtl', 'replace');
    wp_enqueue_script('adrihosan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'adrihosan_scripts');

// Requires del tema padre
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}

// Admin scripts
if (is_admin()) {
    function css_back() {
        echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/dw-backend.css">';
    }
    add_action('admin_head', 'css_back');

    require get_template_directory() . '/inc/dw-cpt.php';
    require get_template_directory() . '/inc/dw-settings.php';

    add_action('init', 'dw_script_enqueuer_admin');
    function dw_script_enqueuer_admin() {
        wp_enqueue_script('dw-jquery-blockui', get_template_directory_uri() . '/jquery/jquery.blockUI.min.js', ['jquery'], _S_VERSION, false);
    }
}

function dw_scripts() {
    wp_enqueue_script('dw-customizer', get_template_directory_uri() . '/js/dw-customizer.js', array(), _S_VERSION, true);
    wp_localize_script('dw-customizer', 'var_cus', array(
        'accordion' => get_option('dw-op-cetelem-accordion'),
        'custom_menu_cats' => doo_menu_cats(),
    ));
}
add_action('wp_enqueue_scripts', 'dw_scripts');

// Más requires
require get_template_directory() . '/inc/dw-cf-page.php';
require get_template_directory() . '/inc/dw-shortcodes.php';
require get_template_directory() . '/inc/dw-posts.php';
require get_template_directory() . '/inc/wc-functions.php';
require get_template_directory() . '/inc/brands.php';
require get_template_directory() . '/inc/wc-cf.php';
require get_template_directory() . '/inc/wc-cf-cat.php';
require get_template_directory() . '/inc/wc-search.php';
require get_template_directory() . '/inc/dw-cf-post.php';
require get_template_directory() . '/inc/dw-cpt-escaparate.php';
require get_template_directory() . '/inc/doo-cpt-proyecto.php';

// =============================================================================
// BODY CLASS
// =============================================================================

function add_slug_body_class($classes) {
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');

// =============================================================================
// ADMIN MENU - BLOQUES REUTILIZABLES
// =============================================================================

function dw_register_block_reusable_menu_page() {
    add_menu_page(
        __('Bloques reutilizables', 'dw'),
        __('Bloques reutilizables', 'dw'),
        'edit_posts',
        'edit.php?post_type=wp_block',
        '',
        'dashicons-book-alt',
        20
    );
}
add_action('admin_menu', 'dw_register_block_reusable_menu_page');

// Elimina el aviso de Past-due
add_filter('action_scheduler_pastdue_actions_check_pre', '__return_false');

// Shortcodes en contenido
add_filter('the_content', 'do_shortcode');

// =============================================================================
// PALETA DE COLORES
// =============================================================================

function doo_colors_palette() {
    add_theme_support('editor-color-palette', array(
        array('name' => __('Black', 'doo'), 'slug' => 'doo-black', 'color' => '#000000'),
        array('name' => __('White', 'doo'), 'slug' => 'doo-white', 'color' => '#FFFFFF'),
        array('name' => __('Blue', 'doo'), 'slug' => 'doo-blue', 'color' => '#4DD2D0'),
        array('name' => __('Red', 'doo'), 'slug' => 'doo-red', 'color' => '#F36'),
        array('name' => __('Green', 'doo'), 'slug' => 'doo-green', 'color' => '#1a6c7a'),
        array('name' => __('Green 2', 'doo'), 'slug' => 'doo-green-2', 'color' => '#1a6c7acc'),
        array('name' => __('Gray', 'doo'), 'slug' => 'doo-gray', 'color' => '#767676'),
        array('name' => __('Gray 1', 'doo'), 'slug' => 'doo-gray-1', 'color' => '#808080'),
        array('name' => __('Gray 2', 'doo'), 'slug' => 'doo-gray-2', 'color' => '#C8C8C8'),
        array('name' => __('Gray 3', 'doo'), 'slug' => 'doo-gray-3', 'color' => '#BDBDBD'),
        array('name' => __('Gray 4', 'doo'), 'slug' => 'doo-gray-4', 'color' => '#DFD7C9'),
        array('name' => __('Gray 5', 'doo'), 'slug' => 'doo-gray-5', 'color' => '#F2F2F2'),
        array('name' => __('Gray 6', 'doo'), 'slug' => 'doo-gray-6', 'color' => '#F6F6F6'),
        array('name' => __('Gray 7', 'doo'), 'slug' => 'doo-gray-7', 'color' => '#F7F7F7'),
        array('name' => __('Black 1', 'doo'), 'slug' => 'doo-black-1', 'color' => '#333333'),
        array('name' => __('Black 2', 'doo'), 'slug' => 'doo-black-2', 'color' => '#171717'),
        array('name' => __('Black 3', 'doo'), 'slug' => 'doo-black-3', 'color' => '#4F4F4F'),
        array('name' => __('Black light', 'doo'), 'slug' => 'doo-black-light', 'color' => '#102E35'),
    ));
}
add_action('after_setup_theme', 'doo_colors_palette', 11);

// =============================================================================
// DEBUG LOG
// =============================================================================

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

// =============================================================================
// WOOCOMMERCE SETUP
// =============================================================================

function wc_setup() {
    add_theme_support('woocommerce', array(
        'product_blocks' => array(
            'max_rows' => 100,
        ),
    ));
}
add_action('after_setup_theme', 'wc_setup');

// Custom blocks
require_once get_theme_file_path('blocks/blocks.php');

// =============================================================================
// LOGIN
// =============================================================================

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
add_action('login_enqueue_scripts', 'doo_login_logo');

// =============================================================================
// REWRITE RULES
// =============================================================================

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

// =============================================================================
// BLOCK SUPPORT
// =============================================================================

function doo_block_support_setup() {
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'doo_block_support_setup');

// =============================================================================
// COUNTDOWN SHORTCODE
// =============================================================================

function countdown_shortcode($atts) {
    $atts = shortcode_atts(array(
        'fecha' => '25-11-2025 00:00',
        'mensaje_final' => '',
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
    $fecha_js = $fecha_valida->format('Y-m-d') . ' ' . $hora_completa;

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

// Canonical en feeds
add_action('template_redirect', function() {
    if (is_feed()) {
        $canonical = get_permalink(get_queried_object_id());
        header('Link: <' . $canonical . '>; rel="canonical"', false);
    }
});
