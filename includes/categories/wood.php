<?php
/**
 * Contenido de categor&iacute;a - Suelos Imitaci&oacute;n Madera (2209)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

/******************************************************************************
 * =============================================================================
 * SUELOS IMITACI&Oacute;N MADERA (ID: 2209)
 * =============================================================================
 ******************************************************************************/

function adrihosan_suelo_madera_contenido_superior() {
    $category_url = get_term_link(2209, 'product_cat');
    if (is_wp_error($category_url)) {
        $category_url = '#';
    }
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg');">
        <div class="hero-content">
            <h1>Suelos Imitaci&oacute;n Madera y Porcel&aacute;nico Efecto Madera</h1>
            <p>La calidez del parquet con la resistencia del gres porcel&aacute;nico. Descubre nuestra gama de baldosas y cer&aacute;mica imitaci&oacute;n madera para interior y exterior.</p>
            <div class="hero-buttons">
                <a href="#catalogo-suelo-madera" class="hero-btn primary">Ver Cat&aacute;logo Completo</a>
                <a href="#estilos-suelo-madera" class="hero-btn secondary">Ver Ofertas y Precios</a>
            </div>
        </div>
    </section>

    <!-- 2. EXPLORA POR ESTILO (5 columnas) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-suelo-madera">
        <div class="ap-inspiration-wrapper">
            <h2>Explora por Estilo</h2>
            <p class="section-subtitle">Encuentra tu suelo imitaci&oacute;n madera ideal seg&uacute;n el estilo que buscas</p>
            <div class="ap-inspiration-grid grid-5-cols">
                <a href="<?php echo esc_url(add_query_arg('corte-azulejo', 'azulejo-rectificado', $category_url)); ?>" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg" alt="Suelo porcel&aacute;nico imitaci&oacute;n madera rectificado">
                    <div class="ap-card-content">
                        <h3>Porcel&aacute;nico Rectificado</h3>
                        <p>Juntas m&iacute;nimas, m&aacute;xima continuidad</p>
                    </div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'bano', $category_url)); ?>" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-bano-Adrihosan.jpg" alt="Ba&ntilde;os con suelo imitaci&oacute;n madera">
                    <div class="ap-card-content">
                        <h3>Ba&ntilde;os y Cocinas</h3>
                        <p>Calidez en zonas h&uacute;medas</p>
                    </div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'terraza', $category_url)); ?>" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-terraza-Adrihosan.jpg" alt="Pavimento imitaci&oacute;n madera exterior antideslizante">
                    <div class="ap-card-content">
                        <h3>Exterior y Antideslizante</h3>
                        <p>Seguridad C3 para terrazas</p>
                    </div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('color', 'gris', $category_url)); ?>" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-cocina-Adrihosan.jpg" alt="Suelos imitaci&oacute;n madera gris">
                    <div class="ap-card-content">
                        <h3>Tonos Grises y Claros</h3>
                        <p>Tendencia n&oacute;rdica y minimalista</p>
                    </div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'espiga', $category_url)); ?>" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-piscina-Adrihosan.jpg" alt="Suelo imitaci&oacute;n madera espiga">
                    <div class="ap-card-content">
                        <h3>Suelo en Espiga</h3>
                        <p>Elegancia cl&aacute;sica renovada</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. SECCI&Oacute;N DE VENTAJAS (AUTORIDAD) -->
    <section class="authority-section adrihosan-full-width-block">
        <div class="authority-wrapper">
            <div class="section-header">
                <h2>&iquest;Por qu&eacute; elegir un suelo porcel&aacute;nico imitaci&oacute;n madera?</h2>
                <p>Frente al parquet natural, el porcel&aacute;nico efecto madera gana en todos los frentes</p>
            </div>
            <div class="authority-grid">
                <div class="authority-card">
                    <div class="authority-icon">💪</div>
                    <h3>Adi&oacute;s al Mantenimiento</h3>
                    <p>A diferencia del parquet natural, nuestro gres efecto madera no se raya ni necesita barniz. Sin ceras, sin lijados, sin preocupaciones.</p>
                </div>
                <div class="authority-card">
                    <div class="authority-icon">💧</div>
                    <h3>Apto para Ba&ntilde;os</h3>
                    <p>Cer&aacute;mica imitaci&oacute;n madera 100% impermeable, ideal para zonas h&uacute;medas. Cocinas, ba&ntilde;os y duchas sin l&iacute;mites.</p>
                </div>
                <div class="authority-card">
                    <div class="authority-icon">🏠</div>
                    <h3>Textura Realista</h3>
                    <p>Acabados con relieve que imitan la veta natural. Gres porcel&aacute;nico de alta definici&oacute;n que se ve y se siente como madera real.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. MARCAS -->
    <section class="brands-section adrihosan-full-width-block">
        <div class="brands-wrapper">
            <h2>Trabajamos con las Mejores Marcas</h2>
            <div class="brands-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/ceramica-vives/" class="brand-card">
                    <h3>Cer&aacute;mica Vives</h3>
                    <p>Referente en imitaci&oacute;n madera con acabados de alta definici&oacute;n y textura realista.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti-ceramica/" class="brand-card">
                    <h3>Navarti</h3>
                    <p>La mejor relaci&oacute;n calidad-precio en suelos efecto madera para reformas integrales.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/techlam/" class="brand-card">
                    <h3>Techlam</h3>
                    <p>Porcel&aacute;nico extrafino de alta gama. La elecci&oacute;n de arquitectos exigentes.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. ENLACES ESTRAT&Eacute;GICOS / ETIQUETAS R&Aacute;PIDAS -->
    <section class="strategic-links-section adrihosan-full-width-block">
        <div class="strategic-links-wrapper">
            <h3>Encuentra tu suelo porcel&aacute;nico ideal</h3>
            <div class="strategic-links-grid">
                <a href="<?php echo esc_url(add_query_arg('azulejo-tipo', 'suelo-porcelanico', $category_url)); ?>" class="strategic-link">
                    <span class="link-icon">🪵</span>
                    <span class="link-text">Gres Imitaci&oacute;n Madera</span>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'suelo-radiante', $category_url)); ?>" class="strategic-link">
                    <span class="link-icon">🔥</span>
                    <span class="link-text">Suelo Radiante</span>
                </a>
                <a href="<?php echo esc_url(add_query_arg('precio', 'ofertas', $category_url)); ?>" class="strategic-link">
                    <span class="link-icon">💰</span>
                    <span class="link-text">Ofertas Baratas</span>
                </a>
                <a href="<?php echo esc_url(add_query_arg('formato', 'gran-formato', $category_url)); ?>" class="strategic-link">
                    <span class="link-icon">📐</span>
                    <span class="link-text">Gran Formato</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Para encontrar tu suelo imitaci&oacute;n madera ideal, usa los filtros de <strong>Color</strong>, <strong>Estancia</strong> y <strong>Acabado</strong>. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 7. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-suelo-madera" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 8. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-suelo-madera" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Suelos Imitaci&oacute;n Madera</h2>
    </div>
    <?php
}

function adrihosan_suelo_madera_contenido_inferior() {
    // SEO: Contenido din&aacute;mico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Suelos Imitaci&oacute;n Madera</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es mejor: tarima o suelo porcel&aacute;nico imitaci&oacute;n madera?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El <strong>suelo porcel&aacute;nico imitaci&oacute;n madera</strong> supera a la tarima en durabilidad, resistencia al agua y facilidad de mantenimiento. No necesita barniz, no se raya con facilidad y soporta tr&aacute;nsito intenso. La tarima natural ofrece calidez al tacto, pero requiere mantenimiento peri&oacute;dico (lijado, barnizado) y no es apta para zonas h&uacute;medas. A largo plazo, el porcel&aacute;nico es siempre una mejor inversi&oacute;n.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede poner suelo imitaci&oacute;n madera en ba&ntilde;os y cocinas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una de sus grandes ventajas. Al ser cer&aacute;mica, el suelo imitaci&oacute;n madera soporta perfectamente la humedad, el agua directa, el vapor y la limpieza agresiva. Puedes usarlo en ba&ntilde;os, cocinas e incluso duchas sin ning&uacute;n problema.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ten&eacute;is suelo porcel&aacute;nico imitaci&oacute;n madera barato?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. En Adrihosan contamos con una amplia gama de precios. Disponemos de opciones econ&oacute;micas en gres imitaci&oacute;n madera sin renunciar a la calidad, as&iacute; como porcel&aacute;nicos de alta gama con acabados premium. Revisa nuestra secci&oacute;n de ofertas para encontrar suelos efecto madera al mejor precio.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirve para exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, pero debes elegir el acabado correcto. Para terrazas, patios y piscinas es fundamental optar por un pavimento imitaci&oacute;n madera con acabado <strong>antideslizante Clase 3 (C3)</strong>. Esta normativa garantiza la m&aacute;xima seguridad en zonas h&uacute;medas. Adem&aacute;s, el porcel&aacute;nico resiste heladas y no pierde color con el sol.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es apto para suelo radiante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es ideal. El porcel&aacute;nico es un excelente conductor t&eacute;rmico, muy superior a la madera natural. Optimiza la eficiencia del sistema de calefacci&oacute;n por suelo radiante. Lo m&aacute;s importante es usar un <strong>cemento cola flexible</strong> que absorba las dilataciones y contracciones producidas por la calefacci&oacute;n.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es un suelo rectificado y por qu&eacute; es importante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un suelo rectificado tiene los bordes cortados en un &aacute;ngulo perfecto de 90 grados. Su gran ventaja es que permite una instalaci&oacute;n con <strong>juntas m&iacute;nimas</strong> (1-2 mm), logrando un efecto visual de superficie continua, mucho m&aacute;s realista y elegante que el formato convencional.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los tonos grises se ensucian mucho?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En contra de lo que se piensa, un acabado mate en tonos grises con veta suave es un gran aliado para disimular el polvo y las pelusas del d&iacute;a a d&iacute;a, a menudo m&aacute;s que un tono oscuro liso. Los suelos imitaci&oacute;n madera gris son tendencia en interiorismo moderno por la luz y amplitud que aportan.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Es m&aacute;s complicado instalar un suelo en formato espiga?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, la instalaci&oacute;n del formato espiga (o <em>herringbone</em>) es m&aacute;s t&eacute;cnica y requiere un profesional experimentado, ya que los cortes y la alineaci&oacute;n son m&aacute;s complejos. Sin embargo, el resultado est&eacute;tico es espectacular y aporta un dinamismo y elegancia que lo diferencian de la instalaci&oacute;n tradicional.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section id="contacto-experto-madera" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo, experto en suelos imitaci&oacute;n madera de Adrihosan">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas sobre qu&eacute; suelo imitaci&oacute;n madera elegir?
                        <span>&iquest;No sabes si elegir rectificado o normal? &iquest;Dudas entre el tono roble o gris? Te ayudo a calcular los metros y encontrar el mejor precio sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                    <div class="contact-hover-text">Ver exposici&oacute;n de suelos cer&aacute;micos en Valencia</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                    <div class="contact-hover-text">Te ense&ntilde;o el veteado y textura por videollamada</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Tel&eacute;fono</div>
                    <div class="contact-hover-text">Dudas t&eacute;cnicas sobre suelos</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20suelos%20imitaci%C3%B3n%20madera" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">WhatsApp</div>
                    <div class="contact-hover-text">Env&iacute;ame una foto de tu sal&oacute;n y te recomiendo el pavimento ideal</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}
