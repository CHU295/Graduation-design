<template>
	<section class="header_nav">
		<div class="logo">
			<img src="../assets/img/logo.png">
		</div>
		<div class="title">
			<ul>				
				<li>联系我们</li>
				<li>动态</li>
				<li>课程</li>
				<li>介绍</li>
				<li>首页</li>
			</ul>
		</div>		
	</section>
</template>
<script>
  export default {
    data() {
      return {
        activeIndex: '1',
        activeIndex2: '1'
      };
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    }
  }
</script>