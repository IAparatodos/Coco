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
