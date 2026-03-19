# Adrihosan - Instrucciones para Claude

## REGLA CRÍTICA: Al iniciar un nuevo chat, copia del último repositorio

Al comenzar una nueva sesión/chat, **SIEMPRE** hacer `git pull` de la rama más reciente que se haya usado como base. No asumir que el código local está actualizado. Preguntar al usuario cuál fue la última rama funcional si no está claro.

## REGLA CRÍTICA: No romper categorías existentes

**NUNCA** modifiques la estructura del master controller ni el sistema de carga de archivos de categoría sin verificar que TODAS las categorías siguen funcionando.

### Archivo principal: `adrihosan/functions.php`

Este archivo contiene:
1. **Master controller** (`adrihosan_master_controller_cpu_fix`) - Switch con TODOS los IDs de categorías personalizadas
2. **Setup functions** (`adrihosan_setup_*_cpu_fix`) - Configuran hooks de WooCommerce para cada categoría
3. **Requires** de archivos `inc/category-*.php` - Contienen las funciones de contenido HTML

### Antes de cambiar functions.php:

1. Listar TODOS los `case` del switch y verificar que siguen presentes tras el cambio
2. Listar TODOS los `require` de archivos category-*.php y verificar que siguen presentes
3. Si añades un lazy-load o cualquier sistema de carga condicional, asegúrate de que cubre TODAS las categorías, no solo las que existían antes
4. **Consultar la rama `claude/update-category-2358-links-VWjok`** como referencia de la versión funcional

### Categorías registradas (42 total):

| ID | Nombre | Archivo contenido |
|----|--------|-------------------|
| 2083 | Baño Imitación | category-bano-imitacion.php |
| 4876 | Cocina Imitación | category-cocina-imitacion.php |
| 4862 | Hidráulica Original | category-hidraulica-original.php |
| 102 | Espejos | category-espejos.php |
| 4213 | Espejos con Luz | category-espejos.php |
| 2209 | Wood | category-wood.php |
| 4806 | Paredes Decorativas | category-paredes.php |
| 1789 | Azulejos Baño | category-azulejos-bano.php |
| 1790 | Azulejos Cocina | category-azulejos-cocina.php |
| 2160 | Azulejos Exterior | category-azulejos-exterior.php |
| 66 | Azulejos Piscinas | category-piscinas.php |
| 64 | Pavimentos y Suelos | category-pavimentos.php |
| 63 | Azulejos | category-azulejos.php |
| 2245 | Porcelánico Mármol | category-porcelanico-marmol.php |
| 2377 | Hexagonales Suelo | category-hexagonal.php |
| 4973 | Imitación Cemento | category-imitacion-cemento.php |
| 2350 | Suelo Técnico | category-suelo-tecnico.php |
| 2285 | Suelos de Cocina | category-suelos-cocina.php |
| 2273 | Suelos Rústicos | category-suelos-rusticos.php |
| 2471 | Porcelánico Técnico | category-porcelanico-tecnico.php |
| 62 | Cerámica | category-ceramica-porcelanico.php |
| 2410 | Porcelánico | category-ceramica-porcelanico.php |
| 1844 | Gran Formato | category-ceramica-porcelanico.php |
| 2510 | Extrafino | category-ceramica-porcelanico.php |
| 2093 | Metro | category-ceramica-porcelanico.php |
| 4564 | Baldosa Hidráulica | category-pilar-bh.php |
| 4865 | Original / Baño | category-pilar-bano.php |
| 4866 | Original / Cocina | category-pilar-cocina.php |
| 4869 | Original / Exterior | category-pilar-exterior.php |
| 2082 | Imitación Hidráulico | category-imitacion-hidraulico.php |
| 4247 | Espejos Redondos | category-espejos.php |
| 2626 | Camerino Baño | category-camerinos.php |
| 2516 | Zellige | category-zellige.php |
| 4972 | Imitación Piedra | category-imitacion-piedra.php |
| 2394 | Fachadas y Muros | category-fachadas.php |
| 2188 | Escama de Pez | category-escama-pez.php |
| 2132 | Azulejos 15x15 | category-azulejos-15x15.php |
| 2358 | Azulejos Antiguos | category-azulejos-antiguos.php |
| 2108 | Azulejos Decorativos | category-azulejos-decorativos.php |
| 2173 | Azulejos Hexagonales | category-azulejos-hexagonales.php |
| 310 | Porcelánico Techlam | category-porcelanico-techlam.php |
| 2482 | Cerámica Vives | category-ceramica-vives.php |

### Optimizaciones de rendimiento activas:

- **GTM diferido** en footer.php (requestIdleCallback con fallback setTimeout 2s)
- **Facebook/TikTok diferidos** en dw-shortcodes.php (requestIdleCallback con fallback 3-3.5s)
- **Preload Poppins-SemiBold** en header.php
- **Playfair Display cargado via JS** en footer.php (eliminado de cadena crítica de render)
- **Preconnect** a fonts.googleapis.com y fonts.gstatic.com en header.php
- **data-no-optimize="1"** en CSS diferidos para evitar que LiteSpeed los recombine como bloqueantes
- **N+1 queries eliminados** en wc-search.php
- **Cart total ligero** en header.php (get_total vs wc_cart_totals_order_total_html)
- **Critical CSS inline** en header.php (header + hero h1 + cover + responsive)
- **CSS async** style.css y fonts.css via media="print" + onload
- **Cache menú categorías** en functions.php (transient 1h para 1.496 categorías)

## Limpieza BD - 19 marzo 2026

### Tablas vaciadas con TRUNCATE (se pueden repoblar solas por los plugins):

| Tabla | Tamaño antes | Plugin | Cómo se repobla |
|-------|-------------|--------|-----------------|
| `wpso_cmplz_statistics` | 107 MB (1.055.120 filas) | Complianz (cookies) | Se regenera automáticamente con nuevas visitas |
| `wpso_ewwwio_images` | 290 MB (1.484.375 filas) | EWWW Image Optimizer | Se regenera al re-escanear imágenes desde el plugin |
| `wpso_pmxi_images` | 41 MB (189.911 filas) | WP All Import | Logs de importaciones antiguas, no se necesitan |
| `wpso_post_smtp_logs` | 11 MB (213 filas) | Post SMTP | Se regenera con nuevos emails enviados |

**Total liberado: ~450 MB**

### Diagnóstico BD (datos de referencia):

- **Autoload:** 0.21 MB (OK, no es problema)
- **Meta huérfanos:** 0 (limpio)
- **Revisiones:** 8.311 (solo 0.02 MB, no vale la pena limpiar)
- **Action Scheduler:** 2.472 complete (limpio)
- **Base de datos:** `adrihos4n_2021` (prefijo tablas: `wpso_`)
- **Tabla más grande:** `wpso_postmeta` 753 MB (datos reales de productos, NO tocar)

## Limpieza GTM - 19 marzo 2026 (Versión 70)

### Etiquetas pausadas en Google Tag Manager (NO eliminadas, se pueden reactivar):

| Etiqueta | Tipo | Por qué se pausó |
|----------|------|-------------------|
| [ Microsoft Clarity \| Pixel seguimiento ] | HTML personalizado | Ya no se usa, generaba 15+ peticiones XHR por visita |
| Crazy egg | Crazy Egg | Heatmap duplicado, no se usa |
| Base Tag(UET 137032262) | Microsoft Advertising | No se hacen campañas en Bing |
| GA - Pageview(Microsoft UET) | Microsoft Advertising | Universal Analytics cerrado julio 2023 |
| Google Analytics Ecommerce UA Add To Cart(Microsoft UET) | Microsoft Advertising | UA cerrado |
| Google Analytics Ecommerce UA Checkout(Microsoft UET) | Microsoft Advertising | UA cerrado |
| Google Analytics Ecommerce UA Product Details(Microsoft UET) | Microsoft Advertising | UA cerrado |
| Google Analytics Ecommerce UA Product Impression(Microsoft UET) | Microsoft Advertising | UA cerrado |
| Transacciones UA(Microsoft UET) | Microsoft Advertising | UA cerrado |
| Pixel Facebook 980396552370672 | HTML personalizado | Duplicado del [Facebook] Pixel principal |
| TIK TOK - CNPCJJ3C77UB4F5CPU9G | HTML personalizado | No se hacen campañas en TikTok |

### Para revertir:
1. Ir a tagmanager.google.com → Adrihosan web
2. Etiquetas → seleccionar la etiqueta pausada → Reanudar
3. Enviar/Publicar nueva versión

### Resultado de la limpieza:

| Métrica | Antes | Después |
|---------|-------|---------|
| Solicitudes | 169 | 130 |
| Tiempo total carga | 2.8 min | 3.30 s |
| DOMContentLoaded | 242 ms | 306 ms |
| TTFB | 36 ms | 36 ms |

### Etiquetas GTM que SÍ siguen activas (NO tocar):

- [GA4] Etiqueta de Google - Analytics principal
- [GA4 Event] Click en email/teléfono/whatsapp - Eventos GA4
- [GA4 Event] Ecommerce events - Ecommerce GA4
- [GA4 Event] Formulario contacto enviado
- [GA4 Event] Vista producto escaparate
- [GAds] Etiqueta de Google - Google Ads principal
- [GAds] Vinculación de conversiones
- [GAds Conv] Clicks en teléfono/whatsapp - Conversiones Google Ads
- [GAds Conv] Compra realizada
- [Facebook] Pixel - Pixel principal de Meta
- [Facebook] Addtocart/Checkout/Compra - Conversiones Meta
- [Micro] 60 Seg en pag - Conversión micro Google Ads
- [JS] Calendly listener / Contact Form 7 Listener
- Complianz Config - Gestión de consentimiento
- Mejorada [GA4 Event] Formulario contacto enviado
- Validación Dominio Facebook
- Vista Contacto
- Eventos de landings (Azulejos_exposicion/llamada/video/whatsapp, etc.)
