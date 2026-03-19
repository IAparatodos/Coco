<?php
/**
 * Category: Suelos Cocina (ID: 2285)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2285 - SUELOS COCINA
// Setup en functions-server.php -> adrihosan_setup_suelos_cocina_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_suelos_cocina_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelos-cocina-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Suelos para Cocina: Resistentes, Bonitos y F&aacute;ciles de Limpiar</h1>
            <p>Tu cocina necesita un suelo que aguante el ritmo del d&iacute;a a d&iacute;a: manchas, humedad, golpes y tr&aacute;fico constante. Descubre pavimentos que combinan dise&ntilde;o y funcionalidad.</p>
            <div class="hero-buttons">
                <a href="#catalogo-suelos-cocina" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-suelos-cocina" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Qu&eacute; necesita el suelo de tu cocina?</h2>
            <p class="section-subtitle">Caracter&iacute;sticas esenciales para la estancia m&aacute;s exigente</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128167;</div>
                    <h3>Resistencia a Manchas</h3>
                    <p>Aceite, vino, tomate... El porcel&aacute;nico <strong>no absorbe nada</strong>. Se limpia con agua y jab&oacute;n sin dejar huella.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128170;</div>
                    <h3>Durabilidad Extrema</h3>
                    <p>Resistente a ca&iacute;das de objetos, arrastre de muebles y tr&aacute;fico intenso. <strong>No se raya ni se desgasta</strong> con el uso diario.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Variedad de Estilos</h3>
                    <p>Desde imitaci&oacute;n madera hasta efecto cemento o m&aacute;rmol. Encuentra el <strong>look perfecto</strong> para tu cocina sin renunciar a la funcionalidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Para cocinas, busca acabados <strong>mate o satinados</strong> que disimulan mejor las huellas. Usa los filtros y pulsa <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-suelos-cocina" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-suelos-cocina" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos para Cocina</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_suelos_cocina_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelos para Cocina</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es el mejor suelo para una cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>porcel&aacute;nico</strong> es la opci&oacute;n m&aacute;s recomendable por su nula absorci&oacute;n de agua, resistencia a manchas y durabilidad extrema. Supera ampliamente al laminado (sensible al agua) y a la madera natural (requiere mantenimiento) en todas las prestaciones que exige una cocina.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un suelo de cocina debe ser antideslizante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es recomendable elegir un acabado con cierta <strong>rugosidad (Clase 1 o Clase 2)</strong> para evitar resbalones cuando el suelo est&aacute; mojado. No es necesario llegar a la Clase 3 (que es para exteriores), ya que ser&iacute;a excesivamente rugoso y m&aacute;s dif&iacute;cil de limpiar.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es buena idea poner el mismo suelo en cocina y sal&oacute;n?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es una excelente idea. Un suelo continuo entre cocina y sal&oacute;n <strong>ampl&iacute;a visualmente el espacio</strong> y aporta coherencia al dise&ntilde;o. El porcel&aacute;nico es el material perfecto para esto, ya que cumple los requisitos t&eacute;cnicos de ambas estancias.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-suelos-cocina" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con el suelo de tu cocina?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelos%20para%20cocina" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
