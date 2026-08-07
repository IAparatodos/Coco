<?php
/**
 * Categoria 2887 - Platos de ducha Acquabella (hija de 86)
 *
 * TERCERA hoja de marca del silo, y la que peor esta: 26 impresiones al ano
 * en posicion 11,7 y CERO clics. No es que compita mal, es que no existe para
 * Google. La demanda de marca (829 impresiones solo por "acquabella") se la
 * lleva /brand/acquabella/, y las consultas por serie las resuelven las fichas
 * sueltas. Esta plantilla es lo que tiene que estar listo ANTES de mover esas
 * 1.513 impresiones de la brand hacia aqui con el 301.
 *
 * Quien llega ya sabe que quiere Acquabella: no hay que venderle la marca, hay
 * que ayudarle a elegir la SERIE. Y como los 338 platos comparten material
 * (Akron) y grosor (3 cm), el unico eje real de decision es por donde sale el
 * agua. Mismo criterio que la madre 86 y que Fiora: coherencia de silo.
 *
 * Wireframe 2026-08-07 (prefijo acq-). Datos verificados en BD y GSC.
 *
 * AVISO DE PRODUCTO (leccion del Silex, 4-ago): de las siete series solo hay
 * TRES con la forma del desague verificada (Slate Base, Slate Prisma y Alma
 * Slate). Base Beton, Base Zero, Zero Arq y Flow Zero van SOLO con nombre y
 * numero de medidas. No se describe su desague hasta comprobarlo: no se deduce
 * de una foto.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_acquabella_contenido_superior() {
    // Regla del PR #74: en una URL de filtro CON regla SEO propia solo se
    // pintan hero, filtro, listado y contacto.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO -->
    <!-- TODO: sustituir el fondo corporativo por la imagen editorial cuando
         llegue (1600x1066, ~190 KB, mediterraneo calido). El degradado lo pone
         el CSS, nunca horneado en el JPG: basta cambiar el style por
         background-image: url('...'); -->
    <section class="hero-section-container acq-hero adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Acquabella</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha Acquabella' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>M&aacute;s de 300 medidas en siete series, desde 245,90&nbsp;&euro; +IVA. Todas en material Akron de 3&nbsp;cm de grosor, con largos de 80 a 230&nbsp;cm.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. EL DESAGUE - EL BLOQUE QUE DECIDE.
         Todos los platos comparten material y grosor, asi que lo unico que
         separa de verdad a las series es por donde evacua el agua. Enlaza por
         ancla al bloque de series: las series NO tienen URL propia (no son
         categorias ni filtros con regla), asi que no se inventa ninguna. -->
    <section class="acq-drain-section adrihosan-full-width-block">
        <div class="acq-drain-wrapper">
            <h2>&iquest;Por d&oacute;nde te sale el desag&uuml;e?</h2>
            <p class="acq-drain-sub">Es la primera pregunta que hay que resolver, porque decide la serie. Si te equivocas, hay que picar el suelo para mover el saneamiento.</p>
            <div class="acq-drain-grid">
                <a href="#acq-series" class="acq-drain-card">
                    <span class="acq-drain-fig acq-fig-central" aria-hidden="true"></span>
                    <h3>Te queda en el centro</h3>
                    <p>Sumidero cuadrado en mitad del plato, con las pendientes trabajando hacia &eacute;l desde las cuatro esquinas.</p>
                    <span class="acq-drain-serie">Slate Base</span>
                </a>
                <a href="#acq-series" class="acq-drain-card">
                    <span class="acq-drain-fig acq-fig-lineal" aria-hidden="true"></span>
                    <h3>Prefieres canal a la vista</h3>
                    <p>Canal alargado con rejilla de acero inoxidable vista, la soluci&oacute;n cl&aacute;sica de desag&uuml;e lineal.</p>
                    <span class="acq-drain-serie">Slate Prisma</span>
                </a>
                <a href="#acq-series" class="acq-drain-card">
                    <span class="acq-drain-fig acq-fig-oculto" aria-hidden="true"></span>
                    <h3>No quieres ver la rejilla</h3>
                    <p>Canal tapado con una pieza del mismo material y la misma textura del plato; solo se ven dos ranuras finas.</p>
                    <span class="acq-drain-serie">Alma Slate</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. LAS SIETE SERIES.
         Solo las tres verificadas llevan descripcion del desague. Las otras
         cuatro van con nombre y numero de medidas, a la espera de comprobar
         su forma. -->
    <section id="acq-series" class="acq-series-section adrihosan-full-width-block">
        <div class="acq-series-wrapper">
            <h2>Las siete series de Acquabella</h2>
            <p class="acq-series-sub">Todas comparten material y grosor, as&iacute; que la diferencia est&aacute; en la forma y en las medidas disponibles.</p>
            <div class="acq-series-grid">

                <div class="acq-serie-card acq-serie-verificada">
                    <h3>Slate Base</h3>
                    <span class="acq-serie-medidas">89 medidas</span>
                    <p>Desag&uuml;e central, con sumidero cuadrado en mitad del plato. Es la serie con m&aacute;s medidas del cat&aacute;logo.</p>
                </div>

                <div class="acq-serie-card">
                    <h3>Base Beton</h3>
                    <span class="acq-serie-medidas">75 medidas</span>
                </div>

                <div class="acq-serie-card acq-serie-verificada">
                    <h3>Slate Prisma</h3>
                    <span class="acq-serie-medidas">49 medidas</span>
                    <p>Desag&uuml;e lineal con rejilla de acero inoxidable a la vista, en canal alargado.</p>
                </div>

                <div class="acq-serie-card">
                    <h3>Base Zero</h3>
                    <span class="acq-serie-medidas">48 medidas</span>
                </div>

                <div class="acq-serie-card acq-serie-verificada">
                    <h3>Alma Slate</h3>
                    <span class="acq-serie-medidas">44 medidas</span>
                    <p>Desag&uuml;e lineal oculto: la tapa es del mismo material y textura que el plato y solo deja ver dos ranuras.</p>
                </div>

                <div class="acq-serie-card">
                    <h3>Zero Arq</h3>
                    <span class="acq-serie-medidas">28 medidas</span>
                </div>

                <div class="acq-serie-card">
                    <h3>Flow Zero</h3>
                    <span class="acq-serie-medidas">5 medidas</span>
                </div>

            </div>
            <p class="acq-series-nota">&iquest;No sabes cu&aacute;l encaja con tu ba&ntilde;o? M&aacute;ndanos una foto del hueco y te decimos por d&oacute;nde te conviene sacar el agua.</p>
        </div>
    </section>

    <!-- 4. QUE ES EL AKRON (diferenciador verificado en ficha tecnica) -->
    <section class="acq-akron-section adrihosan-full-width-block">
        <div class="acq-akron-wrapper">
            <h2>Qu&eacute; es el Akron</h2>
            <p>Es el material con el que Acquabella fabrica sus platos, y lo llevan los m&aacute;s de 300 modelos del cat&aacute;logo. Se compone de <strong>poliuretano y cargas minerales</strong> de distinta granulometr&iacute;a, compactadas en una masa <strong>maciza y reforzada</strong>: no es una l&aacute;mina hueca ni un relleno ligero, es s&oacute;lido de lado a lado.</p>
            <p>Su matriz est&aacute; formulada con polioles de poli&eacute;ter, que traducido a lo que importa significa que <strong>no se degrada con el agua ni con la humedad constante</strong>, que es justo lo que le pides a un plato de ducha durante veinte a&ntilde;os.</p>
            <div class="acq-akron-datos">
                <div class="acq-akron-dato"><strong>3 cm</strong><span>de grosor, en todos los modelos</span></div>
                <div class="acq-akron-dato"><strong>Macizo</strong><span>compactado en masa, no hueco</span></div>
                <div class="acq-akron-dato"><strong>C3</strong><span>clase antideslizante</span></div>
            </div>
        </div>
    </section>

    <!-- 5. FRANJA DE PRECIO (el "desde" va EXACTO, nunca redondeado) -->
    <section class="acq-price-band adrihosan-full-width-block">
        <div class="acq-price-wrapper">
            <p class="acq-price-line">Platos Acquabella <strong>desde 245,90&nbsp;&euro; +IVA</strong>, hasta 916,90&nbsp;&euro; en los formatos m&aacute;s grandes</p>
            <p class="acq-price-nota">El precio depende de la medida y de la serie, no del material: los m&aacute;s de 300 modelos son del mismo Akron.</p>
        </div>
    </section>

    <!-- 6. MEDIDAS -->
    <section class="acq-sizes-section adrihosan-full-width-block">
        <div class="acq-sizes-wrapper">
            <h2>Medidas disponibles</h2>
            <p class="acq-sizes-sub">Los largos van de 80 a 230&nbsp;cm. Slate Base es la serie con m&aacute;s opciones, con 89 medidas distintas; Flow Zero es la m&aacute;s corta, con 5.</p>
            <div class="acq-sizes-links">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/" class="acq-sizes-link">Ver platos de ducha grandes</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="acq-sizes-link">Ver todos los platos del cat&aacute;logo</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques de marca ?>

    <!-- 7. FILTRO FE PRO (conjunto 429707 heredado de la madre, mismo marcado).
         SIEMPRE visible, tambien en URL de filtro. -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <!-- 8. TITULO CATALOGO + LISTADO -->
    <div class="product-loop-header">
        <h2 id="acq-catalogo">Cat&aacute;logo de platos de ducha Acquabella</h2>
        <p>M&aacute;s de 300 medidas entre las siete series. Tambi&eacute;n encontrar&aacute;s la marca escrita como Aquabella.</p>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_acquabella_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 9. FAQ (9 preguntas, HTML visible SIN JSON-LD).
         TODO OPERADOR: el wireframe indica que ya hay 9 respuestas redactadas
         y validadas el 7-ago. Aqui va la estructura del acordeon con textos
         escritos a partir de los datos YA VERIFICADOS del propio wireframe
         (Akron, 3 cm, las tres Slate, C3, corte, 10 dias, garantia legal,
         precio y medidas), para que la pagina funcione desde el primer
         despliegue. Sustituir por las validadas si difieren: el schema lo
         genera Rank Math parseando este HTML, asi que manda lo que quede aqui. -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los platos de ducha Acquabella</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;De qu&eacute; material son los platos Acquabella?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>De Akron, un compuesto de poliuretano con cargas minerales de distinta granulometr&iacute;a compactadas en masa maciza y reforzada. No es una l&aacute;mina hueca: es s&oacute;lido en todo su espesor. Su formulaci&oacute;n resiste la humedad permanente sin degradarse, y lo llevan los m&aacute;s de 300 modelos del cat&aacute;logo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto miden de alto?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Tres cent&iacute;metros, todos los modelos sin excepci&oacute;n. Es una altura pensada para sustituir una ba&ntilde;era o renovar el ba&ntilde;o sin levantar el suelo, dejando un escal&oacute;n m&iacute;nimo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre Slate Base, Slate Prisma y Alma Slate?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El desag&uuml;e. Slate Base lo lleva centrado, con un sumidero cuadrado en mitad del plato. Slate Prisma usa un canal lineal con rejilla de acero inoxidable a la vista. Alma Slate tambi&eacute;n es lineal, pero con la tapa del mismo material y textura que el plato, de modo que solo se aprecian dos ranuras finas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son antideslizantes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, con clasificaci&oacute;n C3, que es la que exige la normativa para zona de ducha con el pie descalzo. Si necesitas el certificado del fabricante para una obra en local de uso p&uacute;blico, te lo facilitamos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden cortar a medida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Al ser macizos se recortan en obra con radial y disco de diamante, que es lo que permite ajustarlos a un hueco que no es medida est&aacute;ndar. Ten en cuenta d&oacute;nde queda el desag&uuml;e antes de decidir por qu&eacute; lado recortas, y que un plato cortado a medida es producto personalizado a efectos de devoluci&oacute;n.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto tardan en llegar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Unos 10 d&iacute;as. Si tienes la obra empezada d&iacute;noslo al hacer el pedido y lo tenemos en cuenta para ajustar la entrega.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; garant&iacute;a tienen?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La garant&iacute;a legal de conformidad: tres a&ntilde;os por la normativa espa&ntilde;ola de consumo. Cubre los defectos de fabricaci&oacute;n. Un da&ntilde;o por golpe o por una instalaci&oacute;n mal asentada no entra, y preferimos dec&iacute;rtelo de antemano.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato Acquabella?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde 245,90&nbsp;&euro; +IVA, y hasta 916,90&nbsp;&euro; en los formatos m&aacute;s grandes. Lo que mueve el precio es la medida y la serie, no el material: todos los modelos son del mismo Akron.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medidas hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los largos van de 80 a 230&nbsp;cm. La serie con m&aacute;s opciones es Slate Base, con 89 medidas distintas; la m&aacute;s reducida es Flow Zero, con 5. Si no ves tu medida, escr&iacute;benos con las dimensiones del hueco antes de comprar.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 10. GUIAS DEL BLOG -->
    <section class="acq-guides-section adrihosan-full-width-block">
        <div class="acq-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato</h2>
            <div class="acq-guides-grid">
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="acq-guide-link">C&oacute;mo instalar un plato de ducha</a>
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="acq-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-es-el-mejor-material/" class="acq-guide-link">Cu&aacute;l es el mejor material</a>
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
                    <h2>&iquest;Dudas con la serie o la medida?<span>Soy Ricardo, te digo qu&eacute; Acquabella encaja en tu hueco.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20plato%20de%20ducha%20Acquabella" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
