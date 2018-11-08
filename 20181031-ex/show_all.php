<?php
	if(!empty($_POST["del_ani_btn"])) {	//for del_bth
		$sql="
			DELETE FROM w04_animal 
			WHERE ani_id=".$_POST['del_ani_btn'];
		mysqli_query($link,$sql) or die("刪除失敗");
		header("location:?page=show_all");
	}
	if(!empty($_POST["mdy_ani_btn"])) {	//for mdy_bth
		$sql="
			UPDATE w04_animal 
			SET ani_name='".$_POST['ani_name']."',ani_type='".$_POST['ani_type']."',ani_weight=".$_POST['ani_weight']."
			WHERE ani_id=".$_POST['mdy_ani_btn'];
		mysqli_query($link,$sql) or die("修改失敗");
		header("location:?page=show_all");
	}
	if(!empty($_POST["add_ani_btn"])) {	//for add_bth
		$sql="
			INSERT INTO w04_animal 
			VALUES(null,'".$_POST['ani_name']."','".$_POST['ani_type']."',".$_POST['ani_weight'].")";
		mysqli_query($link,$sql) or die("新增失敗");
		header("location:?page=show_all");
	}
	$sql="SELECT * from w04_animal;";	//for show all
	//echo $sql;
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
?>
<table>
	<tr>
		<th>[索引]</th><th>[動物名稱]</th><th>[動物種類]</th><th>[體重(kg)]</th><th>[操作]</th>
	</tr>
	<?php do{ ?>
	<tr>
		<?php echo 
		"<form method='post'>
		<td>".$row['ani_id']."</td>
		<td><input type='text' name='ani_name' value='".$row['ani_name']."'></td>
		<td><input type='text' name='ani_type' value='".$row['ani_type']."'></td>
		<td><input type='text' name='ani_weight' value='".$row['ani_weight']."'></td>
		<td>
			<button type='submit' name='del_ani_btn' value='".$row['ani_id']."'>刪除</button>
			<button type='submit' name='mdy_ani_btn' value='".$row['ani_id']."'>修改</button>
		</td>
		</form>"
		;?>
	</tr>
	<?php }while($row=mysqli_fetch_assoc($ro)); ?>

	<tr>
		<form method="post">
		<td></td>
		<td><input name="ani_name" type="text"></td>
		<td><input name="ani_type" type="text"></td>
		<td><input name="ani_weight" type="int"></td>
		<td><input type="submit" value="新增" name="add_ani_btn"></td>
		</form>
	</tr>
</table>
