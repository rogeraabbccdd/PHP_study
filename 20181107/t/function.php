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
function web_log($log){
    $link = mysqli_connect("localhost","root","","a2018");
    mysqli_query($link,"set names utf8");
    $nt=strtotime("+7hour");
    $time = date("Y-m-d H:i:s",$nt);
    $sql = 'insert into web_log value(null,"'.$_SESSION["id"].'","'.$log.'","'.$time.'")';
    mysqli_query($link,$sql);
}
function new_file($fname){
    $nt=strtotime("+7hour");
    $new_file_name = date("YmdHis",$nt);
    $f_file_name = 1;//設定附檔名預設值
    if($_FILES[$fname]["type"] == "image/jpeg"){ $f_file_name =".jpg"; }//如果符合JPG格式修改附檔名
    if($_FILES[$fname]["type"] == "image/png"){ $f_file_name =".png"; } //如果符合PNG格式修改附檔名

    return array($new_file_name.$f_file_name,$f_file_name);//如果不符合 JPG or PNG 格式$f_file_name的回傳值會是1
}
?>