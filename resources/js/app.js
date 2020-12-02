import Vue from 'vue';
import App from './App';
import router from './router/index';
import store from './store/index';

require('./plugins/basic-components');

// Helper Class
import User from './helpers/user';
window.user = User;
require('./bootstrap');

window.EventBus = new Vue();

new Vue({
    el: '#app',
    router,
    store,
    template: '<app/>',
    components: {
        App
    }
});
