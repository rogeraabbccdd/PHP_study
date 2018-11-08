<?php
if(!empty($_POST['ani_id'])){
	$sql="DELETE FROM w04_animal WHERE ani_id=".$_POST['ani_id'];
	echo $sql;
	mysqli_query($link,$sql);
	header("location:?page=show_all");
}
?>
<meta charset="UTF-8">
<form method="POST">
	<p>輸入欲刪除之動物索引編號<input name="ani_id" type="int"></p>
	<input type="submit" value="刪除">
</form>