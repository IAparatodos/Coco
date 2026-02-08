<?php
/**
 * Contenido de categoría - Espejos (102)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'ESPEJOS' (ID: 102)
 * =============================================================================
 ********************************************************************************/
if ( ! function_exists( 'adrihosan_contenido_superior_espejos' ) ) {
    function adrihosan_contenido_superior_espejos() {
        if ( is_product_category( 102 ) && ! is_singular('product') ) {
            remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
            remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
            add_filter( 'woocommerce_show_page_title', '__return_false' );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
            ?>
            <div class="adri-hero-espejos adri-espejos-full-width">
                <img src="https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?q=80&w=2832&auto=format&fit=crop" alt="Baño moderno y luminoso con un espejo elegante" class="adri-hero-espejos__img">
                <div class="adri-hero-espejos__overlay"></div>
                <div class="adri-hero-espejos__content">
                    
            <h1>Espejos de Baño: El Reflejo de tu Estilo</h1>
                    <div class="adri-hero-espejos__text">
                        <p>Un espejo de baño es mucho más que un simple cristal. Es una pieza clave que define el carácter de tu espacio, amplifica la luz y añade un toque de diseño inconfundible.</p>
                        <p class="adri-hero-espejos__text-desktop">¿Buscas un <strong>espejo con luz LED</strong>, la calidez de un <strong>marco de madera</strong> o la funcionalidad del <strong>sistema antivaho</strong>? Descubre todas las opciones a continuación.</p>
                    </div>
                    <nav class="adri-hero-espejos__nav">
                        <a href="#tipos-de-espejo" class="adri-hero-espejos__nav-link">Tipos de Espejo</a>
                        <a href="#guia-de-compra" class="adri-hero-espejos__nav-link">Guía de Compra</a>
                        <a href="#catalogo-completo" class="adri-hero-espejos__nav-link">Ver Todo el Catálogo</a>
                    </nav>
                </div>
            </div>
            <section class="adri-nav-visual-espejos" id="tipos-de-espejo">
                <div class="adri-nav-visual-espejos__container">
                    <header class="adri-nav-visual-espejos__header">
                        <h2 class="adri-nav-visual-espejos__title">Un espejo para cada baño</h2>
                        <p class="adri-nav-visual-espejos__subtitle">Sabemos que cada espacio es único. Empieza tu búsqueda aquí y encuentra el espejo que parece hecho a medida para ti.</p>
                    </header>
                    <div class="adri-nav-visual-espejos__grid">
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/espejo-luz-led-adrihosan.jpg" alt="Espejos de baño con luz LED integrada" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Con Luz LED</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/espejo-redondo-adrihosan.jpg" alt="Elegantes espejos de baño redondos" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Redondos</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-camerino-Adrihosan.jpg" alt="Camerinos de baño con espejo y almacenaje" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Camerinos</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-dorado-bano/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-dorado-Adrihosan.jpg" alt="Espejos de baño con sofisticados marcos dorados" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Dorados</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-sin-marco/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-liso-Adrihosan.jpg" alt="Espejos de baño minimalistas sin marco" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Sin Marco</h3></a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-antivaho/" class="adri-nav-visual-espejos__card"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-antivaho-Adrihosan.jpg" alt="Espejos de baño con sistema antivaho" class="adri-nav-visual-espejos__card-img"><div class="adri-nav-visual-espejos__card-overlay"></div><h3 class="adri-nav-visual-espejos__card-title">Con Antivaho</h3></a>
                    </div>
                </div>
            </section>
            <section class="adri-guiarapida-espejos" id="guia-de-compra">
                <div class="adri-guiarapida-espejos__container">
                    <header class="adri-guiarapida-espejos__header">
                        <h2 class="adri-guiarapida-espejos__title">3 Claves para no Equivocarte con tu Espejo</h2>
                        <p class="adri-guiarapida-espejos__subtitle">Elegir el espejo adecuado puede transformar tu baño. Ten en cuenta estos tres puntos y acertarás seguro.</p>
                    </header>
                    <div class="adri-guiarapida-espejos__grid">
                        <div class="adri-guiarapida-espejos__card"><div class="adri-guiarapida-espejos__icon-wrapper"><svg class="adri-guiarapida-espejos__icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5v4m0 0h-4" /></svg></div><h3 class="adri-guiarapida-espejos__card-title">El Tamaño Importa</h3><p class="adri-guiarapida-espejos__card-text">La regla de oro: el espejo no debe ser más ancho que el mueble de baño. Mide tu espacio y busca un espejo que quede centrado y proporcionado para un look equilibrado y profesional.</p></div>
                        <div class="adri-guiarapida-espejos__card"><div class="adri-guiarapida-espejos__icon-wrapper"><svg class="adri-guiarapida-espejos__icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg></div><h3 class="adri-guiarapida-espejos__card-title">La Luz Perfecta</h3><p class="adri-guiarapida-espejos__card-text">La luz frontal es ideal para maquillaje o afeitado, ya que no crea sombras. La retroiluminación aporta una luz ambiental muy decorativa. Elige según tu necesidad principal.</p></div>
                        <div class="adri-guiarapida-espejos__card"><div class="adri-guiarapida-espejos__icon-wrapper"><svg class="adri-guiarapida-espejos__icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg></div><h3 class="adri-guiarapida-espejos__card-title">Funciones Extra</h3><p class="adri-guiarapida-espejos__card-text">¿Harto del vaho tras la ducha? El sistema antivaho es tu mejor aliado. Si te gusta escuchar música, un espejo con Bluetooth integrado es la solución perfecta para un baño moderno.</p></div>
                    </div>
                </div>
            </section>
            <div id="catalogo-completo"></div>
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 98)
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos', 9 );

if ( ! function_exists( 'adrihosan_contenido_inferior_espejos' ) ) {
    function adrihosan_contenido_inferior_espejos() {
        if ( is_product_category( 102 ) && ! is_singular('product') ) {
            ?>
            <section class="adri-seo-espejos adri-espejos-full-width">
                <div class="adri-seo-espejos__container">
                    <h2>Guía Completa para Comprar el Espejo de Baño Ideal</h2>
                    <p>Elegir un <strong>espejo para el cuarto de baño</strong> es una decisión que combina diseño y uso diario. No es solo un objeto donde mirarse, sino una pieza que puede transformar por completo la percepción de tu espacio, aportando luminosidad, amplitud y un toque de carácter. En esta guía te damos las claves para que encuentres el espejo perfecto que se adapte a tu estilo y necesidades.</p>
                    <h3>Elige la Forma que Define tu Estilo</h3>
                    <p>La forma del espejo es el primer gran paso. Cada una transmite una sensación diferente:</p>
                    <ul><li><strong>Espejos Rectangulares:</strong> Un clásico atemporal. Son versátiles y encajan en cualquier diseño, desde el más tradicional al más moderno. Ofrecen la mayor superficie de reflejo, siendo ideales para baños familiares.</li><li><strong>Espejos Redondos:</strong> Perfectos para suavizar las líneas rectas de los muebles y azulejos. Aportan un toque orgánico y de diseño, convirtiéndose en el punto focal del lavabo.</li><li><strong>Espejos Orgánicos:</strong> Para los más atrevidos. Sus formas irregulares y asimétricas son una declaración de estilo y una tendencia en auge en el diseño de interiores.</li></ul>
                    <h3>Tecnología que Facilita tu Día a Día</h3>
                    <p>Los espejos modernos han dejado de ser simples cristales para incorporar tecnología que mejora la experiencia en el baño.</p>
                    <ul><li><strong>Espejos con Luz LED:</strong> La funcionalidad definitiva. Proporcionan una iluminación frontal perfecta para tareas como el maquillaje o el afeitado, sin generar sombras. La mayoría de nuestros modelos ofrecen diferentes temperaturas de luz (cálida, neutra o fría) para que la adaptes a tu gusto.</li><li><strong>Espejos con Sistema Antivaho:</strong> ¿Cansado de no verte después de la ducha? Esta tecnología integra una pequeña resistencia que calienta el cristal, evitando que se forme vaho. Un extra de confort que agradecerás cada día.</li></ul>
                    <h3>El Toque Final: ¿Con o sin Marco?</h3>
                    <p>El marco es el detalle que remata el diseño. Un <strong>espejo sin marco</strong> ofrece un look minimalista y limpio, integrándose perfectamente en la pared. Por otro lado, los <strong>espejos con marco</strong> (negro, dorado, madera) añaden un acento decorativo, permitiéndote coordinarlos con la grifería, los tiradores del mueble o otros accesorios del baño.</p>
                </div>
            </section>
            <section class="adri-faq-espejos adri-espejos-full-width" id="faq">
                <div class="adri-faq-espejos__container">
                    <header class="adri-faq-espejos__header"><h2 class="adri-faq-espejos__title">Resolvemos tus Dudas</h2><p class="adri-faq-espejos__subtitle">Aquí tienes las respuestas a las preguntas más comunes. Si no encuentras lo que buscas, no dudes en contactarnos.</p></header>
                    <div class="adri-faq-espejos__accordion">
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Qué tipo de luz es mejor para un espejo de baño?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>Depende del uso. La <strong>luz neutra (4000K)</strong> es la más recomendada y versátil, ya que reproduce los colores de forma fiel, ideal para maquillarse o afeitarse. La <strong>luz cálida (3000K)</strong> crea un ambiente más relajante, mientras que la <strong>luz fría (6000K)</strong> ofrece la máxima luminosidad. Nuestros espejos LED suelen especificar el tipo de luz que ofrecen.</p></div></div></div>
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Son difíciles de instalar los espejos con luz?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>No especialmente, pero <strong>recomendamos que la instalación eléctrica la realice un profesional cualificado</strong>. El espejo se cuelga en la pared como uno convencional, pero necesita una conexión a un punto de luz cercano, que normalmente es el que se usa para el aplique del baño. Todos nuestros espejos incluyen un manual de instrucciones detallado.</p></div></div></div>
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Qué es el sistema antivaho y cómo funciona?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>El sistema antivaho consiste en una <strong>resistencia eléctrica</strong> situada en la parte trasera del espejo. Al activarla (normalmente con un botón táctil), calienta suavemente la superficie del cristal, evitando que el vapor de la ducha se condense sobre él. Así, tendrás siempre una zona del espejo perfectamente despejada.</p></div></div></div>
                        <div class="adri-faq-espejos__item"><button class="adri-faq-espejos__question"><span>¿Cómo se limpian los espejos LED para no dañar el sistema?</span><span class="adri-faq-espejos__icon">+</span></button><div class="adri-faq-espejos__answer"><div class="adri-faq-espejos__answer-content"><p>La limpieza es muy sencilla. Utiliza un <strong>paño suave de microfibra</strong> y un limpiacristales estándar. Lo más importante es <strong>no pulverizar el líquido directamente sobre el espejo</strong>, sino sobre el paño. Así evitas que el líquido se filtre por los bordes y pueda dañar los componentes electrónicos.</p></div></div></div>
                    </div>
                </div>
            </section>
            <section class="adri-contacto-espejos adri-espejos-full-width" id="contacto">
                <div class="adri-contacto-espejos__container">
                    <div class="adri-contacto-espejos__intro">
                        <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan" class="adri-contacto-espejos__img">
                        <div><h2 class="adri-contacto-espejos__title">¿Aún con dudas? Te ayudo a elegir.</h2><p class="adri-contacto-espejos__subtitle">Soy Ricardo. Déjame asesorarte para que tu nuevo espejo quede exactamente como lo imaginas.</p></div>
                    </div>
                    <div class="adri-contacto-espejos__grid">
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">📍</div><div class="adri-contacto-espejos__link-label">Exposición</div></a>
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">💻</div><div class="adri-contacto-espejos__link-label">Videollamada</div></a>
                        <a href="tel:+34961957136" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">📞</div><div class="adri-contacto-espejos__link-label">Teléfono</div></a>
                        <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre%20espejos!" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">💬</div><div class="adri-contacto-espejos__link-label">Whatsapp</div></a>
                        <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">📝</div><div class="adri-contacto-espejos__link-label">Formulario</div></a>
                        <a href="mailto:hola@adrihosan.com" class="adri-contacto-espejos__link"><div class="adri-contacto-espejos__link-icon">✉️</div><div class="adri-contacto-espejos__link-label">Email</div></a>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 99)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos', 21 );

