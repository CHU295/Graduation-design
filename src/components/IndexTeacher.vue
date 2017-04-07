<template>
	<div class="index_teacher" v-if='show'>
		<div class="index_teacher_news">
			<h1>{{data0.teacher_0}}</h1>
			<p>{{data0.teacher_1}}</p>
			<!-- <span>more</span>		 -->
		</div>
		<ul class="index_teacher_box">
			<li>
				<div class="index_teacher_box_1">
					<span>{{data[0].name}}</span>
					<p>{{data[0].introduction1}}<br>{{data[0].introduction2}}</p>
				</div>
				<div class="index_teacher_box_2">
					<img :src="data[0].img">
				</div>
			</li>
			<li>
				<div class="index_teacher_box_2">
					<img :src="data[1].img">
				</div>
				<div class="index_teacher_box_1">
					<span>{{data[1].name}}</span>
					<p>{{data[1].introduction1}}<br>{{data[1].introduction2}}</p>
				</div>
			</li>
			<li>
				<div class="index_teacher_box_1">
					<span>{{data[2].name}}</span>
					<p>{{data[2].introduction1}}<br>{{data[2].introduction2}}</p>
				</div>
				<div class="index_teacher_box_2">
					<img :src="data[2].img">
				</div>
			</li>
			<li>
				<div class="index_teacher_box_2">
					<img :src="data[3].img">
				</div>
				<div class="index_teacher_box_1">
					<span>{{data[3].name}}</span>
					<p>{{data[3].introduction1}}<br>{{data[3].introduction2}}</p>
				</div>
			</li>
		</ul>
	</div>
</template>
<script>
	export default{
    	props:['data0'],
    	data(){
    		return{
    			data:[],
    			show:false
    		}
    	},
    	mounted(){
	    this.axios.post(this.$store.state.root+'/teacherSerch.php').then((res) =>{
		      this.data = res.data.data
		      this.show = true
		    })
		  },
	}
</script>