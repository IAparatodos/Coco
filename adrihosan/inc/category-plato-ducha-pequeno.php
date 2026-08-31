<?php
/**
 * Categoria 2890 - Plato ducha pequeno (hoja de SEGMENTO DE TAMANO, hija de 86)
 *
 * LA PAGINA DE DECISION DEL BANO COMPACTO. Criterio fijado por Ricardo el
 * 21-ago-2026: pequeno = largo hasta 130 cm Y ancho no mas de 90 cm. La
 * membresia se deriva SIEMPRE del atributo pa_medida-plato (nada a mano);
 * sincronizada ese dia: 273 productos exactos.
 *
 * Datos verificados en BD el 21-ago-2026 (caducan si se toca el catalogo):
 * 273 platos, 28 medidas, desde 120,90 EUR +IVA (70x70), 67 por debajo de
 * 200 EUR, 188 a ras de suelo (cat movilidad reducida), 97 con textura
 * pizarra en el titulo. "Desde" por medida = minimo de fichas de ESA medida.
 *
 * Buyer persona (Fase 1): particular reformando un bano pequeno, muchas
 * veces cambiando la banera por ducha (hueco largo y estrecho). El comprador
 * de obra entra por WhatsApp: CTA presente, sin promesas de stock ni plazos.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el schema lo pone Rank Math en Fase 3 y los textos deben
 * coincidir palabra por palabra); NUNCA prometer fabricacion "a medida"
 * (no existe en platos: lo real es el recorte en obra); las FAQ no duplican
 * palabra por palabra las de la madre ni las de resina.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_pequeno_contenido_superior() {
    // En una URL de filtro CON regla SEO propia solo se pintan hero, filtro
    // y listado (mismo criterio que madre, resina y baratos).
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO (imagen heredada del silo: plato de resina blanco textura
         pizarra, la misma real del catalogo que usan madre y resina). -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-blanco-textura-pizarra-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Peque&ntilde;os</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha peque&ntilde;os' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>273 platos de hasta 130&times;90&nbsp;cm, desde 120,90&nbsp;&euro; +IVA. Para el ba&ntilde;o donde cada cent&iacute;metro cuenta.</p>
            <div class="hero-buttons">
                <a href="#ppq-catalogo" class="hero-btn primary">Ver cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20para%20un%20bano%20pequeno" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. MEDIDAS Y PRECIOS (protagonista: es lo que convierte en este
         cluster; "desde" por medida verificados en BD el 21-ago-2026).
         Los botones enlazan a la cat de talla cuando existe (70x70, 80x80,
         90x90, 120x70) y a la URL de filtro en el resto, igual que la madre. -->
    <section class="ppq-sizes-section adrihosan-full-width-block">
        <div class="ppq-sizes-wrapper">
            <h2>Medidas y precios de los platos de ducha peque&ntilde;os</h2>
            <p class="ppq-sizes-sub">Las m&aacute;s pedidas del ba&ntilde;o compacto, con su precio de partida real. Si la tuya no est&aacute;, usa el filtro de largo y ancho.</p>
            <div class="ppq-sizes-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-70x70/" class="ppq-size-btn"><span class="ppq-size-num">70&times;70</span><span class="ppq-size-count">23 platos</span><span class="ppq-size-price">desde 120,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-80x70/" class="ppq-size-btn"><span class="ppq-size-num">80&times;70</span><span class="ppq-size-count">26 platos</span><span class="ppq-size-price">desde 124,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-80x80/" class="ppq-size-btn"><span class="ppq-size-num">80&times;80</span><span class="ppq-size-count">29 platos</span><span class="ppq-size-price">desde 131,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-90x90/" class="ppq-size-btn"><span class="ppq-size-num">90&times;90</span><span class="ppq-size-count">30 platos</span><span class="ppq-size-price">desde 161,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-100x80/" class="ppq-size-btn"><span class="ppq-size-num">100&times;80</span><span class="ppq-size-count">37 platos</span><span class="ppq-size-price">desde 152,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/" class="ppq-size-btn"><span class="ppq-size-num">120&times;70</span><span class="ppq-size-count">38 platos</span><span class="ppq-size-price">desde 160,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x80/" class="ppq-size-btn"><span class="ppq-size-num">120&times;80</span><span class="ppq-size-count">38 platos</span><span class="ppq-size-price">desde 167,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x90/" class="ppq-size-btn"><span class="ppq-size-num">120&times;90</span><span class="ppq-size-count">38 platos</span><span class="ppq-size-price">desde 196,90&nbsp;&euro; +IVA</span></a>
            </div>
            <div class="ppq-sizes-exits">
                <a href="#ppq-catalogo" class="ppq-exit-card">
                    <span class="ppq-exit-title">Todas las medidas peque&ntilde;as</span>
                    <span class="ppq-exit-desc">28 medidas hasta 130&times;90 &middot; usa el filtro</span>
                </a>
                <a href="#ppq-recorte" class="ppq-exit-card">
                    <span class="ppq-exit-title">&iquest;Buscas un 60&times;60 o m&aacute;s peque&ntilde;o?</span>
                    <span class="ppq-exit-desc">Se recorta en obra &middot; c&oacute;mo funciona</span>
                </a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloque 2 ?>

    <!-- 3. FILTRO FE PRO (conjunto 429707 heredado de la madre, mismo marcado) -->
    <div class="ppq-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 4. STORYTELLING: el argumento del bano compacto -->
    <section class="ppq-story-section adrihosan-full-width-block">
        <div class="ppq-story-wrapper">
            <h2>Platos de ducha peque&ntilde;os: caben donde la ba&ntilde;era no cab&iacute;a</h2>
            <p>Un <strong>plato de ducha peque&ntilde;o</strong> es el que resuelve el ba&ntilde;o justo de espacio: aqu&iacute; entran los de hasta 130&nbsp;cm de largo y 90 de ancho. Los cuadrados (70&times;70, 80&times;80, 90&times;90) aprovechan el rinc&oacute;n; los rectangulares estrechos (de 100&times;70 a 130&times;80) son los que ocupan el hueco que deja una ba&ntilde;era al quitarla, sin obra de m&aacute;s. Casi todos son de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/">resina con carga mineral</a>: unos 3&nbsp;cm de grosor, con la pendiente ya hecha, y si el hueco no coincide con ninguna medida, se recortan en obra. Si a&uacute;n est&aacute;s comparando tipos, arranca por la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">categor&iacute;a general de platos de ducha</a>.</p>
        </div>
    </section>

    <!-- 5. FRANJA DE PRECIO + CTA 1 (WhatsApp) -->
    <section class="ppq-price-band adrihosan-full-width-block">
        <div class="ppq-price-wrapper">
            <p class="ppq-price-line">Platos de ducha peque&ntilde;os <strong>desde 120,90&nbsp;&euro; +IVA</strong> &middot; 67 modelos por debajo de 200&nbsp;&euro;</p>
            <div class="ppq-price-actions">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="ppq-price-link">Ver platos de ducha baratos &rarr;</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20para%20un%20bano%20pequeno" class="ppq-whatsapp-btn">Pregunta por WhatsApp</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 4 y 5 ?>

    <!-- 6. TITULO CATALOGO + LISTADO -->
    <div class="product-loop-header">
        <?php if ( $es_filtro ) : ?>
        <h2 id="ppq-catalogo">Modelos disponibles</h2>
        <?php else : ?>
        <h2 id="ppq-catalogo">Cat&aacute;logo de platos de ducha peque&ntilde;os</h2>
        <p>273 modelos de hasta 130&times;90&nbsp;cm. Usa el filtro de largo y ancho para acotar.</p>
        <?php endif; ?>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_pequeno_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 7. RECORTE (ancla desde el bloque de medidas). La demanda de "60x60"
         existe en GSC y Ads y NO hay producto: la respuesta honesta es el
         recorte en obra. PROHIBIDO decir "a medida". -->
    <section id="ppq-recorte" class="ppq-custom-section adrihosan-full-width-block">
        <div class="ppq-custom-wrapper">
            <h2>&iquest;Necesitas un plato de ducha m&aacute;s peque&ntilde;o que 70&times;70?</h2>
            <p class="ppq-custom-sub">Por debajo de 70&times;70 no se fabrica en serie. Lo que se hace en obra es esto:</p>
            <div class="ppq-custom-steps">
                <div class="ppq-step"><span class="ppq-step-num">1</span><p>Mide el hueco de pared a pared por su punto m&aacute;s estrecho, sin descontar azulejo.</p></div>
                <div class="ppq-step"><span class="ppq-step-num">2</span><p>Elige el plato de resina m&aacute;s cercano por encima de tu medida.</p></div>
                <div class="ppq-step"><span class="ppq-step-num">3</span><p>El sobrante se recorta en obra con radial y disco de diamante, siguiendo las instrucciones del fabricante.</p></div>
                <div class="ppq-step"><span class="ppq-step-num">4</span><p>&iquest;Dudas con tu caso? Escr&iacute;benos por WhatsApp con los cent&iacute;metros exactos del hueco.</p></div>
            </div>
        </div>
    </section>

    <!-- 8. FAQ (9 preguntas: 4 de las "Mas preguntas" reales de Google del
         21-ago + 5 propias del segmento; HTML visible SIN JSON-LD, el schema
         lo pone Rank Math en la Fase 3 con estos textos EXACTOS) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre platos de ducha peque&ntilde;os</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto mide un plato de ducha peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En esta selecci&oacute;n, hasta 130 cm de largo y 90 de ancho. El m&aacute;s compacto de f&aacute;brica es el 70&times;70, y entre medias hay 28 medidas: cuadrados, rectangulares estrechos y formatos intermedios como 100&times;80 o 120&times;90.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; tama&ntilde;os de platos de ducha peque&ntilde;os hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Tres familias: cuadrados (70&times;70, 80&times;80 y 90&times;90) para el rinc&oacute;n del ba&ntilde;o; rectangulares estrechos de 100 a 130 cm de largo por 70 u 80 de ancho, los t&iacute;picos del cambio de ba&ntilde;era; y anchos intermedios de 85 y 90 cm. En total, 273 modelos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Existen platos de ducha de 60&times;60?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>De f&aacute;brica no: la medida m&aacute;s peque&ntilde;a en serie es 70&times;70. Para un hueco menor, la soluci&oacute;n real es un plato de resina recortado en obra hasta la medida exacta que necesites.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; platos de ducha se pueden cortar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los de resina con carga mineral, que son casi todos los de esta p&aacute;gina. Se recortan en obra con radial y disco de diamante siguiendo las instrucciones del fabricante. Los de Solid Surface y Corian no se recortan.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; material es mejor para un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La resina, por dos razones pr&aacute;cticas: es extraplana (unos 3 cm, entra donde una ducha de obra no cabe) y admite recorte, que en un ba&ntilde;o justo de cent&iacute;metros es lo que salva la instalaci&oacute;n. Tienes la familia completa en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/">platos de ducha de resina</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirven para cambiar la ba&ntilde;era por ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es su caso estrella. El hueco de una ba&ntilde;era suele ser largo y estrecho, y ah&iacute; encajan los rectangulares de 100 a 130 cm de largo por 70 u 80 de ancho. Mide el hueco por el punto m&aacute;s estrecho y deja un cent&iacute;metro de holgura para el ajuste.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Valen para una ducha adaptada?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>188 de estos modelos van a ras de suelo, sin escal&oacute;n que salvar. Los tienes reunidos en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/">platos de ducha para movilidad reducida</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato de ducha peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde 120,90 &euro; +IVA el 70&times;70, y 67 de los 273 modelos se quedan por debajo de los 200 &euro;. La selecci&oacute;n m&aacute;s ajustada del cat&aacute;logo est&aacute; en <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/">platos de ducha baratos</a>.</p>
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
    <section class="ppq-guides-section adrihosan-full-width-block">
        <div class="ppq-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato</h2>
            <div class="ppq-guides-grid">
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="ppq-guide-link">Qu&eacute; plato de ducha elegir</a>
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="ppq-guide-link">C&oacute;mo instalar un plato de ducha</a>
                <a href="https://www.adrihosan.com/pegar-plato-de-ducha-de-resina/" class="ppq-guide-link">Con qu&eacute; pegar un plato de resina</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS -->
    <section class="ppq-related-section adrihosan-full-width-block">
        <div class="ppq-related-wrapper">
            <h2>Sigue mirando</h2>
            <div class="ppq-related-row">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-70x70/" class="ppq-related-link">Platos de ducha 70&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-80x80/" class="ppq-related-link">Platos de ducha 80&times;80</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-90x90/" class="ppq-related-link">Platos de ducha 90&times;90</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/" class="ppq-related-link">Platos de ducha 120&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="ppq-related-link">Platos de ducha baratos</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/" class="ppq-related-link">Platos de ducha de resina</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="ppq-related-link">Todos los platos de ducha</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 7-10 ?>

    <!-- 11. CONTACTO RICARDO (bloque comun; SIEMPRE visible) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;El ba&ntilde;o va justo de espacio?<span>Soy Ricardo, dime los cent&iacute;metros de tu hueco y te digo qu&eacute; platos te entran.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20para%20un%20bano%20pequeno" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">&#128221;</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
