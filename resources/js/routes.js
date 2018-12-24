import Vue from 'vue'
import VueRouter from 'vue-router'

import Dashboard from './components/views/dashboard/TaskContainerComponent.vue'
import Home from './components/views/home/HomeViewComponent.vue'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/dashboard',
            component: Dashboard
        }
    ]
});

export default router