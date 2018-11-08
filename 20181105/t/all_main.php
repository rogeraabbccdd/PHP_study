<?php
//==========================setdb==========================
    session_start();
    $link = mysqli_connect("localhost","root","","a2018");
    mysqli_query($link,"set names utf8");
    $nt=strtotime("+7hour");
    $time = date("Y-m-d H:i:s",$nt);
    $go_logion ='<a href="?g=login"><span id="login2">登入</span></a>';//設定登入按鈕
//==========================function==========================    
function check_login(){
    if( empty($_SESSION["id"]) ){
        header("location:main.php?g=login");
        exit();
    }else{
        $go_logion = $_SESSION["id"].' <a href="?g=out"><span id="login2">登出</span></a>';
        //設定如果處於登入狀態改變顯示 [ LOGIN按鈕連結 ]的變數內容
        return $go_logion;
    }
}
//==========================function==========================
    if( $_SERVER["QUERY_STRING"] == "g=login" ){
        
    }else{
        $go_logion = check_login();
    }
//==========================setdb==========================
?>
<?php
//=============================array=============================
    $url["main"]="main_2.php";
    $url["admin"]="admin.php";
    $url["login"]="login.php";
    $url["out"]="out.php";
//=============================array=============================
?>
<?php
//=============================url=============================
    $goto = "main";
    if( !empty($_GET["g"]) ){ $goto = $_GET["g"];}
    $gogo = $url[$goto];
//=============================url=============================
?>
<link href="admin.css" rel="stylesheet" type="text/css">
<div class="content">
    <div id="title">
        <div id="logo"></div>
        <div id="login"><?=$go_logion?></div>
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