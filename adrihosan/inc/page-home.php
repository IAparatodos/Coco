<?php
/**
 * Page: Home Adrihosan (ID: 164094)
 * @package Adrihosan
 */

// ============================================================================
// PAGE 164094 - HOME ADRIHOSAN
// ============================================================================

function adrihosan_home_contenido() {
    ob_start();
    ?>
    <div class="home-adrihosan">
    <!-- 1. HERO SECTION -->
    <section class="home-hero" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/08/home-Adrihosan.jpg');">
        <div class="home-hero-content">
            <h1>Soluciones en cer&aacute;mica para cada tipo de proyecto</h1>
            <p>M&aacute;s que un producto, una decisi&oacute;n que transforma tu hogar y tu d&iacute;a a d&iacute;a. Descubre c&oacute;mo en Adrihosan.</p>
            <a href="#encuentra" class="home-hero-btn">Iniciar mi proyecto</a>
        </div>
    </section>

    <!-- 1b. GEO BLOCK ¿Qué es Adrihosan? + mini-FAQ (citable para crawlers de IA) -->
    <section class="adrihosan-quees">
        <div class="adrihosan-quees-inner">
          <h2 class="adrihosan-quees-title">¿Qué es Adrihosan?</h2>
          <p class="adrihosan-quees-lead"><strong>Adrihosan es una tienda especializada en azulejos, baldosa hidráulica, sanitarios y muebles de baño y cocina, con tienda física en Valencia y venta online a toda España.</strong> Detrás no hay un gran almacén anónimo: hay un oficio familiar de más de 30 años y tres generaciones. Amparo y Ricardo asesoran cada proyecto en persona o por videollamada.</p>
          <p class="adrihosan-quees-data">Más de <strong>33.000 referencias</strong> en catálogo, especialistas declarados en <strong>baldosa hidráulica artesanal</strong> y pavimento porcelánico, con una valoración de <strong>4,6/5 sobre 174 reseñas verificadas</strong>. Más de <strong>304.000 personas</strong> han pasado ya por aquí buscando ideas y respuestas para su reforma.</p>
          <div class="adrihosan-quees-faq">
            <details><summary>¿Qué vende Adrihosan?</summary><p>Azulejos, baldosa hidráulica, pavimento porcelánico, sanitarios, platos de ducha, mamparas, grifería y muebles de baño y cocina. Online y en nuestra tienda física de Valencia.</p></details>
            <details><summary>¿Hacéis envíos a toda España?</summary><p>Sí, enviamos a toda España.</p></details>
            <details><summary>¿Puedo pedir asesoramiento sin ir a la tienda?</summary><p>Sí. Ofrecemos asesoría gratuita por videollamada con Amparo o Ricardo, para que elijas los materiales con criterio antes de comprar.</p></details>
            <details><summary>¿Dónde está la tienda física?</summary><p>En C/ Cuba, 71 (esq. C/ dels Centelles, 48), 46006 Valencia. Teléfono: <a href="tel:+34961957136">+34 961 957 136</a>.</p></details>
          </div>
        </div>
    </section>

    <style>
    .adrihosan-quees{width:100%;padding:3rem 1.5rem;background:#fff;font-family:Poppins,sans-serif;}
    .adrihosan-quees-inner{max-width:900px;margin:auto;}
    .adrihosan-quees-title{font-size:2rem;color:#102e35;text-align:center;margin:0 0 1.5rem;font-weight:700;}
    .adrihosan-quees-lead{font-size:1.1rem;line-height:1.6;color:#333;margin:0 0 1rem;}
    .adrihosan-quees-data{font-size:1rem;line-height:1.6;color:#555;margin:0 0 2rem;}
    .adrihosan-quees-faq{display:flex;flex-direction:column;gap:.75rem;}
    .adrihosan-quees-faq details{border:1px solid #e6e6e6;border-radius:8px;background:#f9f9f9;}
    .adrihosan-quees-faq summary{cursor:pointer;padding:.9rem 1rem;font-weight:600;color:#102e35;list-style:none;position:relative;}
    .adrihosan-quees-faq summary::-webkit-details-marker{display:none;}
    .adrihosan-quees-faq summary::after{content:"+";position:absolute;right:1rem;color:#4dd2d0;font-size:1.3rem;line-height:1;}
    .adrihosan-quees-faq details[open] summary::after{content:"-";}
    .adrihosan-quees-faq details p{margin:0;padding:0 1rem 1rem;color:#555;line-height:1.6;}
    .adrihosan-quees-faq a{color:#1a6c7a;}
    </style>

    <!-- 2. OFERTAS DEL MES -->
    <section class="home-offers">
        <div class="home-offers-heading">
            <h2>Oportunidades reales del mes</h2>
            <p>Tres productos seleccionados con precio especial y stock limitado. Cuando salen, duran poco.</p>
        </div>
        <div class="home-offers-grid">

            <!-- Oferta 1: Mueble Litos Poalgi 80 cm negro -->
            <a href="https://www.adrihosan.com/producto/mueble-de-bano-metalico-a-suelo-negro-litos-poalgi-80/" class="home-offer-card">
                <div class="home-offer-badge">Oferta</div>
                <div class="home-offer-img">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2019/04/mueble-de-bano-metalico-a-suelo-negro-litos-poalgi-5.png.webp" alt="Mueble de ba&ntilde;o met&aacute;lico a suelo Litos Poalgi 80 cm negro">
                </div>
                <div class="home-offer-content">
                    <span class="home-offer-category">Muebles de Ba&ntilde;o</span>
                    <h3>Mueble Litos Poalgi 80 cm Negro</h3>
                    <p>Mueble de ba&ntilde;o met&aacute;lico a suelo negro Litos Poalgi 80&times;48&times;85 cm.</p>
                    <div class="home-offer-prices">
                        <span class="home-price-old">815,00 &euro;</span>
                        <span class="home-price-new">390,90 &euro;</span>
                    </div>
                    <span class="home-offer-btn">Aprovechar oferta</span>
                </div>
            </a>

            <!-- Oferta 2: Inodoro Elba blanco -->
            <a href="https://www.adrihosan.com/producto/inodoro-a-suelo-blanco-elba/" class="home-offer-card">
                <div class="home-offer-badge">Env&iacute;o gratis</div>
                <div class="home-offer-img">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/12/inodoro-a-suelo-elba-blanco-mate.jpg.webp" alt="Inodoro a suelo Elba blanco brillo sistema rimless">
                </div>
                <div class="home-offer-content">
                    <span class="home-offer-category">Sanitarios</span>
                    <h3>Inodoro Elba Blanco Brillo</h3>
                    <p>Sistema rimless antibacteriano, asiento extra&iacute;ble con cierre lento. 61 &times; 36 &times; 88 cm.</p>
                    <div class="home-offer-prices">
                        <span class="home-price-old">250,00 &euro;</span>
                        <span class="home-price-new">199,90 &euro;</span>
                    </div>
                    <span class="home-offer-btn">Aprovechar oferta</span>
                </div>
            </a>

            <!-- Oferta 3: Espejo Kayra 80x80 luz neutra -->
            <a href="https://www.adrihosan.com/producto/espejo-bano-kayra-80-x-80-luz-neutra/" class="home-offer-card">
                <div class="home-offer-badge">Promoci&oacute;n activa</div>
                <div class="home-offer-img">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/01/espejo-de-bano-kayra-2.jpg.webp" alt="Espejo de ba&ntilde;o Kayra 80x80 LED retroiluminado luz neutra">
                </div>
                <div class="home-offer-content">
                    <span class="home-offer-category">Espejos de Ba&ntilde;o</span>
                    <h3>Espejo Kayra 80&times;80 LED Neutra</h3>
                    <p>Retroiluminado LED, vidrio con canto recto 4 mm. Luz neutra ideal para maquillaje y afeitado.</p>
                    <div class="home-offer-prices">
                        <span class="home-price-old">175,00 &euro;</span>
                        <span class="home-price-new">139,90 &euro;</span>
                    </div>
                    <span class="home-offer-btn">Aprovechar oferta</span>
                </div>
            </a>

        </div>

        <div class="home-offers-cta">
            <a href="https://www.adrihosan.com/categoria-producto/oferta-en-azulejos-y-sanitarios/" class="home-offers-cta-btn">Ver oportunidades disponibles</a>
        </div>
    </section>

    <!-- 3. NEEDS GRID (4 cards) -->
    <section class="home-needs" id="encuentra">
        <div class="home-needs-heading">
            <h2>Encuentra la soluci&oacute;n perfecta para ti</h2>
        </div>
        <div class="home-needs-grid">

            <a href="https://www.adrihosan.com/tu-reforma-sin-dudas-y-con-ilusion-adrihosan/" class="home-need-card">
                <div class="home-need-bg" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/08/Pareja-reformadora-Adrihosan.jpg');"></div>
                <div class="home-need-content">
                    <h3>Para mi casa</h3>
                    <p>Busco inspiraci&oacute;n y soluciones para mi reforma particular.</p>
                </div>
            </a>

            <a href="https://www.adrihosan.com/adrihosan-pro/" class="home-need-card">
                <div class="home-need-bg" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/08/profesional-decoracion.png');"></div>
                <div class="home-need-content">
                    <h3>Para mi proyecto profesional</h3>
                    <p>Soy arquitecto, interiorista o decorador.</p>
                </div>
            </a>

            <a href="https://www.adrihosan.com/proveedor-obra/" class="home-need-card">
                <div class="home-need-bg" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/08/Reformista-Adrihosan.jpg');"></div>
                <div class="home-need-content">
                    <h3>Para mi obra</h3>
                    <p>Soy constructor y necesito un proveedor de confianza.</p>
                </div>
            </a>

            <a href="https://www.adrihosan.com/azulejos-de-autor/" class="home-need-card">
                <div class="home-need-bg" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/08/el-buyer-persona-de-Busco-ese-azulejo-especial-que-lo-cambia-todo.jpg');"></div>
                <div class="home-need-content">
                    <h3>Busco algo &uacute;nico</h3>
                    <p>Quiero piezas especiales que definan un espacio.</p>
                </div>
            </a>

        </div>
    </section>

    <!-- 4. SOLUCIONES (3 cards) -->
    <section class="home-solutions">
        <div class="home-solutions-heading">
            <h2>Productos que marcan la diferencia</h2>
        </div>
        <div class="home-solutions-grid">

            <div class="home-solution-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/azulejo-porcelanico-loring-ash-ambiente-3.jpg" alt="Suelo porcel&aacute;nico para la vida real">
                <div class="home-solution-content">
                    <h3>Suelos para la Vida Real</h3>
                    <p>La base de todo. Materiales que aguantan tu ritmo y definen el estilo de tu hogar para a&ntilde;os.</p>
                    <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/" class="home-solution-btn">Ver Suelos</a>
                </div>
            </div>

            <div class="home-solution-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2023/10/azulejo-tipo-metro-brunei-sage.jpg" alt="Azulejo con personalidad para paredes">
                <div class="home-solution-content">
                    <h3>Paredes con Personalidad</h3>
                    <p>El toque que lo cambia todo. Aqu&iacute; es donde tu casa deja de ser una m&aacute;s para convertirse en la tuya.</p>
                    <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/" class="home-solution-btn">Ver Paredes</a>
                </div>
            </div>

            <div class="home-solution-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/07/lavabo-suspendido-axel-negro-mate.jpg" alt="Lavabo suspendido para ba&ntilde;o">
                <div class="home-solution-content">
                    <h3>El Coraz&oacute;n de tu Ba&ntilde;o</h3>
                    <p>La soluci&oacute;n completa para la zona de aguas. Platos, mamparas y sanitarios para una renovaci&oacute;n sin fisuras.</p>
                    <a href="https://www.adrihosan.com/categoria-producto/sanitarios/" class="home-solution-btn">Ver Soluciones de Ba&ntilde;o</a>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. PROYECTOS REALES -->
    <section class="home-projects">
        <div class="home-projects-content">
            <div class="home-projects-text">
                <h2>Proyectos reales que inspiran el cambio</h2>
                <p class="home-projects-testimonial">&ldquo;Pensamos que ser&iacute;a dif&iacute;cil por el espacio que ten&iacute;amos... ahora no imaginamos otro suelo para nuestro ba&ntilde;o. Cada vez que entramos nos alegramos de la decisi&oacute;n.&rdquo;</p>
                <a href="https://www.adrihosan.com/proyectos/" class="home-projects-btn">Ver Todos los Proyectos</a>
            </div>
            <div class="home-projects-images">
                <div class="home-projects-image">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/08/Despues-Valeup.jpg" alt="Ba&ntilde;o despu&eacute;s de la reforma">
                    <span class="home-projects-label">Despu&eacute;s</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CTA FINAL -->
    <section class="home-final-cta">
        <div class="home-final-cta-container">
            <div class="home-cta-box">
                <div class="home-cta-box-content">
                    <h3>&iquest;Listo para el cambio?</h3>
                    <p>Cu&eacute;ntanos tu idea y empecemos a darle forma.</p>
                </div>
                <a href="https://www.adrihosan.com/contacto/" class="home-cta-btn home-cta-btn-light">Quiero empezar mi reforma</a>
            </div>
            <div class="home-cta-box">
                <div class="home-cta-box-content">
                    <h3>&iquest;Eres profesional?</h3>
                    <p>Accede a condiciones y a un soporte pensados para ti.</p>
                </div>
                <a href="https://www.adrihosan.com/adrihosan-pro/" class="home-cta-btn home-cta-btn-pro">Soy profesional y quiero colaborar</a>
            </div>
        </div>
    </section>
    </div><!-- /.home-adrihosan -->
    <?php
    return ob_get_clean();
}

// FIN PAGE 164094 - HOME ADRIHOSAN
// ============================================================================
