<?php
if(!empty($_GET['page'])) $page=$_GET['page'];
else $page="main";

include("header.php");
switch($page){
	case "main":
		include('main.php');
		break;
	case "print_sql":
		include('print_sql.php');
		break;
	case "add_animal":
		include('add_animal.php');
		break;
	case "show_all":
		include('show_all.php');
		break;
	case "del_animal":
		include('del_animal.php');
		break;
	case "modify_animal":
		include('modify_animal.php');
		break;
}





?>