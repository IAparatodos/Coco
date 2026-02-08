<?php
/**
 * Contenido de categoría - Imitación Hidráulico (2082)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

function adrihosan_pilar_imitacion_controller() {
    $category_id = 2082; 
    if ( ! is_product_category( $category_id ) ) {
        return;
    }
    
    // Elimina elementos por defecto.
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

    // Inyecta el contenido personalizado.
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_imitacion_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_imitacion_contenido_inferior', 20 );
}
// DESACTIVADO - Migrado al Controlador Maestro (línea 33)
// add_action( 'template_redirect', 'adrihosan_pilar_imitacion_controller' );


/**
 * Inyecta el contenido SUPERIOR para la categoría 2082.
 */
function adrihosan_pilar_imitacion_contenido_superior() {
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/suelo-hidraulico-adrihosan.jpg');">
        <div class="hero-content">
            <h1>Azulejo Imitaci&oacute;n Hidr&aacute;ulico Porcel&aacute;nico</h1>
            <p>Consigue la est&eacute;tica atemporal del mosaico hidr&aacute;ulico sin preocuparte por manchas, ceras o cuidados especiales. La soluci&oacute;n perfecta para el d&iacute;a a d&iacute;a.</p>
            <div class="hero-buttons">
                <a href="#catalogo-imitacion" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="#ventajas-porcelanico" class="hero-btn secondary">Ventajas del Porcel&aacute;nico</a>
            </div>
        </div>
    </section>
    <section class="ai-value-section adrihosan-full-width-block" id="ventajas-porcelanico">
        <div class="ai-value-wrapper">
            <div class="section-header">
                <h2>Dise&ntilde;ado para Vivir, no solo para Mirar</h2>
                <p>El porcel&aacute;nico te ofrece lo mejor de dos mundos: la belleza que te enamora y la resistencia que necesitas para tu d&iacute;a a d&iacute;a, sin complicaciones.</p>
            </div>
            <div class="ai-value-grid">
                <div class="ai-value-card"><div class="icon">🛡️</div><h3>Resistencia Extrema</h3><p>A prueba de golpes, rayado y alto tr&aacute;nsito. Un suelo que aguanta el ritmo de tu familia, mascotas incluidas.</p></div>
                <div class="ai-value-card"><div class="icon">🧼</div><h3>Mantenimiento Cero</h3><p>Olv&iacute;date de ceras y productos especiales. Se limpia con cualquier producto convencional, incluso lej&iacute;a.</p></div>
                <div class="ai-value-card"><div class="icon">💧</div><h3>Impermeable y Anti-Manchas</h3><p>Su nula porosidad (inferior al 0,5%) impide la absorci&oacute;n de l&iacute;quidos, evitando manchas para siempre.</p></div>
            </div>
        </div>
    </section>
    <section class="ai-inspiration-section">
        <div class="ai-inspiration-wrapper">
            <h2>Donde la Inspiraci&oacute;n Toma Forma</h2>
            <p class="section-subtitle">Descubre c&oacute;mo el azulejo porcel&aacute;nico de estilo hidr&aacute;ulico puede transformar tus espacios. Insp&iacute;rate con estas ideas y explora en cada categor&iacute;a los modelos aptos para tu proyecto.</p>
            <div class="ai-inspiration-grid">
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/cocina-imitacion" class="ai-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-1.jpg" alt="Cocina moderna con suelo de azulejo imitación hidráulico."><div class="ai-card-content"><h3>Cocinas con Car&aacute;cter</h3><p>Crea salpicaderos &uacute;nicos o suelos que definen el coraz&oacute;n de tu hogar con la m&aacute;xima resistencia y facilidad de limpieza.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/bano-imitacion" class="ai-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan.jpg" alt="Baño elegante con pared de acento de azulejo porcelánico imitación hidráulico."><div class="ai-card-content"><h3>Ba&ntilde;os para Desconectar</h3><p>Zonas de ducha espectaculares y suelos que lo aguantan todo. El estilo que buscas con la tranquilidad que necesitas.</p></div></a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/pared-imitacion/" class="ai-inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-2.jpg" alt="Pared decorativa en un salón con azulejo imitación hidráulico."><div class="ai-card-content"><h3>Paredes Decorativas</h3><p>Transforma cualquier pared en el foco de atenci&oacute;n, desde un recibidor hasta el cabecero de una cama. El l&iacute;mite es tu imaginaci&oacute;n.</p></div></a>
            </div>
        </div>
    </section>
    
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
    </div>
    
    <div id="destino-filtro-adria-imitacion" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426278"]'); ?></div>
    
    <section class="ai-product-header-section" id="catalogo-imitacion">
        <div class="ai-product-header-wrapper">
            <h2>Nuestro Cat&aacute;logo de Azulejos Imitaci&oacute;n Hidr&aacute;ulico</h2>
            <p>Explora la colecci&oacute;n completa. Usa los filtros para afinar tu b&uacute;squeda o d&eacute;jate inspirar por la variedad de dise&ntilde;os que combinan el encanto de siempre con la tecnolog&iacute;a de ahora.</p>
        </div>
    </section>
    <?php
}

/**
 * Inyecta el contenido INFERIOR para la categoría 2082.
 */
function adrihosan_pilar_imitacion_contenido_inferior() {
    ?>
    <section class="ai-guide-section adrihosan-full-width-block">
        <div class="ai-guide-wrapper">
            <div class="ai-guide-header">
                <h2>La Decisi&oacute;n Inteligente:<br>Porcel&aacute;nico vs. Hidr&aacute;ulico Aut&eacute;ntico</h2>
                <p>Ambos tienen su encanto, pero solo uno est&aacute; dise&ntilde;ado para la vida moderna. Compara y elige con total seguridad la opci&oacute;n que mejor se adapta a tu hogar y a tu ritmo de vida.</p>
            </div>
            <div class="ai-comparison-grid"><div class="ai-comparison-header"><h3>Baldosa Hidr&aacute;ulica Aut&eacute;ntica</h3></div><div class="ai-comparison-header highlight"><h3>Porcel&aacute;nico Imitaci&oacute;n Hidr&aacute;ulico</h3></div><div class="ai-comparison-cell"><h4>Mantenimiento</h4><p class="con">Requiere sellado inicial y ceras peri&oacute;dicas. Sensible a manchas y productos &aacute;cidos.</p></div><div class="ai-comparison-cell"><h4>Mantenimiento</h4><p class="pro">Nulo. Limpieza con cualquier producto convencional. No necesita ceras ni selladores.</p></div><div class="ai-comparison-cell"><h4>Resistencia</h4><p class="con">Material poroso y m&aacute;s delicado. Sensible a golpes y al desgaste si no se cuida.</p></div><div class="ai-comparison-cell"><h4>Resistencia</h4><p class="pro">Extrema. Material de dureza superior, resistente al rayado, a los golpes y al alto tr&aacute;nsito.</p></div><div class="ai-comparison-cell"><h4>Instalaci&oacute;n</h4><p class="con">M&aacute;s compleja. Requiere mano de obra especializada y tratamiento post-colocaci&oacute;n.</p></div><div class="ai-comparison-cell"><h4>Instalaci&oacute;n</h4><p class="pro">Est&aacute;ndar. Cualquier profesional puede colocarlo sin tratamientos adicionales.</p></div><div class="ai-comparison-cell"><h4>Precio</h4><p class="con">Coste por m² significativamente m&aacute;s elevado debido a su fabricaci&oacute;n artesanal.</p></div><div class="ai-comparison-cell"><h4>Precio</h4><p class="pro">M&aacute;s asequible. Su producci&oacute;n industrial lo hace un 70% m&aacute;s econ&oacute;mico que el producto artesanal.</p></div><div class="ai-comparison-cell"><h4>Apariencia</h4><p class="con">Cada pieza es &uacute;nica con variaciones de color y textura. Requiere un sellado para resaltar los colores.</p></div><div class="ai-comparison-cell"><h4>Apariencia</h4><p class="pro">Dise&ntilde;os precisos e inalterables. Colores vivos y definidos que no se desvanecen.</p></div></div>
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
        <h2 class="faq-main-title-common">Dudas Frecuentes sobre el Porcel&aacute;nico Hidr&aacute;ulico</h2>
        <div class="faq-items-wrapper">
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;El suelo imitaci&oacute;n hidr&aacute;ulico necesita mantenimiento o sellado?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>No. A diferencia del mosaico hidr&aacute;ulico original de cemento, nuestro <strong>gres porcel&aacute;nico</strong> es un material no poroso. Olv&iacute;date de aplicar ceras, selladores o tratamientos peri&oacute;dicos. Su superficie vitrificada impide que las manchas de vino, aceite o cal penetren, facilitando una <strong>limpieza diaria</strong> con agua y jab&oacute;n neutro.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Qu&eacute; tama&ntilde;o de junta debo usar para un efecto realista?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>La clave del realismo est&aacute; en la junta. Recomendamos una separaci&oacute;n m&iacute;nima de 1.5 a 2 mm. Evita la junta blanca pura; opta por un <strong>color cemento</strong> o gris perla que se integre con el patr&oacute;n desgastado de la pieza. Una buena elecci&oacute;n de <strong>material de rejuntado</strong> potencia la est&eacute;tica de baldosa individual antigua.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Puedo colocar este azulejo en la zona de ducha?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>S&iacute;, es una de sus mejores aplicaciones. Al tener una absorci&oacute;n de agua casi nula, el <strong>azulejo porcel&aacute;nico</strong> es t&eacute;cnicamente superior para zonas h&uacute;medas. Adem&aacute;s, muchos modelos cuentan con acabado <strong>antideslizante C2</strong>, garantizando tu seguridad sin perder la suavidad al tacto necesaria para ir descalzo.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;C&oacute;mo evito recargar el espacio visualmente?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>Aplica la regla del equilibrio. Si instalas un <strong>suelo con patr&oacute;n geom&eacute;trico</strong> intenso, mantén las paredes en tonos neutros o blancos. Otra opci&oacute;n ganadora es crear una "alfombra" central con el hidr&aacute;ulico y rodearla de un <strong>pavimento base liso</strong> o imitaci&oacute;n madera, zonificando as&iacute; el espacio sin saturarlo.</p>
                </div>
            </div>
            <div class="faq-item-common">
                <button class="faq-question-common">
                    <span>&iquest;Es compatible con suelo radiante?</span>
                    <span class="faq-icon-common">+</span>
                </button>
                <div class="faq-answer-common">
                    <p>Totalmente. La densidad del <strong>porcel&aacute;nico rectificado</strong> lo convierte en un excelente conductor t&eacute;rmico. Transmite el calor de forma m&aacute;s eficiente que la madera o el laminado, maximizando el rendimiento de tu sistema de <strong>calefacci&oacute;n radiante</strong> y reduciendo el consumo energ&eacute;tico de tu hogar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;La decisi&oacute;n final te abruma?<span>Soy Ricardo, y estoy aqu&iacute; para ayudarte.</span></h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20azulejos%20imitaci%C3%B3n%20hidr%C3%A1ulico" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

