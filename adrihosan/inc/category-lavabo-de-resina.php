<?php
/**
 * Category: Lavabo de resina (ID: 2681)
 *
 * Subcategoria del silo Lavabos (parent 90). 169 productos.
 * CATEGORIA DE MATERIAL transversal a todo el silo.
 *
 * Estado previo: titulo vivo era "Lavabo De Resina Archives - Adrihosan"
 * (el default de WordPress). Nunca se optimizo. 169 productos sin trabajar
 * = mina sin explotar. Build completo.
 *
 * Keyword lider: "lavabo de resina" + co-target FUERTE "lavabo solid
 * surface" (SINONIMO del mismo material: la categoria lavabo-solid-surface
 * ya redirige 301 aqui, asi que esta pagina debe capturar las dos formas
 * de buscar).
 *
 * REGLA DE MARCA (no negociable):
 *   resina = Solid Surface = el MISMO material.
 *   NUNCA se separan. La comparativa es resina vs CERAMICA (materiales
 *   distintos), no resina vs solid surface.
 *
 * Inventario real verificado:
 *   - 169 productos, TODO Solid Surface sobre encimera.
 *   - Formatos: rectangular (Amarna, Tinis, Luxor, Memfis), tipo bol
 *     (Eos, Fruit), cuadrado (Compac, Square).
 *   - En blanco y en color.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora con sesgo de diseno.
 * SECUNDARIO: Reformista Primerizo (muchos no saben que es la resina/
 * Solid Surface: hay que explicarlo y venderlo en la pagina).
 *
 * Angulo unico: el material moderno que la ceramica no iguala:
 *   - sin juntas
 *   - color macizo (en toda la masa, no esmalte)
 *   - reparable con lija fina
 *   - tacto calido
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Lavabo de resina"). NUNCA <h1>
 *   hardcodeado.
 * - resina = Solid Surface (mismo material, NUNCA separar).
 * - Capturar el sinonimo "solid surface" en el copy.
 * - Materiales REALES en pagina: resina/Solid Surface (este), y ceramica/
 *   porcelana SOLO como comparacion.
 * - Adrihosan = distribuidor. NUNCA fabricante ni instalador (salvo
 *   Solidker linea propia en Solid Surface por colada, plazo 20-30 dias).
 * - Financiacion = 3 meses sin intereses (NUNCA "36 meses").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Texto de las 9 FAQs: EXACTO del briefing/Archivo 2 (palabra por
 *   palabra para que el schema FAQPage de Rank Math no diverja del HTML).
 * - PROHIBIDO relleno: "elegancia", "funcionalidad", "toque de",
 *   "atemporal".
 * - Contacto: bloque estandar (6 opciones). Email destacado del
 *   briefing: comercial@adrihosan.com.
 * - Filter Set FE silo lavabos: 428781.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2681 - LAVABO DE RESINA / SOLID SURFACE (build completo)
// ============================================================================

function adrihosan_categoria_lavabo_de_resina_contenido_superior() {
    $term   = get_term( 2681, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/Lavabo-de-resina-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Lavabo de resina' ); ?></h1>
            <p class="hero-tagline">El material moderno que la cer&aacute;mica no iguala: sin juntas y en color.</p>
            <div class="hero-buttons">
                <a href="#catalogo-lavres" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20resina%20Solid%20Surface" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>lavabo de resina</strong> &mdash;lo que muchos llaman <strong>Solid Surface</strong>&mdash; es la opci&oacute;n que la cer&aacute;mica no puede igualar: sin juntas, con el color en toda la masa y un tacto c&aacute;lido. M&aacute;s de 150 modelos, casi todos sobre encimera.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128683;</div>
                    <h3>Sin juntas</h3>
                    <p>Pieza maciza, higi&eacute;nica, f&aacute;cil de limpiar.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127912;</div>
                    <h3>Color macizo</h3>
                    <p>El tono va en toda la masa, no se desconcha.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128295;</div>
                    <h3>Reparable</h3>
                    <p>Un ara&ntilde;azo leve se disimula con una lija fina.</p>
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
    <div id="destino-filtro-adria-lavres" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428781"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="lavres-storytelling adrihosan-full-width-block">
        <div class="lavres-storytelling-wrapper">
            <h2>Lavabo de resina: qu&eacute; es, por qu&eacute; se lleva</h2>
            <div class="storytelling-text">
                <p>La <strong>resina</strong> que usamos en estos lavabos es una mezcla de <strong>resinas acr&iacute;licas con cargas minerales</strong>, maciza y sin poros. Es el material que el sector llama <strong>Solid Surface</strong> &mdash; los dos nombres se refieren a lo mismo, no son productos distintos: si buscaste "lavabo Solid Surface" y has llegado aqu&iacute;, est&aacute;s en el sitio correcto.</p>
                <p>La diferencia con la cer&aacute;mica es de fondo: en la cer&aacute;mica el color es un <strong>esmalte superficial</strong> que puede desconcharse con un golpe; en la resina el color va en <strong>toda la masa</strong>, as&iacute; que no destine ni salta. Adem&aacute;s no tiene juntas (encimera y seno pueden hacerse en una sola pieza) y el ara&ntilde;azo leve se repara con una lija fina. El mismo material lo tienes en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimeras-de-resina/">encimeras de resina</a>, por si quieres montar el conjunto a juego.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-lavres" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de lavabos de resina</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> lavabos de resina (Solid Surface). Etiqueta sobre ficha: forma y color.
            <?php else : ?>
                Selecci&oacute;n de lavabos de resina (Solid Surface) sobre encimera, en blanco y en color.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_lavabo_de_resina_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="lavres-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Dudas entre resina o cer&aacute;mica? Te explicamos por WhatsApp qu&eacute; te conviene seg&uacute;n el uso y el presupuesto.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20decidir%20entre%20lavabo%20de%20resina%20o%20cer%C3%A1mica" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: RESINA VS CERAMICA -->
    <section class="lavres-comparativa adrihosan-full-width-block">
        <div class="lavres-comparativa-wrapper">
            <h2>Lavabo de resina o de cer&aacute;mica: cu&aacute;l elegir</h2>
            <p class="comparativa-intro">Los dos materiales reales en sanitario, comparados sin tecnicismos.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Color</th>
                            <th>Juntas / poros</th>
                            <th>Reparable</th>
                            <th>Tacto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Resina / Solid Surface</strong></td>
                            <td>En toda la masa</td>
                            <td>Sin juntas ni poros</td>
                            <td>S&iacute;, con lija fina</td>
                            <td>C&aacute;lido</td>
                        </tr>
                        <tr>
                            <td><strong>Cer&aacute;mica / porcelana</strong></td>
                            <td>Esmalte superficial</td>
                            <td>Vidriado, puede desconcharse</td>
                            <td>No</td>
                            <td>Fr&iacute;o</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">La <strong>resina</strong> gana en limpieza (sin juntas), durabilidad de color y reparabilidad. La <strong>cer&aacute;mica</strong> sigue siendo m&aacute;s econ&oacute;mica y es el cl&aacute;sico de toda la vida. Si tu reforma busca <strong>dise&ntilde;o actual y color que no destine</strong>, la resina es la apuesta.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="lavres-materials adrihosan-full-width-block">
        <div class="lavres-materials-wrapper">
            <h2>Claves del lavabo de resina</h2>
            <p class="materials-intro">Las 6 caracter&iacute;sticas reales que definen el material (sin promesas vac&iacute;as).</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128683;</span>
                    <h3>Sin juntas</h3>
                    <p>El seno y el cuerpo se fabrican por colada en una sola pieza.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Color macizo</h3>
                    <p>El tono va en toda la masa. Un golpe no salta el esmalte.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129383;</span>
                    <h3>Ligero</h3>
                    <p>Pesa menos que la cer&aacute;mica, m&aacute;s f&aacute;cil de instalar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127777;</span>
                    <h3>Tacto c&aacute;lido</h3>
                    <p>Acabado mate o satinado m&aacute;s agradable que la porcelana fr&iacute;a.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128295;</span>
                    <h3>Reparable con lija</h3>
                    <p>Los ara&ntilde;azos leves desaparecen lijando suave la zona afectada.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>Higi&eacute;nico sin poros</h3>
                    <p>El agua y la suciedad no penetran. Limpieza con pa&ntilde;o h&uacute;medo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="lavres-asesoramiento adrihosan-full-width-block">
        <div class="lavres-asesoramiento-wrapper">
            <h2>C&oacute;mo elegir tu lavabo de resina</h2>
            <p class="asesoramiento-intro">Cuatro pasos para acertar con la pieza que pega en tu encimera.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Elige forma</strong>: rectangular, tipo bol o cuadrado.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Color</strong>: blanco mate o un tono (negro, gris, azul marino, verdoso&hellip;).</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Mide la encimera</strong> y deja espacio al grifo.</p></div>
                <div class="step-card"><span class="step-number">4</span><p>Te ayudamos con el <strong>grifo de ca&ntilde;o alto</strong> que pega por WhatsApp.</p></div>
            </div>

            <p class="asesoramiento-extra-link">&iquest;Una medida o forma exacta? Fabricamos a medida en Solid Surface por colada con la l&iacute;nea propia <a href="https://www.adrihosan.com/brand/solidker/">Solidker</a> (20-30 d&iacute;as).</p>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20lavabo%20de%20resina%20Solid%20Surface" class="bumper-btn" target="_blank">Pedir asesoramiento</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="lavres-related adrihosan-full-width-block">
        <div class="lavres-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-sobre-encimera/">Lavabo sobre encimera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-de-colores/">Lavabos de colores</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabos-negros/">Lavabos negros</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/encimeras-bano/encimeras-de-resina/">Encimeras de resina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/lavabos/lavabo-blanco/">Lavabo blanco</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/grifo-lavabo/">Grifo de lavabo</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE EDITABLE DE LA CATEGORIA (si tuviera copy on-page)
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

    <!-- 12. FAQs (9 preguntas EXACTAS del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el lavabo de resina</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es lo mismo un lavabo de resina que uno de Solid Surface?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, es el mismo material. Solid Surface es el nombre t&eacute;cnico de la resina con cargas minerales que usamos en estos lavabos. Cambia el nombre, no el producto.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; ventajas tiene un lavabo de resina frente a la cer&aacute;mica?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No tiene juntas, el color va en toda la masa y no es un esmalte que se desconche, es ligero y tiene un tacto m&aacute;s c&aacute;lido. Adem&aacute;s se puede reparar lijando un ara&ntilde;azo superficial.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo de resina se mancha o se raya?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Resiste bien el uso diario. Una mancha sale con jab&oacute;n suave y un ara&ntilde;azo leve se disimula con una lija fina, algo que en la cer&aacute;mica no se puede hacer.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;De qu&eacute; colores hay lavabos de resina?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Al ir el color en toda la pieza, los hay en blanco y en muchos tonos: negro, gris, azul marino o verdoso, entre otros. El blanco mate y el negro son los m&aacute;s pedidos.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo de resina va sobre encimera?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, la mayor&iacute;a son lavabos sobre encimera tipo rectangular, bol o cuadrado, que se apoyan sobre el mueble. Necesitan un grifo de ca&ntilde;o alto o mural.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo de resina amarillea con el tiempo?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un Solid Surface de calidad mantiene el tono si lo limpias con productos no abrasivos. Evita la lej&iacute;a pura y los estropajos met&aacute;licos.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es resistente el lavabo de resina?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, aguanta el uso diario de un ba&ntilde;o sin problema. Es un material macizo, no un recubrimiento, por eso un golpe no salta el esmalte como en la cer&aacute;mica.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El lavabo de resina incluye grifo y desag&uuml;e?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La grifer&iacute;a va aparte salvo que se indique. La v&aacute;lvula de desag&uuml;e suele acompa&ntilde;ar seg&uacute;n el modelo. Si dudas te lo confirmamos por WhatsApp.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a y te asesoramos por WhatsApp en el 96 195 71 36 o por email durante todo el proceso.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Resina o cer&aacute;mica? Te ayudo a decidir.</h2><p>Soy Ricardo. Cu&eacute;ntame c&oacute;mo es el ba&ntilde;o y el uso que le vais a dar, y te digo si te compensa el lavabo de resina o vas con un cer&aacute;mico cl&aacute;sico.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20lavabo%20de%20resina%20Solid%20Surface" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:comercial@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
