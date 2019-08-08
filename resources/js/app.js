require('./bootstrap');
require('axios');

window.Vue = require('vue');


Vue.component('staff-component', require('./components/StaffComponent.vue').default);

const app = new Vue({
    el: '#app',
});
