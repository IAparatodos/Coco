# CLAUDE.md - Proyecto Adrihosan (Coco)

## REGLA PRINCIPAL

**Cada vez que modifique un archivo, DEBO indicarle a Ricardo exactamente qu&eacute; archivo(s) he cambiado y qu&eacute; l&iacute;neas se han modificado.** Esto es OBLIGATORIO en cada respuesta donde se haga un cambio.

---

## Arquitectura del Proyecto

Este es un tema hijo de WordPress/WooCommerce para la tienda **Adrihosan** (cerámica y materiales de construcción).

### Estructura de Archivos Principales

```
/Coco
├── functions.php              # Core del tema (~970 líneas): master controller + 26 setups + requires
├── base-global.css            # Estilos globales compartidos (contacto, etc.)
├── inc/
│   ├── category-*.php         # 20 archivos de categorías modularizados (ver tabla abajo)
│   ├── cache-and-css.php      # Cache filtros, CSS loader
│   ├── custom-header.php      # Cabecera personalizada
│   ├── template-tags.php      # Template tags
│   ├── template-functions.php # Funciones de plantilla
│   ├── customizer.php         # Personalizador
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

El `functions.php` (~970 líneas) contiene:
- Versión del tema (`_S_VERSION`)
- **Controlador Maestro CPU** (`adrihosan_master_controller_cpu_fix`) - Un único `switch` por `cat_id` con **29 cases**. Reduce CPU de 100% a ~20%.
- **29 funciones `adrihosan_setup_*_cpu_fix()`** para cada categoría (hooks de WooCommerce)
- Theme setup, scripts, enqueue
- **Cache de `doo_menu_cats()`** con transient (1 hora) - evita query pesada en cada página
- `require` a 20 archivos de categorías en `inc/`
- Utilidades: paleta de colores, write_log, countdown shortcode, rewrite rules

### Switch completo del Master Controller

```php
add_action('template_redirect', 'adrihosan_master_controller_cpu_fix', 1);

function adrihosan_master_controller_cpu_fix() {
    if (!is_product_category()) return;
    $cat_id = get_queried_object_id();

    switch($cat_id) {
        // --- Cerámica y derivados ---
        case 62:   // Cerámica (pilar)           → adrihosan_setup_ceramica_cpu_fix()
        case 2410: // Porcelánico                 → adrihosan_setup_porcelanico_cpu_fix()
        case 1844: // Gran Formato                → adrihosan_setup_gran_formato_cpu_fix()
        case 2510: // Extrafino                   → adrihosan_setup_extrafino_cpu_fix()
        case 2093: // Metro                       → adrihosan_setup_metro_cpu_fix()
        case 2245: // Porcelánico Imita. Mármol   → adrihosan_setup_porcelanico_marmol_cpu_fix()

        // --- Azulejos ---
        case 63:   // Azulejos (pilar)            → adrihosan_setup_azulejos_cpu_fix()
        case 1789: // Azulejos Baño               → adrihosan_setup_azulejos_bano_cpu_fix()
        case 1790: // Azulejos Cocina             → adrihosan_setup_azulejos_cocina_cpu_fix()
        case 2160: // Azulejos Exterior           → adrihosan_setup_azulejos_exterior_cpu_fix()

        // --- Pavimentos y Piscinas ---
        case 64:   // Pavimentos y Suelos         → adrihosan_setup_pavimentos_cpu_fix()
        case 66:   // Piscinas                    → adrihosan_setup_piscinas_cpu_fix()

        // --- Baldosa Hidráulica Original ---
        case 4564: // Baldosa Hidráulica (pilar)  → adrihosan_setup_pilar_bh_cpu_fix()
        case 4862: // Hidráulica Original         → adrihosan_setup_hidraulica_original_cpu_fix()
        case 4865: // Original / Baño             → adrihosan_setup_pilar_bano_cpu_fix()
        case 4866: // Original / Cocina           → adrihosan_setup_pilar_cocina_cpu_fix()
        case 4869: // Original / Exterior         → adrihosan_setup_pilar_exterior_cpu_fix()

        // --- Baldosa Hidráulica Imitación ---
        case 2082: // Imitación Hidráulico        → adrihosan_setup_imitacion_hidraulico_cpu_fix()
        case 2083: // Baño Imitación              → adrihosan_setup_bano_imitacion_cpu_fix()
        case 4876: // Cocina Imitación            → adrihosan_setup_cocina_imitacion_cpu_fix()

        // --- Baño: Espejos y Camerinos ---
        case 102:  // Espejos (pilar)             → adrihosan_setup_espejos_cpu_fix()
        case 4213: // Espejos con Luz             → adrihosan_setup_espejos_luz_cpu_fix()
        case 4247: // Espejos Redondos            → adrihosan_setup_espejos_redondo_cpu_fix()
        case 2626: // Camerino Baño               → adrihosan_setup_camerinos_cpu_fix()

        // --- Otros ---
        case 2209: // Wood                        → adrihosan_setup_wood_cpu_fix()
        case 4806: // Paredes Decorativas         → adrihosan_setup_paredes_cpu_fix()
        case 2377: // Azulejos Hexagonales Suelo  → adrihosan_setup_hexagonal_cpu_fix()
        case 4973: // Azulejos Imitación Cemento  → adrihosan_setup_imitacion_cemento_cpu_fix()
        case 2516: // Zellige                     → adrihosan_setup_zellige_cpu_fix()
    }
}
```

**REGLA CRÍTICA**: El controlador maestro y las funciones `setup_*_cpu_fix` DEBEN estar en `functions.php`, NUNCA en archivos `inc/`. Los archivos `inc/category-*.php` NUNCA deben tener `add_action` a nivel de archivo (solo dentro de funciones).

---

## Archivos de Categorías en `inc/` (20 archivos)

Cada archivo contiene SOLO las funciones `contenido_superior` + `contenido_inferior`. El controller/setup está en `functions.php`.

| Archivo | Cat ID | Descripción | Filtro Widget |
|---------|--------|-------------|---------------|
| `category-ceramica-porcelanico.php` | 62, 2410, 1844, 2510, 2093 | Cerámica + Porcelánico + Gran Formato + Extrafino + Metro | 425985 |
| `category-azulejos.php` | 63 | Azulejos | 425985 |
| `category-azulejos-bano.php` | 1789 | Azulejos Baño | 425985 |
| `category-azulejos-cocina.php` | 1790 | Azulejos Cocina | 425985 |
| `category-azulejos-exterior.php` | 2160 | Azulejos Exterior | 425985 |
| `category-pavimentos.php` | 64 | Pavimentos y Suelos | **426267** |
| `category-piscinas.php` | 66 | Piscinas | 425985 |
| `category-porcelanico-marmol.php` | 2245 | Porcelánico Imitación Mármol | 425985 |
| `category-pilar-bh.php` | 4564 | Baldosa Hidráulica (Pilar) | sin filtro |
| `category-hidraulica-original.php` | 4862 | Baldosa Hidráulica Original | **426058** |
| `category-pilar-bano.php` | 4865 | Original / Baño | **426058** |
| `category-pilar-cocina.php` | 4866 | Original / Cocina | **426058** |
| `category-pilar-exterior.php` | 4869 | Original / Exterior | **426058** |
| `category-imitacion-hidraulico.php` | 2082 | Imitación Hidráulico | 425985 |
| `category-bano-imitacion.php` | 2083 | Azulejo Hidráulico Baño | 425985 |
| `category-cocina-imitacion.php` | 4876 | Azulejo Hidráulico Cocina | 425985 |
| `category-espejos.php` | 102, 4213, 4247 | Espejos + Espejos con Luz + Espejos Redondos | sin filtro |
| `category-camerinos.php` | 2626 | Camerino Baño | sin filtro |
| `category-wood.php` | 2209 | Wood | sin filtro |
| `category-paredes.php` | 4806 | Paredes Decorativas | 425985 |
| `category-hexagonal.php` | 2377 | Azulejos Hexagonales Suelo | 425985 |
| `category-imitacion-cemento.php` | 4973 | Azulejos Imitación Cemento | 425985 |
| `category-zellige.php` | 2516 | Zellige | **426510** |

---

## Filter Everything Pro - Widget IDs

| Widget ID | Nombre | Categorías que lo usan |
|-----------|--------|------------------------|
| **425985** | Azulejos / Cerámica (general) | 62, 63, 66, 1789, 1790, 2082, 2083, 2093, 2160, 2245, 2410, 1844, 2510, 4806, 4876, 4973 |
| **426058** | Baldosa Hidráulica | 4862, 4865, 4866, 4869 |
| **426267** | Pavimentos / Suelos | 64 |
| **426510** | Zellige | 2516 |

### Configuración del Filtro Móvil (IMPORTANTE)
El widget debe estar configurado con **"The same as on a desktop"** en Mobile view.
**NO usar** "Appear as a Pop-up" ni "Collapsed and expanded" - rompe el JS personalizado.

---

## Cómo Añadir una Nueva Categoría

1. Crear `inc/category-{nombre}.php` con las funciones `contenido_superior` e `contenido_inferior`
   - **NO poner `add_action` a nivel de archivo** - solo definir funciones
2. Añadir el `case {ID}:` en el master controller switch dentro de `functions.php`
3. Crear la función `adrihosan_setup_{nombre}_cpu_fix()` en `functions.php` (antes de `// FIN CONTROLADOR MAESTRO`)
4. Añadir el `require` en la sección de categorías de `functions.php`
5. Crear `assets/css/category-{ID}.css` con los estilos (se carga automáticamente via `cache-and-css.php`)

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

### Patr&oacute;n Hero para Categor&iacute;as (Woodmart) - REGLA OBLIGATORIA

Toda categor&iacute;a nueva DEBE seguir estas reglas para que el hero funcione correctamente:

#### 1. Ocultar `.woocommerce-products-header` (el padre)
Woodmart genera un `<header class="woocommerce-products-header">` que envuelve la descripci&oacute;n de categor&iacute;a. Este elemento tiene un `margin-bottom: 63px` por defecto. Si solo ocultas los hijos (`.term-description`, etc.), **el padre sigue ocupando espacio**, generando una franja visible entre el hero y la siguiente secci&oacute;n donde se ve la imagen de fondo sin el overlay/velo.

```css
/* CORRECTO - Ocultar el padre completo + banner "doo" plugin */
.tax-product_cat.term-XXXX .woocommerce-products-header,
.tax-product_cat.term-XXXX .wd-shop-tools,
.tax-product_cat.term-XXXX .advanced-filter,
.tax-product_cat.term-XXXX .filter-wrapper,
.tax-product_cat.term-XXXX .woocommerce-products-header__description,
.tax-product_cat.term-XXXX .term-description,
.tax-product_cat.term-XXXX .woodmart-category-desc,
.tax-product_cat.term-XXXX .wd-active-filters,
.tax-product_cat.term-XXXX .doo-category-banner {
    display: none !important;
}

/* INCORRECTO - Falta el padre y el doo-banner, el margin de 63px sigue visible */
.tax-product_cat.term-XXXX .woocommerce-products-header__description,
.tax-product_cat.term-XXXX .term-description {
    display: none !important;
}
```

#### 2. Breakout del hero (salir del contenedor del tema)
El hero debe romper el contenedor de Woodmart para ocupar el 100% del viewport:
```css
.tax-product_cat.term-XXXX .hero-section-container {
    position: relative;
    width: 100vw !important;
    left: 50% !important;
    right: 50% !important;
    margin-left: -50vw !important;
    margin-right: -50vw !important;
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px 20px;
    box-sizing: border-box;
    background-size: cover;
    background-position: center center;
    color: #ffffff;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}
```

#### 3. Overlay / velo oscuro
```css
.tax-product_cat.term-XXXX .hero-section-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(16, 46, 53, 0.6);
    z-index: 1;
}
```

#### 4. Botones clicables sobre el overlay
Los botones necesitan `z-index: 100` y `pointer-events: auto` para quedar por encima del `::after`:
```css
.tax-product_cat.term-XXXX .hero-buttons {
    position: relative;
    z-index: 100;
}

.tax-product_cat.term-XXXX .hero-btn {
    position: relative;
    z-index: 100;
    pointer-events: auto;
}
```

#### Checklist para cada categor&iacute;a nueva
- [ ] `.woocommerce-products-header` est&aacute; en la lista de `display: none`
- [ ] `.doo-category-banner` est&aacute; en la lista de `display: none` (plugin "doo" muestra subcategor&iacute;as como banner)
- [ ] Hero usa breakout: `width: 100vw; left: 50%; margin-left: -50vw`
- [ ] Overlay usa `width: 100%; height: 100%`
- [ ] Botones tienen `z-index: 100` y `pointer-events: auto`
- [ ] Archivo de referencia funcional: `category-66.css` (Piscinas)

#### Errores comunes a evitar
| Error | Consecuencia |
|-------|-------------|
| No ocultar `.woocommerce-products-header` | Franja de 63px sin velo debajo del hero |
| No ocultar `.doo-category-banner` | Subcategor&iacute;a del plugin "doo" visible encima del hero |
| Usar `margin: calc(-50vw + 50%)` en vez del patr&oacute;n `left: 50%` | No funciona en Woodmart |
| No poner `z-index: 100` en botones | Botones no clicables (quedan bajo el overlay) |
| Usar `background-position: center` (un solo valor) | Usar siempre `center center` (dos valores expl&iacute;citos) |

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
- **NUNCA** poner `add_action('template_redirect')`, `add_action('wp')` ni `add_action('woocommerce_before_main_content')` a nivel de archivo en `inc/category-*.php`

### 3. Estilos de Contacto en base-global.css
- **Decisión**: NO duplicar estilos de contacto en cada category-{ID}.css
- **Razón**: Consistencia visual, mantenimiento más fácil

### 4. Cache de doo_menu_cats()
- **Decisión**: Cachear con transient (1 hora) en `dw_scripts()`
- **Razón**: `doo_menu_cats()` (tema padre) consulta las 1.496 categorías. Sin cache = query pesada en CADA página
- **Invalidación**: Automática al crear/editar/eliminar categorías (`created_product_cat`, `edited_product_cat`, `delete_product_cat`)

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

### Subcategorías visibles encima del hero (plugin "doo")
**Causa**: El plugin "doo" (tema padre) renderiza subcategorías con `<div class="doo-category-banner">`, un sistema independiente de WooCommerce/Woodmart. Los hooks `woocommerce_product_subcategories` y `wc_get_loop_display_mode` NO lo afectan.
**Solución**: Añadir `.doo-category-banner` al CSS inline de `wp_head` y al `category-{ID}.css` con `display: none !important`.

### Servidor con CPU alta / caído
**Causa**: Hooks (`add_action`) registrados a nivel de archivo en `inc/category-*.php` que ejecutan `is_product_category()` en CADA página.
**Solución**: TODOS los hooks deben ir en el master controller (functions.php). Los archivos `inc/` solo contienen funciones de contenido.

---

## Optimizaciones de Rendimiento Aplicadas

1. **Master Controller**: 1 solo `is_product_category()` + 1 `get_queried_object_id()` por página. Sin el master controller eran 42+ queries por página.
2. **Cache doo_menu_cats()**: Transient de 1 hora. Evita consultar 1.496 categorías en cada página.
3. **Cache filtros widget**: `adrihosan_cache_filter_widget()` en `cache-and-css.php` cachea el output de `[fe_widget]` con transients de 1 hora.
4. **CSS condicional**: `cache-and-css.php` solo carga `category-{ID}.css` en la categoría correspondiente.
5. **Sin hooks globales en inc/**: Ningún archivo `inc/category-*.php` registra hooks a nivel de archivo.

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
3. **Archivos a subir al servidor**: `functions-server.php` (como `functions.php`) + `inc/category-*.php` afectados + CSS si se modifica
4. **El servidor usa LiteSpeed** - limpiar caché después de subir cambios
5. **IMPORTANTE**: El `functions.php` del servidor puede tener cambios no en GitHub. SIEMPRE comparar antes de modificar.
6. **NUNCA** poner `add_action` a nivel de archivo en `inc/category-*.php` - causa CPU al 100%
7. **Archivos basura en raíz del repo**: `functions (6).php`, `category-ceramica-porcelanico.php`, `functions-css-loader.php`, CSS/JS sueltos. No afectan al tema pero deberían limpiarse.
8. **PENDIENTE - Migrar Espejos a inc/**: Las funciones de contenido de Espejos (cats 102, 4213, 4247) siguen en `functions-server.php` porque `inc/category-espejos.php` está vacío. Cuando se trabaje en Espejos, migrar las 6 funciones (`adrihosan_contenido_superior/inferior_espejos`, `_espejos_luz`, `_espejos_redondo`) al archivo `inc/category-espejos.php` y eliminarlas de `functions-server.php`.

---

## ERRORES COMETIDOS - NO REPETIR

### 1. SIEMPRE editar `functions-server.php`, NO `functions.php`
- **Error**: Se editó `functions.php` en vez de `functions-server.php`. El servidor usa `functions-server.php` (se sube como `functions.php`).
- **Regla**: `functions-server.php` es el archivo de producción. `functions.php` es una versión de referencia/local. **Cualquier cambio de setup, hooks o controlador maestro SIEMPRE va en `functions-server.php`.**
- **Al dar instrucciones de subida**: Decir `functions-server.php` → subir como `functions.php`.

### 2. Ocultar filtros antiguos Y `.woocommerce-products-header` en TODA nueva categoría
- **Error**: Se creó la categoría Wood (2209) sin CSS inline para ocultar filtros legacy del tema Woodmart. Además, no se ocultaba `.woocommerce-products-header` (el padre), lo que dejaba un `margin-bottom: 63px` visible como franja sin velo bajo el hero.
- **Regla**: TODA función `adrihosan_setup_{cat}_cpu_fix()` DEBE incluir:
  ```php
  add_action('wp_head', function() {
      echo '<style>.woocommerce-products-header, .wd-shop-tools, .advanced-filter, .filter-wrapper, .ai-filters-section, .bho-filters-section, .bho-hub-section, .woocommerce-products-header__description, .term-description, .woodmart-category-desc, .wd-active-filters, .doo-category-banner { display: none !important; }</style>';
  });
  ```
- **Además**: Añadir las mismas reglas en el `category-{ID}.css` como respaldo (por si LiteSpeed cachea sin el inline).
- **Ver también**: Sección "Patrón Hero para Categorías (Woodmart)" en Convenciones de Código.

### 3. Scroll post-filtro: usar `category-common.js` genérico
- **Error**: La categoría Wood no tenía JS para scroll al catálogo después de filtrar. El usuario filtraba y se quedaba en la cabecera.
- **Regla**: El `assets/js/category-common.js` maneja scroll genérico buscando `.product-loop-header`. TODA categoría nueva DEBE tener un `<div class="product-loop-header">` antes del loop de productos para que el scroll funcione.
- **NO crear JS individuales por categoría** - el `category-common.js` cubre FAQs, filtro móvil y scroll para todas.

### 4. Estructura de archivos en el repo vs servidor
- **Error**: Se asumió que `assets/` existía en el repo. Los CSS estaban en la raíz, no en `assets/css/`.
- **Regla**: En el repo los archivos pueden estar en la raíz (`category-2209.css`). En el servidor van en `assets/css/category-2209.css` y `assets/js/category-common.js`.
- **El `functions-server.php`** busca CSS primero en `assets/css/`, luego en la raíz del tema (fallback).

### 5. Plugin "doo" renderiza subcategorías con `.doo-category-banner` (NO es WooCommerce/Woodmart)
- **Error**: En Zellige (2516) la subcategoría seguía visible encima del hero a pesar de ocultar todos los selectores de WooCommerce (`.wd-subcategories`, `.wd-cats`, `li.product-category`, etc.) y Woodmart. Se intentaron filtros PHP (`woocommerce_product_subcategories`, `wc_get_loop_display_mode`), `remove_action` y múltiples selectores CSS sin éxito.
- **Causa real**: El plugin "doo" (tema padre/starter) genera un `<div class="doo-category-banner">` con su propia cuadrícula (`.doo-category-grid`, `.doo-category-item`) para mostrar subcategorías como tarjetas visuales. Este sistema es **completamente independiente** de WooCommerce y Woodmart.
- **HTML real**:
  ```html
  <div class="doo-category-banner" data-offset="12" data-parent="2516" data-total="1">
    <div class="doo-category-grid">
      <div class="doo-category-item">
        <a href="..."><picture>...</picture><div>Azulejo efecto zellige</div></a>
      </div>
    </div>
  </div>
  ```
- **Regla**: SIEMPRE incluir `.doo-category-banner` en el CSS inline de `wp_head` y en el `category-{ID}.css`. Los filtros PHP de WooCommerce (`woocommerce_product_subcategories`, `wc_get_loop_display_mode`) NO afectan a este plugin.
- **Lección**: Cuando un elemento no responde a hooks/filtros de WooCommerce, pedir al usuario el HTML real del inspector del navegador (DevTools) para identificar las clases correctas.

---

## Changelog

### 2026-02-26
- **NUEVA Categoría 2516 (Zellige)**:
  - `inc/category-zellige.php`: contenido superior (hero, trust bar, distribuidor stock/personalizado, aviso logístico, filtros) + inferior (descripción dinámica, SEO imperfección perfecta, colores, formatos especiales, FAQs, contacto)
  - Case en master controller + setup con filtros legacy ocultos + `.doo-category-banner`
  - `category-2516.css` con estilos completos (hero, trust bar, distributor cards, logistics, SEO, trends, responsive)
  - Widget filtro: 426510 (Zellige)
  - **Total: 29 categorías** gestionadas por el master controller
- **DESCUBRIMIENTO CRÍTICO - Plugin "doo" subcategorías**:
  - Las subcategorías NO las renderiza WooCommerce ni Woodmart sino el plugin "doo" con `.doo-category-banner`
  - Los filtros PHP (`woocommerce_product_subcategories`, `wc_get_loop_display_mode`) NO funcionan
  - Solución: CSS `display: none !important` en `.doo-category-banner`
  - Actualizado CLAUDE.md: error #5, checklist hero, tabla errores comunes, CSS inline obligatorio, problemas conocidos

### 2026-02-25
- **NUEVA Categoría 4973 (Azulejos Imitación Cemento)**:
  - `inc/category-imitacion-cemento.php`: contenido superior (hero, trust bar, filtros) + inferior (bumper visual, SEO estilos cemento, tendencias, FAQs, contacto)
  - Case en master controller + setup con filtros legacy ocultos + `.woocommerce-products-header`
  - `category-4973.css` con estilos completos (hero, trust bar, bumper, SEO, trends, responsive)
  - Widget filtro: 425985 (Azulejos/Cerámica general)
  - **Total: 28 categorías** gestionadas por el master controller

### 2026-02-19
- **CLAUDE.md**: Añadido "Patrón Hero para Categorías (Woodmart)" con reglas obligatorias
  - Ocultar `.woocommerce-products-header` (padre) para evitar franja de 63px sin velo
  - Breakout del hero con `width: 100vw; left: 50%; margin-left: -50vw`
  - Overlay con `width/height: 100%` + botones con `z-index: 100`
  - Checklist y tabla de errores comunes
  - Actualizado error #2 para incluir `.woocommerce-products-header` en CSS inline obligatorio
- **FIX Hero overlay cat 2377**: Cambiado `::after` de `width/height` a `top/left/right/bottom: 0`
- **FIX Wood (2209)**: Filtros antiguos volvían a aparecer
  - Añadidos selectores CSS: `.woocommerce-products-header__description`, `.term-description`, `.woodmart-category-desc`, `.wd-active-filters`
  - Añadido `remove_action('woocommerce_before_shop_loop', 'woocommerce_output_product_categories', 10)`
  - CSS respaldo en `category-2209.css` (doble protección vs cache LiteSpeed)
- **FIX Scroll post-filtro**: Creado `assets/js/category-common.js` genérico
  - FAQs toggle, filtro móvil, scroll a `.product-loop-header` tras filtrar
  - Funciona para TODAS las categorías, no necesita JS individual
- **CLAUDE.md**: Añadida sección "ERRORES COMETIDOS - NO REPETIR"
  - Documentado: siempre editar `functions-server.php`, no `functions.php`
  - Documentado: ocultar filtros legacy en toda nueva categoría
  - Documentado: estructura repo vs servidor
- **NUEVA Categoría 2377 (Azulejos Hexagonales Suelo)**:
  - `inc/category-hexagonal.php`: contenido superior (hero, enlazado interno por estancia/color, filtros) + inferior (SEO largo, FAQs, contacto)
  - Case en master controller + setup con filtros legacy ocultos
  - `category-2377.css` con estilos completos (hero, cards, SEO, trends, responsive)
  - Widget filtro: 425985 (Azulejos/Cerámica general)
  - **Total: 27 categorías** gestionadas por el master controller

### 2026-02-14
- **OPTIMIZACIÓN CRÍTICA**: Migrados 7 hooks globales restantes al master controller
  - 5 `template_redirect`: cats 4865, 4866, 4869, 4564, 2082
  - 4 WC hooks globales: cats 2626, 4247
- **Cache doo_menu_cats()**: Transient 1 hora para evitar query de 1.496 categorías en cada página
- **Total: 26 categorías** gestionadas por el master controller

### 2026-02-12
- **OPTIMIZACIÓN CRÍTICA**: Eliminadas ~10 queries BD innecesarias por página
  - Movidas cats 62, 2410, 1844, 2510, 2093 de `add_action('wp')` al master controller
  - Eliminados hooks `wp_head` globales de `cache-and-css.php` y `category-wood.php`
- **Categorías nuevas**: 64 (Pavimentos), 66 (Piscinas), 2245 (Porcelánico Mármol)

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
