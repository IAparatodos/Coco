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

        fetch(CANCELAR.restUrl + '/booking?token=' + encodeURIComponent(CANCELAR.token))
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
                details.innerHTML =
                    '<span class="cancelar-tag">' + data.name + '</span>' +
                    '<span class="cancelar-tag">' + tipoLabel + '</span>' +
                    '<span class="cancelar-tag">' + formatDateLong(data.startDate) + '</span>' +
                    '<span class="cancelar-tag">' + data.startTime + '</span>';

                showPanel('cancel-form-panel');
            })
            .catch(function () {
                showPanel('cancel-not-found');
            });
    }

    function initForm() {
        var form = $('cancel-form');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var reason = $('cancel-reason').value.trim();
            if (!reason) {
                $('cancel-reason').focus();
                return;
            }

            var btn = $('cancel-submit');
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
