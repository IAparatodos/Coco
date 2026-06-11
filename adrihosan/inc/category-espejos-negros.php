<?php
/**
 * Category: Espejos de Ba&ntilde;o Negros (ID: 5141)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 5141 - ESPEJOS DE BA&Ntilde;O NEGROS
// ============================================================================

function adrihosan_espejos_negros_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/espejo-de-bano-negro-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/">Espejos de Ba&ntilde;o</a> &gt;
                <span>Espejos Negros</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Espejos de Ba&ntilde;o Negros' ); ?></h1>
            <p class="hero-tagline">La elegancia del marco negro en tu ba&ntilde;o.</p>
            <p>Espejos de ba&ntilde;o con marco o acabado negro para ba&ntilde;os con car&aacute;cter. Redondos, rectangulares, con luz LED o sin iluminaci&oacute;n. El negro combina con cualquier mueble y genera contraste visual que destaca en ba&ntilde;os modernos, industriales o minimalistas.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#9899;</div>
                <div class="trust-text">
                    <strong>Marco Negro Mate</strong>
                    <span>Acabado elegante sin reflejos</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128161;</div>
                <div class="trust-text">
                    <strong>Con y Sin Luz LED</strong>
                    <span>Antivaho integrado en modelos LED</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128280;</div>
                <div class="trust-text">
                    <strong>Formas Variadas</strong>
                    <span>Redondos, rectangulares, ovalados</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Env&iacute;o Gratis</strong>
                    <span>Pen&iacute;nsula con seguro de transporte</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Forma</strong> (Redondo, Rectangular, Ovalado, Irregular), <strong>Iluminaci&oacute;n</strong> (Con luz LED o Sin luz) y <strong>Ancho</strong> (60, 70, 80, 100 o 120&nbsp;cm) para encontrar el espejo negro ideal para tu ba&ntilde;o. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <!-- TODO Ricardo: si necesitas un widget FE espec&iacute;fico para espejos, sustituye el ID 427306 -->
    <div id="destino-filtro-adria-espejos-negros" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-espejos-negros" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Espejos de Ba&ntilde;o Negros</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_espejos_negros_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->
    <?php

    // SEO: Contenido din&aacute;mico desde WooCommerce category_description()
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

    <!-- BANNER INSPIRACI&Oacute;N "BA&Ntilde;O NEGRO" -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/bano-negro-griferia-Adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>El conjunto contempor&aacute;neo: espejo negro + griferia negra</h2>
                <p>Combina tu espejo negro con grifer&iacute;a a juego para un conjunto contempor&aacute;neo y coherente. La l&iacute;nea oscura unifica el ba&ntilde;o y multiplica la sensaci&oacute;n de dise&ntilde;o.</p>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/griferia-negra-para-bano/" class="bumper-btn">Ver Grifer&iacute;a Negra</a>
            </div>
        </div>
    </section>

    <!-- ACCESO A CATEGOR&Iacute;AS RELACIONADAS -->
    <section class="related-cats-section adrihosan-full-width-block">
        <div class="related-cats-wrapper">
            <h2 class="related-cats-title">Tambi&eacute;n te puede interesar</h2>
            <p class="related-cats-subtitle">Explora otros espejos y elementos para coordinar tu ba&ntilde;o.</p>
            <div class="related-cats-grid">
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/" class="related-cat-card">
                    <div class="related-cat-icon">&#128161;</div>
                    <div class="related-cat-label">Espejos con Luz LED</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/" class="related-cat-card">
                    <div class="related-cat-icon">&#128280;</div>
                    <div class="related-cat-label">Espejos Redondos</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/" class="related-cat-card">
                    <div class="related-cat-icon">&#129685;</div>
                    <div class="related-cat-label">Todos los Espejos</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/mamparas/mampara-negra/" class="related-cat-card">
                    <div class="related-cat-icon">&#128703;</div>
                    <div class="related-cat-label">Mamparas Negras</div>
                </a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Espejos de ba&ntilde;o negros: el acento decorativo que define un ba&ntilde;o moderno</h2>
            <p>Los <strong>espejos de ba&ntilde;o negros</strong> son una de las apuestas decorativas con mayor impacto visual a m&iacute;nimo coste. Un marco negro mate o satinado convierte un elemento puramente funcional en un acento gr&aacute;fico que define el car&aacute;cter del ba&ntilde;o entero. Funcionan especialmente bien en <strong>ambientes modernos, industriales y minimalistas</strong>, pero combinan tambi&eacute;n con propuestas n&oacute;rdicas, japandi y estilos boho-mediterr&aacute;neos. La clave est&aacute; en la versatilidad: el negro nunca compite con el resto de la decoraci&oacute;n, simplemente la enmarca.</p>
            <p>En la categor&iacute;a encontrar&aacute;s las dos grandes familias: <strong>espejos negros con luz LED integrada</strong> (la mayor&iacute;a con funci&oacute;n antivaho activable por interruptor t&aacute;ctil) y <strong>espejos negros sin iluminaci&oacute;n</strong> para ba&ntilde;os que ya cuentan con buena luz cenital o como complemento decorativo en zonas de paso. Las formas dominantes son el redondo (perfecto para romper la geometr&iacute;a de muebles rectangulares), el rectangular (aporta amplitud visual sobre encimeras alargadas) y el ovalado (suaviza l&iacute;neas y funciona en ba&ntilde;os m&aacute;s cl&aacute;sicos). Disponemos de anchos desde <strong>60&nbsp;cm</strong> para ba&ntilde;os peque&ntilde;os hasta <strong>120&nbsp;cm</strong> para configuraciones de doble seno.</p>
            <p>Para sacar el m&aacute;ximo partido a un espejo negro, conviene cuidar la <strong>coordinaci&oacute;n del conjunto</strong>: a&ntilde;ade <a href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/griferia-negra-para-bano/">grifer&iacute;a negra</a> a juego, valora una <a href="https://www.adrihosan.com/categoria-producto/mamparas/mampara-negra/">mampara con perfiles negros</a> y completa con peque&ntilde;os accesorios (toallero, portarrollos, dosificador) en el mismo tono. Si tu ba&ntilde;o es peque&ntilde;o, mant&eacute;n el resto de la paleta en blancos, beiges o grises claros para que el negro funcione como acento sin restar amplitud. Y si tu mueble es un <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/col-mbl-blanco/">suspendido blanco</a> o un <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-con-patas/col-mbl-roble/">con patas en roble</a>, el contraste con el espejo negro genera la combinaci&oacute;n m&aacute;s buscada esta temporada.</p>
        </div>
    </section>

    <!-- TENDENCIAS / LO M&Aacute;S BUSCADO -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Lo m&aacute;s buscado en espejos de ba&ntilde;o</h2>
            <p>Estos son los estilos y formas que m&aacute;s se est&aacute;n llevando nuestros clientes esta temporada.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/" class="trend-link">Con Luz LED</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/" class="trend-link">Redondos</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-dorado-bano/" class="trend-link">Dorados</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-antivaho/" class="trend-link">Antivaho</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/" class="trend-link">Sin Marco</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Espejos Negros</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipo de negro tienen los espejos de Adrihosan?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Trabajamos marcos en <strong>negro mate</strong> principalmente, que es el acabado m&aacute;s demandado por su elegancia y porque no refleja luz de forma agresiva. Algunos modelos incluyen marcos en negro satinado o con textura. Todos resisten la humedad y el vapor del ba&ntilde;o sin perder color ni brillo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El marco negro se ve muy oscuro en un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No necesariamente. El marco negro se percibe como un <strong>elemento gr&aacute;fico</strong>, no como un volumen pesado. En ba&ntilde;os peque&ntilde;os funciona muy bien si se mantiene el resto de la paleta en tonos claros, porque act&uacute;a como acento decorativo sin restar amplitud. Los espejos negros redondos de 60-70&nbsp;cm son la mejor elecci&oacute;n para espacios reducidos.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo combinar un espejo negro con un mueble de ba&ntilde;o blanco?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es una de las combinaciones m&aacute;s elegantes y demandadas actualmente. El contraste negro-blanco aporta frescura y modernidad sin complicaciones est&eacute;ticas. Para reforzar la l&iacute;nea, a&ntilde;ade grifer&iacute;a negra o peque&ntilde;os detalles en ese tono &mdash; toallero, portarrollos &mdash; y el conjunto queda perfectamente resuelto.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los espejos negros con luz LED tienen funci&oacute;n antivaho?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La <strong>mayor&iacute;a de nuestros modelos con LED</strong> incluyen funci&oacute;n antivaho integrada, que se activa con el interruptor t&aacute;ctil. Es una ventaja pr&aacute;ctica importante: el espejo no se empa&ntilde;a tras la ducha, manteniendo la visibilidad siempre. Consulta la ficha de cada producto para confirmar si ese modelo concreto lo incluye.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; forma de espejo negro queda mejor en un ba&ntilde;o moderno?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del resto del ba&ntilde;o. En ba&ntilde;os con l&iacute;neas rectas y muebles rectangulares, un <strong>espejo negro redondo</strong> rompe la geometr&iacute;a y aporta equilibrio visual. En ba&ntilde;os m&aacute;s org&aacute;nicos o con curvas, el <strong>rectangular negro</strong> aporta estructura. Los modelos irregulares son la apuesta m&aacute;s arriesgada pero tambi&eacute;n la m&aacute;s memorable &mdash; funcionan como pieza de dise&ntilde;o en ba&ntilde;os donde el espejo es protagonista declarado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en espejos de ba&ntilde;o negros">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu espejo negro?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20espejo%20de%20ba%C3%B1o%20negro" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 5141 - ESPEJOS DE BA&Ntilde;O NEGROS
// ============================================================================
