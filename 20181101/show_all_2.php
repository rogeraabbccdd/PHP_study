<?php
	$page_total=3;	//一頁3筆
	$page_num=1;	//當前頁數
	if(!empty($_GET["pp"])) $page_num=$_GET["pp"];
	echo $page_num;
	$page_up=$page_num+1;
	$page_down=$page_num-1;
	$page_look=($page_num-1)*$page_total;	//計算limit起始位置

	$sql="SELECT * from w04_animal;";
	$ro1=mysqli_query($link,$sql);
	$total_date=mysqli_num_rows($ro1);	//資料總數
	if($total_date>0){
	$all_page=ceil($total_date/$page_total);//總頁數
	//echo $total_date;
	//echo $all_page;
	
	$sql="SELECT * from w04_animal limit ".$page_look.",".$page_total.";";
	$ro1=mysqli_query($link,$sql);	
	$now_total_date=mysqli_num_rows($ro1);	//實際被撈出資料總數
	
	if($page_num<=0){
		header("location:?page=show_all_2");
		exit();
	}
	if($page_num>$all_page){
		header("location:?page=show_all_2");
		exit();
	}
	$row1=mysqli_fetch_assoc($ro1);			//get all	
	
	


	/**分頁 limit
	1. 設定變數紀錄撈取資料數
	2. 設定一頁印多少筆資料
	3. 設定當前page，預設為1，如果有URL參數則改URL內容
	4. 計算資料表起始資料位置
	5. 把起始位置變數極需要顯示多少資料的變與SQL語法Limit做整合
	6. 計算總頁數，用迴圈把頁碼顯示出來
	7. 幫頁碼加上功能性`,點選後會到該頁，當前頁面沒有連結且字體紅大
	8. 計算上一頁下一頁的頁碼並做成變數與連結
	9. 資料正確的驗證
		當前頁碼<=1，隱藏上一頁按鈕，頁碼若達上限，隱藏下一頁
		如果搜不到資料，先判斷當前頁碼是否為第一頁，若是:顯示查無資料；若否：強制跳回第一頁
	**/
	
	
	
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
	<tr><td colspan="7" align="center">
<?php
	if($page_num>1) echo "<a href='?page=show_all_2&pp=".$page_down."'>上一頁</a>－";
	echo "－";
	for($i=1;$i<=$all_page;$i++){
		if($i==$page_num) echo "<span style='font-size:2em;color:red'>".$i."</span>－";
		else echo "<a href='?page=show_all_2&pp=".$i."'>".$i."</a>－";
	}
	if($page_num<$all_page) echo "<a href='?page=show_all_2&pp=".$page_up."'>下一頁</a>－";
?>
	</td></tr>
	<tr>
		<th>[索引]</th>
		<th>[動物名稱]</th>
		<th>[動物種類]</th>
		<th>[體重(kg)]</th>
		<th>[簡介]</th>
		<th>[食物]</th>
		<th>[操作]</th>
	</tr>
	<?php 

	do{ 
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
	<?php }while($row1=mysqli_fetch_assoc($ro1));
	} 
	else echo "查無資料";
	
	?>
</table>