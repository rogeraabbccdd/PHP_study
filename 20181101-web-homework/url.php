<?php
	$goto="main";
	if(!empty($_GET["g"])) $goto=$_GET["g"];
//	$gogo=$url[$goto];
	
	if(!empty($url[$goto])) $gogo=$url[$goto];
	else $gogo=$url["main"];
	
	
?>