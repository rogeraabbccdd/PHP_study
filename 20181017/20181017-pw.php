<?php
	//0-9 a-z , total 97-122,65-90
	/*
	$pw="";
	for($i=0;$i<8;$i++){
		$word=rand(0,35);
		if($word>10) echo chr($word+87);
		else echo $word;
		
	}
	*/
	
	$num=rand(8,16);
	for($i=0;$i<$num;$i++){
		$word=rand(0,61);
		if($word>35)		echo chr($word+29);
		elseif($word>10)	echo chr($word+87);
		else 				echo $word;
	}
	
?>