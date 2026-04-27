<?php
/**
 * Category: Espejo Ba&ntilde;o 120 cm (ID: 4410)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 4410 - ESPEJO BA&Ntilde;O 120 CM
// ============================================================================

function adrihosan_espejo_bano_120_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/espejo-de-bano-100-cm-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/">Espejos de Ba&ntilde;o</a> &gt;
                <span>Espejo ba&ntilde;o 120</span>
            </nav>
            <h1>Espejos de Ba&ntilde;o de 120&nbsp;cm</h1>
            <p class="hero-tagline">Para ba&ntilde;os amplios y muebles de doble seno.</p>
            <p>Espejos de ba&ntilde;o de 120&nbsp;cm de ancho para ba&ntilde;os amplios y muebles de doble seno. Con luz LED, antivaho, rectangulares y con marco negro. M&aacute;s de 60 modelos con env&iacute;o gratis a toda Espa&ntilde;a.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128207;</div>
                <div class="trust-text">
                    <strong>Ancho 120&nbsp;cm</strong>
                    <span>Ideal para doble seno amplio</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128161;</div>
                <div class="trust-text">
                    <strong>Con y sin luz LED</strong>
                    <span>Interruptor t&aacute;ctil en modelos LED</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128703;</div>
                <div class="trust-text">
                    <strong>Antivaho disponible</strong>
                    <span>Sin empa&ntilde;ado tras la ducha</span>
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

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Forma</strong> (Rectangular u Ovalado), <strong>Iluminaci&oacute;n</strong> (Con luz LED o Sin luz), <strong>Marco</strong> (Negro, Oro o Sin marco) y <strong>Funci&oacute;n</strong> (Antivaho o T&aacute;ctil) para encontrar tu espejo de 120&nbsp;cm ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-espejo-bano-120" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-espejo-bano-120" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Espejos de Ba&ntilde;o de 120&nbsp;cm</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_espejo_bano_120_contenido_inferior() {
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

    <!-- ACCESO A CATEGOR&Iacute;AS RELACIONADAS (PILLS) -->
    <section class="ap-pill-section adrihosan-full-width-block">
        <div class="ap-pill-wrapper">
            <h2>Otras opciones de espejos de ba&ntilde;o</h2>
            <div class="ap-pill-grid">
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-80/" class="ap-pill-tag">80&nbsp;cm</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-100/" class="ap-pill-tag">100&nbsp;cm</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-140-x-80/" class="ap-pill-tag">140&nbsp;cm</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejos-negros/" class="ap-pill-tag">Negros</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/" class="ap-pill-tag">Con luz LED</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/" class="ap-pill-tag">Todos los espejos</a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: lo gestiona Ricardo desde la descripcion de la categoria
         en WooCommerce admin. Se renderiza arriba via category_description() y
         se estiliza con .bho-guide-section (ver category-4410.css). -->

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Espejos de Ba&ntilde;o de 120&nbsp;cm</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un espejo de 120&nbsp;cm necesita instalaci&oacute;n especial?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No m&aacute;s que otro espejo. Necesita <strong>dos puntos de anclaje</strong> en pared de obra separados unos 80-90&nbsp;cm. Si tu pared es de pladur, usa tacos de alta resistencia o refuerzo interior. El peso de los modelos de 120&nbsp;cm oscila entre <strong>20 y 35&nbsp;kg</strong> seg&uacute;n el modelo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El espejo de 120&nbsp;cm queda bien con un mueble de 100&nbsp;cm?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una combinaci&oacute;n habitual en interiorismo. El espejo sobresale <strong>10&nbsp;cm por cada lado</strong> del mueble, creando un efecto de amplitud visual. La condici&oacute;n es que haya pared libre suficiente para que no choque con esquinas o accesorios.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ten&eacute;is espejo de 120&nbsp;cm redondo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Los espejos redondos de gran formato llegan hasta <strong>100&nbsp;cm de di&aacute;metro</strong>. A partir de ah&iacute;, el formato es rectangular u ovalado. Si buscas un redondo grande, el de 100&nbsp;cm es el m&aacute;ximo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCHEMA FAQPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "&iquest;Un espejo de 120 cm necesita instalaci&oacute;n especial?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No m&aacute;s que otro espejo. Necesita dos puntos de anclaje en pared de obra separados unos 80-90 cm. Si tu pared es de pladur, usa tacos de alta resistencia o refuerzo interior. El peso de los modelos de 120 cm oscila entre 20 y 35 kg seg&uacute;n el modelo."
          }
        },
        {
          "@type": "Question",
          "name": "&iquest;El espejo de 120 cm queda bien con un mueble de 100 cm?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "S&iacute;, es una combinaci&oacute;n habitual en interiorismo. El espejo sobresale 10 cm por cada lado del mueble, creando un efecto de amplitud visual. La condici&oacute;n es que haya pared libre suficiente para que no choque con esquinas o accesorios."
          }
        },
        {
          "@type": "Question",
          "name": "&iquest;Ten&eacute;is espejo de 120 cm redondo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Los espejos redondos de gran formato llegan hasta 100 cm de di&aacute;metro. A partir de ah&iacute;, el formato es rectangular u ovalado. Si buscas un redondo grande, el de 100 cm es el m&aacute;ximo."
          }
        }
      ]
    }
    </script>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en espejos de ba&ntilde;o de 120 cm">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu espejo de 120&nbsp;cm?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20espejo%20de%20ba%C3%B1o%20de%20120%20cm" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 4410 - ESPEJO BA&Ntilde;O 120 CM
// ============================================================================
