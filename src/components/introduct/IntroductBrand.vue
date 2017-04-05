<template>
	<div class="introduct_brand">
	 	<h1>{{data.kouhao}}</h1>
		<div class="introduct_brand_main">
			<h1>{{data.build_year}}</h1>
			<p>{{data.introduction}}</p>
			<div class="introduct_brand_main1">
				<h2>{{data.tel}}</h2>
			</div>
		</div>
	</div>
</template>
<script>
	export default{
		props:['data'],
	}
</script>