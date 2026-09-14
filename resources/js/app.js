import './bootstrap';

const menuButton = document.querySelector('.mobile-menu-button');
const mobileNavigation = document.querySelector('.mobile-navigation');

if (menuButton && mobileNavigation) {
    menuButton.addEventListener('click', () => {
        const menuIsOpen = mobileNavigation.classList.toggle('is-open');
        document.body.classList.toggle('menu-open', menuIsOpen);

        menuButton.classList.toggle('is-open', menuIsOpen);
        menuButton.setAttribute('aria-expanded', menuIsOpen.toString());
        document.body.classList.remove('menu-open');
    });

    mobileNavigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileNavigation.classList.remove('is-open');
            menuButton.classList.remove('is-open');
            menuButton.setAttribute('aria-expanded', 'false');
        });
    });
}
