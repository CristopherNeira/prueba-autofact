
require('./bootstrap');

window.Vue = require('vue');


Vue.component('my-evento-component', require('./components/MyEventoComponent.vue'));
Vue.component('form-evento-component', require('./components/FormEventoComponent.vue'));
Vue.component('evento-component', require('./components/EventoComponent.vue'));

const app = new Vue({
    el: '#app'
});
