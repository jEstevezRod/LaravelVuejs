import Vue from 'vue'
import Buefy from 'buefy'
import router from './routes'
import axios from 'axios'

window.Vue = require('vue');
Vue.use(Buefy, axios);

Vue.prototype.$axios = axios;


//shared components ( footer and navbar )
Vue.component('footer-component', require('./components/shared/FooterComponent.vue'));
Vue.component('navbar-component', require('./components/shared/NavbarComponent.vue'));
// home components
Vue.component('hero-component', require('./components/views/home/HeroComponent.vue'));
Vue.component('main-component', require('./components/views/home/HomeViewComponent.vue'));
Vue.component('administration-component', require('./components/views/home/AdministrationComponent.vue'));
Vue.component('target-component', require('./components/views/home/TargetComponent.vue'));
Vue.component('up-side-component', require('./components/views/home/UpSideComponent.vue'));
Vue.component('feed-component', require('./components/views/home/FeedComponent.vue'));
Vue.component('feed-message-component', require('./components/views/home/FeedMessageComponent.vue'));
// dashboard ( task manager )
Vue.component('task-container-component', require('./components/views/dashboard/TaskContainerComponent.vue'));
Vue.component('state', require('./components/views/dashboard/StateComponent'));
Vue.component('modal-add-task', require('./components/views/dashboard/ModalAddTaskComponent'));
Vue.component('modal-add-project', require('./components/views/dashboard/ModalAddProjectComponent'));
Vue.component('modal-add-state', require('./components/views/dashboard/ModalAddStateComponent'));
Vue.component('modal-add-team', require('./components/views/dashboard/ModalAddTeamComponent'));
Vue.component('project', require('./components/views/dashboard/ProjectsComponent'));
Vue.component('dashboard-home', require('./components/views/dashboard/DashboardHomeComponent'))

new Vue({
    el: '#app',
    router
});
