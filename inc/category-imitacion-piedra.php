<?php
/**
 * Category: Azulejos Imitaci&oacute;n Piedra (ID: 4972)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 4972 - AZULEJOS IMITACI&Oacute;N PIEDRA
// ============================================================================

function adrihosan_imitacion_piedra_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-imitacion-piedra-revestimiento.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a> &gt;
                <span>Azulejos Imitaci&oacute;n Piedra</span>
            </nav>
            <h1>Azulejos Imitaci&oacute;n Piedra y Revestimientos</h1>
            <p>Descubre nuestra colecci&oacute;n de revestimiento de pared imitaci&oacute;n piedra y suelos. Consigue la calidez de la piedra natural con la resistencia y f&aacute;cil limpieza de la cer&aacute;mica efecto piedra. Ideal para dar un toque r&uacute;stico o moderno a cualquier espacio.</p>
            <div class="hero-buttons">
                <a href="#catalogo-piedra" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#guia-piedra" class="hero-btn secondary">Gu&iacute;a de Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#9968;</div>
                <div class="trust-text">
                    <strong>Est&eacute;tica Natural</strong>
                    <span>Texturas de piedra real</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128737;</div>
                <div class="trust-text">
                    <strong>Cero Mantenimiento</strong>
                    <span>No necesita sellado ni tratamiento</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127783;</div>
                <div class="trust-text">
                    <strong>In &amp; Out</strong>
                    <span>Interior y Exterior Antideslizante</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128167;</div>
                <div class="trust-text">
                    <strong>Absorci&oacute;n Nula</strong>
                    <span>No se mancha ni absorbe humedad</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS DE ACCESO R&Aacute;PIDO -->
    <section class="quick-pills-section">
        <div class="quick-pills-wrapper">
            <a href="?orderby=date-asc#catalogo-piedra" class="quick-pill">Para Exterior</a>
            <a href="?orderby=date#catalogo-piedra" class="quick-pill">Para Interior</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/ver-estilo-pizarra/" class="quick-pill">Tipo Laja / Pizarra</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/tono-blanco/" class="quick-pill">Blanco</a>
            <a href="?orderby=price#catalogo-piedra" class="quick-pill pill-hot">&#128293; M&aacute;s Baratos</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Uso</strong> (Exterior / Interior), <strong>Estilo</strong> (Laja, Pizarra, Cantera), <strong>Material</strong> y <strong>Color</strong> para encontrar tu revestimiento ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-piedra" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-piedra" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Imitaci&oacute;n Piedra y Revestimientos</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro (envuelve productos + paginaci&oacute;n) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_imitacion_piedra_contenido_inferior() {
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

    <!-- BANNERS INTERMEDIOS: INTERLINKING -->
    <section class="stone-banners-section adrihosan-full-width-block">
        <div class="stone-banners-wrapper">
            <h2>Encuentra tu Estilo de Piedra</h2>
            <div class="stone-banners-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?swoof=1&pa_uso=exterior" class="stone-banner-card">
                    <div class="stone-banner-icon">&#127958;</div>
                    <h3>Fachadas y Terrazas</h3>
                    <p>Revestimiento piedra exterior para muros, fachadas y patios. Acabados antideslizantes para m&aacute;xima seguridad.</p>
                    <span class="stone-banner-cta">Ver Colecci&oacute;n &rarr;</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?swoof=1&pa_uso=interior" class="stone-banner-card">
                    <div class="stone-banner-icon">&#128715;</div>
                    <h3>Paredes de Sal&oacute;n y Ba&ntilde;o</h3>
                    <p>Azulejos imitaci&oacute;n piedra interior con ambientes c&aacute;lidos. Ideal para paredes de sal&oacute;n, ba&ntilde;os y recibidores.</p>
                    <span class="stone-banner-cta">Ver Colecci&oacute;n &rarr;</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?swoof=1&pa_estilo=laja-pizarra" class="stone-banner-card">
                    <div class="stone-banner-icon">&#129704;</div>
                    <h3>Textura Laja y Pizarra</h3>
                    <p>Revestimiento piedra laja con relieve irregular aut&eacute;ntico. El acabado m&aacute;s natural y con m&aacute;s car&aacute;cter.</p>
                    <span class="stone-banner-cta">Ver Colecci&oacute;n &rarr;</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?orderby=price" class="stone-banner-card stone-banner-offer">
                    <div class="stone-banner-icon">&#127991;</div>
                    <h3>Ofertas Especiales</h3>
                    <p>Azulejos imitaci&oacute;n piedra baratos. Descuentos y liquidaciones en revestimientos de piedra de primeras marcas.</p>
                    <span class="stone-banner-cta">Ver Ofertas &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: POR QU&Eacute; CER&Aacute;MICA VS PIEDRA NATURAL -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-piedra">
        <div class="seo-content-wrapper">
            <h2>Cer&aacute;mica imitaci&oacute;n piedra vs piedra natural: &iquest;cu&aacute;l elegir?</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#9968;</div>
                    <h3>Piedra Laja / Pizarra</h3>
                    <p>Texturas con relieve irregular que reproducen fielmente la piedra laja natural. Superficie con car&aacute;cter, ideal para crear muros y fachadas con un aspecto r&uacute;stico y aut&eacute;ntico sin el peso ni la porosidad de la piedra real.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127963;</div>
                    <h3>Piedra Cantera</h3>
                    <p>Acabado suave y c&aacute;lido que evoca la piedra de cantera cl&aacute;sica. Tonos arena, beige y crema que aportan elegancia mediterr&aacute;nea a cualquier espacio, sin necesidad de mantenimiento ni sellados peri&oacute;dicos.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127956;</div>
                    <h3>S&iacute;mil Piedra Natural</h3>
                    <p>Reproducci&oacute;n fiel de piedras naturales como travertino, cuarcita o arenisca. Tecnolog&iacute;a de impresi&oacute;n digital HD sobre gres porcel&aacute;nico que captura cada veta, poro y matiz del material original.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: REVESTIMIENTO PIEDRA EXTERIOR -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>Revestimiento de pared imitaci&oacute;n piedra para exterior</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>El <strong>revestimiento de piedra para exterior</strong> es una de las soluciones m&aacute;s demandadas para renovar fachadas, muros de jard&iacute;n y terrazas. Nuestros azulejos de gres porcel&aacute;nico imitaci&oacute;n piedra ofrecen la est&eacute;tica de un muro de piedra natural con importantes ventajas: <strong>no absorben agua</strong> (absorci&oacute;n &lt;0.5%), resisten heladas, no necesitan sellado y mantienen su aspecto d&eacute;cadas sin mantenimiento.</p>
            </div>
            <div class="finish-info-block" style="text-align:left;">
                <h3>Revestimiento piedra precio m2: lo que debes saber</h3>
                <p>El precio del revestimiento de piedra cer&aacute;mico parte desde <strong>10-15 &euro;/m&sup2;</strong> para formatos b&aacute;sicos, frente a los 40-80 &euro;/m&sup2; de la piedra natural. Adem&aacute;s, la instalaci&oacute;n es m&aacute;s r&aacute;pida y econ&oacute;mica, ya que las piezas cer&aacute;micas son m&aacute;s ligeras, se cortan f&aacute;cilmente y no requieren refuerzo estructural en la pared. El ahorro total (material + mano de obra) puede superar el 50%.</p>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Azulejos Efecto Piedra</h2>
            <p>Desde la pizarra negra y la laja gris para interiores contempor&aacute;neos, hasta la piedra clara de cantera para ambientes mediterr&aacute;neos. El gran formato con relieve 3D y las texturas antideslizantes para exterior marcan la tendencia actual en revestimientos de piedra.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?swoof=1&pa_estilo=laja-pizarra" class="trend-link">Pizarra</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?swoof=1&pa_estilo=cantera" class="trend-link">Cantera</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?swoof=1&pa_uso=exterior" class="trend-link">Exterior Antideslizante</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-piedra/?swoof=1&pa_color=gris" class="trend-link">Gris Piedra</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Imitaci&oacute;n Piedra</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es mejor, piedra natural o cer&aacute;mica imitaci&oacute;n piedra?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para el 99% de los hogares, la cer&aacute;mica imitaci&oacute;n piedra es superior. Mientras la piedra natural es porosa (absorbe manchas, aceites y humedad) y requiere selladores, el gres porcel&aacute;nico y de pasta blanca tiene una absorci&oacute;n casi nula. Es decir, las cer&aacute;micas tipo piedra no se manchan, se limpian con cualquier producto com&uacute;n y no requieren mantenimiento anual.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede colocar revestimiento de pared imitaci&oacute;n piedra en el ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>&iexcl;Absolutamente! Al no ser poroso, el revestimiento de pared piedra cer&aacute;mico es perfecto para zonas h&uacute;medas, incluyendo el interior de la ducha. No desarrollar&aacute; moho ni filtrar&aacute; agua si est&aacute; bien instalado, manteniendo el aspecto de un spa natural de piedra.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo limpiar baldosas pared imitaci&oacute;n piedra o suelos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>A diferencia de la piedra real que requiere limpiadores de pH neutro espec&iacute;ficos, las paredes de cer&aacute;mica imitaci&oacute;n piedra o los suelos se pueden limpiar con tu detergente habitual o fregasuelos. Su superficie es totalmente higi&eacute;nica.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Las racholas de piedra sirven tanto para suelo como para pared?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del material. Si es porcel&aacute;nico, sirve tanto para pavimento como para revestimiento de pared s&iacute;mil piedra. Si es pasta blanca o pasta roja, generalmente est&aacute; dise&ntilde;ado exclusivamente como azulejo de piedra para pared debido a su peso y tracci&oacute;n. En Adrihosan te especificamos el uso ideal en cada producto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos imitaci&oacute;n piedra">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu revestimiento de piedra?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20imitaci%C3%B3n%20piedra" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 4972 - AZULEJOS IMITACI&Oacute;N PIEDRA
// ============================================================================
