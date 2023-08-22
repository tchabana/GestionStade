import './bootstrap';
import { Carousel } from 'flowbite';
import { Modal } from 'flowbite';
import flatpickr from 'flatpickr';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// document.getElementById('from').addEventListener('click',function(){
//     alert('bon');
// });

const carousel = new Carousel(items, options);
const modal = new Modal($targetEl, options);
flatpickr("#from", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minuteIncrement: 15,
    appendTo: document.getElementById('from').parentNode
});

flatpickr("#to", {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minuteIncrement: 15,
    appendTo: document.getElementById('from').parentNode
});

