<?php
/**
 * Category: Lavabo piedra (ID: 2649) - RECONSTRUCCION + CONSOLIDACION
 *
 * Pagina UNICA de la familia piedra/marmol/granito tras la consolidacion del
 * 14-jul-2026 (decision del operador: una sola pagina, distincion por H2).
 * lavabo-marmol (2664) BORRADA con 301 aqui (regla 9331); lavabo-granito
 * repuntado directo (regla 9218).
 *
 * Caso SEO (GSC 12m): la mayor demanda del silo, ~29.000 impr/12m sumando
 * piedra (~25k), marmol (~2,5k) y granito (~2,1k). Quien rankeaba era el
 * producto Petra (5.107 impr, pos 7,9, CTR 0,22%): la categoria debe absorber
 * ese ranking. Fortalezas previas a conservar: "lavabos de piedra rusticos"
 * pos 2,5 / "lavabos de piedra baratos" pos 6,8.
 *
 * Keyword lider: "lavabo de piedra" + co-targets: lavabo de marmol, lavabo
 * piedra natural, lavabos de piedra rusticos, lavabo granito (respuesta
 * honesta), lavamanos de piedra.
 *
 * Inventario real verificado (9, todos piedra natural sobre encimera, 40-52 cm):
 *   - Marmol pulido (7): Clematis 52x42 rect gris, Dalia 50x38 rect gris,
 *     Clavel gris 40x40, Clavel crema 40x40 (AGOTADO), Jazmin 40x40 redondo
 *     gris-blanco, Candy 40x40 redondo gris, Begonia 40x40 redondo crema
 *     (AGOTADO). 159,90-230,90 eur. Veta unica por pieza.
 *   - Piedra tallada rustica (2): Akutan 190,90 y Petra 334,90 (45/50 x 15).
 *
 * GRANITO: NO hay lavabo de granito natural en catalogo. PROHIBIDO afirmar
 * que lo vendemos. El H2 "Buscas un lavabo de granito?" explica la alternativa
 * real: terrazo (filtro lav-material-terrazo) y marmol gris oscuro.
 * PROHIBIDO mencionar porcelanico imitacion marmol (original != imitacion).
 *
 * Angulo unico: "no hay dos iguales" - la piedra natural como pieza unica con
 * veta propia. Marmol pulido para banos serenos, piedra tallada para banos
 * rusticos o de exterior.
 *
 * Buyer persona PRIMARIO: Reformador con sesgo de autenticidad; secundario:
 * bano exterior / casa de campo (muchos modelos estan en Lavabo exterior).
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo de piedra").
 * - Materiales REALES: marmol y piedra natural tallada. NADA inventado.
 * - PROHIBIDO relleno: "elegancia", "oasis de lujo", "toque de", "atemporal".
 * - Adrihosan = distribuidor. Financiacion = 3 meses sin intereses.
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Texto de las 9 FAQs: EXACTO del wireframe (palabra por palabra).
 * - Contacto: bloque estandar (6 opciones), comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2649 - LAVABO PIEDRA (reconstruccion + consolidacion)
// ============================================================================

function adrihosan_categoria_lavabo_piedra_contenido_superior() {
    $term   = get_term( 2649, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2023/05/lavabo-de-piedra-petra.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo de piedra' ); ?></h1>
            <p class="hero-tagline">Piedra natural con veta propia: no hay dos iguales.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavpie" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20piedra%20o%20m%C3%A1rmol%20y%20necesito%20ayuda" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo de piedra</strong> es una pieza &uacute;nica: la veta y el tono de cada bloque no se repiten. En el cat&aacute;logo conviven el <strong>m&aacute;rmol pulido</strong> (gris, crema y gris-blanco) y la <strong>piedra tallada</strong> de acabado r&uacute;stico, todos sobre encimera y aptos tambi&eacute;n para exterior.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128142;</div>
                    <h3>Pieza &uacute;nica</h3>
                    <p>Veta y tono irrepetibles en cada lavabo.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129704;</div>
                    <h3>M&aacute;rmol y piedra tallada</h3>
                    <p>Pulido sereno o r&uacute;stico con relieve.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127795;</div>
                    <h3>Interior y exterior</h3>
                    <p>La piedra aguanta la intemperie.</p>
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
    <div id="destino-filtro-adria-lavpie" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavpie-storytelling adrihosan-full-width-block">
        <div class="lavpie-storytelling-wrapper">
            <h2>Lavabo de piedra: no hay dos iguales</h2>
            <div class="storytelling-text">
                <p>La <strong>piedra natural</strong> es el ant&iacute;doto contra el ba&ntilde;o cl&oacute;nico: cada bloque tiene su veta y su tono, as&iacute; que tu lavabo ser&aacute; parecido al de la foto, pero nunca id&eacute;ntico. Es justo lo que se busca al elegir piedra frente a un material fabricado en serie.</p>
                <p>En el cat&aacute;logo conviven dos familias: el <strong>m&aacute;rmol pulido</strong>, de superficie lisa con la veta como protagonista, y la <strong>piedra tallada</strong> de acabado r&uacute;stico, que conserva el relieve de la roca trabajada. La primera encaja en ba&ntilde;os serenos y actuales; la segunda, en ba&ntilde;os con alma <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-rustico/">r&uacute;stica</a> o directamente en el exterior.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavpie" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos de piedra y m&aacute;rmol</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos de piedra natural, desde 159,90 &euro;. Etiqueta sobre ficha: material y formato.
            <?php else : ?>
                Selecci&oacute;n de lavabos de m&aacute;rmol pulido y piedra tallada, todos sobre encimera.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_piedra_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavpie-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas entre m&aacute;rmol y piedra tallada? M&aacute;ndanos foto del ba&ntilde;o y te decimos cu&aacute;l encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20elegir%20lavabo%20de%20piedra" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: MARMOL PULIDO VS PIEDRA TALLADA -->
    <section class="lavpie-comparativa adrihosan-full-width-block">
        <div class="lavpie-comparativa-wrapper">
            <h2>&iquest;M&aacute;rmol pulido o piedra tallada?</h2>
            <p class="comparativa-intro">Las dos familias reales del cat&aacute;logo.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Acabado</th>
                            <th>Car&aacute;cter</th>
                            <th>Colores</th>
                            <th>D&oacute;nde luce</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>M&aacute;rmol pulido</strong></td>
                            <td>Superficie lisa, la veta manda</td>
                            <td>Gris, crema y gris-blanco</td>
                            <td>Ba&ntilde;os serenos y actuales</td>
                        </tr>
                        <tr>
                            <td><strong>Piedra tallada</strong></td>
                            <td>Relieve r&uacute;stico de roca trabajada</td>
                            <td>Tonos naturales de la piedra</td>
                            <td>Ba&ntilde;os r&uacute;sticos y exterior</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Ambas familias son piedra natural aut&eacute;ntica: pieza &uacute;nica, tacto de roca y m&aacute;s peso que un lavabo cer&aacute;mico. Ese peso es normal &mdash; y la se&ntilde;al de que es piedra de verdad.</p>
        </div>
    </section>

    <!-- 7b. GRANITO (respuesta honesta a la demanda que llega por 301) -->
    <section class="lavpie-granito adrihosan-full-width-block">
        <div class="lavpie-comparativa-wrapper">
            <h2>&iquest;Buscas un lavabo de granito?</h2>
            <p class="materials-intro">De granito natural no tenemos. Si te gusta ese look moteado y oscuro, las dos alternativas reales del cat&aacute;logo son el <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lav-material-terrazo/">lavabo de terrazo</a> (granito reconstituido con chinas de piedra, la est&eacute;tica m&aacute;s cercana) y el m&aacute;rmol gris oscuro de esta p&aacute;gina. Escr&iacute;benos y te decimos cu&aacute;l se acerca m&aacute;s a lo que tienes en mente.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavpie-materials adrihosan-full-width-block">
        <div class="lavpie-materials-wrapper">
            <h2>Claves del lavabo de piedra</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128142;</span>
                    <h3>Veta &uacute;nica</h3>
                    <p>Cada bloque de piedra es distinto. Tu lavabo no se repite.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>M&aacute;rmol gris y crema</h3>
                    <p>Siete modelos pulidos: redondos, cuadrados y rectangulares.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128296;</span>
                    <h3>Piedra tallada r&uacute;stica</h3>
                    <p>Akutan y Petra: relieve de roca trabajada, el favorito en Google.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129524;</span>
                    <h3>Sellado peri&oacute;dico</h3>
                    <p>Una o dos veces al a&ntilde;o, con limpieza de pH neutro.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 40 a 52 cm</h3>
                    <p>Sobre encimera o mueble, con 13-15 cm de alto.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127795;</span>
                    <h3>Apto exterior</h3>
                    <p>La piedra aguanta la intemperie en poyetes y jardines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavpie-asesoramiento adrihosan-full-width-block">
        <div class="lavpie-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo de piedra</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar con la pieza.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige acabado</strong>: m&aacute;rmol pulido (sereno) o piedra tallada (r&uacute;stica).</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Elige color</strong>: gris, crema o gris-blanco seg&uacute;n el mueble.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Mide la encimera</strong>: de 40 a 52 cm, y deja espacio al grifo.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te <strong>ayudamos con la grifer&iacute;a</strong> (ca&ntilde;o alto o mural) por WhatsApp.</p></div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20de%20piedra%20y%20grifo%20que%20combine" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavpie-related adrihosan-full-width-block">
        <div class="lavpie-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-rustico/">Lavabo r&uacute;stico</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-exterior/">Lavabo exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-gris/">Lavabo gris</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">Lavabo redondo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">Lavabos peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lav-material-terrazo/">Lavabos de terrazo</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // El texto nuevo entrara por el Archivo 2 (paquete SEO).
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo de piedra</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; tipos de lavabo de piedra ten&eacute;is?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Dos familias, todas de piedra natural: lavabos de m&aacute;rmol pulido (en gris, crema y gris-blanco, con formas redondas, cuadradas y rectangulares) y lavabos de piedra tallada con acabado r&uacute;stico, como los modelos Akutan y Petra. En cada ficha ver&aacute;s el material exacto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cada lavabo de piedra es realmente &uacute;nico?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. La piedra natural tiene veta y tono propios en cada bloque, as&iacute; que tu lavabo ser&aacute; parecido al de la foto pero nunca id&eacute;ntico. Es justo lo que se busca al elegir piedra frente a un material fabricado en serie.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; diferencia hay entre el m&aacute;rmol pulido y la piedra tallada?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El m&aacute;rmol pulido tiene la superficie lisa y suave, con la veta como protagonista: encaja en ba&ntilde;os serenos y actuales. La piedra tallada conserva el relieve y el aspecto de roca trabajada a mano: es la opci&oacute;n para ba&ntilde;os r&uacute;sticos o de exterior.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Ten&eacute;is lavabos de granito?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De granito natural no. Si te gusta ese look, el terrazo (granito reconstituido con chinas de piedra) y el m&aacute;rmol gris oscuro son las alternativas reales del cat&aacute;logo. Escr&iacute;benos y te decimos cu&aacute;l se acerca m&aacute;s a lo que buscas.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;C&oacute;mo se cuida un lavabo de piedra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Limpieza con jab&oacute;n de pH neutro y un pa&ntilde;o suave, nada de abrasivos ni antical agresivo. Al ser un material poroso, agradece un sellado peri&oacute;dico (una o dos veces al a&ntilde;o) para protegerlo de manchas.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tienen los lavabos de piedra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De 40 a 52 cm de ancho: redondos y cuadrados de 40&times;40, y rectangulares de 50&times;38 y 52&times;42. Todos son de apoyo sobre encimera o mueble, con unos 13-15 cm de alto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirven para un ba&ntilde;o exterior o un jard&iacute;n?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, la mayor&iacute;a est&aacute;n tambi&eacute;n en nuestra categor&iacute;a de lavabos de exterior: la piedra natural aguanta bien a la intemperie sobre un poyete de obra o un mueble de jard&iacute;n. Si va a helar en tu zona, com&eacute;ntanoslo y te confirmamos el modelo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a le va a un lavabo de piedra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Al ser lavabos sobre encimera, necesitas un grifo de ca&ntilde;o alto o una grifer&iacute;a mural. En acabado, el negro mate y los tonos envejecidos son los que m&aacute;s se piden con la piedra.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda la pen&iacute;nsula y financiamos en 3 meses sin intereses. La piedra viaja protegida en palet. Para confirmar plazo o coste en tu zona, escr&iacute;benos al WhatsApp 96 195 71 36.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;M&aacute;rmol o piedra tallada? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto del ba&ntilde;o (o del rinc&oacute;n del jard&iacute;n) y te digo qu&eacute; pieza encaja: un m&aacute;rmol pulido para un ba&ntilde;o sereno o una piedra tallada para darle alma r&uacute;stica.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20piedra%20o%20m%C3%A1rmol%20y%20necesito%20ayuda" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
