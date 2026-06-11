<?php
/**
 * Category: Encimeras de Resina (ID: 96)
 *
 * Subcategoria de Encimeras de Bano (ID 94), filtrada por material resina.
 * 321 productos (la mas grande del silo despues de suspendida). Cluster
 * de keywords ~690 busq/mes (la de MAS volumen del silo).
 *
 * Posicionamiento del brief: "el punto dulce" calidad-precio. La pieza
 * central es la comparativa honesta resina vs Solid Surface, que rutea
 * la intencion "Solid Surface" hacia /brand/krion/ y /brand/solidker/
 * sin crear categoria que canibalice.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - NO mencionar marmol, cuarzo ni granito como material PROPIO. Solo
 *   aparecen en la comparativa externa para contextualizar el precio.
 * - NO afirmar "eco-friendly / materiales sostenibles" sin respaldo.
 * - NO afirmar instalacion (Adrihosan distribuye, no instala).
 * - NO insinuar fabricacion propia de todo (solo Solidker).
 * - NO telefono fijo. Solo WhatsApp 96 195 71 36 + email.
 * - NO JSON-LD FAQPage hardcodeado.
 * - H1 SIEMPRE via adrihosan_h1_dinamico().
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 96 - ENCIMERAS DE RESINA
// ============================================================================

function adrihosan_categoria_encimeras_resina_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/encimera-resina-solid-surface-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Encimeras de Resina' ); ?></h1>
            <p class="hero-tagline">La encimera que mejor equilibra calidad, dise&ntilde;o y precio. Sin poros, sin juntas.</p>
            <div class="hero-buttons">
                <a href="#catalogo-encimeras-resina" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20para%20elegir%20una%20encimera%20de%20resina" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    La encimera de ba&ntilde;o de resina es el punto dulce del ba&ntilde;o: lavabo integrado en una sola pieza continua, superficie sin poros que no se mancha, una gama enorme de colores y, sobre todo, una relaci&oacute;n calidad-precio dif&iacute;cil de batir. Est&aacute; fabricada en resina con cargas minerales y acabado <strong>gel coat</strong>, lo que la hace impermeable y resistente al uso diario. La trabajamos en muchas medidas y a medida si la tuya no est&aacute;.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128142;</div>
                    <h3>Calidad-precio</h3>
                    <p>Prestaciones altas sin el coste de la piedra.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128167;</div>
                    <h3>Sin poros</h3>
                    <p>El gel coat no deja que penetren agua ni manchas.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129513;</div>
                    <h3>Lavabo integrado</h3>
                    <p>Una pieza continua, sin juntas donde se agarra la cal.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Color a elegir</h3>
                    <p>Del blanco a tonos oscuros y texturas, tambi&eacute;n a medida.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ACCESOS RAPIDOS A SIBLINGS + FILTROS FE -->
    <section class="encimeras-resina-shortcuts adrihosan-full-width-block">
        <div class="encimeras-resina-shortcuts-wrapper">
            <span class="shortcuts-label">Accesos r&aacute;pidos:</span>
            <div class="shortcuts-pills">
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-blanca/">Blanca</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-negra/">Negra</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-suspendida/">Suspendida</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">Doble seno</a>
            </div>
        </div>
    </section>

    <div id="destino-filtro-adria-encimeras-resina" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428107"]'); ?></div>

    <!-- 3. STORYTELLING: QUE ES LA RESINA -->
    <section class="encimeras-resina-storytelling adrihosan-full-width-block">
        <div class="encimeras-resina-storytelling-wrapper">
            <h2>Qu&eacute; es una encimera de ba&ntilde;o de resina</h2>
            <div class="storytelling-text">
                <p>La resina de ba&ntilde;o no es pl&aacute;stico barato: es una mezcla de <strong>resina de poli&eacute;ster con cargas minerales naturales</strong>, recubierta con un acabado <strong>gel coat</strong> que la sella por completo. Ese gel coat es la clave: hace la superficie impermeable, sin poros y resistente al agua, la humedad y los productos de limpieza habituales.</p>
                <p>El resultado es una encimera con el lavabo integrado en una sola pieza continua, sin juntas donde se acumule la cal, f&aacute;cil de limpiar y con un tacto c&aacute;lido. Frente a la piedra natural o el cuarzo, la resina pesa menos, cuesta bastante menos y ofrece much&iacute;sima m&aacute;s libertad de color y forma &mdash; perfecta para combinaciones tipo <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-blanca/">blanco</a> sobre <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-suspendida/">suspendida</a>. Por eso se ha convertido en el material m&aacute;s vendido para ba&ntilde;o: da el 90% de las prestaciones de materiales mucho m&aacute;s caros, a una fracci&oacute;n del precio.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-encimeras-resina" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de encimeras de ba&ntilde;o de resina</h2>
        <p class="product-loop-subtitle">321 modelos disponibles. Filtra por medida, color, fald&oacute;n o tipo de instalaci&oacute;n.</p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_encimeras_resina_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="encimeras-resina-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No tienes claro si la resina es lo tuyo o mejor Solid Surface? Escr&iacute;benos por WhatsApp y te orientamos seg&uacute;n tu ba&ntilde;o y tu presupuesto.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20tengo%20dudas%20entre%20resina%20y%20Solid%20Surface%20para%20mi%20encimera%20de%20ba%C3%B1o" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA RESINA vs SOLID SURFACE - LA PIEZA CENTRAL DEL BRIEF -->
    <section class="encimeras-resina-sizes adrihosan-full-width-block">
        <div class="encimeras-resina-sizes-wrapper">
            <h2>Encimera de ba&ntilde;o de resina o Solid Surface: cu&aacute;l elegir</h2>
            <p class="sizes-intro">Es la duda n&uacute;mero uno. Te la resolvemos sin rodeos:</p>

            <div class="sizes-table-wrapper">
                <table class="sizes-table">
                    <thead>
                        <tr>
                            <th>Aspecto</th>
                            <th class="compare-resina">Resina (carga mineral + gel coat)</th>
                            <th>Solid Surface</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Precio</strong></td>
                            <td class="compare-resina-cell">M&aacute;s econ&oacute;mica</td>
                            <td>M&aacute;s premium</td>
                        </tr>
                        <tr>
                            <td><strong>Superficie</strong></td>
                            <td class="compare-resina-cell">Sin poros (sellada con gel coat)</td>
                            <td>Sin poros (material macizo)</td>
                        </tr>
                        <tr>
                            <td><strong>Lavabo</strong></td>
                            <td class="compare-resina-cell">Integrado, una pieza</td>
                            <td>Integrado, una pieza</td>
                        </tr>
                        <tr>
                            <td><strong>Reparaci&oacute;n</strong></td>
                            <td class="compare-resina-cell">Marcas leves s&iacute;; el gel coat es algo m&aacute;s delicado</td>
                            <td>Totalmente reparable a lija, incluso golpes</td>
                        </tr>
                        <tr>
                            <td><strong>Peso</strong></td>
                            <td class="compare-resina-cell">Ligera</td>
                            <td>M&aacute;s pesada</td>
                        </tr>
                        <tr>
                            <td><strong>A medida</strong></td>
                            <td class="compare-resina-cell">S&iacute;</td>
                            <td>S&iacute; (<a href="https://www.adrihosan.com/brand/krion/">Krion</a> o nuestra l&iacute;nea <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>)</td>
                        </tr>
                        <tr class="size-current">
                            <td><strong>Ideal para</strong></td>
                            <td class="compare-resina-cell">Gran calidad ajustando el presupuesto <span class="size-current-label">M&aacute;s vendida</span></td>
                            <td>Uso intenso y m&aacute;xima durabilidad</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="sizes-closing">
                <strong>Resumen:</strong> si quieres la mejor relaci&oacute;n calidad-precio, <strong>resina</strong>. Si buscas la durabilidad m&aacute;xima y reparaci&oacute;n total, mira el <a href="https://www.adrihosan.com/brand/krion/">Solid Surface de Krion</a> o nuestra l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>. Las dos son sin poros e higi&eacute;nicas.
            </p>
        </div>
    </section>

    <!-- 8. VENTAJAS Y PROPIEDADES -->
    <section class="encimeras-resina-materials adrihosan-full-width-block">
        <div class="encimeras-resina-materials-wrapper">
            <h2>Ventajas de la encimera de ba&ntilde;o de resina</h2>
            <p class="materials-intro">Por qu&eacute; es la m&aacute;s vendida en ba&ntilde;o de uso diario.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Sin poros</h3>
                    <p>El gel coat impide que penetren agua y manchas.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129440;</span>
                    <h3>Higi&eacute;nica</h3>
                    <p>Lavabo integrado sin juntas: nada de cal acumulada.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>F&aacute;cil mantenimiento</h3>
                    <p>Agua, jab&oacute;n neutro y aclarar. Sin productos especiales.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128170;</span>
                    <h3>Resistente</h3>
                    <p>Aguanta impactos y el uso diario del ba&ntilde;o.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9878;</span>
                    <h3>Ligera</h3>
                    <p>Pesa menos que la piedra: m&aacute;s f&aacute;cil de manejar e instalar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Mucho color</h3>
                    <p>Blanco, gris, <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-negra/">negro</a>, tonos neutros y texturas.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#8596;</span>
                    <h3>Fondo reducido</h3>
                    <p>Versi&oacute;n estrecha para ba&ntilde;os peque&ntilde;os o muebles justos.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128142;</span>
                    <h3>Relaci&oacute;n calidad-precio</h3>
                    <p>Altas prestaciones para <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">doble seno</a> sin coste de piedra.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. COLORES, TEXTURAS, MEDIDAS -->
    <section class="encimeras-resina-formats adrihosan-full-width-block">
        <div class="encimeras-resina-formats-wrapper">
            <h2>Colores, texturas, medidas de la encimera de ba&ntilde;o de resina</h2>
            <p class="formats-text">
                La resina es de los materiales m&aacute;s vers&aacute;tiles en acabado: el <strong>blanco mate</strong> es el m&aacute;s vendido, pero hay <strong>grises, negros, tonos tierra y texturas tipo piedra o madera</strong>. En medidas, de 60&nbsp;cm a 200&nbsp;cm de ancho, fondo est&aacute;ndar o reducido, con o sin fald&oacute;n. Si tu combinaci&oacute;n no est&aacute; en cat&aacute;logo, la fabricamos a medida.
            </p>
        </div>
    </section>

    <!-- 10. ASESORAMIENTO SOLIDKER -->
    <section class="encimeras-resina-asesoramiento adrihosan-full-width-block">
        <div class="encimeras-resina-asesoramiento-wrapper">
            <h2>Encimera de ba&ntilde;o de resina a medida: tu medida, tu color</h2>
            <p class="asesoramiento-intro">
                Si el cat&aacute;logo no encaja por medida, color o forma, la fabricamos a medida con nuestra l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>, hecha en Valencia. El resto del cat&aacute;logo de resina lo distribuimos de fabricantes seleccionados.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Elige acabado, fondo y fald&oacute;n</strong> del cat&aacute;logo o d&iacute;nos qu&eacute; buscas.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Manda un plano</strong> con medidas (ancho, fondo, posici&oacute;n del grifo).</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>Presupuesto personalizado</strong> por WhatsApp o email en 48 h.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Fabricamos y entregamos</strong> en 20-30 d&iacute;as con seguro de transporte.</p>
                </div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://www.adrihosan.com/contacto/" class="bumper-btn">Hablar con un t&eacute;cnico</a>
            </div>
        </div>
    </section>

    <!-- 11. CATEGORIAS Y MARCAS RELACIONADAS -->
    <section class="encimeras-resina-related adrihosan-full-width-block">
        <div class="encimeras-resina-related-wrapper">
            <h2>Sigue por el silo de Encimeras y nuestras marcas Solid Surface</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/">Todas las encimeras de ba&ntilde;o</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-blanca/">Encimera de ba&ntilde;o blanca</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-negra/">Encimera de ba&ntilde;o negra</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-suspendida/">Encimera de ba&ntilde;o suspendida</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-doble-seno/">Encimera de ba&ntilde;o doble seno</a>
                <a class="related-pill brand-pill" href="https://www.adrihosan.com/brand/krion/">Krion&reg; (Solid Surface)</a>
                <a class="related-pill brand-pill" href="https://www.adrihosan.com/brand/solidker/">Solidker (l&iacute;nea propia a medida)</a>
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

    <!-- 13. FAQs (NO json-ld, Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre encimeras de ba&ntilde;o de resina</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es exactamente una encimera de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es una encimera fabricada en <strong>resina de poli&eacute;ster con cargas minerales</strong> y acabado <strong>gel coat</strong>. Ese sellado la hace impermeable, sin poros y resistente al agua, con el lavabo integrado en una sola pieza continua.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Resina o Solid Surface, cu&aacute;l me conviene?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La <strong>resina</strong> ofrece la mejor relaci&oacute;n calidad-precio y va de sobra para un ba&ntilde;o dom&eacute;stico. El <strong>Solid Surface</strong>, como <a href="https://www.adrihosan.com/brand/krion/">Krion</a> o nuestra l&iacute;nea <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>, es m&aacute;s caro pero totalmente reparable a lija y pensado para uso muy intenso. Las dos son sin poros e higi&eacute;nicas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;La resina se mancha o se raya?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El gel coat evita que penetren las manchas y aguanta bien el uso diario. Conviene no usar estropajos met&aacute;licos ni dejar productos agresivos sobre la superficie. Las marcas leves se pueden pulir.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es m&aacute;s barata que la piedra o el cuarzo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, bastante. Da prestaciones muy altas, sin poros e higi&eacute;nica, a una fracci&oacute;n del coste de la piedra natural o el cuarzo, y adem&aacute;s pesa menos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;En qu&eacute; colores hay encimeras de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>blanco mate</strong> es el m&aacute;s vendido, pero hay grises, <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimera-bano-negra/">negros</a>, tonos tierra y texturas tipo piedra o madera. A medida se amplian las opciones de color.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo se limpia una encimera de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Con agua y jab&oacute;n neutro, aclarando bien. Sin productos especiales. Para la lej&iacute;a o el antical, no verter directo sobre la superficie ni dejarlo actuar mucho rato.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo pedirla a medida o con fondo reducido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Fabricamos a medida con nuestra l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a>: ancho, fondo reducido, fald&oacute;n y color. Presupuesto en 48 horas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is env&iacute;o fuera de Valencia?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, a toda Espa&ntilde;a con seguro de transporte. Si dudas con medida o material, escr&iacute;benos por WhatsApp o email antes de comprar.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 14. CONTACTO ESTANDAR (sin telefono fijo) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo, asesor t&eacute;cnico de Adrihosan">
                <div>
                    <h2>Soy Ricardo. &iquest;Resina o Solid Surface? Te oriento sin compromiso
                        <span>Por WhatsApp o email, sin presi&oacute;n de venta.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">&#128205;</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">&#128187;</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20para%20elegir%20una%20encimera%20de%20resina" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">WhatsApp 96 195 71 36</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">&#9993;</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}
