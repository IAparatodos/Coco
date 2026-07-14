<?php
/**
 * Category: Lavabos (ID: 90)
 *
 * RAIZ + pilar del silo Lavabos (sanitarios > lavabos). 203 productos.
 * Keyword principal 27.100/mes + cluster comercial: lavabo de bano 1.900,
 * lavabos para bano 1.000, lavamanos 3.600, lavabo bano 2.400.
 *
 * Intencion SERP: navegacional-comercial. Hub que segmenta por:
 *   - tipo de instalacion (sobre encimera, suspendido, de pie, doble seno)
 *   - material (ceramica, piedra, resina/solid surface, marmol, terrazo, metalico)
 *
 * Hueco a explotar (vs IKEA/Roca/Banoidea/Hudson Reed/etc):
 *   - variedad real (200+ modelos en un solo sitio)
 *   - asesoramiento humano por WhatsApp
 *   - Solid Surface a medida (linea propia Solidker, por colada)
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (estilo + durabilidad).
 * SECUNDARIO: Reformista Primerizo (miedo a equivocarse de material).
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabos"). NUNCA hardcodear <h1>.
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Materiales REALES: Solid Surface/Resina, Ceramica/Porcelana, Marmol,
 *   Piedra natural, Terrazo, Metalico. NO inventar (sin cuarzo ni granito
 *   tecnologico).
 * - Solidker = linea propia, Solid Surface por colada, a medida, 20-30 dias.
 *   Adrihosan distribuye y fabrica a medida su linea. NO instala.
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - Contacto: bloque estandar (6 opciones igual que el resto del silo).
 * - Filter Set FE id: 428781 (silo Lavabos, exclusivo).
 * - Enlaces internos SOLO a URLs verificadas en este wireframe. Las cat
 *   podadas (lavabo-120, lavabo-bajo-encimera, lavabos-blancos-modernos,
 *   etc.) redirigen 301 -> no enlazar.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 90 - LAVABOS (raiz + pilar del silo Lavabos)
// ============================================================================

function adrihosan_categoria_lavabos_contenido_superior() {
    $term_90   = get_term( 90, 'product_cat' );
    $n_lavabos = ( $term_90 && ! is_wp_error( $term_90 ) ) ? (int) $term_90->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/lavabo-120-cm-1-seno.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabos' ); ?></h1>
            <p class="hero-tagline">El lavabo manda en el ba&ntilde;o. Elige el tuyo entre m&aacute;s de 200 modelos.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavabos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20para%20mi%20ba%C3%B1o%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Encuentra el <strong>lavabo</strong> perfecto para tu ba&ntilde;o entre cientos de modelos: sobre encimera, suspendidos, de pie o a medida, en cer&aacute;mica, piedra, resina o solid surface. Te ayudamos a elegir el que combina con tu mueble y tu presupuesto, y te lo llevamos a toda Espa&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>+200 modelos</h3>
                    <p>Todos los tipos y materiales en un mismo sitio.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Solid Surface a medida</h3>
                    <p>L&iacute;nea propia Solidker, fabricado por colada.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Asesoramiento real</h3>
                    <p>Te atendemos por WhatsApp, como en la tienda de siempre.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Y 3 meses sin intereses para financiar tu reforma.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo Lavabos, id 428781) -->
    <div id="destino-filtro-adria-lavabos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING: EL PROTAGONISTA DEL BANO -->
    <section class="lavabos-storytelling adrihosan-full-width-block">
        <div class="lavabos-storytelling-wrapper">
            <h2>Tu lavabo, el protagonista de un ba&ntilde;o bien resuelto</h2>
            <div class="storytelling-text">
                <p>El <strong>lavabo</strong> no es solo d&oacute;nde te lavas las manos: marca el estilo del ba&ntilde;o y condiciona el mueble, la grifer&iacute;a y la encimera. Por eso conviene elegirlo con cabeza: primero el <strong>tipo de instalaci&oacute;n</strong> seg&uacute;n tu espacio, despu&eacute;s el <strong>material</strong> seg&uacute;n el uso y, al final, el color.</p>
                <p>Cada decisi&oacute;n empuja a la siguiente. Para no equivocarte, mira primero los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">lavabos sobre encimera</a> (los m&aacute;s vendidos) y c&oacute;mo encajan con tu <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/">encimera de ba&ntilde;o</a>. Y si dudas, mejor preguntar antes que devolver.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavabos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_lavabos > 0 ) : ?>
                Ver los <?php echo (int) $n_lavabos; ?> lavabos. Etiqueta sobre la ficha: material y tipo cuando est&aacute;n disponibles.
            <?php else : ?>
                Cat&aacute;logo completo de lavabos. Etiqueta sobre la ficha: material y tipo cuando est&aacute;n disponibles.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabos_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavabos-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes cu&aacute;l encaja con tu ba&ntilde;o? Escr&iacute;benos por WhatsApp con una foto y te decimos qu&eacute; lavabo combina.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20digas%20qu%C3%A9%20lavabo%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: TIPOS DE LAVABO -->
    <section class="lavabos-comparativa adrihosan-full-width-block">
        <div class="lavabos-comparativa-wrapper">
            <h2>Tipos de lavabo: cu&aacute;l elegir seg&uacute;n tu ba&ntilde;o</h2>
            <p class="comparativa-intro">Lo que cambia entre los cuatro grandes formatos del cat&aacute;logo.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Tipo de lavabo</th>
                            <th>C&oacute;mo se instala</th>
                            <th>Ideal para</th>
                            <th>Necesita</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/"><strong>Sobre encimera</strong></a></td>
                            <td>Apoyado encima del mueble o encimera</td>
                            <td>Ba&ntilde;os con estilo, efecto decorativo</td>
                            <td>Encimera o mueble + grifo (mural o alto)</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/"><strong>Suspendido</strong></a></td>
                            <td>Anclado a la pared, sin mueble debajo</td>
                            <td>Ba&ntilde;os peque&ntilde;os, est&eacute;tica ligera</td>
                            <td>Buen anclaje a pared</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pie/"><strong>De pie</strong></a></td>
                            <td>Columna que oculta el desag&uuml;e</td>
                            <td>Aseos y ba&ntilde;os cl&aacute;sicos</td>
                            <td>Solo toma de agua y desag&uuml;e</td>
                        </tr>
                        <tr>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/doble-lavabo/"><strong>Doble seno</strong></a></td>
                            <td>Dos senos en una pieza</td>
                            <td>Ba&ntilde;os compartidos, parejas</td>
                            <td>Encimera o mueble ancho (&ge;120 cm)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">El tipo manda tanto como la est&eacute;tica. Si dudas con la instalaci&oacute;n o el ancho de tu mueble, m&aacute;ndanos foto por WhatsApp y te orientamos antes de comprar.</p>
        </div>
    </section>

    <!-- 8. MATERIALES REALES -->
    <section class="lavabos-materials adrihosan-full-width-block">
        <div class="lavabos-materials-wrapper">
            <h2>Materiales de lavabo: en qu&eacute; se diferencian</h2>
            <p class="materials-intro">Los seis materiales reales del cat&aacute;logo. Cada uno tiene su uso ideal y su mantenimiento.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface / Resina</h3>
                    <p>No poroso, reparable, tacto c&aacute;lido. Se fabrica a medida y en cualquier forma. <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Ver lavabos de resina</a>.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica / Porcelana</h3>
                    <p>El cl&aacute;sico: muy duro, resistente al rayado, f&aacute;cil de limpiar, econ&oacute;mico.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128137;</span>
                    <h3>M&aacute;rmol</h3>
                    <p>Piedra natural, pieza &uacute;nica con vetas, alto impacto visual. <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-piedra/">Ver lavabos de piedra y m&aacute;rmol</a>.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>Piedra natural</h3>
                    <p>Car&aacute;cter r&uacute;stico, cada pieza distinta, ideal para ba&ntilde;os con alma. <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-piedra/">Ver lavabos de piedra</a>.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9881;</span>
                    <h3>Terrazo</h3>
                    <p>Granito reconstituido con chinas, est&eacute;tica retro de tendencia. <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lav-material-terrazo/">Ver lavabos de terrazo</a>.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129534;</span>
                    <h3>Met&aacute;lico</h3>
                    <p>Acabados especiales (cobre, lat&oacute;n, inox) para piezas de dise&ntilde;o.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: LAVABOS A MEDIDA EN SOLID SURFACE (SOLIDKER) -->
    <section class="lavabos-asesoramiento adrihosan-full-width-block">
        <div class="lavabos-asesoramiento-wrapper">
            <h2>Lavabos a medida en Solid Surface</h2>
            <p class="asesoramiento-intro">
                Si no encuentras tu medida en el cat&aacute;logo, te lo fabricamos con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>. Cuatro pasos.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Nos cuentas</strong> las medidas de tu mueble o encimera por WhatsApp.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Te asesoramos</strong> sobre forma, n&uacute;mero de senos y acabado.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>Fabricamos</strong> tu lavabo en Solid Surface por colada (l&iacute;nea propia Solidker).</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Lo recibes</strong> en 20-30 d&iacute;as, listo para instalar.</p>
                </div>
            </div>

            <p class="asesoramiento-extra-link">Nota: Adrihosan distribuye y fabrica a medida su l&iacute;nea propia; <strong>no instala</strong>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20un%20lavabo%20a%20medida%20en%20Solid%20Surface%20de%20vuestra%20l%C3%ADnea%20Solidker" class="bumper-btn" target="_blank">Pedir lavabo a medida</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavabos-related adrihosan-full-width-block">
        <div class="lavabos-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-minimalista/">Lavabos modernos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">Lavabos peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-azul/">Lavabo azul</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-gris/">Lavabo gris</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de ba&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/">Encimeras de ba&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/">Espejos de ba&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifos de lavabo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-rustico/">Lavabos r&uacute;sticos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-exterior/">Lavabos de exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-cilindrico/">Lavabos cil&iacute;ndricos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">Lavabos redondos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-ovalado/">Lavabos ovalados</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-baratos/">Lavabos baratos</a>
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

    <!-- 12. FAQs (8 preguntas, NO json-ld - Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre lavabos</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipo de lavabo elijo seg&uacute;n mi ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Si tienes poco espacio, un <strong>suspendido</strong> o <strong>de pie</strong> despeja el suelo; si buscas efecto decorativo, uno <strong>sobre encimera</strong>; para ba&ntilde;os compartidos, un <strong>doble seno</strong>. La instalaci&oacute;n manda tanto como la est&eacute;tica.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; material de lavabo es m&aacute;s resistente?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La <strong>cer&aacute;mica</strong> es la m&aacute;s dura frente al rayado y la m&aacute;s econ&oacute;mica. El <strong>solid surface</strong> es no poroso y reparable (las marcas se lijan). La <strong>piedra</strong> y el <strong>m&aacute;rmol</strong> son &uacute;nicos pero piden m&aacute;s mantenimiento.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; lavabo combina con mi mueble o encimera?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un lavabo <strong>blanco</strong> encaja con casi todo; los de <strong>piedra o terrazo</strong> lucen sobre madera; los <strong>negros</strong> y de colores piden un mueble sobrio. Si nos pasas una foto por WhatsApp, te decimos qu&eacute; combina.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un lavabo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Hay desde lavabos cer&aacute;micos econ&oacute;micos hasta piezas de piedra o solid surface a medida. En el cat&aacute;logo ver&aacute;s el precio de cada modelo, y puedes financiarlo en <strong>3 meses sin intereses</strong>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is lavabos a medida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Fabricamos en <strong>Solid Surface</strong> por colada con nuestra l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>: t&uacute; das las medidas y la forma, y lo recibes en <strong>20-30 d&iacute;as</strong>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; lavabo va bien para un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los <strong>suspendidos de fondo reducido</strong> y los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">lavabos peque&ntilde;os</a> ganan espacio visual y de suelo. Mira la subcategor&iacute;a para ver los modelos que caben en aseos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El lavabo incluye grifo y desag&uuml;e?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Salvo que la ficha lo indique, el lavabo se vende solo. El grifo y la v&aacute;lvula se eligen aparte para ajustarlos a tu estilo: tenemos <a href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">grifos de lavabo</a> a juego.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, enviamos a toda la pen&iacute;nsula. Si tienes dudas con plazos o con tu zona, escr&iacute;benos por WhatsApp al 96 195 71 36 y te lo confirmamos antes de comprar.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es lo mismo un lavabo que un lavamanos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, son la misma pieza: <strong>lavabo</strong> y <strong>lavamanos</strong> son dos nombres para el sanitario donde te lavas manos y cara. "Lavamanos" se usa m&aacute;s en algunas zonas y para piezas peque&ntilde;as de aseo, pero todo nuestro cat&aacute;logo &mdash;sobre encimera, suspendidos, de pie, de piedra, resina o cer&aacute;mica&mdash; vale busques la palabra que busques. Si dudas qu&eacute; modelo encaja en tu ba&ntilde;o, escr&iacute;benos por WhatsApp y te asesoramos.</p>
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
                <div><h2>&iquest;Sigues con dudas para elegir lavabo?</h2><p>Soy Ricardo. M&aacute;ndame foto de tu ba&ntilde;o y te digo qu&eacute; tipo y material de lavabo combina con tu mueble, tu encimera y tu presupuesto.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20para%20mi%20ba%C3%B1o%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
