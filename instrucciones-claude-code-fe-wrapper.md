# Tarea: Añadir wrapper AJAX para Filter Everything Pro en todas las categorías

## Archivo de referencia (NO TOCAR, ya está hecho)

Usa `category-hexagonal.php` como ejemplo de cómo debe quedar el resultado. Este archivo ya tiene el wrapper `fe-products-wrapper` correctamente implementado. Ábrelo, estúdialo, y aplica el mismo patrón a los demás.

## Contexto

El plugin Filter Everything Pro necesita un contenedor HTML con ID único que envuelva los productos Y la paginación de WooCommerce para que el AJAX funcione correctamente (filtrado + paginación). Actualmente el contenedor apuntaba a `.products` pero la paginación (`<nav class="woocommerce-pagination">`) queda fuera de ese elemento, así que la paginación falla al filtrar.

La solución probada y funcionando en la categoría **Azulejos Hexagonales (category-hexagonal.php)** consiste en abrir un `<div id="fe-products-wrapper">` al final de `contenido_superior()` y cerrarlo al inicio de `contenido_inferior()`. WooCommerce mete el loop de productos y la paginación entre esas dos funciones, así quedan envueltos en el wrapper.

## Estructura actual del tema

Los archivos PHP de cada categoría están en:
```
/wp-content/themes/flavor/inc/categorias/
```

Cada archivo tiene dos funciones con este patrón:
```php
function adrihosan_NOMBRE_contenido_superior() {
    ?>
    <!-- Hero, secciones, filtros, título catálogo -->
    <?php
}

function adrihosan_NOMBRE_contenido_inferior() {
    // Descripción SEO, FAQs, contacto, etc.
}
```

## Cambio exacto a realizar en CADA archivo

### 1. En `contenido_superior()` — AÑADIR apertura del wrapper

Buscar el final de la función (justo antes de `<?php` + `}`). Añadir la apertura del div DESPUÉS del último HTML visible (normalmente el título del catálogo o el bloque de filtros) y ANTES del cierre PHP:

**ANTES:**
```php
    <!-- TÍTULO CATÁLOGO (o último elemento HTML) -->
    <div id="catalogo-XXXX" class="product-loop-header">
        <h2 class="product-loop-title">Catálogo de ...</h2>
    </div>
    <?php
}
```

**DESPUÉS:**
```php
    <!-- TÍTULO CATÁLOGO (o último elemento HTML) -->
    <div id="catalogo-XXXX" class="product-loop-header">
        <h2 class="product-loop-title">Catálogo de ...</h2>
    </div>

    <!-- WRAPPER AJAX para Filter Everything Pro (productos + paginación) -->
    <div id="fe-products-wrapper">
    <?php
}
```

### 2. En `contenido_inferior()` — AÑADIR cierre del wrapper

Buscar el inicio de la función. Añadir el cierre del div como primer output HTML:

**ANTES:**
```php
function adrihosan_NOMBRE_contenido_inferior() {

    // SEO: Contenido dinámico desde WooCommerce
    $descripcion_editor = category_description();
```

**DESPUÉS:**
```php
function adrihosan_NOMBRE_contenido_inferior() {
    ?>
    </div><!-- /fe-products-wrapper -->
    <?php

    // SEO: Contenido dinámico desde WooCommerce
    $descripcion_editor = category_description();
```

## IMPORTANTE — Variaciones entre archivos

No todos los archivos son idénticos. Algunas variaciones que puedes encontrar:

1. **Algunos archivos empiezan `contenido_inferior()` directamente con `?>`** — en ese caso, simplemente añade `</div><!-- /fe-products-wrapper -->` como primera línea HTML después del `?>`.

2. **Algunos archivos no tienen `category_description()`** — no importa, el cierre del wrapper va SIEMPRE como primer output HTML de `contenido_inferior()`, antes de cualquier otro contenido.

3. **El nombre de la función varía** — puede ser `adrihosan_marmol_contenido_inferior()`, `adrihosan_piscinas_contenido_inferior()`, `adrihosan_hexagonal_contenido_inferior()`, etc. El patrón es siempre el mismo.

4. **Algunos archivos usan hooks en vez de funciones directas** — si ves `add_action('woocommerce_after_shop_loop', ...)`, el cierre `</div>` debe ir al INICIO del callback de ese hook.

## Archivos a modificar

Todos los archivos PHP en `/inc/categorias/` que contengan el patrón de dos funciones (`contenido_superior` + `contenido_inferior`) o el equivalente con hooks de WooCommerce (`woocommerce_before_shop_loop` + `woocommerce_after_shop_loop`).

**EXCLUIR** el archivo `category-hexagonal.php` — ese ya está hecho.

Lista completa de archivos a modificar:
- category-azulejos-bano.php
- category-azulejos-cocina.php
- category-azulejos-exterior.php
- category-azulejos.php
- category-bano-imitacion.php
- category-camerinos.php
- category-ceramica-porcelanico.php
- category-cocina-imitacion.php
- category-espejos.php
- category-hidraulica-original.php
- category-imitacion-hidraulico.php
- category-paredes.php
- category-pavimentos.php
- category-pilar-bano.php
- category-pilar-bh.php
- category-pilar-cocina.php
- category-pilar-exterior.php
- category-piscinas.php
- category-porcelanico-marmol.php
- category-wood.php

**NO TOCAR:** `category-hexagonal.php` (ya está hecho, es el archivo de referencia).

## Verificación

Después de modificar cada archivo, verificar:
1. El `<div id="fe-products-wrapper">` se abre DESPUÉS del widget de filtros y del título del catálogo
2. El `</div><!-- /fe-products-wrapper -->` se cierra ANTES de cualquier contenido SEO inferior
3. No hay errores de sintaxis PHP (no romper bloques `<?php ?>`)
4. El widget de filtros (`fe_widget`, `filter-container-master`) queda FUERA del wrapper (arriba)

## Regla de oro

El wrapper debe contener SOLO lo que WooCommerce genera entre las dos funciones: la cuadrícula de productos (`<ul class="products">`) y la paginación (`<nav class="woocommerce-pagination">`). Los filtros, el hero, las FAQs, etc. deben quedar FUERA.

## Configuración en Filter Everything Pro

Una vez modificados todos los archivos PHP, en el panel de WordPress:

1. **Filter Everything Pro → Ajustes → General** → "HTML ID or Class of Posts Container" = `#fe-products-wrapper`
2. **Cada Filter Set** (Suelos, Azulejos, Piscinas, etc.) → "HTML ID or Class of Posts Container" = `#fe-products-wrapper`

Esto solo hay que hacerlo una vez, ya está hecho para el Filter Set "Suelos". Hay que verificar que los demás Filter Sets también apunten a `#fe-products-wrapper`.
