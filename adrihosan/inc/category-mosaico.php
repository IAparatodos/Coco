<?php
/**
 * Category: Azulejo Mosaico (ID: 67)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 67 - AZULEJO MOSAICO
// ============================================================================

function adrihosan_mosaico_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/Azulejo-mosaico-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a> &gt;
                <span>Azulejo Mosaico</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Azulejos Mosaico: Dise&ntilde;o en Peque&ntilde;o Formato' ); ?></h1>
            <p>Transforma tus paredes y suelos con el encanto del azulejo mosaico. Piezas enmalladas listas para instalar que aportan textura, color y dinamismo. Descubre colecciones exclusivas para ba&ntilde;os modernos, frentes de cocina y revestimientos exteriores.</p>
            <div class="hero-buttons">
                <a href="#catalogo-mosaico" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#guia-mosaico" class="hero-btn secondary">Gu&iacute;a de Mosaicos</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128376;</div>
                <div class="trust-text">
                    <strong>F&aacute;cil Instalaci&oacute;n</strong>
                    <span>Enmallados listos para pegar</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128167;</div>
                <div class="trust-text">
                    <strong>Ideales para Duchas</strong>
                    <span>Antideslizantes y resistentes al agua</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#129529;</div>
                <div class="trust-text">
                    <strong>Limpieza R&aacute;pida</strong>
                    <span>Superficie esmaltada f&aacute;cil de mantener</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128208;</div>
                <div class="trust-text">
                    <strong>Se Adaptan a Curvas</strong>
                    <span>Malla flexible para superficies irregulares</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / NAVEGACI&Oacute;N R&Aacute;PIDA -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-mosaico/est-prod-bano/" class="quick-nav-pill">&#128705; Mosaico Ba&ntilde;o</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-mosaico/est-prod-cocina/" class="quick-nav-pill">&#127859; Mosaico Cocina</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-mosaico/tono-blanco/" class="quick-nav-pill">&#9898; Mosaicos Blancos</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-mosaico/est-prod-terraza/" class="quick-nav-pill">&#127795; Mosaicos Exterior</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Material</strong> (Cer&aacute;mica, Vidrio, Piedra Natural), <strong>Forma de la Tesela</strong> (Cuadrada, Hexagonal, Escama, Tipo Metro) y <strong>Color</strong> para encontrar tu mosaico ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-mosaico" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427099"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-mosaico" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Mosaico</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_mosaico_contenido_inferior() {
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

    <!-- BUMPER T&Eacute;CNICO: INSTALACI&Oacute;N CON MALLA -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/instalacion-mosaico-malla-adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>Instalaci&oacute;n r&aacute;pida y perfecta: El secreto est&aacute; en la malla.</h2>
                <p>Nuestros mosaicos de cer&aacute;mica vienen unidos por una malla trasera (normalmente de 30x30 cm). Se instalan igual de r&aacute;pido que un azulejo grande y, adem&aacute;s, la malla es flexible, &iexcl;perfecta para revestir columnas redondas o platos de ducha con pendiente!</p>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="bumper-btn">Pedir Muestras a Domicilio</a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: GU&Iacute;A DE MOSAICOS -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-mosaico">
        <div class="seo-content-wrapper">
            <h2>Mosaicos Cer&aacute;micos: La gu&iacute;a completa</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128167;</div>
                    <h3>Mosaico para Ba&ntilde;o</h3>
                    <p>Las teselas peque&ntilde;as multiplican las juntas, lo que aumenta la capacidad antideslizante. Ideales para platos de ducha, nichos y paredes de acento en ba&ntilde;os modernos.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127859;</div>
                    <h3>Mosaico para Cocina</h3>
                    <p>El frente de cocina o salpicadero es el lugar estrella del mosaico. Aporta textura y color sin recargar, y su superficie esmaltada resiste la grasa y se limpia con facilidad.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128208;</div>
                    <h3>Adaptable a Curvas</h3>
                    <p>Gracias a la malla flexible, los mosaicos se adaptan a superficies curvas como columnas, arcos y platos de ducha con pendiente, donde una pieza grande no podr&iacute;a encajar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Mosaicos de Cer&aacute;mica</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es la diferencia entre azulejos y mosaico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La diferencia principal reside en el tama&ntilde;o de las piezas y su formato de venta. Mientras que un azulejo es una pieza cer&aacute;mica individual de tama&ntilde;o medio o grande, un mosaico est&aacute; formado por m&uacute;ltiples teselas diminutas (cuadraditos, hex&aacute;gonos, etc.) que vienen pre-pegadas sobre una malla (generalmente de 30x30 cm) para facilitar su colocaci&oacute;n conjunta.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es dif&iacute;cil instalar mosaicos de azulejos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En absoluto. Gracias a la malla trasera que une las teselas, la rachola mosaico se instala a la misma velocidad que un azulejo grande. Solo necesitas aplicar el cemento cola en la pared, asentar la malla y, una vez seco, aplicar la borada (junta) para rellenar los huecos.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede utilizar el azulejo mosaico en el suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, pero depende del material. Los mosaicos de pasta blanca o vidrio muy fino suelen ser solo para revestimiento (paredes). Sin embargo, disponemos de mosaicos de cer&aacute;mica porcel&aacute;nica y piedra natural que son extremadamente resistentes y perfectos para suelos, especialmente en platos de ducha por su gran capacidad antideslizante.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;D&oacute;nde puedo comprar azulejos para mosaicos baratos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan filtramos nuestro cat&aacute;logo para ofrecerte la mejor relaci&oacute;n calidad-precio. Las opciones m&aacute;s econ&oacute;micas suelen ser los mosaicos cer&aacute;micos de gres esmaltado en colores lisos o mezclas (mix) b&aacute;sicas, que ofrecen un resultado visual excelente con un presupuesto muy ajustado.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; materiales de mosaico existen?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los tres materiales principales son la <strong>cer&aacute;mica</strong> (el m&aacute;s vers&aacute;til y econ&oacute;mico), el <strong>vidrio</strong> (ideal para efectos de brillo y transparencia en duchas) y la <strong>piedra natural</strong> (m&aacute;rmol, travertino, para acabados premium). Cada uno tiene sus ventajas seg&uacute;n el uso y la est&eacute;tica que busques.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los mosaicos son antideslizantes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, una de las grandes ventajas del mosaico es que, al tener teselas peque&ntilde;as, la cantidad de juntas se multiplica. Esas juntas generan una superficie con gran agarre, lo que convierte a los mosaicos en una de las mejores opciones para platos de ducha y zonas h&uacute;medas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo se limpian los mosaicos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La limpieza es muy sencilla: trapo h&uacute;medo con jab&oacute;n neutro para el d&iacute;a a d&iacute;a. Para las juntas, un cepillo suave con agua y bicarbonato las mantiene impecables. Evita productos muy abrasivos que puedan da&ntilde;ar el esmalte de las teselas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos mosaico">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu proyecto de mosaicos?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20mosaico" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 67 - AZULEJO MOSAICO
// ============================================================================
