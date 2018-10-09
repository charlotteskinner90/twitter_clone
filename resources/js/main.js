import Vue from 'vue';
import app from './app';
import store from './store';
import router from './router';
import axios from 'axios';

window.axios = axios;

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    store,
    router,
    template: '<app/>',
    components: { app }
}).$mount('#app')
