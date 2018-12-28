import Vue from 'vue'
import VueRouter from 'vue-router'

import Dashboard from './components/views/dashboard/TaskContainerComponent.vue'

import DashboardHomeComponent from "./components/views/dashboard/DashboardHomeComponent";
import HomeViewComponent from "./components/views/home/HomeViewComponent";
import ProjectsComponent from "./components/views/dashboard/ProjectsComponent";


Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/',
            component: HomeViewComponent
        },
        {
            path: '/dashboard',
            component: Dashboard,
            children: [
                {
                  path: '',
                  component: DashboardHomeComponent
                },
                {
                    path: ':id',
                    name: 'dashboard',
                    component: ProjectsComponent
                }
            ]
        }
    ]
});

export default router