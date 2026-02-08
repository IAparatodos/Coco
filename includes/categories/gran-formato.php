<?php
/**
 * Contenido de categoría - Gran Formato (1844)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

function adrihosan_pilar_gran_formato_controller() {
    // Si NO estamos en la categoría 1844, salir.
    if ( ! is_product_category( 1844 ) || is_singular('product') ) {
        return;
    }

    // Limpieza Técnica
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    // Inyección de Contenido
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_gran_formato_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_gran_formato_inferior_final', 20 );
}

function adrihosan_gran_formato_superior_final() {
    ?>
    <section class="cer-hero-section adrihosan-full-width-block" style="position: relative; background-color: #102e35; background-image: linear-gradient(rgba(16, 46, 53, 0.35), rgba(16, 46, 53, 0.35)), url('https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg'); background-position: center center; background-size: cover; color: #fff; padding: 80px 20px; text-align: center;">
        <div class="cer-hero-content">
            <h1 style="font-family: 'Poppins', sans-serif; color:#4dd2d0; font-weight:800; font-size: 2.8rem; text-shadow: 0 2px 8px rgba(0,0,0,0.6);">Porcelánico Gran Formato</h1>
            <p style="font-family: 'Poppins'; font-size: 1.2rem; max-width: 800px; margin: 0 auto; text-shadow: 0 1px 4px rgba(0,0,0,0.5);">La revolución del espacio. Superficies continuas, mínimas juntas y máxima elegancia.</p>
            <div class="cer-hero-buttons" style="margin-top:35px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="#catalogo-xl-foco" class="btn-adri-master">Ver Catálogo XL</a>
                <a href="#bloque-filtros-visuales" class="btn-adri-master" style="background:transparent !important; border:2px solid #4dd2d0 !important; color:#4dd2d0 !important;">Filtrar por Estilo</a>
            </div>
        </div>
    </section>

    <div id="bloque-filtros-visuales" style="padding-top: 50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">Elige el Estilo</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/estilo-imitacion-marmol/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Mármol</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-cemento/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Cemento</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-piedra/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Piedra</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-suelo-imitacion-madera/" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Efecto Madera</h3></a>
        </div>
    </div>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Para encontrar tu mosaico ideal, selecciona las características que buscas y no olvides pulsar el botón <strong>"FILTRAR"</strong> para ver los resultados.</p>
    </div>

    <div id="destino-filtro-adria-gran-formato" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="426267"]'); ?></div>

    <div style="text-align: center; margin: 60px 0;">
        <h4 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; margin-bottom:30px; text-transform:uppercase; letter-spacing: 1px;">Medidas y Acabados Populares</h4>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; max-width: 1100px; margin: 0 auto;">
            <a href="https://www.adrihosan.com/atributo/formato-azulejo/60x120/" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">60x120 cm</a>
            <a href="https://www.adrihosan.com/atributo/formato-azulejo/120x120/" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">120x120 cm</a>
            <a href="https://www.adrihosan.com/atributo/azulejo-tipo/lamina-porcelanica/" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">Lámina XXL</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/textura-brillo/" class="btn-adri-master">Acabado Pulido</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/?filter_acabado=mate" class="btn-adri-master">Acabado Mate</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/slip-si/" class="btn-adri-master">Antideslizante (C3)</a>
        </div>
    </div>

    <div id="catalogo-xl-foco" style="scroll-margin-top: 140px; text-align: center; padding: 50px 0; border-top: 1px solid #eee;">
        <h2 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; text-transform: uppercase;">Catálogo Gran Formato</h2>
    </div>

    <style>.btn-adri-master { display: inline-block !important; background: #4dd2d0 !important; color: #fff !important; padding: 14px 24px !important; border-radius: 4px !important; text-decoration: none !important; font-family: 'Poppins', sans-serif !important; font-weight: 700 !important; text-transform: uppercase !important; font-size: 13px !important; transition: all 0.3s ease !important; box-shadow: 0 4px 6px rgba(0,0,0,0.1); } .btn-adri-master:hover { background: #3f6f7b !important; transform: translateY(-3px); color: #fff !important; } #bloque-filtros-visuales img:hover, .cer-hero-buttons img:hover { transform: scale(1.03); box-shadow: 0 8px 15px rgba(0,0,0,0.15); } @media (max-width: 768px) { .solo-movil-filtro { display: block !important; } #destino-filtro-adria-gran-formato .wpc-filters-open-button-container, #destino-filtro-adria-gran-formato .wpc-filters-open-button-container a, #destino-filtro-adria-gran-formato a.wpc-filters-open-button { display: block !important; visibility: visible !important; opacity: 1 !important; position: static !important; margin: 0 auto !important; width: 90% !important; background: #4dd2d0 !important; color: #fff !important; font-family: 'Poppins', sans-serif !important; font-weight: 800 !important; text-transform: uppercase !important; border-radius: 4px !important; padding: 15px 0 !important; text-align: center !important; border: none !important; box-shadow: 0 4px 10px rgba(77, 210, 208, 0.3) !important; } }</style>
    <script>(function($){"use strict";function moverBotonFiltroXL(){var $bot=$('.wpc-filters-open-button-container');var $hogar=$('#destino-filtro-adria-gran-formato');if($bot.length&&$hogar.length){if($hogar.children().length>0)return;var $el=$bot.first();$el.appendTo($hogar);$el.find('a').text('FILTRAR GRAN FORMATO');$('.wpc-filters-open-button-container').not($el).hide();}}$(document).ready(moverBotonFiltroXL);setTimeout(moverBotonFiltroXL,1500);function adrihosanFuerzaScrollXL(){var $dest=$('#catalogo-xl-foco');if($dest.length){$('html, body').animate({scrollTop:$dest.offset().top-120},800);}}$(document).on('click','.wpc-filters-submit-button',function(){setTimeout(adrihosanFuerzaScrollXL,1000);});$(document).on('feAfterFilterApply',function(){setTimeout(adrihosanFuerzaScrollXL,500);});})(jQuery);</script>
    <?php
}

function adrihosan_gran_formato_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( get_queried_object_id() ); ?>
        </div>
    </section>
    <section class="faq-section adrihosan-full-width-block" style="background: #f9f9f9; padding: 80px 0; font-family: 'Poppins'; border-top: 1px solid #eee;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; margin-bottom: 50px; font-weight: 800; font-size: 2.2rem; color: #102e35;">Preguntas Frecuentes sobre Gran Formato</h2>
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);"><p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Es difícil la instalación?</p><p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Requiere profesionales. Usa doble encolado y cuñas de nivelación.</p></div>
        </div>
    </section>
    <?php
}

/* ========================================================================== */
/* 2. PÁGINA PILAR PORCELÁNICO EXTRAFINO (ID 2510) - VERSIÓN FINAL */
/* ========================================================================== */

// DESACTIVADO - Migrado al Controlador Maestro (línea 33)
// add_action( 'wp', 'adrihosan_pilar_extrafino_controller' );

