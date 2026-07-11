<?php
/**
 * Category: Inodoro para minusvalidos (ID: 3802)
 *
 * Subcategoria de Inodoro (ID 81), filtrada por accesibilidad / PMR.
 * ~3 productos al montar (Ebora, Tena/Sena). Crecera.
 *
 * Captura el CLUSTER COMPLETO de accesibilidad que esta categoria
 * absorbio al consolidar:
 *   - inodoro para minusvalidos (333/mes)
 *   - inodoro alto (195/mes)
 *   - inodoros altos para personas mayores (175/mes)
 *   - inodoro alto especial (250/mes)
 *   - inodoro adaptado (114/mes)
 *   - inodoro movilidad reducida (88/mes)
 *   - inodoro para discapacitados (69/mes)
 *   - inodoro accesible (79/mes)
 *   - inodoro elevado (52/mes)
 *
 * Buyer persona primario: familiar/cuidador adaptando el bano de un
 * mayor o PMR. NO es estetica, es SEGURIDAD y AUTONOMIA. Tono cercano,
 * sin frialdad clinica, sin marketing agresivo.
 *
 * Hueco a explotar: la competencia vende la pieza suelta. Adrihosan
 * vende el bano adaptado completo (inodoro alto + barras + plato PMR)
 * con asesoramiento humano sobre la altura correcta.
 *
 * REGLAS DURAS (briefing junio 2026):
 * - H1 via adrihosan_h1_dinamico("Inodoros para minusvalidos").
 * - FAQs HTML sin json-ld.
 * - Datos reales: porcelana vitrificada, altura 45-50 cm (rango
 *   normativo del sector). NO inventar cm exactos por modelo.
 * - Bloque contacto ESTANDAR (6 opciones, como cocina-imitacion).
 * - Cada H2 con keyword o variante (minusvalidos / adaptado / alto
 *   / accesible / PMR).
 *
 * @package Adrihosan
 */

// ============================================================================
// CATEGORIA 3802 - INODORO PARA MINUSVALIDOS
// ============================================================================

function adrihosan_categoria_inodoro_minusvalidos_contenido_superior() {
    ?>

    <!-- 1. HERO -->
    <section class="hero-section-container adrihosan-full-width-block" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2026/06/inodoro-minusvalidos-Adrihosan.jpg');">
        <div class="hero-content">
            <h1><?php echo adrihosan_h1_dinamico( 'Inodoros para minusv&aacute;lidos' ); ?></h1>
            <p class="hero-tagline">Altura accesible, estabilidad y autonom&iacute;a en el ba&ntilde;o.</p>
            <div class="hero-buttons">
                <a href="#catalogo-inodoro-minus" class="hero-btn primary">Ver Cat&aacute;logo</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20inodoro%20para%20minusv%C3%A1lidos" class="hero-btn secondary" target="_blank">Asesorarme por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 1b. SELLOS DE VALOR DIFERENCIAL -->
    <section class="ap-value-section adrihosan-full-width-block">
        <div class="ap-value-wrapper">
            <div class="section-header">
                <p class="section-intro">
                    Los <strong>inodoros para minusv&aacute;lidos</strong> de Adrihosan se sientan m&aacute;s altos &mdash;en torno a los <strong>45-50&nbsp;cm</strong> que pide la normativa de accesibilidad&mdash; para que sentarse y levantarse cueste menos y sea m&aacute;s seguro. Pensados para personas mayores, movilidad reducida y ba&ntilde;os que deben cumplir PMR. Te ayudamos a elegir la altura correcta por WhatsApp y te lo enviamos a toda Espa&ntilde;a.
                </p>
            </div>
            <div class="ap-value-grid">
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128208;</div>
                    <h3>Altura accesible</h3>
                    <p>Asiento a 45-50&nbsp;cm, conforme a normativa PMR.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129704;</div>
                    <h3>Estabilidad segura</h3>
                    <p>Fijaci&oacute;n firme al suelo o pared, sin balanceo al apoyarse.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#129309;</div>
                    <h3>Asesoramiento humano</h3>
                    <p>Te decimos qu&eacute; altura encaja con cada persona.</p>
                </div>
                <div class="ap-value-card">
                    <div class="ap-value-icon">&#128666;</div>
                    <h3>Env&iacute;o a toda Espa&ntilde;a</h3>
                    <p>A tu casa o a la de tu familiar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ACCESOS RAPIDOS PARA COMPLETAR EL BANO ADAPTADO + FILTROS FE -->
    <section class="inodoro-minus-shortcuts adrihosan-full-width-block">
        <div class="inodoro-minus-shortcuts-wrapper">
            <span class="shortcuts-label">Completa el ba&ntilde;o adaptado:</span>
            <div class="shortcuts-pills">
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">A suelo</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Suspendidos</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/accesorios-de-bano/barras-de-seguridad/">Barras de seguridad</a>
                <a class="shortcut-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/">Platos ducha PMR</a>
            </div>
        </div>
    </section>

    <div id="destino-filtro-adria-inodoro-minus" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0; min-height: 60px;"></div>
    <div class="filter-container-master" style="margin-bottom:50px;"><?php echo do_shortcode('[fe_widget id="428402"]'); ?></div>

    <!-- 3. STORYTELLING: NO ES UN INODORO CUALQUIERA -->
    <section class="inodoro-minus-storytelling adrihosan-full-width-block">
        <div class="inodoro-minus-storytelling-wrapper">
            <h2>Por qu&eacute; un inodoro para minusv&aacute;lidos no es un inodoro cualquiera</h2>
            <div class="storytelling-text">
                <p>El detalle que lo cambia todo es la <strong>altura</strong>. Un inodoro est&aacute;ndar ronda los 40&nbsp;cm; uno adaptado se sit&uacute;a en <strong>45-50&nbsp;cm</strong>, la franja que marca la normativa de accesibilidad. Esos cent&iacute;metros de m&aacute;s significan sentarse y levantarse con mucho menos esfuerzo de rodillas y cadera, y bajan el riesgo de ca&iacute;da, que es la causa principal de los sustos en el ba&ntilde;o de una persona mayor.</p>
                <p>A eso se suman la <strong>estabilidad</strong> (la pieza va firmemente fijada para que nadie pierda el equilibrio al apoyarse) y el <strong>espacio despejado</strong> alrededor para acercar una silla de ruedas. Encaja igual en un <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">inodoro a suelo</a> alto o en un <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">suspendido</a> con bastidor a la altura justa.</p>
            </div>
        </div>
    </section>

    <!-- 4. TITULO CATALOGO -->
    <div id="catalogo-inodoro-minus" class="product-loop-header">
        <h2 class="product-loop-title">Cat&aacute;logo de inodoros adaptados</h2>
        <p class="product-loop-subtitle">Modelos a 45-50&nbsp;cm de altura, fijaci&oacute;n firme y compatibles con barras de apoyo.</p>
    </div>

    <!-- 5. WRAPPER AJAX para Filter Everything Pro -->
    <div id="fe-products-wrapper">
    <?php
}

function adrihosan_categoria_inodoro_minusvalidos_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->

    <!-- 6. CTA INTERMEDIO -->
    <section class="inodoro-minus-cta-mid adrihosan-full-width-block">
        <div class="cta-mid-wrapper">
            <p class="cta-mid-text">&iquest;No sabes qu&eacute; altura necesitas? Cu&eacute;ntanos qui&eacute;n lo va a usar y te decimos qu&eacute; modelo encaja antes de comprar.</p>
            <a class="cta-mid-btn" href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20no%20s%C3%A9%20qu%C3%A9%20altura%20necesito%20en%20un%20inodoro%20para%20minusv%C3%A1lidos" target="_blank">WhatsApp 96 195 71 36</a>
        </div>
    </section>

    <!-- 7. COMPARATIVA - A SUELO ALTO vs SUSPENDIDO PMR -->
    <section class="inodoro-minus-sizes adrihosan-full-width-block">
        <div class="inodoro-minus-sizes-wrapper">
            <h2>Inodoro alto a suelo o suspendido PMR: c&oacute;mo decidir</h2>
            <p class="sizes-intro">Tabla para resolver la duda antes de comprar:</p>

            <div class="sizes-table-wrapper">
                <table class="sizes-table">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>A suelo alto</th>
                            <th>Suspendido PMR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Altura del asiento</strong></td>
                            <td>Seg&uacute;n el modelo (rango 45-50&nbsp;cm)</td>
                            <td>Regulable seg&uacute;n el bastidor</td>
                        </tr>
                        <tr>
                            <td><strong>Instalaci&oacute;n</strong></td>
                            <td>Aprovecha el desag&uuml;e del inodoro antiguo</td>
                            <td>Bastidor empotrado en pared</td>
                        </tr>
                        <tr>
                            <td><strong>Espacio para silla de ruedas</strong></td>
                            <td>Bueno</td>
                            <td>M&aacute;ximo (suelo despejado)</td>
                        </tr>
                        <tr>
                            <td><strong>Limpieza del suelo</strong></td>
                            <td>Normal</td>
                            <td>Total (nada apoyado en el suelo)</td>
                        </tr>
                        <tr>
                            <td><strong>Barras de apoyo</strong></td>
                            <td>Recomendadas</td>
                            <td>Recomendadas</td>
                        </tr>
                        <tr>
                            <td><strong>Ver cat&aacute;logo</strong></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a></td>
                            <td><a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="sizes-closing">Las dos opciones son v&aacute;lidas. La elecci&oacute;n depende del estado del desag&uuml;e existente y del espacio que se quiera dejar libre para una silla de ruedas. Si dudas, mejor consulta antes de pedir.</p>
        </div>
    </section>

    <!-- 8. CLAVES / PROPIEDADES DE UN BANO ACCESIBLE DE VERDAD -->
    <section class="inodoro-minus-materials adrihosan-full-width-block">
        <div class="inodoro-minus-materials-wrapper">
            <h2>Lo que mira un ba&ntilde;o accesible de verdad</h2>
            <p class="materials-intro">Las 8 claves que marcan la diferencia entre un inodoro adaptado y uno "alto y ya est&aacute;".</p>

            <div class="materials-grid">
                <div class="material-card">
                    <span class="material-icon">&#128208;</span>
                    <h3>Altura 45-50&nbsp;cm</h3>
                    <p>Conforme a la normativa de accesibilidad.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129521;</span>
                    <h3>Porcelana vitrificada esmaltada</h3>
                    <p>Higi&eacute;nica y f&aacute;cil de limpiar.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128297;</span>
                    <h3>Fijaci&oacute;n firme</h3>
                    <p>Al suelo o a la pared, sin balanceo al apoyarse.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128290;</span>
                    <h3>Salida dual</h3>
                    <p>Encaja en el desag&uuml;e existente (suelo o pared).</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#9831;</span>
                    <h3>Espacio para la silla de ruedas</h3>
                    <p>Para aproximarse c&oacute;modamente a un lado.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#129704;</span>
                    <h3>Compatible con barras abatibles</h3>
                    <p>Para apoyarse al sentarse y levantarse.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#127968;</span>
                    <h3>Apto hogar y centros</h3>
                    <p>Hoteles, residencias y espacios p&uacute;blicos PMR.</p>
                </div>
                <div class="material-card">
                    <span class="material-icon">&#128167;</span>
                    <h3>Descarga fiable</h3>
                    <p>Mecanismo robusto para uso intensivo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ASESORAMIENTO -->
    <section class="inodoro-minus-asesoramiento adrihosan-full-width-block">
        <div class="inodoro-minus-asesoramiento-wrapper">
            <h2>C&oacute;mo acertar con tu inodoro adaptado en 4 pasos</h2>
            <p class="asesoramiento-intro">
                Cuando adaptas el ba&ntilde;o de un familiar la urgencia y los nervios son normales &mdash; sobre todo si viene de una ca&iacute;da o un alta. Sin presi&oacute;n de venta: te orientamos con calma para que aciertes.
            </p>

            <div class="steps-grid">
                <div class="step-card">
                    <span class="step-number">1</span>
                    <p><strong>Cu&eacute;ntanos qui&eacute;n lo va a usar:</strong> altura de la persona, si usa silla de ruedas, si se levanta con dificultad.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">2</span>
                    <p><strong>Te recomendamos</strong> altura y tipo (a suelo alto o suspendido).</p>
                </div>
                <div class="step-card">
                    <span class="step-number">3</span>
                    <p><strong>Comprobamos</strong> que encaja con la salida de tu desag&uuml;e actual.</p>
                </div>
                <div class="step-card">
                    <span class="step-number">4</span>
                    <p><strong>Te lo enviamos</strong> a toda Espa&ntilde;a y te orientamos con las <a href="https://www.adrihosan.com/categoria-producto/accesorios-de-bano/barras-de-seguridad/">barras de apoyo</a>.</p>
                </div>
            </div>

            <div class="asesoramiento-cta">
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20adapto%20el%20ba%C3%B1o%20de%20un%20familiar%20y%20necesito%20ayuda" class="bumper-btn" target="_blank">WhatsApp 96 195 71 36</a>
            </div>
        </div>
    </section>

    <!-- 10. CATEGORIAS RELACIONADAS - COMPLETAR EL BANO ADAPTADO -->
    <section class="inodoro-minus-related adrihosan-full-width-block">
        <div class="inodoro-minus-related-wrapper">
            <h2>Para terminar el ba&ntilde;o adaptado</h2>
            <div class="related-pills">
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoro-a-suelo/">Inodoros a suelo</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">Inodoros suspendidos</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/accesorios-de-bano/barras-de-seguridad/">Barras de seguridad</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/platos-de-ducha/platos-de-ducha-para-personas-con-movilidad-reducida/">Platos de ducha PMR</a>
                <a class="related-pill" href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/">Todos los inodoros</a>
                <a class="related-pill" href="https://www.adrihosan.com/cual-inodoro-es-mejor/">Gu&iacute;a: cu&aacute;l inodoro es mejor</a>
            </div>
        </div>
    </section>

    <?php
    // 11. BLOQUE DE TEXTO ESTANDAR DE CATEGORIA (editable desde WP admin)
    $descripcion_editor = category_description();
    if ( ! empty( $descripcion_editor ) ) :
    ?>
    <section class="bho-guide-section">
        <div class="bho-guide-wrapper" style="max-width: 850px; margin: 0 auto; padding: 40px 20px;">
            <div class="term-description-dinamica" style="text-align: left; font-family: 'Poppins','Poppins Fallback',sans-serif; color: #3f6f7b; line-height: 1.8;">
                <?php echo $descripcion_editor; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- 12. FAQs (9 preguntas, NO json-ld - Rank Math gestiona el schema) -->
    <section class="faq-section-common adrihosan-full-width-block">
        <div class="faq-wrapper-common">
            <h2 class="faq-main-title-common">Preguntas frecuentes sobre inodoros para minusv&aacute;lidos</h2>
            <div class="faq-items-wrapper">

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; altura de inodoro es la ideal para una persona mayor?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La franja recomendada es un asiento entre 45 y 50 cm del suelo, frente a los 40 o 42 cm de un inodoro est&aacute;ndar. Esa altura reduce la flexi&oacute;n de rodillas y caderas al sentarse y levantarse. La referencia pr&aacute;ctica es que la persona quede sentada con los pies bien apoyados en el suelo.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Qu&eacute; diferencia hay entre un inodoro alto y uno est&aacute;ndar?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La diferencia est&aacute; en el asiento. Un inodoro est&aacute;ndar lo sit&uacute;a a unos 40 o 42 cm y un inodoro alto lo sube a entre 45 y 50 cm. Esos cent&iacute;metros de m&aacute;s evitan la sentadilla profunda, que es el movimiento que m&aacute;s cuesta con poca fuerza en las piernas. En altura total con cisterna baja, un modelo alto ronda o supera los 70 cm.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Sirve para un anciano que se levanta con dificultad?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Es justo su caso ideal. Al partir de un asiento m&aacute;s alto, el recorrido para incorporarse es menor y las rodillas y caderas trabajan mucho menos. Combinado con una barra de apoyo junto a la taza, levantarse pasa de ser un esfuerzo a ser un gesto seguro.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se puede combinar con barras de apoyo?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;, y es la combinaci&oacute;n que m&aacute;s recomendamos. Una barra abatible junto a la taza o una agarradera fija en la pared dan el punto de apoyo firme para sentarse y levantarse con seguridad. En Adrihosan encontrar&aacute;s <a href="https://www.adrihosan.com/categoria-producto/accesorios-de-bano/barras-de-seguridad/">barras de seguridad</a> y agarraderas de ba&ntilde;o que se instalan en la misma reforma.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Cumple la normativa de accesibilidad para minusv&aacute;lidos o PMR?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>La normativa espa&ntilde;ola de accesibilidad sit&uacute;a el asiento de los aseos adaptados entre 45 y 50 cm del suelo y los modelos de esta categor&iacute;a se mueven en esa franja. Para un proyecto con requisitos concretos de PMR te enviamos la ficha t&eacute;cnica del modelo antes de comprar y as&iacute; lo validas con tu t&eacute;cnico.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Se instala con el desag&uuml;e est&aacute;ndar existente?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>En la mayor&iacute;a de reformas s&iacute;, porque estos inodoros usan medidas de desag&uuml;e convencionales. Solo hay que comprobar si tu salida actual es vertical al suelo u horizontal a la pared. M&aacute;ndanos una foto por WhatsApp al 96 195 71 36 y te confirmamos la compatibilidad del modelo con tu ba&ntilde;o.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hac&eacute;is env&iacute;o a toda Espa&ntilde;a con financiaci&oacute;n?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>S&iacute;. Enviamos a toda Espa&ntilde;a con seguimiento del pedido y puedes financiar la compra en 3 meses sin intereses. Antes de decidir puedes resolver cualquier duda por WhatsApp o por videollamada viendo el inodoro desde nuestro showroom de Valencia.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Hay inodoros altos con cisterna alta o empotrada?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Los modelos de esta categor&iacute;a son de tanque bajo a suelo, la opci&oacute;n m&aacute;s directa en una reforma sin obra. Si partes de obra o quieres cisterna empotrada, un <a href="https://www.adrihosan.com/categoria-producto/sanitarios/inodoro/inodoros-suspendidos/">inodoro suspendido</a> permite fijar la taza a la altura exacta que necesites, incluida la franja de 45 a 50 cm recomendada para personas mayores.</p>
                    </div>
                </div>

                <div class="faq-item-common">
                    <button class="faq-question-common">
                        <span>&iquest;Resulta inc&oacute;modo un inodoro alto para el resto de la familia?</span>
                        <span class="faq-icon-common">+</span>
                    </button>
                    <div class="faq-answer-common">
                        <p>Para la mayor&iacute;a de adultos no, porque los pies siguen apoyando en el suelo con normalidad. De hecho muchas personas altas lo prefieren. Con ni&ntilde;os peque&ntilde;os basta un alza o un escal&oacute;n estable, igual que se usa con un lavabo.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 13. CONTACTO ESTANDAR (bloque comun de toda la web Adrihosan) -->
    <section class="contact-help-common adrihosan-full-width-block">
        <div class="contact-help-wrapper">
            <div class="contact-intro">
                <img src="https://www.adrihosan.com/wp-content/uploads/2025/04/Ricardo-faq.jpg" alt="Foto de Ricardo, experto en materiales de Adrihosan">
                <div><h2>&iquest;A&uacute;n con dudas? Te ayudo a elegir.</h2><p>Soy Ricardo. D&eacute;jame asesorarte para que el ba&ntilde;o adaptado de tu familiar quede a la altura justa.</p></div>
            </div>
            <div class="contact-options-grid-common">
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-presencial" class="contact-option-common"><div class="icon">📍</div><div class="label">Exposici&oacute;n</div></a>
                <a href="https://www.adrihosan.com/contacto/#visita-exposicion-videollamada" class="contact-option-common"><div class="icon">💻</div><div class="label">Videollamada</div></a>
                <a href="tel:+34961957136" class="contact-option-common"><div class="icon">📞</div><div class="label">Tel&eacute;fono</div></a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20necesito%20ayuda%20con%20un%20inodoro%20para%20minusv%C3%A1lidos" class="contact-option-common"><div class="icon">💬</div><div class="label">Whatsapp</div></a>
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contact-option-common"><div class="icon">📝</div><div class="label">Formulario</div></a>
                <a href="mailto:hola@adrihosan.com" class="contact-option-common"><div class="icon">✉️</div><div class="label">Email</div></a>
            </div>
        </div>
    </section>
    <?php
}
