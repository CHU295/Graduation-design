<template>
	<div class="contract">
		<div class="Customer_service">
		<a href="tencent://message/?uin=873056156">客服</a></div>
		<div class="weichat_service">
			<img src="../assets/img/weixin2.png" @mouseenter='show' @mouseleave='show'>
			<img class="weichat_contract" src="../assets/img/weichat_contract.jpg" v-if='weichat_contract'>
		</div>
		<div>
			<a href="#top"><i class="el-icon-arrow-up"></i></a>
		</div>
	</div>
</template>
<script>
export default{
	data(){
		return{
			weichat_contract:false,
		}
	},
	methods:{
		show(){
			this.weichat_contract=!this.weichat_contract
		}
	}
}
</script>