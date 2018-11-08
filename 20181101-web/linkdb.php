<?php
	session_start();
	$link=mysqli_connect("localhost","root","","a2018");
	mysqli_query($link,"set names utf8") or die("資料庫連結發生錯誤");
	$nt=strtotime("+7hour");
	$time=date("Y-m-d H:i:s",$nt);
	echo $time;
?>