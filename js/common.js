document.addEventListener('DOMContentLoaded', () => {
    const barsMenu = document.querySelector('.fa-bars');
    const closeBtn = document.querySelector('.fa-x');
    const nav = document.querySelector('header nav');
    const dropwDownMenuCaret = document.getElementById('dropdown-menu-caret');
    const dropDownMenu = document.querySelector('#dropdown-content')
    console.log(nav);
    barsMenu.addEventListener('click', () => {  
        nav.classList.remove('hidden')
        nav.classList.add('flex')
        console.log("object");
    });

    closeBtn.addEventListener('click', () => {
        nav.classList.remove('flex')
        nav.classList.add('hidden')
    });

    dropwDownMenuCaret.addEventListener('click', () => { 
        dropDownMenu.classList.toggle('flex!')
    });
});