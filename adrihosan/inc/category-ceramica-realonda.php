<?php
/**
 * Category: Cer&aacute;mica Realonda (ID: 5668, product_cat, hija de 62 Cer&aacute;mica)
 *
 * Marca de cer&aacute;mica con 308 productos. Par brand+product_cat como Vives y Navarti:
 * el t&eacute;rmino brand 1323 (/brand/realonda/) se queda vivo, esta es la p&aacute;gina de silo.
 *
 * Filter Set propio: 431000 «Realonda», creado por Ricardo desde el panel de
 * FilterEverything. Los sets NO se pueden crear por SQL: el plugin no los reconoce.
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN JSON-LD
 * (el schema lo emite Rank Math); contacto con las SEIS tarjetas incluida Formulario.
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGOR&Iacute;A 5668 - CER&Aacute;MICA REALONDA
// ============================================================================

function adrihosan_ceramica_realonda_contenido_superior() {
    ?>
    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/05/REALONDA_AMBIENTE-PHUKET_PISCINA2.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <span>Cer&aacute;mica Realonda</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Cer&aacute;mica Realonda: azulejos y pavimentos porcel&aacute;nicos' ); ?></h1>
            <div style="display:inline-block; background:#4dd2d0; color:#102e35; font-weight:700; padding:6px 18px; border-radius:4px; font-size:0.85rem; margin-bottom:12px; font-family:'Poppins','Poppins Fallback',sans-serif;">&#9989; Distribuidor oficial &middot; 308 modelos en cat&aacute;logo</div>
            <p>Aqu&iacute; tienes el cat&aacute;logo completo de <strong>cer&aacute;mica Realonda</strong> que servimos desde Adrihosan. Es un fabricante de <strong>porcel&aacute;nico</strong>: 288 de sus 308 referencias lo son, con mucho azulejo decorado, 48 modelos hexagonales, suelo de exterior y pelda&ntilde;o t&eacute;cnico. Fabricante espa&ntilde;ol de Onda, Castell&oacute;n. Filtra por estilo, formato o color y pide muestra antes de decidir.</p>
            <div class="hero-buttons">
                <a href="#catalogo-realonda" class="hero-btn primary">Ver los 308 modelos</a>
                <a href="#contacto-realonda" class="hero-btn secondary">Pedir muestra</a>
            </div>
        </div>
    </section>

    <!-- 2. SELLOS DE VALOR -->
    <section class="trust-bar-section adrihosan-full-width-block">
        <div class="trust-bar-wrapper">
            <div class="trust-item">
                <div class="trust-icon">&#127981;</div>
                <div class="trust-text">
                    <strong>Fabricaci&oacute;n espa&ntilde;ola</strong>
                    <span>Realonda fabrica en Onda, Castell&oacute;n</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128230;</div>
                <div class="trust-text">
                    <strong>Muestra antes de comprar</strong>
                    <span>La muestra es gratis. Solo pagas el env&iacute;o</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#127912;</div>
                <div class="trust-text">
                    <strong>M&aacute;s de 70 colecciones</strong>
                    <span>Antigua, Marrakech, Manhattan, Zilij, Parma&hellip;</span>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">&#128222;</div>
                <div class="trust-text">
                    <strong>Te lo calculamos</strong>
                    <span>Metros, cajas y piezas especiales, sin coste</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. NAVEGACI&Oacute;N A FAMILIAS HERMANAS (URLs verificadas 200) -->
    <section class="quick-nav-section adrihosan-full-width-block">
        <div class="quick-nav-wrapper">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/" class="quick-nav-pill">&#11040; Hexagonales</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/" class="quick-nav-pill">&#129704; Porcel&aacute;nico</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/" class="quick-nav-pill">&#127774; Suelo de exterior</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/" class="quick-nav-pill">&#128703; Azulejos de ba&ntilde;o</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/" class="quick-nav-pill">&#127859; Azulejos de cocina</a>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Realonda tiene m&aacute;s de 70 colecciones en cat&aacute;logo, as&iacute; que lo r&aacute;pido es filtrar por <strong>Estilo</strong>, <strong>Formato</strong> y <strong>Color</strong> en vez de recorrer las p&aacute;ginas. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 5. DESTINO M&Oacute;VIL + WIDGET DE FILTROS -->
    <div id="destino-filtro-adria-realonda" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="431000"]'); ?></div>

    <!-- 6. T&Iacute;TULO DEL CAT&Aacute;LOGO -->
    <div id="catalogo-realonda" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de cer&aacute;mica Realonda</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_ceramica_realonda_contenido_inferior() {
    ?>
    </div><!-- /#fe-products-wrapper -->

    <!-- 8. DESCRIPCI&Oacute;N DIN&Aacute;MICA DEL T&Eacute;RMINO (la gestiona Rank Math / WooCommerce) -->
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php
                $term = get_queried_object();
                if ( $term && ! empty( $term->description ) ) {
                    echo wp_kses_post( wpautop( $term->description ) );
                }
                ?>
            </div>
        </div>
    </section>

    <!-- 9. C&Oacute;MO ELEGIR (contenido propio, decisiones reales del comprador) -->
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <h2>C&oacute;mo elegir tu cer&aacute;mica Realonda sin equivocarte</h2>
            <p>Realonda fabrica <strong>porcel&aacute;nico</strong>, y eso simplifica la decisi&oacute;n m&aacute;s de lo que parece: cualquier porcel&aacute;nico vale para pared, as&iacute; que la pregunta real es si esa pieza aguanta el <strong>suelo</strong> y en qu&eacute; zona. La divisi&oacute;n de nuestro cat&aacute;logo entre suelo y pared es comercial, no t&eacute;cnica.</p>
            <p>Conviene no confundirlo con la baldosa hidr&aacute;ulica: la hidr&aacute;ulica de verdad es cemento y la tienes en <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/">baldosa hidr&aacute;ulica original</a>. Lo que hace Realonda son piezas porcel&aacute;nicas decoradas, m&aacute;s f&aacute;ciles de mantener y sin el sellado que pide el cemento.</p>
            <p>Lo segundo es el formato. Sus colecciones decoradas se mueven mucho en <strong>33x33 y 44x44</strong>; el <strong>hexagonal</strong> es una familia entera con 48 modelos, y luego est&aacute; el suelo de exterior y el pelda&ntilde;o t&eacute;cnico. Si vienes de una foto, filtra primero por formato: te ahorra la mitad del cat&aacute;logo.</p>
            <p>Y lo tercero, el tono. Entre dos producciones distintas de la misma referencia puede haber diferencia, por eso la muestra que te enviamos sale de f&aacute;brica: ves el tono de la producci&oacute;n actual, no el de una caja que lleve meses en una estanter&iacute;a. Si dudas entre dos, te mandamos las dos y decides con las piezas delante.</p>
            <p>Si buscas otras marcas de cer&aacute;mica espa&ntilde;ola, tenemos tambi&eacute;n el cat&aacute;logo completo de <a href="https://www.adrihosan.com/categoria-producto/ceramica/ceramica-vives/">Cer&aacute;mica Vives</a> y de <a href="https://www.adrihosan.com/categoria-producto/ceramica/navarti-ceramica/">Navarti Cer&aacute;mica</a>.</p>
        </div>
    </section>

    <!-- 9 bis. LAS DOS TECNOLOG&Iacute;AS DE REALONDA QUE S&Iacute; SERVIMOS -->
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <h2>SmartGrip y ACTIV: qu&eacute; son y en qu&eacute; piezas las tenemos</h2>
            <p>Realonda no fabrica solo dibujo. Dos de sus desarrollos cambian d&oacute;nde puedes poner la pieza, y conviene saber cu&aacute;l llevas antes de comprar.</p>
            <p><strong>SmartGrip</strong> es un acabado antideslizante de <em>tacto suave</em>: agarra sin raspar, y se limpia con agua y detergente com&uacute;n. Lo interesante para una reforma es que el acabado <strong>no altera el color ni la textura</strong> de la pieza, as&iacute; que puedes llevar el mismo suelo del sal&oacute;n a la terraza sin cambiar de modelo ni de tono. Es gres porcel&aacute;nico antihielo e ign&iacute;fugo, resistente a agentes qu&iacute;micos y atmosf&eacute;ricos. En nuestro cat&aacute;logo tenemos <strong>41 modelos Realonda con este acabado</strong>, entre ellos la serie Denali.</p>
            <p><strong>ACTIV</strong> es su l&iacute;nea antibacteriana: un escudo de iones de plata incorporado en la propia baldosa, no un tratamiento aplicado por encima que se acabe yendo. Realonda declara que elimina hasta el <strong>99,9&nbsp;% de las bacterias</strong>, que la protecci&oacute;n dura toda la vida &uacute;til de la pieza y que funciona <strong>con cualquier iluminaci&oacute;n</strong> &mdash; a diferencia de otras tecnolog&iacute;as que necesitan luz para activarse. Adem&aacute;s reduce olores y manchas. De esta l&iacute;nea servimos <strong>9 referencias</strong>, todas de la colecci&oacute;n hexagonal Venato.</p>
            <p>Si vas a solar un ba&ntilde;o, una cocina o una terraza, dinos la pieza que te gusta y te confirmamos si esa referencia concreta lleva SmartGrip o ACTIV: no todas las colecciones los incorporan.</p>
        </div>
    </section>

    <!-- 10. CTA INTERMEDIO -->
    <section class="bumper-section adrihosan-full-width-block" id="bumper-realonda">
        <div class="bumper-wrapper">
            <div class="bumper-overlay"></div>
            <div class="bumper-content">
                <h2>&iquest;Has visto una colecci&oacute;n de Realonda que no encuentras aqu&iacute;?</h2>
                <p>Trabajamos con su cat&aacute;logo completo. Dinos la colecci&oacute;n y el formato y te decimos si podemos servirla.</p>
                <div class="bumper-buttons">
                    <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20una%20colecci%C3%B3n%20de%20Realonda" class="hero-btn primary">Preguntar por WhatsApp</a>
                    <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="hero-btn secondary">Escribirnos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. FAQ (bloque visible, SIN JSON-LD: el schema lo emite Rank Math) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre cer&aacute;mica Realonda</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Pod&eacute;is enviarme una muestra antes de comprar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. La muestra es gratuita y solo pagas la entrega: <strong>18 &euro; por fabricante</strong>, no por pieza, as&iacute; que puedes pedir varias referencias de Realonda por el mismo importe. Ese coste te lo devolvemos en tu pedido a partir de 600 &euro;. Las muestras salen de f&aacute;brica, por eso ves el tono de la producci&oacute;n actual.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;La cer&aacute;mica Realonda vale para suelo y para pared?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para pared vale cualquier porcel&aacute;nico, y pr&aacute;cticamente todo el cat&aacute;logo de Realonda lo es. Al rev&eacute;s no funciona igual: no toda pieza pensada para pared aguanta el tr&aacute;nsito de un suelo. Si vas a alicatar y solar con la misma referencia, d&iacute;noslo y te confirmamos contra la ficha del fabricante antes de que pidas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los precios son por metro cuadrado o por caja?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El precio que ves es <strong>por metro cuadrado y sin IVA</strong>. La venta se hace por caja completa, y los metros que trae cada caja aparecen en el t&iacute;tulo de cada producto. Si nos dices los metros de tu estancia te calculamos las cajas, incluido el porcentaje de recorte que conviene a&ntilde;adir.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>Busco una colecci&oacute;n de Realonda que no aparece en la web</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Trabajamos con el cat&aacute;logo completo de Realonda, y en la web est&aacute; lo que tenemos publicado, no todo lo que podemos servir. Dinos el nombre de la colecci&oacute;n y el formato &mdash; Marrakech, Antigua, Manhattan, Zilij, Parma, Iguaz&uacute;, Carnaby&hellip; &mdash; y te confirmamos disponibilidad y precio.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto tarda en llegar un pedido de Realonda?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende de la colecci&oacute;n y de la producci&oacute;n del fabricante en ese momento, as&iacute; que preferimos no darte un plazo gen&eacute;rico que luego no se cumpla. Consulta la referencia concreta por <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20quiero%20saber%20el%20plazo%20de%20una%20referencia%20de%20Realonda">WhatsApp al 96 195 71 36</a> y te decimos el plazo real de esa pieza antes de que pidas.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 12. CONTACTO (bloque est&aacute;ndar, SEIS tarjetas con Formulario) -->
    <section class="contact-help-section-common adrihosan-full-width-block" id="contacto-realonda">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo, experto en cer&aacute;mica Realonda">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con alguna colecci&oacute;n de Realonda?
                        <span>Te asesoro sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">&#128205;</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">&#128187;</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">&#128222;</div>
                    <div class="label">Tel&eacute;fono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20informaci%C3%B3n%20sobre%20cer%C3%A1mica%20Realonda" class="contact-option-common">
                    <div class="icon">&#128172;</div>
                    <div class="label">WhatsApp</div>
                </a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common">
                    <div class="icon">&#128221;</div>
                    <div class="label">Formulario</div>
                </a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common">
                    <div class="icon">&#9993;&#65039;</div>
                    <div class="label">Email</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGOR&Iacute;A 5668 - CER&Aacute;MICA REALONDA
// ============================================================================
// Cortesia Codigo AdrIA
