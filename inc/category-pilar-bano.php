<?php
/**
 * Category: Original / Baño (ID: 4865)
 * @package Adrihosan
 */

/******************************************************************************
 * =============================================================================
 * CÓDIGO UNIFICADO Y CORREGIDO PARA LA CATEGORÍA "ORIGINAL / BAÑO" (ID 4865)
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla toda la lógica de la página de Baño.
 */
function adrihosan_pilar_bano_controller() {
    // ID numérico de la categoría "Baño" de Baldosa Hidráullca Original.
    $category_id = 4865;

    // Si no estamos en la categoría correcta, no hacemos nada.
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

    // --- Elimina elementos por defecto de WooCommerce ---
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // --- Inyecta contenido personalizado ---
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_bano_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_bano_contenido_inferior', 99 );
}
// Controller cat 4865 - movido al master controller en functions.php


/**
 * Inyecta el contenido superior: Hero, Características, Inspiración y Filtros.
 */
function adrihosan_pilar_bano_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan.jpg');">
        <div class="hero-content">
            
            <h1>Baldosa Hidr&aacute;ulica Original para Ba&ntilde;o</h1>
            
            <p>Descubre el encanto de la baldosa hidr&aacute;ulica original. Un material con alma que transforma tu ba&ntilde;o en un espacio &uacute;nico, lleno de car&aacute;cter y belleza atemporal.</p>
            <div class="hero-buttons">
                <a href="#lista-productos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#contacto" class="hero-btn secondary">Hablar con un experto</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item"><div class="icon">🎨</div><h3>Textura Inimitable</h3><p>Siente la calidez y la suave irregularidad del cemento pigmentado hecho a mano.</p></div>
            <div class="bho-feature-item"><div class="icon">🏛️</div><h3>Dise&ntilde;os con Historia</h3><p>Cada patr&oacute;n cuenta una historia. Elige entre motivos geom&eacute;tricos, florales o modernistas.</p></div>
            <div class="bho-feature-item"><div class="icon">✨</div><h3>Belleza que Evoluciona</h3><p>La baldosa original envejece contigo, adquiriendo una p&aacute;tina que realza su autenticidad.</p></div>
            <div class="bho-feature-item"><div class="icon">💧</div><h3>Ideal para Zonas H&uacute;medas</h3><p>Con el tratamiento sellador adecuado, es perfectamente apta para suelos de ba&ntilde;o.</p></div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <a href="/categoria-producto/baldosa-hidraulica/original/bano/estilos-hidraulico-bano-contemporaneo/" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan-5.jpg" alt="Baño moderno con baldosa hidráulica original geométrica" class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Estilo Moderno</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/bano/estilos-hidraulico-bano-tradicional/" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan-6.jpg" alt="Baño rústico con suelo de baldosa artesanal floral" class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Estilo R&uacute;stico</h3></div></a>
            <a href="/categoria-producto/baldosa-hidraulica/original/bano/color-hidraulico-bano-blanco-y-negro/" class="bho-hub-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-bano-Adrihosan-7.jpg" alt="Baño minimalista con pared de acento en baldosa hidráulica" class="bho-hub-card-img"><div class="bho-hub-card-content"><h3>Toque Minimalista</h3></div></a>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-bano" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>
    
    <div id="lista-productos" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Baldosas para Ba&ntilde;o</h2></div>
    <?php
}

function adrihosan_pilar_bano_contenido_inferior() {
    if ( is_product_category( 4865 ) && ! is_singular('product') ) {
        ?>
        <section class="bho-hero-section adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/mantenimiento-suelo-hidraulico.jpg'); min-height: 40vh;">
            <div class="bho-hero-content">
                <div class="eyebrow" style="font-size: 0.9rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; color: #4dd2d0; margin-bottom: 1rem;">Gu&iacute;a T&eacute;cnica Esencial</div>
                <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; margin-bottom: 1.5rem; color: #ffffff; line-height: 1.4;">Protege tu Inversi&oacute;n: Sellado y Cuidado en el Ba&ntilde;o</h2>
                <p style="font-size: clamp(1rem, 2.5vw, 1.1rem); line-height: 1.8; opacity: 0.9; margin-bottom: 2rem;">La baldosa hidr&aacute;ulica es robusta, pero su coraz&oacute;n es poroso. Un buen sellado es el escudo que la proteger&aacute; de la humedad y las manchas.</p>
                <a href="https://www.adrihosan.com/baldosa-hidraulica-colocacion-mantenimiento/" class="bhp-hero-btn bhp-hero-btn-primary">Leer la Gu&iacute;a →</a>
            </div>
        </section>

        <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
            <div class="bh-simulator-wrapper">
                <div class="bh-simulator-image">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador" class="bh-simulator-device-img">
                </div>
                <div class="bh-simulator-text">
                    <h2 style="color: #ffffff;">Diseña tu propia baldosa</h2>
                    <p style="color: #ffffff;">Experimenta y descarga tu diseño para solicitar un presupuesto.</p>
                    <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn" target="_blank">Abrir Simulador</a>
                </div>
            </div>
        </section>

        <?php
        $descripcion_editor = category_description();
        if ( ! empty( $descripcion_editor ) ) {
            echo '<section class="bho-guide-section">'; // SIN adrihosan-full-width-block
            echo '    <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">';
            echo '        <div class="term-description-dinamica" style="text-align: left; font-family: \'Poppins\'; color: #3f6f7b; line-height: 1.8;">';
            echo              $descripcion_editor; 
            echo '        </div>';
            echo '    </div>';
            echo '</section>';
        }
        ?>

       <section class="faq-section-common adrihosan-full-width-block"> <div class="faq-wrapper-common"> <h2 class="faq-main-title-common">Dudas sobre la Baldosa Original en Ba&ntilde;os</h2> <div class="faq-items-wrapper"> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Realmente se puede mojar sin problemas?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p><strong>S&iacute;, sin ninguna duda.</strong> La <strong>baldosa hidr&aacute;ulica original para ba&ntilde;o</strong> es perfectamente apta para zonas h&uacute;medas. Una vez tratada con un sellador profesional hidr&oacute;fugo, el material se vuelve impermeable y repele el agua, manteniendo su belleza intacta durante d&eacute;cadas.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Aparecer&aacute;n manchas de cal o jab&oacute;n?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p><strong>Con un buen sellado no.</strong> El <strong>suelo hidr&aacute;ulico artesanal</strong> requiere un tratamiento protector inicial que evita que la suciedad penetre en el poro. Si usas productos de limpieza neutros, las manchas de cal o jab&oacute;n no ser&aacute;n un problema en tu d&iacute;a a d&iacute;a.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Es resbaladiza la baldosa hidr&aacute;ulica en el ba&ntilde;o?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p>No, al contrario. Su acabado mate natural ofrece una excelente adherencia, superior a muchos azulejos cer&aacute;micos pulidos. La <strong>baldosa hidr&aacute;ulica original</strong> es una opci&oacute;n segura para el suelo del ba&ntilde;o, incluso en la zona de la ducha.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Cu&aacute;nto tiempo tarda en fabricarse un mosaico hidr&aacute;ulico personalizado?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p>Si eliges un dise&ntilde;o de nuestra <strong>amplia gama en stock</strong>, el env&iacute;o es inmediato. Si prefieres usar nuestro <strong>simulador</strong> para crear una pieza &uacute;nica, el proceso de fabricaci&oacute;n manual y fraguado suele tardar entre 4 y 6 semanas, ya que <strong>se fabrican una a una</strong> respetando los tiempos naturales del cemento.</p> </div> </div> <div class="faq-item-common"> <button class="faq-question-common"><span>&iquest;Puedo instalar baldosa hidr&aacute;ulica antigua en la pared del ba&ntilde;o?</span><span class="faq-icon-common">+</span></button> <div class="faq-answer-common"> <p>Absolutamente. <strong>En los ba&ntilde;os es perfecta para los suelos y paredes para poder dar un aspecto vintage que es inigualable</strong>. Su instalaci&oacute;n en paredes aporta una textura y un peso visual que convierte cualquier pared maestra en el centro de todas las miradas.</p> </div> </div> </div> </div> </section>

        <section id="contacto" class="contact-help-common adrihosan-full-width-block">
            <div class="contact-help-wrapper">
                <div class="contact-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan">
                    <div><h2>&iquest;Necesitas ayuda para tu ba&ntilde;o? <span>Soy Ricardo, tu experto en materiales.</span></h2></div>
                </div>
                <div class="contact-options-grid-common">
                    <a href="/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                    <a href="/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                    <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                    <a href="https://api.whatsapp.com/send?phone=+34961957136" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                    <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
                </div>
            </div>
        </section>
        <?php
    }
}

