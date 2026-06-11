<?php
/**
 * Category: Inodoros de colores (ID: 3811)
 *
 * Subcategoria de Inodoro (ID 81), filtrada por color (no blanco).
 * 23 productos: negro 14 + beige 4 + azul 4 + gris 1.
 *
 * Cluster ~470 busq/mes:
 *   - inodoros de colores (113) + inodoro color (94)
 *   - inodoro gris (102) + inodoro beige (97) + inodoro azul (63)
 *
 * Ano dato del briefing: el NEGRO tiene landing propia indexable
 * via filtro FilterEverything (pa_color=Negro). Esta pagina menciona
 * el negro pero rutea hacia su filtro.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora. Diseno y personalidad
 * en el bano. Quiere salir del blanco de siempre Y que combine con
 * el resto del bano.
 *
 * Hueco a explotar: la competencia tira de fichas frias. Aqui
 * ayudamos a COMBINAR el color con el resto del bano (que es la
 * duda real del que compra color).
 *
 * Producto real (datos verificables briefing):
 *   - Serie Serene (linea Colours)
 *   - Acabado MATE
 *   - Sistema RIMLESS (sin brida)
 *   - A SUELO
 *   - Ceramica vitrificada
 *   - Doble descarga
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 via adrihosan_h1_dinamico("Inodoros de colores").
 * - FAQs HTML sin json-ld.
 * - PROHIBIDO reproducir promesas del copy antiguo: "36 meses sin
 *   intereses", "envio gratis", "+50 modelos". Adrihosan DISTRIBUYE.
 * - Colores REALES en stock: negro, beige, gris, azul. NO mencionar
 *   verde, rosa, etc. como disponibles.
 * - URL del filtro negro: cuando la regla SEO este publicada,
 *   sustituir todas las ocurrencias del placeholder "TODO_FILTRO_NEGRO".
 * - Bloque contacto ESTANDAR (6 opciones).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 3811 - INODOROS DE COLORES
// ============================================================================

function adrihosan_categoria_inodoros_colores_contenido_superior() {
    // TODO: cuando la regla SEO del filtro negro este publicada,
    // sustituir esta constante por la URL real (algo como
    // /categoria-producto/sanitarios/inodoro/inodoros-de-colores/?pa_color=negro
    // o la URL canonica que decida Rank Math/FE).
    $url_filtro_negro = '#fe-products-wrapper'; // TODO_FILTRO_NEGRO
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/inodoros-de-colores-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Inodoros de colores' ); ?></h1>
            <p class="hero-tagline">Sal del blanco de siempre.</p>
            <div class="hero-buttons">
                <a href="#catalogo-inodoros-colores" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20no%20s%C3%A9%20qu%C3%A9%20color%20de%20inodoro%20pega%20con%20mi%20ba%C3%B1o" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>inodoros de colores</strong> de Adrihosan le dan personalidad al ba&ntilde;o sin renunciar a calidad. Negro mate para un aire sofisticado, beige y gris para tonos c&aacute;lidos y vers&aacute;tiles, azul para un toque de tendencia. Cer&aacute;mica resistente, acabado mate y sistema Rimless. Te ayudamos a combinar por WhatsApp, con env&iacute;o a toda Espa&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Negro, beige, gris y azul</h3>
                    <p>Color real en stock, sin promesas vac&iacute;as.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#11035;</div>
                    <h3>Acabado mate</h3>
                    <p>El color gana presencia sin brillos.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#9851;</div>
                    <h3>Sistema Rimless</h3>
                    <p>Sin brida: m&aacute;s higi&eacute;nico y f&aacute;cil de limpiar.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Asesoramiento + env&iacute;o</h3>
                    <p>Te ayudamos a combinar y enviamos a toda Espa&ntilde;a.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ACCESOS RAPIDOS A COLORES + FILTROS FE -->
    <section class="inodoros-colores-shortcuts adrihosan-full-width-block">
        <div class="inodoros-colores-shortcuts-wrapper">
            <span class="shortcuts-label">Filtra por color:</span>
            <div class="shortcuts-pills">
                <a class="shortcut-pill color-pill color-pill-negro" href="<?php echo esc_url( $url_filtro_negro ); ?>"><span class="color-dot" style="background:#1a1a1a;"></span>Negro</a>
                <a class="shortcut-pill color-pill" href="#fe-products-wrapper"><span class="color-dot" style="background:#d8c9a8;"></span>Beige</a>
                <a class="shortcut-pill color-pill" href="#fe-products-wrapper"><span class="color-dot" style="background:#7c8081;"></span>Gris</a>
                <a class="shortcut-pill color-pill" href="#fe-products-wrapper"><span class="color-dot" style="background:#4a6c8a;"></span>Azul</a>
            </div>
        </div>
    </section>

    <div id="destino-filtro-adria-inodoros-colores" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428402"]'); ?></div>

    <!-- 3. STORYTELLING: POR QUE ELEGIR UN INODORO DE COLOR -->
    <section class="inodoros-colores-storytelling adrihosan-full-width-block">
        <div class="inodoros-colores-storytelling-wrapper">
            <h2>Por qu&eacute; elegir un inodoro de color</h2>
            <div class="storytelling-text">
                <p>El blanco es lo seguro, pero el color es lo que da car&aacute;cter. Un inodoro de color convierte un sanitario en el <strong>punto focal del ba&ntilde;o</strong> y te permite afinar el ambiente: c&aacute;lido con beige, sereno con gris, fresco con azul o rotundo con negro.</p>
                <p>No es solo est&eacute;tica: el <strong>acabado mate</strong> de estos modelos aporta una textura suave y elegante que el blanco brillante no da, y el <strong>sistema Rimless</strong> mantiene la higiene al m&aacute;ximo. Si vas a reformar y quieres que el ba&ntilde;o tenga personalidad propia, aqu&iacute; empieza. Tambi&eacute;n los hay en formato <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">a suelo</a> tradicional.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-inodoros-colores" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de inodoros de colores</h2>
        <p class="product-loop-subtitle">23 modelos en cuatro tonos: negro, beige, gris y azul. La mayor&iacute;a de la serie Serene en acabado mate.</p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_inodoros_colores_contenido_inferior() {
    // Mismo placeholder TODO_FILTRO_NEGRO que en la _superior.
    $url_filtro_negro = '#fe-products-wrapper'; // TODO_FILTRO_NEGRO
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="inodoros-colores-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes qu&eacute; color pega con tu ba&ntilde;o? M&aacute;ndanos una foto por WhatsApp y te aconsejamos sobre la marcha.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20digas%20qu%C3%A9%20color%20de%20inodoro%20pega" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. TONOS DISPONIBLES - BEIGE / GRIS / AZUL / NEGRO -->
    <section class="inodoros-colores-sizes adrihosan-full-width-block">
        <div class="inodoros-colores-sizes-wrapper">
            <h2>Beige, gris, azul y negro: qu&eacute; transmite cada color</h2>
            <p class="sizes-intro">Tabla orientativa de los 4 tonos en stock para que te decidas con criterio:</p>

            <div class="sizes-table-wrapper">
                <table class="sizes-table colores-table">
                    <thead>
                        <tr>
                            <th>Color</th>
                            <th>Qu&eacute; aporta</th>
                            <th>Combina con</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tone-name"><span class="tone-swatch" style="background:#1a1a1a;"></span><strong>Negro mate</strong></td>
                            <td>Sofisticaci&oacute;n, car&aacute;cter</td>
                            <td>Grifer&iacute;a oscura, madera, microcemento</td>
                        </tr>
                        <tr>
                            <td class="tone-name"><span class="tone-swatch" style="background:#d8c9a8;"></span><strong>Beige</strong></td>
                            <td>Calidez, atemporalidad</td>
                            <td>Madera natural, tonos tierra</td>
                        </tr>
                        <tr>
                            <td class="tone-name"><span class="tone-swatch" style="background:#7c8081;"></span><strong>Gris</strong></td>
                            <td>Neutralidad elegante</td>
                            <td>Cemento, blanco, metales</td>
                        </tr>
                        <tr>
                            <td class="tone-name"><span class="tone-swatch" style="background:#4a6c8a;"></span><strong>Azul</strong></td>
                            <td>Frescura, tendencia</td>
                            <td>Blanco, madera clara</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="sizes-closing">El <strong>negro</strong> es el m&aacute;s vendido y tiene <a href="<?php echo esc_url( $url_filtro_negro ); ?>">su propia selecci&oacute;n filtrada</a>. Si dudas con la combinaci&oacute;n, m&aacute;ndanos foto del ba&ntilde;o por WhatsApp.</p>
        </div>
    </section>

    <!-- 8. PROPIEDADES COMUNES SERIE SERENE -->
    <section class="inodoros-colores-materials adrihosan-full-width-block">
        <div class="inodoros-colores-materials-wrapper">
            <h2>Qu&eacute; tienen en com&uacute;n nuestros inodoros de colores</h2>
            <p class="materials-intro">Las 8 prestaciones reales de los modelos en color (la mayor&iacute;a son de la serie Serene).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#11035;</span>
                    <h3>Acabado mate</h3>
                    <p>Textura elegante que disimula marcas frente al brillo.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9851;</span>
                    <h3>Sistema Rimless</h3>
                    <p>Sin brida interior: m&aacute;s higi&eacute;nico y f&aacute;cil de limpiar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Cer&aacute;mica vitrificada</h3>
                    <p>Material est&aacute;ndar del sector, resistente.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Doble descarga</h3>
                    <p>Ahorro de agua frente a los inodoros antiguos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127968;</span>
                    <h3>Formato a suelo</h3>
                    <p>El cl&aacute;sico, sencillo de instalar sin obra.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Color uniforme</h3>
                    <p>Cer&aacute;mica esmaltada de forma uniforme y duradera.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>F&aacute;cil de limpiar</h3>
                    <p>Esmalte moderno + Rimless: agua y jab&oacute;n neutro.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127752;</span>
                    <h3>4 tonos en stock</h3>
                    <p>Negro, beige, gris y azul. Sin promesas vac&iacute;as.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO - COMO COMBINAR UN INODORO DE COLOR -->
    <section class="inodoros-colores-asesoramiento adrihosan-full-width-block">
        <div class="inodoros-colores-asesoramiento-wrapper">
            <h2>C&oacute;mo combinar un inodoro de color en tu ba&ntilde;o</h2>
            <p class="asesoramiento-intro">
                El color suma car&aacute;cter, pero solo si combina. Estos 4 pasos te ayudan a acertar antes de pedir.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Parte del estilo del ba&ntilde;o:</strong> c&aacute;lido (beige), neutro (gris), fresco (azul) o rotundo (negro).</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Combina el color con la grifer&iacute;a</strong> y los accesorios para que haya armon&iacute;a.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>En ba&ntilde;os peque&ntilde;os,</strong> los tonos claros (beige, gris) aportan amplitud.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Si dudas,</strong> m&aacute;ndanos una foto del ba&ntilde;o por WhatsApp y te aconsejamos.</p>
                </div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Buscas el efecto flotante para reforzar el dise&ntilde;o? Mira los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">inodoros suspendidos</a>.</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20ba%C3%B1o%20para%20que%20me%20aconsejes%20color%20de%20inodoro" class="bumper-btn" target="_blank">WhatsApp 96 195 71 36</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="inodoros-colores-related adrihosan-full-width-block">
        <div class="inodoros-colores-related-wrapper">
            <h2>Otras opciones dentro del silo de inodoros</h2>
            <div class="related-pills">
                <a class="related-pill" href="<?php echo esc_url( $url_filtro_negro ); ?>">Inodoros negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-baratos/">Inodoros baratos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/">Todos los inodoros</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre inodoros de colores</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; colores de inodoro ten&eacute;is?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Trabajamos el <strong>negro, el beige, el gris y el azul</strong>, la mayor&iacute;a en acabado mate. Para otros tonos, escr&iacute;benos y te decimos disponibilidad.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un inodoro de color es m&aacute;s dif&iacute;cil de limpiar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No especialmente. En tonos oscuros la cal puede verse algo m&aacute;s, pero el esmalte moderno y el sistema <strong>Rimless</strong> facilitan mucho la limpieza con productos neutros.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El color est&aacute; en toda la pieza?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, la cer&aacute;mica va esmaltada en su color de forma uniforme y duradera, no es una capa superficial que se desgaste.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Combinan con cualquier ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>beige y el gris son neutros y vers&aacute;tiles</strong>, casan con casi todo. El azul aporta frescura y el negro, car&aacute;cter. Te ayudamos a elegir seg&uacute;n tu estilo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; acabado tienen?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La mayor&iacute;a son <strong>mate, con sistema Rimless sin brida</strong>. El mate da una textura elegante y disimula mejor las marcas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son m&aacute;s caros que los blancos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Suelen costar algo m&aacute;s por el acabado especial de color, pero la diferencia se nota en la personalidad que dan al ba&ntilde;o.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son a suelo o suspendidos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Nuestra gama de color es principalmente <strong>a suelo, de la serie Serene</strong>. Si buscas suspendido en color, cons&uacute;ltanos disponibilidad.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ten&eacute;is inodoros negros?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, el negro es nuestro color de m&aacute;s salida (14 de los 23 modelos). Tienes <a href="<?php echo esc_url( $url_filtro_negro ); ?>">la selecci&oacute;n completa en la p&aacute;gina de inodoros negros</a>.</p>
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

    <!-- 13. CONTACTO ESTANDAR (bloque comun de toda la web Adrihosan) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;A&uacute;n con dudas? Te ayudo a elegir.</h2><p>Soy Ricardo. D&eacute;jame asesorarte para que el color del inodoro combine perfecto con el resto de tu ba&ntilde;o.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20no%20s%C3%A9%20qu%C3%A9%20color%20de%20inodoro%20pega%20con%20mi%20ba%C3%B1o" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
