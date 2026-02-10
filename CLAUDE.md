# Adrihosan - WordPress Theme

## Estructura del Proyecto

Tema WordPress para adrihosan.com (tienda de azulejos y materiales de construccion con WooCommerce).

### Arquitectura de `functions.php` (Modularizado)

El archivo `functions.php` (~780 lineas) contiene SOLO:
- Version del tema (`_S_VERSION`)
- **Controlador Maestro CPU** (`adrihosan_master_controller_cpu_fix`) - Un unico `switch` por `cat_id` que reemplaza 42+ llamadas a `is_product_category()`. Reduce CPU de 100% a 20-30%.
- Funciones `adrihosan_setup_*_cpu_fix()` para cada categoria (hooks de WooCommerce)
- Theme setup, scripts, enqueue
- Requires a archivos en `inc/`
- Utilidades: paleta de colores, write_log, countdown shortcode, rewrite rules

### Archivos de Categorias en `inc/`

Cada archivo contiene: controller + `contenido_superior` + `contenido_inferior` de su categoria.

| Archivo | Cat ID | Descripcion |
|---------|--------|-------------|
| `category-imitacion-hidraulico.php` | 2082 | Imitacion Hidraulico |
| `category-bano-imitacion.php` | 2083 | Azulejo Hidraulico Bano |
| `category-cocina-imitacion.php` | 4876 | Azulejo Hidraulico Cocina |
| `category-espejos.php` | 102, 4213, 4247 | Espejos + Espejos con Luz + Espejos Redondos |
| `category-camerinos.php` | 2626 | Camerino Bano |
| `category-pilar-bh.php` | 4564 | Baldosa Hidraulica (Pilar) |
| `category-paredes.php` | 4806 | Paredes Decorativas |
| `category-hidraulica-original.php` | 4862 | Baldosa Hidraulica Original |
| `category-pilar-bano.php` | 4865 | Original / Bano |
| `category-pilar-cocina.php` | 4866 | Original / Cocina |
| `category-pilar-exterior.php` | 4869 | Original / Exterior |
| `category-wood.php` | 2209 | Wood + CSS fix categorias |
| `category-ceramica-porcelanico.php` | 62, 1844, 2510, 2093 | Ceramica + Porcelanico + Gran Formato + Extrafino + Metro |
| `category-azulejos.php` | 63 | Azulejos |
| `category-azulejos-bano.php` | 1789 | Azulejos Bano |
| `category-azulejos-cocina.php` | 1790 | Azulejos Cocina |
| `category-azulejos-exterior.php` | 2160 | Azulejos Exterior |
| `cache-and-css.php` | - | Cache filtros, CSS loader, style fixes, preload critico |

### Otros archivos en `inc/` (pre-existentes)

Estos archivos ya existian antes de la modularizacion:
- `custom-header.php` - Cabecera personalizada
- `template-tags.php` - Template tags
- `template-functions.php` - Funciones de plantilla
- `customizer.php` - Personalizador
- `jetpack.php` - Compatibilidad Jetpack
- `woocommerce.php` - Compatibilidad WooCommerce
- `dw-cpt.php` - Custom post types (admin)
- `dw-settings.php` - Ajustes (admin)
- `dw-cf-page.php` - Custom fields paginas
- `dw-shortcodes.php` - Shortcodes
- `dw-posts.php` - Funciones posts
- `wc-functions.php` - Funciones WooCommerce
- `brands.php` - Marcas
- `wc-cf.php` - Custom fields productos
- `wc-cf-cat.php` - Custom fields categorias
- `wc-search.php` - Busqueda avanzada
- `dw-cf-post.php` - Custom fields posts
- `dw-cpt-escaparate.php` - CPT Escaparate
- `doo-cpt-proyecto.php` - CPT Proyecto

## Como Anadir una Nueva Categoria

1. Crear `inc/category-{nombre}.php` con las funciones `contenido_superior` e `contenido_inferior`
2. Anadir el `case {ID}:` en el master controller dentro de `functions.php`
3. Crear la funcion `adrihosan_setup_{nombre}_cpu_fix()` en `functions.php`
4. Anadir el `require` en la seccion de categorias de `functions.php`

## Patron de Contenido por Categoria

Cada categoria sigue este patron:
- **contenido_superior**: Hero section + value props + inspiracion + filtros + titulo catalogo
- **contenido_inferior**: Guia SEO + descripcion dinamica + FAQs + bloque contacto Ricardo

## Notas Importantes

- El controlador maestro esta en `functions.php` lineas 22-185. NO mover a otro archivo.
- Las funciones de setup (`adrihosan_setup_*_cpu_fix`) DEBEN estar en `functions.php` porque se llaman desde el master controller.
- Los archivos de categoria pueden tener sus propios `add_action('template_redirect'/'wp')` para controllers adicionales (ej: ceramica, porcelanico, etc.).
- CSS de categorias se carga dinamicamente desde `assets/css/category-{ID}.css` via `cache-and-css.php`.
- JS comun de categorias: `assets/js/category-common.js` (FAQs, scroll).
- El servidor usa LiteSpeed - limpiar cache despues de subir cambios.
