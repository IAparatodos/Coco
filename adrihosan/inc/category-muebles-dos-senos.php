<?php
/**
 * Familia "muebles de bano con dos senos" - 7 paginas, UNA plantilla
 *
 * 5461 madre (lavabo doble) + 6 hijas por medida: 120, 130, 140, 150, 160, 180.
 *
 * EL PROBLEMA DEL QUE COMPRA no es estetico: tiene un hueco medido en
 * centimetros y quiere dos senos dentro. Por eso las busquedas llevan la medida
 * delante ("mueble bano 150 cm dos senos") y por eso la pieza central de estas
 * paginas NO es el hero: es el SELECTOR DE MEDIDA. Va arriba en las siete y
 * lleva de una a otra, que resuelve tres cosas a la vez: la duda real del
 * comprador, el enlazado interno de la familia y que Google entienda que son
 * hermanas y no duplicados.
 *
 * La madre va en modo ESCAPARATE: 5.474 productos son unas 547 paginas de
 * listado y nadie las recorre. Su trabajo es repartir por medida, igual que la
 * madre 86 del silo de platos.
 *
 * Wireframe 2026-08-11. Datos verificados en BD ese dia.
 *
 * URLs POR get_term_link(): las siete se enlazan entre si sacando la URL de la
 * base de datos, nunca escrita a mano. Asi el selector no puede dar 404 aunque
 * cambien los slugs o el termino se mueva de padre.
 *
 * PRECIOS: confirmado el 11-ago que toda la web muestra los precios SIN IVA,
 * como el resto del catalogo, asi que se publican con el "+IVA" habitual. El
 * "desde" va exacto y el "hasta" acompana para dar el rango. No van en el hero
 * a proposito: en un catalogo de 536 a 3.858 EUR, un "desde" ahi promete lo
 * que el grueso no cumple.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el schema lo pone Rank Math y los textos deben coincidir palabra por
 * palabra); cifras de catalogo redondeadas a la baja; ningun dato que no este
 * verificado en BD.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Datos de las siete paginas. Las cifras van redondeadas a la baja al pintarse:
 * con 5.474 productos que cambian a diario, la cifra exacta caduca en una
 * semana (leccion de la madre 86, que publicaba 918 y eran 745).
 */
function adrihosan_dos_senos_datos() {
    return array(
        5461 => array( 'medida' => 0,   'productos' => 5474, 'aprox' => '5.400', 'desde' =>   '536', 'hasta' => '3.858' ),
        5463 => array( 'medida' => 120, 'productos' => 1148, 'aprox' => '1.100', 'desde' =>   '536', 'hasta' => '3.016' ),
        5464 => array( 'medida' => 130, 'productos' =>  675, 'aprox' =>   '600', 'desde' =>   '853', 'hasta' => '3.073' ),
        5462 => array( 'medida' => 140, 'productos' =>  543, 'aprox' =>   '500', 'desde' =>   '917', 'hasta' => '3.841' ),
        5460 => array( 'medida' => 150, 'productos' => 1367, 'aprox' => '1.300', 'desde' =>   '978', 'hasta' => '3.858' ),
        5459 => array( 'medida' => 160, 'productos' =>  176, 'aprox' =>   '170', 'desde' => '1.313', 'hasta' => '3.393' ),
        5465 => array( 'medida' => 180, 'productos' =>  233, 'aprox' =>   '230', 'desde' => '1.224', 'hasta' => '3.505' ),
    );
}

/** Orden de las medidas en el selector, de menor a mayor. */
function adrihosan_dos_senos_orden() {
    return array( 5463 => 120, 5464 => 130, 5462 => 140, 5460 => 150, 5459 => 160, 5465 => 180 );
}

/** Devuelve la URL real del termino desde la BD, o la home si algo falla. */
function adrihosan_dos_senos_url( $term_id ) {
    $url = get_term_link( (int) $term_id, 'product_cat' );
    return is_wp_error( $url ) ? 'https://www.adrihosan.com/' : $url;
}

function adrihosan_dos_senos_contenido_superior() {
    // Regla del PR #74: en una URL de filtro CON regla SEO propia solo se
    // pintan hero, filtro, listado y contacto.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();

    $term_id = get_queried_object_id();
    $datos   = adrihosan_dos_senos_datos();
    if ( ! isset( $datos[ $term_id ] ) ) {
        return;
    }
    $info     = $datos[ $term_id ];
    $medida   = (int) $info['medida'];
    $es_madre = ( 0 === $medida );
    $aprox    = $info['aprox'];
    $desde    = $info['desde'];
    $hasta    = $info['hasta'];
    $orden    = adrihosan_dos_senos_orden();
    ?>
    <!-- 1. HERO -->
    <!-- TODO: falta la imagen editorial (mueble grande y en primer plano, no de
         adorno). Mientras tanto, fondo corporativo. El degradado lo pone el
         CSS: basta cambiar el style por background-image: url('...'); -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/">Muebles de ba&ntilde;o</a> &gt;
                <?php if ( $es_madre ) : ?>
                <span>Con lavabo doble</span>
                <?php else : ?>
                <a href="<?php echo esc_url( adrihosan_dos_senos_url( 5461 ) ); ?>">Con lavabo doble</a> &gt;
                <span><?php echo esc_html( $medida ); ?> cm</span>
                <?php endif; ?>
            </nav>
            <h1><?php
                echo adrihosan_h1_dinamico(
                    $es_madre
                        ? 'Muebles de ba&ntilde;o con lavabo doble'
                        : 'Muebles de ba&ntilde;o de ' . $medida . ' cm con dos senos'
                );
            ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <!-- El precio NO va en el hero a proposito: con un catalogo de 536
                 a 3.858 EUR, un "desde" aqui promete lo que el grueso no
                 cumple. Va en la cuarta tarjeta, con su rango al lado. -->
            <p>M&aacute;s de <?php echo esc_html( $aprox ); ?> acabados de 8 modelos Mondiaz, con los dos senos y el lavabo puestos.</p>
            <div class="hero-buttons">
                <a href="#catalogo-dos-senos" class="hero-btn primary">Ver cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20mueble%20de%20bano%20con%20dos%20senos" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>

    <?php if ( $es_madre ) : ?>
    <!-- 2a. ESCAPARATE DE MEDIDAS (solo la madre).
         5.474 productos son ~547 paginas de listado: el trabajo de esta pagina
         es repartir por medida, no ensenar catalogo. -->
    <section class="dsen-showcase-section adrihosan-full-width-block">
        <div class="dsen-showcase-wrapper">
            <h2>&iquest;Cu&aacute;nto mide tu hueco?</h2>
            <p class="dsen-showcase-sub">Es lo primero que hay que resolver: el mueble tiene que entrar. Elige el ancho y ver&aacute;s solo los que te sirven.</p>
            <div class="dsen-showcase-grid">
                <?php foreach ( $orden as $id => $cm ) : ?>
                <a href="<?php echo esc_url( adrihosan_dos_senos_url( $id ) ); ?>" class="dsen-showcase-card">
                    <span class="dsen-showcase-cm"><?php echo esc_html( $cm ); ?><small>cm</small></span>
                    <span class="dsen-showcase-count">M&aacute;s de <?php echo esc_html( $datos[ $id ]['aprox'] ); ?> acabados</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php else : ?>
    <!-- 2b. SELECTOR DE MEDIDA (las seis hijas).
         La pieza central de estas paginas. Pastillas y no formulario: son
         enlaces reales, funcionan sin JS y los rastrea Google, que es medio
         objetivo del bloque. -->
    <section class="dsen-picker-section adrihosan-full-width-block">
        <div class="dsen-picker-wrapper">
            <p class="dsen-picker-label">&iquest;Cu&aacute;nto mide tu hueco?</p>
            <div class="dsen-picker-row">
                <?php foreach ( $orden as $id => $cm ) : ?>
                    <?php if ( $id === $term_id ) : ?>
                    <span class="dsen-pill is-current" aria-current="page"><?php echo esc_html( $cm ); ?> cm</span>
                    <?php else : ?>
                    <a href="<?php echo esc_url( adrihosan_dos_senos_url( $id ) ); ?>" class="dsen-pill"><?php echo esc_html( $cm ); ?> cm</a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <a href="<?php echo esc_url( adrihosan_dos_senos_url( 5461 ) ); ?>" class="dsen-picker-all">Ver todos los muebles con lavabo doble &rarr;</a>
        </div>
    </section>
    <?php endif; ?>

    <!-- 3. LAS CUATRO TARJETAS -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <h3>M&aacute;s de <?php echo esc_html( $aprox ); ?> acabados</h3>
                    <p>De 8 modelos Mondiaz: Vica, Erin, Alan, Kurve, Lush y Lagom, entre otros.</p>
                </div>
                <div class="ap-value-card">
                    <h3>Lavabo incluido</h3>
                    <p>Los dos senos vienen con el mueble. No se compran aparte ni se suman al presupuesto.</p>
                </div>
                <div class="ap-value-card">
                    <h3>Suspendido o con patas</h3>
                    <p>Seg&uacute;n el modelo, y con 1, 2 o 4 cajones.</p>
                </div>
                <div class="ap-value-card">
                    <h3>Desde <?php echo esc_html( $desde ); ?>&nbsp;&euro; +IVA</h3>
                    <p>Y hasta <?php echo esc_html( $hasta ); ?>&nbsp;&euro; en los acabados m&aacute;s completos. Lo que mueve el precio es el modelo, el n&uacute;mero de cajones y si lleva espejo LED.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CUANTO SITIO NECESITAS DE VERDAD (lo que no cuenta nadie mas) -->
    <section class="dsen-space-section adrihosan-full-width-block">
        <div class="dsen-space-wrapper">
            <h2>Cu&aacute;nto sitio necesitas de verdad</h2>
            <p>Por debajo de 120&nbsp;cm no caben dos senos con holgura: quedan pegados y no queda sitio para dejar nada en medio. A partir de 140 empieza a haber encimera libre entre los dos, que en el uso diario se nota m&aacute;s de lo que parece cuando lo miras en una foto.</p>
            <p>Mide el hueco por su punto m&aacute;s estrecho y, si el mueble va entre dos paredes, d&eacute;jate margen a los lados para poder meterlo y ajustarlo. Con los suspendidos puedes jugar con la altura a la que lo cuelgas; con los de patas, la altura te viene dada.</p>
        </div>
    </section>
    <?php endif; // fin bloques de contenido ?>

    <!-- 5. FILTRO FE PRO (conjunto 427306, el de la familia muebles de bano).
         SIEMPRE visible, tambien en URL de filtro. -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="427306"]' ); ?></div>
    </div>

    <!-- 6. CATALOGO. Orden por precio ascendente desde functions.php. -->
    <div class="product-loop-header">
        <h2 id="catalogo-dos-senos"><?php
            echo $es_madre
                ? 'Cat&aacute;logo de muebles con lavabo doble'
                : 'Cat&aacute;logo de muebles de ' . esc_html( $medida ) . ' cm';
        ?></h2>
        <p>M&aacute;s de <?php echo esc_html( $aprox ); ?> acabados, ordenados de menor a mayor precio.</p>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_dos_senos_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();

    $term_id = get_queried_object_id();
    $datos   = adrihosan_dos_senos_datos();
    if ( ! isset( $datos[ $term_id ] ) ) {
        echo '</div><!-- /fe-products-wrapper -->';
        return;
    }
    $info     = $datos[ $term_id ];
    $medida   = (int) $info['medida'];
    $es_madre = ( 0 === $medida );
    $aprox    = $info['aprox'];
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>
    <!-- 7. FAQ (6 preguntas, HTML visible SIN JSON-LD).
         El schema lo pone Rank Math desde el termino y los textos deben
         coincidir palabra por palabra: se tocan los dos o ninguno. -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre muebles de ba&ntilde;o con dos senos</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Caben dos senos en un mueble de 120&nbsp;cm?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Caben, y de hecho 120&nbsp;cm es la medida m&aacute;s peque&ntilde;a en la que trabajamos el lavabo doble. Eso s&iacute;, los dos senos quedan pegados y casi sin encimera libre entre ellos. Si tienes hueco, a partir de 140&nbsp;cm empiezas a ganar espacio en medio, que es donde de verdad se nota.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;El lavabo viene incluido?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. El precio que ves incluye el mueble con sus dos senos puestos. No hay que comprar los lavabos aparte ni sumarlos al presupuesto, y en muchos modelos puedes elegir el tipo de lavabo y el n&uacute;mero de orificios para la grifer&iacute;a.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre los modelos Vica, Erin y Alan?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Son familias distintas dentro de Mondiaz y cambian en el dise&ntilde;o del frente, el n&uacute;mero de cajones y las combinaciones de acabado disponibles. Vica es la de m&aacute;s recorrido en color y configuraciones; Erin y Alan tienen sus propias cartas. Lo pr&aacute;ctico es filtrar por la medida que necesitas y comparar los que entren en tu hueco.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo elegir el color de los cajones y del lavabo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, y es justo lo que explica que haya tantas referencias. Cada modelo combina color de mueble, modelo de lavabo, n&uacute;mero de cajones, orificios de grifer&iacute;a y espejo LED opcional. Cada combinaci&oacute;n es una referencia distinta, as&iacute; que lo m&aacute;s c&oacute;modo es usar los filtros para acotar.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Suspendido o con patas?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El suspendido deja el suelo libre, facilita la limpieza y te permite decidir a qu&eacute; altura lo cuelgas, pero necesita una pared que aguante el peso del mueble con los dos lavabos. El de patas apoya en el suelo y viene con su altura de f&aacute;brica. Si la pared es de pladur sin refuerzo, ve a por el de patas.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto tarda en llegar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Depende del acabado y de si esa combinaci&oacute;n est&aacute; en stock o entra en la siguiente fabricaci&oacute;n. Te confirmamos la fecha concreta al hacer el pedido. Si tienes obra empezada, d&iacute;noslo al pedir y lo tenemos en cuenta.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. GUIAS DEL BLOG (solo las verificadas del repo) -->
    <section class="dsen-guides-section adrihosan-full-width-block">
        <div class="dsen-guides-wrapper">
            <h2>Antes de decidir</h2>
            <div class="dsen-guides-grid">
                <a href="https://www.adrihosan.com/a-que-altura-se-pone-un-lavabo-suspendido/" class="dsen-guide-link">A qu&eacute; altura se pone un lavabo suspendido</a>
                <a href="https://www.adrihosan.com/lavabos-de-bano-diferentes-opciones/" class="dsen-guide-link">Tipos de lavabo de ba&ntilde;o</a>
            </div>
        </div>
    </section>
    <?php endif; // fin bloques de contenido ?>

    <!-- 9. CONTACTO RICARDO (se pinta SIEMPRE, tambien en URL de filtro) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en muebles de ba&ntilde;o de Adrihosan">
                <div>
                    <h2>&iquest;Te cuadra la medida?<span>Soy Ricardo, d&iacute;me el ancho de tu hueco y te digo qu&eacute; entra.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20mueble%20de%20bano%20con%20dos%20senos" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
