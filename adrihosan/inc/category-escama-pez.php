<?php
/**
 * Category: Azulejo Escama de Pez (ID: 2188)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2188 - AZULEJO ESCAMA DE PEZ
// Setup en functions-server.php -> adrihosan_setup_escama_pez_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_escama_pez_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/azulejos-escama-pez-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Azulejos Escama de Pez: El Toque Decorativo que Marca la Diferencia</h1>
            <p>Formas org&aacute;nicas inspiradas en la naturaleza. Los azulejos tipo escama o abanico aportan movimiento, textura y un car&aacute;cter &uacute;nico a tus paredes.</p>
            <div class="hero-buttons">
                <a href="#catalogo-escama" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-escama" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; elegir azulejos escama de pez?</h2>
            <p class="section-subtitle">Formas que transforman cualquier pared en un punto focal</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127754;</div>
                    <h3>Inspiraci&oacute;n Natural</h3>
                    <p>Sus formas curvas evocan la naturaleza oce&aacute;nica, creando <strong>ambientes frescos y relajantes</strong> en ba&ntilde;os y cocinas.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#127912;</div>
                    <h3>Efecto Visual &Uacute;nico</h3>
                    <p>La disposici&oacute;n de las piezas genera un <strong>juego de luces y sombras</strong> que cambia seg&uacute;n la iluminaci&oacute;n, dando vida a cualquier superficie.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#10024;</div>
                    <h3>Acento Decorativo</h3>
                    <p>Perfecto como <strong>elemento de acento</strong> en frentes de cocina, hornacinas de ducha o paredes destacadas. Un peque&ntilde;o detalle con gran impacto.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Los azulejos escama de pez quedan espectaculares en zonas focales. Usa los filtros de <strong>Color</strong> para encontrar tu tono ideal y pulsa <strong>&quot;FILTRAR&quot;</strong>.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-escama" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-escama" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Escama de Pez</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_escama_pez_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Escama de Pez</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los azulejos escama de pez son dif&iacute;ciles de colocar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Requieren un poco m&aacute;s de cuidado que un azulejo rectangular, pero un instalador con experiencia no tendr&aacute; problema. La clave est&aacute; en el <strong>replanteo previo</strong> y en mantener las juntas uniformes. Muchos modelos vienen con gu&iacute;as de colocaci&oacute;n para facilitar el proceso.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son solo para paredes o tambi&eacute;n para suelos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Principalmente se usan como <strong>revestimiento de pared</strong>, donde su forma curva luce al m&aacute;ximo. Para suelos, existen versiones en porcel&aacute;nico con la resistencia necesaria, aunque es m&aacute;s habitual verlos en paredes de ba&ntilde;o, frentes de cocina o zonas decorativas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo se limpian los azulejos con esta forma?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Se limpian exactamente igual que cualquier azulejo cer&aacute;mico: con <strong>agua y jab&oacute;n neutro</strong>. La superficie esmaltada no retiene suciedad. Solo hay que prestar algo m&aacute;s de atenci&oacute;n a las juntas, ya que al ser piezas m&aacute;s peque&ntilde;as hay m&aacute;s superficie de junta.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-escama" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20escama%20de%20pez" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
