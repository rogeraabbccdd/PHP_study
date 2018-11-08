<?php

/*
1. 偵測紀錄索引鍵的URL參數是否存在
2. 如果存在修改資料庫中w04_player資料表中刪除欄位
3. 不管有沒有URL參數，最後都要跳頁離開
*/
if (!empty($_GET["no"])){
	$sql="update w04_player set p_del=1 where p_seq='".$_GET['no']."'";
	mysqli_query($link,$sql);
}
?>

<script>
	document.location.href="main.php?g=admin";
</script>