<?php

	function ani_del($dd){//設定1函式接收要刪除的資料索引，並以變數將索引紀錄起來
		$link=mysqli_connect("localhost","root","","a2018");//吃不到外面的$link，所以要打在裡面
		$sql="
			DELETE FROM w04_animal 
			WHERE ani_id='".$dd."'";
		mysqli_query($link,$sql) or die("刪除失敗");
		header("location:?page=show_all");
	}
	
	function ani_mdy($m1,$m2,$m3,$m4,$m5,$m6){//設定1函式接收要刪除的資料索引，並以變數將索引紀錄起來
		$link=mysqli_connect("localhost","root","","a2018");//吃不到外面的$link，所以要打在裡面
		mysqli_query($link,"set names utf8");
		$sql="
			UPDATE w04_animal 
			SET ani_name='".$m2."',
				ani_type='".$m3."',
				ani_weight='".$m4."',
				ani_info='".$m5."',
				ani_food=".$m6."
			WHERE ani_id=".$m1;
		mysqli_query($link,$sql) or die("修改失敗");
		header("location:?page=show_all");
	}
	
	function ani_list(){
		$link=mysqli_connect("localhost","root","","a2018");//吃不到外面的$link，所以要打在裡面
		$sql="select * from w04_animal;";
		mysqli_query($link,"set names utf8");
		$xx=mysqli_query($link,$sql);
		return $xx;
	}
	$ro1=ani_list();
	$row1=mysqli_fetch_assoc($ro1);
	
	function food_list(){
		$link=mysqli_connect("localhost","root","","a2018");
		mysqli_query($link,"set names utf8");
		$sql="select * from w05_ani_food;";
		$yy=mysqli_query($link,$sql);
		$get=mysqli_fetch_assoc($yy);
		do{
			$food[1][]=$get['af_id'];
			$food[2][]=$get['af_food'];
		}while($get=mysqli_fetch_assoc($yy));
		return $food;
	}
	$food_ar=food_list();

	if(!empty($_POST["mdy_ani_btn"])) {	//for mdy_bth
		ani_mdy($_POST['mdy_ani_btn'],$_POST['ani_name'],$_POST['ani_type'],$_POST['ani_weight'],$_POST['ani_info'],$_POST['ani_food']);
	}
	if(!empty($_POST["del_ani_btn"])) {	//for del_bth
		ani_del($_POST["del_ani_btn"]);
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
				//foreach ($food_ar as $value) echo $value[0];
				//echo $food_ar[2][5];
					//foreach($food_ar as $value1){
				for($i=0;$i<count($food_ar[1]);$i++){
					$select="";
					if($row1["ani_food"]==$food_ar[1][$i]) $select="selected='selected'";
				?>
					<option value="<?=$food_ar[1][$i]?>" <?=$select?>><?=$food_ar[2][$i]?></option>
						
					<?php } ?>
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