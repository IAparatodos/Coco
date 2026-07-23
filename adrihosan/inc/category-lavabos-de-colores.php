<?php
/**
 * Category: Lavabos de colores (ID: 2703) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 150 productos.
 * 8o ciclo del silo tras 2726/2699/2669/2668 (15-jul), 2701 (16-jul),
 * 91 sobre-encimera (17/18-jul) y 2665 baratos (20-jul).
 *
 * Caso SEO (GSC 20-jul): un PRODUCTO le gana a la categoria en su propia
 * busqueda. Para "lavabos de colores" la ficha ONNI azul marino rankea en
 * pos 2,4 con 747 impr y CTR 0,27%, mientras la categoria esta en pos 12,2.
 * Es un desajuste de intencion: quien busca en plural quiere ver la carta,
 * no un lavabo azul suelto. La categoria ademas se hunde: 12m 1.108 impr /
 * 8 clics / pos 12,2 -> 90d 283 impr / CERO clics / pos 18,4.
 * Estado previo: plantilla Woo por defecto, descripcion de ChatGPT y
 * FAQPage huerfano cuya ultima pregunta INVENTABA una garantia.
 *
 * Canibalizacion con hermanas: NO hay. verde (2701), azul (2721), gris
 * (2676), negros (2723) y blanco (2673) son hermanas y captan sus queries
 * de color; esta pagina solo persigue las genericas. PROHIBIDO que compita
 * por "lavabo verde", "lavabo azul", etc. -> van como pills.
 *
 * Inventario real verificado 20-jul-2026: es un SISTEMA de color, no un
 * cajon de sastre. 5 series Solid Surface (COSS 36, BINX 36, ONNI 55,
 * ARVO 55, TOPI 60) x 14 colores x mono o bicolor con blanco. Los 14:
 * blanco, negro, gris claro, gris oscuro, humo, lino, arcilla, ocre,
 * barro, fuego, azul marino, azul verdoso, verde claro y verde army.
 * Ceramicos aparte: metalizados oro/plata/bronce y bicolor blanco-plata
 * (282,90 eur), Osiris negro-bronce (316,90 eur), crudo Carnac y varios
 * negros. Precios de 94,90 a 316,90 eur.
 *
 * Angulo unico: es una CARTA de color. Eliges tono y formato por separado.
 * Y traduce el vocabulario del cliente al del catalogo: la gente busca
 * "vison" y "pergamon" (nombres clasicos de sanitario) y esa familia aqui
 * son lino, arcilla y barro. Sin prometer un color que no existe.
 * PROHIBIDO: "personalidad", "frescura", "transforma tu banyo", "coleccion",
 * "punto focal", garantias inventadas, "elegancia" y "funcionalidad"
 * (veto del operador 20-jul). Copy humanizado de serie.
 *
 * OJO: los precios caducan. Verificados el 20-jul-2026.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); datos reales; distribuidor
 * (Solidker = linea propia, unica mencion legitima de "a medida");
 * financiacion 3 meses; FAQs sin json-ld; FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2703 - LAVABOS DE COLORES (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabos_de_colores_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabos-de-colores.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabos de colores' ); ?></h1>
            <p class="hero-tagline">Catorce colores. Cinco formatos. T&uacute; eliges la combinaci&oacute;n.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavcol" class="hero-btn primary">Ver la carta de colores</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20color%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>lavabos de colores</strong> de esta p&aacute;gina son una carta: <strong>14 tonos</strong> en Solid Surface que puedes pedir en cinco formatos distintos, monocolor o combinados con blanco, desde 94,90 &euro;.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>14 colores</h3>
                    <p>Del lino y el arcilla al azul marino o el verde army.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>5 formatos</h3>
                    <p>Bol de 36, ovalado y recto de 55, rectangular de 60 cm.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>Color en toda la masa</h3>
                    <p>No es esmalte: no hay capa que desgastar.</p>
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
    <div id="destino-filtro-adria-lavcol" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavcol-storytelling adrihosan-full-width-block">
        <div class="lavcol-storytelling-wrapper">
            <h2>Una carta de 14 colores, no un caj&oacute;n de sastre</h2>
            <div class="storytelling-text">
                <p>La mayor&iacute;a de estos lavabos son la misma pieza de <strong>Solid Surface</strong> en tonos distintos, as&iacute; que el color y la forma se eligen por separado: escoges el tono que quieres y despu&eacute;s si lo prefieres en bol de 36 cm, ovalado de 55 o rectangular de 60. Cualquier combinaci&oacute;n existe.</p>
                <p>Si vienes buscando un <strong>color vis&oacute;n o pergamon</strong>, con ese nombre no lo vas a encontrar, pero esa familia de beige y topo la cubren tres tonos de la carta: <strong>lino, arcilla y barro</strong>. Y si ya sabes qu&eacute; color quieres, tienes su p&aacute;gina propia: <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-verde/">verde</a>, <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-azul/">azul</a>, <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-gris/">gris</a> o <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">negro</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavcol" class="product-loop-header">
        <h2 class="product-loop-title">La carta de colores al completo</h2>
        <p class="product-loop-subtitle">
            14 tonos en Solid Surface y los cer&aacute;micos en oro, plata, bronce y crudo. De 94,90 a 316,90 &euro;. Usa el filtro para acotar por color, forma o medida.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabos_de_colores_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavcol-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas con el tono? M&aacute;ndanos una foto del alicatado o del mueble y te decimos cu&aacute;l de los catorce encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20una%20foto%20de%20mi%20ba%C3%B1o%20para%20elegir%20color%20de%20lavabo" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. LA CARTA POR FAMILIAS -->
    <section class="lavcol-comparativa adrihosan-full-width-block">
        <div class="lavcol-comparativa-wrapper">
            <h2>Los 14 colores, por familias</h2>
            <p class="comparativa-intro">Los nombres son los del cat&aacute;logo. As&iacute; se agrupan.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Familia</th>
                            <th>Tonos</th>
                            <th>D&oacute;nde funcionan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Neutros</strong></td>
                            <td>Blanco, negro, gris claro, gris oscuro, humo</td>
                            <td>Ba&ntilde;os donde el color lo pone el alicatado</td>
                        </tr>
                        <tr>
                            <td><strong>Tierras</strong></td>
                            <td>Lino, arcilla, barro, ocre, fuego</td>
                            <td>Aqu&iacute; est&aacute; la familia del vis&oacute;n y el pergamon</td>
                        </tr>
                        <tr>
                            <td><strong>Fr&iacute;os</strong></td>
                            <td>Azul marino, azul verdoso</td>
                            <td>Con maderas claras y grifer&iacute;a en negro mate</td>
                        </tr>
                        <tr>
                            <td><strong>Verdes</strong></td>
                            <td>Verde claro, verde army</td>
                            <td>El punto de color m&aacute;s pedido de los &uacute;ltimos a&ntilde;os</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Todos existen en monocolor o con el interior en blanco. El bicolor rebaja la presencia del color y suele salir algo m&aacute;s econ&oacute;mico.</p>
        </div>
    </section>

    <!-- 8. MAS ALLA DEL SOLID SURFACE -->
    <section class="lavcol-materials adrihosan-full-width-block">
        <div class="lavcol-materials-wrapper">
            <h2>M&aacute;s all&aacute; de la carta</h2>
            <p class="materials-intro">Lo que hay en cer&aacute;mica, fuera del sistema de 14 tonos.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#127942;</span>
                    <h3>Oro, plata y bronce</h3>
                    <p>Bol cer&aacute;mico de 40 cm con ba&ntilde;o metalizado, 282,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127761;</span>
                    <h3>Osiris negro-bronce</h3>
                    <p>Extrafino mate de 35,5 cm, la pieza m&aacute;s cara: 316,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9899;</span>
                    <h3>Negros cer&aacute;micos</h3>
                    <p>Bolonia y Florencia de pie, Nordic, Libra, M&oacute;naco y Satet.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>Crudo texturizado</h3>
                    <p>El Carnac, para quien busca un blanco roto con textura.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127917;</span>
                    <h3>Bicolor con blanco</h3>
                    <p>Interior blanco y exterior en color, en toda la carta.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128176;</span>
                    <h3>De 94,90 a 316,90 &euro;</h3>
                    <p>Desde el cer&aacute;mico b&aacute;sico hasta el metalizado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavcol-asesoramiento adrihosan-full-width-block">
        <div class="lavcol-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir el color</h2>
            <p class="asesoramiento-intro">Cuatro pasos para no arrepentirte.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mira lo que ya tienes</strong>: si el alicatado manda, ve a neutros; si el ba&ntilde;o es blanco entero, el color puede ser el protagonista.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Mono o bicolor</strong>: todo en color para presumir, interior blanco cuando no quieras saturar.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Elige el formato</strong>: bol de 36 para aseos, 55 sobre muebles de 80 a 100, y 60 cuando el lavabo manda.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Remata con el grifo</strong>: negro mate o acero cepillado acompa&ntilde;an mejor que el cromo brillante.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Necesitas un color que no est&aacute; en la carta? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20color%20de%20lavabo" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavcol-related adrihosan-full-width-block">
        <div class="lavcol-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/">Lavabos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-verde/">Lavabo verde</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-azul/">Lavabo azul</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-gris/">Lavabo gris</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // La descripcion actual es basura de ChatGPT; la reemplaza el Archivo 2.
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los lavabos de colores</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;ntos colores hay y cu&aacute;les son?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Catorce en Solid Surface: blanco, negro, gris claro, gris oscuro, humo, lino, arcilla, ocre, barro, fuego, azul marino, azul verdoso, verde claro y verde army. Aparte est&aacute;n los cer&aacute;micos en oro, plata, bronce y crudo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>Busco un lavabo color vis&oacute;n o pergamon, &iquest;lo ten&eacute;is?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Con ese nombre no, pero esa familia de beige y topo la cubren tres tonos de la carta: lino, arcilla y barro. Si nos dices con qu&eacute; lo vas a combinar, te decimos cu&aacute;l se acerca m&aacute;s a lo que tienes en mente.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Puedo elegir el color y la forma por separado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, y esa es la gracia. Hay cinco formatos &mdash;bol de 36 cm, ovalado y rectangular de 55, rectangular de 60&mdash; y cada uno se hace en los catorce colores.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es eso del bicolor?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Que el interior del lavabo va en blanco y el exterior en color. Se ve el color de frente pero el vaso no satura, y suele salir algo m&aacute;s econ&oacute;mico que el monocolor.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El color se desti&ntilde;e o se raya?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En Solid Surface el color va en toda la masa de la pieza, no es un esmalte, as&iacute; que no hay capa que desgastar. Un ara&ntilde;azo superficial se repara con un lijado suave.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuestan?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Desde 94,90 &euro; el cer&aacute;mico m&aacute;s econ&oacute;mico. Los metalizados en oro, plata y bronce est&aacute;n en 282,90 &euro; y el Osiris negro-bronce, que es el m&aacute;s caro, en 316,90 &euro;.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Los hay en amarillo, rosa o pintados a mano?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En la carta no. Lo m&aacute;s cercano al amarillo son el ocre y el fuego. Si necesitas un color concreto que no est&aacute;, lo fabricamos a medida en Solid Surface con nuestra l&iacute;nea Solidker, en 20 o 30 d&iacute;as.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Con qu&eacute; combino un lavabo de color?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre maderas claras y blancos funciona casi cualquier tono de la carta. Si el ba&ntilde;o ya tiene mucho color en el alicatado, el bicolor con blanco es la opci&oacute;n segura. De grifer&iacute;a, negro mate o acero cepillado antes que cromo brillante.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame una foto del ba&ntilde;o y te digo qu&eacute; tono de la carta encaja, en qu&eacute; formato y con qu&eacute; grifo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20color%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
