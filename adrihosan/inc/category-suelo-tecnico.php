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
            <h1>Suelo T&eacute;cnico Exterior: Porcel&aacute;nico de 20mm para Terrazas y Jardines</h1>
            <p>El pavimento profesional para exteriores. Piezas de alto espesor dise&ntilde;adas para soportar las condiciones m&aacute;s exigentes: heladas, tr&aacute;fico pesado y exposici&oacute;n continua.</p>
            <div class="hero-buttons">
                <a href="#catalogo-suelo-tecnico" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-suelo-tecnico" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; elegir suelo t&eacute;cnico de 20mm?</h2>
            <p class="section-subtitle">La soluci&oacute;n profesional para exteriores exigentes</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128170;</div>
                    <h3>Resistencia Extrema</h3>
                    <p>20mm de espesor que soportan <strong>cargas elevadas, tr&aacute;fico vehicular</strong> y condiciones clim&aacute;ticas adversas sin fisurarse.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#10052;&#65039;</div>
                    <h3>Antihielo</h3>
                    <p>Absorci&oacute;n de agua pr&aacute;cticamente nula. <strong>No se agrieta con las heladas</strong> ni con los ciclos de hielo-deshielo m&aacute;s extremos.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128736;</div>
                    <h3>Instalaci&oacute;n Vers&aacute;til</h3>
                    <p>Se puede colocar <strong>sobre plots (pedestales), sobre grava, hierba o pegado</strong> con cemento cola. M&aacute;xima flexibilidad en la obra.</p>
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
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

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
                        <span>&iquest;Qu&eacute; diferencia hay entre suelo t&eacute;cnico de 20mm y porcel&aacute;nico normal?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El suelo t&eacute;cnico tiene el <strong>doble de espesor</strong> que un porcel&aacute;nico convencional (20mm vs 9-10mm). Esto le confiere una resistencia mec&aacute;nica muy superior, permitiendo su instalaci&oacute;n sobre plots, grava o hierba sin necesidad de una base de hormig&oacute;n.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede instalar sobre plots sin obra?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una de sus grandes ventajas. La <strong>instalaci&oacute;n sobre plots (pedestales regulables)</strong> es r&aacute;pida, limpia y reversible. Permite crear terrazas elevadas sobre cubiertas planas, adem&aacute;s de facilitar el paso de instalaciones por debajo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Soporta el paso de veh&iacute;culos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, siempre que se instale correctamente sobre una <strong>base de hormig&oacute;n con cemento cola flexible</strong>. El suelo t&eacute;cnico de 20mm est&aacute; dise&ntilde;ado para soportar cargas puntuales elevadas, por lo que es apto para garajes y zonas de paso de veh&iacute;culos ligeros.</p>
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
