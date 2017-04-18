<?php 
	require_once ('connect.php');
	$file = $_FILES["files"];//得到传输的数据
	$image_name = md5(uniqid(rand())).".jpg";
	$file['name'] = "icon_show_".$image_name;
	var_dump($file);
	print_r($file);
	$name = $file['name'];
	$type = $file['type'];
	$tmp_name = $file['tmp_name'];
	$size = $file['size'];
	// //得到文件名称
	// $name = $file['name'];
	// $type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
	// $allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
	// //判断文件类型是否被允许上传
	// if(!in_array($type, $allow_type)){
	//   //如果不被允许，则直接停止程序运行
	//   return ;
	// }
	//判断是否是通过HTTP POST上传的
	// if(!is_uploaded_file($file['tmp_name'])){
	//   //如果不是通过HTTP POST上传的
	//   return ;
	// }
	$upload_path = "D:\wamp64\www\my-site\img/"; //上传文件的存放路径
	//开始移动文件到相应的文件夹
	if(move_uploaded_file($tmp_name,$upload_path.$name)){
	//   echo $name;
	}else{
	//   echo "Failed!";
	}
	$url = 'http://localhost:80/my-site/img/'.$name;
	$sql = "INSERT INTO `carous` (`id`, `url`) VALUES (NULL, '".$url."')";
	echo $sql;
	if ($_SERVER['REQUEST_METHOD'] == POST) {
		# code...
		$result = mysqli_query($con,$sql);
	}
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
 ?>