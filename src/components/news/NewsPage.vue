<template>
	<div class="news_page">
		<ul>
			<li class="news_page_li" v-for='item in data'>
		        <div class="news_page_li_right">
		        	<a class="nqlTitle" @click='detail()'>{{item.title}}</a>
		        	<div class="news_page_li_right_Sum"><p>{{item.section}}</p></div>
		        	<div class="news_page_li_right_DetDate">{{item.time}}</div>
		        </div>
		        <img src="../../assets/img/icon_show_1.jpg" href="/news/comp/" class=" serLeft1" style="width: 165px;height: 140px;">
		        <!-- <div class="news_page_li_Date" style="background-color: rgb(120, 120, 120);"> -->
			       <!--  <span class="news_page_li_Date_Day">{{item.day}}</span>
			        <br>
			        <span class="news_page_li_Date_My">{{item.date}}</span>
		        </div> -->		        
		        <div class="news_page_li_block"></div>
	        </li>
	    </ul>
	</div>
</template>
<script>
	export default{
		props:['data'],
		data(){
			return{
				news:[
					{
						day:'26',
						date:'2016-10',
						title:'2016年城市岩土工程西湖论坛顺利举行',
						body:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
					},
					{
						day:'26',
						date:'2016-10',
						title:'2016年城市岩土工程西湖论坛顺利举行',
						body:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
					},
					{
						day:'26',
						date:'2016-10',
						title:'2016年城市岩土工程西湖论坛顺利举行',
						body:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
					},
					{
						day:'26',
						date:'2016-10',
						title:'2016年城市岩土工程西湖论坛顺利举行',
						body:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
					},
					{
						day:'26',
						date:'2016-10',
						title:'2016年城市岩土工程西湖论坛顺利举行',
						body:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
					},
					{
						day:'26',
						date:'2016-10',
						title:'2016年城市岩土工程西湖论坛顺利举行',
						body:'2016年10月10日，为期两天的2016年城市岩土工程西湖论坛”在浙江杭州浙江饭店顺利举行。此次论坛就城市地下综合体、城市地下管廊和城市地质灾害防治以及岩土本构理论前沿等问题展...'
					},
				]
			}
		},
		methods:{
			detail(){
				this.$router.push({name:'newsdetail'})
			}
		}
	}
</script>