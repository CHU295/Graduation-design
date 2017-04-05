<template>
	<div class="second-list">
		<div class="all-edit">
			<div class="left">
				<span>走马灯</span>
			</div>
		</div>
		<div class="list">
			<div class="strip">				
				<el-row style='width:100%;'>
				  <el-col :span="1"><div class="grid-content bg-purple-dark"><el-checkbox v-model="checked0"></el-checkbox></div></el-col>
				  <el-col :span="6"><div class="grid-content bg-purple-dark">ID</div></el-col>
				  <el-col :span="11"><div class="grid-content bg-purple-dark">图片</div></el-col>
				  <el-col :span="5"><div class="grid-content bg-purple-dark">操作</div></el-col>
				</el-row>
			</div>
			<div class="strip-list" v-for='list in data'>
		    	<el-row class="list">
                   <el-col :span="1"><el-checkbox v-model="checked0"></el-checkbox></el-col>
                   <el-col :span="6">{{list.id}}</el-col>
                   <el-col :span="11"><img :src="list.url"></el-col>
		    	  <el-col :span="5">
		    	  	<div class="edit" @click='delete1(list)'>
		    	  		删除 	    	  			    	  	
		    	  </div></el-col>
		    	</el-row>
			</div>
		</div>
	</div>
</template>
<script>
  const cityOptions = ['上海', '北京', '广州', '深圳'];
  export default {
    data() {
      return {
        checkAll: false,
        checkedCities: [],
        cities: cityOptions,
        isIndeterminate: true,
        checked0:false,
        data:[
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'未上架',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'未上架',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'未上架',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'未上架',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'未上架',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'0',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'0',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'0',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'0',
        	},
        	{
        		// img:require('../../../assets/img/icon_admin_second_list_1.jpg'),
        		title:'都市水乡水碧苑',
        		ID:'10050747',
        		price:'150万元',
        		area:'68m²',
        		mold:'2房1厅1卫0阳台',
        		introduction:'年轻人的首选居住环境！！',
        		type:'公寓(小区房)',
        		create:'03-10',
        		edit:'03-10',
        		status:'0',
        	}
        ]
      };
    },
    mounted(){
    this.axios.post(this.$store.state.root+'/carous.php').then((res) =>{
        console.log(res.data)
        this.data = res.data.data
      })
  },
    methods: {
      handleCheckAllChange(event) {
        this.checkedCities = event.target.checked ? cityOptions : [];
        this.isIndeterminate = false;
      },
      handleCheckedCitiesChange(value) {
        let checkedCount = value.length;
        this.checkAll = checkedCount === this.cities.length;
        this.isIndeterminate = checkedCount > 0 && checkedCount < this.cities.length;
      },
      delete1(list){
        console.log(list)
        this.axios.post(this.$store.state.root+'/carDelete.php',list.id).then((res) =>{
            console.log(res.data)
          })
        this.$router.go(0)
      }
    }
  };
</script>