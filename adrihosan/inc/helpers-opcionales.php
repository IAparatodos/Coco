<?php
/**
 * BLOQUE COM&Uacute;N DE OPCIONALES (configurador -> WhatsApp)
 *
 * Por qu&eacute; existe: los espejos grandes se venden por tel&eacute;fono, WhatsApp y correo
 * porque el cliente quiere opcionales (aumento, bluetooth, sensor de movimiento,
 * estaci&oacute;n meteorol&oacute;gica...) y hoy solo se entera de que existen si llama.
 * Este bloque los ense&ntilde;a y entrega la conversaci&oacute;n ya escrita al canal que cierra.
 *
 * NO es un carrito a prop&oacute;sito: el catalogo de Genexia avisa de que hay
 * incompatibilidades de sensores y accesorios seg&uacute;n modelo y medida, y los
 * opcionales no tienen precio p&uacute;blico. Esto cualifica, no cobra.
 *
 * Uso m&iacute;nimo en cualquier plantilla de categor&iacute;a:
 *   adrihosan_bloque_opcionales( array( 'medida' => '120x100 cm' ) );
 *
 * Uso completo:
 *   adrihosan_bloque_opcionales( array(
 *       'medida'  => '120x100 cm',
 *       'serie'   => 'Kayra',
 *       'excluir' => array( 'antivaho' ),   // ya va de serie en esta categor&iacute;a
 *       'titulo'  => 'M&oacute;ntalo a tu gusto',
 *       'id'      => 'esp120x100',          // solo si hay dos bloques en la misma p&aacute;gina
 *   ) );
 *
 * @package Adrihosan
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Cat&aacute;logo de opcionales reales (Genexia, OPCIONALES.pdf).
 * Cero invenci&oacute;n: cada entrada sale de la ficha del fabricante.
 *
 * @return array
 */
if ( ! function_exists( 'adrihosan_opcionales_catalogo' ) ) {
    function adrihosan_opcionales_catalogo() {
        return array(
            'antivaho' => array(
                'icono' => '&#127786;',
                'nombre' => 'Antivaho',
                'detalle' => 'No se empa&ntilde;a al ducharte',
            ),
            'aumento-imantado' => array(
                'icono' => '&#128269;',
                'nombre' => 'Aumento imantado',
                'detalle' => 'Lupa x3 de 14&nbsp;cm: la mueves de sitio o la quitas',
            ),
            'aumento' => array(
                'icono' => '&#128270;',
                'nombre' => 'Aumento integrado',
                'detalle' => 'Lupa x3 o x5 dentro del propio espejo',
            ),
            'aumento-luz' => array(
                'icono' => '&#10024;',
                'nombre' => 'Aumento con luz',
                'detalle' => 'Lupa con arenado perimetral iluminado',
            ),
            'bluetooth' => array(
                'icono' => '&#127925;',
                'nombre' => 'Altavoces Bluetooth',
                'detalle' => 'Pareja de altavoces detr&aacute;s del espejo',
            ),
            'display' => array(
                'icono' => '&#128337;',
                'nombre' => 'Hora y temperatura',
                'detalle' => 'Display de 50x20&nbsp;mm',
            ),
            'radio' => array(
                'icono' => '&#128251;',
                'nombre' => 'Display con radio',
                'detalle' => 'FM, AM y bluetooth con altavoces',
            ),
            'meteo' => array(
                'icono' => '&#127780;',
                'nombre' => 'Estaci&oacute;n meteorol&oacute;gica',
                'detalle' => 'Previsi&oacute;n de 72&nbsp;h &middot; necesita wifi 2,4&nbsp;GHz',
            ),
            'biled' => array(
                'icono' => '&#127760;',
                'nombre' => 'Luz bi-LED',
                'detalle' => 'Fr&iacute;a, neutra y c&aacute;lida en el mismo espejo, regulables',
            ),
            'dinamico' => array(
                'icono' => '&#128262;',
                'nombre' => 'Encendido din&aacute;mico',
                'detalle' => 'La luz sube de intensidad poco a poco',
            ),
            'movimiento' => array(
                'icono' => '&#128374;',
                'nombre' => 'Sensor de movimiento',
                'detalle' => 'Se enciende al acercarte y se apaga solo',
            ),
            'touch' => array(
                'icono' => '&#128072;',
                'nombre' => 'Sensor t&aacute;ctil',
                'detalle' => 'Simple, doble o triple seg&uacute;n lo que quieras encender',
            ),
            'modulo' => array(
                'icono' => '&#128241;',
                'nombre' => 'M&oacute;dulo inteligente',
                'detalle' => 'Encendido desde un dispositivo externo',
            ),
            'logo' => array(
                'icono' => '&#127991;',
                'nombre' => 'Logo personalizado',
                'detalle' => 'Consultamos ubicaci&oacute;n y tama&ntilde;o',
            ),
        );
    }
}

/**
 * Pinta el bloque de opcionales.
 *
 * @param array $args Ver cabecera del archivo.
 * @return void
 */
if ( ! function_exists( 'adrihosan_bloque_opcionales' ) ) {
    function adrihosan_bloque_opcionales( $args = array() ) {

        $args = wp_parse_args( $args, array(
            'titulo'  => 'M&oacute;ntalo a tu gusto',
            'intro'   => 'Nuestros espejos se fabrican bajo pedido, as&iacute; que puedes a&ntilde;adirles lo que necesites. Marca lo que te interese y te preparamos el presupuesto con tu configuraci&oacute;n.',
            'medida'  => '',
            'serie'   => '',
            'excluir' => array(),
            'id'      => 'opc',
        ) );

        $catalogo = adrihosan_opcionales_catalogo();

        if ( ! empty( $args['excluir'] ) && is_array( $args['excluir'] ) ) {
            foreach ( $args['excluir'] as $clave ) {
                unset( $catalogo[ $clave ] );
            }
        }

        if ( empty( $catalogo ) ) {
            return;
        }

        $uid = sanitize_html_class( $args['id'] );

        // Contexto que se envia con la consulta. Frase libre para que encaje en
        // "Hola, me interesa un espejo ___": "de 120x100 cm", "antivaho",
        // "redondo de 100 cm"... Por eso NO se le antepone " de " automatico.
        $contexto = trim( $args['medida'] );
        if ( ! empty( $args['serie'] ) ) {
            $contexto = trim( $contexto . ' ' . $args['serie'] );
        }
        ?>
        <section class="opcionales-common adrihosan-full-width-block" id="opcionales-<?php echo esc_attr( $uid ); ?>">
            <div class="opcionales-wrapper-common">

                <h2 class="opcionales-titulo-common"><?php echo $args['titulo']; ?></h2>
                <p class="opcionales-intro-common"><?php echo $args['intro']; ?></p>

                <div class="opcionales-grid-common">
                    <?php foreach ( $catalogo as $clave => $op ) : ?>
                        <label class="opcional-item-common" for="opc-<?php echo esc_attr( $uid . '-' . $clave ); ?>">
                            <input
                                type="checkbox"
                                class="opcional-check-common"
                                id="opc-<?php echo esc_attr( $uid . '-' . $clave ); ?>"
                                data-nombre="<?php echo esc_attr( wp_strip_all_tags( html_entity_decode( $op['nombre'], ENT_QUOTES, 'UTF-8' ) ) ); ?>">
                            <span class="opcional-icono-common" aria-hidden="true"><?php echo $op['icono']; ?></span>
                            <span class="opcional-texto-common">
                                <strong><?php echo $op['nombre']; ?></strong>
                                <span><?php echo $op['detalle']; ?></span>
                            </span>
                        </label>
                    <?php endforeach; ?>
                </div>

                <div class="opcionales-medida-common">
                    <label for="opc-medida-<?php echo esc_attr( $uid ); ?>">
                        &iquest;Necesitas otra medida? Escr&iacute;bela y te la fabricamos
                    </label>
                    <input
                        type="text"
                        id="opc-medida-<?php echo esc_attr( $uid ); ?>"
                        class="opcionales-medida-input-common"
                        placeholder="<?php echo esc_attr( $args['medida'] ? $args['medida'] : 'Ej.: 130x95 cm' ); ?>"
                        maxlength="40">
                </div>

                <div class="opcionales-cta-common">
                    <a class="opcionales-btn-common opcionales-btn-wa-common"
                       id="opc-wa-<?php echo esc_attr( $uid ); ?>"
                       href="https://wa.me/34961957136"
                       target="_blank" rel="noopener"
                       data-base="https://wa.me/34961957136"
                       data-contexto="<?php echo esc_attr( $contexto ); ?>">
                        Pedir presupuesto por WhatsApp
                    </a>
                    <a class="opcionales-btn-common opcionales-btn-alt-common"
                       href="https://www.adrihosan.com/contacta-con-nosotros/">
                        Prefiero el formulario
                    </a>
                </div>

                <p class="opcionales-nota-common">
                    La luz bi-LED y el encendido din&aacute;mico necesitan sensor t&aacute;ctil, y hay
                    combinaciones que dependen del modelo y de la medida. Por eso lo revisamos contigo
                    antes de pasarte precio: as&iacute; no te llevas sorpresas en el montaje.
                </p>

            </div>
        </section>

        <script>
        (function () {
            var raiz = document.getElementById('opcionales-<?php echo esc_js( $uid ); ?>');
            if (!raiz) { return; }
            var boton = document.getElementById('opc-wa-<?php echo esc_js( $uid ); ?>');
            var medida = document.getElementById('opc-medida-<?php echo esc_js( $uid ); ?>');
            if (!boton) { return; }

            function construir() {
                var elegidos = [];
                raiz.querySelectorAll('.opcional-check-common:checked').forEach(function (c) {
                    elegidos.push(c.getAttribute('data-nombre'));
                });

                var contexto = boton.getAttribute('data-contexto') || '';
                var medidaLibre = medida && medida.value ? medida.value.trim() : '';
                if (medidaLibre) { contexto = 'de ' + medidaLibre; }

                var texto = 'Hola, me interesa un espejo';
                if (contexto) { texto += ' ' + contexto; }
                if (elegidos.length) {
                    texto += ' con: ' + elegidos.join(', ') + '.';
                } else {
                    texto += '.';
                }
                texto += ' ¿Me pasáis presupuesto?';

                boton.setAttribute('href', boton.getAttribute('data-base') + '?text=' + encodeURIComponent(texto));
            }

            raiz.addEventListener('change', construir);
            if (medida) { medida.addEventListener('input', construir); }
            construir();
        })();
        </script>
        <?php
    }
}
