<template>
	<section>
	<el-input v-model="input" placeholder="文章标题"></el-input>
	<div style="height:50px;"></div>
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
				var a = {}
				a.title = this.input
				a.section = this.content
				console.log(a)
				this.axios.post(this.$store.state.root+'/newsAdd.php',a,{headers: {'Content-Type': 'application/json;'}}).then((res) =>{
				  console.log(res)
				  // this.$router.go(0)
				})
			}
		}
	}
</script>