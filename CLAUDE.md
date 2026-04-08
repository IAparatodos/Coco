# Adrihosan - Instrucciones para Claude

## REGLA OBLIGATORIA: Resumen de cambios en cada respuesta

Al finalizar cada respuesta donde se hayan hecho cambios en código, **SIEMPRE** incluir un resumen con:
1. **Rama actual**: en qué rama se han hecho los cambios
2. **Archivos modificados**: lista de todos los archivos cambiados
3. **Estado**: si ya se ha hecho commit y push, o si falta subirlos

Formato ejemplo:
```
📋 Cambios pendientes de subir:
- Rama: `claude/nombre-rama`
- Archivos: `archivo1.php`, `archivo2.js`
- Estado: ✅ Commit + Push realizado / ⚠️ Pendiente de push
```

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

### Categorías registradas (44 total):

| ID | Nombre | Archivo contenido | CSS individual |
|----|--------|-------------------|----------------|
| 99 | Muebles de Baño | category-muebles-bano.php | category-99.css |
| 2421 | Muebles Baño Pequeños | category-muebles-bano-pequeno.php | category-2421.css |
| 2083 | Baño Imitación | category-bano-imitacion.php | category-2083.css |
| 4876 | Cocina Imitación | category-cocina-imitacion.php | category-4876.css |
| 4862 | Hidráulica Original | category-hidraulica-original.php | category-4862.css |
| 102 | Espejos | category-espejos.php | category-102.css |
| 4213 | Espejos con Luz | category-espejos.php | (usa category-styles.css*) |
| 2209 | Wood | category-wood.php | category-2209.css |
| 4806 | Paredes Decorativas | category-paredes.php | category-4806.css |
| 1789 | Azulejos Baño | category-azulejos-bano.php | category-1789.css |
| 1790 | Azulejos Cocina | category-azulejos-cocina.php | category-1790.css |
| 2160 | Azulejos Exterior | category-azulejos-exterior.php | category-2160.css |
| 66 | Azulejos Piscinas | category-piscinas.php | category-66.css |
| 64 | Pavimentos y Suelos | category-pavimentos.php | category-64.css |
| 63 | Azulejos | category-azulejos.php | category-63.css |
| 2245 | Porcelánico Mármol | category-porcelanico-marmol.php | category-2245.css |
| 2377 | Hexagonales Suelo | category-hexagonal.php | category-2377.css |
| 4973 | Imitación Cemento | category-imitacion-cemento.php | category-4973.css |
| 2350 | Suelo Técnico | category-suelo-tecnico.php | category-2350.css |
| 2285 | Suelos de Cocina | category-suelos-cocina.php | category-2285.css |
| 2273 | Suelos Rústicos | category-suelos-rusticos.php | category-2273.css |
| 2471 | Porcelánico Técnico | category-porcelanico-tecnico.php | category-2471.css |
| 62 | Cerámica | category-ceramica-porcelanico.php | category-62.css |
| 2410 | Porcelánico | category-ceramica-porcelanico.php | category-2410.css |
| 1844 | Gran Formato | category-ceramica-porcelanico.php | category-1844.css |
| 2510 | Extrafino | category-ceramica-porcelanico.php | category-2510.css |
| 2093 | Metro | category-ceramica-porcelanico.php | category-2093.css |
| 4564 | Baldosa Hidráulica | category-pilar-bh.php | category-4564.css |
| 4865 | Original / Baño | category-pilar-bano.php | category-4865.css |
| 4866 | Original / Cocina | category-pilar-cocina.php | category-4866.css |
| 4869 | Original / Exterior | category-pilar-exterior.php | category-4869.css |
| 2082 | Imitación Hidráulico | category-imitacion-hidraulico.php | category-2082.css |
| 4247 | Espejos Redondos | category-espejos.php | (usa category-styles.css*) |
| 2626 | Camerino Baño | category-camerinos.php | category-2626.css |
| 2516 | Zellige | category-zellige.php | category-2516.css |
| 4972 | Imitación Piedra | category-imitacion-piedra.php | category-4972.css |
| 2394 | Fachadas y Muros | category-fachadas.php | category-2394.css |
| 2188 | Escama de Pez | category-escama-pez.php | category-2188.css |
| 2132 | Azulejos 15x15 | category-azulejos-15x15.php | category-2132.css |
| 2358 | Azulejos Antiguos | category-azulejos-antiguos.php | category-2358.css |
| 2108 | Azulejos Decorativos | category-azulejos-decorativos.php | category-2108.css |
| 2173 | Azulejos Hexagonales | category-azulejos-hexagonales.php | category-2173.css |
| 310 | Porcelánico Techlam | category-porcelanico-techlam.php | category-310.css |
| 2482 | Cerámica Vives | category-ceramica-vives.php | category-2482.css |

> *`category-styles.css` está **comentado** en functions.php:1277 y NO se carga. Las categorías 4213 y 4247 necesitan migrar sus estilos a archivos `category-{ID}.css` individuales (pendiente).

### Estructura obligatoria de archivos category-*.php (Filter Everything Pro)

Todos los archivos `inc/category-*.php` **DEBEN** seguir esta estructura para que el filtrado AJAX de Filter Everything Pro funcione correctamente:

1. **En `_contenido_superior()`**: Después del shortcode del widget de filtros y el `<div>` del título catálogo, abrir el wrapper:
```php
    <div id="fe-products-wrapper">
    <?php
}
```

2. **En `_contenido_inferior()`**: Cerrar el wrapper como primera línea, antes de FAQs o cualquier otro contenido:
```php
function nombre_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->
    <?php
    // resto del contenido (FAQs, SEO, etc.)
```

**Si falta este wrapper**, los filtros AJAX de Filter Everything Pro no funcionarán y la página dará error al intentar filtrar productos.

### Sistema de carga de CSS por categoría: `inc/cache-and-css.php`

La función `adrihosan_cargar_css_categoria()` (línea 74) carga automáticamente:
1. `base-global.css` → Estilos compartidos (`.adrihosan-full-width-block`, `.product-loop-header`, `.faq-section-common`, `.contact-help-common`, etc.)
2. `mobile-fixes.css` → Correcciones móviles globales (producto loop full-width, etc.)
3. `category-{ID}.css` → CSS específico de cada categoría (detectado por `file_exists()`)
4. `category-{parent_ID}.css` → CSS de categoría padre si existe

**Reglas importantes:**
- `category-styles.css` está **COMENTADO** en `functions.php:1277` y **NO se carga nunca**. Cada categoría DEBE tener su propio `category-{ID}.css` con TODOS los estilos necesarios, incluyendo las clases `.ap-*` con selector `.term-{ID}`.
- La versión del CSS usa `filemtime()` para cache-busting automático al actualizar el archivo.
- Para que un nuevo CSS se cargue, solo hay que crear `assets/css/category-{ID}.css`.

### REGLA: Clases CSS genéricas `.ap-*` van SIEMPRE en el CSS individual

Las clases genéricas (`.ap-inspiration-section`, `.ap-value-section`, `.ap-inspiration-card`, etc.) **NO se cargan desde un CSS compartido**. Cada `category-{ID}.css` debe incluir sus propias reglas `.ap-*` con el selector `.tax-product_cat.term-{ID}`.

**Patrón de referencia** (copiar de categorías existentes):
- Inspiration section: ver `category-1789.css` líneas 167-250
- Value section (trust bar con iconos): ver `category-4806.css` líneas 125-199
- SEO content + material cards: ver `category-2358.css` líneas 406-464
- Trends section: ver `category-2358.css` líneas 501-549

### REGLA: No tocar `mobile-fixes.css` para secciones de contenido

`mobile-fixes.css` SOLO debe contener reglas para el loop de productos de WooCommerce (`li.product`, `ul.products`). **NUNCA** añadir `padding: 0` u otras reglas que afecten a secciones de contenido (hero, inspiration, value, FAQs, etc.), ya que rompe el diseño de TODAS las categorías.

### Estructura obligatoria de archivos `category-{ID}.css`

Cada archivo CSS de categoría debe contener (en este orden):
1. **Ocultar elementos** - `.woocommerce-breadcrumb`, `.woocommerce-products-header`, etc.
2. **Hero section** - con `.hero-section-container` o clases propias
3. **Value/Trust bar** - `.ap-value-section`, `.ap-value-grid`, `.ap-value-card`
4. **Inspiration section** - `.ap-inspiration-section`, `.ap-inspiration-grid`, `.ap-inspiration-card`
5. **SEO/Material sections** - `.seo-content-section`, `.material-card`, `.trends-section`
6. **Consejo Adria** - `.adria-tip-box`
7. **Título catálogo** - `.product-loop-header`
8. **Responsive móvil** - `@media (max-width: 768px)`
9. **Responsive tablet** - `@media (max-width: 1024px)`

### Categorías con FAQs de clases BEM (no comunes)

La categoría **102 (Espejos)** usa clases BEM propias (`adri-faq-espejos__*`) en vez de las comunes (`faq-section-common`). El JS de `category-common.js` ya soporta ambos sistemas. Si se crean nuevas categorías, usar las clases comunes (`faq-section-common`, `faq-item-common`, `faq-question-common`).

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
- **CSS versioning con filemtime()** en cache-and-css.php (cache-bust automático)
- **Canonical paginación Escaparate** en functions.php (Rank Math)

### Historial de cambios recientes (Abril 2026)

#### Nuevas categorías creadas
- **99 - Muebles de Baño**: PHP (`category-muebles-bano.php`) + CSS (`category-99.css`) + FAQs
- **2421 - Muebles Baño Pequeños**: PHP (`category-muebles-bano-pequeno.php`) + CSS (`category-2421.css`)

#### Fix global: imágenes de producto en móvil
- **Problema**: En móvil, las imágenes del loop de productos se veían a `max-width: 300px` (muy pequeñas)
- **Solución**: Eliminado `max-width: 300px` → `max-width: 100%` en 8 categorías: 1789, 1790, 2082, 2160, 4865, 4866, 4869, 66
- **Refuerzo global**: `mobile-fixes.css` con selector `.tax-product_cat li.product` para prevenir recurrencia
- **Lección aprendida**: NO tocar padding/margin en `mobile-fixes.css` para secciones de contenido

#### Fix Metro (2093): secciones sin estilo
- **Problema**: Trust bar, "Elige tu Estilo" y "Patrones de Colocación" se veían sin CSS
- **Causa raíz**: El HTML usaba clases custom (`metro-inspiration-section`, `trust-bar-section`) que no tenían CSS, y `category-styles.css` no se carga
- **Solución**: Cambiar PHP a clases genéricas `.ap-*` + añadir todos los estilos en `category-2093.css` (value, inspiration, seo-content, trends, adria-tip-box + responsive)

#### Fix Espejos (102): categoría sin CSS
- **Problema**: No existía `category-102.css`. Todos los estilos estaban en `category-styles.css` (comentado)
- **Solución**: Creado `category-102.css` con todos los estilos extraídos + soporte FAQs BEM en `category-common.js`

#### Cache-busting CSS
- **Problema**: CSS versión hardcodeada `'1.0.0'` no se invalidaba al actualizar archivos
- **Solución**: Cambiado a `filemtime()` en `cache-and-css.php` para invalidación automática

### Categorías pendientes de migración CSS

Las siguientes categorías tienen sus estilos en `category-styles.css` (comentado) y necesitan `category-{ID}.css` individual:
- **4213** - Espejos con Luz
- **4247** - Espejos Redondos
