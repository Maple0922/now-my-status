import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import router from './router';
import '@mdi/font/css/materialdesignicons.css';

import HeaderComponent from "./components/HeaderComponent";

require('./bootstrap');

window.Vue = require('vue').default;

Vue.use(Vuetify);

Vue.component('HeaderComponent', HeaderComponent);



const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router
});
