<?php
/**
 * Category: Lavabos negros (ID: 2723) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 34 productos publicados.
 * 9o ciclo del silo (1o de la fase "acabar el UX", orden de Ricardo 23-jul)
 * tras 2726/2699/2669/2668 (15-jul), 2701 (16-jul), 91 sobre-encimera
 * (17/18-jul), 2665 baratos (20-jul) y 2703 colores (20-jul).
 *
 * Caso SEO (GSC 23-jul, 12m, page+query): identico a colores. La ficha del
 * TOPI negro sirve "lavabo negro" (619 impr, pos 4,7, CTR 0,48%) mientras
 * la categoria vive en pos 31-40 con queries sueltas. Objetivo medible:
 * que la categoria le quite esa query al producto. Bonus ya ganado: la
 * categoria rankea POS 1 en "como limpiar un lavabo negro" -> la seccion
 * de la cal (limpieza) alimenta exactamente eso.
 *
 * Inventario real verificado 23-jul-2026: 34 publicados, 94,90-508,90 eur
 * +IVA (toda la tienda muestra precio sin IVA + sufijo). Ceramica: Satet
 * extrafino cuadrado (94,90, el mini), Osiris circular extrafino (141,90;
 * version negro-bronce 316,90), Monaco, Libra, Nordic, Dinan. Terrazo:
 * Broome redondo 135,90. Solid Surface: Orbed, Oval, Square (136,90),
 * Edfu, Amarna (148,90), Tebas (165,90), Mendes, Tinis (239,90), Luxor
 * (266,90), Memfis (283,90). Series mono/bicolor negro-blanco: COSS/BINX
 * 36 cm, ONNI/ARVO 55, TOPI 60 (339,08-432,17). Suspendidos ceramicos:
 * Beca (179,90), Aina, Axel (216,90). De pie: Lijar negro mate 475,90 /
 * marmoleado 508,90 (86,5 cm alto).
 *
 * Angulo unico: el negro se elige DOS veces, material y formato. Nada de
 * "elegancia y sofisticacion" (la meta vieja). Secciones: material ->
 * formato/acabado -> la cal sin cuentos (honestidad = lo que ya rankea).
 * Bicolor como respuesta al miedo tipico al negro.
 *
 * Canibalizacion con hermanas: colores (2703) y blanco (2673) captan sus
 * queries; esta pagina solo persigue "lavabo negro" y derivadas.
 * PROHIBIDO enlazar la antigua categoria gris (2676, borrada 23-jul-2026,
 * su slug es ahora un 301).
 *
 * OJO: los precios caducan. Verificados el 23-jul-2026.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); datos reales; cero
 * "garant*"; financiacion 3 meses; FAQs sin json-ld (schema via Rank
 * Math); FE 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2723 - LAVABOS NEGROS (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabos_negros_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabos-negros.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabos negros' ); ?></h1>
            <p class="hero-tagline">34 modelos en cer&aacute;mica, terrazo y Solid Surface, de 94,90 a 508,90 &euro; +IVA. Mate, bicolor o con pie: elige el material primero y el formato despu&eacute;s.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavneg" class="hero-btn primary">Ver los 34 modelos</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20negro%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>lavabos negros</strong> de esta p&aacute;gina son 34 modelos en tres materiales &mdash;cer&aacute;mica, terrazo y Solid Surface&mdash; sobre encimera, suspendidos o de pie, desde 94,90 &euro; +IVA.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>3 materiales</h3>
                    <p>Cer&aacute;mica esmaltada, terrazo con &aacute;rido visto y Solid Surface.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>3 formatos</h3>
                    <p>Sobre encimera, suspendido o de pie, sin mueble.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#9899;</div>
                    <h3>Mate o bicolor</h3>
                    <p>Negro mate de serie y bicolor con la cubeta en blanco.</p>
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
    <div id="destino-filtro-adria-lavneg" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavneg-storytelling adrihosan-full-width-block">
        <div class="lavneg-storytelling-wrapper">
            <h2>El negro se elige dos veces</h2>
            <div class="storytelling-text">
                <p>Un lavabo negro no es una decisi&oacute;n, son dos. Primero el <strong>material</strong>: cer&aacute;mica esmaltada, la cl&aacute;sica de limpieza f&aacute;cil; terrazo con &aacute;rido visto, una pieza con peso propio; o <strong>Solid Surface</strong>, la resina mineral de mate sedoso que domina el cat&aacute;logo. Y despu&eacute;s el <strong>formato</strong>: sobre encimera como la mayor&iacute;a, suspendido, o de pie como el Lijar, que no necesita mueble.</p>
                <p>&iquest;Que el negro entero te impone? Las cinco series de la casa existen en <strong>bicolor</strong>, negras por fuera y con la cubeta blanca por dentro: se ve el negro de frente y la cal no se ceba con el vaso. Y si al final el color va por otro lado, tienes la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">carta de colores</a> completa o el <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">lavabo blanco</a> de toda la vida.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavneg" class="product-loop-header">
        <h2 class="product-loop-title">Los 34 lavabos negros del cat&aacute;logo</h2>
        <p class="product-loop-subtitle">
            Cer&aacute;mica, terrazo y Solid Surface, de 94,90 a 508,90 &euro; +IVA. Usa el filtro para acotar por forma, medida o precio.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabos_negros_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavneg-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas entre mate, bicolor o con pie? M&aacute;ndanos una foto del ba&ntilde;o y te decimos qu&eacute; lavabo negro encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20una%20foto%20de%20mi%20ba%C3%B1o%20para%20elegir%20lavabo%20negro" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. ELIGE POR MATERIAL -->
    <section class="lavneg-comparativa adrihosan-full-width-block">
        <div class="lavneg-comparativa-wrapper">
            <h2>Elige por material</h2>
            <p class="comparativa-intro">Tres materiales, tres caracteres. As&iacute; se diferencian.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Modelos</th>
                            <th>C&oacute;mo es</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Cer&aacute;mica esmaltada</strong></td>
                            <td>Satet, Osiris, M&oacute;naco, Libra, Nordic, Dinan</td>
                            <td>La cl&aacute;sica de limpieza f&aacute;cil, con extrafinos desde 94,90 &euro;</td>
                        </tr>
                        <tr>
                            <td><strong>Terrazo</strong></td>
                            <td>Broome redondo</td>
                            <td>&Aacute;rido visto, una pieza con peso propio (135,90 &euro;)</td>
                        </tr>
                        <tr>
                            <td><strong>Solid Surface</strong></td>
                            <td>Orbed, Oval, Square y las series COSS, BINX, ONNI, ARVO y TOPI</td>
                            <td>Resina mineral de mate sedoso, en 36, 55 y 60 cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">El Lijar va aparte: una columna cer&aacute;mica de pie de 86,5 cm que no necesita mueble, en negro mate (475,90 &euro;) o marmoleado (508,90 &euro;). Precios sin IVA, verificados en julio de 2026.</p>
        </div>
    </section>

    <!-- 8. FORMATO Y ACABADO -->
    <section class="lavneg-materials adrihosan-full-width-block">
        <div class="lavneg-materials-wrapper">
            <h2>Formato y acabado</h2>
            <p class="materials-intro">Casi todo el cat&aacute;logo va sobre encimera; esto es lo que se sale de ah&iacute; y los acabados entre los que eliges.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#9899;</span>
                    <h3>Negro mate</h3>
                    <p>El acabado que domina el cat&aacute;logo y el que mejor disimula huellas.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127917;</span>
                    <h3>Bicolor con blanco</h3>
                    <p>Cubeta blanca por dentro, en las series COSS, BINX, ONNI, ARVO y TOPI.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127761;</span>
                    <h3>Osiris negro-bronce</h3>
                    <p>Extrafino circular con detalle en bronce, 316,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128204;</span>
                    <h3>Suspendidos</h3>
                    <p>Beca, Aina y Axel, cer&aacute;micos de 179,90 a 216,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127942;</span>
                    <h3>Lijar de pie</h3>
                    <p>Columna cer&aacute;mica de 86,5 cm sin mueble, el tope de gama.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128176;</span>
                    <h3>De 94,90 a 508,90 &euro;</h3>
                    <p>Del Satet extrafino al Lijar marmoleado. Precios +IVA.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. LA CAL SIN CUENTOS: 4 GESTOS -->
    <section class="lavneg-asesoramiento adrihosan-full-width-block">
        <div class="lavneg-asesoramiento-wrapper">
            <h2>El negro y la cal, sin cuentos</h2>
            <p class="asesoramiento-intro">El agua dura se nota m&aacute;s sobre negro que sobre un lavabo claro. Con cuatro gestos deja de ser un problema.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>S&eacute;calo tras el uso</strong>: las marcas de cal son agua evaporada; una bayeta de microfibra al terminar y no llegan a salir.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Jab&oacute;n neutro y agua</strong>: para la limpieza normal no hace falta nada m&aacute;s.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Cero abrasivos</strong>: estropajos y polvos limpiadores rayan el acabado; en Solid Surface una microrrayadura se repasa seg&uacute;n indica el fabricante.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>El bicolor juega a favor</strong>: con la cubeta blanca por dentro, la cal se disimula donde m&aacute;s se usa el lavabo.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Rematas el conjunto? Tenemos colecci&oacute;n propia de <a href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/griferia-negra-para-bano/">grifer&iacute;a negra para ba&ntilde;o</a>: a juego en mate o en contraste con dorados.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20negro" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavneg-related adrihosan-full-width-block">
        <div class="lavneg-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">Lavabo blanco</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">Lavabos suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-pie/">Lavabos de pie</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/griferia-negra-para-bano/">Grifer&iacute;a negra para ba&ntilde;o</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los lavabos negros</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; materiales hay lavabos negros?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Trabajamos tres: cer&aacute;mica esmaltada (la cl&aacute;sica, con modelos extrafinos como Osiris o Satet), terrazo con &aacute;rido visto (Broome) y Solid Surface, una resina mineral de tacto sedoso que domina el cat&aacute;logo, con series de 36, 55 y 60 cm.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Los lavabos negros son mate o brillo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Casi todo el cat&aacute;logo negro es mate: es el acabado que pide la tendencia actual y el que mejor disimula huellas. La cer&aacute;mica esmaltada aporta un punto m&aacute;s de brillo que el Solid Surface, que es mate puro.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;C&oacute;mo se limpia un lavabo negro?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Con agua, jab&oacute;n neutro y una bayeta suave, y sec&aacute;ndolo despu&eacute;s. Evita estropajos y polvos abrasivos: rayan el acabado. En Solid Surface, una microrrayadura superficial se puede repasar siguiendo las indicaciones del fabricante.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;En un lavabo negro se nota m&aacute;s la cal?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: las marcas blancas de agua dura contrastan m&aacute;s sobre negro que sobre colores claros. El truco es secarlo tras el uso. Las versiones bicolor, negras por fuera y con cubeta blanca, reducen ese efecto en la zona de uso.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formatos de lavabo negro ten&eacute;is?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre encimera (la mayor&iacute;a del cat&aacute;logo), suspendidos como Beca, Aina o Axel, y de pie como el Lijar, una columna cer&aacute;mica de 86,5 cm de alto que no necesita mueble.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es el Solid Surface?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Una resina con carga mineral que se moldea sin juntas. Da un tacto c&aacute;lido y sedoso, un mate profundo y permite formas finas que en cer&aacute;mica no salen. Es el material de nuestras series COSS, BINX, ONNI, ARVO y TOPI.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un lavabo negro?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De 94,90 a 508,90 &euro; +IVA (precios de julio de 2026). El grueso de cer&aacute;micos y bols de Solid Surface se mueve entre 94,90 y 175 &euro;; los rectangulares grandes entre 239 y 284 &euro;; las series bicolor entre 339 y 433 &euro;, y el de pie Lijar es el tope de gama.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a combina con un lavabo negro?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La negra mate a juego es la apuesta segura, y tenemos colecci&oacute;n propia de grifer&iacute;a negra. Si buscas contraste, el dorado o el oro cepillado sobre negro funcionan muy bien.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; es un lavabo bicolor negro y blanco?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un Solid Surface negro por fuera y con la cubeta blanca por dentro. Lo fabricamos en las cinco series de la casa (COSS, BINX, ONNI, ARVO y TOPI) y resuelve el miedo t&iacute;pico al negro: se ve menos la cal donde m&aacute;s se usa.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame una foto del ba&ntilde;o y te digo qu&eacute; lavabo negro encaja: material, formato y con qu&eacute; grifo rematarlo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20negro%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
