<?php
/**
 * Categoria 136 - Platos de ducha de RESINA (hoja de MATERIAL, hija de 86)
 *
 * PATRON ESCAPARATE CON REPARTO POR MEDIDA: 604 productos en 98 medidas.
 * A diferencia de la madre (repartidor puro), aqui el catalogo SI es
 * protagonista y la medida es el primer eje de decision: en Google Ads lo
 * unico que convierte en este cluster lleva "medidas y precios" dentro.
 *
 * Wireframe 2026-08-18 (prefijo plre-). Datos verificados ese dia en BD:
 * 604 productos (599 con precio), desde 120,90 EUR +IVA, 98 medidas
 * distintas via pa_medida-plato. Los "desde" por talla salen del minimo de
 * las fichas de ESA medida (nunca del padre variable). Cifras exactas
 * caducan: si se toca el catalogo, revisar este bloque.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el schema lo pone Rank Math/Fase 3 parseando este HTML); los
 * textos de FAQ NO duplican palabra por palabra los de la madre.
 * @deploy 2026-08-18.2 (redeliver via diff-mode)
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_platos_resina_contenido_superior() {
    // En una URL de filtro CON regla SEO propia solo se pintan hero, filtro
    // y listado (mismo criterio que la madre: no duplicar bloques en URLs
    // indexables distintas).
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO (misma foto real del catalogo que la madre: plato de resina blanco textura pizarra) -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/08/plato-de-ducha-blanco-textura-pizarra-adrihosan.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>Resina</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha de resina' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>599 platos de ducha de resina en 98 medidas, desde 120,90&nbsp;&euro; +IVA. Extraplanos con textura pizarra, del 70x70 a m&aacute;s de dos metros.</p>
            <div class="plre-hero-seals">
                <span class="plre-seal">98 medidas</span>
                <span class="plre-seal">Se recorta en obra</span>
                <span class="plre-seal">V&aacute;lvula de desag&uuml;e incluida</span>
                <span class="plre-seal">Desde 120,90&nbsp;&euro; +IVA</span>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 2. MEDIDAS Y PRECIOS (protagonista: es lo que convierte en Ads).
         "Desde" por talla verificados el 21-ago-2026 (minimo de fichas de esa
         medida). 160x70 y 150x70 ya llevan "desde" real: sus cats se
         sincronizaron 1:1 con pa_medida-plato ese dia (dejaron de ser mixtas). -->
    <section class="plre-sizes-section adrihosan-full-width-block">
        <div class="plre-sizes-wrapper">
            <h2>Medidas y precios de los platos de ducha de resina</h2>
            <p class="plre-sizes-sub">Las medidas m&aacute;s buscadas, con su precio de partida real. Si la tuya no est&aacute;, usa el filtro de medidas.</p>
            <div class="plre-sizes-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-90x80/" class="plre-size-btn"><span class="plre-size-num">80&times;90</span><span class="plre-size-count">26 platos</span><span class="plre-size-price">desde 145,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x80/" class="plre-size-btn"><span class="plre-size-num">120&times;80</span><span class="plre-size-count">38 platos</span><span class="plre-size-price">desde 167,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-120x90/" class="plre-size-btn"><span class="plre-size-num">120&times;90</span><span class="plre-size-count">38 platos</span><span class="plre-size-price">desde 196,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-160x80/" class="plre-size-btn"><span class="plre-size-num">160&times;80</span><span class="plre-size-count">38 platos</span><span class="plre-size-price">desde 202,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plt-medida-180x80/" class="plre-size-btn"><span class="plre-size-num">180&times;80</span><span class="plre-size-count">38 platos</span><span class="plre-size-price">desde 222,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-160x70/" class="plre-size-btn"><span class="plre-size-num">160&times;70</span><span class="plre-size-count">38 platos</span><span class="plre-size-price">desde 199,90&nbsp;&euro; +IVA</span></a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-150x70/" class="plre-size-btn"><span class="plre-size-num">150&times;70</span><span class="plre-size-count">32 platos</span><span class="plre-size-price">desde 194,90&nbsp;&euro; +IVA</span></a>
            </div>
            <div class="plre-sizes-exits">
                <a href="#plre-catalogo" class="plre-exit-card">
                    <span class="plre-exit-title">Todas las medidas</span>
                    <span class="plre-exit-desc">98 medidas &middot; usa el filtro de aqu&iacute; abajo</span>
                </a>
                <a href="#plre-a-medida" class="plre-exit-card">
                    <span class="plre-exit-title">&iquest;No est&aacute; tu medida exacta?</span>
                    <span class="plre-exit-desc">Se recorta en obra &middot; c&oacute;mo funciona</span>
                </a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloque 2 ?>

    <!-- 3. FILTRO FE PRO (conjunto 429707: Largo + Ancho + Textura + Medida) -->
    <div class="plre-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <?php if ( ! $es_filtro ) : ?>
    <!-- 4. STORYTELLING: resina es el MATERIAL, pizarra es la TEXTURA -->
    <section class="plre-story-section adrihosan-full-width-block">
        <div class="plre-story-wrapper">
            <h2>Platos de ducha de resina: un material, muchas texturas</h2>
            <p>La resina es el <strong>material</strong> del plato: una mezcla de resina y carga mineral coloreada en masa, que se moldea en grosores de unos 3&nbsp;cm y aguanta el uso diario de la ducha. La textura es otra cosa: es el <strong>acabado de la superficie</strong>, y la m&aacute;s vendida es la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-pizarra/">textura pizarra</a>, con su tacto de piedra natural. Por eso casi todos los platos de pizarra que ves son, por dentro, platos de resina. Si vienes de comparar materiales en la <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">categor&iacute;a general de platos de ducha</a>, aqu&iacute; tienes la familia completa de resina: 599 platos en 98 medidas.</p>
        </div>
    </section>

    <!-- 5. FRANJA DE PRECIO + CTA 1 (WhatsApp) -->
    <section class="plre-price-band adrihosan-full-width-block">
        <div class="plre-price-wrapper">
            <p class="plre-price-line">Platos de ducha de resina <strong>desde 120,90&nbsp;&euro; +IVA</strong></p>
            <div class="plre-price-actions">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="plre-price-link">Ver platos de ducha baratos &rarr;</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20de%20resina" class="plre-whatsapp-btn">Pregunta por WhatsApp</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 4 y 5 ?>

    <!-- 6. TITULO CATALOGO + LISTADO -->
    <div class="product-loop-header">
        <?php if ( $es_filtro ) : ?>
        <h2 id="plre-catalogo">Modelos disponibles</h2>
        <?php else : ?>
        <h2 id="plre-catalogo">Cat&aacute;logo de platos de ducha de resina</h2>
        <p>599 platos. Usa el filtro de medidas y textura para acotar.</p>
        <?php endif; ?>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_platos_resina_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 7. COMPARATIVA: las dos familias reales de resina -->
    <section class="plre-compare-section adrihosan-full-width-block">
        <div class="plre-compare-wrapper">
            <h2>&iquest;Qu&eacute; plato de ducha de resina elegir?</h2>
            <div class="plre-compare-table-scroll">
                <table class="plre-compare-table">
                    <thead>
                        <tr><th></th><th>Resina de poliuretano</th><th>Poli&eacute;ster con gel coat</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>C&oacute;mo es</td><td>La familia mayoritaria del cat&aacute;logo, la m&aacute;s resistente al impacto.</td><td>El gel coat es el recubrimiento exterior que da el acabado; la carga mineral aporta cuerpo y peso.</td></tr>
                        <tr><td>Color</td><td>Coloreado en masa, no pintado en superficie.</td><td>Coloreado en masa, con m&aacute;s variedad de acabados y decorados.</td></tr>
                        <tr><td>D&oacute;nde verlos</td><td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/platos-de-ducha-de-poliuretano-base/">Platos de poliuretano Base Bet&oacute;n</a></td><td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/platos-de-ducha-de-resina-colores/">Platos de resina de colores</a></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 8. CLAVES (solo propiedades verificadas del catalogo) -->
    <section class="plre-keys-section adrihosan-full-width-block">
        <div class="plre-keys-wrapper">
            <h2>Lo que da la resina en la ducha</h2>
            <div class="plre-keys-grid">
                <div class="plre-key-card"><span class="plre-key-icon">&#9986;&#65039;</span><h3>Se recorta en obra</h3><p>Con radial y disco de diamante, para ajustarlo a tu hueco.</p></div>
                <div class="plre-key-card"><span class="plre-key-icon">&#127912;</span><h3>Coloreado en masa</h3><p>El color va por dentro, no pintado en superficie.</p></div>
                <div class="plre-key-card"><span class="plre-key-icon">&#128207;</span><h3>Extraplano</h3><p>Unos 3 cm de grosor: entra donde una ducha de obra no cabe.</p></div>
                <div class="plre-key-card"><span class="plre-key-icon">&#128167;</span><h3>Pendiente preformada</h3><p>La ca&iacute;da hacia el desag&uuml;e viene hecha de f&aacute;brica.</p></div>
                <div class="plre-key-card"><span class="plre-key-icon">&#128295;</span><h3>V&aacute;lvula incluida</h3><p>Todos los platos llevan la v&aacute;lvula de desag&uuml;e incluida.</p></div>
                <div class="plre-key-card"><span class="plre-key-icon">&#11015;&#65039;</span><h3>Apoyado o enrasado</h3><p>Se instala sobre el suelo o a cota cero, seg&uacute;n tu obra.</p></div>
            </div>
        </div>
    </section>

    <!-- 9. MEDIDAS DIFICILES (ancla desde el bloque de medidas).
         OJO: NO existe fabricacion a medida (corregido 18-ago tras aviso de
         Ricardo). Lo real: 98 medidas publicadas, la familia Gel Coat sale
         de fabrica en 41 medidas, y los platos de resina se recortan en obra. -->
    <section id="plre-a-medida" class="plre-custom-section adrihosan-full-width-block">
        <div class="plre-custom-wrapper">
            <h2>&iquest;Y si tu medida de plato de ducha no existe?</h2>
            <p class="plre-custom-sub">Con 98 medidas publicadas casi siempre hay una que encaja. Y si no, as&iacute; se resuelve:</p>
            <div class="plre-custom-steps">
                <div class="plre-step"><span class="plre-step-num">1</span><p>Mide el hueco de pared a pared, sin descontar azulejo.</p></div>
                <div class="plre-step"><span class="plre-step-num">2</span><p>Busca con el filtro: la familia Gel Coat sale de f&aacute;brica en 41 medidas.</p></div>
                <div class="plre-step"><span class="plre-step-num">3</span><p>Si sobra plato, se recorta en obra con radial y disco de diamante.</p></div>
                <div class="plre-step"><span class="plre-step-num">4</span><p>&iquest;Dudas? Escr&iacute;benos por WhatsApp con las medidas de tu hueco.</p></div>
            </div>
        </div>
    </section>

    <!-- 10. FAQ (9 preguntas de GSC/Ads reales; HTML visible SIN JSON-LD;
         el schema lo pone Rank Math en la Fase 3 parseando este HTML) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre platos de ducha de resina</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; es un plato de ducha de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es un plato fabricado con resina mezclada con carga mineral y coloreado en masa, con un grosor de unos 3 cm. La superficie lleva una textura, casi siempre pizarra, y el conjunto resulta m&aacute;s c&aacute;lido al pisar que la cer&aacute;mica y m&aacute;s f&aacute;cil de ajustar en obra.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Resina y carga mineral son lo mismo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En la pr&aacute;ctica, s&iacute;: la carga mineral es el relleno que da cuerpo y peso a la resina, as&iacute; que &laquo;plato de resina&raquo; y &laquo;plato de carga mineral&raquo; suelen nombrar el mismo tipo de producto. Dentro de la resina hay dos familias: poliuretano y poli&eacute;ster con gel coat.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; desventajas tiene un plato de ducha de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Pesa m&aacute;s que uno acr&iacute;lico, as&iacute; que hay que moverlo con cuidado, y un golpe fuerte con algo pesado puede marcar la superficie, aunque al ir coloreado en masa el da&ntilde;o se disimula. En la limpieza conviene evitar productos abrasivos.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Con qu&eacute; se pega un plato de ducha de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Con cemento cola flexible sobre una base nivelada. Tenemos una gu&iacute;a completa paso a paso: <a href="https://www.adrihosan.com/pegar-plato-de-ducha-de-resina/">c&oacute;mo pegar un plato de ducha de resina</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede poner a ras de suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. El plato lleva la pendiente preformada y puede instalarse enrasado a cota cero si la obra lo permite, o apoyado sobre el suelo. Para duchas sin ning&uacute;n obst&aacute;culo tienes la selecci&oacute;n de <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/">duchas adaptadas</a>.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede cortar un plato de ducha de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, se recorta en obra con una radial y un disco de diamante siguiendo las instrucciones del fabricante. Si el recorte que necesitas es grande, consulta antes: a veces encaja mejor otra medida u otra serie del cat&aacute;logo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;C&oacute;mo se limpia un plato de ducha de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Con agua y jab&oacute;n neutro, aclarando bien. Evita estropajos met&aacute;licos y limpiadores abrasivos: no los necesita y pueden apagar el acabado con el tiempo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto cuesta un plato de ducha de resina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Desde 120,90 &euro; +IVA en las medidas peque&ntilde;as hasta el entorno de los 1.000 &euro; en las medidas m&aacute;s grandes. Lo que m&aacute;s mueve el precio es la medida; despu&eacute;s, el acabado y la serie.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medidas de plato de ducha de resina hay?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Hay 98 medidas publicadas, desde 70x70 hasta m&aacute;s de dos metros de largo, y la familia Gel Coat sale de f&aacute;brica en 41 medidas. Si tu hueco no coincide con ninguna, escr&iacute;benos por <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20de%20resina%20para%20una%20medida%20concreta">WhatsApp</a> con las medidas y te decimos qu&eacute; opciones tienes.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 11. CATEGORIAS RELACIONADAS -->
    <section class="plre-related-section adrihosan-full-width-block">
        <div class="plre-related-wrapper">
            <h2>Sigue mirando</h2>
            <div class="plre-related-row">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-pizarra/" class="plre-related-link">Platos de ducha de pizarra</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/platos-de-ducha-de-poliuretano-base/" class="plre-related-link">Poliuretano Base Bet&oacute;n</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/platos-de-ducha-de-resina-colores/" class="plre-related-link">Resina de colores</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="plre-related-link">Platos de ducha baratos</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/" class="plre-related-link">Platos de ducha grandes</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-solid-surface/" class="plre-related-link">Solid Surface</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="plre-related-link">Todos los platos de ducha</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques 7-11 ?>

    <!-- 12. CONTACTO RICARDO (bloque comun; SIEMPRE visible) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con la medida o la textura?<span>Soy Ricardo, te ayudo a elegir tu plato de ducha de resina.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20plato%20de%20ducha%20de%20resina" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">&#128221;</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
