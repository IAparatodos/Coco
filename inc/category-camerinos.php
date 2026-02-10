<?php
/**
 * Category: Camerino Baño (ID: 2626)
 * @package Adrihosan
 */

/********************************************************************************
 * =============================================================================
 * INYECTAR BLOQUES PERSONALIZADOS EN CATEGORÍA 'CAMERINO BAÑO' (ID: 2626)
 * =============================================================================
 ********************************************************************************/

/**
 * -----------------------------------------------------------------------------
 * BLOQUE 1: Contenido SUPERIOR para Camerinos (Antes de los productos)
 * -----------------------------------------------------------------------------
 */
add_action( 'woocommerce_before_main_content', 'adrihosan_contenido_superior_camerinos', 10 );
function adrihosan_contenido_superior_camerinos() {

    if ( is_product_category( 2626 ) && ! is_singular('product') ) {
        // Limpiamos los elementos por defecto de WooCommerce
        remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
        remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
        add_filter( 'woocommerce_show_page_title', '__return_false' );
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
        ?>
        <section class="ac-hero-section adrihosan-full-width-block">
            <div class="ac-hero-content">
              
    <h1>Camerinos de Baño: El Reflejo del Orden</h1>
    
    
                <p>Gana espacio, elimina el desorden y eleva el diseño de tu baño con la solución 2 en 1 definitiva: espejo y almacenaje en una sola pieza.</p>
                <div class="ac-hero-buttons">
                    <a href="#catalogo-camerinos" class="boton-adrihosan primary">Ver Modelos</a>
                    <a href="#guia-compra" class="boton-adrihosan secondary">Cómo Elegir el Tuyo</a>
                </div>
            </div>
        </section>

        <section class="ac-benefits-section adrihosan-full-width-block">
            <div class="ac-benefits-wrapper">
                <div class="ac-benefits-header">
                    <h2>La Decisión Inteligente para tu Baño</h2>
                    <p>Un camerino no es solo un espejo con armario. Es la pieza clave para un baño más práctico, espacioso y siempre ordenado.</p>
                </div>
                <div class="ac-benefits-grid">
                    <div class="ac-benefit-card">
                        <div class="text-4xl">📦</div>
                        <h3>Despídete del Desorden</h3>
                        <p>Guarda todo lo que necesitas tener a mano pero fuera de la vista. Cepillos, cremas, medicamentos... todo organizado y protegido del polvo y la humedad.</p>
                    </div>
                    <div class="ac-benefit-card">
                        <div class="text-4xl">📏</div>
                        <h3>Doble Función, Mismo Espacio</h3>
                        <p>La solución perfecta para baños de cualquier tamaño. Disfruta de un espejo amplio y de un armario práctico sin sacrificar ni un centímetro de pared.</p>
                    </div>
                    <div class="ac-benefit-card">
                        <div class="text-4xl">✨</div>
                        <h3>Estética Limpia y Unificada</h3>
                        <p>Al combinar espejo y armario en una sola pieza, logras un look más despejado y minimalista, evitando la sobrecarga visual de tener múltiples elementos en la pared.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="guia-compra" class="ac-guia-compra adrihosan-full-width-block">
            <div class="ac-guia-wrapper">
                 <div class="ac-guia-header">
                    <h2>2 Claves para Acertar con tu Camerino</h2>
                    <p>Elegir el modelo adecuado es más fácil de lo que parece. Ten en cuenta estos dos puntos y tu elección será perfecta.</p>
                </div>
                <div class="ac-guia-grid">
                    <div class="ac-guide-card">
                        <h3>1. Mide tu Espacio</h3>
                        <p>La regla de oro: el ancho del camerino no debe superar el ancho del mueble de baño. Esto crea una proporción visual armónica. Si tienes un lavabo doble, dos camerinos idénticos son una solución simétrica y de gran impacto.</p>
                    </div>
                    <div class="ac-guide-card">
                        <h3>2. Piensa en la Iluminación</h3>
                        <p>Nuestros camerinos están diseñados sin luz integrada para darte total libertad. Puedes colocar un aplique de pared encima, dos a los lados o usar la luz general del techo, adaptando la iluminación a tu gusto y al estilo de tu baño.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="catalogo-camerinos" class="ac-filtros adrihosan-full-width-block">
            <div class="ac-filtros-wrapper">
                <div class="ac-filtros-header">
                    <h2>Encuentra tu Modelo Ideal</h2>
                </div>
                <div class="ac-filter-group">
                    <h3 class="ac-filter-group-title">Filtrar por Ancho</h3>
                    <div class="ac-filter-buttons">
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=60" class="ac-filter-btn">60 cm</a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=80" class="ac-filter-btn">80 cm</a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=100" class="ac-filter-btn">100 cm</a>
                        <a href="https://www.adrihosan.com/categoria-producto/muebles-de-bano/camerino-bano/?ancho-camerino=120" class="ac-filter-btn">120 cm</a>
                    </div>
                     <p class="text-sm">En el listado de productos encontrarás más medidas disponibles.</p>
                </div>
                 <p>Explora nuestra selección completa. Usa los filtros para encontrar el camerino que se adapta perfectamente a tu espacio y necesidades.</p>
            </div>
        </section>
        <?php
    }
}

/**
 * -----------------------------------------------------------------------------
 * BLOQUE 2: Contenido INFERIOR para Camerinos (Después de los productos)
 * -----------------------------------------------------------------------------
 */
add_action( 'woocommerce_after_shop_loop', 'adrihosan_contenido_inferior_camerinos', 22 );
function adrihosan_contenido_inferior_camerinos() {
    if ( is_product_category( 2626 ) && ! is_singular('product') ) {
        ?>
        <section class="ac-faq-section adrihosan-full-width-block">
            <div class="ac-faq-wrapper">
                <div class="ac-faq-header">
                    <h2>Dudas Frecuentes</h2>
                </div>
                <div class="ac-faq-accordion">
                    <div class="ac-faq-item">
                        <button class="ac-faq-question"><span>¿De qué material están hechos los estantes?</span><span class="ac-faq-icon">+</span></button>
                        <div class="ac-faq-answer"><p>Los estantes interiores son fijos para garantizar la máxima estabilidad y robustez. Están fabricados con materiales resistentes a la humedad, como el cristal o la melamina, lo que asegura su durabilidad en el ambiente del baño y facilita su limpieza.</p></div>
                    </div>
                    <div class="ac-faq-item">
                        <button class="ac-faq-question"><span>¿Son difíciles de instalar?</span><span class="ac-faq-icon">+</span></button>
                        <div class="ac-faq-answer"><p>La instalación es muy sencilla, similar a colgar un armario de pared. Vienen con los anclajes necesarios. Solo tienes que asegurarte de usar los tacos adecuados para tu tipo de pared (ladrillo, pladur, etc.) y comprobar que queda perfectamente nivelado.</p></div>
                    </div>
                    <div class="ac-faq-item">
                        <button class="ac-faq-question"><span>¿Puedo elegir el lado de apertura de la puerta?</span><span class="ac-faq-icon">+</span></button>
                        <div class="ac-faq-answer"><p>Si tu camerino es de una sola puerta, es importante que nos indiques en las observaciones de tu pedido hacia qué lado necesitas que abra (derecha o izquierda) para que se ajuste perfectamente a la distribución de tu baño.</p></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ac-seo-section adrihosan-full-width-block">
            <div class="ac-seo-wrapper">
                <div class="ac-seo-header">
                    <h2>Guía para Comprar tu Camerino de Baño Ideal</h2>
                </div>
                <p><strong>Comprar un camerino de baño</strong> es una de las decisiones más prácticas y rentables que puedes tomar al reformar o actualizar tu aseo. Este mueble 2 en 1, que combina un <strong>espejo con un armario</strong>, es la solución definitiva para optimizar el espacio, especialmente en baños pequeños donde cada centímetro cuenta.</p>
                <h3>El Camerino como Solución de Almacenaje</h3>
                <p>El principal beneficio de un <strong>armario espejo para baño</strong> es su capacidad para ocultar el desorden. En lugar de tener botes, cepillos y productos de higiene a la vista sobre la encimera, el camerino te ofrece un espacio de almacenaje discreto y accesible. Esto no solo facilita la limpieza, sino que crea una sensación de orden y amplitud visual, clave para un ambiente relajante.</p>
                <h3>¿Qué Tamaño de Camerino Elegir?</h3>
                <p>La proporción es fundamental. Como norma general, el <strong>ancho del camerino</strong> no debería ser mayor que el del mueble de lavabo sobre el que se instala. Esta simple regla asegura un conjunto visualmente equilibrado y armónico. Para baños con lavabos dobles, una opción muy popular es instalar dos camerinos idénticos, uno sobre cada seno, lo que aporta simetría y duplica el espacio de almacenaje personal.</p>
            </div>
        </section>

        <section class="ac-ayuda-section adrihosan-full-width-block">
            <div class="ac-ayuda-wrapper">
                <div class="ac-ayuda-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                    <div>
                        <h2>¿Necesitas ayuda para decidir?<span>Soy Ricardo. Hablemos y encontraremos el camerino perfecto para tu baño.</span></h2>
                    </div>
                </div>
                <div class="ac-contact-options-grid">
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="ac-contact-option"><div class="icon">📍</div><div class="label">Exposición</div></a>
                    <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="ac-contact-option"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                    <a href="tel:+34961957136" class="ac-contact-option"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                    <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="ac-contact-option"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                    <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="ac-contact-option"><div class="icon">📝</div><div class="label">Formulario</div></a>
                    <a href="mailto:hola@adrihosan.com" class="ac-contact-option"><div class="icon">✉️</div><div class="label">Email</div></a>
                </div>
            </div>
        </section>
        <?php
    }
}

