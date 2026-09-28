<?php

declare(strict_types=1);
?>
    </main>

    <footer class="site-footer">
        <div class="container footer__top">
            <div class="footer__brand">
                <a class="brand brand--footer" href="<?= e($homePath) ?>#inicio" aria-label="Entelequia CL, volver al inicio">
                    <img class="brand__image" src="<?= e($assetBase) ?>assets/img/logo.png" alt="Entelequia CL" width="602" height="559" loading="lazy">
                </a>
                <p><?= e($siteConfig['tagline']) ?></p>
            </div>

            <nav class="footer__nav" aria-label="Navegación del pie de página">
                <p class="footer__label">Explora</p>
                <a href="<?= e($homePath) ?>#inicio">Inicio</a>
                <a href="<?= e($homePath) ?>#servicios">Servicios</a>
                <a href="<?= e($homePath) ?>#sobre-entelequia">Sobre Entelequia</a>
                <a href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a>
            </nav>

            <div class="footer__social">
                <p class="footer__label">Conecta</p>
                <a href="mailto:<?= e($siteConfig['email']) ?>">
                    Correo <span><?= e($siteConfig['email']) ?></span>
                </a>
                <a href="<?= e($siteConfig['instagram_url']) ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Entelequia CL, abre en una pestaña nueva">
                    Instagram <span><?= e($siteConfig['instagram_handle']) ?></span>
                </a>
            </div>
        </div>

        <p class="container footer__notice">Los servicios de Entelequia están orientados al bienestar y al autoconocimiento y no sustituyen atención médica, psicológica o psiquiátrica cuando ésta sea necesaria.</p>

        <div class="container footer__bottom">
            <p>&copy; <?= date('Y') ?> Entelequia CL. Todos los derechos reservados.</p>
            <p>Sitio desarrollado por <a href="<?= e($siteConfig['developer_url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($siteConfig['developer_name']) ?></a></p>
        </div>
    </footer>

    <a class="whatsapp-float" href="<?= e($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer" aria-label="Hablar con Entelequia CL por WhatsApp, abre en una pestaña nueva">
        <svg viewBox="0 0 32 32" aria-hidden="true" focusable="false">
            <path d="M16.04 3.2A12.74 12.74 0 0 0 5.1 22.47L3.3 29l6.68-1.75A12.74 12.74 0 1 0 16.04 3.2Zm0 23.34c-2.02 0-4-.55-5.72-1.58l-.41-.24-3.96 1.04 1.06-3.86-.27-.42a10.58 10.58 0 1 1 9.3 5.06Zm5.8-7.91c-.32-.16-1.88-.93-2.17-1.03-.29-.11-.5-.16-.71.16-.21.31-.82 1.03-1 1.24-.19.21-.37.24-.69.08-.32-.16-1.34-.49-2.55-1.57a9.5 9.5 0 0 1-1.76-2.19c-.18-.32-.02-.49.14-.65.14-.14.32-.37.48-.56.16-.18.21-.32.31-.53.11-.21.06-.4-.02-.56-.08-.16-.72-1.72-.98-2.36-.26-.62-.52-.54-.71-.55h-.61c-.21 0-.56.08-.85.4-.29.31-1.11 1.08-1.11 2.64s1.14 3.07 1.3 3.28c.16.21 2.24 3.42 5.43 4.8.76.33 1.35.52 1.81.67.76.24 1.45.21 2 .13.61-.09 1.88-.77 2.14-1.51.27-.74.27-1.38.19-1.51-.08-.13-.29-.21-.61-.37Z"/>
        </svg>
    </a>

    <script src="<?= e($assetBase) ?>assets/js/main.js" defer></script>
</body>
</html>
