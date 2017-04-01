<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
import index from './views/index.vue'

export default {
  name: 'app',
  data(){
  	return{
  		data:'',
  	}
  },
  components: {
    index
  },
}
</script>

<style>
</style>
