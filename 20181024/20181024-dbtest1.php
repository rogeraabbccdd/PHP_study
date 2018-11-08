<?php
/*
	do 新頁面，頁面上有三個欄位[帳號][密碼][姓名]
	1個送出按鈕
	按下按鈕後可以新增DB中w04_player這個table的內容
*/
include_once("20181024-setdb.php");
	if(!empty($_POST["myuser"]))
	$sql ="insert into w04_player value(null,'"
		.$_POST['myuser'].
			"','"
		.$_POST['mypwd'].
			"','"
		.$_POST['myname'].
			"')";	
	mysqli_query($link,$sql);
?>
<meta charset="UTF-8">
<form method="POST">
	<span>帳號 </span><input name="myuser" type="text"><br/>
	<span>密碼 </span><input name="mypwd" type="text"><br/>
	<span>名稱 </span><input name="myname" type="text"><br/><br/>
	<input type="submit" value="send">
</form>
