# Entelequia CL

Landing page responsive para Entelequia CL, desarrollada con PHP 8+, HTML5, CSS3 y JavaScript vanilla. No utiliza base de datos, frameworks ni proceso de compilación.

## Estructura

```text
/
├── index.php
├── robots.txt
├── sitemap.xml
├── servicios/
│   ├── eft-tapping.php
│   ├── hibrido-emocional.php
│   └── wellness-corporativo.php
├── assets/
│   ├── css/styles.css
│   ├── js/main.js
│   └── img/
│       ├── favicon.png
│       ├── logo.png
│       ├── hero/hero-entelequia.jpg
│       ├── servicios/
│       │   ├── eft-tapping.jpg
│       │   └── hibrido-emocional.jpg
│       └── about/sobre-entelequia.jpg
└── includes/
    ├── config.php
    ├── header.php
    ├── nicole.php
    └── footer.php
```

El logo oficial se encuentra en `assets/img/logo.png`. El favicon utiliza el símbolo solar de la misma identidad visual.

## Requisitos

- PHP 8.0 o superior.
- Apache (XAMPP, cPanel o hosting compartido) o el servidor integrado de PHP para desarrollo.
- Conexión a internet para cargar las fuentes de Google Fonts. Si no hay conexión, se utilizan las fuentes de respaldo del sistema.

## Ejecutar localmente

### Con el servidor integrado de PHP

Desde la carpeta del proyecto:

```bash
php -S localhost:8000
```

Luego abrir `http://localhost:8000`.

### Con XAMPP

1. Copiar la carpeta del proyecto dentro de `htdocs`.
2. Iniciar Apache desde el panel de XAMPP.
3. Abrir `http://localhost/nombre-de-la-carpeta/`.

No se necesitan migraciones, variables de entorno ni instalación de dependencias.

## Configuración antes de publicar

Editar `includes/config.php` y completar:

1. `canonical_url` con el dominio definitivo.
2. `social_image_url` con la URL absoluta de la imagen para compartir.
3. El número de WhatsApp, correo, URL y usuario de Instagram, si cambian.

Actualizar también:

- `robots.txt`: habilitar la línea `Sitemap` con el dominio definitivo.
- `sitemap.xml`: completar las URLs de inicio y los tres servicios con el dominio confirmado. Por ahora no contiene entradas activas para evitar publicar URLs de ejemplo.
- Confirmar el dominio de producción (`www.entelequiacl.cl` fue suministrado por la clienta) antes de activar canonical, Open Graph URL y sitemap. La configuración conserva su estado previo sin dominio de producción.

## Editar o agregar servicios

Los servicios se gestionan en el array `$servicios` de `includes/config.php`. Cada elemento admite:

- `titulo`
- `subtitulo`
- `slug`
- `descripcion`
- `imagen`
- `imagen_srcset`, `imagen_width`, `imagen_height`: variantes responsive y dimensiones opcionales.
- `alt`
- `badge`
- `linea`: bienestar personal o bienestar para organizaciones.
- `descripcion_secundaria`: texto opcional bajo la descripción.
- `cta`
- `href`
- `detalles`: duración, sesiones, metodología, beneficios, modalidad, precio y preguntas frecuentes.

Las tarjetas de la home se generan automáticamente desde `index.php`. El contenido completo vive en las páginas individuales de `servicios/`.

## Imágenes provisionales

Las cuatro fotografías JPG originales fueron generadas específicamente para esta maqueta. Se conservan los archivos; el hero y las imágenes de EFT / Tapping e Híbrido Emocional siguen siendo provisionales. La presentación de Nicole en la home y en Wellness Corporativo ya utiliza su retrato real.

## Fotografías reales de Wellness Corporativo

Las dos fotografías suministradas por la clienta están en `assets/img/wellness/`. Se conservan los PNG adjuntos y se sirven versiones WebP de calidad alta, sin filtros ni cambios en las personas. Las rutas, variantes, dimensiones y alt están centralizados en `$wellnessPhotos` de `includes/config.php`.

- `wellness-corporativo-taller-interior`: original de 1451 × 1084 px y WebP de 640, 960 y 1451 px. Se utiliza en la tarjeta corporativa de la home (reemplaza la imagen provisional del cuaderno) y en “Una pausa consciente dentro de la jornada laboral”. Mantiene el encuadre completo en todos los tamaños.
- `wellness-corporativo-experiencia-exterior`: original de 1114 × 1412 px y WebP de 640 y 1114 px. Acompaña “¿Qué busca generar esta experiencia?”. Hasta 1023 px mantiene el formato vertical completo; desde 1024 px usa un encuadre cuadrado con `object-position: center 90%`, reduciendo cielo y césped y conservando el grupo.

Todas estas apariciones usan `srcset`, `sizes`, dimensiones explícitas, `loading="lazy"` y `decoding="async"`. Los originales PNG no se descargan en las páginas. El hero corporativo conserva su composición gráfica; las imágenes de EFT / Tapping, Híbrido Emocional y los demás placeholders se mantienen.

## Retrato oficial de Nicole Viera

`assets/img/nicole/nicole-viera.webp` es la fotografía real suministrada por la clienta, optimizada a calidad alta (574 × 764 px) sin filtros, retoques ni alteraciones faciales. Se conserva el PNG adjunto. Su ruta, dimensiones y alt se centralizan en `$nicolePhoto` de `includes/config.php`.

Reemplaza la imagen provisional del cuaderno en `includes/nicole.php` (presentación completa, incluida una vez en Wellness Corporativo) y en “Sobre Entelequia” de la home. La home conserva su contenido institucional y añade únicamente una introducción breve con “Conocer más”, que enlaza a `servicios/wellness-corporativo.php#nicole`. Las fotos grupales de Wellness se mantienen.

El retrato conserva la proporción original en móvil; desde 768 px se muestra en 4:5 con `object-position: center 25%`, manteniendo el rostro y reduciendo ligeramente los márgenes verticales. Usa bordes redondeados, `object-fit: cover`, dimensiones explícitas, `loading="lazy"` y `decoding="async"`. LinkedIn utiliza un texto breve, nueva pestaña y `rel="noopener noreferrer"`. La biografía conserva exclusivamente los tres párrafos entregados por la clienta.

## Consideraciones

- Todos los accesos a WhatsApp usan una única variable centralizada.
- El teléfono oficial ya configurado es el entregado por la clienta. Los CTA de Wellness Corporativo usan un mensaje específico codificado con `rawurlencode`, también centralizado en `includes/config.php`.
- Existen exactamente tres servicios: EFT / Tapping, Híbrido Emocional y Wellness & Wellbeing Corporativo. Este último cuenta con página propia, cuatro herramientas, cuatro modalidades sin precios y un ciclo Inicio / Peak / Cierre adaptable a móvil.
- No existe formulario de contacto ni base de datos.
- El año del copyright se genera dinámicamente con PHP.
- Las animaciones respetan `prefers-reduced-motion`.
- La navegación móvil admite teclado y cierre con `Escape`.
- Nicole Viera se presenta únicamente con los datos suministrados: 8 años en terapia y 8 años en turismo y hotelería, sin títulos, estudios ni certificaciones añadidos.
- Las páginas individuales incluyen títulos, descripciones SEO y canonical preparado a partir de `canonical_url`.
