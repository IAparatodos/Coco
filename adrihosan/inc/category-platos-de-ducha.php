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
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_platos_ducha_contenido_superior() {
    ?>
    <!-- 1. HERO -->
    <!-- TODO: sustituir el fondo corporativo por la imagen hero real cuando
         llegue (paso 3 del plan: genimg -> JPG < 200 KB -> OK de Ricardo).
         Basta cambiar el style por background-image: url('...'); -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <span>Platos de ducha</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha' ); ?></h1>
            <p>M&aacute;s de 700 modelos desde 120,90&nbsp;&euro; +IVA. Resina a medida, antideslizantes C3 y sin escal&oacute;n, con anchos de 70 a 130&nbsp;cm y largos hasta 230.</p>
        </div>
    </section>

    <!-- 2. MEDIDAS - EL BLOQUE PROTAGONISTA (la pregunta n.1 del comprador: cabe o no cabe) -->
    <section class="pldu-sizes-section adrihosan-full-width-block">
        <div class="pldu-sizes-wrapper">
            <h2>&iquest;Qu&eacute; medida necesitas?</h2>
            <p class="pldu-sizes-sub">Las medidas m&aacute;s pedidas tienen su propia p&aacute;gina. Si la tuya no est&aacute;, usa el filtro de largo y ancho de aqu&iacute; abajo.</p>
            <div class="pldu-sizes-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-70x70/" class="pldu-size-btn"><span class="pldu-size-num">70&times;70</span><span class="pldu-size-count">4 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-80x80/" class="pldu-size-btn"><span class="pldu-size-num">80&times;80</span><span class="pldu-size-count">12 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-90x90/" class="pldu-size-btn"><span class="pldu-size-num">90&times;90</span><span class="pldu-size-count">11 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/" class="pldu-size-btn"><span class="pldu-size-num">120&times;70</span><span class="pldu-size-count">12 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-140x70/" class="pldu-size-btn"><span class="pldu-size-num">140&times;70</span><span class="pldu-size-count">11 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-150x70/" class="pldu-size-btn"><span class="pldu-size-num">150&times;70</span><span class="pldu-size-count">9 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-160x70/" class="pldu-size-btn"><span class="pldu-size-num">160&times;70</span><span class="pldu-size-count">13 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-170x80/" class="pldu-size-btn"><span class="pldu-size-num">170&times;80</span><span class="pldu-size-count">6 modelos</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-180x70/" class="pldu-size-btn"><span class="pldu-size-num">180&times;70</span><span class="pldu-size-count">14 modelos</span></a>
            </div>
            <div class="pldu-sizes-exits">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/" class="pldu-exit-card">
                    <span class="pldu-exit-title">Platos de ducha grandes</span>
                    <span class="pldu-exit-desc">Hasta 230&times;130&nbsp;cm &middot; 237 modelos</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-pequeno/" class="pldu-exit-card">
                    <span class="pldu-exit-title">Platos de ducha peque&ntilde;os</span>
                    <span class="pldu-exit-desc">Para ba&ntilde;os justos de espacio &middot; 67 modelos</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. FILTRO FE PRO (conjunto 429707: Largo + Ancho deslizadores, Textura casillas) -->
    <!-- CRITICO: sin este bloque el filtro no existe para el usuario. Sticky en escritorio (CSS). -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

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
                    <p>Tacto piedra y fabricaci&oacute;n a medida. Una selecci&oacute;n corta de 8 piezas, no una opci&oacute;n m&aacute;s.</p>
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

    <!-- 7. TITULO CATALOGO + LISTADO (el loop es el fondo de armario, no el escaparate) -->
    <div class="product-loop-header">
        <h2 id="pldu-catalogo">Cat&aacute;logo completo de platos de ducha</h2>
        <p>M&aacute;s de 700 modelos. Usa el filtro de medidas y textura para acotar.</p>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_platos_ducha_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

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
    <?php
}
