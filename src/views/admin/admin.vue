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
				<news-add v-if='aTemplate==5'></news-add>
				<col-list v-if='aTemplate==6'></col-list>
				<col-add v-if='aTemplate==7'></col-add>
				<pas v-if='aTemplate==8'></pas>
				<carousel v-if='aTemplate==9'></carousel>
				<add v-if='aTemplate==10'></add>
			</div>		
		</div>		
	</section>
</template>
<script>
import HeaderNav from '../../components/admin/HeaderNav.vue'
import SideBar from '../../components/admin/SideBar.vue'
import IndexPage from '../../components/admin/indexPage/IndexPage.vue'
import NewsList from '../../components/admin/news/NewsList.vue'
import NewsAdd from '../../components/admin/news/NewsAdd.vue'
import ColList from '../../components/admin/col/ColList.vue'
import ColAdd from '../../components/admin/col/ColAdd.vue'
import pas from '../../components/admin/pas/pas.vue'
import carousel from '../../components/admin/carousel/carousel.vue'
import Add from '../../components/admin/carousel/Add.vue'
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
			NewsAdd,
			ColList,
			ColAdd,
			pas,
			carousel,
			Add,
		},
		methods:{
			change(a){
				console.log(a)
				this.aTemplate = a
			}
		},

	}
</script>