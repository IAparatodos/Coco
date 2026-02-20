<?php
/**
 * Category: Suelos de Cocina (ID: 2285)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2285 - SUELOS DE COCINA
// ============================================================================

function adrihosan_suelos_cocina_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/suelos-de-cocina-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/">Pavimentos</a> &gt;
                <span>Suelos de Cocina</span>
            </nav>
            <h1>Suelos de Cocina: Funcionalidad y Dise&ntilde;o</h1>
            <p>Descubre nuestra selecci&oacute;n de suelos de cocina. Encuentra la baldosa de cocina para suelo perfecta, desde suelos cer&aacute;micos de cocina tradicionales hasta el m&aacute;s resistente porcel&aacute;nico para cocina.</p>
            <div class="hero-buttons">
                <a href="#catalogo-suelos-cocina" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#tipos-pavimento-cocina" class="hero-btn secondary">Gu&iacute;a de Materiales</a>
            </div>
        </div>
    </section>

    <!-- 2. ACCESO R&Aacute;PIDO / TIPOLOG&Iacute;AS + COLECCI&Oacute;N DESTACADA -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="tipologias-suelos-cocina">
        <div class="ap-inspiration-wrapper">
            <h2>Explora por Tipolog&iacute;a</h2>
            <p class="section-subtitle">Elige el tipo de suelo de cocina que mejor se adapta a tu proyecto</p>
            <div class="ap-inspiration-grid grid-3-cols">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-cocina/?_material=gres-porcelanico" class="ap-inspiration-card sc-type-card">
                    <div class="sc-type-icon">&#9670;</div>
                    <div class="ap-card-content">
                        <h3>Gres Porcel&aacute;nico</h3>
                        <p>M&aacute;xima dureza, absorci&oacute;n casi nula y resistencia a manchas. El rey de los suelos de cocina.</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-cocina/?_material=ceramico" class="ap-inspiration-card sc-type-card">
                    <div class="sc-type-icon">&#9632;</div>
                    <div class="ap-card-content">
                        <h3>Cer&aacute;mico</h3>
                        <p>Excelente relaci&oacute;n calidad-precio. Ideal para cocinas que buscan variedad de dise&ntilde;os.</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/" class="ap-inspiration-card sc-type-card sc-featured-card">
                    <div class="sc-type-icon">&#10024;</div>
                    <div class="ap-card-content">
                        <h3>Porcel&aacute;nico Calacatta</h3>
                        <p>Acabado marmolado premium. El toque de lujo para tu cocina.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> El suelo de cocina se vende por m&sup2;. Usa los filtros de <strong>Precio</strong>, <strong>Color</strong>, <strong>Formato</strong> y <strong>Acabado</strong> para encontrar tu pavimento ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-suelos-cocina" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-suelos-cocina" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos de Cocina</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro (envuelve productos + paginaci&oacute;n) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_suelos_cocina_contenido_inferior() {
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

    <!-- M&Oacute;DULO DE ENLAZADO INTERNO: COCINA BLANCA -->
    <section class="sc-blog-banner adrihosan-full-width-block">
        <div class="sc-blog-banner-wrapper">
            <div class="sc-blog-banner-image">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/suelos-para-cocinas-blancas.jpg" alt="Suelos para cocinas blancas - gu&iacute;a completa">
            </div>
            <div class="sc-blog-banner-content">
                <h2>&iquest;Est&aacute;s dise&ntilde;ando una cocina blanca?</h2>
                <p>Descubre qu&eacute; materiales, colores y estilos de pavimento encajan mejor con una cocina blanca. Gu&iacute;a completa con ideas reales y combinaciones que funcionan.</p>
                <a href="https://www.adrihosan.com/blog/suelos-para-cocinas-blancas/" class="sc-blog-btn">Leer gu&iacute;a: Suelos para cocinas blancas</a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: POR QU&Eacute; ELEGIR PORCEL&Aacute;NICO -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>&iquest;Por qu&eacute; elegir un suelo porcel&aacute;nico para tu cocina?</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128167;</div>
                    <h3>Resistencia a manchas</h3>
                    <p>El <strong>suelo porcel&aacute;nico cocina</strong> tiene una absorci&oacute;n de agua pr&aacute;cticamente nula (&lt;0,5%). Aceite, vino, caf&eacute;, salsa de tomate... Nada penetra en su superficie. Limpia con un pa&ntilde;o h&uacute;medo y listo. Los <strong>suelos porcel&aacute;nicos para cocinas</strong> son la opci&oacute;n m&aacute;s pr&aacute;ctica del mercado.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128170;</div>
                    <h3>Dureza extrema</h3>
                    <p>Con una dureza superior a 7 en la escala Mohs, el gres porcel&aacute;nico resiste golpes, ca&iacute;das de objetos pesados y el tr&aacute;nsito diario intenso de una cocina. No se raya, no se desportilla y mantiene su aspecto durante d&eacute;cadas.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127912;</div>
                    <h3>Dise&ntilde;o sin l&iacute;mites</h3>
                    <p>Imitaci&oacute;n madera, m&aacute;rmol Calacatta, cemento, piedra natural... La tecnolog&iacute;a de impresi&oacute;n digital permite que el <strong>porcel&aacute;nico para cocina</strong> reproduzca cualquier acabado con un realismo asombroso, a un precio muy competitivo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: TIPOS DE PAVIMENTO -->
    <section class="seo-content-section adrihosan-full-width-block" id="tipos-pavimento-cocina" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>Tipos de pavimento de cocina: Gres y Cer&aacute;mica</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>Elegir el <strong>pavimento cocina</strong> adecuado es clave para combinar funcionalidad y est&eacute;tica. Las dos grandes familias de <strong>azulejos cocina suelo</strong> son el gres porcel&aacute;nico y la cer&aacute;mica convencional. Conocer sus diferencias te ayudar&aacute; a tomar la mejor decisi&oacute;n.</p>
                <ul style="margin-top: 15px; padding-left: 20px; color: #3f6f7b;">
                    <li style="margin-bottom: 10px;"><strong>Gres porcel&aacute;nico cocina:</strong> Fabricado a temperaturas superiores a 1.200&deg;C, tiene absorci&oacute;n de agua &lt;0,5%. Es el material m&aacute;s resistente para suelos de cocina. Ideal para cocinas abiertas al sal&oacute;n y zonas de mucho tr&aacute;nsito.</li>
                    <li style="margin-bottom: 10px;"><strong>Cer&aacute;mico:</strong> Cocido a menor temperatura, absorci&oacute;n entre 3-6%. M&aacute;s econ&oacute;mico y con gran variedad de dise&ntilde;os decorativos. Perfecto para cocinas con menor exigencia mec&aacute;nica.</li>
                    <li style="margin-bottom: 10px;"><strong>&iquest;Cu&aacute;l elegir?</strong> Si tu cocina tiene mucho tr&aacute;nsito, est&aacute; abierta al sal&oacute;n o necesitas continuidad con el pavimento exterior, elige porcel&aacute;nico. Si buscas la mejor relaci&oacute;n calidad-precio y valoras la variedad de dise&ntilde;os decorativos, la cer&aacute;mica es tu aliada.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: TENDENCIAS CALACATTA -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h3 class="seo-h3-title">Tendencias: El auge del Porcel&aacute;nico Calacatta</h3>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>El <strong>porcel&aacute;nico Calacatta</strong> se ha convertido en uno de los acabados m&aacute;s demandados para suelos de cocina en los &uacute;ltimos a&ntilde;os. Su aspecto marmolado &mdash;con vetas grises y doradas sobre fondo blanco&mdash; aporta un toque premium que transforma cualquier cocina.</p>
                <p style="margin-top: 15px;">&iquest;Por qu&eacute; es tan popular? Combina la est&eacute;tica del m&aacute;rmol natural con las ventajas del porcel&aacute;nico: no se mancha, no necesita sellado, no se raya y tiene un precio mucho m&aacute;s accesible. Adem&aacute;s, permite crear espacios continuos suelo-encimera-pared con el mismo acabado, generando una sensaci&oacute;n de amplitud espectacular.</p>
                <p style="margin-top: 15px;">En Adrihosan disponemos de <a href="https://www.adrihosan.com/categoria-producto/ceramica/porcelanico-imitacion-marmol/" style="color:#4dd2d0; font-weight:600;">porcel&aacute;nico imitaci&oacute;n m&aacute;rmol</a> en diferentes formatos: desde piezas est&aacute;ndar 60&times;60 hasta gran formato 120&times;260 para un resultado sin apenas juntas.</p>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelos de Cocina</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipos de suelos de cocina ofrece Adrihosan?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan, ofrecemos una amplia gama de suelos de cocina, desde <strong>baldosa cocina suelo</strong> hasta <strong>gres porcel&aacute;nico cocina</strong>. Nuestro cat&aacute;logo est&aacute; dise&ntilde;ado para satisfacer todas tus necesidades y estilos: imitaci&oacute;n madera, imitaci&oacute;n m&aacute;rmol, cemento, piedra natural y dise&ntilde;os decorativos. Todos disponibles a precios competitivos con env&iacute;o a toda Espa&ntilde;a.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Por qu&eacute; deber&iacute;a elegir un suelo porcel&aacute;nico para mi cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los <strong>suelos porcel&aacute;nicos para cocinas</strong> son conocidos por su durabilidad y facilidad de mantenimiento. Su absorci&oacute;n de agua es pr&aacute;cticamente nula, lo que significa que las manchas de aceite, vino o cualquier l&iacute;quido no penetran en la superficie. Adem&aacute;s, ofrecen una est&eacute;tica moderna que puede elevar el dise&ntilde;o de tu cocina sin renunciar a la funcionalidad.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo puedo saber qu&eacute; tipo de pavimento cocina es el m&aacute;s adecuado para m&iacute;?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan, te ayudamos a elegir el <strong>pavimento de cocina</strong> que mejor se adapte a tus necesidades. Consideramos factores como el tr&aacute;fico diario, la exposici&oacute;n a la humedad, tu estilo decorativo y tu presupuesto. Contacta con Ricardo para recibir asesoramiento personalizado sin compromiso: te orientar&aacute; entre cer&aacute;mico y porcel&aacute;nico seg&uacute;n tu caso concreto.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ofrecen azulejos cocina suelo resistentes a las manchas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, muchos de nuestros <strong>azulejos de cocina para el suelo</strong> son resistentes a las manchas, especialmente los de gres porcel&aacute;nico. Su superficie no porosa impide que los l&iacute;quidos penetren, lo que los hace ideales para &aacute;reas de alta actividad como la cocina. Se limpian con agua y jab&oacute;n neutro, sin necesidad de productos especiales.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; garant&iacute;a ofrecen en sus suelos cer&aacute;micos para cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Todos nuestros <strong>suelos cer&aacute;micos de cocina</strong> vienen con una garant&iacute;a que cubre defectos de fabricaci&oacute;n, para que puedas comprar con total confianza. Adem&aacute;s, trabajamos con fabricantes espa&ntilde;oles de reconocido prestigio que cumplen con las normativas europeas m&aacute;s exigentes de calidad y resistencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en suelos de cocina">
                <div>
                    <h2>&iquest;Necesitas ayuda para elegir tu suelo de cocina?
                        <span>Soy Ricardo. Te asesoro sin compromiso.</span>
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelos%20de%20cocina" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">&#9993;</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2285 - SUELOS DE COCINA
// ============================================================================
