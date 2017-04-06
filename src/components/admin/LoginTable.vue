<template>
	<div class="admin-login">
		<div class="container admin-1">
		<div class="login-div">
			<div class="login-box">
				<h2>管理员登录</h2>
				<form >
					<input type="text" name="Account" placeholder="用户名" v-model='account'>
					<input type="password" name="password" placeholder="登录密码" v-model='password'>				
					<input type="button" name="" value="登录"  @click='submit'>
				</form>
			</div>
		</div>
		</div>
	</div>
</template>
<script>
	export default{
		data(){
			return{
				account:'',
				password:'',
				checked:true,
			}
		},
		methods:{
			submit(){
				this.axios.post(this.$store.state.root+'/login.php').then((res) =>{
					var a = res.data.data[0]
				  if (this.account == a.name && this.password == a.pas) {
				  	localStorage.login = true			  	
				  	this.$router.push({name:'admin',params:{id:1}})
				  }else{
				  	alert('账号或密码错误')
				  }
				})
				
			}
		}
	}
</script>