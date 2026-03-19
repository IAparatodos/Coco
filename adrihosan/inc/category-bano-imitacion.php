<?php
/**
 * Category: Azulejo Hidráulico Baño (ID: 2083)
 * @package Adrihosan
 */

/******************************************************************************
 * INYECTAR BLOQUES PERSONALIZADOS EN LA CATEGORÍA 'AZULEJO HIDRÁULICO BAÑO' (ID: 2083)
 ******************************************************************************/

// DESACTIVADO - Ahora usa adrihosan_master_controller_cpu_fix() 
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_bano', 8 );
function adrihosan_contenido_superior_bano() {
	if ( is_product_category( 2083 ) && ! is_singular('product') ) {
		remove_all_actions( 'woocommerce_archive_description' );
		add_filter( 'woocommerce_show_page_title', '__return_false' );
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
		?>

		<section class="ap-hero-section-bano adrihosan-full-width-block"><div class="ap-hero-content-bano">
		   		    <h1>Azulejos Hidráulicos: Inspira tu Baño con Carácter</h1>
		    <p>Elige un diseño que hable de ti. Aquí encontrarás la guía visual definitiva para transformar tu baño en un espacio único con la personalidad del azulejo hidráulico.</p><a href="#ap-filtros-visuales-bano" class="ap-hero-cta-bano">Ver diseños</a></div></section>

		<section class="ap-value-section-bano adrihosan-full-width-block"><div class="ap-value-wrapper-bano"><div class="section-header-bano"><h2>La Belleza del Hidráulico, la Resistencia del Porcelánico</h2><p>Consigue el look artesanal que te enamora con todas las ventajas técnicas para la zona más exigente de la casa: el baño.</p></div><div class="ap-value-grid-bano"><div class="ap-value-card-bano"><div class="icon">💧</div><h3>100% Impermeable</h3><p>Gracias a su nula absorción de agua, el gres porcelánico es la única opción segura para el interior de la ducha. Cero filtraciones, cero problemas.</p></div><div class="ap-value-card-bano"><div class="icon">🧼</div><h3>Limpieza sin Esfuerzo</h3><p>Su superficie no porosa resiste las manchas de cal, gel o cualquier producto de limpieza. Se mantiene como el primer día sin mantenimiento.</p></div><div class="ap-value-card-bano"><div class="icon">🛡️</div><h3>Diseño que Perdura</h3><p>A diferencia del hidráulico de cemento, el color del porcelánico no se desgasta con el uso ni se altera. Un suelo y pared para toda la vida.</p></div></div></div></section>

		<section id="ap-filtros-visuales-bano" class="ap-inspiration-section-bano adrihosan-full-width-block"><div class="ap-inspiration-wrapper-bano"><h2>¿Dónde vas a colocar tu azulejo hidráulico?</h2><p class="section-subtitle-bano">Cada zona de tu baño tiene una necesidad. Descubre la solución perfecta para suelos, duchas o para dar ese toque final con un detalle único.</p><div class="ap-inspiration-grid-bano"><a href="#ap-productos-bano-grid" class="ap-inspiration-card-bano"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-bano.jpg" alt="Suelo de un baño luminoso revestido con azulejo porcelánico de patrón hidráulico en tonos azules y grises."><div class="ap-card-content-bano"><h3>Suelos con Alma</h3><p>Crea una base espectacular. Elige diseños que resistan la humedad y el día a día, convirtiendo el suelo en el protagonista de tu baño.</p></div></a><a href="#ap-productos-bano-grid" class="ap-inspiration-card-bano"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-bano-1.jpg" alt="Pared de una ducha moderna revestida con azulejo hidráulico porcelánico, 100% impermeable."><div class="ap-card-content-bano"><h3>Paredes de Ducha</h3><p>Lleva el diseño a la zona de aguas sin miedo. Soluciones porcelánicas totalmente impermeables que decoran y protegen.</p></div></a><a href="#ap-productos-bano-grid" class="ap-inspiration-card-bano"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-bano-3.jpg" alt="Frente de un lavabo decorado con azulejos hidráulicos que crean un punto focal de diseño."><div class="ap-card-content-bano"><h3>Detalles y Zócalos</h3><p>El toque maestro. Ideal para frentes de lavabo, hornacinas o zócalos que aportan un acento de color y personalidad.</p></div></a></div></div></section>


		<div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
			<p style="margin:0; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona las características que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
		</div>
		
		<div id="destino-filtro-adria-bano-imitacion" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
		<div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427035"]'); ?></div>

		<section class="ap-product-header-section adrihosan-full-width-block"><div id="ap-productos-bano-grid" class="ap-product-header-wrapper"><h2>Nuestro Catálogo para Baños</h2><p>Explora la colección completa. Usa los filtros para afinar tu búsqueda o déjate inspirar por la variedad de diseños.</p></div></section>

		<!-- WRAPPER AJAX para Filter Everything Pro -->
		<div id="fe-products-wrapper">
		<?php
	}
}

// COMENTADO - Duplicado del controlador maestro (línea 73)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_bano', 20 );
function adrihosan_contenido_inferior_bano() {
	if ( is_product_category( 2083 ) && ! is_singular('product') ) {
		?>
		</div><!-- /fe-products-wrapper -->
		<section class="ap-seo-content-section adrihosan-full-width-block"><div class="ap-seo-content-wrapper"><h2>La Elección Inteligente para tu Azulejo Hidráulico de Baño</h2><p>Elegir el azulejo hidráulico para el baño es una decisión que va más allá del diseño. Se trata de encontrar el equilibrio perfecto entre la estética que te enamora y la practicidad que necesitas en una de las zonas más exigentes de la casa. Aquí te damos las claves para que aciertes seguro.</p><h3>La Regla de Oro: La Ducha Manda</h3><p>Seamos directos: para la zona interior de la ducha, la única opción viable y que te ahorrará problemas a futuro es el <strong>gres porcelánico imitación hidráulico</strong>. Su nula absorción de agua lo hace 100% impermeable, resiste cualquier producto de limpieza (lejía, antical) y te garantiza cero mantenimiento. No te compliques, en la ducha, el porcelánico es el rey.</p><h3>Suelos, Paredes y Zonas Secas: Aquí Empieza el Juego</h3><p>Fuera del plato de ducha, el abanico se abre y puedes dejar que tu estilo decida. Tanto los suelos del resto del baño como las paredes del lavabo o los zócalos decorativos son lienzos perfectos para el diseño hidráulico. Aquí es donde debes valorar:</p><ul><li><strong>Si buscas máxima practicidad:</strong> Sigue con el gres porcelánico. Tendrás un suelo o pared a prueba de todo, fácil de limpiar y con opciones antideslizantes certificadas para una mayor seguridad.</li><li><strong>Si eres un purista del material:</strong> La baldosa hidráulica de cemento auténtica es tu elección. Su tacto sedoso y la profundidad de su color son inigualables. Eso sí, recuerda que exige un tratamiento sellador inicial y un mantenimiento periódico solo con jabones neutros para conservar su belleza.</li></ul><p>En Adrihosan, todos los modelos que encontrarás en esta categoría son de <strong>gres porcelánico de alta calidad</strong>, asegurándote la mejor solución para cualquier rincón de tu baño sin renunciar a ese diseño vibrante y lleno de carácter que solo el hidráulico puede ofrecer.</p></div></section>

		<section class="faq-section-common adrihosan-full-width-block"><div class="faq-wrapper-common"><h2 class="faq-main-title-common">Dudas Frecuentes sobre Azulejos para Baño</h2><div class="faq-items-wrapper"><div class="faq-item-common"><button class="faq-question-common"><span>¿El porcelánico imitación hidráulico es antideslizante?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Sí, muchos de nuestros modelos porcelánicos tienen un acabado mate con propiedades antideslizantes (Clase 1 o C1), haciéndolos seguros para el suelo del baño. Para la zona de la ducha, recomendamos buscar modelos con una clasificación superior (Clase 2/C2 o superior) para una máxima seguridad.</p></div></div><div class="faq-item-common"><button class="faq-question-common"><span>¿Puedo ponerlo en la pared de la ducha?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Absolutamente. El gres porcelánico es un material con una porosidad prácticamente nula, lo que lo hace 100% impermeable y perfecto para estar en contacto directo con el agua. No se verá afectado por la humedad, el moho o los productos de limpieza.</p></div></div><div class="faq-item-common"><button class="faq-question-common"><span>¿Qué junta de color debo usar?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Depende del efecto que busques. Para un look continuo donde el diseño del azulejo es el protagonista, elige un color de junta lo más parecido posible a los tonos de la baldosa (un gris claro o un beige suelen funcionar bien). Para un efecto más marcado y gráfico, una junta de color oscuro (gris perla o antracita) resaltará la forma de cada pieza.</p></div></div></div></div></section>

		<section class="contact-help-common adrihosan-full-width-block"><div class="contact-help-wrapper"><div class="contact-intro"><img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan"><div><h2>¿Necesitas un último consejo?<span>Soy Ricardo, tu experto en baños con carácter.</span></h2></div></div><div class="contact-options-grid-common"><a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Visita Presencial</div></a><a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Visita Virtual</div></a><a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Teléfono</div></a><a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20azulejos%20para%20baño" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a><a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a></div></div></section>
		<?php
	}
}
