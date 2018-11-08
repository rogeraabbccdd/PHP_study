<?php
    include_once("setdb.php");

    include_once("array.php");
    include_once("url.php");
?>
<link href="admin.css" rel="stylesheet" type="text/css">
<div class="content">
    <div id="title">
        <div id="logo"></div>
        <div id="login"><?=$go_logion?></div>
    </div>
    <div id="menu">
        <div id="menu_list">
            <a href="?g=admin"><div class="mymenu">登入系統</div></a>
            <a href="?g=new"><div class="mymenu">最新消息</div></a>
            <div class="mymenu">客服系統</div>
        </div>
    </div>
    <div id="banner"><?php include_once($gogo);?></div>
</div>