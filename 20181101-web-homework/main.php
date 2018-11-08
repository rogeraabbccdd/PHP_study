<?php
	include_once("linkdb.php");
	include_once("function.php");
	include_once("array.php");
	include_once("url.php");
?>
<head>
	<link rel="stylesheet" href="admin.css">
</head>


<body>
<div class="content">
    <div id="title">
        <div id="logo"></div>
        <div id="login"><a href="?g=login"><span id="login2">登入</span></a></div>
    </div>
    <div id="menu">
        <div id="menu_list">
			<div class="mymenu">熱門餐點</div>
			<div class="mymenu">多人餐</div>
			<div class="mymenu">個人餐</div>
			<div class="mymenu">餐點</div>
			<div class="mymenu">早餐</div>
            
        </div>
    </div>
    <div id="banner">
		<?php include_once($gogo);?>
		<?=$gogo?>
    </div>
</div>
</body>