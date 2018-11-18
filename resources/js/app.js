require('./bootstrap');
window.Vue = require('vue');

import moment from 'moment';

// vform for form validation
import { Form, HasError, AlertError } from 'vform';
window.Form = Form;

// Moment-Jalaali
var momentJalali = require('moment-jalaali');
momentJalali().format('jYYYY/jM/jD');

// Component for laravel-vue-pagination
Vue.component('pagination', require('laravel-vue-pagination'));

// VForm Components for form validation
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

Vue.filter('toUpperCase', function (text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
});
Vue.filter('changeDate', function (date) {
    return moment(date).format('YYYY/MM/D');
});

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
