<div style="width: min-content;">
<?php
	session_start();
	$pwd_library=array("■","□","▲","△","▼","▽","◆","◇","○","◎","●","◢","◣","◤","◥","★","☆","☉"); //total 18 char
	for($i=0;$i<rand(5,10);$i++){
		$get="";
		for($j=0;$j<8;$j++)
			$get.="<span style='color:rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")'>".$pwd_library[rand(0,17)]."</span>";
		$_SESSION[]=$get."<hr/>";
	}
	foreach($_SESSION as $value) echo $value; //print($_SESSION);
	session_unset();  // equre unset($_SESSION);
?>
</div>
<!--/*
作業
頁面依執行時使用變數隨機產生出5-10組密碼
每組密碼8位數
以 ■□▲△▼▽◆◇○◎●◢◣◤◥★☆☉ 組成密碼為內容
並以SESSION記錄起來
最後使用
foreach迴圈呼叫出來
呼叫完後unset掉紀錄密碼的變數
*/-->