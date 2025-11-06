document.addEventListener('DOMContentLoaded', () => {
    const barsMenu = document.querySelector('.fa-bars');
    const closeBtn = document.querySelector('.fa-x');
    const nav = document.querySelector('header nav');
    const dropwDownMenuCaret = document.getElementById('dropdown-menu-caret');
    const dropDownMenu = document.querySelector('.dropdown-content')

    barsMenu.addEventListener('click', () => {  
        nav.classList.add('nav-visible')
    });

    closeBtn.addEventListener('click', () => {
        nav.classList.remove('nav-visible')
    });

    dropwDownMenuCaret.addEventListener('click', () => { 
        dropDownMenu.classList.toggle('nav-visible')
    });
});