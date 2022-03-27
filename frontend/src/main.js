import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import vuetify from './plugins/vuetify'

import ReportsPage from "@/pages/dashboard/ReportsPage";
import FamilyPage from "@/pages/dashboard/FamilyPage";
import HealthPage from "@/pages/dashboard/HealthPage";
import VueGoogleCharts from 'vue-google-charts'
import CalendarPage from "@/pages/dashboard/CalendarPage";
import LoginPage from "@/pages/public/LoginPage";
import RegisterPage from "@/pages/public/RegisterPage";
import DashboardTemplate from "@/templates/DashboardTemplate";

Vue.use(VueGoogleCharts)
Vue.use(VueRouter);
Vue.config.productionTip = false

const router = new VueRouter({
    routes: [
        {
            path: '/',
            redirect: {name: 'login'}
        },
        {
            path: '/ingresar',
            name: 'login',
            component: LoginPage
        },
        {
            path: '/registrarme',
            name: 'register',
            component: RegisterPage
        },
        {
            path: '/tablero',
            name: 'dashboard',
            component: DashboardTemplate,
            children: [
                {
                    path: '',
                    name: 'calendar',
                    component: CalendarPage
                },
                {
                    path: 'salud',
                    name: 'health',
                    component: HealthPage
                },
                {
                    path: 'reportes',
                    name: 'reports',
                    component: ReportsPage
                },
                {
                    path: 'familia',
                    name: 'family',
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
