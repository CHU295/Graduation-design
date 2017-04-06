<template>
	<section>
	<el-input v-model="input" placeholder="课程标题"></el-input>
	<div style="height:50px;"></div>
	<el-input v-model="input1" placeholder="适合年龄"></el-input>
	<div style="height:50px;"></div>
	<span style="margin-right:30px;">课程封面</span><input type="file" name="" id='col_add'>
	<div style="height:30px;"></div>
	<vue-html5-editor :content="content" :height="500" :show-module-name="true" @change="updateData"></vue-html5-editor>
	<el-button type="primary" @click='submit'>提交</el-button>
</section>
</template>
<script>
	export default{
		data(){
			return{
				content:'',
				input:'',
				input1:'',
				img:'',
			}
		},
		methods:{
			updateData(val){
				this.content = val
			},
			submit(){
				var images = new FormData()
				images.append('files',document.getElementById('col_add').files[0])
				images.append('title',this.input)
				images.append('time',this.input1)
				images.append('section',this.content)
				this.axios.post(this.$store.state.root+'/colAdd.php',images,{headers: {'Content-Type': 'application/json;'}}).then((res) =>{
				  	console.log(res.data)
				  this.$router.go(0)
				})
			}
		}
	}
</script>