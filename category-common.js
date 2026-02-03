/**
 * JavaScript Común para Categorías de Producto
 * Adrihosan - Funcionalidad compartida
 *
 * Incluye:
 * - FAQ Accordion (clases -common)
 * - Scroll suave
 * - Mover botón filtro a móvil
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

    /**
     * Mover botón de filtro al contenedor móvil
     * Funciona con cualquier contenedor que tenga clase .solo-movil-filtro
     */
    function moverBotonFiltroMovil() {
        var $destino = $('.solo-movil-filtro').first();
        var $boton = $('.wpc-filters-open-button-container');

        if (!$destino.length || !$boton.length) return;

        // Si ya tiene contenido, no mover de nuevo
        if ($destino.children().length > 0) return;

        // Mover el primer botón al destino
        var $elemento = $boton.first();
        $elemento.appendTo($destino);

        // Personalizar texto según la categoría
        var textoBoton = 'FILTRAR PRODUCTOS';
        var destinoId = $destino.attr('id') || '';

        if (destinoId.indexOf('bano') > -1) {
            textoBoton = 'FILTRAR AZULEJOS';
        } else if (destinoId.indexOf('cocina') > -1) {
            textoBoton = 'FILTRAR AZULEJOS';
        } else if (destinoId.indexOf('exterior') > -1) {
            textoBoton = 'FILTRAR AZULEJOS';
        } else if (destinoId.indexOf('piscinas') > -1) {
            textoBoton = 'FILTRAR AZULEJOS';
        } else if (destinoId.indexOf('pavimentos') > -1) {
            textoBoton = 'FILTRAR SUELOS';
        } else if (destinoId.indexOf('azulejos') > -1) {
            textoBoton = 'FILTRAR AZULEJOS';
        }

        $elemento.find('a').text(textoBoton);

        // Ocultar otros botones duplicados
        $('.wpc-filters-open-button-container').not($elemento).hide();

        // Mostrar el contenedor destino en móvil
        if (window.innerWidth <= 991) {
            $destino.css('display', 'block');
        }
    }

    /**
     * Scroll suave al catálogo después de aplicar filtros
     */
    function scrollAlCatalogoTrasFiltro() {
        var $catalogo = $('[id^="catalogo-"]').first();

        if ($catalogo.length) {
            $('html, body').animate({
                scrollTop: $catalogo.offset().top - 120
            }, 800);
        }
    }

    // Inicializar al cargar DOM
    $(document).ready(function() {
        initFaqAccordion();
        initSmoothScroll();
        moverBotonFiltroMovil();

        // Reintentar mover botón después de que carguen los filtros AJAX
        setTimeout(moverBotonFiltroMovil, 1500);
        setTimeout(moverBotonFiltroMovil, 3000);
    });

    // Eventos de filtros
    $(document).on('click', '.wpc-filters-submit-button', function() {
        setTimeout(scrollAlCatalogoTrasFiltro, 1000);
    });

    // Evento de Filter Everything Pro
    $(document).on('feAfterFilterApply', function() {
        setTimeout(scrollAlCatalogoTrasFiltro, 500);
    });

    // Reajustar en resize
    $(window).on('resize', function() {
        var $destino = $('.solo-movil-filtro').first();
        if ($destino.length) {
            if (window.innerWidth <= 991) {
                $destino.css('display', 'block');
            } else {
                $destino.css('display', 'none');
            }
        }
    });

})(jQuery);
