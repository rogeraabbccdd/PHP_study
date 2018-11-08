<?php
	//$now_time=date("Y-m-d H:i:s");	//// http://www.wibibi.com/info.php?tid=282
	$check_time=strtotime("+7hour ");
	$now_time=date("Y-m-d H:i:s",$check_time);	//// http://www.wibibi.com/info.php?tid=282
	
	echo $now_time;
	
	


?>	