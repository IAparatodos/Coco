<?php
/**
 * Categoria 5467 - Azulejos grandes para banos (hija de 5466)
 *
 * Categoria RECREADA el 12-ago-2026 tras estar en 404. Su URL rankeaba en
 * posicion 1,2-2,3 para toda su familia de queries y hacia 135 clics al mes,
 * asi que esta plantilla existe para devolverle ese trafico, no para inventar
 * nada nuevo.
 *
 * 119 productos de 16,90 a 63,90 EUR/m2 +IVA en cinco formatos: 30x90 (55),
 * 45x120 (26), 60x120 brillo (28), 40x120 (5) y 31,5x100 (3).
 *
 * LA INTENCION es de FORMATO, no de color ni de material: quien busca
 * "azulejos grandes para banos" ya sabe que quiere ceramica y viene a decidir
 * el tamano de la pieza. Por eso la navegacion va por formato y la tabla
 * compara los tres principales.
 *
 * El titulo, la meta y la descripcion de 5 H2 ya estan aplicados en el termino
 * por datos: la descripcion se pinta sola con category_description() y NO se
 * toca desde aqui.
 *
 * Modelo: inc/category-azulejos-exterior.php (misma estructura de funciones).
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el rank_math_schema_FAQPage del termino se rellena despues
 * extrayendo estas mismas preguntas del HTML publicado, asi que no se cambia
 * ni una coma sin cambiar tambien el schema); enlaces de navegacion a URLs de
 * UN SOLO filtro, nunca cruzando dos.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_azulejos_grandes_banos_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <!-- TODO: falta la imagen de fondo (un bano alicatado en formato grande).
         Mientras tanto, fondo corporativo: basta cambiar el style por
         background-image: url('...'); -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Azulejos grandes para ba&ntilde;os' ); ?></h1>
            <p>Menos juntas y un ba&ntilde;o que parece m&aacute;s grande. Aqu&iacute; tienes 119 azulejos en formato grande &mdash;30x90, 45x120 y 60x120&mdash; para alicatar tu ba&ntilde;o de pared a techo.</p>
            <div class="hero-buttons">
                <a href="#catalogo-grandes-banos" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20grandes%20para%20bano" class="hero-btn secondary" target="_blank">Ayuda por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACION POR FORMATO.
         Cada tarjeta apunta a una URL de UN SOLO filtro: nunca se cruzan dos.
         Las tres de formato estan verificadas en 200 (12-ago). La de color
         usa el prefijo "tono-", que es el del conjunto de Azulejos en las
         categorias hermanas (azulejo-metro, azulejo-mosaico, hexagonales). -->
    <section class="agb-formatos-section adrihosan-full-width-block" id="formatos-grandes-banos">
        <div class="agb-formatos-wrapper">
            <h2>&iquest;Qu&eacute; formato le va a tu ba&ntilde;o?</h2>
            <p class="section-subtitle">El tama&ntilde;o de la pieza cambia el resultado m&aacute;s que el color</p>
            <div class="agb-formatos-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/fmt-30x90/" class="agb-formato-card">
                    <span class="agb-formato-cm">30<small>x</small>90</span>
                    <span class="agb-formato-txt">El m&aacute;s usado. Se maneja bien y admite vertical</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/fmt-45x120/" class="agb-formato-card">
                    <span class="agb-formato-cm">45<small>x</small>120</span>
                    <span class="agb-formato-txt">El salto de tama&ntilde;o que se nota</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/fmt-60x120/" class="agb-formato-card">
                    <span class="agb-formato-cm">60<small>x</small>120</span>
                    <span class="agb-formato-txt">La pieza m&aacute;s grande, y rebota la luz</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-bano/tono-blanco/" class="agb-formato-card agb-formato-color">
                    <span class="agb-formato-cm">Blancos</span>
                    <span class="agb-formato-txt">El cl&aacute;sico que nunca falla</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. TABLA COMPARATIVA -->
    <section class="agb-tabla-section adrihosan-full-width-block">
        <div class="agb-tabla-wrapper">
            <h2>Compara los tres formatos</h2>
            <p class="section-subtitle">Cada ba&ntilde;o pide un tama&ntilde;o distinto seg&uacute;n sus metros y sus paredes</p>
            <div class="tabla-comparativa-grandes" style="max-width: 1000px; margin: 0 auto; overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; font-family: 'Poppins','Poppins Fallback',sans-serif; font-size: 14px;">
                    <thead>
                        <tr style="background: #3f6f7b; color: #fff;">
                            <th style="padding: 15px; text-align: left;">Formato</th>
                            <th style="padding: 15px; text-align: left;">Mejor para</th>
                            <th style="padding: 15px; text-align: left;">Colocaci&oacute;n</th>
                            <th style="padding: 15px; text-align: left;">Ventaja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #f0f7f8;">
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;"><strong>30x90</strong></td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Ba&ntilde;os de cualquier tama&ntilde;o</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Horizontal o vertical</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">El m&aacute;s f&aacute;cil de instalar y el que menos recorte genera</td>
                        </tr>
                        <tr>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;"><strong>45x120</strong></td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Ba&ntilde;os con alguna pared larga y despejada</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Horizontal</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Reduce mucho las juntas y da aire de reforma nueva</td>
                        </tr>
                        <tr style="background: #f0f7f8;">
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;"><strong>60x120 brillo</strong></td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Ba&ntilde;os sin ventana o con poca luz</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Horizontal</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">El brillo rebota la luz y agranda &oacute;pticamente</td>
                        </tr>
                        <tr>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;"><strong>40x120 y 31,5x100</strong></td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Formatos puntuales</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">&mdash;</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Alternativas cuando el despiece lo pide</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 4. CONSEJO ADRIA -->
    <div style="background: #f0fafa; border-left: 5px solid #4dd2d0; padding: 25px; margin: 30px auto; max-width: 950px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <p style="margin:0; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> En un ba&ntilde;o peque&ntilde;o no siempre gana la pieza m&aacute;s grande: el 30x90 colocado en vertical estira el techo y desperdicia menos material que el 45x120, que obliga a cortar casi todas las piezas. Filtra por formato y mira el despiece antes de decidir.</p>
    </div>

    <!-- 5. DESTINO MOVIL + WIDGET -->
    <div id="destino-filtro-adria-grandes-banos" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 6. TITULO CATALOGO -->
    <div id="catalogo-grandes-banos" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de azulejos grandes para ba&ntilde;o</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_azulejos_grandes_banos_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->
    <?php
    // SEO: contenido dinamico desde WooCommerce category_description().
    // El texto (5 H2) ya esta publicado en el termino: aqui solo se pinta.
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) {
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php
    }
    ?>

    <!-- 8. FAQs.
         SIN JSON-LD: el rank_math_schema_FAQPage del termino se rellena
         despues extrayendo estas preguntas del HTML ya publicado. Cambiar una
         coma aqui y no alli descuadra el schema con lo visible. -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre azulejos grandes para ba&ntilde;os</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medida se considera un azulejo grande para ba&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>A partir de 30x90 cm ya se habla de formato grande. Los tama&ntilde;os que mejor funcionan en un ba&ntilde;o son el 30x90, el 45x120 y el 60x120. Por debajo de eso &mdash;20x20, 15x15, 10x30&mdash; se considera formato peque&ntilde;o, que tiene su sitio pero multiplica las juntas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Los azulejos grandes hacen que el ba&ntilde;o parezca m&aacute;s grande?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, y la raz&oacute;n es que se ven menos juntas. Alicatar una pared de 6 m&sup2; con piezas de 20x20 deja unas 150 juntas a la vista; con 30x90 son 22. Al haber menos l&iacute;neas cortando la pared, el ojo lee el espacio como m&aacute;s continuo y m&aacute;s amplio.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Puedo poner azulejos grandes en un ba&ntilde;o peque&ntilde;o?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, pero con cabeza. En un ba&ntilde;o de 3 m&sup2; una pieza de 120 cm obliga a cortar casi todas y pierdes la ventaja. Ah&iacute; suele cundir m&aacute;s el 30x90 colocado en vertical, que adem&aacute;s estira visualmente el techo. Si nos dices los metros, te decimos qu&eacute; formato aprovecha mejor.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; hay que mirar en la pared antes de alicatar en formato grande?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Que est&eacute; plana. Es la condici&oacute;n que m&aacute;s se pasa por alto: una pieza de 120 cm no perdona un tabique alabeado, cantea y se nota. En 20x20 ese defecto se disimula solo. Si la pared no est&aacute; a plomo, hay que igualarla antes.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto material de m&aacute;s hay que pedir?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>M&aacute;s que en un sal&oacute;n. Un ba&ntilde;o tiene ventana, registros, ducha y el hueco del mueble, as&iacute; que se corta mucho, y con piezas grandes cada corte desperdicia m&aacute;s superficie. Cu&eacute;ntanos el despiece y te calculamos los metros exactos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. CONTACTO RICARDO -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en azulejos de Adrihosan">
                <div>
                    <h2>Soy Ricardo. &iquest;Dudas con el formato para tu ba&ntilde;o?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20grandes%20para%20bano" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
