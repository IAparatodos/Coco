<?php
/**
 * Category: Encimera de bano por ancho · 1 seno (IDs 5387 y 5388)
 *
 * Plantilla COMPARTIDA para las dos categorias gemelas del silo encimeras:
 *   - 5387: Encimera de bano 120 cm 1 seno  (111 productos)
 *   - 5388: Encimera de bano 140 cm 1 seno  (51 productos)
 *
 * Extensible a 100/130/150/160 cm: anadir el ancho en _adri_enc1seno_ancho()
 * + case en functions.php + CSS category-{ID}.css. El resto del render se
 * genera solo desde la misma plantilla.
 *
 * Keywords reales con clicks en GSC:
 *   - "encimera de bano 120 cm 1 seno"  10 clicks / 476 impr
 *   - "encimera de bano 140 cm 1 seno"  11 clicks / 171 impr
 *   - "encimera 120 cm 1 seno desplazado" 11 clicks
 * Margen alto (Solid Surface linea propia Solidker).
 *
 * Angulo SERP: encimera-lavabo integrada de Solid Surface, seno unico con
 * posicion a elegir (centrado / derecha / izquierda / desplazado), a medida,
 * sobre mueble o suspendida, blanca o negra.
 *
 * Hueco a explotar: nadie posiciona BIEN la combinacion ancho exacto +
 * "1 seno" + a medida + Valencia con stock real (Anyway Solid, Coycama,
 * grupodpl). Aqui ganamos con asesoramiento humano por WhatsApp + Solidker.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (estetica + durabilidad +
 * asesoramiento por WhatsApp), capa tecnica para el comprador que mira
 * espesor/seno/instalacion.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Encimera de bano N cm 1 seno").
 * - Materiales REALES: Solid Surface (resina acrilica + cargas minerales)
 *   y madera tecnica HPL. PROHIBIDO marmol, cuarzo, granito.
 * - Solidker = linea propia a medida (Solid Surface por colada), 20-30 dias.
 *   Adrihosan distribuye y fabrica a medida su linea. NO instala.
 * - Financiacion = 3 meses sin intereses (NUNCA 12 ni 36).
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Contacto: bloque estandar (6 opciones, igual que el resto del silo).
 *   Email destacado del briefing: comercial@adrihosan.com.
 * - Sin promesas de sostenibilidad no verificables (la SERP abusa de
 *   "100% reciclable / eco" -> no copiar).
 * - Filter Set FE silo encimeras: 428107.
 *
 * @package Adrihosan
 */

// ============================================================================
// HELPERS COMPARTIDOS
// ============================================================================

/**
 * Devuelve el ancho en cm para el termino actualmente consultado.
 * Por defecto 120 (caso 5387). Extensible: anadir aqui el mapeo si se
 * crean cats de 100/130/150/160 cm.
 */
function _adri_enc1seno_ancho() {
    $tid = (int) get_queried_object_id();
    switch ( $tid ) {
        case 5388: return 140;
        case 5387:
        default:   return 120;
    }
}

// ============================================================================
// RENDER COMPARTIDO - SUPERIOR
// ============================================================================

function _adri_enc1seno_render_superior() {
    $ancho     = _adri_enc1seno_ancho();
    $tid       = (int) get_queried_object_id();
    $term      = get_term( $tid, 'product_cat' );
    $n_prod    = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    // URL del hero por ancho. Mapeo explicito porque los nombres de archivo
    // en /uploads/ no siguen un patron homogeneo. Para anchos nuevos
    // (100/130/150/160) anadir aqui la URL real cuando se suba la imagen.
    $hero_map  = array(
        120 => 'https://www.adrihosan.com/wp-content/uploads/2026/06/lavabo-120-cm-1-seno.jpg',
        140 => 'https://www.adrihosan.com/wp-content/uploads/2026/06/Encimera-bano-140cm-1seno-Adrihosan.jpg',
    );
    $hero_img  = isset( $hero_map[ $ancho ] )
        ? $hero_map[ $ancho ]
        : 'https://www.adrihosan.com/wp-content/uploads/2026/06/Encimera-bano-' . $ancho . 'cm-1seno-Adrihosan.jpg';
    $h1_fall   = 'Encimera de ba&ntilde;o ' . $ancho . ' cm 1 seno';
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('<?php echo esc_url( $hero_img ); ?>');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( $h1_fall ); ?></h1>
            <p class="hero-tagline">Solid Surface a medida, con el seno donde t&uacute; lo quieras.</p>
            <div class="hero-buttons">
                <a href="#catalogo-enc1seno" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20una%20encimera%20de%20ba%C3%B1o%20de%20<?php echo (int) $ancho; ?>%20cm%20con%201%20seno%20a%20medida" class="hero-btn secondary" target="_blank">Pedir a medida por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Una <strong>encimera de ba&ntilde;o de <?php echo (int) $ancho; ?> cm con 1 seno</strong> en Solid Surface convierte el mueble en una pieza continua, sin juntas y sin poros. La fabricamos a medida en nuestra l&iacute;nea Solidker: eliges medida, posici&oacute;n del seno y color, y te la entregamos lista para colocar.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128736;</div>
                    <h3>A medida (Solidker)</h3>
                    <p>Fabricaci&oacute;n propia en Solid Surface, plazo 20-30 d&iacute;as.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#9636;</div>
                    <h3>Seno a elegir</h3>
                    <p>Centrado, derecha, izquierda o desplazado.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129529;</div>
                    <h3>No poroso y antibacteriano</h3>
                    <p>Superficie s&oacute;lida, sin juntas donde se acumule suciedad.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Financiaci&oacute;n 3 meses sin intereses y asesor&iacute;a por WhatsApp.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo encimeras, id 428107) -->
    <div id="destino-filtro-adria-enc1seno" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428107"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="enc1seno-storytelling adrihosan-full-width-block">
        <div class="enc1seno-storytelling-wrapper">
            <h2>Por qu&eacute; una encimera de ba&ntilde;o de <?php echo (int) $ancho; ?> cm con 1 seno en Solid Surface</h2>
            <div class="storytelling-text">
                <p>La <strong>encimera con seno integrado</strong> resuelve en una pieza lo que antes pedia dos: la encimera y el lavabo dejan de ser piezas separadas con junta de silicona en medio. En Solid Surface se fabrica por colada: el seno y la superficie son <strong>una sola pieza continua, sin juntas y sin poros</strong>, por lo que la limpieza es trivial y no aparece la marca negra que sale entre el lavabo apoyado y la encimera con el paso del tiempo.</p>
                <p>El material es <strong>resina acr&iacute;lica con cargas minerales</strong>: c&aacute;lido al tacto, reparable con un lijado suave, preparado para grifer&iacute;a (mural o sobre encimera). Si prefieres lavabo aparte, mira los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">lavabos de Solid Surface</a> o el cat&aacute;logo madre de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/">encimeras de ba&ntilde;o</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-enc1seno" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de encimeras de <?php echo (int) $ancho; ?> cm con 1 seno</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver las <?php echo (int) $n_prod; ?> encimeras. Etiqueta sobre ficha: color y posici&oacute;n del seno.
            <?php else : ?>
                Encimeras de Solid Surface listas o a medida. Etiqueta sobre ficha: color y posici&oacute;n del seno.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

// ============================================================================
// RENDER COMPARTIDO - INFERIOR
// ============================================================================

function _adri_enc1seno_render_inferior() {
    $ancho      = _adri_enc1seno_ancho();
    $ancho_otro = ( 120 === $ancho ) ? 140 : 120;
    $url_otra   = ( 120 === $ancho )
        ? 'https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-140-cm/'
        : 'https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-120-cm/';
    $h2_ancho   = $ancho . ' cm 1 seno';
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="enc1seno-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Tu mueble pide una medida exacta? Cu&eacute;ntanos los cm por WhatsApp con una foto y te decimos plazo y precio.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20la%20medida%20de%20mi%20mueble%20para%20una%20encimera%20de%201%20seno%20a%20medida" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: MEDIDAS, SENO Y ACABADO -->
    <section class="enc1seno-comparativa adrihosan-full-width-block">
        <div class="enc1seno-comparativa-wrapper">
            <h2>Encimera de ba&ntilde;o <?php echo esc_html( $h2_ancho ); ?>: medidas, seno y acabado para acertar</h2>
            <p class="comparativa-intro">La tabla decisoria para elegir bien antes de pedir.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <tbody>
                        <tr><td><strong>Ancho</strong></td><td><?php echo (int) $ancho; ?> cm</td></tr>
                        <tr><td><strong>Fondo est&aacute;ndar</strong></td><td>~46 cm (ajustable a medida)</td></tr>
                        <tr><td><strong>Espesor</strong></td><td>~1,2 cm</td></tr>
                        <tr><td><strong>Seno</strong></td><td>1 seno &middot; centrado / derecha / izquierda / desplazado</td></tr>
                        <tr><td><strong>Material</strong></td><td>Solid Surface (resina acr&iacute;lica + cargas minerales) &middot; tambi&eacute;n madera t&eacute;cnica HPL</td></tr>
                        <tr><td><strong>Instalaci&oacute;n</strong></td><td>Suspendida a pared o sobre mueble</td></tr>
                        <tr><td><strong>Grifer&iacute;a</strong></td><td>Preparada (se indica al pedir)</td></tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">&iquest;Buscas otra anchura o doble seno? Mira la <a href="<?php echo esc_url( $url_otra ); ?>">encimera de <?php echo (int) $ancho_otro; ?> cm 1 seno</a>, la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">encimera de ba&ntilde;o doble seno</a> o las <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-resina/">encimeras de resina</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES SOLID SURFACE -->
    <section class="enc1seno-materials adrihosan-full-width-block">
        <div class="enc1seno-materials-wrapper">
            <h2>Las ventajas del Solid Surface en tu encimera de ba&ntilde;o 1 seno</h2>
            <p class="materials-intro">Las 8 propiedades reales del material (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card"><span class="material-icon">&#128167;</span><h3>No poroso</h3><p>El agua resbala. No se mancha ni se infiltra suciedad.</p></div>
                <div class="material-card"><span class="material-icon">&#129529;</span><h3>Antibacteriano</h3><p>Sin juntas ni microporos donde anide la bacteria.</p></div>
                <div class="material-card"><span class="material-icon">&#9636;</span><h3>Seno integrado sin juntas</h3><p>Fabricado por colada en una sola pieza con la encimera.</p></div>
                <div class="material-card"><span class="material-icon">&#128736;</span><h3>Reparable</h3><p>Las marcas superficiales salen con un lijado suave.</p></div>
                <div class="material-card"><span class="material-icon">&#127777;</span><h3>C&aacute;lido al tacto</h3><p>Acab&aacute;is c&aacute;lido, m&aacute;s agradable que la piedra.</p></div>
                <div class="material-card"><span class="material-icon">&#128688;</span><h3>Preparado para grifer&iacute;a</h3><p>Taladros previstos seg&uacute;n el grifo que elijas.</p></div>
                <div class="material-card"><span class="material-icon">&#128208;</span><h3>Fabricaci&oacute;n a medida</h3><p>Ajustamos cm, posici&oacute;n de seno y color.</p></div>
                <div class="material-card"><span class="material-icon">&#128170;</span><h3>Resistente al uso diario</h3><p>Material de uso comercial e intensivo.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS (SOLIDKER) -->
    <section class="enc1seno-asesoramiento adrihosan-full-width-block">
        <div class="enc1seno-asesoramiento-wrapper">
            <h2>Tu encimera de ba&ntilde;o <?php echo esc_html( $h2_ancho ); ?>, fabricada a tu medida</h2>
            <p class="asesoramiento-intro">Cuatro pasos para tener la pieza exacta que necesitas, en <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige ancho y fondo</strong> seg&uacute;n las medidas de tu mueble.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Posici&oacute;n del seno</strong>: centrado, derecha, izquierda o desplazado.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Color</strong>: blanco, negro o carta Solidker completa.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>La <strong>fabricamos en 20-30 d&iacute;as</strong> y te la enviamos a casa.</p></div>
            </div>

            <p class="asesoramiento-extra-link">Adrihosan distribuye y fabrica a medida su l&iacute;nea propia; <strong>no instala</strong>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20pedir%20presupuesto%20de%20encimera%20a%20medida%20en%20Solid%20Surface%20Solidker" class="bumper-btn" target="_blank">Pedir presupuesto a medida</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="enc1seno-related adrihosan-full-width-block">
        <div class="enc1seno-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="<?php echo esc_url( $url_otra ); ?>">Encimera ba&ntilde;o <?php echo (int) $ancho_otro; ?> cm 1 seno</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">Encimera ba&ntilde;o doble seno</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-resina/">Encimeras de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-negra/">Encimera ba&ntilde;o negra</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-blanca/">Encimera ba&ntilde;o blanca</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-suspendida/">Encimera ba&ntilde;o suspendida</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo Solid Surface</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de ba&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/">Espejos de ba&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/brand/solidker/">Solidker (a medida)</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre la encimera de ba&ntilde;o <?php echo esc_html( $h2_ancho ); ?></h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es Solid Surface y en qu&eacute; se diferencia del m&aacute;rmol o el cuarzo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El <strong>Solid Surface</strong> es <strong>resina acr&iacute;lica con cargas minerales</strong>. Es <strong>no poroso, c&aacute;lido al tacto, reparable</strong> y permite fabricar el seno y la encimera en una sola pieza sin juntas. No es piedra natural ni piedra reconstituida: no es marmol ni cuarzo ni granito.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Puedo elegir d&oacute;nde va el seno?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. En las encimeras a medida eliges <strong>posici&oacute;n del seno</strong>: centrado, derecha, izquierda o desplazado. Es justo lo que pide mucha reforma cuando el mueble tiene una columna de cajones en un lado.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas est&aacute;ndar tiene?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Ancho <?php echo (int) $ancho; ?> cm, <strong>fondo &asymp; 46 cm</strong> y <strong>espesor &asymp; 1,2 cm</strong>. Todas las cotas son ajustables al pedir, dentro de los m&iacute;nimos y m&aacute;ximos de fabricaci&oacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se monta sobre mueble o suspendida a pared?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Las dos opciones. <strong>Suspendida</strong> queda con est&eacute;tica m&aacute;s ligera y deja el suelo despejado; <strong>sobre mueble</strong> es lo cl&aacute;sico y aprovecha el almacenaje.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto tarda la fabricaci&oacute;n a medida?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Las piezas a medida de Solidker se fabrican en <strong>20-30 d&iacute;as</strong>. Si te corre prisa, lo decimos por WhatsApp y miramos si tenemos en stock una medida pr&oacute;xima.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se puede reparar si se raya?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. El Solid Surface se <strong>repara con un lijado suave</strong>: las marcas superficiales desaparecen y la pieza vuelve a su aspecto original. Es una de sus grandes ventajas frente a las piedras naturales.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Viene con grifer&iacute;a o desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La encimera viene <strong>preparada para el tipo de grifo que elijas</strong> (mural, sobre encimera o lateral), pero el grifo y la v&aacute;lvula se eligen aparte. As&iacute; ajustas el estilo y el presupuesto sin atarte a un kit cerrado.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda la pen&iacute;nsula y financiamos en <strong>3 meses sin intereses</strong>. Si quieres confirmar plazo o coste para tu zona, escr&iacute;benos al WhatsApp 96 195 71 36.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Tu medida no es exacta? Te la fabricamos.</h2><p>Soy Ricardo. M&aacute;ndame foto de tu mueble y los cm exactos, y te paso plazo y precio de la encimera a medida en Solidker.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20una%20encimera%20de%20ba%C3%B1o%20de%201%20seno%20a%20medida" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

// ============================================================================
// ENTRY FUNCTIONS - una por cat (las llama functions.php via setup function)
// ============================================================================

function adrihosan_categoria_encimera_bano_1seno_contenido_superior() {
    _adri_enc1seno_render_superior();
}
function adrihosan_categoria_encimera_bano_1seno_contenido_inferior() {
    _adri_enc1seno_render_inferior();
}
