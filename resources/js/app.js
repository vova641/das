import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

let louder = document.querySelector('.loading');
window.addEventListener('load', ()=> {
    louder.classList.add('hide');
})