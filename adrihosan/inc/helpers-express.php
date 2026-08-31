<?php
/**
 * DISTINTIVO DE SERVICIO EXPRESS (entrega en 48/72 h)
 *
 * Por que existe: Genexia tiene un servicio express con entrega en 48/72 h para
 * una seleccion concreta de modelos y medidas (FOLLETO_EXPRESS_2026). Esos
 * productos ya se marcaban en Woo con el atributo `pa_plazo-entrega = Inmediata`,
 * pero esa informacion solo se veia en la tabla de "Informacion adicional" de la
 * ficha, que es donde no mira nadie. El plazo es de los argumentos que mas
 * venden en reforma (el cliente tiene fecha), asi que aqui se saca a la vista:
 * en la tarjeta del listado y arriba del todo en la ficha.
 *
 * IMPORTANTE: el express va por COMBINACION, no por modelo. Un mismo espejo
 * puede tener una medida en express y otra de fabricacion bajo pedido a 20 dias.
 * Por eso se lee el atributo del producto y nunca se deduce de la serie.
 *
 * El texto dice "Entrega en 48/72 h" y no "entrega inmediata" ni "en stock":
 * es el plazo que Genexia publica por escrito en su folleto, es concreto y el
 * cliente puede planificar con el.
 *
 * @package Adrihosan
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Un producto es express si su plazo de entrega es "Inmediata".
 *
 * Hay dos atributos de plazo en la tienda por un duplicado historico
 * (`pa_plazo-entrega` y `pa_plazo-de-entrega`): se miran los dos para no
 * dejarse fuera fichas antiguas.
 *
 * @param int|WC_Product|null $producto ID o producto. Por defecto, el global.
 * @return bool
 */
if ( ! function_exists( 'adrihosan_es_express' ) ) {
    function adrihosan_es_express( $producto = null ) {
        if ( null === $producto ) {
            global $product;
            $producto = $product;
        }
        $id = is_a( $producto, 'WC_Product' ) ? $producto->get_id() : (int) $producto;
        if ( ! $id ) {
            return false;
        }

        foreach ( array( 'pa_plazo-entrega', 'pa_plazo-de-entrega' ) as $taxonomia ) {
            if ( ! taxonomy_exists( $taxonomia ) ) {
                continue;
            }
            $terminos = wp_get_object_terms( $id, $taxonomia, array( 'fields' => 'slugs' ) );
            if ( is_wp_error( $terminos ) ) {
                continue;
            }
            if ( in_array( 'inmediata', array_map( 'strtolower', (array) $terminos ), true ) ) {
                return true;
            }
        }

        return false;
    }
}

/**
 * Distintivo pequeno, para la tarjeta del listado de categoria.
 */
if ( ! function_exists( 'adrihosan_express_badge_listado' ) ) {
    function adrihosan_express_badge_listado() {
        if ( ! adrihosan_es_express() ) {
            return;
        }
        echo '<span class="express-badge-common" aria-label="Servicio Express: entrega en 48 a 72 horas">'
            . '<span class="express-badge-icono" aria-hidden="true">&#9889;</span>'
            . 'Entrega en 48/72 h'
            . '</span>';
    }
}

/**
 * Aviso completo, para la ficha de producto.
 */
if ( ! function_exists( 'adrihosan_express_aviso_ficha' ) ) {
    function adrihosan_express_aviso_ficha() {
        if ( ! adrihosan_es_express() ) {
            return;
        }
        ?>
        <div class="express-aviso-common">
            <span class="express-aviso-icono" aria-hidden="true">&#9889;</span>
            <span class="express-aviso-texto">
                <strong>Servicio Express &middot; entrega en 48/72 h</strong>
                <small>Este modelo y esta medida salen de f&aacute;brica en 48/72 h. Env&iacute;o gratuito.</small>
            </span>
        </div>
        <?php
    }
}

/*
 * Enganches.
 *
 * En el listado va sobre la imagen (prioridad 15, despues de la miniatura que
 * WooCommerce pinta en 10) para que se lea sin abrir la ficha.
 * En la ficha va en 6, entre el titulo (5) y el precio (10).
 */
add_action( 'woocommerce_before_shop_loop_item_title', 'adrihosan_express_badge_listado', 15 );
add_action( 'woocommerce_single_product_summary', 'adrihosan_express_aviso_ficha', 6 );
