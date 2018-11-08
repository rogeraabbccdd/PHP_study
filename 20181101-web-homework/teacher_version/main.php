<?php
    include_once("setdb.php");
    include_once("function.php");
    include_once("array.php");
    include_once("url.php");
?>
<link href="admin.css" rel="stylesheet" type="text/css">
<div class="content">
    <div id="title">
        <div id="logo"></div>
        <div id="login"><a href="?g=login"><span id="login2">登入</span></a></div>
    </div>
    <div id="menu">
        <div id="menu_list">
            <div class="mymenu">aaa</div>
            <div class="mymenu">bbb</div>
            <div class="mymenu">ccc</div>
        </div>
    </div>
    <div id="banner"><?php include_once($gogo);?></div>
</div>