<template>
  <div class="container">
      <header-nav></header-nav>
      <introductBrand :data=data></introductBrand>
      <carousel></carousel>
      <case></case>
      <join :data=data></join>
      <footer-nav></footer-nav>
      <contact></contact>
  </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import Carousel from '../components/Carousel.vue'
import FooterNav from '../components/FooterNav.vue'
import Contact from '../components/Contact.vue'
import IntroductBrand from '../components/introduct/IntroductBrand.vue'
import Case from '../components/join/Case.vue'
import Join from '../components/join/Join.vue'

export default {
  data(){
    return{
      data:[],
    }
  },
  components:{
    HeaderNav,
    Carousel,
    FooterNav,
    Contact,
    IntroductBrand,
    Case,
    Join,
  },
  mounted(){
    this.axios.post(this.$store.state.root+'/index.php').then((res) =>{
      this.data = res.data.data[0]
    })
  },
}
</script>
