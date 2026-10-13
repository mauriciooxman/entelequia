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
- Fotografía oficial de Nicole Viera: la imagen ambiental actual es provisional y no representa un retrato de la especialista.
- Confirmar el dominio de producción (`www.entelequiacl.cl` fue suministrado por la clienta) antes de activar canonical, Open Graph URL y sitemap. La configuración conserva su estado previo sin dominio de producción.

## Editar o agregar servicios

Los servicios se gestionan en el array `$servicios` de `includes/config.php`. Cada elemento admite:

- `titulo`
- `subtitulo`
- `slug`
- `descripcion`
- `imagen`
- `alt`
- `badge`
- `linea`: bienestar personal o bienestar para organizaciones.
- `descripcion_secundaria`: texto opcional bajo la descripción.
- `cta`
- `href`
- `detalles`: duración, sesiones, metodología, beneficios, modalidad, precio y preguntas frecuentes.

Las tarjetas de la home se generan automáticamente desde `index.php`. El contenido completo vive en las páginas individuales de `servicios/`.

## Imágenes provisionales

Las cuatro fotografías incluidas fueron generadas específicamente para esta maqueta y optimizadas como JPG. Son placeholders editoriales originales; conviene reemplazar el hero y la sección “Sobre Entelequia” por fotografías oficiales del cliente antes del lanzamiento.

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
