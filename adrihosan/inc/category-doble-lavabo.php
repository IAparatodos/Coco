<?php
/**
 * Category: Doble lavabo (ID: 2654) - PAGINA PUENTE
 *
 * Subcategoria del silo Lavabos (parent 90). Solo 2 productos.
 *
 * REGLA DE ORO (estrategia SEO):
 *   La SERP de "doble lavabo" esta dominada por "mueble de bano doble" y
 *   "encimera de doble seno" (Leroy 1.178 refs, casi todos muebles), no
 *   por el lavabo suelto. Adrihosan tiene 2 lavabos sueltos de doble seno
 *   y 53 encimeras de doble seno -> esta pagina NO es de dinero, es PUENTE.
 *
 *   El angulo es: captar el long-tail del lavabo suelto con los 2 productos
 *   y FUNNELIZAR la intencion de conjunto hacia encimera-bano-doble-seno
 *   (donde Adrihosan SI tiene catalogo grande) y hacia muebles suspendidos.
 *   Pagina corta, honesta. No inflar con relleno.
 *
 * Por eso el wireframe pide un BLOQUE PUENTE destacado (seccion 3) justo
 * tras el hero, con 2 tarjetas grandes (encimera-doble-seno + muebles-
 * suspendidos), y un CTA1 a mitad de pagina que reconoce abiertamente
 * "pocas opciones aqui, mira la encimera de doble seno con 50+ modelos".
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (banos compartidos, uso
 * simultaneo, simetria). La SERP lo dice literal: "ideal para parejas
 * y familias".
 *
 * Angulo unico de Adrihosan: aclarar la confusion "doble lavabo" vs
 * "encimera de doble seno" vs "dos lavabos sueltos" y resolverla en
 * UN CLIC.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Doble lavabo"). NUNCA <h1>
 *   hardcodeado.
 * - Materiales REALES: Solid Surface/resina, ceramica/porcelana, piedra.
 *   NADA inventado (sin cuarzo ni granito).
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo
 *   Solidker linea propia a medida).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - El bloque puente (seccion 3) va destacado y ARRIBA, justo tras el hero.
 * - Contacto: bloque estandar (6 opciones). Email destacado del briefing:
 *   comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781 (con 2 productos rendira poco;
 *   se mantiene por coherencia del silo).
 * - Texto de las 9 FAQs: EXACTO del briefing/Archivo 2 (palabra por
 *   palabra para que el schema FAQPage de Rank Math no diverja del HTML).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2654 - DOBLE LAVABO (pagina puente)
// ============================================================================

function adrihosan_categoria_doble_lavabo_contenido_superior() {
    $term   = get_term( 2654, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/doble-lavabo-moderno-suspendido-mueble-madera-espejo-iluminado.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Doble lavabo' ); ?></h1>
            <p class="hero-tagline">La soluci&oacute;n para ba&ntilde;os compartidos: dos senos, cero esperas.</p>
            <div class="hero-buttons">
                <a href="#catalogo-doblelav" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20doble%20lavabo%20o%20una%20encimera%20de%20doble%20seno" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>doble lavabo</strong> da un puesto a cada uno y orden visual a tu ba&ntilde;o. Aqu&iacute; tienes los lavabos de doble seno sueltos; si buscas el conjunto con encimera y mueble, te llevamos al sitio exacto en un clic.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128101;</div>
                    <h3>Pensado para compartir</h3>
                    <p>Un seno para cada uno.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Solid Surface, resina y cer&aacute;mica</h3>
                    <p>Materiales reales del cat&aacute;logo.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te decimos qu&eacute; encaja</h3>
                    <p>Conjunto a medida por WhatsApp.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Financiaci&oacute;n en 3 meses sin intereses.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. BLOQUE PUENTE (lo MAS IMPORTANTE de la pagina) -->
    <section class="doblelav-puente adrihosan-full-width-block">
        <div class="doblelav-puente-wrapper">
            <h2>&iquest;Buscas el conjunto completo?</h2>
            <p class="doblelav-puente-lead">Estas dos rutas te llevan al cat&aacute;logo grande de Adrihosan para reformas con doble seno.</p>
            <div class="doblelav-puente-grid">
                <a class="doblelav-puente-card" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">
                    <span class="doblelav-puente-icon">&#129526;</span>
                    <h3>&iquest;Quieres el conjunto completo? Encimera de doble seno</h3>
                    <p>53 modelos con los dos senos integrados en la encimera. Lista para montar sobre mueble.</p>
                    <span class="doblelav-puente-link">Ver encimeras de doble seno &rarr;</span>
                </a>
                <a class="doblelav-puente-card" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/">
                    <span class="doblelav-puente-icon">&#128205;</span>
                    <h3>M&oacute;ntalo sobre mueble suspendido</h3>
                    <p>Muebles con anchos a partir de 120 cm para que entren dos senos c&oacute;modos y el suelo quede despejado.</p>
                    <span class="doblelav-puente-link">Ver muebles suspendidos &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. FILTROS FE PRO (silo lavabos, id 428781) -->
    <div id="destino-filtro-adria-doblelav" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 4. STORYTELLING -->
    <section class="doblelav-storytelling adrihosan-full-width-block">
        <div class="doblelav-storytelling-wrapper">
            <h2>Doble lavabo: un puesto para cada uno</h2>
            <div class="storytelling-text">
                <p>El <strong>doble lavabo</strong> evita esperas en los ba&ntilde;os de parejas y familias: cada uno tiene su seno, su grifo y su zona de cosm&eacute;tica. No es solo comodidad, tambi&eacute;n es <strong>simetr&iacute;a visual</strong>: dos piezas iguales centran el mueble y dan orden a la composici&oacute;n.</p>
                <p>Importante para no confundirte: el doble seno puede venir como <strong>pieza suelta</strong> (un lavabo unico con dos senos, lo que ves en esta p&aacute;gina) o como <strong>encimera con los dos senos integrados</strong>. La <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">encimera de doble seno</a> es el formato que m&aacute;s vendemos: m&aacute;s opciones de medida, color y material.</p>
            </div>
        </div>
    </section>

    <!-- 5. TITULO CATALOGO -->
    <div id="catalogo-doblelav" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos de doble seno</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos de doble seno sueltos del cat&aacute;logo.
            <?php else : ?>
                Selecci&oacute;n actual de lavabos de doble seno sueltos.
            <?php endif; ?>
        </p>
    </div>

    <!-- 6. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_doble_lavabo_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 7. CTA INTERMEDIO: redirige al destino fuerte -->
    <section class="doblelav-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Pocas opciones aqu&iacute;? Mira la <strong>encimera de doble seno con 50+ modelos</strong> &mdash; encimera y senos integrados en una sola pieza.</p>
            <a class="cta-mid-btn" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">Ver encimeras de doble seno</a>
        </div>
    </section>

    <!-- 8. COMPARATIVA: DOBLE LAVABO VS ENCIMERA DOBLE SENO VS DOS LAVABOS SUELTOS -->
    <section class="doblelav-comparativa adrihosan-full-width-block">
        <div class="doblelav-comparativa-wrapper">
            <h2>Doble lavabo, encimera de doble seno o dos lavabos sueltos</h2>
            <p class="comparativa-intro">Tres formas de resolver un ba&ntilde;o compartido. La que m&aacute;s opciones ofrece es la encimera de doble seno.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Opci&oacute;n</th>
                            <th>Qu&eacute; es</th>
                            <th>Cu&aacute;ndo elegirla</th>
                            <th>D&oacute;nde verla</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Doble lavabo</strong></td>
                            <td>Una pieza con dos senos</td>
                            <td>Ba&ntilde;o con encimera propia</td>
                            <td>Aqu&iacute; (2 modelos)</td>
                        </tr>
                        <tr>
                            <td><strong>Encimera de doble seno</strong></td>
                            <td>Encimera con senos integrados</td>
                            <td>Conjunto a juego, sin juntas</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">Encimera de doble seno</a></td>
                        </tr>
                        <tr>
                            <td><strong>Dos lavabos sueltos</strong></td>
                            <td>Dos piezas independientes</td>
                            <td>Encimera ancha y simetr&iacute;a</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">El destino fuerte de Adrihosan es la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">encimera de doble seno</a>: 53 modelos en cer&aacute;mica, resina y Solid Surface, sin juntas y listos para colocar.</p>
        </div>
    </section>

    <!-- 9. CLAVES / PROPIEDADES -->
    <section class="doblelav-materials adrihosan-full-width-block">
        <div class="doblelav-materials-wrapper">
            <h2>Claves del lavabo de doble seno</h2>
            <p class="materials-intro">Las 6 propiedades reales del producto sin inventos.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface / resina</h3>
                    <p>El material dominante. Sin juntas entre la zona de senos y el resto.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica / porcelana</h3>
                    <p>Resistente, f&aacute;cil de limpiar, econ&oacute;mica.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>Piedra natural</h3>
                    <p>Pieza con personalidad para reformas con car&aacute;cter.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>Ancho desde ~120 cm</h3>
                    <p>Lo m&iacute;nimo para que los dos senos queden c&oacute;modos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Dos grifos o grifer&iacute;a empotrada</h3>
                    <p>Una grifer&iacute;a por seno, sobre la encimera o mural.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128205;</span>
                    <h3>Suspendido o sobre mueble</h3>
                    <p>Va anclado a pared o apoyado sobre un mueble ancho.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. ASESORAMIENTO: 4 PASOS -->
    <section class="doblelav-asesoramiento adrihosan-full-width-block">
        <div class="doblelav-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu doble lavabo</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar y no quedarte corto de ancho.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide el ancho</strong> de la pared donde ir&aacute;: m&iacute;nimo ~120 cm.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Decide formato</strong>: pieza suelta o <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">encimera de doble seno</a>.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Elige material</strong>: Solid Surface, cer&aacute;mica o piedra.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te ayudamos a <strong>cuadrar mueble y grifer&iacute;a</strong> por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida concreta? Fabricamos encimeras de doble seno a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20decidir%20entre%20doble%20lavabo%20y%20encimera%20de%20doble%20seno" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 11. CATEGORIAS RELACIONADAS -->
    <section class="doblelav-related adrihosan-full-width-block">
        <div class="doblelav-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">Encimera de doble seno</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimeras-de-resina/">Encimeras de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-bano-suspendidos/">Muebles suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
            </div>
        </div>
    </section>

    <?php
    // 12. BLOQUE DE TEXTO ESTANDAR DE CATEGORIA (editable desde WP admin)
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

    <!-- 13. FAQs (9 preguntas EXACTAS del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el doble lavabo</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; diferencia hay entre un doble lavabo y una encimera de doble seno?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El doble lavabo es la pieza del lavabo con dos senos. La encimera de doble seno integra esos dos senos en una encimera continua lista para montar sobre el mueble. Si quieres el conjunto a juego, la encimera de doble seno te da m&aacute;s opciones.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es lo mismo doble lavabo que lavabo de doble poza o lavamanos doble?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, son nombres para la misma idea: un lavabo con dos senos. Doble poza y lavamanos doble se usan en algunas zonas, pero buscan lo mismo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; ancho m&iacute;nimo necesito para un doble lavabo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Lo habitual es a partir de 120 cm de ancho para que los dos senos queden c&oacute;modos. Por debajo de esa medida suele compensar m&aacute;s un solo lavabo amplio.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cabe un doble lavabo en un ba&ntilde;o mediano?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Puede caber si tienes al menos 120 cm de pared libre. En ba&ntilde;os medianos, un modelo suspendido despeja el suelo y da sensaci&oacute;n de amplitud.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material son los lavabos de doble seno?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El m&aacute;s demandado es el Solid Surface o resina con cargas minerales, sin juntas y f&aacute;cil de limpiar. Tambi&eacute;n los hay de cer&aacute;mica, porcelana y piedra natural.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Necesito un mueble especial para un doble lavabo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Necesitas un mueble o encimera del ancho adecuado, normalmente de 120 cm o m&aacute;s. Los muebles suspendidos son la opci&oacute;n m&aacute;s usada por su limpieza visual.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Puedo poner dos lavabos sueltos en vez de uno doble?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. Dos lavabos sobre encimera sobre una superficie ancha dan el mismo resultado sim&eacute;trico y a veces m&aacute;s flexibilidad de dise&ntilde;o.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a lleva un doble lavabo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Lleva dos griferias, una por seno. Seg&uacute;n el modelo pueden ser grifos de repisa o griferia empotrada a la pared.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a y te asesoramos por WhatsApp en el 96 195 71 36 o por email para cuadrar lavabo, mueble y encimera.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 14. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;No lo ves claro? Doble lavabo o encimera de doble seno.</h2><p>Soy Ricardo. M&aacute;ndame foto y medidas del ba&ntilde;o y te digo si te conviene un doble lavabo suelto, una encimera de doble seno o dos lavabos sobre encimera.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20no%20s%C3%A9%20si%20me%20conviene%20un%20doble%20lavabo%20o%20una%20encimera%20de%20doble%20seno" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
