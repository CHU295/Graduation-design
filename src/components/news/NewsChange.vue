<template>
	<div class="news_page_change">
		<div class="news_page_change_div">
			<el-pagination
			      @size-change="handleSizeChange"
			      @current-change="handleCurrentChange"
			      :current-page="currentPage1"
			      :page-sizes="[100, 200, 300, 400]"
			      :page-size="100"
			      layout="total, sizes, prev, pager, next, jumper"
			      :total="data0/1">
			    </el-pagination>
		</div>
	</div>
</template>
<script>
  export default {
    props:['data0'],
    methods: {
      handleSizeChange(val) {
        console.log(`每页 ${val} 条`);
      },
      handleCurrentChange(val) {
        this.currentPage = val;
        console.log(`当前页: ${val}`);
      }
    },
    data() {
      return {
        currentPage1: 1,
      };
    }
  }
</script>