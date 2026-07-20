<?php
/**
 * Category: Lavabos baratos (ID: 2665) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 50 productos publicados.
 * 7o ciclo del silo tras 2726/2699/2669/2668 (15-jul), 2701 (16-jul) y
 * 91 sobre-encimera (17/18-jul).
 *
 * Caso SEO (GSC): canibalizacion YA resuelta — lavabos-de-piedra-baratos y
 * lavabos-pequenos-baratos estan 301, asi que 2665 es la unica duenya de
 * "lavabos baratos". Pero la pagina se hunde: 12m 2.663 impr / 14 clics /
 * pos 15,5 → 90d 509 impr / CERO clics / pos 28,4. Estado previo: plantilla
 * Woo por defecto, descripcion de ChatGPT, FAQPage huerfano (5 genericas),
 * title con un espacio inicial y meta con la palabra vetada "elegancia".
 * El thumbnail del termino era la foto de un GRIFO.
 *
 * Inventario real verificado 20-jul-2026 (50 publicados, 1 outofstock):
 * de 78,90 eur (Osiris extrafino D35,5) a 157,90 eur (Osiris gris mate).
 * Ceramica esmaltada mayoritaria (muchos extrafinos), Solid Surface
 * (Amarna 60, Edfu, Eos, Square, Oval, Orbed) y terrazo (Broome negro).
 * 4 formas, de 30x30 cm (Aure) a 60 cm (Monaco 60). Mayoria sobre encimera
 * + 4 suspendidos (Picolo, Dasha, Libra, Leo). Blanco domina; tambien negro,
 * crudo y gris oscuro mate. NO hay mueble integrado, ni de pie, ni de piedra.
 *
 * Angulo unico: baratos porque estan REBAJADOS, no porque sean peores. El
 * descuento es sistematico (~40% sobre tarifa) y se comprueba pieza a pieza.
 * Buyer persona: reforma con presupuesto ajustado + quien amuebla para
 * alquilar (compra varias unidades, mira el precio unitario).
 * PROHIBIDO: "elegancia", "funcionalidad" (veto del operador 20-jul),
 * "transforma tu banyo", "sin gastar una fortuna", "amplia gama".
 * Copy humanizado de serie.
 *
 * OJO: los precios de este archivo caducan. Verificados el 20-jul-2026.
 * Si cambia la tarifa hay que re-auditar el copy.
 *
 * REGLAS DURAS (briefing junio 2026): H1 via adrihosan_h1_dinamico();
 * datos reales; distribuidor (Solidker = linea propia); financiacion 3
 * meses; FAQs sin json-ld, texto EXACTO del wireframe; FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2665 - LAVABOS BARATOS (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabos_baratos_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2022/05/lavabo-solid-surface-square-decorado.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabos baratos' ); ?></h1>
            <p class="hero-tagline">Rebajados de precio, no de calidad.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavbar" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20barato%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Aqu&iacute; est&aacute;n los <strong>lavabos baratos</strong> del cat&aacute;logo: 50 modelos de cer&aacute;mica, Solid Surface y terrazo desde 78,90 &euro;, todos rebajados alrededor de un 40% sobre su precio de tarifa.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128176;</div>
                    <h3>Desde 78,90 &euro;</h3>
                    <p>50 modelos, hasta 157,90 &euro; el m&aacute;s caro.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127991;</div>
                    <h3>Rebajados de tarifa</h3>
                    <p>El descuento ronda el 40% y se ve en cada ficha.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a elegir</h3>
                    <p>Medida, tipo y grifo por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavbar" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavbar-storytelling adrihosan-full-width-block">
        <div class="lavbar-storytelling-wrapper">
            <h2>Baratos porque est&aacute;n rebajados, no porque sean peores</h2>
            <div class="storytelling-text">
                <p>Un lavabo barato suele oler a pieza de saldo. Estos no lo son: son los mismos modelos que ver&aacute;s en el resto del cat&aacute;logo, cer&aacute;mica esmaltada en su mayor&iacute;a y unos cuantos de <strong>Solid Surface</strong>, con precio de oferta. El descuento ronda el <strong>40% sobre tarifa</strong> y lo puedes comprobar pieza a pieza: el Osiris pasa de 131,50 a 78,90 &euro;, el New Lys de 249,83 a 149,90 &euro;.</p>
                <p>Lo que cambia es el precio, no el lavabo. Y si buscas por medida en vez de por precio, tienes los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">lavabos peque&ntilde;os</a> y el resto de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/">lavabos</a> al completo.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavbar" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos baratos</h2>
        <p class="product-loop-subtitle">
            50 modelos entre 78,90 y 157,90 &euro;, redondos, cuadrados, ovalados y rectangulares, de 30 a 60 cm. Usa el filtro para acotar por forma, color, material o medida.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabos_baratos_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavbar-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Reformas un piso entero o amueblas para alquilar? Dinos cu&aacute;ntas unidades necesitas y te cerramos precio.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20varias%20unidades%20de%20lavabo%20y%20quiero%20precio" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: PRECIO POR MATERIAL -->
    <section class="lavbar-comparativa adrihosan-full-width-block">
        <div class="lavbar-comparativa-wrapper">
            <h2>&iquest;Cu&aacute;nto cuesta cada tipo?</h2>
            <p class="comparativa-intro">Los tres materiales de la categor&iacute;a y d&oacute;nde est&aacute; el precio de cada uno.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Desde</th>
                            <th>Qu&eacute; gana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Cer&aacute;mica esmaltada</strong></td>
                            <td>78,90 &euro;</td>
                            <td>El precio m&aacute;s bajo y el acabado de siempre; muchos son extrafinos</td>
                        </tr>
                        <tr>
                            <td><strong>Solid Surface</strong></td>
                            <td>136,90 &euro;</td>
                            <td>Mate, color en toda la masa y un ara&ntilde;azo se repara lijando</td>
                        </tr>
                        <tr>
                            <td><strong>Terrazo</strong></td>
                            <td>135,90 &euro;</td>
                            <td>Un solo modelo, negro y redondo, para quien busca algo distinto</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Regla r&aacute;pida: si el ba&ntilde;o es de uso diario y quieres gastar poco, cer&aacute;mica. Si vas a mirarlo mucho tiempo, Solid Surface.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavbar-materials adrihosan-full-width-block">
        <div class="lavbar-materials-wrapper">
            <h2>Claves de los lavabos baratos</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128176;</span>
                    <h3>Desde 78,90 &euro;</h3>
                    <p>El Osiris extrafino de 35,5 cm, el m&aacute;s econ&oacute;mico de los 50.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127991;</span>
                    <h3>Cerca del 40% de rebaja</h3>
                    <p>Precio de oferta sobre tarifa, comprobable en cada ficha.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 30 a 60 cm</h3>
                    <p>Redondos, cuadrados, ovalados y rectangulares.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Tres materiales</h3>
                    <p>Cer&aacute;mica esmaltada, Solid Surface y terrazo.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128295;</span>
                    <h3>Sobre encimera y suspendidos</h3>
                    <p>Cuatro van anclados a pared, sin mueble debajo.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>M&aacute;s que blanco</h3>
                    <p>Tambi&eacute;n negro, crudo y gris oscuro mate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavbar-asesoramiento adrihosan-full-width-block">
        <div class="lavbar-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir sin pasarte de presupuesto</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar a la primera.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide primero</strong>: para un aseo, el Aure de 30 x 30 o el Picolo de poco fondo; sobre mueble de 80, los de 45 a 50 cm.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Decide el tipo</strong>: sobre encimera si ya tienes mueble; suspendido si quieres el lavabo a pared y nada debajo.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Elige material</strong>: cer&aacute;mica para gastar lo m&iacute;nimo, Solid Surface si quieres mate y reparable.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Cuenta el grifo</strong>: los de sobre encimera piden ca&ntilde;o alto; los suspendidos, el grifo normal.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Necesitas varias unidades para un piso o un alquiler? Escr&iacute;benos y te cerramos precio por cantidad.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20barato" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavbar-related adrihosan-full-width-block">
        <div class="lavbar-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/">Lavabos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pequenos/">Lavabos peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">Lavabos suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los lavabos baratos</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Desde cu&aacute;nto cuestan estos lavabos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El m&aacute;s econ&oacute;mico son 78,90 &euro; y el m&aacute;s caro de la categor&iacute;a, 157,90 &euro;. La mayor&iacute;a se mueve entre 80 y 150 &euro;, y todos est&aacute;n rebajados respecto a su precio de tarifa.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Por qu&eacute; est&aacute;n tan rebajados? &iquest;Son de peor calidad?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Son las mismas piezas del cat&aacute;logo con precio de oferta: cer&aacute;mica esmaltada, muchas de ellas extrafinas, adem&aacute;s de Solid Surface y terrazo. El descuento ronda el 40% sobre tarifa y puedes comprobarlo producto a producto. Lo que cambia es el precio, no el lavabo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; materiales hay?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre todo cer&aacute;mica esmaltada, que es la opci&oacute;n m&aacute;s econ&oacute;mica y la de siempre. Tambi&eacute;n hay Solid Surface, con el color en toda la masa y tacto mate, y un terrazo negro para quien busque algo distinto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formas y medidas puedo encontrar?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Redondos, cuadrados, ovalados y rectangulares, desde 30 x 30 cm el m&aacute;s peque&ntilde;o hasta 60 cm el m&aacute;s grande. Las medidas m&aacute;s habituales est&aacute;n entre 40 y 50 cm.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Son de sobre encimera o suspendidos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La mayor&iacute;a son de sobre encimera, que se apoyan encima del mueble. Hay cuatro suspendidos que van anclados a la pared, sin mueble debajo: Picolo, Dasha, Libra y Leo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hay alguno que valga para un aseo peque&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. El Aure mide 30 x 30 cm y el Picolo suspendido 45,5 x 25,5 cm, con muy poco fondo. Los dos entran donde no cabe un lavabo normal.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Los hay en negro o en otros colores?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. Tienes negro en el Libra, el M&oacute;naco, el Satet y el terrazo Broome, crudo en el Sicilia y el Nordic, y gris oscuro mate en el Osiris. El resto de la categor&iacute;a es blanco.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifo necesito?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Depende del tipo. Los de sobre encimera piden un ca&ntilde;o alto junto al lavabo o un grifo empotrado en pared, porque el borde queda por encima. Los suspendidos llevan el grifo est&aacute;ndar de lavabo de toda la vida.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. Dime la medida del mueble y para qu&eacute; ba&ntilde;o es, y te digo cu&aacute;l de los 50 encaja sin que te pases de presupuesto.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20barato%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
