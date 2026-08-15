<?php
/**
 * Categoria 2905 - Platos de ducha baratos (hija de 86)
 *
 * HOJA DE INTENCION DE PRECIO. No es una categoria de tipo, ni de material, ni
 * de marca: el unico eje es el PRECIO. Quien llega aqui no busca "que plato me
 * conviene", busca "cual me puedo permitir". Por eso el listado va ordenado de
 * menor a mayor y todo el contenido gira sobre lo mismo.
 *
 * Los demas ejes tienen su sitio y no se tocan aqui:
 *   tipos -> madre 86 · material -> resina · medidas -> hijas por talla ·
 *   marcas -> Duplach 2861, Fiora 2863, Acquabella 2887.
 *
 * Wireframe 2026-08-10. Datos verificados en BD ese dia: 198 platos de
 * 120,90 a 299,90 EUR +IVA, 68 por debajo de 200, 18 por debajo de 150, 113
 * antideslizantes de textura pizarra y 86 validos para ducha adaptada. Se
 * retiraron 155 platos de 300 EUR o mas (reversion en retirados-de-2905.md).
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (Rank Math lo genera desde el termino y los textos deben coincidir
 * palabra por palabra: se tocan los dos o ninguno); cifras de catalogo
 * redondeadas a la baja y precios "desde" exactos; ningun dato que no este
 * verificado en BD o en ficha del fabricante.
 *
 * OJO: Fiora NO tiene ningun plato en esta seleccion (su modelo mas barato son
 * 339,90 EUR). El texto que estaba publicado prometia "48 de Fiora" y era
 * falso. Aqui no se nombra ninguna marca por volumen.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_baratos_contenido_superior() {
    // Regla del PR #74: en una URL de filtro CON regla SEO propia solo se
    // pintan hero, filtro, listado y contacto.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO -->
    <!-- Imagen editorial (adjunto 429757, 1536x1024, 181 KB): plato de resina
         con textura pizarra a ras de suelo y desague lineal a la vista. El
         degradado lo pone el CSS, NUNCA horneado en el JPG.
         NO sustituir por un color de fondo: esta imagen es la definitiva. -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/platos-de-ducha-baratos-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Baratos</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha baratos' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>De resina, desde 120,90&nbsp;&euro; +IVA. Con 68 modelos por debajo de los 200&nbsp;&euro;.</p>
            <div class="hero-buttons">
                <a href="#catalogo-platos-baratos" class="hero-btn primary">Ver cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20economico" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. LAS CUATRO CIFRAS QUE DEFINEN LA SELECCION -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <p class="section-intro">Este es el tramo m&aacute;s ajustado del cat&aacute;logo: los que se quedan por debajo de los 300&nbsp;&euro;. No son restos de serie ni liquidaciones, es la gama de entrada, con stock y en las medidas de siempre.</p>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <h3>Desde 120,90&nbsp;&euro;</h3>
                    <p>El precio de partida, sin IVA. El m&aacute;s caro de esta selecci&oacute;n se queda en 299,90&nbsp;&euro;.</p>
                </div>
                <div class="ap-value-card">
                    <h3>68 por debajo de 200&nbsp;&euro;</h3>
                    <p>Y 18 no llegan a 150&nbsp;&euro;, que es donde aprieta de verdad un presupuesto.</p>
                </div>
                <div class="ap-value-card">
                    <h3>113 antideslizantes</h3>
                    <p>Textura de pizarra de serie. No es un extra que se pague aparte.</p>
                </div>
                <div class="ap-value-card">
                    <h3>86 para ducha adaptada</h3>
                    <p>A ras de suelo y sin escal&oacute;n. Los tienes todos en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/">platos para movilidad reducida</a>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. POR QUE SON MAS BARATOS (la pregunta de fondo de esta pagina) -->
    <section class="pbar-why-section adrihosan-full-width-block">
        <div class="pbar-why-wrapper">
            <h2>Por qu&eacute; son m&aacute;s baratos</h2>
            <p>Por el material y por c&oacute;mo se fabrica. Son platos de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/">resina de carga mineral</a>: se moldean y se ti&ntilde;en en masa, un proceso bastante m&aacute;s barato que esmaltar cer&aacute;mica pieza a pieza. Y no es material de segunda: es el mismo que montan platos de m&aacute;s de 1.000&nbsp;&euro; en este cat&aacute;logo. Lo que cambia de unos a otros es el acabado, el color y el formato, no de qu&eacute; est&aacute;n hechos.</p>
            <p>La otra ventaja es pr&aacute;ctica: la resina admite recortarse en obra, que es lo que salva un hueco que no viene en medida est&aacute;ndar. Mide siempre por el punto m&aacute;s estrecho del hueco y d&eacute;jate un cent&iacute;metro de holgura para el ajuste.</p>
        </div>
    </section>
    <?php endif; // fin bloques de la seleccion ?>

    <!-- 4. FILTRO FE PRO (conjunto 429707 heredado de la madre, mismo marcado).
         SIEMPRE visible, tambien en URL de filtro. -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <!-- 5. CATALOGO. El listado va ordenado por precio ascendente desde
         functions.php (pre_get_posts), igual que la cat 3795. -->
    <div class="product-loop-header">
        <h2 id="catalogo-platos-baratos">Cat&aacute;logo de platos de ducha baratos</h2>
        <p>190 modelos de resina entre 120,90 y 299,90&nbsp;&euro; +IVA, ordenados para que veas antes los de menor precio.</p>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_baratos_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 6. FAQ (9 preguntas, HTML visible SIN JSON-LD).
         El schema lo pone Rank Math desde el termino: estos textos y los del
         rank_math_schema_FAQPage deben coincidir palabra por palabra. Si se
         cambia uno, se cambia el otro. -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre platos de ducha baratos</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Por qu&eacute; son m&aacute;s baratos estos platos de ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Por el material y el proceso. Son de resina de carga mineral, que se moldea y se ti&ntilde;e en masa, bastante m&aacute;s barato que esmaltar cer&aacute;mica pieza a pieza. Es el mismo material que montan platos de m&aacute;s de 1.000&nbsp;&euro; del cat&aacute;logo: lo que cambia es el acabado, el color y el formato.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es el plato de ducha m&aacute;s barato?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El precio de partida son 120,90&nbsp;&euro; +IVA. Dentro de esta selecci&oacute;n hay 68 modelos por debajo de los 200&nbsp;&euro; y 18 que no llegan a 150&nbsp;&euro;.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un plato de ducha barato es de peor calidad?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No por ser barato. Todos los de esta selecci&oacute;n son de resina, el mismo material de los platos de gama alta. La diferencia est&aacute; en el acabado, en la carta de colores y en los formatos disponibles, no en de qu&eacute; est&aacute;n hechos ni en c&oacute;mo aguantan el uso diario.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hasta qu&eacute; precio llegan los de esta selecci&oacute;n?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Hasta 299,90&nbsp;&euro; +IVA. Ese es el corte: aqu&iacute; solo entran los platos que se quedan por debajo de los 300&nbsp;&euro;. Si buscas formatos mayores o acabados m&aacute;s trabajados, los tienes en el cat&aacute;logo general de platos de ducha.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden recortar a medida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. La resina se recorta en obra con radial y disco de diamante, que es lo que permite ajustar el plato a un hueco que no viene en medida est&aacute;ndar. Mide por el punto m&aacute;s estrecho del hueco y d&eacute;jate un cent&iacute;metro de holgura.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Llevan superficie antideslizante?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>113 de los modelos de esta selecci&oacute;n llevan superficie antideslizante con textura de pizarra, de serie. No es un extra que se pague aparte.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirven para una ducha adaptada?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, 86 de ellos. Van a ras de suelo, sin escal&oacute;n que salvar, que es lo que se necesita para entrar en la ducha con seguridad o con una silla.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medidas hay disponibles?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Las habituales de ba&ntilde;o: 70x70, 80x80 y 90x90 en cuadrado, y 120x70, 140x70, 150x70, 160x70, 170x80 y 180x70 en rectangular. Si tu hueco no encaja con ninguna, se recorta.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los precios incluyen IVA?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Todos los precios de esta p&aacute;gina se muestran sin IVA, consultados el 10 de agosto de 2026. En la ficha de cada plato y en el carrito ver&aacute;s el importe con impuestos antes de confirmar el pedido.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. GUIAS DEL BLOG (clases propias con prefijo pbar-) -->
    <section class="pbar-guides-section adrihosan-full-width-block">
        <div class="pbar-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato</h2>
            <div class="pbar-guides-grid">
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="pbar-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="pbar-guide-link">C&oacute;mo instalar un plato de ducha</a>
                <a href="https://www.adrihosan.com/pegar-plato-de-ducha-de-resina/" class="pbar-guide-link">Con qu&eacute; pegar un plato de resina</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques de la seleccion ?>

    <!-- 8. CONTACTO RICARDO (se pinta SIEMPRE, tambien en URL de filtro) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;Buscas ajustar el presupuesto?<span>Soy Ricardo, dime tu medida y te digo qu&eacute; opciones tienes.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20economico" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
