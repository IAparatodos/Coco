<?php
/**
 * Category: Baldosa Hidráulica Original (ID: 4862)
 * @package Adrihosan
 */

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

		<section class="bho-guide-section adrihosan-full-width-block" id="bh-guia-original">
			<div class="bho-guide-wrapper">
				<h2 class="bho-guide-main-title">Guía Definitiva de la Baldosa Hidráulica Original</h2>
				<p>La baldosa hidráulica original es mucho más que un pavimento: es una declaración de intenciones. Es la elección para quienes buscan un producto artesanal con alma, capaz de transformar un espacio. Cada pieza es única, con esas pequeñas imperfecciones y diferencias tonales que son el sello de un producto hecho a mano. En Adrihosan, somos custodios de esta tradición.</p>
				
                <h3 class="bho-guide-subtitle">El Proceso: El Arte de Crear con las Manos</h3>
                <p>Para entender el valor de cada baldosa, hay que conocer su origen. Cada pieza nace en una <strong>trepa</strong>, un molde de bronce donde nuestros artesanos vierten, color a color, una mezcla de cemento blanco, polvo de mármol y pigmentos naturales. No existe la cocción; su dureza se logra mediante un prensado hidráulico que fusiona los materiales y un lento y meticuloso <strong>curado en agua</strong> durante semanas, un proceso que le otorga su resistencia y carácter inimitables.</p>

				<h3 class="bho-guide-subtitle">A Considerar Antes de Comprar</h3>
                <p>Ser honestos es parte de nuestra filosofía. Antes de decidirte, es importante que conozcas las particularidades de este material noble:</p>
                <ul>
                    <li><strong>Grosor y Peso:</strong> Son baldosas más gruesas (entre 1,5 y 2 cm) y pesadas que un porcelánico. Esto es un factor a tener en cuenta, especialmente en reformas de pisos antiguos donde la carga sobre el forjado es importante.</li>
                    <li><strong>Instalación Profesional:</strong> No cualquier profesional sabe colocar baldosa hidráulica. Requiere un adhesivo específico (cemento cola flexible C2-S1) y una técnica cuidadosa para lograr una nivelación perfecta y proteger las delicadas aristas de cada pieza.</li>
                    <li><strong>El Encanto de la Imperfección:</strong> Debes amar la variación. Nunca encontrarás dos baldosas exactamente iguales. Esa falta de uniformidad es, precisamente, su mayor virtud y lo que garantiza un suelo exclusivo.</li>
                </ul>

				<h3 class="bho-guide-subtitle">Mantenimiento y Cuidados: La Clave de su Inmortalidad</h3>
				<p>Un suelo hidráulico bien cuidado es eterno. Su mantenimiento es más sencillo de lo que parece si se siguen unas reglas de oro, basadas en su naturaleza porosa:</p>
				<ul>
					<li><strong>Tratamiento Inicial OBLIGATORIO:</strong> Tras la instalación y antes de rejuntar, es imprescindible aplicar un <strong>tratamiento sellador hidrófugo y oleófugo</strong>. Este producto tapa el poro del cemento, lo impermeabiliza y lo protege de futuras manchas. Es el paso más importante de todos.</li>
                    <li><strong>Limpieza Diaria:</strong> Para el día a día, basta con barrer, aspirar o fregar con agua y una pequeña cantidad de <strong>jabón de pH neutro</strong>. Olvídate para siempre de lejías, amoniacos o productos agresivos; dañarían químicamente la capa de color.</li>
                    <li><strong>Nutrición Periódica:</strong> Al igual que la madera, el suelo hidráulico agradece ser "nutrido" cada 2-3 años con ceras específicas o una nueva capa de tratamiento. Esto reaviva los colores y refuerza la capa de protección.</li>
				</ul>
			</div>
		</section>
		<section class="faq-section-common adrihosan-full-width-block">
			<div class="faq-wrapper-common">
				<h2 class="faq-main-title-common">Dudas sobre la Baldosa Original</h2>
				<div class="faq-items-wrapper">
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Se puede instalar en exteriores?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Sí, pero con matices. Requiere un tratamiento sellador específico para exteriores y una correcta instalación para evitar problemas con heladas. Recomendamos consultar con nuestros técnicos para asegurar la mejor solución para tu proyecto.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Cómo se limpian las manchas difíciles?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Al ser un material poroso, es clave actuar rápido. Para manchas domésticas, un paño húmedo con jabón neutro suele ser suficiente. Para manchas persistentes, existen limpiadores específicos para baldosa hidráulica que no dañan el material. Consulta siempre las especificaciones del fabricante del tratamiento sellador.</p></div></div>
					<div class="faq-item-common"><button class="faq-question-common"><span>¿Es muy frágil durante la instalación?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Es un material robusto, pero delicado durante su manipulación e instalación. Debe ser colocado por profesionales familiarizados con el producto para evitar roturas en las esquinas y asegurar una correcta nivelación y rejuntado.</p></div></div>
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

