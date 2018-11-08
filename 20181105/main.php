<?php
	include_once("linkdb.php");
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
        <div id="login"><?=$go_login?></div>
    </div>
    <div id="menu">
        <div id="menu_list">
			<a href="?g=admin"><div class="mymenu">登入系統</div></a>
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