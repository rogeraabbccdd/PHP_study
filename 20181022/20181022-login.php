<style>
body{
	background-color:#69b0bc;
}
.login_form{
	width: 360px;
	padding:80px 50px 20px 50px;
	margin: 10% auto;
	background-color:#FFF;
}
.login_form input{
	background: #f2f2f2;
    margin-bottom: 20px;
    padding: 15px;
    width: 100%;
	border: 0;
}
.login_form input.send{
    background: #4CAF50;
    color: #FFF;
    font-weight: bolder;
}


</style>

<?php
	session_start();
	$aa=rand(1,10000000);
	$_SESSION["yy"]=$aa;
	
/*
開啟新頁面login.php，頁面中有欄位帳號與密碼，跟一個按鈕，按下按鈕後會跳到新的檔案login_api.php
如果輸入的帳密是admin/1234，畫面會出現登入成功。否則出現帳號密碼錯誤。
*/
?>
<form action="20181022-login_api.php" method="post" class="login_form">
	<input name="user" type="text" placeholder="username"><br/>
	<input name="pwd" type="password" placeholder="password"><br/>
	<input type="hidden" name="xx" value="<?=$aa?>">
	<input class="send" type="submit" value="送出">
</form>
