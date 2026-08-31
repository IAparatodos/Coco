<?php
/**
 * Categoria 74 - Columnas de ducha (hoja de PRODUCTO, hija de 71 griferia)
 *
 * LA PAGINA QUE FALTABA. Hasta el 21-ago-2026 esta categoria vivia en el slug
 * "columnas-hidromasaje" y su texto hablaba de hidromasaje en los seis
 * encabezados. Resultado medido en GSC: 6 impresiones en 90 dias. Mientras,
 * la ficha suelta de la columna Belgica acaparaba 140.460 impresiones al ano
 * con 49 clics respondiendo con UN modelo a una consulta de catalogo.
 *
 * Datos verificados en BD el 21-ago-2026 (caducan si se toca el catalogo):
 * 100 productos publicados = 67 columnas + 33 conjuntos empotrados y barras.
 * Precio desde 113,90 EUR +IVA (Belgica inox) hasta 809,60. Acabados: cromo 28,
 * negro mate 22, blanco mate 13, acero inoxidable 10, negro oro rosa 5, gris
 * champagne 5, black gun metal 5, niquel cepillado 2. Instalacion: barra 52,
 * ducha 34, empotrado 34. Tipo: monomando 45, termostatico 11.
 *
 * Angulo (Fase 1, OK de Ricardo el 21-ago-2026): se elige por COMO se instala
 * y con QUE acabado. La demanda de GSC a 12 meses lo dice: negro es la variante
 * n.1 con 6.650 impresiones, acero inoxidable 1.828, y muy por detras el eje
 * monomando/termostatica con 1.742. Precio y marca NO son ejes de busqueda
 * aqui (359 y 24 impresiones): no se construye la pagina sobre ellos.
 *
 * Buyer persona: particular que esta cambiando la banera por plato de ducha y
 * le falta la griferia; y el que busca acabado negro para un bano moderno. El
 * comprador de obra entra por WhatsApp: CTA presente, sin promesas de plazo.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el schema lo pone Rank Math en Fase 3 con estos textos EXACTOS);
 * NUNCA prometer stock ni plazos de entrega; no enlazar a "columnas de bano"
 * (term 103, otra intencion, ya posicionada con CTR real: no se caniboliza).
 *
 * FILTROS - ESTADO TRANSITORIO. Decision de Ricardo (21-ago-2026): cuando se
 * trabaje el silo de griferia ENTERO se usara FilterEverything y se descartara
 * el filtro estandar de la plantilla. Hoy todavia no existe filter-set para
 * este silo (hay 21 en la web y ninguno lo cubre), asi que esta pagina
 * conserva de momento los filtros legacy del tema, que ya funcionan y exponen
 * justo las cuatro facetas utiles (Serie, Instalacion del grifo, Acabado
 * grifo, Tipo). Por eso NO se llama aqui a adrihosan_ocultar_filtros_legacy:
 * ocultarlos sin sustituto dejaria la pagina sin filtro ninguno.
 *
 * MIGRACION A FILTEREVERYTHING (pendiente, con el silo): crear el filter-set
 * del silo de griferia con las facetas pa_insta-grifo, pa_acabado-grifo y
 * pa_tipo-grifo; sustituir el bloque marcado mas abajo por el [fe_widget] con
 * su ID; y anadir add_action('wp_head','adrihosan_ocultar_filtros_legacy',5)
 * en adrihosan_setup_columnas_ducha_cpu_fix(). Los chips de acceso rapido de
 * la seccion 2 siguen valiendo tal cual: son URLs de filtro, no widget.
 *
 * Las URLs de filtro de los chips estan verificadas en vivo el 21-ago-2026.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_columnas_ducha_contenido_superior() {
    // En una URL de filtro CON regla SEO propia solo se pintan hero y listado.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO. Imagen: columna Valencia negro mate (el acabado mas buscado del
         cluster, 6.650 impresiones/ano) compuesta en ambiente con Gemini Image
         a partir de la FOTO REAL del producto, segun la regla de Ricardo del
         24-jul-2026: la silueta del producto protagonista tiene que ser la de
         un producto real del catalogo, nunca un diseno inventado. Media 430640. -->
    <section class="hero-section-container adrihosan-full-width-block cdd-hero" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/columna-de-ducha-negro-mate-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/griferia/">Grifer&iacute;a</a> &gt;
                <span>Columnas de ducha</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Columnas de ducha' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>67 columnas y 33 conjuntos empotrados y barras, desde 113,90&nbsp;&euro; +IVA. Elige por c&oacute;mo la vas a instalar y con qu&eacute; acabado.</p>
            <div class="hero-buttons">
                <a href="#cdd-catalogo" class="hero-btn primary">Ver cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20una%20columna%20de%20ducha" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. LOS DOS MOVIMIENTOS DE LA DECISION: instalacion y acabado.
         Es la seccion protagonista y va antes que nada: el orden sale de la
         demanda real de GSC a 12 meses, no de una preferencia estetica. -->
    <section class="cdd-choose-section adrihosan-full-width-block">
        <div class="cdd-choose-wrapper">

            <h2>Elige tu columna de ducha en dos pasos</h2>
            <p class="cdd-choose-sub">Primero c&oacute;mo se instala, que es lo que condiciona la obra. Despu&eacute;s el acabado, que es lo que decide el aspecto del ba&ntilde;o.</p>

            <h3 class="cdd-step-title"><span class="cdd-step-num">1</span> &iquest;C&oacute;mo se instala?</h3>
            <div class="cdd-choose-grid">
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?insta-grifo=barra-de-ducha" class="cdd-choose-card">
                    <span class="cdd-card-title">Barra de ducha</span>
                    <span class="cdd-card-count">52 modelos</span>
                    <span class="cdd-card-desc">La m&aacute;s sencilla: se sujeta a la pared y se cambia sin tocar la fontaner&iacute;a existente.</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?insta-grifo=grifos-de-ducha" class="cdd-choose-card">
                    <span class="cdd-card-title">Columna vista</span>
                    <span class="cdd-card-count">34 modelos</span>
                    <span class="cdd-card-desc">Va sobre la pared con su propio grifo. El recambio natural de una ducha antigua.</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?insta-grifo=ducha-empotrado" class="cdd-choose-card">
                    <span class="cdd-card-title">Empotrada</span>
                    <span class="cdd-card-count">34 modelos</span>
                    <span class="cdd-card-desc">El mecanismo queda dentro del tabique. Pide obra, y a cambio solo se ve el rociador.</span>
                </a>
            </div>

            <h3 class="cdd-step-title"><span class="cdd-step-num">2</span> &iquest;En qu&eacute; acabado?</h3>
            <div class="cdd-finish-grid">
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=cromo" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-cromo"></span>Cromo <em>28</em></a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=negro-mate" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-negro"></span>Negro mate <em>22</em></a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=blanco-mate" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-blanco"></span>Blanco mate <em>13</em></a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=acero-inoxidable" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-inox"></span>Acero inoxidable <em>10</em></a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=black-gun-metal" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-gun"></span>Black gun metal <em>5</em></a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=gris-champagne" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-champagne"></span>Gris champagne <em>5</em></a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=negro-oro-rosa-2" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-ororosa"></span>Negro y oro rosa <em>5</em></a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?acabado-grifo=niquel-cepillado" class="cdd-finish-chip"><span class="cdd-dot cdd-dot-niquel"></span>N&iacute;quel cepillado <em>2</em></a>
            </div>

        </div>
    </section>

    <!-- 3. STORYTELLING -->
    <section class="cdd-story-section adrihosan-full-width-block">
        <div class="cdd-story-wrapper">
            <h2>Qu&eacute; cambia entre una columna de ducha y otra</h2>
            <p>Una <strong>columna de ducha</strong> re&uacute;ne en una sola pieza el rociador superior, el tel&eacute;fono de mano y el grifo que los gobierna. Lo que de verdad separa unos modelos de otros no es el dise&ntilde;o, es d&oacute;nde acaba la fontaner&iacute;a: si la instalaci&oacute;n es <em>vista</em>, todo queda sobre el alicatado y el cambio se hace en una ma&ntilde;ana; si es <em>empotrada</em>, el mecanismo va dentro del tabique y hay que contar con obra. En medio est&aacute; la barra de ducha, que es la opci&oacute;n de recambio m&aacute;s directa cuando ya tienes un grifo que funciona. Si a&uacute;n est&aacute;s montando el ba&ntilde;o entero, empieza por el <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">plato de ducha</a> y la <a href="https://www.adrihosan.com/categoria-producto/mamparas/">mampara</a>, que son los que fijan las medidas; la columna es lo &uacute;ltimo que se elige y lo primero que se ve.</p>
        </div>
    </section>

    <!-- 4. FRANJA DE PRECIO + CTA 1 -->
    <section class="cdd-price-band adrihosan-full-width-block">
        <div class="cdd-price-wrapper">
            <p class="cdd-price-line">Columnas de ducha <strong>desde 113,90&nbsp;&euro; +IVA</strong> &middot; 100 modelos entre columnas, conjuntos empotrados y barras</p>
            <div class="cdd-price-actions">
                <a href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/" class="cdd-price-link">Ver toda la grifer&iacute;a de ba&ntilde;o &rarr;</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20una%20columna%20de%20ducha" class="cdd-whatsapp-btn">Pregunta por WhatsApp</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 2, 3 y 4 ?>

    <!-- 5. FILTRO. TRANSITORIO: hoy lo pinta el filtro estandar del tema, mas
         abajo en el flujo de WooCommerce. Cuando se monte el silo de griferia
         con FilterEverything, el widget va AQUI y se sustituye este bloque:

         <div class="cdd-filter-shell">
             <div class="filter-container-master"><?php // echo do_shortcode( '[fe_widget id="<ID_DEL_SET_DE_GRIFERIA>"]' ); ?></div>
         </div>
    -->

    <!-- 6. TITULO CATALOGO + LISTADO -->
    <div class="product-loop-header">
        <?php if ( $es_filtro ) : ?>
        <h2 id="cdd-catalogo">Modelos disponibles</h2>
        <?php else : ?>
        <h2 id="cdd-catalogo">Cat&aacute;logo de columnas de ducha</h2>
        <p>100 modelos. Usa los filtros de instalaci&oacute;n, acabado y tipo para acotar.</p>
        <?php endif; ?>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_columnas_ducha_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 7. COMPARATIVA monomando vs termostatica. Es LA decision que discute
         toda la SERP de "columna de ducha" (Leroy Merlin, DeDucha, Grizasa...)
         y que nadie resuelve en una tabla. Cifras de presion y temperatura:
         valores generales del sector, no especificacion de un fabricante
         concreto; por eso se dan como orientacion y no como dato de ficha. -->
    <section class="cdd-compare-section adrihosan-full-width-block">
        <div class="cdd-compare-wrapper">
            <h2>Columna de ducha monomando o termost&aacute;tica: cu&aacute;l te conviene</h2>
            <div class="cdd-table-scroll">
                <table class="cdd-compare-table">
                    <thead>
                        <tr><th></th><th>Monomando</th><th>Termost&aacute;tica</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Modelos en Adrihosan</td><td><strong>45</strong></td><td><strong>11</strong></td></tr>
                        <tr><td>C&oacute;mo se maneja</td><td>Una sola maneta: el giro da la temperatura y la apertura el caudal</td><td>Dos mandos separados: uno fija la temperatura y el otro el caudal</td></tr>
                        <tr><td>Temperatura</td><td>Se busca a mano cada vez</td><td>Se deja fijada y se recupera igual en cada ducha</td></tr>
                        <tr><td>Si alguien abre otro grifo</td><td>La temperatura se resiente</td><td>El cartucho la compensa</td></tr>
                        <tr><td>Seguridad</td><td>Sin tope</td><td>Tope de seguridad en torno a los 38&nbsp;&deg;C</td></tr>
                        <tr><td>Presi&oacute;n de agua</td><td>Tolerante con presiones bajas</td><td>Pide una presi&oacute;n estable, del orden de 3&nbsp;bar</td></tr>
                        <tr><td>Precio</td><td>La entrada del cat&aacute;logo</td><td>Por encima, con m&aacute;s prestaciones</td></tr>
                        <tr><td>Le encaja a</td><td>Ba&ntilde;o de uso normal, o vivienda con presi&oacute;n justa</td><td>Casas con ni&ntilde;os o mayores, y ba&ntilde;os de uso intenso</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="cdd-compare-actions">
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?tipo-grifo=monomando" class="cdd-compare-btn">Ver las 45 monomando</a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/columnas-de-ducha/?tipo-grifo=termostatico" class="cdd-compare-btn">Ver las 11 termost&aacute;ticas</a>
            </div>
        </div>
    </section>

    <!-- 8. ASESORAMIENTO: 4 pasos. Sin promesas de stock ni de plazo. -->
    <section class="cdd-steps-section adrihosan-full-width-block">
        <div class="cdd-steps-wrapper">
            <h2>C&oacute;mo acertar con tu columna de ducha</h2>
            <div class="cdd-steps-grid">
                <div class="cdd-step"><span class="cdd-step-badge">1</span><p>Mira d&oacute;nde tienes hoy las tomas de agua. Si est&aacute;n a la vista, te vale una columna vista o una barra; si quieres empotrada, hay que abrir el tabique.</p></div>
                <div class="cdd-step"><span class="cdd-step-badge">2</span><p>Mide la altura libre desde la toma hasta el techo. Las columnas suelen ser regulables, pero conviene saber con cu&aacute;nto cuentas.</p></div>
                <div class="cdd-step"><span class="cdd-step-badge">3</span><p>Decide monomando o termost&aacute;tica con la tabla de arriba, y despu&eacute;s el acabado.</p></div>
                <div class="cdd-step"><span class="cdd-step-badge">4</span><p>&iquest;Dudas con tu caso? Mand&aacute;nos una foto de la ducha por WhatsApp y te decimos qu&eacute; te encaja.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. FAQ (9 preguntas construidas sobre los subtemas que repite la SERP
         de "columna de ducha" y sobre datos propios de catalogo; HTML visible
         SIN JSON-LD, el schema lo pone Rank Math en la Fase 3 con estos
         textos EXACTOS) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre columnas de ducha</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es mejor, una columna de ducha monomando o termost&aacute;tica?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende de la casa. La termost&aacute;tica mantiene la temperatura aunque alguien abra otro grifo y trae tope de seguridad en torno a los 38&nbsp;&deg;C, asi que es la opci&oacute;n l&oacute;gica con ni&ntilde;os o mayores. La monomando es m&aacute;s sencilla, m&aacute;s econ&oacute;mica y aguanta mejor las presiones justas. En cat&aacute;logo tenemos 45 monomando y 11 termost&aacute;ticas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; presi&oacute;n de agua necesita una columna de ducha termost&aacute;tica?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Una presi&oacute;n estable del orden de 3&nbsp;bar. Por debajo de ah&iacute; el cartucho termost&aacute;tico no compensa bien y la ducha sale floja o con la temperatura bailando. Si en tu vivienda la presi&oacute;n es baja, una columna monomando te dar&aacute; menos problemas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo cambiar la columna de ducha sin obra?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, si eliges una columna vista o una barra de ducha: se sujetan sobre el alicatado y aprovechan las tomas que ya tienes. La que exige obra es la empotrada, porque el mecanismo va dentro del tabique. De los 100 modelos de esta p&aacute;gina, 86 son de instalaci&oacute;n vista o barra.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre una columna de ducha y una barra de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La columna lleva rociador superior fijo adem&aacute;s del tel&eacute;fono de mano, y en muchos modelos su propio grifo. La barra es s&oacute;lo el rail vertical por el que sube y baja el tel&eacute;fono, y se conecta al grifo que ya tienes. La barra es el recambio r&aacute;pido; la columna, el cambio de verdad.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; incluye una columna de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Lo habitual es rociador superior, tel&eacute;fono de mano con su flexo y el soporte o rail. Seg&uacute;n el modelo lleva tambi&eacute;n el grifo incorporado. Ojo con los conjuntos empotrados: algunos se venden sin grifo porque el mecanismo se elige aparte, y lo indicamos en el t&iacute;tulo de la ficha.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;A qu&eacute; altura se instala una columna de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El rociador superior suele quedar en torno a los 200-210&nbsp;cm desde el plato, de modo que quede por encima de la cabeza del m&aacute;s alto de la casa. La mayor&iacute;a de columnas son regulables en altura, as&iacute; que lo importante es medir el espacio libre entre la toma de agua y el techo antes de elegir.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; acabados hay disponibles?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Ocho: cromo (28 modelos), negro mate (22), blanco mate (13), acero inoxidable (10), black gun metal (5), gris champagne (5), negro con oro rosa (5) y n&iacute;quel cepillado (2). El negro mate es con diferencia el m&aacute;s pedido para ba&ntilde;os actuales.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta una columna de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan arrancan en 113,90&nbsp;&euro; +IVA y llegan hasta 809,60&nbsp;&euro; +IVA en los modelos con m&aacute;s prestaciones. La horquilla la marcan sobre todo el tipo de grifo (monomando o termost&aacute;tico) y el acabado.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los precios incluyen IVA?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Los precios de esta p&aacute;gina se muestran sin IVA, consultados el 21 de agosto de 2026. En la ficha de cada columna y en el carrito ver&aacute;s el importe con impuestos antes de confirmar el pedido.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS. URLs verificadas en BD el 21-ago-2026.
         NO se enlaza a columnas de bano (term 103): es otra intencion, ya
         posicionada con CTR real, y enlazarla desde aqui las confundiria. -->
    <section class="cdd-related-section adrihosan-full-width-block">
        <div class="cdd-related-wrapper">
            <h2>Completa tu ducha</h2>
            <div class="cdd-related-row">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="cdd-related-link">Platos de ducha</a>
                <a href="https://www.adrihosan.com/categoria-producto/mamparas/" class="cdd-related-link">Mamparas de ba&ntilde;o</a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/griferia-bano/" class="cdd-related-link">Grifer&iacute;a de ba&ntilde;o</a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/accesorios-hidromasaje/" class="cdd-related-link">Accesorios de ducha</a>
                <a href="https://www.adrihosan.com/categoria-producto/accesorios-de-bano/" class="cdd-related-link">Accesorios de ba&ntilde;o</a>
                <a href="https://www.adrihosan.com/categoria-producto/griferia/" class="cdd-related-link">Toda la grifer&iacute;a</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 7-10 ?>

    <!-- 11. CONTACTO RICARDO (bloque comun; SIEMPRE visible) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en grifer&iacute;a de ba&ntilde;o de Adrihosan">
                <div>
                    <h2>&iquest;No sabes si te entra empotrada?<span>Soy Ricardo. M&aacute;ndame una foto de tu ducha y te digo qu&eacute; columna te encaja.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20una%20columna%20de%20ducha" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">&#128221;</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
