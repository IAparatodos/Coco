<?php
/**
 * Category: Lavabo blanco (ID: 2673)
 *
 * Subcategoria del silo Lavabos (parent 90). 90 productos.
 * Termino CABECERA DE ALTO VOLUMEN.
 *
 * !! IMPORTANTE: La plantilla aplica MODO QUIRURGICO POR DEFECTO. !!
 *
 * Antes de aplicar el briefing pedia verificar en GSC si la pagina ya
 * rankea en 1a. Como esa verificacion no es posible desde aqui, la
 * plantilla preserva SIEMPRE el copy editable de WP via
 * category_description() en la seccion "bho-guide-section".
 *
 * Resultado:
 *   - Si la cat YA rankea con texto en su descripcion editable -> ese
 *     copy sigue rindiendose tal cual (modo quirurgico automatico).
 *   - Si la cat NO tiene descripcion editable -> el bloque no se pinta
 *     y queda como build completo "limpio" con la estructura nueva.
 *
 * Diff minimo y reversible. Rollback de 30s: quitar el case 2673 del
 * switch en functions.php y vuelve al render por defecto.
 *
 * Keyword lider: "lavabo blanco" + co-targets: lavabo blanco sobre
 * encimera, lavabo blanco suspendido, lavabo blanco de pie, lavabo
 * ceramico blanco.
 *
 * Inventario real verificado:
 *   - Solid Surface sobre encimera (series Amarna, Tinis, Luxor, Memfis,
 *     tipo bol Eos)
 *   - Suspendidos (series Axel, Aina)
 *   - De pie ceramicos (serie Lijar)
 *
 * DIFERENCIA CLAVE con el lavabo azul:
 *   El blanco NO es color-foco. Es la apuesta neutra que combina con
 *   todo. La decision de compra NO es el color, es el FORMATO (sobre
 *   encimera, suspendido o de pie) y el material.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora. SECUNDARIO: Reformista
 * Primerizo (el blanco es la opcion segura; hay que ayudar a elegir
 * formato sin tecnicismos).
 *
 * Angulo unico: guiar por formato y material, con el blanco como el
 * clasico que no falla.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - Conservar el copy que YA rankea (descripcion editable de WP).
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo blanco"). NUNCA <h1>
 *   hardcodeado.
 * - Materiales REALES: Solid Surface/resina, ceramica/porcelana. NADA
 *   inventado.
 * - Formatos REALES: sobre encimera, suspendido, de pie. NO inventar
 *   otros.
 * - PROHIBIDO relleno: "elegancia", "funcionalidad", "toque de",
 *   "atemporal". El titulo viejo decia "Elegancia Y Versatilidad" ->
 *   NO reutilizar esa linea.
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
// CATEGORIA 2673 - LAVABO BLANCO (modo quirurgico por defecto)
// ============================================================================

function adrihosan_categoria_lavabo_blanco_contenido_superior() {
    $term   = get_term( 2673, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/Lavabo-blanco-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo blanco' ); ?></h1>
            <p class="hero-tagline">El cl&aacute;sico que combina con todo, en el formato que tu ba&ntilde;o necesita.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavbl" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20blanco%20y%20no%20s%C3%A9%20qu%C3%A9%20formato%20me%20encaja" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo blanco</strong> es la apuesta segura: combina con cualquier ba&ntilde;o y no pasa de moda. Aqu&iacute; lo tienes en todos los formatos, sobre encimera, suspendido o de pie, en resina o cer&aacute;mica.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#9989;</div>
                    <h3>Combina con todo</h3>
                    <p>El blanco encaja en cualquier ba&ntilde;o.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Resina o cer&aacute;mica</h3>
                    <p>Sobre encimera, suspendido o de pie.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a elegir formato</h3>
                    <p>Por WhatsApp, sin tecnicismos.</p>
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
    <div id="destino-filtro-adria-lavbl" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavbl-storytelling adrihosan-full-width-block">
        <div class="lavbl-storytelling-wrapper">
            <h2>Lavabo blanco: la base sobre la que montas tu ba&ntilde;o</h2>
            <div class="storytelling-text">
                <p>El blanco deja que manden la <strong>encimera, el espejo o la grifer&iacute;a</strong>, y por eso es la opci&oacute;n m&aacute;s segura en una reforma. Si dudas con todo lo dem&aacute;s (color de paredes, estilo de mueble), un lavabo blanco da margen de maniobra para cambiarlo despu&eacute;s sin tener que sustituir el sanitario.</p>
                <p>La decisi&oacute;n real con el blanco no es el color, es el <strong>formato</strong>: <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">sobre encimera</a> (el m&aacute;s vendido, diseno actual), suspendido (libera el suelo) o de pie (cl&aacute;sico, sin obra). Y a continuaci&oacute;n el material: resina sin juntas o cer&aacute;mica de toda la vida. Te ayudamos a decidir sin tecnicismos.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavbl" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos blancos</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos blancos. Etiqueta sobre ficha: formato y material.
            <?php else : ?>
                Selecci&oacute;n de lavabos blancos en Solid Surface y cer&aacute;mica, en los tres formatos del cat&aacute;logo.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_blanco_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavbl-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes qu&eacute; formato te encaja? Cu&eacute;ntanos c&oacute;mo es tu ba&ntilde;o y te decimos si te conviene encimera, suspendido o de pie.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20no%20s%C3%A9%20qu%C3%A9%20formato%20de%20lavabo%20blanco%20me%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: SOBRE ENCIMERA VS SUSPENDIDO VS DE PIE -->
    <section class="lavbl-comparativa adrihosan-full-width-block">
        <div class="lavbl-comparativa-wrapper">
            <h2>Lavabo blanco sobre encimera, suspendido o de pie</h2>
            <p class="comparativa-intro">Los tres formatos reales del cat&aacute;logo. La elecci&oacute;n es del formato; el blanco viene en todos.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Formato</th>
                            <th>Qu&eacute; es</th>
                            <th>Cu&aacute;ndo elegirlo</th>
                            <th>D&oacute;nde verlo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Sobre encimera</strong></td>
                            <td>Se apoya encima del mueble</td>
                            <td>Dise&ntilde;o actual, encimera vista</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a></td>
                        </tr>
                        <tr>
                            <td><strong>Suspendido</strong></td>
                            <td>Fijado a la pared</td>
                            <td>Ba&ntilde;os peque&ntilde;os, suelo libre</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">Lavabos suspendidos</a></td>
                        </tr>
                        <tr>
                            <td><strong>De pie</strong></td>
                            <td>Con columna que esconde el sif&oacute;n</td>
                            <td>Estilo cl&aacute;sico, sin obra</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pie/">Lavabos de pie</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si la reforma es a fondo, el <strong>sobre encimera</strong> es lo m&aacute;s vendido. En ba&ntilde;os peque&ntilde;os manda el <strong>suspendido</strong> por la sensaci&oacute;n de espacio. El <strong>de pie</strong> sigue siendo el m&aacute;s pr&aacute;ctico cuando no hay mueble y no se quiere obra.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavbl-materials adrihosan-full-width-block">
        <div class="lavbl-materials-wrapper">
            <h2>Claves del lavabo blanco</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface / resina</h3>
                    <p>Sin juntas, no porosa, reparable con lijado suave. Domina los sobre encimera.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica / porcelana</h3>
                    <p>El cl&aacute;sico resistente. Esmalte blanco que mantiene el tono con cuidados b&aacute;sicos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Sobre encimera</h3>
                    <p>Apoyado sobre mueble o encimera. Dise&ntilde;o actual.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128205;</span>
                    <h3>Suspendido</h3>
                    <p>Anclado a pared. Suelo libre, sensaci&oacute;n de amplitud.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9961;</span>
                    <h3>De pie</h3>
                    <p>Columna integrada que esconde el sif&oacute;n. Sin obra.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#10024;</span>
                    <h3>Brillo o mate</h3>
                    <p>Acabado seg&uacute;n modelo. El brillo refleja, el mate disimula marcas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavbl-asesoramiento adrihosan-full-width-block">
        <div class="lavbl-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo blanco</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar sin tecnicismos.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Decide el formato</strong>: sobre encimera, suspendido o de pie.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Elige material</strong>: resina (sin juntas) o cer&aacute;mica (cl&aacute;sica).</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Mide el hueco o la encimera</strong> y comprueba la altura de uso.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te ayudamos con la <strong>grifer&iacute;a que pega</strong> (cromo, negro o oro) por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida o forma exacta? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20formato%20de%20lavabo%20blanco%20y%20grifo%20a%20juego" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavbl-related adrihosan-full-width-block">
        <div class="lavbl-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">Lavabos suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pie/">Lavabos de pie</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifo de lavabo</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA (CONSERVA EL TEXTO QUE YA RANKEA)
    // Modo quirurgico automatico: si la cat tiene descripcion editable en WP,
    // el copy on-page sigue rindiendose tal cual. Si esta vacia, no se pinta
    // y queda el build limpio.
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo blanco</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formatos hay de lavabo blanco?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Los tienes sobre encimera, suspendidos a la pared y de pie con columna. El blanco est&aacute; en casi todos los formatos, as&iacute; que primero elige c&oacute;mo quieres montarlo y luego el modelo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material son los lavabos blancos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Los hay de Solid Surface o resina, sin juntas y muy f&aacute;ciles de limpiar, y de cer&aacute;mica o porcelana, el cl&aacute;sico resistente. La resina manda en los modelos sobre encimera.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo blanco amarillea con el tiempo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La cer&aacute;mica esmaltada y el Solid Surface de calidad mantienen el blanco si los limpias con productos no abrasivos. Evita la lej&iacute;a pura y los estropajos met&aacute;licos.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El blanco combina con cualquier ba&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, es justo su ventaja. El lavabo blanco encaja con cualquier encimera, mueble o grifer&iacute;a, por eso es la opci&oacute;n m&aacute;s segura en una reforma.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; lavabo blanco va mejor en un ba&ntilde;o peque&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un suspendido libera suelo y agranda el ba&ntilde;o a la vista. Si necesitas hueco de almacenaje debajo, el de pie con columna esconde el sif&oacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a pega con un lavabo blanco?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Con el blanco vale casi todo: cromo para un look limpio, negro para contraste o oro para calidez. Si es sobre encimera, elige un grifo de ca&ntilde;o alto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo blanco sobre encimera necesita un grifo especial?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, al ir elevado pide un grifo de ca&ntilde;o alto o una grifer&iacute;a mural, para que el agua caiga con holgura dentro del lavabo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo blanco incluye grifo y desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
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
                <div><h2>&iquest;No te decides por el formato? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto del ba&ntilde;o (con la pared donde ir&iacute;a el lavabo) y te digo si te conviene sobre encimera, suspendido o de pie, y en qu&eacute; material.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20blanco%20y%20no%20s%C3%A9%20qu%C3%A9%20formato%20me%20encaja" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
