<template>
	<div class="input-table">
		<div class="header-tag">
			<span class="a">住宅</span>
			<span>别墅</span>
			<span>商铺</span>
			<span>写字楼</span>
		</div>
		<div class="table">
		<el-form :label-position="labelPosition" label-width="100px" :model="form"  :inline="true">
			<div class="table-header"><span>基本信息</span>(标星号为必填)</div>
			<div class="main">
				
				  <el-form-item label="房源编号">
				    <el-input v-model="form.name"></el-input>
				  </el-form-item>
				  <br>
				  <el-form-item label="小区名称">
				    <el-input v-model="form.region"></el-input>
				  </el-form-item>
				  <br>
				  <el-form-item label="类型">
				      <el-radio-group v-model="form.resource">
				        <el-radio label="住宅"></el-radio>
				        <el-radio label="公寓"></el-radio>
				        <el-radio label="农居房"></el-radio>
				        <el-radio label="排房"></el-radio>
				        <el-radio label="其它"></el-radio>
				      </el-radio-group>
				    </el-form-item>
				    <br>
				  <el-form-item label="户型">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item>
				  <span>室</span>
				  <el-form-item label="">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item>
				  <span>厅</span>
				  <el-form-item label="">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item>
				  <span>卫</span>
				  <el-form-item label="">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item>
				  <span>厨</span>
				  <el-form-item label="">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item>
				  <span>阳台</span>
				  <br>
				  <el-form-item label="建筑面积">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item><br>
				  <el-form-item label="使用面积">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item><br>
				  <el-form-item label="售价">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item><br>
				  <el-form-item label="楼层">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item>
				  <br>
				  <el-form-item label="年代">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item><br>
				  <el-form-item label="朝向">
				      <el-radio-group v-model="form.area">
				        <el-radio label="南北"></el-radio>
				        <el-radio label="东南"></el-radio>
				        <el-radio label="正东"></el-radio>
				        <el-radio label="正南"></el-radio>
				        <el-radio label="正西"></el-radio>
				        <el-radio label="东西"></el-radio>
				        <el-radio label="西南"></el-radio>
				        <el-radio label="东北"></el-radio>
				        <el-radio label="西北"></el-radio>
				        <el-radio label="未知"></el-radio>
				      </el-radio-group>
				    </el-form-item>
				    <br>
				    <el-form-item label="装修">
				      <el-radio-group v-model="form.Renovation">
				        <el-radio label="豪装"></el-radio>
				        <el-radio label="中装"></el-radio>
				        <el-radio label="简装"></el-radio>
				        <el-radio label="毛培"></el-radio>
				        <el-radio label="精装"></el-radio>
				        <el-radio label="其他装修"></el-radio>
				      </el-radio-group>
				    </el-form-item>
				    <br>
			</div>
			<div class="table-header"><span>特色信息</span>(信息越完整点击率越高)</div>
			<div class="main">
				<el-form-item label="其他说明">
				  <el-select v-model="form.region" placeholder="请选择价格条件">
				    <el-option label="区域一" value="shanghai"></el-option>
				    <el-option label="区域二" value="beijing"></el-option>
				  </el-select>
				  <el-select v-model="form.region" placeholder="请选择价格条件">
				    <el-option label="区域一" value="shanghai"></el-option>
				    <el-option label="区域二" value="beijing"></el-option>
				  </el-select>
				  <el-select v-model="form.region" placeholder="请选择价格条件">
				    <el-option label="区域一" value="shanghai"></el-option>
				    <el-option label="区域二" value="beijing"></el-option>
				  </el-select>
				</el-form-item><br>
				<el-form-item label="配套设施">
				    <el-checkbox-group v-model="form.type">
				      <el-checkbox label="厨房" name="type"></el-checkbox>
				      <el-checkbox label="电梯" name="type"></el-checkbox>
				      <el-checkbox label="床" name="type"></el-checkbox>
				      <el-checkbox label="家具" name="type"></el-checkbox>
				      <el-checkbox label="有线电视" name="type"></el-checkbox>
				      <el-checkbox label="宽带网" name="type"></el-checkbox>
				      <el-checkbox label="电话" name="type"></el-checkbox>
				      <br>
				      <el-checkbox label="热水器" name="type"></el-checkbox>
				      <el-checkbox label="电视机" name="type"></el-checkbox>
				      <el-checkbox label="空调" name="type"></el-checkbox>
				      <el-checkbox label="洗衣机" name="type"></el-checkbox>
				      <el-checkbox label="冰箱" name="type"></el-checkbox>
				      <el-checkbox label="煤气" name="type"></el-checkbox>
				      <el-checkbox label="暖气" name="type"></el-checkbox>
				      <br>
				      <el-checkbox label="汽车库" name="type"></el-checkbox>
				      <el-checkbox label="独立卫生间" name="type"></el-checkbox>
				      <el-checkbox label="公共卫生间" name="type"></el-checkbox>
				      <el-checkbox label="独立厨房" name="type"></el-checkbox>
				      <el-checkbox label="阳台" name="type"></el-checkbox>
				    </el-checkbox-group>
				  </el-form-item><br>
				  <el-form-item label="配套设施">
				    <el-checkbox-group v-model="form.type">
				      <el-checkbox label="精装全配" name="type"></el-checkbox>
				      <el-checkbox label="实用两房" name="type"></el-checkbox>
				      <el-checkbox label="精致三房" name="type"></el-checkbox>
				      <el-checkbox label="房东急售" name="type"></el-checkbox>
				      <el-checkbox label="有匙急看" name="type"></el-checkbox>
				      <el-checkbox label="多层" name="type"></el-checkbox>
				      <br>
				      <el-checkbox label="学区房" name="type"></el-checkbox>
				      <el-checkbox label="无营业税" name="type"></el-checkbox>
				      <el-checkbox label="地铁房" name="type"></el-checkbox>
				      <el-checkbox label="景观房" name="type"></el-checkbox>
				      <el-checkbox label="品牌楼层" name="type"></el-checkbox>
				    </el-checkbox-group>
				  </el-form-item><br>
				  <el-form-item label="房源标签">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item><br>
			</div>
			<div class="table-header"><span>详细信息</span>(必填)</div>
			<div class="main">
				<el-form-item label="房源标题">
				    <el-input v-model="form.type"></el-input>
				  </el-form-item><br>
				  <el-form-item label="活动形式">
				     <el-input type="textarea" v-model="form.desc"></el-input>
				   </el-form-item>
			</div>
			<div class="table-header"><span>房源配图</span>(多图房源比一般房源高出15%的点击率)</div>
			<dd class="title-notice">
				<div>室内图</div>
				<span>最多上传10张，还能上传10张</span>				
			</dd>
			<dd class="imga">
				<el-upload
				  action="//jsonplaceholder.typicode.com/posts/"
				  list-type="picture-card"
				  :on-preview="handlePictureCardPreview"
				  :on-remove="handleRemove">
				  <i class="el-icon-plus"></i>
				</el-upload>
				<el-dialog v-model="dialogVisible" size="tiny">
				  <img width="100%" :src="dialogImageUrl" alt="">
				</el-dialog>
			</dd>
			<dd class="title-notice">
				<div>户内图</div>
				<span>最多上传4张，还能上传4张</span>				
			</dd>
			<dd class="imga">
				<!-- <el-upload
				  action="//jsonplaceholder.typicode.com/posts/"
				  list-type="picture-card"
				  :on-preview="handlePictureCardPreview"
				  :on-remove="handleRemove">
				  <i class="el-icon-plus"></i>
				</el-upload>
				<el-dialog v-model="dialogVisible1" size="tiny">
				  <img width="100%" :src="dialogImageUrl1" alt="">
				</el-dialog> -->
			</dd>			
		</el-form>
		</div>
	</div>
</template>
<script>
  export default {
    data() {
      return {
        labelPosition: 'right',
        form: {
          name: '',
          region: '',
          type: '',
          resource: '',
          area: '',
          Renovation: '',
        },
        dialogImageUrl: '',
        dialogVisible: false,
      };
    },
    methods: {
      handleRemove(file, fileList) {
        console.log(file, fileList);
      },
      handlePictureCardPreview(file) {
        this.dialogImageUrl = file.url;
        this.dialogVisible = true;
      }
    }
  }
</script>