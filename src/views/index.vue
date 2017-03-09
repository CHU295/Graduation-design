<template>
  <div class="container">
      <header-nav></header-nav>
      <introduction></introduction>
      <carousel></carousel>
  </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import Carousel from '../components/Carousel.vue'
import Introduction from '../components/Introduction.vue'

export default {
  components:{
    HeaderNav,
    Carousel,
    Introduction,
  }
}
</script>
