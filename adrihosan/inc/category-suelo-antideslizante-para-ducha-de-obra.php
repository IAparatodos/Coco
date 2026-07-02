<?php
/**
 * Category: Suelo para ducha de obra (ID: 5394)
 *
 * Subcategoria del silo Pavimentos (ceramica > pavimentos >
 * suelo-antideslizante-para-ducha-de-obra). 68 productos.
 *
 * Keyword principal: "suelo antideslizante para ducha de obra" (170/mes).
 * Secundarias: "suelo para ducha de obra", "azulejos antideslizantes para
 * ducha", "mosaico plato de ducha de obra".
 *
 * Intencion SERP: comercial-informativa. Rankean fabricantes (Exagres,
 * Apavisa) con guias de clases C1/C2/C3 y grandes superficies con
 * listados planos.
 *
 * Hueco a explotar: nadie une la norma (clase 3 dentro de la ducha) con
 * el argumento de instalador: la pieza pequena enmallada sigue las 4
 * pendientes del plato hacia el desague sin cortes forzados, cada junta
 * frena el pie. Adrihosan tiene 68 referencias que cubren TODO el abanico:
 * mosaico porcelanico, canto rodado, 22,5x22,5 clasico, gran formato C3.
 *
 * Buyer persona PRIMARIO: Reformista Primerizo (miedo a resbalones, a que
 * "la ducha de obra salga mal"). SECUNDARIO: Pareja Reformadora (efecto
 * spa, continuidad estetica).
 *
 * Surtido real:
 *   - Enmallados porcelanico: Scale, Prado, Landes, Beton, Bali, Arles,
 *     Antic, Wood, Volcan, Forest, Collage + octogono + hexagonal
 *   - 9 mallas de piedra canto rodado
 *   - Series 22,5x22,5: Tokio, Orion, Alba, Kioto
 *   - Tandem-R clase 3 en 60x120
 *
 * REGLAS DURAS (briefing julio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Suelo para ducha de obra").
 *   NUNCA <h1> hardcodeado.
 * - Materiales REALES (series citadas). NO inventar series ni
 *   certificaciones.
 * - Encabezados SIN "elegancia", "funcionalidad", "sofisticacion" ni
 *   la conjuncion "Y" (mayus suelta).
 * - Adrihosan = DISTRIBUIDOR. NUNCA "fabricamos" ni "instalamos". El
 *   texto antiguo afirmaba "ofrecemos servicios de instalacion
 *   profesional" -> PROHIBIDO, eliminado. "Te asesoramos la pieza, tu
 *   colocador la ejecuta".
 * - Contacto: bloque estandar. WhatsApp 96 195 71 36 + email.
 * - Financiacion si se menciona = 3 meses sin intereses.
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 *
 * FILTER SET: 427026, el de la categoria PADRE Pavimentos (cat 64),
 *   igual que la hermana cat 5393 (suelo para garaje).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 5394 - SUELO PARA DUCHA DE OBRA (silo Pavimentos)
// ============================================================================

// Filter Set 427026 = el de la categoria padre Pavimentos (cat 64).
if ( ! defined( 'ADRIHOSAN_SDUCHA_FILTER_SET' ) ) {
    define( 'ADRIHOSAN_SDUCHA_FILTER_SET', '427026' );
}

function adrihosan_categoria_suelo_ducha_obra_contenido_superior() {
    $term   = get_term( 5394, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/07/Suelo-antideslizante-ducha-de-obra-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Suelo para ducha de obra' ); ?></h1>
            <p class="hero-tagline">El agarre que tu pie descalzo agradece cada ma&ntilde;ana.</p>
            <div class="hero-buttons">
                <a href="#catalogo-sducha" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20suelo%20antideslizante%20para%20mi%20ducha%20de%20obra" class="hero-btn secondary" target="_blank">Consultar por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    El <strong>suelo antideslizante para ducha de obra</strong> decide si tu plato es seguro o una pista de patinaje. Aqu&iacute; tienes mosaico enmallado, canto rodado natural, formato cl&aacute;sico 22,5 o gran formato clase 3: las 68 piezas que se adaptan a las pendientes de tu ducha.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129462;</div>
                    <h3>Agarre pie descalzo</h3>
                    <p>Piezas pensadas para zona h&uacute;meda.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Sigue las pendientes</h3>
                    <p>El enmallado se adapta al plato sin cortes forzados.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129513;</div>
                    <h3>68 referencias en stock</h3>
                    <p>Mosaico, piedra, 22,5x22,5, gran formato C3.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Presupuesto cerrado desde Valencia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo pavimentos, mismo del padre) -->
    <div id="destino-filtro-adria-sducha" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="' . ADRIHOSAN_SDUCHA_FILTER_SET . '"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="sducha-storytelling adrihosan-full-width-block">
        <div class="sducha-storytelling-wrapper">
            <h2>El plato de ducha de obra empieza por el suelo</h2>
            <div class="storytelling-text">
                <p>Un plato de obra tiene <strong>cuatro pendientes hacia el desag&uuml;e</strong>, del 1,5 al 2%. La pieza grande lisa pelea contra esas pendientes; la <strong>pieza peque&ntilde;a enmallada</strong> las sigue con naturalidad, y cada junta act&uacute;a como freno bajo el pie mojado. Dentro de la ducha, la resistencia al deslizamiento no se negocia: <strong>clase 3</strong>, o clase 2 como m&iacute;nimo.</p>
                <p>Por eso los profesionales llevan d&eacute;cadas resolviendo el plato de obra con <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejo-mosaico/">mosaico</a>, y por eso el canto rodado natural sigue siendo el rey del efecto spa. Adrihosan es distribuidor: <strong>te asesoramos la pieza, tu colocador la ejecuta</strong>.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-sducha" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de suelo para ducha de obra</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> productos. Etiqueta sobre ficha: enmallado, canto rodado, 22,5x22,5 o C3 60x120.
            <?php else : ?>
                Mosaico enmallado, canto rodado, 22,5x22,5 y gran formato clase 3. Etiqueta sobre ficha con el tipo de pieza.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_suelo_ducha_obra_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="sducha-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">M&aacute;ndanos las medidas de tu plato por WhatsApp y te decimos qu&eacute; pieza encaja con tus pendientes y tu desag&uuml;e.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20las%20medidas%20de%20mi%20plato%20de%20ducha%20de%20obra" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: MOSAICO VS PIEDRA VS CLASICO VS GRAN FORMATO -->
    <section class="sducha-comparativa adrihosan-full-width-block">
        <div class="sducha-comparativa-wrapper">
            <h2>Suelo para ducha de obra: mosaico, piedra, cl&aacute;sico o gran formato</h2>
            <p class="comparativa-intro">Las cuatro v&iacute;as reales para resolver el plato, comparadas con criterio de instalador.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Opci&oacute;n</th>
                            <th>Agarre</th>
                            <th>Adaptaci&oacute;n a pendientes</th>
                            <th>Estilo</th>
                            <th>Colocaci&oacute;n</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Mosaico enmallado porcel&aacute;nico</strong> (Scale, Beton, Wood&hellip;)</td>
                            <td>Muy alto (juntas m&uacute;ltiples)</td>
                            <td>Excelente, sin cortes forzados</td>
                            <td>Moderno, 13 acabados</td>
                            <td>Sencilla sobre malla</td>
                        </tr>
                        <tr>
                            <td><strong>Malla de piedra canto rodado</strong></td>
                            <td>Muy alto (relieve natural)</td>
                            <td>Excelente</td>
                            <td>Efecto spa natural</td>
                            <td>Sencilla, rejuntado generoso</td>
                        </tr>
                        <tr>
                            <td><strong>Serie 22,5x22,5</strong> (Tokio, Ori&oacute;n, Alba, Kioto)</td>
                            <td>Alto</td>
                            <td>Buena</td>
                            <td>Cl&aacute;sico atemporal</td>
                            <td>Est&aacute;ndar</td>
                        </tr>
                        <tr>
                            <td><strong>Tandem-R clase 3 &middot; 60x120</strong></td>
                            <td>Alto (C3 certificado)</td>
                            <td>Exige corte en sobre (4 tri&aacute;ngulos)</td>
                            <td>Continuidad total con el ba&ntilde;o</td>
                            <td>Para colocador con oficio</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Si prefieres plato prefabricado en vez de obra, mira los <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-antideslizantes/">platos de ducha antideslizantes</a>. Y para un suelo con dibujo, los <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/">azulejos hexagonales de suelo</a>.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="sducha-materials adrihosan-full-width-block">
        <div class="sducha-materials-wrapper">
            <h2>Lo que hace seguro un suelo antideslizante para ducha</h2>
            <p class="materials-intro">Las 8 claves reales que dan agarre y durabilidad dentro del plato.</p>

            <div class="materials-grid">
                <div class="material-card"><span class="material-icon">&#129462;</span><h3>Agarre con el pie descalzo</h3><p>Pensado para la zona mojada del plato.</p></div>
                <div class="material-card"><span class="material-icon">&#128208;</span><h3>Sigue las 4 pendientes</h3><p>El enmallado se amolda al plato hacia el desag&uuml;e.</p></div>
                <div class="material-card"><span class="material-icon">&#9968;</span><h3>Cada junta frena</h3><p>Las juntas m&uacute;ltiples cortan el deslizamiento.</p></div>
                <div class="material-card"><span class="material-icon">&#128167;</span><h3>Baja absorci&oacute;n de agua</h3><p>Porcel&aacute;nico que no encharca ni mancha.</p></div>
                <div class="material-card"><span class="material-icon">&#129704;</span><h3>Piedra canto rodado</h3><p>Relieve natural con el efecto spa m&aacute;s buscado.</p></div>
                <div class="material-card"><span class="material-icon">&#9989;</span><h3>Tandem-R clase 3</h3><p>Antideslizante C3 certificado en 60x120.</p></div>
                <div class="material-card"><span class="material-icon">&#127968;</span><h3>Combina con el ba&ntilde;o</h3><p>Continuidad con el revestimiento de pared o suelo.</p></div>
                <div class="material-card"><span class="material-icon">&#129529;</span><h3>Limpieza con pH neutro</h3><p>Jab&oacute;n suave y rasqueta tras la ducha.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="sducha-asesoramiento adrihosan-full-width-block">
        <div class="sducha-asesoramiento-wrapper">
            <h2>Tu suelo de ducha resuelto en 4 pasos</h2>
            <p class="asesoramiento-intro">Del plato medido al material en obra, con la junta correcta.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide el plato</strong> (largo x ancho) e indica d&oacute;nde va el desag&uuml;e.</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Escr&iacute;benos por WhatsApp</strong> al 96 195 71 36 con una foto del ba&ntilde;o.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Te proponemos</strong> pieza, m&sup2; con merma, junta recomendada y transporte cerrado.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Recibes el material</strong> en toda Espa&ntilde;a desde Valencia.</p></div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20elegir%20el%20suelo%20de%20mi%20ducha%20de%20obra" class="bumper-btn" target="_blank">Resolver mi ducha</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="sducha-related adrihosan-full-width-block">
        <div class="sducha-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/">Suelos cer&aacute;micos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/azulejo-mosaico/">Azulejo mosaico</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-antideslizantes/">Platos de ducha antideslizantes</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/mamparas/">Mamparas</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/">Azulejos hexagonales de suelo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/piedras-naturales/">Piedras naturales</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el suelo antideslizante para ducha de obra</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; suelo se pone en una ducha de obra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Lo habitual es un porcel&aacute;nico antideslizante en pieza peque&ntilde;a o mosaico enmallado. Este formato se adapta a las pendientes del plato hacia el desag&uuml;e y sus juntas multiplican el agarre del pie descalzo. Tambi&eacute;n se usan mallas de piedra canto rodado para conseguir un efecto spa natural.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; clase antideslizante necesita el suelo de una ducha?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Dentro de la ducha se recomienda la m&aacute;xima resistencia al deslizamiento, clase 3 seg&uacute;n la normativa espa&ntilde;ola, o como m&iacute;nimo clase 2. Fuera de la zona h&uacute;meda puedes bajar de clase seg&uacute;n el uso. En la ficha de cada producto encontrar&aacute;s su clasificaci&oacute;n exacta.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Por qu&eacute; se usa mosaico en los platos de ducha de obra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Porque el plato de obra tiene cuatro pendientes hacia el desag&uuml;e y la pieza peque&ntilde;a las sigue sin cortes forzados. Adem&aacute;s cada junta act&uacute;a como freno para el pie mojado, de modo que el conjunto agarra m&aacute;s que una pieza lisa de gran tama&ntilde;o.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Sirve el canto rodado para el suelo de la ducha?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. Las mallas de canto rodado son piedra natural con relieve que ofrece muy buen agarre con el pie descalzo. Aportan el efecto spa m&aacute;s buscado en las reformas de ba&ntilde;o actuales y se colocan con facilidad gracias a la malla.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se puede poner formato grande en una ducha de obra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Se puede si la pieza es antideslizante certificada, como la serie Tandem-R clase 3 en 60x120. Eso s&iacute;, exige un replanteo perfecto: la pieza se corta en cuatro tri&aacute;ngulos, el llamado corte en sobre, para respetar las pendientes hacia el desag&uuml;e.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El suelo antideslizante es m&aacute;s dif&iacute;cil de limpiar?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No. La microtextura antideslizante se limpia sin problema con un jab&oacute;n de pH neutro. Una pasada de rasqueta tras la ducha reduce la cal. Evita los limpiadores abrasivos fuertes porque desgastan la textura que da el agarre.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; junta se recomienda para la ducha de obra?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Para el interior del plato la junta epoxi es la m&aacute;s recomendable porque no absorbe agua, resiste el moho e higieniza mejor que la junta cementosa. En una zona que recibe agua a diario merece la pena esa mejora.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Envi&aacute;is el material a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a desde Valencia. Escr&iacute;benos por WhatsApp al 96 195 71 36 con las medidas de tu plato de ducha o una foto del ba&ntilde;o y te preparamos un presupuesto cerrado con el transporte incluido.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Mosaico, piedra o gran formato? Te lo resuelvo.</h2><p>Soy Ricardo. M&aacute;ndame una foto del ba&ntilde;o y las medidas del plato por WhatsApp y te digo qu&eacute; pieza antideslizante encaja con tus pendientes y qu&eacute; junta usar.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20suelo%20antideslizante%20para%20mi%20ducha%20de%20obra" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
