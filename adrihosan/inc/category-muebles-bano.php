<?php
/**
 * Category: Muebles de Ba&ntilde;o (ID: 99)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 99 - MUEBLES DE BA&Ntilde;O
// ============================================================================

function adrihosan_muebles_bano_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/04/Muebles-de-bano-Adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/bano/">Ba&ntilde;o</a> &gt;
                <span>Muebles de Ba&ntilde;o</span>
            </nav>
            <h1>Muebles de Ba&ntilde;o: Encuentra el Estilo Ideal para tu Hogar</h1>
            <p>M&aacute;s de 500 modelos en stock. Desde soluciones compactas para ba&ntilde;os peque&ntilde;os hasta muebles de dise&ntilde;o suspendidos o r&uacute;sticos con patas. Calidad, durabilidad y env&iacute;o r&aacute;pido.</p>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Env&iacute;o Seguro</strong>
                    <span>Protecci&oacute;n especial para espejos y cer&aacute;mica</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128295;</div>
                <div class="trust-text">
                    <strong>F&aacute;cil Montaje</strong>
                    <span>Muebles ya montados (no kit) en su mayor&iacute;a</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128208;</div>
                <div class="trust-text">
                    <strong>Variedad de Medidas</strong>
                    <span>Desde 60 cm hasta 140 cm</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / ACCESO DIRECTO A SUBCATEGOR&Iacute;AS -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/" class="quick-nav-pill">&#9729;&#65039; Suspendidos</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/mueble-lavabo-pequeno/" class="quick-nav-pill">&#128208; Ba&ntilde;os Peque&ntilde;os</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-con-patas/" class="quick-nav-pill">&#129717; Con Patas</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-baratos/" class="quick-nav-pill">&#128176; Baratos</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-de-diseno/" class="quick-nav-pill">&#10024; Dise&ntilde;o</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-rusticos/" class="quick-nav-pill">&#127994; R&uacute;sticos</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/columnas-de-bano/" class="quick-nav-pill">&#128230; Auxiliares / Columnas</a>
            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/" class="quick-nav-pill">&#129668; Camerinos</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong>, <strong>Ancho del mueble</strong> y <strong>Posici&oacute;n del Lavabo</strong> para encontrar tu mueble de ba&ntilde;o ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-muebles-bano" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427306"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-muebles-bano" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Muebles de Ba&ntilde;o</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_muebles_bano_contenido_inferior() {
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

    <!-- BANNER BA&Ntilde;OS PEQUE&Ntilde;OS -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/mueble-bano-pequeno-adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>&iquest;Poco espacio? Optimiza cada cent&iacute;metro.</h2>
                <p>Descubre nuestros muebles de fondo reducido y soluciones inteligentes para ba&ntilde;os peque&ntilde;os. Funcionalidad y dise&ntilde;o en cada detalle.</p>
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/mueble-lavabo-pequeno/" class="bumper-btn">Ver soluciones para ba&ntilde;os peque&ntilde;os</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Muebles de Ba&ntilde;o</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es mejor comprar el mueble con lavabo o por separado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Con lavabo incluido siempre es la opci&oacute;n m&aacute;s recomendada. Te garantiza que el seno encaja al mil&iacute;metro y que la fontaner&iacute;a queda perfectamente alineada, facilitando la instalaci&oacute;n.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medidas son las m&aacute;s habituales?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Espa&ntilde;a las m&aacute;s vendidas son 60 cm y 80 cm de ancho, con fondo est&aacute;ndar de 45-46 cm. Para ba&ntilde;os principales, 100 cm y 120 cm son la tendencia actual.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>Mi aseo es muy estrecho, &iquest;qu&eacute; opciones tengo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Disponemos de muebles desde 40 cm y 50 cm de ancho, con fondos de 35-40 cm para no obstaculizar el paso ni la apertura de la puerta.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Suspendido o a suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El suspendido es ideal para ba&ntilde;os modernos y peque&ntilde;os &mdash; genera sensaci&oacute;n de amplitud y facilita la limpieza. El mueble a suelo es perfecto si tus paredes son de pladur o necesitas maximizar el almacenaje interior.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en muebles de ba&ntilde;o">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu mueble de ba&ntilde;o?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20muebles%20de%20ba%C3%B1o" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 99 - MUEBLES DE BA&Ntilde;O
// ============================================================================
