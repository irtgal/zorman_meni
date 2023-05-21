import Vue from 'vue'
import VueRouter from 'vue-router'
import Admin from './views/Admin'
import Client from './views/Client'
import Login from './views/Login'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        { path: '/admin', name: 'admin', component: Admin, meta: { requiresAuth: true } },
        { path: '/login', name: 'login', component: Login },
        { path: '/', name: 'client', component: Client },
        { path: '*', redirect: '/' }
    ]
})

// global route guard
router.beforeEach((to, from, next) => {
    const isAuthenticated = localStorage.getItem('token')

    if (to.matched.some(record => record.meta.requiresAuth)) {
        // Check if the route requires authentication
        if (!isAuthenticated) {
            // Redirect to the login page if not authenticated
            next({ name: 'login' })
        } else {
            next()
        }
    } else {
        // Public route, proceed with navigation
        next()
    }
})

export default router
