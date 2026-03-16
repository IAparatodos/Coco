<?php
/**
 * Category: Porcel&aacute;nico Techlam (ID: 310)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 310 - PORCEL&Aacute;NICO TECHLAM
// ============================================================================

function adrihosan_porcelanico_techlam_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/porcelanico-techlam-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <span>Porcel&aacute;nico Techlam</span>
            </nav>
            <h1>Porcel&aacute;nico Techlam: Gran Formato y M&iacute;nimo Espesor</h1>
            <p>Distribuidor oficial de Techlam de Levantina. Descubre la revoluci&oacute;n del porcel&aacute;nico extrafino. L&aacute;minas gigantes de hasta 3 metros con tan solo 3mm de espesor. Colores inalterables, m&aacute;xima resistencia y cero porosidad para encimeras, fachadas y suelos sin obras.</p>
            <div class="hero-buttons">
                <a href="#catalogo-techlam" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#video-techlam" class="hero-btn secondary">Ver V&iacute;deo</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS T&Eacute;CNICOS -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#128207;</div>
                <div class="trust-text">
                    <strong>Extrafino (3mm y 5mm)</strong>
                    <span>Ideal reformas sin escombros</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127959;</div>
                <div class="trust-text">
                    <strong>Gran Formato</strong>
                    <span>Hasta 100x300 cm</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128293;</div>
                <div class="trust-text">
                    <strong>Ign&iacute;fugo y Antirrayaduras</strong>
                    <span>M&aacute;xima dureza</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128737;</div>
                <div class="trust-text">
                    <strong>Cero Porosidad</strong>
                    <span>Antibacteriano y antimanchas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / NAVEGACI&Oacute;N R&Aacute;PIDA -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="#" class="quick-nav-pill">&#128298; Para Encimeras (Top 12mm)</a>
            <a href="#" class="quick-nav-pill">&#127970; Para Fachadas</a>
            <a href="#" class="quick-nav-pill">&#128296; Reformas sin Obras (3mm)</a>
            <a href="#" class="quick-nav-pill">&#127912; Colecci&oacute;n M&aacute;rmoles</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Espesor</strong> (3mm para paredes, 5mm para suelos, 12mm para encimeras), <strong>Acabado</strong> (Mate, Pulido, Satinado) y <strong>Color</strong> para encontrar tu l&aacute;mina Techlam ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-techlam" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-techlam" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Porcel&aacute;nico Techlam</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_porcelanico_techlam_contenido_inferior() {
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

    <!-- BUMPER V&Iacute;DEO: TECNOLOG&Iacute;A TECHLAM -->
    <section class="bumper-video-section adrihosan-full-width-block" id="video-techlam">
        <div class="bumper-video-wrapper">
            <div class="bumper-video-player">
                <iframe src="https://www.youtube.com/embed/D4iOxomxMk8" title="Pruebas de resistencia Techlam" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
            </div>
            <div class="bumper-video-text">
                <h2>La tecnolog&iacute;a detr&aacute;s del porcel&aacute;nico extrafino</h2>
                <p>No te dejes enga&ntilde;ar por sus 3mm de espesor. Techlam soporta altas temperaturas, cortes directos y es totalmente inalterable al sol. Mira las pruebas de resistencia extrema.</p>
                <div class="bumper-video-features">
                    <div class="bumper-video-feature">
                        <span class="bumper-feature-icon">&#128293;</span>
                        <span>Resiste calor directo</span>
                    </div>
                    <div class="bumper-video-feature">
                        <span class="bumper-feature-icon">&#128170;</span>
                        <span>Antirrayaduras</span>
                    </div>
                    <div class="bumper-video-feature">
                        <span class="bumper-feature-icon">&#9728;&#65039;</span>
                        <span>Inalterable al sol</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: APLICACIONES TECHLAM -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-techlam">
        <div class="seo-content-wrapper">
            <h2>Aplicaciones del Porcel&aacute;nico Techlam</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128298;</div>
                    <h3>Encimeras de Cocina</h3>
                    <p>Techlam Top (12mm) ofrece la est&eacute;tica del m&aacute;rmol natural sin su fragilidad. Resistente al calor directo, a las rayaduras y a las manchas. La alternativa premium al Silestone y al cuarzo compacto.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127970;</div>
                    <h3>Fachadas Ventiladas</h3>
                    <p>Sus l&aacute;minas de 3mm y 5mm son ultraligeras para revestimiento exterior. Colores 100% inalterables a los rayos UV, resistentes a heladas y con cero mantenimiento. Ideales para arquitectura contempor&aacute;nea.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128296;</div>
                    <h3>Reformas sin Obras</h3>
                    <p>Con solo 3mm de espesor, las l&aacute;minas Techlam se colocan directamente sobre el revestimiento existente. Sin necesidad de picar azulejos, sin escombros y con un resultado espectacular en horas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Colecciones Destacadas de Techlam</h2>
            <p>Desde los cl&aacute;sicos efecto m&aacute;rmol hasta los acabados industriales en cemento y &oacute;xido. Techlam ofrece una gama premium pensada para proyectos que buscan la excelencia.</p>
            <div class="trends-links">
                <a href="#" class="trend-link">Efecto M&aacute;rmol</a>
                <a href="#" class="trend-link">Encimeras</a>
                <a href="#" class="trend-link">Fachadas</a>
                <a href="#" class="trend-link">Extrafino 3mm</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Porcel&aacute;nico Techlam</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; material es Techlam?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Techlam es una l&aacute;mina de gres porcel&aacute;nico de gran formato y m&iacute;nimo espesor (conocido como porcel&aacute;nico extrafino), fabricado por el grupo Levantina. Se compone de materias primas naturales prensadas y sometidas a alt&iacute;simas temperaturas, dando como resultado una superficie de 3mm o 5mm altamente resistente, higi&eacute;nica y vers&aacute;til para arquitectura e interiorismo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es mejor, porcel&aacute;nico Techlam o Silestone?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Ambos son excelentes materiales, pero el porcel&aacute;nico Techlam tiene ventajas t&eacute;cnicas superiores en ciertas situaciones: es 100% resistente a los rayos UV (se puede usar en exteriores y fachadas sin que pierda color), resiste el calor directo (puedes apoyar sartenes calientes) y no se quema ni se raya, a diferencia de los compactos de cuarzo y resina.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo limpiar el porcel&aacute;nico Techlam?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Gracias a su cero porosidad, su mantenimiento es m&iacute;nimo. Para la limpieza diaria de tu fachada, suelo o encimera Techlam, basta con utilizar agua tibia y un detergente neutro aplicados con un pa&ntilde;o h&uacute;medo o fregona. Al no absorber l&iacute;quidos, las manchas de vino, caf&eacute; o aceite no penetran en la l&aacute;mina.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en porcel&aacute;nico Techlam">
                <div>
                    <h2>Soy Ricardo. &iquest;Necesitas presupuesto para tu proyecto con Techlam?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20informaci%C3%B3n%20sobre%20porcel%C3%A1nico%20Techlam" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 310 - PORCEL&Aacute;NICO TECHLAM
// ============================================================================
