import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// const affiche = document.querySelector('.navs');
// const navlinks = document.querySelector('.affiche');

// affiche.addEventListener('click', (e)=> {
//     e.preventDefault();
//     navlinks.classList.toggle('visible');
// });





const menu = document.getElementById('dimitri');
const submenus = document.getElementById('submenu');
const arrows = document.getElementById('arrow');

menu.addEventListener('click', (e) => {
    e.preventDefault();
    submenus.classList.toggle('hidden');
    arrows.classList.toggle('rotate-0');
})
