<?php
	if(!empty($_POST['new_id'])){
	$sql= "insert into w04_player value(null,'$_POST[new_id]','".md5($_POST[new_pw])."','$_POST[new_pn]',0)";
	$ro=mysqli_query($link,$sql);
	web_log($sql);
	header("location:?g=admin");
	}


?>
<table width="600" align="center" border=1 cellspacing="0" cellpadding="0">
	<tr>
		<td width="300" align="center">帳號</td>
		<td width="300" align="center">密碼</td>
		<td width="300" align="center">姓名</td>
		<td width="300" align="center">操作</td>
	</tr>
	<form method="post">
	<tr>
		<td><input type=text name=new_id></td>
		<td><input type=text name=new_pw></td>
		<td><input type=text name=new_pn></td>
		<td><input type=submit value="新增"></td>
	</tr>
	</form>
</table>