<template>
	<section>
	<el-input v-model="input" placeholder="文章标题"></el-input>
	<div style="height:50px;"></div>
	<span style="margin-right:30px;">动态封面</span><input type="file" name="" id='news_add'>
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
			}
		},
		methods:{
			updateData(val){
				this.content = val
			},
			submit(){
				var images = new FormData()
				images.append('files',document.getElementById('news_add').files[0])
				images.append('title',this.input)
				images.append('section',this.content)
				this.axios.post(this.$store.state.root+'/newsAdd.php',images,{headers: {'Content-Type': 'application/json;'}}).then((res) =>{
				  	console.log(res.data)
				  // this.$router.go(0)
				})
			}
		}
	}
</script>