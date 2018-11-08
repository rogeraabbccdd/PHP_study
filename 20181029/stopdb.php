<?php
	$check_time=strtotime("+7hour");
	$now_time=date("H:i:s",$check_time);
	$sql="select * from w05_webstop where ws_start<='$now_time' and '$now_time'<=ws_stop";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
	$num=mysqli_num_rows($ro);//計算這次搜尋到幾筆資料
	
	if($num==1){
		$check_stop=0;
		$now_day=date("Y-m-d",$check_time);
		$now_week=date("w",$check_time);

		$check_stop=0;		
		if($now_day==$row["ws_date"]) $check_stop=1;
		if($now_week==$row["ws_week"]) $check_stop=1;
	/* 當前時間的日期與星期
		echo $now_day."<br>";
		echo $now_week;
	*/
	/* 資料庫的日期與星期
		echo $row["ws_date"]."<br>";
		echo $row["ws_week"];
	*/
		if($check_stop) {
			header("location:now_stop.php");
			exit();
		}
	}
	/*
	系統維護頁面用途
	當系統進行維護時，停止連線者使用網站，及使用資料庫相關功能
	
	1. 在設定資料庫連線後include一個執行用的php
	2. 這個檔案連結一個資料表(設定維護時間)，欄位為：索引int，日期date，星期int，開始時間time，結束時間time
	3. stop.php直接撈取資料表的內容`,並以當前時間做判斷(時分秒)
	4. 現在的時間now_time如果比開始維護的時間還大，且比結束的時間小，則進入第二層判斷
	5. 第二層的判斷：先抓當前日期與日期，並比對資料庫與當前時間的[日期][星期]兩者是否相同
	6. 如果符合其中一項，則進入維護狀態(終止頁面執行)，並強制跳頁到指定頁面
	*/
?>