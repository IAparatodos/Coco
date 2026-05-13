<?php
/**
 * Category: Muebles de Ba&ntilde;o R&uacute;sticos (ID: 2428)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2428 - MUEBLES DE BA&Ntilde;O R&Uacute;STICOS
// ============================================================================

function adrihosan_muebles_bano_rusticos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/Muebles-de-bano-rustico-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de Ba&ntilde;o</a> &gt;
                <span>Muebles de Ba&ntilde;o R&uacute;sticos</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Muebles de Ba&ntilde;o R&uacute;sticos' ); ?></h1>
            <p class="hero-tagline">La calidez de la madera natural en tu ba&ntilde;o.</p>
            <p>Muebles de ba&ntilde;o con patas y acabados en roble natural combinados con tonos neutros. Estilo r&uacute;stico contempor&aacute;neo desde 80 hasta 140&nbsp;cm, con cajones de cierre amortiguado y tratamiento antihumedad.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#127794;</div>
                <div class="trust-text">
                    <strong>Acabados en Roble Natural</strong>
                    <span>Veta visible y tonos c&aacute;lidos</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#129462;</div>
                <div class="trust-text">
                    <strong>Todos con Patas</strong>
                    <span>Estructura elevada estilo r&uacute;stico</span>
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
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Acabado</strong> (Roble, Panna, Crema, Blanco Mate), <strong>Ancho</strong> (80, 90, 100, 120 o 140&nbsp;cm) y <strong>N&uacute;mero de cajones</strong> para encontrar tu mueble r&uacute;stico ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-muebles-bano-rusticos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-muebles-bano-rusticos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Muebles de Ba&ntilde;o R&uacute;sticos</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_muebles_bano_rusticos_contenido_inferior() {
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

    <!-- BANNER INSPIRACI&Oacute;N MEDITERR&Aacute;NEA -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/Muebles-de-bano-rustico-Adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>El maridaje perfecto: madera y barro</h2>
                <p>Combina tu mueble r&uacute;stico con nuestros suelos de barro artesanal para un ba&ntilde;o con alma mediterr&aacute;nea.</p>
                <a href="https://www.adrihosan.com/categoria-producto/suelo-de-barro/" class="bumper-btn">Ver Suelos de Barro</a>
            </div>
        </div>
    </section>

    <!-- ACCESO A CATEGOR&Iacute;AS RELACIONADAS -->
    <section class="related-cats-section adrihosan-full-width-block">
        <div class="related-cats-wrapper">
            <h2 class="related-cats-title">Explora otros estilos de muebles de ba&ntilde;o</h2>
            <div class="related-cats-grid">
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-baratos/" class="related-cat-card">
                    <div class="related-cat-icon">&#128176;</div>
                    <div class="related-cat-label">Muebles Baratos</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/" class="related-cat-card">
                    <div class="related-cat-icon">&#9729;&#65039;</div>
                    <div class="related-cat-label">Suspendidos</div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-pequenos/" class="related-cat-card">
                    <div class="related-cat-icon">&#128208;</div>
                    <div class="related-cat-label">Ba&ntilde;os Peque&ntilde;os</div>
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
            <h2>Muebles de ba&ntilde;o r&uacute;sticos: car&aacute;cter c&aacute;lido para tu hogar</h2>
            <p>El estilo r&uacute;stico contempor&aacute;neo combina la nobleza de la <strong>madera natural</strong> con l&iacute;neas limpias y proporciones equilibradas. Nuestros muebles de ba&ntilde;o r&uacute;sticos llevan acabados en <strong>roble</strong> con veta visible, complementados con frentes en tonos panna, crema o blanco mate, generando contrastes c&aacute;lidos sin renunciar a la modernidad. Las patas elevadas son la firma del estilo: aportan ligereza visual, facilitan la limpieza y dan ese aire de mueble de ebanister&iacute;a tradicional adaptado al ba&ntilde;o actual.</p>
            <p>Cada modelo se fabrica con tablero hidr&oacute;fugo de alta densidad y recibe un tratamiento <strong>antihumedad</strong> espec&iacute;fico para resistir el vapor, las salpicaduras y los cambios de temperatura propios del cuarto de ba&ntilde;o. Los cajones cuentan con <strong>gu&iacute;as met&aacute;licas de extracci&oacute;n total y cierre amortiguado</strong>, garantizando un uso silencioso y duradero. Encontrar&aacute;s anchos desde 80&nbsp;cm para ba&ntilde;os medianos hasta los 140&nbsp;cm pensados para configuraciones de doble seno en ba&ntilde;os principales.</p>
            <p>Para sacar el m&aacute;ximo partido a un mueble r&uacute;stico, juega con los contrastes: combina la madera con <a href="https://www.adrihosan.com/categoria-producto/cocina/azulejos/azulejos-cocina/azulejos-zellige/">azulejos zellige</a> en colores tierra, suelos de <a href="https://www.adrihosan.com/categoria-producto/suelo-de-barro/">barro artesanal</a> o paredes en microcemento neutro. Si tu ba&ntilde;o es peque&ntilde;o pero quieres incorporar este estilo, valora un modelo de 80&nbsp;cm con un solo cajon profundo y a&ntilde;ade un <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/">espejo</a> con marco met&aacute;lico oscuro para reforzar el car&aacute;cter mediterr&aacute;neo. Tambi&eacute;n combinan a la perfecci&oacute;n con <a href="https://www.adrihosan.com/categoria-producto/cocina/azulejos/azulejos-bano/azulejos-hidraulicos/">baldosas hidr&aacute;ulicas</a> en zonas h&uacute;medas, creando ambientes donde tradici&oacute;n y dise&ntilde;o conviven con naturalidad.</p>
            <p>El mantenimiento es sencillo: basta con un pa&ntilde;o h&uacute;medo y jab&oacute;n neutro para conservar el acabado intacto durante a&ntilde;os. Si buscas inspiraci&oacute;n adicional, visita nuestras categor&iacute;as de <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-con-patas/">muebles con patas</a> y <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-de-diseno/">muebles de dise&ntilde;o</a> para descubrir todas las variantes disponibles. Y si necesitas asesoramiento personalizado, nuestro equipo te ayuda a coordinar mueble, lavabo, espejo y revestimientos para que tu ba&ntilde;o r&uacute;stico tenga la coherencia est&eacute;tica que mereces.</p>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Muebles de Ba&ntilde;o R&uacute;sticos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un mueble r&uacute;stico resiste bien la humedad del ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Nuestros muebles utilizan acabados de melamina tratada y lacados resistentes a la humedad y al vapor. No requieren mantenimiento especial m&aacute;s all&aacute; de la limpieza habitual con pa&ntilde;o h&uacute;medo y jab&oacute;n neutro.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medidas est&aacute;n disponibles en estilo r&uacute;stico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde 80&nbsp;cm hasta 140&nbsp;cm de ancho. Los modelos de 80 y 100&nbsp;cm funcionan bien para ba&ntilde;os est&aacute;ndar, mientras que los de 120 y 140&nbsp;cm son ideales como mueble principal en ba&ntilde;os amplios o para configuraciones de doble seno.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo combinar un mueble r&uacute;stico con un ba&ntilde;o moderno?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es una de las combinaciones m&aacute;s efectivas. Un mueble con acabado roble y patas vistas sobre un suelo porcel&aacute;nico liso o con azulejos en formato grande crea un contraste c&aacute;lido-contempor&aacute;neo que aporta personalidad sin sobrecargar el espacio.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; espejo queda mejor con un mueble r&uacute;stico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Tienes dos caminos: un espejo con marco de madera en el mismo tono del mueble para un conjunto uniforme, o un espejo redondo con luz LED sin marco para crear un contraste r&uacute;stico-moderno que funciona muy bien visualmente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en muebles de ba&ntilde;o r&uacute;sticos">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu mueble de ba&ntilde;o r&uacute;stico?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20muebles%20de%20ba%C3%B1o%20r%C3%BAsticos" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 2428 - MUEBLES DE BA&Ntilde;O R&Uacute;STICOS
// ============================================================================
