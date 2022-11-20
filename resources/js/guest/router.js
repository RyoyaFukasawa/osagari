import { createRouter,createWebHistory } from "vue-router";

const routes = [
  {
    path: '/guest/home',
    name: 'home',
    component: () => import('./pages/Home.vue')
  },
  {
    path: '/guest/register',
    name: 'register',
    component: () => import('./pages/auth/Register.vue'),
  },
  {
    path: '/guest/register/social',
    name: 'register-social',
    component: () => import('./pages/auth/RegisterSocial.vue'),
    props: true
  },
  {
    path: '/guest/register/complete',
    name: 'register-complete',
    component: () => import('./pages/auth/RegisterComplete.vue'),
    props: true
  },
  {
    path: '/guest/login',
    name: 'login',
    component: () => import('./pages/auth/Login.vue')
  },
]

export default createRouter({
  history: createWebHistory(),
  routes,
})