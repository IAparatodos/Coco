<?php
/**
 * Category: Lavabo grande (ID: 2683)
 *
 * Subcategoria del silo Lavabos (parent 90). 47 productos.
 *
 * Keyword lider: "lavabo grande" + co-targets: lavabo grande sobre
 * encimera, lavabo ancho, lavabo 80 cm, lavabo 100 cm, lavabo XL.
 *
 * Inventario real verificado: Solid Surface sobre encimera de los anchos
 * (Amarna 60, Luxor 80, Memfis 80x46, Florida 70, Quarter Krion 121 cm,
 * TOPI 60) + algun de pie ceramico (Lijar). El eje es el TAMANO/capacidad,
 * no la forma.
 *
 * Titulo vivo previo: "Lavabo Grande Elegante Que Mejorara El Estilo De
 * Tu Bano" -> llevaba palabra vetada y Title Case. Sustituir.
 *
 * Diferenciacion (anti-canibalizacion):
 *   - grande   = ancho/capacidad     (esta pagina)
 *   - alargado = largo de poco fondo (cat 2937)
 *   - doble    = dos senos           (cat 2654)
 *   Mismos productos pueden solaparse, pero cada pagina ataca su
 *   keyword. Cross-link entre ellas.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (bano principal, compartir,
 * amplitud).
 *
 * Angulo unico: la cubeta amplia que da comodidad y presencia, hasta
 * 120 cm.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo grande"). NUNCA <h1>
 *   hardcodeado.
 * - Materiales REALES: Solid Surface/resina, ceramica. NADA inventado.
 * - Formatos REALES: sobre encimera y de pie. Anchos 60-120 cm.
 * - PROHIBIDO "elegante" / "elegancia" (el titulo viejo lo llevaba),
 *   "funcionalidad", "toque de", "atemporal".
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo
 *   Solidker linea propia a medida en Solid Surface por colada).
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
// CATEGORIA 2683 - LAVABO GRANDE (build completo)
// ============================================================================

function adrihosan_categoria_lavabo_grande_contenido_superior() {
    $term   = get_term( 2683, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO (misma imagen que cat 2673 Lavabo blanco) -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/doble-lavabo-moderno-suspendido-mueble-madera-espejo-iluminado.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo grande' ); ?></h1>
            <p class="hero-tagline">M&aacute;s cubeta, m&aacute;s comodidad: la pieza principal de tu ba&ntilde;o.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavgr" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20grande%20para%20mi%20ba%C3%B1o" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo grande</strong> da amplitud y capacidad al ba&ntilde;o: m&aacute;s superficie para no salpicar, anchos de hasta <strong>120 cm</strong> y presencia de pieza principal. Lo tienes sobre encimera o de pie, en resina o cer&aacute;mica.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>Hasta 120 cm</h3>
                    <p>Anchos generosos para ba&ntilde;os amplios.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Resina o cer&aacute;mica</h3>
                    <p>Sobre encimera o de pie.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a medir</h3>
                    <p>Ancho y mueble por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavgr" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavgr-storytelling adrihosan-full-width-block">
        <div class="lavgr-storytelling-wrapper">
            <h2>Lavabo grande: amplitud donde m&aacute;s se nota</h2>
            <div class="storytelling-text">
                <p>Una <strong>cubeta ancha</strong> rinde mejor en el d&iacute;a a d&iacute;a: <strong>menos salpicaduras</strong>, m&aacute;s sitio para apoyar la mano y dos personas en paralelo si toca. Por eso el lavabo grande manda en el <strong>ba&ntilde;o principal</strong>: si tienes el espacio, es lo que se nota en el uso diario.</p>
                <p>El cat&aacute;logo va desde anchos de <strong>60 cm</strong> hasta piezas tipo statement de <strong>120 cm</strong>, en dos formatos: <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">sobre encimera</a> (el que domina en los modelos m&aacute;s anchos de resina) y de pie con columna (el cl&aacute;sico en cer&aacute;mica). La elecci&oacute;n se hace por <strong>ancho disponible</strong> + formato, en ese orden.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavgr" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos grandes</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos grandes. Etiqueta sobre ficha: ancho, formato y material.
            <?php else : ?>
                Selecci&oacute;n de lavabos grandes en Solid Surface y cer&aacute;mica, de 60 a 120 cm.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_grande_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavgr-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Cu&aacute;nto ancho tienes? Cu&eacute;ntanos los cm del mueble o de la pared y te decimos qu&eacute; lavabo grande encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20los%20cm%20que%20tengo%20para%20un%20lavabo%20grande" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: GRANDE VS ALARGADO VS DOBLE -->
    <section class="lavgr-comparativa adrihosan-full-width-block">
        <div class="lavgr-comparativa-wrapper">
            <h2>Lavabo grande, alargado o doble</h2>
            <p class="comparativa-intro">Tres ejes distintos. Cada uno gana en un escenario.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Pieza</th>
                            <th>Eje</th>
                            <th>Cu&aacute;ndo elegirla</th>
                            <th>D&oacute;nde verla</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Grande</strong></td>
                            <td>Ancho y capacidad</td>
                            <td>Ba&ntilde;o amplio, compartir, comodidad</td>
                            <td>Aqu&iacute;</td>
                        </tr>
                        <tr>
                            <td><strong>Alargado</strong></td>
                            <td>Largo de poco fondo</td>
                            <td>Encimera estrecha, ba&ntilde;o alargado</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-alargado/">Lavabo alargado</a></td>
                        </tr>
                        <tr>
                            <td><strong>Doble lavabo</strong></td>
                            <td>Dos senos en una pieza</td>
                            <td>Ba&ntilde;o compartido por dos a la vez</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/doble-lavabo/">Doble lavabo</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si compart&iacute;s el ba&ntilde;o y a veces coincid&iacute;s en horas punta, el <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/doble-lavabo/">doble lavabo</a> resuelve mejor las esperas. Si no, un <strong>grande</strong> de 80-100 cm es lo que da la mejor experiencia de uso individual.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavgr-materials adrihosan-full-width-block">
        <div class="lavgr-materials-wrapper">
            <h2>Claves del lavabo grande</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>Ancho 60-120 cm</h3>
                    <p>Rango real del cat&aacute;logo. El m&aacute;s grande llega a 121 cm en Solid Surface.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface / resina</h3>
                    <p>Domina en los anchos m&aacute;s grandes: sin juntas y m&aacute;s ligero que la cer&aacute;mica.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica</h3>
                    <p>El cl&aacute;sico. Domina en los modelos de pie con columna.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Sobre encimera</h3>
                    <p>Apoyado sobre mueble o encimera. El formato m&aacute;s vendido en grande.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9961;</span>
                    <h3>De pie</h3>
                    <p>Columna integrada que esconde el sif&oacute;n. Sin obra.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Mucha capacidad</h3>
                    <p>Cubeta amplia: menos salpicaduras, m&aacute;s comodidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavgr-asesoramiento adrihosan-full-width-block">
        <div class="lavgr-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo grande</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar con el ancho y el formato.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide el ancho disponible</strong> del mueble o encimera.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Elige formato</strong>: sobre encimera o de pie con columna.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Elige material</strong>: resina (sin juntas) o cer&aacute;mica (cl&aacute;sica).</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te ayudamos con la <strong>grifer&iacute;a de ca&ntilde;o alto</strong> por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Un ancho exacto que no encuentras en cat&aacute;logo? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20grande%20y%20grifo%20a%20juego" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavgr-related adrihosan-full-width-block">
        <div class="lavgr-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-alargado/">Lavabo alargado</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/doble-lavabo/">Doble lavabo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pie/">Lavabos de pie</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifo de lavabo</a>
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

    <!-- 12. FAQs (9 preguntas EXACTAS del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo grande</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;A partir de qu&eacute; medida se considera un lavabo grande?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En la pr&aacute;ctica, a partir de unos 60 cm de ancho, y los hay hasta 120 cm. Cuanto m&aacute;s ancho, m&aacute;s superficie de uso y m&aacute;s presencia en el ba&ntilde;o.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Para qu&eacute; ba&ntilde;o va bien un lavabo grande?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Para ba&ntilde;os amplios y ba&ntilde;os principales, donde sobra sitio y se busca comodidad. Tambi&eacute;n para familias, porque una cubeta grande salpica menos y se usa mejor.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formatos hay de lavabo grande?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre encimera, que se apoya en el mueble, y de pie con columna, que esconde el sif&oacute;n. El sobre encimera domina en los modelos anchos de resina.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material son los lavabos grandes?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre todo de Solid Surface o resina, sin juntas y f&aacute;ciles de limpiar, y de cer&aacute;mica en los de pie. La resina permite los anchos m&aacute;s grandes sin peso excesivo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; diferencia hay entre un lavabo grande y uno alargado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El grande es ancho y de mucha capacidad. El alargado es largo pero de poco fondo, pensado para encimeras estrechas. Uno juega con el tama&ntilde;o, el otro con la forma.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Necesito un mueble especial para un lavabo grande?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Necesitas un mueble o encimera del ancho del lavabo, normalmente de 60 cm en adelante. Mide bien el hueco antes de elegir.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a pide un lavabo grande sobre encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Al ir apoyado encima, un grifo de ca&ntilde;o alto o una grifer&iacute;a mural, para que el agua llegue al centro de la cubeta.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo grande incluye grifo y desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
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
                <div><h2>&iquest;No sabes qu&eacute; ancho te cabe? Te ayudo a medir.</h2><p>Soy Ricardo. M&aacute;ndame los cm del mueble o de la pared y te paso modelos en el ancho que da con tu hueco, con el formato y material que pega mejor.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20grande%20para%20mi%20ba%C3%B1o" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
