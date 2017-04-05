<template>
	<section>
		<el-form ref="form" :model="form" label-width="80px">
		  <el-form-item label="网站名称">
		    <el-input v-model="form.name"></el-input>
		  </el-form-item>
		  <el-form-item label="宣传语">
		    <el-input v-model="form.slogan"></el-input>
		  </el-form-item>
      <el-form-item label="宣传主体">
        <el-input v-model="form.slogan1"></el-input>
      </el-form-item>
		  <el-form-item label="地址">
		    <el-input v-model="form.adress"></el-input>
		  </el-form-item>
		  <el-form-item label="邮箱">
		    <el-input v-model="form.email"></el-input>
		  </el-form-item>
      <el-form-item label="QQ">
        <el-input v-model="form.qq"></el-input>
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
      	  this.form.qq = this.data.service
      	})
      },
      update(){
        var a = this.form
        this.axios.post(this.$store.state.root+'/indexEdit.php',a, {header:{'Access-Control-Allow-Origin':'*'}}).then((res) =>{
          console.log(res)
          this.$router.go(0)
        })
      }
    }
  }
</script>