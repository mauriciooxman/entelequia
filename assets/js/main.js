(() => {
    'use strict';

    const header = document.querySelector('[data-header]');
    const nav = document.querySelector('[data-nav]');
    const navToggle = document.querySelector('[data-nav-toggle]');
    const navLinks = nav ? [...nav.querySelectorAll('a[href^="#"]')] : [];
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const updateHeader = () => {
        if (header) {
            header.classList.toggle('is-scrolled', window.scrollY > 24);
        }
    };

    const closeMenu = (returnFocus = false) => {
        if (!nav || !navToggle) return;

        nav.classList.remove('is-open');
        header?.classList.remove('is-menu-open');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Abrir menú');
        document.body.classList.remove('nav-open');

        if (returnFocus) navToggle.focus();
    };

    if (nav && navToggle) {
        navToggle.addEventListener('click', () => {
            const willOpen = navToggle.getAttribute('aria-expanded') !== 'true';

            nav.classList.toggle('is-open', willOpen);
            header?.classList.toggle('is-menu-open', willOpen);
            navToggle.setAttribute('aria-expanded', String(willOpen));
            navToggle.setAttribute('aria-label', willOpen ? 'Cerrar menú' : 'Abrir menú');
            document.body.classList.toggle('nav-open', willOpen);
        });

        navLinks.forEach((link) => link.addEventListener('click', () => closeMenu()));

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && nav.classList.contains('is-open')) {
                closeMenu(true);
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) closeMenu();
        });
    }

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    const revealElements = document.querySelectorAll('.reveal');

    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
        revealElements.forEach((element) => element.classList.add('is-visible'));
    } else {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, {
            rootMargin: '0px 0px -8% 0px',
            threshold: 0.12,
        });

        revealElements.forEach((element) => revealObserver.observe(element));
    }

    const sections = [...document.querySelectorAll('main section[id]')];

    if ('IntersectionObserver' in window && sections.length > 0) {
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                navLinks.forEach((link) => {
                    const isCurrent = link.getAttribute('href') === `#${entry.target.id}`;
                    if (isCurrent) {
                        link.setAttribute('aria-current', 'true');
                    } else {
                        link.removeAttribute('aria-current');
                    }
                });
            });
        }, {
            rootMargin: '-35% 0px -55% 0px',
            threshold: 0,
        });

        sections.forEach((section) => sectionObserver.observe(section));
    }
})();
