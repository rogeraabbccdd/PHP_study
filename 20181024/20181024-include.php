<?php
	/*
	include();	//name,space, 找不到檔案出現警告，繼續執行
	require();	//name,space, 找不到檔案出現警告，停止執行
	include_once();	//name,space 限定一次載入不重複
	require_once();	//name,space
	*/
	/*
	echo "1";
	include("20181024-include_2.php");
	echo "3";
	*/
	echo "1";
	require("20181024-include_2.php");
	require_once("20181024-include_2.php");
	require_once("20181024-include_2.php");
	require_once("20181024-include_2.php");
	echo "3";
?>