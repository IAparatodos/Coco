#!/usr/bin/env python3
"""Guardas de edición del tema Adrihosan (repo Coco).

Se llama desde .claude/settings.json en dos momentos:

  adri-guard.py pre   -> PreToolUse  (Edit|Write|MultiEdit): BLOQUEA antes de editar
  adri-guard.py post  -> PostToolUse (Edit|Write|MultiEdit): REVISA lo recién escrito

Reglas (todas salen de CLAUDE.md):

  pre
    - Nada de editar las copias viejas de la raíz (`inc/`, `functions*.php`):
      el tema bueno es `adrihosan/`.
  post
    - `php -l` en todo .php de `adrihosan/`: un parse error subido por FTP tira la web.
    - Ningún JSON-LD `FAQPage` en `adrihosan/inc/category-*.php`: el FAQ schema
      lo emite Rank Math y duplicarlo rompe Search Console.
    - Los `category-*.css` solo pueden usar los colores corporativos. Para no
      dar la lata con los CSS antiguos, solo se avisa de los colores NUEVOS
      (los que no estaban en la versión de HEAD).

Código de salida 2 = Claude Code muestra el mensaje a Claude (y en `pre`
cancela la edición). Cualquier fallo inesperado del propio hook sale con 0
para no bloquear el trabajo.
"""
import json
import os
import re
import shutil
import subprocess
import sys

PALETA = {"#4dd2d0", "#3f6f7b", "#ffffff", "#f0f7f8", "#d4e3e6"}
HEX_RE = re.compile(r"#[0-9a-fA-F]{3,8}\b")
# Solo dentro del mismo <script> (el JSON no lleva "<"), para no saltar con comentarios.
FAQ_RE = re.compile(r'application/ld\+json[^<]*?"@type"\s*:\s*"FAQPage"', re.I)


def bloquear(msg):
    print(msg, file=sys.stderr)
    sys.exit(2)


def norm_hex(h):
    h = h.lower()
    if len(h) == 4:  # #fff -> #ffffff
        h = "#" + "".join(c * 2 for c in h[1:])
    return h


def colores(texto):
    # Ignora comentarios para no saltar con el bloque de cabecera.
    sin_coment = re.sub(r"/\*[\s\S]*?\*/", "", texto)
    return {norm_hex(h) for h in HEX_RE.findall(sin_coment) if len(h) in (4, 7)}


def leer(path):
    try:
        with open(path, encoding="utf-8", errors="replace") as f:
            return f.read()
    except OSError:
        return None


def version_head(root, rel):
    try:
        r = subprocess.run(["git", "-C", root, "show", f"HEAD:{rel}"],
                           capture_output=True, text=True, timeout=10)
        return r.stdout if r.returncode == 0 else ""
    except Exception:
        return ""


def main():
    modo = sys.argv[1] if len(sys.argv) > 1 else ""
    datos = json.load(sys.stdin)
    entrada = datos.get("tool_input") or {}
    ruta = entrada.get("file_path") or ""
    if not ruta:
        return
    root = os.path.realpath(os.environ.get("CLAUDE_PROJECT_DIR") or datos.get("cwd") or ".")
    abs_ruta = os.path.realpath(ruta if os.path.isabs(ruta) else os.path.join(root, ruta))
    if not abs_ruta.startswith(root + os.sep):
        return  # fuera del repo: no es asunto nuestro
    rel = os.path.relpath(abs_ruta, root).replace(os.sep, "/")

    if modo == "pre":
        if rel.startswith("inc/") or re.fullmatch(r"functions[^/]*\.php", rel):
            bloquear(
                f"BLOQUEADO: `{rel}` es una copia vieja de la raíz del repo.\n"
                "El tema que se despliega es `adrihosan/` (ver CLAUDE.md, "
                "'el tema está duplicado'). Edita la ruta equivalente dentro de "
                "`adrihosan/`, p. ej. `adrihosan/" + rel + "`."
            )
        return

    if modo != "post" or not rel.startswith("adrihosan/"):
        return
    texto = leer(abs_ruta)
    if texto is None:
        return
    avisos = []

    if rel.endswith(".php"):
        php = shutil.which("php")
        if php:
            r = subprocess.run([php, "-l", abs_ruta], capture_output=True, text=True, timeout=20)
            if r.returncode != 0:
                salida = (r.stdout + r.stderr).strip().replace(abs_ruta, rel)
                avisos.append(
                    f"ERROR DE SINTAXIS PHP en `{rel}` — subido así tiraría la web:\n{salida}"
                )
        if re.match(r"adrihosan/inc/category-[^/]+\.php$", rel) and FAQ_RE.search(texto):
            avisos.append(
                f"`{rel}` lleva un JSON-LD FAQPage. Está prohibido: el FAQ schema "
                "lo gestiona Rank Math (CLAUDE.md, 'SCHEMA FAQ'). Elimina el bloque "
                "<script type=\"application/ld+json\"> y deja solo el acordeón HTML."
            )

    if re.match(r"adrihosan/assets/css/category-[^/]+\.css$", rel):
        nuevos = colores(texto) - colores(version_head(root, rel)) - PALETA
        if nuevos:
            avisos.append(
                f"`{rel}` introduce colores fuera de la identidad corporativa: "
                f"{', '.join(sorted(nuevos))}.\n"
                "Solo se permiten #4dd2d0, #3f6f7b, #ffffff, #f0f7f8 y #d4e3e6 "
                "(más rgba(63, 111, 123, …) para overlays y sombras). Sustitúyelos."
            )

    if avisos:
        bloquear("\n\n".join(avisos))


if __name__ == "__main__":
    try:
        main()
    except SystemExit:
        raise
    except Exception:
        sys.exit(0)
