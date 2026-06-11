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

    // FAQs con clases BEM (espejos, etc.)
    document.querySelectorAll('.adri-faq-espejos__question').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = this.closest('.adri-faq-espejos__item');
            var accordion = item.closest('.adri-faq-espejos__accordion');
            var wasActive = item.classList.contains('active');

            accordion.querySelectorAll('.adri-faq-espejos__item').forEach(function(i) {
                i.classList.remove('active');
                i.querySelector('.adri-faq-espejos__answer').style.maxHeight = null;
            });

            if (!wasActive) {
                item.classList.add('active');
                var answer = item.querySelector('.adri-faq-espejos__answer');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });

    // FAQs de espejos con luz (4213) y redondos (4247): clases ap-faq-*-luz / -redondo
    document.querySelectorAll('.ap-faq-question-luz, .ap-faq-question-redondo').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = this.closest('[class*="ap-faq-item-"]');
            if (!item) return;
            var accordion = item.closest('[class*="ap-faq-accordion-"]') || item.parentNode;
            var answer = item.querySelector('[class*="ap-faq-answer-"]');
            var wasActive = item.classList.contains('active');

            accordion.querySelectorAll('[class*="ap-faq-item-"]').forEach(function(i) {
                i.classList.remove('active');
                var a = i.querySelector('[class*="ap-faq-answer-"]');
                if (a) { a.style.maxHeight = null; }
            });

            if (!wasActive) {
                item.classList.add('active');
                if (answer) { answer.style.maxHeight = answer.scrollHeight + 'px'; }
            }
        });
    });

});
