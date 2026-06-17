<?php
/**
 * Plugin Name: Adrihosan - Autor Ricardo Hoyos (GEO/E-E-A-T)
 * Description: Caja de autor visible + author Person en el JSON-LD de Rank Math en los posts. Rediseno de la pagina de archivo del autor (/autor/ricardo-hoyos/) con hero, trust bar, bio + areas, FAQ y CTA. Estilo tipo retail. Creado por Claude.
 * Version: 1.1
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// ============================================================================
// 1. DATA + FAQs (NO TOCAR - claves estables usadas en multiples sitios)
// ============================================================================

if ( ! function_exists( 'adrihosan_ricardo_data' ) ) {
    function adrihosan_ricardo_data() {
        return array(
            'name'  => 'Ricardo Hoyos Pérez',
            'photo' => 'https://www.adrihosan.com/wp-content/uploads/2026/06/ricardo-hoyos-adrihosan.jpg',
            'role'  => 'Más de 30 años en azulejos, mamparas y material de baño · Adrihosan (Valencia)',
            'bio'   => 'Llevo más de 30 años dedicándome a la venta de azulejos, mamparas y material de baño. Junto a Amparo dirijo Adrihosan, tienda de cerámica y reforma en Valencia, donde asesoro personalmente, también por videollamada, a quien va a reformar su baño o cocina. Especialista en baldosa hidráulica artesanal y porcelánico.',
            'url'   => home_url( '/sobre-nosotros/' ),
            'li'    => 'https://www.linkedin.com/in/ricardohoyosperez',
            'tw'    => 'https://x.com/ricardohoyos1',
        );
    }
}

if ( ! function_exists( 'adrihosan_ricardo_faqs' ) ) {
    function adrihosan_ricardo_faqs() {
        return array(
            array( '¿Quién es Ricardo Hoyos?', 'Cofundador de Adrihosan (Valencia) junto a Amparo. Más de 30 años dedicado a la venta y el asesoramiento de azulejos, mamparas y material de baño, especialista en baldosa hidráulica artesanal y pavimento porcelánico.' ),
            array( '¿Sobre qué escribe Ricardo Hoyos?', 'Guías prácticas de cerámica y reforma: cómo elegir azulejo y porcelánico, baldosa hidráulica, inodoros y sanitarios, mamparas, y cómo planificar la reforma de un baño o una cocina sin sustos.' ),
            array( '¿Desde qué experiencia escribe?', 'Desde la tienda y la obra reales: lo que funciona y lo que da problemas en los proyectos de clientes, no desde la teoría. Asesora en persona y por videollamada.' ),
            array( '¿Cómo puedo consultar con él?', 'Puedes escribir a Adrihosan por WhatsApp o pedir asesoría gratuita por videollamada. Tienes más sobre el equipo en la página Sobre nosotros.' ),
        );
    }
}

// ============================================================================
// 2. CAJA DE AUTOR AL PIE DE CADA POST (NO TOCAR - sin cambios respecto a v1.0)
// ============================================================================

add_filter( 'the_content', function ( $content ) {
    if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() ) { return $content; }
    static $done = false;
    if ( $done ) { return $content; }
    $done = true;
    $d   = adrihosan_ricardo_data();
    $img = esc_url( $d['photo'] );
    $li  = esc_url( $d['li'] );
    $tw  = esc_url( $d['tw'] );
    $url = esc_url( $d['url'] );
    $box  = "<aside class='adri-author-box' style='margin:48px 0 8px;padding:24px;border:1px solid #dde6e6;border-left:4px solid #4dd2d0;border-radius:14px;background:#f5f9f9;display:flex;gap:20px;align-items:flex-start;flex-wrap:wrap;font-family:Poppins,-apple-system,sans-serif;'>";
    $box .= "<img src='{$img}' alt='Ricardo Hoyos Pérez, Adrihosan' width='84' height='84' loading='lazy' style='width:84px;height:84px;border-radius:50%;object-fit:cover;flex-shrink:0;border:2px solid #4dd2d0;'>";
    $box .= "<div style='flex:1;min-width:240px;'>";
    $box .= "<div style='font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#3f6f7b;margin-bottom:2px;'>Escrito por</div>";
    $box .= "<div style='font-size:19px;font-weight:700;color:#102e35;line-height:1.2;'>" . esc_html( $d['name'] ) . "</div>";
    $box .= "<div style='font-size:13.5px;color:#3f6f7b;margin-bottom:8px;'>" . esc_html( $d['role'] ) . "</div>";
    $box .= "<p style='font-size:14.5px;color:#1f2d31;line-height:1.55;margin:0 0 12px;'>" . esc_html( $d['bio'] ) . "</p>";
    $box .= "<div style='font-size:14px;font-weight:600;'>";
    $box .= "<a href='{$url}' style='color:#3f6f7b;text-decoration:none;'>Sobre nosotros</a>";
    $box .= " &middot; <a href='{$li}' rel='me noopener' target='_blank' style='color:#3f6f7b;text-decoration:none;'>LinkedIn</a>";
    $box .= " &middot; <a href='{$tw}' rel='me noopener' target='_blank' style='color:#3f6f7b;text-decoration:none;'>X</a>";
    $box .= "</div></div></aside>";
    return $content . $box;
}, 20 );

// ============================================================================
// 3. SCHEMA PERSON EN POSTS (NO TOCAR - sin cambios respecto a v1.0)
// ============================================================================

add_filter( 'rank_math/json_ld', function ( $data, $jsonld ) {
    if ( ! is_singular( 'post' ) ) { return $data; }
    $d = adrihosan_ricardo_data();
    $person = array(
        '@type'       => 'Person',
        '@id'         => home_url( '/#/schema/person/ricardo-hoyos' ),
        'name'        => $d['name'],
        'url'         => $d['url'],
        'image'       => array( '@type' => 'ImageObject', 'url' => $d['photo'] ),
        'jobTitle'    => 'Especialista en material cerámico y reforma de baño',
        'worksFor'    => array( '@type' => 'Organization', 'name' => 'Adrihosan', 'url' => home_url( '/' ) ),
        'knowsAbout'  => array( 'Azulejos', 'Baldosa hidráulica', 'Porcelánico', 'Mamparas de baño', 'Sanitarios', 'Reformas de baño' ),
        'description' => $d['bio'],
        'sameAs'      => array( $d['li'], $d['tw'] ),
    );
    if ( is_array( $data ) ) {
        foreach ( $data as $k => $entity ) {
            if ( ! is_array( $entity ) || empty( $entity['@type'] ) ) { continue; }
            $types = (array) $entity['@type'];
            foreach ( $types as $t ) {
                if ( in_array( $t, array( 'BlogPosting', 'Article', 'NewsArticle' ), true ) ) {
                    $data[ $k ]['author'] = $person;
                }
            }
        }
    }
    return $data;
}, 99, 2 );

// ============================================================================
// 4. ARCHIVO DE AUTOR (/autor/ricardo-hoyos/) - REDISENO RETAIL
// ============================================================================

/**
 * Guarda comun: solo pinta en is_author() del autor ID 2.
 */
if ( ! function_exists( 'adri_au_ricardo_is_target' ) ) {
    function adri_au_ricardo_is_target() {
        if ( is_admin() || ! is_author() ) { return false; }
        $obj = get_queried_object();
        if ( ! $obj || (int) $obj->ID !== 2 ) { return false; }
        return true;
    }
}

// 4.1 - CSS centralizado en wp_head (una sola vez por carga)
add_action( 'wp_head', function () {
    if ( ! adri_au_ricardo_is_target() ) { return; }
    ?>
<style id="adri-au-css">
.adri-au{
  --turq:#12ABA6; --turq-deep:#0A6F6C; --ink:#0C2A30; --ink-soft:#1A2B2F;
  --mute:#4E6A6E; --line:#E2ECEC; --card:#fff;
  grid-column:1 / -1; width:100%;
  font-family:Poppins,-apple-system,BlinkMacSystemFont,sans-serif;
}
.adri-au *{box-sizing:border-box}
.adri-au-wrap{max-width:1080px;margin:0 auto;padding:0 20px}
/* HERO */
.adri-au-hero{position:relative;overflow:hidden;border-radius:20px;margin:0;
  background:radial-gradient(120% 140% at 85% 10%,#14C2BC 0%,var(--turq) 38%,var(--turq-deep) 100%);
  color:#fff}
.adri-au-hero::after{content:"";position:absolute;inset:0;
  background:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"><g fill="none" stroke="white" stroke-opacity="0.06"><rect x="0" y="0" width="30" height="30"/><rect x="30" y="30" width="30" height="30"/></g></svg>');
  opacity:.7;pointer-events:none}
.adri-au-hero-in{position:relative;z-index:1;display:flex;gap:34px;align-items:center;flex-wrap:wrap;padding:48px 30px}
.adri-au-photo{width:168px;height:168px;border-radius:24px;object-fit:cover;flex-shrink:0;
  border:4px solid rgba(255,255,255,.85);box-shadow:0 18px 40px rgba(8,40,44,.35)}
.adri-au-htxt{flex:1;min-width:280px}
.adri-au-eyebrow{font-size:12px;font-weight:700;letter-spacing:.16em;text-transform:uppercase;
  color:rgba(255,255,255,.82);margin:0 0 8px}
.adri-au-hero h1{font-size:clamp(28px,5vw,44px);font-weight:800;line-height:1.05;margin:0 0 10px;
  letter-spacing:-.02em;color:#fff}
.adri-au-role{font-size:16px;font-weight:500;color:rgba(255,255,255,.92);margin:0 0 18px;max-width:48ch}
.adri-au-stats{display:flex;gap:10px;flex-wrap:wrap}
.adri-au-stat{background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.28);
  border-radius:14px;padding:10px 16px;min-width:96px}
.adri-au-stat b{display:block;font-size:22px;font-weight:800;line-height:1}
.adri-au-stat span{font-size:11.5px;font-weight:500;color:rgba(255,255,255,.85)}
/* TRUST */
.adri-au-trust{background:var(--ink);color:#fff;border-radius:14px;margin:14px 0 0}
.adri-au-trust-in{display:flex;gap:8px;flex-wrap:wrap;justify-content:space-between;padding:16px 22px}
.adri-au-t{display:flex;align-items:center;gap:9px;font-size:13.5px;font-weight:500;color:rgba(255,255,255,.92)}
.adri-au-t svg{flex-shrink:0}
/* SECCIONES */
.adri-au-sec{padding:40px 0 0}
.adri-au-head{display:flex;align-items:baseline;gap:14px;margin:0 0 22px}
.adri-au-head h2{font-size:23px;font-weight:800;color:var(--ink);margin:0;letter-spacing:-.01em}
.adri-au-rule{flex:1;height:2px;background:linear-gradient(90deg,var(--turq),transparent)}
/* BIO */
.adri-au-bio{display:grid;grid-template-columns:1.6fr 1fr;gap:34px;align-items:start}
.adri-au-bio p{font-size:15.5px;color:var(--ink-soft);margin:0 0 16px}
.adri-au-bio .adri-au-lead{font-size:17px;font-weight:500;color:var(--ink)}
.adri-au-exp{background:var(--card);border:1px solid var(--line);border-radius:18px;padding:22px}
.adri-au-exp h3{font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;
  color:var(--turq-deep);margin:0 0 14px}
.adri-au-chips{display:flex;flex-wrap:wrap;gap:8px}
.adri-au-chip{font-size:13px;font-weight:600;color:var(--turq-deep);background:#E9F7F6;
  border:1px solid #CDECEB;border-radius:999px;padding:6px 14px}
.adri-au-links{margin-top:18px;padding-top:16px;border-top:1px dashed var(--line);font-size:14px;font-weight:600}
.adri-au-links a{color:var(--turq-deep);text-decoration:none}
.adri-au-links a:hover{text-decoration:underline}
/* FAQ */
.adri-au-faq details{background:var(--card);border:1px solid var(--line);border-radius:12px;
  margin-bottom:10px;overflow:hidden}
.adri-au-faq summary{cursor:pointer;padding:16px 18px;font-weight:600;color:var(--ink);
  list-style:none;display:flex;justify-content:space-between;align-items:center;gap:12px}
.adri-au-faq summary::-webkit-details-marker{display:none}
.adri-au-faq summary::after{content:"+";font-size:22px;font-weight:400;color:var(--turq);transition:transform .2s}
.adri-au-faq details[open] summary::after{transform:rotate(45deg)}
.adri-au-faq p{margin:0;padding:0 18px 18px;color:var(--mute);font-size:14.5px}
/* H2 articulos (full width antes del grid del theme) */
.adri-au-postshead{grid-column:1 / -1;width:100%;font-size:22px;font-weight:800;color:var(--ink);
  margin:36px 0 4px;letter-spacing:-.01em}
/* CTA */
.adri-au-cta{grid-column:1 / -1;width:100%;
  background:linear-gradient(135deg,var(--turq-deep) 0%,var(--ink) 100%);
  border-radius:24px;padding:38px 34px;color:#fff;display:flex;justify-content:space-between;
  align-items:center;gap:28px;flex-wrap:wrap;margin:34px 0 8px}
.adri-au-cta h2{font-size:25px;font-weight:800;margin:0 0 8px;color:#fff}
.adri-au-cta p{margin:0;color:rgba(255,255,255,.9);font-size:15px;max-width:48ch}
.adri-au-btns{display:flex;gap:12px;flex-wrap:wrap}
.adri-au-btn{display:inline-flex;align-items:center;gap:9px;font-weight:700;font-size:15px;
  border-radius:14px;padding:14px 22px;text-decoration:none;transition:transform .15s}
.adri-au-btn:hover{transform:translateY(-2px)}
.adri-au-wa{background:#fff;color:var(--ink)}
.adri-au-mail{background:rgba(255,255,255,.10);color:#fff;border:2px solid rgba(255,255,255,.7)}
@media(max-width:760px){
  .adri-au-bio{grid-template-columns:1fr}
  .adri-au-cta{flex-direction:column;align-items:flex-start}
}
@media(prefers-reduced-motion:reduce){.adri-au *{transition:none!important}}
</style>
    <?php
}, 99 );

// 4.2 - loop_start: hero + trust + bio + FAQ + H2 "Articulos de Ricardo"
add_action( 'loop_start', function ( $q ) {
    if ( ! is_a( $q, 'WP_Query' ) || ! $q->is_main_query() ) { return; }
    if ( ! adri_au_ricardo_is_target() ) { return; }
    static $once = false;
    if ( $once ) { return; }
    $once = true;

    $d        = adrihosan_ricardo_data();
    $nombre   = esc_html( $d['name'] );
    $rol      = esc_html( $d['role'] );
    $foto     = esc_url( $d['photo'] );
    $linkedin = esc_url( $d['li'] );
    $equis    = esc_url( $d['tw'] );
    $sobre    = esc_url( $d['url'] );

    // Chips de areas de experiencia (estaticas, no van en data() porque son del bloque visual).
    $chips_html = '';
    foreach ( array( 'Azulejos', 'Baldosa hidráulica', 'Porcelánico', 'Mamparas', 'Sanitarios', 'Reforma de baño' ) as $c ) {
        $chips_html .= "<span class='adri-au-chip'>" . esc_html( $c ) . "</span>";
    }

    // FAQs - forma real es posicional [0]=pregunta, [1]=respuesta.
    $faq_html = '';
    foreach ( adrihosan_ricardo_faqs() as $f ) {
        $pq = esc_html( $f[0] );
        $pa = esc_html( $f[1] );
        $faq_html .= "<details><summary>{$pq}</summary><p>{$pa}</p></details>";
    }

    echo <<<HTML
<div class="adri-au">
  <div class="adri-au-hero">
    <div class="adri-au-hero-in adri-au-wrap">
      <img class="adri-au-photo" src="{$foto}" alt="{$nombre}" width="168" height="168" loading="eager">
      <div class="adri-au-htxt">
        <p class="adri-au-eyebrow">Sobre el autor</p>
        <h1>{$nombre}</h1>
        <p class="adri-au-role">{$rol}</p>
        <div class="adri-au-stats">
          <div class="adri-au-stat"><b>+30</b><span>años en el sector</span></div>
          <div class="adri-au-stat"><b>Valencia</b><span>tienda física</span></div>
          <div class="adri-au-stat"><b>Cerámica</b><span>especialidad</span></div>
          <div class="adri-au-stat"><b>Gratis</b><span>asesoría videollamada</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="adri-au-trust">
    <div class="adri-au-trust-in adri-au-wrap">
      <div class="adri-au-t"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#12ABA6" stroke-width="2.4"><path d="M20 6 9 17l-5-5"/></svg> Asesoría gratuita por videollamada</div>
      <div class="adri-au-t"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#12ABA6" stroke-width="2.4"><path d="M12 2 4 6v6c0 5 8 8 8 8s8-3 8-8V6z"/></svg> +30 años en azulejos y baño</div>
      <div class="adri-au-t"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#12ABA6" stroke-width="2.4"><path d="M12 21s7-6.3 7-11a7 7 0 1 0-14 0c0 4.7 7 11 7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg> Valencia · envíos a toda España</div>
      <div class="adri-au-t"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#12ABA6" stroke-width="2.4"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> Respuesta rápida por WhatsApp</div>
    </div>
  </div>
  <div class="adri-au-sec adri-au-wrap">
    <div class="adri-au-head"><h2>Quién soy</h2><div class="adri-au-rule"></div></div>
    <div class="adri-au-bio">
      <div>
        <p class="adri-au-lead">Aquí reúno las guías y artículos que escribo para Adrihosan, sobre lo que veo cada día en tienda y en obra.</p>
        <p>Llevo más de 30 años vendiendo y asesorando sobre azulejos, mamparas y material de baño. Junto a Amparo dirijo nuestra tienda de cerámica y reforma en Valencia, especializada en baldosa hidráulica artesanal, porcelánico, sanitarios y mamparas.</p>
        <p>Escribo desde la práctica, no desde el catálogo: lo que funciona, lo que da problemas en obra, las medidas que importan. La idea es simple, ayudarte a acertar con tu reforma sin sustos.</p>
      </div>
      <aside class="adri-au-exp">
        <h3>Áreas de experiencia</h3>
        <div class="adri-au-chips">{$chips_html}</div>
        <div class="adri-au-links">
          <a href="{$sobre}">Sobre nosotros</a> ·
          <a href="{$linkedin}" rel="me">LinkedIn</a> ·
          <a href="{$equis}" rel="me">X</a>
        </div>
      </aside>
    </div>
  </div>
  <div class="adri-au-sec adri-au-wrap adri-au-faq">
    <div class="adri-au-head"><h2>Preguntas frecuentes</h2><div class="adri-au-rule"></div></div>
    {$faq_html}
  </div>
</div>
<h2 class="adri-au-postshead">Artículos de Ricardo</h2>
HTML;

    // Schema FAQPage para el archivo de autor. Rank Math NO emite FAQPage en
    // archivos de autor automaticamente, asi que este es la unica fuente.
    // Si en el futuro se configura FAQ schema desde Rank Math para esta vista,
    // eliminar este bloque para evitar duplicado en Search Console.
    $main = array();
    foreach ( adrihosan_ricardo_faqs() as $f ) {
        $main[] = array(
            '@type'          => 'Question',
            'name'           => $f[0],
            'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $f[1] ),
        );
    }
    $schema = array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $main,
    );
    echo "<script type='application/ld+json'>" . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . "</script>";
}, 10 );

// 4.3 - loop_end: CTA WhatsApp + email
add_action( 'loop_end', function ( $q ) {
    if ( ! is_a( $q, 'WP_Query' ) || ! $q->is_main_query() ) { return; }
    if ( ! adri_au_ricardo_is_target() ) { return; }

    $wa   = 'https://wa.me/34961957136';
    $mail = 'mailto:info@adrihosan.com';

    echo <<<HTML
<div class="adri-au-cta">
  <div>
    <h2>¿Reformando el baño?</h2>
    <p>Escríbeme y te ayudo a elegir bien los materiales. Asesoría gratuita, sin compromiso.</p>
  </div>
  <div class="adri-au-btns">
    <a class="adri-au-btn adri-au-wa" href="{$wa}">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.5 15.2L2 22l4.9-1.4A10 10 0 1 0 12 2m0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.9.8.8-2.8-.2-.3A8 8 0 1 1 12 20m4.4-6c-.2-.1-1.4-.7-1.6-.8s-.4-.1-.5.1-.6.8-.7.9-.3.2-.5.1a6.5 6.5 0 0 1-3.2-2.8c-.2-.4.2-.4.6-1.2 0-.2 0-.3-.1-.4l-.7-1.7c-.2-.5-.4-.4-.5-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.7 11.8 11.8 0 0 0 4.5 4c2.1.8 2.1.6 2.5.5a2.6 2.6 0 0 0 1.7-1.2 2.1 2.1 0 0 0 .2-1.2c-.1-.1-.3-.2-.5-.3"/></svg>
      WhatsApp 96 195 71 36
    </a>
    <a class="adri-au-btn adri-au-mail" href="{$mail}">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
      Escribir por email
    </a>
  </div>
</div>
HTML;
}, 10 );
