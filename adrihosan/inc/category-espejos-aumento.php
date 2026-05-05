<?php
/**
 * Category: Espejos de Aumento (ID: 4299)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 4299 - ESPEJOS DE AUMENTO
// ============================================================================

function adrihosan_espejos_aumento_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/espejo-de-bano-100-cm-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/">Espejos de Ba&ntilde;o</a> &gt;
                <span>Espejos de aumento</span>
            </nav>
            <h1>Espejos de Aumento para Ba&ntilde;o</h1>
            <p class="hero-tagline">Para maquillaje, afeitado y cuidado facial.</p>
            <p>Espejos de aumento de pared para maquillaje, afeitado y cuidado facial. Aumento x5 y x10 con brazo extensible. Env&iacute;o gratis.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128269;</div>
                <div class="trust-text">
                    <strong>Aumento x5 y x10</strong>
                    <span>Para precisi&oacute;n m&aacute;xima</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128170;</div>
                <div class="trust-text">
                    <strong>Brazo extensible</strong>
                    <span>Acerca el espejo cuando lo necesitas</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#129685;</div>
                <div class="trust-text">
                    <strong>Doble cara</strong>
                    <span>Aumento + reflejo normal</span>
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

    <!-- 3. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-espejos-aumento" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Espejos de Aumento</h2>
    </div>
    <?php
}

function adrihosan_espejos_aumento_contenido_inferior() {
    ?>

    <!-- ACCESO A CATEGOR&Iacute;AS RELACIONADAS (PILLS) -->
    <section class="ap-pill-section adrihosan-full-width-block">
        <div class="ap-pill-wrapper">
            <h2>Otras opciones de espejos de ba&ntilde;o</h2>
            <div class="ap-pill-grid">
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/" class="ap-pill-tag">Con luz LED</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejos-bano-con-marco/" class="ap-pill-tag">Con marco</a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/" class="ap-pill-tag">Todos los espejos</a>
            </div>
        </div>
    </section>

    <?php
    // BLOQUE SEO: lo gestiona Ricardo desde la descripcion de la categoria
    // en WooCommerce admin.
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

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Espejos de Aumento</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Espejo de aumento x5 o x10 para maquillaje?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>x5</strong> es suficiente para maquillaje general &mdash; base, sombras, colorete. El <strong>x10</strong> es mejor para delineador, pesta&ntilde;as y cejas donde necesitas ver cada pelo. Si solo vas a tener uno, el x5 es m&aacute;s polivalente.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los espejos de aumento llevan luz?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Algunos modelos incluyen <strong>LED integrado</strong> en el aro del espejo. Los que no llevan luz se benefician de la iluminaci&oacute;n del espejo principal o de los apliques del ba&ntilde;o.</p>
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
          "name": "&iquest;Espejo de aumento x5 o x10 para maquillaje?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El x5 es suficiente para maquillaje general: base, sombras, colorete. El x10 es mejor para delineador, pesta&ntilde;as y cejas donde necesitas ver cada pelo. Si solo vas a tener uno, el x5 es m&aacute;s polivalente."
          }
        },
        {
          "@type": "Question",
          "name": "&iquest;Los espejos de aumento llevan luz?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Algunos modelos incluyen LED integrado en el aro del espejo. Los que no llevan luz se benefician de la iluminaci&oacute;n del espejo principal o de los apliques del ba&ntilde;o."
          }
        }
      ]
    }
    </script>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en espejos de aumento">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu espejo de aumento?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20espejo%20de%20aumento" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 4299 - ESPEJOS DE AUMENTO
// ============================================================================
