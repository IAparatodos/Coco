<?php
/**
 * Category: Azulejos (ID: 63)
 * @package Adrihosan
 */

// ============================================================================
// CATEGORÍA 63 - AZULEJOS
// ============================================================================

function adrihosan_azulejos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/02/Azulejos-Online-Diseno-y-Calidad.jpg');">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/">Cer&aacute;mica</a> &gt;
                <span>Azulejos</span>
            </nav>
            <h1>Azulejos Online: Dise&ntilde;o y Calidad &quot;Made in Spain&quot;</h1>
            <p>Descubre nuestra selecci&oacute;n de azulejos de fabricaci&oacute;n espa&ntilde;ola. Desde la resistencia del porcel&aacute;nico hasta la delicadeza de la pasta blanca. Viste tus suelos y paredes con las &uacute;ltimas tendencias en cer&aacute;mica: imitaci&oacute;n madera, m&aacute;rmol, estilo metro o hidr&aacute;ulico. Calidad premium directa a tu obra.</p>
            <div class="hero-buttons">
                <a href="#catalogo-azulejos" class="hero-btn primary">Ver Cat&aacute;logo Completo</a>
                <a href="#subcategorias-azulejos" class="hero-btn secondary">Explorar Estilos</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACIÓN VISUAL DE SUBCATEGORÍAS (Cluster) -->
    <section class="ap-inspiration-section adrihosan-full-width-block" id="subcategorias-azulejos">
        <div class="ap-inspiration-wrapper">
            <h2>Explora Nuestros Azulejos por Estilo</h2>
            <p class="section-subtitle">Encuentra el azulejo perfecto seg&uacute;n el acabado que buscas</p>
            <div class="ap-inspiration-grid grid-7-cols">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-de-bano-Adrihosan.jpg" alt="Azulejos Baño">
                    <div class="ap-card-content">
                        <h3>Azulejos Ba&ntilde;o</h3>
                        <p>Dise&ntilde;os para tu oasis</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-de-cocina-Adrihosan.jpg" alt="Azulejos Cocina">
                    <div class="ap-card-content">
                        <h3>Azulejos Cocina</h3>
                        <p>El coraz&oacute;n de tu hogar</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" alt="Imitación Madera">
                    <div class="ap-card-content">
                        <h3>Imitaci&oacute;n Madera</h3>
                        <p>Calidez sin mantenimiento</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" alt="Imitación Mármol">
                    <div class="ap-card-content">
                        <h3>Imitaci&oacute;n M&aacute;rmol</h3>
                        <p>Lujo y elegancia eterna</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-metro-Adrihosan.jpg" alt="Estilo Metro">
                    <div class="ap-card-content">
                        <h3>Estilo Metro</h3>
                        <p>El cl&aacute;sico atemporal</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/02/azulejos-hidraulicos-Adrihosan.jpg" alt="Hidráulicos">
                    <div class="ap-card-content">
                        <h3>Hidr&aacute;ulicos</h3>
                        <p>Toque vintage y colorido</p>
                    </div>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-exterior/" class="ap-inspiration-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-terraza-600-x-400.jpg" alt="Exteriores">
                    <div class="ap-card-content">
                        <h3>Exteriores</h3>
                        <p>Resistentes a todo</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CONSEJO ADRIA (Filtros) -->
    <div class="adria-tip-box">
        <p><strong>&iexcl;Consejo de AdrIA!</strong> Usa los filtros de <strong>Color</strong>, <strong>Formato</strong> y <strong>Acabado</strong> para encontrar tu azulejo ideal. No olvides pulsar <strong>&quot;FILTRAR&quot;</strong> para ver los resultados.</p>
    </div>

    <!-- 4. DESTINO MÓVIL + WIDGET FILTROS -->
    <div id="destino-filtro-adria-azulejos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <!-- 5. TÍTULO CATÁLOGO -->
    <div id="catalogo-azulejos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de Azulejos</h2>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginaci&oacute;n) -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_azulejos_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->
    <?php

    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper">
            <div class="term-description-dinamica">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

   <!-- BLOQUE SEO ESTRUCTURADO: TIPOS DE AZULEJOS -->
<section class="seo-content-section adrihosan-full-width-block">
    <div class="seo-content-wrapper">
        <h2>Tipos de Azulejos: &iquest;Cu&aacute;l elegir para tu reforma?</h2>
        <!-- Sub-bloque A: Por Material -->
        <div class="material-types-grid">
            <div class="material-card">
                <div class="material-icon">💎</div>
                <h3><a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/ver-tipo-suelo-porcelanico/">Azulejos Porcel&aacute;nicos</a></h3>
                <p>M&aacute;xima resistencia y dureza. Ideales para suelos de alto tr&aacute;nsito y exteriores. Baja absorci&oacute;n de agua (inferior al 0.5%).</p>
            </div>
            <div class="material-card">
                <div class="material-icon">🎨</div>
                <h3><a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/ver-tipo-azulejo-pasta-blanca/">Pasta Blanca</a></h3>
                <p>El rey del revestimiento de paredes. Colores m&aacute;s vivos y acabado perfecto para ba&ntilde;os y cocinas de interior.</p>
            </div>
            <div class="material-card">
                <div class="material-icon">🏠</div>
                <h3><a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/ver-tipo-azulejo-pasta-roja/">Pasta Roja</a></h3>
                <p>La opci&oacute;n econ&oacute;mica y tradicional. Resistencia y calidez para interiores.</p>
            </div>
        </div>
        <!-- Sub-bloque B: Por Acabado -->
        <div class="finish-info-block">
            <h3>Azulejos Rectificados vs. Normales</h3>
            <p>Los <strong>azulejos rectificados</strong> permiten juntas m&iacute;nimas (1-2mm) para un efecto continuo y moderno. Los azulejos con <strong>borde tradicional</strong> requieren juntas de 3-5mm pero ofrecen mayor margen de error en la instalaci&oacute;n.</p>
        </div>
    </div>
</section>

    <!-- TENDENCIAS EN AZULEJOS -->
    <section class="trends-section adrihosan-full-width-block">
        <div class="trends-wrapper">
            <h2>Tendencias en Azulejos para el Hogar</h2>
            <p>Desde el encanto del estilo r&uacute;stico hasta la modernidad del acabado cemento. Si buscas calidez, visita nuestros <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/">suelos imitaci&oacute;n madera</a>. Si prefieres el lujo, apuesta por el <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/">imitaci&oacute;n m&aacute;rmol</a>.</p>
            <div class="trends-links">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-imitacion-cemento/" class="trend-link">Efecto Cemento</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-efecto-zellige/" class="trend-link">Efecto Zellige</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/" class="trend-link">Hexagonales</a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/" class="trend-link">Decorativos</a>
            </div>
        </div>
    </section>



    <!-- FAQs -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Azulejos</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;l es la diferencia entre azulejo de pared y de suelo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los <strong>azulejos de pared</strong> (revestimientos) suelen ser de pasta blanca, m&aacute;s ligeros y con acabados m&aacute;s decorativos. Los <strong>azulejos de suelo</strong> (pavimentos) son m&aacute;s gruesos, resistentes al desgaste y pueden ser antideslizantes. Un porcel&aacute;nico t&eacute;cnico puede usarse en ambas superficies.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Envi&aacute;is muestras de azulejos a casa?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                   <div class="faq-answer-common">
                     <p>Las muestras son <strong>gratuitas</strong>, solo cobramos un peque&ntilde;o importe testimonial por el env&iacute;o. Cont&aacute;ctanos por WhatsApp o tel&eacute;fono para solicitar las tuyas.</p>
                </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; significa que un azulejo es rectificado?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Un <strong>azulejo rectificado</strong> ha sido cortado con precisi&oacute;n l&aacute;ser tras la cocci&oacute;n, resultando en bordes perfectamente rectos. Esto permite colocarlos con juntas m&iacute;nimas (1-2mm) para un acabado continuo y moderno.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Ten&eacute;is azulejos antideslizantes para ducha?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, disponemos de azulejos con clasificaci&oacute;n antideslizante C3 (la m&aacute;xima), ideales para platos de ducha y zonas h&uacute;medas. Busca en nuestros filtros por &quot;antideslizante&quot; o cons&uacute;ltanos directamente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo experto en azulejos">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con los azulejos de tu reforma?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common">
                    <div class="icon">📍</div>
                    <div class="label">Visita Presencial</div>
                </a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common">
                    <div class="icon">💻</div>
                    <div class="label">Visita Virtual</div>
                </a>
                <a href="tel:+34961957136" class="contact-option-common">
                    <div class="icon">📞</div>
                    <div class="label">Tel&eacute;fono</div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos" class="contact-option-common">
                    <div class="icon">💬</div>
                    <div class="label">Whatsapp</div>
                </a>
            </div>
        </div>
    </section>
    <?php
}

// FIN CATEGORÍA 63 - AZULEJOS
// ============================================================================
