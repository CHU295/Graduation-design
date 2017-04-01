<template>
	<div class="curriculum_detail" @click.stop=''>
		<h2>{{news_choose.title}}</h2>
		<h3>适合年龄：{{news_choose.time}}</h3>
		<p>{{news_choose.section}}</p>
	</div>
</template>
<script>
	export default{
		props:['news_choose']
	}
</script>