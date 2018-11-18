require('./bootstrap');
window.Vue = require('vue');

// vform for form validation
import { Form, HasError, AlertError } from 'vform';
window.Form = Form;

// Moment-Jalaali
var moment = require('moment-jalaali');
moment().format('jYYYY/jM/jD');

// Component for laravel-vue-pagination
Vue.component('pagination', require('laravel-vue-pagination'));

// VForm Components for form validation
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

/* ************************ */
// VueRouter for routing
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Vue Routes
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue') },
    { path: '/profile', component: require('./components/Profile.vue') },
    { path: '/users', component: require('./components/Users.vue') },
    { path: '/students', component: require('./components/students/Students.vue') },
    { path: '/employees', component: require('./components/employee/Employees.vue') }
];

// Router
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});
/* ************************ */

// Main vue app
const app = new Vue({
    el: '#app',
    router
});
