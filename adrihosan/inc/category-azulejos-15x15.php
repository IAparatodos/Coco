<?php
/**
 * Category: Azulejos 15x15 (ID: 2132)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2132 - AZULEJOS 15x15
// Setup en functions-server.php -> adrihosan_setup_azulejos_15x15_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_azulejos_15x15_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/azulejos-15x15-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Azulejos 15x15: El Formato Cl&aacute;sico que Nunca Falla</h1>
            <p>El peque&ntilde;o formato con grandes posibilidades. Los azulejos 15x15 son vers&aacute;tiles, atemporales y perfectos para crear composiciones &uacute;nicas en ba&ntilde;os y cocinas.</p>
            <div class="hero-buttons">
                <a href="#catalogo-15x15" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-15x15" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; elegir azulejos 15x15?</h2>
            <p class="section-subtitle">Peque&ntilde;o formato, infinitas posibilidades</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Estilo Atemporal</h3>
                    <p>Un cl&aacute;sico de la decoraci&oacute;n que encaja tanto en <strong>estilos vintage y r&uacute;sticos</strong> como en ambientes modernos y minimalistas.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128736;</div>
                    <h3>F&aacute;cil Adaptaci&oacute;n</h3>
                    <p>Su peque&ntilde;o formato se adapta a <strong>cualquier superficie</strong>, incluso las m&aacute;s irregulares. Ideal para columnas, nichos y rincones complicados.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#10024;</div>
                    <h3>Creatividad Sin L&iacute;mites</h3>
                    <p>Combina colores, patrones y colocaciones para crear <strong>composiciones personalizadas</strong>: damero, espiga, patchwork y mucho m&aacute;s.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong> y <strong>Acabado</strong> para encontrar tu azulejo 15x15 ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-15x15" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-15x15" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos 15x15</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_azulejos_15x15_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos 15x15</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los azulejos 15x15 son solo para estilo vintage?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En absoluto. Aunque tienen una fuerte asociaci&oacute;n con el estilo retro y mediterr&aacute;neo, los azulejos 15x15 en acabados lisos y colores neutros funcionan perfectamente en <strong>ambientes contempor&aacute;neos y n&oacute;rdicos</strong>. La clave est&aacute; en el color y la forma de colocaci&oacute;n.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden combinar varios colores en la misma pared?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una de sus grandes ventajas. Puedes crear <strong>composiciones tipo patchwork</strong>, combinar dos tonos en damero, o usar un color de acento intercalado. Las posibilidades creativas son pr&aacute;cticamente infinitas con este formato.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Tienen m&aacute;s juntas que los formatos grandes: es un problema?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>M&aacute;s juntas no es un problema si se usa una <strong>lechada de calidad</strong>. De hecho, las juntas pueden ser parte del dise&ntilde;o: una junta oscura sobre azulejo claro crea un efecto gr&aacute;fico muy atractivo. Adem&aacute;s, hoy existen lechadas antihongos que facilitan enormemente el mantenimiento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-15x15" class="contact-help-common adrihosan-full-width-block">
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%2015x15" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
