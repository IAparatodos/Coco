<?php
/**
 * Contenido de categoría - Espejos con Luz (4213)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

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

