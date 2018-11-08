<?php
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
?>