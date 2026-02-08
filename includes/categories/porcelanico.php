<?php
/**
 * Contenido de categoría - Porcelánico (2410)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

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

// DESACTIVADO - Migrado al Controlador Maestro (línea 33)
// add_action( 'wp', 'adrihosan_pilar_gran_formato_controller' );

