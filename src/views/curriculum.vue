<template>
  <div class="container" @click='close_all'>
      <header-nav></header-nav>
      <curriculum-list  :news='news' @detail='detail'></curriculum-list>
      <!-- <news-change></news-change> -->
      <footer-nav></footer-nav>
      <curriculum-detail v-if='mask' :news_choose='news_choose'></curriculum-detail>
      <div class="mask" v-if='mask'></div>
  </div>
</template>

<script>
import Vue from 'vue'
import HeaderNav from '../components/HeaderNav.vue'
import CurriculumList from '../components/curriculum/CurriculumList.vue'
import NewsChange from '../components/news/NewsChange.vue'
import CurriculumDetail from '../components/curriculum/CurriculumDetail.vue'
import FooterNav from '../components/FooterNav.vue'

export default {
  data(){
    return{
      mask:false,
      news:[
        {
          img:require("../assets/img/icon_c_1.jpg"),
          time:'10-13个月',
          title:'早起教育',
          section:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展.此次论坛就城市地下综合体、'
        },
        {
          img:require("../assets/img/icon_c_1.jpg"),
          time:'10-13个月',
          title:'早起教育',
          section:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
        },
        {
          img:require("../assets/img/icon_c_1.jpg"),
          time:'10-13个月',
          title:'早起教育',
          section:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
        },
      ],
      news_choose:'',
    }
  },
  components:{
    HeaderNav,
    CurriculumList,
    NewsChange,
    CurriculumDetail,
    FooterNav,
  },
  created:function(){
    this.news_choose=this.news[0]
  },
  watch:{
      mask(){
          this.preventY()
      }
  },
  mounted(){
    this.axios.post(this.$store.state.root+'/col.php').then((res) =>{
      console.log(res.data)
      this.news = res.data.data
      for(var a of this.news){
        var b = a.section.replace(/<\/?.+?>/g, "");

        b= b.replace(/&nbsp;/g, " ");
        Vue.set(a,'section_none',b)
      }
    })
  },
  methods:{
    detail(item){
      this.mask=true
      this.news_choose=item
    },
    close_all(){
      this.mask=false
    },
    preventY(){
        if(this.mask) {
            document.body.style.overflow = 'hidden'
        } else {
            document.body.style.overflow = ''
        }
    },
  }
}
</script>
