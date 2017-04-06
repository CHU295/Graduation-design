<template>
	<section>
		<el-form ref="form" :model="form" label-width="120px">
		  <el-form-item label="网站名称">
		    <el-input v-model="form.name" style='width: 200px;'></el-input>
		  </el-form-item>
		  <el-form-item label="宣传语">
		    <el-input v-model="form.slogan" style='width: 500px;'></el-input>
		  </el-form-item>
      <el-form-item label="宣传主体">
        <el-input v-model="form.slogan1" style='width: 500px;'></el-input>
      </el-form-item>
      <el-form-item label="名师栏目名">
        <el-input v-model="form.teacher_0" style='width: 200px;'></el-input>
      </el-form-item>
      <el-form-item label="名师栏目宣传语">
        <el-input v-model="form.teacher_1" style='width: 500px;'></el-input>
      </el-form-item>
      <el-form-item label="动态栏目名">
        <el-input v-model="form.news_0" style='width: 200px;'></el-input>
      </el-form-item>
      <el-form-item label="动态栏目宣传语">
        <el-input v-model="form.news_1" style='width: 500px;'></el-input>
      </el-form-item>
		  <el-form-item label="地址">
		    <el-input v-model="form.adress" style='width: 350px;'></el-input>
		  </el-form-item>
		  <el-form-item label="邮箱">
		    <el-input v-model="form.email" style='width: 200px;'></el-input>
		  </el-form-item>
      <el-form-item label="QQ">
        <el-input v-model="form.qq" style='width: 200px;'></el-input>
      </el-form-item>

      <el-form-item label="加盟页面">        
      </el-form-item>
      <el-form-item label="宣传语">
        <el-input v-model="form.kouhao" style='width: 500px;'></el-input>
      </el-form-item>
      <el-form-item label="成立年份">
        <el-input v-model="form.build_year" style='width: 200px;'></el-input>
      </el-form-item>
      <el-form-item label="联系电话">
        <el-input v-model="form.tel" style='width: 200px;'></el-input>
      </el-form-item>
      <el-form-item label="介绍">
          <el-input type="textarea" :autosize="{ minRows: 2, maxRows: 20}" v-model="form.introduction" ></el-input>
        </el-form-item>
		  <el-form-item>
		    <el-button type="primary" @click="onSubmit">确定修改</el-button>
		  </el-form-item>
		</el-form>
	</section>
</template>
<script>
  export default {
    data() {
      return {
        data:[],
        form: {
          name: '',
          slogan:'',
          slogan1:'',
          adress:'',
          email:'',
          qq:'',
          teacher_0:'',
          teacher_1:'',
          news_0:'',
          news_1:'',
          tel:'',
          build_year:'',
          kouhao:'',
          introduction:'',
        }
      }
    },
    created(){
    	this.getData()
    },
    methods: {
      onSubmit() {
        console.log('submit!');
        this.update()
      },
      getData(){
      	this.axios.post(this.$store.state.root+'/index.php').then((res) =>{
          console.log(res)
      	  this.data = res.data.data[0]
      	  this.form.name = this.data.title
      	  this.form.email = this.data.email
      	  this.form.adress = this.data.adress
          this.form.slogan = this.data.slogan1
          this.form.slogan1 = this.data.slogan2
          this.form.teacher_0 = this.data.teacher_0
          this.form.teacher_1 = this.data.teacher_1
          this.form.news_0 = this.data.news_0
          this.form.news_1 = this.data.news_1
          this.form.qq = this.data.service
          this.form.tel = this.data.tel
          this.form.build_year = this.data.build_year
          this.form.kouhao = this.data.kouhao
      	  this.form.introduction = this.data.introduction
      	})
      },
      update(){
        var a = this.form
        this.axios.post(this.$store.state.root+'/indexEdit.php',a, {header:{'Access-Control-Allow-Origin':'*'}}).then((res) =>{
          console.log(res)
          // this.$router.go(0)
        })
      }
    }
  }
</script>