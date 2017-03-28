<template>
  <div class="container">
      <header-nav></header-nav>
      <news-header></news-header>
      <news-detail></news-detail>
      <footer-nav></footer-nav>
  </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import NewsHeader from '../components/news/NewsHeader.vue'
import NewsDetail from '../components/news/NewsDetail.vue'
import FooterNav from '../components/FooterNav.vue'

export default {
  components:{
    HeaderNav,
    NewsHeader,
    NewsDetail,
    FooterNav,
  }
}
</script>
