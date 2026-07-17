(function () {
    'use strict';

    var MONTHS = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
        'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

    function $(id) { return document.getElementById(id); }

    function showPanel(id) {
        var panels = document.querySelectorAll('.cancelar-panel');
        for (var i = 0; i < panels.length; i++) {
            panels[i].hidden = true;
        }
        var panel = $(id);
        if (panel) panel.hidden = false;
    }

    function formatDateLong(dateStr) {
        var d = new Date(dateStr + 'T12:00:00');
        return d.getDate() + ' de ' + MONTHS[d.getMonth()] + ' de ' + d.getFullYear();
    }

    function loadBooking() {
        if (!CANCELAR.token) {
            showPanel('cancel-not-found');
            return;
        }

        // no-store: el estado de la reserva cambia (p.ej. ya cancelada) y una
        // respuesta cacheada por navegador/CDN mostraria un estado antiguo.
        fetch(CANCELAR.restUrl + '/booking?token=' + encodeURIComponent(CANCELAR.token), { cache: 'no-store' })
            .then(function (res) {
                if (res.status === 404) {
                    showPanel('cancel-not-found');
                    return null;
                }
                return res.json();
            })
            .then(function (data) {
                if (!data) return;

                if (data.error) {
                    showPanel('cancel-not-found');
                    return;
                }

                if (data.status === 'cancelled') {
                    showPanel('cancel-already');
                    return;
                }

                var details = $('cancel-details');
                var tipoLabel = data.visitType === 'presencial' ? 'Presencial' : 'Virtual';
                if (details) {
                    // textContent (no innerHTML): data.name viene de la BD y
                    // no debe interpretarse nunca como HTML.
                    details.innerHTML = '';
                    [data.name, tipoLabel, formatDateLong(data.startDate), data.startTime].forEach(function (txt) {
                        var tag = document.createElement('span');
                        tag.className = 'cancelar-tag';
                        tag.textContent = txt;
                        details.appendChild(tag);
                    });
                }

                showPanel('cancel-form-panel');
            })
            .catch(function () {
                showPanel('cancel-not-found');
            });
    }

    function initForm() {
        var form = $('cancel-form');
        if (!form) return;

        var textarea = $('cancel-reason');
        var errorBox = $('cancel-reason-error');

        function showReasonError() {
            if (errorBox) errorBox.hidden = false;
            if (textarea) {
                textarea.classList.add('is-invalid');
                textarea.setAttribute('aria-invalid', 'true');
                textarea.focus();
            }
        }

        function clearReasonError() {
            if (errorBox) errorBox.hidden = true;
            if (textarea) {
                textarea.classList.remove('is-invalid');
                textarea.removeAttribute('aria-invalid');
            }
        }

        // Limpiar el aviso en cuanto el usuario empieza a escribir
        if (textarea) {
            textarea.addEventListener('input', function () {
                if (textarea.value.trim()) {
                    clearReasonError();
                }
            });
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var reason = textarea ? textarea.value.trim() : '';
            if (!reason) {
                showReasonError();
                return;
            }
            clearReasonError();

            var btn = $('cancel-submit');
            if (!btn || btn.disabled) return;
            btn.disabled = true;
            btn.textContent = 'Cancelando...';

            fetch(CANCELAR.restUrl + '/cancel', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    token: CANCELAR.token,
                    reason: reason
                })
            })
                .then(function (res) { return res.json(); })
                .then(function (data) {
                    if (data.ok) {
                        showPanel('cancel-success');
                    } else {
                        var msg = 'No se pudo cancelar la cita.';
                        if (data.error === 'already_cancelled') msg = 'Esta cita ya fue cancelada.';
                        if (data.error === 'not_found') msg = 'Reserva no encontrada.';
                        if (data.error === 'reason_required') msg = 'Por favor, indica el motivo de la cancelación.';
                        alert(msg);
                        btn.disabled = false;
                        btn.textContent = 'Cancelar cita';
                    }
                })
                .catch(function () {
                    alert('Error de conexión. Inténtalo de nuevo.');
                    btn.disabled = false;
                    btn.textContent = 'Cancelar cita';
                });
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        loadBooking();
        initForm();
    });
})();
