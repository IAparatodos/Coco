<?php
/**
 * Categoria 2861 - Platos de ducha Duplach (hija de 86)
 *
 * PATRON HOJA DE MARCA, distinto al resto del silo. Las demas categorias son
 * de medida, material o uso: quien busca ya sabe que quiere y solo necesita
 * encontrarlo. Esta es de MARCA: quien busca viene a decidir si se fia.
 * La consulta con mas CTR de la categoria es "duplach opiniones" (3,6 %, seis
 * veces el CTR medio) y hoy no se responde. De ahi que el bloque de confianza
 * vaya INMEDIATAMENTE despues del hero, antes que nada de catalogo.
 *
 * Wireframe 2026-08-04 (prefijo dupl-). Datos verificados en BD y GSC ese dia.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el schema lo pone Rank Math parseando este mismo HTML); cifras de
 * catalogo redondeadas a la baja; ninguna resena inventada; ninguna garantia
 * comercial afirmada (Duplach da la legal, nada mas).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_duplach_contenido_superior() {
    // Misma regla que la madre (PR #74): en una URL de filtro CON regla SEO
    // propia solo se pintan hero, filtro y listado. Clonar los bloques de
    // marca en una URL indexable distinta la pondria a competir con esta.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO (imagen editorial de un Stone Plus pizarra antracita, 4-ago) -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-duplach-stone-plus-pizarra-antracita-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Duplach</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha Duplach' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>M&aacute;s de 140 modelos desde 120,90&nbsp;&euro; +IVA. Dos series de resina con gel coat, medidas de 70 a 210&nbsp;cm y f&aacute;brica en Villa del R&iacute;o, C&oacute;rdoba.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. CONFIANZA - EL BLOQUE QUE JUSTIFICA ESTE CICLO.
         Responde a "duplach opiniones", la consulta con mas CTR de la
         categoria. Solo hechos verificables del catalogo, la opinion de
         Ricardo en primera persona y resenas REALES de Google Business con
         su autor. Sin estrellas, sin medias, sin schema Review. -->
    <section class="dupl-trust-section adrihosan-full-width-block">
        <div class="dupl-trust-wrapper">
            <h2>&iquest;Qu&eacute; tal son los platos de ducha Duplach?</h2>
            <p class="dupl-trust-intro">Es la pregunta que m&aacute;s nos llega de esta marca, as&iacute; que la contestamos con lo que se puede comprobar. Duplach fabrica desde 2010 en Villa del R&iacute;o, C&oacute;rdoba, platos de resina de poli&eacute;ster con gel coat, con clasificaci&oacute;n antideslizante C3, v&aacute;lvula de desag&uuml;e incluida y posibilidad de recorte a medida. Los precios van de 120,90 a 490,90&nbsp;&euro; +IVA seg&uacute;n serie, medida y acabado.</p>

            <div class="dupl-trust-grid">
                <div class="dupl-trust-card">
                    <h3>Lo que funciona bien</h3>
                    <ul>
                        <li>El gel coat aguanta el uso diario y se limpia sin productos especiales.</li>
                        <li>La C3 es la clase que pide la normativa para ducha con pie descalzo.</li>
                        <li>Se recortan en obra, que es lo que salva un hueco que no es medida est&aacute;ndar.</li>
                        <li>La f&aacute;brica est&aacute; en C&oacute;rdoba: reponer una pieza no depende de un contenedor.</li>
                    </ul>
                </div>
                <div class="dupl-trust-card">
                    <h3>Lo que conviene saber antes</h3>
                    <ul>
                        <li>Es resina, no piedra natural: pesa menos y se comporta distinto.</li>
                        <li>El soporte tiene que quedar nivelado o el desag&uuml;e no evac&uacute;a bien.</li>
                        <li>Elegir serie es elegir por d&oacute;nde evac&uacute;a el agua, no solo est&eacute;tica.</li>
                        <li>Rev&iacute;salo al recibirlo: es el momento de detectar un golpe de transporte.</li>
                    </ul>
                </div>
            </div>

            <div class="dupl-opinion">
                <h3>Mi opini&oacute;n, como quien los vende y los tiene en exposici&oacute;n</h3>
                <p>Duplach es de las marcas que m&aacute;s vendemos y la recomiendo sin problema para una reforma normal de ba&ntilde;o: relaci&oacute;n calidad-precio buena, medidas resueltas y repuesto disponible. Si buscas un plato de piedra natural, una pieza de dise&ntilde;o singular o un acabado que no est&eacute; en su carta, entonces no es tu marca y te dir&iacute;a que mires Solid Surface. Prefiero decirlo antes que venderte lo que no encaja.</p>
                <p class="dupl-opinion-firma">Ricardo &middot; Adrihosan</p>
            </div>

            <!-- Resenas REALES del perfil de Google Business, con su autor y su
                 fecha exacta del perfil (sin retocar: la de Jose Antonio es de
                 2022 y se publica tal cual). Son de la tienda, no del producto:
                 por eso van como texto citado y NUNCA con AggregateRating ni
                 schema Review. -->
            <div class="dupl-reviews">
                <h3>Lo que dicen clientes que compraron su plato aqu&iacute;</h3>
                <p class="dupl-reviews-nota">Rese&ntilde;as del perfil de Google de Adrihosan, con su fecha original. Son de la tienda y no de una marca concreta, as&iacute; que las publicamos tal cual, sin medias ni puntuaciones.</p>
                <div class="dupl-reviews-grid">
                    <blockquote class="dupl-review">
                        <p>Compr&eacute; un plato de ducha hace 2 a&ntilde;os, y he vuelto a repetir con ellos para el segundo aseo. Calidad precio alta.</p>
                        <cite>Jesus Ortega <span class="dupl-review-fecha">1 de abril de 2024</span></cite>
                    </blockquote>
                    <blockquote class="dupl-review">
                        <p>Compre plato ducha de 210 x 80 todo excelente.</p>
                        <cite>Jos&eacute; Antonio <span class="dupl-review-fecha">15 de marzo de 2022</span></cite>
                    </blockquote>
                    <blockquote class="dupl-review">
                        <p>Ya los tenemos instalados y son preciosos.</p>
                        <cite>Ra&uacute;l Gonz&aacute;lez <span class="dupl-review-fecha">18 de mayo de 2024</span></cite>
                    </blockquote>
                    <blockquote class="dupl-review dupl-review-critica">
                        <p>i&ntilde;aki Huete compr&oacute; un plato de resina con carga mineral, tuvo problemas con &eacute;l y los resolvimos. La dejamos aqu&iacute; porque una cr&iacute;tica resuelta cuenta m&aacute;s que tres elogios seguidos.</p>
                        <cite>i&ntilde;aki Huete <span class="dupl-review-fecha">19 de diciembre de 2024</span></cite>
                    </blockquote>
                </div>
            </div>

            <!-- Garantia: se cuenta como DERECHO DEL COMPRADOR, no como ventaja
                 de la marca. Duplach no da garantia comercial extra. Los "3
                 anos" no son afirmacion nueva: salen de las condiciones de
                 venta ya publicadas (pagina 23433), que ademas dicen que las
                 garantias especificas las otorga el fabricante. Pendiente el
                 visto bueno de la gestoria, sin cambiar lo que ya se publica. -->
            <p class="dupl-garantia">Sobre la garant&iacute;a, seamos exactos: Duplach no a&ntilde;ade una garant&iacute;a comercial propia. Lo que tienes es la <strong>garant&iacute;a legal de conformidad</strong>, tres a&ntilde;os por la normativa espa&ntilde;ola de consumo para compras hechas desde 2022. No es un extra de la marca, es un derecho tuyo como comprador, y aqu&iacute; lo respetamos como tal.</p>
        </div>
    </section>

    <!-- 3. LAS DOS SERIES: la diferencia es la POSICION DEL DESAGUE, y ese
         dato no esta escrito en ninguna ficha de la web. Es lo que decide
         la compra: si el plato no encaja con tu saneamiento, hay que picar. -->
    <section class="dupl-series-section adrihosan-full-width-block">
        <div class="dupl-series-wrapper">
            <h2>Stone Plus o Stone Side: en qu&eacute; se diferencian</h2>
            <p class="dupl-series-sub">Las dos series comparten material, acabados y precio de partida. Lo que cambia es por d&oacute;nde evac&uacute;a el agua, y eso decide si el plato encaja con el saneamiento que ya tienes.</p>
            <div class="dupl-series-grid">
                <div class="dupl-serie-card">
                    <h3>Stone Plus</h3>
                    <p class="dupl-serie-clave">Desag&uuml;e centrado, rejilla cuadrada peque&ntilde;a</p>
                    <p>Superficie continua alrededor del sumidero. Es la opci&oacute;n directa cuando el desag&uuml;e ya te cae hacia el centro del hueco.</p>
                    <ul class="dupl-serie-datos">
                        <li><span>Modelos</span> 88</li>
                        <li><span>Precio</span> 120,90 &ndash; 359,90 &euro; +IVA</li>
                        <li><span>Anchos</span> 70 a 100 cm</li>
                        <li><span>Largos</span> 70 a 210 cm</li>
                    </ul>
                </div>
                <div class="dupl-serie-card">
                    <h3>Stone Side</h3>
                    <p class="dupl-serie-clave">Canal lineal en el lateral</p>
                    <p>Rejilla alargada en el borde y una franja inclinada que vierte hacia ella. Resuelve el desag&uuml;e pegado a la pared y deja el resto del plato despejado.</p>
                    <ul class="dupl-serie-datos">
                        <li><span>Modelos</span> 42</li>
                        <li><span>Precio</span> 120,90 &ndash; 329,90 &euro; +IVA</li>
                        <li><span>Anchos</span> 70 a 90 cm</li>
                        <li><span>Largos</span> 70 a 210 cm</li>
                    </ul>
                </div>
            </div>
            <p class="dupl-series-tercera">Adem&aacute;s de las dos series lisas, Duplach tiene una tercera familia de <strong>17 platos decorados en gel coat</strong>: imitaci&oacute;n madera, m&aacute;rmol, granito, terrazo, hidr&aacute;ulico y mosaico, de 257,90 a 490,90&nbsp;&euro; +IVA. Son los mismos platos que ver&aacute;s si buscas por <a href="https://www.adrihosan.com/plt-textura-marmol/">textura m&aacute;rmol</a> en el cat&aacute;logo.</p>
        </div>
    </section>

    <!-- 4. FRANJA DE PRECIO (intencion "precio", ya convierte al 2 %) -->
    <section class="dupl-price-band adrihosan-full-width-block">
        <div class="dupl-price-wrapper">
            <p class="dupl-price-line">Platos Duplach <strong>desde 120,90&nbsp;&euro; +IVA</strong>, hasta 490,90&nbsp;&euro; en los decorados</p>
            <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="dupl-price-link">Ver la selecci&oacute;n m&aacute;s econ&oacute;mica del cat&aacute;logo &rarr;</a>
        </div>
    </section>

    <!-- 5. MEDIDAS: seleccion, NO la rejilla de 9 de la madre (esto es una
         hoja, no un repartidor). Solo tallas dentro del rango Duplach. -->
    <section class="dupl-sizes-section adrihosan-full-width-block">
        <div class="dupl-sizes-wrapper">
            <h2>Medidas m&aacute;s pedidas</h2>
            <p class="dupl-sizes-sub">Duplach cubre largos de 70 a 210&nbsp;cm y anchos de 70 a 100. Estas son las medidas con p&aacute;gina propia; si la tuya no est&aacute;, af&iacute;nala con el filtro de largo y ancho.</p>
            <div class="dupl-sizes-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-180x70/" class="dupl-size-btn">180&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-160x70/" class="dupl-size-btn">160&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-140x70/" class="dupl-size-btn">140&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/" class="dupl-size-btn">120&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-90x90/" class="dupl-size-btn">90&times;90</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-80x80/" class="dupl-size-btn">80&times;80</a>
            </div>
            <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="dupl-sizes-madre">Ver todos los platos de ducha del cat&aacute;logo &rarr;</a>
        </div>
    </section>
    <?php endif; // fin bloques de marca ?>

    <!-- 6. FILTRO FE PRO (conjunto 429707 heredado de la madre, mismo marcado).
         SIEMPRE visible, tambien en filtro: es como el usuario afina o deshace. -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <!-- 7. TITULO CATALOGO + LISTADO (aqui el listado SI importa: es una hoja) -->
    <div class="product-loop-header">
        <h2 id="dupl-catalogo">Cat&aacute;logo de platos de ducha Duplach</h2>
        <p>M&aacute;s de 140 modelos entre Stone Plus, Stone Side y los decorados en gel coat.</p>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_duplach_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 8. FAQ (9 preguntas, HTML visible SIN JSON-LD: el schema lo pone
         Rank Math parseando este mismo HTML, palabra por palabra).
         Los temas salen de GSC. La 9 responde a la objecion real de las
         resenas de 1 estrella (plato danado) con la politica de las
         condiciones de venta, no inventada. -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre los platos de ducha Duplach</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tal son los platos de ducha Duplach?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Son platos de resina de poli&eacute;ster con gel coat fabricados en Villa del R&iacute;o, C&oacute;rdoba, con clasificaci&oacute;n antideslizante C3 y v&aacute;lvula de desag&uuml;e incluida. Es una de las marcas que m&aacute;s vendemos para reformas de ba&ntilde;o por relaci&oacute;n calidad-precio y por disponibilidad de medidas. Si buscas piedra natural o una pieza de dise&ntilde;o singular, no es la marca que te conviene.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato de ducha Duplach?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los precios arrancan en 120,90&nbsp;&euro; +IVA en las medidas peque&ntilde;as de las series lisas y llegan hasta 490,90&nbsp;&euro; en los modelos decorados de gran formato. Stone Plus se mueve entre 120,90 y 359,90&nbsp;&euro;, y Stone Side entre 120,90 y 329,90&nbsp;&euro;. Lo que marca la diferencia es la medida, la serie y el acabado.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre Stone Plus y Stone Side?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La posici&oacute;n del desag&uuml;e. Stone Plus lo lleva centrado, con una rejilla cuadrada peque&ntilde;a y superficie continua alrededor. Stone Side lleva un canal lineal en el lateral, con rejilla alargada y una franja inclinada que vierte hacia ella. Elige Plus si tu desag&uuml;e cae hacia el centro del hueco, y Side si te sale pegado a la pared o quieres el plato sin rejilla a la vista.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se pueden cortar a medida?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Los platos de resina se recortan en obra con radial y disco de diamante, que es lo que permite ajustarlos a un hueco que no es medida est&aacute;ndar. Consulta las instrucciones del modelo concreto antes de cortar, y ten en cuenta que un plato cortado a medida es un producto personalizado a efectos de devoluci&oacute;n.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los platos Duplach son antideslizantes?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, llevan clasificaci&oacute;n antideslizante C3, que es la que exige la normativa para zona de ducha con pie descalzo. Para obra en local de uso p&uacute;blico podemos facilitar el certificado del fabricante.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Incluyen la v&aacute;lvula de desag&uuml;e?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, todos los platos Duplach del cat&aacute;logo llevan la v&aacute;lvula de desag&uuml;e incluida. No hay que comprarla aparte ni sumarla al presupuesto.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;En qu&eacute; colores y acabados hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Las series lisas Stone Plus y Stone Side tienen textura pizarra en varios colores. Aparte hay 17 modelos decorados en gel coat: imitaci&oacute;n madera en varios tonos, m&aacute;rmol negro, crema y calacatta, granito, terrazo en beige, gris y negro, hidr&aacute;ulico y mosaico. Todos van coloreados en masa, no pintados en superficie.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto tardan en llegar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El plazo depende del modelo y de si est&aacute; en stock o entra en la siguiente fabricaci&oacute;n. Te confirmamos la fecha concreta al hacer el pedido, y enviamos a toda Espa&ntilde;a con seguimiento. Si tienes obra empezada, dilo al pedir y lo tenemos en cuenta.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Y si el plato llega da&ntilde;ado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Rev&iacute;salo delante del transportista y anota cualquier golpe en el albar&aacute;n antes de firmar; av&iacute;sanos dentro de las 24 horas siguientes a la recepci&oacute;n. Si el plato llega da&ntilde;ado o defectuoso, nos hacemos cargo de la recogida y la reposici&oacute;n sin coste para ti. Ese repaso al recibirlo evita la mayor&iacute;a de los problemas.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 9. GUIAS DEL BLOG (las 3 entradas que cuelgan de esta categoria) -->
    <section class="dupl-guides-section adrihosan-full-width-block">
        <div class="dupl-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato</h2>
            <div class="dupl-guides-grid">
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="dupl-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-es-el-mejor-material/" class="dupl-guide-link">Cu&aacute;l es el mejor material</a>
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="dupl-guide-link">C&oacute;mo instalar un plato de ducha</a>
            </div>
        </div>
    </section>

    <!-- 10. CONTACTO RICARDO (bloque comun, igual que en la madre) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con la serie o la medida?<span>Soy Ricardo, te digo cu&aacute;l encaja con tu ba&ntilde;o.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20plato%20de%20ducha%20Duplach" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
