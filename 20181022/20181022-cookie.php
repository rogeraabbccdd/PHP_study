<?php
	/*
	setcookie(name,content,time,file & default is "/",dotmainname & default is localhost); 一個網站同時最多30組cookie
	setcookie("mycookie","1234");	//不加時間有效直到關閉，設定時間以秒為單位
	setcookie("mycookie","1234",time()+5);
	echo $_COOKIE["mycookie"];
	*/
	/*
	echo $_COOKIE["mycookie"];
	setcookie("mycookie","1234",time()+5*3600*24);	//有效1天的寫法
	setcookie("mycookie","1234",time()+0);	//設0秒時，等於立即清除
	echo $_COOKIE["mycookie"];
	*/
	/*
	setcookie("mycookie","1234",time()+10,"/file_a/");
	*/
	setcookie("mycookie","1234",time()+10,"/","127.0.0.1");


?>