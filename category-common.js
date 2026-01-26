/**
 * JavaScript Común para Categorías de Producto
 * Adrihosan - Funcionalidad compartida
 *
 * Incluye:
 * - FAQ Accordion (clases -common)
 * - Scroll suave
 */

(function($) {
    "use strict";

    /**
     * FAQ Accordion - Toggle preguntas frecuentes
     * Funciona con clases: faq-question-common, faq-item-common, faq-answer-common
     */
    function initFaqAccordion() {
        // Delegación de eventos para FAQs con clases -common
        $(document).on('click', '.faq-question-common', function(e) {
            e.preventDefault();

            var $item = $(this).closest('.faq-item-common');
            var $answer = $item.find('.faq-answer-common');
            var isActive = $item.hasClass('active');

            // Cerrar todas las demás
            $('.faq-item-common').not($item).removeClass('active');

            // Toggle la actual
            if (isActive) {
                $item.removeClass('active');
            } else {
                $item.addClass('active');
            }
        });
    }

    /**
     * Scroll suave a anclas
     */
    function initSmoothScroll() {
        $(document).on('click', 'a[href^="#"]', function(e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });
    }

    // Inicializar al cargar DOM
    $(document).ready(function() {
        initFaqAccordion();
        initSmoothScroll();
    });

})(jQuery);
