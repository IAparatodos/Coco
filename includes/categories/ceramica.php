<?php
/**
 * Contenido de categoría - Cerámica (62)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

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

// DESACTIVADO - El CSS de filtros ahora está en el Controlador Maestro (función adrihosan_ocultar_filtros_antiguos_css)
// add_action( 'wp_head', 'adrihosan_kill_theme_stuff_cat62', 999 );
// function adrihosan_kill_theme_stuff_cat62() {
//     if ( is_product_category( 62 ) ) {
//         echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper { display: none !important; }</style>';
//     }
// }

/* ========================================================================== */
/* PÁGINA PILAR PORCELÁNICO (ID 2410) - VERSIÓN MAESTRA 2026 */
/* ========================================================================== */

// DESACTIVADO - Migrado al Controlador Maestro (línea 33)
// add_action( 'wp', 'adrihosan_pilar_porcelanico_controller' );

