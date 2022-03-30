/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue').default;
import Vuetify from 'vuetify';
import Vue from 'vue'
import VueGoogleCharts from 'vue-google-charts'
 
Vue.use(VueGoogleCharts)
    

Vue.use(Vuetify);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-component', require('./components/LoginForm.vue').default);
Vue.component('register-component', require('./components/RegisterPage.vue').default);
Vue.component('layout-component', require('./components/DashboardTemplate.vue').default);
Vue.component('health-component', require('./components/HealthPage.vue').default);
Vue.component('calendar-component', require('./components/CalendarPage.vue').default);
Vue.component('reports-component', require('./components/ReportsPage.vue').default);
Vue.component('family-component', require('./components/FamilyPage.vue').default);
Vue.component('registerPerson-component', require('./components/RegisterForm.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 const vuetify = new Vuetify();

 const app = new Vue({
     el: '#app',
     vuetify,
     VueGoogleCharts
 });

