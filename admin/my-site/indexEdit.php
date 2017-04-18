<?php
	require_once ('connect.php');
	// require_once ('page.php');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$chu = file_get_contents("php://input");
		// 解析json
		$chu_1 = json_decode($chu);
		$p_title = $chu_1->name;
		$p_slogan1 = $chu_1->slogan;
		$p_slogan2 = $chu_1->slogan1;
		$p_teacher_0 = $chu_1->teacher_0;
		$p_teacher_1 = $chu_1->teacher_1;
		$p_news_0 = $chu_1->news_0;
		$p_news_1 = $chu_1->news_1;
		$p_adress = $chu_1->adress;
		$p_email = $chu_1->email;
		$p_qq = $chu_1->qq;
		$p_tel = $chu_1->tel;
		$p_build_year = $chu_1->build_year;
		$p_kouhao = $chu_1->kouhao;
		$p_introduction = $chu_1->introduction;
		$sql = "UPDATE `indexpage` SET `title` = '".$p_title."', `slogan1` = '".$p_slogan1."', `slogan2` = '".$p_slogan2."', `teacher_0` = '".$p_teacher_0."', `teacher_1` = '".$p_teacher_1."', `news_0` = '".$p_news_0."', `news_1` = '".$p_news_1."', `adress` = '".$p_adress."', `email` = '".$p_email."', `service` = '".$p_qq."', `tel` = '".$p_tel."', `build_year` = '".$p_build_year."', `kouhao` = '".$p_kouhao."', `introduction` = '".$p_introduction."' WHERE `indexpage`.`id` = 1";
		// echo $sql;
	
		# code...
		$result = mysqli_query($con,$sql);
	}
	// 关闭数据库连接：mysql_close(连接到数据库的变量)
	mysqli_close($con);
?>
