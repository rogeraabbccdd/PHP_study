<?php
	/********
	$rand=rand(0,100);
	if($rand>90){
		echo $rand;
	}
	else if($rand>70){
		echo "between 70-90 and text=".$rand;
	}
	else if($rand>50){
		echo "between 50-70 and text=".$rand;
	}
	else if($rand>30){
		echo "between 30-50 and text=".$rand;
	}
	else{
		echo "it min of 30 and text=".$rand;
	}
	*********/
	
	/********
	$num=rand(0,1000);
	if($num>=900)
		echo "<span style='color:yellow'>★★★</span>".$num;
	elseif($num>=500)
		echo "<span style='color:pink'>★★</span>".$num;
	else
		echo "<span style='color:white;background-color:black;'>★</span>".$num;
	*********/
	
	/*********
	$num=rand(0,1000);
	$str1="<span style='color:yellow'>★★★</span>".$num;
	if(($num>=500)&&($num<900)) $str1="<span style='color:pink'>★★</span>".$num;
	if($num<500) $str1="<span style='color:white;background-color:black;'>★</span>".$num;
	echo $str1;
	*********/
	for($i=0;$i<10;$i++){
		$rand=rand(1,100);
		if($rand<=40) echo "<span style='color:black'>★</span>";
		elseif($rand<=70) echo "<span style='color:yellow'>★</span>";
		elseif($rand<=90) echo "<span style='color:pink'>★</span>";
		else echo "<span style='color:white;background-color:black'>★</span>";
	}
?>