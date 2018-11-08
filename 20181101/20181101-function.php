<?php
/*
function 函式名稱(傳送的變數){ 執行的動作 }
函式名稱 與 傳送的變數 為自己設定的
function需要呼叫才會執行 
呼叫的方式 直接輸入函式名稱(要傳送的內容)
函式中與外面是獨立的，全域變數無法使用，超全域變數可以使用
因此如果需要在函式中使用來自函數外的變數變數
要在()中傳送

session_start();
$_SESSION["f2"]="3";
function F_1(){
		$_SESSION["f2"]="aa";
}
F_1();
echo session["f2"];

傳送的字串或變數的數量要與function()中的接收變數數量一致
沒有傳送值到FUNCTION 就無法在FUNCTION中使用
FUNCTION沒有回傳的內容，在function外就無法使用

$bb = 1;
function f_1($aa,$a2){
    echo $a2;
}
f_1($bb,"ooxx");

function可以使用return把處理的結果回傳回來
呼叫函式的時候使用變數紀錄回傳的結果

function aa(){
	$bb=1;
	return $bb;
}
$cc=aa();
echo $cc;

如需要大量的內容，使用array

function aa(){
	$bb[]="ee";
	$bb[]=2;
	$bb[]="ff";
	$bb[]=4;
	return $bb;
}
$cc=aa();
echo $cc[2];

*/

function aa(){
	$aa=1;
	$bb=2;
	$cc=5;
	return array($aa,$bb,$cc);
}
list($oo,$xx,$vv)=aa();
echo $vv;//print 5


?>