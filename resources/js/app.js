require('./bootstrap');

window.Vue = require('vue');

Vue.component('app-main', require('./components/main/main.vue').default);

const app = new Vue({
    el: '#app',
});
