<?php
/**
 * Category: Azulejo Hidráulico Cocina (ID: 4876)
 * @package Adrihosan
 */

/******************************************************************************
 * =============================================================================
 * CÓDIGO 10/10 PARA 'AZULEJO HIDRÁULICO COCINA' (ID: 4876)
 * =============================================================================
 ******************************************************************************/

// DESACTIVADO - Ahora usa adrihosan_master_controller_cpu_fix()
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_cocina', 9 );
function adrihosan_contenido_superior_cocina() {
    if ( is_product_category( 4876 ) && ! is_singular('product') ) {
        remove_all_actions( 'woocommerce_archive_description' );
        add_filter( 'woocommerce_show_page_title', '__return_false' );
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
        ?>
        <header class="ahc-hero-section ahc-main-font ahc-full-width-section">
            <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/AMB-CANET-22-AQUA-BRUNEI-L25-BLANCO-WEB-1-optimized.jpg" alt="Cocina moderna con un salpicadero de azulejo hidráulico de colores vivos" class="hero-bg-image">
            <div class="hero-content">
               
                <h1>Azulejo Imitaci&oacute;n Hidr&aacute;ulico para Cocina</h1>
                <p>El toque de car&aacute;cter que tu cocina necesita. Dise&ntilde;os que resisten el d&iacute;a a d&iacute;a, f&aacute;ciles de limpiar y con una personalidad que no deja a nadie indiferente.</p>
                <div class="hero-buttons">
                    <a href="#catalogo-cocina" class="ahc-boton primario">Ver Dise&ntilde;os</a>
                    <a href="https://www.adrihosan.com/proyecto-categoria/cocinas/" class="ahc-boton secundario" target="_blank" rel="noopener noreferrer">Ver Proyectos de Cocinas</a>
                </div>
            </div>
        </header>
        <section class="ahc-ventajas-section ahc-main-font">
            <div class="section-header">
                <h2 class="ahc-color-oscuro">La Elecci&oacute;n Inteligente para tu Cocina</h2>
                <p class="section-p">El azulejo porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico te da toda la belleza del dise&ntilde;o tradicional sin sus complicaciones. Creado para durar, pensado para vivirlo.</p>
            </div>
            <div class="ahc-ventajas-grid">
                <div class="ahc-ventaja-card"><div class="icon">🛡️</div><h3 class="ahc-color-oscuro">Cero Mantenimiento</h3><p>Olv&iacute;date de ceras y selladores. Su superficie no porosa lo hace inmune a las manchas y a la humedad. Instalar y disfrutar.</p></div>
                <div class="ahc-ventaja-card"><div class="icon">🔥</div><h3 class="ahc-color-oscuro">Resistencia Extrema</h3><p>Soporta el calor, los golpes y los productos de limpieza m&aacute;s exigentes. El aliado perfecto para la zona de fuegos y la encimera.</p></div>
                <div class="ahc-ventaja-card"><div class="icon">🧼</div><h3 class="ahc-color-oscuro">Limpieza F&aacute;cil y R&aacute;pida</h3><p>Una simple pasada con tu limpiador habitual es suficiente para que luzca como el primer d&iacute;a. M&aacute;s tiempo para cocinar, menos para limpiar.</p></div>
                <div class="ahc-ventaja-card"><div class="icon">🎨</div><h3 class="ahc-color-oscuro">Dise&ntilde;os Siempre Perfectos</h3><p>La impresi&oacute;n digital garantiza patrones n&iacute;tidos y colores vivos que no se desgastan con el tiempo ni el uso. Belleza que perdura.</p></div>
            </div>
        </section>
        <section class="ahc-inspiracion-section ahc-main-font">
            <div style="max-width: 1152px; margin: 0 auto; padding: 0 24px;">
                <div class="section-header" style="text-align: center; margin-bottom: 3rem;"><h2 class="ahc-color-oscuro">Ideas que transforman tu cocina</h2><p class="section-p">Desde un detalle sutil a una declaraci&oacute;n de intenciones. Descubre c&oacute;mo integrar el azulejo hidr&aacute;ulico.</p></div>
                <div class="ahc-inspiracion-grid">
                    <a href="#catalogo-cocina" class="ahc-inspiracion-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared-cocina-2.jpg" alt="Salpicadero de cocina con azulejos hidráulicos geométricos en tonos azules y blancos."><div class="card-content"><h3>Salpicaderos con Car&aacute;cter</h3><p>Convierte la pared de la encimera en el punto focal de tu cocina. Un dise&ntilde;o geom&eacute;trico o floral protege de salpicaduras y a&ntilde;ade una dosis masiva de estilo.</p></div></a>
                    <a href="#catalogo-cocina" class="ahc-inspiracion-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/azulejo-imitacion-hidraulico-Adrihosan-1.jpg" alt="Suelo de cocina que utiliza azulejos hidráulicos para crear un efecto alfombra."><div class="card-content"><h3>Suelos que Delimitan</h3><p>Usa un patr&oacute;n hidr&aacute;ulico para crear una "alfombra" cer&aacute;mica que separe visualmente la zona de cocina del comedor en espacios abiertos.</p></div></a>
                    <a href="#catalogo-cocina" class="ahc-inspiracion-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared.jpg" alt="Pared completa de una zona de office en la cocina revestida con azulejos hidráulicos vintage."><div class="card-content"><h3>Una Pared Protagonista</h3><p>&iquest;Tienes una pared sin m&aacute;s en la zona del office? Rev&iacute;stela por completo y transf&oacute;rmala en una obra de arte. Ideal para dar profundidad y personalidad.</p></div></a>
                </div>
            </div>
        </section>
        
        <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
            <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
        </div>
        
        <div id="destino-filtro-adria-cocina-imitacion" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
        <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>
        
        <?php // --- TÍTULO H2 ANTES DEL LOOP --- ?>
        <div class="product-loop-header" id="catalogo-cocina">
            <h2 class="product-loop-title">Cat&aacute;logo de Azulejos para Cocina</h2>
        </div>

        <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginaci&oacute;n) -->
        <div id="fe-products-wrapper">
        <?php
    }
}

// COMENTADO - Duplicado del controlador maestro (línea 81)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_cocina', 21 );
function adrihosan_contenido_inferior_cocina() {
    if ( is_product_category( 4876 ) && ! is_singular('product') ) {
        ?>
        </div><!-- /fe-products-wrapper -->
        <section class="ap-seo-content-section adrihosan-full-width-block">
            <div class="ap-seo-content-wrapper">
                <h2>Gu&iacute;a para Elegir Azulejos Imitaci&oacute;n Hidr&aacute;ulico para tu Cocina</h2>
                <p>El <strong>azulejo porcel&aacute;nico para cocina</strong> se ha convertido en la opci&oacute;n estrella para quienes desean un dise&ntilde;o con car&aacute;cter sin renunciar a la m&aacute;xima funcionalidad. Inspirados en los cl&aacute;sicos mosaicos, nuestra colecci&oacute;n de <a href="/categoria-producto/baldosa-hidraulica/imitacion/">azulejo imitaci&oacute;n hidr&aacute;ulico</a> ofrece una soluci&oacute;n duradera, higi&eacute;nica y de nulo mantenimiento, ideal para el ritmo de vida actual.</p>
                <h3>La Combinaci&oacute;n Perfecta: Estilo y Resistencia en el Coraz&oacute;n del Hogar</h3>
                <p>La cocina es una de las zonas m&aacute;s exigentes de la casa, expuesta a diario a calor, humedad, grasa y productos de limpieza. El porcel&aacute;nico no solo soporta estas condiciones sin inmutarse, sino que lo hace aportando un valor est&eacute;tico inigualable.</p>
                <ul>
                    <li><strong>Ideal para Salpicaderos:</strong> Como <strong>frontal de cocina</strong>, el porcel&aacute;nico es imbatible. Protege la pared de salpicaduras, es totalmente ign&iacute;fugo (seguro detr&aacute;s de los fuegos) y se limpia con una simple bayeta, manteniendo el dise&ntilde;o intacto para siempre.</li>
                    <li><strong>Suelos a Prueba de Todo:</strong> Un <strong>suelo de cocina resistente</strong> es fundamental. El porcel&aacute;nico no se raya, no se mancha y soporta el tr&aacute;nsito constante. Puedes elegir un dise&ntilde;o que cubra toda la superficie o crear una "alfombra" cer&aacute;mica para delimitar la zona de comedor.</li>
                </ul>
                <p>Al elegir un <strong>azulejo porcel&aacute;nico para tu cocina</strong>, est&aacute;s invirtiendo en tranquilidad. Disfruta de la belleza de un dise&ntilde;o hidr&aacute;ulico sin preocuparte por manchas de aceite, vino o por productos de limpieza agresivos. Es la elecci&oacute;n pr&aacute;ctica para cocinas reales y vividas.</p>
            </div>
        </section>
        <section class="faq-section-common adrihosan-full-width-block">
            <div class="faq-wrapper-common">
                <h2 class="faq-main-title-common">Dudas Frecuentes sobre Azulejos para Cocina</h2>
                <div class="faq-items-wrapper">
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Es resistente a las manchas de aceite, vino o tomate?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Totalmente. El azulejo porcel&aacute;nico tiene una absorci&oacute;n de agua casi nula (inferior al 0.5%), lo que significa que las manchas no penetran. Se limpian f&aacute;cilmente sin dejar rastro, a diferencia del hidr&aacute;ulico de cemento que es poroso y requiere sellado.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Se puede poner en la pared detr&aacute;s de la vitrocer&aacute;mica?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>S&iacute;, es ideal para esa zona. El material porcel&aacute;nico es ign&iacute;fugo y soporta perfectamente las altas temperaturas y los cambios bruscos de calor sin agrietarse ni perder color. Es la opci&oacute;n m&aacute;s segura y duradera para el frente de cocci&oacute;n.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Necesita alg&uacute;n tratamiento o cera despu&eacute;s de instalarlo?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>No, ninguno. Una vez instalado y rejuntado, el azulejo est&aacute; listo para su uso. No necesita ser sellado, encerado ni pulido en ning&uacute;n momento de su vida &uacute;til. Esa es una de sus grandes ventajas: belleza sin mantenimiento.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Qu&eacute; tipo de adhesivo y junta se recomienda?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Se recomienda usar un cemento cola flexible tipo C2TE S1, especialmente si se instala sobre superficies que puedan tener ligeros movimientos. Para la junta, una lechada epoxi o una cementosa aditivada de alta calidad es perfecta, ya que ofrece mayor resistencia a las manchas y a la suciedad.</p></div></div>
                </div>
            </div>
        </section>

        <section class="contact-help-common adrihosan-full-width-block">
            <div class="contact-help-wrapper">
                <div class="contact-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                    <div><h2>&iquest;A&uacute;n con dudas? Te ayudo a elegir.</h2><p>Soy Ricardo. D&eacute;jame asesorarte para que tu cocina quede exactamente como la imaginas.</p></div>
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
}

