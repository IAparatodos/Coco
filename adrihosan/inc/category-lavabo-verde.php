<?php
/**
 * Category: Lavabo verde (ID: 2701) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 20 lavabos verdes publicados
 * (+1 COSS blanco mal categorizado, avisado). 5o ciclo del silo tras
 * 2726/2699/2669/2668 (15-jul-2026).
 *
 * Caso SEO (GSC 12m): "lavabo verde" 1.785 impr pos 9,5 CTR 0,95%.
 * "lavabos verdes" pos 5,6. "lavabo verde agua" pos 4,4 (+96 impr de la
 * hija lavabo-verde-agua, ya 301 aqui). "lavamanos verde" 152 impr pos 6,9.
 * "lavabo sobre encimera verde" 338 impr pos 9,3 (todo el catalogo es
 * sobre encimera). "mueble lavabo verde" la sirve col-mbl-verde -> pill,
 * no pisar.
 *
 * Inventario real verificado (20 publicados, todos Solid Surface sobre
 * encimera, mate): series COSS 36 bol, BINX 36, ONNI 55 ovalado, ARVO 55,
 * TOPI 60. Dos tonos: verde claro (el "verde agua/menta" que busca la
 * gente) y verde army (oliva/musgo). Monocolor o bicolor con blanco.
 * Desde 339,08 eur (COSS bicolor) hasta 432,17 eur (TOPI monocolor).
 * NO hay ceramicos verdes en stock, ni empotrados, suspendidos o de pie.
 *
 * Angulo unico: el verde es la decision de color mas arriesgada del banyo
 * y la pagina la desactiva: solo dos tonos, mate, con opcion bicolor para
 * no saturar. Traduce el tono de Pinterest al del catalogo. PROHIBIDO:
 * "frescura", "serenidad", "elegancia", "transforma tu banyo".
 * Copy humanizado de serie.
 *
 * REGLAS DURAS (briefing junio 2026): H1 via adrihosan_h1_dinamico();
 * datos reales; distribuidor (Solidker = linea propia); financiacion 3
 * meses; FAQs sin json-ld, texto EXACTO del wireframe; FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2701 - LAVABO VERDE (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabo_verde_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2021/07/opbouwkom_omni_1_0010_8157513232409.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo verde' ); ?></h1>
            <p class="hero-tagline">El punto de color del ba&ntilde;o, en agua o en oliva.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavverde" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20verde%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo verde</strong> pone el punto de color sin tener que azulejar el ba&ntilde;o entero: 20 modelos sobre encimera en Solid Surface mate, en verde agua o verde oliva, monocolor o combinados con blanco, desde 339,08 &euro;.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Dos tonos, cuatro combos</h3>
                    <p>Verde agua o verde oliva, en monocolor o con blanco.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>De 36 a 60 cm</h3>
                    <p>Bols, ovalados y rectangulares, todos sobre encimera.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a elegir</h3>
                    <p>Tono, formato y grifer&iacute;a por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavverde" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavverde-storytelling adrihosan-full-width-block">
        <div class="lavverde-storytelling-wrapper">
            <h2>Verde agua o verde oliva: los dos tonos del cat&aacute;logo</h2>
            <div class="storytelling-text">
                <p>El verde es el color que m&aacute;s respeto impone al reformar un ba&ntilde;o, y el que mejor queda cuando se acierta. Aqu&iacute; la decisi&oacute;n viene acotada: dos tonos, los dos en mate. El <strong>verde claro</strong> es el que en Pinterest llaman verde agua o verde menta; el <strong>verde army</strong> es un oliva sereno que tira a musgo.</p>
                <p>Los 20 modelos son de <strong>Solid Surface</strong> sobre encimera, con el color en toda la masa de la pieza. Los tienes en monocolor o con el interior en blanco, que rebaja la presencia del color y de paso el precio. Y si quieres ver toda la carta antes de decidirte, tienes los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">lavabos de colores</a> al completo.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavverde" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos verdes</h2>
        <p class="product-loop-subtitle">
            Verde claro y verde army en cinco series (COSS, BINX, ONNI, ARVO y TOPI), de 36 a 60 cm, desde 339,08 &euro;. Usa el filtro para acotar por forma, color o medida.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_verde_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavverde-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas entre el agua y el oliva? M&aacute;ndanos una foto del mueble o del alicatado y te decimos cu&aacute;l encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20una%20foto%20de%20mi%20ba%C3%B1o%20para%20elegir%20lavabo%20verde" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: MONOCOLOR VS BICOLOR -->
    <section class="lavverde-comparativa adrihosan-full-width-block">
        <div class="lavverde-comparativa-wrapper">
            <h2>&iquest;Monocolor o combinado con blanco?</h2>
            <p class="comparativa-intro">La misma pieza, dos maneras de llevar el color.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Opci&oacute;n</th>
                            <th>C&oacute;mo queda</th>
                            <th>Para qui&eacute;n</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Monocolor verde</strong></td>
                            <td>Todo verde, por dentro y por fuera: m&aacute;xima presencia</td>
                            <td>Ba&ntilde;os neutros que piden un protagonista</td>
                            <td>382,95 &ndash; 432,17 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Bicolor con blanco</strong></td>
                            <td>Verde de frente, vaso blanco: el color no satura</td>
                            <td>Quien duda, o repite color en ba&ntilde;o peque&ntilde;o</td>
                            <td>339,08 &ndash; 388,30 &euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Regla r&aacute;pida: con mueble de madera clara, el bicolor no falla; si el ba&ntilde;o es blanco entero, el monocolor le da la vida.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavverde-materials adrihosan-full-width-block">
        <div class="lavverde-materials-wrapper">
            <h2>Claves del lavabo verde</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128176;</span>
                    <h3>Desde 339,08 &euro;</h3>
                    <p>El COSS bicolor de 36 cm con el que arranca la categor&iacute;a.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Dos tonos reales</h3>
                    <p>Verde claro (agua, menta) y verde army (oliva, musgo), en mate.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Color en toda la masa</h3>
                    <p>No es esmalte ni pintura: no hay capa que saltar ni desgastar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128295;</span>
                    <h3>Reparable</h3>
                    <p>Una marca superficial se va con un lijado suave.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Sin cercos de cal</h3>
                    <p>El Solid Surface no es poroso y el mate disimula el agua dura.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 36 a 60 cm</h3>
                    <p>Bol, cuadrado suave, ovalado y rectangular, sobre encimera.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavverde-asesoramiento adrihosan-full-width-block">
        <div class="lavverde-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo verde</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar a la primera.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige el tono</strong>: verde claro si buscas agua o menta; army si es oliva o musgo.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Monocolor o bicolor</strong>: todo verde para presumir, interior blanco para no saturar.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Cuadra la medida</strong>: bol de 36 en aseos; 55 o 60 sobre muebles de 80 o m&aacute;s.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Remata el conjunto</strong>: madera clara o blanco, con ca&ntilde;o alto o grifo de pared.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Otro verde o una medida que no encuentras? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20verde" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavverde-related adrihosan-full-width-block">
        <div class="lavverde-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-azul/">Lavabo azul</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-gris/">Lavabo gris</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/col-mbl-verde/">Mueble ba&ntilde;o verde</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // La descripcion actual es basura de ChatGPT y sera reemplazada por el Archivo 2.
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo verde</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; tonos de verde tienen los lavabos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Dos: verde claro, que es el que suele buscarse como verde agua o verde menta, y verde army, un verde oliva que tira a musgo. Los dos van en acabado mate y puedes elegirlos en monocolor o combinados con blanco.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material est&aacute;n hechos los lavabos verdes?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De Solid Surface, una resina acr&iacute;lica con cargas minerales. El color va en toda la masa de la pieza, no es un esmalte ni una pintura, y el tacto es mate y sedoso.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El color verde se desti&ntilde;e o se raya con el uso?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No se desti&ntilde;e: al ir el color en toda la masa, no hay capa que desgastar. Si con los a&ntilde;os aparece una marca o un ara&ntilde;azo superficial, se repara con un lijado suave y queda como el primer d&iacute;a.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; cambia entre monocolor y bicolor con blanco?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El monocolor es todo verde, por dentro y por fuera, y da la m&aacute;xima presencia de color. El bicolor lleva el interior en blanco, as&iacute; que el verde se ve de frente pero el vaso no satura, y adem&aacute;s es entre 40 y 50 &euro; m&aacute;s econ&oacute;mico.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formas y medidas hay?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Bols redondos de 36 cm (COSS y BINX), ovalados y rectangulares suaves de 55 cm (ONNI y ARVO) y rectangulares de 60 cm (TOPI). Todos son de sobre encimera.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirven para cualquier mueble de ba&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Al ser de sobre encimera, solo necesitas un mueble o una encimera plana con el desag&uuml;e a tiro. En aseos peque&ntilde;os funciona mejor el bol de 36 cm; sobre un mueble de 80 o m&aacute;s, los de 55 y 60 cm.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Con qu&eacute; mueble y grifer&iacute;a combina un lavabo verde?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre maderas claras y blancos es donde m&aacute;s luce, tanto el verde agua como el oliva. De grifer&iacute;a, ca&ntilde;o alto junto al lavabo o grifo empotrado en pared; en negro mate o acero cepillado acompa&ntilde;a mejor que el cromo brillante.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;C&oacute;mo se limpia el Solid Surface mate?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Con un pa&ntilde;o y jab&oacute;n neutro; al no ser poroso no deja cercos de cal marcados. Evita estropajos met&aacute;licos y desatascadores qu&iacute;micos agresivos, que castigan cualquier superficie mate.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame una foto del ba&ntilde;o o del mueble y te digo qu&eacute; tono y qu&eacute; medida encajan, con su grifo y todo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20verde%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
