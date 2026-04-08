<?php
/**
 * Category: Muebles de Ba&ntilde;o de Dise&ntilde;o (ID: 2433)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2433 - MUEBLES DE BA&Ntilde;O DE DISE&Ntilde;O
// ============================================================================

function adrihosan_muebles_bano_diseno_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION - Exclusividad y Vanguardia -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/muebles-bano-diseno-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de Ba&ntilde;o</a> &gt;
                <span>Muebles de Ba&ntilde;o de Dise&ntilde;o</span>
            </nav>
            <p class="hero-tagline">Donde la arquitectura se encuentra con el bienestar.</p>
            <h1>Muebles de Ba&ntilde;o de Dise&ntilde;o: Vanguardia y Exclusividad</h1>
            <p>Explora una selecci&oacute;n &uacute;nica de muebles de ba&ntilde;o de alta gama. Dise&ntilde;os de autor, acabados artesanales y materiales innovadores creados para quienes entienden que el lujo reside en los detalles.</p>
        </div>
    </section>

    <!-- 2. SELLOS DE CALIDAD PREMIUM -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128142;</div>
                <div class="trust-text">
                    <strong>Materiales Nobles</strong>
                    <span>Madera maciza, piedras naturales y Solid Surface</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127912;</div>
                <div class="trust-text">
                    <strong>Personalizaci&oacute;n</strong>
                    <span>Acabados a la carta y configuraciones a medida</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128208;</div>
                <div class="trust-text">
                    <strong>Dise&ntilde;o de Autor</strong>
                    <span>L&iacute;neas minimalistas y siluetas contempor&aacute;neas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Material</strong>, <strong>Acabado</strong> y <strong>Estilo</strong> para encontrar el mueble de dise&ntilde;o perfecto para tu proyecto. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-muebles-diseno" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-muebles-diseno" class="product-loop-header">
        <h2 class="product-loop-title">Colecci&oacute;n de Muebles de Ba&ntilde;o de Dise&ntilde;o</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_muebles_bano_diseno_contenido_inferior() {
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

    <!-- SECCI&Oacute;N MATERIALES PREMIUM -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Materiales y Acabados de Alta Gama</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#127795;</div>
                    <h3>Madera Maciza</h3>
                    <p>Roble, nogal y fresno seleccionados a mano. Chapas naturales con veteado &uacute;nico que aportan calidez y autenticidad a cada pieza.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#129704;</div>
                    <h3>Solid Surface &amp; Corian</h3>
                    <p>Superficies no porosas de &uacute;ltima generaci&oacute;n. Integran lavabo y encimera en una sola pieza, sin juntas ni fisuras visibles.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128167;</div>
                    <h3>Lacado Premium</h3>
                    <p>Acabados mate sedoso y brillo espejo de alta resistencia. M&aacute;s de 40 tonalidades NCS disponibles para personalizaci&oacute;n total.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER ASESORAMIENTO PREMIER -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/asesoramiento-bano-diseno-adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>Tu Proyecto de Dise&ntilde;o, en Manos de Expertos</h2>
                <p>Nuestro equipo de interioristas te acompa&ntilde;a desde la idea inicial hasta la instalaci&oacute;n final. Servicio de asesoramiento personalizado para proyectos de alta gama.</p>
                <a href="https://www.adrihosan.com/contacto/" class="bumper-btn">Solicitar Asesoramiento Premier</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Muebles de Ba&ntilde;o de Dise&ntilde;o</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia a un mueble de ba&ntilde;o de dise&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un mueble de ba&ntilde;o de dise&ntilde;o se distingue por el uso de materiales premium (madera maciza, Solid Surface, piedra natural), acabados artesanales y l&iacute;neas cuidadas hasta el &uacute;ltimo detalle. Son piezas que combinan funcionalidad con est&eacute;tica de autor.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden personalizar las medidas y acabados?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. La mayor&iacute;a de nuestras colecciones de dise&ntilde;o ofrecen personalizaci&oacute;n total: medidas a la carta, m&aacute;s de 40 acabados, elecci&oacute;n de tiradores y configuraci&oacute;n de m&oacute;dulos interiores. Consulta con nuestro equipo para tu proyecto.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es el plazo de entrega para un mueble personalizado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los muebles de dise&ntilde;o en stock se env&iacute;an en 5-7 d&iacute;as laborables. Los muebles personalizados o bajo pedido tienen un plazo de 4-6 semanas desde la confirmaci&oacute;n del pedido, dependiendo del fabricante.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipo de lavabo es mejor para un mueble de dise&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del estilo que busques. Para minimalismo puro, los lavabos integrados en Solid Surface crean una pieza sin juntas. Para un toque m&aacute;s org&aacute;nico, los lavabos sobreencimera en cer&aacute;mica o piedra natural son ideales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en muebles de ba&ntilde;o de dise&ntilde;o">
                <div>
                    <h2>Soy Ricardo. &iquest;Buscas un mueble de ba&ntilde;o exclusivo?
                        <span>Te asesoro en tu proyecto de dise&ntilde;o.</span>
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20asesoramiento%20sobre%20muebles%20de%20ba%C3%B1o%20de%20dise%C3%B1o" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 2433 - MUEBLES DE BA&Ntilde;O DE DISE&Ntilde;O
// ============================================================================
