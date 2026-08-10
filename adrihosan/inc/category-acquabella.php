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
 * que ayudarle a elegir el MODELO. Todos comparten material (Akron) y llevan el
 * desague incluido, asi que lo que decide la compra es la ALTURA REAL y el
 * FORMATO MAXIMO: si el plato no entra en el hueco o no encaja con el suelo, da
 * igual lo bonito que sea.
 *
 * Wireframe 2026-08-07 (prefijo acq-), CORREGIDO el 7-ago con las
 * especificaciones oficiales del fabricante.
 *
 * REGLA DE DATOS: ningun dato de producto que no este en la ficha oficial de
 * Acquabella. Ni deducido de una foto, ni sacado de nuestros propios titulos
 * comerciales, ni heredado de la descripcion vieja. La primera version de esta
 * plantilla fallo en las tres cosas:
 *   - Decia "todos miden 3 cm". FALSO: van de 2,3 a 3,9 cm segun modelo. El "3"
 *     salia del titulo comercial (80X70X3), que es nominal, no altura real.
 *   - Tenia un bloque que agrupaba los modelos por forma del desague. PREMISA
 *     FALSA: la rejilla es CONFIGURABLE (Mia, Geo, Lux), no viene dada por el
 *     modelo. Bloque eliminado.
 *   - Decia "antideslizante C3". Eso es jerga que mezcla TRES normas distintas:
 *     UNE-ENV 12633 Clase 3, DIN 51097 Clase C y la francesa PN 24.
 *
 * PRISMA SLATE: RETIRADO de la pagina el 2026-08-10. Eran 49 platos de un
 * modelo que el fabricante ya no cataloga (su pagina da 404). El 7-ago se
 * pasaron los 49 a borrador con su 301 medida a medida hacia el Base Slate,
 * asi que la tarjeta anunciaba algo que ya no se vende. No se vuelve a
 * pintar: si un modelo no esta a la venta, no ocupa sitio en la hoja.
 *
 * CIFRA DEL CATALOGO: al salir Prisma quedan 289 platos publicados, no 338.
 * Por eso el "mas de 300" que habia en hero, Akron, precio, cabecera del
 * listado y FAQ pasa a "mas de 280" (regla: catalogo redondeado a la baja).
 * Los mismos textos estan replicados en la descripcion del termino, en el
 * rank_math_title y en el schema FAQ de Rank Math, y se cambiaron a la vez.
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
    <!-- Imagen editorial subida el 7-ago (adjunto 429737): Alma Slate en textura
         pizarra, 1600x1066, 191 KB. Mismo patron que el resto del silo. El
         degradado lo pone el CSS, NUNCA horneado en el JPG.
         NO sustituir por un color de fondo: esta imagen es la definitiva. -->
    <section class="hero-section-container acq-hero adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-acquabella-alma-slate-textura-pizarra-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Acquabella</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha Acquabella' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>M&aacute;s de 280 medidas, de 70x80 a 200x120&nbsp;cm, en material Akron. Desde 245,90&nbsp;&euro; +IVA.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. LOS MODELOS.
         El eje ya NO es el desague (la rejilla es configurable): son la
         ALTURA REAL y el FORMATO MAXIMO, que es lo que decide si el plato
         encaja. Datos de la ficha oficial del fabricante, modelo a modelo.
         Se conserva el id acq-series por si hay enlaces apuntando. -->
    <section id="acq-series" class="acq-series-section adrihosan-full-width-block">
        <div class="acq-series-wrapper">
            <h2>Los modelos de Acquabella</h2>
            <p class="acq-series-sub">Todos son de material Akron y llevan el desag&uuml;e incluido. Lo que cambia entre ellos es la textura, la altura y hasta qu&eacute; formato llegan.</p>
            <div class="acq-series-grid">

                <div class="acq-serie-card acq-serie-destacada">
                    <h3>Base Slate</h3>
                    <span class="acq-serie-medidas">89 medidas</span>
                    <ul class="acq-serie-datos">
                        <li><span>Altura</span> 2,3 &ndash; 2,8 cm</li>
                        <li><span>Formato m&aacute;x.</span> 200x120 cm</li>
                    </ul>
                    <p>El m&aacute;s vers&aacute;til y el que llega a formato mayor. Admite rejilla Mia, Geo o Lux, y es el modelo a medida por excelencia.</p>
                </div>

                <div class="acq-serie-card">
                    <h3>Focus Beton</h3>
                    <span class="acq-serie-medidas">50 medidas</span>
                    <ul class="acq-serie-datos">
                        <li><span>Altura</span> 2,7 &ndash; 3,1 cm</li>
                        <li><span>Formato m&aacute;x.</span> 200x100 cm</li>
                    </ul>
                </div>

                <div class="acq-serie-card">
                    <h3>Base Zero</h3>
                    <span class="acq-serie-medidas">48 medidas</span>
                    <ul class="acq-serie-datos">
                        <li><span>Altura</span> 2,3 &ndash; 2,8 cm</li>
                        <li><span>Formato m&aacute;x.</span> 200x100 cm</li>
                    </ul>
                </div>

                <div class="acq-serie-card">
                    <h3>Alma Slate</h3>
                    <span class="acq-serie-medidas">44 medidas</span>
                    <ul class="acq-serie-datos">
                        <li><span>Altura</span> 2,4 &ndash; 3 cm</li>
                        <li><span>Formato m&aacute;x.</span> 200x100 cm</li>
                    </ul>
                </div>

                <div class="acq-serie-card acq-serie-destacada">
                    <span class="acq-serie-tag">Enmarcado</span>
                    <h3>Arq Zero</h3>
                    <span class="acq-serie-medidas">28 medidas</span>
                    <ul class="acq-serie-datos">
                        <li><span>Altura</span> 3,4 &ndash; 3,9 cm</li>
                        <li><span>Formato m&aacute;x.</span> 200x100 cm</li>
                    </ul>
                    <p>El &uacute;nico con un marco que recorre todo su per&iacute;metro, y tambi&eacute;n el m&aacute;s alto de la gama.</p>
                </div>

                <div class="acq-serie-card">
                    <h3>Base Beton</h3>
                    <span class="acq-serie-medidas">25 medidas</span>
                    <ul class="acq-serie-datos">
                        <li><span>Altura</span> 2,3 &ndash; 2,8 cm</li>
                        <li><span>Formato m&aacute;x.</span> 200x100 cm</li>
                    </ul>
                </div>

                <div class="acq-serie-card">
                    <h3>Flow Zero</h3>
                    <span class="acq-serie-medidas">5 medidas</span>
                    <ul class="acq-serie-datos">
                        <li><span>Altura</span> 3 cm</li>
                        <li><span>Formato m&aacute;x.</span> 200x100 cm</li>
                    </ul>
                    <p>Lleva rejilla integrada, pensada para recoger gran caudal de agua.</p>
                </div>

            </div>
            <p class="acq-series-nota">&iquest;No sabes cu&aacute;l encaja con tu ba&ntilde;o? M&aacute;ndanos las medidas del hueco y te decimos qu&eacute; modelo entra.</p>
        </div>
    </section>

    <!-- 3. QUE ES EL AKRON (diferenciador verificado en ficha tecnica) -->
    <section class="acq-akron-section adrihosan-full-width-block">
        <div class="acq-akron-wrapper">
            <h2>Qu&eacute; es el Akron</h2>
            <p>Es el material con el que Acquabella fabrica sus platos, y lo llevan los m&aacute;s de 280 modelos del cat&aacute;logo. Es un compuesto de <strong>resina de poliuretano y cargas minerales sin s&iacute;lice</strong>, con una superficie compacta, antideslizante y resistente.</p>
            <p>Aguanta agentes qu&iacute;micos, impactos y choque t&eacute;rmico, y lleva <strong>certificado antibacteriano seg&uacute;n la norma ISO 22196:2011</strong>. Sus texturas se consiguen en alta definici&oacute;n, admite m&aacute;s de 2.000 colores y se puede cortar a medida, que es lo que permite ajustarlo a un hueco que no es est&aacute;ndar.</p>
            <div class="acq-akron-datos">
                <div class="acq-akron-dato"><strong>Sin s&iacute;lice</strong><span>en sus cargas minerales</span></div>
                <div class="acq-akron-dato"><strong>ISO 22196</strong><span>certificado antibacteriano</span></div>
                <div class="acq-akron-dato"><strong>2,3 &ndash; 3,9</strong><span>cent&iacute;metros de alto seg&uacute;n modelo</span></div>
            </div>
        </div>
    </section>

    <!-- 4. FRANJA DE PRECIO (el "desde" va EXACTO, nunca redondeado) -->
    <section class="acq-price-band adrihosan-full-width-block">
        <div class="acq-price-wrapper">
            <p class="acq-price-line">Platos Acquabella <strong>desde 245,90&nbsp;&euro; +IVA</strong>, hasta 916,90&nbsp;&euro; en los formatos m&aacute;s grandes</p>
            <p class="acq-price-nota">El precio depende de la medida y de la serie, no del material: los m&aacute;s de 280 modelos son del mismo Akron.</p>
        </div>
    </section>

    <!-- 5. MEDIDAS -->
    <section class="acq-sizes-section adrihosan-full-width-block">
        <div class="acq-sizes-wrapper">
            <h2>Medidas disponibles</h2>
            <p class="acq-sizes-sub">Del formato m&aacute;s peque&ntilde;o, 70x80&nbsp;cm, al mayor, 200x120. El modelo con m&aacute;s opciones es el Base Slate, con 89 medidas y el &uacute;nico que llega a 120&nbsp;cm de ancho.</p>
            <div class="acq-sizes-links">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/" class="acq-sizes-link">Ver platos de ducha grandes</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="acq-sizes-link">Ver todos los platos del cat&aacute;logo</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques de marca ?>

    <!-- 6. FILTRO FE PRO (conjunto 429707 heredado de la madre, mismo marcado).
         SIEMPRE visible, tambien en URL de filtro. -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <!-- 7. TITULO CATALOGO + LISTADO -->
    <div class="product-loop-header">
        <h2 id="acq-catalogo">Cat&aacute;logo de platos de ducha Acquabella</h2>
        <p>M&aacute;s de 280 medidas entre los siete modelos. Tambi&eacute;n encontrar&aacute;s la marca escrita como Aquabella.</p>
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
    <!-- 8. FAQ (9 preguntas, HTML visible SIN JSON-LD).
         Textos escritos con los datos oficiales del fabricante: material
         Akron, alturas reales por modelo, diferencias entre modelos, las tres
         normas de antideslizamiento con su nombre, corte, plazo, garantia
         legal, precio y formatos. El schema lo genera Rank Math parseando
         este HTML, asi que manda lo que quede aqui. -->
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
                        <p>De Akron, un compuesto de poliuretano con cargas minerales de distinta granulometr&iacute;a compactadas en masa maciza y reforzada. No es una l&aacute;mina hueca: es s&oacute;lido en todo su espesor. Su formulaci&oacute;n resiste la humedad permanente sin degradarse, y lo llevan los m&aacute;s de 280 modelos del cat&aacute;logo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto miden de alto?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del modelo, entre 2,3 y 3,9 cm. Los Base rondan los 2,5 cm; el Arq Zero, que va enmarcado, es el m&aacute;s alto. Si vas a renovar el ba&ntilde;o sin levantar el suelo, la altura es justo el dato que conviene mirar primero.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre los modelos?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La textura, la altura, hasta qu&eacute; formato llegan y si van enmarcados o a ras. El Base Slate es el m&aacute;s vers&aacute;til y el &uacute;nico que alcanza los 200x120&nbsp;cm. El Arq Zero es el &uacute;nico con marco alrededor y el m&aacute;s alto, de 3,4 a 3,9&nbsp;cm. El Flow Zero lleva rejilla integrada para gran caudal. El resto se mueven entre 2,3 y 3,1&nbsp;cm de alto y llegan hasta 200x100.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Son antideslizantes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Cumplen la Clase 3 de la UNE-ENV 12633, la Clase C de la DIN 51097 &mdash;la exigente para pie descalzo&mdash; y la PN 24 francesa. Si necesitas el certificado del fabricante para una obra en local de uso p&uacute;blico, te lo facilitamos.</p>
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
                        <p>Desde 70x80&nbsp;cm hasta 200x120. El modelo con m&aacute;s opciones es el Base Slate, con 89 medidas y el &uacute;nico que llega a 120&nbsp;cm de ancho; el m&aacute;s reducido es el Flow Zero, con 5. Si no ves tu medida, escr&iacute;benos con las dimensiones del hueco antes de comprar.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 9. GUIAS DEL BLOG -->
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

    <!-- 10. CONTACTO RICARDO (se pinta SIEMPRE, tambien en URL de filtro) -->
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
