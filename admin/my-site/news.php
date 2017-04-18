<?php
	require_once ('connect.php');
	// require_once ('page.php');
	$sql = "SELECT * FROM news";
	$sql1 = "SELECT COUNT(*) AS count FROM news";
	$result = mysqli_query($con,$sql);
	$result1 = mysqli_query($con,$sql1);
	$array = array();//自定义一个数组，存放数据
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
		//从返回到$row中所有的数据中取出需要的字段，并把它储存在数组$array中
		$array[$i]['id'] = $row['id'];
		$array[$i]['title'] = $row['title'];
		$array[$i]['time'] = $row['time'];
		$array[$i]['img'] = $row['img'];
		$array[$i]['section'] = $row['section'];
		$i ++;
	}
	   $rs=mysqli_fetch_array($result1);
	   //统计结果
	   $count=$rs[0];
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
	// 将结果转换为JSON输出到客户端
	$json = json_encode(
	    //array()是组织要显示的数据结构
	    array(
	        "resultCode"=>200,
	        "message"=>"success",
	        "data"=>$array,
	        "data0"=>$count
	    )
	); //转换为JSON
	echo ($json); //显示在客户端
?>