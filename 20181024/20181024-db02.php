<?php
	include_once("20181024-setdb.php");
	//$sql="update w04_player set p_id='idid', p_pw='pwpw', p_name='nana' where p_seq='1'";
	if(!empty($_POST['mydb'])
	$sql="update w04_player set p_id='"
			.$_POST['mydb'][1].
		"', p_pw='"
			.$_POST['mydb'][2].
		"', p_name='"
			.$_POST['mydb'][3].
		"' where p_seq='"
			.$_POST['mydb'][0].
		"'";
	mysqli_query($link,$sql);
?>