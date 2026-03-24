<?php
/**
 * Category: Azulejos Hexagonales Suelo (ID: 2377)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2377 - AZULEJOS HEXAGONALES SUELO
// Setup en functions-server.php -> adrihosan_setup_hexagonal_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_hexagonal_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/Azulejos-hexagonales-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Azulejos Hexagonales para Suelo: Geometr&iacute;a con Car&aacute;cter</h1>
            <p>Rompe con lo convencional. Los pavimentos hexagonales aportan personalidad y dinamismo a cualquier estancia, desde ba&ntilde;os hasta salones.</p>
            <div class="hero-buttons">
                <a href="#catalogo-hexagonal" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-hexagonal" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; elegir un suelo hexagonal?</h2>
            <p class="section-subtitle">M&aacute;s que una forma: un concepto decorativo</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#11042;</div>
                    <h3>Dise&ntilde;o &Uacute;nico</h3>
                    <p>La forma hexagonal rompe la monoton&iacute;a de las baldosas rectangulares y crea composiciones visuales que <strong>no pasan de moda</strong>.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Combina Estilos</h3>
                    <p>Desde el efecto madera hasta el hidr&aacute;ulico o el cemento. El formato hexagonal se adapta a <strong>cualquier est&eacute;tica</strong>.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128736;</div>
                    <h3>Versatilidad Total</h3>
                    <p>Apto para suelos, paredes y transiciones entre estancias. Crea <strong>alfombras cer&aacute;micas</strong> combinando con otros formatos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong> y <strong>Acabado</strong> para encontrar tu hexagonal ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-hexagonal" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-hexagonal" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Hexagonales para Suelo</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_hexagonal_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Hexagonales Suelo</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son dif&iacute;ciles de instalar los azulejos hexagonales para suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No, su instalaci&oacute;n es similar a la de otros tipos de azulejos, aunque recomendamos contar con un profesional para un acabado perfecto.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo puedo limpiar mis azulejos hexagonales para suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La limpieza es sencilla: agua, jab&oacute;n neutro y un pa&ntilde;o suave son suficientes para mantenerlos impecables.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo combinar diferentes colores y texturas en los azulejos hexagonales?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>&iexcl;Claro! Una de las grandes ventajas de estos azulejos es su capacidad para crear combinaciones &uacute;nicas y personalizadas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los azulejos hexagonales para suelo son resistentes al agua?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, son altamente resistentes al agua, lo que los hace ideales para ba&ntilde;os y cocinas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipo de ambiente puedo crear con azulejos hexagonales para suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde ambientes modernos y atrevidos hasta espacios cl&aacute;sicos y elegantes, todo depende de tu elecci&oacute;n de colores y patrones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-hexagonal" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto hexagonal?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20hexagonales" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
