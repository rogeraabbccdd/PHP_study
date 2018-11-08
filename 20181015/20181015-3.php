<?php
	for($i=0;$i<10;$i++) echo $i;
	echo '<hr/>';

/*question: use for print
1
4
7
10
*/
for($j=1;$j<=10;$j+=3)	echo $j.'<br/>';
echo '<hr/>';

/*question:use ★*51橫向排列 ，
第一個★色碼rgb(0,0,255)
最後個★色碼rgb(255,0,0)
*/
for($k=0;$k<256;$k+=5)
	echo "<span style='color:rgb(".$k.",0,".(255-$k).")'>★</span>";
echo '<hr/>';
/*question: 99乘法表*/
for($m=1;$m<10;$m++){
	for($n=2;$n<6;$n++) {
	echo "<span style='display:inline-block;width:70px'>".$n."X".$m."=".($n*$m)."</span>";}
	echo "<br/>";
	}

echo "<hr/>";	//////////

echo "<table width='300' border='0'>";
	for($m=1;$m<10;$m++){
		echo "<tr>";
			for($n=2;$n<6;$n++) 
				echo "<td>".$n."X".$m."=".($n*$m)."</td>";
		echo "</tr>";
	}
echo "</table>";
echo "<hr/>";	//////////

$clr=0;

	for($m=1;$m<10;$m++){
		for($n=1;$n<10;$n++) {
			echo "<span style='display:inline-block;width:70px;color:rgb(".$clr.",0,".(255-$clr).")'>".$n."X".$m."=".($n*$m)."</span>";
			$clr+=5;
		}
		echo "<br/>";
		}
	echo "<hr/>";	


?>
