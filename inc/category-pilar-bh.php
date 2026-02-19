<?php
/**
 * Category: Baldosa Hidráulica / Pilar BH (ID: 4564)
 * @package Adrihosan
 */

/******************************************************************************
 * =============================================================================
 * PÁGINA PILAR "BALDOSA HIDRÁULICA" (ID: 4564) - VERSIÓN REORGANIZADA
 * Basada en la estructura de la categoría 4865 (Baño)
 * =============================================================================
 ******************************************************************************/

/**
 * Función principal que controla toda la lógica de la página Pilar Baldosa Hidráulica.
 */
function adrihosan_pilar_bh_controller() {
    // ID numérico de la categoría "Baldosa Hidráulica" (Página Pilar).
    $category_id = 4564;

    // Si no estamos en la categoría correcta, no hacemos nada.
    if ( ! is_product_category( $category_id ) ) {
        return;
    }

    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

    // --- Elimina elementos por defecto de WooCommerce ---
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    remove_all_actions( 'woocommerce_archive_description' );
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_no_products_found', 'wc_no_products_found', 10 );

    // --- Inyecta contenido personalizado ---
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_pilar_bh_contenido_superior', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_pilar_bh_contenido_inferior', 99 );
}
// Controller cat 4564 - movido al master controller en functions.php

/**
 * Inyecta el contenido superior: Hero, Características, Hub y Best Sellers.
 */
function adrihosan_pilar_bh_contenido_superior() {
    $hero_img_url = get_term_meta( get_queried_object_id(), 'bh_hero_img_url', true ) ?: 'https://www.adrihosan.com/wp-content/uploads/2023/04/fa4a5c7e-d682-41f2-a4a3-c2eafa4fea9d.jpg';
    ?>
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('<?php echo esc_url( $hero_img_url ); ?>');">
        <div class="hero-content">
            <h1>Baldosa Hidr&aacute;ulica</h1>
            <p>Descubre el universo del suelo hidr&aacute;ulico. Elige entre la autenticidad de la baldosa artesanal o la resistencia del porcel&aacute;nico de imitaci&oacute;n. La soluci&oacute;n perfecta para tu proyecto est&aacute; aqu&iacute;.</p>
            <div class="hero-buttons">
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/" class="hero-btn primary">Ver Colecci&oacute;n Original</a>
                <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="hero-btn secondary">Ver Colecci&oacute;n Imitaci&oacute;n</a>
            </div>
        </div>
    </section>

    <section class="bho-features-section adrihosan-full-width-block">
        <div class="bho-features-wrapper">
            <div class="bho-feature-item"><div class="icon">🎨</div><h3>Dise&ntilde;os &Uacute;nicos</h3><p>Desde patrones geom&eacute;tricos hasta motivos florales. Una colecci&oacute;n que abarca siglos de historia y tendencias actuales.</p></div>
            <div class="bho-feature-item"><div class="icon">🏛️</div><h3>Tradici&oacute;n Artesanal</h3><p>La baldosa original mantiene viva la t&eacute;cnica centenaria del cemento pigmentado, con todo su car&aacute;cter e irregularidad.</p></div>
            <div class="bho-feature-item"><div class="icon">🛡️</div><h3>Resistencia Moderna</h3><p>El porcel&aacute;nico de imitaci&oacute;n ofrece la est&eacute;tica cl&aacute;sica con la durabilidad y el cero mantenimiento del siglo XXI.</p></div>
            <div class="bho-feature-item"><div class="icon">🏠</div><h3>Para Cada Espacio</h3><p>Ba&ntilde;os, cocinas, salones o exteriores. Tenemos la soluci&oacute;n hidr&aacute;ulica perfecta para cada rinc&oacute;n de tu hogar.</p></div>
        </div>
    </section>

    <section class="bho-hub-section adrihosan-full-width-block">
        <div class="bho-hub-wrapper">
            <div class="bho-hub-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/suelo-hidraulico-exterior-Adrihosan-5.jpg" alt="Detalle de una baldosa hidr&aacute;ulica original mostrando su textura artesanal." class="bho-hub-card-img">
                <div class="bho-hub-card-content">
                    <h2>Baldosa Hidr&aacute;ulica Original</h2>
                    <p>El valor de lo aut&eacute;ntico. Piezas artesanales de cemento pigmentado con una textura y profundidad de color inigualables. El alma de la tradici&oacute;n en tu suelo.</p>
                    <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/" class="bho-hub-btn">Ver Colecci&oacute;n Original</a>
                </div>
            </div>
            <div class="bho-hub-card">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/09/Azulejos-Hidraulicos-para-Pared.jpg" alt="Ambiente de un ba&ntilde;o moderno con azulejo porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico en la pared." class="bho-hub-card-img">
                <div class="bho-hub-card-content">
                    <h2>Porcel&aacute;nico Imitaci&oacute;n Hidr&aacute;ulico</h2>
                    <p>La est&eacute;tica atemporal con la resistencia del porcel&aacute;nico. Dise&ntilde;os precisos, cero mantenimiento y una durabilidad a prueba de todo. La elecci&oacute;n inteligente para el d&iacute;a a d&iacute;a.</p>
                    <a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="bho-hub-btn">Ver Colecci&oacute;n Imitaci&oacute;n</a>
                </div>
            </div>
        </div>
    </section>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> &iquest;No sabes cu&aacute;l elegir? La <strong>baldosa original</strong> es para amantes de lo artesanal que disfrutan cuidando su suelo. El <strong>porcel&aacute;nico</strong> es para quienes buscan practicidad sin renunciar al dise&ntilde;o.</p>
    </div>

    <section class="ap-product-header-section adrihosan-full-width-block" style="padding-bottom: 0;">
        <div class="ap-product-header-wrapper">
            <h2>Nuestros Best Sellers en Hidr&aacute;ulico</h2>
            <p>Los modelos favoritos de nuestros clientes, seleccionados por su dise&ntilde;o y calidad.</p>
        </div>

        <div id="bh-productos-visibles" style="max-width: 1200px; margin: 20px auto 0; padding: 0 15px;">
            <?php
            echo do_shortcode('[products limit="6" columns="3" best_selling="true" category="baldosa-hidraulica"]');
            ?>
        </div>
    </section>

    <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginaci&oacute;n) -->
    <div id="fe-products-wrapper">
    <?php
}
/**
 * Inyecta el contenido inferior: Tabla Comparativa, SEO, FAQ y Contacto.
 */
function adrihosan_pilar_bh_contenido_inferior() {
    if ( is_product_category( 4564 ) && ! is_singular('product') ) {
        ?>
        </div><!-- /fe-products-wrapper -->
        <section class="bhp-comparison-section adrihosan-full-width-block">
            <div class="bhp-comparison-wrapper">
                <h2>Original vs. Imitaci&oacute;n: Ficha T&eacute;cnica Comparativa</h2>
                <table class="bhp-comparison-table">
                    <thead><tr><th>Caracter&iacute;stica</th><th>Baldosa Hidr&aacute;ulica Original</th><th>Porcel&aacute;nico Imitaci&oacute;n Hidr&aacute;ulico</th></tr></thead>
                    <tbody>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Material</strong></td><td data-label="Original">Cemento pigmentado artesanal</td><td data-label="Imitaci&oacute;n">Gres porcel&aacute;nico industrial</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Resistencia a Manchas</strong></td><td data-label="Original">Baja (Material poroso, requiere sellado)</td><td data-label="Imitaci&oacute;n">Total (Nula absorci&oacute;n de agua)</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Mantenimiento</strong></td><td data-label="Original">Delicado, solo con jabones neutros</td><td data-label="Imitaci&oacute;n">Nulo, apto para cualquier producto de limpieza</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Durabilidad</strong></td><td data-label="Original">Alta, envejece y adquiere p&aacute;tina con el tiempo</td><td data-label="Imitaci&oacute;n">Extrema, inalterable al paso del tiempo y al desgaste</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Textura</strong></td><td data-label="Original">T&aacute;ctil, con la irregularidad propia de lo artesanal</td><td data-label="Imitaci&oacute;n">Lisa y uniforme, reproduce el dise&ntilde;o visualmente</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Uso Ideal</strong></td><td data-label="Original">Zonas de bajo tr&aacute;nsito, espacios con encanto, paredes</td><td data-label="Imitaci&oacute;n">Cocinas, ba&ntilde;os, locales comerciales, exteriores</td></tr>
                        <tr><td data-label="Caracter&iacute;stica"><strong>Precio</strong></td><td data-label="Original">Elevado</td><td data-label="Imitaci&oacute;n">Asequible</td></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="ocultar-en-movil"><strong>Ver Opciones</strong></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/original/" class="boton-adrihosan primary">Ver Originales</a></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/baldosa-hidraulica/imitacion/" class="boton-adrihosan primary">Ver Imitaci&oacute;n</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>

        <?php
        $descripcion_editor = category_description();
        if ( ! empty( $descripcion_editor ) ) {
            echo '<section class="bho-guide-section">'; // SIN adrihosan-full-width-block
            echo '    <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">';
            echo '        <div class="term-description-dinamica" style="text-align: left; font-family: \'Poppins\'; color: #3f6f7b; line-height: 1.8;">';
            echo              $descripcion_editor;
            echo '        </div>';
            echo '    </div>';
            echo '</section>';
        }
        ?>

        <section class="faq-section-common adrihosan-full-width-block">
            <div class="faq-wrapper-common">
                <h2 class="faq-main-title-common">Dudas Frecuentes sobre Suelos Hidr&aacute;ulicos</h2>
                <div class="faq-items-wrapper">
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Cu&aacute;l es m&aacute;s caro, el original o la imitaci&oacute;n?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>La <strong>baldosa hidr&aacute;ulica original</strong> es significativamente m&aacute;s cara debido a su proceso de fabricaci&oacute;n artesanal. El <strong>azulejo porcel&aacute;nico de imitaci&oacute;n</strong>, al ser de producci&oacute;n industrial, ofrece una alternativa mucho m&aacute;s asequible sin renunciar al dise&ntilde;o.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Qu&eacute; opci&oacute;n es mejor para una cocina?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Para la cocina, recomendamos sin dudarlo el <strong>porcel&aacute;nico imitaci&oacute;n hidr&aacute;ulico</strong>. Su resistencia a las manchas de aceite, vino o grasa y su facilidad de limpieza con cualquier producto lo convierten en la opci&oacute;n m&aacute;s pr&aacute;ctica y duradera para esta zona tan exigente.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Y para un ba&ntilde;o con ducha?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>Igualmente, el <strong>porcel&aacute;nico</strong> es la elecci&oacute;n correcta. Su nula absorci&oacute;n de agua lo hace 100% impermeable, ideal para suelos de ba&ntilde;o e incluso para el interior de la ducha, donde la baldosa de cemento original podr&iacute;a dar problemas de humedad a largo plazo si no se mantiene un sellado perfecto.</p></div></div>
                    <div class="faq-item-common"><button class="faq-question-common"><span>&iquest;Puedo usar calefacci&oacute;n por suelo radiante con ambos?</span><span class="faq-icon-common">+</span></button><div class="faq-answer-common"><p>S&iacute;, ambos materiales son excelentes conductores t&eacute;rmicos y totalmente compatibles con sistemas de <strong>calefacci&oacute;n por suelo radiante</strong>. Distribuyen el calor de forma eficiente y uniforme, aportando un gran confort a la estancia.</p></div></div>
                </div>
            </div>
        </section>

        <section id="contacto" class="contact-help-common adrihosan-full-width-block">
            <div class="contact-help-wrapper">
                <div class="contact-intro">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo, experto en baldosa hidr&aacute;ulica de Adrihosan">
                    <div><h2>&iquest;Necesitas ayuda? <span>Soy Ricardo, tu experto en materiales.</span></h2></div>
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

