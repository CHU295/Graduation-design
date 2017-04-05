<template>
  <div class="container">
      <header-nav></header-nav>
      <introduction :data='data'></introduction>
      <!-- <carousel></carousel> -->
      <index-teacher></index-teacher>
      <index-news></index-news>
      <footer-nav :data='data'></footer-nav>
      <contact></contact>
  </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import Carousel from '../components/Carousel.vue'
import Introduction from '../components/Introduction.vue'
import IndexTeacher from '../components/IndexTeacher.vue'
import IndexNews from '../components/IndexNews.vue'
import FooterNav from '../components/FooterNav.vue'
import Contact from '../components/Contact.vue'

export default {
  data(){
    return{
      data:'',
    }
  },
  components:{
    HeaderNav,
    Carousel,
    Introduction,
    IndexTeacher,
    IndexNews,
    FooterNav,
    Contact,
  },  
  mounted(){
    this.axios.post(this.$store.state.root+'/index.php').then((res) =>{
      this.data = res.data.data[0]
    })
  },
}
</script>
