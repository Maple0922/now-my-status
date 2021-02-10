import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import router from './router';
import '@mdi/font/css/materialdesignicons.css';

import HeaderComponent from "./components/HeaderComponent";
import SpaceComponent from "./components/SpaceComponent";

require('./bootstrap');

window.Vue = require('vue').default;

Vue.use(Vuetify);

Vue.component('HeaderComponent', HeaderComponent);
Vue.component('SpaceComponent', SpaceComponent);



const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router
});
