import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import vuetify from './plugins/vuetify'

import LoginPage from './pages/public/LoginPage'
import RegisterPage from './pages/public/RegisterPage'
import DashboardPage from './templates/DashboardTemplate'
import ReportsPage from "@/pages/dashboard/ReportsPage";
import FamilyPage from "@/pages/dashboard/FamilyPage";
import HealthPage from "@/pages/dashboard/HealthPage";

Vue.use(VueRouter);
Vue.config.productionTip = false

const router = new VueRouter({
    routes: [
        {
            path: '/',
            redirect: '/ingresar'
        },
        {
            path: '/ingresar',
            component: LoginPage
        },
        {
            path: '/registrarme',
            component: RegisterPage
        },
        {
            path: '/tablero',
            component: DashboardPage,
            children: [
                {
                    path: 'salud',
                    component: HealthPage
                },
                {
                    path: 'reportes',
                    component: ReportsPage
                },
                {
                    path: 'familia',
                    component: FamilyPage
                },

            ]
        }
    ]
})

new Vue({
    router,
    vuetify,
    render: h => h(App)
}).$mount('#app')
