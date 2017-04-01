<template>
	<section class="header_nav">
		<div class="logo">
			<img :src="data.logo">
		</div>
		<div class="title">
			<ul>				
				<li v-for='item in sorts' @click='jumpLink(item.href)'>{{item.title}}</li>
			</ul>
		</div>		
	</section>
</template>
<script>
  export default {
    data() {
      return {
        data:[],
      	sorts:[
      	{
      		href:'join',
      		title:'加盟',
      	},
      	{
      		href:'news',
      		title:'动态',
      	},
      	{
      		href:'curriculum',
      		title:'课程',
      	},
      	// {
      	// 	href:'introduct',
      	// 	title:'介绍',
      	// },
      	{
      		href:'/',
      		title:'首页',
      	},
      	]
      };
    }, 
    mounted(){
      this.axios.post(this.$store.state.root+'/index.php').then((res) =>{
        console.log(res)
        this.data = res.data.data[0]
      })
    },
    methods:{
  		jumpLink(href){
  			this.$router.push({path:href})
		},
	}
  }
</script>