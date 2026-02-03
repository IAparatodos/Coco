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
- **Shortcode principal**: `[fe_widget id="425985"]` (categorías generales)
- **Shortcode baldosa hidráulica**: `[fe_widget id="426058"]` (categorías de baldosa hidráulica)
- **Nota**: Este plugin puede causar problemas de CPU si no se gestiona bien

#### Configuración del Filtro Móvil (IMPORTANTE)
Para que el botón de filtro móvil funcione correctamente con el JavaScript del tema (`category-common.js`), el widget debe estar configurado así:

1. Ir a **Filter Everything** > **Filtros** > Editar el widget
2. En la sección **"Mobile view"** o **"Vista móvil"**, seleccionar: **"The same as on a desktop"**
3. **NO usar** "Appear as a Pop-up" ni "Collapsed and expanded"

**¿Por qué?** El JavaScript `category-common.js` busca el elemento `.wpc-filters-open-button-container` y lo mueve al contenedor `.solo-movil-filtro`. Si el widget está en modo "Pop-up", el plugin genera su propio botón con comportamiento diferente que no es compatible con nuestro sistema de filtro móvil personalizado.

#### Estructura del Filtro Móvil
```html
<!-- Contenedor destino (vacío inicialmente, el JS mueve aquí el botón) -->
<div id="destino-filtro-adria-{categoria}" class="solo-movil-filtro" style="display:none;"></div>

<!-- Widget de filtros (genera el botón .wpc-filters-open-button-container) -->
<div class="filter-container-master"><?php echo do_shortcode('[fe_widget id="XXXXX"]'); ?></div>
```

#### CSS necesario para el filtro móvil
```css
@media (max-width: 768px) {
    .tax-product_cat.term-{ID} .solo-movil-filtro {
        display: block !important;
        margin: 20px 0 30px 0 !important;
    }

    #destino-filtro-adria-{categoria} {
        text-align: center !important;
    }

    #destino-filtro-adria-{categoria} .wpc-filters-open-button-container {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    #destino-filtro-adria-{categoria} .wpc-filters-open-button-container a,
    #destino-filtro-adria-{categoria} a.wpc-filters-open-button {
        display: inline-block !important;
        background-color: #4dd2d0 !important;
        color: #ffffff !important;
        padding: 14px 30px !important;
        border-radius: 5px !important;
        font-family: 'Poppins', sans-serif !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
    }
}
```

### 5. Entidades HTML
- **Decisión**: Usar entidades HTML (`&aacute;`, `&eacute;`, etc.) en PHP
- **Razón**: Evitar problemas de encoding

### 6. Filter Everything Pro - Widget de Filtros
- **Plugin**: Filter Everything Pro para WooCommerce
- **Shortcode principal**: `[fe_widget id="425985"]` (general) / `[fe_widget id="426058"]` (baldosa hidráulica)
- **Contenedor móvil**: `#destino-filtro-adria-{categoria}` con clase `.solo-movil-filtro`
- **Nota**: Cada categoría necesita estilos CSS específicos para mostrar el botón en móvil

### 7. WPC Product Filters - Configuración móvil
- **Plugin**: WPC Product Filters para WooCommerce
- **Decisión**: Usar modo "como escritorio" en configuración móvil
- **Razón**: El modo móvil por defecto oculta el botón de filtros

---

## Sistema de Filtro Móvil

### Arquitectura
El filtro móvil funciona con 3 componentes:

1. **HTML (functions.php)**: Contenedor destino + widget
   ```php
   <div id="destino-filtro-adria-{categoria}" class="solo-movil-filtro" style="display:none; text-align:center; margin: 20px 0 40px 0;"></div>
   <div class="filter-container-master"><?php echo do_shortcode('[fe_widget id="425985"]'); ?></div>
   ```

2. **JavaScript (category-common.js)**: Función `moverBotonFiltroMovil()` que:
   - Detecta pantallas ≤991px
   - Mueve `.wpc-filters-open-button-container` al contenedor `.solo-movil-filtro`
   - Personaliza texto según categoría ("FILTRAR AZULEJOS" / "FILTRAR SUELOS")
   - Oculta botones duplicados

3. **CSS (category-{ID}.css)**: Estilos específicos por categoría
   ```css
   @media (max-width: 768px) {
       .tax-product_cat.term-{ID} .solo-movil-filtro {
           display: block !important;
           margin: 20px 0 30px 0 !important;
       }
       #destino-filtro-adria-{nombre} .wpc-filters-open-button-container {
           display: block !important;
           visibility: visible !important;
       }
   }
   ```

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
**Fecha**: 2026-02-03

**Síntoma**: El contenedor `.wpc-filters-open-button-container` existe en el DOM pero no aparece visualmente en dispositivos móviles.

**Diagnóstico realizado**:
1. Se verificó HTML en functions.php ✓
2. Se verificó CSS en category-{ID}.css ✓
3. Se verificó JavaScript en category-common.js ✓
4. Todo estaba correcto en el código

**Causa real**: Configuración del plugin WPC Product Filters. Por defecto tiene un modo de visualización diferente para móvil que oculta el botón.

**Solución**: En la configuración del plugin WPC Product Filters, cambiar la opción de visualización móvil a "como en escritorio" (desktop mode).

**Lección aprendida**: Antes de investigar CSS o JS para elementos de plugins, revisar SIEMPRE la configuración del plugin para comportamientos responsivos. Los plugins suelen tener modos de visualización separados para móvil/escritorio.

### Filtro móvil sin estilos CSS
**Fecha**: 2026-02-03

**Síntoma**: El botón de filtro móvil no aparece aunque el HTML y JS están correctos.

**Causa**: El archivo `mobile-fixes.css` oculta globalmente `.wpc-filters-open-button-container`. Cada categoría necesita estilos CSS específicos para volver a mostrarlo.

**Solución**: Añadir al CSS de la categoría:
```css
@media (max-width: 768px) {
    .tax-product_cat.term-{ID} .solo-movil-filtro {
        display: block !important;
    }
    #destino-filtro-adria-{nombre} .wpc-filters-open-button-container {
        display: block !important;
        visibility: visible !important;
    }
}
```

**Categorías corregidas**: 4862, 2083, 4876

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

### 2026-02-03
- **Filtro móvil**: Implementación completa del sistema de filtro móvil en categorías
  - Actualizado `category-common.js` con función `moverBotonFiltroMovil()` universal
  - Añadidos estilos inline a contenedores de pavimentos (64) y azulejos (63)
  - Corregida ruta de carga del JS (de `/assets/js/` a raíz del tema)
- **Categoría 4862 (Hidráulica Original)**: Añadidos estilos CSS filtro móvil
- **Categoría 2083 (Baño Imitación)**: Añadidos estilos CSS filtro móvil
- **Categoría 4876 (Cocina Imitación)**: Añadidos estilos CSS filtro móvil
- **Filter Everything Pro - Configuración móvil (IMPORTANTE)**:
  - **Causa del problema**: El widget estaba en modo "Appear as a Pop-up"
  - **Solución**: Cambiar a modo **"The same as on a desktop"** en la configuración del widget
  - Esto permite que `category-common.js` mueva el botón al contenedor `.solo-movil-filtro`
  - Documentada configuración correcta en sección "Decisiones Técnicas"

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
