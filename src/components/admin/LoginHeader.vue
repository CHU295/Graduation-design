<template>
	<div class="login-header">
		<div @click='jump'>
			<img src="../../assets/img/logo.png">
			爱的成长是一点一滴的积累			
		</div>
	</div>
</template>
<script>
	export default{
		methods:{
			jump(){
				this.$router.push({name:'index'})
			}
		}
	}
</script>