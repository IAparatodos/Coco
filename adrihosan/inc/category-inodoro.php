<?php
/**
 * Category: Inodoro (ID: 81)
 *
 * Categoria RAIZ del silo Inodoros (sanitarios → inodoro). 69 productos.
 * Hub que orienta entre los tipos y reparte autoridad a las 8 subcategorias.
 * NO compite frontal con Leroy/Roca/Bauhaus por "inodoros" generico —
 * juega informacional-comercial ayudando a decidir.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico() (FilterEverything inyecta
 *   el valor en URLs filtradas: "Inodoros suspendidos", "Inodoros negros"...).
 * - FAQs como HTML, sin json-ld hardcodeado (Rank Math gestiona schema).
 * - Materiales REALES (porcelana/ceramica vitrificada, rimless, doble
 *   descarga, soft-close, salida dual). PROHIBIDO inventar prestaciones.
 * - Solo WhatsApp 96 195 71 36 + email. NO telefono fijo.
 * - Enlaces internos SOLO a las URLs verificadas (las subcats borradas
 *   compacto/tanque integrado/grande/salida vertical NO existen aunque
 *   el sitemap cacheado las muestre).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 81 - INODORO (raiz del silo)
// ============================================================================

function adrihosan_categoria_inodoro_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/inodoros-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Inodoros' ); ?></h1>
            <p class="hero-tagline">El inodoro que encaja en tu ba&ntilde;o, sin equivocarte.</p>
            <div class="hero-buttons">
                <a href="#catalogo-inodoro" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20para%20elegir%20un%20inodoro" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    En Adrihosan tienes <strong>inodoros</strong> de todos los tipos: suspendidos, a suelo, compactos para ba&ntilde;os peque&ntilde;os y modelos rimless de f&aacute;cil limpieza. Te ayudamos a elegir el que encaja con tu ba&ntilde;o y tu presupuesto, con env&iacute;o a toda Espa&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>A casa o a obra, con seguimiento.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te asesoramos por WhatsApp</h3>
                    <p>Dudas resueltas antes de comprar.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128688;</div>
                    <h3>Rimless y doble descarga</h3>
                    <p>M&aacute;s higiene y menos agua.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128274;</div>
                    <h3>Compra segura</h3>
                    <p>Pago protegido y postventa cercana.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ACCESOS RAPIDOS A SUBCATEGORIAS + FILTROS FE -->
    <section class="inodoro-shortcuts adrihosan-full-width-block">
        <div class="inodoro-shortcuts-wrapper">
            <span class="shortcuts-label">Accesos r&aacute;pidos:</span>
            <div class="shortcuts-pills">
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Suspendidos</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">A suelo</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">Peque&ntilde;os</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-baratos/">Baratos</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-de-colores/">De colores</a>
            </div>
        </div>
    </section>

    <div id="destino-filtro-adria-inodoro" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428402"]'); ?></div>

    <!-- 3. STORYTELLING: COMO ELEGIR -->
    <section class="inodoro-storytelling adrihosan-full-width-block">
        <div class="inodoro-storytelling-wrapper">
            <h2>C&oacute;mo elegir tu inodoro sin equivocarte</h2>
            <div class="storytelling-text">
                <p>La decisi&oacute;n empieza por la <strong>instalaci&oacute;n</strong>: <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">a suelo</a> (el cl&aacute;sico, apoyado en el pavimento, con cisterna vista) o <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">suspendido</a> (anclado a la pared, con cisterna empotrada). Sigue por la <strong>salida del desag&uuml;e</strong> (a suelo o a pared) y por el <strong>espacio disponible</strong>: en un ba&ntilde;o peque&ntilde;o un modelo compacto cambia la sensaci&oacute;n del conjunto.</p>
                <p>Tranquilo si es la primera vez: cualquier ba&ntilde;o tiene su inodoro. Aqu&iacute; te acompa&ntilde;amos en la elecci&oacute;n, te decimos qu&eacute; encaja en tu hueco real antes de comprar y te orientamos sobre prestaciones que importan (rimless, doble descarga, soft-close). Pregunta por WhatsApp con foto del ba&ntilde;o y resolvemos en el d&iacute;a.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-inodoro" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de inodoros</h2>
        <p class="product-loop-subtitle">69 modelos disponibles. Filtra por tipo, instalaci&oacute;n, color o salida del desag&uuml;e.</p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_inodoro_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="inodoro-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes cu&aacute;l elegir? Cu&eacute;ntanos c&oacute;mo es tu ba&ntilde;o (espacio y salida del desag&uuml;e) y te decimos qu&eacute; modelo encaja antes de comprar.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20para%20elegir%20un%20inodoro" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA - A SUELO vs SUSPENDIDO -->
    <section class="inodoro-sizes adrihosan-full-width-block">
        <div class="inodoro-sizes-wrapper">
            <h2>Inodoro a suelo o suspendido: cu&aacute;l te conviene</h2>
            <p class="sizes-intro">Tabla de decisi&oacute;n para resolver la duda nº 1 antes de comprar:</p>

            <div class="sizes-table-wrapper">
                <table class="sizes-table">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>A suelo</th>
                            <th>Suspendido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Instalaci&oacute;n</strong></td>
                            <td>Sencilla, sin obra</td>
                            <td>Requiere bastidor en pared</td>
                        </tr>
                        <tr>
                            <td><strong>Cisterna</strong></td>
                            <td>Vista (mochila)</td>
                            <td>Empotrada, oculta</td>
                        </tr>
                        <tr>
                            <td><strong>Limpieza del suelo</strong></td>
                            <td>Normal</td>
                            <td>Muy f&aacute;cil (no toca el suelo)</td>
                        </tr>
                        <tr>
                            <td><strong>Espacio visual</strong></td>
                            <td>Est&aacute;ndar</td>
                            <td>M&aacute;s amplio y ligero</td>
                        </tr>
                        <tr>
                            <td><strong>Precio de partida</strong></td>
                            <td>M&aacute;s econ&oacute;mico</td>
                            <td>Algo superior</td>
                        </tr>
                        <tr>
                            <td><strong>Ver cat&aacute;logo</strong></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="sizes-closing">No hay un ganador absoluto: depende de tu obra, tu salida del desag&uuml;e y tu presupuesto. Si tu ba&ntilde;o es peque&ntilde;o, mira tambi&eacute;n los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">inodoros peque&ntilde;os</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES REALES -->
    <section class="inodoro-materials adrihosan-full-width-block">
        <div class="inodoro-materials-wrapper">
            <h2>Qu&eacute; mirar en un inodoro de calidad</h2>
            <p class="materials-intro">Las 6 prestaciones reales que marcan la diferencia entre un inodoro b&aacute;sico y uno bien resuelto.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#9851;</span>
                    <h3>Rimless (sin brida)</h3>
                    <p>Taza sin reborde interior: sin recovecos, higiene total.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Doble descarga</h3>
                    <p>3 / 4,5 L: ahorro de agua frente a los 6 L antiguos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>Asiento soft-close</h3>
                    <p>Cierre amortiguado, sin golpes ni ruido.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128290;</span>
                    <h3>Salida dual</h3>
                    <p>V&aacute;lido para desag&uuml;e a suelo o a pared.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Porcelana vitrificada</h3>
                    <p>Material est&aacute;ndar del sector: resistente y f&aacute;cil de limpiar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128297;</span>
                    <h3>Fijaciones ocultas</h3>
                    <p>Acabado limpio sin tornillos a la vista.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO -->
    <section class="inodoro-asesoramiento adrihosan-full-width-block">
        <div class="inodoro-asesoramiento-wrapper">
            <h2>Te ayudamos a elegir tu inodoro</h2>
            <p class="asesoramiento-intro">
                No vendemos por catalogar: te orientamos hacia el modelo que encaja en tu ba&ntilde;o real, con el espacio y la salida que tienes. Sin presi&oacute;n de venta.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Cu&eacute;ntanos c&oacute;mo es tu ba&ntilde;o:</strong> espacio disponible y posici&oacute;n de la salida del desag&uuml;e.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Te recomendamos</strong> tipo (a suelo / suspendido) y modelos concretos del cat&aacute;logo.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>Confirmas el pedido</strong> por la web o por WhatsApp. Pago seguro.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Te llega a casa</strong> o a obra con seguimiento del env&iacute;o.</p>
                </div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20para%20elegir%20un%20inodoro" class="bumper-btn" target="_blank">WhatsApp 96 195 71 36</a>
            </div>
        </div>
    </section>

    <!-- 10. SUBCATEGORIAS Y RELACIONADAS -->
    <section class="inodoro-related adrihosan-full-width-block">
        <div class="inodoro-related-wrapper">
            <h2>Subcategor&iacute;as de inodoros y relacionadas</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">Inodoros peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-baratos/">Inodoros baratos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-de-colores/">Inodoros de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-minusvalidos/">Inodoros para minusv&aacute;lidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/cisternas-empotradas/">Cisternas empotradas</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/">Lavabos</a>
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

    <!-- 12. FAQs (9 preguntas, NO json-ld - Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre inodoros</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipos de inodoro hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Por instalaci&oacute;n, dos grandes familias: <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/"><strong>a suelo</strong></a> (apoyado, con cisterna vista) y <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/"><strong>suspendido</strong></a> (anclado a la pared, con cisterna empotrada). Dentro del de suelo est&aacute;n el monobloque, el de tanque bajo y el compacto para ba&ntilde;os peque&ntilde;os.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es mejor un inodoro a suelo o suspendido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del ba&ntilde;o. El <strong>a suelo</strong> es m&aacute;s econ&oacute;mico y se instala sin obra. El <strong>suspendido</strong> despeja el suelo, da sensaci&oacute;n de amplitud y facilita la limpieza, a cambio de un bastidor en la pared.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo s&eacute; qu&eacute; inodoro encaja en mi ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Mide el espacio y comprueba d&oacute;nde est&aacute; la salida del desag&uuml;e (a suelo o a pared). Con esos dos datos descartas la mitad de opciones. Si tienes dudas, te lo confirmamos por WhatsApp.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es un inodoro rimless o sin brida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es una taza <strong>sin el reborde interior</strong> donde se acumula la suciedad. Se limpia en un gesto y arrastra mejor el agua. Cada vez es el est&aacute;ndar en ba&ntilde;os nuevos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; inodoro gasta menos agua?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los de <strong>doble descarga</strong>, que permiten elegir entre descarga corta y completa. Muchos modelos trabajan con 3 y 4,5 litros, frente a los 6 o m&aacute;s de los antiguos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; inodoro elijo para un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un modelo <strong>compacto</strong>, de menor fondo, o un <strong>suspendido</strong>, que al no apoyar en el suelo aligera el espacio. Tienes una categor&iacute;a espec&iacute;fica de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">inodoros peque&ntilde;os</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;De qu&eacute; material son los inodoros?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>De <strong>porcelana sanitaria vitrificada</strong>: resistente, impermeable y f&aacute;cil de limpiar. Es el material est&aacute;ndar del sector.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; inodoro necesito seg&uacute;n la salida del desag&uuml;e?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La mayor&iacute;a de nuestros modelos son de <strong>salida dual</strong>, v&aacute;lidos tanto para desag&uuml;e a suelo como a pared, as&iacute; que te valen en casi cualquier ba&ntilde;o.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, enviamos a toda la pen&iacute;nsula. Te damos seguimiento del pedido y te atendemos por WhatsApp o email si surge cualquier duda.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR (sin telefono fijo) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo, asesor t&eacute;cnico de Adrihosan">
                <div>
                    <h2>Soy Ricardo. &iquest;Sigues con dudas sobre tu inodoro?
                        <span>Escr&iacute;benos al WhatsApp 96 195 71 36 y te decimos qu&eacute; modelo encaja en tu ba&ntilde;o.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">&#128205;</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">&#128187;</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20para%20elegir%20un%20inodoro" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">WhatsApp 96 195 71 36</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">&#9993;</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}
