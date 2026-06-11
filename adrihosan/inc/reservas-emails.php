<?php
/**
 * Plantillas HTML para los emails del sistema de reservas
 *
 * Identidad corporativa Adrihosan:
 *  - Color CTA: #4dd2d0 (turquesa)
 *  - Color texto: #3f6f7b (azul corporativo)
 *  - Tipografia: Poppins en web; Arial como fallback en email (los
 *    clientes de correo no soportan webfonts de forma fiable).
 *
 * Estructura email-safe (table-based, CSS inline) para Gmail / Outlook
 * / Apple Mail / clientes moviles.
 */

if ( function_exists( 'adrihosan_email_render' ) ) {
    return;
}

function adrihosan_email_format_date( $date_str ) {
    static $months = [
        'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
        'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre',
    ];
    $ts = strtotime( $date_str );
    if ( ! $ts ) {
        return $date_str;
    }
    $day   = (int) date( 'j', $ts );
    $month = $months[ (int) date( 'n', $ts ) - 1 ];
    $year  = (int) date( 'Y', $ts );
    return $day . ' de ' . $month . ' de ' . $year;
}

/**
 * Construye el HTML de un email con los colores e identidad Adrihosan.
 *
 * $args:
 *  eyebrow   string   Texto pequeno sobre el titulo (default 'Cita previa')
 *  title     string   Titulo grande del header
 *  intro     string   HTML corto debajo del header
 *  details   array    [ 'Etiqueta' => 'Valor HTML', ... ] tabla de datos
 *  extra     string   HTML libre tras la tabla
 *  cta_url   string   Si se pasa con cta_label, dibuja un boton turquesa
 *  cta_label string
 *  signoff   string   Cierre (HTML)
 */
function adrihosan_email_render( $args ) {
    $a = wp_parse_args( $args, [
        'eyebrow'   => 'Cita previa',
        'title'     => '',
        'intro'     => '',
        'details'   => [],
        'extra'     => '',
        'cta_url'   => '',
        'cta_label' => '',
        'signoff'   => '&iexcl;Te esperamos!<br>Equipo Adrihosan',
    ] );

    $accent  = '#4dd2d0';
    $brand   = '#3f6f7b';
    $bg_out  = '#f0f7f8';
    $bg_card = '#ffffff';
    $border  = '#d4e3e6';
    $font    = "'Poppins', 'Helvetica Neue', Helvetica, Arial, sans-serif";

    ob_start();
    ?><!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php echo esc_html( $a['title'] ); ?></title>
</head>
<body style="margin:0;padding:0;background:<?php echo $bg_out; ?>;font-family:<?php echo $font; ?>;color:<?php echo $brand; ?>;-webkit-text-size-adjust:100%;">
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background:<?php echo $bg_out; ?>;">
  <tr>
    <td align="center" style="padding:24px 12px;">
      <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="max-width:600px;width:100%;">

        <!-- HEADER -->
        <tr>
          <td style="padding:36px 36px 30px;background:<?php echo $brand; ?>;border-radius:16px 16px 0 0;">
            <p style="margin:0 0 10px;color:<?php echo $accent; ?>;font-family:<?php echo $font; ?>;font-size:12px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;">
              Adrihosan &middot; <?php echo esc_html( $a['eyebrow'] ); ?>
            </p>
            <h1 style="margin:0;font-family:<?php echo $font; ?>;font-size:26px;line-height:1.25;font-weight:700;color:#ffffff;">
              <?php echo esc_html( $a['title'] ); ?>
            </h1>
          </td>
        </tr>

        <!-- BODY -->
        <tr>
          <td style="padding:32px 36px;background:<?php echo $bg_card; ?>;border-left:1px solid <?php echo $border; ?>;border-right:1px solid <?php echo $border; ?>;">

            <?php if ( $a['intro'] ) : ?>
              <p style="margin:0 0 22px;font-family:<?php echo $font; ?>;font-size:16px;line-height:1.6;color:<?php echo $brand; ?>;">
                <?php echo $a['intro']; ?>
              </p>
            <?php endif; ?>

            <?php if ( ! empty( $a['details'] ) ) : ?>
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin:0 0 24px;background:<?php echo $bg_out; ?>;border-radius:12px;border:1px solid <?php echo $border; ?>;">
                <?php $i = 0; $count = count( $a['details'] ); foreach ( $a['details'] as $label => $value ) : $i++; $is_last = ( $i === $count ); ?>
                <tr>
                  <td style="padding:12px 18px;font-family:<?php echo $font; ?>;font-size:13px;color:<?php echo $brand; ?>;opacity:0.7;<?php echo $is_last ? '' : 'border-bottom:1px solid ' . $border . ';'; ?>width:38%;vertical-align:top;">
                    <?php echo esc_html( $label ); ?>
                  </td>
                  <td style="padding:12px 18px;font-family:<?php echo $font; ?>;font-size:14px;color:<?php echo $brand; ?>;font-weight:600;<?php echo $is_last ? '' : 'border-bottom:1px solid ' . $border . ';'; ?>">
                    <?php echo $value; ?>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            <?php endif; ?>

            <?php if ( $a['extra'] ) : ?>
              <div style="margin:0 0 24px;font-family:<?php echo $font; ?>;font-size:14px;line-height:1.6;color:<?php echo $brand; ?>;">
                <?php echo $a['extra']; ?>
              </div>
            <?php endif; ?>

            <?php if ( $a['cta_url'] && $a['cta_label'] ) : ?>
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin:0 0 24px;">
                <tr>
                  <td align="center" style="padding:0;">
                    <a href="<?php echo esc_url( $a['cta_url'] ); ?>" style="display:inline-block;padding:14px 36px;background:<?php echo $accent; ?>;color:#ffffff !important;font-family:<?php echo $font; ?>;font-size:14px;font-weight:700;text-decoration:none;border-radius:8px;letter-spacing:0.02em;">
                      <?php echo esc_html( $a['cta_label'] ); ?>
                    </a>
                  </td>
                </tr>
              </table>
            <?php endif; ?>

            <?php if ( $a['signoff'] ) : ?>
              <p style="margin:24px 0 0;font-family:<?php echo $font; ?>;font-size:14px;line-height:1.6;color:<?php echo $brand; ?>;">
                <?php echo $a['signoff']; ?>
              </p>
            <?php endif; ?>

          </td>
        </tr>

        <!-- FOOTER -->
        <tr>
          <td style="padding:22px 36px 28px;background:<?php echo $bg_out; ?>;border:1px solid <?php echo $border; ?>;border-top:0;border-radius:0 0 16px 16px;text-align:center;">
            <p style="margin:0 0 6px;font-family:<?php echo $font; ?>;font-size:13px;color:<?php echo $brand; ?>;font-weight:700;letter-spacing:0.04em;">
              Adrihosan &middot; Showroom Valencia
            </p>
            <p style="margin:0 0 4px;font-family:<?php echo $font; ?>;font-size:12px;color:<?php echo $brand; ?>;opacity:0.75;">
              C/ Los Centelles, 48 &middot; 46006 Valencia (Ruzafa)
            </p>
            <p style="margin:0;font-family:<?php echo $font; ?>;font-size:12px;color:<?php echo $brand; ?>;opacity:0.75;">
              <a href="tel:+34961957136" style="color:<?php echo $brand; ?>;text-decoration:none;">+34&nbsp;961&nbsp;957&nbsp;136</a>
              &middot;
              <a href="mailto:comercial@adrihosan.com" style="color:<?php echo $accent; ?>;text-decoration:none;">comercial@adrihosan.com</a>
              &middot;
              <a href="https://www.adrihosan.com/" style="color:<?php echo $brand; ?>;text-decoration:none;">adrihosan.com</a>
            </p>
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>
</body>
</html><?php
    return ob_get_clean();
}

/**
 * Wrapper de wp_mail que cabecera HTML y construye el cuerpo con el
 * template Adrihosan. Devuelve true/false segun wp_mail.
 */
function adrihosan_email_send( $to, $subject, $args, $extra_headers = [] ) {
    $html    = adrihosan_email_render( $args );
    $headers = array_merge(
        [ 'Content-Type: text/html; charset=UTF-8' ],
        is_array( $extra_headers ) ? $extra_headers : []
    );
    return wp_mail( $to, $subject, $html, $headers );
}
