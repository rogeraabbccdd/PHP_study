<style>
body{
	background-color:#69b0bc;
}
.login_message{
	width: 360px;
    padding: 80px 50px;
    margin: 10% auto;
    background-color: #FFF;
    font-weight: 800;
    font-size: 40px;
    text-align: center;
}
.login_form input{
	background: #f2f2f2;
    margin-bottom: 20px;
    padding: 15px;
    width: 100%;
}
</style>

<div class="login_message">
<?php
	
	session_start();
	if(!empty($_POST["xx"]) && $_SESSION["yy"]==$_POST["xx"])
	{  //isset=存在,empty=null或<=0,前綴!為效果反轉
		if ($_POST['user']=="admin" && $_POST['pwd']=="1234")	echo "登入成功";
		else echo "登入失敗";
		session_unset();
	}
	session_unset();
?>

</div>