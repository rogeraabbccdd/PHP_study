<?php
	$sql="SELECT * from w04_animal;";
	//echo $sql;
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
?>
<table>
	<tr>
		<th>[索引]</th><th>[動物名稱]</th><th>[動物種類]</th><th>[體重(kg)]</th>
	</tr>
	<?php do{ ?>
	<tr>
		<?php echo "<td>".$row['ani_id']."</td><td>".$row['ani_name']."</td><td>".$row['ani_type']."</td><td>".$row['ani_weight']."</td>";?>
	</tr>
	<?php }while($row=mysqli_fetch_assoc($ro)); ?>

	<?php
	/* line 13~16 same this
		do{
			echo"<tr>";
				echo "<td>".$row['ani_id']."</td><td>".$row['ani_name']."</td><td>".$row['ani_type']."</td><td>".$row['ani_weight']."</td>";
			echo"</tr>";
		}while($row=mysqli_fetch_assoc($ro));
	*/
	?>
	
</table>