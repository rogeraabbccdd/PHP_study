<?php
	include_once("20181024-setdb.php");
	$sql="select * from w04_player";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);//結果轉換為陣列
	
	do{
		echo $row["p_id"]."<br/>";
	}while($row=mysqli_fetch_assoc($ro));
?>