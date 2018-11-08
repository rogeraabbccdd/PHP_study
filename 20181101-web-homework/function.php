<?php

function check_login(){
	if (empty($_SESSION["id"])) 
		header("location:main.php?g=login");
		exit();
}

?>