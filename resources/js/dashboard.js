import VueRouter from 'vue-router';
Vue.use(VueRouter);

const mainpanel = require('./components/mainPanel.vue');


const routes = [
    {
        path: '/',
        component: mainpanel
    },
]

export const router = new VueRouter({
    routes
});