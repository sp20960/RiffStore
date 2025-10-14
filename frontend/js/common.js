document.addEventListener('DOMContentLoaded', () => {
    const barsMenu = document.querySelector('.fa-bars');
    const closeBtn = document.querySelector('.fa-x');
    const nav = document.querySelector('header nav');

    barsMenu.addEventListener('click', () => {  
        nav.classList.add('nav-visible')
    })

    closeBtn.addEventListener('click', () => {
        nav.classList.remove('nav-visible')
    })
});