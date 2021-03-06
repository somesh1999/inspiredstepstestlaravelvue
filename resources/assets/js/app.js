
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/Example.vue').default);
Vue.component('profile', require('./components/Profile.vue').default);
Vue.component('profileview', require('./components/ViewProfile.vue').default);
Vue.component('editprofile', require('./components/EditProfile.vue').default);

import VueFlashMessage from 'vue-flash-message';
Vue.use(VueFlashMessage);
require('vue-flash-message/dist/vue-flash-message.min.css');
import moment from 'moment';
Vue.filter('formatDate', function(value) {
    if (value) {
      return moment(String(value)).format('MM/DD/YYYY')
    }
  });

const app = new Vue({
    el: '#app'
});
