<?php
	require_once ('connect.php');
	$new = file_get_contents("php://input");
	echo $new;
	$sql = "DELETE FROM `kecheng` WHERE `kecheng`.`id` = ".$new;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		# code...
		$result = mysqli_query($con,$sql);
	}
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
?>