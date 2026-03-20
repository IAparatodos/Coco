<?php
/**
 * Category: Azulejos Imitacion Piedra (ID: 4972)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 4972 - AZULEJOS IMITACION PIEDRA
// Setup en functions-server.php -> adrihosan_setup_imitacion_piedra_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_imitacion_piedra_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/03/Azulejos-imitacion-piedra-Adrihosan-cat.jpg');">
        <div class="hero-content">
            <h1>Azulejos Imitaci&oacute;n Piedra: La Naturaleza en tu Hogar</h1>
            <p>Reproduce la textura y calidez de la piedra natural con la resistencia y facilidad de mantenimiento del porcel&aacute;nico. Ideal para crear ambientes r&uacute;sticos, mediterr&aacute;neos o contempor&aacute;neos.</p>
            <div class="hero-buttons">
                <a href="#catalogo-piedra" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-piedra" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; porcel&aacute;nico efecto piedra en vez de piedra natural?</h2>
            <p class="section-subtitle">La misma est&eacute;tica, mejores prestaciones</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128170;</div>
                    <h3>Cero Mantenimiento</h3>
                    <p>La piedra natural necesita tratamientos hidr&oacute;fugos y sellados peri&oacute;dicos. El porcel&aacute;nico efecto piedra <strong>no necesita nada</strong>: solo agua y jab&oacute;n.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127968;</div>
                    <h3>Interior y Exterior</h3>
                    <p>Disponible en acabados antideslizantes para <strong>terrazas, fachadas y zonas de piscina</strong>. Resiste heladas y rayos UV sin alterarse.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Variedad de Piedras</h3>
                    <p>Desde pizarra hasta caliza, cuarcita o travertino. Encuentra la <strong>textura natural</strong> que mejor encaje con tu proyecto.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Acabado</strong> y <strong>Ubicaci&oacute;n</strong> para encontrar tu piedra ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-piedra" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-piedra" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Imitaci&oacute;n Piedra</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_imitacion_piedra_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Imitaci&oacute;n Piedra</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El porcel&aacute;nico efecto piedra se nota que es imitaci&oacute;n?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La tecnolog&iacute;a actual de impresi&oacute;n digital reproduce con absoluto realismo las vetas, texturas y variaciones cromáticas de cada tipo de piedra. Incluso al tacto, los <strong>acabados texturizados</strong> imitan el relieve natural de la roca. Es pr&aacute;cticamente indistinguible.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede usar como revestimiento de pared interior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una opci&oacute;n excelente para crear <strong>paredes de acento</strong> en salones, recibidores o cabeceros de cama. El efecto piedra en pared aporta profundidad, textura y car&aacute;cter a cualquier espacio sin el peso de la piedra real.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es resistente para zonas exteriores?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, siempre que elijas un acabado <strong>antideslizante (C3)</strong> para zonas h&uacute;medas. El porcel&aacute;nico efecto piedra resiste heladas, cambios bruscos de temperatura y exposici&oacute;n solar continua sin perder color ni propiedades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-piedra" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto efecto piedra?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20imitaci%C3%B3n%20piedra" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
