<?php
/**
 * Page: Home Adrihosan (ID: 164094)
 * Rediseño showroom premium 15-ago-2026 (mismos textos, misma estructura).
 * v2: full-bleed, skip-lazy en imágenes críticas, colores de botón blindados.
 * @package Adrihosan
 */

// ============================================================================
// PAGE 164094 - HOME ADRIHOSAN
// ============================================================================

function adrihosan_home_contenido() {
    ob_start();
    ?>
    <div class="home-adrihosan ah-root">

    <!-- 1. HERO -->
    <section class="ah-hero">
        <img class="skip-lazy" data-no-lazy="1" src="https://www.adrihosan.com/wp-content/uploads/2025/08/home-Adrihosan.jpg" alt="Showroom de cerámica Adrihosan en Valencia">
        <div class="ah-hero-txt">
            <h1>Soluciones en cerámica para cada tipo de proyecto</h1>
            <p>Más que un producto, una decisión que transforma tu hogar y tu día a día. Descubre cómo en Adrihosan.</p>
            <a href="#encuentra" class="ah-btn ah-btn-claro">Iniciar mi proyecto</a>
        </div>
    </section>

    <!-- 1b. GEO BLOCK ¿Qué es Adrihosan? + mini-FAQ (citable para crawlers de IA) -->
    <section class="adrihosan-quees">
        <div class="adrihosan-quees-inner">
          <h2 class="adrihosan-quees-title">¿Qué es Adrihosan?</h2>
          <p class="adrihosan-quees-lead">Adrihosan es una tienda especializada en azulejos, baldosa hidráulica, sanitarios y muebles de baño y cocina, con tienda física en Valencia y venta online a toda España. Detrás hay un oficio familiar de tres generaciones: Amparo y Ricardo asesoran cada proyecto en persona o por videollamada.</p>
          <div class="adrihosan-quees-stats">
            <div class="adrihosan-quees-stat"><span class="qn">33.000</span><span class="ql">referencias en catálogo</span></div>
            <div class="adrihosan-quees-stat"><span class="qn">3</span><span class="ql">generaciones de oficio</span></div>
            <div class="adrihosan-quees-stat"><span class="qn">4,6/5</span><span class="ql">en 174 reseñas verificadas</span></div>
          </div>
          <div class="adrihosan-quees-faq">
            <details><summary>¿Qué vende Adrihosan?</summary><p>Azulejos, baldosa hidráulica, pavimento porcelánico, sanitarios, platos de ducha, mamparas, grifería y muebles de baño y cocina. Online y en nuestra tienda física de Valencia.</p></details>
            <details><summary>¿Hacéis envíos a toda España?</summary><p>Sí, enviamos a toda España.</p></details>
            <details><summary>¿Puedo pedir asesoramiento sin ir a la tienda?</summary><p>Sí. Ofrecemos asesoría gratuita por videollamada con Amparo o Ricardo, para que elijas los materiales con criterio antes de comprar.</p></details>
            <details><summary>¿Dónde está la tienda física?</summary><p>En C/ Cuba, 71 (esq. C/ dels Centelles, 48), 46006 Valencia. Teléfono: <a href="tel:+34961957136">+34 961 957 136</a>.</p></details>
          </div>
        </div>
    </section>

    <!-- 2. OFERTAS DEL MES -->
    <section class="ah-sec">
        <div class="ah-wrap">
            <div class="ah-sec-head">
                <h2>Oportunidades reales del mes</h2>
                <p class="ah-sub">Tres productos seleccionados con precio especial y stock limitado. Cuando salen, duran poco.</p>
            </div>
            <div class="ah-prods">

                <a href="https://www.adrihosan.com/producto/mueble-de-bano-metalico-a-suelo-negro-litos-poalgi-80/" class="ah-prod">
                    <div class="ah-prod-img"><img src="https://www.adrihosan.com/wp-content/uploads/2019/04/mueble-de-bano-metalico-a-suelo-negro-litos-poalgi-5.png.webp" alt="Mueble de baño metálico a suelo Litos Poalgi 80 cm negro"></div>
                    <div class="ah-prod-in">
                        <span class="ah-prod-tag">Oferta · Muebles de Baño</span>
                        <h3>Mueble Litos Poalgi 80 cm Negro</h3>
                        <p class="ah-desc">Mueble de baño metálico a suelo negro Litos Poalgi 80×48×85 cm.</p>
                        <div class="ah-precio"><span class="ah-old">815,00 €</span><span class="ah-new">390,90 €</span></div>
                        <span class="ah-prod-btn">Aprovechar oferta</span>
                    </div>
                </a>

                <a href="https://www.adrihosan.com/producto/monomando-lavabo-roma-grifo-negro-mate/" class="ah-prod">
                    <div class="ah-prod-img"><img src="https://www.adrihosan.com/wp-content/uploads/2022/09/grifo-lavabo-valencia-negro-mate.jpg" alt="Monomando de lavabo Roma negro mate"></div>
                    <div class="ah-prod-in">
                        <span class="ah-prod-tag">Envío gratis · Grifería</span>
                        <h3>Monomando Roma Negro Mate</h3>
                        <p class="ah-desc">Grifo de lavabo monomando con cartucho cerámico y aireador de ahorro. Acabado negro mate.</p>
                        <div class="ah-precio"><span class="ah-old">69,50 €</span><span class="ah-new">39,90 €</span></div>
                        <span class="ah-prod-btn">Aprovechar oferta</span>
                    </div>
                </a>

                <a href="https://www.adrihosan.com/producto/espejo-bano-kayra-80-x-80-luz-neutra/" class="ah-prod">
                    <div class="ah-prod-img"><img src="https://www.adrihosan.com/wp-content/uploads/2025/01/espejo-de-bano-kayra-2.jpg.webp" alt="Espejo de baño Kayra 80x80 LED retroiluminado luz neutra"></div>
                    <div class="ah-prod-in">
                        <span class="ah-prod-tag">Promoción activa · Espejos de Baño</span>
                        <h3>Espejo Kayra 80×80 LED Neutra</h3>
                        <p class="ah-desc">Retroiluminado LED, vidrio con canto recto 4 mm. Luz neutra ideal para maquillaje y afeitado.</p>
                        <div class="ah-precio"><span class="ah-old">175,00 €</span><span class="ah-new">139,90 €</span></div>
                        <span class="ah-prod-btn">Aprovechar oferta</span>
                    </div>
                </a>

            </div>
            <div class="ah-centrado"><a href="https://www.adrihosan.com/categoria-producto/oferta-en-azulejos-y-sanitarios/" class="ah-btn ah-btn-linea">Ver oportunidades disponibles</a></div>
        </div>
    </section>

    <!-- 3. NEEDS GRID (4 tiles) -->
    <section class="ah-sec ah-sec-top0" id="encuentra">
        <div class="ah-wrap">
            <div class="ah-sec-head"><h2>Encuentra la solución perfecta para ti</h2></div>
            <div class="ah-tiles">

                <a href="https://www.adrihosan.com/tu-reforma-sin-dudas-y-con-ilusion-adrihosan/" class="ah-tile">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/08/Pareja-reformadora-Adrihosan.jpg" alt="Pareja eligiendo cerámica para su casa">
                    <div class="ah-tile-txt"><h3>Para mi casa</h3><p>Busco inspiración y soluciones para mi reforma particular.</p></div>
                </a>

                <a href="https://www.adrihosan.com/adrihosan-pro/" class="ah-tile">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/08/profesional-decoracion.jpg" alt="Profesional del interiorismo">
                    <div class="ah-tile-txt"><h3>Para mi proyecto profesional</h3><p>Soy arquitecto, interiorista o decorador.</p></div>
                </a>

                <a href="https://www.adrihosan.com/proveedor-obra/" class="ah-tile">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/08/Reformista-Adrihosan.jpg" alt="Constructor en obra">
                    <div class="ah-tile-txt"><h3>Para mi obra</h3><p>Soy constructor y necesito un proveedor de confianza.</p></div>
                </a>

                <a href="https://www.adrihosan.com/azulejos-de-autor/" class="ah-tile">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/08/el-buyer-persona-de-Busco-ese-azulejo-especial-que-lo-cambia-todo.jpg" alt="Azulejo especial de autor">
                    <div class="ah-tile-txt"><h3>Busco algo único</h3><p>Quiero piezas especiales que definan un espacio.</p></div>
                </a>

            </div>
        </div>
    </section>

    <!-- 4. SOLUCIONES (3 cards) -->
    <section class="ah-sec ah-sec-top0">
        <div class="ah-wrap">
            <div class="ah-sec-head"><h2>Productos que marcan la diferencia</h2></div>
            <div class="ah-sols">

                <div class="ah-sol">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/azulejo-porcelanico-loring-ash-ambiente-3.jpg" alt="Suelo porcelánico para la vida real">
                    <div class="ah-sol-in">
                        <h3>Suelos para la Vida Real</h3>
                        <p>La base de todo. Materiales que aguantan tu ritmo y definen el estilo de tu hogar para años.</p>
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/" class="ah-btn ah-btn-linea">Ver Suelos</a>
                    </div>
                </div>

                <div class="ah-sol">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2023/10/azulejo-tipo-metro-brunei-sage.jpg" alt="Azulejo con personalidad para paredes">
                    <div class="ah-sol-in">
                        <h3>Paredes con Personalidad</h3>
                        <p>El toque que lo cambia todo. Aquí es donde tu casa deja de ser una más para convertirse en la tuya.</p>
                        <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/" class="ah-btn ah-btn-linea">Ver Paredes</a>
                    </div>
                </div>

                <div class="ah-sol">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/07/lavabo-suspendido-axel-negro-mate.jpg" alt="Lavabo suspendido para baño">
                    <div class="ah-sol-in">
                        <h3>El Corazón de tu Baño</h3>
                        <p>La solución completa para la zona de aguas. Platos, mamparas y sanitarios para una renovación sin fisuras.</p>
                        <a href="https://www.adrihosan.com/categoria-producto/sanitarios/" class="ah-btn ah-btn-linea">Ver Soluciones de Baño</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. PROYECTOS REALES -->
    <section class="ah-franja">
        <div class="ah-wrap ah-franja-grid">
            <div>
                <h2>Proyectos reales que inspiran el cambio</h2>
                <blockquote>&ldquo;Pensamos que sería difícil por el espacio que teníamos... ahora no imaginamos otro suelo para nuestro baño. Cada vez que entramos nos alegramos de la decisión.&rdquo;</blockquote>
                <a href="https://www.adrihosan.com/proyectos/" class="ah-btn ah-btn-turquesa">Ver Todos los Proyectos</a>
            </div>
            <div class="ah-franja-foto">
                <img class="skip-lazy" data-no-lazy="1" src="https://www.adrihosan.com/wp-content/uploads/2026/08/cocina-proyecto-viva.jpg" alt="Cocina moderna blanca con encimera negra, proyecto real">
                <span class="ah-etiqueta">Después</span>
            </div>
        </div>
    </section>

    <!-- 6. CTA FINAL -->
    <section class="ah-sec">
        <div class="ah-wrap">
            <div class="ah-doble">
                <div class="ah-cta-caja">
                    <h3>¿Listo para el cambio?</h3>
                    <p>Cuéntanos tu idea y empecemos a darle forma.</p>
                    <a href="https://www.adrihosan.com/contacto/" class="ah-btn ah-btn-tinta">Quiero empezar mi reforma</a>
                </div>
                <div class="ah-cta-caja">
                    <h3>¿Eres profesional?</h3>
                    <p>Accede a condiciones y a un soporte pensados para ti.</p>
                    <a href="https://www.adrihosan.com/adrihosan-pro/" class="ah-btn ah-btn-linea">Soy profesional y quiero colaborar</a>
                </div>
            </div>
        </div>
    </section>

    </div><!-- /.home-adrihosan -->

    <style>
    /* ===== Sistema showroom premium (15-ago-2026, v2) — scoped .ah- ===== */
    .ah-root{background:#faf9f7;color:#16211f;font-family:Poppins,sans-serif;-webkit-font-smoothing:antialiased;width:100vw;position:relative;margin-left:calc(50% - 50vw);overflow-x:clip}
    .ah-root img{display:block;max-width:100%}
    .ah-wrap{max-width:1180px;margin:0 auto;padding:0 24px}
    .ah-sec{padding:4.5rem 0}
    .ah-sec-top0{padding-top:0}
    .ah-root h2{font-size:clamp(1.5rem,3vw,2.1rem);font-weight:600;letter-spacing:-.02em;color:#102e35;line-height:1.2;margin:0}
    .ah-sub{font-size:.95rem;color:#5f6b6a;font-weight:300;margin:.5rem 0 0}
    .ah-sec-head{text-align:center;margin-bottom:2.2rem}
    .ah-btn{display:inline-block;padding:.85rem 1.9rem;border-radius:9999px;font-size:.9rem;font-weight:500;text-decoration:none;transition:all .2s}
    .ah-btn-claro{background:#fff}
    .ah-btn-claro:hover{background:#f0efec}
    .ah-root .ah-btn-claro,.ah-root .ah-btn-claro:hover{color:#102e35!important}
    .ah-btn-linea{border:1px solid #d8d5d0;background:transparent}
    .ah-btn-linea:hover{border-color:#102e35}
    .ah-root .ah-btn-linea,.ah-root .ah-btn-linea:hover{color:#102e35!important}
    .ah-btn-tinta{background:#102e35}
    .ah-btn-tinta:hover{background:#1a4550}
    .ah-root .ah-btn-tinta,.ah-root .ah-btn-tinta:hover{color:#fff!important}
    .ah-btn-turquesa{background:#4dd2d0;font-weight:600}
    .ah-btn-turquesa:hover{background:#63dbd9}
    .ah-root .ah-btn-turquesa,.ah-root .ah-btn-turquesa:hover{color:#102e35!important}
    /* hero */
    .ah-hero{position:relative;height:min(78vh,640px);overflow:hidden}
    .ah-hero>img{width:100%;height:100%;object-fit:cover}
    .ah-hero::after{content:"";position:absolute;inset:0;background:linear-gradient(to top,rgba(12,25,28,.62) 0%,rgba(12,25,28,.12) 45%,rgba(12,25,28,0) 70%)}
    .ah-hero-txt{position:absolute;left:50%;transform:translateX(-50%);bottom:0;z-index:2;width:100%;max-width:1180px;padding:0 24px 3.2rem}
    .ah-hero-txt h1{color:#fff;font-size:clamp(1.9rem,4.6vw,3.2rem);font-weight:600;letter-spacing:-.03em;line-height:1.1;margin:0 0 .9rem;max-width:680px}
    .ah-hero-txt p{color:rgba(255,255,255,.85);font-weight:300;font-size:1.05rem;max-width:500px;margin:0 0 1.6rem}
    /* ofertas */
    .ah-prods{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
    .ah-prod{background:#fff;border:1px solid #e8e6e2;border-radius:14px;overflow:hidden;display:flex;flex-direction:column;text-decoration:none;color:#16211f}
    .ah-prod-img{aspect-ratio:4/3;overflow:hidden;background:#fff}
    .ah-prod-img img{width:100%;height:100%;object-fit:cover;transition:transform .5s}
    .ah-prod:hover .ah-prod-img img{transform:scale(1.03)}
    .ah-prod-in{padding:1.2rem 1.3rem 1.4rem;display:flex;flex-direction:column;flex:1}
    .ah-prod-tag{font-size:.68rem;letter-spacing:.16em;text-transform:uppercase;color:#1a6c7a;font-weight:600}
    .ah-prod-in h3{font-size:1rem;font-weight:600;margin:.35rem 0 .15rem;color:#102e35}
    .ah-desc{font-size:.83rem;color:#5f6b6a;font-weight:300;margin:0 0 .9rem}
    .ah-precio{display:flex;align-items:baseline;gap:.6rem;margin-top:auto}
    .ah-old{font-size:.83rem;color:#98a3a1;text-decoration:line-through}
    .ah-new{font-size:1.15rem;font-weight:600;color:#102e35}
    .ah-prod-btn{margin-top:.9rem;font-size:.85rem;font-weight:500;color:#1a6c7a;border-bottom:1px solid #4dd2d0;align-self:flex-start;padding-bottom:2px}
    .ah-centrado{text-align:center;margin-top:2.4rem}
    /* tiles */
    .ah-tiles{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
    .ah-tile{position:relative;border-radius:14px;overflow:hidden;aspect-ratio:3/4;background:#ddd;display:block}
    .ah-tile img{width:100%;height:100%;object-fit:cover;transition:transform .5s}
    .ah-tile:hover img{transform:scale(1.04)}
    .ah-tile::after{content:"";position:absolute;inset:0;background:linear-gradient(to top,rgba(10,20,22,.6),rgba(10,20,22,0) 50%)}
    .ah-tile-txt{position:absolute;left:1.1rem;right:1.1rem;bottom:1rem;z-index:2;color:#fff}
    .ah-tile-txt h3{font-size:1.02rem;font-weight:600;letter-spacing:-.01em;margin:0;color:#fff}
    .ah-tile-txt p{font-size:.78rem;font-weight:300;color:rgba(255,255,255,.85);margin:.15rem 0 0}
    /* soluciones */
    .ah-sols{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
    .ah-sol{background:#fff;border:1px solid #e8e6e2;border-radius:14px;overflow:hidden}
    .ah-sol>img{aspect-ratio:16/11;width:100%;object-fit:cover}
    .ah-sol-in{padding:1.3rem 1.4rem 1.5rem}
    .ah-sol-in h3{font-size:1.05rem;font-weight:600;color:#102e35;margin:0 0 .35rem}
    .ah-sol-in p{font-size:.85rem;color:#5f6b6a;font-weight:300;margin:0 0 1rem}
    .ah-sol-in .ah-btn{padding:.6rem 1.4rem;font-size:.82rem}
    /* franja proyectos */
    .ah-franja{background:#102e35;color:#fff;padding:5rem 0}
    .ah-franja-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:3.5rem;align-items:center}
    .ah-franja h2{color:#fff;margin:0 0 1.2rem}
    .ah-franja blockquote{color:rgba(255,255,255,.8);font-weight:300;font-style:italic;font-size:1.02rem;line-height:1.7;max-width:460px;margin:0 0 1.7rem;border-left:2px solid #4dd2d0;padding-left:1.1rem}
    .ah-franja-foto{position:relative}
    .ah-franja-foto img{border-radius:14px;aspect-ratio:4/3;object-fit:cover;width:100%}
    .ah-etiqueta{position:absolute;top:1rem;left:1rem;background:#4dd2d0;color:#102e35;font-size:.7rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;padding:.35rem .8rem;border-radius:9999px}
    /* cta final */
    .ah-doble{display:grid;grid-template-columns:1fr 1fr;gap:14px}
    .ah-cta-caja{border:1px solid #e8e6e2;background:#fff;border-radius:14px;padding:2.4rem;display:flex;flex-direction:column;gap:.55rem;align-items:flex-start}
    .ah-cta-caja h3{font-size:1.2rem;font-weight:600;color:#102e35;margin:0}
    .ah-cta-caja p{font-size:.9rem;color:#5f6b6a;font-weight:300;margin:0 0 .9rem}
    @media(max-width:900px){
      .ah-tiles{grid-template-columns:repeat(2,1fr)}
      .ah-prods,.ah-sols{grid-template-columns:1fr}
      .ah-franja-grid{grid-template-columns:1fr}
      .ah-doble{grid-template-columns:1fr}
    }
    /* quees (rediseño minimalista 15-ago) */
    .adrihosan-quees{width:100%;padding:4.5rem 1.5rem 4rem;background:#fff;border-top:1px solid #e8e6e2;border-bottom:1px solid #e8e6e2;font-family:Poppins,sans-serif;}
    .adrihosan-quees-inner{max-width:760px;margin:auto;}
    .adrihosan-quees-title{font-size:1.9rem;color:#102e35;text-align:center;margin:0 0 1.2rem;font-weight:700;letter-spacing:-.01em;}
    .adrihosan-quees-lead{font-size:1.05rem;line-height:1.75;color:#5a6468;text-align:center;max-width:680px;margin:0 auto 2.75rem;}
    .adrihosan-quees-stats{display:flex;justify-content:center;gap:3.5rem;flex-wrap:wrap;margin:0 0 3rem;text-align:center;}
    .adrihosan-quees-stat .qn{display:block;font-size:1.85rem;font-weight:700;color:#102e35;line-height:1.15;}
    .adrihosan-quees-stat .ql{display:block;font-size:.78rem;letter-spacing:.06em;text-transform:uppercase;color:#9aa4a7;margin-top:.3rem;}
    .adrihosan-quees-faq{border-top:1px solid #eceff0;}
    .adrihosan-quees-faq details{border-bottom:1px solid #eceff0;}
    .adrihosan-quees-faq summary{cursor:pointer;padding:1.05rem 2.2rem 1.05rem 0;font-weight:600;font-size:.98rem;color:#102e35;list-style:none;position:relative;}
    .adrihosan-quees-faq summary::-webkit-details-marker{display:none;}
    .adrihosan-quees-faq summary::after{content:"+";position:absolute;right:.2rem;top:50%;transform:translateY(-50%);color:#4dd2d0;font-size:1.35rem;font-weight:400;line-height:1;transition:transform .2s;}
    .adrihosan-quees-faq details[open] summary::after{content:"+";transform:translateY(-50%) rotate(45deg);}
    .adrihosan-quees-faq details p{margin:0;padding:0 0 1.15rem;color:#5a6468;line-height:1.7;font-size:.95rem;}
    .adrihosan-quees-faq a{color:#1a6c7a;}
    @media (max-width:600px){.adrihosan-quees-stats{gap:1.6rem;}.adrihosan-quees-stat .qn{font-size:1.5rem;}}
    </style>
    <?php
    return ob_get_clean();
}

// FIN PAGE 164094 - HOME ADRIHOSAN
// ============================================================================
