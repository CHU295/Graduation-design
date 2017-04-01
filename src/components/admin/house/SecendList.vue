<template>
	<div class="second-list">
		<div class="filter">
			<div>
				<el-dropdown trigger="click" class='border'>
			      <span class="el-dropdown-link">
			        房源类型<i class="el-icon-caret-bottom el-icon--right"></i>
			      </span>
			      <el-dropdown-menu slot="dropdown">
			        <el-dropdown-item>黄金糕</el-dropdown-item>
			        <el-dropdown-item>狮子头</el-dropdown-item>
			        <el-dropdown-item>螺蛳粉</el-dropdown-item>
			        <el-dropdown-item>双皮奶</el-dropdown-item>
			        <el-dropdown-item>蚵仔煎</el-dropdown-item>
			      </el-dropdown-menu>
			    </el-dropdown>
			    <el-dropdown trigger="click"  class='border'>
			      <span class="el-dropdown-link">
			        上架状态<i class="el-icon-caret-bottom el-icon--right"></i>
			      </span>
			      <el-dropdown-menu slot="dropdown">
			        <el-dropdown-item>黄金糕</el-dropdown-item>
			        <el-dropdown-item>狮子头</el-dropdown-item>
			        <el-dropdown-item>螺蛳粉</el-dropdown-item>
			        <el-dropdown-item>双皮奶</el-dropdown-item>
			        <el-dropdown-item>蚵仔煎</el-dropdown-item>
			      </el-dropdown-menu>
			    </el-dropdown>
			    <el-dropdown trigger="click"  class='border'>
			      <span class="el-dropdown-link">
			        推荐状态<i class="el-icon-caret-bottom el-icon--right"></i>
			      </span>
			      <el-dropdown-menu slot="dropdown">
			        <el-dropdown-item>黄金糕</el-dropdown-item>
			        <el-dropdown-item>狮子头</el-dropdown-item>
			        <el-dropdown-item>螺蛳粉</el-dropdown-item>
			        <el-dropdown-item>双皮奶</el-dropdown-item>
			        <el-dropdown-item>蚵仔煎</el-dropdown-item>
			      </el-dropdown-menu>
			    </el-dropdown>
			    <el-dropdown trigger="click"  class='border'>
			      <span class="el-dropdown-link">
			        标记<i class="el-icon-caret-bottom el-icon--right"></i>
			      </span>
			      <el-dropdown-menu slot="dropdown">
			        <el-dropdown-item>黄金糕</el-dropdown-item>
			        <el-dropdown-item>狮子头</el-dropdown-item>
			        <el-dropdown-item>螺蛳粉</el-dropdown-item>
			        <el-dropdown-item>双皮奶</el-dropdown-item>
			        <el-dropdown-item>蚵仔煎</el-dropdown-item>
			      </el-dropdown-menu>
			    </el-dropdown>
			    <input placeholder="小区名称" style="width: 80px;margin-right: 7px;"></input>
			    <span>面积</span>
			    <input></input>
			    <span>-</span>
			    <input style="margin-right: 7px;"></input>
			    <span>价格</span>
			    <input></input>
			    <span>-</span>
			    <input></input>
			    <span class="admin-search">搜索</span>
			</div>
		    <div>
		    	<el-dropdown trigger="click" class='border'>
		      <span class="el-dropdown-link">
		        按修改时间排序<i class="el-icon-caret-bottom el-icon--right"></i>
		      </span>
		      <el-dropdown-menu slot="dropdown">
		        <el-dropdown-item>黄金糕</el-dropdown-item>
		        <el-dropdown-item>狮子头</el-dropdown-item>
		        <el-dropdown-item>螺蛳粉</el-dropdown-item>
		        <el-dropdown-item>双皮奶</el-dropdown-item>
		        <el-dropdown-item>蚵仔煎</el-dropdown-item>
		      </el-dropdown-menu>
		    </el-dropdown>
		    </div>
		</div>
		<div class="all-edit">
			<div class="left">
				<span>批量删除</span>
			</div>
			<div class="right">
				<div>批量上架</div>
				<div>批量下架</div>
			</div>
		</div>
		<div class="list">
			<div class="strip">				
				<el-row style='width:100%;'>
				  <el-col :span="1"><div class="grid-content bg-purple-dark"><el-checkbox v-model="checked0"></el-checkbox></div></el-col>
				  <el-col :span="10"><div class="grid-content bg-purple-dark">房源信息</div></el-col>
				  <el-col :span="2"><div class="grid-content bg-purple-dark">房源类型</div></el-col>
				  <el-col :span="2"><div class="grid-content bg-purple-dark">操作日期</div></el-col>
				  <el-col :span="2"><div class="grid-content bg-purple-dark">状态</div></el-col>
				  <el-col :span="2"><div class="grid-content bg-purple-dark">是否推荐</div></el-col>
				  <el-col :span="2"><div class="grid-content bg-purple-dark">操作</div></el-col>
				</el-row>
			</div>
			<div class="strip-list" v-for='list in data'>
		    	<el-row class="list">
		    		<el-col :span="1"><div class="grid-content bg-purple-dark"><el-checkbox v-model="checked0"></el-checkbox></div></el-col>
		    	  <el-col :span="10"><div class="grid-content bg-purple-dark a">
		    	  	<div class="left">
		    	  		<img :src="list.img">
		    	  	</div>
		    	  	<div class="right">
		    	  		<div>
		    	  			<span>{{list.title}}</span>
		    	  			<span>ID:{{list.ID}}</span>
		    	  		</div>
		    	  		<div>
		    	  			<span>{{list.price}}</span>
		    	  			<span>{{list.area}}</span>
		    	  			<span>{{list.mold}}</span>
		    	  		</div>
		    	  		<div>
		    	  			{{list.introduction}}
		    	  		</div>
		    	  	</div>
		    	  </div></el-col>
		    	  <el-col :span="2"><div class="grid-content bg-purple-dark">{{list.type}}</div></el-col>
		    	  <el-col :span="2"><div class="grid-content bg-purple-dark"><span>{{list.create}} 创建</span><br><span>{{list.edit}} 修改</span></div></el-col>
		    	  <el-col :span="2"><div class="grid-content bg-purple-dark">{{list.status}}</div></el-col>
		    	  <el-col :span="2"><div class="grid-content bg-purple-dark">为推荐</div></el-col>
		    	  <el-col :span="2"><div class="grid-content bg-purple-dark">
		    	  	<div class="edit">
		    	  		编辑 | 删除 | 赋值<br>上架 | 推荐[2室]
		    	  	</div>		    	  	
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
    methods: {
      handleCheckAllChange(event) {
        this.checkedCities = event.target.checked ? cityOptions : [];
        this.isIndeterminate = false;
      },
      handleCheckedCitiesChange(value) {
        let checkedCount = value.length;
        this.checkAll = checkedCount === this.cities.length;
        this.isIndeterminate = checkedCount > 0 && checkedCount < this.cities.length;
      }
    }
  };
</script>