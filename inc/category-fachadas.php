<?php
/**
 * Category: Fachadas y Muros (ID: 2394)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2394 - FACHADAS Y MUROS
// ============================================================================

function adrihosan_fachadas_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/Revestimiento-de-Fachada-Exterior-y-Muros.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Revestimientos</a> &gt;
                <span>Fachadas y Muros</span>
            </nav>
            <h1>Revestimiento de Fachada Exterior y Muros</h1>
            <p>Protege y viste tu hogar con porcel&aacute;nico para fachadas exteriores. Resistente al hielo, al sol y sin mantenimiento.</p>
            <div class="hero-buttons">
                <a href="#catalogo-fachadas" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#guia-fachadas" class="hero-btn secondary">Gu&iacute;a T&eacute;cnica</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#9728;&#65039;</div>
                <div class="trust-text">
                    <strong>Inalterable al Sol</strong>
                    <span>No pierde color ni se degrada</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#10052;&#65039;</div>
                <div class="trust-text">
                    <strong>Antihielo</strong>
                    <span>Absorci&oacute;n pr&aacute;cticamente nula</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#129521;</div>
                <div class="trust-text">
                    <strong>Sin Mantenimiento</strong>
                    <span>La lluvia limpia tu fachada</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128737;</div>
                <div class="trust-text">
                    <strong>Alta Resistencia</strong>
                    <span>Soporta golpes e impactos</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. BOTONERA DE NAVEGACI&Oacute;N R&Aacute;PIDA (Pills) -->
    <section class="nav-pills-section adrihosan-full-width-block">
        <div class="nav-pills-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/revestimiento-fachada-exterior/ver-estilo-azulejos-imitacion-piedra/" class="nav-pill">&#129704; Efecto Piedra</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="nav-pill">&#129717; Efecto Madera</a>
            <a href="https://www.adrihosan.com/categoria-producto/revestimiento-fachada-exterior/ver-estilo-cemento/" class="nav-pill">&#127959; Cemento</a>
            <a href="https://www.adrihosan.com/categoria-producto/revestimiento-fachada-exterior/ver-estilo-cemento/ver-formato-gran-formato/" class="nav-pill">&#128207; Gran Formato</a>
            <a href="https://www.adrihosan.com/categoria-producto/revestimiento-fachada-exterior/ver-formato-44x66/" class="nav-pill">&#129521; Lajas y Muros</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Estilo</strong> (Piedra / Madera / Cemento), <strong>Formato</strong> y <strong>Color</strong> para encontrar tu revestimiento de fachada ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-fachadas" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-fachadas" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Revestimientos para Fachadas y Muros Exteriores</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_fachadas_contenido_inferior() {
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

    <!-- BUMPER T&Eacute;CNICO B2B -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper">
            <h3 class="bumper-title">La seguridad de tu fachada empieza en el agarre</h3>
            <p class="bumper-text">Es obligatorio el uso de <strong>cemento cola flexible (C2TES1 o C2TES2)</strong> para instalar porcel&aacute;nico en exteriores y evitar desprendimientos. Este adhesivo absorbe las dilataciones del muro por cambios de temperatura, garantizando la fijaci&oacute;n a largo plazo.</p>
            <a href="https://www.adrihosan.com/contacto/" class="bumper-btn">Consultar Instalaci&oacute;n</a>
        </div>
    </section>

    <!-- BLOQUE SEO: GU&Iacute;A DE REVESTIMIENTOS PARA FACHADAS -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-fachadas">
        <div class="seo-content-wrapper">
            <h2>Gu&iacute;a de revestimientos para fachadas exteriores</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#129704;</div>
                    <h3>Efecto Piedra Natural</h3>
                    <p>Reproduce la textura de la pizarra, la cuarcita o la arenisca. Ideal para fachadas r&uacute;sticas, mediterr&aacute;neas y de monta&ntilde;a. Sin la porosidad ni el musgo de la piedra real.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#129717;</div>
                    <h3>Efecto Madera</h3>
                    <p>La calidez de la madera sin sus problemas. El porcel&aacute;nico imitaci&oacute;n madera para fachadas no se pudre, no requiere barnizado y resiste la humedad, el sol y los insectos.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127959;</div>
                    <h3>Cemento y &Oacute;xido</h3>
                    <p>Est&eacute;tica industrial y contempor&aacute;nea. Acabados que simulan hormig&oacute;n visto, metal oxidado o microcemento. Perfectos para arquitectura moderna y fachadas ventiladas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: POR QU&Eacute; PORCEL&Aacute;NICO PARA FACHADAS -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>&iquest;Por qu&eacute; elegir porcel&aacute;nico para revestir tu fachada?</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>El <strong>gres porcel&aacute;nico para fachadas exteriores</strong> es t&eacute;cnicamente el material m&aacute;s avanzado para proteger y embellecer tu hogar. A diferencia de la pintura (que hay que renovar cada pocos a&ntilde;os), el monocapa (que se ensucia y agrieta) o la piedra natural (que es porosa y cr&iacute;a musgo), el porcel&aacute;nico ofrece una <strong>durabilidad extrema, resistencia al hielo y un mantenimiento nulo</strong>. Su absorci&oacute;n de agua pr&aacute;cticamente nula (&lt;0,5%) lo hace inmune a las heladas y a los efectos del sol.</p>
            </div>
            <div class="finish-info-block" style="text-align:left;">
                <h3>Formatos y aplicaciones</h3>
                <p>El <strong>porcel&aacute;nico en gran formato</strong> (60x120 cm o superior) ofrece una est&eacute;tica vanguardista y reduce juntas, facilitando la limpieza. Las <strong>baldosas tipo laja o mampostería</strong> son perfectas para z&oacute;calos, entradas o estilos r&uacute;sticos. Ambos formatos se pueden combinar para crear fachadas con car&aacute;cter y personalidad.</p>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Revestimientos de Fachadas</h2>
            <p>Desde la piedra natural gris para fachadas contempor&aacute;neas, hasta las lajas claras estilo mediterr&aacute;neo. El gran formato con junta m&iacute;nima y las texturas 3D con relieve dominan los proyectos de reforma y obra nueva.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/revestimiento-fachada-exterior/ver-estilo-azulejos-imitacion-piedra/" class="trend-link">Piedra Natural</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="trend-link">Madera Exterior</a>
                <a href="https://www.adrihosan.com/categoria-producto/revestimiento-fachada-exterior/ver-estilo-cemento/" class="trend-link">Cemento Visto</a>
                <a href="https://www.adrihosan.com/categoria-producto/revestimiento-fachada-exterior/ver-estilo-cemento/ver-formato-gran-formato/" class="trend-link">Gran Formato</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Revestimientos de Fachadas</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es el mejor revestimiento para una fachada exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sin duda, el gres porcel&aacute;nico para fachadas exteriores es el material t&eacute;cnicamente superior. A diferencia de la pintura (que hay que renovar), el monocapa (que se ensucia y agrieta) o la piedra natural (que es porosa y cr&iacute;a musgo), el porcel&aacute;nico ofrece una durabilidad extrema, resistencia al hielo y un mantenimiento nulo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede usar cualquier porcel&aacute;nico para fachadas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>T&eacute;cnicamente, cualquier porcel&aacute;nico es apto para exterior por su baja porosidad, pero para revestir paredes y fachadas exteriores recomendamos piezas de masa coloreada o esmaltes t&eacute;cnicos de alta dureza. Adem&aacute;s, el formato debe adaptarse a los vol&uacute;menes del muro para minimizar los cortes y el desperdicio.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipo de adhesivo necesito para pegar baldosas en la fachada?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La elecci&oacute;n del adhesivo es cr&iacute;tica y no se puede escatimar en ella. Para instalar porcel&aacute;nico en fachadas, es obligatorio utilizar un cemento cola muy flexible y deformable, clasificado normativamente como C2TES1 o C2TES2. Este adhesivo absorber&aacute; las dilataciones que sufre el muro por los cambios de temperatura (sol directo en verano, heladas en invierno), evitando desprendimientos.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es mejor usar gran formato o baldosas peque&ntilde;as para el muro exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del estilo arquitect&oacute;nico que busques. El porcel&aacute;nico para fachadas exteriores en gran formato (ej. 60x120 cm) ofrece una est&eacute;tica vanguardista, limpia y reduce el n&uacute;mero de juntas, lo que facilita a&uacute;n m&aacute;s la limpieza. Por el contrario, las baldosas m&aacute;s peque&ntilde;as, tipo &ldquo;laja&rdquo; o mamposter&iacute;a, son excelentes para resaltar vol&uacute;menes concretos (como la entrada), crear z&oacute;calos o lograr un estilo r&uacute;stico tradicional.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Requiere alg&uacute;n mantenimiento la fachada de porcel&aacute;nico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Una de las mayores ventajas de elegir una baldosa para fachada en porcel&aacute;nico es su coste de mantenimiento cero. Al ser un material no poroso y altamente vitrificado, el humo de los coches, el polvo o la contaminaci&oacute;n no penetran en la pieza. Habitualmente, la propia agua de la lluvia es suficiente para lavarla, pudiendo aplicarse un manguerazo ocasional si fuera necesario.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en revestimientos de fachada">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu fachada?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20revestimientos%20de%20fachada" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2394 - FACHADAS Y MUROS
// ============================================================================
