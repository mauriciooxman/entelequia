<?php

declare(strict_types=1);

require dirname(__DIR__) . '/includes/config.php';

$pageTitle = 'EFT / Tapping | Entelequia CL';
$pageDescription = 'Conoce EFT / Tapping y el enfoque de acompañamiento emocional utilizado por Entelequia CL.';
$pageCanonicalPath = 'servicios/eft-tapping.php';
$pageAssetBase = '../';
$pageHomePath = '../index.php';
$pageBodyClass = 'service-page service-page--eft';

$situaciones = [
    'Recuerdos emocionalmente intensos',
    'Temores y preocupaciones',
    'Situaciones que generan ansiedad',
    'Bloqueos emocionales',
    'Experiencias difíciles',
    'Regulación emocional',
];

require dirname(__DIR__) . '/includes/header.php';
?>

<section class="service-detail-hero" aria-labelledby="service-title">
    <div class="service-detail-hero__wash" aria-hidden="true"></div>
    <div class="container service-detail-hero__grid">
        <div class="service-detail-hero__content reveal">
            <a class="back-link" href="../index.php#servicios"><span aria-hidden="true">←</span> Volver a servicios</a>
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">EFT / Tapping</span></p>
            <p class="service-kicker">Emotional Freedom Techniques</p>
            <h1 id="service-title">Una herramienta para acompañar tus emociones</h1>
            <p class="service-detail-hero__lead">EFT, también conocido como Tapping, es una práctica de acompañamiento emocional que combina la atención sobre una emoción, recuerdo o situación con una secuencia de golpeteos suaves y verbalización consciente.</p>
        </div>

        <div class="service-detail-hero__visual reveal reveal--delay">
            <div class="service-detail-hero__outline" aria-hidden="true"></div>
            <img src="../assets/img/servicios/eft-tapping.jpg" alt="Manos en un gesto sereno de conexión personal" width="1200" height="800" fetchpriority="high">
            <img class="service-detail-hero__symbol" src="../assets/img/favicon.png" alt="" width="512" height="512" aria-hidden="true">
        </div>
    </div>
</section>

<section class="service-explainer section" aria-labelledby="what-is-eft">
    <div class="container service-explainer__grid">
        <div class="section-heading reveal">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">La práctica</span></p>
            <h2 id="what-is-eft">¿En qué <em>consiste?</em></h2>
        </div>
        <div class="service-explainer__copy reveal reveal--delay">
            <p class="service-explainer__lead">Durante el proceso se lleva la atención hacia aquello que genera malestar emocional mientras se realiza una secuencia de tapping en diferentes puntos del cuerpo y se utilizan frases o afirmaciones relacionadas con la experiencia que se está trabajando.</p>
            <p>El objetivo es acompañar a la persona en la observación de sus emociones y favorecer una respuesta emocional más tranquila frente a determinados recuerdos o situaciones.</p>
        </div>
    </div>
</section>

<section class="explore section" aria-labelledby="explore-title">
    <div class="container">
        <div class="explore__header reveal">
            <div class="section-heading">
                <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Acompañamiento emocional</span></p>
                <h2 id="explore-title">Situaciones que podemos <em>explorar</em></h2>
            </div>
            <p>Estas experiencias se abordan como parte de un proceso de observación y acompañamiento personal, no como diagnósticos ni promesas de resultados.</p>
        </div>

        <div class="explore__grid">
            <?php foreach ($situaciones as $index => $situacion): ?>
                <article class="explore-card reveal">
                    <span aria-hidden="true"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    <h3><?= e($situacion) ?></h3>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="service-phrase" aria-label="Una mirada diferente sobre las emociones">
    <div class="service-phrase__orbit" aria-hidden="true"></div>
    <div class="container service-phrase__content reveal">
        <img src="../assets/img/favicon.png" alt="" width="512" height="512" aria-hidden="true" loading="lazy">
        <blockquote>“Observar una emoción desde un lugar diferente puede transformar la manera en que nos relacionamos con ella.”</blockquote>
    </div>
</section>

<section class="service-final-cta section" aria-labelledby="eft-cta-title">
    <div class="container">
        <div class="service-final-cta__panel reveal">
            <p class="eyebrow eyebrow--light"><span aria-hidden="true"></span><span class="eyebrow__text">Conversemos</span></p>
            <h2 id="eft-cta-title">¿Quieres conocer más sobre EFT / Tapping?</h2>
            <a class="button button--light" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer">Consultar por WhatsApp</a>
        </div>
    </div>
</section>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
