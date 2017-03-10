<template>
	<footer>
		<div class="share">
			<ul>
				<li v-for='item in img' @mouseenter='show(item)' @mouseleave='show(item)'>
					<a href="http://user.qzone.qq.com/873056154">
						<img v-if='item.show' :src="item.url1">
						<img v-else :src="item.url2">
					</a>
				</li>
			</ul>
		</div>
		<div>
			<p >Copyright © 2016 . Design By 储小康</p>
		</div>
	</footer>
</template>
<script>
export default{
	data(){
		return{
			img:[
				{
					url1:require('../assets/img/qq1.png'),
					url2:require('../assets/img/qq2.png'),
					show:true,
				},
				{
					url1:require('../assets/img/weixin1.png'),
					url2:require('../assets/img/weixin2.png'),
					show:true,
				},
				{
					url1:require('../assets/img/sina1.png'),
					url2:require('../assets/img/sina2.png'),
					show:true,
				},
				{
					url1:require('../assets/img/qz1.png'),
					url2:require('../assets/img/qz2.png'),
					show:true,
				},
				{
					url1:require('../assets/img/qqweibo1.png'),
					url2:require('../assets/img/qqweibo2.png'),
					show:true,
				},
			]
		}
	},
	methods:{
		show(item){
			item.show=!item.show
		}
	}
}
</script>