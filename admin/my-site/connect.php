<?php
	header("Content-type: text/json;charset:utf-8;Access-Control-Allow-Origin:*");
	$con = mysqli_connect('localhost','root','','bishe') or die('连接失败啦');
	mysqli_query($con,'set names utf8')
?>