<?php
/**
 * Contact page content — Adrihosan
 * Page ID 113323, slug "contacto"
 */

if ( function_exists( 'adrihosan_contacto_contenido' ) ) {
    return;
}

function adrihosan_contacto_contenido() {
    ob_start();
    ?>

    <!-- HERO (mismo estilo que home, imagen provisional) -->
    <section class="contacto-hero" style="background-image: url('https://www.adrihosan.com/wp-content/uploads/2025/08/home-Adrihosan.jpg');">
        <div class="contacto-hero-content">
            <p class="contacto-eyebrow">Adrihosan &middot; Contacto</p>
            <h1>Elige c&oacute;mo quieres que te ayude Ricardo</h1>
            <p class="contacto-lead">Vis&iacute;tanos en el showroom, haz una videollamada, ll&aacute;manos o escr&iacute;benos. Estamos aqu&iacute; para ayudarte con tu proyecto.</p>
        </div>
    </section>

    <!-- CONTACT METHODS -->
    <section class="contacto-methods">
        <div class="contacto-shell">
            <div class="contacto-methods-grid">

                <a href="#reservas" class="contacto-method-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2021/09/Localizador-contacto.svg" alt="Visita presencial" class="contacto-method-icon">
                    <h3>Visita presencial</h3>
                    <p>Showroom de Valencia con cita previa</p>
                </a>

                <a href="#reservas" class="contacto-method-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/04/video.svg" alt="Videollamada" class="contacto-method-icon">
                    <h3>Videollamada</h3>
                    <p>Visita guiada online sin desplazarte</p>
                </a>

                <a href="tel:+34961957136" class="contacto-method-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/04/tfno.svg" alt="Tel&eacute;fono" class="contacto-method-icon">
                    <h3>Tel&eacute;fono</h3>
                    <p>+34 961 957 136</p>
                </a>

                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contacto-method-card" target="_blank" rel="noopener">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/04/w.svg" alt="WhatsApp" class="contacto-method-icon">
                    <h3>WhatsApp</h3>
                    <p>Escr&iacute;benos al instante</p>
                </a>

                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contacto-method-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/10/ico-form.svg" alt="Formulario" class="contacto-method-icon">
                    <h3>Formulario</h3>
                    <p>Cu&eacute;ntanos tu proyecto en detalle</p>
                </a>

                <a href="mailto:comercial@adrihosan.com" class="contacto-method-card">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/04/e-mail.svg" alt="Email" class="contacto-method-icon">
                    <h3>Email</h3>
                    <p>comercial@adrihosan.com</p>
                </a>

            </div>
        </div>
    </section>

    <!-- RESERVATION SYSTEM -->
    <section class="contacto-reservas" id="reservas">
        <div class="contacto-shell">

            <div class="contacto-section-header">
                <h2>Reserva tu cita con Ricardo</h2>
                <p>Elige tipo de visita, selecciona d&iacute;a y hora, y cu&eacute;ntanos qu&eacute; quieres ver.</p>
                <div class="contacto-meta-pills">
                    <span>45 min</span>
                    <span>L-J 08-15h &middot; V 08-13:30h &middot; S 09-13h</span>
                </div>
            </div>

            <div class="reservas-steps" id="reservas-steps">
                <button class="reservas-step is-active" data-step="1">
                    <span class="reservas-step-num">1</span>
                    <span class="reservas-step-label">Tipo de visita</span>
                </button>
                <div class="reservas-step-line"></div>
                <button class="reservas-step" data-step="2" disabled>
                    <span class="reservas-step-num">2</span>
                    <span class="reservas-step-label">Fecha y hora</span>
                </button>
                <div class="reservas-step-line"></div>
                <button class="reservas-step" data-step="3" disabled>
                    <span class="reservas-step-num">3</span>
                    <span class="reservas-step-label">Tus datos</span>
                </button>
            </div>

            <!-- STEP 1: Visit type -->
            <div class="reservas-panel" id="step-1">
                <h2>&iquest;C&oacute;mo prefieres tu visita?</h2>
                <div class="reservas-type-cards">
                    <button class="reservas-type-card" data-type="presencial">
                        <span class="reservas-type-icon"><img src="https://www.adrihosan.com/wp-content/uploads/2021/09/Localizador-contacto.svg" alt="" class="reservas-type-svg"></span>
                        <h3>Visita presencial</h3>
                        <p>En el showroom de Valencia. Ideal para ver materiales, comparar acabados y resolver dudas en persona.</p>
                        <ul>
                            <li>Duraci&oacute;n: 45 min</li>
                            <li>C/ Los Centelles, 48</li>
                            <li>Parking gratuito enfrente</li>
                        </ul>
                    </button>
                    <button class="reservas-type-card" data-type="virtual">
                        <span class="reservas-type-icon"><img src="https://www.adrihosan.com/wp-content/uploads/2022/04/video.svg" alt="" class="reservas-type-svg"></span>
                        <h3>Visita virtual</h3>
                        <p>Videollamada con Ricardo para ver cat&aacute;logo, resolver dudas y avanzar sin desplazarte.</p>
                        <ul>
                            <li>Duraci&oacute;n: 45 min</li>
                            <li>Online desde casa</li>
                            <li>Enlace por email</li>
                        </ul>
                    </button>
                </div>
            </div>

            <!-- STEP 2: Date & time -->
            <div class="reservas-panel" id="step-2" hidden>
                <div class="reservas-back-row">
                    <button class="reservas-back" data-goto="1">&larr; Cambiar tipo de visita</button>
                    <span class="reservas-type-badge" id="type-badge"></span>
                </div>
                <h2>Elige d&iacute;a y hora</h2>
                <div class="reservas-calendar">
                    <div class="reservas-week-nav">
                        <button class="reservas-week-btn" id="prev-week" disabled>&larr;</button>
                        <span class="reservas-week-label" id="week-label"></span>
                        <button class="reservas-week-btn" id="next-week">&rarr;</button>
                    </div>
                    <div class="reservas-days" id="days-strip"></div>
                    <div class="reservas-day-label" id="day-label"></div>
                    <div class="reservas-slots" id="slots-grid"></div>
                </div>
            </div>

            <!-- STEP 3: Form -->
            <div class="reservas-panel" id="step-3" hidden>
                <div class="reservas-back-row">
                    <button class="reservas-back" data-goto="2">&larr; Cambiar fecha</button>
                </div>
                <h2>Cu&eacute;ntanos qu&eacute; quieres ver</h2>
                <div class="reservas-summary" id="booking-summary"></div>
                <form class="reservas-form" id="reservas-form" novalidate>
                    <div class="reservas-form-row">
                        <input name="name" type="text" placeholder="Nombre y apellidos" required autocomplete="name">
                    </div>
                    <div class="reservas-form-row reservas-form-row--half">
                        <input name="email" type="email" placeholder="Email" required autocomplete="email">
                        <input name="phone" type="tel" placeholder="Tel&eacute;fono" required autocomplete="tel">
                    </div>
                    <div class="reservas-form-row">
                        <textarea name="needs" placeholder="&iquest;Qu&eacute; materiales o productos quieres ver? &iquest;Tienes alguna duda concreta?" rows="4" required></textarea>
                    </div>
                    <input type="hidden" name="visitType" id="input-visit-type">
                    <input type="hidden" name="startDate" id="input-start-date">
                    <input type="hidden" name="startTime" id="input-start-time">
                    <input type="text" name="website_url" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <button type="submit" class="reservas-submit" id="reservas-submit">Solicitar cita</button>
                </form>
            </div>

            <!-- Confirmation -->
            <div class="reservas-panel reservas-confirmation" id="step-done" hidden>
                <div class="reservas-done-icon">&#10003;</div>
                <h2>&iexcl;Reserva recibida!</h2>
                <p>Hemos enviado un email de confirmaci&oacute;n. Ricardo se pondr&aacute; en contacto contigo si necesita alg&uacute;n detalle adicional.</p>
                <div class="reservas-done-summary" id="done-summary"></div>
            </div>

        </div>
    </section>

    <!-- SHOWROOM -->
    <section class="contacto-showroom" id="showroom">
        <div class="contacto-shell">
            <div class="contacto-section-header">
                <h2>Nuestro showroom en Valencia</h2>
                <p>M&aacute;s de 500 m&sup2; de exposici&oacute;n con las &uacute;ltimas tendencias en azulejos, pavimentos y muebles de ba&ntilde;o.</p>
            </div>

            <div class="contacto-showroom-grid">
                <div class="contacto-showroom-photo">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/10/exposicion-presencial-adrihosan-1.webp" alt="Exposici&oacute;n Adrihosan" loading="lazy">
                </div>
                <div class="contacto-showroom-photo">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/10/exposicion-presencial-adrihosan-2.png" alt="Showroom Adrihosan" loading="lazy">
                </div>
            </div>

            <div class="contacto-showroom-info">
                <div class="contacto-info-card">
                    <h3>Direcci&oacute;n</h3>
                    <p><strong>C/ Los Centelles, 48</strong><br>46006 &ndash; Valencia (Ruzafa)</p>
                    <p class="contacto-parking">Parking gratuito enfrente: Los Centelles, 45</p>
                </div>
                <div class="contacto-info-card">
                    <h3>Horario</h3>
                    <p>Lunes a Jueves: 8:00 &ndash; 15:00</p>
                    <p>Viernes: 8:00 &ndash; 13:30</p>
                    <p>S&aacute;bados: 9:00 &ndash; 13:00</p>
                </div>
                <div class="contacto-info-card">
                    <h3>Contacto directo</h3>
                    <p><strong>Tel:</strong> <a href="tel:+34961957136">+34 961 957 136</a></p>
                    <p><strong>Email:</strong> <a href="mailto:comercial@adrihosan.com">comercial@adrihosan.com</a></p>
                </div>
            </div>

            <div class="contacto-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3080.3809904016807!2d-0.3729775493394278!3d39.460720857541546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33136d95effd6955!2sAdrihosan%20azulejos%20en%20Valencia!5e0!3m2!1ses!2ses!4v1649057479844!5m2!1ses!2ses" style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="400" title="Mapa Adrihosan"></iframe>
            </div>
        </div>
    </section>

    <!-- VIDEOLLAMADA -->
    <section class="contacto-videollamada" id="videollamada">
        <div class="contacto-shell">
            <div class="contacto-section-header">
                <h2>Visita virtual por videollamada</h2>
                <p>Ricardo puede hacerte una visita guiada online, ense&ntilde;&aacute;ndote todos los productos de nuestro cat&aacute;logo, incluso los que no hay en la web. Podr&aacute;s plantearle cualquier duda y tambi&eacute;n puede ense&ntilde;arte a hacer t&uacute; mismo tus propios presupuestos.</p>
            </div>
            <div class="contacto-videollamada-grid">
                <div class="contacto-videollamada-photo">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/10/exposicion-videollamada-adrihosan-1.png" alt="Videollamada Adrihosan" loading="lazy">
                </div>
                <div class="contacto-videollamada-photo">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/10/exposicion-videollamada-adrihosan-2.png" alt="Videollamada Adrihosan" loading="lazy">
                </div>
                <div class="contacto-videollamada-photo">
                    <img src="https://www.adrihosan.com/wp-content/uploads/2022/10/exposicion-videollamada-adrihosan-3-450x394.png" alt="Exposici&oacute;n online" loading="lazy">
                </div>
            </div>
            <div class="contacto-videollamada-cta">
                <a href="#reservas" class="contacto-btn-cta">Reservar videollamada</a>
            </div>
        </div>
    </section>

    <!-- PHONE & WHATSAPP -->
    <section class="contacto-telefono" id="telefono">
        <div class="contacto-shell">
            <div class="contacto-section-header">
                <h2>Tel&eacute;fono y WhatsApp</h2>
                <p>&iquest;Dudas r&aacute;pidas? Este es el canal. Para proyectos o presupuestos detallados, te recomendamos agendar una videollamada o usar el formulario.</p>
            </div>
            <div class="contacto-telefono-buttons">
                <a href="tel:+34961957136" class="contacto-btn-cta">Llamar al +34 961 957 136</a>
                <a href="https://api.whatsapp.com/send?phone=+34961957136&text=Hola,%20Necesito%20m%C3%A1s%20informaci%C3%B3n!" class="contacto-btn-outline" target="_blank" rel="noopener">WhatsApp al +34 961 957 136</a>
            </div>
        </div>
    </section>

    <!-- FORM & EMAIL -->
    <section class="contacto-formulario" id="formulario">
        <div class="contacto-shell">
            <div class="contacto-section-header">
                <h2>Formulario y Email</h2>
                <p>Para que podamos atenderte mejor, te recomendamos rellenar nuestro formulario de contacto o escribirnos directamente.</p>
            </div>
            <div class="contacto-telefono-buttons">
                <a href="https://www.adrihosan.com/contacta-con-nosotros/" class="contacto-btn-cta">Ir al formulario de contacto</a>
                <a href="mailto:comercial@adrihosan.com" class="contacto-btn-outline">Enviar email</a>
            </div>
        </div>
    </section>

    <?php
    return ob_get_clean();
}
