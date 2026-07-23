<?php
/**
 * Category: Lavabo minimalista (ID: 2726) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). Catch-all estetico: ~227 productos
 * visibles en catalogo (el count del termino esta desfasado en 171). Decision de
 * la auditoria del 14-jul-2026: SE QUEDA, sin engordarla mas. Recibe los 301 de
 * lavabos-de-diseno y lavabos-modernos.
 *
 * La pagina en vivo era el archivo por defecto: H1 gigante + una linea de
 * relleno como descripcion. NO hay copy que preservar. La plantilla mantiene
 * el bloque category_description() (mostrara el texto nuevo cuando entre el
 * Archivo 2), pero la pagina no depende de el.
 *
 * Caso SEO (GSC 12m, verificado 2026-07-15): 2.046 impr / 25 clics / CTR 1,2%.
 * "lavabos minimalistas" pos 3,3 (478 impr) y "lavabo minimalista" pos 6,2
 * (678 impr): YA rankea, no la clican. Cero canibalizacion (verificado
 * query+page). Palanca garaje pura: snippet con datos + pagina que convierta.
 *
 * Keyword lider: "lavabo minimalista" + co-targets: lavabos minimalistas,
 * lavamanos minimalista (497 impr pos 7,8), lavabo minimalista moderno,
 * lavabo diseno minimalista. Puente en copy: "de diseno", "moderno".
 *
 * Inventario real verificado (227, 6 familias):
 *   - Series color Adrihosan Solid Surface (~120): COSS (36 bol), BINX (36),
 *     ONNI (55 ovalado), ARVO (55), TOPI (60). 14 colores mate, monocolor o
 *     bicolor con blanco. 241,71-432,17 eur.
 *   - Solid Surface blancos: sobre encimera 136,90-359,90 eur; series
 *     blanco/negro (Edfu, Amarna, Mendes, Tinis, Luxor, Memfis) 148,90-283,90;
 *     gama alta KRION K-LIFE / Quarter / Vulcano 81-141 cm (428,90-875,90);
 *     exentos Onyx y Octans.
 *   - Ceramicos (~35): clasicos desde 78,90 eur; negros; EXTRAFINOS (borde
 *     desde 11,5 cm de altura total); bols metalicos plata/oro/bronce.
 *   - Suspendidos (~10): Beca, Aina, Axel, Adonia, Dasha, Bemus, Picolo, Leo.
 *   - De pie / exentos ceramicos: Pietro, Florencia, Bolonia, Lijar.
 *   - 1 de piedra (Akutan) - mencion, no protagonista.
 *
 * Angulo unico: minimalista = decision de FORMAS, no material: geometria pura,
 * borde fino (extrafinos), superficie lisa mate o brillo. La pagina explica
 * QUE hace minimalista a un lavabo y ayuda a elegir entre las 3 instalaciones
 * (sobre encimera / suspendido / de pie).
 *
 * Buyer persona PRIMARIO: reformador de bano moderno que llega con foto de
 * Pinterest, no con medidas. Busca la pieza que no rompa el conjunto.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo minimalista"). NUNCA <h1> hardcodeado.
 * - Materiales y datos REALES (los del inventario, nada mas).
 * - PROHIBIDO relleno: "elegancia", "eleva tu bano", "atemporal", "sofisticado".
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo Solidker
 *   linea propia a medida).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Texto de las 9 FAQs: EXACTO del wireframe/Archivo 2 (palabra por palabra
 *   para que el schema FAQPage de Rank Math no diverja del HTML).
 * - Contacto: bloque estandar (6 opciones). Email destacado:
 *   comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2726 - LAVABO MINIMALISTA (reconstruccion)
// ============================================================================

function adrihosan_categoria_lavabo_minimalista_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabo-minimalista.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo minimalista' ); ?></h1>
            <p class="hero-tagline">Geometr&iacute;a pura y borde fino: la pieza que no rompe el ba&ntilde;o.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavmin" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20minimalista%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo minimalista</strong> se reconoce a simple vista: formas geom&eacute;tricas sin adornos y un borde que casi desaparece. M&aacute;s de 200 modelos en <strong>Solid Surface</strong> y <strong>cer&aacute;mica extrafina</strong>: sobre encimera, suspendidos o de pie, de 30 a 141 cm, desde 78,90 &euro;.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Sobre encimera, suspendido o de pie</h3>
                    <p>Las tres instalaciones, en un solo cat&aacute;logo.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Blanco, negro y 14 colores mate</h3>
                    <p>Monocolor o bicolor con blanco.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Te ayudamos a elegir</h3>
                    <p>Instalaci&oacute;n, medida y grifer&iacute;a por WhatsApp.</p>
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
    <div id="destino-filtro-adria-lavmin" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavmin-storytelling adrihosan-full-width-block">
        <div class="lavmin-storytelling-wrapper">
            <h2>Qu&eacute; hace minimalista a un lavabo</h2>
            <div class="storytelling-text">
                <p>Minimalista no es una marca ni un material: es una <strong>decisi&oacute;n de formas</strong>. C&iacute;rculo, cuadrado o rect&aacute;ngulo, sin molduras. El <strong>borde, cuanto m&aacute;s fino mejor</strong> (los cer&aacute;micos extrafinos se quedan en 11,5 cm de altura total), y la superficie lisa, en mate o en brillo. Una pieza as&iacute; no compite con el resto del ba&ntilde;o.</p>
                <p>En el cat&aacute;logo mandan dos materiales. El <strong>Solid Surface</strong> en acabado mate, con el color macizo en toda la masa y series en 14 tonos (COSS, BINX, ONNI, ARVO y TOPI). Y la <strong>cer&aacute;mica</strong>, del cl&aacute;sico blanco desde 78,90 &euro; al extrafino de borde fino. Si buscas un tono concreto, tienes el detalle en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">lavabos de colores</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavmin" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos minimalistas</h2>
        <p class="product-loop-subtitle">
            Solid Surface y cer&aacute;mica, de 30 a 141 cm, desde 78,90 &euro;. Usa el filtro para acotar por medida, material o color.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_minimalista_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavmin-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas entre sobre encimera y suspendido? M&aacute;ndanos foto del ba&ntilde;o y te decimos qu&eacute; encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20dig%C3%A1is%20qu%C3%A9%20lavabo%20minimalista%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: SOBRE ENCIMERA VS SUSPENDIDO VS DE PIE -->
    <section class="lavmin-comparativa adrihosan-full-width-block">
        <div class="lavmin-comparativa-wrapper">
            <h2>&iquest;Sobre encimera, suspendido o de pie?</h2>
            <p class="comparativa-intro">La decisi&oacute;n real de compra es la instalaci&oacute;n. Las tres, comparadas.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Instalaci&oacute;n</th>
                            <th>Para qui&eacute;n</th>
                            <th>Medidas</th>
                            <th>Punto a saber</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Sobre encimera</strong></td>
                            <td>Ya tienes mueble o encimera</td>
                            <td>30 a 141 cm</td>
                            <td>El grueso del cat&aacute;logo; deja espacio al grifo</td>
                        </tr>
                        <tr>
                            <td><strong>Suspendido</strong></td>
                            <td>Aseos peque&ntilde;os, limpieza f&aacute;cil</td>
                            <td>31 a 71 cm</td>
                            <td>Libera el suelo; revisa el anclaje a pared</td>
                        </tr>
                        <tr>
                            <td><strong>De pie (exento)</strong></td>
                            <td>Ba&ntilde;o amplio, sin mueble</td>
                            <td>39 a 49 cm (82-87 de alto)</td>
                            <td>Es la pieza vista: el desag&uuml;e va dentro del pie</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si el lavabo va a compartir protagonismo con un mueble potente, elige sobre encimera en blanco o bicolor. Si el lavabo ES el protagonista, un exento o un monocolor mate manda en el ba&ntilde;o.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavmin-materials adrihosan-full-width-block">
        <div class="lavmin-materials-wrapper">
            <h2>Claves del lavabo minimalista</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales del cat&aacute;logo (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Solid Surface (color macizo)</h3>
                    <p>El color va en toda la masa. No es esmalte que se desgaste.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129527;</span>
                    <h3>Reparable con lijado suave</h3>
                    <p>Las marcas superficiales desaparecen y la pieza vuelve a su aspecto.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127963;</span>
                    <h3>Cer&aacute;mica extrafina</h3>
                    <p>Borde fino con altura total desde 11,5 cm. Desde 78,90 &euro;.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>14 colores mate</h3>
                    <p>Grises, lino, ocre, arcilla, barro, fuego, verdes y azules. Mono o bicolor.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>De 30 a 141 cm</h3>
                    <p>Del bol de aseo al frente completo del mueble (gama KRION K-LIFE).</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128688;</span>
                    <h3>Tres instalaciones</h3>
                    <p>Sobre encimera, suspendido o de pie. La misma est&eacute;tica limpia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavmin-asesoramiento adrihosan-full-width-block">
        <div class="lavmin-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo minimalista</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar sin volver a empezar.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige instalaci&oacute;n</strong>: sobre encimera, suspendido o de pie.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Mide</strong>: 30-40 cm para aseo, 45-60 est&aacute;ndar, 80-141 protagonista.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Decide material</strong>: Solid Surface mate o cer&aacute;mica (brillo o extrafina).</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Remata el color</strong>: blanco, negro o uno de los 14 tonos mate.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida o color que no encuentras? Lo fabricamos a medida en Solid Surface con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20minimalista%20para%20mi%20ba%C3%B1o" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavmin-related adrihosan-full-width-block">
        <div class="lavmin-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">Lavabo blanco</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-de-resina/">Lavabo de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">Lavabos suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano-de-diseno/">Muebles de ba&ntilde;o de dise&ntilde;o</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // La descripcion actual es una linea de relleno y sera reemplazada por el
    // Archivo 2 (paquete SEO). El bloque queda listo para el texto nuevo.
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo minimalista</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; hace que un lavabo sea minimalista?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La forma manda: c&iacute;rculo, cuadrado o rect&aacute;ngulo sin molduras, superficie lisa y un borde lo m&aacute;s fino posible (los cer&aacute;micos extrafinos se quedan en 11,5 cm de altura total). Al no tener adornos, la pieza encaja en el ba&ntilde;o sin pedir protagonismo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sobre encimera, suspendido o de pie: cu&aacute;l elegir?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Sobre encimera si ya tienes mueble o encimera: es el grueso del cat&aacute;logo. Suspendido si quieres liberar suelo y facilitar la limpieza, ideal en aseos peque&ntilde;os. De pie (exento) si el lavabo va a ser la pieza vista de un ba&ntilde;o amplio, sin mueble debajo.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; materiales son los lavabos minimalistas?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La mayor&iacute;a son de Solid Surface (resina acr&iacute;lica con cargas minerales) en acabado mate, o de cer&aacute;mica, incluida la extrafina de borde fino. En cada ficha ver&aacute;s el material exacto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El Solid Surface se raya o se mancha?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No es poroso, y el color va en toda la masa de la pieza, no es un esmalte. Las marcas superficiales se reparan con un lijado suave y queda como el primer d&iacute;a.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas tienen?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Desde 30 cm de di&aacute;metro (para aseos) hasta formatos de 80, 100 y 141 cm que ocupan el frente completo del mueble. La franja m&aacute;s pedida es la de 45 a 60 cm.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Solo hay blanco y negro?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No. Las series COSS, BINX, ONNI, ARVO y TOPI vienen en 14 colores mate (grises, lino, ocre, arcilla, barro, fuego, verdes y azules), en monocolor o bicolor con el interior o el exterior en blanco.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifer&iacute;a le va a un lavabo minimalista?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Para los de sobre encimera tipo bol, grifo de ca&ntilde;o alto o grifer&iacute;a empotrada de pared, que es la opci&oacute;n m&aacute;s limpia visualmente. En negro mate o acero cepillado acompa&ntilde;an mejor el estilo que el cromo brillante.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;La cer&aacute;mica extrafina es resistente?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. El borde fino es una cuesti&oacute;n de est&eacute;tica y peso, no de fragilidad: es cer&aacute;mica compacta de alta densidad y aguanta el uso diario igual que un lavabo cer&aacute;mico convencional.</p></div>
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
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto del ba&ntilde;o (o del mueble que tienes pensado) y te digo qu&eacute; instalaci&oacute;n, medida y acabado encajan sin que la pieza desentone.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20minimalista%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
