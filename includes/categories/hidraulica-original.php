<?php
/**
 * Contenido de categoría - Hidráulica Original (4862)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

/******************************************************************************
 * =============================================================================
 * PÁGINA "BALDOSA HIDRÁULICA ORIGINAL" (ID: 4862) - VERSIÓN FINAL COMPLETA
 * =============================================================================
 ******************************************************************************/

// --- BLOQUE 1: Contenido SUPERIOR (Antes de los productos) ---
// COMENTADO - Duplicado del controlador maestro (línea 89)
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_original', 7 );
function adrihosan_contenido_superior_original() {
	if ( is_product_category( 4862 ) && ! is_singular('product') ) {
		remove_all_actions( 'woocommerce_archive_description' );
		add_filter( 'woocommerce_show_page_title', '__return_false' );
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
		?>
		<section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/01/Baldosa-hidraulica-original-Adrihosan-1.jpg');">
			<div class="hero-content">
				
				<h1>Baldosa Hidráulica Original</h1>
				<p>Siente la belleza del cemento pigmentado. Celebramos la artesanía y el carácter del auténtico suelo hidráulico, creando suelos evocadores e irrepetibles.</p>
				<div class="hero-buttons">
					<a href="#bh-product-grid-anchor" class="hero-btn primary">Ver Colección</a>
					<a href="#bh-guia-original" class="hero-btn secondary">Leer Guía Definitiva</a>
				</div>
			</div>
		</section>
		<section class="bh-features-section adrihosan-full-width-block">
			<div class="section-header">
				<h2>La Esencia de lo Artesanal</h2>
				<p>Cada baldosa es una pequeña obra de arte, con la textura y las variaciones que solo un producto hecho a mano puede ofrecer.</p>
			</div>
			<div class="bh-features-grid">
				<div class="bh-feature-card"><div class="icon">🎨</div><h3>Color y Textura Únicos</h3><p>La pigmentación manual crea una profundidad de color y una textura sedosa inigualables por procesos industriales.</p></div>
				<div class="bh-feature-card"><div class="icon">✨</div><h3>El Encanto Artesanal</h3><p>Cada baldosa es única, con ligeras variaciones que garantizan un suelo con personalidad y valor.</p></div>
				<div class="bh-feature-card"><div class="icon">🌿</div><h3>Energía Eficiente y Sostenible</h3><p>Además de su belleza natural, es un excelente conductor térmico, ideal para sistemas de suelo radiante.</p></div>
				<div class="bh-feature-card"><div class="icon">⏳</div><h3>Durabilidad y Pátina</h3><p>A diferencia de materiales que se desgastan, este suelo envejece. Con el tiempo desarrolla una pátina única que realza su belleza. Es un suelo que no se reemplaza, se hereda.</p></div>
			</div>
		</section>
		<section class="inspiration-section adrihosan-full-width-block">
			<h2 class="inspiration-title">Encuentra tu Estilo</h2>
			<div class="inspiration-grid">
				<a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/bano/" class="inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/baldosa-hidraulica-adrihosan-bano.jpg" alt="Baño con suelo de baldosa hidráulica original"><div class="card-content"><h3>Para Baños</h3></div></a>
				<a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/cocina/" class="inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Baldosa-hidraulica-cocina.jpg" alt="Cocina con suelo de baldosa hidráulica original"><div class="card-content"><h3>Para Cocinas</h3></div></a>
				<a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/exterior/" class="inspiration-card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-1.jpg" alt="Exterior con suelo de baldosa hidráulica original"><div class="card-content"><h3>Para Exterior</h3></div></a>
			</div>
		</section>
		
		<div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
			<p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver las baldosas disponibles.</p>
		</div>
		
		<div id="destino-filtro-adria-hidraulica" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
		<div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426058"]'); ?></div>
		
		<div class="product-loop-header" id="bh-product-grid-anchor"><h2 class="product-loop-title">Catálogo de Baldosa Hidráulica Original</h2></div>
		<?php
	}
}

// --- BLOQUE 2: Contenido INFERIOR (Después de los productos) ---
// COMENTADO - Duplicado del controlador maestro (línea 90)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_original', 20 );
function adrihosan_contenido_inferior_original() {
	if ( is_product_category( 4862 ) && ! is_singular('product') ) {
		?>
		<section class="bh-custom-section adrihosan-full-width-block">
			<div class="bh-custom-wrapper">
				<div class="bh-custom-text-content">
					<h2>Pide tu baldosa personalizada</h2>
					<p>¿Tienes un diseño en mente o quieres recuperar un modelo antiguo? Nuestro equipo de artesanos puede crear la baldosa hidráulica que necesitas. Contáctanos y haremos realidad tu idea.</p>
					<a href="https://www.adrihosan.com/baldosa-hidraulica-personalizada/" class="bh-custom-cta-btn">Solicitar Diseño</a>
				</div>
				<div class="bh-custom-image-content">
					<img src="https://www.adrihosan.com/wp-content/uploads/2025/09/baldosa-hidraulica-adrihosan-cocina.jpg" alt="Artesano trabajando en la creación de una baldosa hidráulica personalizada.">
				</div>
			</div>
		</section>
		
       <section class="bh-simulator-section adrihosan-full-width-block" style="background-color: #3f6f7b;">
    <div class="bh-simulator-wrapper">
        <h2 style="color: #ffffff;">Diseña tu propia baldosa</h2>
        <p style="color: #ffffff;">Con nuestro simulador, puedes combinar colores y patrones para crear una baldosa única. Experimenta, visualiza y descarga tu diseño para solicitar un presupuesto.</p>
        <a href="https://adrihosan.suelohidraulico.com/" class="bh-simulator-cta-btn">Abrir Simulador</a>
        <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/simulador-baldosa-hidraulica-Adrihosan-123.png" alt="Simulador de ambientes de Adrihosan en un ordenador portátil" class="bh-simulator-device-img">
    </div>
</section>

		<?php
        // SEO: Contenido din&aacute;mico desde WooCommerce category_description()
        $descripcion_editor = category_description();
        if ( ! empty( $descripcion_editor ) ) {
        ?>
        <section class="bho-seo-section adrihosan-full-width-block">
            <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
                <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins'; color: #3f6f7b; line-height: 1.8;">
                    <?php echo $descripcion_editor; ?>
                </div>
            </div>
        </section>
        <?php } ?>

		<section class="faq-section-common adrihosan-full-width-block">
			<div class="faq-wrapper-common">
				<h2 class="faq-main-title-common">Preguntas Frecuentes sobre Baldosa Hidráulica</h2>
				<div class="faq-items-wrapper">
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Es compatible la baldosa hidráulica con el suelo radiante?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>Rotundamente sí.</strong> De hecho, es uno de los mejores materiales para ello. Al ser una pieza compacta de cemento y polvo de mármol, tiene una inercia térmica excelente: tarda un poco más en calentarse que la madera, pero retiene y irradia el calor durante mucho más tiempo, lo que mejora la eficiencia energética de tu sistema de calefacción.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Por qué las piezas tienen ligeras variaciones de color entre sí?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Porque no son un producto industrial, sino artesanal. A esto se le llama <strong>destonificación natural</strong>. Al fabricarse una a una, factores como la humedad del día o la mezcla manual de pigmentos pueden generar matices sutiles. No es un defecto; es la garantía de que has comprado un suelo auténtico y no una imitación cerámica impresa.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿El suelo hidráulico resbala?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>El acabado natural de la baldosa hidráulica es mate y tiene cierta porosidad, por lo que ofrece un agarre correcto en seco. Si necesitas instalarlo en zonas que estarán habitualmente mojadas o en exteriores con pendiente, recomendamos aplicar un tratamiento líquido antideslizante específico que micro-texturiza la superficie sin alterar su estética.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>Tengo baldosas hidráulicas antiguas, ¿puedo mezclarlas con las nuevas?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>No recomendamos mezclarlas en la misma superficie ("parcheado").</strong> Aunque el diseño sea similar, una baldosa antigua ha perdido viveza y tiene una pátina que jamás coincidirá con el color vibrante de una baldosa nueva. La mejor solución es <strong>crear "alfombras"</strong>: utiliza las piezas antiguas para delimitar una zona central o decorativa, y separa las zonas con las baldosas nuevas alrededor o en estancias contiguas. Así cada una luce su belleza sin competir.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Se puede pulir el suelo hidráulico si se mancha o envejece?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p><strong>Rotundamente NO. Está prohibido.</strong> A diferencia del terrazo, la baldosa hidráulica tiene una capa de color (rodadura) de unos milímetros. Si utilizas una pulidora abrasiva, sea ahora o dentro de 50 años, corres el riesgo de eliminar el dibujo y dejar a la vista el cemento base, destruyendo el suelo para siempre. La clave es el <strong>tratamiento sellador</strong> y la limpieza con jabón neutro; con eso, el suelo envejecerá dignamente sin necesidad de agresiones mecánicas.</p></div></div>
				</div>
			</div>
		</section>
		<section class="contact-help-common adrihosan-full-width-block">
			<div class="contact-help-wrapper">
				<div class="contact-intro">
					<img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
					<div><h2>¿Dudas sobre la Baldosa Original?<span>Soy Ricardo, pregúntame.</span></h2></div>
				</div>
				<div class="contact-options-grid-common">
					<a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposición</div></a>
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
					<a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Teléfono</div></a>
					<a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
					<a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
				</div>
			</div>
		</section>
		<?php
	}
}

