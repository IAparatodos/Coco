<?php
/**
 * Categoria 2857 - Platos de ducha antideslizantes (hoja de SEGURIDAD, hija de 86)
 *
 * LA PAGINA DE LA SEGURIDAD CON PAPELES. La membresia sale del atributo
 * pa_clas-antideslizante = c3 (474 productos, 1:1 exacto verificado el
 * 21-ago-2026, 0 fuera): C3 solo donde hay ficha del fabricante detras.
 *
 * Datos verificados en BD el 21-ago-2026 (caducan si se toca el catalogo):
 * 474 platos C3, desde 123,90 EUR +IVA, 119 con textura pizarra en titulo.
 * "Desde" por medida = minimo de fichas C3 de ESA medida.
 *
 * Angulo (Fase 1): C3 es el termino que valida Google (chip + relacionadas +
 * nuestra unica variante en top-5, pos 4,9) y Ads (la keyword convierte con
 * dinero real). El hueco tecnico "que significa C3 / normativa" lo premia la
 * SERP (Camacho Banos rankea con ello).
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (Rank Math en Fase 3, textos identicos); NUNCA "a medida" (recorte
 * en obra); ninguna cifra de terceros inventada (nada de tarifas de fontanero
 * ni avales OCU); bloque de contacto CON tarjeta Formulario (regla 21-ago).
 * Orden del listado: precio ASC (pre_get_posts + exencion en el hook del silo).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_antideslizantes_contenido_superior() {
    // En una URL de filtro CON regla SEO propia solo se pintan hero, filtro
    // y listado (mismo criterio que el resto del silo).
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO (imagen real del silo: plato de resina blanco textura pizarra) -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-blanco-textura-pizarra-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Antideslizantes</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha antideslizantes' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>474 platos con clase C3 certificada por el fabricante, desde 123,90&nbsp;&euro; +IVA. Para que en esa ducha no resbale nadie.</p>
            <div class="hero-buttons">
                <a href="#pcl-catalogo" class="hero-btn primary">Ver cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20antideslizante" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. QUE SIGNIFICA C3 (el hueco tecnico que premia la SERP) -->
    <section class="pcl-c3-section adrihosan-full-width-block">
        <div class="pcl-c3-wrapper">
            <h2>Qu&eacute; significa que un plato de ducha antideslizante sea C3</h2>
            <p>La resbaladicidad de un suelo se clasifica de C1 a C3, y <strong>C3 es la clase m&aacute;s alta</strong>: la que la normativa de edificaci&oacute;n exige para la zona de la ducha, donde se pisa con el pie mojado y enjabonado. Los 474 platos de esta selecci&oacute;n tienen la clase C3 <strong>certificada por su fabricante</strong> &mdash; no es una promesa del texto, es la ficha t&eacute;cnica de cada plato. La textura que lo consigue, casi siempre pizarra, viene de serie: no es un extra que se pague aparte.</p>
        </div>
    </section>

    <!-- 3. MEDIDAS Y PRECIOS ("desde" = minimo de fichas C3 de esa medida,
         verificados en BD el 21-ago-2026). Enlaces a cat de talla si existe,
         regla plt-medida-* o filtro en el resto, igual que pequeno. -->
    <section class="pcl-sizes-section adrihosan-full-width-block">
        <div class="pcl-sizes-wrapper">
            <h2>Medidas y precios de los platos de ducha antideslizantes</h2>
            <p class="pcl-sizes-sub">Las medidas con m&aacute;s surtido C3, con su precio de partida real. Si la tuya no est&aacute;, usa el filtro de largo y ancho.</p>
            <div class="pcl-sizes-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-100x70/" class="pcl-size-btn"><span class="pcl-size-num">100&times;70</span><span class="pcl-size-count">13 platos C3</span><span class="pcl-size-price">desde 156,80&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/" class="pcl-size-btn"><span class="pcl-size-num">120&times;70</span><span class="pcl-size-count">13 platos C3</span><span class="pcl-size-price">desde 190,35&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x80/" class="pcl-size-btn"><span class="pcl-size-num">120&times;80</span><span class="pcl-size-count">12 platos C3</span><span class="pcl-size-price">desde 167,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x90/" class="pcl-size-btn"><span class="pcl-size-num">120&times;90</span><span class="pcl-size-count">12 platos C3</span><span class="pcl-size-price">desde 202,12&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-140x70/" class="pcl-size-btn"><span class="pcl-size-num">140&times;70</span><span class="pcl-size-count">12 platos C3</span><span class="pcl-size-price">desde 207,47&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-160x70/" class="pcl-size-btn"><span class="pcl-size-num">160&times;70</span><span class="pcl-size-count">13 platos C3</span><span class="pcl-size-price">desde 199,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-160x80/" class="pcl-size-btn"><span class="pcl-size-num">160&times;80</span><span class="pcl-size-count">12 platos C3</span><span class="pcl-size-price">desde 202,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-180x70/" class="pcl-size-btn"><span class="pcl-size-num">180&times;70</span><span class="pcl-size-count">13 platos C3</span><span class="pcl-size-price">desde 219,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-180x80/" class="pcl-size-btn"><span class="pcl-size-num">180&times;80</span><span class="pcl-size-count">12 platos C3</span><span class="pcl-size-price">desde 222,90&nbsp;&euro; +IVA</span></a>
            </div>
            <div class="pcl-sizes-exits">
                <a href="#pcl-catalogo" class="pcl-exit-card">
                    <span class="pcl-exit-title">Todas las medidas C3</span>
                    <span class="pcl-exit-desc">474 platos &middot; usa el filtro de largo y ancho</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-pequeno/" class="pcl-exit-card">
                    <span class="pcl-exit-title">&iquest;El ba&ntilde;o va justo de espacio?</span>
                    <span class="pcl-exit-desc">Platos peque&ntilde;os hasta 130&times;90 &middot; 273 modelos</span>
                </a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 2 y 3 ?>

    <!-- 4. FILTRO FE PRO (conjunto 429707 heredado de la madre) -->
    <div class="pcl-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 5. FRANJA DE PRECIO + CTA 1 -->
    <section class="pcl-price-band adrihosan-full-width-block">
        <div class="pcl-price-wrapper">
            <p class="pcl-price-line">Platos de ducha antideslizantes C3 <strong>desde 123,90&nbsp;&euro; +IVA</strong></p>
            <div class="pcl-price-actions">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="pcl-price-link">Ver platos de ducha baratos &rarr;</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20antideslizante" class="pcl-whatsapp-btn">Pregunta por WhatsApp</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloque 5 ?>

    <!-- 6. TITULO CATALOGO + LISTADO (orden: precio ASC via functions.php) -->
    <div class="product-loop-header">
        <?php if ( $es_filtro ) : ?>
        <h2 id="pcl-catalogo">Modelos disponibles</h2>
        <?php else : ?>
        <h2 id="pcl-catalogo">Cat&aacute;logo de platos de ducha antideslizantes</h2>
        <p>474 platos con clase C3, ordenados para que veas antes los de menor precio.</p>
        <?php endif; ?>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_antideslizantes_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 7. PARA QUIEN (cruces del silo: seguridad = adaptadas y mayores) -->
    <section class="pcl-who-section adrihosan-full-width-block">
        <div class="pcl-who-wrapper">
            <h2>Si el antideslizante es por seguridad, mira tambi&eacute;n aqu&iacute;</h2>
            <div class="pcl-who-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/" class="pcl-who-card">
                    <span class="pcl-who-icon">&#9855;</span>
                    <h3>Duchas adaptadas</h3>
                    <p>A ras de suelo y con acceso f&aacute;cil para silla o asiento de ducha.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-mayores/" class="pcl-who-card">
                    <span class="pcl-who-icon">&#129730;</span>
                    <h3>Personas mayores</h3>
                    <p>Sin escal&oacute;n que salvar y con superficie que agarra el pie mojado.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/" class="pcl-who-card">
                    <span class="pcl-who-icon">&#128295;</span>
                    <h3>Platos de resina</h3>
                    <p>El material de casi toda esta selecci&oacute;n: extraplano y recortable en obra.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 8. FAQ (9 preguntas: PAA reales del 21-ago + propias; HTML visible
         SIN JSON-LD; Rank Math en Fase 3 con estos textos EXACTOS.
         PROHIBIDO: tarifas de fontanero inventadas y avales OCU. -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre platos de ducha antideslizantes</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es la clase C3 de un plato de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es la clase m&aacute;s alta de resistencia al deslizamiento en la escala C1-C3, la que la normativa de edificaci&oacute;n exige para la zona de la ducha. Los 474 platos de esta selecci&oacute;n la tienen certificada por su fabricante en la ficha t&eacute;cnica.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; material es mejor para un plato de ducha antideslizante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La resina con carga mineral y textura pizarra: el agarre viene del propio relieve de la superficie, de serie, y no de un tratamiento a&ntilde;adido que pueda gastarse. Adem&aacute;s es extraplana y se recorta en obra si el hueco lo pide.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El antideslizante es un extra que se paga aparte?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. En estos platos la textura antideslizante viene de serie: es la propia superficie del plato. El precio que ves es el precio del plato completo, desde 123,90 &euro; +IVA.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta poner un plato de ducha antideslizante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El plato, desde 123,90 &euro; +IVA. La mano de obra depende de tu ba&ntilde;o y de tu zona, as&iacute; que no te vamos a inventar una cifra: pide dos o tres presupuestos con la medida decidida. Lo que s&iacute; te adelantamos es que un plato de resina se instala en una jornada; el paso a paso est&aacute; en nuestra <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/">gu&iacute;a de instalaci&oacute;n</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es el plato de ducha m&aacute;s resistente?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para el uso diario, los de resina de poliuretano con carga mineral: aguantan el impacto mejor que los acr&iacute;licos y, al ir coloreados en masa, un golpe no deja un desconchado de otro color. Tienes la familia completa en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/">platos de ducha de resina</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede cortar un plato de ducha antideslizante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los de resina, s&iacute;: se recortan en obra con radial y disco de diamante siguiendo las instrucciones del fabricante, y la superficie antideslizante no se pierde porque es la propia textura del plato. Los de Solid Surface y Corian no se recortan.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirven para una ducha adaptada o para personas mayores?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Son la base de ese ba&ntilde;o: superficie que agarra y, en la mayor&iacute;a de modelos, instalaci&oacute;n a ras de suelo sin escal&oacute;n. Tienes las selecciones espec&iacute;ficas en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/">duchas adaptadas</a> y <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-mayores/">platos para personas mayores</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato de ducha antideslizante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde 123,90 &euro; +IVA, y el precio sube sobre todo con la medida. La selecci&oacute;n m&aacute;s ajustada del cat&aacute;logo est&aacute; en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/">platos de ducha baratos</a>, donde buena parte tambi&eacute;n lleva textura antideslizante de serie.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los precios incluyen IVA?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Los precios de esta p&aacute;gina se muestran sin IVA, consultados el 21 de agosto de 2026. En la ficha de cada plato y en el carrito ver&aacute;s el importe con impuestos antes de confirmar el pedido.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 9. GUIAS DEL BLOG -->
    <section class="pcl-guides-section adrihosan-full-width-block">
        <div class="pcl-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato</h2>
            <div class="pcl-guides-grid">
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="pcl-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="pcl-guide-link">C&oacute;mo instalar un plato de ducha</a>
                <a href="https://www.adrihosan.com/pegar-plato-de-ducha-de-resina/" class="pcl-guide-link">Con qu&eacute; pegar un plato de resina</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="pcl-related-section adrihosan-full-width-block">
        <div class="pcl-related-wrapper">
            <h2>Sigue mirando</h2>
            <div class="pcl-related-row">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/" class="pcl-related-link">Platos de ducha de resina</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-pizarra/" class="pcl-related-link">Platos de ducha de pizarra</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-pequeno/" class="pcl-related-link">Platos de ducha peque&ntilde;os</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/" class="pcl-related-link">Platos de ducha grandes</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="pcl-related-link">Platos de ducha baratos</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/" class="pcl-related-link">Duchas adaptadas</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="pcl-related-link">Todos los platos de ducha</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 7-10 ?>

    <!-- 11. CONTACTO RICARDO (bloque comun COMPLETO, con Formulario; SIEMPRE visible) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;Es para que no resbale nadie?<span>Soy Ricardo, dime qui&eacute;n usa esa ducha y te digo qu&eacute; plato le va.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20antideslizante" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">&#128221;</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
