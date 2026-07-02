<?php
/**
 * Category: Suelo para garaje (ID: 5393)
 *
 * Subcategoria del silo Pavimentos (ceramica > pavimentos >
 * suelo-para-garaje-barato). 22 productos.
 *
 * Keyword principal: "suelo para garaje". Secundarias: "mejor suelo
 * para garaje particular", "suelo ceramico para garaje", "suelo para
 * garaje barato". Cluster: "baldosa para garaje" 260/mes + "suelo
 * porcelanico para garaje" 70/mes.
 *
 * Intencion SERP: comercial-comparativa. Los que rankean son guias de
 * epoxi, hormigon pulido, PVC y caucho que DESCARTAN o ignoran la
 * ceramica.
 *
 * Hueco a explotar: nadie defiende el porcelanico antideslizante con
 * datos (no absorbe aceite, cero sellados, reparacion pieza a pieza,
 * precio bajo). Angulo: desmontar el mito "la ceramica no vale para
 * garajes".
 *
 * Buyer persona PRIMARIO: Propietario con Alquiler (rentabilizar
 * rapido, cero complicaciones). SECUNDARIO: Profesional del DIY.
 *
 * Surtido real (22 productos): series Camaro, Mustang, Silex, Dakota,
 * Ford en 33x33 antideslizante + Ziro antideslizante en 30x60 y 60x60.
 *
 * REGLAS DURAS (briefing julio 2026):
 * - H1 SIEMPRE via adrihosan_h1_dinamico("Suelo para garaje"). NUNCA
 *   <h1> hardcodeado.
 * - Materiales REALES: gres porcelanico antideslizante (series citadas).
 *   NO inventar series ni certificaciones.
 * - Encabezados SIN "elegancia", "funcionalidad", "sofisticacion" ni
 *   la conjuncion "Y" (mayus suelta).
 * - Adrihosan = DISTRIBUIDOR. NUNCA "fabricamos" ni "instalamos".
 * - Contacto: bloque estandar. WhatsApp 96 195 71 36 + email.
 * - Financiacion si se menciona = 3 meses sin intereses.
 * - FAQs HTML sin json-ld (Rank Math gestiona schema FAQPage).
 *
 * !! FILTER SET PENDIENTE DE CONFIRMAR CON RICARDO !!
 *   Uso 427044 como default (es el Filter Set de porcelanico-tecnico y
 *   suelo-tecnico, hermanas de esta cat en el silo pavimentos). El
 *   428107 del wireframe es de ENCIMERAS y NO sirve aqui. Confirmar el
 *   ID correcto antes de publicar y sustituir la constante de abajo.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 5393 - SUELO PARA GARAJE (silo Pavimentos)
// ============================================================================

// TODO CONFIRMAR CON RICARDO: Filter Set del silo pavimentos para esta cat.
// 427044 = el que usan porcelanico-tecnico (cat 2471) y suelo-tecnico (2350).
if ( ! defined( 'ADRIHOSAN_SGAR_FILTER_SET' ) ) {
    define( 'ADRIHOSAN_SGAR_FILTER_SET', '427044' );
}

function adrihosan_categoria_suelo_garaje_contenido_superior() {
    $term   = get_term( 5393, 'product_cat' );
    $n_prod = ( $term && ! is_wp_error( $term ) ) ? (int) $term->count : 0;
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/07/Suelo-para-garaje-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Suelo para garaje' ); ?></h1>
            <p class="hero-tagline">El pavimento que no se mancha con aceite ni pide mantenimiento.</p>
            <div class="hero-buttons">
                <a href="#catalogo-sgar" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20suelo%20porcel%C3%A1nico%20para%20mi%20garaje" class="hero-btn secondary" target="_blank">Calcular mi garaje por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Tu <strong>suelo para garaje</strong> tiene que aguantar el peso del coche, las manchas de aceite y la humedad de los neum&aacute;ticos. El gres porcel&aacute;nico antideslizante lo hace por menos de lo que imaginas, sin sellados ni retratamientos.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128739;</div>
                    <h3>Aguanta el coche</h3>
                    <p>Porcel&aacute;nico t&eacute;cnico de alto tr&aacute;nsito.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128738;</div>
                    <h3>Cero manchas de aceite</h3>
                    <p>Absorci&oacute;n inferior al 0,5%.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129508;</div>
                    <h3>Antideslizante</h3>
                    <p>Agarre en rampas, incluso mojado.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>Presupuesto cerrado desde Valencia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. FILTROS FE PRO (silo pavimentos - TODO confirmar ID con Ricardo) -->
    <div id="destino-filtro-adria-sgar" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="' . ADRIHOSAN_SGAR_FILTER_SET . '"]'); ?></div>

    <!-- 3. STORYTELLING -->
    <section class="sgar-storytelling adrihosan-full-width-block">
        <div class="sgar-storytelling-wrapper">
            <h2>Suelo para garaje que no se rinde</h2>
            <div class="storytelling-text">
                <p>Las gu&iacute;as de reformas empujan hacia epoxi o PVC, pero la epoxi amarillea y exige resellados, y el PVC se marca con el gato hidr&aacute;ulico y las ruedas calientes. El <strong>porcel&aacute;nico antideslizante</strong> se cuece a m&aacute;s de 1.200 grados, no absorbe el aceite, se friega con desengrasante com&uacute;n y dura d&eacute;cadas.</p>
                <p>Si una pieza se rompe, se cambia esa pieza, no todo el suelo. El formato <strong>33x33</strong> es el cl&aacute;sico de garaje en Espa&ntilde;a: reparte cargas y facilita las pendientes hacia el desag&uuml;e. Todo lo que ves aqu&iacute; es <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-tecnico/">porcel&aacute;nico t&eacute;cnico</a> pensado para tr&aacute;nsito rodado.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-sgar" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de suelo para garaje</h2>
        <p class="product-loop-subtitle">
            <?php if ( $n_prod > 0 ) : ?>
                Ver los <?php echo (int) $n_prod; ?> productos. Etiqueta sobre ficha: antideslizante y formato (33x33, 30x60, 60x60).
            <?php else : ?>
                Gres porcel&aacute;nico antideslizante en 33x33, 30x60 y 60x60. Etiqueta sobre ficha: antideslizante y formato.
            <?php endif; ?>
        </p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_suelo_garaje_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="sgar-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">Calcula tu garaje en 2 minutos: m&aacute;ndanos los m&sup2; (suma la rampa) y una foto por WhatsApp y te cerramos el presupuesto con transporte.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20te%20paso%20los%20metros%20de%20mi%20garaje%20para%20un%20presupuesto%20cerrado" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA: PORCELANICO VS EPOXI VS HORMIGON VS PVC -->
    <section class="sgar-comparativa adrihosan-full-width-block">
        <div class="sgar-comparativa-wrapper">
            <h2>Suelo cer&aacute;mico para garaje frente a epoxi, PVC u hormig&oacute;n</h2>
            <p class="comparativa-intro">La tabla honesta que las gu&iacute;as de epoxi no te ense&ntilde;an.</p>

            <div class="comparativa-table-wrapper">
                <table class="comparativa-table">
                    <thead>
                        <tr>
                            <th>Criterio</th>
                            <th>Porcel&aacute;nico antideslizante</th>
                            <th>Resina epoxi</th>
                            <th>Hormig&oacute;n pulido</th>
                            <th>Losetas PVC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Manchas de aceite</strong></td>
                            <td>No penetra, fregona</td>
                            <td>Resiste si est&aacute; sellada</td>
                            <td>Penetra sin sellado</td>
                            <td>Resiste</td>
                        </tr>
                        <tr>
                            <td><strong>Mantenimiento</strong></td>
                            <td>Ninguno</td>
                            <td>Resellado peri&oacute;dico</td>
                            <td>Sellado peri&oacute;dico</td>
                            <td>Sustituir piezas marcadas</td>
                        </tr>
                        <tr>
                            <td><strong>Marcas del gato / ruedas</strong></td>
                            <td>No</td>
                            <td>Puede despegar</td>
                            <td>No</td>
                            <td>Se marca con carga puntual</td>
                        </tr>
                        <tr>
                            <td><strong>Reparaci&oacute;n</strong></td>
                            <td>Pieza a pieza</td>
                            <td>Rehacer zona completa</td>
                            <td>Rehacer zona</td>
                            <td>Pieza a pieza</td>
                        </tr>
                        <tr>
                            <td><strong>Aspecto con los a&ntilde;os</strong></td>
                            <td>Estable</td>
                            <td>Amarillea</td>
                            <td>Estable</td>
                            <td>Pierde brillo</td>
                        </tr>
                        <tr>
                            <td><strong>Instalaci&oacute;n</strong></td>
                            <td>Cemento cola apto tr&aacute;nsito</td>
                            <td>Base perfecta + curado</td>
                            <td>Obra</td>
                            <td>Encaje en seco</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="comparativa-nota">Mira tambi&eacute;n el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-tecnico/">porcel&aacute;nico t&eacute;cnico</a> y el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-tecnico-exterior/">suelo t&eacute;cnico exterior</a> si el garaje comparte zona con patio o entrada.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES -->
    <section class="sgar-materials adrihosan-full-width-block">
        <div class="sgar-materials-wrapper">
            <h2>Lo que este suelo para garaje aguanta sin despeinarse</h2>
            <p class="materials-intro">Las 8 propiedades reales del porcel&aacute;nico antideslizante de garaje.</p>

            <div class="materials-grid">
                <div class="material-card"><span class="material-icon">&#129508;</span><h3>Antideslizante</h3><p>Agarre en rampas y con el suelo mojado.</p></div>
                <div class="material-card"><span class="material-icon">&#128738;</span><h3>No absorbe aceite ni grasa</h3><p>Absorci&oacute;n inferior al 0,5%.</p></div>
                <div class="material-card"><span class="material-icon">&#128663;</span><h3>Soporta el paso del coche</h3><p>Uso diario de turismos sin problema.</p></div>
                <div class="material-card"><span class="material-icon">&#129529;</span><h3>Limpieza con fregona</h3><p>Desengrasante com&uacute;n y listo.</p></div>
                <div class="material-card"><span class="material-icon">&#128295;</span><h3>Reparaci&oacute;n pieza a pieza</h3><p>Se cambia la baldosa da&ntilde;ada, no todo el suelo.</p></div>
                <div class="material-card"><span class="material-icon">&#11036;</span><h3>Formato 33x33</h3><p>El cl&aacute;sico de garaje: reparte cargas.</p></div>
                <div class="material-card"><span class="material-icon">&#128207;</span><h3>Ziro 30x60 / 60x60</h3><p>Para un acabado m&aacute;s actual.</p></div>
                <div class="material-card"><span class="material-icon">&#127954;</span><h3>Gris o piedra</h3><p>Colores que disimulan roderas.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO: 4 PASOS -->
    <section class="sgar-asesoramiento adrihosan-full-width-block">
        <div class="sgar-asesoramiento-wrapper">
            <h2>Tu suelo para garaje en 4 pasos</h2>
            <p class="asesoramiento-intro">Del metro cuadrado al material en obra, sin sorpresas.</p>

            <div class="steps-grid">
                <div class="step-card"><span class="step-number">1</span><p><strong>Mide los m&sup2;</strong> del garaje (suma la rampa si la hay).</p></div>
                <div class="step-card"><span class="step-number">2</span><p><strong>Escr&iacute;benos por WhatsApp</strong> al 96 195 71 36 con una foto del espacio.</p></div>
                <div class="step-card"><span class="step-number">3</span><p><strong>Te proponemos</strong> serie, cantidades con merma incluida y transporte cerrado.</p></div>
                <div class="step-card"><span class="step-number">4</span><p><strong>Recibes el material</strong> en toda Espa&ntilde;a desde Valencia.</p></div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20me%20ayudas%20a%20calcular%20el%20suelo%20para%20mi%20garaje" class="bumper-btn" target="_blank">Calcular mi garaje</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="sgar-related adrihosan-full-width-block">
        <div class="sgar-related-wrapper">
            <h2>Tambi&eacute;n te puede interesar</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/">Suelos cer&aacute;micos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-tecnico/">Porcel&aacute;nico t&eacute;cnico</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-tecnico-exterior/">Suelo t&eacute;cnico exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/">Azulejos de exterior</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-de-cocina/">Suelos de cocina</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/oferta-en-azulejos-y-sanitarios/suelos-porcelanicos-ofertas/">Ofertas en suelos porcel&aacute;nicos</a>
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el suelo para garaje</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;l es el mejor suelo para un garaje particular?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El gres porcel&aacute;nico antideslizante es la opci&oacute;n m&aacute;s equilibrada para un garaje particular. Aguanta el peso del coche, no absorbe las manchas de aceite y no necesita sellados peri&oacute;dicos como el hormig&oacute;n o la resina epoxi. Adem&aacute;s su precio por metro cuadrado est&aacute; entre los m&aacute;s bajos del mercado.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; suelo para garaje es el m&aacute;s barato?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El pavimento cer&aacute;mico antideslizante en formato 33x33 es de los suelos para garaje m&aacute;s baratos si cuentas toda su vida &uacute;til. Cuesta poco por metro cuadrado, no requiere mantenimiento y dura d&eacute;cadas sin reponerse, algo que el PVC o la pintura epoxi no pueden prometer.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El suelo cer&aacute;mico aguanta el peso del coche?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;. El gres porcel&aacute;nico se cuece a m&aacute;s de 1200 grados y resulta un material compacto que soporta sin problema el paso diario de turismos. Es el mismo tipo de pavimento que se instala en zonas comerciales de alto tr&aacute;nsito.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Se mancha el porcel&aacute;nico con el aceite del coche?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>No. El porcel&aacute;nico tiene una absorci&oacute;n de agua inferior al 0,5 por ciento, de modo que el aceite o la grasa no penetran en la pieza. Basta pasar la fregona con un desengrasante com&uacute;n para dejarlo como el primer d&iacute;a.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formato de baldosa es mejor para un garaje?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>El formato 33x33 antideslizante es el cl&aacute;sico de garaje porque reparte bien las cargas y facilita las pendientes hacia el desag&uuml;e. Si el garaje comparte est&eacute;tica con la vivienda, las series en 30x60 o 60x60 antideslizante dan un acabado m&aacute;s actual.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es mejor la cer&aacute;mica o la resina epoxi para el garaje?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>La resina epoxi luce bien reci&eacute;n aplicada pero exige una base perfecta, amarillea con los a&ntilde;os y se repara mal. La cer&aacute;mica antideslizante se coloca pieza a pieza, se sustituye por unidades si algo se rompe y mantiene su aspecto durante d&eacute;cadas.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Puedo colocar el suelo del garaje sin un profesional?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>Si tienes algo de experiencia colocando cer&aacute;mica, un garaje es de los proyectos m&aacute;s agradecidos porque es una superficie di&aacute;fana con pocos cortes. Aun as&iacute; conviene respetar la junta m&iacute;nima recomendada y usar un cemento cola apto para tr&aacute;nsito rodado.</p></div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Envi&aacute;is suelo para garaje a toda Espa&ntilde;a?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common"><p>S&iacute;, enviamos a toda Espa&ntilde;a desde Valencia. Escr&iacute;benos por WhatsApp al 96 195 71 36 con los metros cuadrados de tu garaje y te preparamos un presupuesto cerrado con el transporte incluido.</p></div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Dudas entre dos series? Te digo cu&aacute;l encaja.</h2><p>Soy Ricardo. M&aacute;ndame una foto de tu garaje y los metros por WhatsApp y te digo qu&eacute; serie de porcel&aacute;nico antideslizante te conviene y cu&aacute;nto material pedir.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20suelo%20porcel%C3%A1nico%20para%20mi%20garaje" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
