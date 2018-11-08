<?php
	/*test
	do 新頁面，頁面上有四個欄位[索引][帳號][密碼][姓名]
	1個送出按鈕
	按下按鈕後可以直接修改DB中w04_player這個table的內容
	以索引為判斷修改[帳號][密碼][姓名]]
	*/

?>
<meta charset="UTF-8">
<form action="20181024-db02.php" method="post">
	<span>索引 </span><input name="mydb[]" type="text"><br/>
	<span>帳號 </span><input name="mydb[]" type="text"><br/>
	<span>密碼 </span><input name="mydb[]" type="text"><br/>
	<span>名稱 </span><input name="mydb[]" type="text"><br/><br/>
	<input type="submit" value="send">
</form>

