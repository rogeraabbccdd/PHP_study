<?php
	$sql="SELECT * from w04_animal;";
	//echo $sql;
	$ro1=mysqli_query($link,$sql);
	$row1=mysqli_fetch_assoc($ro1);
	
	if(!empty($_POST["mdy_ani_btn"])) {	//for mdy_bth
		$sql="
			UPDATE w04_animal 
			SET ani_name='".$_POST['ani_name']."',
				ani_type='".$_POST['ani_type']."',
				ani_weight='".$_POST['ani_weight']."',
				ani_info='".$_POST['ani_info']."',
				ani_food=".$_POST['ani_food']."
			WHERE ani_id=".$_POST['mdy_ani_btn'];
		mysqli_query($link,$sql) or die("修改失敗");
		header("location:?page=show_all");
	}
	if(!empty($_POST["del_ani_btn"])) {	//for del_bth
		$sql="
			DELETE FROM w04_animal 
			WHERE ani_id=".$_POST['del_ani_btn'];
		mysqli_query($link,$sql) or die("刪除失敗");
		header("location:?page=show_all");
	}
?>
<table>
	<tr>
		<th>[索引]</th>
		<th>[動物名稱]</th>
		<th>[動物種類]</th>
		<th>[體重(kg)]</th>
		<th>[簡介]</th>
		<th>[食物]</th>
		<th>[操作]</th>
	</tr>
	<?php do{ 
		$sql="select * from w05_ani_food;";
		$ro2=mysqli_query($link,$sql);
		$row2=mysqli_fetch_assoc($ro2);
	?>
		<tr>
		<form method="post">
			<td><?=$row1['ani_id']?></td>
			<td><input name="ani_name" value="<?=$row1['ani_name']?>"></td>
			<td><input name="ani_type" value="<?=$row1['ani_type']?>"></td>
			<td><input name="ani_weight" value="<?=$row1['ani_weight']?>"></td>
			<td><input name="ani_info" value="<?=$row1['ani_info']?>"></td>
			<td>
				<select name="ani_food">
				<?php 
					do{ 
						$select="";
						if($row1["ani_food"]==$row2["af_id"]) $select="selected='selected'";
				?>
					<option value="<?=$row2["af_id"]?>" <?=$select?>><?=$row2['af_food']?></option>
				<?php } while($row2=mysqli_fetch_assoc($ro2));?>
				</select>
			</td>
			<td>
				<button type="submit" name="mdy_ani_btn" value="<?=$row1['ani_id']?>">修改</button>
				<button type="submit" name="del_ani_btn" value="<?=$row1['ani_id']?>">刪除</button>
			</td>
		</form>
		</tr>
	<?php }while($row1=mysqli_fetch_assoc($ro1)); ?>
</table>