<template>
  <div class="container">
      <header-nav></header-nav>
      <introduct-brand></introduct-brand>
      <footer-nav></footer-nav>
  </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import IntroductBrand from '../components/introduct/IntroductBrand.vue'
import FooterNav from '../components/FooterNav.vue'

export default {
  components:{
    HeaderNav,
    IntroductBrand,
    FooterNav,
  }
}
</script>
