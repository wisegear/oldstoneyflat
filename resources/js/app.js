document.querySelector('.menu-toggle')?.addEventListener('click', (event) => {
    const button = event.currentTarget;
    const menu = document.querySelector('#main-menu');
    const isOpen = button.getAttribute('aria-expanded') === 'true';

    button.setAttribute('aria-expanded', String(! isOpen));
    menu?.classList.toggle('open');
});
