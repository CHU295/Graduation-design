<template>
		<div class="index_new">
			<div class="index_new_news">
				<h1>{{data0.news_0}}</h1>
				<p>{{data0.news_1}}</p>
				<!-- <router-link :to='news'>more about</router-link> -->
			</div>
			<div class="index_new_news1">
				<div class="index_new_news_p">
                    <img :src="items.img" v-for='items in img' v-show='items.show'>
	            </div>
	            <div class="index_new_news_t">
	                <ul>
	                    <li :class="news1.show?'news_choose':''" v-for='news1 in img' @mouseenter='news_change(news1)'>
	                    	<a :class="news1.show?'news_choose1':''" href="#">
		                    	<h2>{{news1.title}}</h2>
		                    	<p>{{news1.section}}</p>
	                    	</a>
	                    </li>
	                </ul>                
	            </div>
			</div>
		</div>
</template>
<script>
import Vue from 'vue'
  export default{
    props:['data0'],
    data(){
      return{
        img:[
          {
          	url:require('../assets/img/news_1.jpg'),
          	show:true,
          	title:'迪士尼表演出意外 女演员高空坠落是否属于工伤',
          	body:'近日,一则名为“上海迪士尼人猿泰山表演23分钟的时候,演员掉下来咯”的视频在网上流传。网上流传的该视频显示,在吊环杂技环节中,一名女演员从高空跌落,跌落后,灯光暗下,场下工作人员迅速做出反应,冲上去救助该女演员。',
          },
          {
          	url:require('../assets/img/news_2.jpg'),
          	show:false,
          	title:'迪士尼表演出意外 女演员高空坠落是否属于工伤',
          	body:'近日,一则名为“上海迪士尼人猿泰山表演23分钟的时候,演员掉下来咯”的视频在网上流传。网上流传的该视频显示,在吊环杂技环节中,一名女演员从高空跌落,跌落后,灯光暗下,场下工作人员迅速做出反应,冲上去救助该女演员。',
          },
          {
          	url:require('../assets/img/news_3.jpg'),
          	show:false,
          	title:'迪士尼表演出意外 女演员高空坠落是否属于工伤',
          	body:'近日,一则名为“上海迪士尼人猿泰山表演23分钟的时候,演员掉下来咯”的视频在网上流传。网上流传的该视频显示,在吊环杂技环节中,一名女演员从高空跌落,跌落后,灯光暗下,场下工作人员迅速做出反应,冲上去救助该女演员。',
          },
          {
          	url:require('../assets/img/news_4.jpg'),
          	show:false,
          	title:'迪士尼表演出意外 女演员高空坠落是否属于工伤',
          	body:'近日,一则名为“上海迪士尼人猿泰山表演23分钟的时候,演员掉下来咯”的视频在网上流传。网上流传的该视频显示,在吊环杂技环节中,一名女演员从高空跌落,跌落后,灯光暗下,场下工作人员迅速做出反应,冲上去救助该女演员。',
          },
        ],
      }
    },
    mounted(){
    this.axios.post(this.$store.state.root+'/news.php').then((res) =>{
      console.log(res.data)
      this.img = []
      for (var i = 0; i < 4; i++) {
        this.img.push(res.data.data[i])
        Vue.set(this.img[i],'show',false)
      }
      this.img[0].show=true
    })
  },
    methods:{
    	news_change(news1){
    		for(var s of this.img){
    			s.show=false
    		}
    		news1.show=true
    	}
    }
  }
</script>
<style>
  .el-carousel__item h3 {
    color: #475669;
    font-size: 14px;
    opacity: 0.75;
    line-height: 150px;
    margin: 0;
  }

  .el-carousel__item:nth-child(2n) {
     background-color: #99a9bf;
  }
  
  .el-carousel__item:nth-child(2n+1) {
     background-color: #d3dce6;
  }
</style>