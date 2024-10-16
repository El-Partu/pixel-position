import './bootstrap';
import.meta.glob([
    '../views/images/**'
]);
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
