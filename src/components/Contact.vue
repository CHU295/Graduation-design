<template>
	<div class="contract">
		<div class="Customer_service">
		<a :href="tel">客服</a></div>
		<div class="weichat_service">
			<img src="../assets/img/weixin2.png" @mouseenter='show' @mouseleave='show'>
			<img class="weichat_contract" src="../assets/img/weichat_contract.jpg" v-if='weichat_contract'>
		</div>
		<div>
			<a style="cursor: pointer" @click="toTop"><i class="el-icon-arrow-up"></i></a>
		</div>
	</div>
</template>
<script>
export default{
    props:['data'],
	data(){
		return{
			weichat_contract:false,
			tel:'',
		}
	},
	mounted(){
	    this.axios.post(this.$store.state.root+'/index.php').then((res) =>{
	      this.tel = 'tencent://message/?uin='+res.data.data[0].service
	    })
	  },
	methods:{
		show(){
			this.weichat_contract=!this.weichat_contract
		},
		toTop: function() {
		  let leader = document.scrollingElement.scrollTop, target = 0, timer = null;
		  timer = setInterval(function(){
		      leader = leader + (target - leader) / 5;
		      window.scrollTo(0,leader);
		      if (Math.floor(leader) === 0) {
		          clearInterval(timer);
		          document.scrollingElement.scrollTop = null;
		          console.log(document.scrollingElement.scrollTop);
		      }
		  },30)
		}
	}
}
</script>