/**
 * JavaScript para Categoría Baldosa Hidráulica (ID: 4564)
 * Adrihosan - Página Pilar
 * Basado en patrón 4865 (Baño)
 */

(function($) {
    "use strict";

    /**
     * Scroll suave a secciones internas
     */
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            var target = $(this.getAttribute('href'));

            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });
    }

    /**
     * Animación de entrada para las cards del hub
     */
    function initHubAnimation() {
        var $hubCards = $('.bho-hub-card');

        if ($hubCards.length && 'IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        $(entry.target).addClass('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            $hubCards.each(function() {
                observer.observe(this);
            });
        } else {
            // Fallback para navegadores sin IntersectionObserver
            $hubCards.addClass('is-visible');
        }
    }

    /**
     * Animación de entrada para las features
     */
    function initFeaturesAnimation() {
        var $features = $('.bho-feature-item');

        if ($features.length && 'IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry, index) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            $(entry.target).addClass('is-visible');
                        }, index * 100);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            $features.each(function() {
                observer.observe(this);
            });
        } else {
            $features.addClass('is-visible');
        }
    }

    // Ejecutar al cargar la página
    $(document).ready(function() {
        initSmoothScroll();
        initHubAnimation();
        initFeaturesAnimation();
    });

})(jQuery);
