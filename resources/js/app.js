import './bootstrap';

const menuButton = document.querySelector('.mobile-menu-button');
const mobileNavigation = document.querySelector('.mobile-navigation');

if (menuButton && mobileNavigation) {
    const closeMenu = () => {
        mobileNavigation.classList.remove('is-open');
        menuButton.classList.remove('is-open');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Ouvrir le menu');
        document.body.classList.remove('menu-open');
    };

    const openMenu = () => {
        mobileNavigation.classList.add('is-open');
        menuButton.classList.add('is-open');
        menuButton.setAttribute('aria-expanded', 'true');
        menuButton.setAttribute('aria-label', 'Fermer le menu');
        document.body.classList.add('menu-open');
    };

    menuButton.addEventListener('click', () => {
        const menuIsOpen = mobileNavigation.classList.contains('is-open');

        if (menuIsOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    mobileNavigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
            menuButton.focus();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 900) {
            closeMenu();
        }
    });
}
