<?php
/**
 * Category: Lavabo redondo (ID: 2668) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 35 productos publicados.
 * 4o ciclo del 15-jul-2026 (tras 2726, 2699, 2669). Empate en demanda con
 * lavabos-pie (3.082 vs 3.104 impr/12m); gana por catalogo (35 vs 12).
 *
 * Caso SEO (GSC 12m): 3.082 impr / 9 clics / CTR 0,29% (el peor del silo).
 * Head "lavabo redondo" 1.375 impr pos 16,0. "lavabo redondo pequeno" 416
 * pos 10,5. Patron gris chico: "lavabo redondo blanco" (104 impr) lo sirve
 * el producto round mini en pos 2,7 -> la categoria debe absorberlo.
 * "lavabo de pie redondo" la sirven productos de pie y lavabos-pie ->
 * FAQ 7 + pill, no pisar.
 *
 * Inventario real verificado (35 publicados):
 *   - Ceramicos redondos (dominante): round mini 41 (80,90 - el "desde"),
 *     Tebas, bol, Saja, Tera, Plasencia, Villareal, Cuenca blanco/crudo,
 *     Sicilia crudo, Nordic crudo/negro, New Lys, Carnac texturizado.
 *   - Metalicos: bol plata/oro/bronce y bicolor - 282,90.
 *   - Marmol natural: Candy gris, Jazmin gris-blanco, Begonia crema.
 *   - Terrazo: Broome negro 135,90.
 *   - Solid Surface: Bolonia D37, Eos D39, Orbed D39,5 en colores, Fruit,
 *     Arena 45.
 *   - Suspendidos Beca 45 (blanco/negro) y de pie Lijar 46,5.
 * Diametros 36-46,5 cm. Desde 80,90 eur.
 *
 * Angulo unico: el redondo es el formato compacto por excelencia (todo
 * entre 36 y 46 cm): la decision no es la forma sino la MATERIA. Fuerte
 * para aseos. PROHIBIDO: "calidad y estilo", "transforma tu espacio".
 * Copy humanizado de serie.
 *
 * REGLAS DURAS (briefing junio 2026): H1 via adrihosan_h1_dinamico();
 * datos reales; distribuidor (Solidker = linea propia); financiacion 3
 * meses; FAQs sin json-ld, texto EXACTO del wireframe; FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2668 - LAVABO REDONDO (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabo_redondo_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabo-redondo.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo redondo' ); ?></h1>
            <p class="hero-tagline">El bol de siempre, en la materia que quieras.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavred" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20redondo%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo redondo</strong> cabe donde otros no llegan: todo el cat&aacute;logo va de 36 a 46 cm de di&aacute;metro. La decisi&oacute;n aqu&iacute; es la materia: cer&aacute;mica desde 80,90 &euro;, m&aacute;rmol natural, terrazo, Solid Surface o los bols met&aacute;licos en oro, plata y bronce.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>De 36 a 46 cm</h3>
                    <p>El formato compacto: ideal para aseos y encimeras cortas.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Cinco materias</h3>
                    <p>Cer&aacute;mica, m&aacute;rmol, terrazo, Solid Surface y met&aacute;licos.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a elegir</h3>
                    <p>Medida, materia y grifer&iacute;a por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavred" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavred-storytelling adrihosan-full-width-block">
        <div class="lavred-storytelling-wrapper">
            <h2>Redondo: el formato que cabe en todas partes</h2>
            <div class="storytelling-text">
                <p>El bol redondo es el lavabo sobre encimera de toda la vida, y por algo: sin esquinas, un di&aacute;metro de 40 cm deja sitio al grifo y a las manos en encimeras donde un rectangular va justo. Por eso es el favorito para aseos y ba&ntilde;os de fondo corto.</p>
                <p>Lo que cambia es la materia. La <strong>cer&aacute;mica</strong> cl&aacute;sica arranca en 80,90 &euro; y llega hasta el crudo artesano y el texturizado Carnac. El <strong>m&aacute;rmol</strong> pone la veta, el <strong>terrazo</strong> el grano, el <strong>Solid Surface</strong> el mate en colores y los bols <strong>met&aacute;licos</strong> en oro, plata y bronce, el detalle que se ve nada m&aacute;s entrar. Si prefieres la pieza estirada, tienes el <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-ovalado/">lavabo ovalado</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavred" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos redondos</h2>
        <p class="product-loop-subtitle">
            Cer&aacute;mica, m&aacute;rmol, terrazo, Solid Surface y met&aacute;licos, de 36 a 46 cm, desde 80,90 &euro;. Usa el filtro para acotar por material, color o medida.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_redondo_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavred-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes si te cabe? M&aacute;ndanos las medidas de la encimera y te decimos qu&eacute; di&aacute;metro va bien.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20las%20medidas%20de%20mi%20encimera%20para%20elegir%20lavabo%20redondo" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: LAS FAMILIAS -->
    <section class="lavred-comparativa adrihosan-full-width-block">
        <div class="lavred-comparativa-wrapper">
            <h2>&iquest;Cer&aacute;mica, m&aacute;rmol o Solid Surface?</h2>
            <p class="comparativa-intro">Las familias del cat&aacute;logo, comparadas sin humo.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Familia</th>
                            <th>Car&aacute;cter</th>
                            <th>Colores</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Cer&aacute;mica</strong></td>
                            <td>Brillo cl&aacute;sico o crudo artesano</td>
                            <td>Blanco, negro, crudo</td>
                            <td>80,90 &ndash; 245,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>M&aacute;rmol y terrazo</strong></td>
                            <td>Veta y grano: piezas con car&aacute;cter</td>
                            <td>Gris, crema, negro</td>
                            <td>135,90 &ndash; 170,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Solid Surface y met&aacute;licos</strong></td>
                            <td>Mate en colores o brillo met&aacute;lico</td>
                            <td>Colores Orbed &middot; oro, plata, bronce</td>
                            <td>136,90 &ndash; 282,90 &euro;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Regla r&aacute;pida: para un aseo que se usa poco, cer&aacute;mica y listo. Para el ba&ntilde;o de diario donde quieres que se note, m&aacute;rmol, terrazo o un met&aacute;lico.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavred-materials adrihosan-full-width-block">
        <div class="lavred-materials-wrapper">
            <h2>Claves del lavabo redondo</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128176;</span>
                    <h3>Round mini: 80,90 &euro;</h3>
                    <p>El bol blanco de 41 cm con el que arranca la categor&iacute;a.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>M&aacute;rmol con veta &uacute;nica</h3>
                    <p>Candy gris, Jazm&iacute;n gris-blanco y Begonia crema.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#11088;</span>
                    <h3>Met&aacute;licos oro, plata y bronce</h3>
                    <p>El bol de 40 cm que se ve nada m&aacute;s entrar al ba&ntilde;o.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Orbed en colores</h3>
                    <p>Solid Surface mate de 39,5 cm con varios tonos a elegir.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 36 a 46 cm</h3>
                    <p>Alturas de 11,5 a 22 cm: m&iacute;ralas antes de elegir grifo.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Tambi&eacute;n suspendido y de pie</h3>
                    <p>Beca de 45 cm en pared y Lijar de 46,5 cm exento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavred-asesoramiento adrihosan-full-width-block">
        <div class="lavred-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo redondo</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar a la primera.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide la encimera</strong>: con 50 cm de fondo, un di&aacute;metro de 40 va sobrado.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Elige la materia</strong>: cer&aacute;mica, m&aacute;rmol, terrazo, Solid Surface o met&aacute;lico.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Decide color</strong>: blanco, negro, crudo, gris de m&aacute;rmol o un tono Orbed.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Cuadra el grifo</strong>: ca&ntilde;o alto que salve el borde (de 11,5 a 22 cm).</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida o color que no encuentras? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20redondo" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavred-related adrihosan-full-width-block">
        <div class="lavred-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-ovalado/">Lavabo ovalado</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">Lavabos peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pie/">Lavabos de pie</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">Lavabo blanco</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-rustico/">Lavabo r&uacute;stico</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo redondo</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tiene un lavabo redondo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Di&aacute;metros de 36 a 46,5 cm, con alturas de 11,5 a 22 cm seg&uacute;n modelo. Al no tener esquinas, un redondo de 40 cm cabe en encimeras donde un rectangular del mismo ancho va justo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Vale para un aseo peque&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Es el formato que mejor funciona ah&iacute;: el round mini de 41 cm o el bol de 40 dejan sitio al grifo y a las manos en encimeras de fondo corto. Si el aseo es m&iacute;nimo, mira tambi&eacute;n los suspendidos Beca de 45 cm.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; materiales son?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Cer&aacute;mica (blanco, negro, crudo y texturizado), m&aacute;rmol natural, terrazo, Solid Surface y una serie de bols con acabado met&aacute;lico en oro, plata y bronce. El material exacto est&aacute; en cada ficha.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Los hay en colores?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: negro (Nordic, Broome, Beca), crudo artesano (Cuenca, Sicilia), gris de m&aacute;rmol (Candy, Jazm&iacute;n), los met&aacute;licos en oro, plata y bronce, y el Orbed de Solid Surface en varios colores mate.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a le va a un lavabo redondo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Al ser piezas de apoyo, grifo de ca&ntilde;o alto junto al bol o grifer&iacute;a empotrada en pared. Mira la altura del borde en la ficha: van de 11,5 a 22 cm y el ca&ntilde;o tiene que salvarla con holgura.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El m&aacute;rmol necesita cuidados especiales?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un sellado peri&oacute;dico y limpieza con jab&oacute;n de pH neutro. Nada de vinagre, antical ni estropajos: atacan la piedra natural. La cer&aacute;mica y el Solid Surface van con limpieza normal.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Ten&eacute;is lavabos redondos de pie o suspendidos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: los suspendidos Beca en blanco y negro, y los de pie Lijar de 46,5 cm en varios acabados. Si buscas espec&iacute;ficamente esa instalaci&oacute;n, tienes la categor&iacute;a completa de lavabos de pie.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un lavabo redondo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Los cer&aacute;micos parten de 80,90 &euro; (round mini); el terrazo ronda los 135,90 &euro;; el m&aacute;rmol va de 159,90 a 170,90 &euro;; los met&aacute;licos cuestan 282,90 &euro; y los de pie llegan a 508,90 &euro;.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame las medidas de tu encimera y te digo qu&eacute; di&aacute;metro y materia encajan, con su grifo y todo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20redondo%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
