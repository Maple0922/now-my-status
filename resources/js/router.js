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
      path: '/edit/:id',
      name: 'edit',
      component: EditComponent,
      props: true
    },
  ]
  // routes: [
  //   {
  //     path: '/tasks',
  //     name: 'task.list',
  //     component: TaskListComponent
  //   },
  //   {
  //     path: '/tasks/:taskId',
  //     name: 'task.show',
  //     component: TaskShowComponent,
  //     props: true
  //   },
  //   {
  //     path: '/tasks/create',
  //     name: 'task.create',
  //     component: TaskCreateComponent
  //   },
  //   {
  //     path: '/tasks/:taskId/edit',
  //     name: 'task.edit',
  //     component: TaskEditComponent,
  //     props: true
  //   },
  // ]
});
