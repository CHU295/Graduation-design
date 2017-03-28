import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'index',
        meta: { auth: false},
        component: resolve => require(['./views/index.vue'], resolve),
    },
    // {
    //     path: '/index',
    //     name: 'index',
    //     meta: { auth: false},
    //     component: resolve => require(['./views/index.vue'], resolve),
    // },
    {
        path: '/introduct',
        name: 'introduct',
        meta: { auth: false},
        component: resolve => require(['./views/introduct.vue'], resolve),
    },
     {
        path: '/curriculum',
        name: 'curriculum',
        meta: { auth: false},
        component: resolve => require(['./views/curriculum.vue'], resolve),
    },
     {
        path: '/news',
        name: 'news',
        meta: { auth: false},
        component: resolve => require(['./views/news.vue'], resolve),
    }, 
    {
        path: '/newsdetail',
        name: 'newsdetail',
        meta: { auth: false},
        component: resolve => require(['./views/newsdetail.vue'], resolve),
    },
     {
        path: '/join',
        name: 'join',
        meta: { auth: false},
        component: resolve => require(['./views/join.vue'], resolve),
    },
];

const router = new VueRouter({
    mode: 'history',
  routes
});

export default router;

