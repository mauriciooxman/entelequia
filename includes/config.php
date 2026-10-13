<?php

declare(strict_types=1);

/**
 * Configuración general del sitio.
 * Completar los valores marcados como TODO antes de publicar.
 */
$siteConfig = [
    'name' => 'Entelequia CL',
    'tagline' => 'Wellness & Autoconocimiento',
    'title' => 'Entelequia CL | Wellness & Autoconocimiento',
    'description' => 'Un espacio de bienestar y autoconocimiento con herramientas para acompañar tus procesos emocionales desde una mirada integral.',
    'canonical_url' => '', // TODO: agregar URL definitiva, por ejemplo https://dominio.cl/
    'social_image_url' => '', // TODO: agregar URL absoluta de la imagen social al publicar.
    'instagram_handle' => '@entelequiacl',
    'instagram_url' => 'https://www.instagram.com/entelequiacl/',
    'email' => 'holaentelequiacl@gmail.com',
    'developer_name' => 'Oxman IT',
    'developer_url' => 'https://www.oxman.cl/',
];

$whatsappNumber = '56942776762';
$whatsappMessage = 'Hola, vi la página de Entelequia CL y quisiera recibir más información sobre sus servicios.';
$whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappMessage);
$corporateWhatsappMessage = 'Hola, vi la propuesta de Wellness & Wellbeing Corporativo de Entelequia CL y quisiera recibir más información para mi empresa/equipo.';
$corporateWhatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($corporateWhatsappMessage);

// Retrato oficial compartido por la home y la presentación completa.
$nicolePhoto = [
    'src' => 'assets/img/nicole/nicole-viera.webp',
    'width' => 574,
    'height' => 764,
    'alt' => 'Nicole Viera, especialista de Entelequia CL',
];
$nicoleLinkedinUrl = 'https://www.linkedin.com/in/nicole-viera-droguett-31407130b';

// Fotografías reales de Wellness: rutas, dimensiones y textos centralizados para futuros reemplazos.
$wellnessPhotos = [
    'interior' => [
        'src' => 'assets/img/wellness/wellness-corporativo-taller-interior.webp',
        'srcset' => 'assets/img/wellness/wellness-corporativo-taller-interior-640.webp 640w, assets/img/wellness/wellness-corporativo-taller-interior-960.webp 960w, assets/img/wellness/wellness-corporativo-taller-interior.webp 1451w',
        'width' => 1451,
        'height' => 1084,
        'alt' => 'Jornada grupal de bienestar y autorregulación de Entelequia CL',
    ],
    'exterior' => [
        'src' => 'assets/img/wellness/wellness-corporativo-experiencia-exterior.webp',
        'srcset' => 'assets/img/wellness/wellness-corporativo-experiencia-exterior-640.webp 640w, assets/img/wellness/wellness-corporativo-experiencia-exterior.webp 1114w',
        'width' => 1114,
        'height' => 1412,
        'alt' => 'Experiencia grupal de bienestar de Entelequia CL en un entorno al aire libre',
    ],
];

/**
 * Los campos de "detalles" están listos para crecer sin duplicar el HTML.
 * Al completar un valor, se mostrará automáticamente en la tarjeta.
 */
$servicios = [
    [
        'titulo' => 'EFT / Tapping',
        'subtitulo' => 'Emotional Freedom Techniques',
        'slug' => 'eft-tapping',
        'linea' => 'Bienestar personal',
        'descripcion' => 'Una herramienta que combina atención consciente, tapping y verbalización para acompañar diferentes experiencias emocionales.',
        'imagen' => 'assets/img/servicios/eft-tapping.jpg',
        'alt' => 'Manos en un gesto sereno de conexión personal',
        'badge' => '',
        'cta' => 'Conocer EFT / Tapping',
        'href' => 'servicios/eft-tapping.php',
        'detalles' => [
            'duracion' => '',
            'sesiones' => '',
            'metodologia' => '',
            'beneficios' => [],
            'modalidad' => '',
            'precio' => '',
            'preguntas_frecuentes' => [],
        ],
    ],
    [
        'titulo' => 'Híbrido Emocional',
        'subtitulo' => 'Un recorrido emocional',
        'slug' => 'hibrido-emocional',
        'linea' => 'Bienestar personal',
        'descripcion' => 'Un recorrido de cuatro sesiones para explorar emociones, experiencias, miedos y sensaciones corporales.',
        'imagen' => 'assets/img/servicios/hibrido-emocional.jpg',
        'alt' => 'Cuatro piezas de cerámica que representan distintas etapas de un proceso',
        'badge' => '4 sesiones',
        'cta' => 'Conocer el proceso',
        'href' => 'servicios/hibrido-emocional.php',
        'detalles' => [
            'duracion' => '',
            'sesiones' => '',
            'metodologia' => '',
            'beneficios' => [],
            'modalidad' => '',
            'precio' => '',
            'preguntas_frecuentes' => [],
        ],
    ],
    [
        'titulo' => 'Wellness & Wellbeing Corporativo',
        'subtitulo' => 'Jornadas de autorregulación y bienestar',
        'slug' => 'wellness-corporativo',
        'linea' => 'Bienestar para organizaciones',
        'descripcion' => 'Jornadas de bienestar laboral diseñadas para generar espacios de pausa, conciencia y autorregulación dentro de la jornada de trabajo.',
        'descripcion_secundaria' => 'Experiencias de 90 minutos con herramientas prácticas de EFT Tapping, mindfulness, respiración consciente y meditación.',
        'imagen' => $wellnessPhotos['interior']['src'],
        'imagen_srcset' => $wellnessPhotos['interior']['srcset'],
        'imagen_width' => $wellnessPhotos['interior']['width'],
        'imagen_height' => $wellnessPhotos['interior']['height'],
        'alt' => $wellnessPhotos['interior']['alt'],
        'badge' => 'Para empresas y equipos',
        'cta' => 'Conocer Wellness Corporativo',
        'href' => 'servicios/wellness-corporativo.php',
        'detalles' => [],
    ],
];

if (!function_exists('e')) {
    function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
