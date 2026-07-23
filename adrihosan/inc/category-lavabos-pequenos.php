<?php
/**
 * Category: Lavabos pequenos (ID: 2644) - RECONSTRUCCION
 *
 * Subcategoria del silo Lavabos (parent 90). 78 productos publicados
 * (curacion 23-jul: 13 grandes fuera, regla <=48 ancho O <=32 fondo).
 * 10o ciclo del silo tras 2726/2699/2669/2668 (15-jul), 2701 (16-jul),
 * 91 sobre-encimera (17/18-jul), 2665 baratos (20-jul), 2703 colores
 * (20-jul) y 2723 negros (23-jul).
 *
 * Caso SEO (GSC 23-jul, 12m, page+query): AQUI SI hay query cabeza.
 * "lavabo pequeno" 3.284 impr/12m y "lavabos pequenos baratos" 1.903
 * las servian URLs fantasma cuyos 301 ya desembocan en 2644 a 1 salto;
 * tambien recibe el 301 de lavabo-estrecho (rankeaba pos 6,3).
 * Vocabulario detectado: "pica" (picas de lavabo pequenas, 368 impr).
 * Base 28d: 1.290 impr / 1 clic / pos 21,6. Medir 20-ago.
 *
 * Inventario real verificado 23-jul-2026: 78 publicados, 78,90-428,90
 * eur +IVA. Los mas compactos: Aure 30x30, Coso diam. 30, round mini
 * diam. 41, Osiris diam. 35,5 extrafino, Satet 36,5. Estrechos (fondo
 * <=32): Picolo 45,5x25,5 suspendido, Seatle 59x30, Horus 45,5x32,
 * Edfu 31,2x45,6, Dasha 31x43, Coso diam. 30 (9 de alto). Suspendidos:
 * Picolo, Dasha, Beca/Aina/Axel 40-45 (blanco y negro). Solid Surface:
 * bols (Eos, Orbed, Oval, bolonia, Fruit, Arena) + series COSS/BINX 36
 * en colores + Jazz 20x40 (Krion). Marmol macizo 40: Begonia, Jazmin,
 * Clavel crema/gris. Metalizados: bols diam. 40 oro/plata/bronce 282,90.
 *
 * Angulo unico: aqui mandan dos numeros, ancho y fondo. Secciones:
 * medida -> poco fondo (aseos estrechos) -> suspendido o sobre repisa
 * -> baratos sin parecerlo.
 *
 * PROHIBIDO enlazar la antigua categoria gris (2676, borrada) y las URLs fantasma
 * (lavabos-para-banos-pequenos, lavabos-pequenos-baratos, lavabo-estrecho).
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
// CATEGORIA 2644 - LAVABOS PEQUENOS (reconstruccion)
// ============================================================================

function adrihosan_categoria_2644_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/themes/adrihosan/assets/img/heroes/hero-lavabos-pequenos.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabos peque&ntilde;os' ); ?></h1>
            <p class="hero-tagline">78 modelos que caben donde parece que no cabe nada: desde 30 cm de ancho y 25,5 cm de fondo. Cer&aacute;mica completa desde 78,90 &euro; +IVA.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavpeq" class="hero-btn primary">Ver los 78 modelos</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20peque%C3%B1o%20y%20necesito%20ayuda%20para%20elegir" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>lavabos peque&ntilde;os</strong> de esta p&aacute;gina son 78 modelos desde 30 cm de ancho y 25,5 cm de fondo, en cer&aacute;mica, Solid Surface y m&aacute;rmol, de 78,90 a 428,90 &euro; +IVA.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128207;</div>
                    <h3>Desde 30 cm de ancho</h3>
                    <p>Los m&aacute;s compactos: Aure 30 &times; 30 y el bol Coso de &Oslash;30.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Fondos desde 25,5 cm</h3>
                    <p>El Picolo suspendido, el truco de los aseos estrechos.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>3 materiales</h3>
                    <p>Cer&aacute;mica esmaltada, Solid Surface y m&aacute;rmol macizo.</p>
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
    <div id="destino-filtro-adria-lavpeq" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavpeq-storytelling adrihosan-full-width-block">
        <div class="lavpeq-storytelling-wrapper">
            <h2>Elige por medida, no por estilo</h2>
            <div class="storytelling-text">
                <p>En un lavabo peque&ntilde;o mandan dos n&uacute;meros: el <strong>ancho</strong> y el <strong>fondo</strong>. Todo el cat&aacute;logo de esta p&aacute;gina cabe en una de estas dos reglas: 48 cm de ancho como m&aacute;ximo, o 32 cm de fondo o menos. Los m&aacute;s compactos son el <strong>Aure de 30 &times; 30 cm</strong> y el bol <strong>Coso de &Oslash;30</strong>: entran en aseos donde un lavabo est&aacute;ndar de 60 ni se plantea.</p>
                <p>Mide primero la pared donde ir&aacute; el lavabo y despu&eacute;s elige formato: <a href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">suspendido</a> para liberar suelo, o bol sobre repisa donde no cabe un <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/mueble-lavabo-pequeno/">mueble de lavabo peque&ntilde;o</a>. Con las medidas claras, el estilo sale solo.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavpeq" class="product-loop-header">
        <h2 class="product-loop-title">Los 78 lavabos peque&ntilde;os del cat&aacute;logo</h2>
        <p class="product-loop-subtitle">
            Cer&aacute;mica, Solid Surface y m&aacute;rmol, de 78,90 a 428,90 &euro; +IVA. Usa el filtro para acotar por forma, medida o precio.
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_2644_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavpeq-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes si te cabe? M&aacute;ndanos el ancho y el fondo de tu pared y te decimos qu&eacute; lavabo peque&ntilde;o encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20las%20medidas%20de%20mi%20aseo%20para%20elegir%20lavabo%20peque%C3%B1o" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. POCO FONDO: EL TRUCO DE LOS ASEOS ESTRECHOS -->
    <section class="lavpeq-comparativa adrihosan-full-width-block">
        <div class="lavpeq-comparativa-wrapper">
            <h2>Poco fondo, el truco de los aseos estrechos</h2>
            <p class="comparativa-intro">Cuando la pared es larga pero el paso es justo, lo que salva el aseo es el fondo. Estos son los que menos ocupan.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Medidas (ancho &times; fondo)</th>
                            <th>D&oacute;nde encaja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Picolo</strong></td>
                            <td>45,5 &times; 25,5 cm</td>
                            <td>El de menos fondo del cat&aacute;logo, suspendido</td>
                        </tr>
                        <tr>
                            <td><strong>Seatle</strong></td>
                            <td>59 &times; 30 cm</td>
                            <td>Paredes largas y estrechas</td>
                        </tr>
                        <tr>
                            <td><strong>Horus</strong></td>
                            <td>45,5 &times; 32 cm</td>
                            <td>Aseos de fondo justo</td>
                        </tr>
                        <tr>
                            <td><strong>Edfu</strong></td>
                            <td>31,2 &times; 45,6 cm</td>
                            <td>Girado: 31,2 de frente en huecos muy estrechos</td>
                        </tr>
                        <tr>
                            <td><strong>Dasha</strong></td>
                            <td>31 &times; 43 cm</td>
                            <td>Suspendido estrecho de frente</td>
                        </tr>
                        <tr>
                            <td><strong>Coso</strong></td>
                            <td>&Oslash;30 cm, 9 cm de alto</td>
                            <td>El bol m&iacute;nimo para repisas cortas</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si lo que falta es ancho y no fondo, mira los redondos compactos: el round mini de &Oslash;41, el Osiris extrafino de &Oslash;35,5 o el Satet de 36,5 cm. Medidas y precios verificados en julio de 2026.</p>
        </div>
    </section>

    <!-- 8. SUSPENDIDO O SOBRE REPISA -->
    <section class="lavpeq-materials adrihosan-full-width-block">
        <div class="lavpeq-materials-wrapper">
            <h2>Suspendido o sobre repisa</h2>
            <p class="materials-intro">El suspendido libera suelo y agranda el aseo a la vista; el bol sobre una balda de 30-35 cm de fondo es la salida elegante donde no cabe mueble.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128204;</span>
                    <h3>Suspendidos peque&ntilde;os</h3>
                    <p>Picolo, Dasha y los cer&aacute;micos Beca, Aina y Axel de 40-45 cm, en blanco y negro.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129699;</span>
                    <h3>Bol sobre repisa</h3>
                    <p>Una balda de 30-35 cm de fondo basta; el lavabo va apoyado encima.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128207;</span>
                    <h3>Los m&aacute;s compactos</h3>
                    <p>Aure 30 &times; 30, bol Coso de &Oslash;30 y round mini de &Oslash;41.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Solid Surface, tambi&eacute;n en color</h3>
                    <p>Bols Eos, Orbed, Oval o Arena y las series COSS y BINX de 36 cm.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>M&aacute;rmol macizo de 40</h3>
                    <p>Begonia, Jazm&iacute;n y Clavel en crema o gris, piedra de verdad.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128176;</span>
                    <h3>De 78,90 a 428,90 &euro;</h3>
                    <p>Cer&aacute;micos completos desde 78,90; metalizados &Oslash;40 en oro, plata y bronce. Precios +IVA.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. BARATOS SIN PARECERLO -->
    <section class="lavpeq-asesoramiento adrihosan-full-width-block">
        <div class="lavpeq-asesoramiento-wrapper">
            <h2>Baratos sin parecerlo</h2>
            <p class="asesoramiento-intro">Un lavabo peque&ntilde;o no tiene por qu&eacute; parecer una soluci&oacute;n de compromiso. As&iacute; se escala el cat&aacute;logo, de menos a m&aacute;s.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Cer&aacute;mica completa, 78,90-150 &euro;</strong>: el mismo esmalte que un lavabo grande, solo que en menos cent&iacute;metros.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Extrafinos</strong>: Osiris de &Oslash;35,5 y Satet de 36,5, paredes finas que ganan cubeta sin ganar hueco.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Solid Surface</strong>: bols de mate sedoso y las series COSS y BINX de 36 cm, tambi&eacute;n en color, o el Jazz de 20 &times; 40 en Krion.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>M&aacute;rmol y metalizados</strong>: Begonia, Jazm&iacute;n o Clavel en m&aacute;rmol macizo de 40, y bols de &Oslash;40 en oro, plata o bronce (282,90 &euro;).</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Rematas el conjunto? Tenemos una selecci&oacute;n de <a href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/grifos-para-lavabos-pequenos/">grifos para lavabos peque&ntilde;os</a>: ca&ntilde;os cortos y empotrados que no roban repisa.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20peque%C3%B1o" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavpeq-related adrihosan-full-width-block">
        <div class="lavpeq-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-suspendidos/">Lavabos suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-redondo/">Lavabo redondo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-baratos/">Lavabos baratos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/mueble-lavabo-pequeno/">Mueble lavabo peque&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/grifos-para-lavabos-pequenos/">Grifos para lavabos peque&ntilde;os</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA
    // La descripcion se reemplaza por el Archivo 2 (executor atomico, fase 2).
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los lavabos peque&ntilde;os</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; se considera un lavabo peque&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En esta categor&iacute;a, un ancho m&aacute;ximo de 48 cm o un fondo de 32 cm o menos. Los m&aacute;s compactos son el Aure, de 30 &times; 30 cm, y el bol Coso de 30 cm de di&aacute;metro: caben en aseos donde un lavabo est&aacute;ndar de 60 no entra.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;l es el lavabo con menos fondo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El suspendido Picolo, con 25,5 cm de fondo y 45,5 de ancho. Para paredes largas y estrechas est&aacute; el Seatle, de 59 &times; 30 cm, y rondando los 32 cm de fondo, el Horus y el Edfu.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; medidas m&iacute;nimas necesito para un aseo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Con 35-40 cm de ancho de lavabo se usa con comodidad; por debajo de 32 queda para lavarse las manos. Deja adem&aacute;s 15-20 cm de aire a cada lado para moverte sin golpes.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Mejor lavabo peque&ntilde;o suspendido o sobre encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El suspendido libera el suelo y hace el aseo m&aacute;s grande a la vista: Picolo, Dasha, Beca, Aina o Axel. El bol sobre una repisa estrecha aprovecha fondos de 30-35 cm donde no cabe un mueble.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;nto cuesta un lavabo peque&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>De 78,90 a 428,90 &euro; +IVA (precios de julio de 2026). Los cer&aacute;micos completos van de 78,90 a unos 150 &euro;; el Solid Surface y el m&aacute;rmol suben desde ah&iacute;.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hay lavabos peque&ntilde;os baratos que den buen resultado?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;: la cer&aacute;mica esmaltada blanca de 78,90 a 100 &euro; (Oval, Osiris, round mini, Rodas, Aure) es el mismo material que un lavabo grande, solo que en menos cent&iacute;metros.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; materiales hay lavabos peque&ntilde;os?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Cer&aacute;mica esmaltada (la mayor&iacute;a del cat&aacute;logo), Solid Surface en bols y en las series COSS y BINX de 36 cm (tambi&eacute;n en color), y m&aacute;rmol macizo de 40 cm como Begonia o Jazm&iacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Un lavabo peque&ntilde;o sirve como lavabo principal?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>En el ba&ntilde;o de uso diario se agradece m&aacute;s ancho; el peque&ntilde;o brilla en aseos de cortes&iacute;a, segundos ba&ntilde;os y reformas donde cada cent&iacute;metro cuenta.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; grifo le va bien a un lavabo peque&ntilde;o?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Uno de ca&ntilde;o corto, o empotrado en pared para no ocupar repisa y evitar salpicaduras. Tenemos una selecci&oacute;n de grifos para lavabos peque&ntilde;os pensada para estas medidas.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;No lo ves claro? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame las medidas de tu aseo y te digo qu&eacute; lavabo peque&ntilde;o encaja: formato, material y con qu&eacute; grifo rematarlo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20peque%C3%B1o%20y%20necesito%20ayuda%20para%20elegir" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
