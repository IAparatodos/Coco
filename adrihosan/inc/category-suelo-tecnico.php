<?php
/**
 * Category: Suelo Tecnico Exterior (ID: 2350)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2350 - SUELO TECNICO EXTERIOR
// Setup en functions-server.php -> adrihosan_setup_suelo_tecnico_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_suelo_tecnico_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-tecnico-exterior-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Suelo T&eacute;cnico Exterior: Porcel&aacute;nico de Altas Prestaciones</h1>
            <p>El pavimento profesional para exteriores. Piezas de alto espesor y gran formato dise&ntilde;adas para soportar las condiciones m&aacute;s exigentes: heladas, tr&aacute;fico pesado y exposici&oacute;n continua.</p>
            <div class="hero-buttons">
                <a href="#catalogo-suelo-tecnico" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-suelo-tecnico" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; elegir suelo t&eacute;cnico exterior?</h2>
            <p class="section-subtitle">La soluci&oacute;n profesional para exteriores exigentes</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128170;</div>
                    <h3>Resistencia Extrema</h3>
                    <p>Soportan <strong>cargas elevadas</strong> y condiciones adversas.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#10052;&#65039;</div>
                    <h3>Antihielo</h3>
                    <p>Absorci&oacute;n de agua pr&aacute;cticamente nula. <strong>No se agrieta</strong>.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128736;</div>
                    <h3>Instalaci&oacute;n Vers&aacute;til</h3>
                    <p>Sobre <strong>plots, grava, hierba</strong> o pegado con cemento cola.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Acabado</strong> y <strong>Formato</strong> para encontrar tu suelo t&eacute;cnico ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-suelo-tecnico" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-suelo-tecnico" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelo T&eacute;cnico Exterior</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_suelo_tecnico_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 4. BANNER CAPTACIÓN DE LEADS -->
    <section class="adrihosan-full-width-block" style="background: #102e35; padding: 60px 20px; margin: 40px 0;">
        <div style="max-width: 850px; margin: 0 auto; text-align: center;">
            <h2 style="font-family: 'Poppins','Poppins Fallback',sans-serif; color: #4dd2d0; font-weight: 800; font-size: 1.8rem; margin: 0 0 20px;">&iquest;Buscas Suelo Elevado de 20mm sobre &quot;plots&quot;?</h2>
            <p style="font-family: 'Poppins','Poppins Fallback',sans-serif; color: #fff; font-size: 1.1rem; line-height: 1.7; margin: 0 0 30px; opacity: 0.9;">Si tu proyecto requiere nivelar pendientes, crear un drenaje r&aacute;pido u ocultar instalaciones en tu terraza, el sistema de baldosas espesoradas de 20mm es la soluci&oacute;n perfecta.</p>
            <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-tecnico/" class="hero-btn primary" style="background: #4dd2d0; color: #102e35; font-weight: 700;">Ver Cat&aacute;logo de Espesorados 20mm</a>
                <a href="https://www.adrihosan.com/contacto/" class="hero-btn secondary" style="border-color: #4dd2d0; color: #4dd2d0;">Solicitar Presupuesto Personalizado</a>
            </div>
        </div>
    </section>

    <!-- SEO: Contenido dinamico -->
    <?php
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #3f6f7b; line-height: 1.8;">
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelo T&eacute;cnico Exterior</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre el porcel&aacute;nico t&eacute;cnico est&aacute;ndar y el de 20mm?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El porcel&aacute;nico t&eacute;cnico de grosor est&aacute;ndar (aprox. 9-10mm) ofrece una dureza superficial incre&iacute;ble y propiedades antibacterianas, pero debe ir pegado al suelo con cemento cola. El <strong>porcel&aacute;nico de 20mm</strong> (espesorado) tiene el doble de masa, lo que lo hace autoportante: puede apoyarse &uacute;nicamente por las esquinas sobre plots (soportes) soportando el peso de personas y mobiliario sin romperse.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El porcel&aacute;nico t&eacute;cnico de gran formato es apto para fachadas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es la opci&oacute;n ideal. El <strong>gran formato</strong> minimiza el n&uacute;mero de juntas en la fachada, creando una est&eacute;tica limpia y moderna. Gracias a su resistencia a los rayos UV, el color se mantendr&aacute; inalterable durante d&eacute;cadas frente a la radiaci&oacute;n solar.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Por qu&eacute; elegir un suelo t&eacute;cnico para exterior en lugar de piedra natural?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>suelo t&eacute;cnico en gres porcel&aacute;nico</strong> imita la belleza de la piedra natural con total realismo, pero elimina todos sus inconvenientes. La piedra requiere mantenimientos anuales y suele generar verd&iacute;n. El porcel&aacute;nico es impermeable, antideslizante y su coste de mantenimiento es cero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-suelo-tecnico" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto de suelo t&eacute;cnico?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelo%20t%C3%A9cnico%20exterior" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
