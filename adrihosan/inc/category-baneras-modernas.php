<?php
/**
 * Category: Ba&ntilde;eras Exentas Modernas (ID: 2311)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2311 - BA&Ntilde;ERAS EXENTAS MODERNAS
// ============================================================================

function adrihosan_baneras_modernas_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <!-- TODO: sustituir background-image por la URL real de la imagen hero -->
    <section class="hero-section-container adrihosan-full-width-block">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/">Ba&ntilde;eras Exentas</a> &gt;
                <span>Ba&ntilde;eras Exentas Modernas</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Ba&ntilde;eras Modernas' ); ?></h1>
            <p class="hero-tagline">Dise&ntilde;o contempor&aacute;neo, l&iacute;neas limpias.</p>
            <p>Ba&ntilde;eras exentas modernas de Solid Surface: dise&ntilde;o contempor&aacute;neo, l&iacute;neas limpias y acabados imposibles en materiales tradicionales. M&aacute;s de 275 modelos seleccionados por su est&eacute;tica actual y su comportamiento t&eacute;cnico.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#10024;</div>
                <div class="trust-text">
                    <strong>Dise&ntilde;o contempor&aacute;neo</strong>
                    <span>L&iacute;neas limpias y geometr&iacute;as actuales</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128300;</div>
                <div class="trust-text">
                    <strong>Solid Surface premium</strong>
                    <span>Resina mineral compuesta de alta densidad</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127752;</div>
                <div class="trust-text">
                    <strong>Acabados en color y mate</strong>
                    <span>Tonos imposibles en ba&ntilde;eras tradicionales</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Env&iacute;o gratis</strong>
                    <span>Pen&iacute;nsula con seguro de transporte</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. FILTROS - WIDGET FILTER EVERYTHING PRO -->
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="27667"]'); ?></div>

    <!-- 4. BLOQUE DESTACADO - QUE DEFINE UNA BANERA MODERNA -->
    <section class="bmod-define-section">
        <div class="bmod-define-wrapper">
            <h2>Qu&eacute; hace que una ba&ntilde;era sea moderna</h2>
            <div class="bmod-define-grid">
                <div class="bmod-define-item">
                    <div class="bmod-define-icon">&#129521;</div>
                    <div class="bmod-define-content">
                        <strong>Material</strong>
                        <span>Solid Surface y resina mineral compuesta (no acr&iacute;lico tradicional).</span>
                    </div>
                </div>
                <div class="bmod-define-item">
                    <div class="bmod-define-icon">&#128208;</div>
                    <div class="bmod-define-content">
                        <strong>Forma</strong>
                        <span>L&iacute;neas rectas, curvas org&aacute;nicas suaves y geometr&iacute;as limpias.</span>
                    </div>
                </div>
                <div class="bmod-define-item">
                    <div class="bmod-define-icon">&#127912;</div>
                    <div class="bmod-define-content">
                        <strong>Color</strong>
                        <span>Acabados mate, satinados y colores no disponibles en ba&ntilde;eras cl&aacute;sicas.</span>
                    </div>
                </div>
                <div class="bmod-define-item">
                    <div class="bmod-define-icon">&#128295;</div>
                    <div class="bmod-define-content">
                        <strong>Instalaci&oacute;n</strong>
                        <span>Exenta de libre instalaci&oacute;n, sin patas victorianas ni faldones.</span>
                    </div>
                </div>
            </div>
            <p class="bmod-define-nota">Las ba&ntilde;eras modernas se diferencian del modelo cl&aacute;sico por la fusi&oacute;n entre material premium y dise&ntilde;o contempor&aacute;neo. La selecci&oacute;n de esta secci&oacute;n excluye los modelos tradicionales para que cada producto encaje con el concepto actual de ba&ntilde;o de dise&ntilde;o.</p>
        </div>
    </section>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-baneras-modernas" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Ba&ntilde;eras Modernas</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_baneras_modernas_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- SECCION INSPIRACION (bloque unico) -->
    <section class="bmod-inspiration-section adrihosan-full-width-block">
        <div class="bmod-inspiration-wrapper">
            <!-- TODO: sustituir el placeholder por la imagen real -->
            <div class="bmod-inspiration-img"></div>
            <div class="bmod-inspiration-text">
                <h2>La pieza que define el car&aacute;cter del ba&ntilde;o completo</h2>
                <p>Una ba&ntilde;era moderna no es solo una pieza funcional: es el elemento que define el car&aacute;cter del ba&ntilde;o completo. Material continuo, l&iacute;neas que respiran y la libertad de elegir el color que encaja con tu proyecto.</p>
            </div>
        </div>
    </section>

    <!-- ACCESO A CATEGORIAS RELACIONADAS -->
    <section class="related-cats-section adrihosan-full-width-block">
        <div class="related-cats-wrapper">
            <h2 class="related-cats-title">Tambi&eacute;n te puede interesar</h2>
            <p class="related-cats-subtitle">Explora otros tipos de ba&ntilde;eras exentas y modelos relacionados.</p>
            <div class="banex-pills">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/banera-solid-surface/" class="banex-pill">Solid Surface</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/banera-corian/" class="banex-pill">Corian</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/banera-exenta-pequena/" class="banex-pill">Ba&ntilde;eras peque&ntilde;as</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/baneras-exentas-baratas/" class="banex-pill">Ba&ntilde;eras baratas</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/banhidro-si/" class="banex-pill">Con hidromasaje</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/" class="banex-pill">Todas las ba&ntilde;eras exentas</a>
            </div>
        </div>
    </section>

    <?php
    // 6. BLOQUE SEO: contenido estandar de WooCommerce (descripcion de la
    // categoria editada en el panel WP). Si esta vacia, no se imprime nada.
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Ba&ntilde;eras Modernas</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre una ba&ntilde;era moderna y una cl&aacute;sica?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La diferencia principal est&aacute; en el material y las l&iacute;neas. Una ba&ntilde;era moderna usa Solid Surface o resina mineral compuesta en una sola pieza moldeada, con l&iacute;neas limpias y geometr&iacute;as reducidas. Una ba&ntilde;era cl&aacute;sica suele ser acr&iacute;lica, con patas victorianas o faldones decorativos y acabados en blanco brillo. Ambas pueden ser exentas, pero solo la primera se considera moderna en el lenguaje actual del dise&ntilde;o de ba&ntilde;os.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Por qu&eacute; la secci&oacute;n &quot;Ba&ntilde;eras modernas&quot; no incluye modelos acr&iacute;licos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Porque las ba&ntilde;eras modernas que hoy demandan los proyectos de dise&ntilde;o se fabrican en Solid Surface, que permite acabados mate, colores no industriales y piezas en una sola moldura sin juntas. El acr&iacute;lico es un material excelente para presupuestos ajustados, pero est&eacute;ticamente pertenece a una generaci&oacute;n anterior de dise&ntilde;o. Si buscas una ba&ntilde;era acr&iacute;lica, te recomendamos la secci&oacute;n de Ba&ntilde;eras Baratas o la madre de Ba&ntilde;eras Exentas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Una ba&ntilde;era moderna es m&aacute;s cara que una cl&aacute;sica?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En general s&iacute;, porque el Solid Surface tiene un coste de producci&oacute;n mayor que el acr&iacute;lico. El precio de entrada en ba&ntilde;eras modernas Solid Surface ronda los 1.700&nbsp;&euro;, frente a los 974&nbsp;&euro; del acr&iacute;lico de cat&aacute;logo. La diferencia se justifica por el material, la durabilidad, la reparabilidad y los acabados disponibles.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Las ba&ntilde;eras modernas se pueden personalizar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Las ba&ntilde;eras de cat&aacute;logo no se personalizan: se compran con las medidas, colores y acabados que ofrece el fabricante. Para personalizaci&oacute;n real con tu propio dise&ntilde;o tenemos la secci&oacute;n Corian by DuPont, donde fabricamos a medida sobre proyecto del cliente con un plazo de 4 a 5 semanas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; color es m&aacute;s demandado en ba&ntilde;eras modernas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El blanco mate sigue siendo el m&aacute;s vendido, pero el negro mate ha crecido mucho en los &uacute;ltimos a&ntilde;os y el gris piedra empieza a tener demanda fuerte en proyectos de reforma de gama media-alta. En cada modelo de la secci&oacute;n figuran los colores disponibles. Si no encuentras el color exacto que buscas, escr&iacute;benos por la p&aacute;gina de contacto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en ba&ntilde;eras modernas">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu ba&ntilde;era moderna?
                        <span>Te asesoro sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">&#128205;</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">&#128187;</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">&#128222;</div>
                    <div class="label">Tel&eacute;fono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20una%20ba%C3%B1era%20moderna" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">&#9993;&#65039;</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2311 - BA&Ntilde;ERAS EXENTAS MODERNAS
// ============================================================================
