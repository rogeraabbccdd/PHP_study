<?php
	if(!empty($_POST['myid'])){//更新使用者資料
		if(!empty($_POST['mypw'])){
			$sql="select * from w04_player where p_id='".$_POST['myid']."' and p_pw='".$_POST['mypw']."'";
			$ro=mysqli_query($link,$sql);
			$check=mysqli_num_rows($ro);
			if($check){
				$_SESSION["id"]=$_POST['myid'];
				$_SESSION["pw"]=$_POST['mypw'];
				//header("location:?g=admin");
				header("location:?g=main");


			}
			else echo "帳號密碼錯誤";
		}
		else echo "請輸入密碼";
	}
	if(!empty($_SESSION["id"])) echo"
	<script>
		document.location.href='main.php';
	</script>";

	
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