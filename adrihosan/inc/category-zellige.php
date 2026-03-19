<?php
/**
 * Category: Zellige (ID: 2516)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2516 - ZELLIGE
// Setup en functions-server.php -> adrihosan_setup_zellige_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_zellige_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/Zellige-artesanal-Adrihosan-a-medida.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a> &gt;
                <span>Zellige</span>
            </nav>
            <h1>Azulejos Zellige: Artesanal, Imperfecto y Absolutamente &Uacute;nico</h1>
            <p>La belleza de lo hecho a mano. Cada pieza tiene su propia personalidad: variaciones de tono, textura y brillo que convierten cualquier pared en una obra de arte.</p>
            <div class="hero-buttons">
                <a href="#catalogo-zellige" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-zellige" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Qu&eacute; hace especial al Zellige?</h2>
            <p class="section-subtitle">El revestimiento favorito de interioristas y dise&ntilde;adores</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#9998;</div>
                    <h3>Aspecto Artesanal</h3>
                    <p>Superficie irregular con variaciones de color y brillo que crean un efecto visual <strong>&uacute;nico e irrepetible</strong> en cada instalaci&oacute;n.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Paleta Mediterr&aacute;nea</h3>
                    <p>Tonos que van del blanco roto al verde, azul y terracota. Colores que evocan la <strong>tradici&oacute;n marroqu&iacute;</strong> y la luz del Mediterr&aacute;neo.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#10024;</div>
                    <h3>Tendencia Atemporal</h3>
                    <p>El zellige ha pasado de las riads de Marruecos a las cocinas y ba&ntilde;os m&aacute;s sofisticados del mundo. Un cl&aacute;sico que <strong>nunca pasa de moda</strong>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> El zellige queda espectacular en frentes de cocina y paredes de ba&ntilde;o. Usa los filtros de <strong>Color</strong> para encontrar tu tono ideal y pulsa <strong>&quot;FILTRAR&quot;</strong>.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-zellige" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427058"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-zellige" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Zellige</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_zellige_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- SEO: Contenido dinamico -->
    <?php
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Zellige</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El zellige es dif&iacute;cil de limpiar por su superficie irregular?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Nuestros azulejos tipo zellige son cer&aacute;mica esmaltada que <strong>imita el efecto artesanal</strong> con una superficie mucho m&aacute;s pr&aacute;ctica. Se limpian f&aacute;cilmente con agua y jab&oacute;n neutro, sin los problemas de porosidad del zellige tradicional hecho a mano.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede usar zellige en la zona de la ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Al ser piezas cer&aacute;micas esmaltadas, son totalmente <strong>impermeables y resistentes a la humedad</strong>. Son una opci&oacute;n preciosa para revestir las paredes de la ducha, creando un ambiente &uacute;nico y con mucha personalidad.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Las variaciones de tono son un defecto?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Al contrario, son su mayor virtud. Las <strong>variaciones de color, brillo y textura</strong> son intencionadas y reproducen la belleza del zellige artesanal marroqu&iacute;. Cada pared es &uacute;nica, con un juego de luces y sombras que le da vida y profundidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-zellige" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto zellige?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20zellige" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
