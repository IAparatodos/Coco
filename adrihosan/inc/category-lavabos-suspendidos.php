<?php
/**
 * Category: Lavabos suspendidos (ID: 92) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 19 productos publicados
 * (SIN curacion: los KRION no llevan "suspendido" en el titulo, asumido
 * por categoria; curacion fina pendiente del ojo de Ricardo).
 * 11o ciclo del silo (3o del dia) tras 2726/2699/2669/2668 (15-jul),
 * 2701 (16-jul), 91 sobre-encimera (17/18-jul), 2665 baratos (20-jul),
 * 2703 colores (20-jul), 2723 negros (23-jul) y 2644 pequenos (23-jul).
 *
 * Caso SEO (GSC 23-jul, 12m, page+query): el post de la altura le pisa
 * la transaccional a la categoria. "lavabo suspendido" (952 impr/12m)
 * tiene a la categoria en pos 40,2 y al post
 * /a-que-altura-se-pone-un-lavabo-suspendido/ en 15,9. Patron
 * hidraulico: lo informativo ("altura...", 4.000+2.657+1.789 impr) SE
 * QUEDA en el post; la categoria reclama la transaccional. "Mueble
 * lavabo suspendido" es del vertical de muebles - NO se persigue.
 * Base 28d: 484 impr / 4 clics / pos 25,8. Medir 20-ago.
 *
 * Inventario real verificado 23-jul-2026: 19 publicados, 89,90-875,90
 * eur +IVA. Ceramicos: Picolo 45,5x25,5 (89,90, el mini), Dasha 31x43,
 * libra 41x41, Leo 50x35 (125,90), Adonia 47x38, Bemus 71x43 (197,90).
 * Serie diseno Beca 45x45 / Aina 40x40 / Axel 42x45, blanco brillo o
 * negro mate, fondo 38 (179,90-216,90). Solid Surface/KRION grandes con
 * seno integrado: Tecnos 100 (359,90), Soul 80 (833,90), New KRION 121
 * (752,90) y 141 (802,90), Vulcano 120 (875,90), Jazz 20x40 (428,90),
 * Rock 50x40 (744,90).
 *
 * Angulo unico: colgarlo libera el suelo. Secciones: por que colgarlo
 * (con nota de altura enlazando al post) -> compactos para aseos ->
 * diseno en blanco o negro mate -> grandes formatos con seno integrado.
 *
 * Enlaces internos SOLO los verificados del wireframe: lavabos-pequenos,
 * lavabos-negros, doble-lavabo, muebles-bano-suspendidos y el post
 * /a-que-altura-se-pone-un-lavabo-suspendido/ (la categoria cede lo
 * informativo al post, anchors coherentes).
 *
 * OJO: los precios caducan. Verificados el 23-jul-2026.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); datos reales; cero
 * "garant*"; financiacion 3 meses; FAQs sin json-ld (schema via Rank
 * Math); FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 92 - LAVABOS SUSPENDIDOS (reconstruccion)
// ============================================================================

function adrihosan_categoria_92_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabos-suspendidos.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabos suspendidos' ); ?></h1>
            <p class="hero-tagline">19 modelos que liberan el suelo: del cer&aacute;mico compacto de 89,90 &euro; a las piezas de Solid Surface de 141 cm. Blanco, negro mate y fondos desde 25,5 cm.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavsus" class="hero-btn primary">Ver los 19 modelos</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20suspendido%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>lavabos suspendidos</strong> de esta p&aacute;gina son 19 modelos que van anclados a la pared, en cer&aacute;mica y Solid Surface, de 89,90 a 875,90 &euro; +IVA.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129529;</div>
                    <h3>Suelo libre</h3>
                    <p>El ba&ntilde;o se friega de una pasada y se ve m&aacute;s grande.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>Altura a tu medida</h3>
                    <p>Se cuelga a 80-90 cm del suelo, donde t&uacute; decidas.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Fondos desde 25,5 cm</h3>
                    <p>El Picolo, la pieza t&iacute;pica del aseo estrecho.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Financiaci&oacute;n en 3 meses sin intereses.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo lavabos, id 428781) -->
    <div id="destino-filtro-adria-lavsus" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavsus-storytelling adrihosan-full-width-block">
        <div class="lavsus-storytelling-wrapper">
            <h2>Por qu&eacute; colgarlo de la pared</h2>
            <div class="storytelling-text">
                <p>Un lavabo suspendido deja el suelo completamente libre: el ba&ntilde;o se friega de una pasada, sin patas ni rincones, y a la vista parece m&aacute;s grande porque el ojo recorre el pavimento entero. Y como va anclado a la pared, la <strong>altura de instalaci&oacute;n</strong> la decides t&uacute;: a la medida de quien lo va a usar, no a la que imponga un mueble.</p>
                <p>El resultado es un conjunto visualmente ligero, con aire bajo el lavabo, que funciona igual de bien en un aseo m&iacute;nimo que en un ba&ntilde;o principal de gran formato.</p>
                <p class="comparativa-nota">&iquest;A qu&eacute; altura se cuelga? A 80-90 cm del suelo, con 85 cm como medida recomendada. En nuestra <a href="https://www.adrihosan.com/a-que-altura-se-pone-un-lavabo-suspendido/">gu&iacute;a de alturas del lavabo suspendido</a> lo explicamos con todos los casos.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavsus" class="product-loop-header">
        <h2 class="product-loop-title">Los 19 lavabos suspendidos del cat&aacute;logo</h2>
        <p class="product-loop-subtitle">
            Cer&aacute;mica y Solid Surface, de 89,90 a 875,90 &euro; +IVA. Usa el filtro para acotar por forma, medida o precio.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_92_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavsus-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas con la pared o las medidas? M&aacute;ndanos una foto del hueco y te decimos qu&eacute; lavabo suspendido encaja y a qu&eacute; altura colgarlo.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20una%20foto%20de%20mi%20ba%C3%B1o%20para%20elegir%20lavabo%20suspendido" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPACTOS PARA ASEOS -->
    <section class="lavsus-comparativa adrihosan-full-width-block">
        <div class="lavsus-comparativa-wrapper">
            <h2>Compactos para aseos</h2>
            <p class="comparativa-intro">El suspendido es el truco n&ordm;1 del aseo peque&ntilde;o: libera el suelo justo donde m&aacute;s falta hace. Estos son los cer&aacute;micos m&aacute;s contenidos.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Medidas (ancho &times; fondo)</th>
                            <th>D&oacute;nde encaja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Picolo</strong></td>
                            <td>45,5 &times; 25,5 cm</td>
                            <td>El m&iacute;nimo del cat&aacute;logo, 89,90 &euro;: aseos de fondo justo</td>
                        </tr>
                        <tr>
                            <td><strong>Dasha</strong></td>
                            <td>31 &times; 43 cm</td>
                            <td>Estrecho de frente, para huecos angostos</td>
                        </tr>
                        <tr>
                            <td><strong>libra</strong></td>
                            <td>41 &times; 41 cm</td>
                            <td>Cuadrado compacto, equilibrado en aseos</td>
                        </tr>
                        <tr>
                            <td><strong>Leo</strong></td>
                            <td>50 &times; 35 cm</td>
                            <td>Uso diario c&oacute;modo por 125,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Adonia</strong></td>
                            <td>47 &times; 38 cm</td>
                            <td>Proporci&oacute;n cl&aacute;sica en poco fondo</td>
                        </tr>
                        <tr>
                            <td><strong>Bemus</strong></td>
                            <td>71 &times; 43 cm</td>
                            <td>El ancho asequible, 197,90 &euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si tu problema es el espacio m&aacute;s que el formato, tenemos una p&aacute;gina entera de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">lavabos peque&ntilde;os</a> con todo lo que baja de 48 cm de ancho o 32 de fondo. Medidas y precios verificados en julio de 2026.</p>
        </div>
    </section>

    <!-- 8. DISENO EN BLANCO O NEGRO MATE -->
    <section class="lavsus-materials adrihosan-full-width-block">
        <div class="lavsus-materials-wrapper">
            <h2>Dise&ntilde;o en blanco o negro mate</h2>
            <p class="materials-intro">La serie de dise&ntilde;o son tres formas y dos acabados: las mismas piezas en blanco brillo o negro mate, con 38 cm de fondo, de 179,90 a 216,90 &euro;.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#11036;</span>
                    <h3>Beca 45 &times; 45</h3>
                    <p>El cuadrado grande de la serie, presencia de ba&ntilde;o principal.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128313;</span>
                    <h3>Aina 40 &times; 40</h3>
                    <p>El m&aacute;s contenido: dise&ntilde;o completo en 40 cm.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128312;</span>
                    <h3>Axel 42 &times; 45</h3>
                    <p>Rectangular suave, el intermedio de la familia.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Dos acabados</h3>
                    <p>Blanco brillo cl&aacute;sico o negro mate actual, misma forma.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. GRANDES FORMATOS CON SENO INTEGRADO -->
    <section class="lavsus-asesoramiento adrihosan-full-width-block">
        <div class="lavsus-asesoramiento-wrapper">
            <h2>Grandes formatos con seno integrado</h2>
            <p class="asesoramiento-intro">Para el ba&ntilde;o principal, piezas de Solid Surface y KRION moldeadas sin juntas, con el seno integrado en la propia encimera. De 80 a 141 cm de ancho.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Tecnos 100</strong>: un metro de Solid Surface con seno integrado por 359,90 &euro;, la puerta de entrada al gran formato.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Soul 80</strong>: 80 cm de pieza moldeada sin juntas (833,90 &euro;), para ba&ntilde;os donde manda el dise&ntilde;o.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>New KRION 121 y 141</strong>: los m&aacute;s anchos del cat&aacute;logo (752,90 y 802,90 &euro;), superficie continua de pared a pared.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Vulcano 120</strong>: 875,90 &euro; de pieza escult&oacute;rica; y en formatos singulares, el Jazz de 20 &times; 40 en KRION o el Rock de 50 &times; 40.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Necesitas almacenaje bajo el lavabo? Mira tambi&eacute;n los <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/">muebles de ba&ntilde;o suspendidos</a>: cajones sin renunciar al suelo libre.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20suspendido" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavsus-related adrihosan-full-width-block">
        <div class="lavsus-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">Lavabos peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/doble-lavabo/">Doble lavabo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/">Muebles de ba&ntilde;o suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/a-que-altura-se-pone-un-lavabo-suspendido/">&iquest;A qu&eacute; altura se pone un lavabo suspendido?</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // La descripcion se reemplaza por el Archivo 2 (executor atomico, fase 2).
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

    <!-- 12. FAQs (9 preguntas EXACTAS del wireframe, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los lavabos suspendidos</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; ventajas tiene un lavabo suspendido?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Libera el suelo, con lo que el ba&ntilde;o se friega de una pasada y se ve m&aacute;s grande, y permite ajustar la altura de instalaci&oacute;n a quien lo va a usar. El conjunto queda visualmente mucho m&aacute;s ligero que un mueble a suelo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;A qu&eacute; altura se cuelga un lavabo suspendido?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La est&aacute;ndar es de 80 a 90 cm del suelo, con 85 como medida m&aacute;s recomendada, y el desag&uuml;e a 50-60 cm. En nuestra gu&iacute;a de alturas del blog lo explicamos con todos los casos.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Aguanta bien el peso sin mueble debajo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: va anclado a la pared con fijaciones dimensionadas para su peso. En tabiques de placa de yeso o huecos conviene prever un refuerzo o bastidor en la zona de anclaje.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;l es el lavabo suspendido m&aacute;s compacto?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El Picolo: 45,5 cm de ancho y solo 25,5 de fondo, por 89,90 &euro; +IVA (julio de 2026). Es la pieza t&iacute;pica de aseo estrecho.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hay lavabos suspendidos negros?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: Beca (45 &times; 45), Aina (40 &times; 40) y Axel (42 &times; 45) en negro mate, y los tres tambi&eacute;n en blanco brillo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un lavabo suspendido?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De 89,90 a 875,90 &euro; +IVA (precios de julio de 2026). Los cer&aacute;micos van de 89,90 a unos 200 &euro;; la serie Beca, Aina y Axel de 179,90 a 216,90, y las piezas grandes de Solid Surface desde 359,90.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Lavabo suspendido o mueble suspendido?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El lavabo a pared gana en ligereza y limpieza; el mueble suspendido a&ntilde;ade cajones. Si necesitas almacenaje, tenemos tambi&eacute;n muebles de ba&ntilde;o suspendidos con lavabo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hay suspendidos grandes para el ba&ntilde;o principal?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: piezas de Solid Surface con el seno integrado, de 80 a 141 cm de ancho (Tecnos, Soul, New KRION, Vulcano), moldeadas sin juntas.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El sif&oacute;n queda a la vista?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, al no haber mueble el sif&oacute;n se ve, as&iacute; que conviene elegir v&aacute;lvula y sif&oacute;n con acabado a juego, en cromo o negro mate, para que sume en vez de molestar.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame una foto de tu ba&ntilde;o o las medidas de la pared y te digo qu&eacute; lavabo suspendido encaja: formato, altura de instalaci&oacute;n y qu&eacute; sif&oacute;n visto le va.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20suspendido%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
