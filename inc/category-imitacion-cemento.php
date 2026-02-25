<?php
/**
 * Category: Azulejos Imitaci&oacute;n Cemento (ID: 4973)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 4973 - AZULEJOS IMITACI&Oacute;N CEMENTO
// ============================================================================

function adrihosan_imitacion_cemento_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-imitacion-cemento-microcemento.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a> &gt;
                <span>Azulejos Imitaci&oacute;n Cemento</span>
            </nav>
            <h1>Azulejos Imitaci&oacute;n Cemento y Efecto Microcemento</h1>
            <p>Consigue la est&eacute;tica industrial y minimalista del gres porcel&aacute;nico imitaci&oacute;n microcemento sin las complicaciones de la obra. Suelos y revestimientos continuos, desde el cemento pulido para interiores modernos hasta baldosas de cemento exterior antideslizantes. Dise&ntilde;o urbano, resistencia total y mantenimiento cero.</p>
            <div class="hero-buttons">
                <a href="#catalogo-cemento" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#guia-cemento" class="hero-btn secondary">Gu&iacute;a de Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#127959;</div>
                <div class="trust-text">
                    <strong>Est&eacute;tica Industrial</strong>
                    <span>Look Microcemento sin grietas</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128737;</div>
                <div class="trust-text">
                    <strong>Cero Mantenimiento</strong>
                    <span>No se mancha ni necesita sellado</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127783;</div>
                <div class="trust-text">
                    <strong>In &amp; Out</strong>
                    <span>Interior y Exterior Antideslizante</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128207;</div>
                <div class="trust-text">
                    <strong>Rectificados</strong>
                    <span>Juntas m&iacute;nimas, efecto continuo</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Efecto</strong> (Microcemento / Cemento Pulido / Encofrado), <strong>Uso</strong> (Interior / Exterior / Pared) y <strong>Color</strong> para encontrar tu azulejo ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-cemento" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-cemento" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Imitaci&oacute;n Cemento y Microcemento</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro (envuelve productos + paginaci&oacute;n) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_imitacion_cemento_contenido_inferior() {
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

    <!-- BUMPER VISUAL: CONTINUIDAD IN & OUT -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper">
            <p class="bumper-text">&iquest;Buscas continuidad visual? Combina el pavimento interior con el exterior antideslizante de la misma serie.</p>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="bumper-btn">Ver Colecciones In&amp;Out</a>
        </div>
    </section>

    <!-- BLOQUE SEO: LA REVOLUCI&Oacute;N DEL MICROCEMENTO -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-cemento">
        <div class="seo-content-wrapper">
            <h2>La revoluci&oacute;n del gres porcel&aacute;nico imitaci&oacute;n microcemento</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128736;</div>
                    <h3>Efecto Microcemento</h3>
                    <p>Superficie lisa y uniforme que reproduce fielmente la est&eacute;tica del microcemento real. Textura suave al tacto, tonos neutros y acabado mate que aportan elegancia minimalista sin los problemas de fisuras ni sellados peri&oacute;dicos.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#10024;</div>
                    <h3>Cemento Pulido</h3>
                    <p>Acabado lappato con un sutil brillo satinado que simula el cemento pulido industrial. Ideal para lofts, salones y espacios donde se busca un look urbano con un toque de sofisticaci&oacute;n y luminosidad.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127959;</div>
                    <h3>Cemento Encofrado</h3>
                    <p>Texturas marcadas que reproducen las huellas del encofrado de madera sobre hormig&oacute;n. El acabado m&aacute;s crudo y con m&aacute;s car&aacute;cter, perfecto para proyectos de estilo industrial o brutalista.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: SUELOS IMITACI&Oacute;N CEMENTO PULIDO -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>Suelos imitaci&oacute;n cemento pulido: Elegancia industrial</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>El <strong>suelo imitaci&oacute;n cemento pulido</strong> es la opci&oacute;n predilecta para quienes buscan la est&eacute;tica del hormig&oacute;n sin sus inconvenientes. Gracias a los formatos rectificados de gran formato (60x120 cm o superior) y las juntas m&iacute;nimas, se consigue un efecto de <strong>superficie continua</strong> que simula una solera de hormig&oacute;n vertido. El acabado lappato a&ntilde;ade un sutil brillo que aporta profundidad y luminosidad al espacio.</p>
            </div>
            <div class="finish-info-block" style="text-align:left;">
                <h3>Continuidad total: Baldosas efecto cemento para exterior</h3>
                <p>Disponemos de versiones <strong>antideslizantes (Clase 3 / R11)</strong> del mismo dise&ntilde;o interior para terrazas, porches y zonas de piscina. As&iacute; puedes mantener la misma l&iacute;nea est&eacute;tica dentro y fuera de la vivienda, creando una transici&oacute;n visual perfecta entre el interior y el exterior sin renunciar a la seguridad.</p>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Azulejos Efecto Cemento</h2>
            <p>Desde el minimalismo suave del microcemento en tonos perla o beige, hasta el car&aacute;cter fuerte del cemento encofrado con texturas marcadas. El gran formato rectificado domina los proyectos donde se busca continuidad visual y est&eacute;tica urbana.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="trend-link">Microcemento</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="trend-link">Cemento Pulido</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="trend-link">Encofrado</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="trend-link">Antideslizante Exterior</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Imitaci&oacute;n Cemento</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; ventajas tiene el azulejo imitaci&oacute;n cemento frente al microcemento real?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La principal ventaja es la durabilidad y la ausencia de problemas. Mientras que el microcemento real tiende a fisurarse, rayarse con facilidad y mancharse si falla el sellado, el gres porcel&aacute;nico imitaci&oacute;n microcemento es inalterable. No se agrieta, no se mancha, resiste golpes y mantiene la est&eacute;tica industrial perfecta durante d&eacute;cadas sin necesidad de mantenimiento ni encerados.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo usar suelos imitaci&oacute;n cemento en el exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, disponemos de una amplia gama de baldosas cemento exterior dise&ntilde;adas espec&iacute;ficamente para terrazas y zonas al aire libre. Estos modelos cuentan con un acabado antideslizante (Clase 3 / R11) que garantiza la seguridad frente a resbalones por lluvia o piscinas, manteniendo el mismo tono y dise&ntilde;o que el suelo del interior de la vivienda.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo consigo el efecto &quot;suelo continuo&quot; con baldosas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para lograr ese efecto de superficie infinita t&iacute;pica del cemento pulido, recomendamos elegir azulejos rectificados de gran formato (como 60x120 cm o superior). Al tener el borde cortado a 90 grados, permiten una instalaci&oacute;n con una junta m&iacute;nima (1-2 mm). Si utilizas una pasta de rejuntado del mismo color exacto que la baldosa, las juntas se vuelven casi invisibles, simulando una solera continua.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son dif&iacute;ciles de limpiar los suelos de imitaci&oacute;n cemento pulido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En absoluto. A diferencia del cemento real que es poroso y absorbe l&iacute;quidos, el suelo imitaci&oacute;n cemento cer&aacute;mico es impermeable. Se limpia simplemente con agua y cualquier detergente neutro. No necesita ceras, pulidoras ni tratamientos impermeabilizantes peri&oacute;dicos, lo que lo hace ideal para cocinas y ba&ntilde;os.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; estilos de cemento puedo encontrar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Nuestra colecci&oacute;n abarca desde el minimalismo suave del microcemento en tonos perla o beige, hasta el car&aacute;cter fuerte del cemento encofrado con texturas marcadas, o la elegancia del suelo imitaci&oacute;n cemento pulido con un ligero brillo satinado (lappato). Hay una opci&oacute;n para cada tipo de proyecto, sea industrial, n&oacute;rdico o contempor&aacute;neo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos imitaci&oacute;n cemento">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu azulejo efecto cemento?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20imitaci%C3%B3n%20cemento" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 4973 - AZULEJOS IMITACI&Oacute;N CEMENTO
// ============================================================================
