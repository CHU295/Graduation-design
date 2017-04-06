<template>
	<div class="news-detail">
		<section>
			<div class="top">
				<h1 v-html='data.title'></h1>
				<h5>{{data.time}}</h5>
			</div>
			<div class="bottom">
				<p v-html='data.section'></p>
			</div>
		</section>		
	</div>
</template>
<script>
	export default{
		data(){
			return{
				data:'',
				time:'2016-12-25',
				text:'是奥数发丝,最不可预测的边框样式是 double。它定义为两条线的宽度再加上这两条线之间的空间等于 border-width 值。不过，CSS 规范并没有说其中一条线是否比另一条粗或者两条线是否应该是一样的粗，也没有指出线之间的空间是否应当比线粗。所有这些都有用户代理决定，创作人员对这个决定没有任何影响。最不可预测的边框样式是 double。它定义为两条线的宽度再加上这两条线之间的空间等于 border-width 值。不过，CSS 规范并没有说其中一条线是否比另一条粗或者两条线是否应该是一样的粗，也没有指出线之间的空间是否应当比线粗。所有这些都有用户代理决定，创作人员对这个决定没有任何影响。'
			}
		},
		created(){
			this.data = this.$route.params.a
		}
	}
</script>