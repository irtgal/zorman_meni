require('./bootstrap');

import Vue from 'vue';
import App from './vue/app';
import router from './vue/routes.js';


import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

import Emitter from 'tiny-emitter';
Vue.prototype.$mitt = new Emitter();

// AXIOS
import axios from 'axios';
axios.interceptors.request.use(function (config) {
    const token = localStorage.getItem('token');
    if (token) {
        config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
});
axios.interceptors.response.use(
    function (response) {
        return response;
    },
    function (error) {
        alert(error.response.data.message);
        if (error.response.status === 401) {
            router.push({ name: 'login' });
        }
        return Promise.reject(error);
    }
);
Vue.prototype.$axios = axios;


const app = new Vue({
    router,
    el: "#app",
    components: {
        App
    }
});
