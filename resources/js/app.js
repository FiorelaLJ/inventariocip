
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('spinner', require('./components/widgets/Spinner.vue').default);
Vue.component('list-providers', require('./components/providers/List.vue').default);
Vue.component('modal-btn-provider', require('./components/providers/ModalBtn.vue').default);
Vue.component('create-form-provider', require('./components/providers/Create.vue').default);
Vue.component('list-assets', require('./components/assets/List.vue').default);
Vue.component('modal-btn-asset', require('./components/assets/ModalBtn.vue').default);
Vue.component('create-form-asset', require('./components/assets/Create.vue').default);
Vue.component('list-locations', require('./components/locations/List.vue').default);
Vue.component('modal-btn-location', require('./components/locations/ModalBtn.vue').default);
Vue.component('create-form-location', require('./components/locations/Create.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
