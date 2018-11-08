<style>
body{
	margin:0px;
}
</style>
<?php
	$rand=rand(1,100);  //rand(start_num,end_num) //random 
	$r_x=rand(1,1280);  //rand(start_num,end_num) //random 
	$r_y=rand(1,624);  //rand(start_num,end_num) //random 
	$r_ts=rand(1,5);  //rand(start_num,end_num) //random 
	$r_num=rand(20,500);
?>
<div style="position:absolute;top:<?=$r_y?>;left:<?=$r_x?>;font-size:<?=$r_ts?>em";>★</div>
<?php
	for($i=0;$i<=$r_num;$i++){
		$r_x=rand(1,1280);
		$r_y=rand(1,624);
		$r_ts=rand(1,5);
		$r_clr=rand(0,255);$r_clg=rand(0,255);$r_clb=rand(0,255);
		echo "<div style='
				position:absolute;
				top:".$r_y.";
				left:".$r_x.";
				font-size:".$r_ts."em;
				color:rgb(".$r_clr.",".$r_clg.",".$r_clb.")
			'>★</div>";
		}
?>
