import Vue from 'vue'
import VueRouter from 'vue-router'
import Admin from './views/Admin'
import Client from './views/Client'


Vue.use(VueRouter)


export default new VueRouter({
    base: process.env.BASE_URL,
    routes: [
        {path: '/admin', name:'admin', component: Admin},
        {path: '/meni', name:'client', component: Client},
    ]
})