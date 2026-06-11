---
name: diagnostico-reservas
description: "Runbook de diagnóstico cuando el sistema de reservas de adrihosan.com muestra 'no hay disponibilidad' o falla. Usar ante cualquier incidencia de reservas/calendario/citas."
---

# Runbook: diagnóstico del sistema de reservas

Sigue los pasos EN ESTE ORDEN. No saltes al paso 3 sin descartar 1 y 2.

## Paso 1 — ¿Hay email de fallo? (backend)

Busca en el Gmail del usuario con la tool MCP `search_threads`:

```
subject:"FALLO en sistema de reservas" newer_than:7d
```

Existe un WP-Cron diario (`inc/reservas-healthcheck.php`) que refresca el
token de Google, llama a freeBusy y, si algo falla, manda email a
`comercial@adrihosan.com`. Si hay email, lee el código:

- **`[TOKEN] missing_credentials`** → `wp-config.php` perdió las constantes
  `ADRIA_GOOGLE_*`. Restaurarlas.
- **`[TOKEN] token_refresh_failed`** → el refresh token está revocado.
  Regenerarlo en Google Cloud Console y **actualizar `ADRIA_GOOGLE_REFRESH_TOKEN`**
  en `wp-config.php`. Verificar además que el OAuth consent screen está
  **"In production"** (en modo "Testing" los refresh tokens caducan a los
  **7 días**: `console.cloud.google.com/apis/credentials/consent`).
- **`[FREEBUSY] *`** → Google rechaza la petición. Revisar Google Cloud
  Console: cuota, API Calendar habilitada, `calendar_id` correcto.

## Paso 2 — Sin emails → backend sano

Si no hay emails, el backend está bien. Pregunta al usuario:

> "¿Purgar **LiteSpeed** lo arregla temporalmente?"

- **SÍ** → es un problema de **caché/despliegue** → ve al Paso 3.
- **NO** → mira la **consola del navegador** (errores JS / respuestas 403)
  y `wp-content/debug.log` (con `WP_DEBUG_LOG=true`).

## Paso 3 — Caché / despliegue

1. Verifica que los archivos del servidor coinciden con la rama (compara
   **bytes** local vs FTP; si el del servidor pesa menos, la subida se cortó
   → resubir).
2. Confirma que se purgó **OPcache** además de LiteSpeed (son cachés
   distintas; OPcache cachea bytecode PHP compilado).
3. Comprueba que están desplegados los fixes definitivos:
   - `/availability` se pide por **POST** (commit `1abd30b`). Un POST no se
     puede cachear.
   - `inc/page-contacto.php` marca la página **113323** como **no cacheable**
     (`nocache_headers()` + `litespeed_control_set_nocache`), para que el
     nonce del formulario sea siempre fresco.
   - El **GET público no envía `X-WP-Nonce`** (un nonce caducado provoca
     403 `rest_cookie_invalid_nonce` aunque el endpoint sea público).

## Tabla histórica de causas raíz

| Fecha | Causa raíz | Commit | Lección |
|-------|-----------|--------|---------|
| 2026-05-13 | LiteSpeed cacheaba el JSON del endpoint REST `/availability` | `753126a` | Cabeceras anti-cache en el callback no bastan |
| 2026-06-02 | LiteSpeed ignoraba el control PHP (Cache REST API activo) | `0576ba8` (guarda central `rest_pre_dispatch`) + `5564795` (cache-buster JS) | El control por PHP solo evita que ENTRE en caché |
| 2026-06-10 | Nonce caducado en HTML cacheado → 403 `rest_cookie_invalid_nonce` | `a004fab` | Página con nonce incrustado no se cachea; GET público sin `X-WP-Nonce` |
| 2026-06-11 | Definitivo: `/availability` por POST, nunca cacheable | `1abd30b` | Un POST jamás se cachea |

## Regla de oro

Un **POST no se puede cachear**. Si el sistema falla con el fix de POST ya
desplegado, **NO es un problema de caché**: busca un fatal PHP o un archivo
desactualizado en el servidor.

## Referencia

Sección **"REGLA CRÍTICA: Sistema de reservas — endpoints REST NUNCA se
cachean"** de `CLAUDE.md`.
