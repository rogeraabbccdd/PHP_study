<?php
function add_ani($aname,$atype,$aweight,$ainfo,$afood,$asex){
	$link=mysqli_connect("localhost","root","","a2018");
	mysqli_query($link,"set names utf8");
	$sql="
	INSERT INTO w04_animal 
	VALUES(null,
		'".$aname."',
		'".$atype."',
		".$aweight.",
		'".$ainfo."',
		".$afood.",
		".$asex.")";
	mysqli_query($link,$sql) or die("刪除失敗");
	header("location:?page=show_all");
}


if(!empty($_POST['ani_name'])){
	add_ani($_POST['ani_name'],$_POST['ani_type'],$_POST['ani_weight'],$_POST['ani_info'],$_POST['ani_food'],$_POST['ani_sex']);
}
	$sql="select * from w05_ani_food;";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
?>
<meta charset="UTF-8">
<form method="POST">
	<p>動物名字 <input name="ani_name" type="text"></p>
	<p>動物類型 <input name="ani_type" type="text"></p>
	<p>體重(KG) <input name="ani_weight" type="int"></p>
	<p>簡介		<input name="ani_info" type="text"></p>
	<p>食物
	<select name="ani_food">
		<?php do{?>
		<option value="<?=$row["af_id"]?>"><?=$row["af_food"]?></option>
		<?php }while($row=mysqli_fetch_assoc($ro));?>
	</select>
	<p>性別
		<input type="radio" name="ani_sex" value="1">公 
		<input type="radio" name="ani_sex" value="2">母 
	</p>
		<input type="submit" value="新增">
</form>