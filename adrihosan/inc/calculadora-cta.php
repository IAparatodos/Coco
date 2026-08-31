<?php
/**
 * Llamada a una calculadora bajo los productos de una categoria.
 *
 * Componente compartido por calculadora-calefaccion.php y calculadora-piscina.php:
 * el mismo bloque a ancho completo con foto de fondo, cambiando textos e imagen.
 *
 * Se engancha SIEMPRE con prioridad 9 en woocommerce_after_shop_loop, es decir
 * antes de la paginacion: de 10 en adelante estas categorias acumulan tanto
 * contenido propio (bloques inferiores, articulos del blog) que el bloque acaba
 * decenas de miles de caracteres mas abajo, donde no lo ve nadie.
 *
 * @package Adrihosan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Registra y encola la hoja del componente (idempotente).
 */
function adrihosan_cta_assets() {
	if ( wp_style_is( 'adrihosan-calculadora-cta', 'enqueued' ) ) {
		return;
	}
	$rel = '/assets/css/calculadora-cta.css';
	$dir = get_stylesheet_directory();
	wp_enqueue_style(
		'adrihosan-calculadora-cta',
		get_stylesheet_directory_uri() . $rel,
		array(),
		file_exists( $dir . $rel ) ? filemtime( $dir . $rel ) : '1.0.0'
	);
}

/**
 * ¿La categoria que se esta viendo es esa, o una hija suya?
 *
 * @param int $raiz Term ID de la categoria madre.
 */
function adrihosan_cta_en_categoria( $raiz ) {
	if ( ! function_exists( 'is_product_category' ) || ! is_product_category() ) {
		return false;
	}
	$termino = get_queried_object();
	if ( ! $termino || empty( $termino->term_id ) ) {
		return false;
	}
	if ( (int) $termino->term_id === (int) $raiz ) {
		return true;
	}
	return term_is_ancestor_of( $raiz, $termino->term_id, 'product_cat' );
}

/**
 * Pinta el bloque.
 *
 * @param array $args ojo, titulo, texto, boton, url, pie, imagen (attachment ID),
 *                    posicion (background-position).
 */
function adrihosan_cta_pintar( $args ) {
	$args = wp_parse_args(
		$args,
		array(
			'ojo'      => '',
			'titulo'   => '',
			'texto'    => '',
			'boton'    => 'Calcular',
			'url'      => '',
			'pie'      => '',
			'imagen'   => 0,
			'posicion' => 'center 58%',
		)
	);

	if ( ! $args['url'] || ! $args['titulo'] ) {
		return;
	}

	$fondo  = $args['imagen'] ? wp_get_attachment_image_url( (int) $args['imagen'], 'full' ) : '';
	$estilo = 'background-position:' . $args['posicion'] . ';';
	if ( $fondo ) {
		$estilo .= 'background-image:url(' . esc_url( $fondo ) . ');';
	}
	?>
	<section class="cad-cta" style="<?php echo esc_attr( $estilo ); ?>">
		<div class="cad-cta__wrap">
			<div class="cad-cta__dentro">
				<?php if ( $args['ojo'] ) : ?>
					<p class="cad-cta__ojo"><?php echo esc_html( $args['ojo'] ); ?></p>
				<?php endif; ?>
				<h2><?php echo esc_html( $args['titulo'] ); ?></h2>
				<?php if ( $args['texto'] ) : ?>
					<p><?php echo esc_html( $args['texto'] ); ?></p>
				<?php endif; ?>
				<a class="cad-cta__boton" href="<?php echo esc_url( $args['url'] ); ?>">
					<?php echo esc_html( $args['boton'] ); ?>
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h13M13 6l6 6-6 6"/></svg>
				</a>
				<?php if ( $args['pie'] ) : ?>
					<small class="cad-cta__pie"><?php echo esc_html( $args['pie'] ); ?></small>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php
}

/**
 * URL de una calculadora del escaparate por su slug.
 */
function adrihosan_cta_url( $slug ) {
	$entrada = get_page_by_path( $slug, OBJECT, 'escaparate' );
	return $entrada ? get_permalink( $entrada ) : '';
}

/**
 * Coloca un bloque JUSTO debajo del paginador de productos.
 *
 * Con prioridades no se puede: en estas categorias hay contenido de terceros
 * enganchado en woocommerce_after_shop_loop entre la paginacion (10) y
 * cualquier prioridad mayor, asi que el bloque acababa decenas de miles de
 * caracteres mas abajo. Aqui se saca la paginacion de su sitio y se vuelve a
 * pintar seguida del bloque, con lo que el orden queda garantizado.
 *
 * Solo debe llamarse cuando el bloque toca: el remove_action es global.
 *
 * @param callable $pintar Funcion que pinta el bloque.
 */
function adrihosan_cta_tras_paginacion( $pintar ) {
	if ( ! is_callable( $pintar ) ) {
		return;
	}
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
	add_action(
		'woocommerce_after_shop_loop',
		function () use ( $pintar ) {
			if ( function_exists( 'woocommerce_pagination' ) ) {
				woocommerce_pagination();
			}
			call_user_func( $pintar );
		},
		10
	);
}
