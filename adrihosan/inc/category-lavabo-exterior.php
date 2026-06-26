<?php
/**
 * Category: Lavabo exterior (ID: 2716) - REESCRITURA LIMPIA
 *
 * Subcategoria del silo Lavabos (parent 90). 8 productos, todos
 * piedra natural y marmol gris (series Akutan, Petra, Clematis,
 * Dalia, Jazmin, Candy).
 *
 * !! REESCRITURA TOTAL. !!
 *
 * El texto vivo previo estaba lleno de relleno prohibido ("elegancia",
 * "funcionalidad"), claim falso de "sostenibilidad" (no verificable),
 * emojis y "obra de arte". Por eso:
 *   - Esta plantilla NO renderiza category_description() (el copy viejo
 *     queda en BD pero no se pinta -> rollback facil si se quisiera).
 *   - Sin emojis en sellos ni claves.
 *   - Sin palabras prohibidas.
 *   - Sin claim de sostenibilidad.
 *
 * Keyword lider: "lavabo exterior" + co-targets: lavabo de piedra
 * exterior, lavabo de jardin, lavabo rustico exterior. Conecta con
 * "lavamanos rustico", que ya rankea bien.
 *
 * DECISION DE INTENCION (anti-canibalizacion):
 *   Adrihosan ya tiene la cat `fregadero-exterior-jardin` para lo
 *   UTILITARIO (lavar verduras, herramientas). Por tanto esta pagina
 *   = lavabo exterior DECORATIVO (terraza cubierta, porche, bano
 *   rustico). Sin canibalizar -> enlace a fregadero-exterior-jardin
 *   en la seccion de comparativa.
 *
 * HONESTIDAD DE MATERIAL (clave, no negociable):
 *   Piedra y marmol naturales aguantan, PERO:
 *     - conviene SELLARLOS
 *     - en sitio CUBIERTO o SEMIPROTEGIDO
 *   NO prometer "resiste a todo / sol, lluvia y heladas".
 *
 * Buyer persona PRIMARIO: Reformista Rural / casa de campo.
 * SECUNDARIO: Pareja Reformadora con terraza. Compra emocional por
 * el material natural.
 *
 * Angulo unico: el encanto mineral de la piedra para un rincon de
 * agua con caracter, dicho con verdad.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo exterior"). NUNCA <h1>
 *   hardcodeado.
 * - Materiales REALES: piedra natural y marmol. NADA inventado.
 * - HONESTIDAD: NO prometer resistencia total a la intemperie.
 * - PROHIBIDO claim de sostenibilidad (no verificable).
 * - PROHIBIDOS emojis en sellos/claves (mantengo solo los del bloque
 *   contacto comun, que es markup compartido del tema).
 * - PROHIBIDO relleno: "elegancia", "funcionalidad", "obra de arte",
 *   "lujo", "sofisticacion", "toque de", "atemporal".
 * - Separar lo decorativo (esta pagina) de lo utilitario (fregadero
 *   jardin).
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador.
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
// CATEGORIA 2716 - LAVABO EXTERIOR (reescritura limpia)
// ============================================================================

function adrihosan_categoria_lavabo_exterior_contenido_superior() {
    $term   = get_term( 2716, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/lavabo-exterior-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo exterior' ); ?></h1>
            <p class="hero-tagline">Piedra natural con car&aacute;cter para tu terraza, porche o ba&ntilde;o r&uacute;stico.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavext" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20exterior%20de%20piedra%20natural" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR (sin emojis, segun briefing) -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo exterior</strong> de piedra natural o m&aacute;rmol lleva el encanto mineral a una terraza cubierta, un porche o un ba&ntilde;o r&uacute;stico. Piezas decorativas, con vetas &uacute;nicas en cada una, para espacios con aire natural.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <h3>Piedra natural y m&aacute;rmol</h3>
                    <p>Vetas &uacute;nicas en cada pieza.</p>
                </div>
                <div class="ap-value-card">
                    <h3>Para terraza, porche o r&uacute;stico</h3>
                    <p>El rinc&oacute;n de agua con car&aacute;cter.</p>
                </div>
                <div class="ap-value-card">
                    <h3>Te decimos d&oacute;nde encaja</h3>
                    <p>Uso y sellado por WhatsApp.</p>
                </div>
                <div class="ap-value-card">
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Financiaci&oacute;n en 3 meses sin intereses.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo lavabos, id 428781) -->
    <div id="destino-filtro-adria-lavext" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavext-storytelling adrihosan-full-width-block">
        <div class="lavext-storytelling-wrapper">
            <h2>Lavabo exterior: el encanto de la piedra natural</h2>
            <div class="storytelling-text">
                <p>La piedra y el m&aacute;rmol aportan <strong>textura y vetas</strong> que ning&uacute;n material industrial imita. Por eso encajan bien en un <strong>rinc&oacute;n de agua decorativo</strong>: una terraza cubierta, un porche, una cocina de verano o un ba&ntilde;o de estilo r&uacute;stico. Cada pieza es distinta; las series Akutan, Petra, Clematis, Dalia, Jazm&iacute;n y Candy mantienen la l&iacute;nea pero ninguna repite las mismas vetas.</p>
                <p>Punto importante con honestidad: son materiales naturales y conviene <strong>sellarlos</strong> al instalar y colocarlos en sitio <strong>cubierto o semiprotegido</strong>. Aguantan el uso de un punto de agua, no la intemperie total con sol y lluvia constantes. Si lo que buscas es una pieza para lavar verduras o herramientas en el jardin, mira los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-piedra/">lavabos de piedra</a> para uso interior o el <a href="https://www.adrihosan.com/categoria-producto/fregaderos/fregadero-exterior/fregadero-exterior-jardin/">fregadero de exterior</a> para uso utilitario en jardin.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavext" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos exteriores</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos exteriores. Etiqueta sobre ficha: material (piedra o m&aacute;rmol).
            <?php else : ?>
                Selecci&oacute;n de lavabos exteriores de piedra natural y m&aacute;rmol gris.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_exterior_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavext-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Para terraza, porche o ba&ntilde;o r&uacute;stico? Cu&eacute;ntanos el sitio y te decimos qu&eacute; pieza pega y c&oacute;mo sellarla.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20fotos%20del%20sitio%20para%20que%20me%20digas%20qu%C3%A9%20lavabo%20exterior%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: DECORATIVO VS UTILITARIO (anti-canibalizacion) -->
    <section class="lavext-comparativa adrihosan-full-width-block">
        <div class="lavext-comparativa-wrapper">
            <h2>Lavabo exterior decorativo o pila para fregar</h2>
            <p class="comparativa-intro">Dos cosas distintas. Si confundes las dos, acabas con la pieza equivocada.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Pieza</th>
                            <th>Para qu&eacute;</th>
                            <th>Material</th>
                            <th>D&oacute;nde verla</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Lavabo exterior</strong></td>
                            <td>Decorativo, lavarse las manos</td>
                            <td>Piedra natural o m&aacute;rmol</td>
                            <td>Aqu&iacute;</td>
                        </tr>
                        <tr>
                            <td><strong>Pila o fregadero de jard&iacute;n</strong></td>
                            <td>Utilitario, lavar verduras o herramientas</td>
                            <td>Materiales m&aacute;s resistentes a la intemperie</td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/fregaderos/fregadero-exterior/fregadero-exterior-jardin/">Fregadero de exterior (jard&iacute;n)</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Resumiendo: si lo quieres por <strong>est&eacute;tica</strong>, te lo damos aqu&iacute;. Si es para <strong>uso intensivo en el jard&iacute;n</strong>, mejor un <a href="https://www.adrihosan.com/categoria-producto/fregaderos/fregadero-exterior/fregadero-exterior-jardin/">fregadero de exterior</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES (sin emojis, segun briefing) -->
    <section class="lavext-materials adrihosan-full-width-block">
        <div class="lavext-materials-wrapper">
            <h2>Claves del lavabo exterior de piedra</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del producto, dichas sin promesas vac&iacute;as.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <h3>Piedra natural</h3>
                    <p>Material extra&iacute;do y trabajado. No es un compuesto industrial imitando la veta.</p>
                </div>
                <div class="material-card">
                    <h3>M&aacute;rmol</h3>
                    <p>Variante con vetas m&aacute;s marcadas y tonos grises. Igualmente natural.</p>
                </div>
                <div class="material-card">
                    <h3>Vetas &uacute;nicas</h3>
                    <p>Cada pieza tiene su dibujo. No esperes que la tuya sea id&eacute;ntica a la foto.</p>
                </div>
                <div class="material-card">
                    <h3>Sobre encimera</h3>
                    <p>Se apoya sobre repisa o encimera de obra. Necesita grifo de ca&ntilde;o alto o mural.</p>
                </div>
                <div class="material-card">
                    <h3>Requiere sellado</h3>
                    <p>Al instalar se aplica un sellador para piedra natural. Se repite cada cierto tiempo.</p>
                </div>
                <div class="material-card">
                    <h3>Sitio cubierto o semiprotegido</h3>
                    <p>Aguanta humedad y salpicaduras de uso normal. No la intemperie continua de invierno.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavext-asesoramiento adrihosan-full-width-block">
        <div class="lavext-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo exterior</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar con la pieza y con la instalaci&oacute;n.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Decide el sitio</strong>: terraza cubierta, porche o ba&ntilde;o r&uacute;stico.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Elige material</strong>: piedra natural o m&aacute;rmol gris.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Prev&eacute; el sellado</strong> del material al instalar y como mantenimiento.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te ayudamos con la <strong>grifer&iacute;a</strong> (ca&ntilde;o alto o mural) por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">Nota honesta: la piedra natural pide sitio cubierto o semiprotegido. Para puntos de agua a la intemperie total mejor un <a href="https://www.adrihosan.com/categoria-producto/fregaderos/fregadero-exterior/fregadero-exterior-jardin/">fregadero de exterior</a>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20exterior%20y%20a%20saber%20donde%20puedo%20ponerlo" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavext-related adrihosan-full-width-block">
        <div class="lavext-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-piedra/">Lavabo de piedra</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-marmol/">Lavabo de m&aacute;rmol</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-rustico/">Lavabo r&uacute;stico</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/fregaderos/fregadero-exterior/fregadero-exterior-jardin/">Fregadero de exterior (jard&iacute;n)</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifo de lavabo</a>
            </div>
        </div>
    </section>

    <?php
    // 11. NO renderizamos category_description() en esta cat.
    // El texto vivo previo estaba lleno de relleno prohibido y claims
    // falsos (sostenibilidad). Reescritura limpia: el contenido vivo va
    // del PHP. Si en algun momento se quiere recuperar copy editable,
    // se anade este bloque a esta plantilla.
    ?>

    <!-- 12. FAQs (9 preguntas EXACTAS del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo exterior</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; material son los lavabos de exterior?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De piedra natural y m&aacute;rmol, con vetas &uacute;nicas en cada pieza. Son materiales con car&aacute;cter, pensados para dar un aire natural a la terraza, el porche o un ba&ntilde;o r&uacute;stico.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo exterior aguanta la intemperie?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La piedra y el m&aacute;rmol son resistentes, pero al ser naturales conviene sellarlos y colocarlos en un sitio cubierto o semiprotegido. Para un punto de agua a la intemperie total, mejor una pila de fregadero de jard&iacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;D&oacute;nde se suele poner un lavabo exterior?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En terrazas cubiertas, porches, cocinas de verano o ba&ntilde;os de estilo r&uacute;stico. Luce donde se busca un toque natural y mineral.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;C&oacute;mo se limpia un lavabo de piedra o m&aacute;rmol?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Solo con agua o jab&oacute;n neutro. Evita productos &aacute;cidos, lej&iacute;a y estropajos met&aacute;licos, que da&ntilde;an la superficie de la piedra natural.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hay que dar alg&uacute;n tratamiento a la piedra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, conviene aplicar un sellador espec&iacute;fico para piedra natural al instalarlo y repetirlo cada cierto tiempo seg&uacute;n el uso. As&iacute; se protege del agua y de las manchas.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; diferencia hay entre un lavabo exterior y una pila de jard&iacute;n?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El lavabo exterior es una pieza decorativa de piedra o m&aacute;rmol. La pila o fregadero de jard&iacute;n es m&aacute;s utilitaria, para lavar herramientas o verduras. Tenemos las dos cosas en secciones distintas.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a lleva un lavabo exterior?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Al ir sobre encimera o repisa, pide un grifo de ca&ntilde;o alto o mural. Para zonas fr&iacute;as, valora una grifer&iacute;a preparada para exterior.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo exterior incluye grifo y desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La grifer&iacute;a va aparte salvo que se indique. La v&aacute;lvula de desag&uuml;e suele acompa&ntilde;ar seg&uacute;n el modelo. Si dudas te lo confirmamos por WhatsApp.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a y te asesoramos por WhatsApp en el 96 195 71 36 o por email durante todo el proceso.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR (markup compartido con el resto del silo) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Dudas de si encaja en tu espacio? Te asesoro.</h2><p>Soy Ricardo. M&aacute;ndame foto del sitio (terraza, porche o ba&ntilde;o r&uacute;stico) y te digo qu&eacute; pieza encaja, si necesita estar cubierta y c&oacute;mo sellarla.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20exterior%20de%20piedra%20natural" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
