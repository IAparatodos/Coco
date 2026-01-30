# CLAUDE.md - Proyecto Adrihosan (Coco)

## Arquitectura del Proyecto

Este es un tema hijo de WordPress/WooCommerce para la tienda **Adrihosan** (cerámica y materiales de construcción).

### Estructura de Archivos Principales

```
/Coco
├── functions.php          # Lógica principal del tema (categorías, hooks, etc.)
├── style.css              # Estilos base del tema hijo
├── base-global.css        # Estilos globales compartidos (contacto, etc.)
├── category-{ID}.css      # Estilos específicos por categoría
│   ├── category-62.css    # Cerámica (página pilar)
│   ├── category-64.css    # Pavimentos y Suelos Cerámicos
│   ├── category-66.css    # Piscinas
│   ├── category-2410.css  # Porcelánico
│   └── ...
└── assets/
    └── css/               # (Alternativa para CSS, pero actualmente en raíz)
```

### Controlador Maestro (functions.php)

El sistema usa un **Controlador Maestro** (líneas ~33-70 en functions.php) que gestiona qué funciones cargar según la categoría:

```php
// Patrón del Controlador Maestro
add_action('wp', 'adrihosan_controlador_maestro_categorias');

function adrihosan_controlador_maestro_categorias() {
    if (!is_product_category()) return;

    $cat = get_queried_object();
    $cat_id = $cat->term_id;

    switch ($cat_id) {
        case 62:  // Cerámica
            adrihosan_setup_ceramica_cpu_fix();
            break;
        case 64:  // Pavimentos
            adrihosan_setup_pavimentos_cpu_fix();
            break;
        // ... más categorías
    }
}
```

---

## Convenciones de Código

### Funciones PHP

1. **Setup function** (configuración de hooks):
   ```php
   function adrihosan_setup_{categoria}_cpu_fix() {
       // Registrar hooks para contenido superior/inferior
       add_action('woocommerce_before_shop_loop', 'adrihosan_{categoria}_contenido_superior', 5);
       add_action('woocommerce_after_shop_loop', 'adrihosan_{categoria}_contenido_inferior', 50);
       // Cargar CSS específico
       add_action('wp_head', 'adrihosan_{categoria}_inline_css');
   }
   ```

2. **Content functions**:
   - `adrihosan_{categoria}_contenido_superior()` - Contenido antes de productos
   - `adrihosan_{categoria}_contenido_inferior()` - Contenido después (FAQs, contacto)

3. **CSS loading**:
   ```php
   function adrihosan_{categoria}_inline_css() {
       $css_file = get_stylesheet_directory() . '/category-{ID}.css';
       if (file_exists($css_file)) {
           echo '<style>' . file_get_contents($css_file) . '</style>';
       }
   }
   ```

### Clases CSS Estándar

#### Hero Section
```css
.hero-section-container
.hero-content
.hero-content h1
.hero-content p
.hero-buttons
.hero-btn.primary
.hero-btn.secondary
```

#### Cards/Grid de Inspiración
```css
.ap-inspiration-section
.ap-inspiration-wrapper
.ap-inspiration-grid
.ap-inspiration-card
.ap-card-content
```

#### FAQs
```css
.faq-section-common
.faq-wrapper-common
.faq-items-wrapper
.faq-item-common
.faq-question-common
.faq-answer-common
```

#### Contacto (usa base-global.css)
```css
.contact-help-common
.contact-help-content
.contact-help-icon
.contact-help-text
.contact-help-button
```

#### Secciones Especiales
```css
.pilares-section / .pilar-card          # Bloques grandes de navegación
.consejo-adri-section                    # Consejos con CTA WhatsApp
.intro-text-section                      # Texto introductorio
.formatos-section / .formatos-tabs       # Tabs de formatos
```

### Selectores CSS por Categoría

Siempre usar el selector de categoría para evitar conflictos:
```css
.tax-product_cat.term-{ID} .clase { ... }
```

### Full Width Blocks

Para secciones a ancho completo:
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
/* Móvil */
@media (max-width: 768px) { ... }

/* Tablet */
@media (max-width: 1024px) and (min-width: 769px) { ... }
```

---

## Decisiones Técnicas

### 1. CSS Inline vs Archivos Externos
- **Decisión**: Usar `file_get_contents()` para inyectar CSS en `<head>`
- **Razón**: Evita peticiones HTTP adicionales, mejor rendimiento

### 2. Controlador Maestro Centralizado
- **Decisión**: Un solo punto de entrada que decide qué cargar
- **Razón**: Evita múltiples hooks compitiendo, mejor control de CPU

### 3. Estilos de Contacto en base-global.css
- **Decisión**: NO duplicar estilos de contacto en cada category-{ID}.css
- **Razón**: Consistencia visual, mantenimiento más fácil

### 4. Filter Everything Pro Widget
- **Shortcode**: `[fe_widget id="425985"]`
- **Nota**: Este plugin puede causar problemas de CPU si no se gestiona bien

### 5. Entidades HTML
- **Decisión**: Usar entidades HTML (`&aacute;`, `&eacute;`, etc.) en PHP
- **Razón**: Evitar problemas de encoding

---

## Categorías Configuradas

| ID | Nombre | Estado | Archivo CSS |
|----|--------|--------|-------------|
| 62 | Cerámica | Actualizado | category-62.css |
| 64 | Pavimentos y Suelos | Nuevo | category-64.css |
| 66 | Piscinas | Creado | category-66.css |
| 2410 | Porcelánico | Actualizado | category-2410.css |

---

## Changelog

### 2026-01-30
- **Categoría 62 (Cerámica)**: Añadido bloque de texto introductorio antes de "Los Dos Pilares"
- **Categoría 62 (Cerámica)**: Reescritura completa al nuevo wireframe
  - Nuevo Hero con título "CERÁMICA: EL ORIGEN DE TU REFORMA"
  - Nueva sección "Los Dos Pilares" (Pavimentos y Azulejos)
  - Nueva sección "Consejo de Adri" con botón WhatsApp
  - Secciones de estancia, efectos y formatos
- **Categoría 64 (Pavimentos)**: Creada nueva categoría completa
  - Hero, grid 5 columnas subcategorías
  - Sección autoridad, marcas, FAQs, enlaces estratégicos
- **Categoría 2410 (Porcelánico)**: Actualizado al nuevo patrón
  - Eliminados estilos de contacto (ahora usa base-global.css)
- **Categoría 66 (Piscinas)**: Creado archivo CSS

### Sesiones Anteriores
- Corrección de problemas de CPU por hooks duplicados
- Implementación del Controlador Maestro
- Estandarización de clases CSS

---

## Notas para Futuras Sesiones

1. **Al crear nueva categoría**:
   - Añadir case al switch del Controlador Maestro
   - Crear función setup `adrihosan_setup_{cat}_cpu_fix()`
   - Crear funciones de contenido superior/inferior
   - Crear archivo `category-{ID}.css`

2. **Al modificar estilos**:
   - Usar siempre el selector `.tax-product_cat.term-{ID}`
   - NO tocar estilos de contacto (están en base-global.css)
   - Incluir responsive para móvil y tablet

3. **Archivos que subir al servidor**:
   - `functions.php`
   - `category-{ID}.css` correspondiente
   - `base-global.css` si se modifica contacto
