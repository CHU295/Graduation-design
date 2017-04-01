<template>
	<div>
		<h4>菜单列表</h4>
		<ul>
			<li v-for='item in sort' @click=jump(item.b)><a :class='item.b == aTemplate?"choose":""'>{{item.a}}</a></li>
		</ul>
	</div>
</template>
<script>
  export default {
    props:['aTemplate'],
    data() {
      return {
        sort:[
        	{
        		a:'首页介绍',b:1
        	},
        	{
        		a:'名师专栏',b:2
        	},
        	// {
        	// 	a:'底部管理',b:3
        	// },
        	{
        		a:'新闻列表',b:4
        	},
        	{
        		a:'新闻添加',b:5
        	},
        	{
        		a:'课程列表',b:6
        	},
        	{
        		a:'课程添加',b:7
        	},
        	{
        		a:'修改密码',b:8
        	},
        ]
      };
    },
    methods:{
    	jump(b){
    		this.$emit('change',b)
    	},
    }
  }
</script>