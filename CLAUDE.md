# Adrihosan - Instrucciones para Claude

## REGLA CRÍTICA: Al iniciar un nuevo chat, copia del último repositorio

Al comenzar una nueva sesión/chat, **SIEMPRE** hacer `git pull` de la rama más reciente que se haya usado como base. No asumir que el código local está actualizado. Preguntar al usuario cuál fue la última rama funcional si no está claro.

## REGLA CRÍTICA: No romper categorías existentes

**NUNCA** modifiques la estructura del master controller ni el sistema de carga de archivos de categoría sin verificar que TODAS las categorías siguen funcionando.

### Archivo principal: `adrihosan/functions.php`

Este archivo contiene:
1. **Master controller** (`adrihosan_master_controller_cpu_fix`) - Switch con TODOS los IDs de categorías personalizadas
2. **Setup functions** (`adrihosan_setup_*_cpu_fix`) - Configuran hooks de WooCommerce para cada categoría
3. **Requires** de archivos `inc/category-*.php` - Contienen las funciones de contenido HTML

### Antes de cambiar functions.php:

1. Listar TODOS los `case` del switch y verificar que siguen presentes tras el cambio
2. Listar TODOS los `require` de archivos category-*.php y verificar que siguen presentes
3. Si añades un lazy-load o cualquier sistema de carga condicional, asegúrate de que cubre TODAS las categorías, no solo las que existían antes
4. **Consultar la rama `claude/update-category-2358-links-VWjok`** como referencia de la versión funcional

### Categorías registradas (42 total):

| ID | Nombre | Archivo contenido |
|----|--------|-------------------|
| 2083 | Baño Imitación | category-bano-imitacion.php |
| 4876 | Cocina Imitación | category-cocina-imitacion.php |
| 4862 | Hidráulica Original | category-hidraulica-original.php |
| 102 | Espejos | category-espejos.php |
| 4213 | Espejos con Luz | category-espejos.php |
| 2209 | Wood | category-wood.php |
| 4806 | Paredes Decorativas | category-paredes.php |
| 1789 | Azulejos Baño | category-azulejos-bano.php |
| 1790 | Azulejos Cocina | category-azulejos-cocina.php |
| 2160 | Azulejos Exterior | category-azulejos-exterior.php |
| 66 | Azulejos Piscinas | category-piscinas.php |
| 64 | Pavimentos y Suelos | category-pavimentos.php |
| 63 | Azulejos | category-azulejos.php |
| 2245 | Porcelánico Mármol | category-porcelanico-marmol.php |
| 2377 | Hexagonales Suelo | category-hexagonal.php |
| 4973 | Imitación Cemento | category-imitacion-cemento.php |
| 2350 | Suelo Técnico | category-suelo-tecnico.php |
| 2285 | Suelos de Cocina | category-suelos-cocina.php |
| 2273 | Suelos Rústicos | category-suelos-rusticos.php |
| 2471 | Porcelánico Técnico | category-porcelanico-tecnico.php |
| 62 | Cerámica | category-ceramica-porcelanico.php |
| 2410 | Porcelánico | category-ceramica-porcelanico.php |
| 1844 | Gran Formato | category-ceramica-porcelanico.php |
| 2510 | Extrafino | category-ceramica-porcelanico.php |
| 2093 | Metro | category-ceramica-porcelanico.php |
| 4564 | Baldosa Hidráulica | category-pilar-bh.php |
| 4865 | Original / Baño | category-pilar-bano.php |
| 4866 | Original / Cocina | category-pilar-cocina.php |
| 4869 | Original / Exterior | category-pilar-exterior.php |
| 2082 | Imitación Hidráulico | category-imitacion-hidraulico.php |
| 4247 | Espejos Redondos | category-espejos.php |
| 2626 | Camerino Baño | category-camerinos.php |
| 2516 | Zellige | category-zellige.php |
| 4972 | Imitación Piedra | category-imitacion-piedra.php |
| 2394 | Fachadas y Muros | category-fachadas.php |
| 2188 | Escama de Pez | category-escama-pez.php |
| 2132 | Azulejos 15x15 | category-azulejos-15x15.php |
| 2358 | Azulejos Antiguos | category-azulejos-antiguos.php |
| 2108 | Azulejos Decorativos | category-azulejos-decorativos.php |
| 2173 | Azulejos Hexagonales | category-azulejos-hexagonales.php |
| 310 | Porcelánico Techlam | category-porcelanico-techlam.php |
| 2482 | Cerámica Vives | category-ceramica-vives.php |

### Optimizaciones de rendimiento activas:

- **GTM diferido** en footer.php (requestIdleCallback con fallback setTimeout 2s)
- **Facebook/TikTok diferidos** en dw-shortcodes.php (requestIdleCallback con fallback 3-3.5s)
- **Preload Poppins-SemiBold** en header.php
- **Playfair Display cargado via JS** en footer.php (eliminado de cadena crítica de render)
- **Preconnect** a fonts.googleapis.com y fonts.gstatic.com en header.php
- **data-no-optimize="1"** en CSS diferidos para evitar que LiteSpeed los recombine como bloqueantes
- **N+1 queries eliminados** en wc-search.php
- **Cart total ligero** en header.php (get_total vs wc_cart_totals_order_total_html)
- **Critical CSS inline** en header.php (header + hero h1 + cover + responsive)
- **CSS async** style.css y fonts.css via media="print" + onload
- **Cache menú categorías** en functions.php (transient 1h para 1.496 categorías)
