<?php
/**
 * Category: Suelos Imitaci&oacute;n Madera (ID: 2209)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2209 - SUELOS IMITACI&Oacute;N MADERA
// ============================================================================

function adrihosan_wood_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/">Pavimentos</a> &gt;
                <span>Suelos Imitaci&oacute;n Madera</span>
            </nav>
            <h1>Suelos Imitaci&oacute;n Madera: Porcel&aacute;nico Efecto Madera &quot;Made in Spain&quot;</h1>
            <p>La calidez del parquet con la resistencia del gres porcel&aacute;nico. Descubre nuestra selecci&oacute;n de baldosas efecto madera para interior y exterior. Sin mantenimiento, impermeables y con textura realista. Calidad premium directa a tu obra.</p>
            <div class="hero-buttons">
                <a href="#catalogo-wood" class="hero-btn primary">Ver Cat&aacute;logo Completo</a>
                <a href="#estilos-madera" class="hero-btn secondary">Explorar Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACI&Oacute;N VISUAL DE SUBCATEGOR&Iacute;AS (Cluster) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-madera">
        <div class="ap-inspiration-wrapper">
            <h2>Explora Nuestros Suelos por Estilo</h2>
            <p class="section-subtitle">Encuentra el suelo imitaci&oacute;n madera perfecto seg&uacute;n el ambiente que buscas</p>
            <div class="ap-inspiration-grid grid-5-cols">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/borde-azulejo-rectificado/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg" alt="Suelo porcel&aacute;nico imitaci&oacute;n madera rectificado">
                    <div class="ap-card-content">
                        <h3>Porcel&aacute;nico Rectificado</h3>
                        <p>Juntas m&iacute;nimas, acabado premium</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/estancia-bano/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-bano-Adrihosan.jpg" alt="Suelo imitaci&oacute;n madera para ba&ntilde;os">
                    <div class="ap-card-content">
                        <h3>Ba&ntilde;os y Cocinas</h3>
                        <p>100% impermeables y resistentes</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/slip-si/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-terraza-Adrihosan.jpg" alt="Pavimento imitaci&oacute;n madera exterior antideslizante">
                    <div class="ap-card-content">
                        <h3>Exterior y Antideslizante</h3>
                        <p>Seguridad C3 para terrazas</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/tono-gris/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-cocina-Adrihosan.jpg" alt="Suelos imitaci&oacute;n madera gris y tonos claros">
                    <div class="ap-card-content">
                        <h3>Tonos Grises y Claros</h3>
                        <p>Estilo n&oacute;rdico y luminoso</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/atributo/colocacion-azulejo/col-espiga/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-piscina-Adrihosan.jpg" alt="Suelo imitaci&oacute;n madera en espiga">
                    <div class="ap-card-content">
                        <h3>Formato Espiga</h3>
                        <p>Elegancia cl&aacute;sica renovada</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Tono</strong>, <strong>Formato</strong> y <strong>Acabado</strong> para encontrar tu suelo ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-wood" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-wood" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos Imitaci&oacute;n Madera</h2>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginaci&oacute;n) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_wood_contenido_inferior() {
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

    <!-- BLOQUE SEO ESTRUCTURADO: TIPOS DE SUELOS IMITACI&Oacute;N MADERA -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Tipos de Suelo Imitaci&oacute;n Madera: &iquest;Cu&aacute;l elegir para tu reforma?</h2>
            <!-- Sub-bloque A: Por Material -->
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128142;</div>
                    <h3>Gres Porcel&aacute;nico</h3>
                    <p>M&aacute;xima resistencia y absorci&oacute;n casi nula (&lt;0.5%). Apto para interior, exterior, ba&ntilde;os y cocinas. La mejor inversi&oacute;n a largo plazo.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127968;</div>
                    <h3>Gres Pasta Roja</h3>
                    <p>La opci&oacute;n econ&oacute;mica para interiores de bajo tr&aacute;nsito. Acabados realistas a menor precio, ideal para presupuestos ajustados.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128170;</div>
                    <h3>Antideslizante C3</h3>
                    <p>Acabado espec&iacute;fico para exterior. M&aacute;xima seguridad en terrazas, piscinas y zonas h&uacute;medas. Resiste heladas y rayos UV.</p>
                </div>
            </div>
            <!-- Sub-bloque B: Por Acabado -->
            <div class="finish-info-block">
                <h3>Suelo Rectificado vs. Borde Natural</h3>
                <p>Los <strong>suelos rectificados</strong> tienen bordes cortados a 90&deg; con precisi&oacute;n l&aacute;ser, permitiendo juntas m&iacute;nimas (1-2mm) y un efecto de superficie continua m&aacute;s realista. Los suelos con <strong>borde natural</strong> requieren juntas de 3-5mm pero ofrecen mayor margen en la instalaci&oacute;n.</p>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS EN SUELOS IMITACI&Oacute;N MADERA -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Suelos Imitaci&oacute;n Madera</h2>
            <p>Desde los tonos grises n&oacute;rdicos hasta el roble cl&aacute;sico. El formato <a href="https://www.adrihosan.com/atributo/colocacion-azulejo/col-espiga/">espiga</a> sigue siendo el m&aacute;s demandado para quien busca un toque premium. Para zonas h&uacute;medas, la imitaci&oacute;n madera ha superado al m&aacute;rmol como primera opci&oacute;n.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/tono-gris/" class="trend-link">Tonos Grises</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/borde-azulejo-rectificado/" class="trend-link">Rectificados</a>
                <a href="https://www.adrihosan.com/atributo/colocacion-azulejo/col-espiga/" class="trend-link">Formato Espiga</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/slip-si/" class="trend-link">Antideslizantes</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelos Imitaci&oacute;n Madera</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es mejor: Tarima o Suelo Porcel&aacute;nico Imitaci&oacute;n Madera?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El suelo porcel&aacute;nico imitaci&oacute;n madera supera a la tarima en durabilidad, resistencia a la humedad y mantenimiento. No se raya, no necesita barniz y es apto para cualquier estancia, incluidos ba&ntilde;os y cocinas. La tarima requiere lijado peri&oacute;dico, es sensible al agua y se deteriora con el tr&aacute;fico intenso. La &uacute;nica ventaja de la tarima es la sensaci&oacute;n t&eacute;rmica al tacto, pero con suelo radiante, el porcel&aacute;nico es incluso m&aacute;s eficiente.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede poner suelo imitaci&oacute;n madera en ba&ntilde;os y cocinas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una de sus mayores ventajas. Al ser cer&aacute;mica, el suelo imitaci&oacute;n madera es 100% impermeable y soporta la humedad, el vapor y la limpieza agresiva sin deteriorarse. Es la soluci&oacute;n perfecta para conseguir la est&eacute;tica de la madera en zonas h&uacute;medas donde el parquet natural ser&iacute;a un riesgo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ten&eacute;is suelo porcel&aacute;nico imitaci&oacute;n madera barato?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, en Adrihosan tenemos una amplia gama de precios. Contamos con opciones econ&oacute;micas de gres imitaci&oacute;n madera que no renuncian a la calidad. Revisa nuestra secci&oacute;n de ofertas o usa el filtro de precio para encontrar suelos imitaci&oacute;n madera al mejor precio.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirve para exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, pero es importante elegir el acabado correcto. Para terrazas, patios y piscinas debes seleccionar un pavimento imitaci&oacute;n madera con acabado <strong>antideslizante Clase 3 (C3)</strong>, que es la normativa que garantiza seguridad en zonas h&uacute;medas exteriores. Adem&aacute;s, el porcel&aacute;nico resiste heladas y no pierde color con el sol.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es apto para suelo radiante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es ideal. El porcel&aacute;nico es un excelente conductor t&eacute;rmico, muy superior a la madera natural. Optimiza la eficiencia de los sistemas de calefacci&oacute;n por suelo radiante. Lo m&aacute;s importante es usar un <strong>cemento cola flexible</strong>, ya que debe absorber las dilataciones y contracciones producidas por la calefacci&oacute;n.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es un suelo rectificado y por qu&eacute; es importante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un suelo rectificado tiene los bordes cortados en un &aacute;ngulo perfecto de 90 grados. Permite una instalaci&oacute;n con juntas m&iacute;nimas (1-2 mm), logrando un efecto visual de superficie continua, mucho m&aacute;s realista y elegante. Es la opci&oacute;n premium para quienes buscan un acabado impecable.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Realmente parece madera natural?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. La tecnolog&iacute;a de impresi&oacute;n digital HD reproduce la veta, la textura y el relieve del nudo con un realismo excepcional, incluso al tacto. Es pr&aacute;cticamente indistinguible de la madera natural a simple vista.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Por qu&eacute; hay tanta diferencia de precio entre gres y porcel&aacute;nico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>gres porcel&aacute;nico</strong> es mucho m&aacute;s denso y resistente, con absorci&oacute;n de agua casi nula (&lt;0.5%), lo que lo hace apto para exterior, ba&ntilde;os y cocinas. El gres de pasta roja es m&aacute;s poroso y econ&oacute;mico, pero solo se recomienda para interiores de bajo tr&aacute;nsito. A largo plazo, el porcel&aacute;nico es siempre mejor inversi&oacute;n.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en suelos imitaci&oacute;n madera">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu suelo imitaci&oacute;n madera?
                        <span>Te ayudo a elegir sin compromiso.</span>
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelos%20imitaci%C3%B3n%20madera" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2209 - SUELOS IMITACI&Oacute;N MADERA
// ============================================================================
