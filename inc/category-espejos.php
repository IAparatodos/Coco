<?php
/**
 * Categories: Espejos (ID: 102), Espejos con Luz (ID: 4213), Espejos Redondos (ID: 4247)
 * @package Adrihosan
 */

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

            <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginaci&oacute;n) -->
            <div id="fe-products-wrapper">
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
            </div><!-- /fe-products-wrapper -->
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

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'ESPEJOS DE BAÑO CON LUZ' (ID: 4213)
 * =============================================================================
 ********************************************************************************/
if ( ! function_exists( 'adrihosan_contenido_superior_espejos_luz' ) ) {
    function adrihosan_contenido_superior_espejos_luz() {
        if ( is_product_category( 4213 ) && ! is_singular('product') ) {
            remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
            remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
            add_filter( 'woocommerce_show_page_title', '__return_false' );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
            ?>
            <section class="ap-hero-section-luz adrihosan-luz-full-width-block">
                <div class="ap-hero-content-luz">
                    
                    <h2>La Iluminación que lo Cambia Todo</h2>
                    <p>Descubre cómo nuestros espejos con luz LED integrada transforman tu baño en un espacio de precisión, confort y diseño.</p>
                    <div class="ap-hero-buttons-luz">
                        <a href="#tipos-de-luz" class="boton-adrihosan-luz primary">Ver Tipos de Luz</a>
                        <a href="#catalogo-luz" class="boton-adrihosan-luz secondary">Ver Modelos</a>
                    </div>
                </div>
            </section>
            <section id="tipos-de-luz" class="ap-light-types-section adrihosan-luz-full-width-block">
                <div class="ap-light-types-wrapper">
                    <div class="ap-light-types-header">
                        <h2>Funcionalidad o Ambiente. ¿O por qué no ambos?</h2>
                        <p>Cada tipo de iluminación tiene un propósito. Conoce las diferencias clave para elegir el espejo que se adapta perfectamente a tu rutina y estilo.</p>
                    </div>
                    <div class="ap-light-types-grid">
                        <div class="ap-light-type-card"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16"><path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/><path d="M1.646 6.354a.5.5 0 0 1 .708 0L4 8 2.354 9.646a.5.5 0 0 1-.708-.708L3.293 8 1.646 6.354zM14.354 6.354a.5.5 0 0 1 0 .708L12.707 8l1.647 1.646a.5.5 0 0 1-.708.708L12 8l1.646-1.646a.5.5 0 0 1 .708 0zM8 4a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 4zm0 8a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 .5-.5z"/></svg></div><h3>Luz Frontal</h3><p>Perfecta para tareas de precisión. La luz se proyecta directamente hacia ti, eliminando sombras en el rostro. Ideal para maquillarse, afeitarse o ponerse lentillas.</p></div>
                        <div class="ap-light-type-card"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/><path d="M8 4a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zm0 8a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 1 0v3a.5.5 0 0 1-.5.5zM4.5 8a.5.5 0 0 1-.5-.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5zm8 0a.5.5 0 0 1-.5-.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5z"/></svg></div><h3>Retroiluminación</h3><p>Crea un ambiente único y decorativo. La luz se proyecta hacia la pared, generando un halo que hace que el espejo parezca flotar. Aporta profundidad y un toque de diseño.</p></div>
                    </div>
                </div>
            </section>
            <section class="ap-antifog-section adrihosan-luz-full-width-block">
                <div class="ap-antifog-wrapper">
                    <div class="ap-antifog-content">
                        <h2>Se acabó el vaho. Siempre.</h2>
                        <p>Nuestra tecnología antivaho integra una resistencia que calienta sutilmente el espejo para que nunca se empañe. Sales de la ducha y tu reflejo está ahí, nítido e inmediato. Un pequeño lujo que transforma tu día a día.</p>
                    </div>
                    <div class="ap-antifog-image"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-con-luz-Adrihosan-Antivaho.jpg" alt="Espejo de baño con la mitad de la superficie empañada y la otra mitad perfectamente clara gracias al sistema antivaho."></div>
                </div>
            </section>
            <section class="ap-filters-section-luz adrihosan-luz-full-width-block">
                <div class="ap-filters-wrapper-luz">
                    <div class="ap-filter-group-luz"><h3 class="ap-filter-group-title-luz">Filtrar por Forma</h3><div class="ap-filter-buttons-luz"><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?forma-espejo=rectangular" class="ap-filter-btn-luz">Rectangular</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?forma-espejo=redondo" class="ap-filter-btn-luz">Redondo</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?forma-espejo=ovalado" class="ap-filter-btn-luz">Orgánico</a></div></div>
                    <div class="ap-filter-group-luz"><h3 class="ap-filter-group-title-luz">Filtrar por Ancho</h3><div class="ap-filter-buttons-luz"><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=60" class="ap-filter-btn-luz">60 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=80" class="ap-filter-btn-luz">80 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=100" class="ap-filter-btn-luz">100 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=120" class="ap-filter-btn-luz">120 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=140" class="ap-filter-btn-luz">140 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=160" class="ap-filter-btn-luz">160 cm</a><a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-bano-con-luz/?ancho-espejo=180" class="ap-filter-btn-luz">180 cm</a></div></div>
                </div>
            </section>
            <section class="ap-product-header-section-luz adrihosan-luz-full-width-block">
                <div id="catalogo-luz" class="ap-product-header-wrapper-luz"><h2>Modelos de Espejos con Luz</h2><p>Explora la colección completa. Usa los filtros para afinar tu búsqueda o déjate inspirar por la variedad de diseños.</p></div>
            </section>

            <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginaci&oacute;n) -->
            <div id="fe-products-wrapper">
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 107)
// add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_espejos_luz', 8 );

if ( ! function_exists( 'adrihosan_contenido_inferior_espejos_luz' ) ) {
    function adrihosan_contenido_inferior_espejos_luz() {
        if ( is_product_category( 4213 ) && ! is_singular('product') ) {
            ?>
            </div><!-- /fe-products-wrapper -->
            <section class="ap-tech-guide-section adrihosan-luz-full-width-block">
                <div class="ap-tech-guide-wrapper">
                    <div class="ap-tech-guide-header"><h2>Los Detalles que Marcan la Diferencia</h2><p>Entender la tecnología detrás de tu espejo te ayuda a elegir con total seguridad. Te explicamos los tres conceptos clave que debes conocer.</p></div>
                    <div class="ap-tech-guide-grid">
                        <div class="ap-tech-guide-card"><h3>Temperatura de Color (K)</h3><ul><li><strong>Luz Cálida (3000K):</strong> Crea un ambiente íntimo y relajante. Perfecta para baños donde buscas una sensación de spa.</li><li><strong>Luz Neutra (4000K):</strong> La más versátil. Simula la luz natural del día, reproduciendo los colores con gran fidelidad. Ideal para maquillaje.</li><li><strong>Luz Fría (6000K):</strong> Aporta una sensación de limpieza y energía. Es la más vendida y es perfecta para baños de estilo moderno y funcional.</li></ul></div>
                        <div class="ap-tech-guide-card"><h3>Potencia Lumínica (Lúmenes)</h3><p>Los lúmenes miden la cantidad total de luz que emite el espejo. A más lúmenes, más luminosidad.</p><p>Un espejo para un aseo pequeño puede ser suficiente con <strong>800-1200 lúmenes</strong>, mientras que para un baño principal o para maquillaje profesional, busca modelos por encima de los <strong>2000 lúmenes</strong>.</p></div>
                        <div class="ap-tech-guide-card"><h3>Índice de Reproducción Cromática (CRI)</h3><p>El CRI (en una escala de 0 a 100) mide la capacidad de una luz para mostrar los colores de los objetos de forma realista.</p><p>Para un baño, donde la fidelidad del color es clave al maquillarse o elegir la ropa, busca siempre un <strong>CRI superior a 80</strong>. Todos nuestros modelos cumplen este estándar de calidad.</p></div>
                    </div>
                </div>
            </section>
            <section class="ap-faq-section-luz adrihosan-luz-full-width-block">
                <div class="ap-faq-wrapper-luz">
                    <div class="ap-faq-header-luz"><h2>Instalación y Mantenimiento</h2><p>Resolvemos las dudas más prácticas para que solo tengas que preocuparte de disfrutar tu nuevo espejo.</p></div>
                    <div class="ap-faq-accordion-luz">
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>¿Necesita una instalación eléctrica especial?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Recomendamos que la conexión la realice un electricista cualificado. El espejo se conecta directamente a la red eléctrica, generalmente aprovechando el punto de luz existente del aplique del baño. No necesita transformadores externos, viene todo integrado.</p></div></div></div>
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>Si se funde el LED, ¿se puede reemplazar?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Sí. Aunque la vida útil de nuestras tiras LED supera las 50.000 horas (años de uso normal), están diseñadas para ser reemplazables. Disponemos de recambios para todos nuestros modelos, garantizando la durabilidad de tu inversión.</p></div></div></div>
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>¿Cómo se limpia sin dañar el sistema?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Es muy sencillo. Utiliza un paño de microfibra y tu limpiacristales habitual. El truco es no pulverizar el líquido directamente sobre el espejo, sino sobre el paño. Así evitas que la humedad pueda afectar a los componentes electrónicos.</p></div></div></div>
                        <div class="ap-faq-item-luz"><button class="ap-faq-question-luz"><span>¿Las medidas son Ancho x Alto?</span><span class="ap-faq-icon-luz">+</span></button><div class="ap-faq-answer-luz"><div class="ap-faq-answer-content-luz"><p>Sí, por norma general, todas las medidas de nuestros espejos se especifican siempre en formato <strong>Ancho x Alto</strong>. Por ejemplo, un espejo de 80x60 cm tiene 80 cm de ancho y 60 cm de alto. ¡Fíjate bien para que encaje perfecto sobre tu mueble!</p></div></div></div>
                    </div>
                </div>
            </section>
            <section class="ap-seo-content-section-luz adrihosan-luz-full-width-block">
                <div class="ap-seo-content-wrapper-luz">
                    <h2>Claves para Acertar con tu Espejo de Baño con Luz</h2>
                    <p>Comprar un <strong>espejo con luz para el baño</strong> es una de las decisiones de diseño más inteligentes que puedes tomar. No solo mejora radicalmente la funcionalidad del espacio, sino que se convierte en una pieza central que define el ambiente y el estilo. En Adrihosan, entendemos que cada detalle cuenta, y por eso te ofrecemos esta guía definitiva para que tu elección sea perfecta.</p>
                    <h3>Más Allá del Reflejo: La Luz como Herramienta Funcional</h3>
                    <p>La principal ventaja de un espejo con luz integrada es, sin duda, la calidad de la iluminación. A diferencia de los apliques tradicionales que crean sombras molestas, la luz integrada ofrece una iluminación uniforme y directa, esencial para tareas de precisión.</p>
                    <ul><li><strong>Luz Frontal:</strong> Ideal para el afeitado o el maquillaje. Proyecta una luz clara y directa sobre el rostro, eliminando cualquier sombra y permitiendo ver los detalles con una nitidez profesional.</li><li><strong>Retroiluminación (Luz Trasera):</strong> Perfecta para crear una atmósfera relajante. La luz se proyecta contra la pared, generando un halo que hace que el espejo parezca flotar. Es un recurso de diseño que aporta profundidad y un toque de lujo a cualquier baño.</li></ul>
                    <h3>La Tecnología que Simplifica tu Rutina: Antivaho y Más</h3>
                    <p>Un espejo de calidad va más allá de la luz. La tecnología antivaho es un extra de confort que marca la diferencia en el día a día. Consiste en una resistencia interna que calienta ligeramente la superficie del cristal, <strong>evitando que se empañe</strong> incluso después de una ducha caliente. Se acabaron las esperas o tener que pasar la toalla. Sales de la ducha y tu espejo está siempre listo para usar.</p>
                    <h3>¿Qué Temperatura de Color Elegir para tu Baño?</h3>
                    <p>La temperatura de la luz LED afecta directamente a cómo percibes los colores y el ambiente de tu baño. Las tres opciones principales ofrecen beneficios distintos:</p>
                    <ul><li><strong>Luz Cálida (2700K-3000K):</strong> Crea un ambiente acogedor y relajante, similar a la luz de una bombilla tradicional. Ideal para baños donde se busca una sensación de spa.</li><li><strong>Luz Neutra (4000K-4500K):</strong> Es la más versátil y recomendada. Se asemeja a la luz natural del día, por lo que reproduce los colores con gran fidelidad, siendo excelente tanto para el maquillaje como para la iluminación general.</li><li><strong>Luz Fría (5000K-6500K):</strong> Proporciona una luz muy blanca y estimulante, que genera una sensación de limpieza y energía. Es la opción más vendida y es perfecta para baños de estilo moderno y minimalista.</li></ul>
                </div>
            </section>
            <section class="ap-help-section-luz adrihosan-luz-full-width-block">
                <div class="ap-help-wrapper-luz">
                    <div class="ap-help-intro-luz"><img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan"><div><h2>¿Necesitas un último consejo?<span>Soy Ricardo, tu experto en iluminación para baños.</span></h2></div></div>
                    <div class="ap-contact-options-grid-luz">
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="ap-contact-option-luz"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="ap-contact-option-luz"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                        <a href="tel:+34961957136" class="ap-contact-option-luz"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                        <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20espejos%20con%20luz" class="ap-contact-option-luz"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                        <a href="mailto:hola@adrihosan.com" class="ap-contact-option-luz"><div class="icon">✉️</div><div class="label">Email</div></a>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
// COMENTADO - Duplicado del controlador maestro (línea 108)
// add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_espejos_luz', 21 );

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'ESPEJO REDONDO BAÑO' (ID: 4247)
 * =============================================================================
 ********************************************************************************/
if ( ! function_exists( 'adrihosan_contenido_superior_espejos_redondo' ) ) {
    function adrihosan_contenido_superior_espejos_redondo() {
        if ( is_product_category( 4247 ) && ! is_singular('product') ) {
            remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
            remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
            add_filter( 'woocommerce_show_page_title', '__return_false' );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
            ?>
            <section class="ap-hero-section-redondo adri-redondo-full-width">
                <div class="ap-hero-content-redondo">
                    
                <h1>Espejos Redondos para Baño</h1>
                
                    <p>Rompe con la rigidez de las líneas rectas. Un espejo redondo suaviza el ambiente, crea un punto focal de diseño y aporta un equilibrio único a tu espacio.</p>
                    <div class="ap-hero-buttons-redondo">
                        <a href="#beneficios-redondos" class="boton-adrihosan-redondo primary">Ver Beneficios</a>
                        <a href="#catalogo-redondos" class="boton-adrihosan-redondo secondary">Ver Modelos</a>
                    </div>
                </div>
            </section>
            <section id="beneficios-redondos" class="ap-benefits-section-redondo adri-redondo-full-width">
                <div class="ap-benefits-wrapper-redondo">
                    <div class="ap-benefits-header-redondo">
                        <h2>El Toque de Diseño que Transforma tu Baño</h2>
                        <p>Un espejo redondo no es solo una tendencia. Es una decisión de diseño inteligente que aporta armonía, dinamismo y un carácter único a tu espacio.</p>
                    </div>
                    <div class="ap-benefits-grid-redondo">
                        <div class="ap-benefit-card-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-bano-redondo-Adrihosan.jpg" alt="Baño con un espejo redondo que suaviza las líneas de un mueble de baño rectangular."><div class="ap-benefit-card-content"><h3>Suaviza el Espacio</h3><p>Los baños suelen estar dominados por ángulos rectos. Un espejo redondo rompe esa rigidez, aportando fluidez y una sensación de calma y equilibrio visual.</p></div></div>
                        <div class="ap-benefit-card-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-bano-redondo-Adrihosan-1.jpg" alt="Un gran espejo redondo con marco negro que actúa como punto focal sobre el lavabo."><div class="ap-benefit-card-content"><h3>Crea un Punto Focal</h3><p>Su forma singular atrae la mirada de forma natural, convirtiéndose en la pieza central de la decoración. Es perfecto para destacar la zona del lavabo y darle protagonismo.</p></div></div>
                        <div class="ap-benefit-card-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Espejo-bano-redondo-Adrihosan-2.jpg" alt="Baño con espejo redondo enmarcado, retroiluminado con luz LED blanca."><div class="ap-benefit-card-content"><h3>Versatilidad de Estilos</h3><p>Desde el minimalismo nórdico hasta el industrial o el boho-chic. Con o sin marco, con luz o sin ella, el espejo redondo se adapta y complementa cualquier estilo decorativo.</p></div></div>
                    </div>
                </div>
            </section>
            <section class="ap-filters-section-redondo adri-redondo-full-width">
                <div class="ap-filters-wrapper-redondo">
                    <div class="ap-filter-group-redondo">
                        <h3 class="ap-filter-group-title-redondo">Filtrar por Diámetro</h3>
                        <div class="ap-filter-buttons-redondo">
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=60" class="ap-filter-btn-redondo">60 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=70" class="ap-filter-btn-redondo">70 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=80" class="ap-filter-btn-redondo">80 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=90" class="ap-filter-btn-redondo">90 cm</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?ancho-espejo=100" class="ap-filter-btn-redondo">100 cm</a>
                        </div>
                    </div>
                    <div class="ap-filter-group-redondo">
                        <h3 class="ap-filter-group-title-redondo">Filtrar por Funcionalidad</h3>
                        <div class="ap-filter-buttons-redondo">
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?funcion-espejo=con-luz-led" class="ap-filter-btn-redondo">Con Luz LED</a>
                            <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/espejos/espejo-redondo-bano/?funcion-espejo=antivaho" class="ap-filter-btn-redondo">Con Antivaho</a>
                        </div>
                    </div>
                </div>
            </section>
            <div id="catalogo-redondos" style="scroll-margin-top: 20px;"></div>

            <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginaci&oacute;n) -->
            <div id="fe-products-wrapper">
            <?php
        }
    }
}
// Hook movido al master controller en functions.php (cat 4247)

if ( ! function_exists( 'adrihosan_contenido_inferior_espejos_redondo' ) ) {
    function adrihosan_contenido_inferior_espejos_redondo() {
        if ( is_product_category( 4247 ) && ! is_singular('product') ) {
            ?>
            </div><!-- /fe-products-wrapper -->
            <section class="ap-seo-section-redondo adri-redondo-full-width">
                <div class="ap-seo-wrapper-redondo">
                    <h2>El Espejo Redondo: La Guía Definitiva para tu Baño</h2>
                    <p>Elegir un <strong>espejo redondo para el baño</strong> es apostar por el diseño y la armonía. A diferencia de las formas tradicionales, un espejo circular tiene la capacidad única de suavizar el ambiente, romper con la rigidez de los azulejos y convertirse en el punto focal indiscutible de la estancia. Te ayudamos a entender por qué es la elección perfecta para ti.</p>
                    <h3>¿Cómo Elegir el Diámetro Ideal?</h3>
                    <p>El tamaño es la clave para que un espejo redondo luzca espectacular. La regla de oro es la proporción: el diámetro del espejo <strong>no debe superar el ancho del mueble de lavabo</strong>. Un espejo ligeramente más estrecho que el mueble crea un efecto visual equilibrado y profesional. Para lavabos dobles, dos espejos redondos idénticos son una solución simétrica y de gran impacto visual.</p>
                    <h3>La Versatilidad del Círculo en la Decoración</h3>
                    <p>Lejos de estar limitado a un solo estilo, el espejo redondo es increíblemente versátil. Un modelo <strong>sin marco</strong> es perfecto para un look minimalista o nórdico. Si buscas un toque más sofisticado o industrial, un <strong>espejo redondo con marco negro o dorado</strong> puede coordinarse con la grifería y los accesorios, creando un diseño cohesivo y lleno de personalidad.</p>
                </div>
            </section>
            <section class="ap-faq-section-redondo adri-redondo-full-width">
                <div class="ap-faq-wrapper-redondo">
                    <div class="ap-faq-header-redondo"><h2>Dudas Habituales sobre Espejos Redondos</h2><p>Resolvemos las preguntas más concretas para que tu elección sea tan clara como el reflejo de tu nuevo espejo.</p></div>
                    <div class="ap-faq-accordion-redondo">
                        <div class="ap-faq-item-redondo"><button class="ap-faq-question-redondo"><span>¿A qué altura debo colgar un espejo redondo?</span><span class="ap-faq-icon-redondo">+</span></button><div class="ap-faq-answer-redondo"><div class="ap-faq-answer-content-redondo"><p>La regla general es colgarlo de forma que el centro del espejo quede a la altura de los ojos de una persona de estatura media, aproximadamente a 1.65 metros del suelo. Sin embargo, lo más importante es que quede visualmente centrado entre el mueble de lavabo y el techo o cualquier aplique superior.</p></div></div></div>
                        <div class="ap-faq-item-redondo"><button class="ap-faq-question-redondo"><span>¿Un espejo redondo hace que el baño parezca más grande?</span><span class="ap-faq-icon-redondo">+</span></button><div class="ap-faq-answer-redondo"><div class="ap-faq-answer-content-redondo"><p>Sí, como cualquier espejo, ayuda a ampliar visualmente el espacio al reflejar la luz. La ventaja del espejo redondo es que sus curvas suaves rompen con la monotonía de las líneas rectas (azulejos, muebles), aportando una sensación de fluidez y dinamismo que puede hacer que el baño se perciba más acogedor y con un diseño más trabajado.</p></div></div></div>
                        <div class="ap-faq-item-redondo"><button class="ap-faq-question-redondo"><span>¿Cómo se limpia un espejo redondo sin marco?</span><span class="ap-faq-icon-redondo">+</span></button><div class="ap-faq-answer-redondo"><div class="ap-faq-answer-content-redondo"><p>La limpieza es igual que la de cualquier otro espejo. Usa un paño de microfibra y un limpiacristales. Para los bordes pulidos, simplemente asegúrate de que el paño esté bien escurrido para no dejar exceso de humedad. Es un proceso sencillo que mantendrá tu espejo impecable.</p></div></div></div>
                    </div>
                </div>
            </section>
            <section class="ap-help-section-redondo adri-redondo-full-width">
                <div class="ap-help-wrapper-redondo">
                    <div class="ap-help-intro-redondo"><img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan"><div><h2>¿Necesitas un último consejo?<span>Soy Ricardo, tu experto en espejos con estilo.</span></h2></div></div>
                    <div class="ap-contact-options-grid-redondo">
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="ap-contact-option-redondo"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                        <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="ap-contact-option-redondo"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                        <a href="tel:+34961957136" class="ap-contact-option-redondo"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                        <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20espejos%20redondos" class="ap-contact-option-redondo"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                        <a href="mailto:hola@adrihosan.com" class="ap-contact-option-redondo"><div class="icon">✉️</div><div class="label">Email</div></a>
                    </div>
                </div>
            </section>
            <?php
        }
    }
}
// Hook movido al master controller en functions.php (cat 4247)
