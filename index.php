<?php

declare(strict_types=1);

require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/header.php';
?>

<section class="hero" id="inicio" aria-labelledby="hero-title">
    <div class="hero__wash" aria-hidden="true"></div>
    <div class="container hero__grid">
        <div class="hero__content reveal">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Bienestar · Presencia · Autoconocimiento</span></p>
            <h1 id="hero-title">Un espacio para <em>conectar contigo</em></h1>
            <p class="hero__lead">Bienestar, autoconocimiento y herramientas de acompañamiento emocional para explorar lo que sientes, comprender tus procesos y volver a conectar contigo.</p>
            <div class="hero__actions">
                <a class="button button--solid" href="#servicios">Conoce nuestros servicios</a>
                <a class="text-link" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer">
                    Conversemos <span aria-hidden="true">↗</span>
                </a>
            </div>
            <p class="hero__note">Un encuentro amable contigo, a tu propio ritmo.</p>
        </div>

        <div class="hero__visual reveal reveal--delay" aria-label="Una escena cálida de pausa y conexión personal">
            <div class="hero__arch" aria-hidden="true"></div>
            <figure class="hero__figure">
                <img src="assets/img/hero/hero-entelequia.jpg" alt="Persona en un espacio cálido y tranquilo iluminado por luz natural" width="1122" height="1402" fetchpriority="high">
            </figure>
            <div class="hero__seal" aria-hidden="true">
                <img src="assets/img/favicon.png" alt="" width="512" height="512">
            </div>
        </div>
    </div>
</section>

<section class="intro section" aria-labelledby="intro-title">
    <div class="container intro__grid">
        <div class="section-heading reveal">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Nuestra mirada</span></p>
            <h2 id="intro-title">Bienestar desde una mirada <em>integral</em></h2>
        </div>
        <div class="intro__copy reveal reveal--delay">
            <p class="intro__lead">En Entelequia encontrarás un espacio orientado al autoconocimiento y al acompañamiento emocional. A través de diferentes herramientas se busca observar emociones, experiencias y patrones personales desde una perspectiva consciente, cercana e integral.</p>
            <p>Cada proceso es personal y se adapta a aquello que necesitas explorar en tu momento actual.</p>
        </div>
    </div>
</section>

<section class="services section" id="servicios" aria-labelledby="services-title">
    <div class="container">
        <div class="services__header reveal">
            <div class="section-heading">
                <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Formas de acompañarte</span></p>
                <h2 id="services-title">Nuestros servicios</h2>
            </div>
            <p>Distintas herramientas para acompañarte en la exploración de tus emociones y en tu proceso de autoconocimiento.</p>
        </div>

        <div class="services__grid">
            <?php foreach ($servicios as $index => $servicio): ?>
                <article class="service-card reveal" id="<?= e($servicio['slug']) ?>">
                    <div class="service-card__image">
                        <img src="<?= e($servicio['imagen']) ?>" alt="<?= e($servicio['alt']) ?>" width="1200" height="800" loading="lazy">
                        <span class="service-card__number" aria-hidden="true"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__topline">
                            <p class="service-card__label">Servicio</p>
                            <?php if ($servicio['badge'] !== ''): ?>
                                <span class="service-card__badge"><?= e($servicio['badge']) ?></span>
                            <?php endif; ?>
                        </div>
                        <h3><?= e($servicio['titulo']) ?></h3>
                        <p class="service-card__subtitle"><?= e($servicio['subtitulo']) ?></p>
                        <p><?= e($servicio['descripcion']) ?></p>
                        <a class="text-link" href="<?= e($servicio['href']) ?>" aria-label="<?= e($servicio['cta']) ?>">
                            <?= e($servicio['cta']) ?> <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="about section" id="sobre-entelequia" aria-labelledby="about-title">
    <div class="container about__grid">
        <div class="about__visual reveal">
            <div class="about__frame" aria-hidden="true"></div>
            <img src="assets/img/about/sobre-entelequia.jpg" alt="Manos escribiendo en un cuaderno junto a una ventana" width="1122" height="1402" loading="lazy">
            <p class="about__caption">Presencia · Escucha · Propósito</p>
        </div>

        <div class="about__content reveal reveal--delay">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Sobre Entelequia</span></p>
            <h2 id="about-title">Un espacio para <em>escucharte</em></h2>
            <p class="about__lead">Entelequia nace como un espacio dedicado al wellness, el autoconocimiento y la exploración emocional.</p>
            <p>A través de diferentes herramientas y metodologías, cada proceso busca generar un momento de conexión, observación y escucha personal.</p>
            <a class="text-link" href="#contacto">Conversemos <span aria-hidden="true">→</span></a>
        </div>
    </div>
</section>

<section class="quote-break" aria-label="Una invitación a conectar contigo">
    <div class="quote-break__lines" aria-hidden="true"></div>
    <div class="container quote-break__content reveal">
        <img class="quote-break__sun" src="assets/img/favicon.png" alt="" width="512" height="512" aria-hidden="true" loading="lazy">
        <blockquote>“Cada proceso comienza con un momento de conexión contigo.”</blockquote>
    </div>
</section>

<section class="contact section" id="contacto" aria-labelledby="contact-title">
    <div class="container">
        <div class="contact__panel reveal">
            <div class="contact__ornament" aria-hidden="true"></div>
            <p class="eyebrow eyebrow--light"><span aria-hidden="true"></span><span class="eyebrow__text">Estamos para escucharte</span></p>
            <h2 id="contact-title">¿Sientes que es momento de dedicarte un espacio?</h2>
            <p>Conoce los servicios de Entelequia y conversemos sobre qué alternativa se adapta mejor a lo que estás buscando.</p>
            <a class="button button--light" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer">
                <svg viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M16.04 3.2A12.74 12.74 0 0 0 5.1 22.47L3.3 29l6.68-1.75A12.74 12.74 0 1 0 16.04 3.2Zm0 23.34c-2.02 0-4-.55-5.72-1.58l-.41-.24-3.96 1.04 1.06-3.86-.27-.42a10.58 10.58 0 1 1 9.3 5.06Zm5.8-7.91c-.32-.16-1.88-.93-2.17-1.03-.29-.11-.5-.16-.71.16-.21.31-.82 1.03-1 1.24-.19.21-.37.24-.69.08-.32-.16-1.34-.49-2.55-1.57a9.5 9.5 0 0 1-1.76-2.19c-.18-.32-.02-.49.14-.65.14-.14.32-.37.48-.56.16-.18.21-.32.31-.53.11-.21.06-.4-.02-.56-.08-.16-.72-1.72-.98-2.36-.26-.62-.52-.54-.71-.55h-.61c-.21 0-.56.08-.85.4-.29.31-1.11 1.08-1.11 2.64s1.14 3.07 1.3 3.28c.16.21 2.24 3.42 5.43 4.8.76.33 1.35.52 1.81.67.76.24 1.45.21 2 .13.61-.09 1.88-.77 2.14-1.51.27-.74.27-1.38.19-1.51-.08-.13-.29-.21-.61-.37Z"/>
                </svg>
                Conversemos por WhatsApp
            </a>
            <small>Te responderemos tan pronto como sea posible.</small>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
