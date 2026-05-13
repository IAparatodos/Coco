<?php
/**
 * Category: Muebles de Ba&ntilde;o Baratos (ID: 2143)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2143 - MUEBLES DE BA&Ntilde;O BARATOS
// ============================================================================

function adrihosan_muebles_bano_baratos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/Muebles-de-bano-baratos-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de Ba&ntilde;o</a> &gt;
                <span>Muebles de Ba&ntilde;o Baratos</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Muebles de Ba&ntilde;o Baratos' ); ?></h1>
            <p class="hero-tagline">Dise&ntilde;o y calidad a tu alcance con precios directos de f&aacute;brica.</p>
            <p>Renueva tu aseo sin complicaciones. Accede a nuestra selecci&oacute;n de muebles de ba&ntilde;o econ&oacute;micos: soluciones funcionales, materiales resistentes a la humedad y el ahorro real de comprar sin intermediarios.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#127981;</div>
                <div class="trust-text">
                    <strong>Precios de F&aacute;brica</strong>
                    <span>Tarifas competitivas por venta directa</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Stock Real</strong>
                    <span>Env&iacute;o express en 48/72 horas</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#9989;</div>
                <div class="trust-text">
                    <strong>Garant&iacute;a Adrihosan</strong>
                    <span>Herrajes y materiales testados</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CATEGOR&Iacute;AS COMPLEMENTARIAS -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/ofertas-muebles-de-bano/" class="quick-nav-pill">&#127991;&#65039; Oportunidades</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/columnas-de-bano/" class="quick-nav-pill">&#128230; Columnas Auxiliares Baratas</a>
            <a href="#catalogo-muebles-bano-baratos" class="quick-nav-pill">&#128208; Muebles Compactos</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Rango de Precio</strong> y <strong>Pack Completo</strong> (Mueble + Lavabo o Mueble + Lavabo + Espejo) para encontrar la mejor oferta. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-muebles-bano-baratos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-muebles-bano-baratos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Muebles de Ba&ntilde;o Baratos</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_muebles_bano_baratos_contenido_inferior() {
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

    <!-- SECCI&Oacute;N VENTA CRUZADA: PACKS AHORRO -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Todo lo que necesitas en un solo clic</h2>
            <p>Nuestros <strong>Packs Ahorro</strong> incluyen mueble, lavabo, espejo y aplique LED por un precio cerrado imbatible. Al comprar el conjunto completo, ahorras hasta un 30% frente a adquirir cada pieza por separado. Adem&aacute;s, todos los elementos est&aacute;n coordinados en acabado y estilo para que tu ba&ntilde;o luzca con coherencia desde el primer d&iacute;a.</p>
            <p>Consulta los packs disponibles filtrando por <strong>&laquo;Pack Completo&raquo;</strong> en los filtros superiores. Si necesitas ayuda para combinar piezas sueltas, nuestro equipo te asesora sin compromiso.</p>
        </div>
    </section>

    <!-- SECCI&Oacute;N SEO: GUIA DE COMPRA -->
    <section class="seo-content-section seo-guide-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>&iquest;C&oacute;mo elegir un mueble de ba&ntilde;o barato sin renunciar a la calidad?</h2>
            <p>El precio bajo no tiene por qu&eacute; significar mala calidad. En Adrihosan seleccionamos modelos de <strong>f&aacute;brica directa</strong> que eliminan intermediarios, lo que nos permite ofrecer precios competitivos sin sacrificar materiales ni acabados. Busca muebles con tablero hidr&oacute;fugo (resistente al agua) y cajones con gu&iacute;as de extracci&oacute;n total para mayor durabilidad.</p>
            <p>Si tu presupuesto es ajustado, prioriza un <strong>conjunto mueble + lavabo</strong>: es la combinaci&oacute;n que m&aacute;s impacto visual genera con la menor inversi&oacute;n. A&ntilde;ade despu&eacute;s un espejo sencillo y tendr&aacute;s un ba&ntilde;o renovado por menos de lo que imaginas.</p>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Muebles de Ba&ntilde;o Econ&oacute;micos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un mueble de ba&ntilde;o con lavabo incluido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan, los conjuntos de mueble con lavabo cer&aacute;mico arrancan desde los 149&euro; en la medida de 60&nbsp;cm. Los modelos de 80&nbsp;cm con dos cajones y lavabo suelen oscilar entre los 180&euro; y 250&euro;. El precio final var&iacute;a seg&uacute;n el acabado seleccionado y si decides incluir el espejo o el aplique LED en el pack.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un mueble de ba&ntilde;o barato es de mala calidad?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No si eliges el proveedor adecuado. Nuestros muebles econ&oacute;micos utilizan los mismos materiales base que gamas superiores: melamina de alta presi&oacute;n, herrajes met&aacute;licos con sistema de cierre amortiguado y lavabos de cer&aacute;mica sanitaria. La reducci&oacute;n del precio proviene de dise&ntilde;os m&aacute;s estandarizados y de nuestra relaci&oacute;n directa con los fabricantes, nunca de recortar en la calidad del tablero.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; mueble barato me conviene para un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La opci&oacute;n ganadora es un modelo suspendido de 60&nbsp;cm de ancho con un fondo reducido (entre 35 y 40&nbsp;cm). Estos muebles liberan el espacio del suelo y optimizan la zona de paso. Los encontrar&aacute;s en nuestra categor&iacute;a de <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-pequenos/">muebles de ba&ntilde;o peque&ntilde;os</a> con precios muy competitivos.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Realiz&aacute;is env&iacute;os de muebles de ba&ntilde;o a Valencia y resto de Espa&ntilde;a?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, como especialistas en muebles de ba&ntilde;o en Valencia, gestionamos env&iacute;os diarios a toda la pen&iacute;nsula. El env&iacute;o es gratuito y cuenta con un seguro de transporte total para garantizar que tu mueble llegue impecable a su destino.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en muebles de ba&ntilde;o baratos">
                <div>
                    <h2>Soy Ricardo. &iquest;Quieres renovar tu ba&ntilde;o al mejor precio?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20muebles%20de%20ba%C3%B1o%20baratos" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 2143 - MUEBLES DE BA&Ntilde;O BARATOS
// ============================================================================
