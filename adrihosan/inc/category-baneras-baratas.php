<?php
/**
 * Category: Ba&ntilde;eras Exentas Baratas (ID: 2279)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2279 - BA&Ntilde;ERAS EXENTAS BARATAS
// ============================================================================

/**
 * Orden FORZADO del catalogo: precio ascendente.
 *
 * Se engancha al query principal de WooCommerce solo cuando estamos en la
 * categoria 2279. Prioridad 20 para ejecutarse DESPUES del sistema interno
 * de catalog ordering de WC (prioridad 10), lo que sobrescribe el orden
 * elegido por el usuario en el dropdown "Ordenar por...". Es intencional:
 * en esta categoria queremos que SIEMPRE se vea precio asc.
 *
 * El check is_product_category( 2279 ) garantiza que NO afecta a otras
 * categorias ni a otras paginas del sitio.
 */
add_action( 'woocommerce_product_query', function( $q ) {
    if ( is_admin() || ! is_main_query() ) {
        return;
    }
    if ( is_product_category( 2279 ) ) {
        $q->set( 'meta_key', '_price' );
        $q->set( 'orderby', 'meta_value_num' );
        $q->set( 'order', 'ASC' );
    }
}, 20 );

function adrihosan_baneras_baratas_contenido_superior() {
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
                <span>Ba&ntilde;eras Exentas Baratas</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Ba&ntilde;eras Exentas Baratas' ); ?></h1>
            <p class="hero-tagline">Mejor relaci&oacute;n calidad-precio del mercado.</p>
            <p>Ba&ntilde;eras exentas con la mejor relaci&oacute;n calidad-precio del mercado, desde 974,90&nbsp;&euro;. Modelos acr&iacute;licos para reformas con presupuesto ajustado y Solid Surface a precios competitivos. Sin renunciar al dise&ntilde;o exento ni a las medidas est&aacute;ndar de mercado.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128176;</div>
                <div class="trust-text">
                    <strong>Desde 974,90&nbsp;&euro;</strong>
                    <span>Precio de entrada de la categor&iacute;a</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#9989;</div>
                <div class="trust-text">
                    <strong>Calidad garantizada</strong>
                    <span>Garant&iacute;a de fabricante en todos los modelos</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128208;</div>
                <div class="trust-text">
                    <strong>Medidas est&aacute;ndar</strong>
                    <span>170&times;80&nbsp;cm y otros formatos de mercado</span>
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

    <!-- 4. BLOQUE DESTACADO - RANGOS DE PRECIO -->
    <section class="bbar-precios-section">
        <div class="bbar-precios-wrapper">
            <h2>Cu&aacute;nto cuesta una ba&ntilde;era exenta</h2>
            <div class="bbar-tabla-scroll">
                <table class="bbar-tabla">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Precio desde</th>
                            <th>Precio hasta</th>
                            <th>Modelos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Material">Solid Surface y acr&iacute;lico</td>
                            <td data-label="Precio desde">974,90&nbsp;&euro;</td>
                            <td data-label="Precio hasta">5.101,90&nbsp;&euro;</td>
                            <td data-label="Modelos">278</td>
                        </tr>
                        <tr>
                            <td data-label="Material">Corian by DuPont</td>
                            <td data-label="Precio desde">1.663,90&nbsp;&euro;</td>
                            <td data-label="Precio hasta">5.101,90&nbsp;&euro;</td>
                            <td data-label="Modelos">4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="bbar-tabla-nota">Los precios var&iacute;an seg&uacute;n material, medidas, acabado y marca. El precio de entrada de 974,90&nbsp;&euro; corresponde a un modelo acr&iacute;lico de 170&times;80&nbsp;cm con las medidas est&aacute;ndar del sector. Los modelos Corian by DuPont arrancan a partir de 1.663,90&nbsp;&euro; por las caracter&iacute;sticas t&eacute;cnicas del material y el respaldo de la marca registrada DuPont.</p>
        </div>
    </section>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-baneras-baratas" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Ba&ntilde;eras Exentas Baratas</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_baneras_baratas_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- SECCION INSPIRACION (bloque unico) -->
    <section class="bbar-inspiration-section adrihosan-full-width-block">
        <div class="bbar-inspiration-wrapper">
            <!-- TODO: sustituir el placeholder por la imagen real -->
            <div class="bbar-inspiration-img"></div>
            <div class="bbar-inspiration-text">
                <h2>Mismo dise&ntilde;o exento, mismas medidas est&aacute;ndar, materiales contrastados</h2>
                <p>Una ba&ntilde;era exenta barata no es una ba&ntilde;era de menor categor&iacute;a: es la opci&oacute;n correcta para presupuestos ajustados o reformas donde la ba&ntilde;era no es la pieza protagonista del proyecto.</p>
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
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/baneras-exentas/baneras-exentas-modernas/" class="banex-pill">Ba&ntilde;eras modernas</a>
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Ba&ntilde;eras Exentas Baratas</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta la ba&ntilde;era exenta m&aacute;s barata?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La ba&ntilde;era exenta m&aacute;s barata de nuestro cat&aacute;logo arranca en 974,90&nbsp;&euro;. Es un modelo acr&iacute;lico de 170&times;80&nbsp;cm con las medidas est&aacute;ndar del sector y acabado en blanco. Por debajo de ese precio el mercado ofrece ba&ntilde;eras de uso ocasional o sin garant&iacute;a clara, opciones que no incluimos en nuestro cat&aacute;logo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Las ba&ntilde;eras baratas son de peor calidad?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No necesariamente. Una ba&ntilde;era acr&iacute;lica de cat&aacute;logo cumple perfectamente para uso dom&eacute;stico est&aacute;ndar y tiene una vida &uacute;til de 15-20 a&ntilde;os con mantenimiento b&aacute;sico. La diferencia con una ba&ntilde;era premium est&aacute; en el material (Solid Surface frente a acr&iacute;lico), no en defectos de fabricaci&oacute;n. Todos los modelos que vendemos tienen garant&iacute;a de fabricante.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; incluye el precio de una ba&ntilde;era exenta barata?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El precio incluye la ba&ntilde;era, la v&aacute;lvula y el sif&oacute;n. Algunos modelos incluyen tambi&eacute;n el rebosadero. La grifer&iacute;a, los anclajes especiales y el portarrollos se compran por separado. En cada ficha de producto figura el detalle exacto de lo incluido.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo financiar una ba&ntilde;era exenta barata?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Ofrecemos formas de pago flexibles en todos los modelos del cat&aacute;logo. El detalle de las opciones disponibles aparece en el checkout antes de finalizar la compra.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hay ofertas o descuentos en ba&ntilde;eras exentas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, mantenemos modelos en oferta de forma rotativa seg&uacute;n stock y proveedor. Los modelos rebajados aparecen marcados con la etiqueta de oferta en el listado. Para enterarte de las pr&oacute;ximas ofertas puedes seguirnos en redes sociales o suscribirte a la newsletter desde el pie de p&aacute;gina.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;La ba&ntilde;era exenta barata incluye env&iacute;o gratis?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Todos los modelos de cat&aacute;logo, tambi&eacute;n los m&aacute;s econ&oacute;micos, llevan env&iacute;o gratis a pen&iacute;nsula con seguro de transporte. El plazo de entrega aparece en cada ficha de producto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en ba&ntilde;eras exentas baratas">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda con tu presupuesto?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20una%20ba%C3%B1era%20exenta%20barata" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 2279 - BA&Ntilde;ERAS EXENTAS BARATAS
// ============================================================================
