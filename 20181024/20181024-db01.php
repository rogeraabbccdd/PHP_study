<?php
	include_once("20181024-setdb.php");	//設定資料庫語法並用變數記錄起來
	/*
	$sql = "insert into w04_player value(null,'user4','pw4','num4')";	//在資料庫中執行變數內容
	mysqli_query($link,$sql);
	*/
	
	/*
	test
	新增5筆DB，刪除索引1.3.5.7的DB
	*/
	/*$sql1="
	insert into w04_player value
	(null,'user5','pw5','num5'),
	(null,'user6','pw6','num6'),
	(null,'user7','pw7','num7'),
	(null,'user8','pw8','num8'),
	(null,'user9','pw9','num9')";
	*/
	$sql2="delete from w04_player where find_in_set(p_seq,'1,3,5,7')";
	/* same line 20
	for($i=1;$i<=7;$i+=2){
		$sql="delete from w04_player where p_seq='".$i."'";
	}
	*/
	
	
	//mysqli_query($link,$sql1);
	mysqli_query($link,$sql2);
	
?>