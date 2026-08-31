<?php
/**
 * Categoria 2897 - Platos de ducha de pizarra (hija de 86)
 *
 * HOJA DE ACABADO. El eje es la TEXTURA, no la medida ni el precio. Quien
 * llega aqui ya sabe que quiere un plato antideslizante con aspecto de piedra
 * y lo que elige es el COLOR.
 *
 * POR QUE ESTA CATEGORIA ES PRIORIDAD 1 (investigacion del 31-08-2026):
 * la pizarra son 19 de las 33 unidades vendidas y 5.560 EUR, el 55 % del
 * importe del silo (ERP, ene-ago 2026), y la categoria sacaba 4 impresiones y
 * 0 sesiones en 12 meses. No era competencia: la MADRE NO LA ENLAZABA. Su menu
 * apuntaba a 9 categorias de medida, 5 filtros y hasta page/72, y omitia esta.
 * El enlace se anade en el mismo PR (seccion "Que acabado quieres?" de la 86).
 *
 * DATOS VERIFICADOS EN BD EL 31-08-2026, tras dejar la categoria en sus 692
 * exactos de textura Pizarra (+43 que faltaban, -89 que eran Beton, Espatulado
 * y Lastra, texturas distintas segun Ricardo):
 *   692 productos · 31 colores · 121 medidas (70x70 a 250x120) ·
 *   desde 120,90 EUR +IVA · 6 alturas (2,4 a 4 cm) ·
 *   2 materiales (poliester gel coat / poliuretano) ·
 *   2 rejillas (del mismo material / acero inoxidable) ·
 *   387 con clase antideslizante C3 DECLARADA.
 *
 * REGLAS DURAS:
 *   - H1 via adrihosan_h1_dinamico().
 *   - FAQ en HTML visible SIN JSON-LD: Rank Math lo genera desde el termino y
 *     los textos deben coincidir palabra por palabra (se tocan los dos o
 *     ninguno).
 *   - NUNCA "fabricacion a medida": no existe en platos. Son medidas estandar
 *     de fabrica y recorte en obra.
 *   - NUNCA prometer plazo de entrega.
 *   - Adrihosan NO fabrica platos de ducha (confirmado por Ricardo el 31-ago).
 *   - NO decir que los 692 son C3: solo 387 lo declaran. La clase no se
 *     atribuye a un producto sin ficha del fabricante.
 *   - Ningun dato que no este verificado en BD o en ficha del fabricante.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_pizarra_contenido_superior() {
    // Regla del PR #74: en una URL de filtro CON regla SEO propia solo se
    // pintan hero, filtro, listado y contacto.
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();
    ?>
    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="hero-content">
            <nav class="breadcrumb-nav">
                <a href="https://www.adrihosan.com/">Inicio</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/">Sanitarios</a> &gt;
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/">Platos de ducha</a> &gt;
                <span>De pizarra</span>
            </nav>
            <h1><?php echo adrihosan_h1_dinamico( 'Platos de ducha de pizarra' ); ?></h1>
            <?php if ( ! $es_filtro ) : ?>
            <p>31 colores en 121 medidas, desde 120,90&nbsp;&euro; +IVA. Textura antideslizante y a ras de suelo.</p>
            <div class="hero-buttons">
                <a href="#pizarra-colores" class="hero-btn primary">Ver los 31 colores</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20de%20pizarra" class="hero-btn secondary">Preguntar por WhatsApp</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if ( ! $es_filtro ) : ?>

    <!-- 2. LOS 31 COLORES - SECCION ESTRELLA (es lo que de verdad se elige aqui) -->
    <section id="pizarra-colores" class="pzr-colors-section adrihosan-full-width-block">
        <div class="pzr-colors-wrapper">
            <h2>Los 31 colores de la textura pizarra</h2>
            <p class="pzr-colors-lead">El mismo acabado antideslizante en toda la carta. Entre par&eacute;ntesis, cu&aacute;ntos platos hay de cada color.</p>

            <h3 class="pzr-family-title">Neutros oscuros</h3>
            <div class="pzr-colors-grid">
                <span class="pzr-color-chip">Negro <em>(691)</em></span>
                <span class="pzr-color-chip">Antracita <em>(302)</em></span>
                <span class="pzr-color-chip">Lava <em>(214)</em></span>
                <span class="pzr-color-chip">Wengu&eacute; <em>(169)</em></span>
                <span class="pzr-color-chip">Grafito</span>
            </div>

            <h3 class="pzr-family-title">Grises</h3>
            <div class="pzr-colors-grid">
                <span class="pzr-color-chip">Gris <em>(308)</em></span>
                <span class="pzr-color-chip">Cemento <em>(215)</em></span>
                <span class="pzr-color-chip">Grey <em>(214)</em></span>
                <span class="pzr-color-chip">Ceniza <em>(174)</em></span>
                <span class="pzr-color-chip">Gris claro <em>(169)</em></span>
                <span class="pzr-color-chip">Gris piedra <em>(169)</em></span>
                <span class="pzr-color-chip">Gris oliva <em>(169)</em></span>
                <span class="pzr-color-chip">Hormig&oacute;n <em>(169)</em></span>
                <span class="pzr-color-chip">Perla <em>(169)</em></span>
                <span class="pzr-color-chip">Gris 7035 <em>(132)</em></span>
            </div>

            <h3 class="pzr-family-title">Blancos y crudos</h3>
            <div class="pzr-colors-grid">
                <span class="pzr-color-chip">Blanco <em>(518)</em></span>
                <span class="pzr-color-chip">Marfil <em>(383)</em></span>
                <span class="pzr-color-chip">Crema <em>(347)</em></span>
                <span class="pzr-color-chip">N&aacute;car <em>(214)</em></span>
                <span class="pzr-color-chip">Blanco roto <em>(175)</em></span>
                <span class="pzr-color-chip">Blanco total <em>(174)</em></span>
                <span class="pzr-color-chip">Hueso <em>(174)</em></span>
                <span class="pzr-color-chip">Seda <em>(174)</em></span>
                <span class="pzr-color-chip">Creta</span>
            </div>

            <h3 class="pzr-family-title">C&aacute;lidos y tierras</h3>
            <div class="pzr-colors-grid">
                <span class="pzr-color-chip">Moka <em>(516)</em></span>
                <span class="pzr-color-chip">Chocolate <em>(303)</em></span>
                <span class="pzr-color-chip">Arena <em>(302)</em></span>
                <span class="pzr-color-chip">Beige <em>(215)</em></span>
                <span class="pzr-color-chip">Capuchino <em>(174)</em></span>
                <span class="pzr-color-chip">Topo <em>(169)</em></span>
                <span class="pzr-color-chip">Nude <em>(104)</em></span>
            </div>
        </div>
    </section>

    <?php endif; ?>

    <!-- 3. FILTRO FE PRO (conjunto 429707, el mismo del silo) -->
    <!-- SIEMPRE visible, tambien en filtro: es como el usuario afina o deshace. -->
    <div class="pldu-filter-shell">
        <div class="filter-container-master"><?php echo do_shortcode( '[fe_widget id="429707"]' ); ?></div>
    </div>

    <?php if ( ! $es_filtro ) : ?>

    <!-- 4. EL MISMO COLOR, 121 MEDIDAS -->
    <section class="pzr-sizes-section adrihosan-full-width-block">
        <div class="pzr-sizes-wrapper">
            <h2>El mismo color, en 121 medidas</h2>
            <p>De <strong>70&times;70</strong> a <strong>250&times;120</strong>, en 6 alturas (de 2,4 a 4 cm).
               Con 121 medidas de serie casi nunca hace falta recortar, y cuando hace falta
               <strong>se recorta en obra</strong> con radial y disco de diamante.</p>
            <div class="pzr-sizes-links">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-160x70/">Plato de ducha 160&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-120x70/">Plato de ducha 120&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-140x70/">Plato de ducha 140&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-90x90/">Plato de ducha 90&times;90</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-80x80/">Plato de ducha 80&times;80</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-70x70/">Plato de ducha 70&times;70</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-grandes/">Platos grandes</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-ducha-pequeno/">Platos peque&ntilde;os</a>
            </div>
        </div>
    </section>

    <!-- 5. FRANJA DE PRECIO -->
    <section class="pzr-price-band adrihosan-full-width-block">
        <div class="pzr-price-wrapper">
            <p class="pzr-price-claim">Platos de ducha de pizarra <strong>desde 120,90&nbsp;&euro; +IVA</strong></p>
            <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-baratos/" class="pzr-price-link">Ver la selecci&oacute;n de platos de ducha baratos &rarr;</a>
        </div>
    </section>

    <?php endif; ?>
    <?php
}

function adrihosan_pizarra_contenido_inferior() {
    $es_filtro = function_exists( 'adrihosan_filtro_con_regla_seo' ) && adrihosan_filtro_con_regla_seo();

    if ( ! $es_filtro ) :
    ?>
    <!-- 6. POR QUE PIZARRA (4 claves, todas verificables en catalogo) -->
    <section class="pzr-why-section adrihosan-full-width-block">
        <div class="pzr-why-wrapper">
            <h2>Por qu&eacute; un plato de ducha de pizarra</h2>
            <div class="pzr-why-grid">
                <div class="pzr-why-card">
                    <h3>Textura antideslizante</h3>
                    <p>387 referencias declaran clase <strong>C3</strong>, la que pide la normativa para ducha con el pie descalzo.</p>
                </div>
                <div class="pzr-why-card">
                    <h3>A ras de suelo</h3>
                    <p>Seis alturas, desde <strong>2,4 cm</strong>. Se entra sin escal&oacute;n.</p>
                </div>
                <div class="pzr-why-card">
                    <h3>Color en masa</h3>
                    <p>El color va en toda la pieza: un golpe no deja un desconchado de otro color.</p>
                </div>
                <div class="pzr-why-card">
                    <h3>La rejilla desaparece</h3>
                    <p>Del mismo material que el plato, o en acero inoxidable si lo prefieres.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. OTROS ACABADOS (enlazado horizontal del silo) -->
    <section class="pzr-related-section adrihosan-full-width-block">
        <div class="pzr-related-wrapper">
            <h2>Si buscabas otro acabado</h2>
            <div class="pzr-related-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-decorados/" class="pzr-related-card">
                    <h3>Platos decorados</h3>
                    <p>Madera, m&aacute;rmol, terrazo, hidr&aacute;ulico, mosaico y granito.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-enmarcados/" class="pzr-related-card">
                    <h3>Platos enmarcados</h3>
                    <p>Con marco perimetral, incluida la serie Silex de Fiora.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/platos-de-ducha-de-poliuretano-base/" class="pzr-related-card">
                    <h3>Textura bet&oacute;n</h3>
                    <p>Aspecto cemento continuo, en poliuretano.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-solid-surface/" class="pzr-related-card">
                    <h3>Solid Surface</h3>
                    <p>Tacto piedra y acabado sedoso. Una selecci&oacute;n corta de gama alta.</p>
                </a>
            </div>

            <h2 class="pzr-related-second">Y si lo que te importa es qui&eacute;n lo va a usar</h2>
            <div class="pzr-related-grid">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/" class="pzr-related-card">
                    <h3>Duchas adaptadas</h3>
                    <p>Platos a ras de suelo para silla de ruedas y ducha accesible.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-mayores/" class="pzr-related-card">
                    <h3>Personas mayores</h3>
                    <p>Cambiar la ba&ntilde;era por una ducha segura y sin escal&oacute;n.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-de-resina/" class="pzr-related-card">
                    <h3>Platos de resina</h3>
                    <p>Todo el cat&aacute;logo de resina: poli&eacute;ster gel coat y poliuretano.</p>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/" class="pzr-related-card">
                    <h3>Todos los platos de ducha</h3>
                    <p>Vuelve al cat&aacute;logo completo para comparar por medida o material.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 8. MARCAS -->
    <section class="pzr-brands-section adrihosan-full-width-block">
        <div class="pzr-brands-wrapper">
            <h2>Marcas con acabado pizarra</h2>
            <div class="pzr-brands-row">
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/duplach-platos-de-ducha/" class="pzr-brand-link">Duplach</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/fiora-platos-de-ducha/" class="pzr-brand-link">Fiora</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/plato-de-ducha-acquabella/" class="pzr-brand-link">Acquabella</a>
                <a href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-enmarcados/silex-enmarcado/" class="pzr-brand-link">Silex de Fiora</a>
            </div>
        </div>
    </section>

    <!-- 9. FAQ (9 preguntas, HTML visible SIN JSON-LD; el schema se aplica en Fase 3
         y los textos deben coincidir palabra por palabra) -->
    <section class="pzr-faq-section adrihosan-full-width-block">
        <div class="pzr-faq-wrapper">
            <h2>Preguntas frecuentes sobre los platos de ducha de pizarra</h2>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;Resbala un plato de ducha de pizarra?</button>
                <div class="faq-answer-common"><p>Al rev&eacute;s: la textura pizarra existe justamente para agarrar. En nuestro cat&aacute;logo hay 387 referencias que declaran clasificaci&oacute;n antideslizante C3, que es la que pide la normativa para una ducha en la que se entra con el pie descalzo. Si necesitas la clase certificada de un modelo concreto, pregunta y te pasamos la ficha del fabricante.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;Se puede recortar un plato de pizarra?</button>
                <div class="faq-answer-common"><p>S&iacute;, se recorta en obra con una radial y un disco de diamante siguiendo las instrucciones del fabricante. No fabricamos platos a medida: lo que hay son 121 medidas de serie, y con esa carta casi nunca hace falta cortar. Si el recorte que necesitas es grande, cons&uacute;ltanos antes: a veces encaja mejor otra medida u otra serie.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;Cu&aacute;nto pesa un plato de ducha de pizarra?</button>
                <div class="faq-answer-common"><p>Depende de la medida y del material. Los de resina de poli&eacute;ster con carga mineral (gel coat) pesan bastante m&aacute;s que los de poliuretano, que es la familia m&aacute;s ligera. Para una medida concreta te decimos el peso exacto de ficha antes de que lo pidas.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;C&oacute;mo se limpia?</button>
                <div class="faq-answer-common"><p>Agua y jab&oacute;n neutro con un pa&ntilde;o suave. Nada de estropajos met&aacute;licos ni de productos abrasivos o con disolvente: la textura tiene relieve y lo que la estropea es frotar con algo m&aacute;s duro que ella. La cal se quita con un desincrustante suave, aclarando bien.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;Se raya o se decolora con el tiempo?</button>
                <div class="faq-answer-common"><p>El color va en masa, en toda la pieza, no es una capa pintada por encima. Por eso un golpe no deja un desconchado de otro color, que es lo que suele delatar a un plato viejo.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;Se puede poner sobre el suelo que ya tengo?</button>
                <div class="faq-answer-common"><p>S&iacute;, es lo habitual al cambiar una ba&ntilde;era por una ducha. Hay seis alturas, desde 2,4 cm, precisamente para resolver esa situaci&oacute;n sin levantar el suelo. Lo que manda es la salida del desag&uuml;e: cu&eacute;ntanos c&oacute;mo la tienes y te decimos qu&eacute; altura te sirve.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;Qu&eacute; diferencia hay entre gel coat y poliuretano?</button>
                <div class="faq-answer-common"><p>El gel coat es el recubrimiento exterior de un plato de resina de poli&eacute;ster con carga mineral: da el acabado y aporta cuerpo y peso. El poliuretano es la familia mayoritaria, m&aacute;s ligera y muy resistente al impacto. Los dos se recortan en obra y los dos llevan el color en masa.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;La rejilla se ve mucho?</button>
                <div class="faq-answer-common"><p>Puedes elegir. La rejilla del mismo material que el plato desaparece a la vista, porque es del mismo color y la misma textura. La de acero inoxidable se ve, y a much&iacute;sima gente le gusta precisamente por eso.</p></div>
            </div>

            <div class="faq-item-common">
                <button class="faq-question-common">&iquest;Qu&eacute; medida elijo si quito una ba&ntilde;era?</button>
                <div class="faq-answer-common"><p>Lo normal es que el hueco de la ba&ntilde;era sea de 170&times;70 o 160&times;70, y esas dos medidas est&aacute;n en cat&aacute;logo. Mide el hueco por dentro de los alicatados antes de decidir, y si te baila un cent&iacute;metro escr&iacute;benos: es la consulta que m&aacute;s nos hacen.</p></div>
            </div>
        </div>
    </section>

    <!-- 10. GUIAS DEL BLOG -->
    <section class="pzr-guides-section adrihosan-full-width-block">
        <div class="pzr-guides-wrapper">
            <h2>Gu&iacute;as para acertar con tu plato de ducha</h2>
            <div class="pzr-guides-grid">
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-elegir/" class="pzr-guide-card">Platos de ducha: cu&aacute;l elegir</a>
                <a href="https://www.adrihosan.com/platos-de-ducha-cual-es-el-mejor-material/" class="pzr-guide-card">&iquest;Cu&aacute;l es el mejor material?</a>
                <a href="https://www.adrihosan.com/pegar-plato-de-ducha-de-resina/" class="pzr-guide-card">C&oacute;mo pegar un plato de resina</a>
                <a href="https://www.adrihosan.com/como-instalar-un-plato-de-ducha/" class="pzr-guide-card">C&oacute;mo instalar un plato de ducha</a>
            </div>
        </div>
    </section>

    <?php endif; // fin bloques ?>

    <!-- 11. CONTACTO RICARDO (se pinta SIEMPRE, tambien en URL de filtro) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en platos de ducha de Adrihosan">
                <div>
                    <h2>&iquest;Dudas con el color o la medida?<span>Soy Ricardo, dime tu hueco y te digo qu&eacute; plato de pizarra te encaja.</span></h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20busco%20un%20plato%20de%20ducha%20de%20pizarra" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">&#128221;</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
