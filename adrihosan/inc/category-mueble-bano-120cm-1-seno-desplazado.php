<?php
/**
 * Category: Mueble de bano 120 cm 1 seno desplazado (ID: 5396)
 *
 * Subcategoria del silo Muebles de bano (parent 99). 39 productos.
 * Precio 536-2.506 EUR.
 *
 * Keyword lider: "mueble bano 120 cm 1 seno desplazado" (cluster propio
 * 170/mes + long-tail "desplazado izquierda" 70+50; captura cola de
 * "120 cm 1 seno" del cluster 880/mes).
 *
 * Intencion SERP: transaccional pura. Rankean categorias de tienda
 * (Habitium, TodoMueblesDeBano, Decorabano, TheBathPoint) y fichas de
 * producto. Habitium vende el mismo MONDIAZ ERIN que tenemos, a 2.286 EUR.
 *
 * Hueco a explotar: nadie explica como decidir izquierda o derecha
 * (puerta, mampara, bajante existente en reforma) ni da precios claros.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (temen que no combine,
 * quieren duradero y a juego). SECUNDARIO: Reformista Primerizo (miedo
 * a equivocarse de lado).
 *
 * Lineas reales:
 *   - Adrihosan Solid Surface: Blanco mate, Wood, Vica, Antracita, Vic negro
 *   - MONDIAZ: VICA, AIVY (con espejo incluido), RIVA, ERIN, ALAN,
 *     ALAN-DLUX, LAGOM (premium), LUSH, BUKLA
 *   - Lavabo integrado en Solid Surface, 1-4 cajones, suspendidos y de
 *     suelo, seno Izquierda o Derecha
 *
 * REGLAS DURAS (briefing julio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Mueble de bano 120 cm 1 seno
 *   desplazado"). NUNCA <h1> hardcodeado.
 * - Materiales REALES: Solid Surface (= resina, mismo material, NUNCA
 *   separar). PROHIBIDO inventar cuarzo, granito o marmol.
 * - Headings sin "elegancia", "funcionalidad", "sofisticacion" ni la
 *   conjuncion "Y" suelta.
 * - Adrihosan = DISTRIBUIDOR. NUNCA fabricante ni instalador (Solidker
 *   es la linea propia a medida por colada, 20-30 dias).
 * - Contacto: bloque estandar. WhatsApp 96 195 71 36 + email.
 * - Financiacion = 3 meses sin intereses (NUNCA otra cifra).
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage). El texto
 *   de las 9 FAQs es EXACTO el del Archivo 2 (bloque 3), palabra por
 *   palabra, para que el bloque visible y el schema coincidan.
 *
 * FILTER SET: 427306, el de la familia muebles de bano (per CLAUDE.md:
 *   IDs 99, 100, 101, 103, 2421, 2428, 2528 lo usan). Confirmar con
 *   Ricardo antes de publicar si esta cat necesitara uno propio.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 5396 - MUEBLE DE BANO 120 CM 1 SENO DESPLAZADO
// ============================================================================

// Filter Set 427306 = el de la familia muebles de bano.
if ( ! defined( 'ADRIHOSAN_M120D_FILTER_SET' ) ) {
    define( 'ADRIHOSAN_M120D_FILTER_SET', '427306' );
}

function adrihosan_categoria_mueble_120_desplazado_contenido_superior() {
    $term   = get_term( 5396, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/07/Mueble-bano-120-cm-1-seno-desplazado-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Mueble de ba&ntilde;o 120 cm 1 seno desplazado' ); ?></h1>
            <p class="hero-tagline">Lavabo generoso a un lado. Encimera libre al otro.</p>
            <div class="hero-buttons">
                <a href="#catalogo-m120d" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20mueble%20de%20ba%C3%B1o%20de%20120%20cm%20con%201%20seno%20desplazado" class="hero-btn secondary" target="_blank">&iquest;Izquierda o derecha? Consultar</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Tu <strong>mueble ba&ntilde;o 120 cm 1 seno desplazado</strong> con lavabo de Solid Surface integrado, a izquierda o a derecha. 39 modelos en stock, de 1 a 4 cajones, suspendidos o de suelo. Elige el lado que encaja en tu ba&ntilde;o y estrena encimera despejada.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129517;</div>
                    <h3>Izquierda o derecha</h3>
                    <p>El mismo modelo, en los dos lados.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129508;</div>
                    <h3>Lavabo Solid Surface</h3>
                    <p>Sin juntas, no poroso, reparable.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128230;</div>
                    <h3>39 modelos en stock</h3>
                    <p>Env&iacute;o a toda Espa&ntilde;a.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128179;</div>
                    <h3>3 meses sin intereses</h3>
                    <p>Financia tu reforma sin sustos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (familia muebles de bano) -->
    <div id="destino-filtro-adria-m120d" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="' . ADRIHOSAN_M120D_FILTER_SET . '"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="m120d-storytelling adrihosan-full-width-block">
        <div class="m120d-storytelling-wrapper">
            <h2>Mueble ba&ntilde;o 120 cm 1 seno desplazado: la encimera vuelve a ser tuya</h2>
            <div class="storytelling-text">
                <p>Desplazar el seno hacia un lado convierte <strong>60-70 cm de encimera corrida en superficie &uacute;til de verdad</strong>: el secador, la cosm&eacute;tica, la cesta de los peques o simplemente aire. El lavabo va integrado en la propia encimera de Solid Surface, sin juntas donde se acumule la cal y con un tacto mate sedoso.</p>
                <p>Y en plena reforma tiene un truco extra: si tu bajante ya sale descentrada, eliges el lado del seno que coincide con el desag&uuml;e existente <strong>sin abrir la pared para mover fontaner&iacute;a</strong>. Comb&iacute;nalo con el resto de la colecci&oacute;n de <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">muebles de ba&ntilde;o</a> para que todo case.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-m120d" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de muebles de 120 cm con seno desplazado</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> muebles con seno desplazado. Etiqueta sobre ficha: seno izquierda o derecha, con espejo (AIVY) o premium (LAGOM).
            <?php else : ?>
                Muebles de 120 cm con seno a izquierda o derecha, de 1 a 4 cajones, suspendidos o de suelo.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_mueble_120_desplazado_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="m120d-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">Encuentra el lado que encaja en vuestro ba&ntilde;o: m&aacute;ndanos una foto por WhatsApp y te confirmamos el modelo antes de comprar.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20digas%20qu%C3%A9%20lado%20de%20seno%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: DESPLAZADO VS CENTRADO VS DOBLE -->
    <section class="m120d-comparativa adrihosan-full-width-block">
        <div class="m120d-comparativa-wrapper">
            <h2>Un seno desplazado, centrado o doble: qu&eacute; elegir en 120 cm</h2>
            <p class="comparativa-intro">Lo que gana cada configuraci&oacute;n seg&uacute;n el uso real del ba&ntilde;o.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>1 seno desplazado</th>
                            <th>1 seno centrado</th>
                            <th>Doble seno</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Encimera libre</strong></td>
                            <td>60-70 cm a un lado</td>
                            <td>Repartida en dos mitades</td>
                            <td>M&iacute;nima</td>
                        </tr>
                        <tr>
                            <td><strong>Uso real</strong></td>
                            <td>Pareja con horarios distintos</td>
                            <td>Uso individual</td>
                            <td>Dos a la vez / ni&ntilde;os</td>
                        </tr>
                        <tr>
                            <td><strong>Cajones</strong></td>
                            <td>Hasta 4 corridos</td>
                            <td>Hasta 4</td>
                            <td>Partidos en 2 m&oacute;dulos</td>
                        </tr>
                        <tr>
                            <td><strong>Reforma con bajante descentrada</strong></td>
                            <td>Aprovecha el desag&uuml;e existente</td>
                            <td>Exige mover fontaner&iacute;a</td>
                            <td>Exige dos desag&uuml;es</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si de verdad coincid&iacute;s cada ma&ntilde;ana, mira el <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/doble-lavabo/">doble lavabo</a>. Y si solo buscas la superficie sin mueble debajo, compara con la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-120-cm/">encimera de ba&ntilde;o de 120 cm</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="m120d-materials adrihosan-full-width-block">
        <div class="m120d-materials-wrapper">
            <h2>Claves de un mueble de 120 con lavabo desplazado</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card"><span class="material-icon">&#128207;</span><h3>Ancho 120 cm reales</h3><p>La medida est&aacute;ndar de ba&ntilde;o principal.</p></div>
                <div class="material-card"><span class="material-icon">&#129517;</span><h3>Seno izquierda o derecha</h3><p>El mismo modelo existe en los dos lados.</p></div>
                <div class="material-card"><span class="material-icon">&#129508;</span><h3>Lavabo Solid Surface</h3><p>No poroso: un micro-rayado se repara lijando.</p></div>
                <div class="material-card"><span class="material-icon">&#128230;</span><h3>De 1 a 4 cajones</h3><p>Corridos a todo lo ancho, m&aacute;s capacidad real.</p></div>
                <div class="material-card"><span class="material-icon">&#128205;</span><h3>Suspendido o de suelo</h3><p>Suelo despejado o menos exigencia a la pared.</p></div>
                <div class="material-card"><span class="material-icon">&#127912;</span><h3>Acabados mate</h3><p>Blanco, Wood, Vica, Antracita, Vic negro.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="m120d-asesoramiento adrihosan-full-width-block">
        <div class="m120d-asesoramiento-wrapper">
            <h2>Acierta el lado del seno en 4 pasos</h2>
            <p class="asesoramiento-intro">Del hueco medido al modelo confirmado, sin equivocarte de lado.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide el hueco real</strong> (ancho, fondo, altura de enchufes).</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Localiza tu bajante</strong>: el seno al lado del desag&uuml;e existente ahorra fontaner&iacute;a.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Elige suspendido</strong> (suelo despejado) o de suelo (menos exigencia a la pared).</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>M&aacute;ndanos plano o foto</strong> por WhatsApp 96 195 71 36 y te confirmamos el modelo antes de comprar.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;La medida est&aacute;ndar no encaja? Nuestra l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> fabrica encimeras de Solid Surface a medida por colada en 20-30 d&iacute;as.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20el%20lado%20del%20seno%20de%20mi%20mueble%20de%20120" class="bumper-btn" target="_blank">Confirmar mi modelo</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="m120d-related adrihosan-full-width-block">
        <div class="m120d-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de ba&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/">Suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-con-patas/">Con patas</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/">Espejos con luz</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-120-cm/">Encimeras 120 cm</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/doble-lavabo/">Doble lavabo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifos de lavabo</a>
                <a class="related-pill" href="https://www.adrihosan.com/brand/solidker/">Solidker a medida</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA (aqui aterriza el texto SEO del Archivo 2
    // cuando se aplique en WP admin; si esta vacio, no se pinta).
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

    <!-- 12. FAQs (9 preguntas EXACTAS del Archivo 2, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre muebles de 120 cm con seno desplazado</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es un mueble de ba&ntilde;o con seno desplazado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Es un mueble cuyo lavabo no va centrado sino movido hacia la izquierda o la derecha de la encimera. As&iacute; una parte de la superficie queda libre como zona de apoyo y el mueble mantiene cajones corridos a lo ancho.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es mejor un seno desplazado o doble seno en 120 cm?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Para la mayor&iacute;a de parejas gana el seno desplazado porque casi nunca se usa el lavabo a la vez y la encimera libre se aprovecha a diario. El doble seno compensa cuando dos ni&ntilde;os comparten ba&ntilde;o o cuando los dos coincid&iacute;s cada ma&ntilde;ana a la misma hora.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;C&oacute;mo elijo entre seno a la izquierda o a la derecha?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Coloca el seno en el lado contrario a la puerta o a la mampara para que la zona de agua no estorbe el paso. Si reformas y tu desag&uuml;e ya sale descentrado elige el lado que coincide con la bajante y te ahorras mover fontaner&iacute;a.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un mueble de ba&ntilde;o 120 cm 1 seno desplazado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En Adrihosan los 39 modelos de esta categor&iacute;a van de 536 a 2506 euros seg&uacute;n l&iacute;nea, n&uacute;mero de cajones y acabado. Puedes financiar la compra en 3 meses sin intereses.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material es el lavabo de estos muebles?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El lavabo va integrado en Solid Surface, un material compacto no poroso que tambi&eacute;n se conoce como resina. No acumula cal en juntas, tiene tacto mate sedoso y un micro-rayado se repara con una lijada suave.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Puedo instalar un mueble suspendido de 120 cm en cualquier pared?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Necesitas una pared maciza o con refuerzo capaz de soportar el mueble con el lavabo lleno y el uso diario. Si tu tabique es ligero, los modelos de suelo o con patas apoyan el peso abajo y son la opci&oacute;n segura.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirve un seno desplazado si mi desag&uuml;e ya est&aacute; descentrado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Es justo el caso donde m&aacute;s brilla. Eliges la versi&oacute;n izquierda o derecha que coincide con tu bajante actual y evitas abrir pared o suelo para desplazar la fontaner&iacute;a, con el ahorro que supone en una reforma.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;ntos cajones puede tener un mueble de 120 cm con un seno?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En esta categor&iacute;a encontrar&aacute;s de 1 a 4 cajones. Al ir el seno a un lado, los cajones pueden ser corridos a todo lo ancho, con m&aacute;s capacidad real que dos m&oacute;dulos partidos de 60 cm.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a con seguimiento?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos los 39 modelos a toda Espa&ntilde;a con seguimiento del pedido. Antes de comprar puedes resolver dudas por WhatsApp al 96 195 71 36 o por videollamada viendo el mueble desde nuestro showroom de Valencia.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Dudas entre izquierda o derecha? Te lo resuelvo.</h2><p>Soy Ricardo. M&aacute;ndame una foto de tu ba&ntilde;o (con la puerta, la mampara y d&oacute;nde sale el desag&uuml;e) por WhatsApp y te digo qu&eacute; lado del seno encaja y qu&eacute; modelo pega con tu reforma.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20mueble%20de%20ba%C3%B1o%20de%20120%20cm%20con%201%20seno%20desplazado" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
