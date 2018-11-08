<?php
include_once("linkdb.php");
$sql="
CREATE TABLE w05_mypic(
	mp_id int(10) COMMENT'索引鍵' AUTO_INCREMENT,
	mp_name text COMMENT'名稱',
	mp_url text COMMENT'路徑',
	mp_del int(1) COMMENT'是否刪除',
	PRIMARY KEY(mp_id));
";
mysqli_query($link,$sql);

?>
