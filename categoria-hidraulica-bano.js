/**
 * JavaScript para Categoría Baldosa Hidráulica Original BAÑO (ID: 4865)
 * Adrihosan - Optimización
 * Basado en patrón 4866 (Cocina)
 */

(function($) {
    "use strict";
    
    /**
     * Mover el botón de filtro al contenedor móvil
     */
    function moverBotonFiltroBano() {
        var $boton = $('.wpc-filters-open-button-container');
        var $destino = $('#destino-filtro-adria-bano');
        
        if ($boton.length && $destino.length) {
            // Si ya se movió, no volver a hacerlo
            if ($destino.children().length > 0) return;
            
            var $elemento = $boton.first();
            $elemento.appendTo($destino);
            $elemento.find('a').text('FILTRAR BALDOSAS');
            
            // Ocultar otros botones duplicados
            $('.wpc-filters-open-button-container').not($elemento).hide();
        }
    }
    
    /**
     * Forzar scroll suave al catálogo después de filtrar
     */
    function scrollSuaveAlCatalogo() {
        var $catalogo = $('#lista-productos');
        
        if ($catalogo.length) {
            $('html, body').animate({
                scrollTop: $catalogo.offset().top - 120
            }, 800);
        }
    }
    
    // Ejecutar al cargar la página
    $(document).ready(moverBotonFiltroBano);
    
    // Backup: ejecutar después de 1.5s por si el DOM no estaba listo
    setTimeout(moverBotonFiltroBano, 1500);
    
    // Scroll después de aplicar filtros (método estándar)
    $(document).on('click', '.wpc-filters-submit-button', function() {
        setTimeout(scrollSuaveAlCatalogo, 1000);
    });
    
    // Scroll después de aplicar filtros (evento personalizado del plugin)
    $(document).on('feAfterFilterApply', function() {
        setTimeout(scrollSuaveAlCatalogo, 500);
    });
    
})(jQuery);
