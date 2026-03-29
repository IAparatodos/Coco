---
name: content-creator
description: Crea contenido de marketing optimizado para SEO con la voz de marca de Adrihosan. Incluye analizador de voz de marca, optimizador SEO, frameworks de contenido y plantillas de redes sociales adaptadas al sector cerámico y de reformas. Usar para escribir posts de blog, crear contenido para redes sociales, analizar voz de marca, optimizar SEO, planificar calendarios de contenido, o cuando el usuario mencione creación de contenido, voz de marca, SEO, redes sociales, marketing de contenidos, estrategia de contenido, Adrihosan, azulejos, baldosa hidráulica, cerámica, reformas de baño o cocina.
license: MIT
metadata:
  version: 2.0.0
  author: Adrihosan / Art Project Group
  category: marketing
  domain: content-marketing
  updated: 2026-03-29
  python-tools: brand_voice_analyzer.py, seo_optimizer.py
  tech-stack: SEO, social-media-platforms, WooCommerce, WordPress
  brand: Adrihosan
  language: es
---

# Content Creator — Adrihosan

Creación de contenido profesional con la voz de marca de Adrihosan: análisis de voz de marca, optimización SEO, frameworks de contenido por canal y plantillas de redes sociales para el sector cerámico y de reformas del hogar.

## Identidad de Marca

**Adrihosan** — Tienda online y showroom de cerámica, azulejos, baldosa hidráulica y equipamiento de baño y cocina. Fabricación española, artesanía, diseño y asesoramiento experto.

**Personajes**:
- **Ricardo**: Asesor personal. Cercanía y confianza. "Sin compromiso."
- **AdrIA**: Asistente inteligente. Tips prácticos y directos.
- **Nube**: Mascota Bichón Maltés. Aventuras en Adrihosan (app Coco).

**Tono**: Elegante pero cercano. Inspirador. Experto sin presión. Artesanal. En español.

**Arquetipos**: El Guía (primario) + El Artesano (secundario).

## Keywords

creación de contenido, blog, SEO, voz de marca, redes sociales, calendario de contenido, marketing de contenidos, estrategia de contenido, optimización de contenido, Adrihosan, azulejos, baldosa hidráulica, cerámica española, reformas baño, reformas cocina, porcelánico, diseño interior, revestimientos, pavimentos

## Inicio Rápido

### Para Contenido de Blog
1. Elegir plantilla de `references/content_frameworks.md` (guía estilo, how-to, comparativa, caso éxito)
2. Investigar keywords del tema
3. Escribir siguiendo la plantilla y la voz de marca de `references/brand_guidelines.md`
4. Optimizar SEO: `python scripts/seo_optimizer.py [archivo] [keyword-principal]`
5. Verificar tono Adrihosan con checklist de brand_guidelines
6. Publicar

### Para Redes Sociales
1. Revisar estrategia por plataforma en `references/social_media_optimization.md`
2. Usar plantilla correspondiente de `references/content_frameworks.md`
3. Aplicar hashtags Adrihosan (ver guía de redes)
4. Programar según calendario en `assets/content_calendar_template.md`

### Para Analizar Voz de Marca
1. Ejecutar `python scripts/brand_voice_analyzer.py [archivo]` sobre contenido existente
2. Comparar resultados con atributos definidos en `references/brand_guidelines.md`
3. Ajustar texto para alinear con la voz de Adrihosan

## Workflows Principales

### Crear Artículo de Blog para Adrihosan

1. **Investigar Keywords**
   - Keyword principal (volumen 500-5000/mes)
   - 3-5 keywords secundarias
   - 10-15 keywords LSI relacionadas con cerámica/reformas

2. **Seleccionar Plantilla**
   - Guía de estilo/inspiración: ambientes y tendencias
   - Guía técnica: instalación, sellado, mantenimiento
   - Comparativa: original vs imitación, cerámica vs porcelánico
   - Caso de éxito: proyecto real con antes/después

3. **Escribir con Voz Adrihosan**
   - Hablar de "tú" al cliente
   - Conectar producto con espacio con emoción
   - Incluir Consejo de AdrIA
   - CTA con Ricardo "sin compromiso"
   - Tono elegante-cercano, nunca presión comercial

4. **Optimizar SEO**
   ```bash
   python scripts/seo_optimizer.py articulo.md "keyword principal" "keywords,secundarias"
   ```

5. **Verificar Checklist Pre-Publicación** (ver brand_guidelines.md)

### Crear Contenido para Instagram

1. **Determinar tipo de post** según pilar:
   - Inspiración (35%): Foto ambiente + caption evocador
   - Educación (30%): Carrusel con tips/guía
   - Cercanía (25%): Stories, encuestas, UGC
   - Producto (10%): Novedad con contexto

2. **Aplicar fórmula de caption**:
   - Antes-Después-Puente (proyectos)
   - Problema-Consejo-Solución (educativo)
   - Emoción-Dato-CTA (inspiracional)

3. **Hashtags**: Mezcla marca + producto + nicho (15-25 total)

4. **Verificar**: Primera línea engancha, alt text, tono coherente

### Planificar Calendario Mensual

1. Copiar `assets/content_calendar_template.md`
2. Definir objetivos del mes y campaña clave
3. Distribuir contenido por pilares (35/30/25/10)
4. Asignar temas semanales
5. Crear contenido en batch
6. Programar publicaciones
7. Revisar rendimiento al final del mes

## Scripts

### brand_voice_analyzer.py
Analiza texto para características de voz, legibilidad y consistencia.

**Uso**: `python scripts/brand_voice_analyzer.py <archivo> [json|text]`

**Devuelve**:
- Perfil de voz (formalidad, tono, perspectiva)
- Puntuación de legibilidad
- Análisis de estructura de oraciones
- Recomendaciones de mejora

### seo_optimizer.py
Analiza contenido para optimización SEO con recomendaciones accionables.

**Uso**: `python scripts/seo_optimizer.py <archivo> [keyword_principal] [keywords_secundarias]`

**Devuelve**:
- Puntuación SEO (0-100)
- Análisis de densidad de keywords
- Evaluación de estructura
- Sugerencias de meta tags
- Recomendaciones específicas de optimización

## Guías de Referencia

### Cuándo Usar Cada Referencia

**references/brand_guidelines.md**
- Al crear cualquier contenido para Adrihosan
- Para verificar tono y voz de marca
- Para consultar palabras/expresiones aprobadas
- Para revisar directrices por canal
- Para consultar identidad visual (colores, tipografía)

**references/content_frameworks.md**
- Al empezar cualquier pieza de contenido nueva
- Para estructurar blogs, posts sociales, emails
- Para planificar reutilización de contenido
- Para seguir checklists de calidad

**references/social_media_optimization.md**
- Para optimización específica por plataforma (Instagram, Facebook, WhatsApp, Google Business)
- Para estrategia de hashtags
- Para fórmulas de caption
- Para planificar calendario semanal
- Para métricas y KPIs

## Buenas Prácticas Adrihosan

### Proceso de Creación
1. Empezar siempre por la necesidad del cliente (no el producto)
2. Investigar keywords antes de escribir
3. Elegir plantilla de content_frameworks
4. Escribir primer borrador sin editar
5. Optimizar para SEO
6. Verificar voz de marca Adrihosan
7. Revisar y corregir
8. Adaptar al canal específico
9. Programar estratégicamente

### Indicadores de Calidad
- Puntuación SEO > 75/100
- Legibilidad adecuada para la audiencia
- Voz de marca consistente (elegante + cercana)
- Conexión producto con espacio con emoción
- CTA claro con "sin compromiso"
- Presencia de Ricardo o AdrIA donde corresponda
- Formato optimizado para móvil
- Alt text en todas las imágenes

### Errores a Evitar
- Escribir sin investigar keywords
- Usar presión comercial agresiva
- Descripción de producto sin contexto de espacio
- Tono corporativo frío o excesivamente formal
- Ignorar requisitos específicos de cada plataforma
- Inconsistencia en la voz de marca
- Publicar sin revisar en móvil
- Olvidar CTA o vía de contacto
- Usar anglicismos innecesarios

## Métricas de Éxito

### Contenido
- Tráfico orgánico a adrihosan.com
- Tiempo medio en página
- Posición media en buscadores
- Guardados en Instagram (indica valor)

### Engagement
- Comentarios y conversaciones generadas
- Mensajes directos desde redes
- Consultas por WhatsApp atribuidas a contenido
- Compartidos y guardados

### Negocio
- Leads generados (WhatsApp + email + formulario)
- Presupuestos solicitados
- Ventas atribuidas a contenido
- Coste por lead
- Reseñas en Google Business

## Comandos Rápidos

```bash
# Analizar voz de marca de un texto
python scripts/brand_voice_analyzer.py contenido.txt

# Optimizar SEO de un artículo
python scripts/seo_optimizer.py articulo.md "azulejos baño"

# Optimizar con keywords secundarias
python scripts/seo_optimizer.py articulo.md "baldosa hidraulica" "baldosa,hidraulica original,suelo hidraulico"

# Crear calendario mensual
cp assets/content_calendar_template.md calendario-abril-2026.md
```
