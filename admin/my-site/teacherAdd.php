<?php
	require_once ('connect.php');
	// require_once ('page.php');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// 处理数据
		$ID = $_POST['ID'];
		$p_name = $_POST['name'];
		$introduction1 = $_POST['introduction1'];
		$introduction2 = $_POST['introduction2'];

		//处理图片
		$file = $_FILES["files"];//得到传输的数据
		$image_name = "teacher_".$ID.".jpg";
		$file['name'] = $image_name;
		$name = $file['name'];
		$type = $file['type'];
		$tmp_name = $file['tmp_name'];
		$size = $file['size'];
		$upload_path = "D:\wamp64\www\my-site\img/"; //上传文件的存放路径
		//开始移动文件到相应的文件夹
		if(move_uploaded_file($tmp_name,$upload_path.$name)){
		//   echo $name;
		}else{
		//   echo "Failed!";
		}
		//图片地址
		$url = 'http://localhost:80/my-site/img/'.$name;
		$sql = "UPDATE `teacher` SET `name` = '".$p_name." ', `img` = '".$url."', `introduction1` = '".$introduction1."', `introduction2` = '".$introduction2." ' WHERE `teacher`.`ID` = ".$ID;
		$result = mysqli_query($con,$sql);
	}
	echo $sql;
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
?>
