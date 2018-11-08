<?php
if(!empty($_POST['ani_name'])&&!empty($_POST['ani_type'])&&!empty($_POST['ani_weight'])){
	$sql="INSERT INTO w04_animal VALUES(null,'".$_POST['ani_name']."','".$_POST['ani_type']."',".$_POST['ani_weight'].");";
	mysqli_query($link,$sql) or die("新增失敗，語法:".$sql);
	header("location:?page=show_all");
}

?>
<meta charset="UTF-8">
<form method="POST">
	<p>動物名字 <input name="ani_name" type="text"></p>
	<p>動物類型 </span><input name="ani_type" type="text"></p>
	<p>體重(KG) </span><input name="ani_weight" type="int"></p>
	<input type="submit" value="新增">
</form>