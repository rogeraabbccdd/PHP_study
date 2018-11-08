<?php
if(!empty($_POST['ani_id'])){
	$sql="
		UPDATE w04_animal 
		SET ani_name='".$_POST['ani_name']."',ani_type='".$_POST['ani_type']."',ani_weight=".$_POST['ani_weight']."
		WHERE ani_id=".$_POST['ani_id'].";
	";
	echo $sql;
	mysqli_query($link,$sql);
	header("location:?page=show_all");
}
?>
<meta charset="UTF-8">
<form method="POST">
	<h4>輸入指定之動物索引編號，以及修改之內容</h4>
	<p>索引 <input name="ani_id" type="int"></p>
	<p>動物名字 <input name="ani_name" type="text"></p>
	<p>動物類型 </span><input name="ani_type" type="text"></p>
	<p>體重(KG) </span><input name="ani_weight" type="int"></p>
	<input type="submit" value="修正">
</form>