<?php
/**
 * Contenido de categoría - Exterior BH Original (4869)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

/******************************************************************************
 * =============================================================================
 * CÓDIGO 10/10 PARA "BALDOSA HIDRÁULICA EXTERIOR" (ID 4869)
 * - Versión unificada y optimizada.
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla la lógica de la página de Exterior.
 */
function adrihosan_pilar_exterior_controller() {
    $category_id = 4869; 
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_exterior_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_exterior_contenido_inferior', 99 );
}
// DESACTIVADO - Migrado al Controlador Maestro (línea 33)
// add_action( 'template_redirect', 'adrihosan_pilar_exterior_controller' );


/**
 * Inyecta el contenido superior: Hero, Características, Inspiración y Filtros.
 */
function adrihosan_pilar_exterior_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-5.jpg');">
        <div class="hero-content">

            <h1>Baldosa Hidr&aacute;ulica Original para Exterior</h1>
            <p>Descubre nuestra colecci&oacute;n de baldosa hidr&aacute;ulica original para exterior. La soluci&oacute;n artesanal y duradera para crear terrazas, patios y porches con un car&aacute;cter inigualable.</p>
            <div class="hero-buttons">
                <a href="#catalogo-exterior" class="hero-btn primary">Ver Cat&aacute;logo Exterior</a>
                <a href="#contacto-experto-exterior" class="hero-btn secondary">Asesoramiento experto</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item"><div class="icon">🧊</div><h3>Apta para Heladas</h3><p>Su composici&oacute;n la hace apta para soportar heladas, pero es <strong>imprescindible aplicar un <a href="https://www.adrihosan.com/categoria-producto/ceramica/mantenimiento-de-azulejos/" target="_blank" rel="noopener noreferrer">tratamiento de sellado</a> tras la instalaci&oacute;n</strong> para garantizar su resistencia al agua y al hielo.</p></div>
            <div class="bho-feature-item"><div class="icon">☀️</div><h3>Colores que Perduran al Sol</h3><p>Fabricada con pigmentos minerales, esta baldosa artesanal para exterior mantiene la viveza de sus colores inalterable frente a la exposici&oacute;n solar directa.</p></div>
            <div class="bho-feature-item"><div class="icon">👣</div><h3>Superficie Segura y Antideslizante</h3><p>La textura mate natural del cemento ofrece una superficie segura con un excelente agarre, ideal para zonas de paso y &aacute;reas que puedan mojarse.</p></div>
            <div class="bho-feature-item"><div class="icon">🌱</div><h3>Integraci&oacute;n con la Naturaleza</h3><p>Sus dise&ntilde;os y materiales nobles se integran a la perfecci&oacute;n en jardines, patios y terrazas, creando una transici&oacute;n fluida entre el interior y el exterior.</p></div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <a href="/categoria-producto/baldosa-hidraulica/original/exterior/?tipo-hidraulico=geometricas" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-3.jpg" alt="Terraza con suelo de baldosa hidráulica original para exterior con un diseño geométrico." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Terrazas con Encanto</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/exterior/?tipo-hidraulico=tradicional" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-1.jpg" alt="Patio de estilo mediterráneo con baldosa artesanal para exterior con motivos florales." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Patios Mediterr&aacute;neos</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/exterior/?tipo-hidraulico=florales" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan.jpg" alt="Porche rústico revestido con baldosa hidráulica original para exterior." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Porches Acogedores</h3></div></a>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-exterior" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>

    <div id="catalogo-exterior" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Baldosa Hidr&aacute;ulica para Exterior</h2></div>
    <?php
}

/**
 * Inyecta el contenido inferior.
 */
function adrihosan_pilar_exterior_contenido_inferior() {
    ?>
    <section class="hero-section-container guia-tecnica adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/mantenimiento-suelo-hidraulico.jpg'); min-height: 40vh;">
        <div class="hero-content">
            <div class="eyebrow">Gu&iacute;a T&eacute;cnica Esencial</div>
            <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1.5rem; color: #ffffff; line-height: 1.4;">El Secreto de una Terraza Eterna: Sellado y Cuidado</h2>
            <p style="font-size: clamp(1rem, 2.5vw, 1.1rem); line-height: 1.8; opacity: 0.9; margin-bottom: 2rem;">La baldosa hidr&aacute;ulica es robusta, pero su coraz&oacute;n es poroso. Un buen sellado es el escudo que la proteger&aacute; de la humedad, las heladas y las manchas. Descubre c&oacute;mo hacerlo en nuestra gu&iacute;a.</p>
            <a href="https://www.adrihosan.com/baldosa-hidraulica-colocacion-mantenimiento/" class="hero-btn primary" target="_blank" rel="noopener noreferrer">Leer la Gu&iacute;a →</a>
        </div>
    </section>

    <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="bh-simulator-wrapper">
            <div class="bh-simulator-image">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador de ambientes de Adrihosan en un ordenador portátil" class="bh-simulator-device-img">
            </div>
            <div class="bh-simulator-text">
                <h2 style="color: #ffffff;">Dise&ntilde;a tu propia baldosa</h2>
                <p style="color: #ffffff;">Con nuestro simulador, puedes combinar colores y patrones para crear una baldosa &uacute;nica. Experimenta, visualiza y descarga tu dise&ntilde;o para solicitar un presupuesto.</p>
                <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn" target="_blank" rel="noopener noreferrer">Abrir Simulador</a>
            </div>
        </div>
    </section>
    
    <?php
    // SEO: Contenido dinámico desde WooCommerce category_description()
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Dudas sobre Hidr&aacute;ulico en Exteriores</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;El sol se comer&aacute; el color de la baldosa?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>No. A diferencia de otros materiales impresos o pl&aacute;sticos, la <strong>baldosa hidr&aacute;ulica original</strong> se fabrica con pigmentos minerales de alta calidad integrados en la capa de rodadura (la "trepa"), que tiene unos 4-5mm de grosor. Esto garantiza que los colores resistan la radiaci&oacute;n UV sin desvanecerse durante d&eacute;cadas.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Resbala si llueve?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>El cemento natural tiene una textura mate que ofrece un agarre aceptable para caminar, similar a una piedra lisa. Sin embargo, para zonas cr&iacute;ticas como rampas o bordes de piscina, recomendamos aplicar un tratamiento antideslizante l&iacute;quido adicional o optar directamente por nuestro <strong>porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico con acabado C3/R11</strong>, espec&iacute;fico para seguridad m&aacute;xima.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Pueden romperse las baldosas con las heladas?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Si est&aacute;n bien instaladas y selladas, no. La clave es el <strong>tratamiento hidr&oacute;fugo</strong>. Al impedir que el agua penetre en el poro del cemento, evitas que esta se congele dentro y fracture la pieza por expansi&oacute;n. Tambi&eacute;n es vital usar un cemento cola flexible para exteriores y respetar las juntas de dilataci&oacute;n.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;C&oacute;mo limpio las manchas de grasa de la barbacoa?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Si el suelo estaba bien sellado, bastar&aacute; con agua caliente y jab&oacute;n neutro. Si la mancha ha penetrado, existen cataplasmas espec&iacute;ficas para absorber grasa en piedra y cemento. Nunca uses desengrasantes &aacute;cidos fuertes. La mejor defensa en la zona de barbacoa es reaplicar el sellador con m&aacute;s frecuencia que en el resto de la terraza.</p></div></div>
            </div>
        </div>
    </section>

    <section id="contacto-experto-exterior" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Proyectamos juntos tu terraza?</h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20la%20baldosa%20hidr%C3%A1ulica%20original%20para%20exterior" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

