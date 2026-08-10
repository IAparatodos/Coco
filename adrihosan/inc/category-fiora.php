<?php
/**
 * Categoria 2863 - Platos de ducha Fiora (hija de 86)
 *
 * HOJA DE MARCA, pero su problema NO es el de Duplach. Alli la categoria ya
 * estaba en posicion 5,7 y solo faltaba que la clicaran. Aqui la categoria va
 * en posicion 27,4 con 2 clics en seis meses, mientras sus propias fichas
 * suman ~460 clics en posiciones 4-9: la ficha del Limite 140x70 es, de facto,
 * la pagina de Fiora. El trabajo de esta plantilla es quitarle ese papel.
 *
 * Por eso el primer bloque tras el hero responde "que problemas da un plato de
 * resina" (1.418 impresiones/ano, la consulta mas especifica de la categoria)
 * con lo que pasa de verdad, no negandolo. Y por eso las cuatro series se
 * presentan por DESAGUE, que es lo que decide la compra.
 *
 * Wireframe 2026-08-04 (prefijo fio-). Datos verificados en BD y GSC.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (lo parsea Rank Math despues); cifras redondeadas a la baja; nada
 * de caracteristicas deducidas de una foto.
 *
 * OJO CON DOS DATOS QUE SE CONFUNDEN:
 *   - KOU Lastra SI lleva reborde perimetral (confirmado 6-ago).
 *   - Silex NO lleva marco. Lo que se ve en su foto es el canto del plato
 *     (4 cm), visible porque va apoyado sobre el suelo en vez de enrasado.
 *     Nunca escribir "enmarcado" para el Silex.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_fiora_contenido_superior() {
    // Regla del PR #74: en una URL de filtro CON regla SEO propia solo se
    // pintan hero, filtro, listado y contacto. Los bloques de marca son de
    // esta categoria; clonarlos en otra URL indexable la pone a competir
    // consigo misma.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO (Trace pizarra antracita, adjunto 429729. El degradado lo pone
         el CSS, nunca va horneado en la imagen). -->
    <section class="hero-section-container fio-hero adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-fiora-trace-pizarra-antracita-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Fiora</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha Fiora' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>M&aacute;s de 80 modelos en cuatro series, desde 339,90&nbsp;&euro; +IVA. Resina de poliuretano, anchos de 70 a 100&nbsp;cm y largos hasta 200.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. PROBLEMAS - EL BLOQUE CLAVE.
         Responde a "plato de ducha fiora silex problemas" (1.418 impr/ano),
         hoy contestada por foros. No se niega el problema: quien busca esto
         viene con un miedo concreto y si la pagina lo esquiva, se va donde se
         lo cuenten. Los cuatro casos salen de resenas reales de 1 estrella del
         perfil de Google, ninguno inventado. Ademas de captar la busqueda,
         previene los casos que generan esas resenas. -->
    <section class="fio-problems-section adrihosan-full-width-block">
        <div class="fio-problems-wrapper">
            <h2>&iquest;Qu&eacute; problemas da un plato de ducha de resina?</h2>
            <p class="fio-problems-intro">Te lo contamos sin adornos, porque casi todos los casos que hemos visto se evitan sabiendo esto antes de comprar. La resina de poliuretano es un material duro y estable, pero tiene dos puntos d&eacute;biles muy concretos: c&oacute;mo se asienta y qu&eacute; le cae encima.</p>

            <div class="fio-problems-grid">
                <div class="fio-problem-card">
                    <h3>Que aparezca una grieta</h3>
                    <p>Es el caso m&aacute;s frecuente y casi siempre es del asiento, no del plato. La base tiene que quedar <strong>continua y nivelada</strong>: un plato apoyado en falso, con huecos debajo, trabaja cada vez que te duchas y termina fisurando por ah&iacute;. Bien asentado, no pasa.</p>
                </div>
                <div class="fio-problem-card">
                    <h3>Que se pique con un golpe</h3>
                    <p>Un objeto pesado que cae de canto &mdash;una mampara, una herramienta durante la obra&mdash; puede saltar el gel coat de la superficie. No es un defecto del material: es un impacto. Tiene arreglo con kit de reparaci&oacute;n del propio color.</p>
                </div>
                <div class="fio-problem-card">
                    <h3>Cu&aacute;ndo cubre la garant&iacute;a</h3>
                    <p>Con transparencia: un defecto de fabricaci&oacute;n entra en la <strong>garant&iacute;a legal de tres a&ntilde;os</strong>, y ah&iacute; no pagas nada. Un da&ntilde;o por golpe o por una instalaci&oacute;n mal asentada es un da&ntilde;o de uso y la reparaci&oacute;n se cobra. Preferimos dec&iacute;rtelo antes que discutirlo despu&eacute;s.</p>
                </div>
                <div class="fio-problem-card">
                    <h3>Si llega da&ntilde;ado del transporte</h3>
                    <p>Rev&iacute;salo delante del transportista, anota el golpe <strong>en el albar&aacute;n antes de firmar</strong> y av&iacute;sanos dentro de las 24 horas siguientes. Cumpliendo eso, la recogida y la reposici&oacute;n son sin coste para ti. Ese minuto al recibir el palet ahorra la mayor&iacute;a de los disgustos.</p>
                </div>
            </div>

            <p class="fio-problems-cta">Como el problema n&uacute;mero uno es el asiento, merece la pena leer <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/">c&oacute;mo se instala un plato de ducha</a> antes de que venga el instalador.</p>
        </div>
    </section>

    <!-- 3. LAS CUATRO SERIES, ELEGIDAS POR EL DESAGUE.
         No es inventario: es la decision de compra. Si te equivocas de serie,
         hay que picar el suelo. -->
    <section class="fio-series-section adrihosan-full-width-block">
        <div class="fio-series-wrapper">
            <h2>Cuatro series: la eliges por d&oacute;nde te sale el desag&uuml;e</h2>
            <p class="fio-series-sub">Antes de mirar precio o acabado, mira el saneamiento que ya tienes. Es lo que separa a las cuatro series de Fiora, y equivocarse significa picar el suelo.</p>

            <div class="fio-decision">
                <div class="fio-decision-row">
                    <span class="fio-decision-if">Si tu desag&uuml;e sale por un lateral, en el lado largo</span>
                    <span class="fio-decision-then">Trace</span>
                </div>
                <div class="fio-decision-row">
                    <span class="fio-decision-if">Si sale por el lado corto</span>
                    <span class="fio-decision-then">Limite</span>
                </div>
                <div class="fio-decision-row">
                    <span class="fio-decision-if">Si sale por un extremo y quieres textura Lastra o reborde</span>
                    <span class="fio-decision-then">KOU Lastra</span>
                </div>
                <div class="fio-decision-row">
                    <span class="fio-decision-if">Si te queda centrado, o buscas un plato cuadrado</span>
                    <span class="fio-decision-then">Silex</span>
                </div>
            </div>

            <div class="fio-series-grid">
                <div class="fio-serie-card">
                    <h3>Limite</h3>
                    <p class="fio-serie-clave">Desag&uuml;e lineal en el lado corto</p>
                    <p>La serie m&aacute;s vendida de Fiora en nuestra tienda. Textura pizarra y acabado enrasado con el suelo.</p>
                    <ul class="fio-serie-datos">
                        <li><span>Modelos</span> 24</li>
                        <li><span>Precio</span> 339,90 &ndash; 752,90 &euro;</li>
                        <li><span>Textura</span> Pizarra</li>
                    </ul>
                </div>
                <div class="fio-serie-card">
                    <h3>Trace</h3>
                    <p class="fio-serie-clave">Desag&uuml;e lineal en un lateral</p>
                    <p>El canal corre por el lado largo del plato. Misma textura pizarra y mismo acabado a ras que el Limite.</p>
                    <ul class="fio-serie-datos">
                        <li><span>Modelos</span> 24</li>
                        <li><span>Precio</span> 339,90 &ndash; 752,90 &euro;</li>
                        <li><span>Textura</span> Pizarra</li>
                    </ul>
                </div>
                <div class="fio-serie-card fio-serie-premium">
                    <span class="fio-serie-tag">Con reborde</span>
                    <h3>KOU Lastra</h3>
                    <p class="fio-serie-clave">Desag&uuml;e lineal en un extremo</p>
                    <p>La &uacute;nica con textura Lastra y la &uacute;nica con <strong>reborde perimetral</strong>: un labio elevado en todo el contorno que mantiene el agua dentro del plato. Es el techo de gama.</p>
                    <ul class="fio-serie-datos">
                        <li><span>Modelos</span> 24</li>
                        <li><span>Precio</span> 348,90 &ndash; 843,90 &euro;</li>
                        <li><span>Textura</span> Lastra</li>
                    </ul>
                </div>
                <div class="fio-serie-card">
                    <h3>Silex</h3>
                    <p class="fio-serie-clave">Rejilla cuadrada centrada</p>
                    <p>La &uacute;nica con formatos cuadrados (80x80 y 90x90) y la de largos m&aacute;s cortos. Va apoyada sobre el suelo, con su canto de 4&nbsp;cm a la vista, en lugar de enrasada como las otras tres.</p>
                    <ul class="fio-serie-datos">
                        <li><span>Modelos</span> 16</li>
                        <li><span>Precio</span> 346,90 &ndash; 684,90 &euro;</li>
                        <li><span>Textura</span> Pizarra</li>
                    </ul>
                </div>
            </div>
            <p class="fio-series-comun">Las cuatro comparten lo importante: <strong>resina de poliuretano</strong>, <strong>superficie antideslizante</strong> y <strong>v&aacute;lvula de desag&uuml;e incluida</strong>.</p>
        </div>
    </section>

    <!-- 4. FRANJA DE PRECIO (la consulta de mejor CTR: 5,75 %) -->
    <section class="fio-price-band adrihosan-full-width-block">
        <div class="fio-price-wrapper">
            <p class="fio-price-line">Platos Fiora <strong>desde 339,90&nbsp;&euro; +IVA</strong>, hasta 843,90&nbsp;&euro; en el KOU Lastra</p>
            <p class="fio-price-nota">Es gama alta, y se nota en el precio de entrada. Si buscas lo m&aacute;s ajustado, <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/duplach-platos-de-ducha/">Duplach arranca en 120,90&nbsp;&euro;</a>.</p>
        </div>
    </section>

    <!-- 5. MEDIDAS (solo tallas con pagina propia que Fiora cubre; el 70x70
         queda fuera porque su largo minimo es 80, y solo en Silex) -->
    <section class="fio-sizes-section adrihosan-full-width-block">
        <div class="fio-sizes-wrapper">
            <h2>Medidas disponibles</h2>
            <p class="fio-sizes-sub">Anchos de 70 a 100&nbsp;cm y largos de 100 a 200. El Silex es el que rompe la regla: llega hasta 170 de largo pero baja a 80, y es el &uacute;nico con formatos cuadrados.</p>
            <div class="fio-sizes-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-180x70/" class="fio-size-btn">180&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-170x80/" class="fio-size-btn">170&times;80</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-160x70/" class="fio-size-btn">160&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-150x70/" class="fio-size-btn">150&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-140x70/" class="fio-size-btn">140&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/" class="fio-size-btn">120&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-90x90/" class="fio-size-btn">90&times;90</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-80x80/" class="fio-size-btn">80&times;80</a>
            </div>
            <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="fio-sizes-madre">Ver todos los platos de ducha del cat&aacute;logo &rarr;</a>
        </div>
    </section>
    <?php endif; // fin bloques de marca ?>

    <!-- 6. FILTRO FE PRO (conjunto 429707 heredado de la madre, mismo marcado).
         SIEMPRE visible, tambien en filtro: es como el usuario afina o deshace. -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <!-- 7. TITULO CATALOGO + LISTADO -->
    <div class="product-loop-header">
        <h2 id="fio-catalogo">Cat&aacute;logo de platos de ducha Fiora</h2>
        <p>M&aacute;s de 80 modelos entre Limite, Trace, KOU Lastra y Silex.</p>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_fiora_contenido_inferior() {
    // Mismo criterio que arriba: en URL de filtro con regla SEO propia se
    // omiten los bloques de marca. El contacto SI se mantiene siempre.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 8. FIORA O ROCA (comparativa de marca, ~320 impr/ano, hoy sin
         responder). Honesto: en que se parecen, en que no, y para quien es
         cada una. Sin hablar mal de nadie. -->
    <section class="fio-vs-section adrihosan-full-width-block">
        <div class="fio-vs-wrapper">
            <h2>&iquest;Fiora o Roca?</h2>
            <p>Es una comparaci&oacute;n que nos hacen a menudo y la respuesta honesta es que no compiten en lo mismo. <strong>Roca</strong> es un fabricante generalista: hace el ba&ntilde;o completo, lo encuentras en cualquier sitio y su servicio postventa es enorme. <strong>Fiora</strong> est&aacute; especializada en platos de ducha de resina, y ah&iacute; es donde afina: m&aacute;s texturas, m&aacute;s formatos y cuatro configuraciones distintas de desag&uuml;e para no tener que tocar el saneamiento.</p>
            <p>Si quieres una sola marca para todo el ba&ntilde;o y la m&aacute;xima red de servicio, Roca te encaja. Si el plato es la pieza que te importa &mdash;porque tienes una medida rara, un desag&uuml;e en un sitio inc&oacute;modo o quieres un acabado concreto&mdash; Fiora te va a dar m&aacute;s opciones. En la exposici&oacute;n tenemos las dos y te decimos cu&aacute;l tiene m&aacute;s sentido para tu ba&ntilde;o, sin barrer para casa.</p>
        </div>
    </section>

    <!-- 9. FAQ (9 preguntas, HTML visible SIN JSON-LD: lo parsea Rank Math
         despues, asi que los textos quedan como se dejen aqui) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los platos de ducha Fiora</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; problemas dan los platos de ducha Fiora?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los dos que vemos, y los dos se evitan. El primero es una grieta, y casi siempre viene del asiento: si la base no queda continua y nivelada, el plato trabaja y termina fisurando. El segundo es un picado en la superficie por un golpe fuerte, que se repara con kit del mismo color. Bien instalado y sin golpes, un plato de resina aguanta d&eacute;cadas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato de ducha Fiora?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde 339,90&nbsp;&euro; +IVA en las medidas peque&ntilde;as de Limite y Trace, hasta 843,90&nbsp;&euro; en los formatos grandes del KOU Lastra. Fiora es gama alta dentro de los platos de resina: lo que pagas de m&aacute;s frente a otras marcas son las texturas, los formatos y las cuatro posiciones de desag&uuml;e.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre Limite, Trace, KOU Lastra y Silex?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sobre todo, por d&oacute;nde evac&uacute;a el agua. Limite lleva el canal lineal en el lado corto; Trace, en un lateral del lado largo; KOU Lastra, en un extremo; y Silex usa rejilla cuadrada centrada. Adem&aacute;s, el KOU Lastra es el &uacute;nico con textura Lastra y con reborde perimetral, y el Silex el &uacute;nico con formatos cuadrados. Las otras tres van a ras del suelo con textura pizarra.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden cortar a medida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La resina admite recorte en obra con radial y disco de diamante, pero no todos los modelos lo permiten igual: depende de por d&oacute;nde vaya el desag&uuml;e y de cu&aacute;nto quieras quitar. Dinos la medida exacta de tu hueco antes de comprar y te confirmamos qu&eacute; serie te sirve y hasta d&oacute;nde se puede recortar.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son antideslizantes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, las cuatro series tienen superficie antideslizante. Fiora no publica la clase concreta ni en su web ni en su cat&aacute;logo, as&iacute; que si necesitas el dato certificado para una obra en local de uso p&uacute;blico se lo pedimos a f&aacute;brica y te lo pasamos por escrito.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Llevan la v&aacute;lvula de desag&uuml;e incluida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, todos los platos Fiora del cat&aacute;logo la incluyen. No tienes que comprarla aparte ni sumarla al presupuesto.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medidas hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los anchos van de 70 a 100&nbsp;cm y los largos de 100 a 200 en Limite, Trace y KOU Lastra. El Silex se mueve entre 80 y 170 de largo, y es el &uacute;nico que ofrece formatos cuadrados como el 80x80 y el 90x90.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto tardan en llegar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del modelo y de si est&aacute; en stock o entra en la siguiente fabricaci&oacute;n. Te confirmamos la fecha al hacer el pedido y enviamos a toda Espa&ntilde;a con seguimiento. Si tienes obra empezada, d&iacute;noslo al pedir y lo tenemos en cuenta.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Y si el plato llega da&ntilde;ado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Rev&iacute;salo delante del transportista y anota cualquier golpe en el albar&aacute;n antes de firmar; av&iacute;sanos dentro de las 24 horas siguientes a la recepci&oacute;n. Si llega da&ntilde;ado o con un defecto, nos hacemos cargo de la recogida y la reposici&oacute;n sin coste para ti.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 10. GUIAS DEL BLOG (las 3 entradas que cuelgan de esta categoria) -->
    <section class="fio-guides-section adrihosan-full-width-block">
        <div class="fio-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato</h2>
            <div class="fio-guides-grid">
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="fio-guide-link">C&oacute;mo instalar un plato de ducha</a>
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="fio-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-es-el-mejor-material/" class="fio-guide-link">Cu&aacute;l es el mejor material</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques de marca ?>

    <!-- 11. CONTACTO RICARDO (se pinta SIEMPRE, tambien en URL de filtro) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;No sabes por d&oacute;nde te sale el desag&uuml;e?<span>Soy Ricardo, m&aacute;ndame una foto y te digo qu&eacute; serie te encaja.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20plato%20de%20ducha%20Fiora" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
