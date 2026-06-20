<?php
/**
 * Category: Encimera de bano 140 cm 1 seno (ID: 5388)
 *
 * Standalone, independiente del 5387 (120 cm). Cada cat tiene su propio
 * PHP para customizar libremente.
 *
 * Keyword lider: "encimera de bano 140 cm 1 seno"  11 clicks / 171 impr GSC.
 * Producto de margen (Solid Surface, linea propia Solidker).
 *
 * Angulo SERP: encimera-lavabo integrada de Solid Surface, seno unico,
 * fabricacion a medida, sobre mueble o suspendida. A 140 cm el DOBLE SENO
 * es alternativa real -> esta pagina defiende el seno UNICO con mucha zona
 * de apoyo y deriva al doble seno a quien quiera dos.
 *
 * Posicion del seno en 140 cm: centrado o desplazado a un lado (a 140 ya
 * no caben 4 posiciones como en 120; cabe centrado o lateral).
 *
 * Pieza ancla del catalogo: lavabo Solid Surface KRION K-LIFE (heredada
 * del 301 del antiguo lavabo-140-cm-1-seno).
 *
 * Buyer persona PRIMARIO: Pareja Reformadora con espacio (140 da una
 * superficie amplia para el dia a dia de dos personas sin doblar el lavabo).
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Encimera de bano 140 cm 1 seno").
 * - Materiales REALES: Solid Surface (resina acrilica + cargas minerales)
 *   y madera tecnica HPL. PROHIBIDO marmol, cuarzo, granito.
 * - Solidker = linea propia a medida (Solid Surface por colada), 20-30 dias.
 *   Adrihosan distribuye y fabrica a medida su linea. NO instala.
 * - Financiacion = 3 meses sin intereses (NUNCA 12 ni 36).
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Contacto: bloque estandar (6 opciones). Email destacado del briefing:
 *   comercial@adrihosan.com.
 * - Sin promesas de sostenibilidad no verificables.
 * - Filter Set FE silo encimeras: 428107.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 5388 - ENCIMERA DE BANO 140 CM 1 SENO (standalone)
// ============================================================================

function adrihosan_categoria_encimera_bano_140cm_contenido_superior() {
    $term      = get_term( 5388, 'product_cat' );
    $n_prod    = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/lavabo-120-cm-1-seno.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Encimera de ba&ntilde;o 140 cm 1 seno' ); ?></h1>
            <p class="hero-tagline">Solid Surface a medida, con el seno donde t&uacute; lo quieras.</p>
            <div class="hero-buttons">
                <a href="#catalogo-enc140-1seno" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20una%20encimera%20de%20ba%C3%B1o%20de%20140%20cm%20con%201%20seno%20a%20medida" class="hero-btn secondary" target="_blank">Pedir a medida por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Una <strong>encimera de ba&ntilde;o de 140 cm con 1 seno</strong> te da una superficie amplia con un &uacute;nico lavabo y mucha zona de apoyo. La fabricamos a medida en nuestra l&iacute;nea Solidker, en Solid Surface de una sola colada: eliges seno, color y fondo, y te llega lista para colocar.
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
                    <p>Centrado o desplazado a un lado.</p>
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
    <div id="destino-filtro-adria-enc140-1seno" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428107"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="enc140-1seno-storytelling adrihosan-full-width-block">
        <div class="enc140-1seno-storytelling-wrapper">
            <h2>Por qu&eacute; una encimera de ba&ntilde;o de 140 cm con 1 seno en Solid Surface</h2>
            <div class="storytelling-text">
                <p>A 140 cm tienes <strong>espacio de sobra alrededor de un solo seno</strong> para el d&iacute;a a d&iacute;a de dos personas, sin necesidad de doblar el lavabo. La encimera y el seno se fabrican <strong>por colada en una sola pieza</strong>, sin juntas ni microporos: el material es <strong>no poroso, antibacteriano</strong> y se limpia con un pa&ntilde;o h&uacute;medo, sin la marca negra que sale entre el lavabo apoyado y la encimera con el tiempo.</p>
                <p>El Solid Surface es <strong>resina acr&iacute;lica con cargas minerales</strong>: c&aacute;lido al tacto, reparable con un lijado suave, preparado para grifer&iacute;a mural o sobre encimera. Si compart&iacute;s el ba&ntilde;o y prefer&iacute;s dos lavabos, mira la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">encimera de ba&ntilde;o doble seno</a>. Y si dudas con el tipo, el cat&aacute;logo madre de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/">encimeras de ba&ntilde;o</a> te ayuda a comparar.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-enc140-1seno" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de encimeras de 140 cm con 1 seno</h2>
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

function adrihosan_categoria_encimera_bano_140cm_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="enc140-1seno-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">Cu&eacute;ntanos tu medida por WhatsApp con una foto y te decimos plazo y precio en el d&iacute;a.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20la%20medida%20de%20mi%20mueble%20para%20una%20encimera%20de%20140%20cm%201%20seno%20a%20medida" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: MEDIDAS, SENO Y ACABADO -->
    <section class="enc140-1seno-comparativa adrihosan-full-width-block">
        <div class="enc140-1seno-comparativa-wrapper">
            <h2>Encimera de ba&ntilde;o 140 cm 1 seno: medidas, seno y acabado para acertar</h2>
            <p class="comparativa-intro">La tabla decisoria para elegir bien antes de pedir.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <tbody>
                        <tr><td><strong>Ancho</strong></td><td>140 cm</td></tr>
                        <tr><td><strong>Fondo est&aacute;ndar</strong></td><td>~46 cm (ajustable a medida)</td></tr>
                        <tr><td><strong>Espesor</strong></td><td>~1,2 cm</td></tr>
                        <tr><td><strong>Seno</strong></td><td>1 seno &middot; centrado o desplazado a un lado</td></tr>
                        <tr><td><strong>Material</strong></td><td>Solid Surface (resina acr&iacute;lica + cargas minerales) &middot; tambi&eacute;n madera t&eacute;cnica HPL</td></tr>
                        <tr><td><strong>Instalaci&oacute;n</strong></td><td>Suspendida a pared o sobre mueble</td></tr>
                        <tr><td><strong>Grifer&iacute;a</strong></td><td>Preparada (se indica al pedir)</td></tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">&iquest;Otra anchura o doble seno? Mira la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">encimera de ba&ntilde;o doble seno</a> (la alternativa natural a 140), la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-120-cm/">encimera de 120 cm 1 seno</a> o la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-160-cm/">encimera de 160 cm</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES SOLID SURFACE -->
    <section class="enc140-1seno-materials adrihosan-full-width-block">
        <div class="enc140-1seno-materials-wrapper">
            <h2>Las ventajas del Solid Surface en tu encimera de ba&ntilde;o 1 seno</h2>
            <p class="materials-intro">Las 8 propiedades reales del material (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card"><span class="material-icon">&#128167;</span><h3>No poroso</h3><p>El agua resbala. No se mancha ni se infiltra suciedad.</p></div>
                <div class="material-card"><span class="material-icon">&#129529;</span><h3>Antibacteriano</h3><p>Sin juntas ni microporos donde anide la bacteria.</p></div>
                <div class="material-card"><span class="material-icon">&#9636;</span><h3>Seno integrado sin juntas</h3><p>Fabricado por colada en una sola pieza con la encimera.</p></div>
                <div class="material-card"><span class="material-icon">&#128736;</span><h3>Reparable</h3><p>Las marcas superficiales salen con un lijado suave.</p></div>
                <div class="material-card"><span class="material-icon">&#127777;</span><h3>C&aacute;lido al tacto</h3><p>Acabado c&aacute;lido, m&aacute;s agradable que la piedra.</p></div>
                <div class="material-card"><span class="material-icon">&#128688;</span><h3>Preparado para grifer&iacute;a</h3><p>Taladros previstos seg&uacute;n el grifo que elijas.</p></div>
                <div class="material-card"><span class="material-icon">&#128208;</span><h3>Fabricaci&oacute;n a medida</h3><p>Ajustamos cm, posici&oacute;n de seno y color.</p></div>
                <div class="material-card"><span class="material-icon">&#128170;</span><h3>Resistente al uso diario</h3><p>Material de uso comercial e intensivo.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS (SOLIDKER) -->
    <section class="enc140-1seno-asesoramiento adrihosan-full-width-block">
        <div class="enc140-1seno-asesoramiento-wrapper">
            <h2>Tu encimera de ba&ntilde;o 140 cm 1 seno, fabricada a tu medida</h2>
            <p class="asesoramiento-intro">Cuatro pasos para tener la pieza exacta que necesitas, en <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige ancho y fondo</strong> seg&uacute;n las medidas de tu mueble.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Posici&oacute;n del seno</strong>: centrado o desplazado a un lado.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Color</strong>: blanco, negro o carta Solidker completa.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>La <strong>fabricamos en 20-30 d&iacute;as</strong> y te la enviamos a casa.</p></div>
            </div>

            <p class="asesoramiento-extra-link">Adrihosan distribuye y fabrica a medida su l&iacute;nea propia; <strong>no instala</strong>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20pedir%20presupuesto%20de%20encimera%20140%20cm%201%20seno%20a%20medida%20en%20Solidker" class="bumper-btn" target="_blank">Pedir presupuesto a medida</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="enc140-1seno-related adrihosan-full-width-block">
        <div class="enc140-1seno-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-120-cm/">Encimera ba&ntilde;o 120 cm 1 seno</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">Encimera ba&ntilde;o doble seno</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-resina/">Encimeras de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-negra/">Encimera ba&ntilde;o negra</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-blanca/">Encimera ba&ntilde;o blanca</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-suspendida/">Encimera ba&ntilde;o suspendida</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo Solid Surface</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de ba&ntilde;o suspendidos</a>
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

    <!-- 12. FAQs (9 preguntas, NO json-ld - Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre la encimera de ba&ntilde;o 140 cm 1 seno</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es Solid Surface y en qu&eacute; se diferencia del m&aacute;rmol o el cuarzo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El <strong>Solid Surface</strong> es <strong>resina acr&iacute;lica con cargas minerales</strong>. Es <strong>no poroso, c&aacute;lido al tacto, reparable</strong> y permite fabricar el seno y la encimera en una sola pieza sin juntas. No es piedra natural ni piedra reconstituida: no es marmol ni cuarzo ni granito.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;A 140 cm no es mejor un doble seno?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Depende del uso. Con <strong>un solo seno bien posicionado</strong> tienes mucha zona de apoyo libre, ideal para el d&iacute;a a d&iacute;a de dos personas que no coinciden a la vez. Si compart&iacute;s el ba&ntilde;o en horas punta (parejas con horarios solapados), entonces s&iacute; conviene la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">encimera doble seno</a>.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;D&oacute;nde puedo poner el seno en una encimera de 140 cm?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En las encimeras a medida eliges entre <strong>seno centrado o desplazado a un lado</strong>. La opci&oacute;n desplazada deja una zona de apoyo m&aacute;s amplia y se usa mucho cuando el mueble tiene una columna de cajones en un extremo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tiene la encimera de 140 cm?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Ancho <strong>140 cm</strong>, <strong>fondo &asymp; 46 cm</strong> y <strong>espesor &asymp; 1,2 cm</strong>. Todas las cotas son ajustables al pedir, dentro de los m&iacute;nimos y m&aacute;ximos de fabricaci&oacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se monta sobre mueble o suspendida a pared?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Las dos opciones. <strong>Suspendida</strong> queda con est&eacute;tica m&aacute;s ligera y deja el suelo despejado; <strong>sobre mueble</strong> es lo cl&aacute;sico y aprovecha el almacenaje.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto tarda la fabricaci&oacute;n a medida?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Las piezas a medida de Solidker se fabrican en <strong>20-30 d&iacute;as</strong>. Si te corre prisa, lo decimos por WhatsApp y miramos si tenemos en stock una medida pr&oacute;xima a la tuya.</p></div>
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
                <div><h2>&iquest;Tu medida no es exacta? Te la fabricamos.</h2><p>Soy Ricardo. M&aacute;ndame foto de tu mueble de 140 cm y los cm exactos, y te paso plazo y precio de la encimera a medida en Solidker.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20una%20encimera%20de%20ba%C3%B1o%20de%20140%20cm%201%20seno%20a%20medida" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
