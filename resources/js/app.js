require('./bootstrap');

import Alpine from 'alpinejs';

import { createApp } from 'vue';
import router from './router'

window.Alpine = Alpine;

Alpine.start();


import Home from './pages/Home.vue';
createApp({
    components: {
        Home
    }
}).use(router).mount('#app')
