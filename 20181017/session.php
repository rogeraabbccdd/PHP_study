<?php
	session_start(); //使用SESSION變數前一定要宣告，前面不可有HTML語法
	/*
	$_SESSION["a02"][]="aaa";
	$_SESSION["a02"][]="bbb";
	$_SESSION["a02"][]="ccc";
	$_SESSION["a02"][]="ddd";
	*/
	unset($_SESSION["a01"]);		//使用過的session會記錄在server內，除非清除掉使用unset，跟cookie不同。常用於login/pwd
	unset($_SESSION["a02"]);


?>
