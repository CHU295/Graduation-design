<template>
	<div class="introduction">
		<div class="introduction_top">
			<div class="introduction_logo">
				<img :src="data.logo">
			</div>
		</div>
		<div class="introduction_bottom">
			<div class="introduction_Slogan">
				<span>{{data.slogan1}}</span><br>
				<span>{{data.slogan2}}</span>
			</div>
			<!-- <div class="introduction_go">
				more
			</div>
 -->		</div>
	</div>
</template>
<script>
	export default{
    props:['data'],
}
</script>