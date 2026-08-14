<?php
/**
 * Espejos de bano POR MEDIDA - UNA plantilla para todas las medidas
 *
 * Hoy: 5472 (120x80) y 5474 (100x100). Detras vienen 70x70, 80x80 y 60x90 con
 * esta misma pagina y otros numeros, asi que aqui no se escribe ninguna medida
 * a fuego fuera del array de datos: para dar de alta otra medida basta anadir
 * su term_id en adrihosan_espejo_medida_datos() y su case en functions.php.
 *
 * QUE BUSCA EL QUE ENTRA: no un espejo bonito, sino uno que cuadre encima del
 * mueble que ya tiene. Por eso la pagina se ordena alrededor de la medida: el
 * subtitulo dice cuantos hay y desde cuanto, la tira de arriba lleva a las otras
 * medidas y la tabla compara las tres que de verdad existen.
 *
 * CIFRAS EN VIVO: el recuento y el "desde" NO estan escritos en el codigo. Se
 * sacan de la base de datos en cada carga (con transient de 6 h para no meter
 * una consulta de precios en cada visita) porque esta plantilla es compartida y
 * esos numeros cambian solos. Lo unico fijo son los textos de la FAQ, que van
 * palabra por palabra porque despues se cotejan 1:1 con el schema.
 *
 * LA DESCRIPCION SE PINTA UNA SOLA VEZ: los cinco H2 viven en la descripcion
 * del termino y se imprimen aqui via category_description(). Los dos bloques que
 * pinta el tema (.term-description y .woodmart-category-desc) quedan ocultos
 * desde category-espejo-medida.css, que es como lo resuelven las demas
 * categorias con plantilla propia.
 *
 * PRECIOS SIN IVA (woocommerce_prices_include_tax = no), asi que todo importe
 * publicado lleva "+IVA" detras.
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN JSON-LD
 * (el schema lo pone Rank Math); ningun enlace a una medida sin producto; ningun
 * plazo de entrega (no hay almacen, no hay plazo comprometible).
 *
 * @package Adrihosan
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Las medidas que tienen pagina propia con esta plantilla.
 *
 * 'para' se usa en la tabla comparativa y 'label' en la tira de medidas, asi
 * que las medidas que solo aparecen enlazadas (140x80, 90x80) viven en
 * adrihosan_espejo_medida_catalogo() y no aqui.
 */
function adrihosan_espejo_medida_datos() {
    return array(

        // 120x80 - hija de 5471 (Espejo bano 120)
        5472 => array(
            'label' => '120x80',
            'titulo' => 'Espejo de ba&ntilde;o 120x80',
            // TODO: sustituir por la foto de un espejo de ESTA medida montado en
            // pared sobre el mueble (la medida se entiende viendola instalada,
            // no recortada sobre fondo blanco). Mientras tanto va la del silo de
            // espejos, que es la que usan sus hermanas 4402 y 4415.
            'hero'  => 'https://www.adrihosan.com/wp-content/uploads/2026/04/espejo-de-bano-100-cm-Adrihosan.jpg',
            'wa'    => 'Hola,%20busco%20un%20espejo%20de%20bano%20de%20120x80',
        ),

        // 100x100 - hija de 5473 (Espejo bano 100)
        5474 => array(
            'label' => '100x100',
            'titulo' => 'Espejo de ba&ntilde;o 100x100',
            // TODO: misma foto pendiente que en la 120x80.
            'hero'  => 'https://www.adrihosan.com/wp-content/uploads/2026/04/espejo-de-bano-100-cm-Adrihosan.jpg',
            'wa'    => 'Hola,%20busco%20un%20espejo%20de%20bano%20de%20100x100',
        ),
    );
}

/**
 * Todas las medidas de espejo que EXISTEN como categoria y tienen producto, en
 * el orden en que se ofrecen. Es la fuente de la tira "otra medida" y de la
 * columna "Para que mueble" de la tabla.
 *
 * NO se anaden aqui 110x80, 120x100 ni 100x90: no hay categoria y casi no hay
 * producto. Aun asi, antes de pintar cada enlace se comprueba en la BD que el
 * termino existe y tiene productos, para que la tira no pueda enlazar a una
 * pagina vacia aunque alguien anada una medida de mas.
 */
function adrihosan_espejo_medida_catalogo() {
    return array(
        5474 => array( 'label' => '100x100', 'para' => 'Mueble de 100 con poca pared' ),
        5472 => array( 'label' => '120x80',  'para' => 'Mueble de 120 o dos senos' ),
        4415 => array( 'label' => '140x80',  'para' => 'Mueble de 140' ),
        4402 => array( 'label' => '90x80',   'para' => 'Mueble de 80 o 90' ),
    );
}

/** Las tres medidas que entran en la tabla: la actual primero. */
function adrihosan_espejo_medida_tabla( $term_id ) {
    $base = array( 5474, 5472, 4415 );
    return array_merge( array( (int) $term_id ), array_values( array_diff( $base, array( (int) $term_id ) ) ) );
}

/** URL real del termino desde la BD, o la home si algo falla. */
function adrihosan_espejo_medida_url( $term_id ) {
    $url = get_term_link( (int) $term_id, 'product_cat' );
    return is_wp_error( $url ) ? 'https://www.adrihosan.com/' : $url;
}

/** Cuantos productos tiene la categoria ahora mismo. */
function adrihosan_espejo_medida_referencias( $term_id ) {
    $term = get_term( (int) $term_id, 'product_cat' );
    if ( ! $term || is_wp_error( $term ) ) {
        return 0;
    }
    return (int) $term->count;
}

/**
 * Precio mas bajo de la categoria, en vivo desde la BD.
 *
 * Se cachea 6 h en un transient: la pagina la comparten varias medidas y una
 * consulta de precios por visita es justo el tipo de gasto que tumbo el
 * servidor en agosto. Devuelve 0 si no hay ningun producto con precio, y
 * entonces quien llama pinta un guion en vez de inventarse una cifra.
 */
function adrihosan_espejo_medida_precio_desde( $term_id ) {
    $term_id = (int) $term_id;
    $clave   = 'adri_espejo_medida_precio_' . $term_id;
    $cache   = get_transient( $clave );

    if ( false !== $cache ) {
        return ( '' === $cache ) ? 0.0 : (float) $cache;
    }

    $consulta = new WP_Query( array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'posts_per_page'      => 1,
        'fields'              => 'ids',
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
        'tax_query'           => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $term_id,
            ),
        ),
        'meta_query'          => array(
            'precio' => array(
                'key'     => '_price',
                'value'   => 0,
                'compare' => '>',
                'type'    => 'NUMERIC',
            ),
        ),
        'orderby'             => array( 'precio' => 'ASC' ),
    ) );

    $precio = 0.0;
    if ( ! empty( $consulta->posts ) && function_exists( 'wc_get_product' ) ) {
        // get_price() de un variable devuelve el minimo ya sincronizado por
        // WooCommerce; leer el meta _price a pelo no lo garantiza.
        $producto = wc_get_product( (int) $consulta->posts[0] );
        if ( $producto ) {
            $precio = (float) $producto->get_price();
        }
    }
    wp_reset_postdata();

    set_transient( $clave, $precio > 0 ? $precio : '', 6 * HOUR_IN_SECONDS );

    return $precio;
}

/** "95,90" a partir de 95.9. Cadena vacia si no hay precio. */
function adrihosan_espejo_medida_precio_txt( $term_id ) {
    $precio = adrihosan_espejo_medida_precio_desde( $term_id );
    return $precio > 0 ? number_format( $precio, 2, ',', '.' ) : '';
}

/**
 * FAQ de cada medida. Texto cerrado: se copia palabra por palabra al
 * rank_math_schema_FAQPage extrayendolo del HTML publicado, asi que no se toca
 * una sin tocar el otro.
 */
function adrihosan_espejo_medida_faqs( $term_id ) {

    $faqs = array(

        5472 => array(
            array(
                'q' => '&iquest;A qu&eacute; altura se coloca un espejo de 120x80?',
                'a' => 'La referencia habitual es dejar el centro del espejo a unos 160-165 cm del suelo, o entre 10 y 20 cm por encima del mueble. Con 80 cm de alto hay margen para ajustarlo a la altura de la gente de la casa.',
            ),
            array(
                'q' => '&iquest;Un espejo de 120x80 vale para un mueble de 120 cm?',
                'a' => 'S&iacute;. Al tener la misma anchura queda alineado con el mueble, que es el montaje m&aacute;s habitual. Tambi&eacute;n es la medida que se usa sobre los muebles de dos senos de 120 cm.',
            ),
            array(
                'q' => '&iquest;Todos los espejos de 120x80 llevan luz LED?',
                'a' => 'Casi todos: 35 de las 37 referencias de esta medida traen iluminaci&oacute;n LED integrada. Las otras dos son espejos sin luz.',
            ),
            array(
                'q' => '&iquest;El env&iacute;o es gratis?',
                'a' => 'S&iacute;, el env&iacute;o es gratuito en todos los espejos de ba&ntilde;o.',
            ),
        ),

        5474 => array(
            array(
                'q' => '&iquest;Cu&aacute;ndo conviene un espejo cuadrado de 100x100?',
                'a' => 'Cuando hay un mueble de 100 cm y poca pared libre a los lados. Al ganar en alto lo que no gana en ancho, refleja m&aacute;s cuerpo y agranda visualmente el ba&ntilde;o m&aacute;s que un rectangular apaisado de la misma anchura.',
            ),
            array(
                'q' => '&iquest;Cu&aacute;ntas referencias de 100x100 llevan luz LED?',
                'a' => '21 de las 25 referencias de esta medida traen iluminaci&oacute;n LED integrada.',
            ),
            array(
                'q' => '&iquest;A qu&eacute; altura se coloca un espejo de 100x100?',
                'a' => 'Dejando el borde inferior entre 10 y 20 cm por encima del mueble, con lo que el centro queda cerca de los 160-165 cm del suelo.',
            ),
            array(
                'q' => '&iquest;El env&iacute;o es gratis?',
                'a' => 'S&iacute;, el env&iacute;o es gratuito en todos los espejos de ba&ntilde;o.',
            ),
        ),
    );

    return isset( $faqs[ $term_id ] ) ? $faqs[ $term_id ] : array();
}

function adrihosan_espejo_medida_contenido_superior() {

    // Regla del PR #74: en una URL de filtro CON regla SEO propia solo se
    // pintan hero, filtro, listado y contacto.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();

    $term_id = get_queried_object_id();
    $datos   = adrihosan_espejo_medida_datos();
    if ( ! isset( $datos[ $term_id ] ) ) {
        return;
    }

    $info      = $datos[ $term_id ];
    $label     = $info['label'];
    $refs      = adrihosan_espejo_medida_referencias( $term_id );
    $desde     = adrihosan_espejo_medida_precio_txt( $term_id );
    $catalogo  = adrihosan_espejo_medida_catalogo();

    // Subtitulo: cada dato solo entra si existe. Sin productos contados no se
    // escribe "0 referencias", y sin precio no se escribe un "desde" vacio.
    $subtitulo = array();
    if ( $refs > 0 ) {
        $subtitulo[] = $refs . ' referencias';
    }
    if ( '' !== $desde ) {
        $subtitulo[] = 'desde ' . $desde . '&nbsp;&euro;/ud +IVA';
    }
    $subtitulo[] = 'env&iacute;o gratis';
    ?>
    <!-- 1-3. HERO con miga de pan, H1 y subtitulo -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('<?php echo esc_url( $info['hero'] ); ?>');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="<?php echo esc_url( adrihosan_espejo_medida_url( 99 ) ); ?>">Muebles de ba&ntilde;o</a> &gt;
                <a href="<?php echo esc_url( adrihosan_espejo_medida_url( 102 ) ); ?>">Espejos</a> &gt;
                <span><?php echo $info['titulo']; ?></span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( $info['titulo'] ); ?></h1>
            <p class="hero-tagline"><?php echo implode( ' &middot; ', $subtitulo ); ?></p>
            <?php if ( ! $es_filtro ) : ?>
            <div class="hero-buttons">
                <a href="#catalogo-espejo-medida" class="hero-btn primary">Ver cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=<?php echo esc_attr( $info['wa'] ); ?>" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>

    <!-- 4. OTRA MEDIDA. Enlaces reales, no formulario: funcionan sin JS y los
         rastrea Google, que es medio objetivo del bloque. Solo se pinta la
         medida que existe en la BD y tiene producto. -->
    <section class="esp-medidas-section adrihosan-full-width-block">
        <div class="esp-medidas-wrapper">
            <p class="esp-medidas-label">&iquest;Buscabas otra medida?</p>
            <div class="esp-medidas-row">
                <?php
                foreach ( $catalogo as $otro_id => $otro ) {
                    if ( (int) $otro_id === (int) $term_id ) {
                        continue;
                    }
                    if ( adrihosan_espejo_medida_referencias( $otro_id ) < 1 ) {
                        continue;
                    }
                    ?>
                    <a href="<?php echo esc_url( adrihosan_espejo_medida_url( $otro_id ) ); ?>" class="esp-pill"><?php echo esc_html( $otro['label'] ); ?>&nbsp;cm</a>
                    <?php
                }
                ?>
                <a href="<?php echo esc_url( adrihosan_espejo_medida_url( 102 ) ); ?>" class="esp-pill esp-pill-todos">Todos los espejos</a>
            </div>
        </div>
    </section>

    <!-- 5. TABLA COMPARATIVA. Recuento y "desde" salen de la BD en cada carga:
         si una medida se queda sin precio publicado, su celda pinta un guion. -->
    <section class="esp-tabla-section adrihosan-full-width-block">
        <div class="esp-tabla-wrapper">
            <h2>Compara las medidas</h2>
            <div class="esp-tabla-scroll">
                <table class="esp-tabla">
                    <thead>
                        <tr>
                            <th>Medida</th>
                            <th>Referencias</th>
                            <th>Desde</th>
                            <th>Para qu&eacute; mueble</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ( adrihosan_espejo_medida_tabla( $term_id ) as $fila_id ) {
                            if ( ! isset( $catalogo[ $fila_id ] ) ) {
                                continue;
                            }
                            $fila_refs  = adrihosan_espejo_medida_referencias( $fila_id );
                            $fila_desde = adrihosan_espejo_medida_precio_txt( $fila_id );
                            $es_actual  = ( (int) $fila_id === (int) $term_id );
                            ?>
                            <tr<?php echo $es_actual ? ' class="is-current"' : ''; ?>>
                                <td>
                                    <?php if ( $es_actual ) : ?>
                                    <strong><?php echo esc_html( $catalogo[ $fila_id ]['label'] ); ?></strong>
                                    <?php else : ?>
                                    <a href="<?php echo esc_url( adrihosan_espejo_medida_url( $fila_id ) ); ?>"><?php echo esc_html( $catalogo[ $fila_id ]['label'] ); ?></a>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $fila_refs > 0 ? esc_html( $fila_refs ) : '&mdash;'; ?></td>
                                <td><?php echo '' !== $fila_desde ? esc_html( $fila_desde ) . '&nbsp;&euro; +IVA' : '&mdash;'; ?></td>
                                <td><?php echo esc_html( $catalogo[ $fila_id ]['para'] ); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php endif; // fin bloques de contenido ?>

    <!-- 6. FILTROS (conjunto 427306, el de la familia muebles de bano) y
         CATALOGO. El filtro se pinta SIEMPRE, tambien en URL de filtro. -->
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode( '[fe_widget id="427306"]' ); ?></div>

    <div class="product-loop-header">
        <h2 id="catalogo-espejo-medida" class="product-loop-title">Cat&aacute;logo de espejos de <?php echo esc_html( $label ); ?>&nbsp;cm</h2>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (lo exige wpc_filter_settings) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_espejo_medida_contenido_inferior() {

    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();

    $term_id = get_queried_object_id();
    $datos   = adrihosan_espejo_medida_datos();
    if ( ! isset( $datos[ $term_id ] ) ) {
        echo '</div><!-- /fe-products-wrapper -->';
        return;
    }

    $info = $datos[ $term_id ];
    ?>
    </div><!-- /fe-products-wrapper -->

    <?php if ( ! $es_filtro ) : ?>

    <?php
    // 7. DESCRIPCION DEL TERMINO (los cinco H2). Se pinta AQUI y solo aqui: los
    // dos bloques del tema van ocultos desde el CSS de la plantilla.
    $descripcion = category_description();
    if ( ! empty( $descripcion ) ) :
    ?>
    <section class="bho-guide-section adrihosan-full-width-block">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php echo $descripcion; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 8. FAQ (HTML visible SIN JSON-LD).
         Regla CLAUDE.md: el schema FAQPage lo pone Rank Math desde el termino,
         copiando este texto visible palabra por palabra. Se tocan los dos o
         ninguno. -->
    <?php $faqs = adrihosan_espejo_medida_faqs( $term_id ); ?>
    <?php if ( ! empty( $faqs ) ) : ?>
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre el <?php echo $info['titulo']; ?></h2>
            <div class="faq-items-wrapper">
<?php foreach ( $faqs as $faq ) : ?>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span><?php echo $faq['q']; ?></span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p><?php echo $faq['a']; ?></p>
                    </div>
                </div>
<?php endforeach; ?>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php endif; // fin bloques de contenido ?>

    <!-- 9. CONTACTO RICARDO (se pinta SIEMPRE, tambien en URL de filtro) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en espejos de ba&ntilde;o de Adrihosan">
                <div>
                    <h2>&iquest;Te cuadra la medida?<span>Soy Ricardo, d&iacute;me el ancho de tu mueble y te digo qu&eacute; espejo le va.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=<?php echo esc_attr( $info['wa'] ); ?>" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
