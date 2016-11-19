
// require('./bootstrap');

var Vue = require('vue');
global.$ = require('jquery');
global.jQuery = require('jquery');

var App = Vue.component('app', require('./components/AppComponent'));
Vue.component('navbar', require('./components/shared/NavbarComponent.vue'));

var vm = new Vue({
    el: 'body'
});






