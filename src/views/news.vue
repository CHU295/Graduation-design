<template>
  <div class="container">
      <header-nav></header-nav>
      <news-header></news-header>
      <news-page></news-page>
      <news-change></news-change>
      <footer-nav></footer-nav>
  </div>
</template>

<script>
import HeaderNav from '../components/HeaderNav.vue'
import NewsPage from '../components/news/NewsPage.vue'
import NewsHeader from '../components/news/NewsHeader.vue'
import NewsChange from '../components/news/NewsChange.vue'
import FooterNav from '../components/FooterNav.vue'

export default {
  components:{
    HeaderNav,
    NewsPage,
    NewsHeader,
    NewsChange,
    FooterNav,
  }
}
</script>
