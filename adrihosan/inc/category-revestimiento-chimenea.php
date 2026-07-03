<?php
/**
 * Category: Revestimiento de chimenea (ID: 5395)
 *
 * Subcategoria del silo Azulejos (ceramica > azulejos >
 * revestimiento-chimenea). 71 productos.
 *
 * !! DOS BLOQUEANTES PREVIOS (solo Ricardo puede resolverlos): !!
 *   1) REDIRECT 301: existe un 301 activo que manda
 *      /ceramica/azulejos/revestimiento-chimenea/ a
 *      /ceramica/pavimentos/ (herencia del pruning de marzo). Debe
 *      ELIMINARSE o repuntarse en Rank Math ANTES de publicar, o la
 *      categoria sera inaccesible.
 *   2) FILTER SET: confirmar el ID del silo azulejos. Uso 427044 como
 *      default (el que usan category-azulejos, azulejos-decorativos y
 *      azulejos-antiguos, hermanas de esta cat). Este silo NO es el de
 *      pavimentos: NO reutilizar el 427026 de las cats 5393/5394.
 *
 * Keyword principal: "revestimiento chimenea" (1.600/mes). Cluster:
 * "revestimiento de chimeneas" 480, "revestimiento para chimeneas" 320,
 * "revestimiento pared chimenea" 260, "revestimiento chimenea moderna"
 * 210, "revestimiento para chimeneas de lena" 140, "revestimiento de
 * chimeneas en piedra" 140.
 *
 * Intencion SERP: comercial-inspiracional. Rankean blogs de fabricantes
 * (Porcelanosa, Dune, Atlas Plan) con ideas sin catalogo comprable,
 * Pinterest, tiendas de modulos de marmol a 1.600-1.900 EUR.
 *
 * Hueco a explotar: nadie ofrece surtido comprable a precio de azulejo
 * con el argumento anti-panel decorativo: el porcelanico no arde ni se
 * degrada con el calor como los paneles de PVC o poliuretano, el hollin
 * se limpia con un pano. Sirve para lena, cassette, electrica o
 * decorativa.
 *
 * Buyer persona PRIMARIO: Pareja Reformadora (la chimenea como
 * protagonista del salon). SECUNDARIO: Reformista Primerizo (miedo a que
 * el material no aguante el calor). El Reformista Rural pesa DOBLE aqui
 * (chimeneas de lena en casas de pueblo).
 *
 * Surtido real (71 productos):
 *   - Ladrillo caravista porcelanico: Manhattan (9 colores), London,
 *     Ribera
 *   - Piedra de pared: Iguazu Wall, modulares Esla, Borgogna, Filita,
 *     Quartz, Stones, Pietra, Denali, Metz, Andes, Arkansas, Utah,
 *     Manchester, Nebraska, Yosemite, Stonehenge deco 40x120
 *
 * REGLAS DURAS (briefing julio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Revestimiento de chimenea").
 *   NUNCA <h1> hardcodeado.
 * - Materiales REALES (series citadas). NO inventar series ni
 *   certificaciones termicas concretas.
 * - Encabezados SIN "elegancia", "funcionalidad", "sofisticacion" ni
 *   la conjuncion "Y" (mayus suelta).
 * - Adrihosan = DISTRIBUIDOR. NUNCA "fabricamos" ni "instalamos". Copy:
 *   "te asesoramos la pieza, tu colocador la ejecuta".
 * - Contacto: bloque estandar. WhatsApp 96 195 71 36 + email.
 * - Financiacion si se menciona = 3 meses sin intereses.
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 5395 - REVESTIMIENTO DE CHIMENEA (silo Azulejos)
// ============================================================================

// Filter Set 427044 = el del silo azulejos (category-azulejos y hermanas).
// TODO confirmar con Ricardo si el silo azulejos usa otro para esta cat.
if ( ! defined( 'ADRIHOSAN_CHIMENEA_FILTER_SET' ) ) {
    define( 'ADRIHOSAN_CHIMENEA_FILTER_SET', '427044' );
}

function adrihosan_categoria_revestimiento_chimenea_contenido_superior() {
    $term   = get_term( 5395, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/07/Revestimiento-chimenea-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Revestimiento de chimenea' ); ?></h1>
            <p class="hero-tagline">El fuego no puede con la cer&aacute;mica: naci&oacute; de &eacute;l.</p>
            <div class="hero-buttons">
                <a href="#catalogo-chimenea" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20revestir%20mi%20chimenea%20con%20cer%C3%A1mica%20o%20piedra" class="hero-btn secondary" target="_blank">Consultar por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Un <strong>revestimiento chimenea</strong> tiene que aguantar el calor toda la vida sin amarillear ni despegarse. El ladrillo caravista porcel&aacute;nico e imitaci&oacute;n piedra lo hacen donde los paneles decorativos se rinden, tanto en chimeneas de le&ntilde;a como en el&eacute;ctricas o decorativas.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128293;</div>
                    <h3>No arde ni se degrada</h3>
                    <p>Cer&aacute;mica cocida a m&aacute;s de 1.200&nbsp;&deg;C.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129532;</div>
                    <h3>Holl&iacute;n f&aacute;cil</h3>
                    <p>Pa&ntilde;o h&uacute;medo con detergente neutro, listo.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129521;</div>
                    <h3>71 referencias</h3>
                    <p>Caravista en 9 colores + 16 piedras de pared.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Presupuesto cerrado desde Valencia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo azulejos) -->
    <div id="destino-filtro-adria-chimenea" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="' . ADRIHOSAN_CHIMENEA_FILTER_SET . '"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="chimenea-storytelling adrihosan-full-width-block">
        <div class="chimenea-storytelling-wrapper">
            <h2>La chimenea vuelve a ser la protagonista del sal&oacute;n</h2>
            <div class="storytelling-text">
                <p>La tendencia manda vestir no solo el frontal, sino la <strong>pared completa</strong> de la chimenea, del suelo al techo, para que el fuego sea el centro del sal&oacute;n. Los paneles decorativos de PVC o poliuretano no pueden acercarse a un hogar encendido: se degradan, amarillean o algo peor.</p>
                <p>La cer&aacute;mica nace del fuego, se cuece a m&aacute;s de 1.200 grados, as&iacute; que el calor que irradia una chimenea dom&eacute;stica ni la inmuta. El holl&iacute;n se queda en la superficie del porcel&aacute;nico: un pa&ntilde;o h&uacute;medo lo devuelve al primer d&iacute;a. Todo esto son <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">azulejos</a> t&eacute;cnicos. Adrihosan es distribuidor: <strong>te asesoramos la pieza, tu colocador la ejecuta</strong>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-chimenea" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de revestimiento de chimenea</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> productos. Etiqueta sobre ficha: caravista, piedra o deco 40x120.
            <?php else : ?>
                Ladrillo caravista porcel&aacute;nico, piedra de pared y deco gran formato. Etiqueta sobre ficha con el tipo de pieza.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_revestimiento_chimenea_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="chimenea-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">M&aacute;ndanos una foto de tu chimenea por WhatsApp y te decimos qu&eacute; serie la transforma, moderna o r&uacute;stica.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20foto%20de%20mi%20chimenea%20para%20que%20me%20digas%20qu%C3%A9%20serie%20encaja" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: MODERNAS VS RUSTICAS -->
    <section class="chimenea-comparativa adrihosan-full-width-block">
        <div class="chimenea-comparativa-wrapper">
            <h2>Revestimiento de chimeneas modernas o r&uacute;sticas</h2>
            <p class="comparativa-intro">Cuatro familias de acabado seg&uacute;n el estilo del sal&oacute;n y el tipo de hogar.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Estilo</th>
                            <th>Series recomendadas</th>
                            <th>Efecto</th>
                            <th>D&oacute;nde brilla</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Moderna / loft</strong></td>
                            <td>Manhattan (9 colores), London, Ribera</td>
                            <td>Ladrillo visto urbano, del blanco n&oacute;rdico al negro industrial</td>
                            <td>Salones actuales, chimeneas el&eacute;ctricas, pared completa</td>
                        </tr>
                        <tr>
                            <td><strong>R&uacute;stica / casa de pueblo</strong></td>
                            <td>Esla, Borgogna, Filita, Quartz, Iguazu Wall</td>
                            <td>Piedra modular con relieve aut&eacute;ntico</td>
                            <td>Hogares de le&ntilde;a, mas&iacute;as, casas rurales</td>
                        </tr>
                        <tr>
                            <td><strong>Natural texturizada</strong></td>
                            <td>Stones, Pietra, Denali, Metz, Andes</td>
                            <td>Piedra de pared con volumen</td>
                            <td>Chimeneas de rinc&oacute;n, frontales protagonistas</td>
                        </tr>
                        <tr>
                            <td><strong>Deco gran formato</strong></td>
                            <td>Stonehenge 40x120, Arkansas, Utah, Manchester, Nebraska, Yosemite</td>
                            <td>Pared continua con textura</td>
                            <td>Vestir la pared entera del suelo al techo</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si buscas m&aacute;xima autenticidad mira las <a href="https://www.adrihosan.com/categoria-producto/piedras-naturales/">piedras naturales</a>; y para un frontal con dibujo, los <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/">azulejos decorativos</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="chimenea-materials adrihosan-full-width-block">
        <div class="chimenea-materials-wrapper">
            <h2>Lo que aguanta este revestimiento de chimenea</h2>
            <p class="materials-intro">Las 8 claves reales del porcel&aacute;nico y la piedra frente al calor de un hogar.</p>

            <div class="materials-grid">
                <div class="material-card"><span class="material-icon">&#128293;</span><h3>Material incombustible</h3><p>No arde ni se deforma con el calor irradiado.</p></div>
                <div class="material-card"><span class="material-icon">&#9728;</span><h3>No amarillea</h3><p>Soporta el calor sin degradarse como el PVC.</p></div>
                <div class="material-card"><span class="material-icon">&#129532;</span><h3>El holl&iacute;n no penetra</h3><p>Limpieza con pa&ntilde;o h&uacute;medo y detergente neutro.</p></div>
                <div class="material-card"><span class="material-icon">&#129521;</span><h3>Caravista porcel&aacute;nico</h3><p>Sin polvo ni desconchones del ladrillo tradicional.</p></div>
                <div class="material-card"><span class="material-icon">&#129704;</span><h3>Piedra modular</h3><p>Se coloca como un azulejo, con relieve natural.</p></div>
                <div class="material-card"><span class="material-icon">&#9992;</span><h3>Vale para todo tipo</h3><p>Le&ntilde;a, cassette, el&eacute;ctrica o decorativa.</p></div>
                <div class="material-card"><span class="material-icon">&#128296;</span><h3>Sobre el frontal existente</h3><p>Se coloca encima si el soporte est&aacute; firme.</p></div>
                <div class="material-card"><span class="material-icon">&#127968;</span><h3>Pared completa del sal&oacute;n</h3><p>Combinable del suelo al techo.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="chimenea-asesoramiento adrihosan-full-width-block">
        <div class="chimenea-asesoramiento-wrapper">
            <h2>Tu chimenea vestida en 4 pasos</h2>
            <p class="asesoramiento-intro">Del frontal medido al material en obra, con la cola correcta.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide el frontal</strong> (ancho x alto) e indica si quieres vestir la pared completa.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Escr&iacute;benos por WhatsApp</strong> al 96 195 71 36 con una foto del sal&oacute;n.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Te proponemos</strong> serie, m&sup2; con merma, cantoneras para las aristas y cola flexible recomendada.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Recibes el material</strong> en toda Espa&ntilde;a desde Valencia.</p></div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20el%20revestimiento%20de%20mi%20chimenea" class="bumper-btn" target="_blank">Vestir mi chimenea</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="chimenea-related adrihosan-full-width-block">
        <div class="chimenea-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/">Azulejos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/piedras-naturales/">Piedras naturales</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/">Azulejos decorativos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/revestimiento-fachada-exterior/">Revestimiento fachada exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/cantoneras-azulejos/">Cantoneras para azulejos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/suelo-de-barro/">Suelo de barro</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-antiguos/">Azulejos antiguos</a>
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

    <!-- 12. FAQs (8 preguntas del briefing, NO json-ld) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el revestimiento de chimenea</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; material es mejor para revestir una chimenea?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El gres porcel&aacute;nico imitaci&oacute;n ladrillo o piedra es el material m&aacute;s equilibrado. No arde, soporta el calor irradiado sin degradarse como los paneles decorativos de PVC o poliuretano, el holl&iacute;n no penetra en la pieza. La piedra de pared es la alternativa cuando buscas textura con m&aacute;ximo relieve.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Los azulejos aguantan el calor de una chimenea de le&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. La cer&aacute;mica se cuece a m&aacute;s de 1200 grados durante su fabricaci&oacute;n, as&iacute; que el calor que irradia una chimenea dom&eacute;stica no la afecta. Es uno de los motivos por los que lleva siglos vistiendo hogares de le&ntilde;a en toda Espa&ntilde;a.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;C&oacute;mo se limpia el holl&iacute;n del revestimiento?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Con un pa&ntilde;o h&uacute;medo con detergente neutro o un desengrasante suave. El porcel&aacute;nico apenas absorbe, as&iacute; que el holl&iacute;n se queda en la superficie. Evita los estropajos met&aacute;licos porque pueden marcar el acabado.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; cemento cola se usa para revestir una chimenea?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Un cemento cola flexible de clase C2 TE S1 o superior, preparado para soportar los cambios de temperatura sin que la pieza se despegue. Es el mismo criterio que se aplica al colocar sobre suelo radiante o en fachadas.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirve el ladrillo caravista porcel&aacute;nico para una chimenea moderna?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, es el revestimiento estrella de las chimeneas actuales. Series como Manhattan en 9 colores, London o Ribera dan el aspecto del ladrillo visto con el comportamiento del porcel&aacute;nico, sin el polvo ni los desconchones del ladrillo tradicional.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se puede revestir una chimenea vieja sin obra grande?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. Tanto el caravista porcel&aacute;nico como los paneles modulares de piedra se colocan sobre el frontal existente si est&aacute; firme, sin demoler. Es una de las reformas con m&aacute;s impacto visual por metro cuadrado invertido en un sal&oacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; se pone en el interior del hogar donde toca la llama?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El interior del hogar en contacto directo con la llama lleva material refractario espec&iacute;fico. El revestimiento cer&aacute;mico o de piedra viste el frontal, la campana o la pared, que es la parte visible que decora el sal&oacute;n.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Envi&aacute;is el revestimiento a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a desde Valencia. Escr&iacute;benos por WhatsApp al 96 195 71 36 con las medidas de tu chimenea o una foto del sal&oacute;n y te preparamos un presupuesto cerrado con el transporte incluido.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Caravista Manhattan o piedra Borgogna? Te lo resuelvo.</h2><p>Soy Ricardo. M&aacute;ndame la foto de tu sal&oacute;n y las medidas del frontal por WhatsApp y te digo qu&eacute; serie transforma tu chimenea y cu&aacute;ntas cantoneras necesitas.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20revestir%20mi%20chimenea%20con%20cer%C3%A1mica%20o%20piedra" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
