<template>
	<section>
		<dd class="case">成功案例</dd>
		<el-row type="flex" class="row-bg case_table" justify="space-around">
		  <el-col :span="6"><div class="grid-content bg-purple">
		  	<img src="../../assets/img/news_1.jpg" alt="" class="img-circle">
		  </div></el-col>
		  <el-col :span="6"><div class="grid-content bg-purple">
		  	<img src="../../assets/img/news_1.jpg" alt="" class="img-circle">
		  </div></el-col>
		  <el-col :span="6"><div class="grid-content bg-purple">
		  	<img src="../../assets/img/news_1.jpg" alt="" class="img-circle">
		  </div></el-col>
		</el-row>
	</section>
</template>
<style>
	.case{
		text-align: center;
		font-size: 40px;
		border-top: 1px dashed #DFDFDF;
		font-weight: bold;
	}
	.case_table{
		margin: 0 auto;
	}
	.case_table img{
		width: 100%;
		height: 100%;
		border-radius: 50%;
	}
	.case_table div{
		margin: 30px 0;
		height: 400px;
	}
</style>