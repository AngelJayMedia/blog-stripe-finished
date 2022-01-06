require('./bootstrap');

import Choices from 'choices.js';
import Alpine from 'alpinejs';
import AOS from 'aos';

window.Alpine = Alpine;
window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 3,
        removeItemButton: true,
    });
}

Alpine.start();
AOS.init();

