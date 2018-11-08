<?php
	//echo $_GET['myid'];
	foreach($_GET['my'] as $value) echo $value;
	/*
	GET取得URL參數
	URL參數是接在檔案名稱後面，以?開始(只有一個問號)，以=設定，以&區隔
	/aaa.php
	/aaa.php?aaa=1
	/aaa.php?aaa=1&bbb=2&ccc=3
	撈取方式
	$_GET[aaa]
	$_GET[bbb]
	$_GET[ccc]
	*/











?>