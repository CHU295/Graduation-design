<template>
	<section>
	<span>名师栏目修改</span>
	<div style="height:30px;"></div>
	<span style="font-size: 20px;">第{{teacher.id}}栏</span>
	<div style="height:30px;"></div>
	<el-input v-model="teacher.name" placeholder="名称" style="width: 200px;"></el-input>
	<div style="height:30px;width: 150px;"></div>
	<el-input v-model="teacher.introduction1" placeholder="简介1" style="width: 350px;"></el-input>
	<div style="height:30px;width: 150px;"></div>
	<el-input v-model="teacher.introduction2" placeholder="简介1" style="width: 500px;"></el-input>
	<div style="height:30px;width: 150px;"></div>
	<span style="margin-right:30px;">头像</span><input type="file" name="" id='news_add'>
	<div style="height:30px;"></div>
	<el-button type="primary" @click='submit'>提交</el-button>
</section>
</template>
<script>
	export default{
		props:['teacher'],
		data(){
			return{
				
			}
		},
		methods:{
			submit(){
				var images = new FormData()
				images.append('files',document.getElementById('news_add').files[0])
				images.append('ID',this.teacher.id)
				images.append('name',this.teacher.name)
				images.append('introduction1',this.teacher.introduction1)
				images.append('introduction2',this.teacher.introduction2)
				this.axios.post(this.$store.state.root+'/teacherAdd.php',images,{headers: {'Content-Type': 'application/json;'}}).then((res) =>{
				  	console.log(res.data)
				  // this.$router.go(0)
				})
			}
		}
	}
</script>