<?php
/**
 * Category: Porcelanico Tecnico (ID: 2471)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2471 - PORCELANICO TECNICO
// Setup en functions-server.php -> adrihosan_setup_porcelanico_tecnico_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_porcelanico_tecnico_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/porcelanico-tecnico-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Porcel&aacute;nico T&eacute;cnico: M&aacute;xima Resistencia para Espacios Exigentes</h1>
            <p>El material m&aacute;s duro y resistente del mercado cer&aacute;mico. Dise&ntilde;ado para soportar tr&aacute;fico intenso, abrasi&oacute;n y condiciones extremas sin perder su aspecto.</p>
            <div class="hero-buttons">
                <a href="#catalogo-tecnico" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-tecnico" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Qu&eacute; hace diferente al porcel&aacute;nico t&eacute;cnico?</h2>
            <p class="section-subtitle">Prestaciones superiores para proyectos que exigen lo m&aacute;ximo</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128170;</div>
                    <h3>Dureza Extrema</h3>
                    <p>Color en toda la masa de la pieza. Aunque se raye o desgaste, <strong>no se nota</strong> porque el color es uniforme en todo el espesor.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127970;</div>
                    <h3>Uso Comercial</h3>
                    <p>Ideal para <strong>locales comerciales, oficinas, zonas p&uacute;blicas</strong> y cualquier espacio con tr&aacute;fico intenso que requiera un pavimento indestructible.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128167;</div>
                    <h3>Absorci&oacute;n Cero</h3>
                    <p>Absorci&oacute;n de agua inferior al 0.1%. El material cer&aacute;mico <strong>m&aacute;s impermeable</strong> que existe, apto para cualquier condici&oacute;n.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> El porcel&aacute;nico t&eacute;cnico es la elecci&oacute;n profesional para proyectos exigentes. Usa los filtros de <strong>Formato</strong> y <strong>Acabado</strong> y pulsa <strong>&quot;FILTRAR&quot;</strong>.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-tecnico" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-tecnico" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Porcel&aacute;nico T&eacute;cnico</h2>
    </div>

    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_porcelanico_tecnico_contenido_inferior() {
    ?>

    <!-- SEO: Contenido dinamico -->
    <?php
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

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Porcel&aacute;nico T&eacute;cnico</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre porcel&aacute;nico t&eacute;cnico y porcel&aacute;nico esmaltado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El porcel&aacute;nico t&eacute;cnico (o de masa coloreada) tiene <strong>color uniforme en todo su espesor</strong>, mientras que el esmaltado tiene una capa decorativa superficial. Esto significa que el t&eacute;cnico es m&aacute;s resistente al desgaste profundo, ya que aunque se raye, el color interior es el mismo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es adecuado para uso dom&eacute;stico o solo comercial?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Aunque est&aacute; dise&ntilde;ado para los usos m&aacute;s exigentes, tambi&eacute;n es una excelente elecci&oacute;n para hogares que buscan la <strong>m&aacute;xima durabilidad</strong>. Es especialmente recomendable en viviendas con mascotas, ni&ntilde;os o mucho tr&aacute;nsito.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede usar en exteriores?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Su absorci&oacute;n de agua pr&aacute;cticamente nula lo hace <strong>resistente a heladas</strong> y apto para cualquier condici&oacute;n clim&aacute;tica. Disponible en acabados antideslizantes para garantizar la seguridad en zonas exteriores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-tecnico" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20porcel%C3%A1nico%20t%C3%A9cnico" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
