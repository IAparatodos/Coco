<?php
/**
 * Script para actualizar atributos taxonómicos de productos WooCommerce
 * Solo modifica: pa_color, pa_estancia, pa_formato-azulejo, pa_aspecto-azulejo
 * Deja intactos todos los demás atributos del producto.
 *
 * USO:
 * 1. Sube este archivo a la raíz de tu WordPress (donde está wp-load.php)
 * 2. Sube el CSV en la misma carpeta (o ajusta $csv_path)
 * 3. Ejecuta en el navegador: https://tudominio.com/actualizar-atributos.php
 * 4. Revisa el log en pantalla
 * 5. ELIMINA este archivo cuando termines (seguridad)
 */

// Cargar WordPress
require_once(__DIR__ . '/wp-load.php');

// =====================================================
// CONFIGURACIÓN
// =====================================================
$csv_path = __DIR__ . '/productos.csv'; // Cambiar al nombre del CSV
$separator = '|'; // Separador de valores múltiples en el CSV
$dry_run = true; // true = solo muestra qué haría, false = ejecuta los cambios

// Mapeo: columna CSV => taxonomía WooCommerce
$attribute_map = [
    'Color del producto'              => 'pa_color',
    'Estancia del producto'           => 'pa_estancia',
    'Formato del azulejo del producto' => 'pa_formato-azulejo',
    'Aspecto azulejo del producto'    => 'pa_aspecto-azulejo',
];

// =====================================================
// EJECUCIÓN
// =====================================================
echo "<pre>\n";
echo "===========================================\n";
echo $dry_run ? "🔍 MODO DRY RUN (no se harán cambios)\n" : "🚀 MODO EJECUCIÓN REAL\n";
echo "===========================================\n\n";

// Leer CSV
if (!file_exists($csv_path)) {
    die("❌ No se encuentra el archivo CSV: $csv_path\n");
}

$handle = fopen($csv_path, 'r');
if (!$handle) {
    die("❌ No se puede abrir el archivo CSV\n");
}

// Leer cabeceras
$headers = fgetcsv($handle);
if (!$headers) {
    die("❌ El CSV está vacío o mal formateado\n");
}

// Limpiar BOM si existe
$headers[0] = preg_replace('/\x{FEFF}/u', '', $headers[0]);

$processed = 0;
$errors = 0;
$updated = 0;

while (($row = fgetcsv($handle)) !== false) {
    $data = array_combine($headers, $row);
    $product_id = intval($data['ID']);
    $processed++;

    echo "-------------------------------------------\n";
    echo "Producto ID: $product_id\n";
    echo "Título: {$data['Title']}\n\n";

    // Verificar que el producto existe
    $product = wc_get_product($product_id);
    if (!$product) {
        echo "  ❌ Producto no encontrado. Saltando.\n\n";
        $errors++;
        continue;
    }

    // Obtener atributos actuales del producto
    $existing_attributes = $product->get_attributes();

    echo "  Atributos actuales: " . count($existing_attributes) . "\n";

    $changes_made = false;

    foreach ($attribute_map as $csv_column => $taxonomy) {
        if (!isset($data[$csv_column]) || trim($data[$csv_column]) === '') {
            echo "  ⏭️  $taxonomy: columna vacía, se mantiene sin cambios\n";
            continue;
        }

        $raw_value = trim($data[$csv_column]);
        $values = array_map('trim', explode($separator, $raw_value));
        $values = array_filter($values); // Eliminar vacíos

        echo "  📝 $taxonomy: " . implode(', ', $values) . "\n";

        // Obtener el ID del atributo (taxonomy)
        $attribute_id = wc_attribute_taxonomy_id_by_name($taxonomy);
        if (!$attribute_id) {
            echo "    ❌ Taxonomía '$taxonomy' no encontrada en WooCommerce. Saltando.\n";
            $errors++;
            continue;
        }

        // Crear términos si no existen y obtener sus IDs
        $term_ids = [];
        foreach ($values as $value) {
            $term = get_term_by('name', $value, $taxonomy);
            if (!$term) {
                // Intentar por slug
                $slug = sanitize_title($value);
                $term = get_term_by('slug', $slug, $taxonomy);
            }
            if (!$term) {
                if ($dry_run) {
                    echo "    ℹ️  Término '$value' no existe. Se crearía automáticamente.\n";
                    $term_ids[] = -1; // Placeholder
                } else {
                    $new_term = wp_insert_term($value, $taxonomy);
                    if (is_wp_error($new_term)) {
                        echo "    ❌ Error creando término '$value': " . $new_term->get_error_message() . "\n";
                        $errors++;
                        continue;
                    }
                    $term_ids[] = $new_term['term_id'];
                    echo "    ✅ Término '$value' creado (ID: {$new_term['term_id']})\n";
                }
            } else {
                $term_ids[] = $term->term_id;
                echo "    ✅ Término '$value' encontrado (ID: {$term->term_id})\n";
            }
        }

        if (!$dry_run) {
            // Preservar configuración del atributo existente si ya existe
            $variation = false;
            $visible = true;
            $position = 0;

            if (isset($existing_attributes[$taxonomy])) {
                $old_attr = $existing_attributes[$taxonomy];
                $variation = $old_attr->get_variation();
                $visible = $old_attr->get_visible();
                $position = $old_attr->get_position();
            }

            // Crear nuevo objeto de atributo
            $attribute = new WC_Product_Attribute();
            $attribute->set_id($attribute_id);
            $attribute->set_name($taxonomy);
            $attribute->set_options($term_ids);
            $attribute->set_position($position);
            $attribute->set_visible($visible);
            $attribute->set_variation($variation);

            // Reemplazar solo este atributo en el array existente
            $existing_attributes[$taxonomy] = $attribute;
            $changes_made = true;

            // Asignar términos al producto en la taxonomía
            wp_set_object_terms($product_id, $term_ids, $taxonomy);
        } else {
            $changes_made = true;
        }
    }

    if ($changes_made && !$dry_run) {
        $product->set_attributes($existing_attributes);
        $product->save();
        echo "\n  ✅ Producto actualizado. Atributos totales: " . count($existing_attributes) . "\n";
        $updated++;
    } elseif ($changes_made && $dry_run) {
        echo "\n  🔍 [DRY RUN] Se actualizarían los atributos mostrados arriba.\n";
        echo "  🔍 Atributos totales se mantendrían en: " . count($existing_attributes) . "\n";
        $updated++;
    }

    echo "\n";
}

fclose($handle);

echo "===========================================\n";
echo "RESUMEN\n";
echo "===========================================\n";
echo "Productos procesados: $processed\n";
echo "Productos actualizados: $updated\n";
echo "Errores: $errors\n";
echo $dry_run ? "\n⚠️  MODO DRY RUN: No se realizaron cambios.\n" : "\n✅ Cambios aplicados.\n";
echo "Para " . ($dry_run ? "ejecutar de verdad" : "volver a modo prueba") . ", cambia \$dry_run a " . ($dry_run ? "false" : "true") . "\n";
echo "</pre>\n";
