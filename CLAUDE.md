# Adrihosan - Instrucciones para Claude

## AUDITORÍA 2026-07-17 — estado y pendientes

Auditoría completa del repo (functions.php, inc/, assets/). **Corregido en PRs #51-#56**:
reservas blindadas (doble reserva, DoS por `end` sin acotar, fail-open, timezone, manejo
de errores JS), guards `function_exists` en los 140 enganches de contenido, "36 meses"→"3 meses",
headings con palabras prohibidas, cache-busting con `filemtime` (base-global, mobile-fixes,
CSS padre), escapado de menús/REQUEST_URI/subtítulos, backups de functions.php eliminados del repo.

**Pendientes de decisión/verificación (NO tocar sin revisar en navegador):**

1. **HTML cruzado en cats 2083, 4876, 4862, 102**: su `_contenido_superior` engancha a
   `woocommerce_before_main_content` prio 7-9 pero `<main>` se abre a prio 10 → hero fuera
   de `<main>` y `#fe-products-wrapper` cruzado. Migrarlas al patrón estándar
   (`before_shop_loop` prio 5) requiere comprobar el filtrado FE y el CSS en esas 4 páginas.
2. **Paletas fuera de identidad**: `category-1989.css` y `category-4043.css` (terracota) y
   `category-66.css` (azules acuáticos) violan la identidad de 2 colores. Migración visual pendiente.
   Residuos menores (`#102e35`, `#333`, `#eee`) en ~31 CSS antiguos.
3. **mobile-fixes.css**: desde ~línea 195 contiene secciones de contenido (`bho-*`, `bhp-*`) que
   violan la regla "solo loop de productos". Reubicarlas a sus category-CSS con verificación visual.
4. **Heros sin imagen**: `category-baneras-modernas.php` y `category-baneras-baratas.php` tienen
   el `TODO` de background-image sin resolver → pedir URLs reales de las imágenes.
5. **`inc/category-espejos.php` está huérfano** (nunca se requiere): la cat 102 vive inline en
   functions.php. No añadir su require sin limpiar la duplicación. La tabla de categorías de este
   archivo está desfasada (el switch tiene 118 cases + 1 brand): **la fuente de verdad es el switch
   de functions.php**, no la tabla.
6. **Reservas — mejoras de fondo** (no urgentes): tokens de cancelación sin caducidad (RGPD),
   `CREATE TABLE IF NOT EXISTS` rompe dbDelta, rate-limit sobre REMOTE_ADDR detrás de CDN,
   Pipedrive síncrono en el request de reserva.
7. **H1 fijo** (sin `adrihosan_h1_dinamico`) en `category-encimeras-bano.php` y
   `category-encimeras-blancas.php`.

## REGLA OBLIGATORIA — main es la única fuente de verdad

Cada sesión nueva, **antes de tocar código**:

```bash
git fetch origin main
git rebase origin/main   # o: git merge origin/main si la rama de trabajo ya no es lineal
```

Esto trae a la rama de trabajo todo lo que esté ya en `main` (commits de otras sesiones, fixes urgentes, releases). Si se omite, se acaba reescribiendo archivos clave del servidor (típicamente `functions.php`) con una versión vieja que no conoce el trabajo de otras ramas, y se borran silenciosamente cases del master controller / requires / setup functions de otros silos.

Cada vez que una feature está acabada y verificada:

1. Abrir PR de la rama de trabajo a `main`.
2. Merge (o squash si es trivial).
3. Si quedaran ramas viejas con commits no fusionados, **cherry-pickearlos antes de borrarlas** o consolidar vía PR.

### Síntoma de regresión por incumplimiento

"En el servidor están los `inc/category-*.php` y `assets/css/category-*.css` del silo X, pero la página solo muestra el loop de productos" → casi seguro el `functions.php` del servidor está desactualizado y no tiene los `case` / `setup function` / `require` de ese silo. Causa raíz: una sesión vieja subió esos archivos por FTP desde una rama huérfana, y otra sesión posterior sobrescribió `functions.php` desde una rama que nunca fusionó la primera. Solución: cherry-pick + merge a main + reglas de esta sección.

### Histórico

- **2026-06-26**: 6 categorías del silo Bañeras (394, 2279, 2280, 2311, 2314, 2315) llevaban semanas con sus PHP+CSS en el servidor pero el `functions.php` sin wiring. El trabajo vivía en `claude/resolve-merge-conflicts-zr6NH` que nunca se mergeó. Recuperado vía cherry-pick a `claude/fix-css-loading-RdK8j` + PR #26 a main. Documentado aquí para no repetir.

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

## REGLA OBLIGATORIA — SCHEMA FAQ (NO MODIFICAR)

**NUNCA** añadir `<script type="application/ld+json">` con `"@type": "FAQPage"` en archivos PHP del tema (especialmente en `inc/category-*.php`).

El schema FAQ se gestiona **EXCLUSIVAMENTE** desde Rank Math en el panel de WordPress: editar categoría → Schema → FAQ.

En los archivos PHP solo va el HTML visible del acordeón (`<section class="faq-section-common">`), **sin schema adyacente**.

### Razón histórica

El JSON-LD hardcodeado en PHP duplicaba el FAQPage que ya emite Rank Math, generando errores de "FAQ duplicado" en Search Console. **17 URLs afectadas en mayo 2026**, limpieza realizada en commits `d2799dc` (sample cat 103) y `93143cd` (14 archivos restantes).

### Implicación al crear categorías nuevas

Cuando se cree una categoría nueva copiando un archivo `inc/category-*.php` existente:
- ✅ Copiar el bloque HTML `<section class="faq-section-common">` con sus FAQs visibles.
- ❌ **NO incluir** ningún `<script type="application/ld+json">` con `FAQPage` ni comentario `<!-- SCHEMA FAQPage -->`.
- ✅ Después, crear la entrada FAQ correspondiente en Rank Math (panel WP → editar categoría → Schema → FAQ) con las mismas preguntas/respuestas que el HTML.

### Síntoma típico de regresión

Si Search Console reporta "FAQ duplicado" en una URL de categoría → revisar si el `inc/category-*.php` correspondiente tiene un bloque `<script ld+json>` FAQPage. Si lo tiene, eliminarlo siguiendo el patrón del commit `93143cd` (borrar comentario `<!-- SCHEMA FAQPage -->` + bloque `<script>...</script>` + línea en blanco redundante).

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

## REGLA CRÍTICA: Páginas estáticas (no categorías) se migran con `front-page.php` o template propio

Para migrar páginas normales de WordPress (no categorías de producto) de Gutenberg a PHP+CSS, **NO** usar el filtro `the_content`. Este filtro puede fallar por múltiples razones (caché LiteSpeed, condiciones `is_page()`/`in_the_loop()` que no se cumplen, plugins que rompen el flujo, etc.).

**En su lugar, usar un template de WordPress que sobrescriba la jerarquía:**

### Patrón para la portada estática (Home Adrihosan, page 164094)

1. Crear `adrihosan/inc/page-home.php` con la función `adrihosan_home_contenido()` que devuelve HTML vía `ob_start()` / `ob_get_clean()`.
2. `include` esa función en `functions.php` (no require, por seguridad):
   ```php
   include get_template_directory() . '/inc/page-home.php';
   ```
3. Crear `adrihosan/front-page.php` en la **raíz del tema** (al nivel de `functions.php`, `header.php`, `footer.php`). WordPress lo usa automáticamente para la portada estática, sin filtros ni condicionales:
   ```php
   <?php
   $home_css_path = get_stylesheet_directory() . '/assets/css/page-home.css';
   if ( file_exists( $home_css_path ) ) {
       wp_enqueue_style(
           'adrihosan-page-home',
           get_stylesheet_directory_uri() . '/assets/css/page-home.css',
           array(),
           filemtime( $home_css_path )
       );
   }

   get_header();
   ?>
       <main id="primary" class="site-main">
           <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <div class="entry-content">
                   <?php
                   if ( function_exists( 'adrihosan_home_contenido' ) ) {
                       echo adrihosan_home_contenido();
                   } else {
                       while ( have_posts() ) : the_post(); the_content(); endwhile;
                   }
                   ?>
               </div>
           </article>
       </main>
   <?php
   get_footer();
   ```
4. El CSS se encola **directamente desde el template** — no depende de `is_page()` ni de funciones hookeadas a `wp_enqueue_scripts`.
5. El CSS usa un wrapper `.home-adrihosan` (no `.page-id-164094`) para no depender de que WP añada el body class correcto.

### Patrón para otras páginas estáticas (no portada)

Para páginas que **no** son la portada estática, usar templates específicos por slug o ID:
- `page-{slug}.php` (ej: `page-contacto.php`)
- `page-{ID}.php` (ej: `page-123.php`)

Mismo patrón: encolar CSS directamente en el template, llamar a la función de contenido vía `function_exists()`.

### Por qué NO usar `the_content` filter

- **Caché LiteSpeed**: sirve HTML antiguo sin la inyección del filtro.
- **Condiciones frágiles**: `is_page(ID)`, `in_the_loop()`, `is_main_query()` pueden fallar en combinaciones concretas.
- **Prioridad de filtros**: otros plugins/themes pueden interferir.
- **Fallback complejo**: si falla silenciosamente, no hay forma clara de debuggear.

Con `front-page.php` o `page-{slug}.php`, WordPress **siempre** usa ese template — es más predecible y robusto.

## REGLA CRÍTICA: Secciones full-bleed (ancho completo) — usar el patrón corporativo

Cuando una sección (hero, trust-bar, bumper, FAQs, contacto Ricardo, etc.) tenga que ocupar el **ancho completo del viewport** rompiendo el contenedor centrado del template, **SIEMPRE** usa la clase corporativa **`.adrihosan-full-width-block`** definida en `assets/css/base-global.css`. No repliques el truco a mano.

### Patrón obligatorio

```html
<section class="hero-section-container adrihosan-full-width-block" style="background-image: url('...');">
    <div class="hero-content">
        <h1>Titulo</h1>
        <p>Descripcion</p>
    </div>
</section>
```

Y en el CSS de la página/categoría **solo** los estilos visuales (overlay, tipografía, padding interno, layout del contenido). Nada de `width: 100vw`, `left: 50%`, `margin-left: -50vw` — eso ya lo hace `.adrihosan-full-width-block`.

### NUNCA escribir reglas que sobrescriban el ancho de TODAS las secciones

Patrón que **rompe el full-bleed** y debe evitarse:

```css
/* ❌ MAL — sobrescribe el width:100vw de .adrihosan-full-width-block */
.contacto-page section {
    width: 100% !important;
    max-width: 100% !important;
}
```

Si necesitas un reset de secciones (para anular max-width del tema), **excluye explícitamente** las full-bleed con `:not()`:

```css
/* ✅ BIEN — el reset no toca las secciones full-bleed */
.contacto-page section:not(.adrihosan-full-width-block) {
    width: 100% !important;
    max-width: 100% !important;
}
```

### Síntoma típico de este bug

Hero/sección desplazada hacia la derecha, ocupando solo media página o cortando el texto por la derecha. Casi siempre la causa es una regla `section { width: 100% !important }` con mayor especificidad que vence al `width: 100vw` del full-bleed.

### Histórico

- **2026-04-26 (cat 102, 99, 100, 101, 103, etc.)**: ya resuelto en categorías con `adrihosan-full-width-block`.
- **2026-04-26 (page-contacto)**: el hero salía desplazado a la derecha. Causa: regla `.contacto-page section { width: 100% !important }` sobrescribía el full-bleed. Solución: añadir `:not(.adrihosan-full-width-block)` y usar la clase corporativa en el hero. Documentado aquí para no repetir el error.

## REGLA CRÍTICA: Sistema de reservas — endpoints REST NUNCA se cachean

### El problema (caso real 2026-05-13)

El sistema de reservas (`/wp-json/adrihosan/v1/availability`) mostraba **todos los slots como "no disponible"** en producción aunque el Google Calendar de `comercial@adrihosan.com` estaba completamente libre. Síntomas:

1. Calendario de la web pintaba "0 huecos" en todos los días.
2. Google Calendar admin: vacío, sin eventos all-day bloqueantes.
3. Token OAuth funcionando bien (no era el problema).
4. Tras purgar **LiteSpeed Cache + OPcache**, la disponibilidad volvió correcta al instante.

### Causa raíz

LiteSpeed Cache estaba cacheando la respuesta JSON del endpoint REST `/availability`. En algún momento anterior el calendario sí tuvo eventos bloqueantes (o el token falló) y LiteSpeed guardó la respuesta "sin slots". Esa respuesta cacheada se sirvió durante horas/días aunque el código y Google ya hubieran cambiado.

### Solución obligatoria

**Cualquier endpoint REST dinámico en el tema** (reservas, disponibilidad, carrito, formularios) **debe** enviar headers anti-cache al inicio del callback:

```php
function mi_endpoint_dinamico( WP_REST_Request $request ) {
    nocache_headers();
    header( 'Cache-Control: private, no-store, no-cache, must-revalidate, max-age=0' );
    header( 'Pragma: no-cache' );
    if ( function_exists( 'do_action' ) ) {
        do_action( 'litespeed_control_set_nocache', 'razon' );
    }
    // ... resto del callback
}
```

Aplicado en `inc/reservas-rest-routes.php → adrihosan_rest_availability` (commit `cac6b5c` y posterior).

### Reincidencia 2026-06-02: el control por PHP no basta

Volvió a aparecer "no hay disponibilidad" **aunque las cabeceras anti-cache ya estaban desplegadas**. Aprendizaje clave:

- `do_action('litespeed_control_set_nocache')` solo evita que la respuesta **entre** en caché, y **solo si LiteSpeed ejecuta el PHP**. Una vez LiteSpeed tiene la respuesta cacheada, la sirve **sin tocar PHP**, así que ningún hook puede descachearla. Por eso "purgo y va, pero al rato vuelve".
- En esta config de LiteSpeed el control por PHP **se ignora para REST** (típicamente porque la opción *Cache → "Cache REST API"* está activa). El control en código no es suficiente por sí solo.

**Medidas tomadas:**

1. **Guarda central** en `inc/reservas-rest-routes.php` (`rest_pre_dispatch`) que aplica anti-cache a **todo** el namespace `/adrihosan/v1/*` (no solo `/availability`), antes de cualquier callback.
2. **Regla en el panel de LiteSpeed (OBLIGATORIA, garantía a nivel de servidor):**
   `LiteSpeed Cache → Cache → Excludes → "Do Not Cache URIs"` →
   ```
   /wp-json/adrihosan/v1/
   ```
   Alternativa/complemento: `LiteSpeed Cache → Cache → "Cache REST API" = OFF`.
   Esto NO está en el repo (es config de WordPress); si se migra de servidor o se resetean los ajustes de LiteSpeed, **hay que volver a ponerlo**.

### Reincidencia 2: cache-buster en el frontend (la garantía definitiva)

Aun con la guarda central desplegada **siguió cacheándose**. Causa: la URL de la petición era **fija por semana** (`/availability?start=...&end=...`), así que cualquier capa que cachee por URL —LiteSpeed REST, un **CDN tipo Cloudflare por delante** (no lo controlamos desde PHP), o el propio navegador— la guardaba.

**Solución definitiva (independiente del servidor)** en `assets/js/reservas-calendar.js`:

```js
var url = RESERVAS.restUrl + '/availability?start=' + start + '&end=' + end + '&_=' + Date.now();
fetch(url, { cache: 'no-store', headers: { 'X-WP-Nonce': RESERVAS.nonce } })
```

El parámetro `&_=Date.now()` hace cada petición única → ninguna caché por URL puede servir una respuesta vieja. `cache:'no-store'` lo refuerza en el navegador. Esta es la medida más robusta porque NO depende de la config de LiteSpeed ni del CDN.

> **Caveat:** si el CDN está configurado para *ignorar query strings* al cachear, el `&_=` no bastará → entonces sí hace falta la regla "Do Not Cache URIs" del panel. Por eso mantenemos las tres capas: cabeceras PHP + guarda central + cache-buster frontend (+ regla de LiteSpeed como red de seguridad).

### Reincidencia 3 (2026-06-10): el nonce caducado era la causa raíz del bucle

Aun con el cache-buster desplegado volvió a fallar, y el patrón clave era: **"purgo LiteSpeed → funciona → ~1 día después vuelve a fallar"**. La causa real no era el cacheo del JSON sino el **nonce incrustado en el HTML cacheado** de `/contacto/`:

1. `cache-and-css.php` inyecta `RESERVAS.nonce = wp_create_nonce('wp_rest')` en el HTML de la página.
2. LiteSpeed cachea la página días; los nonces de WP caducan a las **12-24h**.
3. El JS enviaba ese nonce caducado como `X-WP-Nonce` en el GET `/availability`. WordPress **rechaza con 403 `rest_cookie_invalid_nonce` cualquier petición REST con nonce inválido, aunque el endpoint sea público** (gotcha conocido de WP + page caching).
4. El JS recibía el 403 → `json.days` undefined → "No hay huecos disponibles esta semana".
5. Purga → HTML con nonce fresco → funciona → 24h después se repite.

**Fix definitivo (commit en `claude/fix-css-loading-RdK8j`):**
- `assets/js/reservas-calendar.js`: el GET `/availability` ya **no envía `X-WP-Nonce`** (el endpoint es público y no lo verifica; enviarlo solo podía romper). El POST `/bookings` sí lo sigue enviando (allí es obligatorio).
- `inc/page-contacto.php`: hook `template_redirect` que marca la página 113323 como **no cacheable** (`nocache_headers()` + `litespeed_control_set_nocache`) → el nonce del formulario de reserva siempre es fresco.

**Regla general:** cualquier página cuyo HTML incruste un nonce (`wp_create_nonce`) que luego usa JS contra la REST API **no puede cachearse a página completa**, o el nonce debe obtenerse en runtime. Y los GET públicos **no deben enviar `X-WP-Nonce`**: no aporta nada y un nonce caducado tumba la petición.

### Reincidencia 4 (2026-06-11): solución definitiva = /availability por POST

Confirmado con el usuario: archivos desplegados, healthcheck verde (backend sano), y aun así **"purgo LiteSpeed → funciona → al rato vuelve"**. Como purgar **LiteSpeed** (no Cloudflare) lo arregla, el cacheo es de **LiteSpeed**, y está ignorando tanto el cache-buster `&_=` (LiteSpeed configurado para ignorar query strings) como el `litespeed_control_set_nocache` por PHP (Cache REST API activo).

**Fix definitivo e inmune a la config de LiteSpeed:** `/availability` se pide por **POST**, no por GET. LiteSpeed (y cualquier CDN/caché) **nunca cachea POST** → imposible servir una respuesta antigua.

- `inc/reservas-rest-routes.php`: la ruta `/availability` acepta `[ 'GET', 'POST' ]` (GET solo para pruebas directas; el frontend usa POST). El callback ya lee `start`/`end` con `get_param()`, que funciona igual con body JSON.
- `assets/js/reservas-calendar.js`: el fetch de disponibilidad es `method: 'POST'` con `body: JSON.stringify({ start, end })` y `Content-Type: application/json`.

**Regla general (la definitiva):** un endpoint REST cuya respuesta cambia constantemente (disponibilidad, stock, precios en vivo) y al que le persigue el caché de LiteSpeed pese a las cabeceras → **hacerlo POST**. Es la única medida que no depende de ningún ajuste del panel. El cache-buster por query string NO basta si LiteSpeed ignora query strings.

### Síntoma típico de regresión

Si vuelve a aparecer "todo no disponible" o "datos antiguos" en cualquier endpoint dinámico del tema:
1. Purga **LiteSpeed Cache** (no solo browser cache).
2. Si tras purgar funciona pero al cabo de un rato vuelve a romperse → el endpoint **se está cacheando**. Verifica (a) que la guarda `rest_pre_dispatch` está desplegada y (b) que `/wp-json/adrihosan/v1/` está en "Do Not Cache URIs" de LiteSpeed. El paso (b) es el que de verdad lo garantiza.
3. Si tras purgar sigue roto → mirar token de Google, ver "Healthcheck" abajo.

### Healthcheck activo

Existe un WP-Cron diario en `inc/reservas-healthcheck.php` que:
1. Fuerza refresh del access_token de Google.
2. Llama a freeBusy.
3. Si algo falla, manda email a `comercial@adrihosan.com` con la causa.

Si comercial@ recibe el email "[Adrihosan] FALLO en sistema de reservas":
- `[TOKEN] token_refresh_failed`: el refresh_token está revocado → regenerar desde Google Cloud Console y actualizar `ADRIA_GOOGLE_REFRESH_TOKEN` en `wp-config.php`.
- `[TOKEN] missing_credentials`: falta alguna constante `ADRIA_GOOGLE_*` en `wp-config.php`.
- `[FREEBUSY] *`: Google rechaza la petición. Revisar Google Cloud Console (cuota, API habilitada, calendar_id correcto).

### Gotcha OAuth: modo "Testing"

Si el OAuth consent screen del proyecto Google Cloud está en modo **"Testing"** en vez de **"In production"**, los refresh tokens caducan automáticamente a los **7 días**. Verificar en `https://console.cloud.google.com/apis/credentials/consent` que el estado sea "In production".

### Auto-renovación del access_token

`inc/reservas-google-auth.php` cachea el access_token en transient durante ~55 min. Cuando Google rechaza un token cacheado con 401 (raro pero posible), `inc/reservas-google-api.php` detecta el 401, fuerza un refresh (`get_access_token(true)`) y reintenta una vez. Antes de esto, el sistema podía servir un token muerto hasta 55 min sin auto-recuperarse.

## REGLA CRÍTICA: Subidas FTP corruptas tiran la web — `require` defensivo OBLIGATORIO

### El problema (caso real 2026-05-05)

Cuando se sube un archivo PHP por FTP y la subida se corrompe (corte de conexión, encoding mal, CRLF/LF, BOM añadido por editor), el archivo queda en el servidor con **parse error**. Un `require` directo sobre ese archivo **tira toda la web** con "Error crítico". Síntomas característicos:

1. Web caída con "Ha habido un error crítico en esta web".
2. El código local hace `php -l` clean, no hay sintaxis rota localmente.
3. Revertir el último cambio de `functions.php` **NO** arregla nada → indica que un archivo OTRO (un inc) está corrupto en el server.
4. `file_exists()` devuelve `true` porque el archivo SÍ existe — solo está corrupto. **`file_exists` NO detecta corrupción**.
5. Aunque resubas el archivo bueno, OPcache puede seguir sirviendo el bytecode roto cacheado.

### Patrón obligatorio para `require` de categorías nuevas

NUNCA hacer `require` directo plano cuando se añade una categoría nueva al `functions.php`. Patrón correcto:

```php
$_adri_inc_path = get_template_directory() . '/inc/category-XXXX.php';
if ( file_exists( $_adri_inc_path ) ) {
    require $_adri_inc_path;
}
```

O agrupado en bucle (preferido si añadimos varias):

```php
$_adri_incs = [
    '/inc/category-XXXX.php',
    '/inc/category-YYYY.php',
];
foreach ( $_adri_incs as $f ) {
    $p = get_template_directory() . $f;
    if ( file_exists( $p ) ) { require $p; }
}
unset( $_adri_incs, $f, $p );
```

> **Aviso:** esto solo protege contra archivos **faltantes**. No protege contra archivos corruptos (parse error). Para eso necesitamos también el siguiente patrón.

### Patrón obligatorio para `add_action` en setup functions

En la setup function que se llama desde el master controller, **TODO `add_action`** que enganche un callback definido en un inc file debe ir envuelto en `function_exists` guard:

```php
function adrihosan_setup_categoria_XXXX_cpu_fix() {
    add_filter('woocommerce_show_page_title', '__return_false');
    remove_all_actions('woocommerce_archive_description');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10);
    add_action('wp_head', 'adrihosan_ocultar_filtros_legacy', 5);

    if ( function_exists( 'adrihosan_categoria_XXXX_contenido_superior' ) ) {
        add_action('woocommerce_before_shop_loop', 'adrihosan_categoria_XXXX_contenido_superior', 5);
    }
    if ( function_exists( 'adrihosan_categoria_XXXX_contenido_inferior' ) ) {
        add_action('woocommerce_after_shop_loop', 'adrihosan_categoria_XXXX_contenido_inferior', 99);
    }
}
```

Si el inc no se cargó (por estar corrupto, faltante o por OPcache roto), simplemente la categoría no muestra contenido custom — pero la web sigue viva.

### Protocolo de subida de una categoría nueva al servidor

Cuando indiques al usuario qué archivos subir, SIEMPRE en este orden y con verificación:

1. **PRIMERO**: el(los) archivo(s) `inc/category-*.php` y `assets/css/category-*.css`.
2. **VERIFICAR EN FTP** que los archivos subidos pesan lo mismo que los locales (si pesan menos, la subida se cortó → resubir).
3. **DESPUÉS**: `functions.php` (que es el que carga los anteriores).
4. **POR ÚLTIMO**: purgar **LiteSpeed Cache + OPcache** (el segundo se olvida con frecuencia y suele ser la causa de "tras purgar caché ahora peta").

LiteSpeed Cache ≠ OPcache. Son dos cachés distintas. OPcache cachea **bytecode PHP compilado**. Si una vez se compiló un archivo con parse error, OPcache puede seguir sirviendo ese bytecode hasta que se resetee PHP-FPM o se invalide explícitamente.

### Diagnóstico rápido cuando peta tras una subida

1. ¿La web peta también con la versión revertida del último cambio? → Sí: archivo corrupto en otro sitio (no en lo que tocaste). No: tu último cambio rompió algo, revisa.
2. ¿Has reiniciado OPcache? Si solo purgaste LiteSpeed, hazlo.
3. Mira el tamaño en bytes del último inc/CSS subido vs local. Si difieren → resubir.
4. Pide al usuario el contenido de `wp-content/debug.log` (con `WP_DEBUG_LOG=true`). Sin él vamos a ciegas.

### Trampa sutil: "una categoría carga bien y otra rompe"

Cuando el síntoma es "algunas categorías cargan, otras dan error crítico" (en lugar de toda la web caída), parece que el bug es categoría-específico. **Casi nunca lo es**. Lo que ocurre:

- LiteSpeed Cache **sirve HTML cacheado sin tocar PHP** para las categorías que ya tenía guardadas. Por eso esas "cargan bien" — pero NO están ejecutando el código nuevo.
- Las categorías que LiteSpeed NO tiene cacheadas tienen que ejecutar PHP. Si hay un fatal a nivel de carga del theme (típico: un `require` apuntando a un archivo que **no se subió** al server), esas dan error crítico.

**Diagnóstico**: si añadiste recientemente un `require` de un nuevo inc, comprueba en FTP que ese archivo **existe y pesa lo correcto**. La causa #1 de este patrón es que el `require` está en `functions.php` (subido) pero el inc no se subió.

**Solución**: subir los archivos que faltan + purgar LiteSpeed Cache para que las cats cacheadas se regeneren con el código actualizado.

### Histórico

- **2026-05-05 (cat 4333)**: web caída tras subir cat 4333. Mi `functions.php` local lint clean e idéntico al de ayer (`a11fc1f..1116c92` diff vacío). Causa real: alguno de los inc files de espejos modernos se subió corrupto en alguna iteración FTP, OPcache cacheó el parse error. Solución que funcionó: requires defensivos con `file_exists` + `function_exists` guards en setup functions + resubir el inc + reiniciar OPcache. Documentado aquí para no repetir.

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
