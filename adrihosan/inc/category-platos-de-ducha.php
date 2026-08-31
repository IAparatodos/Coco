<?php
/**
 * Categoria 86 - Platos de Ducha (LA MADRE del silo)
 *
 * PATRON REPARTIDOR, no escaparate: 745 productos y 23 hijas. El trabajo
 * de esta plantilla no es ensenar catalogo (nadie pagina 71 veces), es
 * repartir al comprador segun su pregunta: medida, seguridad, material o
 * precio. El loop de productos es el fondo, no el protagonista.
 *
 * Wireframe 2026-08-01 (prefijo pldu-). Datos verificados ese dia tras
 * `wp term recount product_cat`. Los slugs de tallas NO siguen un patron
 * unico (unos llevan "de" y otros no): lista literal, no concatenar.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el schema lo pone Rank Math/Archivo 2 parseando este HTML);
 * cifras de catalogo redondeadas a la baja (las exactas caducan).
 * @deploy 2026-08-18.2 (redeliver via diff-mode)
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_platos_ducha_contenido_superior() {
    // En una URL de filtro CON regla SEO propia (p.ej. /plt-textura-marmol/)
    // solo se pintan hero, filtro y listado. Los bloques repartidores son de
    // la madre: clonarlos ahi duplicaria su contenido palabra por palabra en
    // una URL indexable distinta y la pondria a competir consigo misma.
    // El resto de URLs de filtro (sin regla, en noindex) no cambian.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO (imagen del paso 3 del plan, subida a uploads el 1-ago) -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-blanco-textura-pizarra-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <span>Platos de ducha</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <!-- Subtitulo de la MADRE: sus cifras solo son ciertas en la madre.
                 En un filtro (5 platos desde 257,90) mentiria, asi que no se pinta. -->
            <p>M&aacute;s de 700 modelos desde 120,90&nbsp;&euro; +IVA. Resina, antideslizantes C3 y sin escal&oacute;n, con anchos de 70 a 130&nbsp;cm y largos hasta 230.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. MEDIDAS - EL BLOQUE PROTAGONISTA (la pregunta n.1 del comprador: cabe o no cabe) -->
    <section class="pldu-sizes-section adrihosan-full-width-block">
        <div class="pldu-sizes-wrapper">
            <h2>&iquest;Qu&eacute; medida necesitas?</h2>
            <p class="pldu-sizes-sub">Las 28 medidas m&aacute;s pedidas tienen su propia p&aacute;gina. Si la tuya no est&aacute;, usa el filtro de largo y ancho de aqu&iacute; abajo.</p>
            <div class="pldu-sizes-grid">
                <?php /* 28 medidas con pagina propia: 7 categorias + 21 filtros con regla SEO.
                         Recuentos verificados contra pa_medida-plato en BD el 31-ago-2026, el
                         mismo dia en que se publicaron 16 filtros nuevos (tandas 1-3). Van
                         ordenadas por largo y luego ancho: el comprador busca por su hueco.
                         Si se toca el catalogo, refrescar los recuentos. */ ?>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-70x70/" class="pldu-size-btn"><span class="pldu-size-num">70&times;70</span><span class="pldu-size-count">23 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-80x80/" class="pldu-size-btn"><span class="pldu-size-num">80&times;80</span><span class="pldu-size-count">29 modelos</span></a>
                <?php /* OJO: la etiqueta va 80x90 aunque el slug y el termino sean 90x80, y por
                         eso el boton se coloca aqui, detras del 80x80. No es una errata: en GSC
                         (12 meses) "plato de ducha 80x90" suma ~930 impresiones y 8 clics, y
                         "90x80" 196 impresiones y CERO clics. Manda la consulta, no la
                         coherencia con el slug. El H1 y el title de la regla SEO tambien dicen
                         80x90, asi que van alineados. */ ?>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-90x80/" class="pldu-size-btn"><span class="pldu-size-num">80&times;90</span><span class="pldu-size-count">26 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-90x70/" class="pldu-size-btn"><span class="pldu-size-num">90&times;70</span><span class="pldu-size-count">28 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-90x90/" class="pldu-size-btn"><span class="pldu-size-num">90&times;90</span><span class="pldu-size-count">30 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-100x70/" class="pldu-size-btn"><span class="pldu-size-num">100&times;70</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-100x80/" class="pldu-size-btn"><span class="pldu-size-num">100&times;80</span><span class="pldu-size-count">37 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-110x70/" class="pldu-size-btn"><span class="pldu-size-num">110&times;70</span><span class="pldu-size-count">29 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-110x80/" class="pldu-size-btn"><span class="pldu-size-num">110&times;80</span><span class="pldu-size-count">29 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-110x90/" class="pldu-size-btn"><span class="pldu-size-num">110&times;90</span><span class="pldu-size-count">29 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/" class="pldu-size-btn"><span class="pldu-size-num">120&times;70</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x80/" class="pldu-size-btn"><span class="pldu-size-num">120&times;80</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x90/" class="pldu-size-btn"><span class="pldu-size-num">120&times;90</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-130x70/" class="pldu-size-btn"><span class="pldu-size-num">130&times;70</span><span class="pldu-size-count">29 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-130x80/" class="pldu-size-btn"><span class="pldu-size-num">130&times;80</span><span class="pldu-size-count">11 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-140x70/" class="pldu-size-btn"><span class="pldu-size-num">140&times;70</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-140x80/" class="pldu-size-btn"><span class="pldu-size-num">140&times;80</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-150x70/" class="pldu-size-btn"><span class="pldu-size-num">150&times;70</span><span class="pldu-size-count">32 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-150x80/" class="pldu-size-btn"><span class="pldu-size-num">150&times;80</span><span class="pldu-size-count">32 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-160x70/" class="pldu-size-btn"><span class="pldu-size-num">160&times;70</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-160x80/" class="pldu-size-btn"><span class="pldu-size-num">160&times;80</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-160x100/" class="pldu-size-btn"><span class="pldu-size-num">160&times;100</span><span class="pldu-size-count">16 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-170x70/" class="pldu-size-btn"><span class="pldu-size-num">170&times;70</span><span class="pldu-size-count">29 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-170x80/" class="pldu-size-btn"><span class="pldu-size-num">170&times;80</span><span class="pldu-size-count">29 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-180x70/" class="pldu-size-btn"><span class="pldu-size-num">180&times;70</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-180x80/" class="pldu-size-btn"><span class="pldu-size-num">180&times;80</span><span class="pldu-size-count">38 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-180x100/" class="pldu-size-btn"><span class="pldu-size-num">180&times;100</span><span class="pldu-size-count">17 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-200x80/" class="pldu-size-btn"><span class="pldu-size-num">200&times;80</span><span class="pldu-size-count">37 modelos</span></a>
            </div>
            <div class="pldu-sizes-exits">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/" class="pldu-exit-card">
                    <span class="pldu-exit-title">Platos de ducha grandes</span>
                    <span class="pldu-exit-desc">Hasta 230&times;130&nbsp;cm &middot; 375 modelos</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-pequeno/" class="pldu-exit-card">
                    <span class="pldu-exit-title">Platos de ducha peque&ntilde;os</span>
                    <span class="pldu-exit-desc">Hasta 130&times;90&nbsp;cm &middot; 273 modelos</span>
                </a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloque 2 ?>

    <!-- 3. FILTRO FE PRO (conjunto 429707: Largo + Ancho deslizadores, Textura casillas) -->
    <!-- SIEMPRE visible, tambien en filtro: es como el usuario afina o deshace. -->
    <!-- CRITICO: sin este bloque el filtro no existe para el usuario. Sticky en escritorio (CSS). -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 4. PARA QUIEN ES (la familia de hijas mas fuerte del silo) -->
    <section class="pldu-who-section adrihosan-full-width-block">
        <div class="pldu-who-wrapper">
            <h2>&iquest;Para qui&eacute;n es la ducha?</h2>
            <div class="pldu-who-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/" class="pldu-who-card">
                    <span class="pldu-who-icon">&#9855;</span>
                    <h3>Duchas adaptadas</h3>
                    <p>A ras de suelo y con acceso f&aacute;cil para silla o asiento de ducha.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-mayores/" class="pldu-who-card">
                    <span class="pldu-who-icon">&#129730;</span>
                    <h3>Personas mayores</h3>
                    <p>Sin escal&oacute;n que salvar y con superficie que agarra el pie mojado.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-antideslizantes/" class="pldu-who-card">
                    <span class="pldu-who-icon">&#9989;</span>
                    <h3>Antideslizantes C3</h3>
                    <p>M&aacute;s de 400 modelos con la clase que exige la normativa en zona de ducha.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. DE QUE MATERIAL -->
    <section class="pldu-material-section adrihosan-full-width-block">
        <div class="pldu-material-wrapper">
            <h2>&iquest;De qu&eacute; est&aacute; hecho un plato de ducha?</h2>
            <div class="pldu-material-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/" class="pldu-material-card">
                    <h3>Resina de poliuretano</h3>
                    <p>La familia mayoritaria: resistente al impacto, se recorta en obra y colorea en masa.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/" class="pldu-material-card">
                    <h3>Poli&eacute;ster con gel coat</h3>
                    <p>El gel coat es el recubrimiento exterior que da el acabado; la carga mineral aporta cuerpo y peso.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-solid-surface/" class="pldu-material-card pldu-material-premium">
                    <span class="pldu-premium-tag">Gama alta</span>
                    <h3>Solid Surface</h3>
                    <p>Tacto piedra y acabado sedoso. Una selecci&oacute;n corta de 8 piezas, no una opci&oacute;n m&aacute;s.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 5-bis. QUE ACABADO (31-ago-2026). La textura es lo que mas se elige y lo
         que mas se vende: la pizarra sola es el 55 % del importe del silo (19 de
         33 uds, 5.560 EUR, ERP ene-ago 2026) y su categoria no estaba enlazada
         desde aqui, con 4 impresiones y 0 sesiones en 12 meses. Las cuatro URLs
         verificadas 200 el 31-ago. -->
    <section class="pldu-finish-section adrihosan-full-width-block">
        <div class="pldu-finish-wrapper">
            <h2>&iquest;Qu&eacute; acabado quieres?</h2>
            <p class="pldu-finish-lead">La textura es lo primero que se ve y lo que decide la mayor&iacute;a de las compras.</p>
            <div class="pldu-finish-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-pizarra/" class="pldu-finish-card pldu-finish-main">
                    <h3>Textura pizarra</h3>
                    <p>El acabado de referencia: 692 platos en 31 colores y 121 medidas, desde 120,90 &euro; +IVA.</p>
                    <span class="pldu-finish-count">692 platos</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-decorados/" class="pldu-finish-card">
                    <h3>Decorados</h3>
                    <p>Madera, m&aacute;rmol, terrazo, hidr&aacute;ulico, mosaico y granito, para que no parezca un plato.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-enmarcados/" class="pldu-finish-card">
                    <h3>Enmarcados</h3>
                    <p>Con marco perimetral, incluida la serie Silex de Fiora.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/platos-de-ducha-de-poliuretano-base/" class="pldu-finish-card">
                    <h3>Bet&oacute;n</h3>
                    <p>Aspecto cemento continuo, en poliuretano.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. FRANJA DE PRECIO (sobria, sin tarjetas de oferta) -->
    <section class="pldu-price-band adrihosan-full-width-block">
        <div class="pldu-price-wrapper">
            <p class="pldu-price-line">Platos de ducha <strong>desde 120,90&nbsp;&euro; +IVA</strong></p>
            <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="pldu-price-link">Ver la selecci&oacute;n de platos de ducha baratos &rarr;</a>
        </div>
    </section>
    <?php endif; // fin bloques 4, 5 y 6 ?>

    <!-- 7. TITULO CATALOGO + LISTADO (el loop es el fondo de armario, no el escaparate) -->
    <!-- En filtro el encabezado se neutraliza: "Catalogo completo" sobre 5 platos
         de marmol es falso, y las cifras de la madre no valen aqui. -->
    <div class="product-loop-header">
        <?php if ( $es_filtro ) : ?>
        <h2 id="pldu-catalogo">Modelos disponibles</h2>
        <?php else : ?>
        <h2 id="pldu-catalogo">Cat&aacute;logo completo de platos de ducha</h2>
        <p>M&aacute;s de 700 modelos. Usa el filtro de medidas y textura para acotar.</p>
        <?php endif; ?>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_platos_ducha_contenido_inferior() {
    // Mismo criterio que en el bloque superior (ambito de funcion distinto).
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 8. MARCAS (tres enlaces, nada mas) -->
    <section class="pldu-brands-section adrihosan-full-width-block">
        <div class="pldu-brands-wrapper">
            <h2>Marcas de platos de ducha</h2>
            <div class="pldu-brands-row">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/duplach-platos-de-ducha/" class="pldu-brand-link">Duplach</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/fiora-platos-de-ducha/" class="pldu-brand-link">Fiora</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-acquabella/" class="pldu-brand-link">Acquabella</a>
            </div>
        </div>
    </section>

    <!-- 9. FAQ (9 preguntas, HTML visible SIN JSON-LD - el schema lo pone
         Rank Math/Archivo 2 parseando este mismo HTML; los textos deben
         coincidir palabra por palabra con descripcion-86-v2.html) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre platos de ducha</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medidas de plato de ducha hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los anchos van de 70 a 130 cm &mdash;70, 80 y 90 son los m&aacute;s pedidos&mdash; y los largos llegan hasta 230 cm. Las medidas m&aacute;s habituales tienen categor&iacute;a propia: 70x70, 80x80, 90x90, 120x70, 140x70, 150x70, 160x70, 170x80 y 180x70. En total hay m&aacute;s de 700 modelos publicados.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede recortar un plato de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los platos de resina se recortan en obra con una radial y un disco de diamante, que es lo que permite ajustarlos a un hueco que no es medida est&aacute;ndar. Consulta antes las instrucciones del fabricante del modelo que elijas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; plato de ducha es mejor para una persona mayor?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Uno a ras de suelo, sin escal&oacute;n que salvar, y con superficie antideslizante. En el cat&aacute;logo hay m&aacute;s de 400 platos antideslizantes, y selecciones espec&iacute;ficas para duchas adaptadas y para personas mayores. Tambi&eacute;n disponemos de complementos tipo rampa para facilitar el acceso.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los precios arrancan en 120,90 &euro; +IVA y suben hasta el entorno de los 1.500 &euro; en las series de Solid Surface a medida. La diferencia la marcan la medida, la serie y el acabado. La selecci&oacute;n m&aacute;s econ&oacute;mica est&aacute; en la categor&iacute;a de platos de ducha baratos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los platos de ducha son antideslizantes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>M&aacute;s de 400 modelos del cat&aacute;logo llevan clasificaci&oacute;n antideslizante C3, que es la que exige la normativa para zona de ducha con pie descalzo. Para locales de uso p&uacute;blico podemos suministrar el certificado oficial.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre resina, carga mineral y gel coat?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No son materiales que compitan entre s&iacute;. Dentro de la resina hay dos familias: poliuretano, la mayoritaria y la m&aacute;s resistente al impacto, y poli&eacute;ster con gel coat, donde el gel coat es el recubrimiento exterior que da el acabado. La carga mineral es el relleno que da cuerpo y peso. Todas van coloreadas en masa, no pintadas en superficie.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo sustituir la ba&ntilde;era por un plato de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es el cambio m&aacute;s habitual. Mide el hueco de pared a pared antes de elegir el plato, y ten en cuenta que disponemos de paneles a medida para tapar el hueco que deja la ba&ntilde;era retirada.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El plato de ducha lleva la pendiente hecha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, la pendiente viene preformada en el propio plato. Por eso el soporte sobre el que se asienta debe quedar perfectamente nivelado: si el plato queda descuadrado, el desag&uuml;e no evac&uacute;a como debe.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Incluye la v&aacute;lvula de desag&uuml;e?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Todos los platos de ducha del cat&aacute;logo llevan la v&aacute;lvula de desag&uuml;e incluida. En las series enmarcadas es de acero inoxidable y puede suministrarse en el mismo color del plato.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 10. GUIAS DEL BLOG -->
    <section class="pldu-guides-section adrihosan-full-width-block">
        <div class="pldu-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato de ducha</h2>
            <div class="pldu-guides-grid">
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="pldu-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-es-el-mejor-material/" class="pldu-guide-link">Cu&aacute;l es el mejor material</a>
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="pldu-guide-link">C&oacute;mo instalar un plato de ducha</a>
                <a href="https://www.adrihosan.com/pegar-plato-de-ducha-de-resina/" class="pldu-guide-link">Con qu&eacute; pegar un plato de resina</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 8, 9 y 10 ?>

    <!-- 11. CONTACTO RICARDO (bloque comun; anadido a peticion de Ricardo 1-ago) -->
    <!-- SIEMPRE visible: no es contenido de catalogo, es atencion al cliente. -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con la medida o el material?<span>Soy Ricardo, te ayudo a elegir tu plato de ducha.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20plato%20de%20ducha" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">&#128221;</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
