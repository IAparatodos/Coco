<?php
/**
 * Calculadora del vaso de una piscina (shortcode [calculadora_piscina]).
 *
 * Hermana de calculadora-calefaccion.php: mismo patron de cache y de assets.
 * El catalogo NO se escribe a mano, se lee de WooCommerce cada vez que caduca
 * la cache y se invalida sola al guardar un producto.
 *
 * Tres cosas que aprendimos montandola y que aqui van resueltas:
 *   1. La categoria no basta: hay azulejo de piscina colgado solo de "Azulejos".
 *      Se barre tambien por titulo, que en esta tienda es el dato que manda.
 *   2. Los m2 por caja salen del atributo "m2 por caja" o del titulo, NUNCA del
 *      meta _wpbo_step: en esta categoria esta desajustado en 76 de 106 fichas.
 *   3. El descuento por palet (WooCommerce Bulk Discount) solo se ve en el
 *      carrito. Sin aplicarlo, la calculadora enseña precios MAS CAROS que los
 *      que se cobran y esconde el argumento de venta.
 *
 * @package Adrihosan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// "Suelos y Porcelanico para Piscinas".
if ( ! defined( 'ADRIHOSAN_PIS_CAT' ) ) {
	define( 'ADRIHOSAN_PIS_CAT', 66 );
}
if ( ! defined( 'ADRIHOSAN_PIS_CACHE' ) ) {
	define( 'ADRIHOSAN_PIS_CACHE', 'adrihosan_calc_piscina_v2' );
}

/**
 * Series que se recomiendan primero, en el vaso y en la playa.
 */
function adrihosan_pis_series() {
	return apply_filters( 'adrihosan_pis_series', array( 'sagano', 'bonvoy', 'aspen' ) );
}

/**
 * Coronacion: lista CERRADA de piezas de borde, con los metros lineales que
 * cubre cada una. Aqui no vale la heuristica del titulo — el remate de piscina
 * y el peldano de escalera se llaman igual en la tienda y el ml no sale en el
 * nombre — asi que la coronacion se decide a mano y el resto (precio, foto,
 * stock, descuento) se sigue leyendo de WooCommerce en vivo.
 *
 * @return array<int,float> ID de producto => metros lineales por pieza.
 */
function adrihosan_pis_corona() {
	return apply_filters(
		'adrihosan_pis_corona',
		array(
			264479 => 1.20, // Peldano antideslizante porcelanico full step Aspen 33x120.
			422848 => 1.20, // Peldano antideslizante extrusionado romado Ziro 33x120.
			166814 => 0.60, // Peldano antideslizante porcelanico romo Aspen 30x60.
			134048 => 2.50, // Novopeldano MaxiDakar de EMAC, pieza de 2,5 ml.
		)
	);
}

/**
 * Los que NO pueden faltar. Van siempre en su bloque y en la segunda tarjeta,
 * detras de la de escaparate: son los mas vendidos, y por precio caerian al
 * fondo de la lista (el orden es de caro a barato) o se quedarian fuera del
 * tope de tarjetas que se enseñan.
 *
 * @return array<int,string[]> ID de producto => bloques en los que va.
 */
function adrihosan_pis_imprescindibles() {
	return apply_filters(
		'adrihosan_pis_imprescindibles',
		array(
			// Pavimento porcelanico imitacion pizarra Aspen Blue 30x60: el mas
			// vendido de piscina, sirve para revestir el vaso y para la playa.
			130753 => array( 'vaso', 'playa' ),
		)
	);
}

/**
 * Terminos que se barren por titulo, ademas de la categoria.
 */
function adrihosan_pis_busquedas() {
	return apply_filters(
		'adrihosan_pis_busquedas',
		array_merge( array( 'piscina', 'zilij', 'waterwold', 'novopeldano', 'novopeldaño' ), adrihosan_pis_series() )
	);
}

/**
 * Minusculas sin tildes, para comparar titulos sin sorpresas.
 */
function adrihosan_pis_plano( $texto ) {
	$texto = remove_accents( $texto );
	return function_exists( 'mb_strtolower' ) ? mb_strtolower( $texto, 'UTF-8' ) : strtolower( $texto );
}

/**
 * Primer numero de un texto: "1.22 m2" -> 1.22 ; "0,980" -> 0.98
 */
function adrihosan_pis_numero( $texto ) {
	if ( preg_match( '/(\d+[.,]?\d*)/', (string) $texto, $m ) ) {
		return (float) str_replace( ',', '.', $m[1] );
	}
	return 0.0;
}

/**
 * m2 por caja: primero el atributo de la ficha, luego el parentesis del titulo.
 */
function adrihosan_pis_m2_caja( $producto, $titulo ) {
	$attr = $producto->get_attribute( 'pa_m2-por-caja' );
	if ( ! $attr ) {
		$attr = $producto->get_attribute( 'm2 por caja' );
	}
	$valor = adrihosan_pis_numero( $attr );
	if ( $valor > 0 ) {
		return round( $valor, 3 );
	}
	if ( preg_match( '/(\d+[.,]?\d*)\s*m2\s*\/?\s*cj/i', $titulo, $m ) ) {
		return round( adrihosan_pis_numero( $m[1] ), 3 );
	}
	return 0.0;
}

/**
 * Metros lineales que cubre una pieza de remate: "(0,6 ml)" -> 0.6
 */
function adrihosan_pis_ml_pieza( $titulo ) {
	if ( preg_match( '/(\d+[.,]?\d*)\s*ml\b/i', $titulo, $m ) ) {
		return round( adrihosan_pis_numero( $m[1] ), 3 );
	}
	return 0.0;
}

/**
 * Nombre para la tarjeta: fuera el parentesis de embalaje, que ya sale en las
 * lineas de la ficha y en una columna estrecha solo estorba.
 */
function adrihosan_pis_nombre_corto( $titulo ) {
	$titulo = preg_replace( '/\s*\(\s*\d+[.,]?\d*\s*m2\s*\/?\s*cj\s*\)/i', '', $titulo );
	$titulo = preg_replace( '/\s*\(\s*venta por mallas\s*\)/i', '', $titulo );
	$titulo = preg_replace( '/\s*\(\s*\d+\s*ud\s*\)/i', '', $titulo );
	$titulo = preg_replace( '/\s*\(\s*\d+[.,]?\d*\s*ml\s*\)/i', '', $titulo );
	$titulo = str_replace( ' ®', '®', $titulo );
	return trim( preg_replace( '/\s{2,}/', ' ', $titulo ), " .\t\n\r" );
}

/**
 * A que bloque pertenece un producto. Manda el NOMBRE, no la categoria: la 66
 * mezcla pavimento de terraza, suelo de cocina y material de vaso.
 */
function adrihosan_pis_bloque( $titulo, $m2cj ) {
	$n      = adrihosan_pis_plano( $titulo );
	$series = adrihosan_pis_series();

	// La coronacion la resuelve adrihosan_pis_corona() por ID, antes de llegar
	// aqui. Los demas remates y peldanos van por pieza, no por m2: fuera.
	if ( false !== strpos( $n, 'peldano' ) || false !== strpos( $n, 'remate' ) || false !== strpos( $n, 'angulo' ) ) {
		return '';
	}
	if ( $m2cj > 0 && ( false !== strpos( $n, 'piscina' ) || false !== strpos( $n, 'zilij' ) || false !== strpos( $n, 'waterwold' ) ) ) {
		return 'vaso';
	}
	// Se exige "pavimento" o "suelo" para no colar piezas sueltas que compartan
	// nombre de serie: la baldosa de barro "Aspen" se vende por unidad.
	$es_pavimento = ( false !== strpos( $n, 'pavimento' ) || false !== strpos( $n, 'suelo' ) );
	if ( $m2cj > 0 && $es_pavimento ) {
		foreach ( $series as $serie ) {
			if ( false !== strpos( $n, $serie ) ) {
				return 'playa';
			}
		}
	}
	if ( $m2cj > 0 && false !== strpos( $n, 'antideslizante' ) ) {
		return 'playa';
	}
	return '';
}

/**
 * Descuento por palet del plugin WooCommerce Bulk Discount.
 * Devuelve array( cantidad_minima, porcentaje ) o null.
 */
function adrihosan_pis_descuento( $id ) {
	if ( 'yes' !== get_post_meta( $id, '_bulkdiscount_enabled', true ) ) {
		return null;
	}
	$cantidad = get_post_meta( $id, '_bulkdiscount_quantity_1', true );
	$pct      = get_post_meta( $id, '_bulkdiscount_discount_1', true );
	if ( '' === $cantidad || '' === $pct ) {
		return null;
	}
	$cantidad = (float) $cantidad;
	$pct      = (float) $pct;
	if ( $cantidad <= 0 || $pct <= 0 ) {
		return null;
	}
	return array( $cantidad, $pct );
}

/**
 * IDs candidatos: la categoria de piscinas mas los barridos por titulo.
 */
function adrihosan_pis_ids() {
	global $wpdb;

	$ids = get_posts(
		array(
			'post_type'      => 'product',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			'fields'         => 'ids',
			'no_found_rows'  => true,
			'tax_query'      => array(
				array(
					'taxonomy' => 'product_cat',
					'field'    => 'term_id',
					'terms'    => ADRIHOSAN_PIS_CAT,
				),
			),
		)
	);

	$ids = array_merge( $ids, array_keys( adrihosan_pis_corona() ) );
	$ids = array_merge( $ids, array_keys( adrihosan_pis_imprescindibles() ) );

	foreach ( adrihosan_pis_busquedas() as $aguja ) {
		$como = '%' . $wpdb->esc_like( $aguja ) . '%';
		$mas  = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT ID FROM {$wpdb->posts} WHERE post_type = 'product' AND post_status = 'publish' AND post_title LIKE %s",
				$como
			)
		);
		$ids = array_merge( $ids, array_map( 'intval', $mas ) );
	}

	return array_values( array_unique( $ids ) );
}

/**
 * Construye el catalogo leyendo la tienda. Devuelve array listo para JSON.
 */
function adrihosan_pis_catalogo() {
	$cache = get_transient( ADRIHOSAN_PIS_CACHE );
	if ( is_array( $cache ) ) {
		return $cache;
	}

	$vacio = array(
		'generado' => date_i18n( 'Y-m-d' ),
		'inicio'   => home_url( '/' ),
		'carrito'  => function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/' ),
		'vaso'     => array(),
		'corona'   => array(),
		'playa'    => array(),
	);

	if ( ! function_exists( 'wc_get_product' ) ) {
		return $vacio;
	}

	$bloques = array(
		'vaso'   => array(),
		'corona' => array(),
		'playa'  => array(),
	);
	$series  = adrihosan_pis_series();
	$corona  = adrihosan_pis_corona();
	$top     = adrihosan_pis_imprescindibles();

	foreach ( adrihosan_pis_ids() as $id ) {
		$producto = wc_get_product( $id );
		if ( ! $producto || ! $producto->is_in_stock() ) {
			continue;
		}
		$precio = $producto->get_price();
		if ( '' === $precio || null === $precio || (float) $precio <= 0 ) {
			continue;
		}

		$titulo = wp_specialchars_decode( $producto->get_name(), ENT_QUOTES );
		$m2cj   = adrihosan_pis_m2_caja( $producto, $titulo );
		$mlud   = adrihosan_pis_ml_pieza( $titulo );

		if ( isset( $corona[ $id ] ) ) {
			// Pieza de borde: manda la lista. El "m2 por caja" de estas fichas
			// no significa nada aqui, se compra por pieza.
			$bloque = 'corona';
			$m2cj   = 0.0;
			$mlud   = (float) $corona[ $id ];
		} else {
			$bloque = adrihosan_pis_bloque( $titulo, $m2cj );
		}

		if ( ! $bloque ) {
			continue;
		}
		if ( ( 'vaso' === $bloque || 'playa' === $bloque ) && $m2cj <= 0 ) {
			continue;
		}
		if ( 'corona' === $bloque && $mlud <= 0 ) {
			continue;
		}

		$plano = adrihosan_pis_plano( $titulo );
		$prio  = 0;
		foreach ( $series as $serie ) {
			if ( false !== strpos( $plano, $serie ) ) {
				$prio = 1;
				break;
			}
		}

		$dto = adrihosan_pis_descuento( $id );

		$bloques[ $bloque ][] = array(
			'id'   => $id,
			'n'    => adrihosan_pis_nombre_corto( $titulo ),
			'url'  => get_permalink( $id ),
			'p'    => round( (float) $precio, 2 ),
			'm2cj' => $m2cj,
			'mlud' => $mlud,
			'img'  => wp_get_attachment_image_url( $producto->get_image_id(), 'woocommerce_thumbnail' ),
			'prio' => $prio,
			'dto'  => $dto,
			// Variable = hay que elegir color en la ficha: el add-to-cart por
			// URL no sirve y el precio es el del color mas barato.
			'var'  => $producto->is_type( 'variable' ) ? 1 : 0,
			'top'  => isset( $top[ $id ] ) ? 1 : 0,
		);
	}

	// De mas caro a mas barato: la primera tarjeta es escaparate. Las series
	// destacadas van delante en su bloque.
	usort(
		$bloques['corona'],
		function ( $a, $b ) {
			$pa = $a['mlud'] ? $a['p'] / $a['mlud'] : $a['p'];
			$pb = $b['mlud'] ? $b['p'] / $b['mlud'] : $b['p'];
			return ( $pb <=> $pa );
		}
	);
	foreach ( array( 'vaso', 'playa' ) as $k ) {
		usort(
			$bloques[ $k ],
			function ( $a, $b ) {
				if ( $a['prio'] !== $b['prio'] ) {
					return $b['prio'] <=> $a['prio'];
				}
				return $b['p'] <=> $a['p'];
			}
		);
	}

	$bloques = adrihosan_pis_repartir( $bloques, $series );
	$bloques = adrihosan_pis_subir_imprescindibles( $bloques );

	$datos = array(
		'generado' => date_i18n( 'Y-m-d' ),
		'inicio'   => home_url( '/' ),
		'carrito'  => function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/' ),
		'vaso'     => $bloques['vaso'],
		'corona'   => $bloques['corona'],
		'playa'    => $bloques['playa'],
	);

	set_transient( ADRIHOSAN_PIS_CACHE, $datos, 6 * HOUR_IN_SECONDS );
	return $datos;
}

/**
 * Sube los imprescindibles a la segunda tarjeta de cada bloque que les toque.
 * La primera se deja como esta: es el escaparate. Si el producto no estaba en
 * ese bloque (el Aspen Blue se clasifica como playa, pero tambien reviste el
 * vaso), se copia de donde se haya leido.
 */
function adrihosan_pis_subir_imprescindibles( $bloques ) {
	$fichas = array();
	foreach ( $bloques as $lista ) {
		foreach ( $lista as $item ) {
			$fichas[ $item['id'] ] = $item;
		}
	}

	foreach ( adrihosan_pis_imprescindibles() as $id => $destinos ) {
		if ( ! isset( $fichas[ $id ] ) ) {
			continue; // sin stock, sin precio o dado de baja: no se inventa.
		}
		foreach ( (array) $destinos as $destino ) {
			if ( ! isset( $bloques[ $destino ] ) ) {
				continue;
			}
			$lista = array_values(
				array_filter(
					$bloques[ $destino ],
					function ( $item ) use ( $id ) {
						return $item['id'] !== $id;
					}
				)
			);
			$posicion = $lista ? 1 : 0;
			array_splice( $lista, $posicion, 0, array( $fichas[ $id ] ) );
			$bloques[ $destino ] = $lista;
		}
	}

	return $bloques;
}

/**
 * Coloca las series destacadas donde tienen que verse:
 *  - en la playa, intercaladas entre ellas (si no, salen ocho colores del mismo
 *    modelo al mismo precio y no se ve la variedad);
 *  - en el vaso, tres por serie repartidas una si una no entre los azulejos.
 */
function adrihosan_pis_repartir( $bloques, $series ) {
	$por_serie = array();
	foreach ( $series as $serie ) {
		$por_serie[ $serie ] = array();
	}
	$resto = array();
	foreach ( $bloques['playa'] as $item ) {
		$colocado = false;
		if ( $item['prio'] ) {
			$plano = adrihosan_pis_plano( $item['n'] );
			foreach ( $series as $serie ) {
				if ( false !== strpos( $plano, $serie ) ) {
					$por_serie[ $serie ][] = $item;
					$colocado              = true;
					break;
				}
			}
		}
		if ( ! $colocado ) {
			$resto[] = $item;
		}
	}

	$mas_larga = 0;
	foreach ( $por_serie as $cola ) {
		$mas_larga = max( $mas_larga, count( $cola ) );
	}

	// Playa: Sagano, Bonvoy, Aspen, Sagano, Bonvoy, Aspen...
	$mezcla = array();
	for ( $i = 0; $i < $mas_larga; $i++ ) {
		foreach ( $series as $serie ) {
			if ( isset( $por_serie[ $serie ][ $i ] ) ) {
				$mezcla[] = $por_serie[ $serie ][ $i ];
			}
		}
	}
	$bloques['playa'] = array_merge( $mezcla, $resto );

	// Vaso: tres de cada serie, repartidas entre los azulejos de piscina.
	$destacadas = array();
	for ( $i = 0; $i < 3; $i++ ) {
		foreach ( $series as $serie ) {
			if ( isset( $por_serie[ $serie ][ $i ] ) ) {
				$destacadas[] = $por_serie[ $serie ][ $i ];
			}
		}
	}
	$azulejos = $bloques['vaso'];
	$reparto  = array();
	$total    = max( count( $destacadas ), count( $azulejos ) );
	for ( $i = 0; $i < $total; $i++ ) {
		if ( isset( $destacadas[ $i ] ) ) {
			$reparto[] = $destacadas[ $i ];
		}
		if ( isset( $azulejos[ $i ] ) ) {
			$reparto[] = $azulejos[ $i ];
		}
	}
	$bloques['vaso'] = $reparto;

	return $bloques;
}

/**
 * Cualquier cambio en un producto tira la cache: los precios de la calculadora
 * no pueden ir por detras de los de la ficha.
 */
function adrihosan_pis_limpiar_cache() {
	delete_transient( ADRIHOSAN_PIS_CACHE );
}
add_action( 'save_post_product', 'adrihosan_pis_limpiar_cache' );
add_action( 'woocommerce_update_product', 'adrihosan_pis_limpiar_cache' );
add_action( 'woocommerce_variation_set_stock', 'adrihosan_pis_limpiar_cache' );

/**
 * Los cambios que entran por API no pasan por save_post: se vigila el meta.
 */
function adrihosan_pis_meta_tocado( $meta_id, $post_id, $meta_key ) {
	$vigilados = array( '_price', '_regular_price', '_sale_price', '_stock_status', '_thumbnail_id', '_bulkdiscount_quantity_1', '_bulkdiscount_discount_1' );
	if ( in_array( $meta_key, $vigilados, true ) ) {
		adrihosan_pis_limpiar_cache();
	}
}
add_action( 'updated_post_meta', 'adrihosan_pis_meta_tocado', 10, 3 );
add_action( 'added_post_meta', 'adrihosan_pis_meta_tocado', 10, 3 );

/**
 * Registro y encolado. El CSS se pide antes de pintar la cabecera cuando la
 * entrada lleva el shortcode, para que no haya salto de estilos al cargar.
 */
function adrihosan_pis_assets() {
	if ( ! is_singular() ) {
		return;
	}
	$post = get_post();
	if ( ! $post || ! has_shortcode( $post->post_content, 'calculadora_piscina' ) ) {
		return;
	}
	adrihosan_pis_registrar_assets();
	wp_enqueue_style( 'adrihosan-calculadora-piscina' );
	wp_enqueue_script( 'adrihosan-calculadora-piscina' );
}
add_action( 'wp_enqueue_scripts', 'adrihosan_pis_assets' );

/**
 * Registra hoja y script (idempotente) e inyecta el catalogo.
 */
function adrihosan_pis_registrar_assets() {
	if ( wp_style_is( 'adrihosan-calculadora-piscina', 'registered' ) ) {
		return;
	}

	$rel_css = '/assets/css/calculadora-piscina.css';
	$rel_js  = '/assets/js/calculadora-piscina.js';
	$dir     = get_stylesheet_directory();
	$uri     = get_stylesheet_directory_uri();

	wp_register_style(
		'adrihosan-calculadora-piscina',
		$uri . $rel_css,
		array( 'adrihosan-base-global' ),
		file_exists( $dir . $rel_css ) ? filemtime( $dir . $rel_css ) : '1.0.0'
	);
	wp_register_script(
		'adrihosan-calculadora-piscina',
		$uri . $rel_js,
		array(),
		file_exists( $dir . $rel_js ) ? filemtime( $dir . $rel_js ) : '1.0.0',
		true
	);
	wp_add_inline_script(
		'adrihosan-calculadora-piscina',
		'window.CAP_DATA = ' . wp_json_encode( adrihosan_pis_catalogo() ) . ';',
		'before'
	);
}

/**
 * Shortcode [calculadora_piscina]: pinta el bloque. Si alguien lo usa donde no
 * se encolaron los assets (un widget, por ejemplo), se piden aqui.
 */
function adrihosan_pis_shortcode() {
	adrihosan_pis_registrar_assets();
	wp_enqueue_style( 'adrihosan-calculadora-piscina' );
	wp_enqueue_script( 'adrihosan-calculadora-piscina' );

	ob_start();
	?>
<div id="cap-calc">
<section class="hero">
  <div class="wrap">
    <p class="eyebrow"><span class="pip"></span>Calculadora del vaso</p>
    <h1>Los metros que pide tu piscina, antes de pedir material</h1>
    <p class="lead">Dinos cómo va a ser el vaso. Te damos una estimación del agua que cabe, la tierra que hay que sacar, el hormigón del vaso, la superficie a revestir con su merma, más los metros de coronación.</p>
  </div>
</section>

<div class="wrap">
  <div class="layout">

    <form class="panel" id="cap-form">

      <div class="step">
        <p class="slab">Forma</p>
        <h2>Cómo es el vaso</h2>
        <p class="shint">La forma decide cómo se miden la lámina de agua, el perímetro, las paredes.</p>
        <div class="chips">
          <label class="chip"><input type="radio" name="forma" value="rect" checked><span>Rectangular</span></label>
          <label class="chip"><input type="radio" name="forma" value="redonda"><span>Redonda</span></label>
          <label class="chip"><input type="radio" name="forma" value="ovalada"><span>Ovalada</span></label>
          <label class="chip"><input type="radio" name="forma" value="libre"><span>Otra forma</span></label>
        </div>
      </div>

      <div class="step">
        <p class="slab">Medidas</p>
        <h2>Las dimensiones interiores</h2>
        <p class="shint">Medidas del hueco de agua terminado, sin contar los muros ni la coronación.</p>

        <div class="numgrid" id="cap-g-rect">
          <div class="numfield"><label for="cap-largo">Largo</label>
            <div class="box"><input type="number" id="cap-largo" value="8" min="1" max="50" step="0.1"><span class="unit">m</span></div></div>
          <div class="numfield"><label for="cap-ancho">Ancho</label>
            <div class="box"><input type="number" id="cap-ancho" value="4" min="1" max="30" step="0.1"><span class="unit">m</span></div></div>
        </div>

        <div class="numgrid hidden" id="cap-g-redonda">
          <div class="numfield"><label for="cap-diam">Diámetro</label>
            <div class="box"><input type="number" id="cap-diam" value="5" min="1" max="30" step="0.1"><span class="unit">m</span></div></div>
        </div>

        <div class="numgrid hidden" id="cap-g-libre">
          <div class="numfield"><label for="cap-lamina">Lámina de agua</label>
            <div class="box"><input type="number" id="cap-lamina" value="32" min="1" step="0.1"><span class="unit">m²</span></div></div>
          <div class="numfield"><label for="cap-perim">Perímetro</label>
            <div class="box"><input type="number" id="cap-perim" value="24" min="1" step="0.1"><span class="unit">m</span></div></div>
          <div class="numfield"><label for="cap-mayor">Longitud mayor</label>
            <div class="box"><input type="number" id="cap-mayor" value="8" min="1" step="0.1"><span class="unit">m</span></div></div>
        </div>

        <div class="chips" style="margin-top:18px">
          <label class="chip"><input type="radio" name="fondo" value="plano"><span>Fondo plano</span></label>
          <label class="chip"><input type="radio" name="fondo" value="rampa" checked><span>Fondo inclinado</span></label>
        </div>

        <div class="numgrid dos" style="margin-top:14px" id="cap-g-prof">
          <div class="numfield"><label for="cap-pmin" id="cap-lb-pmin">Profundidad mínima</label>
            <div class="box"><input type="number" id="cap-pmin" value="1.2" min="0.3" max="5" step="0.05"><span class="unit">m</span></div></div>
          <div class="numfield" id="cap-f-pmax"><label for="cap-pmax">Profundidad máxima</label>
            <div class="box"><input type="number" id="cap-pmax" value="1.8" min="0.3" max="5" step="0.05"><span class="unit">m</span></div></div>
        </div>
      </div>

      <div class="step">
        <p class="slab">Construcción</p>
        <h2>Con qué se levanta el vaso</h2>
        <p class="shint">Fija los espesores de partida del muro, de la solera. Se pueden afinar más abajo.</p>
        <div class="sisgrid">
          <label class="sis" data-s="gunitado"><input type="radio" name="sistema" value="gunitado" data-muro="0.20" data-solera="0.25" checked>
            <span><b>Hormigón proyectado</b><i>Gunitado · muro 20 cm · solera 25 cm</i></span></label>
          <label class="sis" data-s="bloque"><input type="radio" name="sistema" value="bloque" data-muro="0.20" data-solera="0.20">
            <span><b>Bloque de hormigón</b><i>Encofrado · muro 20 cm · solera 20 cm</i></span></label>
          <label class="sis" data-s="armado"><input type="radio" name="sistema" value="armado" data-muro="0.25" data-solera="0.25">
            <span><b>Hormigón armado</b><i>Encofrado · muro 25 cm · solera 25 cm</i></span></label>
        </div>
      </div>

      <div class="step">
        <p class="slab">Acabado</p>
        <h2>Material de más para los cortes</h2>
        <p class="shint">Pedir los metros justos sale mal: se parten piezas al cortar y conviene
        que sobren algunas para reponer. Eso es la <strong>merma</strong>.</p>
        <div class="chips">
          <label class="chip"><input type="radio" name="merma" value="5"><span>5%</span></label>
          <label class="chip"><input type="radio" name="merma" value="10" checked><span>10%</span></label>
          <label class="chip"><input type="radio" name="merma" value="15"><span>15%</span></label>
        </div>
        <div class="numgrid dos" style="margin-top:16px">
          <div class="numfield"><label for="cap-corona">Ancho de la coronación</label>
            <div class="box"><input type="number" id="cap-corona" value="0.30" min="0.1" max="1" step="0.01"><span class="unit">m</span></div></div>
          <div class="numfield"><label for="cap-playa">Playa a revestir (0 = no calcular)</label>
            <div class="box"><input type="number" id="cap-playa" value="50" min="0" max="3000" step="1"><span class="unit">m²</span></div></div>
        </div>
      </div>

      <details class="avz">
        <summary>Ajustes de obra</summary>
        <div class="numgrid">
          <div class="numfield"><label for="cap-emuro">Espesor del muro</label>
            <div class="box"><input type="number" id="cap-emuro" value="0.20" min="0.1" max="0.5" step="0.01"><span class="unit">m</span></div></div>
          <div class="numfield"><label for="cap-esolera">Espesor de la solera</label>
            <div class="box"><input type="number" id="cap-esolera" value="0.25" min="0.1" max="0.5" step="0.01"><span class="unit">m</span></div></div>
          <div class="numfield"><label for="cap-sobre">Sobreancho de trabajo</label>
            <div class="box"><input type="number" id="cap-sobre" value="0.40" min="0" max="1.5" step="0.05"><span class="unit">m</span></div></div>
          <div class="numfield"><label for="cap-zahorra">Cama de zahorra</label>
            <div class="box"><input type="number" id="cap-zahorra" value="0.15" min="0" max="0.5" step="0.01"><span class="unit">m</span></div></div>
          <div class="numfield"><label for="cap-cuba">Capacidad de cuba</label>
            <div class="box"><input type="number" id="cap-cuba" value="8" min="1" max="12" step="0.5"><span class="unit">m³</span></div></div>
          <div class="numfield"><label for="cap-esponj">Esponjamiento tierra</label>
            <div class="box"><input type="number" id="cap-esponj" value="25" min="0" max="60" step="1"><span class="unit">%</span></div></div>
        </div>
      </details>
    </form>

    <aside class="rail">
      <div class="rcard">
        <p class="rlabel">Agua del vaso</p>
        <p class="big" id="cap-r-agua">48 m³</p>
        <p class="wnote" id="cap-r-agua-l">48.000 litros · profundidad media 1,50 m</p>

        <dl class="facts">
          <div class="fact"><dt>Excavación</dt><dd id="cap-r-exc">—<small id="cap-r-exc-s">a retirar</small></dd></div>
          <div class="fact"><dt>Hormigón</dt><dd id="cap-r-hor">—<small id="cap-r-hor-s">solera + muros</small></dd></div>
          <div class="fact"><dt>A revestir</dt><dd id="cap-r-rev">—<small id="cap-r-rev-s">con merma</small></dd></div>
          <div class="fact"><dt>Coronación</dt><dd id="cap-r-cor">—<small id="cap-r-cor-s">borde</small></dd></div>
        </dl>
      </div>

      <div class="aviso">
        <b>Esto no es un presupuesto</b>
        <p>Es una <strong>estimación orientativa</strong> hecha con medidas teóricas. No es vinculante, no sustituye a una medición en obra, no sirve como base de una reclamación.</p>
        <p><strong>Quien tiene que dar el valor bueno es el profesional que va a ejecutar la piscina</strong>, con el proyecto delante, el terreno visto, la solución constructiva decidida.</p>
      </div>
    </aside>
  </div>

  <section class="picks">
    <div class="pickhead">
      <h2>Material del catálogo para estos metros</h2>
      <span class="count" id="cap-fecha-cat">precios del catálogo</span>
    </div>
    <p class="picksub">Se vende por m² pero se sirve en cajas enteras, así que siempre redondea hacia arriba. Los metros de cada ficha ya llevan los cortes dentro.</p>
    <div id="cap-mat-vaso" class="grupo"></div>
    <div id="cap-mat-corona" class="grupo"></div>
    <div id="cap-mat-playa" class="grupo"></div>
    <p class="nota-mat"><b>El botón de añadir</b> mete esa cantidad en el carrito sin salir de aquí, para que puedas ir sumando lo que necesites. <b>Sobre estos precios:</b> son los de nuestro catálogo, sin IVA ni portes. El material que de verdad entra en una piscina (adherencia bajo agua, junta, impermeabilización) lo decide quien la ejecuta: esto solo dice cuánto haría falta si se elige esa referencia.</p>
  </section>
</div>

<footer class="pie">
  <div class="wrap">
    <h3>Sobre estos números</h3>
    <p>La calculadora aplica geometría sobre las medidas que introduces. No conoce tu terreno, ni la roca que pueda aparecer al excavar, ni el nivel freático, ni las armaduras que pida el proyecto, ni la solución de impermeabilización, ni cuánto material se pierde de verdad al cortar el formato de pieza que elijas. Por eso el resultado es una <strong>estimación no vinculante</strong>: sirve para hacerse una idea del volumen de material antes de pedir precio, nada más.</p>
    <p><strong>El valor definitivo lo da el profesional que instala la piscina.</strong> Adrihosan no se hace responsable de pedidos, contrataciones o decisiones de obra tomadas únicamente a partir de este cálculo.</p>
    <p class="marca">Adrihosan · calculadora del vaso de una piscina</p>
  </div>
</footer>
</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'calculadora_piscina', 'adrihosan_pis_shortcode' );

/**
 * Foto de fondo de la llamada. Filtrable para cambiarla sin tocar codigo.
 */
function adrihosan_pis_cta_imagen_id() {
	return (int) apply_filters( 'adrihosan_pis_cta_imagen', 426139 );
}

/**
 * La hoja del componente solo se pide donde se pinta.
 */
function adrihosan_pis_cta_assets() {
	if ( adrihosan_cta_en_categoria( ADRIHOSAN_PIS_CAT ) ) {
		adrihosan_cta_assets();
	}
}
add_action( 'wp_enqueue_scripts', 'adrihosan_pis_cta_assets' );

/**
 * Llamada a la calculadora bajo los productos de la categoria de piscinas.
 */
function adrihosan_pis_cta_categoria() {
	if ( ! adrihosan_cta_en_categoria( ADRIHOSAN_PIS_CAT ) ) {
		return;
	}
	adrihosan_cta_pintar(
		array(
			'ojo'      => 'Calculadora del vaso',
			'titulo'   => '¿Cuánto material necesita tu piscina?',
			'texto'    => 'Dinos las medidas del vaso. Te decimos los metros de revestimiento, los de coronación, el hormigón, el agua que cabe, con el precio del material que lo cubre.',
			'boton'    => 'Calcular mi piscina',
			'url'      => adrihosan_cta_url( 'calculadora-piscina' ),
			'pie'      => 'Es una estimación orientativa: el valor bueno lo da quien ejecuta la piscina.',
			'imagen'   => adrihosan_pis_cta_imagen_id(),
			'posicion' => 'center 62%',
		)
	);
}
/**
 * El bloque va detras del paginador, no antes.
 */
function adrihosan_pis_cta_colocar() {
	if ( adrihosan_cta_en_categoria( ADRIHOSAN_PIS_CAT ) ) {
		adrihosan_cta_tras_paginacion( 'adrihosan_pis_cta_categoria' );
	}
}
add_action( 'template_redirect', 'adrihosan_pis_cta_colocar' );
