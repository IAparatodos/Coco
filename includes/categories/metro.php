<?php
/**
 * Contenido de categoría - Metro (2093)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

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
            <a href="#catalogo-metro-foco" class="hero-btn primary">7.5x15 cm</a>
            <a href="#catalogo-metro-foco" class="hero-btn primary">10x20 cm</a>
            <a href="#catalogo-metro-foco" class="hero-btn primary">10x30 cm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/textura-brillo-2/" class="hero-btn primary">Brillo</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/textura-mate/" class="hero-btn primary">Mate</a>
            <a href="#catalogo-metro-foco" class="hero-btn primary">Biselado</a>
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
// DESACTIVADO - El CSS de filtros ahora está en el Controlador Maestro (función adrihosan_ocultar_filtros_antiguos_css)
// add_action( 'wp_head', 'adrihosan_fix_category_styles_global', 99 );
