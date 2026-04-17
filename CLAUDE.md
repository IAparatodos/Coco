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

## REGLA CRÍTICA: Identidad corporativa Adrihosan (OBLIGATORIA en TODAS las categorías)

**NUNCA** uses paletas de colores temáticas (marrones para "rústico", dorados para "premium", verdes para "natural", etc.) ni paletas ampliadas con variaciones de azules. **TODAS** las categorías deben usar **únicamente** la identidad corporativa estricta de Adrihosan, sin excepciones, independientemente del tema visual de la categoría.

### Identidad corporativa oficial

La identidad corporativa real de Adrihosan se compone de **solo 2 colores + tipografía**:

| Elemento | Valor | Uso |
|----------|-------|-----|
| **Color corporativo CTA** | `#4dd2d0` | **Turquesa.** CTAs principales (`.bumper-btn`, asesoramiento, conversión), acentos sobre fondos oscuros (taglines, breadcrumbs, highlights en hero), hover states |
| **Color corporativo texto** | `#3f6f7b` | **Azul corporativo.** Headings, títulos, body text, descripciones, enlaces, borders destacados, fondos hero/bumper, overlays (`rgba(63, 111, 123, ...)`) |
| **Tipografía corporativa** | `Poppins` | Única fuente permitida en toda la web. `font-family: 'Poppins', sans-serif;` en cada bloque estructural |

### Neutros complementarios (tintes de #3f6f7b)

Para backgrounds y borders de secciones se permiten **solo** estos neutros derivados del azul corporativo:

| Color | Hex | Uso |
|-------|-----|-----|
| Blanco | `#ffffff` | Fondos principales, textos sobre `#3f6f7b` |
| Tinte claro | `#f0f7f8` | Backgrounds de secciones (trust bar, seo content, related cats, adria-tip-box) |
| Border sutil | `#d4e3e6` | Borders de tarjetas y elementos sobre fondo claro |
| Overlay | `rgba(63, 111, 123, 0.55-0.7)` | Overlays sobre imágenes hero/bumper |
| Sombras | `rgba(63, 111, 123, 0.08-0.10)` | Box-shadows |

### Reglas estrictas

1. **SOLO 2 colores**: Cualquier CSS de categoría debe contener **únicamente** `#4dd2d0`, `#3f6f7b`, `#ffffff`, y los neutros derivados (`#f0f7f8`, `#d4e3e6`) más los rgba de overlay/sombra. **NADA MÁS.**
2. **Categoría de referencia**: `category-2428.css` (Muebles de Baño Rústicos) es la implementación canónica de la identidad corporativa real. Cópiala como base al crear nuevas categorías.
3. **Botones CTA**: Los `.bumper-btn` y otros botones de conversión SIEMPRE deben usar `#4dd2d0` (turquesa corporativo), nunca `#3f6f7b` ni otros colores.
4. **NO inventar paletas**: Aunque el tema sea "rústico", "natural", "imitación madera", "premium" o "vintage", los colores del diseño (NO de las imágenes de productos) siempre son los corporativos. La calidez o frialdad visual viene exclusivamente de las imágenes, no del CSS.
5. **NO usar azules antiguos**: Los hex `#1a3a4a`, `#3a5a6a`, `#2a7a8a`, `#7cc8e8`, `#f0f5fa`, `#d8e3ef` son **paleta antigua incorrecta** y están prohibidos. Si los encuentras en cualquier categoría, reemplázalos por los corporativos.
6. **Tipografía obligatoria**: Toda sección estructural debe declarar `font-family: 'Poppins', sans-serif;`. No se permiten Playfair, Georgia, serif ni ninguna otra fuente.
7. **Comentario obligatorio**: Cada `category-{ID}.css` debe llevar al inicio el bloque:
   ```css
   /* ========================================================================== */
   /* CATEGORY-{ID}.CSS - Nombre de la categoria                                 */
   /* Identidad corporativa Adrihosan:                                           */
   /*   - Color corporativo CTA: #4dd2d0                                         */
   /*   - Color corporativo texto: #3f6f7b                                       */
   /*   - Tipografia corporativa: Poppins                                        */
   /* ========================================================================== */
   ```
8. **Verificación previa al commit**: Antes de cerrar cualquier cambio en CSS de categorías, ejecuta:
   ```bash
   grep -E "#[0-9a-fA-F]{3,6}" assets/css/category-{ID}.css
   ```
   y revisa que SOLO aparezcan: `#4dd2d0`, `#3f6f7b`, `#ffffff`, `#f0f7f8`, `#d4e3e6`. Cualquier otro hex es un error que debe corregirse antes del commit.

### Errores históricos a evitar
- Categoría 2433 creada con dorado `#c9a96e` y navy `#0d1b2a` → corregido a paleta corporativa antigua (pendiente de migración a identidad real `#4dd2d0`/`#3f6f7b`).
- Categoría 2428 creada con paleta marrón/madera (`#3a2616`, `#8b5a2b`, `#faf6f0`, `#e8c89a`, etc.) → corregido temporalmente a paleta antigua → **corregido definitivamente a identidad corporativa real `#4dd2d0`/`#3f6f7b`** (categoría de referencia).
- Categoría Zellige perdiendo `#4dd2d0` corporativo → corregido.
- **Error generalizado**: múltiples categorías usan la paleta antigua ampliada de azules (`#1a3a4a`, `#3a5a6a`, `#2a7a8a`, `#7cc8e8`). Deben migrarse progresivamente a la identidad corporativa real de 2 colores.

## REGLA CRÍTICA: Categorías nuevas necesitan al menos 1 producto asignado

WooCommerce **NO dispara** los hooks `woocommerce_before_shop_loop` y `woocommerce_after_shop_loop` cuando la categoría está vacía. Como el patrón estándar de Adrihosan engancha `_contenido_superior()` y `_contenido_inferior()` a esos hooks, si la categoría no tiene productos asignados la página solo muestra **header + footer** (más bloques globales de reseñas/envíos).

**Síntoma**: visitas `/categoria-producto/{slug}/`, la categoría existe en WP, no hay error PHP, pero el contenido (hero, trust bar, filtros, FAQs, etc.) no aparece.

**Causa**: 0 productos asignados a esa categoría.

**Solución correcta**: asignar al menos 1 producto a la categoría desde WooCommerce. NO modificar los hooks a `before/after_main_content` para evitarlo, porque rompe la coherencia con las otras 44+ categorías que usan el patrón estándar.

## REGLA: URLs en el código PHP de categorías

Cuando generes enlaces en los archivos `inc/category-*.php` y **no tengas claro** la URL exacta de una categoría, producto o página, usa siempre la home como fallback:

```
https://www.adrihosan.com/
```

**NUNCA** inventes slugs ni URLs que no hayas verificado que existen. Es preferible enlazar a la home que generar un 404.

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

### Categorías registradas (50 total):

| ID | Nombre | Archivo contenido | CSS individual |
|----|--------|-------------------|----------------|
| 99 | Muebles de Baño | category-muebles-bano.php | category-99.css |
| 100 | Muebles de Baño con Patas | category-muebles-bano-patas.php | category-100.css |
| 101 | Muebles de Baño Suspendidos | category-muebles-bano-suspendidos.php | category-101.css |
| 103 | Columnas de Baño | category-columnas-bano.php | category-103.css |
| 2421 | Muebles Baño Pequeños | category-muebles-bano-pequeno.php | category-2421.css |
| 2428 | Muebles Baño Rústicos | category-muebles-bano-rusticos.php | category-2428.css |
| 2528 | Ofertas Muebles de Baño | category-ofertas-muebles-bano.php | category-2528.css |
| 5141 | Espejos de Baño Negros | category-espejos-negros.php | category-5141.css |
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

### Widget Filter Everything Pro: ID compartidos por familia

Para mantener consistencia de filtros dentro de una misma familia de productos, varias categorías comparten el mismo widget FE:

| Familia | ID widget FE | Categorías que lo usan |
|---------|--------------|------------------------|
| Muebles de baño | `427306` | 99, 100, 101, 103, 2421, 2428, 2528 |

**Nota**: Si una nueva categoría de la familia "muebles de baño" necesita filtros, reusar `427306` por defecto. Solo crear un widget nuevo si los atributos filtrables son distintos (p. ej. **espejos negros (5141)** usa hoy `427306` con un `TODO` para sustituirlo por un widget propio cuando Ricardo lo cree, ya que los espejos no comparten todos los atributos con los muebles).

### Patrón: Fix círculo de contacto Ricardo (deformación en flex)

Cuando el bloque `contact-help-common .contact-intro` tiene un `<h2>` largo (más de una línea), el `<img>` de Ricardo se deforma horizontalmente porque el contenedor flex le aplica `flex: 1` por defecto.

**Solución estándar** (replicar en cada `category-{ID}.css` que use `contact-help-common`):

```css
.tax-product_cat.term-{ID} .contact-help-common .contact-intro img {
    flex-shrink: 0;
    width: 110px;
    height: 110px;
    aspect-ratio: 1 / 1;
    object-fit: cover;
}

.tax-product_cat.term-{ID} .contact-help-common .contact-intro h2 {
    font-size: clamp(1.25rem, 2.6vw, 1.65rem);
    line-height: 1.35;
}
```

Aplicado ya en: 100, 101, 103, 5141.

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
- **2428 - Muebles Baño Rústicos**: PHP (`category-muebles-bano-rusticos.php`) + CSS (`category-2428.css`) + FAQs + JSON-LD schema. **Paleta corporativa** (`#1a3a4a`, `#3a5a6a`, `#2a7a8a`, `#7cc8e8`, `#4dd2d0`, `#f0f5fa`) — NO usa marrones a pesar del estilo rústico, los tonos cálidos provienen exclusivamente de las imágenes de productos. Incluye banner mediterráneo de venta cruzada y grid de 4 categorías relacionadas.

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

#### Fix Muebles Baño Rústicos (2428): paleta de colores incorrecta (DOBLE CORRECCIÓN)
- **Problema inicial**: La categoría se creó con paleta marrón/madera (`#3a2616`, `#8b5a2b`, `#faf6f0`, `#e8c89a`, `#5a3a1f`, `#6b5340`, `#e6d9c4`) en lugar de la paleta corporativa. Mismo error que se cometió con la categoría 2433.
- **Primera solución**: Reemplazados los colores marrones por paleta corporativa ampliada (`#1a3a4a`, `#3a5a6a`, `#2a7a8a`, `#7cc8e8`, `#4dd2d0`, `#f0f5fa`, `#d8e3ef`).
- **Problema detectado después**: La "paleta corporativa ampliada" tampoco era correcta. La identidad real de Adrihosan es **solo 2 colores**: `#4dd2d0` (turquesa CTA) y `#3f6f7b` (azul corporativo), más Poppins como fuente.
- **Corrección definitiva**: Reemplazados los azules ampliados por la identidad corporativa real:
  - `#1a3a4a`, `#3a5a6a`, `#2a7a8a` → `#3f6f7b`
  - `#7cc8e8` → `#4dd2d0`
  - `#f0f5fa` → `#f0f7f8` (tinte neutro derivado)
  - `#d8e3ef` → `#d4e3e6` (tinte neutro derivado)
  - `rgba(26, 58, 74, ...)`, `rgba(42, 122, 138, ...)` → `rgba(63, 111, 123, ...)`
- **Categoría 2428 ahora es la referencia canónica** de la identidad corporativa real.
- **Lección aprendida**: El estilo "rústico" lo aportan las **imágenes de productos**, NUNCA el CSS. La identidad corporativa de Adrihosan es estricta: solo `#4dd2d0` + `#3f6f7b` + Poppins. Documentado en la regla "Identidad corporativa Adrihosan" al inicio de este archivo.

#### Nuevas categorías rama `claude/fix-category-2093-error-2BnHs`
- **100 - Muebles de Baño con Patas**: PHP + CSS + 4 trust items + 5 related cards + FAQs + Ricardo. Hero `muebles-de-bano-con-patas-Adrihosan.jpg`. Widget FE `427306`.
- **103 - Columnas de Baño**: PHP + CSS + 4 trust items + 5 related cards + FAQs + Ricardo. Hero `columnas-de-bano-Adrihosan.jpg`. Widget FE `427306`.
- **2528 - Ofertas Muebles de Baño**: PHP + CSS + slugs corregidos (`muebles-de-bano-baratos`, `mueble-lavabo-pequeno`) + sale_flash badge `-XX%`. Widget FE `427306`.
- **5141 - Espejos de Baño Negros**: PHP + CSS + 4 trust items + bumper a grifería negra + 4 related cards (LED, Redondos, Todos Espejos, Mamparas Negras) + 5 trends + 5 FAQs + Ricardo. Hero `espejos-de-bano-negros-Adrihosan.jpg`. Widget FE `427306` con `TODO` para widget propio de espejos.

#### Aprendizaje crítico (cat 5141): hooks vacíos
- **Síntoma**: tras crear cat 5141 con el patrón estándar, la página solo mostraba header + footer. Sin error PHP.
- **Causa**: la categoría no tenía productos asignados → WooCommerce omite `woocommerce_before_shop_loop` y `woocommerce_after_shop_loop`.
- **Solución NO recomendada**: cambiar a `woocommerce_before_main_content` / `woocommerce_after_main_content` (rompe coherencia con las otras 49 categorías).
- **Solución correcta**: asignar al menos un producto desde WooCommerce admin. Documentado como regla crítica al inicio del archivo.

### Categorías pendientes de migración CSS

Las siguientes categorías tienen sus estilos en `category-styles.css` (comentado) y necesitan `category-{ID}.css` individual:
- **4213** - Espejos con Luz
- **4247** - Espejos Redondos
