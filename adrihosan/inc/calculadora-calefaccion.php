<?php
/**
 * Calculadora de calefaccion (escaparate).
 *
 * El catalogo NO se escribe a mano: se lee de WooCommerce cada vez que caduca
 * la cache, y se invalida sola al guardar un producto. Para que un radiador
 * nuevo aparezca solo hacen falta dos cosas:
 *   1. Que este en una de las categorias de calefaccion (ver ADRIHOSAN_CALC_CATS).
 *   2. Que su potencia sea legible: atributo "pa_potencia" en las variaciones,
 *      vatios dentro de "pa_medida", o el meta _w_dt50 en la ficha.
 *
 * Los radiadores de agua se dimensionan por su potencia a delta-T 50 (meta
 * _w_dt50), que viene de la tarifa del fabricante y no de la web. Sin ese dato
 * el producto se lista por su potencia nominal y se marca como tal.
 *
 * @package Adrihosan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Categorias que se barren: electricos, agua, mixtos, aerotermia, toallero electrico.
if ( ! defined( 'ADRIHOSAN_CALC_CATS' ) ) {
	define( 'ADRIHOSAN_CALC_CATS', array( 264, 265, 266, 267, 4638 ) );
}
if ( ! defined( 'ADRIHOSAN_CALC_CACHE' ) ) {
	define( 'ADRIHOSAN_CALC_CACHE', 'adrihosan_calc_catalogo_v1' );
}

/**
 * Gama admitida. Hoy solo Climastar / Dual Kherr, que es con lo que estan
 * calibradas las bandas de W/m2. Para ampliar, engancharse al filtro.
 */
function adrihosan_calc_es_de_la_gama( $producto ) {
	$titulo = $producto->get_name();
	$dentro = ( false !== stripos( $titulo, 'dual kherr' ) );
	return (bool) apply_filters( 'adrihosan_calc_en_gama', $dentro, $producto );
}

/**
 * Familia comercial, para agrupar en las recomendaciones.
 */
function adrihosan_calc_familia( $titulo ) {
	$familias = array(
		'Curve wifi'      => 'curve',
		'Avant wifi'      => 'avant wifi',
		'Smart Pro'       => 'smart',
		'Slim Wireless'   => 'slim wireless',
		'Hybrid Inverter' => 'hybrid inverter',
		'DK11'            => 'dk11',
		'DK21'            => 'dk21',
		'DK22'            => 'dk22',
		'DK33'            => 'dk33',
	);
	foreach ( $familias as $nombre => $aguja ) {
		if ( false !== stripos( $titulo, $aguja ) ) {
			return $nombre;
		}
	}
	return 'Climastar';
}

/**
 * Primer numero de vatios que aparezca en un texto ("50x100 cm 800 w" -> 800).
 */
function adrihosan_calc_vatios_de_texto( $texto ) {
	if ( preg_match( '/(\d{3,4})\s*-?\s*w\b/i', $texto, $m ) ) {
		return (int) $m[1];
	}
	return 0;
}

/**
 * "50x100-cm-800-w" -> "50x100 cm". Algunas medidas llevan la potencia pegada.
 */
function adrihosan_calc_medida_legible( $slug ) {
	$slug = preg_replace( '/-\d{3,4}-?w$/i', '', $slug );
	$slug = str_replace( '-', ' ', $slug );
	return trim( $slug );
}

/**
 * Nombre corto para la ficha: fuera el "tecnologia Dual kherr" y las medidas
 * con decimales, que en una tarjeta estrecha solo estorban.
 */
function adrihosan_calc_nombre_corto( $titulo ) {
	$titulo = preg_replace( '/\s*tecnolog\S*\s+dual\s+kherr\.?/iu', '', $titulo );
	$titulo = preg_replace( '/[\s.]*dual\s+kherr\.?\s*$/iu', '', $titulo );
	$titulo = preg_replace( '/(\d+x\d+)x[\d.,]+\s*cm/i', '$1 cm', $titulo );
	$titulo = preg_replace( '/\s{2,}/', ' ', $titulo );
	return trim( $titulo, " .\t\n\r" );
}

/**
 * Construye el catalogo leyendo la tienda. Devuelve array listo para JSON.
 */
function adrihosan_calc_catalogo() {
	$cache = get_transient( ADRIHOSAN_CALC_CACHE );
	if ( is_array( $cache ) ) {
		return $cache;
	}

	if ( ! function_exists( 'wc_get_product' ) ) {
		return array(
			'catalogo' => array(),
			'imagenes' => array(),
		);
	}

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
					'terms'    => ADRIHOSAN_CALC_CATS,
				),
			),
		)
	);

	$catalogo = array();
	$imagenes = array();

	foreach ( $ids as $id ) {
		$producto = wc_get_product( $id );
		if ( ! $producto || ! adrihosan_calc_es_de_la_gama( $producto ) ) {
			continue;
		}

		$titulo = $producto->get_name();
		$cats   = wp_get_post_terms( $id, 'product_cat', array( 'fields' => 'ids' ) );
		if ( is_wp_error( $cats ) ) {
			$cats = array();
		}

		// Rama: el agua y la aerotermia van por categoria; lo demas es electrico.
		if ( in_array( 267, $cats, true ) ) {
			$tipo = 'hibrida';
		} elseif ( in_array( 265, $cats, true ) || in_array( 266, $cats, true ) ) {
			$tipo = 'agua';
		} else {
			$tipo = 'electrica';
		}

		// Manda el titulo, no la categoria: en la tienda hay radiadores colgando
		// de "Toallero electrico" y en el bano no se pueden ofrecer como toalleros.
		$es_toallero = false !== stripos( $titulo, 'toallero' )
			|| false !== stripos( $titulo, 'secatoallas' );
		$clase = $es_toallero ? 'toallero' : 'radiador';

		$dt50_ficha = (int) get_post_meta( $id, '_w_dt50', true );
		$nominal    = adrihosan_calc_vatios_de_texto( $titulo );

		$precios   = array();   // potencia => precio mas bajo publicado
		$medidas   = array();   // potencia => medida de esa variacion
		$de_medida = false;
		$sin_delta = false;

		if ( $producto->is_type( 'variable' ) ) {
			foreach ( $producto->get_children() as $vid ) {
				$variacion = wc_get_product( $vid );
				if ( ! $variacion || 'publish' !== get_post_status( $vid ) ) {
					continue;
				}
				$precio = $variacion->get_price();
				if ( '' === $precio || null === $precio ) {
					continue;
				}

				$atributos = $variacion->get_attributes();
				$potencia  = 0;

				if ( ! empty( $atributos['pa_potencia'] ) ) {
					$potencia = adrihosan_calc_vatios_de_texto( $atributos['pa_potencia'] );
				}
				if ( ! $potencia && ! empty( $atributos['pa_medida'] ) ) {
					$potencia  = adrihosan_calc_vatios_de_texto( $atributos['pa_medida'] );
					$de_medida = $potencia > 0;
				}
				// El dato del fabricante, primero en la variacion y luego en la ficha:
				// los radiadores de agua varian solo en acabado, asi que la potencia
				// es la misma para todas y se escribe una vez en el producto padre.
				if ( ! $potencia ) {
					$de_variacion = (int) get_post_meta( $vid, '_w_dt50', true );
					if ( $de_variacion ) {
						$potencia = $de_variacion;
						if ( 'agua' === $tipo ) {
							$sin_delta = true;
						}
					} elseif ( $dt50_ficha ) {
						$potencia = $dt50_ficha;
					}
				}
				if ( ! $potencia ) {
					continue;
				}

				$precio = (float) $precio;
				if ( ! isset( $precios[ $potencia ] ) || $precio < $precios[ $potencia ] ) {
					$precios[ $potencia ] = $precio;
					// La medida tiene que ser la de la variacion cuyo precio se muestra.
					$medidas[ $potencia ] = empty( $atributos['pa_medida'] )
						? ''
						: adrihosan_calc_medida_legible( $atributos['pa_medida'] );
				}
			}
		} else {
			$precio = $producto->get_price();
			if ( '' !== $precio && null !== $precio ) {
				// En agua e hibridos manda el dato del fabricante; si falta, el nominal del titulo.
				$potencia = $dt50_ficha ? $dt50_ficha : $nominal;
				if ( 'agua' === $tipo && ! $dt50_ficha ) {
					$sin_delta = true;
				}
				if ( $potencia ) {
					$precios[ $potencia ] = (float) $precio;
				}
			}
		}

		if ( empty( $precios ) ) {
			continue;
		}
		ksort( $precios );

		// Si todas las variaciones comparten medida, el nombre ya la lleva y repetirla sobra.
		$distintas = array_unique( array_filter( $medidas ) );
		if ( count( $distintas ) < 2 ) {
			$medidas = array();
		}

		$imagen = wp_get_attachment_image_url( $producto->get_image_id(), 'woocommerce_thumbnail' );
		$slug   = $producto->get_slug();
		if ( $imagen ) {
			$imagenes[ $slug ] = $imagen;
		}

		$catalogo[] = array(
			'tipo'      => $tipo,
			'clase'     => $clase,
			'fam'       => adrihosan_calc_familia( $titulo ),
			'nombre'    => adrihosan_calc_nombre_corto( $titulo ),
			'slug'      => $slug,
			'w'         => (object) $precios,
			'medidas'   => (object) $medidas,
			'nominal'   => ( 'agua' === $tipo && $nominal ) ? $nominal : null,
			'modula'    => ( 'hibrida' === $tipo ),
			'sinDelta'  => $sin_delta,
			'deMedida'  => $de_medida,
		);
	}

	$datos = array(
		'catalogo'    => $catalogo,
		'imagenes'    => $imagenes,
		'base'        => home_url( '/producto/' ),
		'actualizado' => current_time( 'Y-m-d' ),
	);

	set_transient( ADRIHOSAN_CALC_CACHE, $datos, 6 * HOUR_IN_SECONDS );
	return $datos;
}

/**
 * Cualquier cambio en un producto tira la cache: los precios de la calculadora
 * no pueden ir por detras de los de la ficha.
 */
function adrihosan_calc_limpiar_cache() {
	delete_transient( ADRIHOSAN_CALC_CACHE );
}
add_action( 'save_post_product', 'adrihosan_calc_limpiar_cache' );
add_action( 'woocommerce_update_product', 'adrihosan_calc_limpiar_cache' );
add_action( 'woocommerce_update_product_variation', 'adrihosan_calc_limpiar_cache' );
add_action( 'woocommerce_variation_set_stock', 'adrihosan_calc_limpiar_cache' );

/**
 * Los cambios que entran por API no pasan por save_post: se vigila el meta.
 */
function adrihosan_calc_meta_tocado( $meta_id, $post_id, $meta_key ) {
	$vigilados = array( '_price', '_regular_price', '_sale_price', '_w_dt50', '_thumbnail_id' );
	if ( in_array( $meta_key, $vigilados, true ) ) {
		adrihosan_calc_limpiar_cache();
	}
}
add_action( 'updated_post_meta', 'adrihosan_calc_meta_tocado', 10, 3 );
add_action( 'added_post_meta', 'adrihosan_calc_meta_tocado', 10, 3 );

/**
 * Registro y encolado. El CSS se pide en wp_enqueue_scripts (antes de pintar la
 * cabecera) cuando la entrada que se va a mostrar lleva el shortcode; asi no hay
 * salto de estilos al cargar.
 */
function adrihosan_calc_assets() {
	if ( ! is_singular() ) {
		return;
	}
	$post = get_post();
	if ( ! $post || ! has_shortcode( $post->post_content, 'calculadora_calefaccion' ) ) {
		return;
	}
	adrihosan_calc_registrar_assets();
	wp_enqueue_style( 'adrihosan-calculadora' );
	wp_enqueue_script( 'adrihosan-calculadora' );
}
add_action( 'wp_enqueue_scripts', 'adrihosan_calc_assets' );

/**
 * Registra hoja y script (idempotente) e inyecta el catalogo.
 */
function adrihosan_calc_registrar_assets() {
	if ( wp_style_is( 'adrihosan-calculadora', 'registered' ) ) {
		return;
	}

	$rel_css = '/assets/css/calculadora-calefaccion.css';
	$rel_js  = '/assets/js/calculadora-calefaccion.js';
	$dir     = get_stylesheet_directory();
	$uri     = get_stylesheet_directory_uri();

	wp_register_style(
		'adrihosan-calculadora',
		$uri . $rel_css,
		array( 'adrihosan-base-global' ),
		file_exists( $dir . $rel_css ) ? filemtime( $dir . $rel_css ) : '1.0.0'
	);
	wp_register_script(
		'adrihosan-calculadora',
		$uri . $rel_js,
		array(),
		file_exists( $dir . $rel_js ) ? filemtime( $dir . $rel_js ) : '1.0.0',
		true
	);
	wp_add_inline_script(
		'adrihosan-calculadora',
		'window.CAD_DATA = ' . wp_json_encode( adrihosan_calc_catalogo() ) . ';',
		'before'
	);
}

/**
 * Shortcode [calculadora_calefaccion]: pinta el bloque. Si alguien lo usa en un
 * sitio donde no se encolaron los assets (un widget, por ejemplo), se piden aqui.
 */
function adrihosan_calc_shortcode() {
	adrihosan_calc_registrar_assets();
	wp_enqueue_style( 'adrihosan-calculadora' );
	wp_enqueue_script( 'adrihosan-calculadora' );

	ob_start();
	?>
<div id="cad-calc">
<section class="cad-hero">
  <div class="cad-wrap">
    <p class="cad-eyebrow"><span class="cad-pip"></span>Calculadora de potencia</p>
    <h1>La potencia que pide tu habitación, sin cuentas raras</h1>
    <p class="cad-lead">Cuéntanos cómo es la estancia. Te decimos los vatios que necesita y qué equipos del catálogo la cubren, con su precio de hoy.</p>
  </div>
</section>

<div class="cad-wrap">
  <div class="cad-layout">

    <form class="cad-panel" id="cad-form">

      <div class="cad-step">
        <p class="cad-slab">Sistema</p>
        <h2>Tipo de calefacción</h2>
        <p class="cad-shint">Elige el sistema con el que vas a calentar la estancia.</p>
        <div class="cad-chips">
          <label class="cad-chip"><input type="radio" name="tipo" value="electrica" checked><span>Eléctrica</span></label>
          <label class="cad-chip"><input type="radio" name="tipo" value="hibrida"><span>Híbrida</span></label>
          <label class="cad-chip"><input type="radio" name="tipo" value="agua"><span>Agua</span></label>
        </div>
        <div class="cad-notas">
          <p id="cad-notaElectrica" class="cad-on">La potencia del radiador es la que consume: 2.000 W de radiador son 2 kW en el contador. Si vas a poner varios, comprueba antes la potencia que tienes contratada.</p>
          <p id="cad-notaHibrida">Los equipos híbridos modulan: la cifra es su potencia máxima, no la que entregan de forma continua, así que no se suman entre sí.</p>
          <p id="cad-notaAgua">Dimensionamos a ΔT 50 °C, el salto de una caldera moderna. Con aerotermia, que trabaja más frío, el radiador rinde menos: consúltanos antes de comprar.</p>
        </div>
      </div>

      <div class="cad-step">
        <p class="cad-slab">Dónde</p>
        <h2>Habitación</h2>
        <p class="cad-shint">Nos dice si te conviene un radiador de pared o un toallero.</p>
        <div class="cad-chips" id="cad-estancia">
          <label class="cad-chip"><input type="radio" name="estancia" value="salon" checked><span>Salón</span></label>
          <label class="cad-chip"><input type="radio" name="estancia" value="despacho"><span>Despacho</span></label>
          <label class="cad-chip"><input type="radio" name="estancia" value="dormitorio"><span>Dormitorio</span></label>
          <label class="cad-chip"><input type="radio" name="estancia" value="bano"><span>Baño</span></label>
          <label class="cad-chip"><input type="radio" name="estancia" value="cocina"><span>Cocina</span></label>
          <label class="cad-chip"><input type="radio" name="estancia" value="pasillo"><span>Pasillo</span></label>
        </div>
        <div class="cad-subq cad-hidden" id="cad-banoSub">
          <h3>Para el baño, ¿radiador o toallero?</h3>
          <div class="cad-chips">
            <label class="cad-chip"><input type="radio" name="bano" value="toallero" checked><span>Toallero</span></label>
            <label class="cad-chip"><input type="radio" name="bano" value="radiador"><span>Radiador</span></label>
          </div>
          <p id="cad-banoNota">Los dos calientan el baño con la misma potencia. El toallero además seca la toalla; el radiador ocupa menos pared.</p>
        </div>
      </div>

      <div class="cad-step">
        <p class="cad-slab">Medidas</p>
        <h2>Medidas de la estancia</h2>
        <p class="cad-shint">Con el techo a 2,5 m vas servido en la mayoría de pisos.</p>
        <div class="cad-numgrid">
          <div class="cad-numfield">
            <label for="cad-area">Superficie</label>
            <div class="cad-box"><input type="number" id="cad-area" value="15" min="1" max="120" step="0.5" inputmode="decimal"><span class="cad-unit">m²</span></div>
          </div>
          <div class="cad-numfield">
            <label for="cad-altura">Altura del techo</label>
            <div class="cad-box"><input type="number" id="cad-altura" value="2.5" min="2" max="5" step="0.1" inputmode="decimal"><span class="cad-unit">m</span></div>
          </div>
          <div class="cad-numfield">
            <label for="cad-temp">Temperatura</label>
            <div class="cad-box"><input type="number" id="cad-temp" value="21" min="16" max="26" step="1" inputmode="numeric"><span class="cad-unit">°C</span></div>
          </div>
        </div>
      </div>

      <div class="cad-step">
        <p class="cad-slab">Aislamiento</p>
        <h2>Aislamiento de la vivienda</h2>
        <p class="cad-shint">Si tienes el certificado energético a mano, su letra vale como respuesta.</p>
        <div class="cad-isogrid">
          <label class="cad-iso" data-iso="alto"><input type="radio" name="iso" value="alto"><span><b>Muy bueno</b><i>Letras A · B</i></span></label>
          <label class="cad-iso" data-iso="medio"><input type="radio" name="iso" value="medio" checked><span><b>Medio</b><i>Letras C · D · E</i></span></label>
          <label class="cad-iso" data-iso="bajo"><input type="radio" name="iso" value="bajo"><span><b>Bajo</b><i>Letras F · G</i></span></label>
          <label class="cad-iso" data-iso="nose"><input type="radio" name="iso" value="nose"><span><b>No lo sé</b><i>Estimación estándar</i></span></label>
        </div>
      </div>

    </form>

    <aside class="cad-rail">
      <div class="cad-rcard">
        <p class="cad-rlabel">Potencia recomendada</p>
        <p class="cad-watts" id="cad-watts">—</p>
        <p class="cad-wnote" id="cad-wnote"></p>
        <div class="cad-scale">
          <div class="cad-bar" id="cad-ramp"></div>
          <div class="cad-ends" id="cad-rampEnds"></div>
        </div>
        <dl class="cad-facts" id="cad-facts"></dl>
        <a class="cad-rgo" href="#cad-picks">Ver los equipos que la cubren</a>
      </div>
    </aside>

  </div>

  <section class="cad-picks" id="cad-picks">
    <div class="cad-pickhead">
      <h2>Equipos del catálogo que la cubren</h2>
      <span class="cad-count" id="cad-count"></span>
    </div>
    <div class="cad-cards" id="cad-combos"></div>
  </section>

</div><!-- .cad-wrap -->
</div><!-- #cad-calc -->

<!-- CONTACTO RICARDO -->
<section class="contact-help-common cad-ancho-total">
    <div class="contact-help-wrapper">
        <div class="contact-intro">
            <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo, experto en calefacci&oacute;n de Adrihosan">
            <div>
                <h2>Soy Ricardo. &iquest;Necesitas ayuda para elegir tu radiador?
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
            <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20para%20elegir%20un%20radiador" class="contact-option-common">
                <div class="icon">&#128172;</div>
                <div class="label">Whatsapp</div>
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
	return ob_get_clean();
}
add_shortcode( 'calculadora_calefaccion', 'adrihosan_calc_shortcode' );

/**
 * ⚠️ PENDIENTE PARA EL REMODELADO DE LA WEB (27-ago-2026)
 *
 * Aqui vivia un aviso que llevaba de las categorias de radiadores a la
 * calculadora: un bloque a ancho completo enganchado en
 * `woocommerce_before_shop_loop` para las categorias 110, 264, 265, 266 y 267,
 * reutilizando el patron del simulador de baldosa hidraulica.
 *
 * Se retiro a peticion de Ricardo porque la interfaz de la web se va a rehacer
 * y no queria bloques cosidos a la plantilla actual. Mientras tanto, el enlace
 * a la calculadora vive en la DESCRIPCION de cada categoria, que es contenido
 * y sobrevive al cambio de plantilla.
 *
 * CUANDO SE TOQUE LA PLANTILLA DE CATEGORIA: hacerle un hueco de verdad al
 * acceso a la calculadora (arriba de la parrilla de productos, o en la columna
 * lateral), en vez de engancharlo por hook. El bloque retirado esta en el
 * historial: `git show ca2a153 -- inc/calculadora-calefaccion.php`.
 *
 * Dos cepos que costaron encontrarse y conviene no repetir:
 *  - El encabezado de algunas categorias (radiadores electricos, por ejemplo)
 *    lleva un ::after absoluto de 739 px con degradado y z-index 1 que cae
 *    sobre lo que venga detras: hace falta z-index propio para no salir lavado.
 *  - La clase `adrihosan-full-width-block` solo cuadra dentro de una categoria;
 *    en otras plantillas desplaza el bloque medio viewport.
 */

/**
 * Categoria madre de los radiadores; las cinco de calefaccion cuelgan de ella.
 */
if ( ! defined( 'ADRIHOSAN_CALEF_CAT' ) ) {
	define( 'ADRIHOSAN_CALEF_CAT', 110 );
}

/**
 * Foto de fondo de la llamada. Filtrable.
 */
function adrihosan_calef_cta_imagen_id() {
	return (int) apply_filters( 'adrihosan_calef_cta_imagen', 430850 );
}

/**
 * ¿Toca pintar la llamada aqui? En radiadores y en los toalleros electricos,
 * que son la otra rama que la calculadora sabe dimensionar.
 */
function adrihosan_calef_cta_aplica() {
	if ( ! function_exists( 'adrihosan_cta_en_categoria' ) ) {
		return false;
	}
	return adrihosan_cta_en_categoria( ADRIHOSAN_CALEF_CAT ) || adrihosan_cta_en_categoria( 4638 );
}

/**
 * La hoja del componente solo se pide donde se pinta.
 */
function adrihosan_calef_cta_assets() {
	if ( adrihosan_calef_cta_aplica() ) {
		adrihosan_cta_assets();
	}
}
add_action( 'wp_enqueue_scripts', 'adrihosan_calef_cta_assets' );

/**
 * Llamada a la calculadora bajo los productos de las categorias de radiadores.
 */
function adrihosan_calef_cta_categoria() {
	if ( ! adrihosan_calef_cta_aplica() ) {
		return;
	}
	adrihosan_cta_pintar(
		array(
			'ojo'      => 'Calculadora de potencia',
			'titulo'   => '¿Cuántos vatios necesita tu habitación?',
			'texto'    => 'Cuéntanos cómo es la estancia: los metros, la altura del techo, el aislamiento. Te decimos los vatios que pide, con los radiadores del catálogo que la cubren y su precio de hoy.',
			'boton'    => 'Calcular mis vatios',
			'url'      => adrihosan_cta_url( 'calculadora-calefaccion' ),
			'pie'      => 'Es una estimación orientativa con los datos que introduzcas.',
			'imagen'   => adrihosan_calef_cta_imagen_id(),
			'posicion' => 'center 50%',
		)
	);
}
/**
 * El bloque va detras del paginador, no antes.
 */
function adrihosan_calef_cta_colocar() {
	if ( adrihosan_calef_cta_aplica() ) {
		adrihosan_cta_tras_paginacion( 'adrihosan_calef_cta_categoria' );
	}
}
add_action( 'template_redirect', 'adrihosan_calef_cta_colocar' );
