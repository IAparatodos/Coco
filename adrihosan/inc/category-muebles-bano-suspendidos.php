<?php
/**
 * Category: Muebles de Ba&ntilde;o Suspendidos (ID: 101)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 101 - MUEBLES DE BA&Ntilde;O SUSPENDIDOS
// ============================================================================

function adrihosan_muebles_bano_suspendidos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/Muebles-de-bano-suspendidos-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de Ba&ntilde;o</a> &gt;
                <span>Muebles de Ba&ntilde;o Suspendidos</span>
            </nav>
            <h1>Muebles de Ba&ntilde;o Suspendidos</h1>
            <p class="hero-tagline">Suelo libre, ba&ntilde;o limpio, est&eacute;tica moderna.</p>
            <p>Muebles de lavabo suspendidos con cajones de cierre amortiguado, lavabo cer&aacute;mico incluido y acabados resistentes a la humedad. Desde 60 hasta 140&nbsp;cm en m&aacute;s de 15 colores y acabados.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#9729;&#65039;</div>
                <div class="trust-text">
                    <strong>Instalaci&oacute;n en Pared</strong>
                    <span>Suelo libre y f&aacute;cil limpieza</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128208;</div>
                <div class="trust-text">
                    <strong>Desde 60 hasta 140&nbsp;cm</strong>
                    <span>Soluciones para cualquier ba&ntilde;o</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Env&iacute;o Gratis a toda Espa&ntilde;a</strong>
                    <span>Pen&iacute;nsula con seguro de transporte</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128736;&#65039;</div>
                <div class="trust-text">
                    <strong>Muebles Premontados</strong>
                    <span>Listos para instalar al recibirlos</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Color/Acabado</strong> (Blanco, Gris, Roble, Azul, Verde), <strong>Ancho</strong> (60, 70, 80, 100, 120 o 140&nbsp;cm), <strong>Posici&oacute;n del lavabo</strong> (Centro, Doble seno, Izquierda, Derecha) y <strong>N&uacute;mero de cajones</strong> para encontrar tu mueble suspendido ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-muebles-bano-suspendidos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-muebles-bano-suspendidos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Muebles de Ba&ntilde;o Suspendidos</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_muebles_bano_suspendidos_contenido_inferior() {
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

    <!-- BANNER INSTALACI&Oacute;N (sin imagen, fondo color corporativo) -->
    <section class="install-banner-section adrihosan-full-width-block">
        <div class="install-banner-wrapper">
            <div class="install-banner-content">
                <h2>&iquest;Pared de pladur? No hay problema.</h2>
                <p>Consulta con nuestro equipo las soluciones de anclaje para muebles suspendidos en tabiques ligeros. Te asesoramos sobre la ferreter&iacute;a adecuada seg&uacute;n el peso del conjunto.</p>
                <a href="https://www.adrihosan.com/contacto/" class="bumper-btn">Consultar</a>
            </div>
        </div>
    </section>

    <!-- ACCESO A CATEGOR&Iacute;AS RELACIONADAS -->
    <section class="related-cats-section adrihosan-full-width-block">
        <div class="related-cats-wrapper">
            <h2 class="related-cats-title">Explora otros estilos de muebles de ba&ntilde;o</h2>
            <div class="related-cats-grid">
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-con-patas/" class="related-cat-card">
                    <div class="related-cat-icon">&#129462;</div>
                    <div class="related-cat-label">Con Patas</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/mueble-lavabo-pequeno/" class="related-cat-card">
                    <div class="related-cat-icon">&#128208;</div>
                    <div class="related-cat-label">Ba&ntilde;os Peque&ntilde;os</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-baratos/" class="related-cat-card">
                    <div class="related-cat-icon">&#128176;</div>
                    <div class="related-cat-label">Baratos</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-de-diseno/" class="related-cat-card">
                    <div class="related-cat-icon">&#10024;</div>
                    <div class="related-cat-label">Dise&ntilde;o</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/columnas-de-bano/" class="related-cat-card">
                    <div class="related-cat-icon">&#128230;</div>
                    <div class="related-cat-label">Columnas</div>
                </a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Muebles de ba&ntilde;o suspendidos: la elecci&oacute;n moderna para un espacio limpio</h2>
            <p>Los <strong>muebles de ba&ntilde;o suspendidos</strong> son la opci&oacute;n m&aacute;s demandada en reformas actuales por una raz&oacute;n muy clara: al dejar el suelo libre, el ba&ntilde;o parece m&aacute;s amplio, la limpieza es muchisimo m&aacute;s c&oacute;moda y la est&eacute;tica gana en ligereza visual. Se anclan directamente a la pared mediante un sistema de colgadores met&aacute;licos regulables que permiten ajustar la altura del mueble a las necesidades de cada usuario, un detalle clave en viviendas donde conviven personas de distinta estatura o en ba&ntilde;os infantiles adaptados.</p>
            <p>Nuestra colecci&oacute;n abarca anchos desde <strong>60&nbsp;cm</strong> para ba&ntilde;os peque&ntilde;os y aseos de cortes&iacute;a, hasta <strong>140&nbsp;cm</strong> para configuraciones de doble seno en ba&ntilde;os principales. Cada modelo se fabrica con tablero hidr&oacute;fugo de alta densidad y lleva tratamiento antihumedad en todas las caras del mueble, incluidas las interiores de los cajones. El lavabo cer&aacute;mico est&aacute; incluido en el precio y los cajones montan gu&iacute;as met&aacute;licas de extracci&oacute;n total con <strong>cierre amortiguado</strong>, para un uso silencioso y duradero que mantiene las prestaciones intactas durante a&ntilde;os.</p>
            <p>A la hora de elegir, ten en cuenta la <strong>posici&oacute;n del desag&uuml;e</strong> existente en tu ba&ntilde;o: los modelos con el seno centrado son los m&aacute;s vers&aacute;tiles, pero si el desag&uuml;e est&aacute; desplazado puedes optar por versiones con el lavabo a la izquierda o a la derecha, liberando una mayor superficie de encimera &uacute;til. Para ba&ntilde;os compactos, un mueble de 60 o 70&nbsp;cm con un &uacute;nico cajon profundo es la elecci&oacute;n m&aacute;s pr&aacute;ctica. Si buscas m&aacute;xima capacidad, los modelos de 100 a 120&nbsp;cm con dos o tres cajones organizan el almacenamiento por niveles y separan productos de uso diario de los de repuesto.</p>
            <p>Combina tu mueble suspendido con un <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/">espejo retroiluminado</a>, revestimientos de <a href="https://www.adrihosan.com/categoria-producto/cocina/azulejos/azulejos-bano/">azulejos de ba&ntilde;o</a> en formato grande y un suelo porcel&aacute;nico imitaci&oacute;n madera o cemento para conseguir un conjunto coherente con est&eacute;tica contempor&aacute;nea. Si tu pared es de pladur o tabiquer&iacute;a ligera, nuestro equipo puede asesorarte sobre los anclajes espec&iacute;ficos (tacos tipo molly, placas de refuerzo o subestructura met&aacute;lica) para que la instalaci&oacute;n quede segura y duradera. Tambi&eacute;n encontrar&aacute;s modelos compatibles con <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/columnas-de-bano/">columnas de ba&ntilde;o suspendidas</a> a juego para completar el almacenamiento sin renunciar al lenguaje visual del suelo libre.</p>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Muebles de Ba&ntilde;o Suspendidos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; peso soporta un mueble de ba&ntilde;o suspendido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sobre una pared de ladrillo o bloque macizo, nuestros muebles suspendidos soportan el conjunto completo (mueble + lavabo + agua + productos) sin ning&uacute;n problema, ya que el sistema de colgadores met&aacute;licos est&aacute; dimensionado con un amplio margen de seguridad. Para paredes de pladur se recomiendan anclajes espec&iacute;ficos tipo molly o placa de refuerzo detr&aacute;s del yeso.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;A qu&eacute; altura debe instalarse un mueble suspendido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La altura est&aacute;ndar del borde superior del lavabo es de <strong>85&nbsp;cm</strong> desde el suelo acabado, aunque puede ajustarse entre 80 y 90&nbsp;cm seg&uacute;n la estatura del usuario. El sistema de colgadores regulables permite modificar esta altura sin herramientas especiales, algo imposible con un mueble con patas fijas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo instalarlo yo mismo o necesito un profesional?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Nuestros muebles llegan premontados, as&iacute; que la instalaci&oacute;n se reduce a colocar los colgadores en la pared, nivelarlos y colgar el mueble. Si tienes experiencia en bricolaje y una pared s&oacute;lida, puedes hacerlo t&uacute; mismo en un par de horas. Si el lavabo requiere conexi&oacute;n a un desag&uuml;e con posici&oacute;n distinta a la anterior, conviene contar con un fontanero.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; ventajas tiene un mueble suspendido frente a uno con patas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Tres principales: suelo libre (el ba&ntilde;o parece m&aacute;s grande y se limpia antes), ajuste de altura (adaptable a cada usuario) y est&eacute;tica moderna (l&iacute;neas flotantes sin interrupci&oacute;n visual en el pavimento). El mueble con patas, en cambio, destaca por su facilidad de instalaci&oacute;n en cualquier tipo de pared y por ofrecer un aire m&aacute;s c&aacute;lido y tradicional.</p>
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
          "name": "&iquest;Qu&eacute; peso soporta un mueble de ba&ntilde;o suspendido?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sobre una pared de ladrillo o bloque macizo, nuestros muebles suspendidos soportan el conjunto completo (mueble + lavabo + agua + productos) sin ning&uacute;n problema. Para paredes de pladur se recomiendan anclajes espec&iacute;ficos tipo molly o placa de refuerzo."
          }
        },
        {
          "@type": "Question",
          "name": "&iquest;A qu&eacute; altura debe instalarse un mueble suspendido?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "La altura est&aacute;ndar del borde superior del lavabo es de 85 cm desde el suelo acabado, aunque puede ajustarse entre 80 y 90 cm seg&uacute;n la estatura del usuario."
          }
        },
        {
          "@type": "Question",
          "name": "&iquest;Puedo instalarlo yo mismo o necesito un profesional?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nuestros muebles llegan premontados. La instalaci&oacute;n consiste en colocar los colgadores en la pared, nivelarlos y colgar el mueble. Si tienes experiencia en bricolaje y una pared s&oacute;lida, puedes hacerlo t&uacute; mismo en un par de horas."
          }
        },
        {
          "@type": "Question",
          "name": "&iquest;Qu&eacute; ventajas tiene un mueble suspendido frente a uno con patas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Suelo libre (el ba&ntilde;o parece m&aacute;s grande y se limpia antes), ajuste de altura (adaptable a cada usuario) y est&eacute;tica moderna con l&iacute;neas flotantes sin interrupci&oacute;n visual en el pavimento."
          }
        }
      ]
    }
    </script>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en muebles de ba&ntilde;o suspendidos">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu mueble de ba&ntilde;o suspendido?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20muebles%20de%20ba%C3%B1o%20suspendidos" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 101 - MUEBLES DE BA&Ntilde;O SUSPENDIDOS
// ============================================================================
