<?php
/**
 * Category: Lavabo azul (ID: 2721) - MEJORA QUIRURGICA
 *
 * Subcategoria del silo Lavabos (parent 90). 45 productos.
 *
 * !! ATENCION: PAGINA YA EN 1a PAGINA DE GOOGLE. !!
 *
 * Esto NO es reconstruccion. Es MEJORA QUIRURGICA: la plantilla anade
 * estructura (hero, sellos, tabla, FAQs, related, contacto) alrededor de
 * lo que YA rankea. La descripcion editable del termino (category_description())
 * se preserva en el bloque "bho-guide-section" como en el resto del silo,
 * conservando el texto on-page que da el ranking.
 *
 * Diff minimo y reversible. Si el copy de la cat editable cambia o algo
 * empeora rankings, basta con quitar el case 2721 del switch en
 * functions.php para volver al render por defecto.
 *
 * Keyword lider: "lavabo azul" + co-targets: lavabo azul marino, lavabo
 * azul verdoso (turquesa), lavabo Solid Surface azul, lavabo azul sobre
 * encimera.
 *
 * Inventario real verificado: 45 productos, casi todos SOLID SURFACE sobre
 * encimera en DOS tonos que se repiten:
 *   - azul marino (profundo, sobrio)
 *   - azul verdoso (cercano al turquesa)
 * Muchos bicolor (interior color + exterior blanco o al reves). Series
 * TOPI, ARVO, ONNI. Formatos tipo bol (40 cm) y rectangular (55-60 cm).
 *
 * Clave de material que solo el Solid Surface da: el COLOR es MACIZO, en
 * toda la masa de la pieza, no es un esmalte que se desgaste. La ceramica
 * no puede dar ese argumento.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora con sesgo de diseno
 * (el color es compra emocional, pieza-foco del bano).
 *
 * Angulo unico: el azul como protagonista sobre un bano neutro, en dos
 * tonos definidos y con color que no destine.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - Conservar el copy que YA rankea (descripcion editable de WP).
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo azul"). NUNCA <h1>
 *   hardcodeado.
 * - Materiales REALES: Solid Surface/resina (dominante), ceramica/
 *   porcelana, piedra. NADA inventado.
 * - Tonos REALES: azul marino y azul verdoso. NO inventar otros
 *   (celeste, cobalto) salvo que existan en ficha.
 * - PROHIBIDO relleno: "elegancia", "funcionalidad", "toque de",
 *   "atemporal".
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo
 *   Solidker linea propia a medida).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Texto de las 9 FAQs: EXACTO del briefing/Archivo 2 (palabra por
 *   palabra para que el schema FAQPage de Rank Math no diverja del HTML).
 * - Contacto: bloque estandar (6 opciones). Email destacado del
 *   briefing: comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2721 - LAVABO AZUL (mejora quirurgica)
// ============================================================================

function adrihosan_categoria_lavabo_azul_contenido_superior() {
    $term   = get_term( 2721, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/Lavabo-azul-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo azul' ); ?></h1>
            <p class="hero-tagline">El color que convierte el lavabo en el foco del ba&ntilde;o.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavazu" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20azul%20y%20necesito%20ayuda%20para%20elegir%20tono" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo azul</strong> rompe la monoton&iacute;a del ba&ntilde;o blanco con una pieza que manda. Dominan los modelos de Solid Surface en dos tonos que vuelan: <strong>azul marino</strong> y <strong>azul verdoso</strong>, con el color macizo en toda la pieza.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Azul marino o verdoso</h3>
                    <p>Dos tonos que combinan con todo.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Color macizo en Solid Surface</h3>
                    <p>No es esmalte, no destine.</p>
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
    <div id="destino-filtro-adria-lavazu" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavazu-storytelling adrihosan-full-width-block">
        <div class="lavazu-storytelling-wrapper">
            <h2>Lavabo azul: el foco que tu ba&ntilde;o neutro ped&iacute;a</h2>
            <div class="storytelling-text">
                <p>El <strong>azul</strong> es la forma m&aacute;s directa de dar car&aacute;cter a un ba&ntilde;o blanco o de madera. Donde la cer&aacute;mica se queda en el esmalte superficial, el Solid Surface lleva el color a toda la masa de la pieza, as&iacute; que la <strong>tonalidad no destine</strong> ni se desgasta con el uso.</p>
                <p>En el cat&aacute;logo vuelan dos tonos: el <strong>azul marino</strong> (profundo, sobrio, manda) y el <strong>azul verdoso</strong> (cercano al turquesa, fresco). Muchos modelos son bicolor &mdash; interior en color, exterior blanco o al rev&eacute;s &mdash; para que el azul se vea sin invadir todo el ba&ntilde;o. Si quieres ver el resto de tonos, pasa por <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">lavabos de colores</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavazu" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos azules</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos azules. Etiqueta sobre ficha: tono y formato.
            <?php else : ?>
                Selecci&oacute;n de lavabos azules en Solid Surface, mayor&iacute;a sobre encimera.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_azul_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavazu-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas con el tono o la grifer&iacute;a? M&aacute;ndanos foto del ba&ntilde;o y te decimos qu&eacute; azul encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20digas%20qu%C3%A9%20azul%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: AZUL MARINO VS VERDOSO VS BICOLOR -->
    <section class="lavazu-comparativa adrihosan-full-width-block">
        <div class="lavazu-comparativa-wrapper">
            <h2>Azul marino o azul verdoso: cu&aacute;l elegir</h2>
            <p class="comparativa-intro">Los dos tonos reales del cat&aacute;logo, m&aacute;s la opci&oacute;n bicolor.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Tono</th>
                            <th>Car&aacute;cter</th>
                            <th>Combina con</th>
                            <th>Sensaci&oacute;n</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Azul marino</strong></td>
                            <td>Profundo, sobrio</td>
                            <td>Blanco, madera, oro o negro</td>
                            <td>Presencia serena</td>
                        </tr>
                        <tr>
                            <td><strong>Azul verdoso</strong></td>
                            <td>Fresco, cercano al turquesa</td>
                            <td>Blanco, gris claro, lat&oacute;n</td>
                            <td>Luminoso, relajante</td>
                        </tr>
                        <tr>
                            <td><strong>Bicolor azul/blanco</strong></td>
                            <td>Contraste marcado</td>
                            <td>Ba&ntilde;os modernos</td>
                            <td>Juego visual</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si no te decides entre los dos tonos puros, el <strong>bicolor</strong> (interior en color, exterior blanco) suaviza el azul y deja la pieza apta para ba&ntilde;os m&aacute;s neutros.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavazu-materials adrihosan-full-width-block">
        <div class="lavazu-materials-wrapper">
            <h2>Claves del lavabo azul</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface (color macizo)</h3>
                    <p>El color va en toda la masa. No es esmalte que se desgaste.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127759;</span>
                    <h3>Azul marino</h3>
                    <p>Tono profundo y sobrio. El m&aacute;s vendido del cat&aacute;logo.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127754;</span>
                    <h3>Azul verdoso</h3>
                    <p>Cercano al turquesa. Resulta m&aacute;s fresco que el marino.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9711;</span>
                    <h3>Tipo bol o rectangular</h3>
                    <p>Bol (~40 cm) para foco vertical; rectangular para encimera horizontal.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>Ancho 40-60 cm</h3>
                    <p>El rango est&aacute;ndar del azul sobre encimera.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Sobre encimera</h3>
                    <p>Apoyado sobre el mueble. El azul se ve desde fuera.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavazu-asesoramiento adrihosan-full-width-block">
        <div class="lavazu-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo azul</h2>
            <p class="asesoramiento-intro">Cuatro pasos para que el azul case con el ba&ntilde;o que ya tienes.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige tono</strong>: marino (sobrio) o verdoso (fresco).</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Decide liso o bicolor</strong>: pieza enteramente en color o exterior blanco con interior azul.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Mide la encimera</strong> y deja espacio al grifo.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te <strong>ayudamos con la grifer&iacute;a</strong> (negro, oro o cromo) por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Un azul espec&iacute;fico que no encuentras? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20azul%20y%20grifo%20que%20combine" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavazu-related adrihosan-full-width-block">
        <div class="lavazu-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-verde/">Lavabo verde</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-gris/">Lavabo gris</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifo de lavabo</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA (CONSERVA EL TEXTO QUE YA RANKEA)
    // Esto es lo que mantiene la ventaja SEO de la cat: el copy on-page
    // que ya esta en 1a pagina de Google sigue rindiendose tal cual.
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

    <!-- 12. FAQs (9 preguntas EXACTAS del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo azul</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;En qu&eacute; tonos de azul hay lavabos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre todo en azul marino, un tono profundo, y en azul verdoso, m&aacute;s cercano al turquesa. Muchos modelos son bicolor, con el exterior blanco y el interior en color o al rev&eacute;s.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material son los lavabos azules?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Casi todos son de Solid Surface, una resina con cargas minerales sin juntas que admite color en toda la pieza. Es higi&eacute;nica y f&aacute;cil de limpiar.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El color del lavabo azul se desgasta o destine?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No. En el Solid Surface el color es macizo, va en toda la masa y no es una capa superficial, as&iacute; que aguanta el uso diario sin perder tono.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a pega con un lavabo azul?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Funcionan muy bien las griferias en negro, oro o cromo, seg&uacute;n el estilo. Al ir sobre encimera, elige un grifo de ca&ntilde;o alto o una griferia mural.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo azul va sobre encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, la mayor&iacute;a son lavabos sobre encimera tipo bol o rectangular, que se apoyan encima del mueble y lucen el color desde fuera.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tienen los lavabos azules?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Los hay tipo bol de unos 40 cm y rectangulares de 55 a 60 cm de ancho. Mide tu encimera y deja espacio para el grifo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Combina un lavabo azul con un ba&ntilde;o blanco?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, es justo donde m&aacute;s luce: sobre encimera clara o madera, el azul se convierte en el foco sin recargar el ba&ntilde;o.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo azul incluye grifo y desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La grifer&iacute;a va aparte salvo que se indique. La v&aacute;lvula de desag&uuml;e suele acompa&ntilde;ar seg&uacute;n el modelo. Si dudas te lo confirmamos por WhatsApp.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a y te asesoramos por WhatsApp en el 96 195 71 36 o por email durante todo el proceso.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;No te decides por el tono? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto del ba&ntilde;o (con su grifer&iacute;a actual y el color del mueble) y te digo si te pega m&aacute;s un azul marino, un verdoso o un bicolor.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20azul%20y%20necesito%20ayuda%20para%20elegir%20tono" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
