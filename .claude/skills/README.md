# Skills de Claude Code — tema Adrihosan

Skills versionadas en el repo para automatizar las tareas recurrentes del
tema WordPress de adrihosan.com.

## Skills disponibles

- **/nueva-categoria** — Crear una categoría de producto WooCommerce nueva
  (PHP + CSS) respetando la identidad corporativa (`#4dd2d0` / `#3f6f7b` /
  Poppins) y el checklist completo (wrapper Filter Everything, FAQs sin
  JSON-LD, requires defensivos, verificación pre-commit). Úsala cuando pidan
  crear o añadir una categoría.

- **/diagnostico-reservas** — Runbook paso a paso cuando el sistema de
  reservas muestra "no hay disponibilidad" o falla (email de healthcheck →
  caché LiteSpeed/OPcache → fixes definitivos por POST). Úsala ante cualquier
  incidencia de reservas/calendario/citas.

- **/subir-servidor** — Genera la lista de archivos a desplegar por FTP, con
  enlaces GitHub BLOB, rutas de destino y orden de subida. Úsala al terminar
  cualquier cambio que deba subirse al servidor.

## Hook SessionStart

Al arrancar una sesión, `.claude/hooks/session-start.sh` hace `git fetch` y
lista las ramas remotas más recientes, recordando que se debe trabajar
siempre desde la rama más reciente funcional.

## Hooks de edición (`adri-guard.py`)

`.claude/hooks/adri-guard.py` vigila cada Edit/Write y frena los errores más
caros del historial de CLAUDE.md:

- **Antes de editar (bloquea):** las copias viejas de la raíz (`inc/`,
  `functions*.php`). El tema bueno es `adrihosan/`.
- **Después de editar (avisa a Claude para que lo corrija):**
  - `php -l` en cada `.php` de `adrihosan/` (un parse error subido por FTP
    tira la web).
  - JSON-LD `FAQPage` en `adrihosan/inc/category-*.php` (lo emite Rank Math).
  - Colores nuevos fuera de la identidad corporativa en
    `adrihosan/assets/css/category-*.css`. Solo avisa de los colores que no
    estaban ya en HEAD, para no saltar con los CSS antiguos pendientes de migrar.

Necesita `python3` (y `php` para el lint; sin `php` esa comprobación se salta).
