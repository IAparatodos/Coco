# CLAUDE.md - Reglas del proyecto Adrihosan

## Arquitectura del Controlador Maestro

El archivo `adrihosan/functions.php` contiene un controlador maestro (`adrihosan_master_controller_cpu_fix`) que usa un `switch($cat_id)` para ejecutar funciones de setup específicas por categoría.

### Regla crítica: NO ocultar bloques WooCommerce de forma global

**NUNCA** añadir `add_action('wp_head', ...)` ni CSS que oculte elementos estándar de WooCommerce (`.woocommerce-products-header`, `.term-description`, `.wd-shop-tools`, `.product-categories`, `.woocommerce-breadcrumb`, etc.) **fuera** del `switch` o de las funciones `setup_*_cpu_fix()`.

Estos elementos solo deben ocultarse **dentro de cada función `setup_*_cpu_fix()`** específica de categoría, ya que las categorías sin landing personalizada necesitan los bloques estándar de WooCommerce.

**Correcto:**
```php
function adrihosan_setup_ejemplo_cpu_fix() {
    // ... hooks específicos de esta categoría ...
    add_action('wp_head', function() {
        echo '<style>.wd-shop-tools, .advanced-filter { display: none !important; }</style>';
    });
}
```

**INCORRECTO (provoca bug en todas las categorías):**
```php
// DENTRO del if is_product_category() pero FUERA del switch
add_action('wp_head', 'adrihosan_ocultar_filtros_legacy', 5);
```

### Sistema de CSS por categoría

Los archivos CSS se cargan automáticamente por convención desde `inc/cache-and-css.php`:
- Ruta: `assets/css/category-{ID}.css`
- Se cargan vía `adrihosan_cargar_css_categoria()` usando `get_queried_object_id()`
- También carga CSS de categorías padre si existen

### Archivos de contenido por categoría

Cada categoría tiene su archivo PHP en `inc/category-{nombre}.php` con:
- `contenido_superior` - Contenido antes del loop de productos
- `contenido_inferior` - Contenido después del loop de productos
