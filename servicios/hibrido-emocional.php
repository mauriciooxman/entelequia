<?php

declare(strict_types=1);

require dirname(__DIR__) . '/includes/config.php';

$pageTitle = 'Híbrido Emocional | Entelequia CL';
$pageDescription = 'Conoce el proceso Híbrido Emocional de Entelequia CL y sus cuatro sesiones de exploración y autoconocimiento.';
$pageCanonicalPath = 'servicios/hibrido-emocional.php';
$pageAssetBase = '../';
$pageHomePath = '../index.php';
$pageBodyClass = 'service-page service-page--hybrid';

$sesiones = [
    [
        'numero' => '01',
        'titulo' => 'Emociones atrapadas',
        'parrafos' => [
            'Esta sesión está orientada a identificar y explorar emociones que la persona percibe como persistentes o vinculadas a determinadas experiencias.',
            'Desde el enfoque utilizado por Entelequia también pueden observarse patrones emocionales que la persona relaciona con experiencias familiares, aprendizajes previos o distintas etapas de su historia personal.',
        ],
    ],
    [
        'numero' => '02',
        'titulo' => 'Estresores emocionales',
        'parrafos' => [
            'En esta sesión se exploran emociones intensas relacionadas con momentos de estrés, experiencias difíciles o situaciones que han dejado una carga emocional significativa.',
            'El objetivo es observar cómo determinadas experiencias siguen influyendo emocionalmente y acompañar su reconocimiento desde una perspectiva más consciente.',
        ],
    ],
    [
        'numero' => '03',
        'titulo' => 'Miedos y fobias',
        'parrafos' => [
            'Esta sesión permite explorar miedos, inseguridades, respuestas emocionales intensas o situaciones que generan temor.',
            'Se trabaja identificando aquello que activa estas respuestas y observando cómo se manifiestan en la experiencia personal y cotidiana.',
        ],
    ],
    [
        'numero' => '04',
        'titulo' => 'Columna y emociones',
        'parrafos' => [
            'Esta sesión incorpora una mirada corporal al proceso emocional, poniendo atención en la columna y en las sensaciones que aparecen durante el recorrido.',
            'Desde la metodología de Entelequia se explora la posible relación que la persona percibe entre determinadas sensaciones corporales, recuerdos y experiencias emocionales.',
            'El trabajo invita a observar el cuerpo como otra fuente de información dentro del proceso de autoconocimiento.',
        ],
    ],
];

require dirname(__DIR__) . '/includes/header.php';
?>

<section class="service-detail-hero service-detail-hero--hybrid" aria-labelledby="service-title">
    <div class="service-detail-hero__wash" aria-hidden="true"></div>
    <div class="container service-detail-hero__grid">
        <div class="service-detail-hero__content reveal">
            <a class="back-link" href="../index.php#servicios"><span aria-hidden="true">←</span> Volver a servicios</a>
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Híbrido Emocional</span></p>
            <p class="service-kicker">Proceso de 4 sesiones</p>
            <h1 id="service-title">Un recorrido emocional en 4 sesiones</h1>
            <p class="service-detail-hero__lead">El Híbrido Emocional es una metodología utilizada por Entelequia para explorar diferentes dimensiones de la experiencia emocional a través de cuatro encuentros.</p>
            <p>Cada sesión aborda una perspectiva diferente, permitiendo observar emociones, experiencias y sensaciones que pueden estar influyendo en nuestro bienestar.</p>
        </div>

        <div class="service-detail-hero__visual reveal reveal--delay">
            <div class="service-detail-hero__outline" aria-hidden="true"></div>
            <img src="../assets/img/servicios/hibrido-emocional.jpg" alt="Cuatro piezas de cerámica que representan las etapas del proceso" width="1200" height="800" fetchpriority="high">
            <span class="service-detail-hero__badge">4 sesiones</span>
        </div>
    </div>
</section>

<section class="journey section" aria-labelledby="journey-title">
    <div class="container">
        <div class="journey__header reveal">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">El recorrido</span></p>
            <h2 id="journey-title">Cuatro encuentros, <em>cuatro miradas</em></h2>
            <p>Cada etapa abre un espacio distinto de observación dentro de un proceso conectado y personal.</p>
        </div>

        <div class="journey__steps">
            <?php foreach ($sesiones as $sesion): ?>
                <article class="journey-step reveal">
                    <div class="journey-step__number" aria-hidden="true"><?= e($sesion['numero']) ?></div>
                    <div class="journey-step__content">
                        <p class="journey-step__label">Sesión <?= e($sesion['numero']) ?></p>
                        <h3><?= e($sesion['titulo']) ?></h3>
                        <?php foreach ($sesion['parrafos'] as $parrafo): ?>
                            <p><?= e($parrafo) ?></p>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="process-closing section" aria-labelledby="personal-process-title">
    <div class="container process-closing__grid">
        <div class="process-closing__symbol reveal" aria-hidden="true">
            <img src="../assets/img/favicon.png" alt="" width="512" height="512" loading="lazy">
        </div>
        <div class="process-closing__content reveal reveal--delay">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Al finalizar el recorrido</span></p>
            <h2 id="personal-process-title">Un proceso <em>personal</em></h2>
            <p>Cada persona vive y experimenta sus emociones de manera diferente. Por eso, el proceso se adapta al ritmo, necesidades y experiencias de cada consultante.</p>
            <a class="button button--solid" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer">Quiero conocer el Híbrido Emocional</a>
            <a class="text-link process-closing__link" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer">Consultar por WhatsApp <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</section>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
