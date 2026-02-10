<?php
/**
 * Category: Original / Cocina (ID: 4866)
 * @package Adrihosan
 */

/******************************************************************************
 * =============================================================================
 * CÓDIGO COMPLETO Y CORREGIDO PARA LA CATEGORÍA "ORIGINAL / COCINA" (ID 4866)
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla toda la lógica de la página de Cocina.
 */
function adrihosan_pilar_cocina_controller() {
    // ID numérico de la categoría "Cocina".
    $category_id = 4866; 

    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    // --- Elimina elementos por defecto de la plantilla ---
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // --- Inyecta el contenido HTML personalizado ---
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_cocina_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_cocina_contenido_inferior', 99 );
}
add_action( 'template_redirect', 'adrihosan_pilar_cocina_controller' );

/**
 * Inyecta el contenido superior: Hero, Características, Inspiración y Filtros.
 */
function adrihosan_pilar_cocina_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/Baldosa-hidraulica-cocina.jpg');">
        <div class="hero-content">

            <h1>Baldosa Hidr&aacute;ulica Original para Cocina</h1>

            <p>La baldosa hidr&aacute;ulica original convierte la cocina en una declaraci&oacute;n de estilo. Perfecta para salpicaderos con car&aacute;cter, suelos que cuentan una historia o para enmarcar una isla central.</p>
            <div class="hero-buttons">
                <a href="#catalogo-cocina" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto-experto-cocina" class="hero-btn secondary">Hablar con un experto</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item">
                <div class="icon">🔥</div>
                <h3>Resistente al Calor</h3>
                <p>Perfecta para zonas de cocci&oacute;n. El cemento artesanal soporta altas temperaturas sin alterar su color ni estructura, ideal para frontales de cocina.</p>
            </div>
            <div class="bho-feature-item">
                <div class="icon">🧼</div>
                <h3>F&aacute;cil de Limpiar (Sellada)</h3>
                <p>Una vez sellada, su superficie repele las manchas de aceite y grasa, facilitando la limpieza diaria con una simple bayeta y productos neutros.</p>
            </div>
            <div class="bho-feature-item">
                <div class="icon">🖼️</div>
                <h3>Un Salpicadero &Uacute;nico</h3>
                <p>Crea un punto focal inigualable detr&aacute;s de los fuegos o el fregadero. Un toque de arte que protege tus paredes y define el estilo de tu cocina.</p>
            </div>
            <div class="bho-feature-item">
                <div class="icon">🍽️</div>
                <h3>Zona de Comedor Distinguida</h3>
                <p>Delimita visualmente el &aacute;rea de comedor o una isla central, aportando una personalidad y un estilo que solo la baldosa hidr&aacute;ulica puede ofrecer.</p>
            </div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <a href="/categoria-producto/baldosa-hidraulica/original/cocina/?tipo-hidraulico=geometricas" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Cocina moderna con un frontal de baldosa hidráulica original geométrica." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Salpicaderos que Enamoran</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/cocina/?tipo-hidraulico=tradicional" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Porcelnico-Imitacion-Hidraulica-1.jpg" alt="Cocina de estilo rústico con suelo completo de baldosa artesanal con patrones florales." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Suelos con Historia</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/cocina/?tipo-hidraulico=contemporaneo" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/baldosa-hidraulica-adrihosan-cocina.jpg" alt="Cocina minimalista con una isla central y un detalle de suelo hidráulico enmarcado." class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Detalles que Marcan la Diferencia</h3></div></a>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-cocina" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>

    <div id="catalogo-cocina" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Baldosas para Cocina</h2></div>

    <?php
}

/**
 * Inyecta el contenido inferior: Guía Técnica (Link), Contenido SEO, FAQ y Contacto.
 */
function adrihosan_pilar_cocina_contenido_inferior() {
    ?>
   <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
    <div class="bh-simulator-wrapper">
        <div class="bh-simulator-image">
            <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador de ambientes de Adrihosan en un ordenador portátil" class="bh-simulator-device-img">
        </div>
        <div class="bh-simulator-text">
            <h2 style="color: #ffffff;">Diseña tu propia baldosa</h2>
            <p style="color: #ffffff;">Con nuestro simulador, puedes combinar colores y patrones para crear una baldosa única. Experimenta, visualiza y descarga tu diseño para solicitar un presupuesto.</p>
            <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn" target="_blank" rel="noopener noreferrer">Abrir Simulador</a>
        </div>
    </div>
</section>

    <section class="hero-section-container guia-tecnica adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/mantenimiento-suelo-hidraulico.jpg'); min-height: 40vh;">
        <div class="hero-content">
            <div class="eyebrow">Gu&iacute;a T&eacute;cnica Esencial</div>
            <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1.5rem; color: #ffffff; line-height: 1.4;">El Secreto de una Cocina Eterna: Sellado y Cuidado</h2>
            <p style="font-size: clamp(1rem, 2.5vw, 1.1rem); line-height: 1.8; opacity: 0.9; margin-bottom: 2rem;">La baldosa hidr&aacute;ulica es robusta, pero su coraz&oacute;n es poroso. Un buen sellado es el escudo que la proteger&aacute; de manchas de aceite, vino o caf&eacute;. Descubre c&oacute;mo hacerlo en nuestra gu&iacute;a.</p>
            <a href="https://www.adrihosan.com/baldosa-hidraulica-colocacion-mantenimiento/" class="hero-btn primary">Leer la Gu&iacute;a →</a>
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
            <h2 class="faq-main-title-common">Dudas sobre la Baldosa Original en Cocinas</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Se mancha con el aceite o el vino?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>Si la baldosa est&aacute; correctamente sellada con un producto hidr&oacute;fugo y ole&oacute;fugo, las manchas no penetrar&aacute;n.</strong> Es importante limpiar cualquier derrame de inmediato con una bayeta y un producto neutro para evitar que permanezca en la superficie.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Puedo usarla como encimera?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>T&eacute;cnicamente s&iacute;, por dureza y resistencia al calor. Sin embargo, no lo recomendamos para zonas de corte directo o contacto constante con &aacute;cidos fuertes (lim&oacute;n, vinagre) si no vas a ser muy riguroso con el mantenimiento del sellado. Para encimeras de batalla, es mejor optar por porcel&aacute;nico.</p></div></div>
                <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;C&oacute;mo se limpian las juntas del suelo de la cocina?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Usa un cepillo suave con agua y jab&oacute;n neutro. Evita frotar con estropajos met&aacute;licos o usar productos abrasivos como salfum&aacute;n, ya que podr&iacute;an da&ntilde;ar los bordes de la <strong>baldosa hidr&aacute;ulica original</strong> adyacente. Un buen sellado inicial tambi&eacute;n protege la junta de ennegrecerse.</p></div></div>
            </div>
        </div>
    </section>

    <section id="contacto-experto-cocina" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan" loading="lazy">
                <div><h2>&iquest;Dise&ntilde;amos juntos la cocina de tus sue&ntilde;os?</h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

