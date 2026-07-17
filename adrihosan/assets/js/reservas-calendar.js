(function () {
    'use strict';

    var state = {
        visitType: null,
        weekOffset: 0,
        selectedDate: null,
        selectedSlot: null,
        weekData: null,
        loading: false,
        // Numero de secuencia de peticiones de disponibilidad: clicks
        // rapidos en prev/next lanzan varios POST y una respuesta tardia
        // podia pintar los huecos de OTRA semana. Solo se acepta la
        // respuesta cuyo seq coincide con el ultimo lanzado.
        requestSeq: 0
    };

    var MONTHS = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
        'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
    var DAYS_SHORT = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];

    function $(id) { return document.getElementById(id); }

    function getWeekDates(offset) {
        var now = new Date();
        var day = now.getDay();
        var diff = day === 0 ? 1 : 1 - day;
        var monday = new Date(now);
        monday.setDate(now.getDate() + diff + (offset * 7));
        monday.setHours(0, 0, 0, 0);

        var dates = [];
        for (var i = 0; i < 6; i++) {
            var d = new Date(monday);
            d.setDate(monday.getDate() + i);
            dates.push(d);
        }
        return dates;
    }

    function formatDate(d) {
        var y = d.getFullYear();
        var m = String(d.getMonth() + 1).padStart(2, '0');
        var dd = String(d.getDate()).padStart(2, '0');
        return y + '-' + m + '-' + dd;
    }

    function formatDateLong(d) {
        return DAYS_SHORT[d.getDay()] + ' ' + d.getDate() + ' de ' + MONTHS[d.getMonth()];
    }

    function isPastDay(d) {
        var today = new Date();
        today.setHours(0, 0, 0, 0);
        return d < today;
    }

    function goToStep(num) {
        var panels = document.querySelectorAll('.reservas-panel, .reservas-confirmation');
        for (var i = 0; i < panels.length; i++) {
            panels[i].hidden = true;
        }

        var target = $('step-' + num) || $('step-done');
        if (target) target.hidden = false;

        var steps = document.querySelectorAll('.reservas-step');
        for (var j = 0; j < steps.length; j++) {
            var s = steps[j];
            var stepNum = parseInt(s.getAttribute('data-step'));
            s.classList.remove('is-active', 'is-done');
            if (stepNum === num) {
                s.classList.add('is-active');
                s.disabled = false;
            } else if (stepNum < num) {
                s.classList.add('is-done');
                s.disabled = false;
            } else {
                s.disabled = true;
            }
        }
    }

    function fetchWeekAvailability() {
        var dates = getWeekDates(state.weekOffset);
        var start = formatDate(dates[0]);
        var end = formatDate(dates[dates.length - 1]);
        var slotsGrid = $('slots-grid');

        state.loading = true;
        if (slotsGrid) slotsGrid.innerHTML = '<div class="reservas-slots-loading">Cargando disponibilidad...</div>';

        // POST a proposito (no GET): LiteSpeed y cualquier cache/CDN NUNCA
        // cachean peticiones POST, asi que es IMPOSIBLE que sirvan una
        // disponibilidad antigua ("no hay disponibilidad"). Es la unica medida
        // que no depende de la config de LiteSpeed (Cache REST API, query
        // strings, etc.). La disponibilidad SIEMPRE se pide en vivo.
        //
        // SIN X-WP-Nonce a proposito: /availability es publico y no lo
        // verifica; enviar un nonce caducado (del HTML de /contacto/ cacheado)
        // provocaba 403 rest_cookie_invalid_nonce. El POST /bookings si lo
        // envia (alli es obligatorio).
        var url = RESERVAS.restUrl + '/availability';
        var seq = ++state.requestSeq;

        fetch(url, {
            method: 'POST',
            cache: 'no-store',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ start: start, end: end })
        })
            .then(function (res) {
                // Sin esto, un 403/500/503 con cuerpo JSON se interpretaba
                // como "days undefined" y se mostraba "No hay huecos"
                // enmascarando el fallo real del backend (patron que oculto
                // la incidencia historica del nonce caducado).
                if (!res.ok) { throw new Error('availability_http_' + res.status); }
                return res.json();
            })
            .then(function (json) {
                if (seq !== state.requestSeq) return; // respuesta obsoleta
                state.weekData = json.days || [];
                state.loading = false;
                renderWeek(false);
            })
            .catch(function () {
                if (seq !== state.requestSeq) return;
                state.weekData = null;
                state.loading = false;
                renderWeek(true);
            });
    }

    function renderWeek(loadError) {
        var dates = getWeekDates(state.weekOffset);
        var strip = $('days-strip');
        var weekLabel = $('week-label');
        var prevBtn = $('prev-week');
        var nextBtn = $('next-week');

        if (!strip) return;

        var firstDate = dates[0];
        var lastDate = dates[dates.length - 1];
        if (weekLabel) {
            weekLabel.textContent = firstDate.getDate() + ' ' + MONTHS[firstDate.getMonth()] +
                ' – ' + lastDate.getDate() + ' ' + MONTHS[lastDate.getMonth()];
        }

        if (prevBtn) prevBtn.disabled = state.weekOffset <= 0;
        if (nextBtn) nextBtn.disabled = state.weekOffset >= (RESERVAS.config.maxWeeks - 1);

        strip.innerHTML = '';

        for (var i = 0; i < dates.length; i++) {
            var d = dates[i];
            var dateStr = formatDate(d);
            var dayData = null;
            if (state.weekData) {
                for (var k = 0; k < state.weekData.length; k++) {
                    if (state.weekData[k].date === dateStr) {
                        dayData = state.weekData[k];
                        break;
                    }
                }
            }

            var slotCount = dayData ? dayData.slots.length : 0;
            var past = isPastDay(d);
            var closed = d.getDay() === 0;
            var disabled = past || closed || slotCount === 0;
            var selected = state.selectedDate === dateStr;

            var btn = document.createElement('div');
            btn.className = 'reservas-day';
            if (selected) btn.className += ' is-selected';
            if (disabled) btn.className += ' is-disabled';
            btn.setAttribute('data-date', dateStr);
            if (!disabled) {
                btn.setAttribute('role', 'button');
                btn.setAttribute('tabindex', '0');
            }

            btn.innerHTML =
                '<span class="reservas-day-name">' + DAYS_SHORT[d.getDay()] + '</span>' +
                '<span class="reservas-day-number">' + d.getDate() + '</span>' +
                '<span class="reservas-day-month">' + MONTHS[d.getMonth()].substring(0, 3) + '</span>' +
                '<span class="reservas-day-count">' + slotCount + ' huecos</span>';

            if (!disabled) {
                (function (ds) {
                    btn.addEventListener('click', function () { selectDay(ds); });
                    btn.addEventListener('keydown', function (e) {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault();
                            selectDay(ds);
                        }
                    });
                })(dateStr);
            }

            strip.appendChild(btn);
        }

        if (state.selectedDate) {
            renderSlots(state.selectedDate);
        } else {
            var firstAvailable = null;
            for (var m = 0; m < dates.length; m++) {
                var ds = formatDate(dates[m]);
                if (!isPastDay(dates[m]) && dates[m].getDay() !== 0) {
                    var dd = null;
                    if (state.weekData) {
                        for (var n = 0; n < state.weekData.length; n++) {
                            if (state.weekData[n].date === ds) {
                                dd = state.weekData[n];
                                break;
                            }
                        }
                    }
                    if (dd && dd.slots.length > 0) {
                        firstAvailable = ds;
                        break;
                    }
                }
            }
            if (firstAvailable) {
                selectDay(firstAvailable);
            } else {
                var slotsGrid = $('slots-grid');
                var dayLabel = $('day-label');
                if (dayLabel) dayLabel.textContent = '';
                if (slotsGrid) {
                    if (loadError) {
                        // Error de red/backend: se dice la verdad y se ofrece
                        // reintentar, en vez del enganoso "no hay huecos".
                        slotsGrid.innerHTML = '<div class="reservas-slots-empty">No se pudo cargar la disponibilidad. <button type="button" class="reservas-slot" id="retry-availability">Reintentar</button></div>';
                        var retryBtn = $('retry-availability');
                        if (retryBtn) retryBtn.addEventListener('click', fetchWeekAvailability);
                    } else {
                        slotsGrid.innerHTML = '<div class="reservas-slots-empty">No hay huecos disponibles esta semana. Prueba la siguiente.</div>';
                    }
                }
            }
        }
    }

    function selectDay(dateStr) {
        state.selectedDate = dateStr;
        state.selectedSlot = null;

        var dayBtns = document.querySelectorAll('.reservas-day');
        for (var i = 0; i < dayBtns.length; i++) {
            dayBtns[i].classList.toggle('is-selected', dayBtns[i].getAttribute('data-date') === dateStr);
        }

        renderSlots(dateStr);
    }

    function renderSlots(dateStr) {
        var slotsGrid = $('slots-grid');
        var dayLabel = $('day-label');
        if (!slotsGrid) return;

        var d = new Date(dateStr + 'T12:00:00');
        if (dayLabel) dayLabel.textContent = formatDateLong(d);

        var dayData = null;
        if (state.weekData) {
            for (var i = 0; i < state.weekData.length; i++) {
                if (state.weekData[i].date === dateStr) {
                    dayData = state.weekData[i];
                    break;
                }
            }
        }

        var slots = dayData ? dayData.slots : [];
        slotsGrid.innerHTML = '';

        if (slots.length === 0) {
            slotsGrid.innerHTML = '<div class="reservas-slots-empty">Sin huecos disponibles este día.</div>';
            return;
        }

        for (var j = 0; j < slots.length; j++) {
            var slot = slots[j];
            var btn = document.createElement('button');
            btn.className = 'reservas-slot';
            btn.textContent = slot.start;
            btn.setAttribute('data-start', slot.start);
            btn.setAttribute('data-end', slot.end);

            btn.addEventListener('click', (function (s) {
                return function () { selectSlot(s.start, s.end); };
            })(slot));

            slotsGrid.appendChild(btn);
        }
    }

    function selectSlot(startTime, endTime) {
        state.selectedSlot = { start: startTime, end: endTime };

        var slotBtns = document.querySelectorAll('.reservas-slot');
        for (var i = 0; i < slotBtns.length; i++) {
            slotBtns[i].classList.toggle('is-selected', slotBtns[i].getAttribute('data-start') === startTime);
        }

        var inputType = $('input-visit-type');
        var inputDate = $('input-start-date');
        var inputTime = $('input-start-time');
        if (inputType) inputType.value = state.visitType;
        if (inputDate) inputDate.value = state.selectedDate;
        if (inputTime) inputTime.value = startTime;

        var d = new Date(state.selectedDate + 'T12:00:00');
        var summary = $('booking-summary');
        if (summary) {
            var tipoLabel = state.visitType === 'presencial' ? 'Presencial' : 'Virtual';
            summary.innerHTML =
                '<span class="reservas-summary-tag">' + tipoLabel + '</span>' +
                '<span class="reservas-summary-tag">' + formatDateLong(d) + '</span>' +
                '<span class="reservas-summary-tag">' + startTime + ' – ' + endTime + '</span>';
        }

        goToStep(3);
    }

    function initStepNavigation() {
        var typeCards = document.querySelectorAll('.reservas-type-card');
        var handleTypeCardActivate = function () {
            state.visitType = this.getAttribute('data-type');

            for (var j = 0; j < typeCards.length; j++) {
                typeCards[j].classList.remove('is-selected');
            }
            this.classList.add('is-selected');

            var badge = $('type-badge');
            if (badge) {
                badge.textContent = state.visitType === 'presencial' ? 'Presencial' : 'Virtual';
            }

            goToStep(2);
            state.weekOffset = 0;
            state.selectedDate = null;
            state.selectedSlot = null;
            fetchWeekAvailability();
        };
        for (var i = 0; i < typeCards.length; i++) {
            typeCards[i].addEventListener('click', handleTypeCardActivate);
            typeCards[i].addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    handleTypeCardActivate.call(this);
                }
            });
        }

        var backBtns = document.querySelectorAll('.reservas-back');
        for (var k = 0; k < backBtns.length; k++) {
            backBtns[k].addEventListener('click', function () {
                var target = parseInt(this.getAttribute('data-goto'));
                goToStep(target);
            });
        }

        var stepBtns = document.querySelectorAll('.reservas-step');
        for (var m = 0; m < stepBtns.length; m++) {
            stepBtns[m].addEventListener('click', function () {
                if (this.classList.contains('is-done')) {
                    var target = parseInt(this.getAttribute('data-step'));
                    goToStep(target);
                }
            });
        }

        var prevWeek = $('prev-week');
        var nextWeek = $('next-week');
        if (prevWeek) {
            prevWeek.addEventListener('click', function () {
                if (state.weekOffset > 0) {
                    state.weekOffset--;
                    state.selectedDate = null;
                    fetchWeekAvailability();
                }
            });
        }
        if (nextWeek) {
            nextWeek.addEventListener('click', function () {
                if (state.weekOffset < RESERVAS.config.maxWeeks - 1) {
                    state.weekOffset++;
                    state.selectedDate = null;
                    fetchWeekAvailability();
                }
            });
        }
    }

    function initForm() {
        var form = $('reservas-form');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var btn = $('reservas-submit');
            if (!btn || btn.disabled) return;
            btn.disabled = true;
            btn.textContent = 'Enviando...';

            var formData = new FormData(form);
            var payload = {};
            formData.forEach(function (value, key) {
                payload[key] = value;
            });

            fetch(RESERVAS.restUrl + '/bookings', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-WP-Nonce': RESERVAS.nonce
                },
                body: JSON.stringify(payload)
            })
                .then(function (res) { return res.json(); })
                .then(function (json) {
                    if (json.ok) {
                        var d = new Date(state.selectedDate + 'T12:00:00');
                        var tipoLabel = state.visitType === 'presencial' ? 'Presencial' : 'Virtual';
                        var doneSummary = $('done-summary');
                        if (doneSummary) {
                            doneSummary.innerHTML =
                                '<span class="reservas-summary-tag">' + tipoLabel + '</span>' +
                                '<span class="reservas-summary-tag">' + formatDateLong(d) + '</span>' +
                                '<span class="reservas-summary-tag">' + state.selectedSlot.start + ' – ' + state.selectedSlot.end + '</span>';
                        }
                        goToStep('done');
                    } else {
                        var msg = 'No se pudo completar la reserva.';
                        var slotTaken = false;
                        if (json.errors) {
                            if (json.errors.indexOf('slot_unavailable') !== -1) { msg = 'Ese hueco se acaba de ocupar. Elige otra hora, por favor.'; slotTaken = true; }
                            else if (json.errors.indexOf('rate_limited') !== -1) msg = 'Has alcanzado el límite de reservas por hora. Inténtalo más tarde.';
                            else if (json.errors.indexOf('minimum_advance_12h') !== -1) msg = 'La cita debe reservarse con al menos 12 horas de antelación.';
                            else if (json.errors.indexOf('outside_opening_hours') !== -1) msg = 'El horario seleccionado está fuera del horario de apertura.';
                            else if (json.errors.indexOf('calendar_unavailable') !== -1) msg = 'El sistema de calendario no está disponible. Contacta por teléfono.';
                            else if (json.errors.indexOf('nonce_invalid') !== -1) msg = 'Tu sesión ha caducado. Recarga la página e inténtalo de nuevo.';
                        }
                        alert(msg);
                        btn.disabled = false;
                        btn.textContent = 'Solicitar cita';
                        if (slotTaken) {
                            // El hueco ya no existe: volver al calendario con
                            // disponibilidad fresca para elegir otro.
                            state.selectedSlot = null;
                            goToStep(2);
                            fetchWeekAvailability();
                        }
                    }
                })
                .catch(function () {
                    alert('Error de conexión. Inténtalo de nuevo.');
                    btn.disabled = false;
                    btn.textContent = 'Solicitar cita';
                });
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initStepNavigation();
        initForm();
    });
})();
