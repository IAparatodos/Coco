<?php
/**
 * Category: Lavabos de pie y exentos (ID: 93) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 14 productos publicados
 * (curacion revisada 24-jul: los 14 apoyan en suelo, nada que sacar).
 * 12o ciclo del silo tras 2726/2699/2669/2668 (15-jul), 2701 (16-jul),
 * 91 sobre-encimera (17/18-jul), 2665 baratos (20-jul), 2703 colores
 * (20-jul), 2723 negros (23-jul), 2644 pequenos (23-jul) y 92
 * suspendidos (23-jul).
 *
 * Caso SEO (GSC 24-jul, 12m, page+query): patron ONNI/Bolonia por
 * triplicado - las fichas ganan a la categoria en sus tres queries
 * cabeza. "lavabo de pie": ficha Bolonia 2 pos 6,5 (2.294 impr) vs
 * categoria 14,7 (1.464). "lavabo con pie" (1.331 impr, pos 4,9
 * global): Bolonia 4,2 vs categoria 15,0. "lavabo exento" (~1.600
 * impr): fichas ONYX 3,4 / Octans 5,2 vs categoria 24,7. Fantasmas
 * lavabo-con-pie, con-pie-baratos y lavabo-exento ya desembocan aqui
 * por 301 (exento repuntado a 1 salto en el Archivo 2 de este ciclo).
 * Base 28d: 129 impr / 0 clics. Medir 20-sep.
 *
 * Inventario real verificado 24-jul-2026: 14 publicados, 290,90 a
 * 1.591,90 eur +IVA. Ceramicos redondos: Lijar 46,5x46,5x86,5 en 5
 * acabados (blanco/negro; brillo, mate, marmoleado; 290,90-508,90),
 * Bolonia 48,5x48,5x82,5 (blanco 308,90 / negro 472,90), Pietro
 * d49x82 (396). Ceramicos cuadrados: Florencia 47x47x84,5 (blanco
 * 290,90 / negro 472,90). Solid Surface: Octans 39x39x86 (806,90) y
 * Onyx 46,5x46,5x85 (753,90). Acero con pedestal de madera: Pedraza
 * (1.529,90 / 1.591,90).
 *
 * Angulo unico: el lavabo que se ve entero - libre por los cuatro
 * costados, columna y seno de una pieza, altura resuelta de fabrica y
 * sifon escondido dentro de la columna. La decision del comprador es
 * material x forma x color.
 *
 * Enlaces internos SOLO verificados: lavabos-suspendidos (92),
 * lavabo-redondo (2668), lavabos-negros (2723), lavabo-de-resina
 * (2681) y el post /lavabos-de-bano-diferentes-opciones/.
 *
 * OJO: los precios caducan. Verificados el 24-jul-2026.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); datos reales; cero
 * "garant*"; financiacion 3 meses; FAQs sin json-ld (schema via Rank
 * Math); FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 93 - LAVABOS DE PIE Y EXENTOS (reconstruccion)
// ============================================================================

function adrihosan_categoria_93_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabos-pie.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabos de pie y exentos' ); ?></h1>
            <p class="hero-tagline">14 modelos que se ven enteros: cer&aacute;micos desde 290,90 &euro;, Solid Surface mate y acero con pedestal de madera. Redondos y cuadrados, en blanco y negro.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavpie" class="hero-btn primary">Ver los 14 modelos</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20pie%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>lavabos de pie</strong> de esta p&aacute;gina, tambi&eacute;n llamados exentos o freestanding, son 14 modelos que apoyan directamente en el suelo, en cer&aacute;mica, Solid Surface y acero, de 290,90 a 1.591,90 &euro; +IVA.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128064;</div>
                    <h3>Se ve entero</h3>
                    <p>Libre por los cuatro costados: la pieza protagonista del ba&ntilde;o.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>Altura resuelta</h3>
                    <p>De 82,5 a 86,5 cm ya de f&aacute;brica: nada que colgar ni nivelar.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128295;</div>
                    <h3>Sif&oacute;n escondido</h3>
                    <p>Agua y desag&uuml;e van por dentro de la columna, nada a la vista.</p>
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
    <div id="destino-filtro-adria-lavpie" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavpie-storytelling adrihosan-full-width-block">
        <div class="lavpie-storytelling-wrapper">
            <h2>El lavabo que se ve entero</h2>
            <div class="storytelling-text">
                <p>Un lavabo de pie apoya directamente en el suelo y queda exento por los cuatro costados: sin mueble, sin encimera y sin pared que lo sostenga. La pieza se ve completa, del suelo a la boca, y por eso funciona como protagonista del ba&ntilde;o en lugar de esconderse en un rinc&oacute;n.</p>
                <p>En los monobloc actuales la columna y el seno son una sola pieza cer&aacute;mica: la toma de agua y el desag&uuml;e suben por dentro, el sif&oacute;n queda oculto y la altura viene resuelta de f&aacute;brica. Se coloca donde llegue la fontaner&iacute;a y listo, sin obra de colgado ni refuerzos de tabique.</p>
                <p class="comparativa-nota">&iquest;Prefieres liberar el suelo y colgarlo de la pared? Esa es la otra escuela: los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">lavabos suspendidos</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavpie" class="product-loop-header">
        <h2 class="product-loop-title">Los 14 lavabos de pie del cat&aacute;logo</h2>
        <p class="product-loop-subtitle">
            Cer&aacute;mica, Solid Surface y acero, de 290,90 a 1.591,90 &euro; +IVA. Usa el filtro para acotar por material, forma o precio.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_93_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavpie-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas con las medidas o con d&oacute;nde te llega la fontaner&iacute;a? M&aacute;ndanos una foto del ba&ntilde;o y te decimos qu&eacute; lavabo de pie encaja en tu hueco.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20una%20foto%20de%20mi%20ba%C3%B1o%20para%20elegir%20lavabo%20de%20pie" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. CERAMICOS: LA PUERTA DE ENTRADA -->
    <section class="lavpie-comparativa adrihosan-full-width-block">
        <div class="lavpie-comparativa-wrapper">
            <h2>Cer&aacute;micos desde 290,90 &euro;</h2>
            <p class="comparativa-intro">La cer&aacute;mica es la entrada al lavabo de pie: brillo cl&aacute;sico o mate actual, f&aacute;cil de limpiar y con la altura ya resuelta. Estas son las cuatro familias.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Medidas (boca &times; alto)</th>
                            <th>D&oacute;nde encaja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Lijar</strong></td>
                            <td>46,5 cm &times; 86,5 cm</td>
                            <td>La familia grande: 5 acabados entre blanco y negro, brillo, mate o marmoleado, desde 290,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Bolonia</strong></td>
                            <td>48,5 cm &times; 82,5 cm</td>
                            <td>El redondo de boca ancha: blanco 308,90 &euro; o negro mate 472,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Pietro</strong></td>
                            <td>&oslash;49 cm &times; 82 cm</td>
                            <td>Circular puro, blanco, 396 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Florencia</strong></td>
                            <td>47 cm &times; 84,5 cm</td>
                            <td>El cuadrado de la casa: blanco 290,90 &euro; o negro 472,90 &euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Medidas y precios verificados en julio de 2026. Si lo tuyo son las formas circulares en cualquier formato, hay p&aacute;gina propia de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">lavabos redondos</a>.</p>
        </div>
    </section>

    <!-- 8. TRES MATERIALES, TRES CARACTERES -->
    <section class="lavpie-materials adrihosan-full-width-block">
        <div class="lavpie-materials-wrapper">
            <h2>Tres materiales, tres caracteres</h2>
            <p class="materials-intro">El material decide el tacto, el acabado y el precio. Los tres conviven en el cat&aacute;logo y los tres se ven enteros.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Cer&aacute;mica</h3>
                    <p>Brillo cl&aacute;sico o mate, la m&aacute;s f&aacute;cil de limpiar. De 290,90 a 508,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>Solid Surface</h3>
                    <p>Mate aterciopelado, tacto piedra, y se repara lijando. Octans y Onyx, 753,90-806,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Acero y madera</h3>
                    <p>Los Pedraza: cuba de acero brillo sobre pedestal de madera, la pieza artesana.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127937;</span>
                    <h3>Blanco, negro o marmoleado</h3>
                    <p>Cada material con su carta: del blanco brillo al negro mate marmoleado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. COMO ELEGIR EL TUYO -->
    <section class="lavpie-asesoramiento adrihosan-full-width-block">
        <div class="lavpie-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo de pie</h2>
            <p class="asesoramiento-intro">Cuatro comprobaciones y aciertas a la primera. Todo lo dem&aacute;s es gusto.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide la boca</strong>: de 39 cm (Octans) a 49 (Pietro). El lavabo exento pide aire alrededor para lucir, no lo pegues a la mampara.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Localiza la fontaner&iacute;a</strong>: toma y desag&uuml;e deben llegar a la vertical de la columna, por suelo o pared baja.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Elige el material</strong>: cer&aacute;mica para empezar, Solid Surface si buscas el mate t&aacute;ctil, acero y madera si quieres pieza &uacute;nica.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Grifer&iacute;a aparte</strong>: sobre la repisa del propio lavabo o de ca&ntilde;o alto. La altura del lavabo ya viene dada, 82-86,5 cm.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Te tira m&aacute;s el tacto piedra? Los dos exentos de Solid Surface tienen familia completa en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">lavabos de resina y Solid Surface</a>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20de%20pie" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavpie-related adrihosan-full-width-block">
        <div class="lavpie-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">Lavabos suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">Lavabos redondos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabos de resina y Solid Surface</a>
                <a class="related-pill" href="https://www.adrihosan.com/lavabos-de-bano-diferentes-opciones/">&iquest;Qu&eacute; tipos de lavabos existen?</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los lavabos de pie</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es un lavabo de pie o exento?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Una pieza que apoya directamente en el suelo, sin mueble, encimera ni anclaje a pared. Queda libre por los cuatro costados y se ve entera, del suelo a la boca. Tambi&eacute;n se le llama freestanding.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es lo mismo un lavabo de pie que un lavabo con pedestal?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En la pr&aacute;ctica s&iacute;: el pedestal es la columna que sostiene el seno. En los monobloc actuales columna y seno son una sola pieza cer&aacute;mica; en los Pedraza el pedestal es de madera y la cuba de acero, dos piezas a la vista.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; altura tiene un lavabo de pie?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De 82 a 86,5 cm seg&uacute;n modelo, y viene dada de f&aacute;brica: el Pietro mide 82, el Bolonia 82,5, el Florencia 84,5, el Onyx 85 y el Lijar y el Octans 86,5. No hay nada que colgar ni nivelar.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Necesita mueble o encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No. Apoya en el suelo y se sostiene solo. Esa es su gracia: el ba&ntilde;o queda despejado a la altura de la vista y la pieza luce completa.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;D&oacute;nde quedan el sif&oacute;n y el desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Dentro de la columna: la toma de agua y el desag&uuml;e suben por el interior de la pieza, con lo que no se ve fontaner&iacute;a. Justo lo contrario que en un suspendido, donde el sif&oacute;n queda a la vista.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cer&aacute;mico o Solid Surface, cu&aacute;l elijo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Cer&aacute;mico si buscas el brillo cl&aacute;sico y el precio de entrada (290,90 a 508,90 &euro;). Solid Surface si prefieres el mate aterciopelado con tacto de piedra: se repara lijando y cuesta de 753,90 a 806,90 &euro;.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se puede poner en cualquier ba&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, siempre que la toma de agua y el desag&uuml;e lleguen a la vertical de la columna, por el suelo o por la pared baja. No necesita obra de colgado ni refuerzo de tabique.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas de boca tienen?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De 39 a 49 cm: Octans 39, Lijar y Onyx 46,5, Florencia 47, Bolonia 48,5 y Pietro 49. Los redondos dominan el cat&aacute;logo; el Florencia es el cuadrado.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un lavabo de pie?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Los cer&aacute;micos van de 290,90 a 508,90 &euro; +IVA; los Solid Surface, de 753,90 a 806,90; y los de acero con pedestal de madera, de 1.529,90 a 1.591,90 (precios de julio de 2026).</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame una foto de tu ba&ntilde;o o las medidas del hueco y te digo qu&eacute; lavabo de pie encaja: material, boca y d&oacute;nde te conviene la grifer&iacute;a.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20pie%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
