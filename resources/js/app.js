import Buefy from 'buefy'
import Router from './routes'

window.Vue = require('vue');
Vue.use(Buefy);

// import TaskContainerComponent from 'components/views/dashboard/TaskContainerComponent';

//MAIN AND SHARED
Vue.component('footer-component', require('./components/shared/FooterComponent.vue'));
Vue.component('navbar-component', require('./components/shared/NavbarComponent.vue'));
Vue.component('hero-component', require('./components/views/home/HeroComponent.vue'));
Vue.component('main-component', require('./components/views/home/HomeViewComponent.vue'));
Vue.component('administration-component', require('./components/views/home/AdministrationComponent.vue'));
Vue.component('target-component', require('./components/views/home/TargetComponent.vue'));
Vue.component('up-side-component', require('./components/views/home/UpSideComponent.vue'));
Vue.component('feed-component', require('./components/views/home/FeedComponent.vue'));
Vue.component('feed-message-component', require('./components/views/home/FeedMessageComponent.vue'));

//DASHBOARD
Vue.component('task-container-component', require('./components/views/dashboard/TaskContainerComponent.vue'));


const app = new Vue({
    el: '#app',
    router: Router
});
