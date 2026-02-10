<?php
/**
 * Categories: Cerámica (62), Porcelánico (1844), Gran Formato (2510), Extrafino (2093), Metro (2093)
 * @package Adrihosan
 */

// =============================================================================
// FIN LANDING SUELO IMITACIÓN MADERA
// =============================================================================

/* ========================================================================== */
/* ESTILOS FINALES PARA LA TABLA DE COMPARACIÓN (MÓVIL) */
/* ========================================================================== */
add_action('wp_head', function() {
    // Solo aplicamos esto en la categoría Pilar Hidráulico (ID 4564)
    if ( is_product_category( 4564 ) ) {
        ?>
        <style>
        @media (max-width: 768px) {
            
            /* 1. OCULTAR EL TEXTO "VER OPCIONES" (Usando tu nueva clase) */
            .ocultar-en-movil {
                display: none !important;
            }

            /* 2. PONER LOS BOTONES EN FILA HORIZONTAL */
            .bhp-comparison-table tfoot tr {
                display: flex !important;
                flex-direction: row !important;
                width: 100% !important;
                gap: 10px !important;
                padding: 10px 0 !important;
                border: none !important;
            }

            /* 3. QUE CADA BOTÓN OCUPE EXACTAMENTE LA MITAD */
            .bhp-comparison-table tfoot td {
                display: block !important;
                width: 50% !important;
                flex: 1 1 50% !important; 
                padding: 0 !important;
                margin: 0 !important;
                border: none !important;
                background: transparent !important;
            }

            /* 4. LIMPIEZA DE CUALQUIER TEXTO AUTOMÁTICO */
            .bhp-comparison-table tfoot td::before {
                content: none !important;
                display: none !important;
            }

            /* 5. DISEÑO DE LOS BOTONES */
            .bhp-comparison-table tfoot .boton-adrihosan {
                width: 100% !important;
                display: flex !important;
                justify-content: center;
                align-items: center;
                height: 42px !important;
                font-size: 11px !important;
                margin: 0 !important;
                text-align: center !important;
                padding: 0 5px !important;
            }
        }
        </style>
        <?php
    }
}, 100);

/* ========================================================================== */
/* PÁGINA PILAR CERÁMICA (ID 62) - VERSIÓN MAESTRA TOTAL CON SEO DINÁMICO */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_ceramica_definitiva_controller' );

function adrihosan_ceramica_definitiva_controller() {
    if ( ! is_product_category( 62 ) || is_singular('product') ) {
        return;
    }

    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_ceramica_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_ceramica_inferior_final', 20 );
}

/* ========================================================================== */
/* EL CEREBRO SUPERIOR: HERO BLINDADO + FIX IMAGEN + TRANSPLANTE              */
/* ========================================================================== */

function adrihosan_ceramica_superior_final() {
    ?>
    <section class="cer-hero-section adrihosan-full-width-block" style="
        position: relative;
        background-color: #102e35;
        background-image: linear-gradient(rgba(16, 46, 53, 0.35), rgba(16, 46, 53, 0.35)), url('https://www.adrihosan.com/wp-content/uploads/2026/01/IMAGEN-1920-X-600-3.jpg');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        color: #fff;
        padding: 80px 20px;
        text-align: center;">
        
        <div class="cer-hero-content">
            <h1 style="font-family: 'Poppins', sans-serif; color:#4dd2d0; font-weight:800; font-size: 2.8rem; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Cerámica: El Origen de tu Reforma</h1>
            <p style="font-family: 'Poppins'; font-size: 1.2rem; max-width: 800px; margin: 0 auto;">Suelos y revestimientos que definen tu hogar con la calidad técnica de Adrihosan.</p>
            <div class="cer-hero-buttons" style="margin-top:35px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="#catalogo-ceramica-foco" class="btn-adri-master">Ver Catálogo Completo</a>
                <a href="#bloque-filtros-visuales" class="btn-adri-master" style="background:transparent !important; border:2px solid #4dd2d0 !important; color:#4dd2d0 !important;">Filtrar por Estilo</a>
            </div>
        </div>
    </section>

    <div id="bloque-filtros-visuales" style="padding-top: 50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">¿Para qué estancia lo buscas?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-bano-600-x-400-1.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Baño</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cocina-600-x-400.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Cocina</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-terraza-600-x-400.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Terraza</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos-para-piscinas/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/azulejos-piscinas-adrihosan.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Piscina</h3>
            </a>
        </div>
    </div>

    <div style="padding-top: 60px; margin-bottom:50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">Elige el efecto visual</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-suelo-imitacion-madera/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Madera</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-suelos-imitacion-marmol/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Mármol</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-piedra/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Piedra</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-cemento/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Cemento</h3>
            </a>
        </div>
    </div>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;">
            <strong>¡Consejo de AdrIA!</strong> Para encontrar tu azulejo ideal, selecciona las características y no olvides pinchar en el botón <strong>"FILTRAR"</strong>.
        </p>
    </div>

    <div id="destino-filtro-adria" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;">
        </div>

    <div class="filter-container-master" style="margin-bottom:50px;">
       <?php echo do_shortcode('[fe_widget id="425985"]'); ?>
    </div>

    <div style="text-align: center; margin: 60px 0;">
        <h4 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; margin-bottom:30px; text-transform:uppercase; letter-spacing: 1px;">Selección por Colecciones y Formatos</h4>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; max-width: 1100px; margin: 0 auto;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/" class="btn-adri-master">Suelo Porcelánico</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/" class="btn-adri-master">Gran Formato</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/" class="btn-adri-master">Porcelánico Extrafino</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/" class="btn-adri-master">Azulejo Metro</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-hexagonales/" class="btn-adri-master">Azulejos Hexagonales</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-decorativos/" class="btn-adri-master">Azulejos Decorativos</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejo-mosaico/" class="btn-adri-master">Mosaicos</a>
        </div>
    </div>

    <div id="catalogo-ceramica-foco" style="scroll-margin-top: 140px; text-align: center; padding: 50px 0; border-top: 1px solid #eee;">
        <h2 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; text-transform: uppercase;">Catálogo Completo</h2>
    </div>


    <?php
}

/**
 * BLOQUE INFERIOR: SEO DINÁMICO, FAQs y Contacto
 */
function adrihosan_ceramica_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( 62 ); ?>
        </div>
    </section>

    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas Frecuentes sobre Cerámica</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Qué mantenimiento requiere el suelo porcelánico?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Solo requiere limpieza regular con agua y detergente neutro. No necesita ceras ni barnices.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>¿Es necesario dejar junta en azulejos rectificados?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Sí, es vital dejar una junta mínima de entre 1.5mm y 2mm para absorber dilataciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan">
                <div><h2>¿Necesitas asesoramiento sincero?<span>Soy Ricardo, y estoy aquí para ayudarte.</span></h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20cerámica" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}

add_action( 'wp_head', 'adrihosan_kill_theme_stuff_cat62', 999 );
function adrihosan_kill_theme_stuff_cat62() {
    if ( is_product_category( 62 ) ) {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper { display: none !important; }</style>';
    }
}

/* ========================================================================== */
/* PÁGINA PILAR PORCELÁNICO (ID 2410) - VERSIÓN MAESTRA 2026 */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_pilar_porcelanico_controller' );

function adrihosan_pilar_porcelanico_controller() {
    // Si NO estamos en la categoría 2410, no hacemos nada.
    if ( ! is_product_category( 2410 ) || is_singular('product') ) {
        return;
    }

    // 1. LIMPIEZA TÉCNICA (Eliminar elementos por defecto)
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    // 2. INYECCIÓN DE CONTENIDO PERSONALIZADO
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_porcelanico_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_porcelanico_inferior_final', 20 );
    
    // 3. CSS DE EMERGENCIA (Para ocultar filtros nativos del tema y evitar el desastre visual)
    add_action( 'wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter, .filter-wrapper { display: none !important; }</style>';
    });
}

/**
 * BLOQUE SUPERIOR: Hero, Hubs Visuales, JS Transplante y Filtros
 */
function adrihosan_porcelanico_superior_final() {
    ?>
    <section class="cer-hero-section adrihosan-full-width-block" style="
        position: relative;
        background-color: #102e35;
        /* IMPORTANTE: Cambia esta URL por la imagen específica de Porcelánico */
        background-image: linear-gradient(rgba(16, 46, 53, 0.35), rgba(16, 46, 53, 0.35)), url('https://www.adrihosan.com/wp-content/uploads/2026/01/IMAGEN-1920-X-600-3.jpg');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        color: #fff;
        padding: 80px 20px;
        text-align: center;">
        
        <div class="cer-hero-content">
            <h1 style="font-family: 'Poppins', sans-serif; color:#4dd2d0; font-weight:800; font-size: 2.8rem; text-shadow: 0 2px 8px rgba(0,0,0,0.6);">Gres Porcelánico: La Base de tu Hogar</h1>
            <p style="font-family: 'Poppins'; font-size: 1.2rem; max-width: 800px; margin: 0 auto; text-shadow: 0 1px 4px rgba(0,0,0,0.5);">Resistencia extrema, diseño impecable y mantenimiento cero. El suelo definitivo.</p>
            <div class="cer-hero-buttons" style="margin-top:35px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="#catalogo-porcelanico-foco" class="btn-adri-master">Ver Catálogo</a>
                <a href="#bloque-filtros-visuales" class="btn-adri-master" style="background:transparent !important; border:2px solid #4dd2d0 !important; color:#4dd2d0 !important;">Filtrar por Uso</a>
            </div>
        </div>
    </section>

    <div id="bloque-filtros-visuales" style="padding-top: 50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">¿Dónde lo vas a instalar?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/estancia-cocina/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cocina-600-x-400.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Cocina</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/estancia-bano/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-bano-600-x-400-1.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Baño</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/estancia-terraza/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-terraza-600-x-400.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Exterior</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/salon/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg" style="width:100%; border-radius:8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Salón</h3>
            </a>
        </div>
    </div>

    <div style="padding-top: 60px; margin-bottom:50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">Elige el Efecto</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelo-imitacion-madera/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-madera-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Madera</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanicos-imitacion-marmol/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-marmol-600-x-400-1.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Mármol</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-piedra/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-piedra-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Piedra</h3>
            </a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/estilo-cemento/" style="text-decoration:none; text-align:center;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2026/01/imagen-cemento-600-x-400.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;">
                <h3 style="color:#102e35; font-family:'Poppins'; margin-top:10px;">Efecto Cemento</h3>
            </a>
        </div>
    </div>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;">
            <strong>¡Consejo de AdrIA!</strong> ¿Buscas un suelo sin juntas visibles? Selecciona el filtro <strong>"Rectificado"</strong> y pulsa <strong>"FILTRAR"</strong>.
        </p>
    </div>

    <div id="destino-filtro-adria-porcelanico" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;">
        </div>

    <div style="text-align: center; margin: 60px 0;">
        <h4 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; margin-bottom:30px; text-transform:uppercase; letter-spacing: 1px;">Colecciones Especiales</h4>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; max-width: 1100px; margin: 0 auto;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-gran-formato/" class="btn-adri-master">Gran Formato</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/porcelanico-extrafino/" class="btn-adri-master">Porcelánico Extrafino</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/azulejos-exterior/" class="btn-adri-master">Antideslizante C3</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/porcelanico/textura-brillo-2/" class="btn-adri-master">Acabado Pulido</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/pavimentos/suelos-rusticos/" class="btn-adri-master">Estilo Rústico</a>
        </div>
    </div>

    <div id="catalogo-porcelanico-foco" style="scroll-margin-top: 140px; text-align: center; padding: 50px 0; border-top: 1px solid #eee;">
        <h2 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; text-transform: uppercase;">Catálogo de Gres Porcelánico</h2>
    </div>

    <style>
        .btn-adri-master { display: inline-block !important; background: #4dd2d0 !important; color: #fff !important; padding: 14px 24px !important; border-radius: 4px !important; text-decoration: none !important; font-family: 'Poppins', sans-serif !important; font-weight: 700 !important; text-transform: uppercase !important; font-size: 13px !important; transition: all 0.3s ease !important; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .btn-adri-master:hover { background: #3f6f7b !important; transform: translateY(-3px); color: #fff !important; }
        
        #bloque-filtros-visuales img:hover, .cer-hero-buttons img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
        }

        @media (max-width: 768px) {
            .solo-movil-filtro { display: block !important; }

            /* FORZAMOS EL DISEÑO BONITO AL BOTÓN QUE VENGA */
            #destino-filtro-adria-porcelanico .wpc-filters-open-button-container,
            #destino-filtro-adria-porcelanico .wpc-filters-open-button-container a,
            #destino-filtro-adria-porcelanico a.wpc-filters-open-button {
                display: block !important;
                visibility: visible !important;
                opacity: 1 !important;
                position: static !important;
                margin: 0 auto !important;
                width: 90% !important;
                background: #4dd2d0 !important;
                color: #fff !important;
                font-family: 'Poppins', sans-serif !important;
                font-weight: 800 !important;
                text-transform: uppercase !important;
                border-radius: 4px !important;
                padding: 15px 0 !important;
                text-align: center !important;
                border: none !important;
                box-shadow: 0 4px 10px rgba(77, 210, 208, 0.3) !important;
            }
        }
    </style>

    <script>
    (function($) {
        "use strict";

        // A. TRANSPLANTE DE BOTÓN (Con ID específico para esta categoría)
        function moverBotonFiltroPorcelanico() {
            var $botonesOriginales = $('.wpc-filters-open-button-container');
            var $nuevoHogar = $('#destino-filtro-adria-porcelanico');

            if ($botonesOriginales.length && $nuevoHogar.length) {
                if ($nuevoHogar.children().length > 0) return;
                var $elElegido = $botonesOriginales.first();
                $elElegido.appendTo($nuevoHogar);
                $elElegido.find('a').text('FILTRAR PORCELÁNICOS'); // Texto personalizado
                $('.wpc-filters-open-button-container').not($elElegido).hide();
            }
        }
        $(document).ready(moverBotonFiltroPorcelanico);
        setTimeout(moverBotonFiltroPorcelanico, 1500);

        // B. SCROLL AUTOMÁTICO
        function adrihosanFuerzaScrollPorcelanico() {
            var $destino = $('#catalogo-porcelanico-foco');
            if ($destino.length) {
                $('html, body').animate({ scrollTop: $destino.offset().top - 120 }, 800);
            }
        }
        $(document).on('click', '.wpc-filters-submit-button', function() {
            setTimeout(adrihosanFuerzaScrollPorcelanico, 1000);
        });
        $(document).on('feAfterFilterApply', function() {
            setTimeout(adrihosanFuerzaScrollPorcelanico, 500);
        });

    })(jQuery);
    </script>
    <?php
}

/**
 * BLOQUE INFERIOR: SEO Dinámico, FAQs Porcelánico y Contacto
 */
function adrihosan_porcelanico_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( get_queried_object_id() ); ?>
        </div>
    </section>

    <section class="faq-section adrihosan-full-width-block" style="background: #f9f9f9; padding: 80px 0; font-family: 'Poppins'; border-top: 1px solid #eee;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; margin-bottom: 50px; font-weight: 800; font-size: 2.2rem; color: #102e35;">Preguntas Frecuentes sobre Gres Porcelánico</h2>
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Qué mantenimiento requiere?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Prácticamente nulo. Al no ser poroso, basta con agua y un jabón neutro. Olvídate de ceras, pulidos o barnices para siempre.</p>
            </div>
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Es compatible con suelo radiante?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Es el mejor material para ello. Su alta conductividad térmica permite que el calor pase rápidamente, optimizando el consumo energético de tu calefacción.</p>
            </div>
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Se mancha con facilidad?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">No. El porcelánico tiene una absorción de agua inferior al 0.5%. Ni el vino, ni el aceite, ni el ácido penetran en la baldosa. Es higiénico y antibacteriano.</p>
            </div>
        </div>
    </section>

    <section class="contact-help-common adrihosan-full-width-block" style="background: #102e35; color: #fff; padding: 90px 0;">
        <div class="contact-help-wrapper" style="max-width: 1150px; margin: 0 auto; padding: 0 25px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
            <div class="contact-intro" style="display: flex; align-items: center; gap: 30px; flex: 1; min-width: 320px;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan" 
                     style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; border: 4px solid #4dd2d0; flex-shrink: 0; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                <div>
                    <h2 style="color: #4dd2d0; margin-bottom: 12px; font-size: 2.4rem; font-weight: 800; font-family: 'Poppins', sans-serif;">¿Dudas sobre tu reforma?</h2>
                    <p style="font-size: 1.2rem; line-height: 1.6; font-family: 'Poppins', sans-serif; opacity: 0.9;">Soy Ricardo. Te ayudo a elegir el porcelánico que mejor se adapta a tu vida. Llámame al <strong>96 195 71 36</strong>.</p>
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
/* 1. PÁGINA PILAR GRAN FORMATO (ID 1844) - VERSIÓN FINAL */
/* ========================================================================== */

add_action( 'wp', 'adrihosan_pilar_gran_formato_controller' );

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
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

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

add_action( 'wp', 'adrihosan_pilar_extrafino_controller' );

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
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

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

add_action( 'wp', 'adrihosan_pilar_metro_controller' );

function adrihosan_pilar_metro_controller() {
    if ( ! is_product_category( 2093 ) || is_singular('product') ) {
        return;
    }
    add_filter( 'woocommerce_show_page_title', '__return_false' );
    if ( ! is_paged() ) {
        remove_all_actions( 'woocommerce_archive_description' );
    }
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    
    add_action( 'woocommerce_before_shop_loop', 'adrihosan_metro_superior_final', 5 );
    add_action( 'woocommerce_after_shop_loop', 'adrihosan_metro_inferior_final', 20 );
}

function adrihosan_metro_superior_final() {
    ?>
    <section class="cer-hero-section adrihosan-full-width-block" style="position: relative; background-color: #102e35; background-image: linear-gradient(rgba(16, 46, 53, 0.40), rgba(16, 46, 53, 0.40)), url('https://www.adrihosan.com/wp-content/uploads/2026/01/azulejo-metro-cocina-adrihosan.jpg'); background-position: center center; background-size: cover; color: #fff; padding: 80px 20px; text-align: center;">
        <div class="cer-hero-content">
            <h1 style="font-family: 'Poppins', sans-serif; color:#4dd2d0; font-weight:800; font-size: 2.8rem; text-shadow: 0 2px 8px rgba(0,0,0,0.6);">Azulejo Metro: El Icono del Diseño</h1>
            <p style="font-family: 'Poppins'; font-size: 1.2rem; max-width: 800px; margin: 0 auto; text-shadow: 0 1px 4px rgba(0,0,0,0.5);">Del metro de París a tu hogar. El revestimiento biselado que aporta luz, carácter y un estilo atemporal.</p>
            <div class="cer-hero-buttons" style="margin-top:35px; display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <a href="#catalogo-metro-foco" class="btn-adri-master">Ver Colección</a>
                <a href="#bloque-filtros-visuales" class="btn-adri-master" style="background:transparent !important; border:2px solid #4dd2d0 !important; color:#4dd2d0 !important;">Ver Colores</a>
            </div>
        </div>
    </section>

    <div id="bloque-filtros-visuales" style="padding-top: 50px;">
        <h2 style="text-align:center; font-size: 1.6rem; color: #102e35; text-transform: uppercase; font-family: 'Poppins'; margin-bottom:30px; font-weight: 800;">Elige tu Estilo</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto; padding: 0 10px;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_color=blanco" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/metro-blanco-biselado.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Blanco Clásico</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_color=negro" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/metro-negro-mate.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Negro Industrial</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_color=verde,azul,rosa" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/metro-colores-variados.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">A Todo Color</h3></a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_acabado=mate" style="text-decoration:none; text-align:center;"><img src="https://www.adrihosan.com/wp-content/uploads/2026/01/metro-mate-moderno.jpg" style="width:100%; border-radius:8px; transition: transform 0.3s ease;"><h3 style="color:#102e35; font-family:'Poppins'; margin-top:15px; font-weight: 700;">Acabado Mate</h3></a>
        </div>
    </div>

    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins'; color: #102e35; font-size: 1.1rem;"><strong>¡Consejo de AdrIA!</strong> Selecciona el color, formato o acabado que buscas y recuerda pulsar el botón <strong>"FILTRAR"</strong> para ver los azulejos disponibles.</p>
    </div>

    <div id="destino-filtro-adria-metro" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>

    <div style="text-align: center; margin: 60px 0;">
        <h4 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; margin-bottom:30px; text-transform:uppercase; letter-spacing: 1px;">Lo más buscado</h4>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; max-width: 1100px; margin: 0 auto;">
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_formato=7-5x15" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">7.5x15 cm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_formato=10x20" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">10x20 cm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_formato=10x30" class="btn-adri-master" style="background:#102e35 !important; color:#fff !important;">10x30 cm</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_acabado=brillo" class="btn-adri-master">Brillo</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_acabado=mate" class="btn-adri-master">Mate</a>
            <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejo-metro/?filter_relieve=biselado" class="btn-adri-master">Biselado</a>
        </div>
    </div>

    <div id="catalogo-metro-foco" style="scroll-margin-top: 140px; text-align: center; padding: 50px 0; border-top: 1px solid #eee;">
        <h2 style="font-family: 'Poppins'; font-weight: 800; color: #102e35; text-transform: uppercase;">Colección Azulejo Metro</h2>
    </div>


    <?php
}

function adrihosan_metro_inferior_final() {
    ?>
    <section class="adrihosan-seo-long-content" style="background:#fff; padding: 80px 0; color: #102e35; font-family: 'Poppins'; line-height: 1.8;">
        <div style="max-width: 950px; margin: 0 auto; padding: 0 15px;">
            <?php echo category_description( get_queried_object_id() ); ?>
        </div>
    </section>
    <section class="faq-section adrihosan-full-width-block" style="background: #f9f9f9; padding: 80px 0; font-family: 'Poppins'; border-top: 1px solid #eee;">
        <div style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
            <h2 style="text-align: center; margin-bottom: 50px; font-weight: 800; font-size: 2.2rem; color: #102e35;">Preguntas Frecuentes sobre Azulejo Metro</h2>
            
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Se pueden colocar en el suelo?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Por norma general, no. El azulejo metro clásico es de pasta blanca o roja, diseñado exclusivamente como revestimiento para paredes. Sin embargo, en Adrihosan disponemos de modelos específicos fabricados en porcelánico que sí son aptos para pavimento. Revisa siempre la ficha técnica antes de comprar.</p>
            </div>
            
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Son aptos para el interior de la ducha?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Sí, absolutamente. Al ser piezas esmaltadas, son impermeables y protegen perfectamente la pared de la humedad. Son una de las opciones más higiénicas y duraderas para zonas mojadas.</p>
            </div>
            
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿El biselado hace que sean difíciles de limpiar?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Es un mito común, pero falso. El bisel (el borde inclinado) es suave y no tiene rincones donde la suciedad se incruste. Se limpian con la misma facilidad que un azulejo liso: agua y jabón neutro son suficientes.</p>
            </div>
            
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Qué color de junta recomiendas para el azulejo blanco?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">Depende del efecto que busques. Si quieres amplitud y limpieza visual, usa una junta blanca. Si buscas el auténtico look industrial o "tipo metro" de Nueva York, atrévete con una junta negra o gris antracita para resaltar el patrón de colocación.</p>
            </div>
            
            <div style="background: #fff; padding: 35px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <p style="font-weight: 800; color: #102e35; margin-bottom: 15px; font-size: 1.25rem;">¿Hay otras formas de colocación además de la "tipo ladrillo"?</p>
                <p style="font-size: 1.1rem; line-height: 1.6; color: #3f6f7b;">¡Por supuesto! Aunque la colocación trabada (tipo ladrillo) es la icónica, hoy es tendencia colocarlos en espiga (herringbone), en vertical (para ganar altura visual) o totalmente alineados (para un toque moderno y ordenado).</p>
            </div>
        </div>
    </section>
    <section class="contact-help-common adrihosan-full-width-block" style="background: #102e35; color: #fff; padding: 90px 0;">
        <div class="contact-help-wrapper" style="max-width: 1150px; margin: 0 auto; padding: 0 25px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
            <div class="contact-intro" style="display: flex; align-items: center; gap: 30px; flex: 1; min-width: 320px;">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Ricardo Adrihosan" style="border-radius: 50%; width: 150px; height: 150px; object-fit: cover; border: 4px solid #4dd2d0; flex-shrink: 0; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                <div>
                    <h2 style="color: #4dd2d0; margin-bottom: 12px; font-size: 2.4rem; font-weight: 800; font-family: 'Poppins', sans-serif;">¿Buscas un color específico?</h2>
                    <p style="font-size: 1.2rem; line-height: 1.6; font-family: 'Poppins', sans-serif; opacity: 0.9;">Soy Ricardo. Tenemos muchísimos colores.</p>
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
