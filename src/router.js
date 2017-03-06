import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const routes = [
    // {
    //     path: '/',
    //     meta: { auth: false},
    //     component: resolve => require(['./views/layouts/index.vue'], resolve),
    //     children: [
    //         {
    //             path: '/',
    //             name: 'index',
    //             meta: { auth: false},
    //             component: resolve => require(['./views/index.vue'], resolve),
    //         },
    //         {
    //             path: 'user/:uid',
    //             name: 'user',
    //             component: resolve => require(['./views/user/user.vue'], resolve),
    //         },
    //     ]
    // },
];

const router = new VueRouter({
    mode: 'history',
  routes
});

export default router;

