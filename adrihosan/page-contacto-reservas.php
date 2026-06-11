<?php
/**
 * Template Name: Contacto Reservas Adrihosan
 */

$css_path = get_stylesheet_directory() . '/assets/css/contacto-reservas.css';
if ( file_exists( $css_path ) ) {
    wp_enqueue_style(
        'adrihosan-contacto-reservas',
        get_stylesheet_directory_uri() . '/assets/css/contacto-reservas.css',
        [],
        filemtime( $css_path )
    );
}

$js_path = get_stylesheet_directory() . '/assets/js/reservas-calendar.js';
if ( file_exists( $js_path ) ) {
    wp_enqueue_script(
        'adrihosan-reservas-calendar',
        get_stylesheet_directory_uri() . '/assets/js/reservas-calendar.js',
        [],
        filemtime( $js_path ),
        true
    );
    wp_localize_script( 'adrihosan-reservas-calendar', 'RESERVAS', [
        'restUrl' => esc_url_raw( rest_url( 'adrihosan/v1' ) ),
        'nonce'   => wp_create_nonce( 'wp_rest' ),
        'config'  => [
            'duration'     => adrihosan_reservas_duration(),
            'minAdvance'   => adrihosan_reservas_min_advance_hours(),
            'lastBuffer'   => adrihosan_reservas_last_slot_buffer(),
            'maxWeeks'     => adrihosan_reservas_max_weeks_ahead(),
            'openingHours' => adrihosan_reservas_horarios(),
        ],
    ] );
}

get_header();
?>
<main id="primary" class="site-main reservas-page">

    <section class="reservas-hero">
        <div class="reservas-shell">
            <p class="reservas-eyebrow">Adrihosan · Cita previa</p>
            <h1>Reserva tu visita al showroom o por videollamada</h1>
            <p class="reservas-lead">Elige tipo de visita, selecciona día y hora, y cuéntanos qué quieres ver para prepararlo antes de atenderte.</p>
            <div class="reservas-meta">
                <span>⏱ 45 min</span>
                <span>📍 C/ Los Centelles, 48 – Valencia</span>
                <span>🕐 L-J 08-15h · V 08-13:30h · S 09-13h</span>
            </div>
        </div>
    </section>

    <section class="reservas-flow">
        <div class="reservas-shell">

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

            <!-- PASO 1: Tipo de visita -->
            <div class="reservas-panel" id="step-1">
                <h2>¿Cómo prefieres tu visita?</h2>
                <div class="reservas-type-cards">
                    <button class="reservas-type-card" data-type="presencial">
                        <span class="reservas-type-icon">📍</span>
                        <h3>Visita presencial</h3>
                        <p>En el showroom de Valencia. Ideal para ver materiales, comparar acabados y resolver dudas en persona.</p>
                        <ul>
                            <li>Duración: 45 min</li>
                            <li>C/ Los Centelles, 48</li>
                        </ul>
                    </button>
                    <button class="reservas-type-card" data-type="virtual">
                        <span class="reservas-type-icon">💻</span>
                        <h3>Visita virtual</h3>
                        <p>Videollamada con Ricardo para ver catálogo, resolver dudas y avanzar sin desplazarte.</p>
                        <ul>
                            <li>Duración: 45 min</li>
                            <li>Online desde casa</li>
                        </ul>
                    </button>
                </div>
            </div>

            <!-- PASO 2: Fecha y hora -->
            <div class="reservas-panel" id="step-2" hidden>
                <div class="reservas-back-row">
                    <button class="reservas-back" data-goto="1">← Cambiar tipo de visita</button>
                    <span class="reservas-type-badge" id="type-badge"></span>
                </div>
                <h2>Elige día y hora</h2>
                <div class="reservas-calendar">
                    <div class="reservas-week-nav">
                        <button class="reservas-week-btn" id="prev-week" disabled>←</button>
                        <span class="reservas-week-label" id="week-label"></span>
                        <button class="reservas-week-btn" id="next-week">→</button>
                    </div>
                    <div class="reservas-days" id="days-strip"></div>
                    <div class="reservas-day-label" id="day-label"></div>
                    <div class="reservas-slots" id="slots-grid"></div>
                </div>
            </div>

            <!-- PASO 3: Datos + formulario -->
            <div class="reservas-panel" id="step-3" hidden>
                <div class="reservas-back-row">
                    <button class="reservas-back" data-goto="2">← Cambiar fecha</button>
                </div>
                <h2>Cuéntanos qué quieres ver</h2>
                <div class="reservas-summary" id="booking-summary"></div>
                <form class="reservas-form" id="reservas-form" novalidate>
                    <div class="reservas-form-row">
                        <input name="name" type="text" placeholder="Nombre y apellidos" required autocomplete="name">
                    </div>
                    <div class="reservas-form-row reservas-form-row--half">
                        <input name="email" type="email" placeholder="Email" required autocomplete="email">
                        <input name="phone" type="tel" placeholder="Teléfono" required autocomplete="tel">
                    </div>
                    <div class="reservas-form-row">
                        <textarea name="needs" placeholder="¿Qué materiales o productos quieres ver? ¿Tienes alguna duda concreta?" rows="4" required></textarea>
                    </div>
                    <input type="hidden" name="visitType" id="input-visit-type">
                    <input type="hidden" name="startDate" id="input-start-date">
                    <input type="hidden" name="startTime" id="input-start-time">
                    <!-- Honeypot -->
                    <input type="text" name="website_url" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <button type="submit" class="reservas-submit" id="reservas-submit">Solicitar cita</button>
                </form>
            </div>

            <!-- Confirmación -->
            <div class="reservas-panel reservas-confirmation" id="step-done" hidden>
                <div class="reservas-done-icon">✅</div>
                <h2>¡Reserva recibida!</h2>
                <p>Hemos enviado un email de confirmación. Ricardo se pondrá en contacto contigo si necesita algún detalle adicional.</p>
                <div class="reservas-done-summary" id="done-summary"></div>
            </div>

        </div>
    </section>
</main>
<?php
get_footer();
