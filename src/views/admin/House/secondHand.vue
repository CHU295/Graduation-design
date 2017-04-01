<template>
	<section>
		<header-nav></header-nav>
		<div class="admin-main">
			<div class="admin-tag">
				<side-bar></side-bar>
			</div>
			<div class="admin-body">
				<secend-header></secend-header>
				<secend-list></secend-list>
			</div>			
		</div>		
	</section>
</template>
<script>
import HeaderNav from '../../../components/admin/HeaderNav.vue'
import SideBar from '../../../components/admin/SideBar.vue'
import SecendHeader from '../../../components/admin/house/SecendHeader.vue'
import SecendList from '../../../components/admin/house/SecendList.vue'
	export default{
		components:{
			HeaderNav,
			SideBar,
			SecendHeader,
			SecendList,
		}
	}
</script>