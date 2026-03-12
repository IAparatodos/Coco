<?php
/**
 * Category: Azulejos Antiguos y Vintage (ID: 2358)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2358 - AZULEJOS ANTIGUOS Y VINTAGE
// ============================================================================

function adrihosan_azulejos_antiguos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/azulejos-antiguos-vintage-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a> &gt;
                <span>Azulejos Antiguos y Vintage</span>
            </nav>
            <h1>Azulejos Vintage y Antiguos</h1>
            <p>El encanto del pasado con la resistencia de hoy. Colecciones de azulejos antiguos, vintage y r&uacute;sticos fabricados en cer&aacute;mica de alta calidad. Ideal para dar alma a tu reforma sin renunciar a la durabilidad moderna.</p>
            <div class="hero-buttons">
                <a href="#catalogo-antiguos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#guia-antiguos" class="hero-btn secondary">Gu&iacute;a de Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128336;</div>
                <div class="trust-text">
                    <strong>Estilo Atemporal</strong>
                    <span>Dise&ntilde;os que nunca pasan de moda</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128737;</div>
                <div class="trust-text">
                    <strong>Cer&aacute;mica de Alta Resistencia</strong>
                    <span>Gres moderno, est&eacute;tica antigua</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#129529;</div>
                <div class="trust-text">
                    <strong>F&aacute;cil Mantenimiento</strong>
                    <span>Limpieza con trapo h&uacute;medo</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Env&iacute;o Seguro</strong>
                    <span>Embalaje reforzado a domicilio</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / NAVEGACI&Oacute;N R&Aacute;PIDA -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="#catalogo-antiguos" class="quick-nav-pill">&#127859; Para Cocinas</a>
            <a href="#catalogo-antiguos" class="quick-nav-pill">&#128705; Para Ba&ntilde;os</a>
            <a href="#catalogo-antiguos" class="quick-nav-pill">&#129521; Estilo R&uacute;stico</a>
            <a href="#catalogo-antiguos" class="quick-nav-pill">&#127800; Hidr&aacute;ulicos Retro</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Estilo</strong> (Vintage, R&uacute;stico, Retro, Desgastado), <strong>Uso Recomendado</strong> (Ba&ntilde;o, Cocina, Sal&oacute;n) y <strong>Color</strong> para encontrar tu azulejo ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-antiguos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-antiguos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Antiguos y Vintage</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_azulejos_antiguos_contenido_inferior() {
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

    <!-- BUMPER VISUAL: AUTORIDAD -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/azulejos-antiguos-bumper-adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>&iquest;Restaurando una casa de pueblo o buscando un estilo retro?</h2>
                <p>Nuestras racholas antiguas combinan el dise&ntilde;o de las casas se&ntilde;oriales de principios de siglo con la nula absorci&oacute;n del gres moderno. Olv&iacute;date de los tratamientos especiales.</p>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="bumper-btn">Pedir Muestras a Domicilio</a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: ESTILOS DE AZULEJOS ANTIGUOS -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-antiguos">
        <div class="seo-content-wrapper">
            <h2>Azulejos Antiguos y Vintage: El alma de tu reforma</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128336;</div>
                    <h3>Azulejo Vintage</h3>
                    <p>Dise&ntilde;os elaborados con colores tradicionales y esmaltes artesanales. Inspirados en la cer&aacute;mica de principios del siglo XX, aportan car&aacute;cter y personalidad &uacute;nica a cocinas y ba&ntilde;os.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#129521;</div>
                    <h3>Estilo R&uacute;stico</h3>
                    <p>Texturas naturales, bordes irregulares y apariencia envejecida. Los azulejos r&uacute;sticos recrean la est&eacute;tica de la piedra y el barro artesanal con la resistencia del gres moderno.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127800;</div>
                    <h3>Hidr&aacute;ulico Retro</h3>
                    <p>Patrones geom&eacute;tricos y florales inspirados en las baldosas hidr&aacute;ulicas de las casas se&ntilde;oriales. Coloridos, llamativos y perfectos para crear suelos y paredes con personalidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: DIFERENCIAS Y USOS -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>&iquest;D&oacute;nde usar azulejos antiguos en tu hogar?</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>Los <strong>azulejos antiguos</strong> son incre&iacute;blemente vers&aacute;tiles. Las <strong>cer&aacute;micas vintage para cocina</strong> son ideales para salpicaderos, creando ese punto focal que transforma una cocina b&aacute;sica en un espacio con alma. Los <strong>azulejos r&uacute;sticos para ba&ntilde;os</strong> generan ambientes de relax y calidez, evocando las casas de campo mediterr&aacute;neas.</p>
                <p>Tambi&eacute;n funcionan en salas de estar como revestimiento decorativo y en &aacute;reas exteriores como patios y terrazas, siempre que elijas modelos con la resistencia adecuada al exterior.</p>
            </div>
            <div class="finish-info-block" style="text-align:left;">
                <h3>Gres moderno con alma antigua</h3>
                <p>A pesar de su aspecto envejecido, todos nuestros azulejos vintage est&aacute;n <strong>fabricados en gres moderno</strong>. Esto significa porosidad pr&aacute;cticamente nula, resistencia a golpes, manchas y humedad, y un mantenimiento m&iacute;nimo. El encanto del pasado con la tecnolog&iacute;a del presente.</p>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Azulejos Vintage</h2>
            <p>El estilo retro vuelve con fuerza. Desde los azulejos desgastados que simulan el paso del tiempo, hasta los patrones hidr&aacute;ulicos multicolor que recuerdan a las casas se&ntilde;oriales valencianas. Combina diferentes estilos para crear espacios &uacute;nicos.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-antiguos-y-vintage/" class="trend-link">Vintage</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-antiguos-y-vintage/" class="trend-link">R&uacute;stico</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-antiguos-y-vintage/" class="trend-link">Retro</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-antiguos-y-vintage/" class="trend-link">Desgastado</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes Sobre Azulejos Antiguos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es la diferencia entre azulejos antiguos y azulejos r&uacute;sticos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los azulejos antiguos o vintage suelen tener dise&ntilde;os m&aacute;s elaborados (como hidr&aacute;ulicos) y colores tradicionales, mientras que los azulejos r&uacute;sticos tienden a enfocarse en la textura natural, los bordes irregulares y la apariencia envejecida de la piedra o el barro.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;D&oacute;nde puedo usar azulejos antiguos en mi hogar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los azulejos antiguos son muy vers&aacute;tiles. Las cer&aacute;micas vintage para cocina son ideales para salpicaderos, mientras que los azulejos r&uacute;sticos para ba&ntilde;os crean espacios de relax. Tambi&eacute;n puedes usarlos en salas de estar y &aacute;reas exteriores, como patios y terrazas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo debo limpiar y mantener los azulejos antiguos y retro?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>A pesar de su aspecto antiguo, al estar fabricados en gres moderno, su mantenimiento es m&iacute;nimo. Para la limpieza diaria, simplemente utiliza un trapo h&uacute;medo con jab&oacute;n neutro. Evita productos altamente abrasivos para no da&ntilde;ar los esmaltes.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los azulejos antiguos son resistentes al agua?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, nuestra colecci&oacute;n de azulejos antiguos y racholas vintage tienen una porosidad casi nula. Son totalmente resistentes al agua, lo que los hace ideales para usar en &aacute;reas con alta humedad, como paredes de duchas y cocinas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo instalar azulejos antiguos yo mismo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Si tienes experiencia en instalaci&oacute;n de azulejos, puedes hacerlo t&uacute; mismo. De lo contrario, dado que las losas r&uacute;sticas pueden requerir un trato especial en las juntas para destacar su belleza, se recomienda contratar a un profesional para garantizar un resultado &oacute;ptimo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos antiguos y vintage">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu proyecto de azulejos vintage?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20antiguos%20y%20vintage" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2358 - AZULEJOS ANTIGUOS Y VINTAGE
// ============================================================================
