<template>
	<section>
		<header-nav></header-nav>
		<div class="admin-main">
			<div class="admin-tag">
				<side-bar @change='change' :aTemplate='aTemplate'></side-bar>
			</div>
			<div class="admin-body">
				<index-page v-if='aTemplate==1'></index-page>
				<news-list v-if='aTemplate==4'></news-list>
				<col-list v-if='aTemplate==6'></col-list>
				<pas v-if='aTemplate==8'></pas>
			</div>		
		</div>		
	</section>
</template>
<script>
import HeaderNav from '../../components/admin/HeaderNav.vue'
import SideBar from '../../components/admin/SideBar.vue'
import IndexPage from '../../components/admin/indexPage/IndexPage.vue'
import NewsList from '../../components/admin/news/NewsList.vue'
import ColList from '../../components/admin/col/ColList.vue'
import pas from '../../components/admin/pas/pas.vue'
	export default{
		data(){
			return{
        		aTemplate:1, 
			}
		},
		components:{
			HeaderNav,
			SideBar,
			IndexPage,
			NewsList,
			ColList,
			pas,
		},
		methods:{
			change(a){
				console.log(a)
				this.aTemplate = a
			}
		},

	}
</script>