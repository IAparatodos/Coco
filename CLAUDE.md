# CLAUDE.md - Proyecto Adrihosan (Coco)

## Arquitectura del Proyecto

Este es un tema hijo de WordPress/WooCommerce para la tienda **Adrihosan** (cerámica y materiales de construcción).

### Estructura de Archivos Principales

```
/Coco
├── functions.php              # Core del tema (~780 líneas): master controller + setup + requires
├── style.css                  # Estilos base del tema hijo
├── base-global.css            # Estilos globales compartidos (contacto, etc.)
├── inc/
│   ├── category-*.php         # 18 archivos de categorías modularizados (ver tabla abajo)
│   ├── cache-and-css.php      # Cache filtros, CSS loader, style fixes
│   ├── custom-header.php      # Cabecera personalizada
│   ├── template-tags.php      # Template tags
│   ├── template-functions.php # Funciones de plantilla
│   ├── customizer.php         # Personalizador
│   ├── wc-functions.php       # Funciones WooCommerce
│   ├── brands.php             # Marcas
│   ├── wc-cf.php              # Custom fields productos
│   ├── wc-cf-cat.php          # Custom fields categorías
│   ├── wc-search.php          # Búsqueda avanzada
│   ├── dw-shortcodes.php      # Shortcodes
│   ├── dw-posts.php           # Funciones posts
│   ├── dw-cf-page.php         # Custom fields páginas
│   ├── dw-cf-post.php         # Custom fields posts
│   ├── dw-cpt.php             # Custom post types (admin)
│   ├── dw-settings.php        # Ajustes (admin)
│   ├── dw-cpt-escaparate.php  # CPT Escaparate
│   └── doo-cpt-proyecto.php   # CPT Proyecto
├── assets/
│   ├── css/
│   │   ├── base-global.css    # Estilos globales
│   │   ├── mobile-fixes.css   # Fixes responsive
│   │   ├── category-{ID}.css  # CSS específico por categoría
│   │   └── ...
│   └── js/
│       └── category-common.js # JS común (FAQs, scroll, filtro móvil)
└── blocks/blocks.php          # Bloques personalizados
```

---

## Controlador Maestro (functions.php)

El `functions.php` (~780 líneas) contiene SOLO:
- Versión del tema (`_S_VERSION`)
- **Controlador Maestro CPU** (`adrihosan_master_controller_cpu_fix`) - Un único `switch` por `cat_id` que reemplaza 42+ llamadas a `is_product_category()`. Reduce CPU de 100% a 20-30%.
- Funciones `adrihosan_setup_*_cpu_fix()` para cada categoría (hooks de WooCommerce)
- Theme setup, scripts, enqueue
- `require` a archivos en `inc/`
- Utilidades: paleta de colores, write_log, countdown shortcode, rewrite rules

```php
// Patrón del Controlador Maestro (líneas 22-185)
add_action('template_redirect', 'adrihosan_master_controller_cpu_fix', 1);

function adrihosan_master_controller_cpu_fix() {
    if (!is_product_category()) return;
    $cat_id = get_queried_object_id();

    switch($cat_id) {
        case 63:   // Azulejos
        case 102:  // Espejos
        case 1789: // Azulejos Baño
        case 1790: // Azulejos Cocina
        case 2083: // Baño Imitación
        case 2160: // Azulejos Exterior
        case 2209: // Wood
        case 4213: // Espejos con Luz
        case 4806: // Paredes Decorativas
        case 4862: // Hidráulica Original
        case 4876: // Cocina Imitación
        // ... cada case llama a su setup_*_cpu_fix()
    }
}
```

**IMPORTANTE**: El controlador maestro y las funciones `setup_*_cpu_fix` DEBEN estar en `functions.php`, NO en archivos separados.

---

## Archivos de Categorías en `inc/` (Modularizados)

Cada archivo contiene: controller + `contenido_superior` + `contenido_inferior` de su categoría.

| Archivo | Cat ID | Descripción |
|---------|--------|-------------|
| `category-imitacion-hidraulico.php` | 2082 | Imitación Hidráulico |
| `category-bano-imitacion.php` | 2083 | Azulejo Hidráulico Baño |
| `category-cocina-imitacion.php` | 4876 | Azulejo Hidráulico Cocina |
| `category-espejos.php` | 102, 4213, 4247 | Espejos + Espejos con Luz + Espejos Redondos |
| `category-camerinos.php` | 2626 | Camerino Baño |
| `category-pilar-bh.php` | 4564 | Baldosa Hidráulica (Pilar) |
| `category-paredes.php` | 4806 | Paredes Decorativas |
| `category-hidraulica-original.php` | 4862 | Baldosa Hidráulica Original |
| `category-pilar-bano.php` | 4865 | Original / Baño |
| `category-pilar-cocina.php` | 4866 | Original / Cocina |
| `category-pilar-exterior.php` | 4869 | Original / Exterior |
| `category-wood.php` | 2209 | Wood + CSS fix categorías |
| `category-ceramica-porcelanico.php` | 62, 1844, 2510, 2093 | Cerámica + Porcelánico + Gran Formato + Extrafino + Metro |
| `category-azulejos.php` | 63 | Azulejos |
| `category-azulejos-bano.php` | 1789 | Azulejos Baño |
| `category-azulejos-cocina.php` | 1790 | Azulejos Cocina |
| `category-azulejos-exterior.php` | 2160 | Azulejos Exterior |
| `cache-and-css.php` | - | Cache filtros, CSS loader, style fixes, preload crítico |

---

## Cómo Añadir una Nueva Categoría

1. Crear `inc/category-{nombre}.php` con las funciones `contenido_superior` e `contenido_inferior`
2. Añadir el `case {ID}:` en el master controller dentro de `functions.php`
3. Crear la función `adrihosan_setup_{nombre}_cpu_fix()` en `functions.php`
4. Añadir el `require` en la sección de categorías de `functions.php`
5. Crear `assets/css/category-{ID}.css` con los estilos

---

## Convenciones de Código

### Funciones PHP

1. **Setup function** (en functions.php):
   ```php
   function adrihosan_setup_{categoria}_cpu_fix() {
       add_filter('woocommerce_show_page_title', '__return_false');
       remove_all_actions('woocommerce_archive_description');
       remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
       add_action('woocommerce_before_shop_loop', 'adrihosan_{categoria}_contenido_superior', 5);
       add_action('woocommerce_after_shop_loop', 'adrihosan_{categoria}_contenido_inferior', 99);
   }
   ```

2. **Content functions** (en inc/category-{nombre}.php):
   - `adrihosan_{categoria}_contenido_superior()` - Contenido antes de productos
   - `adrihosan_{categoria}_contenido_inferior()` - Contenido después (FAQs, contacto)

### Patrón de Contenido por Categoría

- **contenido_superior**: Hero section + value props + inspiración + filtros + título catálogo
- **contenido_inferior**: Guía SEO + descripción dinámica + FAQs + bloque contacto Ricardo

### Clases CSS Estándar

#### Hero Section
```css
.hero-section-container
.hero-content / .hero-content h1 / .hero-content p
.hero-buttons / .hero-btn.primary / .hero-btn.secondary
```

#### Cards/Grid de Inspiración
```css
.ap-inspiration-section / .ap-inspiration-wrapper
.ap-inspiration-grid / .ap-inspiration-card / .ap-card-content
```

#### FAQs
```css
.faq-section-common / .faq-wrapper-common / .faq-items-wrapper
.faq-item-common / .faq-question-common / .faq-answer-common
```

#### Contacto (usa base-global.css)
```css
.contact-help-common / .contact-help-wrapper
.contact-intro / .contact-options-grid-common / .contact-option-common
```

### Selectores CSS por Categoría

Siempre usar el selector de categoría para evitar conflictos:
```css
.tax-product_cat.term-{ID} .clase { ... }
```

### Full Width Blocks
```css
.adrihosan-full-width-block {
    width: 100vw !important;
    left: 50% !important;
    right: 50% !important;
    margin-left: -50vw !important;
    margin-right: -50vw !important;
}
```

### Responsive Breakpoints
```css
@media (max-width: 768px) { ... }   /* Móvil */
@media (max-width: 1024px) and (min-width: 769px) { ... }  /* Tablet */
```

### Entidades HTML
Usar entidades HTML (`&aacute;`, `&eacute;`, etc.) en PHP para evitar problemas de encoding.

---

## Decisiones Técnicas

### 1. CSS Inline vs Archivos Externos
- **Decisión**: CSS se carga dinámicamente desde `assets/css/category-{ID}.css` via `cache-and-css.php`
- **Razón**: Mejor rendimiento, carga solo lo necesario

### 2. Controlador Maestro Centralizado
- **Decisión**: Un solo punto de entrada que decide qué cargar
- **Razón**: Evita múltiples hooks compitiendo, mejor control de CPU

### 3. Estilos de Contacto en base-global.css
- **Decisión**: NO duplicar estilos de contacto en cada category-{ID}.css
- **Razón**: Consistencia visual, mantenimiento más fácil

### 4. Filter Everything Pro Widget
- **Shortcode principal**: `[fe_widget id="425985"]` (categorías generales)
- **Shortcode baldosa hidráulica**: `[fe_widget id="426058"]`

#### Configuración del Filtro Móvil (IMPORTANTE)
El widget debe estar configurado con **"The same as on a desktop"** en Mobile view.
**NO usar** "Appear as a Pop-up" ni "Collapsed and expanded" - rompe el JS personalizado.

---

## Sistema de Filtro Móvil

### Arquitectura
3 componentes:

1. **HTML (inc/category-*.php)**: Contenedor destino + widget
   ```php
   <div id="destino-filtro-adria-{categoria}" class="solo-movil-filtro" style="display:none;"></div>
   <div class="filter-container-master"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>
   ```

2. **JavaScript (category-common.js)**: `moverBotonFiltroMovil()` mueve `.wpc-filters-open-button-container` al contenedor `.solo-movil-filtro` en pantallas ≤991px

3. **CSS (category-{ID}.css)**: Estilos específicos por categoría para mostrar el botón en móvil

### Categorías con Filtro Móvil Configurado
| ID | Categoría | Contenedor destino |
|----|-----------|-------------------|
| 63 | Azulejos | destino-filtro-adria-azulejos |
| 64 | Pavimentos | destino-filtro-adria-pavimentos |
| 66 | Piscinas | destino-filtro-adria-piscinas |
| 1789 | Azulejos Baño | destino-filtro-adria-bano |
| 1790 | Azulejos Cocina | destino-filtro-adria-cocina |
| 2160 | Azulejos Exterior | destino-filtro-adria-exterior |
| 4862 | Hidráulica Original | destino-filtro-adria-hidraulica |
| 4865 | Baño Original | destino-filtro-adria-bano |
| 4866 | Cocina Original | destino-filtro-adria-cocina |
| 4869 | Exterior Original | destino-filtro-adria-exterior |
| 2082 | Imitación principal | destino-filtro-adria-imitacion |
| 2083 | Baño Imitación | destino-filtro-adria-bano-imitacion |
| 4876 | Cocina Imitación | destino-filtro-adria-cocina-imitacion |

---

## Problemas Conocidos y Soluciones

### WPC Product Filters - Botón no visible en móvil
**Causa**: Configuración del plugin en modo "Appear as a Pop-up".
**Solución**: Cambiar a **"The same as on a desktop"**.

### Filtro móvil sin estilos CSS
**Causa**: `mobile-fixes.css` oculta globalmente `.wpc-filters-open-button-container`.
**Solución**: Añadir estilos específicos en el CSS de cada categoría para mostrarlo.

---

## Categorías con CSS Propio

| ID | Nombre | Archivo CSS |
|----|--------|-------------|
| 62 | Cerámica | category-62.css |
| 64 | Pavimentos y Suelos | category-64.css |
| 66 | Piscinas | category-66.css |
| 2410 | Porcelánico | category-2410.css |

---

## Proyecto Consolidación de Categorías

### Situación actual
- **1.496 categorías** en WooCommerce (muchas duplicadas, huérfanas o con <10 productos)
- **Objetivo**: Reducir a 30-50 categorías estratégicas

### Categorías objetivo

1. **Baldosa Hidráulica** (baldosa-hidraulica): Original (4862), Imitación (2082). Subcats: Baño, Cocina, Exterior.
2. **Cerámica, Azulejos y Suelos** (ceramica/62): Pavimentos, Porcelánicos, Revestimientos, Piscinas.
3. **El Mundo del Baño**: Muebles por medida (50-160cm), Espejos (LED, Camerinos), Sanitarios.
4. **Cocina y Fregaderos**: Fregaderos, Muebles de cocina por módulos.
5. **Grifería y Accesorios**: Baño, Cocina, Ducha, Empotrada.
6. **Otros**: Radiadores, Suelo de barro, Tratamiento de agua, Ofertas.

### Próximos pasos
1. [ ] Exportar las 1.496 categorías
2. [ ] Clasificar: mantener / fusionar / eliminar
3. [ ] Definir árbol jerárquico final
4. [ ] Plan de redirecciones 301
5. [ ] Implementar GEO (Generative Engine Optimization)

---

## Notas para Futuras Sesiones

1. **Al crear nueva categoría**: Ver sección "Cómo Añadir una Nueva Categoría"
2. **Al modificar estilos**: Usar selector `.tax-product_cat.term-{ID}`, NO tocar base-global.css para contacto
3. **Archivos a subir al servidor**: `functions.php` + `inc/category-*.php` afectados + CSS si se modifica
4. **El servidor usa LiteSpeed** - limpiar caché después de subir cambios
5. **IMPORTANTE**: El `functions.php` del servidor puede tener cambios no en GitHub. SIEMPRE comparar antes de modificar.

---

## Changelog

### 2026-02-10
- **REESTRUCTURACIÓN MODULAR**: `functions.php` pasa de 4.463 a ~780 líneas
  - 18 archivos de categorías extraídos a `inc/category-*.php`
  - Cache y CSS extraídos a `inc/cache-and-css.php`
  - Añadida categoría 63 (Azulejos) que estaba solo en servidor
  - Rama: `claude/split-web-functions-LlaPY`

### 2026-02-03
- **Filtro móvil**: Implementación completa del sistema de filtro móvil
- **Categorías 4862, 2083, 4876**: Añadidos estilos CSS filtro móvil
- **Filter Everything Pro**: Documentada configuración correcta (modo desktop)

### 2026-01-30
- **Categoría 62 (Cerámica)**: Reescritura completa al nuevo wireframe
- **Categoría 64 (Pavimentos)**: Creada nueva categoría completa
- **Categoría 2410 (Porcelánico)**: Actualizado al nuevo patrón
- **Categoría 66 (Piscinas)**: Creado archivo CSS
