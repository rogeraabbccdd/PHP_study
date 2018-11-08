<?php

// int array
$aa[5]="1";
$aa[]="2";
$aa[]="3";
$aa[]="4";
echo $aa[8].'<br/>';	//print 4
echo '<hr/>';

// string array
$ab["b1"] ="yyy";
$ab["c2"] ="xxx";
$ab[] ="rrr";		//0
$ab[] ="hhh";		//1
echo $ab["c2"].'<br/>';	//print xxx
echo $ab[1].'<br/>';	//print hhh	
echo '<hr/>';

// 2 rows array
$ac[1][]="a";
$ac[1][]="b";
$ac[2][]="c";
$ac[3][]="d";
$ac[2][]="e";
echo $ac[1][1].'<br/>'; //print b
echo $ac[2][1].'<br/>'; //print e
echo '<hr/>';
	
// loop
foreach($aa as $x)	echo $x.'<br/>'; //print 1234
echo '<br/>';
foreach($ac[2] as $x)	echo $x.'<br/>';	//print ce
echo '<hr/>';

/*question
設定3筆變數
$arr["aa"]=1
$ar="aa"
$arr["bb"]=2;
use echo呼叫變數,讓畫面出現-1
*/
$arr["aa"]=1;
$ar="aa";
$arr["bb"]=2;
echo $arr[$ar]-$arr["bb"];	//print -1  
// rule is array[$] or array[""]

	
	
	
?>