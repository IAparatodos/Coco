<?php
/**
 * Category: Zellige (ID: 2516)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2516 - ZELLIGE
// ============================================================================

function adrihosan_zellige_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/zellige-marruecos-azulejos-artesanales.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <span>Zellige</span>
            </nav>
            <h1>Zellige</h1>
            <p>La aut&eacute;ntica tradici&oacute;n de Marruecos. Azulejos de arcilla natural esmaltados a mano en Fez. Cada pieza es &uacute;nica, con sus imperfecciones y matices que la hacen irrepetible.
            &iquest;Buscas la est&eacute;tica sin el mantenimiento de la arcilla? Visita nuestra colecci&oacute;n de <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/" class="hero-inline-link">Imitaci&oacute;n Zellige</a>.</p>
            <div class="hero-buttons">
                <a href="#catalogo-zellige" class="hero-btn primary">Ver Stock</a>
                <a href="#simulador-zellige" class="hero-btn secondary">Simulador 3D</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR / VALORES -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#9995;</div>
                <div class="trust-text">
                    <strong>Hecho a Mano</strong>
                    <span>Pieza a pieza en Fez</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#129521;</div>
                <div class="trust-text">
                    <strong>Arcilla Natural</strong>
                    <span>Material noble, no cer&aacute;mica industrial</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127912;</div>
                <div class="trust-text">
                    <strong>Esmaltes Vivos</strong>
                    <span>Profundidad y destonificaci&oacute;n &uacute;nica</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. EL DISTRIBUIDOR: STOCK vs A MEDIDA -->
    <section class="zellige-distributor-section adrihosan-full-width-block">
        <div class="zellige-distributor-wrapper">
            <div class="zellige-distributor-grid">
                <div class="zellige-dist-card">
                    <div class="zellige-dist-card-bg" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/zellige-10x10-stock.jpg');"></div>
                    <div class="zellige-dist-card-content">
                        <h2>Colecci&oacute;n En Stock</h2>
                        <p>El formato cl&aacute;sico 10x10 cm en los colores m&aacute;s buscados. Disponibilidad en nuestro almac&eacute;n para carga paletizada.</p>
                        <a href="#catalogo-zellige" class="hero-btn primary">&#128071; Ver Stock Abajo</a>
                    </div>
                </div>
                <div class="zellige-dist-card">
                    <div class="zellige-dist-card-bg" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/zellige-formatos-especiales-bejmat.jpg');"></div>
                    <div class="zellige-dist-card-content">
                        <h2>Dise&ntilde;o Personalizado</h2>
                        <p>&iquest;Tu proyecto exige formas especiales, escamas o colores a la carta? Fabricamos tu dise&ntilde;o en exclusiva en Marruecos.</p>
                        <a href="#simulador-zellige" class="hero-btn secondary">&#9999;&#65039; Ir al Simulador 3D</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. AVISO LOG&Iacute;STICO -->
    <div class="zellige-logistics-notice">
        <div class="zellige-logistics-wrapper">
            <span class="zellige-logistics-icon">&#128666;</span>
            <div class="zellige-logistics-text">
                <strong>Plazo de entrega: 7-10 d&iacute;as laborables.</strong>
                <span>Producto pesado. Se env&iacute;a paletizado y protegido con descarga a pie de calle. Planifica tu obra con tiempo.</span>
            </div>
        </div>
    </div>

    <!-- 5. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong> y <strong>Precio</strong> para encontrar tu Zellige ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 6. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-zellige" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426510"]'); ?></div>

    <!-- 7. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-zellige" class="product-loop-header">
        <h2 class="product-loop-title">Zellige 10x10 En Stock &mdash; Env&iacute;o Nacional</h2>
    </div>

    <!-- 8. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_zellige_contenido_inferior() {
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

    <!-- BLOQUE SEO: LA IMPERFECCI&Oacute;N PERFECTA -->
    <section class="seo-content-section adrihosan-full-width-block" id="guia-zellige">
        <div class="seo-content-wrapper">
            <h2>Zellige: La imperfecci&oacute;n perfecta de la arcilla</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>El <strong>Zellige</strong> (tambi&eacute;n escrito <em>zellij</em> o <em>zillij</em>) es un azulejo artesanal de arcilla natural originario de Fez, Marruecos. Cada pieza se moldea a mano, se esmalta individualmente y se corta con martillo, lo que genera bordes irregulares y una superficie vibrante con variaciones de tono &uacute;nicas. No hay dos piezas iguales: esa es precisamente su esencia.</p>
                <p>A diferencia de la cer&aacute;mica industrial, el Zellige aut&eacute;ntico tiene alma. Sus imperfecciones &mdash;las ondulaciones del esmalte, los peque&ntilde;os cr&aacute;teres, la destonificaci&oacute;n natural&mdash; son las que crean esa profundidad visual que ning&uacute;n azulejo de m&aacute;quina puede replicar.</p>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: COLORES VIBRANTES -->
    <section class="seo-content-section adrihosan-full-width-block" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>Colores vibrantes: Del Blanco Nacarado al Verde Fez</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#9898;</div>
                    <h3>Blanco Nacarado</h3>
                    <p>El cl&aacute;sico entre los cl&aacute;sicos. El blanco Zellige tiene una calidez que el azulejo industrial no puede imitar: matices crema, reflejos n&aacute;car y una luminosidad que cambia con la luz del d&iacute;a.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#129001;</div>
                    <h3>Verde Fez</h3>
                    <p>El verde profundo que define los riads marroqu&iacute;es. Una tonalidad entre esmeralda y bosque que aporta car&aacute;cter y elegancia. El color m&aacute;s ic&oacute;nico del Zellige aut&eacute;ntico.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128309;</div>
                    <h3>Azul, Rosa, Negro y Turquesa</h3>
                    <p>Desde el azul profundo hasta el rosa empolvado, pasando por el negro intenso y el turquesa. Cada color es un esmalte artesanal con variaciones naturales que dan vida a la superficie.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TENDENCIAS (Simulador placeholder) -->
    <section class="trends-section adrihosan-full-width-block" id="simulador-zellige">
        <div class="trends-wrapper">
            <h2>Formatos Especiales: Bejmat, Hex&aacute;gonos y Escamas</h2>
            <p>M&aacute;s all&aacute; del 10x10 cl&aacute;sico, el Zellige se fabrica en formatos que transforman cualquier superficie en una obra de arte. Bejmat (rectangular alargado), hexagonales, escamas de pez y piezas de transici&oacute;n. Todos fabricados bajo pedido exclusivamente para tu proyecto.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/contacto/" class="trend-link">Bejmat</a>
                <a href="https://www.adrihosan.com/contacto/" class="trend-link">Hex&aacute;gonos</a>
                <a href="https://www.adrihosan.com/contacto/" class="trend-link">Escamas</a>
                <a href="https://www.adrihosan.com/contacto/" class="trend-link">Consultar Proyecto</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Zellige</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre Zellige aut&eacute;ntico y la imitaci&oacute;n?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La diferencia es el alma del material. El Zellige es arcilla viva, moldeada y cortada a mano; tiene bordes irregulares y una superficie vibrante. La imitaci&oacute;n es un azulejo industrial plano que reproduce esa est&eacute;tica visualmente pero con la frialdad y perfecci&oacute;n de la m&aacute;quina.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Por qu&eacute; los plazos son de 10 d&iacute;as si est&aacute; en stock?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Porque no enviamos una caja de zapatos. El Zellige es material pesado y fr&aacute;gil que requiere paletizado especial y transporte en cami&oacute;n con plataforma para garantizar que llegue intacto a pie de calle. La log&iacute;stica de materiales nobles requiere sus tiempos.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Solo ten&eacute;is formato 10x10?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En stock permanente para env&iacute;o nacional, s&iacute;. Es el formato m&aacute;s vers&aacute;til y econ&oacute;mico. Para Bejmat, Hex&aacute;gonos o Escamas, utilizamos nuestro Simulador para fabricarlos bajo pedido exclusivamente para tu proyecto.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es dif&iacute;cil su instalaci&oacute;n?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Requiere manos expertas. Al tener bordes irregulares cortados a martillo, se coloca con junta m&iacute;nima o &quot;a hueso&quot; para buscar esa vibraci&oacute;n natural. No se instala igual que un azulejo rectificado est&aacute;ndar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en Zellige">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu proyecto Zellige?
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20Zellige" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2516 - ZELLIGE
// ============================================================================
