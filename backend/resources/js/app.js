require('./bootstrap');

import Vue from 'vue';
import App from './vue/app';
import router from './vue/routes.js';


import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';




const app = new Vue({
    router,
    el: "#app",
    components: {
        App
    }
});
