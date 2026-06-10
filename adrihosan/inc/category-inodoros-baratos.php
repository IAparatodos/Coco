<?php
/**
 * Category: Inodoros baratos (ID: 3795)
 *
 * Subcategoria de Inodoro (ID 81), filtrada por precio < 220 EUR.
 * 18 productos saneados. Precio de entrada: 159,90 EUR (dato real
 * de BD verificable al momento del montaje).
 *
 * Cluster ~2.500 busq/mes:
 *   - inodoros baratos (566)
 *   - inodoros precios (603)
 *   - inodoro completo barato (417)
 *   - inodoros completos baratos (417)
 *   - wc barato (351)
 *   - inodoros en oferta (204)
 *   - comprar inodoro (262)
 *   - vater barato (168)
 *   - inodoros economicos (75)
 *
 * Buyer persona PRIMARIO: Propietario con Alquiler. Equipa pisos al
 * menor coste, resistente, completo, sin complicaciones.
 *
 * ANTI-CANIBALIZACION (regla dura del briefing): esta pagina NO
 * explica tipos de inodoro (eso es la madre 81) ni fondo reducido
 * (eso es la 3798). Eje unico: PRECIO + PACK COMPLETO + calidad
 * sin pagar de mas.
 *
 * Orden de productos: PRECIO ASCENDENTE (el mas barato primero) -
 * implementado en functions.php > adrihosan_orden_estricto_ids para
 * cat 3795. El argumento es el precio, asi que el grid debe empezar
 * por el 159,90 EUR.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 via adrihosan_h1_dinamico("Inodoros baratos").
 * - FAQs HTML sin json-ld.
 * - Adrihosan DISTRIBUYE, NO fabrica.
 * - PROHIBIDO inventar promociones (sin financiacion, sin envio
 *   gratis si no consta).
 * - Tapa/asiento: **TODOS** los 18 productos de esta cat incluyen
 *   tapa/asiento. Confirmado por el cliente al revisar el catalogo.
 *   Si en el futuro se anade un modelo sin tapa, hay que revisar
 *   tabla del pack + FAQ 3.
 * - Si cambia el producto de entrada de 159,90 EUR, actualizar
 *   hero, FAQ 1 y meta description.
 * - Bloque contacto ESTANDAR (6 opciones).
 * - Cada H2 con keyword o variante (baratos / economicos / pack
 *   completo / precio).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 3795 - INODOROS BARATOS
// ============================================================================

function adrihosan_categoria_inodoros_baratos_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/inodoros-baratos-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Inodoros baratos' ); ?></h1>
            <p class="hero-tagline">Completos, resistentes y desde 159,90&nbsp;&euro;.</p>
            <div class="hero-buttons">
                <a href="#catalogo-inodoros-baratos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20varios%20inodoros%20baratos%20para%20equipar%20una%20reforma" class="hero-btn secondary" target="_blank">Pedir precio por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>inodoros baratos</strong> de Adrihosan arrancan en <strong>159,90&nbsp;&euro;</strong> y vienen completos: taza, cisterna, mecanismo de descarga y tapa/asiento, todo listo para instalar. Cer&aacute;mica resistente y doble descarga, sin pagar de m&aacute;s por lo que no necesitas. Ideales para reformas, segundos ba&ntilde;os y pisos de alquiler. Env&iacute;o a toda Espa&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128176;</div>
                    <h3>Desde 159,90&nbsp;&euro;</h3>
                    <p>Precio de entrada real, sin letra peque&ntilde;a.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128230;</div>
                    <h3>Pack completo con tapa</h3>
                    <p>Taza, cisterna, mecanismo y tapa, listos para montar.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Cer&aacute;mica resistente</h3>
                    <p>La misma calidad de material que uno caro.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>A tu obra o a tu piso.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ACCESOS RAPIDOS DENTRO DEL SILO INODOROS + FILTROS FE -->
    <section class="inodoros-baratos-shortcuts adrihosan-full-width-block">
        <div class="inodoros-baratos-shortcuts-wrapper">
            <span class="shortcuts-label">Si tu duda es otra:</span>
            <div class="shortcuts-pills">
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">A suelo</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">Peque&ntilde;os</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Suspendidos</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/">Todos los inodoros</a>
            </div>
        </div>
    </section>

    <div id="destino-filtro-adria-inodoros-baratos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428402"]'); ?></div>

    <!-- 3. STORYTELLING: BARATO NO SIGNIFICA PEOR -->
    <section class="inodoros-baratos-storytelling adrihosan-full-width-block">
        <div class="inodoros-baratos-storytelling-wrapper">
            <h2>Inodoros baratos: barato no significa peor</h2>
            <div class="storytelling-text">
                <p>El inodoro m&aacute;s econ&oacute;mico no es un inodoro malo, es un inodoro <strong>sin extras</strong>. Suele ser un modelo <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">a suelo de tanque bajo</a>, en cer&aacute;mica blanca vitrificada, la misma que monta uno que cuesta el triple. Lo que no lleva son acabados especiales, formas de dise&ntilde;o o tecnolog&iacute;a: <strong>lo que de verdad importa (descargar bien, durar y limpiarse f&aacute;cil) est&aacute; cubierto</strong>.</p>
                <p>La mayor&iacute;a incorpora <strong>doble descarga</strong>, as&iacute; que tambi&eacute;n ahorras agua cada d&iacute;a. Si buscas equipar un ba&ntilde;o que funcione y aguante sin gastar de m&aacute;s, este es tu sitio. Si dudas entre modelos, mira la <a href="https://www.adrihosan.com/cual-inodoro-es-mejor/">gu&iacute;a para elegir inodoro</a> o escr&iacute;benos por WhatsApp.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-inodoros-baratos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de inodoros baratos</h2>
        <p class="product-loop-subtitle">18 modelos por debajo de 220&nbsp;&euro;, ordenados por precio. El m&aacute;s barato primero.</p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_inodoros_baratos_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="inodoros-baratos-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Equipas varios ba&ntilde;os, una reforma o un piso entero? P&iacute;denos precio por WhatsApp y te ajustamos lo que necesitas.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20varios%20inodoros%20baratos%20para%20equipar%20una%20reforma" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. QUE INCLUYE UN INODORO COMPLETO BARATO -->
    <section class="inodoros-baratos-sizes adrihosan-full-width-block">
        <div class="inodoros-baratos-sizes-wrapper">
            <h2>Qu&eacute; incluye un inodoro completo barato</h2>
            <p class="sizes-intro">Todos los 18 modelos de esta categor&iacute;a vienen completos: taza, cisterna, mecanismo y tapa/asiento. Listo para instalar sin comprar piezas sueltas despu&eacute;s.</p>

            <div class="sizes-table-wrapper">
                <table class="sizes-table">
                    <thead>
                        <tr>
                            <th>Incluye</th>
                            <th>En el pack</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Taza</strong></td>
                            <td>S&iacute;</td>
                        </tr>
                        <tr>
                            <td><strong>Cisterna</strong></td>
                            <td>S&iacute;</td>
                        </tr>
                        <tr>
                            <td><strong>Mecanismo de descarga (doble)</strong></td>
                            <td>S&iacute;</td>
                        </tr>
                        <tr>
                            <td><strong>Fijaciones</strong></td>
                            <td>S&iacute;</td>
                        </tr>
                        <tr class="size-current">
                            <td><strong>Tapa / asiento</strong></td>
                            <td>S&iacute; <span class="size-current-label">Incluida en todos</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="sizes-closing">Si necesitas algo m&aacute;s espec&iacute;fico (un <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">inodoro peque&ntilde;o de fondo reducido</a> para un aseo justo, por ejemplo), nuestras otras subcategor&iacute;as cubren cada caso. Esta pagina concentra los completos a buen precio.</p>
        </div>
    </section>

    <!-- 8. LO QUE SI TIENES EN UN INODORO ECONOMICO -->
    <section class="inodoros-baratos-materials adrihosan-full-width-block">
        <div class="inodoros-baratos-materials-wrapper">
            <h2>Lo que s&iacute; tienes en un inodoro econ&oacute;mico</h2>
            <p class="materials-intro">Las 8 prestaciones reales que mantiene un inodoro barato sin renunciar a lo esencial.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128176;</span>
                    <h3>Precio desde 159,90&nbsp;&euro;</h3>
                    <p>Entrada real al cat&aacute;logo, sin letra peque&ntilde;a.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128230;</span>
                    <h3>Pack completo</h3>
                    <p>Taza, cisterna, mecanismo y tapa/asiento incluidos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica vitrificada</h3>
                    <p>Material est&aacute;ndar del sector, resistente.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Doble descarga</h3>
                    <p>Ahorro de agua frente a los inodoros antiguos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127968;</span>
                    <h3>A suelo de tanque bajo</h3>
                    <p>Formato cl&aacute;sico, el m&aacute;s sencillo de instalar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128295;</span>
                    <h3>Instalaci&oacute;n sencilla</h3>
                    <p>Conexi&oacute;n directa al desag&uuml;e existente.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>F&aacute;cil de limpiar</h3>
                    <p>Vitrificado est&aacute;ndar, mantenimiento con agua y jab&oacute;n.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9898;</span>
                    <h3>Disponible en blanco</h3>
                    <p>El color del cat&aacute;logo de entrada. Estandar y combinable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO - COMO ELEGIR UN INODORO BARATO QUE DURE -->
    <section class="inodoros-baratos-asesoramiento adrihosan-full-width-block">
        <div class="inodoros-baratos-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir un inodoro barato que dure</h2>
            <p class="asesoramiento-intro">
                Pagar menos no es comprar peor. Estos 4 pasos te aseguran un inodoro econ&oacute;mico que aguanta sin sorpresas.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Comprueba que el pack venga completo.</strong> En esta categor&iacute;a los 18 modelos traen taza, cisterna, mecanismo y tapa/asiento de serie.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Confirma que lleva doble descarga:</strong> ahorra agua y casi todos la incluyen.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>Comprueba la salida del desag&uuml;e</strong> de tu ba&ntilde;o para que encaje.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Si equipas varios ba&ntilde;os o un alquiler,</strong> escr&iacute;benos y te ajustamos el precio.</p>
                </div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Prefieres algo m&aacute;s moderno y est&aacute;s dispuesto a pagar un poco m&aacute;s? Mira los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">inodoros suspendidos</a>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20varios%20inodoros%20baratos%20para%20equipar%20una%20reforma%20o%20alquiler" class="bumper-btn" target="_blank">WhatsApp 96 195 71 36</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="inodoros-baratos-related adrihosan-full-width-block">
        <div class="inodoros-baratos-related-wrapper">
            <h2>Otras opciones dentro del silo de inodoros</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">Inodoros peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/">Todos los inodoros</a>
                <a class="related-pill" href="https://www.adrihosan.com/cual-inodoro-es-mejor/">Gu&iacute;a: cu&aacute;l inodoro es mejor</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE DE TEXTO ESTANDAR DE CATEGORIA (editable desde WP admin)
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) :
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 12. FAQs (9 preguntas, NO json-ld - Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre inodoros baratos</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta el inodoro m&aacute;s barato?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Nuestros inodoros baratos arrancan en <strong>159,90&nbsp;&euro;</strong>, completos y listos para instalar.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un inodoro barato es de peor calidad?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Suele ser un modelo m&aacute;s sencillo, pero la <strong>cer&aacute;mica vitrificada</strong> y el mecanismo de descarga son los mismos que en uno caro. Lo que cambia es el dise&ntilde;o y los extras, no lo esencial.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; incluye un inodoro completo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El pack trae <strong>taza, cisterna, mecanismo de descarga, fijaciones y tapa/asiento</strong>. En esta categor&iacute;a los 18 modelos incluyen la tapa de serie: no tienes que comprarla aparte.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipo de inodoro es el m&aacute;s econ&oacute;mico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">a suelo con tanque bajo</a>, el de toda la vida. Es el m&aacute;s sencillo de instalar y el m&aacute;s asequible.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Llevan doble descarga?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Casi todos. Es el sistema que te deja elegir entre descarga completa o reducida para ahorrar agua.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirven para un piso de alquiler?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es uno de sus usos ideales: <strong>resistentes, completos y a buen precio</strong> para equipar sin disparar el presupuesto.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Viene todo lo necesario para instalarlo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El pack llega con lo principal para el montaje. Si tienes dudas sobre tu <strong>salida de desag&uuml;e</strong>, d&iacute;noslo antes de comprar.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo pedir varios para equipar varios ba&ntilde;os?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Si necesitas varias unidades, escr&iacute;benos por WhatsApp y te ajustamos el precio.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, enviamos a toda Espa&ntilde;a.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR (bloque comun de toda la web Adrihosan) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;A&uacute;n con dudas? Te ayudo a elegir.</h2><p>Soy Ricardo. D&eacute;jame asesorarte para que el inodoro entre en presupuesto y aguante sin sorpresas.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20varios%20inodoros%20baratos%20para%20equipar%20una%20reforma" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
