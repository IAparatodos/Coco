<?php
/**
 * Devuelve el H1 a renderizar.
 * - Si hay un filtro activo Y existe regla SEO para esa URL → H1 dinámico de Filter Everything Pro
 * - Si no → H1 fallback hardcodeado de la categoría
 *
 * @param string $h1_fallback H1 estático de la categoría
 * @return string H1 final a imprimir (ya escapado)
 */
if ( ! function_exists( 'adrihosan_h1_dinamico' ) ) {
    function adrihosan_h1_dinamico( $h1_fallback ) {
        if ( function_exists( 'flrt_is_filter_request' ) && flrt_is_filter_request() ) {
            if ( function_exists( 'flrt_get_seo_data' ) ) {
                $seo_h1 = flrt_get_seo_data( 'h1' );
                if ( ! empty( $seo_h1 ) ) {
                    return esc_html( $seo_h1 );
                }
            }
        }
        return $h1_fallback;
    }
}

/**
 * ¿Estamos en una URL de filtro que tiene su propia regla SEO?
 *
 * Solo en ese caso la página trae contenido propio (title, H1 y texto de
 * Filter Everything) que sustituye al de la categoría madre, y solo en ese
 * caso es indexable. Ahí los bloques "repartidores" de la madre sobran:
 * duplicarían su contenido palabra por palabra en una URL indexable
 * distinta, poniendo a la madre a competir contra su propio filtro.
 *
 * NO vale detectar "hay filtro" a secas. Los cientos de URLs de filtro sin
 * regla están en noindex y no tienen texto propio: si les quitáramos los
 * bloques de la madre se quedarían en una lista de productos pelada.
 *
 * @return bool True solo si hay filtro activo Y regla SEO para esa URL.
 */
if ( ! function_exists( 'adrihosan_filtro_con_regla_seo' ) ) {
    function adrihosan_filtro_con_regla_seo() {
        if ( ! function_exists( 'flrt_is_filter_request' ) || ! flrt_is_filter_request() ) {
            return false;
        }
        if ( ! function_exists( 'flrt_get_seo_data' ) ) {
            return false;
        }
        return ! empty( flrt_get_seo_data( 'h1' ) );
    }
}
