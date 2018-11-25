
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Buefy from 'buefy'

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.use(Buefy);

Vue.component('footer-component', require('./components/main/FooterComponent.vue'));
Vue.component('navbar-component', require('./components/main/NavbarComponent.vue'));
Vue.component('hero-component', require('./components/main/HeroComponent.vue'));
Vue.component('main-component', require('./components/main/MainComponent.vue'));
Vue.component('administration-component', require('./components/main/AdministrationComponent.vue'));
Vue.component('target-component', require('./components/main/TargetComponent.vue'));
Vue.component('up-side-component', require('./components/main/UpSideComponent.vue'));
Vue.component('feed-component', require('./components/main/FeedComponent.vue'));
Vue.component('feed-message-component', require('./components/main/FeedMessageComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
