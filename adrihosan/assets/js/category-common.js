/**
 * category-common.js
 * Script común para todas las categorías de producto de Adrihosan.
 * Gestiona: FAQs desplegables
 */
document.addEventListener('DOMContentLoaded', function() {

    // =========================================================================
    // SCROLL AL LOOP DE PRODUCTOS (hash #scroll-productos, delay 1s)
    // =========================================================================
    if (window.location.hash === '#scroll-productos') {
        setTimeout(function() {
            var target = document.querySelector('.product-loop-header') ||
                         document.querySelector('.products') ||
                         document.querySelector('.woocommerce-products-header');
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
            history.replaceState(null, '', window.location.pathname + window.location.search);
        }, 1000);
    }

    // =========================================================================
    // FAQs DESPLEGABLES
    // =========================================================================
    document.querySelectorAll('.faq-question-common').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = this.closest('.faq-item-common');
            var wrapper = item.closest('.faq-items-wrapper');
            var wasActive = item.classList.contains('active');

            // Cerrar todas las FAQs del mismo bloque
            wrapper.querySelectorAll('.faq-item-common').forEach(function(i) {
                i.classList.remove('active');
            });

            // Abrir la clicada si estaba cerrada
            if (!wasActive) {
                item.classList.add('active');
            }
        });
    });

});
