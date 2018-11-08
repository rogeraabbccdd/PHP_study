<?php
	if(!empty($_POST['myid'])){
		if(!empty($_POST['mypw'])){
			$sql="select * form w04_player where p_id='".$_POST['myid']."' and p_pw='".$_POST['mypw']."'";
			$ro=mysqli_query($link,$sql);
			$check=mysqli_num_rows($ro);
			if($check){
				$_SESSION["id"]=$_POST['myid'];
			}
		}
			
	}
?>

<form method="post">
<table>
	<tr>
		<td>帳號</td>
		<td><input name="myid"></td>
	</tr>
	<tr>
		<td>密碼</td>
		<td><input name="mypw"></td>
	</tr>
	<tr>
		<td colspan="2" algin="right"><input type="submit" value="登入"></td>	</tr>
</table>
</form>