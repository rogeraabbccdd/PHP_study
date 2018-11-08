<?php
    session_start();
    $link = mysqli_connect("localhost","root","","a2018");
    mysqli_query($link,"set names utf8");
    $nt=strtotime("+7hour");
    $time = date("Y-m-d H:i:s",$nt);

    $go_logion ='<a href="?g=login"><span id="login2">登入</span></a>';//設定登入按鈕
    
    include_once("function.php");
    if( $_SERVER["QUERY_STRING"] == "g=login" ){
    //偵測URL參數並以字串呈現出來 例 main.php?a=1&b=1  結果 a=1&b=1 
        
    }else{
        $go_logion = check_login();
    }

?>