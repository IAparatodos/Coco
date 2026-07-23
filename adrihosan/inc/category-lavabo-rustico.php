<?php
/**
 * Category: Lavabo rustico (ID: 2669) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 83 productos con el termino
 * (count 74 desfasado). La mayor palanca restante del silo: 7.799 impr/12m,
 * 82 clics, CTR 1,05%, con posiciones YA ganadas ("lavabos rusticos" 4,5;
 * "lavamanos rustico" 2,4; "lavabos de piedra rusticos" 1,7).
 *
 * Cero canibalizacion (verificado query+page). Las ex-hijas hacen 301
 * (rustico-piedra con 2 saltos - repuntar en Archivo 2). OJO: rankeamos
 * pos 1,7-1,9 para "lavabo (de) madera rustico" SIN producto de madera
 * (el "wood" del catalogo es de cemento) -> FAQ 2 honesta.
 *
 * Inventario real verificado (83):
 *   - Marmol natural (16): Candy, Amapola, Rosa, Lirio, Jazmin, Clavel,
 *     Dalia, Begonia, Coleo, Clematis, Calima. Crema/gris/negro, 40-52 cm,
 *     159,90-236,90 eur. Veta unica por pieza.
 *   - Piedra natural (2): Akutan 190,90 - Petra 334,90.
 *   - Linea cruda artesana (~8): Nordic, Cuenca, Sicilia, New Lys,
 *     Villareal, Plasencia, Carnac texturizado. 115,90-245,90 eur.
 *   - Terrazo (2): Reims, Broome. Cemento (1): Wood. 135,90 eur.
 *   - Ceramicos clasicos + extrafinos + metalicos, desde 78,90 eur.
 *   - Suspendidos (6) y de pie (5) + 2 Solid Surface blancos.
 * Medidas 30-75 cm.
 *
 * Angulo unico: rustico = la materia a la vista (veta, piedra, terrazo,
 * crudo). No es "estilo antiguo": el rustico moderno es una pieza con
 * textura sobre un mueble sereno. PROHIBIDO: "encanto", "tu bano tu estilo".
 * Copy humanizado de serie (0 em-dashes, sin triadas clonadas).
 *
 * REGLAS DURAS (briefing junio 2026): H1 via adrihosan_h1_dinamico();
 * datos reales; distribuidor (Solidker = linea propia); financiacion 3
 * meses; FAQs sin json-ld, texto EXACTO del wireframe; FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2669 - LAVABO RUSTICO (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabo_rustico_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabo-rustico.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo r&uacute;stico' ); ?></h1>
            <p class="hero-tagline">La materia a la vista: m&aacute;rmol, piedra, terrazo y barro crudo.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavrus" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20r%C3%BAstico%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo r&uacute;stico</strong> se elige por la materia: m&aacute;rmol con su veta, piedra natural, terrazo o cer&aacute;mica en acabado crudo. Aqu&iacute; hay 83 modelos de 30 a 75 cm, desde 78,90 &euro;, y ninguna pieza de m&aacute;rmol o piedra es igual a otra.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129704;</div>
                    <h3>M&aacute;rmol y piedra natural</h3>
                    <p>18 piezas con veta &uacute;nica: no hay dos iguales.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127968;</div>
                    <h3>83 modelos desde 78,90 &euro;</h3>
                    <p>Del cer&aacute;mico cl&aacute;sico al terrazo y al crudo artesano.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a elegir</h3>
                    <p>Materia, medida y grifer&iacute;a por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavrus" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavrus-storytelling adrihosan-full-width-block">
        <div class="lavrus-storytelling-wrapper">
            <h2>El r&uacute;stico de verdad es la materia</h2>
            <div class="storytelling-text">
                <p>R&uacute;stico no significa viejo. Significa que el material se nota: la veta del <strong>m&aacute;rmol</strong>, el grano del <strong>terrazo</strong>, la superficie irregular de una pieza en acabado <strong>crudo</strong> como las series Nordic, Cuenca o el Carnac texturizado. Frente al ba&ntilde;o cl&iacute;nico de superficies perfectas, aqu&iacute; cada lavabo tiene su car&aacute;cter.</p>
                <p>Si buscas piedra tallada con todas sus consecuencias, la Petra y la Akutan son las dos piezas de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-piedra/">piedra natural</a> del cat&aacute;logo. Y si el presupuesto manda, la cer&aacute;mica cl&aacute;sica arranca en 78,90 &euro; y comparte mesa con cualquiera de las anteriores.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavrus" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos r&uacute;sticos</h2>
        <p class="product-loop-subtitle">
            M&aacute;rmol, piedra, terrazo, crudo y cer&aacute;mica, de 30 a 75 cm, desde 78,90 &euro;. Usa el filtro para acotar por material, color o medida.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_rustico_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavrus-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;M&aacute;rmol, terrazo o crudo? M&aacute;ndanos foto del ba&ntilde;o y te decimos qu&eacute; materia le va.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20dig%C3%A1is%20qu%C3%A9%20lavabo%20r%C3%BAstico%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: LAS TRES MATERIAS -->
    <section class="lavrus-comparativa adrihosan-full-width-block">
        <div class="lavrus-comparativa-wrapper">
            <h2>M&aacute;rmol y piedra, crudo y terrazo, o cer&aacute;mica</h2>
            <p class="comparativa-intro">Las tres familias del cat&aacute;logo, comparadas sin humo.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Familia</th>
                            <th>Car&aacute;cter</th>
                            <th>Cuidados</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>M&aacute;rmol y piedra natural</strong></td>
                            <td>Veta &uacute;nica, peso, pieza para siempre</td>
                            <td>Sellado peri&oacute;dico, pH neutro</td>
                            <td>159,90 &ndash; 334,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Crudo, terrazo y cemento</strong></td>
                            <td>Textura artesana, tono c&aacute;lido</td>
                            <td>Limpieza normal</td>
                            <td>115,90 &ndash; 245,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Cer&aacute;mica cl&aacute;sica</strong></td>
                            <td>Brillo de siempre, blanco o negro</td>
                            <td>La m&aacute;s f&aacute;cil</td>
                            <td>78,90 &ndash; 199,90 &euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Truco de compra: si el mueble ya es protagonista, cer&aacute;mica o terrazo discretos. Si el mueble es sereno, deja que mande la veta del m&aacute;rmol o la piedra.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavrus-materials adrihosan-full-width-block">
        <div class="lavrus-materials-wrapper">
            <h2>Claves del lavabo r&uacute;stico</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>M&aacute;rmol con veta &uacute;nica</h3>
                    <p>16 modelos en crema, gris y negro. Cada pieza, distinta.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128142;</span>
                    <h3>Piedra natural</h3>
                    <p>Petra y Akutan, talladas en piedra de verdad.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127993;</span>
                    <h3>L&iacute;nea cruda artesana</h3>
                    <p>Nordic, Cuenca, Sicilia y el Carnac texturizado.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Terrazo y cemento</h3>
                    <p>Reims, Broome y Wood: grano visible por 135,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 30 a 75 cm</h3>
                    <p>El grueso son redondos de 40 a 46 cm de di&aacute;metro.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Tres instalaciones</h3>
                    <p>Sobre encimera, suspendidos y de pie. La misma materia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavrus-asesoramiento adrihosan-full-width-block">
        <div class="lavrus-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo r&uacute;stico</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar a la primera.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige la materia</strong>: m&aacute;rmol o piedra, crudo o terrazo, cer&aacute;mica.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Mide</strong>: redondos de 40-46 cm para casi todo; hasta 75 cm si la encimera lo permite.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Decide instalaci&oacute;n</strong>: sobre encimera, suspendido o de pie.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Remata con el grifo</strong>: negro mate o lat&oacute;n envejecido acompa&ntilde;an la materia.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida o acabado que no encuentras? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20r%C3%BAstico" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavrus-related adrihosan-full-width-block">
        <div class="lavrus-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-piedra/">Lavabos de piedra y m&aacute;rmol</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">Lavabo blanco</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">Lavabo redondo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-exterior/">Lavabo exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/muebles-de-bano-rusticos/">Muebles de ba&ntilde;o r&uacute;sticos</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo r&uacute;stico</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; hace r&uacute;stico a un lavabo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La materia a la vista: m&aacute;rmol con su veta, piedra natural, terrazo o cer&aacute;mica en acabado crudo y texturizado. La gracia no est&aacute; en la perfecci&oacute;n sino en el car&aacute;cter: cada pieza tiene el suyo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Ten&eacute;is lavabos de madera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No, y es a prop&oacute;sito: la madera sufre mucho con el agua del d&iacute;a a d&iacute;a. El aire c&aacute;lido que buscas te lo dan el acabado crudo (Nordic, Cuenca, Sicilia), el terrazo y el cemento, sin ese mantenimiento.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; materiales son?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>M&aacute;rmol natural (16 modelos en crema, gris y negro), piedra natural (Petra y Akutan), terrazo, cemento y cer&aacute;mica, del blanco cl&aacute;sico al acabado crudo artesano. El material exacto est&aacute; en cada ficha.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El m&aacute;rmol o la piedra necesitan mantenimiento?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un sellado peri&oacute;dico y limpieza con jab&oacute;n de pH neutro. Evita estropajos y productos &aacute;cidos como el vinagre o el antical: atacan la piedra natural.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;La pieza que me llega es igual que la de la foto?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Parecida, no id&eacute;ntica: en m&aacute;rmol y piedra la veta cambia de una pieza a otra. Es justo lo que se busca en un lavabo r&uacute;stico, que no haya dos iguales.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tienen?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De los 30 cm del Aure a los 75 del Gemini. El grueso son redondos de 40 a 46 cm de di&aacute;metro, con fondos y alturas que ves en cada ficha.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Pega un lavabo r&uacute;stico en un ba&ntilde;o moderno?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Es la combinaci&oacute;n que m&aacute;s se lleva: una pieza de materia (m&aacute;rmol, terrazo, crudo) sobre un mueble de l&iacute;neas rectas. El contraste hace el ba&ntilde;o, sin recargar nada.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un lavabo r&uacute;stico?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Los cer&aacute;micos parten de 78,90 &euro;; la l&iacute;nea cruda va de 115,90 a 245,90 &euro;; terrazo y cemento rondan los 135,90 &euro;; el m&aacute;rmol natural de 159,90 a 236,90 &euro; y la piedra de 190,90 a 334,90 &euro;.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto del ba&ntilde;o o del mueble y te digo qu&eacute; materia encaja: m&aacute;rmol, piedra, terrazo o crudo, con su grifo y todo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20r%C3%BAstico%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
