import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

const store = new Vuex.Store({
  state:{
  	root:'http://localhost:80/my-site',
  	// root:'http://my-site.com',
  },
  getters:{
		
  },
  mutations: {
  }
})

export default store
