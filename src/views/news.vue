<template>
  <div class="container">
      <header-nav></header-nav>
      <news-header></news-header>
      <news-page :data='data'></news-page>
      <news-change :data0='data0'></news-change>
      <footer-nav></footer-nav>
  </div>
</template>

<script>
import Vue from 'vue'
import HeaderNav from '../components/HeaderNav.vue'
import NewsPage from '../components/news/NewsPage.vue'
import NewsHeader from '../components/news/NewsHeader.vue'
import NewsChange from '../components/news/NewsChange.vue'
import FooterNav from '../components/FooterNav.vue'

export default {
  data(){
    return{
      data:'',
      data0:'',
    }
  },
  components:{
    HeaderNav,
    NewsPage,
    NewsHeader,
    NewsChange,
    FooterNav,
  },
  mounted(){
    this.axios.post(this.$store.state.root+'/news.php').then((res) =>{
      console.log(res.data)
      this.data = res.data.data
      this.data0 = res.data.data0
      for(var a of this.data){
        var b = a.section.replace(/<\/?.+?>/g, "");

        b= b.replace(/&nbsp;/g, " ");
        Vue.set(a,'section_none',b)
      }
    })
  },
}
</script>
