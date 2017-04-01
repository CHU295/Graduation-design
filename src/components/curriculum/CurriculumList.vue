<template>
	<div class="curriculum_list" >
		<ul>
			<li v-for='item in news'>
				<div class="curriculum_left">
					<img :src="item.img">
				</div>
				<div class="curriculum_right">
					<div class="curriculum_right_title">
						<span>{{item.title}}</span>
						<span>{{item.time}}</span>
					</div>
					<div class="curriculum_right_brief">
						{{item.section}}
					</div>
					<span class="curriculum_right_botton" @click='detail(item)' @click.stop=''>
						查看详情
					</span>					
				</div>
			</li>
		</ul>
	</div>
</template>
<script>
	export default{
		props:['news'],
		methods:{
			detail(item){
				this.$emit('detail',item)
			}
		}
	}
</script>