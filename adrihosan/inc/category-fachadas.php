<?php
/**
 * Category: Fachadas y Muros (ID: 2394)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2394 - FACHADAS Y MUROS
// Setup en functions-server.php -> adrihosan_setup_fachadas_cpu_fix()
// ============================================================================

/**
 * Contenido SUPERIOR (antes de productos)
 */
function adrihosan_fachadas_contenido_superior() {
    ?>

    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/azulejos-fachadas-muros-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Azulejos para Fachadas y Muros: Protecci&oacute;n y Est&eacute;tica Exterior</h1>
            <p>Revestimientos cer&aacute;micos dise&ntilde;ados para resistir la intemperie. Dale a tu fachada un acabado duradero, elegante y libre de mantenimiento.</p>
            <div class="hero-buttons">
                <a href="#catalogo-fachadas" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-fachadas" class="hero-btn secondary">Hablar con un Experto</a>
            </div>
        </div>
    </section>

    <!-- 2. VENTAJAS -->
    <section class="comparativa-section adrihosan-full-width-block">
        <div class="comparativa-wrapper">
            <h2>&iquest;Por qu&eacute; revestir tu fachada con cer&aacute;mica?</h2>
            <p class="section-subtitle">La soluci&oacute;n m&aacute;s duradera para exteriores</p>
            <div class="comparativa-grid">
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#9728;&#65039;</div>
                    <h3>Resistencia Total</h3>
                    <p>Soporta <strong>lluvia, heladas, sol intenso y cambios t&eacute;rmicos</strong> sin perder color ni propiedades. Durabilidad superior a la pintura o el enfoscado.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128167;</div>
                    <h3>Impermeabilidad</h3>
                    <p>La cer&aacute;mica crea una <strong>barrera impermeable</strong> que protege el muro de humedades por filtraci&oacute;n, una de las patolog&iacute;as m&aacute;s comunes en edificaci&oacute;n.</p>
                </div>
                <div class="comparativa-card">
                    <div class="comparativa-icon">&#128736;</div>
                    <h3>Sin Mantenimiento</h3>
                    <p>Olv&iacute;date de repintar cada pocos a&ntilde;os. Una fachada cer&aacute;mica <strong>mantiene su aspecto durante d&eacute;cadas</strong> con una simple limpieza puntual.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Acabado</strong> y <strong>Formato</strong> para encontrar el revestimiento ideal para tu fachada. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong>.</p>
    </div>

    <!-- 4. DESTINO MOVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-fachadas" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-fachadas" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos para Fachadas y Muros</h2>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

/**
 * Contenido INFERIOR (despues de productos)
 */
function adrihosan_fachadas_contenido_inferior() {
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
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos para Fachadas</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipo de cer&aacute;mica es la m&aacute;s adecuada para fachadas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>gres porcel&aacute;nico</strong> es la opci&oacute;n t&eacute;cnica m&aacute;s recomendable por su absorci&oacute;n de agua pr&aacute;cticamente nula (inferior al 0.5%). Esto lo hace resistente a las heladas, ya que el agua no penetra en la pieza y no puede dilatarse al congelarse.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede colocar cer&aacute;mica directamente sobre un muro existente?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, siempre que el soporte est&eacute; limpio, firme y seco. Es fundamental usar un <strong>cemento cola flexible espec&iacute;fico para exteriores</strong> (tipo C2TE) que absorba las dilataciones t&eacute;rmicas. Para piezas de gran formato, se recomienda el sistema de doble encolado.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;La cer&aacute;mica de fachada pierde color con el sol?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Los esmaltes cer&aacute;micos <strong>no se decoloran con la radiaci&oacute;n UV</strong>, a diferencia de las pinturas o revestimientos pl&aacute;sticos. Tu fachada mantendr&aacute; su color original durante toda su vida &uacute;til.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-fachadas" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con tu proyecto de fachada?<span>Te ayudo a elegir sin compromiso.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20para%20fachada" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">WhatsApp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>

    <?php
}
