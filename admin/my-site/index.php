<?php
	require_once ('connect.php');
	// require_once ('page.php');
	$sql = "SELECT * FROM indexPage";
	$result = mysqli_query($con,$sql);
	$array = array();//自定义一个数组，存放数据
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
		//从返回到$row中所有的数据中取出需要的字段，并把它储存在数组$array中
		$array[$i]['id'] = $row['id'];
		$array[$i]['title'] = $row['title'];
		$array[$i]['logo'] = $row['logo'];
		$array[$i]['slogan1'] = $row['slogan1'];
		$array[$i]['slogan2'] = $row['slogan2'];
		$array[$i]['adress'] = $row['adress'];
		$array[$i]['email'] = $row['email'];
		$array[$i]['service'] = $row['service'];
		$array[$i]['tel'] = $row['tel'];
		$array[$i]['build_year'] = $row['build_year'];
		$array[$i]['kouhao'] = $row['kouhao'];
		$array[$i]['introduction'] = $row['introduction'];
		$array[$i]['teacher_0'] = $row['teacher_0'];
		$array[$i]['teacher_1'] = $row['teacher_1'];
		$array[$i]['news_0'] = $row['news_0'];
		$array[$i]['news_1'] = $row['news_1'];
		$i ++;
	}
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
	// 将结果转换为JSON输出到客户端
	$json = json_encode(
	    //array()是组织要显示的数据结构
	    array(
	        "resultCode"=>200,
	        "message"=>"success",
	        "data"=>$array
	    )
	); //转换为JSON
	echo ($json); //显示在客户端
?>