<?php
/**
 * Category: Lavabo ovalado (ID: 2699) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 36 productos, TODOS sobre encimera.
 *
 * La pagina en vivo era el archivo por defecto con metas de relleno ("de Diseno
 * y Calidad | Encuentra el Tuyo", sin og_image). NO hay copy que preservar. La
 * plantilla mantiene el bloque category_description() (texto nuevo via Archivo 2).
 *
 * Caso SEO (GSC 12m, verificado 2026-07-15): 1.669 impr / 13 clics / CTR 0,78%.
 * El modificador que manda es "sobre encimera" (~1.150 impr en 3 variantes,
 * pos 7,7-12,4). Head "lavabo ovalado" (379 impr): PATRON GRIS - la categoria
 * en pos 15,1 con 0 clics mientras el producto Monaco 60 rankea pos 3,9. La
 * categoria debe absorber ese ranking.
 *
 * Keyword lider: "lavabo ovalado" + co-targets: lavabo sobre encimera ovalado,
 * lavabos ovalados, lavabo oval. "mueble lavabo ovalado" (226 impr) es de
 * MUEBLES: se sirve con pill a muebles-de-bano-de-diseno, no aqui.
 * "bajo encimera / encastrado": NO hay producto, honestidad en FAQ 2.
 *
 * Inventario real verificado (36, 3 grupos, todos de apoyo sobre encimera):
 *   - Serie ONNI 55 cm Solid Surface (28 uds - dominante): 14 colores mate,
 *     monocolor o bicolor con blanco. 272,74-416,12 eur. Color macizo.
 *   - Ceramicos ovalados (6): Oval 41 (78,90 - el "desde"), Monaco 48
 *     blanco/negro (86,90/136,90), Monaco 60 (101,90), Tormes 56 (117,90),
 *     Livorno variable (desde 146,90).
 *   - Solid Surface blancos (2): Monaco SS 47,5 (231,90), bol Oval 45,5
 *     variable (desde 136,90).
 * Medidas: 41 a 60 cm de largo. Desde 78,90 eur.
 *
 * Angulo unico: el ovalo es la forma comoda - sin esquinas deja mas paso libre
 * en la encimera y suaviza banos llenos de lineas rectas. Buyer persona:
 * reformador con el mueble/encimera ya decidido que busca rematar el conjunto.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo ovalado"). NUNCA <h1> hardcodeado.
 * - Materiales y datos REALES (los del inventario, nada mas).
 * - PROHIBIDO relleno: "elegancia", "de diseno y calidad", "encuentra el tuyo".
 * - Copy pasado por tool-humanizer: sin em-dashes, sin triadas clonadas.
 * - Adrihosan = distribuidor (Solidker = linea propia a medida).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Texto de las 9 FAQs: EXACTO del wireframe/Archivo 2 (palabra por palabra).
 * - Contacto: bloque estandar (6 opciones). Email: comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2699 - LAVABO OVALADO (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabo_ovalado_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabo-ovalado.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo ovalado' ); ?></h1>
            <p class="hero-tagline">La forma sin esquinas: c&oacute;moda en la encimera, suave a la vista.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavova" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20ovalado%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo ovalado</strong> aprovecha mejor la encimera que uno rectangular del mismo largo, porque no tiene esquinas que estorben. Aqu&iacute; hay 36 modelos de apoyo <strong>sobre encimera</strong>, en cer&aacute;mica desde 78,90 &euro; y en Solid Surface mate con 14 colores, de 41 a 60 cm.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>36 modelos sobre encimera</h3>
                    <p>De 41 a 60 cm de largo, desde 78,90 &euro;.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Serie ONNI en 14 colores mate</h3>
                    <p>Monocolor o bicolor con blanco.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a elegir</h3>
                    <p>Medida, material y grifer&iacute;a por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavova" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavova-storytelling adrihosan-full-width-block">
        <div class="lavova-storytelling-wrapper">
            <h2>Por qu&eacute; un lavabo ovalado</h2>
            <div class="storytelling-text">
                <p>El &oacute;valo es la forma c&oacute;moda. Sin esquinas, un lavabo del mismo largo deja m&aacute;s paso libre en la encimera y no se clava en la cadera cuando el ba&ntilde;o es estrecho. Adem&aacute;s hace de contrapunto: en un ba&ntilde;o donde todo son l&iacute;neas rectas (mueble, espejo, mampara), la curva relaja el conjunto.</p>
                <p>Puedes elegirlo en <strong>cer&aacute;mica</strong> de brillo cl&aacute;sico, en blanco o en negro, desde 78,90 &euro;. O en <strong>Solid Surface</strong> mate con la serie ONNI de 55 cm y sus 14 colores, donde el tono va en toda la masa de la pieza. Todos son de apoyo sobre el mueble o la encimera; si lo quieres redondo del todo, tienes el <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">lavabo redondo</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavova" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos ovalados</h2>
        <p class="product-loop-subtitle">
            Cer&aacute;mica y Solid Surface, de 41 a 60 cm, desde 78,90 &euro;. Usa el filtro para acotar por color, medida o material.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_ovalado_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavova-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas entre cer&aacute;mica y Solid Surface? M&aacute;ndanos foto del mueble y te decimos qu&eacute; encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20mueble%20para%20que%20me%20dig%C3%A1is%20qu%C3%A9%20lavabo%20ovalado%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: CERAMICA VS SOLID SURFACE -->
    <section class="lavova-comparativa adrihosan-full-width-block">
        <div class="lavova-comparativa-wrapper">
            <h2>&iquest;Cer&aacute;mico o de Solid Surface?</h2>
            <p class="comparativa-intro">Los dos materiales del cat&aacute;logo, comparados sin humo.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Acabado</th>
                            <th>Colores</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Cer&aacute;mica</strong></td>
                            <td>Brillo cl&aacute;sico, f&aacute;cil de limpiar</td>
                            <td>Blanco y negro</td>
                            <td>78,90 &ndash; 146,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Solid Surface (ONNI)</strong></td>
                            <td>Mate, color en toda la masa, reparable</td>
                            <td>14 tonos, mono o bicolor</td>
                            <td>272,74 &ndash; 416,12 &euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Regla r&aacute;pida: si el ba&ntilde;o va en blanco y el presupuesto manda, cer&aacute;mica. Si buscas un tono concreto o el acabado mate, la serie ONNI es la que lo da.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavova-materials adrihosan-full-width-block">
        <div class="lavova-materials-wrapper">
            <h2>Claves del lavabo ovalado</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Sin esquinas</h3>
                    <p>M&aacute;s paso libre en la encimera con el mismo largo de pieza.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Serie ONNI 55 cm</h3>
                    <p>El ovalado de la casa en Solid Surface: 14 colores mate.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129527;</span>
                    <h3>Color macizo y reparable</h3>
                    <p>En Solid Surface el tono va en toda la masa; un lijado suave lo renueva.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127963;</span>
                    <h3>Cer&aacute;mica desde 78,90 &euro;</h3>
                    <p>Oval 41, M&oacute;naco 48 y 60, Tormes 56 y Livorno. Blanco o negro.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 41 a 60 cm</h3>
                    <p>Fondos de 33 a 44 cm: mide la encimera antes de elegir.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Apoyo sobre encimera</h3>
                    <p>Los 36 modelos se apoyan sobre el mueble. No hay encastrados.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavova-asesoramiento adrihosan-full-width-block">
        <div class="lavova-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo ovalado</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar a la primera.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide la encimera</strong>: 41-48 cm si es estrecha, 55-60 si la pieza manda.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Decide material</strong>: cer&aacute;mica en brillo o Solid Surface en mate.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Elige color</strong>: blanco, negro o uno de los 14 tonos ONNI.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Deja sitio al grifo</strong>: ca&ntilde;o alto junto a la pieza o empotrado en pared.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida o color que no encuentras? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20ovalado%20para%20mi%20encimera" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavova-related adrihosan-full-width-block">
        <div class="lavova-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">Lavabo redondo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-alargado/">Lavabo alargado</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">Lavabo blanco</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano-de-diseno/">Muebles de ba&ntilde;o de dise&ntilde;o</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // La descripcion actual es relleno y sera reemplazada por el Archivo 2.
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo ovalado</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; ventaja tiene un lavabo ovalado frente a uno rectangular?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Que no tiene esquinas: con el mismo largo deja m&aacute;s paso libre en la encimera y no se clava en la cadera en ba&ntilde;os estrechos. Y en un ba&ntilde;o lleno de l&iacute;neas rectas (mueble, espejo, mampara), el &oacute;valo relaja el conjunto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Son todos de apoyo sobre encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. Los 36 modelos de esta categor&iacute;a se apoyan sobre el mueble o la encimera. No trabajamos ovalados encastrados ni bajo encimera; si buscas eso, escr&iacute;benos y te decimos qu&eacute; alternativa encaja.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; materiales son?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De cer&aacute;mica (brillo cl&aacute;sico, en blanco y tambi&eacute;n en negro) o de Solid Surface en acabado mate, que es resina acr&iacute;lica con cargas minerales. En cada ficha tienes el material exacto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es la serie ONNI?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Nuestro ovalado de Solid Surface en 55 cm. Viene en 14 colores mate (grises, lino, ocre, arcilla, barro, fuego, verdes y azules, adem&aacute;s de blanco y negro), en monocolor o bicolor con el interior o el exterior en blanco.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El color del Solid Surface se desgasta?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No: va en toda la masa de la pieza, no es un esmalte superficial. Las marcas del uso se reparan con un lijado suave y la pieza vuelve a su aspecto original.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tienen los lavabos ovalados?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Del Oval de 41 cm, pensado para encimeras peque&ntilde;as y aseos, a los M&oacute;naco y ONNI de 55 a 60 cm que hacen de protagonista. El fondo ronda los 33-44 cm.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a le va a un lavabo ovalado sobre encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Grifo de ca&ntilde;o alto junto a la pieza o grifer&iacute;a empotrada en pared. Mide la altura del borde antes de elegir: los cer&aacute;micos rondan los 14-17 cm de alto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un lavabo ovalado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El cer&aacute;mico Oval de 41 cm parte de 78,90 &euro;; los M&oacute;naco van de 86,90 a 136,90 &euro; y la serie ONNI de Solid Surface de 272,74 a 416,12 &euro; seg&uacute;n color.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto del mueble o de la encimera con sus medidas y te digo qu&eacute; ovalado encaja, con su grifo y todo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20ovalado%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
