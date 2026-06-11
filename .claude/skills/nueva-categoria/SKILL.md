---
name: nueva-categoria
description: "Crear una nueva categoría de producto WooCommerce para Adrihosan (PHP + CSS) siguiendo la identidad corporativa y el checklist completo. Usar cuando el usuario pida crear/añadir una categoría nueva."
---

# Crear una categoría nueva (Adrihosan)

Sigue estos pasos en orden. No inventes datos: si falta algo, pregúntalo
antes de escribir código.

## 1. Datos a pedir si faltan

- **ID de categoría** (término de WooCommerce, p. ej. `4972`).
- **Nombre** y **slug** de la categoría.
- **Imagen hero** (URL/nombre del archivo).
- **Categorías relacionadas** (para las related cards / enlaces internos).
- **¿Pertenece a la familia "muebles de baño"?** Si sí, reutiliza el
  widget Filter Everything Pro `427306` (IDs que ya lo usan: 99, 100, 101,
  103, 2421, 2428, 2528). Solo se crea un widget nuevo si los atributos
  filtrables son distintos.

## 2. CSS: `adrihosan/assets/css/category-{ID}.css`

- Copia **`category-2428.css`** como base (es la implementación canónica de
  la identidad corporativa real).
- Empieza SIEMPRE con este bloque de comentario (sustituye `{ID}` y nombre):

  ```css
  /* ========================================================================== */
  /* CATEGORY-{ID}.CSS - Nombre de la categoria                                 */
  /* Identidad corporativa Adrihosan:                                           */
  /*   - Color corporativo CTA: #4dd2d0                                         */
  /*   - Color corporativo texto: #3f6f7b                                       */
  /*   - Tipografia corporativa: Poppins                                        */
  /* ========================================================================== */
  ```

- **SOLO** estos hex: `#4dd2d0` (turquesa CTA), `#3f6f7b` (azul texto),
  `#ffffff`, `#f0f7f8` (tinte claro), `#d4e3e6` (border sutil), más
  `rgba(63, 111, 123, ...)` para overlays/sombras. **NADA MÁS.**
- Botones CTA (`.bumper-btn`) SIEMPRE `#4dd2d0`, nunca `#3f6f7b`.
- Tipografía **únicamente** `font-family: 'Poppins', sans-serif;` en cada
  bloque estructural. Prohibido Playfair, Georgia, serif.
- Prohibida la paleta antigua: `#1a3a4a`, `#3a5a6a`, `#2a7a8a`, `#7cc8e8`,
  `#f0f5fa`, `#d8e3ef`, dorados, marrones, navy. El tema "rústico/premium"
  lo aportan las IMÁGENES, nunca el CSS.
- Las clases genéricas `.ap-*` van en este CSS individual con selector
  `.tax-product_cat.term-{ID}` (no hay CSS compartido para ellas).
- Orden de secciones: 1) ocultar elementos legacy, 2) hero, 3) value/trust
  bar, 4) inspiration, 5) SEO/material + trends, 6) consejo Adria, 7) título
  catálogo, 8) responsive móvil `@media (max-width: 768px)`, 9) responsive
  tablet `@media (max-width: 1024px)`.

## 3. PHP: `adrihosan/inc/category-{slug}.php`

- Dos funciones: `..._contenido_superior()` y `..._contenido_inferior()`.
- **Wrapper Filter Everything** (obligatorio): en `_contenido_superior()`,
  tras el widget de filtros y el título de catálogo, la última acción es
  abrir el wrapper:

  ```php
      <div id="fe-products-wrapper">
      <?php
  }
  ```

  Y en `_contenido_inferior()` la **primera** línea lo cierra:

  ```php
  function ..._contenido_inferior() {
      ?>
      </div><!-- /fe-products-wrapper -->
      <?php
  ```

- **FAQs**: usa las clases comunes `faq-section-common`, `faq-item-common`,
  `faq-question-common`. **NUNCA** incluyas un `<script type="application/ld+json">`
  con `FAQPage` ni comentario `<!-- SCHEMA FAQPage -->`. El schema FAQ se
  gestiona EXCLUSIVAMENTE desde Rank Math.
- **Contacto Ricardo**: bloque `contact-help-common .contact-intro`.
- **Secciones full-bleed** (hero, trust bar, bumper, FAQs, contacto): usa la
  clase corporativa `adrihosan-full-width-block`. NO repliques `width:100vw`
  / `left:50%` / `margin-left:-50vw` a mano.
- **URLs no verificadas** → fallback `https://www.adrihosan.com/`. Nunca
  inventes slugs (genera 404).

## 4. `adrihosan/functions.php`

- Añade el `case {ID}:` en el master controller (`adrihosan_master_controller_cpu_fix`).
- Añade la setup function con guards `function_exists` en cada `add_action`:

  ```php
  if ( function_exists( 'adrihosan_categoria_XXXX_contenido_superior' ) ) {
      add_action('woocommerce_before_shop_loop', 'adrihosan_categoria_XXXX_contenido_superior', 5);
  }
  if ( function_exists( 'adrihosan_categoria_XXXX_contenido_inferior' ) ) {
      add_action('woocommerce_after_shop_loop', 'adrihosan_categoria_XXXX_contenido_inferior', 99);
  }
  ```

- `require` **defensivo** con `file_exists`:

  ```php
  $_adri_inc_path = get_template_directory() . '/inc/category-XXXX.php';
  if ( file_exists( $_adri_inc_path ) ) {
      require $_adri_inc_path;
  }
  ```

## 5. Verificación pre-commit (obligatoria)

```bash
php -l adrihosan/inc/category-{slug}.php
grep -E "#[0-9a-fA-F]{3,6}" adrihosan/assets/css/category-{ID}.css
grep -i "ld+json" adrihosan/inc/category-{slug}.php   # debe salir vacío
```

- El `grep` de hex SOLO puede mostrar: `#4dd2d0`, `#3f6f7b`, `#ffffff`,
  `#f0f7f8`, `#d4e3e6`. Cualquier otro hex es un error a corregir.
- El `grep` de `ld+json` debe devolver vacío.
- Comprueba a ojo que el wrapper `fe-products-wrapper` se **abre** en
  `_contenido_superior()` y se **cierra** en `_contenido_inferior()`.

## 6. Recordatorios finales al usuario

- **Asignar ≥1 producto** a la categoría en WooCommerce. Si está vacía,
  WooCommerce NO dispara `woocommerce_before_shop_loop` /
  `woocommerce_after_shop_loop` y la página sale vacía (solo header + footer).
- **Crear las FAQ en Rank Math** (panel WP → editar categoría → Schema →
  FAQ) con las mismas preguntas/respuestas que el HTML.
- Termina invocando la skill **subir-servidor** para generar el listado de
  archivos a desplegar.
