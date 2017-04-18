<?php
	require_once ('connect.php');
	$new = file_get_contents("php://input");
	$sql = "UPDATE `adminroot` SET `pas` = ".$new." WHERE `adminroot`.`ID` = 1";
	$result = mysqli_query($con,$sql);
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
?>