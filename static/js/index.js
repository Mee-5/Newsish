document.addEventListener('DOMContentLoaded', (e) => {
    let menu = document.getElementById('site-menu');
    let menuToggle = document.getElementById('menu-toggle');

    menuToggle.addEventListener('click', (e) => {
        menu.classList.toggle('site-menu--active');
        document.body.classList.toggle('no-scroll');
    });
})

