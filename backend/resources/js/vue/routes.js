import Vue from 'vue'
import VueRouter from 'vue-router'
import Admin from './views/Admin'
import Client from './views/Client'
import Login from './views/Login'

Vue.use(VueRouter)

const router = new VueRouter({
  base: process.env.BASE_URL,
  routes: [
    { path: '/admin', name: 'admin', component: Admin },
    { path: '/login', name: 'login', component: Login },
    { path: '/', name: 'client', component: Client},
    { path: '*', redirect: '/' },
  ]
})

// global route guard
router.beforeEach((to, from, next) => {
  const isAuthenticated = localStorage.getItem('token')
  if (to.name !== 'login' && !isAuthenticated) {
    // redirect to login page if not authenticated
    next({ name: 'login' })
  } else {
    next()
  }
})

export default router
