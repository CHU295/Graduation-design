<?php
	require_once ('connect.php');
	// require_once ('page.php');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// 处理数据
		$title = $_POST['title'];
		$time = $_POST['time'];
		$section = $_POST['section'];
		$sql = "INSERT INTO `kecheng` (`id`, `title`, `time`, `img`, `section`) VALUES (NULL, '".$title."', '".$time."', '', '".$section."')";
		$result = mysqli_query($con,$sql);
		// 图片地址存档
		$id = mysqli_insert_id($con);

		//处理图片
		$file = $_FILES["files"];//得到传输的数据
		$image_name = "col_".$id.".jpg";
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
				
		$sql1 = "UPDATE `kecheng` SET `img` = '".$url."' WHERE `kecheng`.`id` = ".$id;
		$result1 = mysqli_query($con,$sql1);
	}
	// echo $id;
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
?>
