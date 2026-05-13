<?php
/**
 * Category: Muebles de Ba&ntilde;o Peque&ntilde;os (ID: 2421)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2421 - MUEBLES DE BA&Ntilde;O PEQUE&Ntilde;OS
// ============================================================================

function adrihosan_muebles_bano_pequeno_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/Muebles-de-bano-pequeno-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de Ba&ntilde;o</a> &gt;
                <span>Muebles de Ba&ntilde;o Peque&ntilde;os</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Muebles de Ba&ntilde;o Peque&ntilde;os: Optimiza cada Cent&iacute;metro' ); ?></h1>
            <p>&iquest;Tu cuarto de ba&ntilde;o es muy peque&ntilde;o? No te preocupes. Tenemos muebles compactos, de fondo reducido y con dise&ntilde;os inteligentes que transformar&aacute;n tu aseo en un espacio funcional y con estilo.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128207;</div>
                <div class="trust-text">
                    <strong>Fondo Reducido</strong>
                    <span>Modelos de 35 a 40 cm de profundidad</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128705;</div>
                <div class="trust-text">
                    <strong>Lavabos Integrados</strong>
                    <span>Dise&ntilde;os que aprovechan el espacio al m&aacute;ximo</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#10024;</div>
                <div class="trust-text">
                    <strong>Amplitud Visual</strong>
                    <span>Colores claros y acabados que agrandan el ba&ntilde;o</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CATEGOR&Iacute;AS COMPLEMENTARIAS -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/" class="quick-nav-pill">&#129668; Espejos con almacenaje</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/columnas-de-bano/" class="quick-nav-pill">&#128230; Columnas auxiliares peque&ntilde;as</a>
            <a href="https://www.adrihosan.com/categoria-producto/bano/platos-de-ducha/" class="quick-nav-pill">&#128703; Platos de ducha peque&ntilde;os</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Ancho</strong>, <strong>Fondo</strong> y <strong>Tipo de Lavabo</strong> para encontrar el mueble perfecto para tu ba&ntilde;o peque&ntilde;o. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-muebles-bano-pequeno" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-muebles-bano-pequeno" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Muebles de Ba&ntilde;o Peque&ntilde;os</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_muebles_bano_pequeno_contenido_inferior() {
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

    <!-- SECCI&Oacute;N ASESORAMIENTO: CONSEJOS DE ESPACIO -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>&iquest;C&oacute;mo elegir tu mueble para un ba&ntilde;o peque&ntilde;o?</h2>
            <p>Lo primero es medir con precisi&oacute;n el ancho disponible y, sobre todo, el <strong>fondo o profundidad</strong>. En aseos estrechos necesitas mantener un paso libre m&iacute;nimo de 60-65 cm frente al mueble para moverte con comodidad. Si tu ba&ntilde;o mide 150 cm de ancho, un mueble de fondo reducido (35-40 cm) te dejar&aacute; el espacio justo.</p>
            <p>Elige un mueble <strong>suspendido</strong> siempre que sea posible: al no tocar el suelo, libera espacio visual y facilita la limpieza. Complementa con un <strong>espejo con almacenaje</strong> para ganar superficie &uacute;til sin ocupar m&aacute;s pared.</p>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Muebles de Ba&ntilde;o Peque&ntilde;os</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es el mueble de ba&ntilde;o m&aacute;s peque&ntilde;o que puedo instalar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los modelos m&aacute;s compactos arrancan en 45 cm de ancho con fondo de 35 cm. Incluyen lavabo y un caj&oacute;n con capacidad suficiente para lo esencial. Son la soluci&oacute;n perfecta para aseos de cortes&iacute;a o segundos ba&ntilde;os.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Mueble suspendido o con pie para un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Suspendido, siempre que la pared lo permita. Al no tocar el suelo, el ba&ntilde;o gana amplitud visual y facilita la limpieza. Si tu pared no soporta carga o prefieres evitar obra, los modelos con pie cumplen igual de bien.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo a&ntilde;adir almacenaje extra en un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Una columna auxiliar de 25-30 cm de ancho aprovecha la altura sin ocupar superficie &uacute;til. Combinada con un espejo camerino con almacenaje integrado, resuelves el almacenaje sin saturar el espacio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en muebles de ba&ntilde;o peque&ntilde;os">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu mueble de ba&ntilde;o peque&ntilde;o?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20muebles%20de%20ba%C3%B1o%20peque%C3%B1os" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 2421 - MUEBLES DE BA&Ntilde;O PEQUE&Ntilde;OS
// ============================================================================
