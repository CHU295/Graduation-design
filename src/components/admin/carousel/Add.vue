<template>
	<div>
		<input type="file" name="cxk" id='car_add'>
    <el-button type="primary" @click='submit'>提交</el-button>
	</div>
</template>
<script>
  export default {
    data() {
      return {
        dialogImageUrl: '',
        dialogVisible: false
      };
    },
    methods: {
      submit(){
        var images = new FormData()
        images.append('files',document.getElementById('car_add').files[0])
        this.axios.post(this.$store.state.root+'/carousAdd.php',images).then((res) =>{
          console.log(res.data)
        })
      }
    }
  }
</script>