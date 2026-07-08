<?php
/**
 * Category: Suelo Exterior Antideslizante (ID: 5397)
 *
 * Subcategoria del silo Pavimentos / Exterior (ceramica > pavimentos >
 * azulejos-exterior > suelo-exterior-antideslizante). Padre: 2160
 * (azulejos-exterior).
 *
 * !! DOS BLOQUEANTES ANTES DE PUBLICAR: !!
 *   1) LA CATEGORIA TIENE 0 PRODUCTOS (count REST = 0). Mientras count=0,
 *      Rank Math la excluye del sitemap. Asignar productos antes del
 *      lanzamiento. El catalogo de esta plantilla ya usa fallback para
 *      count=0, asi que la pagina no peta, pero no vende hasta que
 *      tenga producto.
 *   2) FILTER SET SIN CONFIRMAR. Uso 427044 como default: es el que usan
 *      el padre azulejos-exterior (cat 2160) y suelo-tecnico (2350),
 *      hermanas de esta cat. Confirmar con Ricardo antes de publicar.
 *
 * Keyword principal: "suelo exterior antideslizante". Cluster:
 * "pavimento exterior" 1.900/mes (barato 880, antideslizante 210,
 * antihielo 170, c3 70) + "baldosas exterior antideslizantes" 720/mes.
 *
 * Intencion SERP: comercial-transaccional. Rankean categorias de tienda
 * (La Morenica, Interazulejo, Paratureforma) y fabricantes (Apavisa,
 * Aparici). Pagina de categoria con texto experto = formato correcto.
 *
 * Hueco a explotar: nadie ataca el precio de frente. GSC: "pavimento
 * exterior antideslizante barato" ya en pos 11,2 (880/mes) y "suelos
 * terrazas exteriores antideslizantes" en pos 7,9. La madre 2160 no
 * rankea antideslizante (34-52) -> sin canibalizacion, esta pagina
 * consolida el cluster.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (resultado bonito que dure,
 * todo a juego). SECUNDARIO: Reformista Rural (trato humano, envio fiable).
 *
 * REGLAS DURAS (briefing julio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Suelo Exterior Antideslizante").
 *   NUNCA <h1> hardcodeado.
 * - Materiales REALES: gres porcelanico, barro cocido, hidraulica. NADA
 *   inventado.
 * - Encabezados SIN "elegancia", "funcionalidad", "sofisticacion" ni la
 *   conjuncion "y" suelta.
 * - Adrihosan = DISTRIBUIDOR. NUNCA fabrica ni instala.
 * - Contacto: bloque estandar. WhatsApp 96 195 71 36 + email.
 * - Financiacion = 3 meses sin intereses (NUNCA 36).
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 5397 - SUELO EXTERIOR ANTIDESLIZANTE (silo Pavimentos/Exterior)
// ============================================================================

// Filter Set 427044 = el del padre azulejos-exterior (cat 2160) y hermanas.
// TODO confirmar con Ricardo (bloqueante 2 del wireframe).
if ( ! defined( 'ADRIHOSAN_SEXT_FILTER_SET' ) ) {
    define( 'ADRIHOSAN_SEXT_FILTER_SET', '427044' );
}

function adrihosan_categoria_suelo_exterior_anti_contenido_superior() {
    $term   = get_term( 5397, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/07/suelo-exterior-antideslizante-terraza-piscina.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Suelo Exterior Antideslizante' ); ?></h1>
            <p class="hero-tagline">Clase 3 antihielo para pisar mojado sin sustos.</p>
            <div class="hero-buttons">
                <a href="#catalogo-sext" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20suelo%20exterior%20antideslizante%20clase%203" class="hero-btn secondary" target="_blank">Pedir precio por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    El <strong>suelo exterior antideslizante</strong> de clase 3 te deja pisar la terraza reci&eacute;n llovida, el borde de la piscina o la escalera del porche con agarre real. Gres porcel&aacute;nico antihielo que no se agrieta en invierno ni pierde color al sol. Elige la est&eacute;tica; la seguridad ya viene resuelta.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128737;</div>
                    <h3>Clase 3 certificada</h3>
                    <p>El agarre que exige el CTE en exteriores (&asymp; R11).</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#10052;</div>
                    <h3>Antihielo real</h3>
                    <p>Absorci&oacute;n de agua por debajo del 0,5%.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Palets con seguimiento hasta tu obra.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128179;</div>
                    <h3>3 meses sin intereses</h3>
                    <p>La terraza lista este verano, el pago repartido.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (padre azulejos-exterior) -->
    <div id="destino-filtro-adria-sext" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="' . ADRIHOSAN_SEXT_FILTER_SET . '"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="sext-storytelling adrihosan-full-width-block">
        <div class="sext-storytelling-wrapper">
            <h2>Suelo exterior antideslizante clase 3: lo que exige tu terraza</h2>
            <div class="storytelling-text">
                <p>El C&oacute;digo T&eacute;cnico de la Edificaci&oacute;n pide <strong>clase 3</strong> en suelos exteriores: un microrrelieve que agarra la suela &mdash;o el pie descalzo&mdash; incluso con agua encima. Aqu&iacute; no hay letra peque&ntilde;a: <strong>todo el pavimento de esta categor&iacute;a cumple esa clase</strong>, as&iacute; que la &uacute;nica decisi&oacute;n que te queda es la bonita. &iquest;Efecto cemento en gran formato para una terraza moderna? &iquest;Madera cer&aacute;mica para el porche? &iquest;Piedra para el patio?</p>
                <p>La helada tampoco es problema: el porcel&aacute;nico absorbe <strong>menos del 0,5% de agua</strong>, no deja entrar nada que congelar y por eso no se agrieta ni se descascarilla. Si vienes de los <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/">azulejos de exterior</a> buscando la versi&oacute;n que no resbala, es exactamente esta.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-sext" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de suelo exterior antideslizante</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> productos. Etiqueta sobre ficha: clase 3, antihielo y 20 mm cuando aplique.
            <?php else : ?>
                Gres porcel&aacute;nico clase 3 antihielo para terraza, piscina, patio o escalera. Etiqueta sobre ficha con clase y espesor.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_suelo_exterior_anti_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="sext-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">Pisa tu terraza descalzo este verano: m&aacute;ndanos una foto de la zona por WhatsApp y te pasamos precio cerrado por m&sup2;.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20zona%20exterior%20para%20un%20suelo%20antideslizante" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: QUE VA EN CADA ZONA -->
    <section class="sext-comparativa adrihosan-full-width-block">
        <div class="sext-comparativa-wrapper">
            <h2>Qu&eacute; pavimento exterior antideslizante va en cada zona</h2>
            <p class="comparativa-intro">La clase 3 es com&uacute;n a todo; lo que cambia es el acabado, el espesor y el modo de colocaci&oacute;n.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Zona</th>
                            <th>Acabado recomendado</th>
                            <th>Espesor</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Terraza / porche</strong></td>
                            <td>Grip suave C3, efecto cemento o madera</td>
                            <td>10 mm encolado</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/">Suelo imitaci&oacute;n madera</a></td>
                        </tr>
                        <tr>
                            <td><strong>Playa de piscina</strong></td>
                            <td>Relieve C3 + piezas de borde</td>
                            <td>10 mm</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/">Azulejos para piscinas</a></td>
                        </tr>
                        <tr>
                            <td><strong>Patio r&uacute;stico</strong></td>
                            <td>Acabado r&uacute;stico C3, formatos medios</td>
                            <td>10 mm</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-rusticos/">Suelos r&uacute;sticos</a></td>
                        </tr>
                        <tr>
                            <td><strong>Paso sobre plots / gravilla</strong></td>
                            <td>Porcel&aacute;nico t&eacute;cnico</td>
                            <td>20 mm en seco</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-tecnico-exterior/">Suelo t&eacute;cnico exterior</a></td>
                        </tr>
                        <tr>
                            <td><strong>Escalera exterior</strong></td>
                            <td>C3 con pelda&ntilde;o t&eacute;cnico o borde romo</td>
                            <td>10 mm</td>
                            <td>&mdash;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Para el interior de la ducha mira el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-antideslizante-para-ducha-de-obra/">suelo antideslizante para ducha de obra</a>, que resuelve otra zona h&uacute;meda con el mismo criterio de agarre.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="sext-materials adrihosan-full-width-block">
        <div class="sext-materials-wrapper">
            <h2>Por qu&eacute; el porcel&aacute;nico gana en exterior</h2>
            <p class="materials-intro">Las 6 propiedades reales que hacen del porcel&aacute;nico el pavimento exterior de referencia.</p>

            <div class="materials-grid">
                <div class="material-card"><span class="material-icon">&#128737;</span><h3>Clase 3 / &asymp;R11</h3><p>Agarre certificado con el suelo mojado.</p></div>
                <div class="material-card"><span class="material-icon">&#10052;</span><h3>Antihielo</h3><p>Absorci&oacute;n &lt; 0,5%: no entra agua que congelar.</p></div>
                <div class="material-card"><span class="material-icon">&#9728;</span><h3>Color estable al sol</h3><p>El pigmento va en la masa, no se destine.</p></div>
                <div class="material-card"><span class="material-icon">&#129529;</span><h3>Sin tratamientos ni sellados</h3><p>Se limpia solo con agua.</p></div>
                <div class="material-card"><span class="material-icon">&#128176;</span><h3>Aguanta el uso</h3><p>Tr&aacute;nsito, macetas y mobiliario sin marcarse.</p></div>
                <div class="material-card"><span class="material-icon">&#128208;</span><h3>10 mm o 20 mm</h3><p>10 para encolar, 20 para colocar en seco.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="sext-asesoramiento adrihosan-full-width-block">
        <div class="sext-asesoramiento-wrapper">
            <h2>C&oacute;mo compramos contigo tu suelo de exterior</h2>
            <p class="asesoramiento-intro">De la foto de la zona al palet en tu obra, con precio cerrado.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>M&aacute;ndanos por WhatsApp</strong> (96 195 71 36) una foto de la zona: terraza, piscina o escalera.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Te proponemos 2-3 series clase 3</strong> que encajan con tu estilo, con precio cerrado por m&sup2;.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Confirmas metros</strong> (suma un 10% de merma para cortes).</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Env&iacute;o a toda Espa&ntilde;a</strong> en palet con seguimiento.</p></div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20suelo%20exterior%20antideslizante%20para%20mi%20zona" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="sext-related adrihosan-full-width-block">
        <div class="sext-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/">Azulejos de exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-tecnico-exterior/">Suelo t&eacute;cnico exterior 20 mm</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/">Azulejos para piscinas</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/">Suelo imitaci&oacute;n madera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-rusticos/">Suelos r&uacute;sticos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/suelo-de-barro/suelo-barro-cocido-exterior/">Barro cocido exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/exterior/">Baldosa hidr&aacute;ulica exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-antideslizante-para-ducha-de-obra/">Suelo antideslizante ducha de obra</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA (si tuviera copy on-page)
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

    <!-- 12. FAQs (8 preguntas del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre suelo exterior antideslizante</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es un suelo exterior antideslizante clase 3?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Es un pavimento con un microrrelieve que ofrece la m&aacute;xima resistencia al deslizamiento, la clase 3 que exige el C&oacute;digo T&eacute;cnico de la Edificaci&oacute;n para exteriores. Equivale aproximadamente a un R11 y da agarre a la suela o al pie descalzo incluso con agua encima.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El porcel&aacute;nico exterior aguanta las heladas?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. Es antihielo porque su absorci&oacute;n de agua es inferior al 0,5%: apenas entra agua en la pieza, as&iacute; que no hay nada que congele y dilate. Por eso no se agrieta ni se descascarilla con el fr&iacute;o del invierno.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirve para el borde de la piscina?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, es una de sus zonas estrella. La clase 3 da seguridad con el pie mojado y descalzo, y existen piezas de borde a juego para rematar el vaso. El color no se altera con el sol ni con el cloro.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se puede poner imitaci&oacute;n madera en el exterior?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. La madera cer&aacute;mica exterior da el aspecto c&aacute;lido de la tarima sin sus problemas: no se pudre, no hay que barnizarla y viene en versi&oacute;n antideslizante clase 3. Es la opci&oacute;n m&aacute;s buscada para porches.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; espesor necesito, 10 o 20 mm?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El de 10 mm se encola sobre una base preparada, como en una terraza tradicional. El de 20 mm se puede colocar en seco sobre plots, gravilla o c&eacute;sped, sin obra. Te decimos cu&aacute;l encaja seg&uacute;n tu zona.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El suelo antideslizante es m&aacute;s dif&iacute;cil de limpiar?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No. La microtextura se limpia con agua y un jab&oacute;n neutro, sin tratamientos ni sellados. Evita los limpiadores abrasivos fuertes porque con el tiempo desgastan la textura que da el agarre.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hay que dar alg&uacute;n tratamiento o sellado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No. A diferencia de la piedra natural o el barro, el porcel&aacute;nico no necesita sellador. Sale de f&aacute;brica listo, no absorbe y mantiene el color a&ntilde;o tras a&ntilde;o solo con la limpieza normal.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Envi&aacute;is el suelo a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a en palet con seguimiento. Escr&iacute;benos por WhatsApp al 96 195 71 36 con los metros de tu zona o una foto y te preparamos un presupuesto cerrado con el transporte incluido.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Tu caso no est&aacute; aqu&iacute;? Te digo qu&eacute; serie funciona.</h2><p>Soy Ricardo. M&aacute;ndame una foto de tu terraza, patio o escalera por WhatsApp y te digo qu&eacute; serie clase 3 encaja antes de que gastes un euro.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20suelo%20exterior%20antideslizante%20clase%203" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
