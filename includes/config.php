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
    'developer_name' => 'Oxman IT',
    'developer_url' => 'https://www.oxman.cl/',
];

$whatsappNumber = '569XXXXXXXX';
// TODO: reemplazar por número WhatsApp real del cliente.
$whatsappMessage = 'Hola, vi la página de Entelequia CL y quisiera recibir más información sobre sus servicios.';
$whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($whatsappMessage);

/**
 * Los campos de "detalles" están listos para crecer sin duplicar el HTML.
 * Al completar un valor, se mostrará automáticamente en la tarjeta.
 */
$servicios = [
    [
        'titulo' => 'EFT / Tapping',
        'subtitulo' => 'Emotional Freedom Techniques',
        'slug' => 'eft-tapping',
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
];

if (!function_exists('e')) {
    function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
