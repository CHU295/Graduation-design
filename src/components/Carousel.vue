<template>
<section class="carousel_area">
    <el-carousel :interval="4000" type="card" height="600px">
      <el-carousel-item v-for="(item,index) in img" :key="item.id">
        <img class="carousel_img" :src="item.url">
      </el-carousel-item>
    </el-carousel>
</section>
</template>
<script>
  export default{
    data(){
      return{
        img:[
          {url:require('../assets/img/icon_show_1.jpg')},
          {url:require('../assets/img/icon_show_2.jpg')},
          {url:require('../assets/img/icon_show_3.jpg')},
          {url:require('../assets/img/icon_show_4.jpg')},
          {url:require('../assets/img/icon_show_5.jpg')},
          {url:require('../assets/img/icon_show_6.jpg')},
        ]
      }
    }
  }
</script>
<style>
  .el-carousel__item h3 {
    color: #475669;
    font-size: 14px;
    opacity: 0.75;
    line-height: 200px;
    margin: 0;
  }
  
  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
  }
  
  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
  }
  .carousel_img{
    width: 100%;
    height: 100%;
  }
  .carousel_area{
    padding-top: 2.2rem;
    background-color: #f0f2f1;
  }
</style>