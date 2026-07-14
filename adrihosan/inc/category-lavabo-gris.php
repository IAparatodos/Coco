<?php
/**
 * Category: Lavabo gris (ID: 2676) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 26 productos.
 *
 * A diferencia del azul (mejora quirurgica), aqui NO hay copy que preservar:
 * la descripcion editable actual es relleno ChatGPT sin datos. La plantilla
 * mantiene el bloque category_description() (mostrara el texto nuevo cuando
 * entre el Archivo 2), pero la pagina no depende de el.
 *
 * Caso SEO (GSC 12m, verificado 2026-07-14): la categoria rankea pos 17,6
 * para "lavabo gris" (503 impr) mientras el producto TOPI gris oscuro rankea
 * pos 4,3 con 1.636 impr y CTR 0%. Google ya nos considera relevantes: la
 * categoria debe absorber ese ranking.
 *
 * Keyword lider: "lavabo gris" + co-targets: lavabo gris claro, lavabo gris
 * oscuro, lavabo color gris, lavabo sobre encimera gris, lavabo marmol gris.
 *
 * Inventario real verificado (26):
 *   - 20 Solid Surface sobre encimera: series TOPI (60 cm), ARVO (55),
 *     ONNI (55, ovalado), BINX (36), COSS (36). DOS tonos reales: gris claro
 *     y gris oscuro. Muchos bicolor con blanco. 339-432 eur.
 *   - 5 marmol natural gris: Clematis, Dalia, Clavel, Jazmin, Candy
 *     (40-52 cm, 159,90-230,90 eur). Veta unica por pieza.
 *   - 1 ceramico extrafino: Osiris D35,5 gris oscuro mate, 157,90 eur
 *     (el "desde" de la categoria).
 *
 * Angulo unico: el gris como "el neutro que no es blanco" - contraste sin
 * el riesgo de un color fuerte. Color MACIZO en toda la masa (Solid Surface),
 * argumento que la ceramica esmaltada no puede dar.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora con sesgo practico - quiere
 * salir del blanco sin arriesgar; el gris es la puerta de entrada al color.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo gris"). NUNCA <h1> hardcodeado.
 * - Materiales REALES: Solid Surface (dominante), marmol natural, ceramica.
 * - Tonos REALES: gris claro y gris oscuro. NO inventar (antracita, perla...)
 *   salvo que existan en ficha.
 * - PROHIBIDO relleno: "elegancia", "funcionalidad", "toque de", "atemporal".
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo Solidker
 *   linea propia a medida).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Texto de las 9 FAQs: EXACTO del wireframe/Archivo 2 (palabra por palabra
 *   para que el schema FAQPage de Rank Math no diverja del HTML).
 * - Contacto: bloque estandar (6 opciones). Email destacado:
 *   comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2676 - LAVABO GRIS (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabo_gris_contenido_superior() {
    $term   = get_term( 2676, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2021/07/opbouwkom_topi_1_0009_8157513234414.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo gris' ); ?></h1>
            <p class="hero-tagline">El neutro que no es blanco: contraste sin arriesgar.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavgri" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20gris%20y%20necesito%20ayuda%20para%20elegir%20tono" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo gris</strong> saca el ba&ntilde;o del blanco sin el riesgo de un color fuerte. Dominan los modelos de Solid Surface en dos tonos reales: <strong>gris claro</strong> y <strong>gris oscuro</strong>, con el color macizo en toda la pieza. Y para quien busca piedra, marmol natural gris con veta &uacute;nica.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Gris claro o gris oscuro</h3>
                    <p>Dos tonos que combinan con todo.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Color macizo en Solid Surface</h3>
                    <p>No es esmalte, no se desgasta.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a combinar</h3>
                    <p>Grifer&iacute;a y tono por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavgri" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavgri-storytelling adrihosan-full-width-block">
        <div class="lavgri-storytelling-wrapper">
            <h2>Lavabo gris: el neutro que no es blanco</h2>
            <div class="storytelling-text">
                <p>El <strong>gris</strong> es la forma m&aacute;s segura de dar car&aacute;cter a un ba&ntilde;o sin casarte con un color fuerte. Donde la cer&aacute;mica se queda en el esmalte superficial, el Solid Surface lleva el color a toda la masa de la pieza, as&iacute; que el <strong>tono no se desgasta</strong> por mucho que lo limpies.</p>
                <p>En el cat&aacute;logo mandan dos tonos: el <strong>gris claro</strong> (luz, ideal en ba&ntilde;os peque&ntilde;os) y el <strong>gris oscuro</strong> (contraste, protagonista sobre mueble de madera o blanco). Muchos modelos son bicolor &mdash; interior en gris, exterior blanco o al rev&eacute;s &mdash; para integrar la pieza sin apagar el ba&ntilde;o. Y si buscas piedra de verdad, hay <strong>m&aacute;rmol natural gris</strong> con veta &uacute;nica en cada lavabo. El resto de tonos, en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">lavabos de colores</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavgri" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos grises</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos grises, desde 157,90 &euro;. Etiqueta sobre ficha: tono y formato.
            <?php else : ?>
                Selecci&oacute;n de lavabos grises en Solid Surface, m&aacute;rmol natural y cer&aacute;mica.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_gris_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavgri-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas entre gris claro y gris oscuro? M&aacute;ndanos foto del ba&ntilde;o y te decimos cu&aacute;l encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20dig%C3%A1is%20qu%C3%A9%20gris%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: GRIS CLARO VS OSCURO VS BICOLOR -->
    <section class="lavgri-comparativa adrihosan-full-width-block">
        <div class="lavgri-comparativa-wrapper">
            <h2>&iquest;Gris claro o gris oscuro?</h2>
            <p class="comparativa-intro">Los dos tonos reales del cat&aacute;logo, m&aacute;s la opci&oacute;n bicolor.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Tono</th>
                            <th>Car&aacute;cter</th>
                            <th>Combina con</th>
                            <th>Punto a saber</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Gris claro</strong></td>
                            <td>Luminoso, discreto</td>
                            <td>Ba&ntilde;os peque&ntilde;os, madera clara</td>
                            <td>Disimula mejor la cal</td>
                        </tr>
                        <tr>
                            <td><strong>Gris oscuro</strong></td>
                            <td>Contraste, manda</td>
                            <td>Mueble madera o blanco, grifo negro</td>
                            <td>Agradece un secado tras el uso</td>
                        </tr>
                        <tr>
                            <td><strong>Bicolor gris/blanco</strong></td>
                            <td>T&eacute;rmino medio</td>
                            <td>Ba&ntilde;os neutros</td>
                            <td>Integra la pieza sin apagarla</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si no te decides entre los dos tonos puros, el <strong>bicolor</strong> (interior en gris, exterior blanco o al rev&eacute;s) suaviza el conjunto y encaja en ba&ntilde;os m&aacute;s neutros.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavgri-materials adrihosan-full-width-block">
        <div class="lavgri-materials-wrapper">
            <h2>Claves del lavabo gris</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface (color macizo)</h3>
                    <p>El color va en toda la masa. No es esmalte que se desgaste.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129527;</span>
                    <h3>Reparable con lijado suave</h3>
                    <p>Las marcas superficiales desaparecen y la pieza vuelve a su aspecto.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>M&aacute;rmol natural gris</h3>
                    <p>Cinco modelos de piedra con veta &uacute;nica: no hay dos iguales.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127963;</span>
                    <h3>Cer&aacute;mica extrafina</h3>
                    <p>El Osiris en gris oscuro mate, desde 157,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 36 a 60 cm</h3>
                    <p>BINX y COSS (36) para aseos; ARVO y ONNI (55); TOPI (60).</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Sobre encimera</h3>
                    <p>Apoyado sobre el mueble. El gris se ve desde fuera.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavgri-asesoramiento adrihosan-full-width-block">
        <div class="lavgri-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo gris</h2>
            <p class="asesoramiento-intro">Cuatro pasos para que el gris case con el ba&ntilde;o que ya tienes.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige tono</strong>: claro (luz) u oscuro (contraste).</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Decide material</strong>: Solid Surface, m&aacute;rmol natural o cer&aacute;mica.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Mide la encimera</strong>: 36, 55 o 60 cm, y deja espacio al grifo.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te <strong>ayudamos con la grifer&iacute;a</strong> (negro mate, cromo o acero) por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Un gris espec&iacute;fico que no encuentras? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20gris%20y%20grifo%20que%20combine" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavgri-related adrihosan-full-width-block">
        <div class="lavgri-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">Lavabo blanco</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-marmol/">Lavabo m&aacute;rmol</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/mueble-bano-gris/">Mueble de ba&ntilde;o gris</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // La descripcion actual es relleno y sera reemplazada por el Archivo 2
    // (paquete SEO). El bloque queda listo para renderizar el texto nuevo.
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo gris</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; materiales son los lavabos grises?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La mayor&iacute;a son de Solid Surface (resina acr&iacute;lica con cargas minerales) en gris claro o gris oscuro. Tambi&eacute;n tenemos cinco modelos de m&aacute;rmol natural gris y un cer&aacute;mico extrafino en gris oscuro mate. En cada ficha ver&aacute;s el material exacto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Gris claro o gris oscuro: cu&aacute;l elegir?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El gris claro aporta luz y funciona mejor en ba&ntilde;os peque&ntilde;os o con poca ventana. El gris oscuro da contraste y convierte el lavabo en el protagonista, sobre todo en mueble de madera o blanco. Si dudas, el bicolor con exterior blanco es el t&eacute;rmino medio.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El color gris se desgasta con el uso?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En los lavabos de Solid Surface no: el color es macizo, va en toda la masa de la pieza, no es un esmalte superficial. Aunque pases a&ntilde;os limpi&aacute;ndolo, el gris es el mismo por dentro que por fuera.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se raya o se mancha f&aacute;cilmente?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El Solid Surface no es poroso y las marcas superficiales se reparan con un lijado suave. El m&aacute;rmol natural agradece un sellado peri&oacute;dico y limpieza con pH neutro. Evita estropajos abrasivos en ambos.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tienen los lavabos grises?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Desde 36 cm (series BINX y COSS, para ba&ntilde;os peque&ntilde;os o aseos) hasta 60 cm (serie TOPI), pasando por 55 cm (ARVO y ONNI). Los de m&aacute;rmol van de 40 a 52 cm. Todos son de apoyo sobre encimera o mueble.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Con qu&eacute; grifer&iacute;a y mueble combina un lavabo gris?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Con grifer&iacute;a negra mate el contraste es total; con cromo o acero queda m&aacute;s discreto. En mueble, la madera c&aacute;lida y el blanco son los que mejor acompa&ntilde;an a los dos tonos de gris.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El m&aacute;rmol gris de la foto ser&aacute; igual en mi casa?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Parecido, pero no id&eacute;ntico: el m&aacute;rmol es piedra natural y cada pieza tiene su propia veta. Es justo lo que se busca al elegir piedra &mdash; no hay dos lavabos iguales.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Ten&eacute;is tambi&eacute;n muebles de ba&ntilde;o en gris?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, hay una categor&iacute;a completa de muebles de ba&ntilde;o grises para hacer el conjunto. Y si prefieres contraste, un lavabo gris oscuro sobre mueble de madera clara es de las combinaciones que m&aacute;s se piden.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda la pen&iacute;nsula y financiamos en 3 meses sin intereses. Si quieres confirmar plazo o coste para tu zona, escr&iacute;benos al WhatsApp 96 195 71 36.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;No te decides con el tono? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto del ba&ntilde;o (con su grifer&iacute;a actual y el color del mueble) y te digo si te pega m&aacute;s un gris claro, un gris oscuro o un bicolor.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20gris%20y%20necesito%20ayuda%20para%20elegir%20tono" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
