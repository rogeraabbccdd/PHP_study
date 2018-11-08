<?php

function check_login(){
	if (empty($_SESSION["id"])) {
		header("location:main.php?g=login");
		exit();
	}
	else {
		$go_login=$_SESSION["id"].'<a href="?g=logout"><span id="login2">登出</span><a/>';	//如果屬於登入狀態，改變LOGIN為LOGOUT
		return $go_login;
	}
}


function web_log($log){	//記錄所有新增修改刪除的使用紀錄，把步驟寫成function，因此每次有需要紀錄的動作就呼叫此函式
	$link=mysqli_connect("localhost","root","","a2018");
	mysqli_query($link,"set names utf8") or die("資料庫連結發生錯誤");
	$nt=strtotime("+7hour");
	$time=date("Y-m-d H:i:s",$nt);
	$sql="insert into w06_web_log value(null,'".$_SESSION[id]."','".$log."','".$time."')";
	mysqli_query($link,$sql);

}
?>