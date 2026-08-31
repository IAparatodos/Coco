<?php
/**
 * DESVIO A CATEGORIA ("¿Buscas los espejos redondos?")
 *
 * Por que existe: hay fichas de producto que rankean para consultas de
 * CATEGORIA y no venden. El caso que lo motiva es el espejo redondo Mirko
 * (`espejo-negro-sin-iluminacion-led-redondo`): 22.501 impresiones al año en
 * posicion 5,8 con un CTR del 0,15 %. Sus consultas son "espejo redondo negro"
 * (4.188 impr.), "espejo negro redondo" (2.573) o "espejo baño negro" (1.043).
 * Nadie busca ese producto: buscan la familia. Y la ficha es un callejon sin
 * salida, porque enseña un solo modelo de otro fabricante que no se vende.
 *
 * Que hace: pinta un bloque de enlaces a las categorias que esas consultas si
 * responden, para que la impresion muerta acabe en un listado con inventario.
 *
 * Que NO hace: tocar el posicionamiento de la ficha. Esa pagina es el unico
 * activo de la tienda en posicion 5-6 para "espejo redondo negro" (ninguna
 * categoria rankea ahi), y el posicionamiento no se hereda: desoptimizarla o
 * redirigirla seria perder la posicion sin garantia de que otra la recoja.
 * Aqui solo se le abre una salida.
 *
 * Como se configura: por producto, sin tocar codigo, con dos metas.
 *   _adrihosan_desvio_titulo   (string, opcional) encabezado del bloque.
 *   _adrihosan_desvio_enlaces  (JSON) [{"texto":"...","url":"..."}, ...]
 * Asi se puede reutilizar en cualquier otra ficha muda desde la API sin
 * volver a desplegar el tema.
 *
 * @package Adrihosan
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Numero maximo de enlaces que se pintan.
 *
 * Un desvio con demasiadas opciones deja de ser un desvio. Tres o cuatro.
 */
if ( ! defined( 'ADRIHOSAN_DESVIO_MAX_ENLACES' ) ) {
    define( 'ADRIHOSAN_DESVIO_MAX_ENLACES', 4 );
}

/**
 * Lee y valida los enlaces de desvio de un producto.
 *
 * Solo se aceptan URLs del propio dominio: este bloque es navegacion interna,
 * no un sitio para colgar enlaces salientes.
 *
 * @param int $id ID del producto.
 * @return array Lista de array( 'texto' => string, 'url' => string ).
 */
if ( ! function_exists( 'adrihosan_desvio_enlaces' ) ) {
    function adrihosan_desvio_enlaces( $id ) {
        $crudo = get_post_meta( $id, '_adrihosan_desvio_enlaces', true );
        if ( empty( $crudo ) ) {
            return array();
        }

        $datos = is_array( $crudo ) ? $crudo : json_decode( (string) $crudo, true );
        if ( ! is_array( $datos ) ) {
            return array();
        }

        $casa = wp_parse_url( home_url(), PHP_URL_HOST );
        $salida = array();

        foreach ( $datos as $fila ) {
            if ( ! is_array( $fila ) || empty( $fila['texto'] ) || empty( $fila['url'] ) ) {
                continue;
            }

            $url = esc_url_raw( (string) $fila['url'] );
            if ( ! $url ) {
                continue;
            }

            $host = wp_parse_url( $url, PHP_URL_HOST );
            if ( $host && $casa && strtolower( $host ) !== strtolower( $casa ) ) {
                continue;
            }

            $salida[] = array(
                'texto' => sanitize_text_field( (string) $fila['texto'] ),
                'url'   => $url,
            );

            if ( count( $salida ) >= ADRIHOSAN_DESVIO_MAX_ENLACES ) {
                break;
            }
        }

        return $salida;
    }
}

/**
 * Pinta el bloque de desvio en la ficha de producto.
 */
if ( ! function_exists( 'adrihosan_desvio_ficha' ) ) {
    function adrihosan_desvio_ficha() {
        global $product;

        $id = is_a( $product, 'WC_Product' ) ? $product->get_id() : 0;
        if ( ! $id ) {
            return;
        }

        $enlaces = adrihosan_desvio_enlaces( $id );
        if ( empty( $enlaces ) ) {
            return;
        }

        $titulo = get_post_meta( $id, '_adrihosan_desvio_titulo', true );
        if ( ! $titulo ) {
            $titulo = '&iquest;Buscas m&aacute;s modelos?';
        } else {
            $titulo = esc_html( $titulo );
        }
        ?>
        <nav class="desvio-common" aria-label="Otras familias de espejos">
            <span class="desvio-icono" aria-hidden="true">&#128269;</span>
            <div class="desvio-cuerpo">
                <strong class="desvio-titulo"><?php echo $titulo; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
                <ul class="desvio-lista">
                    <?php foreach ( $enlaces as $enlace ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $enlace['url'] ); ?>">
                                <?php echo esc_html( $enlace['texto'] ); ?>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
        <?php
    }
}

/*
 * Enganche.
 *
 * Prioridad 7: entre el titulo (5) y el precio (10). Va arriba a proposito -
 * el problema que resuelve es que la gente entra y se va, asi que la salida
 * tiene que verse sin hacer scroll.
 */
add_action( 'woocommerce_single_product_summary', 'adrihosan_desvio_ficha', 7 );
