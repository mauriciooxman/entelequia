<?php

declare(strict_types=1);

$assetBase = $pageAssetBase ?? '';
$homePath = $pageHomePath ?? '';
$metaTitle = $pageTitle ?? $siteConfig['title'];
$metaDescription = $pageDescription ?? $siteConfig['description'];
$canonicalUrl = $siteConfig['canonical_url'];

if (isset($pageCanonicalPath) && $canonicalUrl !== '') {
    $canonicalUrl = rtrim($canonicalUrl, '/') . '/' . ltrim($pageCanonicalPath, '/');
}

$bodyClass = $pageBodyClass ?? '';
?>
<!doctype html>
<html lang="es-CL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F9F8F6">
    <meta name="robots" content="index, follow">

    <title><?= e($metaTitle) ?></title>
    <meta name="description" content="<?= e($metaDescription) ?>">

    <?php if ($canonicalUrl !== ''): ?>
        <link rel="canonical" href="<?= e($canonicalUrl) ?>">
    <?php endif; ?>

    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CL">
    <meta property="og:site_name" content="<?= e($siteConfig['name']) ?>">
    <meta property="og:title" content="<?= e($metaTitle) ?>">
    <meta property="og:description" content="<?= e($metaDescription) ?>">
    <?php if ($canonicalUrl !== ''): ?>
        <meta property="og:url" content="<?= e($canonicalUrl) ?>">
    <?php endif; ?>
    <?php if ($siteConfig['social_image_url'] !== ''): ?>
        <meta property="og:image" content="<?= e($siteConfig['social_image_url']) ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="<?= e($siteConfig['social_image_url']) ?>">
    <?php else: ?>
        <meta name="twitter:card" content="summary">
    <?php endif; ?>
    <meta name="twitter:title" content="<?= e($metaTitle) ?>">
    <meta name="twitter:description" content="<?= e($metaDescription) ?>">

    <link rel="icon" href="<?= e($assetBase) ?>assets/img/favicon.png" type="image/png" sizes="512x512">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,500&amp;family=Manrope:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e($assetBase) ?>assets/css/styles.css">
</head>
<body<?= $bodyClass !== '' ? ' class="' . e($bodyClass) . '"' : '' ?>>
    <a class="skip-link" href="#contenido">Saltar al contenido principal</a>

    <header class="site-header" data-header>
        <div class="container nav-wrap">
            <a class="brand" href="<?= e($homePath) ?>#inicio" aria-label="Entelequia CL, ir al inicio">
                <img class="brand__image" src="<?= e($assetBase) ?>assets/img/logo.png" alt="Entelequia CL" width="602" height="559">
            </a>

            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-navigation" aria-label="Abrir menú" data-nav-toggle>
                <span></span>
                <span></span>
            </button>

            <nav class="main-nav" id="main-navigation" aria-label="Navegación principal" data-nav>
                <ul>
                    <li><a href="<?= e($homePath) ?>#inicio">Inicio</a></li>
                    <li><a href="<?= e($homePath) ?>#servicios">Servicios</a></li>
                    <li><a href="<?= e($homePath) ?>#sobre-entelequia">Sobre Entelequia</a></li>
                    <li><a href="<?= e($homePath) ?>#contacto">Contacto</a></li>
                </ul>
                <a class="button button--small button--solid" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer" aria-label="Conversemos por WhatsApp, abre en una pestaña nueva">Conversemos</a>
            </nav>
        </div>
    </header>

    <main id="contenido">
