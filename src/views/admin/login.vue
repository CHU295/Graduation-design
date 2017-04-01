<template>
	<div>
		<login-header></login-header>
		<login-table></login-table>
	</div>
</template>
<script>
import LoginHeader from '../../components/admin/LoginHeader.vue'
import LoginTable from '../../components/admin/LoginTable.vue'
	export default{
		components:{
			LoginHeader,
			LoginTable,
		}
	}
</script>