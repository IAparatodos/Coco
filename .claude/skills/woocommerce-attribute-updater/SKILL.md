---
name: woocommerce-attribute-updater
description: Bulk update WooCommerce product taxonomy attributes (color, estancia, formato, aspecto) from CSV files. Use when the user wants to update, modify, or assign product attributes in bulk via CSV for their Adrihosan WooCommerce store. Triggers include mentions of "atributos", "actualizar productos", "CSV de productos", "formato azulejo", "color", "estancia", "aspecto", bulk attribute operations, or references to updating pa_color, pa_estancia, pa_formato-azulejo, pa_aspecto-azulejo. Also use when the user uploads a CSV with columns like "Color del producto", "Formato del azulejo del producto", etc.
---

# WooCommerce Attribute Updater

Bulk-update 4 taxonomy attributes on WooCommerce products from CSV files using a PHP script executed on the server.

## Target Attributes

| CSV Column | WooCommerce Taxonomy |
|---|---|
| Color del producto | pa_color |
| Estancia del producto | pa_estancia |
| Formato del azulejo del producto | pa_formato-azulejo |
| Aspecto azulejo del producto | pa_aspecto-azulejo |

## CSV Format

Required columns: `ID`, `Title`, plus any of the 4 attribute columns above.

- Multiple values separated by `|` (e.g., `baño|Cocina`)
- Format values use `|` for term + parent (e.g., `7.5X15|Azulejos de pequeño formato para baños y cocinas`)
- Empty attribute columns are skipped (existing values preserved)

## Workflow

### 1. Analyze the CSV

```python
import csv
with open('file.csv', 'r') as f:
    reader = csv.DictReader(f)
    rows = list(reader)
    print(f'Total: {len(rows)}')
    print(f'Columnas: {reader.fieldnames}')
    formatos = set(r['Formato del azulejo del producto'] for r in rows)
    colores = set(r['Color del producto'] for r in rows)
    estancias = set(r['Estancia del producto'] for r in rows)
    aspectos = set(r['Aspecto azulejo del producto'] for r in rows)
    print(f'Formatos: {formatos}')
    print(f'Colores: {colores}')
    print(f'Estancias: {estancias}')
    print(f'Aspectos: {aspectos}')
    empty = [r['ID'] for r in rows if not r['Estancia del producto'].strip()]
    if empty: print(f'Estancia vacía: {len(empty)} productos')
```

### 2. Fix CSV Issues (if needed)

Common issues to detect and fix:

- **Empty Estancia column**: Fill with `baño|Cocina` (default for small format tiles)
- **Wrong characters in Formato**: Replace `×` (UTF-8 multiplication sign) with `X`
- **Trailing spaces**: Strip whitespace from format values
- **Term naming**: Check if terms like `metalizado` vs `Metálico` match existing WooCommerce terms. Ask the user when unsure.

### 3. Configure the PHP Script

Copy `scripts/actualizar-atributos.php` to the WordPress root on the server. Update two settings:

1. `$csv_path` — Point to the CSV filename
2. `$dry_run` — Set `true` for validation, `false` for execution

### 4. Execute: Dry Run → Review → Real Run

Always follow this sequence:

1. Set `$dry_run = true`, share script + CSV with user
2. User runs on server, pastes output
3. Review output: verify term IDs, check new terms, confirm 0 errors
4. Set `$dry_run = false`, share updated script
5. User runs again, confirm final count matches

### 5. Report Results

After execution, confirm: `X/X productos actualizados, 0 errores`. Note any new terms created with their IDs.

## Known Term IDs (Adrihosan)

### Colors
Blanco(1110), Beige(1112), Negro(1119), Gris(1232), Amarillo(1250), Verde(1251), Rosa(1252), Marrón(1373), Azul(1760), Rojo(1860), Naranja(1913), metalizado(1931), Morado(1945), Multicolor(1233)

### Estancias
baño(4897), Cocina(4898), Piscina(4900), Salón(4934)

### Formatos (existing as of Feb 2026)
5X25(4984), 7.5X15(4936), 6,5x25, 7x28(4989), 8x31,5, 10X20(4935), 10X30(4983), 10x10(4991), 13x13(4986), 7,5x33,5(4992)

### Aspecto
Básicos(505), Liso(4907), biselado(4981), rústico(4932)

### Parent terms
Azulejos de pequeño formato para baños y cocinas(507)

## Important Notes

- The script preserves ALL existing attributes not in the 4 target taxonomies
- Terms are auto-created if they don't exist — verify spelling matches existing terms first
- Always ask the user before creating new terms if the name seems like a variant of an existing term
- CSV and PHP script must be deleted from server after finishing (security)
