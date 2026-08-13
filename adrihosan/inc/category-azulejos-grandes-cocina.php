<?php
/**
 * Categoria 5468 - Azulejos grandes para cocina (hija de 5466)
 *
 * Categoria RECREADA el 12-ago-2026 tras estar en 404 (Google la tenia como
 * "Not found" con ultimo rastreo el 21-jun). Se pidio indexacion el 13-ago, asi
 * que el rastreo es inminente y hasta ahora la pagina estaba pelada: solo
 * listado, sin hero, sin descripcion y sin FAQ.
 *
 * Sostiene ~724 impresiones al mes, casi todas en posicion 1-3. No hay que
 * ganar esta intencion: hay que recuperarla.
 *
 * 100 productos de 16,90 a 63,90 EUR/m2 +IVA (verificado en BD el 13-ago).
 *
 * OJO - DIFERENCIA CON LA HERMANA DE BANOS (5467):
 * Alli el tercer formato es el 60x120 brillo, con 28 productos. AQUI NO HAY
 * NI UNO. El tercer formato de cocina es el 40x120 (14 productos). Cualquier
 * texto que mencione 60x120 en esta pagina seria falso.
 *   Formatos reales (pa_formato-azulejo, suman 100):
 *   30x90 -> 55 · 45x120 -> 26 · 40x120 -> 14 · 31,5x100 -> 3 · 26x180 -> 2
 *
 * La descripcion del termino esta VACIA a dia de hoy: el bloque de
 * category_description() se deja puesto igualmente y se rellenara solo cuando
 * se publique el texto por datos.
 *
 * Modelo: inc/category-azulejos-grandes-banos.php (la hermana, 12-ago).
 *
 * REGLAS DURAS: H1 via adrihosan_h1_dinamico(); FAQ en HTML visible SIN
 * JSON-LD (el rank_math_schema_FAQPage se rellena despues extrayendo estas
 * mismas preguntas del HTML publicado: no se cambia ni una coma sin cambiar
 * tambien el schema); enlaces de navegacion a URLs de UN SOLO filtro.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function adrihosan_azulejos_grandes_cocina_contenido_superior() {
    ?>
    <!-- 1. HERO SECTION -->
    <!-- TODO: falta la imagen de fondo (un frente de cocina alicatado en
         formato grande). Mientras tanto, fondo corporativo: basta cambiar el
         style por background-image: url('...'); -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-color: #3f6f7b;">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Azulejos grandes para cocina' ); ?></h1>
            <p>Un frente casi sin juntas, que es justo donde se acumula la grasa. Aqu&iacute; tienes 100 azulejos en formato grande &mdash;30x90, 45x120 y 40x120&mdash; para el frente y las paredes de tu cocina.</p>
            <div class="hero-buttons">
                <a href="#catalogo-grandes-cocina" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20grandes%20para%20cocina" class="hero-btn secondary" target="_blank">Ayuda por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 2. NAVEGACION POR FORMATO.
         Cada tarjeta apunta a una URL de UN SOLO filtro: nunca se cruzan dos.
         Las cuatro verificadas en vivo el 13-ago (200 y con producto).
         NOTA: tono-blanco/ esta en noindex, follow. Enlazarla es correcto -el
         follow pasa autoridad y al usuario le sirve- pero no rankeara hasta
         que tenga regla SEO propia. -->
    <section class="agc-formatos-section adrihosan-full-width-block" id="formatos-grandes-cocina">
        <div class="agc-formatos-wrapper">
            <h2>&iquest;Qu&eacute; formato le va a tu cocina?</h2>
            <p class="section-subtitle">En un frente de 60 cm, el tama&ntilde;o de la pieza decide cu&aacute;nto hay que cortar</p>
            <div class="agc-formatos-grid">
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/fmt-30x90/" class="agc-formato-card">
                    <span class="agc-formato-cm">30<small>x</small>90</span>
                    <span class="agc-formato-txt">El que cuadra el frente sin cortar a lo alto</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/fmt-45x120/" class="agc-formato-card">
                    <span class="agc-formato-cm">45<small>x</small>120</span>
                    <span class="agc-formato-txt">Piezas largas, para paredes despejadas</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/fmt-40x120/" class="agc-formato-card">
                    <span class="agc-formato-cm">40<small>x</small>120</span>
                    <span class="agc-formato-txt">El formato alargado, con menos juntas verticales</span>
                </a>
                <a href="https://www.adrihosan.com/categoria-producto/ceramica/azulejos/azulejos-de-cocina/tono-blanco/" class="agc-formato-card agc-formato-color">
                    <span class="agc-formato-cm">Blancos</span>
                    <span class="agc-formato-txt">El cl&aacute;sico de cocina, y el que m&aacute;s se busca</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. TABLA COMPARATIVA -->
    <section class="agc-tabla-section adrihosan-full-width-block">
        <div class="agc-tabla-wrapper">
            <h2>Compara los tres formatos</h2>
            <p class="section-subtitle">El frente de una cocina mide 50-60 cm: ah&iacute; es donde se ve la diferencia</p>
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
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">El frente entre encimera y muebles altos</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Horizontal, dos filas</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Es el &uacute;nico de los tres que cuadra un frente de 60 cm sin cortar a lo alto</td>
                        </tr>
                        <tr>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;"><strong>45x120</strong></td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Paredes largas y despejadas, cocinas abiertas</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Horizontal</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Las piezas m&aacute;s largas: casi no hay juntas verticales a la vista</td>
                        </tr>
                        <tr style="background: #f0f7f8;">
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;"><strong>40x120</strong></td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Frentes altos o alicatado hasta el techo</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Horizontal o vertical</td>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;">Alargado y vers&aacute;til; en vertical estira la pared</td>
                        </tr>
                        <tr>
                            <td style="padding: 12px; border-bottom: 1px solid #d4e3e6;"><strong>31,5x100 y 26x180</strong></td>
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
        <p style="margin:0; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #102e35; font-size: 1.1rem;"><strong>&iexcl;Consejo de AdrIA!</strong> En una cocina el enemigo no es la junta, es la grasa que se queda en ella. Por eso el frente es donde m&aacute;s se nota el formato grande: en 2,4 m&sup2; de frente, con 20x20 tienes 60 piezas y con 30x90 solo 9. Menos junta, menos sitio donde se agarre la suciedad.</p>
    </div>

    <!-- 5. DESTINO MOVIL + WIDGET -->
    <div id="destino-filtro-adria-grandes-cocina" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="427044"]'); ?></div>

    <!-- 6. TITULO CATALOGO -->
    <div id="catalogo-grandes-cocina" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de azulejos grandes para cocina</h2>
    </div>

    <!-- 7. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_azulejos_grandes_cocina_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->
    <?php
    // SEO: contenido dinamico desde WooCommerce category_description().
    // HOY ESTA VACIA: el bloque se queda puesto y se rellenara solo cuando se
    // publique el texto (5 H2) en el termino por datos.
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
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre azulejos grandes para cocina</h2>
            <div class="faq-items-wrapper">
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; medida se considera un azulejo grande para cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>A partir de 30x90 cm ya se habla de formato grande. En cocina los que mejor funcionan son el 30x90, el 45x120 y el 40x120. Por debajo de eso &mdash;el cl&aacute;sico 20x20 o el metro 10x30&mdash; se considera formato peque&ntilde;o: tiene su sitio y su est&eacute;tica, pero multiplica las juntas.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; formato cuadra mejor en el frente de la cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>El 30x90 colocado en horizontal. Un frente entre encimera y muebles altos suele medir entre 50 y 60 cm, y con dos filas de 30 se cubren 60 cm exactos sin cortar a lo alto. Con el 45x120 o el 40x120 casi siempre hay que recortar una fila, as&iacute; que rinden m&aacute;s en paredes despejadas o alicatando hasta el techo.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se limpian mejor los azulejos grandes en una cocina?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La pieza se limpia igual; lo que cambia es cu&aacute;nta junta hay. En un frente de 2,4 m&sup2; &mdash;60 cm de alto por 4 m de largo&mdash; con piezas de 20x20 salen unas 60 piezas y con 30x90 unas 9. La junta es la parte porosa donde se agarran la grasa y el vapor, as&iacute; que a menos junta, menos sitio donde se acumule.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; hay que mirar en la pared antes de alicatar en formato grande?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Que est&eacute; plana. Es lo que m&aacute;s se pasa por alto: una pieza de 120 cm no perdona un tabique alabeado, cantea y se nota a contraluz. En 20x20 ese mismo defecto se disimula solo. Si la pared no est&aacute; a plomo, hay que igualarla antes de alicatar.</p>
                    </div>
                </div>
                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cu&aacute;nto material de m&aacute;s hay que pedir?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En cocina, m&aacute;s de lo habitual. Entre enchufes, campana, ventana y el hueco de los muebles altos se corta mucho, y con piezas grandes cada corte desperdicia m&aacute;s superficie. M&aacute;ndanos las medidas del frente y te calculamos los metros exactos antes de que compres.</p>
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
                    <h2>Soy Ricardo. &iquest;Dudas con el formato para tu cocina?
                        <span>Te ayudo a elegir sin compromiso.</span>
                    </h2>
                </div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">&#128205;</div><div class="label">Visita Presencial</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">&#128187;</div><div class="label">Visita Virtual</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">&#128222;</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20azulejos%20grandes%20para%20cocina" class="contact-option-common"><div class="icon">&#128172;</div><div class="label">Whatsapp</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">&#9993;&#65039;</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
