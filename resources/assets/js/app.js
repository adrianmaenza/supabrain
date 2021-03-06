
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('jquery');

require('materialize-css/dist/js/materialize.min.js');

require('./general');

window.Vue = require('vue');

import Vuetify from 'vuetify';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.use(Vuetify);

Vue.component('banner', require('./components/Banner.vue'));
Vue.component('resources', require('./components/Resources.vue'));
Vue.component('navigation', require('./components/Navigation.vue'));
Vue.component('dashboard', require('./components/Dashboard.vue'));

const app = new Vue({
    el: '#app'
});
