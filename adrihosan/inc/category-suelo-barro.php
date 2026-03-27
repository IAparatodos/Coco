<?php
/**
 * Category: Suelo de Barro y Terracota (ID: 1989)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 1989 - SUELO DE BARRO Y TERRACOTA
// ============================================================================

function adrihosan_barro_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/suelo-barro-terracota-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/">Pavimentos</a> &gt;
                <span>Suelo de Barro y Terracota</span>
            </nav>
            <h1>Suelo de Barro y Terracota: La Esencia de la Artesan&iacute;a</h1>
            <p>Recupera la calidez de lo aut&eacute;ntico. Nuestros suelos de barro cocido y baldosas de terracota son moldeados a mano, pieza a pieza, ofreciendo una belleza natural que mejora con el tiempo. Sostenibilidad, inercia t&eacute;rmica y dise&ntilde;o mediterr&aacute;neo.</p>
            <div class="hero-buttons">
                <a href="#catalogo-barro" class="hero-btn primary">Explorar Colecci&oacute;n</a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="hero-btn secondary">Pedir Presupuesto a Medida</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / ICONOS DE CONFIANZA -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#127994;</div>
                <div class="trust-text">
                    <strong>Hecho a Mano</strong>
                    <span>Cada pieza es &uacute;nica con variaciones de tono naturales</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128293;</div>
                <div class="trust-text">
                    <strong>Inercia T&eacute;rmica</strong>
                    <span>Ideal para suelo radiante y regulaci&oacute;n de temperatura</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127793;</div>
                <div class="trust-text">
                    <strong>100% Ecol&oacute;gico</strong>
                    <span>Materiales naturales sin qu&iacute;micos a&ntilde;adidos</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128737;</div>
                <div class="trust-text">
                    <strong>Durabilidad</strong>
                    <span>Un suelo para toda la vida que gana p&aacute;tina y car&aacute;cter</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / NAVEGACI&Oacute;N R&Aacute;PIDA -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-de-barro/est-prod-interior/" class="quick-nav-pill">&#127969; Barro Interior</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-de-barro/est-prod-terraza/" class="quick-nav-pill">&#9728;&#65039; Barro Exterior</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-de-barro/acabado-esmaltado/" class="quick-nav-pill">&#127912; Terracota Esmaltada</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-de-barro/fmt-40x40/" class="quick-nav-pill">&#129521; Formato 40x40</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Acabado</strong> (Natural, Esmaltado, Envejecido), <strong>Formato</strong> y <strong>Color</strong> para encontrar tu suelo de barro ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-barro" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-barro" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos de Barro y Terracota</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_barro_contenido_inferior() {
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

    <!-- BUMPER: EL TRATAMIENTO -->
    <section class="bumper-section adrihosan-full-width-block">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/tratamiento-suelo-barro-adrihosan.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>El tratamiento: El secreto de un barro eterno.</h2>
                <p>El suelo de barro cocido es un material poroso que necesita ser hidrofugado y sellado para protegerlo de manchas y humedad. Un tratamiento correcto realza su color, facilita su limpieza y garantiza que dure generaciones. Descubre los productos que recomendamos.</p>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="bumper-btn">Consultar Tratamiento</a>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: POR QU&Eacute; ELEGIR BARRO -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-barro">
        <div class="seo-content-wrapper">
            <h2>Suelos de Barro: Todo lo que necesitas saber</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#127994;</div>
                    <h3>Barro Manual (Artesanal)</h3>
                    <p>Moldeado a mano y cocido en horno de le&ntilde;a. Cada baldosa presenta variaciones &uacute;nicas de tono y textura que aportan autenticidad. Ideal para casas r&uacute;sticas, mas&iacute;as y proyectos de rehabilitaci&oacute;n.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#9854;</div>
                    <h3>Barro Mec&aacute;nico (Industrial)</h3>
                    <p>Fabricado con prensas hidr&aacute;ulicas para lograr mayor uniformidad y resistencia. Mantiene la calidez del barro pero con acabados m&aacute;s regulares. Perfecto para grandes superficies y proyectos de hostelera.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127912;</div>
                    <h3>Terracota Esmaltada</h3>
                    <p>Barro cocido recubierto con una capa de esmalte cer&aacute;mico que le confiere impermeabilidad y facilita enormemente su mantenimiento. Disponible en una amplia gama de colores y acabados.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelos de Barro y Terracota</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre barro manual y mec&aacute;nico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El barro manual se moldea a mano, lo que genera variaciones &uacute;nicas de tono y textura en cada pieza. El mec&aacute;nico se fabrica con prensas hidr&aacute;ulicas, ofreciendo mayor uniformidad dimensional y resistencia, pero conservando la calidez natural del material.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es necesario tratar el suelo de barro?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es imprescindible. El barro cocido es poroso y absorbe l&iacute;quidos y manchas si no se protege. El tratamiento consiste en aplicar un hidrofugante y un sellador que impermeabilizan la pieza sin alterar su aspecto natural. Una vez tratado, el mantenimiento es sencillo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede instalar suelo de barro con calefacci&oacute;n radiante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>&iexcl;S&iacute;, y es una combinaci&oacute;n excelente! El barro tiene una gran inercia t&eacute;rmica: absorbe el calor lentamente y lo libera de forma progresiva, manteniendo la temperatura del hogar estable durante m&aacute;s tiempo. Es uno de los mejores pavimentos para suelo radiante.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El suelo de barro es apto para exteriores?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, pero debe ser barro cocido a alta temperatura (tipo gres r&uacute;stico) con baja absorci&oacute;n de agua para resistir heladas. Adem&aacute;s, es fundamental aplicar un tratamiento hidrofugante espec&iacute;fico para exterior. Consulta con nuestro equipo para asegurarte de elegir la pieza correcta.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo se limpia un suelo de barro tratado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Una vez tratado correctamente, la limpieza diaria se realiza con agua y jab&oacute;n neutro (pH 7). Evita productos &aacute;cidos (vinagre, lej&iacute;a) que pueden da&ntilde;ar el sellador. Para una limpieza profunda peri&oacute;dica, existen productos espec&iacute;ficos para suelos de barro que nutren y protegen la superficie.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en suelos de barro y terracota">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu proyecto de suelo de barro?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelo%20de%20barro%20y%20terracota" class="contact-option-common">
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

// FIN CATEGOR&Iacute;A 1989 - SUELO DE BARRO Y TERRACOTA
// ============================================================================
