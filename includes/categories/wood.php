<?php
/**
 * Contenido de categoría - Wood (2209)
 * @package Adrihosan
 */
if (!defined("ABSPATH")) exit;

/********************************************************************************
 * =============================================================================
 * SOLUCIÓN DEFINITIVA CON CSS INYECTADO (ANTI-CACHÉ Y ANTI-TEMA)
 * =============================================================================
 ********************************************************************************/

// DESACTIVADO - El CSS de filtros ahora está en el Controlador Maestro (función adrihosan_ocultar_filtros_antiguos_css)
// add_action( 'wp_head', 'adrihosan_custom_category_final_fix_css', 999 );
function adrihosan_custom_category_final_fix_css() {
    // Lista de IDs de TODAS las categorías personalizadas
    $custom_category_ids = array(62, 2082, 4806, 2083, 4876, 102, 4213, 4247, 2626, 4862, 4865, 4866, 4869, 4564, 2209, 1789, 2093);

    // Solo ejecutar si estamos en una de esas categorías
    if ( is_product_category( $custom_category_ids ) ) {
        ?>
        <style type="text/css">
            /*
             * PASO 1: Oculta completamente los contenedores de filtros y herramientas del tema.
             */
            .filter-wrapper,
            .wd-shop-tools {
                display: none !important;
            }

            /*
             * PASO 2 (SOLUCIÓN MEJORADA): Fuerza a la rejilla de productos a posicionarse
             * debajo de cualquier elemento flotante y añade un margen superior robusto.
             * Usamos 'div.products' para aumentar la especificidad sobre las reglas del tema.
             */
            div.products-grid.products {
                clear: both !important;
                margin-top: 250px !important; /* Aumentamos el margen para asegurar el espacio */
            }
        </style>
        <?php
    }
}

// =============================================================================
// LANDING SUELO IMITACIÓN MADERA - ID 2209 (VERSIÓN LIMPIA Y VALIDADA)
// =============================================================================

/**
 * Muestra el contenido ANTES del loop de productos para la categoría Madera.
 */
// COMENTADO - Duplicado del controlador maestro (línea 112)
// add_action('woocommerce_before_shop_loop', 'adrihosan_wood_cat_before_loop_final_validated', 5);
function adrihosan_wood_cat_before_loop_final_validated() {
    // Verificar si estamos en la categoría correcta ANTES de hacer nada
    if (!is_product_category(2209)) {
        return; // Salir temprano si no es la categoría
    }
    
    // Obtener la URL base de la categoría una sola vez
    $category_url = get_term_link(2209, 'product_cat');
    // Verificar si get_term_link dio error
    if (is_wp_error($category_url)) {
       $category_url = '#error-getting-category-url'; // Usar un placeholder en caso de error
    }

    ?>
    <section class="bho-hero-section adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-Adrihosan.jpg');">
        <div class="bho-hero-content">
            <p class="bho-hero-title-visual">Suelos Imitación Madera</p>
            <p>La calidez y belleza de la madera con la resistencia invencible del porcelánico. Para interior y exterior.</p>
            <div class="bhp-hero-buttons">
                <a href="#product-loop" class="bhp-hero-btn bhp-hero-btn-primary">Ver Catálogo</a>
                <a href="/proyectos/" class="bhp-hero-btn bhp-hero-btn-secondary">Ver Proyectos Reales</a>
            </div>
        </div>
    </section>
    
    <section class="bho-guide-section">
    <div class="bho-guide-wrapper">
        <h1 class="bho-guide-main-title">Suelo Porcelánico Imitación Madera: La Calidez que Perdura</h1>
        <p>Descubre la solución definitiva para tus suelos: el <strong>suelo porcelánico imitación madera</strong>. En Adrihosan, hemos seleccionado el mejor <strong>gres efecto madera</strong> que captura la belleza y la calidez del parquet sin ninguno de sus inconvenientes. Di adiós al mantenimiento constante, a los arañazos y al miedo a la humedad.</p>
        <p>Nuestro pavimento porcelánico es la opción ideal para cualquier estancia, desde el salón hasta la cocina y el baño, e incluso para tu terraza. Explora el catálogo y usa nuestros filtros para encontrar fácilmente el acabado, tono (como el moderno gris o el clásico roble) y formato que transformará tu espacio.</p>
    </div>
</section>

<section class="bho-hub-section">
             <div class="bho-hub-wrapper">
                <?php
                    // Obtenemos la URL base de la categoría una sola vez
                    $category_url = get_term_link(2209, 'product_cat');
                    // Verificar si get_term_link dio error
                    if (is_wp_error($category_url)) {
                       $category_url = '#error-getting-category-url'; // Usar un placeholder en caso de error
                    }
                ?>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'bano', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-bano-Adrihosan.jpg" alt="Suelo imitación madera en baños" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Baños</h3></div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'cocina', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-cocina-Adrihosan.jpg" alt="Suelo porcelánico imitación madera en cocinas" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Cocinas</h3></div>
                </a>
                <a href="<?php echo esc_url(add_query_arg('estancia', 'terraza', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-terraza-Adrihosan.jpg" alt="Suelo imitación madera en terrazas y exterior" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Terrazas y Exterior</h3></div>
                </a>
                 <a href="<?php echo esc_url(add_query_arg('estancia', 'piscina', $category_url)); ?>" class="bho-hub-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2025/10/suelo-imitacion-madera-piscina-Adrihosan.jpg" alt="Suelo imitación madera para piscinas" class="bho-hub-card-img">
                    <div class="bho-hub-card-content"><h3>Piscinas</h3></div>
                </a>
             </div>
        </section>

   <section class="bho-filters-section">
            <div class="bho-filters-wrapper">
                <h2 class="bho-filters-main-title">Tu Búsqueda, Más Fácil</h2>

                <div class="bho-filter-group">
                    <h3 class="bho-filter-group-title">Acabados y Formatos</h3>
                    <div class="bho-filter-pills">
                        <?php // URL Rectificado ?>
                        <a href="<?php echo esc_url(add_query_arg('corte-azulejo', 'azulejo-rectificado', $category_url)); ?>" class="bho-filter-pill">Acabado Rectificado</a>
                        <?php // URL Espiga ?>
                        <a href="<?php echo esc_url(add_query_arg('estancia', 'espiga', $category_url)); ?>" class="bho-filter-pill">Formato Espiga</a>
                    </div>
                </div>

                <div class="bho-filter-group">
                    <h3 class="bho-filter-group-title">Elige tu Tono</h3>
                    <div class="bho-filter-pills">
                        <?php // URL Gris ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'gris', $category_url)); ?>" class="bho-filter-pill">Tonos Grises</a>
                        <?php // URL Nogal ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'nogal', $category_url)); ?>" class="bho-filter-pill">Tono Nogal</a>
                        <?php // URL Antracita ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'antracita', $category_url)); ?>" class="bho-filter-pill">Antracita</a>
                        <?php // URL Oak ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'oak', $category_url)); ?>" class="bho-filter-pill">Oak</a>
                        <?php // URL Natural ?>
                        <a href="<?php echo esc_url(add_query_arg('color', 'natural', $category_url)); ?>" class="bho-filter-pill">Natural</a>
                    </div>
                </div>

                <div class="bho-filter-group">
                    <h3 class="bho-filter-group-title">Elige por Material</h3>
                    <div class="bho-filter-pills">
                        <?php // URL Porcelánico ?>
                        <a href="<?php echo esc_url(add_query_arg('azulejo-tipo', 'suelo-porcelanico', $category_url)); ?>" class="bho-filter-pill">Gres Porcelánico (Máx. Resistencia)</a>
                    </div>
                </div>

            </div>
        </section>

    <div class="product-loop-header">
         <h2 class="product-loop-title" id="product-loop">Nuestro Catálogo de Suelos Imitación Madera</h2>
    </div>
    <?php
}

/**
 * Muestra el contenido DESPUÉS del loop de productos para la categoría Madera.
 */
// COMENTADO - Duplicado del controlador maestro (línea 113)
// add_action('woocommerce_after_shop_loop', 'adrihosan_wood_cat_after_loop_final', 35);
function adrihosan_wood_cat_after_loop_final() {
    // Verificar si estamos en la categoría correcta ANTES de hacer nada
    if (!is_product_category(2209)) {
        return; // Salir temprano si no es la categoría
    }
    ?>


   <section class="faq-section-common">
    <div class="faq-wrapper-common">
        <h2 class="faq-main-title-common">Resolvemos tus Dudas sobre Suelos de Madera Cerámica</h2>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Realmente parece madera natural? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Sí. La tecnología de impresión digital HD de última generación no solo copia la veta, sino que reproduce la textura y el relieve del nudo. El realismo es excepcional, incluso al tacto.</p></div>
        </div>
        <div class="faq-item-common">
            <button class="faq-question-common">¿Qué mantenimiento requiere? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Mínimo. A diferencia del parquet, no necesita lijado, barnizado ni ceras especiales. Se limpia fácilmente con agua y fregasuelos de pH neutro. Es su mayor ventaja.</p></div>
        </div>
        <div class="faq-item-common">
            <button class="faq-question-common">¿Es apto para suelo radiante? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Es ideal. El material porcelánico es un excelente conductor térmico, mucho mejor que la madera natural. Optimiza la eficiencia de los sistemas de calefacción por suelo radiante. Lo más importante en estos casos es usar un </strong>cemento cola Fléxible</strong>, ya que es el que debe absorber las dilataciones y contracciones producidas por la calefacción</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Qué es un suelo "rectificado" y por qué es importante? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Un suelo rectificado tiene los bordes cortados en un ángulo perfecto de 90 grados. Su gran ventaja es que permite una instalación con juntas mínimas (1-2 mm), logrando un efecto visual de superficie continua, mucho más realista y elegante.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Por qué hay tanta diferencia de precio? ¿Qué es mejor, porcelánico o gres? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>La diferencia está en el material. El <strong>Gres Porcelánico</strong> es mucho más denso, resistente a golpes y tiene una absorción de agua casi nula (<0.5%), lo que lo hace apto para todo: exterior, baños y cocinas. El gres de pasta roja es más poroso y económico, pero solo se recomienda para interiores de bajo tránsito. A largo plazo, el porcelánico es siempre una mejor inversión.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Qué debo saber si lo quiero para una terraza o piscina? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Para exterior, es fundamental que el suelo sea <strong>antideslizante Clase 3 (C3)</strong>. Esta es la normativa que garantiza la máxima seguridad en zonas húmedas como terrazas descubiertas o playas de piscina. Además, el porcelánico resiste las heladas y no pierde color con el sol.</p></div>
        </div>
        
        <div class="faq-item-common">
            <button class="faq-question-common">Los tonos grises son tendencia, pero... ¿se ensucian mucho? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Los tonos grises y claros son muy populares por la luz que aportan a estilos nórdicos o minimalistas. En contra de lo que se piensa, un acabado mate y con una veta suave es un gran aliado para disimular el polvo y las pelusas del día a día, a menudo más que un tono oscuro liso.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Es más complicado instalar un suelo en formato espiga? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Sí, la instalación del formato espiga (o <i>herringbone</i>) es más técnica y requiere un profesional experimentado, ya que los cortes y la alineación son más complejos. Sin embargo, el resultado estético es espectacular y aporta un dinamismo y una elegancia que lo diferencian de la instalación tradicional.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Se puede poner en la pared de la ducha o en el frontal de la cocina? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>Absolutamente. Al ser porcelánico, su absorción de agua es nula, por lo que es 100% impermeable e inalterable al vapor, al agua directa y a las manchas de grasa o jabón. Es una de las soluciones más limpias y duraderas para estas zonas.</p></div>
        </div>

        <div class="faq-item-common">
            <button class="faq-question-common">¿Puedo instalarlo sobre mi suelo antiguo? <span class="faq-icon-common">+</span></button>
            <div class="faq-answer-common"><p>En la mayoría de los casos, sí. Si el suelo actual (terrazo, gres, etc.) está bien nivelado y firmemente adherido, se puede instalar el nuevo porcelánico encima usando un cemento cola flexible específico (tipo C2-S1). Esto ahorra los costes y el desescombro de la demolición.</p></div>
        </div>

    </div>
</section>

    <section id="contacto-experto-madera" class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>¿Necesitas ayuda con tu suelo de madera?</h2></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposición</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Teléfono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20ayuda%20con%20los%20suelos%20imitaci%C3%B3n%20madera" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
             <?php 
             // Opcional: Descomenta la siguiente línea si quieres incluir el shortcode del formulario además de los iconos
             // echo '<div class="contact-form-container" style="margin-top: 30px;">' . do_shortcode('[contact-form-7 id="1234" title="Formulario de Contacto 1"]') . '</div>'; 
             ?>
        </div>
    </section>
    <?php
}

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

// DESACTIVADO - Migrado al Controlador Maestro (línea 33)
// add_action( 'wp', 'adrihosan_ceramica_definitiva_controller' );

