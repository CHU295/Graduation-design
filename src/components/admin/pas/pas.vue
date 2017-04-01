<template>
	<section>
		<el-form ref="form" :model="form" label-width="150px">
		  <el-form-item label="管理员账号">
		    {{name}}
		  </el-form-item>
		  <el-form-item label="原始密码">
		    <el-input v-model="pas0"></el-input>
		  </el-form-item>
      <el-form-item label="请输入新密码">
        <el-input v-model="form.pas"></el-input>
      </el-form-item>
		  <el-form-item label="重新输入确认新密码">
		    <el-input v-model="pas1"></el-input>
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
        form: {
          pas:'',
        },
        pas0:'',
        pas1:'',
        name:'',
        pas:'',
      }
    },
    created(){
    	this.getData()
    },
    methods: {
      onSubmit() {
        console.log('submit!');
        if (this.pas1 == this.form.pas && this.pas0 == this.pas) {
          this.update()
        }else{
          alert('你输入的密码有误')
        }        
      },
      getData(){
      	this.axios.post(this.$store.state.root+'/login.php').then((res) =>{
          this.name = res.data.data[0].name
      	  this.pas = res.data.data[0].pas
      	})
      },
      update(){
        var a = this.form
        console.log()
        this.axios.post(this.$store.state.root+'/loginChange.php',a,{headers: {'Content-Type': 'application/x-www-form-urlencoded;application/json;'}}).then((res) =>{
          console.log(res)
        })
      }
    }
  }
</script>