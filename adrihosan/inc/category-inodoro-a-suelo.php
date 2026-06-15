<?php
/**
 * Category: Inodoro a suelo (ID: 82)
 *
 * PILAR del silo Inodoros (sanitarios -> inodoro -> a-suelo). 57 productos.
 * Captura clusters satelite del clasico: inodoro salida horizontal,
 * inodoro salida vertical, inodoro salida dual, inodoro salida lateral,
 * inodoro tanque bajo, tanque alto.
 *
 * Eje de la pagina: la SALIDA del desague. Vertical (en el suelo, viviendas
 * antiguas) / Horizontal (en la pared, modernas) / Dual (sifon comodin).
 * Resolver esa duda es lo que desbloquea la compra.
 *
 * Buyer persona PRIMARIO: Reformista Primerizo (cambia el inodoro de toda
 * la vida, le aterra que no encaje con su desague y acabar en obra).
 * SECUNDARIO: Propietario con Alquiler (robusto, economico, sin lios).
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Inodoros a suelo").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Datos reales: ceramica vitrificada, tanque bajo, doble descarga,
 *   rimless. La SALIDA va por ficha: no afirmar que todos son dual.
 * - Adrihosan DISTRIBUYE. Sin promesas inventadas.
 * - Contacto: bloque estandar (6 opciones, igual que cat 81 y cat 3811).
 * - Filter Set ID silo inodoros: 428402.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 82 - INODORO A SUELO (pilar del silo)
// ============================================================================

function adrihosan_categoria_inodoro_a_suelo_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/Inodoros-a-suelo-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Inodoros a suelo' ); ?></h1>
            <p class="hero-tagline">El cl&aacute;sico que encaja con tu desag&uuml;e.</p>
            <div class="hero-buttons">
                <a href="#catalogo-inodoro-a-suelo" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20salida%20del%20desag%C3%BCe%20para%20que%20me%20digas%20qu%C3%A9%20inodoro%20a%20suelo%20encaja" class="hero-btn secondary" target="_blank">Foto de mi salida por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>inodoros a suelo</strong> de Adrihosan son la opci&oacute;n m&aacute;s pr&aacute;ctica y fiable para renovar el ba&ntilde;o: se apoyan en el suelo, aprovechan tu desag&uuml;e actual y se instalan sin obra cuando la salida coincide. La clave est&aacute; en esa salida &mdash;vertical, horizontal o dual&mdash;, y te ayudamos a identificar la tuya por WhatsApp. Env&iacute;o a toda Espa&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128205;</div>
                    <h3>Salida vertical, horizontal o dual</h3>
                    <p>Para que encaje con tu desag&uuml;e.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128736;</div>
                    <h3>Instalaci&oacute;n sencilla</h3>
                    <p>Sin bastidor ni obra si la salida coincide.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128167;</div>
                    <h3>Tanque bajo y doble descarga</h3>
                    <p>Lo pr&aacute;ctico de toda la vida, con ahorro de agua.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Asesoramiento + env&iacute;o</h3>
                    <p>Te ayudamos a elegir la salida y enviamos a toda Espa&ntilde;a.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo inodoros) -->
    <div id="destino-filtro-adria-inodoro-a-suelo" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428402"]'); ?></div>

    <!-- 3. STORYTELLING: EL CLASICO FIABLE -->
    <section class="inodoro-a-suelo-storytelling adrihosan-full-width-block">
        <div class="inodoro-a-suelo-storytelling-wrapper">
            <h2>Inodoro a suelo: el cl&aacute;sico fiable que no falla</h2>
            <div class="storytelling-text">
                <p>El <strong>inodoro a suelo</strong> es el de toda la vida, y sigue siendo la opci&oacute;n m&aacute;s elegida por una raz&oacute;n: encaja casi siempre y se instala sin complicaciones. Se apoya directamente en el suelo, aprovecha el desag&uuml;e existente y no necesita bastidor ni obra, as&iacute; que resulta m&aacute;s r&aacute;pido y econ&oacute;mico que un suspendido.</p>
                <p>Es robusto, soporta bien el uso diario y hay modelos para todos los presupuestos y estilos. Su &uacute;nico punto a mirar antes de comprar es la <strong>salida del desag&uuml;e</strong>, que es justo lo que vemos a continuaci&oacute;n. Si buscas otro formato, mira los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">inodoros suspendidos</a> o la <a href="https://www.adrihosan.com/cual-inodoro-es-mejor/">gu&iacute;a para elegir inodoro</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-inodoro-a-suelo" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de inodoros a suelo</h2>
        <p class="product-loop-subtitle">57 modelos a suelo: tanque bajo, doble descarga y, en su mayor&iacute;a, sistema rimless. La salida (vertical, horizontal o dual) va por ficha de producto.</p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_inodoro_a_suelo_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="inodoro-a-suelo-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes si tu desag&uuml;e es de suelo o de pared? M&aacute;ndanos una foto por WhatsApp y te decimos al momento qu&eacute; modelo encaja.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20salida%20del%20desag%C3%BCe%20para%20que%20me%20digas%20qu%C3%A9%20inodoro%20a%20suelo%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. LA SALIDA DEL DESAGUE -->
    <section class="inodoro-a-suelo-salida adrihosan-full-width-block">
        <div class="inodoro-a-suelo-salida-wrapper">
            <h2>Salida vertical, horizontal o dual: cu&aacute;l necesitas</h2>
            <p class="salida-intro">El eje t&eacute;cnico del inodoro a suelo. Identificar la salida es lo que evita la obra.</p>

            <div class="salida-table-wrapper">
                <table class="salida-table">
                    <thead>
                        <tr>
                            <th>Salida</th>
                            <th>D&oacute;nde est&aacute; el desag&uuml;e</th>
                            <th>T&iacute;pica de</th>
                            <th>Admite</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Vertical</strong></td>
                            <td>En el suelo</td>
                            <td>Viviendas antiguas</td>
                            <td>Solo inodoro a suelo</td>
                        </tr>
                        <tr>
                            <td><strong>Horizontal</strong></td>
                            <td>En la pared</td>
                            <td>Viviendas modernas</td>
                            <td>A suelo y suspendido</td>
                        </tr>
                        <tr>
                            <td><strong>Dual</strong></td>
                            <td>Vale para ambas</td>
                            <td>Reformas y recambios</td>
                            <td>El comod&iacute;n, encaja en casi todo</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="salida-nota">Muchos modelos a suelo modernos son de <strong>salida dual</strong>, pero no todos. Conf&iacute;rmalo en la ficha de cada producto antes de comprar.</p>
        </div>
    </section>

    <!-- 8. COMO IDENTIFICAR TU SALIDA -->
    <section class="inodoro-a-suelo-identificar adrihosan-full-width-block">
        <div class="inodoro-a-suelo-identificar-wrapper">
            <h2>C&oacute;mo saber qu&eacute; salida tiene tu ba&ntilde;o</h2>
            <p class="identificar-intro">Tres pasos para identificarla sin ser fontanero.</p>

            <div class="identificar-steps">
                <div class="identificar-step">
                    <span class="step-number">1</span>
                    <p>Mira por d&oacute;nde sale el tubo del inodoro actual.</p>
                </div>
                <div class="identificar-step">
                    <span class="step-number">2</span>
                    <p>Si se mete <strong>hacia el suelo</strong>, tu salida es <strong>vertical</strong>. Si va <strong>hacia la pared</strong>, es <strong>horizontal</strong>.</p>
                </div>
                <div class="identificar-step">
                    <span class="step-number">3</span>
                    <p>Si tienes dudas, haz una <strong>foto y env&iacute;anosla</strong>: te decimos al momento qu&eacute; modelo encaja y te evitas una obra innecesaria.</p>
                </div>
            </div>

            <div class="identificar-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20la%20salida%20del%20desag%C3%BCe%20de%20mi%20inodoro" class="bumper-btn" target="_blank">Mandar foto por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 9. CLAVES / PROPIEDADES -->
    <section class="inodoro-a-suelo-materials adrihosan-full-width-block">
        <div class="inodoro-a-suelo-materials-wrapper">
            <h2>Qu&eacute; buscar en un buen inodoro a suelo</h2>
            <p class="materials-intro">Las 8 prestaciones reales que marcan la diferencia entre modelos.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128279;</span>
                    <h3>Salida compatible</h3>
                    <p>Vertical, horizontal o dual: que encaje con tu desag&uuml;e.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica vitrificada</h3>
                    <p>Material est&aacute;ndar del sector, resistente al uso diario.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128202;</span>
                    <h3>Tanque bajo</h3>
                    <p>Lo habitual en el a suelo: silencioso y compacto.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Doble descarga</h3>
                    <p>Ahorro de agua frente a los inodoros antiguos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9851;</span>
                    <h3>Dise&ntilde;o rimless</h3>
                    <p>Sin brida interior: m&aacute;s higi&eacute;nico y f&aacute;cil de limpiar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129528;</span>
                    <h3>Tapa amortiguada</h3>
                    <p>Cierre suave (seg&uacute;n modelo).</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128736;</span>
                    <h3>Instalaci&oacute;n sin bastidor</h3>
                    <p>Se ancla al suelo y se conecta al desag&uuml;e existente.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>F&aacute;cil de limpiar</h3>
                    <p>Esmalte moderno + rimless: agua y jab&oacute;n neutro.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. ASESORAMIENTO: A SUELO O SUSPENDIDO -->
    <section class="inodoro-a-suelo-asesoramiento adrihosan-full-width-block">
        <div class="inodoro-a-suelo-asesoramiento-wrapper">
            <h2>A suelo o suspendido: cu&aacute;l te conviene</h2>
            <p class="asesoramiento-intro">
                Lo que cambia entre uno y otro, en cuatro puntos.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p>Si tu desag&uuml;e es <strong>vertical (de suelo)</strong>, el a suelo es tu opci&oacute;n directa: el suspendido necesitar&iacute;a obra.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p>Si es <strong>horizontal (de pared)</strong>, puedes elegir entre a suelo o suspendido.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p>El <strong>a suelo gana en precio</strong> y rapidez de instalaci&oacute;n; el suspendido, en limpieza del suelo y est&eacute;tica.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p>&iquest;Dudas? Cu&eacute;ntanos c&oacute;mo es tu ba&ntilde;o y te orientamos.</p>
                </div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Buscas el efecto flotante y la est&eacute;tica m&aacute;s moderna? Mira los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">inodoros suspendidos</a>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20decidir%20entre%20a%20suelo%20o%20suspendido" class="bumper-btn" target="_blank">WhatsApp 96 195 71 36</a>
            </div>
        </div>
    </section>

    <!-- 11. CATEGORIAS RELACIONADAS -->
    <section class="inodoro-a-suelo-related adrihosan-full-width-block">
        <div class="inodoro-a-suelo-related-wrapper">
            <h2>Otras opciones dentro del silo de inodoros</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-pequeno/">Inodoros peque&ntilde;os</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-baratos/">Inodoros baratos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-de-colores/">Inodoros de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/">Todos los inodoros</a>
                <a class="related-pill" href="https://www.adrihosan.com/cual-inodoro-es-mejor/">Gu&iacute;a: cu&aacute;l inodoro es mejor</a>
            </div>
        </div>
    </section>

    <?php
    // 12. BLOQUE DE TEXTO ESTANDAR DE CATEGORIA (editable desde WP admin)
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

    <!-- 13. FAQs (9 preguntas, NO json-ld - Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre inodoros a suelo</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es un inodoro a suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es el inodoro cl&aacute;sico, el que se apoya directamente en el suelo. Es el tipo m&aacute;s com&uacute;n porque aprovecha el desag&uuml;e existente y se instala sin bastidor.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tipos de salida hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Tres: <strong>vertical</strong> (el desag&uuml;e est&aacute; en el suelo), <strong>horizontal</strong> (en la pared) y <strong>dual</strong> (un sif&oacute;n que vale para las dos).</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo s&eacute; qu&eacute; salida tiene mi ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Mira por d&oacute;nde sale el tubo del inodoro actual. Si se mete en el suelo, es <strong>vertical</strong>. Si va hacia la pared, es <strong>horizontal</strong>. Ante la duda, m&aacute;ndanos una foto por WhatsApp.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; pasa si me equivoco de salida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Que el inodoro no encajar&aacute; con tu desag&uuml;e y tendr&iacute;as que hacer obra. Por eso conviene identificarla antes, o elegir un modelo de <strong>salida dual</strong> que vale para ambas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El inodoro a suelo se instala sin obra?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Si la salida del inodoro coincide con la de tu ba&ntilde;o, s&iacute;: es de los m&aacute;s sencillos de instalar, sin bastidor.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;A suelo o suspendido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Si tu desag&uuml;e es vertical, el a suelo es la opci&oacute;n directa. El <strong>a suelo gana en precio</strong> y facilidad de instalaci&oacute;n; el <strong>suspendido</strong>, en limpieza del suelo y est&eacute;tica.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Llevan tanque bajo y doble descarga?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, el tanque bajo es lo habitual en el a suelo y la mayor&iacute;a incorpora <strong>doble descarga</strong> para ahorrar agua.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;La salida dual sirve para cualquier ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Pr&aacute;cticamente s&iacute;: al admitir desag&uuml;e de suelo o de pared, es el <strong>comod&iacute;n</strong> que evita sorpresas en un recambio.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, enviamos a toda Espa&ntilde;a.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 14. CONTACTO ESTANDAR (bloque comun de toda la web Adrihosan) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;A&uacute;n con dudas? Te ayudo a elegir.</h2><p>Soy Ricardo. M&aacute;ndame foto de tu salida del desag&uuml;e y te digo exactamente qu&eacute; inodoro a suelo encaja en tu ba&ntilde;o.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20salida%20del%20desag%C3%BCe%20para%20que%20me%20digas%20qu%C3%A9%20inodoro%20a%20suelo%20encaja" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
