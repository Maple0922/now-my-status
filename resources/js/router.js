import VueRouter from 'vue-router';

import HomeComponent from "./components/HomeComponent";
import EditComponent from "./components/EditComponent";

window.Vue = require('vue').default;
Vue.use(VueRouter);

export default new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeComponent
    },
    {
      path: '/edit',
      name: 'edit',
      component: EditComponent
    },
  ]
});
