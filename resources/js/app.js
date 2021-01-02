require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'



Vue.component('up-nav',require('./components/Up_Nav.vue').default);




const app = new Vue({
    el: '#app'
});
