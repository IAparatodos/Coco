/**
 * category-common.js
 * Script común para todas las categorías de producto de Adrihosan.
 * Gestiona: FAQs desplegables
 */
document.addEventListener('DOMContentLoaded', function() {

    // =========================================================================
    // SCROLL AL LOOP DE PRODUCTOS (hash #scroll-productos, delay 1s)
    // =========================================================================
    function scrollToProducts() {
        if (window.location.hash !== '#scroll-productos') return;
        setTimeout(function() {
            var target = document.querySelector('.product-loop-header') ||
                         document.querySelector('ul.products') ||
                         document.querySelector('.woocommerce-result-count');
            if (target) {
                var y = target.getBoundingClientRect().top + window.pageYOffset - 120;
                window.scrollTo({ top: y, behavior: 'smooth' });
            }
            history.replaceState(null, '', window.location.pathname + window.location.search);
        }, 1000);
    }
    scrollToProducts();
    window.addEventListener('load', scrollToProducts);

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
