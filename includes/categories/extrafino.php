<?php
/**
 * Contenido de categoría - Extrafino (2510)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

function adrihosan_pilar_extrafino_controller() {
    if ( ! is_product_category( 2510 ) || is_singular('product') ) {
        return;
    }
    // Limpieza Técnica
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    // Inyección de Contenido
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_extrafino_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_extrafino_inferior_final', 20 );
}

function adrihosan_extrafino_superior_final() {
    ?>
    <section class="cer-hero-section adrihosan-full-width-block" style="position: relative; background-color: #102e35; background-image: linear-gradient(rgba(16, 46, 53, 0.50), rgba(16, 46, 53, 0.50)), url('https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg'); background-position: center center; background-size: cover; color: #fff; padding: 80px 20px; text-align: center;">
        <div class="cer-hero-content">
            <h1 style="font-family: 'Poppins', sans-serif; color:#4dd2d0; font-weight:800; font-size: 2.8rem; text-shadow: 0 2px 8px rgba(0,0,0,0.6);">Porcelánico Extrafino: Reforma Sin Escombros</h1>
            <p style="font-family: 'Poppins'; font-size: 1.2rem; max-width: 800px; margin: 0 auto; text-shadow: 0 1px 4px rgba(0,0,0,0.5);">Cambia tu suelo sin levantar el antiguo. Máxima dureza en mínimo espesor (3mm, 5mm, 6mm).</p>
            <div class="cer-hero-buttons" style="margin-top:35px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="#catalogo-extrafino-foco" class="btn-adri-master">Ver Catálogo</a>
                <a href="#bloque-filtros-visuales" class="btn-adri-master" style="background:transparent !important; border:2px solid #4dd2d0 !important; color:#4dd2d0 !important;">Filtrar por Estilo</a>
            </div>
        </div>
    </section>

    <div id="bloque-filtros-visuales" style="padding-top: 50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">Elige el Acabado de tu Reforma</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/estilo-suelos-imitacion-marmol/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Mármol</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-cemento/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Cemento</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/?filter_efecto=piedra" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Piedra</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/estilo-basicos/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/porcelanico-gran-formato-colores-puros.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Colores Puros</h3></a>
        </div>
    </div>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona el acabado y espesor que necesitas, y recuerda pulsar <strong>"FILTRAR"</strong> para ver los porcelánicos disponibles.</p>
    </div>

    <div id="destino-filtro-adria-extrafino" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <div id="catalogo-extrafino-foco" style="scroll-margin-top: 140px; text-align: center; padding: 50px 0; border-top: 1px solid #eee;">
        <h2 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; text-transform: uppercase;">Catálogo Porcelánico Extrafino</h2>
    </div>


    <?php
}

function adrihosan_extrafino_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( get_queried_object_id() ); ?>
        </div>
    </section>
    <section class="faq-section adrihosan-full-width-block" style="background: #f9f9f9; padding: 80px 0; font-family: 'Poppins'; border-top: 1px solid #eee;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; margin-bottom: 50px; font-weight: 800; font-size: 2.2rem; color: #102e35;">Preguntas Frecuentes sobre Lámina Porcelánica</h2>
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);"><p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Qué espesor debo elegir?</p><p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Para paredes 3mm. Para suelos (pavimento), recomendamos 5mm o 6mm.</p></div>
        </div>
    </section>
    <section class="contact-help-common adrihosan-full-width-block" style="background: #102e35; color: #fff; padding: 90px 0;">
        <div class="contact-help-wrapper" style="max-width: 1150px; margin: 0 auto; padding: 0 25px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
            <div class="contact-intro" style="display: flex; align-items: center; gap: 30px; flex: 1; min-width: 320px;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan" style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; border: 4px solid #4dd2d0; flex-shrink: 0; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                <div>
                    <h2 style="color: #4dd2d0; margin-bottom: 12px; font-size: 2.4rem; font-weight: 800; font-family: 'Poppins', sans-serif;">¿Dudas técnicas?</h2>
                    <p style="font-size: 1.2rem; line-height: 1.6; font-family: 'Poppins', sans-serif; opacity: 0.9;">Soy Ricardo. El extrafino requiere una instalación precisa. Llámame al <strong>96 195 71 36</strong>.</p>
                </div>
            </div>
            <div class="contact-options-grid-common" style="display: flex; gap: 20px;">
                <a href="tel:+34961957136" style="background: #4dd2d0; color: #102e35; padding: 20px 40px; border-radius: 8px; text-decoration: none; font-weight: 800; text-align: center; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(77, 210, 208, 0.3);">Llamar</a>
                <a href="https://api.whatsapp.com/send?phone=34961957136" style="background: #25d366; color: #fff; padding: 20px 40px; border-radius: 8px; text-decoration: none; font-weight: 800; text-align: center; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);">WhatsApp</a>
            </div>
        </div>
    </section>
    <?php
}

/* ========================================================================== */
/* 3. PÁGINA PILAR AZULEJO METRO (ID 2093) - VERSIÓN FINAL */
/* ========================================================================== */

// DESACTIVADO - Migrado al Controlador Maestro (línea 33)
// add_action( 'wp', 'adrihosan_pilar_metro_controller' );

