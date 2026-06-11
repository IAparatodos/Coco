---
name: subir-servidor
description: "Generar la lista de archivos a subir al servidor por FTP con enlaces a GitHub, rutas de destino y orden de subida. Usar al terminar cualquier cambio que deba desplegarse en adrihosan.com."
---

# Subir cambios al servidor (FTP)

Genera la lista de archivos a desplegar, con enlace de descarga, ruta de
destino y orden de subida.

## REGLA OBLIGATORIA (preferencia explícita del usuario)

**SIEMPRE, sin que el usuario lo pida**, al terminar CUALQUIER cambio que
toque archivos dentro de `adrihosan/`, dale la **URL de GitHub (`main`) de
cada archivo a subir**. No basta con decir "sube functions.php": hay que
dar el enlace clicable `https://github.com/IAparatodos/Coco/blob/main/...`
de cada uno. Es la parte más importante de la respuesta.

## Flujo por defecto (preferencia del usuario)

El usuario **siempre coge los archivos de `main`** para subir al servidor.
Por tanto, ANTES de generar la lista:

1. Asegúrate de que el cambio está **fusionado en `main`** (crea el PR y
   hazlo merge tú mismo, como los PR #14 y #15). No le des enlaces de una
   rama de trabajo a medias.
2. Genera SIEMPRE los enlaces apuntando a **`main`**
   (`https://github.com/IAparatodos/Coco/blob/main/...`).
3. Solo si el usuario pide explícitamente desplegar desde una rama sin
   fusionar, usa esa rama.

## 1. Detectar archivos modificados

```bash
git diff --name-only origin/main...HEAD
```

(o, si la rama base no es `main`, los commits de la sesión con
`git log --name-only`). **Filtra solo los archivos dentro de `adrihosan/`**.
`CLAUDE.md` y `.claude/` **NO se suben** al servidor.

## 2. Para cada archivo, presenta

- **Nombre** del archivo.
- **Ruta de destino en el servidor**: prefijo
  `wp-content/themes/adrihosan/` + la ruta relativa dentro de `adrihosan/`.
  Ej.: `adrihosan/assets/css/category-4972.css` →
  `wp-content/themes/adrihosan/assets/css/category-4972.css`.
- **Enlace a GitHub formato BLOB** (el usuario descarga con el botón
  "Download raw file"):

  ```
  https://github.com/IAparatodos/Coco/blob/main/{ruta}
  ```

  donde `{ruta}` es la ruta completa desde la raíz del repo (incluyendo el
  prefijo `adrihosan/`). Usa **`main`** salvo indicación contraria.

> **NUNCA** des enlaces `raw.githubusercontent.com` ni pegues el contenido
> del archivo para copiar. Siempre el enlace BLOB.

## 3. Orden de subida obligatorio

1. **Primero** los archivos de `inc/` y `assets/`.
2. **Verificar en FTP** que los bytes del archivo subido coinciden con el
   local (si pesa menos → la subida se cortó → resubir).
3. **`functions.php`** (si cambió) SIEMPRE el **último** (es quien carga los
   anteriores; si lo subes antes y falta un `require`, la web peta).
4. **Purgar LiteSpeed Cache Y OPcache.** Son cachés distintas: LiteSpeed
   cachea HTML, OPcache cachea bytecode PHP compilado. Olvidar OPcache es la
   **causa #1** de "tras purgar caché ahora peta".

## 4. Avisos de interdependencia

Si hay archivos interdependientes, avisa de subirlos **a la vez**. Ejemplo
típico: un JS que llama a un endpoint nuevo definido en un PHP → subir ambos
juntos (si no, el JS llama a algo que aún no existe en el servidor).

## 5. Cierre obligatorio

Termina con el resumen de cambios que exige `CLAUDE.md`:

```
📋 Cambios pendientes de subir:
- Rama: `claude/nombre-rama`
- Archivos: `archivo1.php`, `archivo2.css`
- Estado: ✅ Commit + Push realizado / ⚠️ Pendiente de push
```
