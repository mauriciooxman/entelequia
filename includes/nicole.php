<?php

declare(strict_types=1);
?>
<section class="about section corporate-specialist nicole-intro" id="nicole" aria-labelledby="nicole-title">
    <div class="container about__grid">
        <div class="about__visual nicole-portrait reveal">
            <div class="about__frame" aria-hidden="true"></div>
            <img src="<?= e($assetBase . $nicolePhoto['src']) ?>" alt="<?= e($nicolePhoto['alt']) ?>" width="<?= (int) $nicolePhoto['width'] ?>" height="<?= (int) $nicolePhoto['height'] ?>" loading="lazy" decoding="async">
            <p class="about__caption">Presencia · Escucha · Propósito</p>
        </div>
        <div class="about__content reveal">
            <p class="eyebrow"><span aria-hidden="true"></span><span class="eyebrow__text">Sobre Entelequia</span></p>
            <h2 id="nicole-title">Nicole Viera</h2>
            <p class="nicole-subtitle">Nuestra especialista</p>
            <p>Con una trayectoria de 8 años en terapia y 8 años en turismo y hotelería, Nicole combina experiencia en el acompañamiento humano con un profundo conocimiento de los entornos laborales de alta exigencia.</p>
            <p>Su experiencia en ambos mundos le permitió identificar una necesidad concreta: personas que necesitan herramientas reales para gestionar el estrés mientras siguen respondiendo a las demandas de su trabajo.</p>
            <p>Así nace Wellness, una propuesta de bienestar laboral basada en autorregulación con EFT Tapping, mindfulness, respiración consciente y meditación, diseñada desde la experiencia y llevada a la práctica.</p>
            <a class="text-link" href="<?= e($nicoleLinkedinUrl) ?>" target="_blank" rel="noopener noreferrer" aria-label="Ver perfil de Nicole Viera en LinkedIn, abre en una pestaña nueva">Ver perfil en LinkedIn <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</section>
