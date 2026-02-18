<?php
/**
 * Category: Suelos Imitación Madera (ID: 2209)
 * @package Adrihosan
 */

// =============================================================================
// SUELOS IMITACIÓN MADERA - ID 2209
// Setup en functions.php → adrihosan_setup_wood_cpu_fix()
// =============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_wood_contenido_superior() {
    $category_url = get_term_link(2209, 'product_cat');
    if (is_wp_error($category_url)) {
        $category_url = '#';
    }
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Suelos Imitaci&oacute;n Madera y Porcel&aacute;nico Efecto Madera</h1>
            <p>La calidez del parquet con la resistencia del gres porcel&aacute;nico. Descubre nuestra gama de baldosas y cer&aacute;mica imitaci&oacute;n madera para interior y exterior.</p>
            <div class="hero-buttons">
                <a href="#catalogo-wood" class="hero-btn primary">Ver Cat&aacute;logo Completo</a>
                <a href="#contacto-experto-wood" class="hero-btn secondary">Ver Ofertas y Precios</a>
            </div>
        </div>
    </section>

    <!-- 2. EXPLORA POR ESTILO (5 cards visuales) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-madera">
        <div class="ap-inspiration-wrapper">
            <h2>Explora por Estilo</h2>
            <p class="section-subtitle">Segmenta tu b&uacute;squeda seg&uacute;n el ambiente que quieres crear</p>
            <div class="ap-inspiration-grid ap-grid-5">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/borde-azulejo-rectificado/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg" alt="Suelo porcel&aacute;nico imitaci&oacute;n madera rectificado">
                    <div class="ap-card-content"><h3>Porcel&aacute;nico Rectificado</h3></div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/estancia-bano/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-bano-Adrihosan.jpg" alt="Ba&ntilde;os con suelo imitaci&oacute;n madera">
                    <div class="ap-card-content"><h3>Ba&ntilde;os y Cocinas</h3></div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/slip-si/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-terraza-Adrihosan.jpg" alt="Pavimento imitaci&oacute;n madera exterior antideslizante">
                    <div class="ap-card-content"><h3>Exterior y Antideslizante</h3></div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/tono-gris/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-cocina-Adrihosan.jpg" alt="Suelos imitaci&oacute;n madera gris y tonos claros">
                    <div class="ap-card-content"><h3>Tonos Grises y Claros</h3></div>
                </a>
                <a href="https://www.adrihosan.com/atributo/colocacion-azulejo/col-espiga/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-piscina-Adrihosan.jpg" alt="Suelo imitaci&oacute;n madera espiga">
                    <div class="ap-card-content"><h3>Suelo en Espiga</h3></div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. VENTAJAS -->
    <section class="wood-ventajas-section adrihosan-full-width-block">
        <div class="wood-ventajas-wrapper">
            <h2>&iquest;Por qu&eacute; elegir un suelo porcel&aacute;nico imitaci&oacute;n madera?</h2>
            <div class="wood-ventajas-grid">
                <div class="wood-ventaja-card">
                    <div class="wood-ventaja-icon">&#128170;</div>
                    <h3>Adi&oacute;s al Mantenimiento</h3>
                    <p>A diferencia del parquet natural, nuestro gres efecto madera no se raya ni necesita barniz.</p>
                </div>
                <div class="wood-ventaja-card">
                    <div class="wood-ventaja-icon">&#128167;</div>
                    <h3>Apto para Ba&ntilde;os</h3>
                    <p>Cer&aacute;mica imitaci&oacute;n madera 100% impermeable, ideal para zonas h&uacute;medas.</p>
                </div>
                <div class="wood-ventaja-card">
                    <div class="wood-ventaja-icon">&#127968;</div>
                    <h3>Textura Realista</h3>
                    <p>Acabados con relieve que imitan la veta natural. Gres porcel&aacute;nico de alta definici&oacute;n.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Para encontrar tu suelo ideal, usa los filtros de <strong>Ubicaci&oacute;n</strong> y <strong>Acabado</strong>. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO MÓVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-wood" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <!-- 6. TÍTULO CATÁLOGO -->
    <div id="catalogo-wood" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos Imitaci&oacute;n Madera</h2>
    </div>

    <?php
}

/**
 * Contenido INFERIOR (después de productos)
 */
function adrihosan_wood_contenido_inferior() {

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

    <!-- 7. FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelos Imitaci&oacute;n Madera</h2>

            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es mejor: Tarima o Suelo Porcel&aacute;nico Imitaci&oacute;n Madera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El suelo porcel&aacute;nico imitaci&oacute;n madera supera a la tarima en durabilidad, resistencia a la humedad y mantenimiento. No se raya, no necesita barniz y es apto para cualquier estancia, incluidos ba&ntilde;os y cocinas. La tarima requiere lijado peri&oacute;dico, es sensible al agua y se deteriora con el tr&aacute;fico intenso. La &uacute;nica ventaja de la tarima es la sensaci&oacute;n t&eacute;rmica al tacto, pero con suelo radiante, el porcel&aacute;nico es incluso m&aacute;s eficiente.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se puede poner suelo imitaci&oacute;n madera en ba&ntilde;os y cocinas?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, es una de sus mayores ventajas. Al ser cer&aacute;mica, el suelo imitaci&oacute;n madera es 100% impermeable y soporta la humedad, el vapor y la limpieza agresiva sin deteriorarse. Es la soluci&oacute;n perfecta para conseguir la est&eacute;tica de la madera en zonas h&uacute;medas donde el parquet natural ser&iacute;a un riesgo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Ten&eacute;is suelo porcel&aacute;nico imitaci&oacute;n madera barato?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, en Adrihosan tenemos una amplia gama de precios. Contamos con opciones econ&oacute;micas de gres imitaci&oacute;n madera que no renuncian a la calidad. Revisa nuestra secci&oacute;n de ofertas o usa el filtro de precio para encontrar suelos imitaci&oacute;n madera al mejor precio.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirve para exterior?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, pero es importante elegir el acabado correcto. Para terrazas, patios y piscinas debes seleccionar un pavimento imitaci&oacute;n madera con acabado <strong>antideslizante Clase 3 (C3)</strong>, que es la normativa que garantiza seguridad en zonas h&uacute;medas exteriores. Adem&aacute;s, el porcel&aacute;nico resiste heladas y no pierde color con el sol.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es apto para suelo radiante?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Es ideal. El porcel&aacute;nico es un excelente conductor t&eacute;rmico, muy superior a la madera natural. Optimiza la eficiencia de los sistemas de calefacci&oacute;n por suelo radiante. Lo m&aacute;s importante es usar un <strong>cemento cola flexible</strong>, ya que debe absorber las dilataciones y contracciones producidas por la calefacci&oacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es un suelo rectificado y por qu&eacute; es importante?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un suelo rectificado tiene los bordes cortados en un &aacute;ngulo perfecto de 90 grados. Permite una instalaci&oacute;n con juntas m&iacute;nimas (1-2 mm), logrando un efecto visual de superficie continua, mucho m&aacute;s realista y elegante. Es la opci&oacute;n premium para quienes buscan un acabado impecable.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Realmente parece madera natural?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. La tecnolog&iacute;a de impresi&oacute;n digital HD reproduce la veta, la textura y el relieve del nudo con un realismo excepcional, incluso al tacto. Es pr&aacute;cticamente indistinguible de la madera natural a simple vista.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Por qu&eacute; hay tanta diferencia de precio entre gres y porcel&aacute;nico?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El <strong>gres porcel&aacute;nico</strong> es mucho m&aacute;s denso y resistente, con absorci&oacute;n de agua casi nula (&lt;0.5%), lo que lo hace apto para exterior, ba&ntilde;os y cocinas. El gres de pasta roja es m&aacute;s poroso y econ&oacute;mico, pero solo se recomienda para interiores de bajo tr&aacute;nsito. A largo plazo, el porcel&aacute;nico es siempre mejor inversi&oacute;n.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CONTACTO RICARDO -->
    <section id="contacto-experto-wood" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu suelo imitaci&oacute;n madera?</h2>
                    <p>&iquest;No sabes si elegir rectificado o normal? &iquest;Dudas entre el tono roble o gris? Te ayudo a calcular los metros y encontrar el mejor precio sin compromiso.</p>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelos%20imitaci%C3%B3n%20madera" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
