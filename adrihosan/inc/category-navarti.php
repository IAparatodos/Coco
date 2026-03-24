<?php
/**
 * Category: Navarti Cer&aacute;mica (ID: 4722)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 4722 - NAVARTI CER&Aacute;MICA
// ============================================================================

function adrihosan_navarti_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/Porcelanico-gran-formato-negro-efecto-marmol.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="#">Marcas</a> &gt;
                <span>Navarti Cer&aacute;mica</span>
            </nav>
            <h1>Navarti Cer&aacute;mica: Innovaci&oacute;n y Dise&ntilde;o en cada Pieza</h1>
            <div style="display:inline-block; background:#4dd2d0; color:#102e35; font-weight:700; padding:6px 18px; border-radius:4px; font-size:0.85rem; margin-bottom:12px; font-family:'Poppins','Poppins Fallback',sans-serif;">&#9989; Distribuidor Oficial Navarti</div>
            <p>Descubre el universo de Navarti en Adrihosan. Desde el porcel&aacute;nico t&eacute;cnico m&aacute;s resistente hasta las maderas cer&aacute;micas m&aacute;s c&aacute;lidas. Calidad de Castell&oacute;n para transformar tu hogar con estilo.</p>
            <div class="hero-buttons">
                <a href="#catalogo-navarti" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-navarti" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#127981;</div>
                <div class="trust-text">
                    <strong>Distribuidor Oficial</strong>
                    <span>Acceso al cat&aacute;logo completo</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128666;</div>
                <div class="trust-text">
                    <strong>Env&iacute;os a Toda Espa&ntilde;a</strong>
                    <span>Entrega segura a domicilio</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128222;</div>
                <div class="trust-text">
                    <strong>Atenci&oacute;n Personalizada</strong>
                    <span>Te asesoramos sin compromiso</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128230;</div>
                <div class="trust-text">
                    <strong>Muestras Disponibles</strong>
                    <span>Pide tu muestra antes de comprar</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PILLS / NAVEGACI&Oacute;N POR TIPOLOG&Iacute;A -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti/asp-suelo-imitacion-madera/" class="quick-nav-pill">&#129717; Maderas</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti/asp-suelos-imitacion-marmol/" class="quick-nav-pill">&#128142; Pulidos</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti/ver-material-gres-porcelanico/" class="quick-nav-pill">&#127959; Gravita 20mm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti/ver-material-pasta-blanca/" class="quick-nav-pill">&#128705; Pasta Blanca</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti/ver-material-pasta-roja/" class="quick-nav-pill">&#128176; Pasta Roja</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Filtra por <strong>Tipo</strong> (Pavimento, Revestimiento, Porcel&aacute;nico), <strong>Estilo</strong> y <strong>Formato</strong> para encontrar tu cer&aacute;mica Navarti ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-navarti" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 6. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-navarti" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Navarti Cer&aacute;mica</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_navarti_contenido_inferior() {
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

    <!-- BUMPER: EL MODELO QUE BUSCAS -->
    <section class="bumper-section adrihosan-full-width-block" id="bumper-navarti">
        <div class="bumper-wrapper" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/Porcelanico-gran-formato-negro-efecto-marmol.jpg');">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h3>&iquest;Has visto un modelo de Navarti en su web o cat&aacute;logo y no lo encuentras aqu&iacute;?</h3>
                <p>Como distribuidores oficiales, podemos suministrarte cualquier material de Navarti Cer&aacute;mica. P&iacute;denos presupuesto sin compromiso.</p>
                <div class="bumper-buttons">
                    <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20modelo%20de%20Navarti%20que%20no%20encuentro%20en%20la%20web" class="bumper-btn">&#128172; Consultar Disponibilidad</a>
                    <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="bumper-btn bumper-btn-secondary">&#9993;&#65039; Solicitar Presupuesto</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Navarti Cer&aacute;mica</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es Navarti una marca de buena calidad?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Absolutamente. Navarti es una de las empresas m&aacute;s consolidadas del cl&uacute;ster cer&aacute;mico de Castell&oacute;n. Sus productos pasan rigurosos controles de calidad y utilizan las tecnolog&iacute;as de impresi&oacute;n digital m&aacute;s avanzadas para garantizar dise&ntilde;os realistas y piezas perfectamente calibradas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; mantenimiento necesitan los suelos pulidos de Navarti?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los pavimentos porcel&aacute;nicos pulidos de Navarti destacan por su brillo espejo. Para mantenerlos impecables, basta con una limpieza regular con agua tibia y un jab&oacute;n neutro. Al ser porcel&aacute;nicos de baja porosidad, resisten muy bien las manchas dom&eacute;sticas habituales.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Tienen stock de Navarti para entrega r&aacute;pida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Contamos con stock de las series m&aacute;s populares para env&iacute;o inmediato. Para modelos espec&iacute;ficos del cat&aacute;logo general de Navarti, el tiempo de entrega suele oscilar entre 7 y 14 d&iacute;as laborables, dependiendo de la disponibilidad en los almacenes de f&aacute;brica en Onda.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Navarti fabrica azulejos para piscinas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, muchas de sus series de porcel&aacute;nico t&eacute;cnico y la gama Gravita de 20mm son perfectas para exteriores y coronaciones de piscinas por su resistencia al cloro, a los rayos UV y sus propiedades antideslizantes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-navarti" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en cer&aacute;mica Navarti">
                <div>
                    <h2>Soy Ricardo.</h2>
                    <h3>&iquest;Necesitas un modelo de Navarti que no encuentras?</h3>
                    <p>Te lo consigo sin compromiso.</p>
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
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20informaci%C3%B3n%20sobre%20cer%C3%A1mica%20Navarti" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">WhatsApp</div>
                </a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common">
                    <div class="icon">&#128221;</div>
                    <div class="label">Formulario</div>
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

// FIN CATEGOR&Iacute;A 4722 - NAVARTI CER&Aacute;MICA
// ============================================================================
