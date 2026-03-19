/**
 * JavaScript para Categoría Cocina Imitación (ID: 4876)
 * Adrihosan - Optimización
 */

(function($) {
    "use strict";
    
    /**
     * Mover el botón de filtro al contenedor móvil
     */
    function moverBotonFiltroCocinaImitacion() {
        var $boton = $('.wpc-filters-open-button-container');
        var $destino = $('#destino-filtro-adria-cocina-imitacion');
        
        if ($boton.length && $destino.length) {
            // Si ya se movió, no volver a hacerlo
            if ($destino.children().length > 0) return;
            
            var $elemento = $boton.first();
            $elemento.appendTo($destino);
            $elemento.find('a').text('FILTRAR AZULEJOS');
            
            // Ocultar otros botones duplicados
            $('.wpc-filters-open-button-container').not($elemento).hide();
        }
    }
    
    /**
     * Forzar scroll suave al catálogo después de filtrar
     */
    function scrollSuaveAlCatalogo() {
        var $catalogo = $('#catalogo-cocina');
        
        if ($catalogo.length) {
            $('html, body').animate({
                scrollTop: $catalogo.offset().top - 120
            }, 800);
        }
    }
    
    // Ejecutar al cargar la página
    $(document).ready(moverBotonFiltroCocinaImitacion);
    
    // Backup: ejecutar después de 1.5s por si el DOM no estaba listo
    setTimeout(moverBotonFiltroCocinaImitacion, 1500);
    
    // Scroll después de aplicar filtros (método estándar)
    $(document).on('click', '.wpc-filters-submit-button', function() {
        setTimeout(scrollSuaveAlCatalogo, 1000);
    });
    
    // Scroll después de aplicar filtros (evento personalizado del plugin)
    $(document).on('feAfterFilterApply', function() {
        setTimeout(scrollSuaveAlCatalogo, 500);
    });
    
})(jQuery);
