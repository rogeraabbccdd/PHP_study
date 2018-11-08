<?php
	if(!empty($_SESSION["id"])){//	判斷帳號是否登入狀態
		unset($_SESSION["id"]);	//存在則消除登入
	}				//然後不管結果如何都回到main.php↓
?>	
	<script>
		document.location.href='main.php';
	</script>";
