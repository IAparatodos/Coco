<?php
/**
 * Categoria 89 - Platos de ducha decorados (hoja de ACABADO, hija de 86)
 *
 * LA PAGINA DEL ACABADO. Quien entra aqui ya sabe la medida que necesita:
 * lo que busca es que el plato no parezca un plato. Keyword lider real
 * "platos de ducha de diseno" (819 impr/ano, pos 7,5), con "decorado"
 * (250, pos 6,0) y "originales" (191, pos 10,9). La categoria YA esta en
 * posicion 6-12 de ese cluster y solo saca 133 clics/ano (CTR 0,66 %).
 *
 * Datos verificados en Woo el 24-ago-2026 (caducan si se toca el catalogo):
 * NO son "19 productos" sino 19 ACABADOS x 50 medidas = 776 combinaciones.
 * Todos gel coat (resina de poliester), 3 cm de altura, rejilla del mismo
 * material. Desde 257,90 EUR +IVA (70x70) hasta 490,90 EUR (210x90).
 * Los 19 son TODOS los platos con textura decorativa del catalogo: madera 6,
 * marmol 5, terrazo 3, mosaico 2, hidraulico 2, granito 1. Cero fuera.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (Rank Math en Fase 3, textos identicos); NUNCA prometer fabricacion
 * a medida ni plazo de entrega; bloque de contacto CON tarjeta Formulario
 * (regla de Ricardo del 21-ago-2026); precios sin IVA y con fecha.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_decorados_contenido_superior() {
    // En una URL de filtro CON regla SEO propia solo se pintan hero, filtro
    // y listado (mismo criterio que el resto del silo).
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO (imagen construida desde la foto real del plato del catalogo) -->
    <section class="hero-section-container adrihosan-full-width-block pdc-hero" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-decorado-hidraulico-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Decorados</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha decorados' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>19 acabados &mdash;madera, m&aacute;rmol, terrazo, hidr&aacute;ulico, mosaico y granito&mdash; y cada uno en 50 medidas. Desde 257,90&nbsp;&euro; +IVA.</p>
            <div class="hero-buttons">
                <a href="#pdc-acabados" class="hero-btn primary">Ver los 19 acabados</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20decorado" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. LOS 19 ACABADOS (la seccion que busca el usuario: el dibujo) -->
    <section class="pdc-finishes-section adrihosan-full-width-block" id="pdc-acabados">
        <div class="pdc-finishes-wrapper">
            <h2>Los 19 acabados de nuestros platos de ducha decorados</h2>
            <p class="pdc-finishes-sub">Seis familias de textura. El acabado que elijas va en cualquiera de las 50 medidas del cat&aacute;logo, sin cambiar de precio por el dibujo.</p>
            <div class="pdc-finishes-grid">

                <div class="pdc-finish-card">
                    <span class="pdc-finish-icon">&#129717;</span>
                    <h3>Madera <span>6 acabados</span></h3>
                    <p>Roble, Nogal, Ceniza, Nature, Vintage y Baobab. El veteado corre a lo largo del plato, como una tarima.</p>
                </div>

                <div class="pdc-finish-card">
                    <span class="pdc-finish-icon">&#128142;</span>
                    <h3>M&aacute;rmol <span>5 acabados</span></h3>
                    <p>Calacatta, Calacatta blanco, Crema, Marquina y Negro. Veta blanca sobre fondo claro u oscuro.</p>
                </div>

                <div class="pdc-finish-card">
                    <span class="pdc-finish-icon">&#129704;</span>
                    <h3>Terrazo <span>3 acabados</span></h3>
                    <p>Beige, gris y negro. El granulado de siempre, que disimula la cal y el uso diario.</p>
                </div>

                <div class="pdc-finish-card">
                    <span class="pdc-finish-icon">&#127912;</span>
                    <h3>Hidr&aacute;ulico <span>2 acabados</span></h3>
                    <p>Blanco y negro, y multicolor. El mosaico valenciano de toda la vida, dentro de la ducha.</p>
                </div>

                <div class="pdc-finish-card">
                    <span class="pdc-finish-icon">&#129513;</span>
                    <h3>Mosaico <span>2 acabados</span></h3>
                    <p>Dos composiciones en blanco y negro, de trazo geom&eacute;trico y contraste alto.</p>
                </div>

                <div class="pdc-finish-card">
                    <span class="pdc-finish-icon">&#9899;</span>
                    <h3>Granito <span>1 acabado</span></h3>
                    <p>Gris moteado, el m&aacute;s discreto de la familia: textura sin dibujo que llame la atenci&oacute;n.</p>
                </div>

            </div>
        </div>
    </section>
    <?php endif; // fin bloque 2 ?>

    <!-- 3. FILTRO FE PRO (conjunto 429707, el del silo de platos) -->
    <div class="pdc-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 4. FRANJA DE PRECIO + MEDIDAS + CTA 1
         NO hay parrilla de medidas navegable a proposito (decision de Ricardo
         del 24-ago-2026): los 19 acabados existen en las 50 medidas, asi que
         filtrar por medida DENTRO de esta categoria devuelve siempre las mismas
         fichas (comprobado en vivo: plt-largo-70/plt-ancho-70 y
         plt-largo-200/plt-ancho-90 dan un resultado identico). Una parrilla de
         medidas aqui seria decorativa. La medida se elige dentro de la ficha. -->
    <section class="pdc-price-band adrihosan-full-width-block">
        <div class="pdc-price-wrapper">
            <p class="pdc-price-line">Platos de ducha decorados <strong>desde 257,90&nbsp;&euro; +IVA</strong> &middot; 50 medidas de serie, de 70&times;70 a 210&times;90 cm &middot; el precio sube con la medida, no con el dibujo</p>
            <div class="pdc-price-actions">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="pdc-price-link">Ver platos de ducha baratos &rarr;</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20decorado" class="pdc-whatsapp-btn">Pregunta por WhatsApp</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloque 4 ?>

    <!-- 5. TITULO CATALOGO + LISTADO -->
    <div class="product-loop-header">
        <?php if ( $es_filtro ) : ?>
        <h2 id="pdc-catalogo">Modelos disponibles</h2>
        <?php else : ?>
        <h2 id="pdc-catalogo">Cat&aacute;logo de platos de ducha decorados</h2>
        <p>Los 19 acabados del cat&aacute;logo. Entra en el que te guste y elige ah&iacute; tu medida entre las 50 disponibles.</p>
        <?php endif; ?>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_decorados_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 6. CLAVES DEL PRODUCTO (propiedades REALES del catalogo) -->
    <section class="pdc-keys-section adrihosan-full-width-block">
        <div class="pdc-keys-wrapper">
            <h2>Qu&eacute; llevan por dentro estos platos de ducha de dise&ntilde;o</h2>
            <div class="pdc-keys-grid">
                <div class="pdc-key-card">
                    <span class="pdc-key-icon">&#9635;</span>
                    <h3>Una sola pieza</h3>
                    <p>Gel coat sobre resina de poli&eacute;ster, moldeado de una colada. No hay juntas donde se meta la suciedad.</p>
                </div>
                <div class="pdc-key-card">
                    <span class="pdc-key-icon">&#8596;</span>
                    <h3>50 medidas de serie</h3>
                    <p>De 70&times;70 a 210&times;90 cm, y el acabado que elijas est&aacute; en todas. Con ese surtido, lo normal es no tener que recortar.</p>
                </div>
                <div class="pdc-key-card">
                    <span class="pdc-key-icon">&#8597;</span>
                    <h3>3 cm de altura</h3>
                    <p>Extraplano. Se instala a ras de suelo o sobre el pavimento sin que quede un escal&oacute;n que salvar.</p>
                </div>
                <div class="pdc-key-card">
                    <span class="pdc-key-icon">&#9723;</span>
                    <h3>Rejilla del mismo material</h3>
                    <p>El desag&uuml;e va camuflado con el mismo acabado del plato: no rompe el dibujo con una chapa met&aacute;lica.</p>
                </div>
                <div class="pdc-key-card">
                    <span class="pdc-key-icon">&#127912;</span>
                    <h3>Color en la propia pieza</h3>
                    <p>El acabado no es un vinilo pegado encima: forma parte de la superficie del plato.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ (9 preguntas; HTML visible SIN JSON-LD; Rank Math en Fase 3
         con estos textos EXACTOS. Prohibido inventar plazos o tarifas. -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre platos de ducha decorados</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; acabados hay en un plato de ducha decorado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En este cat&aacute;logo hay 19 acabados repartidos en seis familias: madera (Roble, Nogal, Ceniza, Nature, Vintage y Baobab), m&aacute;rmol (Calacatta, Calacatta blanco, Crema, Marquina y Negro), terrazo en beige, gris y negro, hidr&aacute;ulico en blanco y negro y en multicolor, dos mosaicos y un granito.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El dibujo se borra con el uso?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No es un vinilo ni una l&aacute;mina pegada encima: el acabado forma parte de la superficie de gel coat del plato. Se limpia como cualquier plato de resina, con agua y jab&oacute;n neutro, sin productos abrasivos ni estropajos met&aacute;licos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato de ducha decorado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde 257,90 &euro; +IVA en la medida 70&times;70, y el precio sube con la medida, no con el dibujo: el acabado que elijas cuesta lo mismo. Un 120&times;80 arranca en 320,90 &euro; +IVA y un 180&times;80 en 406,90 &euro; +IVA.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;En qu&eacute; medidas los hac&eacute;is?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Hay 50 medidas de serie, de 70&times;70 hasta 210&times;90 cm, todas con 3 cm de altura. No fabricamos a medida: con este surtido lo normal es que tu hueco ya est&eacute; cubierto por una medida de cat&aacute;logo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede recortar un plato decorado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La resina se recorta en obra con radial y disco de diamante siguiendo las instrucciones del fabricante, pero t&eacute;nlo en cuenta: en un acabado con dibujo el corte se nota m&aacute;s que en uno liso, porque parte el motivo. Antes de recortar, mira si hay una medida de cat&aacute;logo que encaje.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Y la rejilla del desag&uuml;e, se ve?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Va camuflada: la rejilla es del mismo material y del mismo acabado que el plato, as&iacute; que no corta el dibujo con una chapa met&aacute;lica a la vista. Se levanta igual para limpiar el sif&oacute;n.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Un plato con dibujo resbala m&aacute;s?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El acabado decorativo no es lo que da el agarre; eso lo marca la clase antideslizante de cada modelo, que aparece en su ficha t&eacute;cnica. Si la seguridad es tu prioridad, mira la selecci&oacute;n de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-antideslizantes/">platos de ducha antideslizantes</a>, donde todos tienen clase C3 certificada por el fabricante.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay con un plato de pizarra normal?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El de pizarra imita la piedra y es el acabado est&aacute;ndar de casi todo el cat&aacute;logo; el decorado lleva un motivo pensado para verse, como la madera o el hidr&aacute;ulico. Si lo que quieres es el liso de siempre en tu color, m&iacute;ralo en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/">platos de ducha de resina</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los precios incluyen IVA?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>No. Los precios de esta p&aacute;gina se muestran sin IVA, consultados el 24 de agosto de 2026. En la ficha de cada plato y en el carrito ver&aacute;s el importe con impuestos antes de confirmar el pedido. Si tienes dudas con tu medida, escr&iacute;benos por WhatsApp al 96 195 71 36.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 9. GUIAS DEL BLOG -->
    <section class="pdc-guides-section adrihosan-full-width-block">
        <div class="pdc-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato</h2>
            <div class="pdc-guides-grid">
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="pdc-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="pdc-guide-link">C&oacute;mo instalar un plato de ducha</a>
                <a href="https://www.adrihosan.com/pegar-plato-de-ducha-de-resina/" class="pdc-guide-link">Con qu&eacute; pegar un plato de resina</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="pdc-related-section adrihosan-full-width-block">
        <div class="pdc-related-wrapper">
            <h2>Sigue mirando</h2>
            <div class="pdc-related-row">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/" class="pdc-related-link">Platos de ducha de resina</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-pizarra/" class="pdc-related-link">Platos de ducha de pizarra</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-antideslizantes/" class="pdc-related-link">Platos antideslizantes</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-pequeno/" class="pdc-related-link">Platos de ducha peque&ntilde;os</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/" class="pdc-related-link">Platos de ducha grandes</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="pdc-related-link">Platos de ducha baratos</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="pdc-related-link">Todos los platos de ducha</a>
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
                    <h2>&iquest;Dudas con el acabado?<span>Soy Ricardo. Dime c&oacute;mo es tu ba&ntilde;o y te digo cu&aacute;l de los 19 le pega.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20decorado" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">&#128221;</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
