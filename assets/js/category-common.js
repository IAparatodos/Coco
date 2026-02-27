/**
 * category-common.js - JS com&uacute;n para todas las categor&iacute;as
 * Adrihosan - Patr&oacute;n gen&eacute;rico
 *
 * Funcionalidades:
 * 1. FAQs toggle (acordeones)
 * 2. Filtro m&oacute;vil (mover bot&oacute;n al contenedor .solo-movil-filtro)
 * 3. Scroll suave al cat&aacute;logo despu&eacute;s de filtrar
 */

(function($) {
    "use strict";

    /* ====================================================================== */
    /* 1. FAQs TOGGLE                                                         */
    /* ====================================================================== */
    $(document).on('click', '.faq-question-common', function() {
        var $item = $(this).closest('.faq-item-common');

        // Cerrar las dem&aacute;s
        $('.faq-item-common').not($item).removeClass('active');

        // Toggle la actual (CSS maneja la animaci&oacute;n via max-height + .active)
        $item.toggleClass('active');
    });

    /* ====================================================================== */
    /* 2. FILTRO M&Oacute;VIL - Mover bot&oacute;n al contenedor destino     */
    /* ====================================================================== */
    function moverBotonFiltroMovil() {
        if ($(window).width() > 991) return;

        var $boton = $('.wpc-filters-open-button-container');
        var $destino = $('.solo-movil-filtro');

        if ($boton.length && $destino.length) {
            if ($destino.children().length > 0) return;

            var $elemento = $boton.first();
            $elemento.appendTo($destino);
            $destino.css('display', 'block');

            // Ocultar duplicados
            $('.wpc-filters-open-button-container').not($elemento).hide();
        }
    }

    $(document).ready(moverBotonFiltroMovil);
    setTimeout(moverBotonFiltroMovil, 1500);

    /* ====================================================================== */
    /* 3. SCROLL SUAVE AL CAT&Aacute;LOGO DESPU&Eacute;S DE FILTRAR          */
    /* ====================================================================== */
    function scrollSuaveAlCatalogo() {
        // Buscar cualquier .product-loop-header (gen&eacute;rico para todas las categor&iacute;as)
        var $catalogo = $('.product-loop-header');

        if ($catalogo.length) {
            $('html, body').animate({
                scrollTop: $catalogo.offset().top - 120
            }, 800);
        }
    }

    // Detectar si la URL tiene par&aacute;metros de filtro (Filter Everything Pro)
    function tieneParametrosFiltro() {
        var params = window.location.search;
        return params.length > 1;
    }

    // Scroll al cargar si hay filtros activos en la URL
    $(document).ready(function() {
        if (tieneParametrosFiltro()) {
            setTimeout(scrollSuaveAlCatalogo, 500);
        }
    });

    // Scroll al hacer clic en el bot&oacute;n FILTRAR
    $(document).on('click', '.wpc-filters-submit-button', function() {
        setTimeout(scrollSuaveAlCatalogo, 1000);
    });

    // Scroll despu&eacute;s de aplicar filtros (evento de Filter Everything Pro)
    $(document).on('feAfterFilterApply', function() {
        setTimeout(scrollSuaveAlCatalogo, 500);
    });

})(jQuery);
