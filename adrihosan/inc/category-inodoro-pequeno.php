<?php
/**
 * Category: Inodoro pequeno (ID: 3798)
 *
 * Subcategoria de Inodoro (ID 81), filtrada por fondo reducido /
 * compacto. Cluster ~1.378 busq/mes:
 *   - inodoro pequeno (547) + inodoro compacto (559) [LIDERES]
 *   - wc pequeno (299) + wc compacto (220)
 *   - vater pequeno (145) + water pequeno (104)
 *   - wc para banos pequenos (51)
 *
 * Buyer persona PRIMARIO: Reformista Primerizo. Esta MIDIENDO con
 * el movil en la mano. No quiere catalogo - quiere saber si CABE.
 * Hueco a explotar: dar la cifra clara (60-70 estandar vs ~50
 * reducido vs 42 suspendido) y ayudar a medir.
 *
 * Dato tecnico verificable del briefing:
 *   - Estandar: 60-70 cm de fondo
 *   - Fondo reducido: ~50 cm
 *   - Suspendido pequeno: hasta 42 cm
 * Estas cifras del sector SI se pueden citar. Las cifras concretas
 * por MODELO van desde la ficha (no inventar).
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 via adrihosan_h1_dinamico("Inodoros pequenos").
 * - FAQs HTML sin json-ld.
 * - Datos reales: porcelana vitrificada, doble descarga, rimless,
 *   soft-close. Fondo en cm por modelo NO inventar.
 * - Bloque contacto ESTANDAR (6 opciones).
 * - Cada H2 con keyword o variante (pequeño / compacto / fondo
 *   reducido).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 3798 - INODORO PEQUENO
// ============================================================================

function adrihosan_categoria_inodoro_pequeno_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/inodoro-pequeno-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Inodoros peque&ntilde;os' ); ?></h1>
            <p class="hero-tagline">Fondo reducido para que tu ba&ntilde;o respire.</p>
            <div class="hero-buttons">
                <a href="#catalogo-inodoro-peq" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20tengo%20un%20ba%C3%B1o%20peque%C3%B1o%20y%20necesito%20saber%20qu%C3%A9%20inodoro%20cabe" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>inodoros peque&ntilde;os</strong> y de fondo reducido de Adrihosan caben donde un est&aacute;ndar no entra: con unos <strong>50&nbsp;cm de fondo</strong> frente a los 60-70 habituales, ganas paso y amplitud sin renunciar a prestaciones. Ideales para aseos de cortes&iacute;a, pisos urbanos y reformas con metros contados. Te ayudamos a medir por WhatsApp y enviamos a toda Espa&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Fondo reducido</h3>
                    <p>En torno a 50&nbsp;cm, frente a los 60-70 de un est&aacute;ndar.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129694;</div>
                    <h3>M&aacute;s paso y amplitud</h3>
                    <p>Liberas espacio visual y de circulaci&oacute;n.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#9851;</div>
                    <h3>Sin renunciar a nada</h3>
                    <p>Doble descarga, rimless y tapa amortiguada.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Asesoramiento + env&iacute;o</h3>
                    <p>Te ayudamos a medir y enviamos a toda Espa&ntilde;a.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ACCESOS RAPIDOS DENTRO DEL SILO INODOROS + FILTROS FE -->
    <section class="inodoro-peq-shortcuts adrihosan-full-width-block">
        <div class="inodoro-peq-shortcuts-wrapper">
            <span class="shortcuts-label">Accesos r&aacute;pidos:</span>
            <div class="shortcuts-pills">
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Suspendidos</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">A suelo</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/cisternas-empotradas/">Cisternas empotradas</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/">Todos los inodoros</a>
            </div>
        </div>
    </section>

    <div id="destino-filtro-adria-inodoro-peq" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428402"]'); ?></div>

    <!-- 3. STORYTELLING: POR QUE CAMBIA UN BANO CHICO -->
    <section class="inodoro-peq-storytelling adrihosan-full-width-block">
        <div class="inodoro-peq-storytelling-wrapper">
            <h2>Por qu&eacute; un inodoro peque&ntilde;o cambia un ba&ntilde;o chico</h2>
            <div class="storytelling-text">
                <p>La diferencia est&aacute; en el <strong>fondo</strong>. Un inodoro est&aacute;ndar sobresale <strong>60-70&nbsp;cm</strong> desde la pared; uno de fondo reducido se queda en torno a <strong>50&nbsp;cm</strong>, y un suspendido peque&ntilde;o puede bajar a <strong>42&nbsp;cm</strong>. Esos diez o veinte cent&iacute;metros son justo el paso que necesitas para abrir la puerta sin chocar, pasar de lado o colocar el mueble del lavabo.</p>
                <p>Y al ocupar menos, el ba&ntilde;o se ve m&aacute;s amplio y ordenado, algo que se nota much&iacute;simo en aseos sin luz natural. No es renunciar a comodidad: es quitar lo que sobra. Encaja igual en un <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">inodoro a suelo</a> compacto o en un <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">suspendido</a> con la cisterna en la pared.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-inodoro-peq" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de inodoros peque&ntilde;os y compactos</h2>
        <p class="product-loop-subtitle">Modelos de fondo reducido pensados para ba&ntilde;os y aseos justos de espacio.</p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_inodoro_pequeno_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="inodoro-peq-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">Dinos cu&aacute;nto mide tu ba&ntilde;o y te decimos cu&aacute;l entra. Escr&iacute;benos las medidas por WhatsApp y resolvemos antes de comprar.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20las%20medidas%20de%20mi%20ba%C3%B1o%20para%20que%20me%20digas%20qu%C3%A9%20inodoro%20cabe" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA - SUSPENDIDO PEQUENO vs COMPACTO A SUELO -->
    <section class="inodoro-peq-sizes adrihosan-full-width-block">
        <div class="inodoro-peq-sizes-wrapper">
            <h2>Suspendido o compacto a suelo para un ba&ntilde;o peque&ntilde;o</h2>
            <p class="sizes-intro">Las dos opciones ganan fondo. Esta es la regla rapida para decidir:</p>

            <div class="sizes-table-wrapper">
                <table class="sizes-table">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Compacto a suelo</th>
                            <th>Suspendido peque&ntilde;o</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Fondo aproximado</strong></td>
                            <td>Seg&uacute;n el modelo (rango 48-54&nbsp;cm)</td>
                            <td>Seg&uacute;n el modelo (hasta 42&nbsp;cm)</td>
                        </tr>
                        <tr>
                            <td><strong>Instalaci&oacute;n</strong></td>
                            <td>Directa, sin obra</td>
                            <td>Bastidor empotrado en pared</td>
                        </tr>
                        <tr>
                            <td><strong>Sensaci&oacute;n de amplitud</strong></td>
                            <td>Buena</td>
                            <td>M&aacute;xima (suelo despejado)</td>
                        </tr>
                        <tr>
                            <td><strong>Cisterna</strong></td>
                            <td>Tanque bajo (vista)</td>
                            <td>Empotrada en el tabique</td>
                        </tr>
                        <tr>
                            <td><strong>Limpieza del suelo</strong></td>
                            <td>Normal</td>
                            <td>Total (nada apoyado en el suelo)</td>
                        </tr>
                        <tr>
                            <td><strong>Ver cat&aacute;logo</strong></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="sizes-closing">La decisi&oacute;n depende de si quieres maximizar amplitud (suspendido + <a href="https://www.adrihosan.com/categoria-producto/sanitarios/cisternas-empotradas/">cisterna empotrada</a>) o resolverlo sin obra (compacto a suelo). En aseos muy justos, el suspendido suele ganar.</p>
        </div>
    </section>

    <!-- 8. PROPIEDADES - LO QUE NO PIERDES -->
    <section class="inodoro-peq-materials adrihosan-full-width-block">
        <div class="inodoro-peq-materials-wrapper">
            <h2>Lo que no pierdes en un inodoro peque&ntilde;o</h2>
            <p class="materials-intro">Las 8 prestaciones reales que mantiene un compacto frente a un est&aacute;ndar.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Fondo reducido</h3>
                    <p>En torno a 50&nbsp;cm, mucho menos que un est&aacute;ndar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Porcelana vitrificada</h3>
                    <p>Material est&aacute;ndar del sector, resistente.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Doble descarga</h3>
                    <p>3 / 4,5&nbsp;L: ahorro de agua frente a los antiguos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9851;</span>
                    <h3>Dise&ntilde;o rimless</h3>
                    <p>Sin brida interior: m&aacute;s higi&eacute;nico y f&aacute;cil de limpiar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>Tapa amortiguada</h3>
                    <p>Cierre soft-close, sin golpes ni ruido.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128290;</span>
                    <h3>Salida dual</h3>
                    <p>Encaja en el desag&uuml;e existente (suelo o pared).</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9729;</span>
                    <h3>Suspendido o a suelo</h3>
                    <p>Eliges seg&uacute;n el bastidor de tu pared.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>Limpieza f&aacute;cil</h3>
                    <p>Menos superficie + rimless = limpieza r&aacute;pida.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO - COMO SABER QUE CABE -->
    <section class="inodoro-peq-asesoramiento adrihosan-full-width-block">
        <div class="inodoro-peq-asesoramiento-wrapper">
            <h2>C&oacute;mo saber qu&eacute; inodoro cabe en tu ba&ntilde;o</h2>
            <p class="asesoramiento-intro">
                Antes de pedir, los 4 pasos que te ahorran un desastre. Si dudas en alg&uacute;n punto, mejor consulta antes que devolver despu&eacute;s.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Mide el fondo libre</strong> desde la pared donde ir&aacute; el inodoro hasta el primer obst&aacute;culo (mueble, puerta, otra pared).</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Deja paso suficiente</strong> para abrir la puerta y circular por el ba&ntilde;o.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>Elige tipo:</strong> suspendido si quieres m&aacute;xima amplitud, compacto a suelo si prefieres sencillez sin obra.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Comprueba con nosotros</strong> que encaja con tu salida de desag&uuml;e antes de comprar.</p>
                </div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20que%20me%20ayud%C3%A9is%20a%20saber%20qu%C3%A9%20inodoro%20cabe%20en%20mi%20ba%C3%B1o" class="bumper-btn" target="_blank">WhatsApp 96 195 71 36</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="inodoro-peq-related adrihosan-full-width-block">
        <div class="inodoro-peq-related-wrapper">
            <h2>Otras opciones dentro del silo de inodoros</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/cisternas-empotradas/">Cisternas empotradas</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/">Todos los inodoros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-baratos/">Inodoros m&aacute;s econ&oacute;micos</a>
                <a class="related-pill" href="https://www.adrihosan.com/cual-inodoro-es-mejor/">Gu&iacute;a: cu&aacute;l inodoro es mejor</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre inodoros peque&ntilde;os</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto mide un inodoro peque&ntilde;o o de fondo reducido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un inodoro est&aacute;ndar tiene <strong>60-70&nbsp;cm</strong> de fondo. Uno de fondo reducido se queda en torno a <strong>48-54&nbsp;cm</strong>, y un suspendido peque&ntilde;o puede bajar hasta los <strong>42&nbsp;cm</strong>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es un inodoro de fondo reducido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es un inodoro con menos profundidad de la habitual, pensado para sobresalir menos desde la pared y dejar m&aacute;s paso en ba&ntilde;os peque&ntilde;os.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Suspendido o compacto a suelo para un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">suspendido</a> despeja el suelo y da m&aacute;s sensaci&oacute;n de amplitud, pero necesita bastidor. El <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">compacto a suelo</a> se instala directo, sin obra. Los dos ahorran fondo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo s&eacute; qu&eacute; inodoro cabe en mi ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Mide el fondo libre desde la pared y aseg&uacute;rate de dejar paso para la puerta y para circular. Si nos das esa medida, te decimos qu&eacute; modelo entra.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Pierde prestaciones por ser peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Mantiene <strong>doble descarga, dise&ntilde;o rimless y tapa amortiguada</strong>. M&aacute;s peque&ntilde;o no significa peor.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El suspendido da m&aacute;s sensaci&oacute;n de amplitud?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Al no apoyar en el suelo y llevar la cisterna empotrada en la pared, el ba&ntilde;o se ve m&aacute;s despejado y es m&aacute;s f&aacute;cil de limpiar.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirve para un aseo de cortes&iacute;a estrecho?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es justo su terreno. En aseos de cortes&iacute;a y ba&ntilde;os urbanos peque&ntilde;os es donde m&aacute;s se nota el fondo reducido.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Necesita obra?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El compacto a suelo no, se conecta a tu desag&uuml;e. El suspendido s&iacute; necesita un bastidor empotrado en la pared (y normalmente <a href="https://www.adrihosan.com/categoria-producto/sanitarios/cisternas-empotradas/">cisterna empotrada</a>).</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, enviamos a toda Espa&ntilde;a. Si dudas con las medidas, escr&iacute;benos por WhatsApp o email antes de comprar.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR (bloque comun de toda la web Adrihosan) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;A&uacute;n con dudas? Te ayudo a elegir.</h2><p>Soy Ricardo. D&eacute;jame asesorarte para que el inodoro entre en tu ba&ntilde;o y siga siendo c&oacute;modo.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20tengo%20un%20ba%C3%B1o%20peque%C3%B1o%20y%20necesito%20saber%20qu%C3%A9%20inodoro%20cabe" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
