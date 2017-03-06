// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import axios from 'axios'
import VueAxios from 'vue-axios'
import ElementUI from 'element-ui'
import VueRouter from 'vue-router'
import router from './router'
import 'element-ui/lib/theme-default/index.css'
import 'assets/css/style.scss'

Vue.use(VueAxios, axios)
Vue.use(VueRouter)
Vue.use(ElementUI)

/* eslint-disable no-new */
// new Vue({
//   el: '#app',
//   template: '<App/>',
//   components: { App }
// })
var app = new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
});
