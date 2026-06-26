<?php
/**
 * Category: Suelos Porcelanicos en Oferta (ID: 2396)
 *
 * PILAR del silo OFERTAS (oferta-en-azulejos-y-sanitarios > 2396).
 * NO cuelga del silo porcelanico/pavimentos: rama paterna distinta.
 * ~488-590 productos (volatil, cambia por minuto segun rotacion).
 * COUNT DINAMICO obligatorio, NUNCA hardcodear.
 *
 * Keyword lider: "suelos porcelanicos ofertas" 260/mes + cluster precio
 * "precio porcelanico" 480, "suelo ceramico barato" 390, "baldosas baratas
 * para suelo" 210, "oferta suelo porcelanico" 90. Total ~1.430 busq/mes
 * intencion PRECIO.
 *
 * REGLA DE ORO: angulo = PRECIO/OFERTA, NO descripcion de material.
 * Si describimos el porcelanico como hace el evergreen 2410, lo
 * canibalizamos. Aqui solo defendemos: 1) por que esta rebajado
 * (rotacion stock, fin de serie, lotes proveedor) con transparencia,
 * 2) como elegir barato sin equivocarse.
 *
 * Buyer persona PRIMARIO: Reformista Primerizo (miedo a gastar de mas,
 * "barato es malo?"). SECUNDARIO: Propietario con Alquiler (barato,
 * rapido, resistente, stock).
 *
 * Filter Set FE: 428659 (REUTILIZA el del porcelanico). Embebido inline
 * porque cat 2396 cuelga de "oferta-en-azulejos-y-sanitarios" y NO
 * hereda los filtros del porcelanico por scope del widget lateral.
 * Sin el shortcode, la seccion de filtros sale vacia.
 * URLs filtradas en noindex,follow. Base 2396 indexada.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Suelos Porcelanicos en Oferta").
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 * - Encabezados de seccion SIN la letra "y".
 * - Financiacion = 3 meses sin intereses, NUNCA "36 meses".
 * - Adrihosan DISTRIBUYE. Cero "fabricacion propia".
 * - Materiales reales: PEI, antideslizante, rectificado, imitacion
 *   madera/marmol/cemento, absorcion <0,5%. PROHIBIDO vender marmol/
 *   cuarzo/granito naturales como "porcelanico".
 * - Enlace clave de diferenciacion: cruzar al evergreen
 *   /ceramica/pavimentos/porcelanico/ con anchor "catalogo completo
 *   de suelos porcelanicos" (Google entiende que esta es la pagina
 *   de ofertas, no la madre).
 * - Contacto: bloque estandar (6 opciones igual que el resto).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 2396 - SUELOS PORCELANICOS EN OFERTA (pilar silo ofertas)
// ============================================================================

function adrihosan_categoria_suelos_porcelanicos_ofertas_contenido_superior() {
    // Count dinamico del termino (volatil: rota cada pocos minutos).
    $term_2396 = get_term( 2396, 'product_cat' );
    $n_ofertas = ( $term_2396 && ! is_wp_error( $term_2396 ) ) ? (int) $term_2396->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/Suelos-porcelanicos-ofertas-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Suelos Porcel&aacute;nicos en Oferta' ); ?></h1>
            <p class="hero-tagline">Porcel&aacute;nico de primera marca a precio rebajado real. Stock, fin de serie y lotes de proveedor.</p>
            <div class="hero-buttons">
                <a href="#catalogo-suelos-porcelanicos-ofertas" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20consultar%20precio%20y%20stock%20de%20vuestros%20suelos%20porcel%C3%A1nicos%20en%20oferta" class="hero-btn secondary" target="_blank">Precio y stock por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Aqu&iacute; est&aacute;n nuestros <strong>suelos porcel&aacute;nicos en oferta</strong>: el mismo material que el resto del cat&aacute;logo, a un precio m&aacute;s bajo porque rotamos stock, liquidamos fin de serie o aprovechamos lotes de proveedor. Te decimos siempre por qu&eacute; cada referencia est&aacute; rebajada. Sin letra peque&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#127991;</div>
                    <h3>Precio rebajado real</h3>
                    <p>Fin de serie, stock o lote, nunca precio inflado.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128230;</div>
                    <h3>Stock disponible</h3>
                    <p>Env&iacute;o a toda Espa&ntilde;a, plazos reales.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128179;</div>
                    <h3>Financiaci&oacute;n 3 meses</h3>
                    <p>Sin intereses. Sin sorpresas.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128172;</div>
                    <h3>Asesoramiento humano</h3>
                    <p>Por WhatsApp, antes de comprar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (embebido inline, NO scope widget lateral) -->
    <div id="destino-filtro-adria-porcelanicos-ofertas" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428659"]'); ?></div>

    <!-- 3. STORYTELLING: OFERTA SIN RENUNCIAR A CALIDAD -->
    <section class="porcelanicos-ofertas-storytelling adrihosan-full-width-block">
        <div class="porcelanicos-ofertas-storytelling-wrapper">
            <h2>Suelos porcel&aacute;nicos en oferta sin renunciar a la calidad</h2>
            <div class="storytelling-text">
                <p>Una oferta en Adrihosan es <strong>porcel&aacute;nico de la misma calidad</strong> que el cat&aacute;logo general, rebajado por <strong>log&iacute;stica</strong>: rotaci&oacute;n de stock, fin de serie o lote de proveedor. No es material inferior ni segunda categor&iacute;a.</p>
                <p>Lo que cambia es de d&oacute;nde viene el descuento: cuando un formato deja de fabricarse o cuando llega un lote concreto a buen precio, lo pasamos al cliente. Por eso aqu&iacute; encuentras <strong>primera marca a precio rebajado real</strong>, no precios inflados con tachado. Si te interesa el contexto completo del material, mira el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/">cat&aacute;logo completo de suelos porcel&aacute;nicos</a>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-suelos-porcelanicos-ofertas" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de suelos porcel&aacute;nicos en oferta</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_ofertas > 0 ) : ?>
                <?php echo (int) $n_ofertas; ?> referencias rebajadas, con etiqueta de oferta sobre la ficha. El stock rota: si una pieza desaparece es que se agot&oacute;.
            <?php else : ?>
                Referencias rebajadas con etiqueta de oferta sobre la ficha. El stock rota: si una pieza desaparece es que se agot&oacute;.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_suelos_porcelanicos_ofertas_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="porcelanicos-ofertas-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;Buscas un formato concreto rebajado? Consulta precio actual y stock por WhatsApp, te decimos lo que tenemos hoy.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20consultar%20precio%20y%20stock%20de%20porcel%C3%A1nico%20en%20oferta" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: QUE FORMATO ELEGIR -->
    <section class="porcelanicos-ofertas-comparativa adrihosan-full-width-block">
        <div class="porcelanicos-ofertas-comparativa-wrapper">
            <h2>Qu&eacute; formato de porcel&aacute;nico barato elegir seg&uacute;n el uso</h2>
            <p class="comparativa-intro">Tabla orientativa: el formato y el PEI condicionan d&oacute;nde rinde mejor cada referencia.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Formato</th>
                            <th>Uso ideal</th>
                            <th>PEI m&iacute;nimo</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>30x60</strong></td>
                            <td>Ba&ntilde;o, cocina</td>
                            <td>3</td>
                            <td>El m&aacute;s econ&oacute;mico</td>
                        </tr>
                        <tr>
                            <td><strong>60x60</strong></td>
                            <td>Interior general</td>
                            <td>3</td>
                            <td>El m&aacute;s vers&aacute;til</td>
                        </tr>
                        <tr>
                            <td><strong>60x120 / gran formato</strong></td>
                            <td>Sal&oacute;n amplio, menos juntas</td>
                            <td>3-4</td>
                            <td>Est&eacute;tica moderna</td>
                        </tr>
                        <tr>
                            <td><strong>Lama imitaci&oacute;n madera</strong></td>
                            <td>Dormitorio, sal&oacute;n</td>
                            <td>3</td>
                            <td>Calidez sin mantenimiento</td>
                        </tr>
                        <tr>
                            <td><strong>Antideslizante (clase 3 / R11)</strong></td>
                            <td>Exterior, terraza</td>
                            <td>4</td>
                            <td>Seguridad obligatoria</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si dudas entre formatos, mira el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/">porcel&aacute;nico de gran formato</a> o el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/">suelo imitaci&oacute;n madera</a>. Y si va a exterior, conf&iacute;rmanos la zona y te ajustamos antideslizante.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="porcelanicos-ofertas-materials adrihosan-full-width-block">
        <div class="porcelanicos-ofertas-materials-wrapper">
            <h2>Propiedades del porcel&aacute;nico que justifican el precio</h2>
            <p class="materials-intro">Las 8 propiedades reales que tienen todos estos suelos, est&eacute;n o no rebajados.</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Absorci&oacute;n &lt; 0,5%</h3>
                    <p>Material casi no poroso, no se mancha por humedad.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128099;</span>
                    <h3>Resistencia PEI</h3>
                    <p>Escala normalizada de tr&aacute;nsito. PEI 3-4 para vivienda.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128293;</span>
                    <h3>Compatible con suelo radiante</h3>
                    <p>Buena conductividad, transmite el calor sin problema.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129529;</span>
                    <h3>Limpieza con bayeta h&uacute;meda</h3>
                    <p>Sin tratamientos ni mantenimiento especial.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9888;</span>
                    <h3>Antideslizante para exterior</h3>
                    <p>Modelos clase 3 / R11 disponibles, seguridad real.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Rectificado para juntas finas</h3>
                    <p>Bordes cortados a 90&deg;: junta de 2 mm, est&eacute;tica continua.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127912;</span>
                    <h3>Acabados imitaci&oacute;n</h3>
                    <p>Madera, m&aacute;rmol y cemento con realismo de impresi&oacute;n digital.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9201;</span>
                    <h3>Durabilidad de d&eacute;cadas</h3>
                    <p>No pierde aspecto ni color, no necesita reposici&oacute;n.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="porcelanicos-ofertas-asesoramiento adrihosan-full-width-block">
        <div class="porcelanicos-ofertas-asesoramiento-wrapper">
            <h2>C&oacute;mo comprar tu suelo porcel&aacute;nico de oferta en 4 pasos</h2>
            <p class="asesoramiento-intro">El proceso real, sin promesas vac&iacute;as.</p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Elige formato y acabado</strong> entre las referencias en oferta.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Consulta precio actual y stock</strong> por WhatsApp 96 195 71 36 (el stock rota cada pocos minutos).</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>Confirma los m&sup2;</strong> y suma un <strong>10% extra</strong> para cortes y roturas.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Rec&iacute;belo en obra</strong> con env&iacute;o a toda Espa&ntilde;a.</p>
                </div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20comprar%20suelo%20porcel%C3%A1nico%20en%20oferta,%20me%20ayudas%20con%20precio%20y%20stock" class="bumper-btn" target="_blank">WhatsApp 96 195 71 36</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="porcelanicos-ofertas-related adrihosan-full-width-block">
        <div class="porcelanicos-ofertas-related-wrapper">
            <h2>Cat&aacute;logo general y otros suelos relacionados</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/">Cat&aacute;logo completo de suelos porcel&aacute;nicos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/">Porcel&aacute;nico gran formato</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/">Suelo imitaci&oacute;n madera</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-de-cocina/">Suelos de cocina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/">Porcel&aacute;nico exterior antideslizante</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/oferta-en-azulejos-y-sanitarios/">M&aacute;s ofertas en azulejos y sanitarios</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre suelos porcel&aacute;nicos en oferta</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El suelo porcel&aacute;nico barato es de peor calidad?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. El precio rebajado <strong>no implica peor material</strong>: lo que cambia es el motivo del descuento (rotaci&oacute;n de stock, fin de serie o lote de proveedor). La cer&aacute;mica y las propiedades t&eacute;cnicas (PEI, absorci&oacute;n, rectificado) son las mismas que en el cat&aacute;logo general.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Por qu&eacute; hay suelos porcel&aacute;nicos en oferta en Adrihosan?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Tres motivos reales: <strong>rotaci&oacute;n de stock</strong> (liberamos almac&eacute;n), <strong>fin de serie</strong> (el fabricante deja de producir el modelo) y <strong>lotes de proveedor</strong> a buen precio que pasamos al cliente. Te decimos siempre cu&aacute;l aplica.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo s&eacute; que un porcel&aacute;nico en oferta es resistente?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Mira la <strong>escala PEI</strong> (tr&aacute;nsito) y la <strong>absorci&oacute;n &lt; 0,5%</strong> en la ficha. Para vivienda PEI 3 es suficiente; para exterior conviene PEI 4 + clase antideslizante. La oferta no rebaja esos par&aacute;metros.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hay stock real de los suelos porcel&aacute;nicos de oferta?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, todo lo que ves est&aacute; disponible. <strong>El stock rota cada pocos minutos</strong>: si una referencia desaparece de la web es que se agot&oacute;. Confirmamos cantidad por WhatsApp antes del pedido.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un suelo porcel&aacute;nico en oferta?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende de formato, acabado y motivo de la rebaja. Cada ficha muestra el <strong>precio actualizado en &euro;/m&sup2;</strong>. Si quieres compararlo con el precio anterior o saber cu&aacute;ndo entrar&aacute; un lote nuevo, pregunta por WhatsApp.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El porcel&aacute;nico de oferta sirve para suelo radiante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. El porcel&aacute;nico tiene <strong>buena conductividad t&eacute;rmica</strong> y es de los mejores acabados para suelo radiante. La oferta no afecta a esta propiedad.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo usar un suelo porcel&aacute;nico de oferta en exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&oacute;lo si la ficha indica <strong>clase antideslizante 3 (Rd &gt; 45) o R11</strong>. No todos valen para exterior; conf&iacute;rmanos la zona y te ajustamos. Mira tambi&eacute;n <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/">porcel&aacute;nico exterior antideslizante</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo pedir una muestra antes de comprar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Si tienes dudas con el color o el acabado, escr&iacute;benos por WhatsApp y te enviamos una muestra antes de cerrar el pedido. Mejor decidir con la pieza en la mano.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo financiar los suelos porcel&aacute;nicos en oferta?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;: <strong>3 meses sin intereses</strong> para el pedido completo, incluyendo las ofertas. Sin sorpresas, sin letra peque&ntilde;a.</p>
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
                <div><h2>&iquest;No encuentras tu formato en oferta?</h2><p>Soy Ricardo. Escr&iacute;beme y te avisamos en cuanto entre stock rebajado del formato y acabado que buscas. Sin compromiso.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20no%20encuentro%20mi%20formato%20en%20oferta,%20%C2%BFme%20avis%C3%A1is%20cuando%20entre%20stock%20rebajado?" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
