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
