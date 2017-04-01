<template>
	<section>
		<header-nav></header-nav>
		<div class="admin-main">
			<div class="admin-tag">
				<side-bar></side-bar>
			</div>
			<div class="admin-body">
				<input-header></input-header>
				<input-table></input-table>
			</div>			
		</div>		
	</section>
</template>
<script>
import HeaderNav from '../../../components/admin/HeaderNav.vue'
import SideBar from '../../../components/admin/SideBar.vue'
import InputHeader from '../../../components/admin/house/InputHeader.vue'
import InputTable from '../../../components/admin/house/InputTable.vue'
	export default{
		components:{
			HeaderNav,
			SideBar,
			InputHeader,
			InputTable,
		}
	}
</script>