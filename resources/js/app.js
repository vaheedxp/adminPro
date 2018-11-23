require('./bootstrap');
window.Vue = require('vue');

import moment from 'moment';

// vform for form validation
import {
    Form,
    HasError,
    AlertError
} from 'vform';
window.Form = Form;

window.Fire = new Vue();

import swal from 'sweetalert2';
window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.toast = toast;

import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar, {
    color: '#2196F3',
    failedColor: 'red',
    height: '3px'
});

//Passport Authontications
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

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
let routes = [{
        path: '/dashboard',
        component: require('./components/Dashboard.vue')
    },
    {
        path: '/developer',
        component: require('./components/Developer.vue')
    },
    {
        path: '/profile',
        component: require('./components/Profile.vue')
    },
    {
        path: '/users',
        component: require('./components/Users.vue')
    },
    {
        path: '/students',
        component: require('./components/students/Students.vue')
    },
    {
        path: '/employees',
        component: require('./components/employee/Employees.vue')
    }
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
