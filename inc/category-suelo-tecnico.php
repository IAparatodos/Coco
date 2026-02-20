<?php
/**
 * Category: Suelo T&eacute;cnico Exterior (ID: 2350)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2350 - SUELO T&Eacute;CNICO EXTERIOR
// ============================================================================

function adrihosan_suelo_tecnico_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/suelo-tecnico-exterior-terraza-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/">Pavimentos</a> &gt;
                <span>Suelo T&eacute;cnico Exterior</span>
            </nav>
            <h1>Suelo T&eacute;cnico Exterior</h1>
            <p>Descubre nuestra selecci&oacute;n de suelo t&eacute;cnico exterior. Sistemas elevados ideales para terrazas y piscinas. Alta resistencia y f&aacute;cil instalaci&oacute;n. Compara nuestro precio en gres porcel&aacute;nico y encuentra la soluci&oacute;n perfecta para tu proyecto.</p>
            <div class="hero-buttons">
                <a href="#catalogo-suelo-tecnico" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#ventajas-suelo-tecnico" class="hero-btn secondary">Ventajas</a>
            </div>
        </div>
    </section>

    <!-- 2. VALUE PROPS -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="ventajas-suelo-tecnico">
        <div class="ap-inspiration-wrapper">
            <h2>Ventajas del Suelo T&eacute;cnico Exterior</h2>
            <p class="section-subtitle">Un sistema elevado que resuelve problemas reales: drenaje, ocultaci&oacute;n de instalaciones y mantenimiento m&iacute;nimo. Conoce por qu&eacute; es la elecci&oacute;n profesional para terrazas.</p>
            <div class="ap-inspiration-grid grid-4-cols">
                <div class="st-value-card">
                    <div class="st-value-icon">&#128167;</div>
                    <h3>Drenaje Instant&aacute;neo</h3>
                    <p>El agua de lluvia drena por las juntas entre las baldosas, evitando charcos y humedades. Tu terraza siempre seca, incluso bajo la tormenta m&aacute;s intensa.</p>
                </div>
                <div class="st-value-card">
                    <div class="st-value-icon">&#128268;</div>
                    <h3>Oculta Instalaciones</h3>
                    <p>Cables el&eacute;ctricos, tuber&iacute;as de riego, desag&uuml;es... Todo queda oculto bajo las baldosas y accesible si lo necesitas. Limpieza visual total.</p>
                </div>
                <div class="st-value-card">
                    <div class="st-value-icon">&#128736;</div>
                    <h3>Instalaci&oacute;n Sin Obra</h3>
                    <p>Se coloca sobre soportes regulables (plots) sin adhesivo ni cemento. Proceso r&aacute;pido, limpio y 100% reversible. Ideal para aticos y terrazas comunitarias.</p>
                </div>
                <div class="st-value-card">
                    <div class="st-value-icon">&#9889;</div>
                    <h3>Resistencia Extrema</h3>
                    <p>Porcel&aacute;nico de 20mm que soporta heladas, cambios t&eacute;rmicos bruscos, rayos UV y cargas de hasta 1.000 kg/pieza. Pensado para durar d&eacute;cadas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> El suelo t&eacute;cnico se vende por m&sup2;. Usa los filtros de <strong>Acabado</strong> (madera, piedra, cemento) y <strong>Precio</strong> para encontrar la baldosa ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-suelo-tecnico" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-suelo-tecnico" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelo T&eacute;cnico Exterior</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro (envuelve productos + paginaci&oacute;n) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_suelo_tecnico_contenido_inferior() {
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

    <!-- BLOQUE SEO: VENTAJAS DEL SISTEMA ELEVADO -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Ventajas de instalar un Suelo T&eacute;cnico Exterior</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#127754;</div>
                    <h3>Drenaje de agua perfecto</h3>
                    <p>Las juntas abiertas entre baldosas permiten que el agua de lluvia filtre directamente al soporte inferior. Olvídate de charcos, pendientes forzadas o desag&uuml;es mal dimensionados. Tu terraza se seca sola en minutos.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128295;</div>
                    <h3>Oculta cables y tuber&iacute;as</h3>
                    <p>El espacio entre el suelo original y las baldosas permite pasar instalaciones el&eacute;ctricas, riego autom&aacute;tico o tuber&iacute;as sin necesidad de abrir rozas. Y si necesitas acceder, levantas la baldosa y listo.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128170;</div>
                    <h3>Mantenimiento m&iacute;nimo</h3>
                    <p>El gres porcel&aacute;nico de 20mm no necesita ning&uacute;n tratamiento. No se mancha, no se decolora por el sol, no le afectan las heladas y se limpia con agua y jab&oacute;n neutro. Sin ceras, sin selladores, sin complicaciones.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: PRECIO DEL PORCEL&Aacute;NICO -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>&iquest;Cu&aacute;l es el precio del porcel&aacute;nico para exterior?</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>Si te est&aacute;s preguntando por el <strong>precio del porcel&aacute;nico</strong>, en Adrihosan ajustamos nuestros m&aacute;rgenes para ofrecerte la mejor calidad. El <strong>precio del gres porcel&aacute;nico</strong> para suelo t&eacute;cnico var&iacute;a seg&uacute;n el grosor (habitualmente 20mm) y el acabado, pero supone una inversi&oacute;n rentable a largo plazo por su nulo mantenimiento frente a otros materiales como la madera natural o el composite.</p>
                <p style="margin-top: 15px;">En nuestro cat&aacute;logo encontrar&aacute;s opciones desde gama econ&oacute;mica hasta premium. Todos los precios se muestran <strong>por metro cuadrado (m&sup2;)</strong> para que puedas comparar f&aacute;cilmente. Usa el filtro de precio para ajustar la b&uacute;squeda a tu presupuesto.</p>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: COMPARATIVA SUELOS CER&Aacute;MICOS -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Comparativa: Suelos cer&aacute;micos y baldosas de gres</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>Analizar los <strong>suelos de gres y sus precios</strong> es el primer paso antes de reformar tu terraza. Contamos con un cat&aacute;logo donde el <strong>precio del suelo cer&aacute;mico</strong> se adapta a todos los bolsillos. Descubre nuestras <strong>baldosas de suelo</strong> con un precio altamente competitivo.</p>
                <p style="margin-top: 15px;">El suelo t&eacute;cnico exterior de gres porcel&aacute;nico ofrece ventajas claras frente a otros materiales:</p>
                <ul style="margin-top: 10px; padding-left: 20px; color: #3f6f7b;">
                    <li style="margin-bottom: 8px;"><strong>vs. Madera natural:</strong> Sin mantenimiento anual. No se pudre, no necesita barniz, no se astilla.</li>
                    <li style="margin-bottom: 8px;"><strong>vs. Composite:</strong> No se deforma con el calor, no pierde color y tiene mayor resistencia mec&aacute;nica.</li>
                    <li style="margin-bottom: 8px;"><strong>vs. Piedra natural:</strong> Precio m&aacute;s accesible, menor peso por m&sup2; y nula porosidad (no absorbe manchas).</li>
                </ul>
                <p style="margin-top: 15px;">Te garantizamos que los <strong>suelos cer&aacute;micos tienen precios</strong> que justifican su extrema durabilidad en exteriores. Una inversi&oacute;n inteligente que rentabilizas a&ntilde;o tras a&ntilde;o.</p>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelo T&eacute;cnico Exterior</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia de precio hay entre un suelo cer&aacute;mico normal y uno t&eacute;cnico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El suelo t&eacute;cnico exterior tiene un precio superior al pavimento cer&aacute;mico convencional, principalmente por el grosor de las piezas (20mm frente a los 9-10mm habituales) y por la necesidad de soportes regulables (plots). Sin embargo, el ahorro en mano de obra de instalaci&oacute;n (no requiere cemento cola ni albañiler&iacute;a) compensa significativamente la diferencia. El coste total de la soluci&oacute;n es muy competitivo frente a alternativas como la tarima de madera o composite.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es dif&iacute;cil instalar baldosas de gres porcel&aacute;nico en formato elevado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No, es una de sus grandes ventajas. Las baldosas se apoyan directamente sobre plots (soportes regulables en altura) sin necesidad de adhesivos ni cemento. El proceso es limpio, r&aacute;pido y no genera escombros. Una persona con experiencia b&aacute;sica en bricolaje puede instalarlo, aunque para grandes superficies recomendamos un profesional para asegurar la nivelaci&oacute;n perfecta. Adem&aacute;s, la instalaci&oacute;n es 100% reversible: puedes desmontar y reutilizar tanto las baldosas como los soportes.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Incluye el precio del suelo los plots o soportes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No, los soportes regulables (plots) se venden por separado. Esto se hace as&iacute; porque la cantidad y tipo de soporte depende de la altura que necesites salvar y de la superficie a cubrir. Normalmente se necesitan entre 4 y 5 soportes por m&sup2;. Cont&aacute;ctanos y te calculamos la cantidad exacta de plots necesarios para tu proyecto, con el presupuesto desglosado y sin compromiso.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; espesor debe tener el porcel&aacute;nico para suelo t&eacute;cnico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El est&aacute;ndar para suelo t&eacute;cnico exterior es <strong>20mm de espesor</strong>. Esta medida garantiza la resistencia mec&aacute;nica necesaria para soportar el tr&aacute;nsito peatonal, muebles de exterior e incluso cargas puntuales elevadas sin necesidad de soporte continuo. Las piezas de 20mm, apoyadas sobre plots, pueden soportar hasta 1.000 kg por baldosa.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede poner suelo t&eacute;cnico alrededor de una piscina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una de sus aplicaciones m&aacute;s habituales. El porcel&aacute;nico de 20mm con acabado antideslizante (C3) es perfecto para coronaciones y plataformas alrededor de piscinas. El sistema de drenaje por juntas abiertas evita que el agua se acumule, y el material no se calienta tanto como la piedra natural al sol directo. Adem&aacute;s, es resistente al cloro y a los productos qu&iacute;micos de la piscina.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en suelo t&eacute;cnico exterior">
                <div>
                    <h2>&iquest;Necesitas ayuda con tu proyecto de terraza?
                        <span>Soy Ricardo. Te calculo el material y los plots sin compromiso.</span>
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelo%20t%C3%A9cnico%20exterior" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">&#9993;</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}
