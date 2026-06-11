#!/bin/bash
# SessionStart hook — Adrihosan (repo Coco)
# Regla de CLAUDE.md: al iniciar un chat, partir SIEMPRE de la rama más
# reciente funcional (no asumir que el código local está actualizado).
# Este hook actualiza las refs remotas y muestra las ramas recientes para
# que Claude (y el usuario) elijan la base correcta antes de tocar nada.
set -uo pipefail

cd "${CLAUDE_PROJECT_DIR:-.}" || exit 0

# Sin red o sin remoto no rompemos el arranque de la sesión.
git fetch --all --quiet 2>/dev/null || true

actual=$(git rev-parse --abbrev-ref HEAD 2>/dev/null || echo "?")
echo "== Adrihosan / Coco — contexto de ramas =="
echo "Rama actual: ${actual}"

# ¿La rama actual está por detrás de su origin?
detras=$(git rev-list --count "HEAD..origin/${actual}" 2>/dev/null || echo "0")
if [ "${detras}" != "0" ]; then
    echo "⚠️  La rama actual está ${detras} commit(s) POR DETRÁS de origin/${actual} → haz 'git pull --rebase' antes de trabajar."
fi

echo ""
echo "Ramas remotas más recientes (committerdate):"
git for-each-ref --sort=-committerdate refs/remotes/origin \
    --format='%(committerdate:short)  %(refname:short)  —  %(subject)' 2>/dev/null \
    | grep -v 'origin/HEAD' | head -6

echo ""
echo "REGLA CLAUDE.md: trabaja desde la rama más reciente funcional."
echo "Si no está claro cuál es la base correcta, PREGUNTA al usuario antes de empezar."
