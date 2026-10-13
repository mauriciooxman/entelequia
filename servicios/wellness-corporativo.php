<?php

declare(strict_types=1);

require dirname(__DIR__) . '/includes/config.php';

$pageTitle = 'Wellness Corporativo | Entelequia CL';
$pageDescription = 'Jornadas de autorregulación y bienestar para empresas y equipos con EFT Tapping, mindfulness, respiración consciente y meditación.';
$pageCanonicalPath = 'servicios/wellness-corporativo.php';
$pageAssetBase = '../';
$pageHomePath = '../index.php';
$pageBodyClass = 'service-page service-page--corporate';
// También los CTA compartidos usan el mensaje específico de esta propuesta.
$whatsappUrl = $corporateWhatsappUrl;

$herramientas = [
    ['EFT Tapping', 'Práctica de atención y estimulación de puntos específicos del cuerpo, utilizada como herramienta de autorregulación y conciencia emocional.'],
    ['Mindfulness', 'Prácticas de atención plena para favorecer la presencia, el reconocimiento del propio estado y la conexión con el momento presente.'],
    ['Respiración consciente', 'Ejercicios de respiración orientados a desarrollar conciencia corporal y disponer de un recurso práctico frente a momentos de tensión.'],
    ['Meditación', 'Espacios guiados de pausa, observación y conexión para reconocer sensaciones, emociones y estados internos, favoreciendo la conciencia, el autocuidado y la integración de la experiencia.'],
];
$ciclos = [
    ['Inicio de temporada', 'Preparación y conciencia', 'Espacio para reconocer el estado del equipo y practicar herramientas de respiración, mindfulness y autorregulación.'],
    ['Peak de temporada', 'Regulación y pausa', 'Espacio orientado a reconocer señales de tensión y experimentar recursos prácticos de autorregulación durante períodos de mayor demanda.'],
    ['Cierre de temporada', 'Recuperación e integración', 'Espacio de pausa, observación e integración para cerrar el ciclo y reforzar prácticas de autocuidado.'],
];
$modalidades = [
    ['Jornada única', '1 vez al año', '90 minutos', 'Una experiencia puntual de bienestar y autorregulación. Una alternativa para incorporar un espacio de pausa y autocuidado dentro de la planificación anual.'],
    ['Bienestar semestral', '2 veces al año', '90 minutos por jornada', 'Dos jornadas independientes distribuidas durante el año, permitiendo generar espacios de bienestar en distintos momentos del ciclo laboral.'],
    ['Bienestar estacional', '3 veces por temporada', '90 minutos por jornada', 'Tres encuentros independientes estratégicamente ubicados en el inicio, peak y cierre de temporada. Especialmente adaptable a equipos con períodos de alta demanda.'],
    ['Bienestar en dos etapas', '2 veces por temporada', '90 minutos por jornada', 'Dos encuentros independientes: uno al inicio y otro al cierre de temporada, acompañando al equipo en momentos relevantes de su ciclo de trabajo.'],
];
$objetivos = [
    'Un espacio real de pausa dentro de la jornada laboral.',
    'Mayor conciencia sobre el propio estado físico, mental y emocional.',
    'Herramientas prácticas de autorregulación y autocuidado.',
    'Una experiencia de bienestar que pueda vivirse de forma simple, cercana y aplicable.',
    'Espacios que acompañen las necesidades de los equipos según su contexto y ciclo de trabajo.',
];

require dirname(__DIR__) . '/includes/header.php';
?>

<section class="service-detail-hero corporate-hero" aria-labelledby="service-title">
    <div class="service-detail-hero__wash" aria-hidden="true"></div>
    <div class="container corporate-hero__grid">
        <div class="service-detail-hero__content reveal">
            <a class="back-link" href="../index.php#servicios"><span aria-hidden="true">←</span> Volver a servicios</a>
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Bienestar para empresas y organizaciones</span></p>
            <h1 id="service-title">Wellness &amp; Wellbeing <em>Corporativo</em></h1>
            <p class="service-kicker">Jornadas de autorregulación y bienestar</p>
            <p class="service-detail-hero__lead">Generamos espacios de pausa, conciencia y regulación dentro de la jornada laboral.</p>
            <p>Cada jornada es una experiencia completa e independiente, diseñada para que las personas puedan detenerse, reconocer su estado actual y experimentar herramientas sencillas que puedan incorporar a su vida laboral cotidiana.</p>
            <div class="corporate-actions">
                <a class="button button--solid" href="#experiencia">Conocer la experiencia</a>
                <a class="text-link" href="<?= e($corporateWhatsappUrl) ?>" target="_blank" rel="noopener noreferrer" aria-label="Consultar para mi empresa por WhatsApp, abre en una pestaña nueva">Consultar para mi empresa <span aria-hidden="true">↗</span></a>
            </div>
        </div>
        <div class="corporate-pause reveal">
            <img src="../assets/img/favicon.png" alt="" width="512" height="512" aria-hidden="true">
            <p class="corporate-pause__statement">Una pausa.<br>Un momento de conciencia.<br><em>Un espacio para tu equipo.</em></p>
            <p class="corporate-pause__note">Bienestar dentro de la jornada laboral</p>
        </div>
    </div>
</section>

<section class="section corporate-experience" id="experiencia" aria-labelledby="experience-title">
    <div class="container corporate-experience__grid">
        <div class="corporate-heading reveal">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">La experiencia</span></p>
            <h2 id="experience-title">Una pausa consciente dentro de la jornada laboral</h2>
            <div class="corporate-duration"><strong>90 <span>minutos</span></strong><span>por jornada</span></div>
            <p class="corporate-independent">Cada encuentro es independiente</p>
        </div>
        <div class="corporate-copy reveal">
            <p>Cada encuentro tiene una duración de 1 hora y 30 minutos y combina herramientas prácticas de mindfulness, respiración consciente, meditación, autorregulación y EFT Tapping.</p>
            <p>El objetivo es ofrecer a las personas un espacio para detenerse, reconocer su estado actual y experimentar recursos sencillos que puedan incorporar a su jornada cotidiana.</p>
            <p>Cada jornada funciona de forma independiente, por lo que no es necesario haber participado en un encuentro anterior. Esto permite que cada organización elija la frecuencia que mejor se adapte a su realidad.</p>
        </div>
    </div>
</section>

<section class="section corporate-tools" aria-labelledby="tools-title">
    <div class="container">
        <div class="corporate-heading reveal"><h2 id="tools-title">Herramientas de la experiencia</h2></div>
        <div class="corporate-grid corporate-grid--tools">
            <?php foreach ($herramientas as $index => [$titulo, $texto]): ?>
                <article class="corporate-card reveal">
                    <span class="corporate-number" aria-hidden="true"><?= sprintf('%02d', $index + 1) ?></span>
                    <h3><?= e($titulo) ?></h3><p><?= e($texto) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section corporate-cycles" aria-labelledby="cycles-title">
    <div class="container">
        <div class="corporate-heading reveal">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Inicio · Peak · Cierre</span></p>
            <h2 id="cycles-title">Una propuesta adaptable a los ciclos laborales</h2>
            <p>Para empresas que trabajan con temporadas o períodos de distinta intensidad, las jornadas pueden integrarse al ritmo natural del equipo. Cada encuentro mantiene su carácter independiente y se adapta al momento específico.</p>
        </div>
        <ol class="corporate-timeline">
            <?php foreach ($ciclos as $index => [$momento, $titulo, $texto]): ?>
                <li class="reveal">
                    <span class="corporate-timeline__number" aria-hidden="true"><?= sprintf('%02d', $index + 1) ?></span>
                    <p class="corporate-label"><?= e($momento) ?></p>
                    <h3><?= e($titulo) ?></h3><p><?= e($texto) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="section corporate-modalities" aria-labelledby="modalities-title">
    <div class="container">
        <div class="corporate-heading reveal">
            <h2 id="modalities-title">Modalidades de contratación</h2>
            <p>Las jornadas pueden contratarse de manera puntual o con una frecuencia definida durante el año. En todos los casos, cada encuentro funciona de manera independiente.</p>
        </div>
        <div class="corporate-grid">
            <?php foreach ($modalidades as [$titulo, $frecuencia, $duracion, $texto]): ?>
                <article class="corporate-card corporate-modality reveal">
                    <h3><?= e($titulo) ?></h3>
                    <dl><div><dt>Frecuencia</dt><dd><?= e($frecuencia) ?></dd></div><div><dt>Duración</dt><dd><?= e($duracion) ?></dd></div></dl>
                    <p><?= e($texto) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="corporate-consult reveal">
            <div><h3>¿No sabes qué modalidad elegir?</h3><p>Conversemos sobre las características y necesidades de tu equipo.</p></div>
            <a class="button button--solid" href="<?= e($corporateWhatsappUrl) ?>" target="_blank" rel="noopener noreferrer">Consultar por WhatsApp</a>
        </div>
    </div>
</section>

<section class="section corporate-outcomes" aria-labelledby="outcomes-title">
    <div class="container corporate-experience__grid">
        <div class="corporate-heading reveal"><h2 id="outcomes-title">¿Qué busca generar esta experiencia?</h2></div>
        <ul class="corporate-outcomes__list">
            <?php foreach ($objetivos as $objetivo): ?>
                <li class="reveal"><?= e($objetivo) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="quote-break corporate-statement" aria-label="Bienestar en las personas y en la organización">
    <div class="quote-break__lines" aria-hidden="true"></div>
    <div class="container quote-break__content reveal">
        <img class="quote-break__sun" src="../assets/img/favicon.png" alt="" width="512" height="512" aria-hidden="true" loading="lazy">
        <blockquote>Bienestar que comienza en las personas y se proyecta en la organización.</blockquote>
        <p>Una propuesta adaptable a empresas, equipos y organizaciones que buscan incorporar espacios de bienestar y autorregulación dentro de su cultura de trabajo.</p>
    </div>
</section>

<?php require dirname(__DIR__) . '/includes/nicole.php'; ?>

<section class="service-final-cta section" aria-labelledby="corporate-contact-title">
    <div class="container">
        <div class="service-final-cta__panel reveal">
            <p class="eyebrow eyebrow--light"><span aria-hidden="true"></span><span class="eyebrow__text">Conversemos sobre tu equipo</span></p>
            <h2 id="corporate-contact-title">Un espacio de bienestar para tu organización</h2>
            <a class="button button--light" href="<?= e($corporateWhatsappUrl) ?>" target="_blank" rel="noopener noreferrer">Consultar para mi empresa</a>
        </div>
    </div>
</section>

<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
