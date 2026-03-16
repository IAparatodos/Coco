<?php
/**
 * Category: Azulejos Hexagonales (ID: 2173)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2173 - AZULEJOS HEXAGONALES
// ============================================================================

function adrihosan_azulejos_hexagonales_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/azulejos-hexagonales-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a> &gt;
                <span>Azulejos Hexagonales</span>
            </nav>
            <h1>Azulejos Hexagonales</h1>
            <p>Su forma geom&eacute;trica rompe con la monoton&iacute;a de las baldosas rectangulares y permite crear composiciones &uacute;nicas. Descubre nuestras colecciones de cer&aacute;mica hexagonal para suelos y paredes, y dise&ntilde;a espacios llenos de personalidad.</p>
            <div class="hero-buttons">
                <a href="#catalogo-hexagonales" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#guia-hexagonales" class="hero-btn secondary">Gu&iacute;a Hexagonal</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128029;</div>
                <div class="trust-text">
                    <strong>Efecto Panal</strong>
                    <span>Composiciones &uacute;nicas tipo colmena</span>
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
                <div class="trust-icon">&#127912;</div>
                <div class="trust-text">
                    <strong>Mezcla Colores</strong>
                    <span>Combina tonos y crea mosaicos</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Env&iacute;o Paletizado</strong>
                    <span>Entrega segura a toda la pen&iacute;nsula</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / NAVEGACI&Oacute;N R&Aacute;PIDA -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/tono-verde/" class="quick-nav-pill">&#129001; Hexagonal Verde</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/tono-blanco/" class="quick-nav-pill">&#9898; Hexagonal Blanco</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/estancia-cocina/" class="quick-nav-pill">&#127859; Para Cocinas</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/estancia-bano/" class="quick-nav-pill">&#128705; Para Ba&ntilde;os</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong> (Verde, Blanco, Gris, Negro, Mix...) y <strong>Estilo/Acabado</strong> (Mate, Brillo, Efecto Madera, Efecto Cemento, Hidr&aacute;ulico) para encontrar tu hex&aacute;gono ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-hexagonales" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-hexagonales" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Hexagonales</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_azulejos_hexagonales_contenido_inferior() {
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

    <!-- BUMPER: TRANSICIONES MADERA/HEXAGONO -->
    <section class="bumper-section adrihosan-full-width-block" id="bumper-transicion">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/transicion-madera-hexagono-adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>Crea transiciones &uacute;nicas en tu suelo</h2>
                <p>Las cer&aacute;micas hexagonales son perfectas para fusionar ambientes, como la cocina abierta al sal&oacute;n, combin&aacute;ndolas con suelos de imitaci&oacute;n madera sin cortes rectos.</p>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/wood/" class="bumper-btn">Ver Suelos de Madera compatibles</a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: GU&Iacute;A DE AZULEJOS HEXAGONALES -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-hexagonales">
        <div class="seo-content-wrapper">
            <h2>Cer&aacute;mica Hexagonal: La gu&iacute;a completa</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128029;</div>
                    <h3>Efecto Panal de Abeja</h3>
                    <p>El patr&oacute;n hexagonal imita la perfecci&oacute;n geom&eacute;trica de la naturaleza. Cada pieza encaja creando un mosaico org&aacute;nico que aporta profundidad y car&aacute;cter a cualquier superficie.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127912;</div>
                    <h3>Mezcla de Colores</h3>
                    <p>La forma hexagonal es perfecta para combinar distintos tonos en una misma instalaci&oacute;n. Crea degradados, patrones aleatorios o composiciones planificadas mezclando colores de la misma colecci&oacute;n.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128736;</div>
                    <h3>Transiciones de Suelo</h3>
                    <p>Una de las tendencias m&aacute;s demandadas: fusionar el hex&aacute;gono con un suelo de imitaci&oacute;n madera para crear transiciones org&aacute;nicas entre ambientes sin cortes rectos ni perfiles divisores.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: CONSEJOS DE INSTALACI&Oacute;N -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>Consejos para instalar baldosas hexagonales</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <h3>Colocaci&oacute;n y nivelaci&oacute;n</h3>
                <p>La instalaci&oacute;n de <strong>baldosas hexagonales</strong> requiere algo m&aacute;s de atenci&oacute;n que la baldosa cuadrada tradicional debido a sus m&uacute;ltiples caras. Es fundamental utilizar un <strong>sistema de nivelaci&oacute;n</strong> y planificar bien los cortes en las esquinas de la habitaci&oacute;n. Cualquier alicatador profesional est&aacute; habituado a este tipo de formatos.</p>
            </div>
            <div class="finish-info-block" style="text-align:left;">
                <h3>El remate irregular: una tendencia en auge</h3>
                <p>&iexcl;No remates el borde! Una de las tendencias m&aacute;s atractivas en dise&ntilde;o de interiores es dejar que la forma del <strong>panal de abeja termine de manera irregular</strong> en la pared pintada, en lugar de cortarlos en l&iacute;nea recta. Crea un efecto de transici&oacute;n org&aacute;nica y muy art&iacute;stica.</p>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Azulejos Hexagonales</h2>
            <p>El formato hexagonal es uno de los m&aacute;s vers&aacute;tiles en dise&ntilde;o cer&aacute;mico. Desde los cl&aacute;sicos monocrom&aacute;ticos hasta los acabados efecto madera o cemento, las posibilidades de composici&oacute;n son infinitas.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/tono-verde/" class="trend-link">Hexagonal Verde</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/tono-blanco/" class="trend-link">Hexagonal Blanco</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/estancia-cocina/" class="trend-link">Para Cocinas</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/estancia-bano/" class="trend-link">Para Ba&ntilde;os</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Hexagonales</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es dif&iacute;cil instalar cer&aacute;micas hexagonales?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La colocaci&oacute;n requiere algo m&aacute;s de atenci&oacute;n que la baldosa cuadrada tradicional debido a sus m&uacute;ltiples caras, pero cualquier alicatador profesional est&aacute; habituado a ello. Lo m&aacute;s importante es utilizar un sistema de nivelaci&oacute;n y planificar bien los cortes en las esquinas de la habitaci&oacute;n.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirven los azulejos hexagonales para el suelo y la pared?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del material. Las racholas hexagonales fabricadas en pasta roja o blanca son exclusivas para revestimiento (pared). Sin embargo, si la loseta hexagonal est&aacute; fabricada en gres porcel&aacute;nico, es apta tanto para suelos (pavimentos) como para paredes, ofreciendo una resistencia extrema al tr&aacute;nsito.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo remato el borde de un revestimiento hexagonal a media altura?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>&iexcl;No lo remates! Una de las tendencias m&aacute;s atractivas en dise&ntilde;o de interiores es dejar que la forma del panal de abeja termine de manera irregular en la pared pintada, en lugar de cortarlos en l&iacute;nea recta. Crea un efecto de transici&oacute;n org&aacute;nica y muy art&iacute;stica.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos hexagonales">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu proyecto de azulejos hexagonales?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20hexagonales" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2173 - AZULEJOS HEXAGONALES
// ============================================================================
