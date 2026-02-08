<?php
/**
 * Contenido de categoría - Paredes Decorativas (4806)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

/******************************************************************************
 * =============================================================================
 * CÓDIGO 10/10 PARA "PAREDES DECORATIVAS" (ID 4806)
 * - Reestructurado y optimizado con contenido SEO ampliado.
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla la lógica de la página de Paredes Decorativas.
 */
function adrihosan_pilar_paredes_controller() {
    $category_id = 4806; 
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    // Elimina elementos por defecto de la plantilla.
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // Inyecta contenido personalizado.
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_paredes_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_paredes_contenido_inferior', 99 );
}
// DESACTIVADO - Ahora usa adrihosan_master_controller_cpu_fix()
// add_action( 'template_redirect', 'adrihosan_pilar_paredes_controller' );


/**
 * Inyecta el contenido superior para la categoría 4806.
 */
function adrihosan_pilar_paredes_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared.jpg');">
        <div class="hero-content">
            <h1>Azulejo Imitaci&oacute;n Hidr&aacute;ulico para Pared</h1>
            <p>Redecora sin obras y transforma tus espacios. Descubre c&oacute;mo un simple cambio de azulejos en la pared puede darle una nueva vida a tu hogar.</p>
            <div class="hero-buttons">
                <a href="#catalogo-paredes" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#ideas-paredes" class="hero-btn secondary">Ver Ideas</a>
            </div>
        </div>
    </section>
    
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <h2>La Elecci&oacute;n Inteligente para tus Paredes</h2>
                <p>Consigue el impacto visual del hidr&aacute;ulico aut&eacute;ntico eliminando sus dos mayores problemas: la instalaci&oacute;n y el mantenimiento diario.</p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card"><div class="icon">🔧</div><h3>Instalaci&oacute;n sin Sorpresas</h3><p>Se coloca como un azulejo normal, sin mano de obra especializada ni tratamientos posteriores. Ahorra tiempo y costes en tu reforma.</p></div>
                <div class="ap-value-card"><div class="icon">🧼</div><h3>Olv&iacute;date del Mantenimiento</h3><p>Perfecto para salpicaderos de cocina y duchas. Su nula porosidad lo hace inmune a las manchas de grasa, cal o humedad.</p></div>
                <div class="ap-value-card"><div class="icon">🛡️</div><h3>Resistencia a Toda Prueba</h3><p>A diferencia del hidr&aacute;ulico tradicional, el porcel&aacute;nico no se raya con facilidad y su color permanece inalterable para siempre.</p></div>
            </div>
        </div>
    </section>
    
    <section class="ap-inspiration-section adrihosan-full-width-block" id="ideas-paredes">
        <div class="ap-inspiration-wrapper">
            <h2>Paredes que Dejan Huella</h2>
            <p class="section-subtitle">Desde un toque sutil a una declaraci&oacute;n de estilo. Descubre c&oacute;mo nuestros azulejos hidr&aacute;ulicos para pared pueden redefinir tus espacios m&aacute;s importantes.</p>
            <div class="ap-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/uso-revestimiento/" class="ap-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Salpicadero de cocina revestido con azulejo hidráulico porcelánico de patrón geométrico."><div class="ap-card-content"><h3>Salpicaderos de Cocina</h3><p>Protege la zona de fuegos con un dise&ntilde;o impactante y una superficie que se limpia sin esfuerzo, por mucho que salpique.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/tono-azul/" class="ap-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-1.jpg" alt="Pared de ducha en un baño moderno, revestida con azulejo hidráulico de imitación."><div class="ap-card-content"><h3>Frentes de Ducha</h3><p>Crea un refugio de calma y estilo en tu ba&ntilde;o. Totalmente impermeables y resistentes a la cal y a los productos de limpieza.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/estilo-hexagonal/" class="ap-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-2.jpg" alt="Pared de acento en un comedor, decorada con azulejos porcelánicos de estilo hidráulico."><div class="ap-card-content"><h3>Paredes de Acento</h3><p>Desde el cabecero de la cama al frontal de una chimenea. Un recurso decorativo para dar personalidad a cualquier estancia.</p></div></a>
            </div>
        </div>
    </section>
    
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-paredes" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>
    
    <div id="catalogo-paredes" class="product-loop-header"><h2 class="product-loop-title">Cat&aacute;logo de Azulejos para Pared</h2></div>
    <?php
}

/**
 * Inyecta el contenido inferior para la categoría 4806.
 */
function adrihosan_pilar_paredes_contenido_inferior() {
    ?>
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
    <?php
    }
    ?>

    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Dudas Frecuentes sobre Azulejos de Pared</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Cu&aacute;l es la diferencia entre el azulejo imitaci&oacute;n hidr&aacute;ulico y la baldosa original?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>La principal diferencia radica en el material y mantenimiento. El azulejo imitaci&oacute;n hidr&aacute;ulico es cer&aacute;mico o porcel&aacute;nico, lo que lo hace impermeable y libre de mantenimiento. La baldosa original es de cemento prensado, muy porosa y requiere selladores para evitar manchas permanentes.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Es apta la cer&aacute;mica hidr&aacute;ulica para el frontal de la cocina?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, es la mejor opci&oacute;n. Al ser un material con acabados resistentes al calor y las manchas , puedes limpiar las salpicaduras de grasa f&aacute;cilmente con productos comunes sin que el dise&ntilde;o del azulejo hidr&aacute;ulico cocina se deteriore.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Puedo personalizar los colores de mis azulejos hidr&aacute;ulicos?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>En Adrihosan ofrecemos una amplia variedad de modelos configurables y colecciones con diferentes texturas y tonos. Desde el azulejo hidr&aacute;ulico verde hasta el azulejo hidr&aacute;ulico gris, disponemos de opciones para adaptarnos a tu estilo personal.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;Qu&eacute; formato es mejor para una pared peque&ntilde;a: 20x20 o 15x15?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>Para espacios reducidos, el azulejo hidr&aacute;ulico 15x15 aporta un detalle m&aacute;s fino y artesanal. Si buscas una instalaci&oacute;n m&aacute;s r&aacute;pida y un aspecto cl&aacute;sico, el azulejo hidr&aacute;ulico 20x20 es el est&aacute;ndar que mejor encaja en la mayor&iacute;a de reformas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common"><span>&iquest;El azulejo hidr&aacute;ulico pared ba&ntilde;o resiste la humedad directa de la ducha?</span><span class="faq-icon-common">+</span></button>
                    <div class="faq-answer-common">
                        <p>Totalmente. Al ser materiales fabricados para resistir el uso diario y la humedad , nuestros azulejos cuentan con una estructura s&oacute;lida y anclajes reforzados que garantizan seguridad y durabilidad en zonas h&uacute;medas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;Necesitas un &uacute;ltimo consejo? <span>Soy Ricardo, tu experto en paredes con estilo.</span></h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20azulejos%20para%20pared" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

