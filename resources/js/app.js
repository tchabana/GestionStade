import './bootstrap';
import { Carousel } from 'flowbite';
import { Modal } from 'flowbite';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();


const carousel = new Carousel(items, options);
const modal = new Modal($targetEl, options);
