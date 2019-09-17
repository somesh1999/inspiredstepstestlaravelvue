import Vue from 'vue'
import Router from 'vue-router'
import ExampleComponent from './components/ExampleComponent.vue'
import TestComponent from './components/TestComponent.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/home',
      name: 'ExampleComponent',
      component: ExampleComponent
    },
    {
        path: '/profile',
        name: 'TestComponent',
        component: TestComponent
      },
  ]
})
