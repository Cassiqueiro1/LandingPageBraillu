document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.braillu-nav a[href^="#"]');

    const scrollToSection = (hash, updateUrl = true) => {
        const targetId = hash.replace('#', '');
        const target = document.getElementById(targetId);

        if (!target) {
            return;
        }

        const topOffset = 24;
        const targetTop = target.getBoundingClientRect().top + window.scrollY - topOffset;

        window.scrollTo({
            top: targetTop,
            behavior: 'smooth',
        });

        if (updateUrl) {
            history.pushState(null, '', hash);
        }

        window.setTimeout(() => {
            if (!target.hasAttribute('tabindex')) {
                target.setAttribute('tabindex', '-1');
            }

            target.focus({
                preventScroll: true,
            });
        }, 500);
    };

    navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            const hash = link.getAttribute('href');

            if (!hash || hash === '#') {
                return;
            }

            event.preventDefault();
            scrollToSection(hash, true);
        });
    });

    window.addEventListener('load', () => {
        if (window.location.hash) {
            window.setTimeout(() => {
                scrollToSection(window.location.hash, false);
            }, 300);
        }
    });
});