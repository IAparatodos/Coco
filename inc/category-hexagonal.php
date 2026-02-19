<?php
/**
 * Category: Azulejos Hexagonales Suelo (ID: 2377)
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 2377 - AZULEJOS HEXAGONALES SUELO
// ============================================================================

function adrihosan_hexagonal_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/Azulejos-hexagonales-para-suelo.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/">Suelos / Pavimentos</a> &gt;
                <span>Azulejos Hexagonales Suelo</span>
            </nav>
            <h1>Azulejos hexagonales para suelo</h1>
            <p>Baldosas hexagonales de suelo en porcel&aacute;nico y cer&aacute;mica para darle un toque &uacute;nico a tu ba&ntilde;o, cocina o sal&oacute;n. Loseta hexagonal fabricada en Espa&ntilde;a con acabados antideslizantes, disponible en m&uacute;ltiples colores y formatos. Pavimentos que rompen con lo convencional.</p>
            <div class="hero-buttons">
                <a href="#catalogo-hexagonal" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#donde-colocar" class="hero-btn secondary">Gu&iacute;a de Uso</a>
            </div>
        </div>
    </section>

    <!-- 2. ENLAZADO INTERNO VISUAL (Banners por estancia y color) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="estilos-hexagonal">
        <div class="ap-inspiration-wrapper">
            <h2>Explora por Estancia y Color</h2>
            <p class="section-subtitle">Encuentra el azulejo hexagonal perfecto seg&uacute;n d&oacute;nde vas a colocarlo o el tono que buscas</p>
            <div class="ap-inspiration-grid grid-5-cols">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/suelo-bano-hexagonal/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-hexagonal-bano-Adrihosan.jpg" alt="Suelo hexagonal para ba&ntilde;o">
                    <div class="ap-card-content">
                        <h3>Suelo Ba&ntilde;o</h3>
                        <p>Antideslizantes y resistentes a la humedad</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-cocina/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-hexagonal-cocina-Adrihosan.jpg" alt="Azulejo hexagonal para cocina">
                    <div class="ap-card-content">
                        <h3>Cocina</h3>
                        <p>F&aacute;cil limpieza y m&aacute;xima durabilidad</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-verde/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/azulejo-hexagonal-verde-Adrihosan.jpg" alt="Azulejo hexagonal verde">
                    <div class="ap-card-content">
                        <h3>Verde</h3>
                        <p>Estilo natural y vintage</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-blanco/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/azulejo-hexagonal-blanco-Adrihosan.jpg" alt="Azulejo hexagonal blanco">
                    <div class="ap-card-content">
                        <h3>Blanco</h3>
                        <p>Luminosidad y amplitud visual</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-gris/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/azulejo-hexagonal-gris-Adrihosan.jpg" alt="Azulejo hexagonal gris">
                    <div class="ap-card-content">
                        <h3>Gris</h3>
                        <p>Industrial y moderno</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong>, <strong>Estancia</strong> y <strong>Material</strong> para encontrar tu baldosa hexagonal ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO M&Oacute;VIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-hexagonal" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. T&Iacute;TULO CAT&Aacute;LOGO -->
    <div id="catalogo-hexagonal" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos Hexagonales para Suelo</h2>
    </div>
    <?php
}

function adrihosan_hexagonal_contenido_inferior() {

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

    <!-- BLOQUE SEO: DISE&Ntilde;A ESPACIOS &Uacute;NICOS -->
    <section class="seo-content-section adrihosan-full-width-block">
        <div class="seo-content-wrapper">
            <h2>Dise&ntilde;a espacios &uacute;nicos con baldosas hexagonales de suelo</h2>
            <div class="finish-info-block" style="text-align:left; margin-bottom:40px;">
                <p>Las cer&aacute;micas hexagonales aportan dinamismo y car&aacute;cter a cualquier pavimento. Su forma geom&eacute;trica rompe con la monoton&iacute;a de las baldosas rectangulares y permite crear composiciones &uacute;nicas combinando colores y texturas. Las racholas hexagonales son una de las tendencias m&aacute;s consolidadas en interiorismo: funcionan tanto en estilos r&uacute;sticos como en ambientes contempor&aacute;neos y minimalistas.</p>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: D&Oacute;NDE COLOCAR -->
    <section class="seo-content-section adrihosan-full-width-block" id="donde-colocar" style="background-color:#ffffff;">
        <div class="seo-content-wrapper">
            <h2>&iquest;D&oacute;nde colocar un suelo hexagonal?</h2>
            <div class="material-types-grid">
                <div class="material-card">
                    <div class="material-icon">&#128705;</div>
                    <h3>Suelo ba&ntilde;o hexagonal</h3>
                    <p>La cer&aacute;mica hexagonal para ba&ntilde;o es la opci&oacute;n estrella. Su formato permite crear transiciones de color espectaculares en zonas h&uacute;medas. Elige acabados antideslizantes C3 para la ducha y combina tonos neutros con piezas decorativas para un resultado personalizado y seguro.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#127860;</div>
                    <h3>Azulejo hexagonal cocina</h3>
                    <p>En la cocina, el suelo hexagonal porcel&aacute;nico ofrece la resistencia necesaria frente a ca&iacute;das, manchas y productos de limpieza agresivos. Su f&aacute;cil mantenimiento y la posibilidad de combinar con el revestimiento frontal lo convierten en una opci&oacute;n funcional y visualmente impactante.</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">&#128715;</div>
                    <h3>Sal&oacute;n y zonas de paso</h3>
                    <p>Un pavimento hexagonal en el sal&oacute;n o en el recibidor crea un punto focal que define el estilo de toda la vivienda. Los formatos grandes (28-33 cm) en tonos neutros aportan personalidad sin recargar el espacio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOQUE SEO: COLORES EN TENDENCIA -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Colores en tendencia para tu pavimento hexagonal</h2>
            <div class="material-types-grid" style="text-align:left;">
                <div class="material-card" style="background:rgba(255,255,255,0.08); border-color:rgba(255,255,255,0.15);">
                    <h3 style="color:#ffffff;">Azulejo hexagonal verde</h3>
                    <p style="color:rgba(255,255,255,0.85);">El verde aporta frescura y conexi&oacute;n con lo natural. Desde el verde salvia hasta el esmeralda, los tonos verdes en hexagonal son perfectos para estilos vintage, mediterr&aacute;neo o boho. Ideales para ba&ntilde;os con car&aacute;cter.</p>
                </div>
                <div class="material-card" style="background:rgba(255,255,255,0.08); border-color:rgba(255,255,255,0.15);">
                    <h3 style="color:#ffffff;">Azulejo hexagonal blanco</h3>
                    <p style="color:rgba(255,255,255,0.85);">El blanco es el cl&aacute;sico que nunca falla. Aporta luminosidad y sensaci&oacute;n de amplitud, perfecto para ba&ntilde;os peque&ntilde;os o cocinas donde se busca un look limpio y atemporal. Combina con juntas oscuras para un contraste espectacular.</p>
                </div>
                <div class="material-card" style="background:rgba(255,255,255,0.08); border-color:rgba(255,255,255,0.15);">
                    <h3 style="color:#ffffff;">Azulejo hexagonal gris</h3>
                    <p style="color:rgba(255,255,255,0.85);">El gris es la base del estilo industrial y moderno. Los hexagonales grises en acabado cemento o piedra aportan sofisticaci&oacute;n sin comprometer la versatilidad. Combinan con madera, metal y cualquier paleta decorativa.</p>
                </div>
            </div>
            <div class="trends-links" style="margin-top:35px;">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-verde/" class="trend-link">Verde</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-blanco/" class="trend-link">Blanco</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-gris/" class="trend-link">Gris</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/suelo-bano-hexagonal/" class="trend-link">Ba&ntilde;o</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-hexagonales-suelo/azulejo-hexagonal-cocina/" class="trend-link">Cocina</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos Hexagonales para Suelo</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo se colocan las losetas hexagonales en el suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La colocaci&oacute;n de losetas hexagonales requiere un replanteo previo m&aacute;s cuidadoso que las baldosas rectangulares. Se recomienda empezar desde el centro de la estancia y avanzar hacia los bordes. Utiliza sistemas de nivelaci&oacute;n (cu&ntilde;as y bridas) para asegurar una superficie perfectamente plana. Los cortes perimetrales necesitan una cortadora h&uacute;meda con disco de diamante. El cemento cola flexible es imprescindible, especialmente si el soporte tiene calefacci&oacute;n radiante.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son aptos los suelos hexagonales porcel&aacute;nicos para exterior?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, siempre que elijas un porcel&aacute;nico hexagonal con acabado antideslizante Clase 3 (C3) y absorci&oacute;n de agua inferior al 0.5%. Estos pavimentos resisten heladas, rayos UV y cambios t&eacute;rmicos sin deteriorarse. Para terrazas y patios, aseg&uacute;rate de que el fabricante certifique la resistencia a heladas en la ficha t&eacute;cnica del producto.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; junta se recomienda para suelos hexagonales?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para piezas hexagonales rectificadas se recomienda una junta de 2 mm; para piezas con borde natural, de 3-4 mm. La junta es parte del dise&ntilde;o: una junta en color contrastante (por ejemplo, oscura sobre baldosas claras) resalta la geometr&iacute;a hexagonal y crea un efecto visual espectacular. Usa siempre borada flexible y de calidad para evitar fisuras.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden combinar hexagonales con baldosas rectangulares?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es una de las tendencias m&aacute;s populares en interiorismo actual. La transici&oacute;n entre un suelo hexagonal y uno rectangular (por ejemplo, imitaci&oacute;n madera) crea un efecto visual muy atractivo. El truco est&aacute; en planificar la junta de transici&oacute;n: puede ser recta con un perfil met&aacute;lico, o irregular dejando que los hex&aacute;gonos se &quot;derramen&quot; sobre la madera para un acabado org&aacute;nico.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un suelo hexagonal porcel&aacute;nico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan disponemos de opciones desde gama econ&oacute;mica hasta premium. El precio var&iacute;a seg&uacute;n el material (cer&aacute;mica vs porcel&aacute;nico), el formato y el acabado. Usa el filtro de precio en nuestro cat&aacute;logo para encontrar baldosas hexagonales de suelo ajustadas a tu presupuesto. Consulta con Ricardo para obtener precios especiales en pedidos de obra completa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos hexagonales">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con tu suelo hexagonal?
                        <span>Te ayudo a elegir sin compromiso.</span>
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
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">&#128222;</div>
                    <div class="label">Tel&eacute;fono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20hexagonales" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 2377 - AZULEJOS HEXAGONALES SUELO
// ============================================================================
