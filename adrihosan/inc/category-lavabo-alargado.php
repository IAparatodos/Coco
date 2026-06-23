<?php
/**
 * Category: Lavabo alargado (ID: 2937)
 *
 * Subcategoria del silo Lavabos (parent 90). 84 productos. Categoria
 * real de dinero (no pagina puente).
 *
 * Keyword lider: "lavabo alargado" + co-targets: lavabo rectangular,
 * lavabo Solid Surface rectangular, lavabo alargado sobre encimera.
 * Absorbe ademas la demanda huerfana de "lavabo estrecho y largo" (la
 * antigua categoria lavabo-estrecho se borro y hoy redirige a
 * lavabos-pequenos).
 *
 * Inventario real verificado: dominan los lavabos rectangulares de
 * SOLID SURFACE sobre encimera (series Amarna, Tinis, Luxor, Memfis,
 * Mendes, Florida y la linea TOPI en muchos colores: negro, humo,
 * barro, ocre, lino, blanco).
 *
 * Medidas reales:
 *   - Fondo estrecho: 37-46 cm
 *   - Ancho: 60-80 cm
 *   - Perfil bajo: 10-12 cm
 *
 * Intencion SERP: pieza rectangular de diseno que estiliza el bano
 * sin comerse el fondo. Encaja en:
 *   - encimeras estrechas
 *   - banos alargados
 *   - reformas modernas que buscan color (Solid Surface admite colores)
 *
 * Buyer persona PRIMARIO: Pareja Reformadora con sesgo de diseno
 * (linea recta, color, bano actual).
 *
 * Angulo unico: el lavabo que aprovecha el ancho sin robar fondo,
 * y que viene en color gracias al Solid Surface.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo alargado"). NUNCA <h1>
 *   hardcodeado.
 * - Materiales REALES: Solid Surface/resina (dominante), ceramica/
 *   porcelana, piedra. NADA inventado (sin cuarzo ni granito).
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo
 *   Solidker linea propia a medida).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Contacto: bloque estandar (6 opciones). Email destacado del
 *   briefing: comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781.
 * - Texto de las 9 FAQs: EXACTO del briefing/Archivo 2 (palabra por
 *   palabra para que el schema FAQPage de Rank Math no diverja del HTML).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2937 - LAVABO ALARGADO (subcategoria del silo Lavabos)
// ============================================================================

function adrihosan_categoria_lavabo_alargado_contenido_superior() {
    $term   = get_term( 2937, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/lavabo-alargado-blanco-doble-seno-bano-moderno.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo alargado' ); ?></h1>
            <p class="hero-tagline">L&iacute;nea recta, poco fondo y el color que tu ba&ntilde;o ped&iacute;a.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavalar" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20alargado%20para%20mi%20ba%C3%B1o" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo alargado</strong> estiliza el ba&ntilde;o sin comerse el fondo: forma rectangular, perfil bajo y la anchura justa para una encimera moderna o un ba&ntilde;o estrecho. La mayor&iacute;a en Solid Surface, sin juntas y en muchos colores.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Poco fondo</h3>
                    <p>Encaja en encimeras estrechas y ba&ntilde;os alargados.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Solid Surface en color</h3>
                    <p>Negro, humo, barro, ocre, lino o blanco.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a medir</h3>
                    <p>Ancho y fondo por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavalar" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavalar-storytelling adrihosan-full-width-block">
        <div class="lavalar-storytelling-wrapper">
            <h2>Lavabo alargado: ancho de sobra, fondo justo</h2>
            <div class="storytelling-text">
                <p>El <strong>lavabo alargado</strong> da superficie &uacute;til a lo ancho sin robar fondo, por eso luce en encimeras estilizadas y resuelve ba&ntilde;os estrechos. Es el formato que mejor combina <strong>presencia visual</strong> (la l&iacute;nea recta marca el mueble) con <strong>practicidad</strong> (deja paso libre delante y por los lados).</p>
                <p>En nuestro cat&aacute;logo dominan los rectangulares de <strong>Solid Surface</strong>, sin juntas y en muchos colores: negro, humo, barro, ocre, lino y blanco. La l&iacute;nea TOPI lleva esos acabados a piezas de ancho 60-80 cm y fondo 37-46 cm. Si quieres ver toda la familia, consulta los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">lavabos sobre encimera</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavalar" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos alargados</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos alargados. Etiqueta sobre ficha: material, ancho y color.
            <?php else : ?>
                Selecci&oacute;n de lavabos alargados en Solid Surface, cer&aacute;mica y piedra.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_alargado_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavalar-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas de medidas o color? Cu&eacute;ntanos cm de encimera y acabado del ba&ntilde;o y te decimos cu&aacute;l combina.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20las%20medidas%20de%20mi%20encimera%20para%20un%20lavabo%20alargado" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: ALARGADO VS GRANDE VS PEQUENO -->
    <section class="lavalar-comparativa adrihosan-full-width-block">
        <div class="lavalar-comparativa-wrapper">
            <h2>Lavabo alargado, grande o peque&ntilde;o: cu&aacute;l elegir</h2>
            <p class="comparativa-intro">Tres formatos para tres tipos de ba&ntilde;o. La elecci&oacute;n manda tanto como el material.</p>

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
                            <td><strong>Alargado</strong></td>
                            <td>Rectangular de poco fondo</td>
                            <td>Encimera estrecha o ba&ntilde;o estilizado</td>
                            <td>Aqu&iacute;</td>
                        </tr>
                        <tr>
                            <td><strong>Grande</strong></td>
                            <td>Mucha capacidad y anchura</td>
                            <td>Ba&ntilde;o amplio, uso intenso</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-grande/">Lavabo grande</a></td>
                        </tr>
                        <tr>
                            <td><strong>Peque&ntilde;o</strong></td>
                            <td>Pieza compacta</td>
                            <td>Aseo de cortes&iacute;a o hueco m&iacute;nimo</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">Lavabos peque&ntilde;os</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si quieres ver toda la familia, est&aacute;n los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-grande/">grandes</a>, los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">peque&ntilde;os</a> y el cat&aacute;logo completo de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">lavabos sobre encimera</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavalar-materials adrihosan-full-width-block">
        <div class="lavalar-materials-wrapper">
            <h2>Claves del lavabo alargado</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del formato (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface / resina</h3>
                    <p>Material dominante: sin juntas, no poroso y reparable con lijado suave.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Acabados en color (TOPI)</h3>
                    <p>Negro, humo, barro, ocre, lino y blanco.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>Fondo reducido 37-46 cm</h3>
                    <p>Justo para encimeras estrechas y ba&ntilde;os alargados.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128202;</span>
                    <h3>Ancho 60-80 cm</h3>
                    <p>La medida est&aacute;ndar del lavabo alargado sobre encimera.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9645;</span>
                    <h3>Perfil bajo 10-12 cm</h3>
                    <p>Silueta plana y discreta, no eleva la altura final.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Sobre encimera</h3>
                    <p>Va apoyado sobre encimera o mueble plano, no se empotra.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavalar-asesoramiento adrihosan-full-width-block">
        <div class="lavalar-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo alargado</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar y no quedarte corto de fondo.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide ancho y fondo</strong> de tu encimera (el lavabo debe caber con margen a los lados).</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Elige color</strong>: blanco o acabado Solid Surface (negro, humo, barro, ocre, lino).</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Escoge grifo</strong>: ca&ntilde;o alto sobre encimera o grifer&iacute;a mural a pared.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te <strong>confirmamos v&aacute;lvula y medidas</strong> seg&uacute;n modelo por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida exacta? Fabricamos rectangulares a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20alargado%20y%20grifo%20a%20juego" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavalar-related adrihosan-full-width-block">
        <div class="lavalar-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
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

    <!-- 12. FAQs (9 preguntas EXACTAS del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo alargado</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es un lavabo alargado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Es un lavabo rectangular m&aacute;s largo que profundo, de l&iacute;nea recta y perfil bajo. Aprovecha el ancho de la encimera sin ocupar mucho fondo, por eso encaja bien en ba&ntilde;os estrechos y en muebles estilizados.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirve un lavabo alargado para un ba&ntilde;o estrecho?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, es de los formatos que mejor rinden ah&iacute;. Al tener poco fondo, muchos rondan los 37 a 40 cm, deja paso libre y da sensaci&oacute;n de amplitud en ba&ntilde;os alargados.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material son los lavabos alargados?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La mayor&iacute;a son de Solid Surface o resina, sin juntas y f&aacute;ciles de limpiar, y por eso vienen en muchos colores. Tambi&eacute;n los hay en cer&aacute;mica, porcelana y piedra.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Los lavabos alargados vienen en color?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. Al ser de Solid Surface admiten acabados en negro, humo, barro, ocre o lino, adem&aacute;s del blanco. Tienes la gama en lavabos de colores y en lavabos negros.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a necesita un lavabo alargado sobre encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Al ir apoyado encima, pide un grifo de ca&ntilde;o alto o una grifer&iacute;a mural a pared, para que el agua caiga con holgura dentro del lavabo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas suele tener un lavabo alargado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Los anchos habituales van de 60 a 80 cm y el fondo ronda los 37 a 46 cm, con perfil bajo de unos 10 a 12 cm. Mide tu encimera antes de elegir.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sobre qu&eacute; se coloca un lavabo alargado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre una encimera o mueble a unos 85 a 90 cm de altura. Al apoyarse encima deja libre el hueco inferior y luce m&aacute;s en muebles suspendidos.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo alargado incluye grifo y desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La grifer&iacute;a va aparte salvo que se indique. La v&aacute;lvula de desag&uuml;e suele acompa&ntilde;ar seg&uacute;n el modelo. Si tienes dudas te lo confirmamos por WhatsApp antes de comprar.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te decimos qu&eacute; alargado encaja en tu encimera.</h2><p>Soy Ricardo. M&aacute;ndame ancho y fondo de tu encimera (y, si quieres, foto del ba&ntilde;o) y te paso modelos en el acabado que pegue mejor con el resto.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20alargado%20para%20mi%20ba%C3%B1o" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
