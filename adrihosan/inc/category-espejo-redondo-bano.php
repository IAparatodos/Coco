<?php
/**
 * Category: Espejo Redondo Baño (ID: 4247)
 * @package Adrihosan
 *
 * Contenido movido aqui desde functions.php para seguir el patron del resto
 * de categorias (un inc/category-*.php por categoria). Clases ap-*-redondo
 * estiladas en assets/css/category-4247.css. Filtros via Filter Everything
 * Pro (mismo widget que el resto de categorias de espejos).
 */

// =============================================================================
// CATEGORÍA 4247 - ESPEJO REDONDO BAÑO
// =============================================================================
function adrihosan_espejo_redondo_bano_contenido_superior() {
    if ( ! is_product_category( 4247 ) || is_singular( 'product' ) ) {
        return;
    }
    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
    remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10 );
    ?>
    <section class="ap-hero-section-redondo adri-redondo-full-width">
        <div class="ap-hero-content-redondo">
            <h1><?php echo function_exists( 'adrihosan_h1_dinamico' ) ? adrihosan_h1_dinamico( 'Espejos Redondos para Baño' ) : 'Espejos Redondos para Baño'; ?></h1>
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
    <div id="catalogo-redondos" style="scroll-margin-top: 20px;"></div>
    <!-- Filter Everything Pro (mismo widget que el resto de categorias de espejos) -->
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode( '[fe_widget id="427306"]' ); ?></div>
    <!-- WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_espejo_redondo_bano_contenido_inferior() {
    if ( ! is_product_category( 4247 ) || is_singular( 'product' ) ) {
        return;
    }
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
