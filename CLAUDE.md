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

## Proyecto Consolidación de Categorías

### Situación actual
- **1.496 categorías** en WooCommerce (muchas duplicadas, huérfanas o con <10 productos)
- **Objetivo**: Reducir a 30-50 categorías estratégicas

### Categorías objetivo 1. Baldosa Hidráulica
Categoría principal: baldosa-hidraulica95

Original (original96): Baños (bano96), Cocinas (cocina96), Exterior (exterior76).

Imitación (imitacion264): Pared Baño/Cocina (pared-imitacion283), Cocina (cocina-imitacion280), Suelo Baño (bano-imitacion265).

2. Cerámica, Azulejos y Suelos
Categoría principal: ceramica197 (Incluye marcas como navarti-ceramica y ceramica-vives).

Pavimentos y Suelos (pavimentos)
Tipos: Hexagonales (azulejos-hexagonales-suelo), Técnico Exterior (suelo-tecnico-exterior), Cocina (suelos-de-cocina), Imitación Madera (suelo-imitacion-madera), Rústicos (suelos-rusticos), Exterior/Terrazas (azulejos-exterior).

Porcelánicos (porcelanico): Extrafino (porcelanico-extrafino), Imitación Mármol (porcelanicos-imitacion-marmol), Técnico (porcelanico-tecnico), Gran Formato (porcelanico-gran-formato).

Revestimientos y Azulejos (azulejos)
Estilos: Imitación Cemento (azulejos-imitacion-cemento), Imitación Piedra (azulejos-imitacion-piedra), Fachadas (revestimiento-fachada-exterior), Escama de pez (azulejo-escama-de-pez), Metro (azulejo-metro), Vintage (azulejos-antiguos), Decorativos (azulejos-decorativos).

Formatos: 15x15 (azulejos-15x15), Hexagonales (azulejos-hexagonales).

Estancias: Baño (azulejos-bano), Cocina (azulejos-de-cocina).

Especiales: Piscinas (azulejos-para-piscinas), Mosaico (azulejo-mosaico), Zellige (zellige / azulejo-efecto-zellige).

3. El Mundo del Baño
Muebles de Baño (muebles-de-bano)
Por Medida: 50cm (mueble-bano-50-cm), 60cm (mueble-bano-60-cm), 70cm (mueble-bano-70-cm), 80cm (mueble-bano-80), 100cm (mueble-bano-100-cm), 120cm (mueble-bano-120-cm-1-seno), 140cm (mueble-bano-140).

Doble Seno: 120cm (mueble-bano-2-senos-120), 140cm (mueble-bano-dos-senos-140), 150cm (mueble-bano-dos-senos-150), 160cm (mueble-bano-dos-senos-160).

Por Estilo/Color: Suspendidos (muebles-bano-suspendidos), Con patas (muebles-bano-con-patas), Diseño (muebles-de-bano-de-diseno), Rústicos (muebles-de-bano-rusticos), Industrial (mueble-bano-industrial). Colores: Blanco, Gris, Azul, Verde, Rosa, Amarillo.

Espejos (espejos)
LED: Antivaho (espejo-led-antivaho), Retroiluminado (espejo-led-retroiluminado), Redondos (espejos-led-redondos).

Camerinos: Armarios con espejo (camerino-bano).

4. Sanitarios y Ducha
Categoría principal: sanitarios

Bañeras: Exentas (baneras-exentas), Solid Surface (banera-exenta-solid-surface), Resina (banera-resina).

Inodoros (inodoro): Suspendidos (inodoros-suspendidos), Compactos (inodoro-compacto), Japoneses (inodoro-japones), Salida dual/vertical.

Lavabos (lavabos): Sobre encimera (lavabo-sobre-encimera), Bajo encimera (lavabo-bajo-encimera), Suspendidos (lavabos-suspendidos), De pie (lavabos-pie), Doble lavabo (doble-lavabo).

Platos de Ducha (platos-de-ducha): Resina (platos-de-ducha-de-resina), Pizarra (platos-de-ducha-de-pizarra), Antideslizantes, Carga mineral (platos-de-ducha-de-resina).

Mamparas (mamparas): De ducha (mampara-de-ducha), Bañera (mampara-banera), Correderas (mampara-ducha-corredera), Fijas (mampara-ducha-fija), Abatibles, Plegables.

5. Cocina y Fregaderos
Fregaderos (fregaderos): 1 seno (fregadero-1-seno), 2 senos (fregadero-dos-senos), Bajo encimera (fregadero-bajo-encimera), Acero Inox (fregadero-acero-inox), Resina/Fibra (fregadero-resina).

Muebles de Cocina (muebles-de-cocina1): Módulos (muebles-de-cocina-por-modulos), Altos (mueble-alto-cocina), Bajos (mueble-bajo-cocina), Esquineros, Para microondas, Fregaderos.

6. Grifería y Accesorios
Grifería (griferia): Baño (griferia-bano), Cocina (grifos-de-cocina), Ducha (grifo-ducha), Empotrada (griferia-empotrada), Termostática (grifo-termostatico), Ósmosis (grifo-osmosis).

Accesorios Baño (accesorios-de-bano): Toalleros (toallero-bano), Portarrollos, Escobilleros, Barras de seguridad.

7. Otros
Radiadores: Agua (radiadores-calefaccion-agua), Eléctricos (radiadores-electricos).

Suelo de Barro: Terracota (terracota), Barro cocido.

Tratamiento de agua: Descalcificadores, Ósmosis.

Ofertas: Black Friday (black-friday-adrihosan34), Cyber Monday, Outlet sanitarios.

### Comandos útiles
```bash
# Listar todas las categorías con conteo de productos
wp term list product_cat --fields=term_id,name,slug,count --format=table

# Exportar a CSV para análisis
wp term list product_cat --format=csv > categorias-audit.csv

# Buscar categorías vacías
wp term list product_cat --count=0 --format=table
```

### Próximos pasos
1. [ ] Exportar las 1.496 categorías
2. [ ] Clasificar: mantener / fusionar / eliminar
3. [ ] Definir árbol jerárquico final
4. [ ] Plan de redirecciones 301
5. [ ] Implementar GEO (Generative Engine Optimization)

### Datos de Search Console a revisar
- Keywords donde rankea una página incorrecta
- Categorías con impresiones pero bajo CTR
- Oportunidades de long-tail en categorías nicho
- 
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
