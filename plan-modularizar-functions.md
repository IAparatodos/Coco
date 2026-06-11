# Plan de Modularización — functions.php Adrihosan

## Estado actual (el problema)

Tu `functions.php` tiene todo mezclado en un solo archivo enorme:
- Controlador maestro + controladores duplicados que nunca se limpiaron
- Funciones de contenido HTML (hero sections, FAQs, comparativas) para cada categoría
- Hooks de CSS/JS
- Setup del tema, scripts, customizer
- Todo ejecutándose en `template_redirect` con verificaciones redundantes

Resultado: archivo difícil de mantener, riesgo de CPU al 100% por hooks duplicados, y cada edición es una aventura.

---

## Estructura objetivo

```
/wp-content/themes/flavor/
├── functions.php                  ← Limpio, solo requires
├── inc/
│   ├── setup.php                  ← Config del tema (theme supports, menus, etc.)
│   ├── scripts.php                ← Enqueue de CSS/JS globales
│   ├── master-controller.php      ← EL ÚNICO controlador de categorías
│   ├── css-loader.php             ← Cargador modular de CSS por categoría
│   ├── helpers.php                ← Funciones auxiliares reutilizables
│   └── categories/
│       ├── cat-hidraulico.php     ← Contenido superior + inferior hidráulico
│       ├── cat-bano.php           ← Contenido baño
│       ├── cat-cocina.php         ← Contenido cocina
│       ├── cat-exterior.php       ← Contenido exterior
│       ├── cat-piscina.php        ← Contenido piscinas
│       ├── cat-porcelanico.php    ← Contenido porcelánico
│       ├── cat-espejos.php        ← Contenido espejos (todos los tipos)
│       ├── cat-original.php       ← Contenido hidráulico original
│       ├── cat-paredes.php        ← Contenido paredes
│       ├── cat-wood.php           ← Contenido imitación madera
│       ├── cat-metro.php          ← Contenido azulejo metro
│       ├── cat-gran-formato.php   ← Contenido gran formato
│       ├── cat-extrafino.php      ← Contenido extrafino
│       └── cat-bh-pilar.php       ← Contenido BH Pilar
```

---

## Plan de ejecución (paso a paso)

### Fase 1 — Preparar el terreno (ANTES de tocar nada)

1. **Backup completo** del functions.php actual
2. **Crear la carpeta** `inc/` y `inc/categories/` en el tema
3. **Documentar** qué IDs de categoría usa cada controlador (mapa de term_ids)

### Fase 2 — Extraer las funciones base del tema

Mover a `inc/setup.php`:
- `adrihosan_setup()`
- `adrihosan_content_width()`
- `adrihosan_widgets_init()` (si existe)

Mover a `inc/scripts.php`:
- `adrihosan_scripts()`
- Cualquier `wp_enqueue_style` o `wp_enqueue_script` global

### Fase 3 — Unificar el controlador maestro

Crear `inc/master-controller.php` con UN SOLO `add_action('template_redirect', ...)`:

```php
<?php
// inc/master-controller.php
add_action('template_redirect', 'adrihosan_master_controller', 5);

function adrihosan_master_controller() {
    if (!is_product_category()) return; // Salir inmediato si no es categoría

    $term = get_queried_object();
    if (!$term) return;
    $term_id = $term->term_id;

    // Mapa de categorías → archivos
    $category_map = [
        4564  => 'cat-hidraulico',
        2093  => 'cat-bano',
        // ... todos los IDs
    ];

    // También agrupar subcategorías
    $groups = [
        'cat-espejos' => [1234, 5678, 9012], // espejos, espejos-luz, espejos-redondo
        'cat-original' => [3456, 7890, 1111, 2222], // original, original-baño, etc.
    ];

    // Buscar en mapa directo
    if (isset($category_map[$term_id])) {
        $file = $category_map[$term_id];
    } else {
        // Buscar en grupos
        foreach ($groups as $group_file => $ids) {
            if (in_array($term_id, $ids)) {
                $file = $group_file;
                break;
            }
        }
    }

    if (!empty($file)) {
        require_once get_template_directory() . "/inc/categories/{$file}.php";
    }
}
```

**CLAVE:** Eliminar TODOS los demás `add_action('template_redirect', ...)` y `add_action('wp', ...)` que hacen lo mismo. Son estos los que causan el CPU al 100%.

### Fase 4 — Extraer contenido HTML a archivos individuales

Cada archivo `inc/categories/cat-*.php` tiene esta estructura:

```php
<?php
// inc/categories/cat-bano.php
// Contenido para categoría Baño (term_id: 2093)

// Quitar acciones por defecto de WooCommerce si es necesario
remove_all_actions('woocommerce_archive_description');

// Contenido superior (antes del loop de productos)
add_action('woocommerce_before_shop_loop', function() {
    // Todo el HTML del hero, inspiración, tips, etc.
}, 5);

// Contenido inferior (después del loop de productos)
add_action('woocommerce_after_shop_loop', function() {
    // Comparativas, FAQs, contacto, etc.
}, 15);
```

### Fase 5 — Mover el cargador CSS

Crear `inc/css-loader.php`:

```php
<?php
// inc/css-loader.php
add_action('wp_enqueue_scripts', 'adrihosan_load_category_css');

function adrihosan_load_category_css() {
    if (!is_product_category()) return;

    $term = get_queried_object();
    $css_file = "/assets/css/category-{$term->term_id}.css";
    $css_path = get_template_directory() . $css_file;

    if (file_exists($css_path)) {
        wp_enqueue_style(
            "adrihosan-cat-{$term->term_id}",
            get_template_directory_uri() . $css_file,
            [],
            filemtime($css_path)
        );
    }
}
```

### Fase 6 — El functions.php final (limpio)

```php
<?php
/**
 * Adrihosan Theme Functions
 * @version 2.0 - Modularizado
 */

if (!defined('_S_VERSION')) define('_S_VERSION', '20260214.1');

// Core del tema
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/scripts.php';
require get_template_directory() . '/inc/helpers.php';

// Cargador CSS modular por categoría
require get_template_directory() . '/inc/css-loader.php';

// Controlador maestro de categorías (EL ÚNICO)
require get_template_directory() . '/inc/master-controller.php';

// WooCommerce templates
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
```

---

## Orden de trabajo recomendado

| Paso | Qué hacer | Riesgo |
|------|-----------|--------|
| 1 | Backup + crear estructura de carpetas | Ninguno |
| 2 | Extraer setup.php y scripts.php | Bajo |
| 3 | Crear master-controller.php y ELIMINAR duplicados | **Medio-Alto** (testear bien) |
| 4 | Extraer categorías una por una a inc/categories/ | Medio |
| 5 | Mover css-loader.php | Bajo |
| 6 | Limpiar functions.php | Bajo (ya está todo movido) |
| 7 | Testear cada categoría en staging | Obligatorio |

---

## Fase 7 — Filter Everything Pro (lo que faltaba)

Hay código en el functions.php relacionado con los filtros que NO puede ir en cualquier sitio. Necesita su propio archivo:

Crear `inc/filters.php`:

```php
<?php
// inc/filters.php
// Todo lo relacionado con Filter Everything Pro

/**
 * 1. Fix de paginación + caché
 * Preserva parámetros de filtro en enlaces de paginación
 */
add_filter('paginate_links', function($link) {
    if (!is_product_category()) return $link;
    
    // Recoger parámetros GET de FE Pro
    $filter_params = [];
    foreach ($_GET as $key => $value) {
        if (strpos($key, 'filter_') === 0 || $key === 'flrt_page') {
            $filter_params[$key] = $value;
        }
    }
    
    if (!empty($filter_params)) {
        $link = add_query_arg($filter_params, $link);
    }
    
    return $link;
});

/**
 * 2. Auto-flush rewrite rules después de purgar caché
 * Esto evita tener que ir manualmente a Enlaces Permanentes
 */
add_action('litespeed_purged_all', function() {
    flush_rewrite_rules();
});

/**
 * 3. Shortcodes de filtro por categoría
 * Mapa de qué Filter Set usa cada categoría
 */
function adrihosan_get_filter_widget($term_id) {
    // Filter Set específicos por categoría
    $specific_filters = [
        4564 => 426058,  // Baldosa hidráulica → su propio Filter Set
        // Añadir aquí otras categorías con Filter Set propio
    ];
    
    // Si tiene filtro específico, usarlo. Si no, el genérico (425985)
    $widget_id = isset($specific_filters[$term_id]) 
        ? $specific_filters[$term_id] 
        : 425985;
    
    return do_shortcode('[fe_widget id="' . $widget_id . '"]');
}

/**
 * 4. Contenedor móvil del filtro
 * Genera el HTML del botón de filtro para móvil
 */
function adrihosan_filter_mobile_container($category_slug, $filter_html) {
    return '<div id="destino-filtro-adria-' . $category_slug . '" 
                 class="solo-movil-filtro" 
                 style="display:none; text-align:center; margin: 20px 0 40px 0;">
            </div>
            <div class="filter-container-master">' . $filter_html . '</div>';
}
```

Esto centraliza toda la lógica de filtros. En cada `cat-*.php` solo necesitas:

```php
// Dentro de cat-bano.php, por ejemplo:
$term = get_queried_object();
echo adrihosan_filter_mobile_container('bano', adrihosan_get_filter_widget($term->term_id));
```

### Reglas CRÍTICAS para no romper Filter Everything Pro

1. **NO cambiar prioridades de hooks.** Si `adrihosan_contenido_superior_bano` va en `woocommerce_before_main_content` con prioridad 8, en `cat-bano.php` debe ir EXACTAMENTE con prioridad 8. FE Pro tiene sus propios hooks en esas colas y el orden importa.

2. **`remove_all_actions('woocommerce_archive_description')` es peligroso.** Algunas categorías lo usan y otras usan `remove_action` selectivo. Al modularizar, NUNCA mezclar — cada cat-*.php debe usar el mismo remove que usa ahora.

3. **Los shortcodes de FE Pro** (`[fe_widget id="425985"]` y `[fe_widget id="426058"]`) deben ejecutarse dentro de un `add_action` de WooCommerce, no sueltos. Al estar dentro de `woocommerce_before_shop_loop` o `woocommerce_before_main_content`, WordPress ya tiene cargado el contexto de la query y FE Pro sabe en qué categoría está. Si los sacas de ese contexto, el widget no sabrá qué filtros mostrar.

4. **El master-controller.php debe usar `require_once` dentro del hook `template_redirect`.** Esto garantiza que cuando el archivo cat-*.php registra sus `add_action`, todavía estamos a tiempo de engancharnos al loop de WooCommerce. Si lo cargas demasiado tarde (por ejemplo en `wp_loaded`), los hooks de WooCommerce ya habrán pasado.

5. **Testear SIEMPRE:** después de mover cada categoría, comprobar:
   - ¿Aparece el widget de filtros?
   - ¿Funciona la paginación con filtro activo?
   - ¿El botón de filtro móvil se mueve correctamente?
   - ¿El AJAX recarga los productos sin perder el filtro?

### Importante sobre Filter Everything Pro y la caché

El indexador de FE Pro debe estar configurado con:
- **Indexed Filters**: TODOS activados
- **Indexing Depth**: 2 o 3 (no 1, que es el default)
- **AJAX**: activado
- En LiteSpeed Cache: excluir `admin-ajax.php` de la caché

Y en `inc/filters.php` el `flush_rewrite_rules()` automático se encarga de que no tengas que pasar por Enlaces Permanentes cada vez que borres caché.

---

### Estructura actualizada

```
/inc/
├── setup.php
├── scripts.php
├── master-controller.php
├── css-loader.php
├── filters.php              ← NUEVO: todo FE Pro aquí
├── helpers.php
└── categories/
    └── cat-*.php
```

### functions.php actualizado

```php
// Añadir después de helpers.php:
require get_template_directory() . '/inc/filters.php';
```

---

## Regla de oro post-modularización

Después de borrar caché → **ya no debería ser necesario** pasar por Enlaces permanentes si el controlador está limpio. Pero si acaso:

```php
// En inc/helpers.php — auto-flush después de purgar caché
add_action('litespeed_purged_all', function() {
    flush_rewrite_rules();
});
```

---

## Beneficios

- **Rendimiento**: Un solo `template_redirect` en lugar de 11+
- **Mantenimiento**: Editas una categoría sin tocar el resto
- **Depuración**: Si falla el baño, miras cat-bano.php y punto
- **Escalabilidad**: Nueva categoría = nuevo archivo en inc/categories/
- **Seguridad**: Menos riesgo de romper todo por un error en una línea
