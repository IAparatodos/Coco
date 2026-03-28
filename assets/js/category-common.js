/**
 * Adrihosan - JS Com&uacute;n para Categor&iacute;as de Producto
 * Funcionalidades: FAQs, scroll tras filtrar, filtro m&oacute;vil, fix paginaci&oacute;n
 * @package Adrihosan
 */
(function($) {
    "use strict";

    /* ======================================================================
     * 1. FAQs ACCORDION
     * ====================================================================== */
    $(document).on('click', '.faq-question-common', function() {
        var $item = $(this).closest('.faq-item-common');
        var $answer = $item.find('.faq-answer-common');
        var $icon = $(this).find('.faq-icon-common');

        // Cerrar las dem&aacute;s FAQs del mismo bloque
        $item.siblings('.faq-item-common').removeClass('active')
            .find('.faq-answer-common').slideUp(300);
        $item.siblings('.faq-item-common')
            .find('.faq-icon-common').text('+');

        // Toggle actual
        $item.toggleClass('active');
        $answer.slideToggle(300);
        $icon.text($item.hasClass('active') ? '\u2212' : '+');
    });

    /* ======================================================================
     * 2. MOVER BOT&Oacute;N FILTRO A CONTENEDOR M&Oacute;VIL
     * ====================================================================== */
    function moverBotonFiltroMovil() {
        if ($(window).width() > 991) return;

        var $boton = $('.wpc-filters-open-button-container');
        var $destino = $('.solo-movil-filtro');

        if ($boton.length && $destino.length) {
            var $dest = $destino.first();
            // Si ya se movi&oacute;, no repetir
            if ($dest.children('.wpc-filters-open-button-container').length > 0) return;

            var $elemento = $boton.first();
            $elemento.appendTo($dest);
            $dest.css('display', 'block');

            // Ocultar duplicados
            $('.wpc-filters-open-button-container').not($elemento).hide();
        }
    }

    $(document).ready(moverBotonFiltroMovil);
    setTimeout(moverBotonFiltroMovil, 1500);

    /* ======================================================================
     * 3. SCROLL SUAVE AL CAT&Aacute;LOGO TRAS FILTRAR
     * ====================================================================== */
    function scrollAlCatalogo() {
        var $catalogo = $('.product-loop-header, #bh-product-grid-anchor, [id^="catalogo-"]');
        if ($catalogo.length) {
            $('html, body').animate({
                scrollTop: $catalogo.first().offset().top - 120
            }, 800);
        }
    }

    // Tras pulsar bot&oacute;n FILTRAR
    $(document).on('click', '.wpc-filters-submit-button', function() {
        setTimeout(scrollAlCatalogo, 1000);
    });

    // Evento personalizado de Filter Everything Pro
    $(document).on('feAfterFilterApply', function() {
        setTimeout(scrollAlCatalogo, 500);
        // Re-fixar paginaci&oacute;n tras filtrado AJAX
        setTimeout(adrihosanFixPaginacion, 800);
        // Re-mover bot&oacute;n filtro por si AJAX lo regenera
        setTimeout(moverBotonFiltroMovil, 800);
    });

    /* ======================================================================
     * 4. FIX PAGINACI&Oacute;N - Preservar filtros en links de paginaci&oacute;n
     * ====================================================================== */

    /**
     * Extrae los par&aacute;metros de filtro de la URL actual (excluyendo paginaci&oacute;n).
     * Devuelve un string tipo "key=val&key2=val2" o vac&iacute;o si no hay filtros.
     */
    function obtenerParamsFiltro() {
        var search = window.location.search;
        if (!search || search === '?') return '';

        var paginationKeys = ['paged', 'product-page', 'product_page'];
        var params = [];

        search.substring(1).split('&').forEach(function(segment) {
            if (!segment) return;
            var key = segment.split('=')[0];
            // Decodificar para comparar correctamente
            try { key = decodeURIComponent(key); } catch(e) {}
            if (paginationKeys.indexOf(key) === -1) {
                params.push(segment);
            }
        });

        return params.join('&');
    }

    /**
     * Recorre todos los links de paginaci&oacute;n y a&ntilde;ade los params de filtro
     * si no est&aacute;n ya presentes.
     */
    function adrihosanFixPaginacion() {
        var filterString = obtenerParamsFiltro();
        if (!filterString) return;

        // Primer param como referencia para detectar si ya est&aacute;n presentes
        var firstKey = filterString.split('&')[0].split('=')[0];

        var links = document.querySelectorAll(
            '.woocommerce-pagination a, .woocommerce-pagination a.page-numbers'
        );

        for (var i = 0; i < links.length; i++) {
            var href = links[i].getAttribute('href');
            if (!href) continue;

            // Si el primer param de filtro ya est&aacute;, asumimos que todos est&aacute;n
            if (href.indexOf(firstKey + '=') !== -1) continue;

            var separator = href.indexOf('?') === -1 ? '?' : '&';
            links[i].setAttribute('href', href + separator + filterString);
        }
    }

    // Ejecutar fix de paginaci&oacute;n al cargar
    $(document).ready(adrihosanFixPaginacion);

    // Re-ejecutar tras navegaci&oacute;n AJAX (compatibilidad con plugins AJAX)
    $(document).ajaxComplete(function() {
        setTimeout(adrihosanFixPaginacion, 300);
    });

})(jQuery);
