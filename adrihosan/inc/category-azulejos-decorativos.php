<?php
/**
 * Category: Azulejos Decorativos (ID: 2108)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2108 - AZULEJOS DECORATIVOS
// ============================================================================

function adrihosan_azulejos_decorativos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/Azulejos-decorativos-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a> &gt;
                <span>Azulejos Decorativos</span>
            </nav>
            <h1>Azulejos Decorativos</h1>
            <p>Dale vida a cada espacio. Descubre nuestro cat&aacute;logo de revestimiento decorativo para pared con dise&ntilde;os &uacute;nicos: estampados, geom&eacute;tricos, florales y texturas 3D. Encuentra la pieza que har&aacute; que tu reforma destaque.</p>
            <div class="hero-buttons">
                <a href="#catalogo-decorativos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#guia-decorativos" class="hero-btn secondary">Gu&iacute;a de Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#127912;</div>
                <div class="trust-text">
                    <strong>Dise&ntilde;os &Uacute;nicos</strong>
                    <span>Estampados, geom&eacute;tricos y 3D</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128167;</div>
                <div class="trust-text">
                    <strong>Aptos Ba&ntilde;os y Cocinas</strong>
                    <span>Resistentes a humedad y grasa</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#9728;&#65039;</div>
                <div class="trust-text">
                    <strong>Aptos Exterior</strong>
                    <span>Esmaltes inalterables al sol</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128396;</div>
                <div class="trust-text">
                    <strong>Opci&oacute;n Personalizada</strong>
                    <span>Tu dise&ntilde;o impreso en cer&aacute;mica</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / NAVEGACI&Oacute;N R&Aacute;PIDA -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/estancia-cocina/" class="quick-nav-pill">&#127859; Para Cocina</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/estancia-bano/" class="quick-nav-pill">&#128705; Para Ba&ntilde;o</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/ver-tipo-suelo-porcelanico/" class="quick-nav-pill">&#127795; Para Exterior</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/ver-estilo-imitacion-hidraulico/" class="quick-nav-pill">&#128396; Dise&ntilde;os Estampados</a>
            <a href="#bumper-personalizado" class="quick-nav-pill quick-nav-pill-highlight">&#11088; Hazlos Personalizados</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Estilo</strong> (Estampados, Geom&eacute;tricos, Florales, Relieve 3D, Texturas), <strong>Uso</strong> (Interior, Exterior, Zonas H&uacute;medas) y <strong>Color Predominante</strong> para encontrar tu azulejo ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-decorativos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-decorativos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Decorativos</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_azulejos_decorativos_contenido_inferior() {
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

    <!-- BUMPER B2B: AZULEJOS PERSONALIZADOS -->
    <section class="bumper-section adrihosan-full-width-block" id="bumper-personalizado">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/azulejos-personalizados-bumper-adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>&iquest;Tienes un proyecto &uacute;nico? Creamos tus azulejos decorativos personalizados.</h2>
                <p>Ideal para arquitectos, franquicias, restaurantes o proyectos singulares. Imprimimos tu dise&ntilde;o, logotipo o patr&oacute;n en cer&aacute;mica de alta resistencia.</p>
                <div class="bumper-requisitos">
                    <div class="bumper-requisito">
                        <span class="bumper-requisito-icon">&#128207;</span>
                        <span>Formato exclusivo: <strong>22.5 x 22.5 cm</strong></span>
                    </div>
                    <div class="bumper-requisito">
                        <span class="bumper-requisito-icon">&#128230;</span>
                        <span>Pedido m&iacute;nimo: <strong>30 m&sup2;</strong></span>
                    </div>
                </div>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="bumper-btn">Solicitar Presupuesto Personalizado</a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: ESTILOS DE AZULEJOS DECORATIVOS -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-decorativos">
        <div class="seo-content-wrapper">
            <h2>Revestimiento Decorativo para Pared: La gu&iacute;a completa</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128160;</div>
                    <h3>Azulejos Geom&eacute;tricos</h3>
                    <p>L&iacute;neas, rombos, chevron y patrones abstractos que aportan movimiento y modernidad. Ideales para paredes de acento en ba&ntilde;os y cocinas contempor&aacute;neas.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127800;</div>
                    <h3>Azulejos Florales y Estampados</h3>
                    <p>Motivos bot&aacute;nicos, anim&eacute;tricos y estampados art&iacute;sticos. Crean puntos focales espectaculares en cualquier estancia, desde el salpicadero de cocina hasta la pared del cabecero.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#129529;</div>
                    <h3>Texturas 3D y Relieve</h3>
                    <p>Superficies con volumen que juegan con la luz y las sombras. A&ntilde;aden profundidad y dimensi&oacute;n a paredes lisas, creando efectos visuales que transforman el espacio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: C&Oacute;MO CREAR UNA PARED DE ACENTO -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>&iquest;C&oacute;mo destacar una pared con baldosas decorativas?</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <h3>La regla de la &quot;pared de acento&quot;</h3>
                <p>La clave del interiorismo profesional es crear una <strong>pared de acento</strong>. Consiste en utilizar <strong>cer&aacute;mica decorativa</strong> (con colores vivos o estampados fuertes) en <strong>un solo muro</strong> de la habitaci&oacute;n, y revestir el resto con azulejos lisos o neutros. Esto focaliza la atenci&oacute;n y evita recargar visualmente el espacio.</p>
            </div>
            <div class="finish-info-block" style="text-align:left;">
                <h3>Azulejos decorativos para exterior: esmaltes inalterables</h3>
                <p>A diferencia de las pinturas u otros materiales pl&aacute;sticos, los dibujos de nuestras <strong>cer&aacute;micas decorativas para pared de exterior</strong> se imprimen con esmaltes vitrificados y se cuecen a m&aacute;s de 1000&ordm;C. Esto hace que sean completamente <strong>inalterables a los rayos UV</strong> del sol.</p>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Azulejos Decorativos</h2>
            <p>Los azulejos decorativos est&aacute;n viviendo una &eacute;poca dorada. Desde las texturas 3D que juegan con la luz hasta los estampados maximalistas que rompen con la monoton&iacute;a del minimalismo. Combina diferentes estilos para crear espacios &uacute;nicos con personalidad.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/ver-estilo-imitacion-hidraulico/" class="trend-link">Estampados</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/ver-estilo-geometrico/" class="trend-link">Geom&eacute;tricos</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/ver-estilo-floral/" class="trend-link">Florales</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/ver-estilo-relieve/" class="trend-link">Relieve 3D</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos y Cer&aacute;mica Decorativa</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo poner azulejos decorativos en el suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del material. La mayor&iacute;a del revestimiento decorativo para pared est&aacute; fabricado en pasta blanca o pasta roja, dise&ntilde;ados exclusivamente para no soportar pisadas. Si quieres un suelo decorado, debes filtrar en nuestro cat&aacute;logo por &quot;azulejos estampados de gres porcel&aacute;nico&quot;, que s&iacute; tienen la dureza necesaria para el tr&aacute;nsito.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo destaco una pared con baldosas decorativas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La regla de oro en interiorismo es crear una &quot;pared de acento&quot;. Consiste en utilizar cer&aacute;mica para decorar paredes (con colores vivos o estampados fuertes) en un solo muro de la habitaci&oacute;n, y revestir el resto con azulejos lisos o neutros. Esto focaliza la atenci&oacute;n y evita recargar visualmente el espacio.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se borra el dibujo de los azulejos decorativos para exterior con el sol?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. A diferencia de las pinturas u otros materiales pl&aacute;sticos, los dibujos de nuestras cer&aacute;micas decorativas para pared de exterior se imprimen con esmaltes vitrificados y se cuecen a m&aacute;s de 1000&ordm;C. Esto hace que sean completamente inalterables a los rayos UV del sol.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos decorativos">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu proyecto de azulejos decorativos?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20decorativos" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2108 - AZULEJOS DECORATIVOS
// ============================================================================
