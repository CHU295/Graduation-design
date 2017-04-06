import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

const store = new Vuex.Store({
  state:{
  	// root:'http://localhost:80/my-site',
  	root:'/api',
  },
  getters:{
		
  },
  mutations: {
  }
})

export default store
