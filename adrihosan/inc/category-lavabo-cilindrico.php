<?php
/**
 * Category: Lavabo cilindrico (ID: 5389)
 *
 * Subcategoria del silo Lavabos (sanitarios > lavabos > lavabo-cilindrico).
 * 10 productos. URL pos 5,1 con 3,9% CTR y 146 clics en 3.743 impr -> es la
 * pagina MAS EFICIENTE del silo. Reforzar el angulo, no romperlo.
 *
 * Keyword lider: "lavabo cilindrico" (GSC pos 3,4 / 547 impr).
 * Co-target fuerte: "lavamanos cilindrico" (pos 2,6 / 251 impr -> rankea
 * incluso MEJOR que la forma "lavabo"). Sinonimo natural.
 *
 * Intencion SERP: lavabo de diseno SOBRE ENCIMERA, cuerpo recto tipo
 * tambor/columna (diametro 35-43 cm), foco decorativo del bano, griferia
 * de cano alto o mural.
 *
 * Hueco a explotar:
 *   1) nadie cubre bien la diferencia cilindrico vs redondo
 *   2) el sinonimo "lavamanos" no esta cubierto en la SERP -> ganar facil
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (estetica + que combine con
 * su mueble). SECUNDARIO: Reformista Primerizo.
 *
 * Angulo unico: la pieza con personalidad que eleva un mueble sencillo.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo cilindrico"). NUNCA <h1>
 *   hardcodeado.
 * - Materiales REALES: ceramica/porcelana, piedra natural, resina/Solid
 *   Surface, marmol. NADA inventado.
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo
 *   Solidker que es linea propia a medida).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Contacto: bloque estandar (6 opciones). Email destacado del briefing:
 *   comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781 (mismo que cat 90).
 * - Enlaces internos SOLO a las URLs verificadas del wireframe.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 5389 - LAVABO CILINDRICO (subcategoria del silo Lavabos)
// ============================================================================

function adrihosan_categoria_lavabo_cilindrico_contenido_superior() {
    $term   = get_term( 5389, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/lavabo-cilindrico-blanco-bano-moderno-ducha-negra.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo cil&iacute;ndrico' ); ?></h1>
            <p class="hero-tagline">El lavabo de dise&ntilde;o que da volumen y car&aacute;cter a tu ba&ntilde;o.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavcil" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20cil%C3%ADndrico%20que%20combine%20con%20mi%20mueble" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo cil&iacute;ndrico</strong> convierte un mueble sencillo en el foco del ba&ntilde;o. Cuerpo recto, forma de tambor y la presencia que no tiene un cuenco plano. Te ayudamos a elegir el que combina con tu encimera.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128705;</div>
                    <h3>Dise&ntilde;o sobre encimera</h3>
                    <p>Pieza con volumen, no un cuenco plano.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Cer&aacute;mica, piedra y resina</h3>
                    <p>Materiales reales, no efectos.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Asesoramiento real</h3>
                    <p>Te decimos cu&aacute;l encaja con tu mueble por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavcil" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavcil-storytelling adrihosan-full-width-block">
        <div class="lavcil-storytelling-wrapper">
            <h2>Lavabo cil&iacute;ndrico: forma de tambor, presencia de dise&ntilde;o</h2>
            <div class="storytelling-text">
                <p>El <strong>cil&iacute;ndrico</strong> es la forma con m&aacute;s car&aacute;cter del lavabo sobre encimera. La altura del vaso le da <strong>volumen y capacidad</strong> que un cuenco redondo plano no consigue: la pieza se ve, manda en la est&eacute;tica del mueble y convierte cualquier ba&ntilde;o sencillo en una composici&oacute;n con foco.</p>
                <p>Funciona especialmente bien en <strong>aseos peque&ntilde;os</strong> (a un cliente le entra m&aacute;s la vista que el ba&ntilde;o entero) y en <strong>ba&ntilde;os reformados con mueble suspendido</strong>, donde el cilindro hace de protagonista. Lo tienes en cer&aacute;mica, piedra natural y resina, sobre cualquier <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">lavabo sobre encimera</a> o encimera al uso.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavcil" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos cil&iacute;ndricos</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos cil&iacute;ndricos. Etiqueta sobre ficha: material y color.
            <?php else : ?>
                Selecci&oacute;n de lavabos cil&iacute;ndricos en cer&aacute;mica, piedra y resina. Etiqueta sobre ficha: material y color.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_cilindrico_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavcil-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas con la forma? M&aacute;ndanos foto de tu mueble y te decimos qu&eacute; cil&iacute;ndrico encaja mejor.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20mueble%20para%20que%20me%20digas%20qu%C3%A9%20lavabo%20cil%C3%ADndrico%20combina" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: CILINDRICO VS REDONDO VS OVALADO -->
    <section class="lavcil-comparativa adrihosan-full-width-block">
        <div class="lavcil-comparativa-wrapper">
            <h2>Cil&iacute;ndrico, redondo u ovalado: qu&eacute; lavabo elegir</h2>
            <p class="comparativa-intro">Las tres formas m&aacute;s habituales del sobre encimera y c&oacute;mo encaja cada una.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Forma</th>
                            <th>Silueta</th>
                            <th>Encaja mejor en</th>
                            <th>Sensaci&oacute;n</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Cil&iacute;ndrico</strong></td>
                            <td>Vaso recto, alto</td>
                            <td>Mueble actual, aseo con gracia</td>
                            <td>Volumen, foco</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/"><strong>Redondo</strong></a></td>
                            <td>Cuenco bajo</td>
                            <td>Estilo n&oacute;rdico o vintage</td>
                            <td>Suave, discreto</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-ovalado/"><strong>Ovalado</strong></a></td>
                            <td>Alargado curvo</td>
                            <td>Encimeras anchas</td>
                            <td>Org&aacute;nico, elegante</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si quieres ver toda la familia, est&aacute;n los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">redondos</a>, los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-ovalado/">ovalados</a> y el cat&aacute;logo completo de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">lavabos sobre encimera</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavcil-materials adrihosan-full-width-block">
        <div class="lavcil-materials-wrapper">
            <h2>Materiales y claves del lavabo cil&iacute;ndrico</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales que define cada referencia.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica / porcelana</h3>
                    <p>Resistente, dura, f&aacute;cil de limpiar y la opci&oacute;n m&aacute;s econ&oacute;mica.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>Piedra natural</h3>
                    <p>Vetas &uacute;nicas en cada pieza. Aporta car&aacute;cter rotundo.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Resina / Solid Surface</h3>
                    <p>Ligero, sin juntas, no poroso y reparable con lijado suave.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>&Oslash; 35-43 cm habitual</h3>
                    <p>El di&aacute;metro est&aacute;ndar del cil&iacute;ndrico, sobre la encimera estandar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Con o sin rebosadero</h3>
                    <p>Depende del modelo. Va indicado en cada ficha.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Grifo de ca&ntilde;o alto o mural</h3>
                    <p>El cil&iacute;ndrico pide griferia alta para alcanzar el agua al fondo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavcil-asesoramiento adrihosan-full-width-block">
        <div class="lavcil-asesoramiento-wrapper">
            <h2>C&oacute;mo montar tu lavabo cil&iacute;ndrico</h2>
            <p class="asesoramiento-intro">Cuatro pasos para que la pieza llegue lista y encaje en tu reforma.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide tu encimera</strong> o mueble (la altura habitual del lavabo terminado es 85-90 cm).</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Elige forma y material</strong>: cer&aacute;mica, piedra, resina o m&aacute;rmol.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Escoge el grifo</strong>: ca&ntilde;o alto sobre encimera o grifer&iacute;a mural.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te <strong>confirmamos v&aacute;lvula y rebosadero</strong> seg&uacute;n modelo por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida concreta o forma especial? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20cil%C3%ADndrico%20y%20grifo%20a%20juego" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavcil-related adrihosan-full-width-block">
        <div class="lavcil-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">Lavabo redondo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-ovalado/">Lavabo ovalado</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-piedra/">Lavabo de piedra</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifo de lavabo</a>
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

    <!-- 12. FAQs (10 preguntas, NO json-ld - Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo cil&iacute;ndrico</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es un lavabo cil&iacute;ndrico?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un <strong>lavabo cil&iacute;ndrico</strong> es un lavabo sobre encimera con forma de tambor: <strong>cuerpo recto y alto</strong>, en lugar del cuenco plano que tienen los redondos. Esa altura le da volumen, capacidad y mucha presencia visual.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;En qu&eacute; se diferencia del lavabo redondo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El <strong>redondo</strong> es un <strong>cuenco bajo y suave</strong>; el <strong>cil&iacute;ndrico</strong> es un <strong>vaso recto y alto</strong>. La diferencia es de silueta y de car&aacute;cter: el cil&iacute;ndrico se ve, marca; el redondo es m&aacute;s discreto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas habituales tiene?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El di&aacute;metro habitual es de <strong>35 a 43 cm</strong> y la altura entre 12 y 18 cm aproximadamente. Cada ficha de producto detalla las cotas exactas del modelo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a va bien con un lavabo cil&iacute;ndrico?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Por su altura, va bien con <strong>grifer&iacute;a de ca&ntilde;o alto sobre encimera</strong> o con un <strong>grifo mural</strong>. Un grifo est&aacute;ndar de lavabo se queda corto y no llega al agua al fondo del vaso.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Va sobre cualquier mueble o encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: el lavabo cil&iacute;ndrico se apoya sobre cualquier <strong>encimera o mueble plano</strong> con el agujero de desag&uuml;e centrado. La altura final del lavabo (mueble + lavabo) deber&iacute;a quedar entre <strong>85 y 90 cm</strong> para uso c&oacute;modo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Lleva rebosadero?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Depende del modelo. Algunos cil&iacute;ndricos <strong>llevan rebosadero</strong> (orificio superior que evita desbordes); otros van <strong>sin &eacute;l</strong> por est&eacute;tica m&aacute;s limpia. Lo indicamos en cada ficha y lo confirmamos por WhatsApp antes del pedido.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;En qu&eacute; materiales se fabrica?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Tres principales: <strong>cer&aacute;mica/porcelana</strong> (resistente, econ&oacute;mica), <strong>piedra natural</strong> (vetas &uacute;nicas, m&aacute;s car&aacute;cter) y <strong>resina/Solid Surface</strong> (no poroso, ligero, reparable). Hay alguna pieza puntual en m&aacute;rmol.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Lavabo o lavamanos cil&iacute;ndrico: es lo mismo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, son la misma pieza con dos nombres. "<strong>Lavamanos cil&iacute;ndrico</strong>" se usa m&aacute;s para piezas peque&ntilde;as de aseo, pero todo el cat&aacute;logo vale busques la palabra que busques.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is uno a medida?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, en <strong>Solid Surface</strong> con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>. T&uacute; das medida y forma y lo recibes en <strong>20-30 d&iacute;as</strong>.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda la pen&iacute;nsula y financiamos en <strong>3 meses sin intereses</strong>. Si quieres confirmar plazo o coste para tu zona, escr&iacute;benos al WhatsApp 96 195 71 36.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Sigues con dudas? Te decimos qu&eacute; cil&iacute;ndrico encaja.</h2><p>Soy Ricardo. M&aacute;ndame foto de tu mueble o encimera y te digo qu&eacute; lavabo cil&iacute;ndrico combina mejor con tu ba&ntilde;o.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20cil%C3%ADndrico%20que%20combine%20con%20mi%20mueble" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
