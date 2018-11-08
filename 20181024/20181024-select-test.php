<?php
	/*
	新頁面，只有一個欄位[帳號]，一個送出按鈕。可在資料庫中
	w04_player table內搜到同帳號的資料，顯示出
	[索引][帳號][密碼][名稱]
	ex 輸入001
	print 帳號 001 密碼aaa 姓名 lala
	*/
	include_once("20181024-setdb.php");
	if(!empty($_POST["myuser"])){
		$sql="select * from w04_player where p_id='"
		.$_POST['myuser']."'";
		$ro=mysqli_query($link,$sql);
		$row=mysqli_fetch_assoc($ro);
	do{
		echo "索引: ".$row['p_seq'].", 帳號: ".$row['p_id'].", 密碼：".$row['p_pw'].", 姓名:".$row['p_name']."<br/>";
	}while($row=mysqli_fetch_assoc($ro));

	}
	/*
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);//結果轉換為陣列
	
	do{
		echo $row["p_id"]."<br/>";
	}while($row=mysqli_fetch_assoc($ro));
	*/
	

?>

<meta charset="UTF-8">
<hr/>
<form method="POST">
	<span>帳號 </span><input name="myuser" type="text"><br/>
	<br/>
	<input type="submit" value="send">
</form>