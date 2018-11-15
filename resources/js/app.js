require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter);

// Vue Routes
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue') },
    { path: '/profile', component: require('./components/Profile.vue') },
    { path: '/users', component: require('./components/Users.vue') },
    { path: '/students', component: require('./components/students/Students.vue') }
]

// Router
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

const app = new Vue({
    el: '#app',
    router
});
