<?php
/**
 * Category: Suelos Rusticos (ID: 2273)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2273 - SUELOS RUSTICOS
// Setup en functions-server.php -> adrihosan_setup_suelos_rusticos_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_suelos_rusticos_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelos-rusticos-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Suelos R&uacute;sticos: Calidez y Autenticidad para tu Hogar</h1>
            <p>Pavimentos con alma. Los suelos r&uacute;sticos aportan car&aacute;cter, textura y esa sensaci&oacute;n de calidez que solo los acabados naturales pueden ofrecer.</p>
            <div class="hero-buttons">
                <a href="#catalogo-rusticos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-rusticos" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; elegir un suelo r&uacute;stico?</h2>
            <p class="section-subtitle">La belleza de lo natural con la tecnolog&iacute;a del porcel&aacute;nico</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127968;</div>
                    <h3>Car&aacute;cter &Uacute;nico</h3>
                    <p>Texturas irregulares, bordes naturales y variaciones cromáticas que dan a cada espacio una <strong>personalidad irrepetible</strong>.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128170;</div>
                    <h3>Resistencia Natural</h3>
                    <p>Acabados texturizados que <strong>disimulan el desgaste</strong> y las peque&ntilde;as imperfecciones del uso diario. Perfectos para hogares con vida.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Versatilidad</h3>
                    <p>Desde casas de campo hasta lofts urbanos. El estilo r&uacute;stico se adapta y <strong>combina con decoraciones modernas y cl&aacute;sicas</strong> por igual.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Acabado</strong> y <strong>Tono</strong> para encontrar tu suelo r&uacute;stico ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-rusticos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427035"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-rusticos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos R&uacute;sticos</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_suelos_rusticos_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelos R&uacute;sticos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un suelo r&uacute;stico es dif&iacute;cil de limpiar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Aunque los acabados r&uacute;sticos tienen m&aacute;s textura, al ser <strong>porcel&aacute;nico esmaltado</strong> la superficie no es porosa. Se limpia con agua y jab&oacute;n neutro como cualquier otro suelo cer&aacute;mico. Los acabados texturizados incluso disimulan mejor las huellas y el polvo que los lisos.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede poner suelo r&uacute;stico en una casa moderna?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Absolutamente. El estilo r&uacute;stico moderno o &quot;rustic chic&quot; es una de las tendencias m&aacute;s fuertes en decoraci&oacute;n. Un suelo de <strong>barro cocido o terracota porcel&aacute;nica</strong> combinado con muebles contempor&aacute;neos crea un contraste elegante y acogedor.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los suelos r&uacute;sticos son antideslizantes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La mayor&iacute;a de los suelos r&uacute;sticos tienen acabados texturizados que ofrecen un <strong>buen nivel de adherencia</strong> de forma natural. Muchos modelos cuentan con clasificaci&oacute;n antideslizante que los hace aptos tanto para interior como para zonas exteriores cubiertas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-rusticos" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu suelo r&uacute;stico?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelos%20r%C3%BAsticos" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
