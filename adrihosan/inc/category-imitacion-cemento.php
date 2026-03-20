<?php
/**
 * Category: Azulejos Imitacion Cemento (ID: 4973)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 4973 - AZULEJOS IMITACION CEMENTO
// Setup en functions-server.php -> adrihosan_setup_imitacion_cemento_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_imitacion_cemento_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/Azulejo-imitacion-microcemento-Adrihosan-1.jpg');">
        <div class="hero-content">
            <h1>Azulejos Imitaci&oacute;n Cemento: Estilo Industrial con la Resistencia del Porcel&aacute;nico</h1>
            <p>Consigue el look urbano y minimalista del microcemento sin sus inconvenientes. Suelos y paredes con acabado cemento, f&aacute;ciles de mantener y ultra resistentes.</p>
            <div class="hero-buttons">
                <a href="#catalogo-cemento" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-cemento" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; elegir porcel&aacute;nico efecto cemento?</h2>
            <p class="section-subtitle">Toda la est&eacute;tica del microcemento sin los problemas de mantenimiento</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128170;</div>
                    <h3>Sin Fisuras ni Grietas</h3>
                    <p>A diferencia del microcemento real, el porcel&aacute;nico efecto cemento <strong>no se agrieta</strong> con el tiempo ni requiere sellados peri&oacute;dicos.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128167;</div>
                    <h3>Resistente a Manchas</h3>
                    <p>Superficie no porosa que <strong>no absorbe l&iacute;quidos</strong>. Ideal para cocinas y ba&ntilde;os donde el cemento real sufrir&iacute;a.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Variedad de Tonos</h3>
                    <p>Desde el gris perla hasta el antracita. Encuentra el tono perfecto para tu <strong>estilo industrial, n&oacute;rdico o minimalista</strong>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Tono</strong> y <strong>Formato</strong> para encontrar tu azulejo efecto cemento ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-cemento" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-cemento" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Imitaci&oacute;n Cemento</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_imitacion_cemento_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Imitaci&oacute;n Cemento</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre microcemento y porcel&aacute;nico efecto cemento?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El microcemento es un revestimiento continuo que requiere aplicaci&oacute;n profesional, sellado peri&oacute;dico y puede agrietarse. El <strong>porcel&aacute;nico efecto cemento</strong> reproduce fielmente la est&eacute;tica pero con las ventajas de la cer&aacute;mica: cero mantenimiento, resistencia total a manchas y durabilidad extrema.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es adecuado para suelos de cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es una opci&oacute;n excelente. Al ser porcel&aacute;nico, <strong>no absorbe grasa, aceite ni l&iacute;quidos</strong>. Se limpia con agua y jab&oacute;n neutro, manteniendo su aspecto impecable durante d&eacute;cadas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tono de cemento queda mejor en espacios peque&ntilde;os?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los tonos claros (gris perla, arena) ampl&iacute;an visualmente el espacio. Si el espacio tiene buena luz natural, los tonos medios tambi&eacute;n funcionan muy bien. Evita los tonos muy oscuros en estancias peque&ntilde;as sin mucha iluminaci&oacute;n.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-cemento" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto efecto cemento?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20imitaci%C3%B3n%20cemento" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
