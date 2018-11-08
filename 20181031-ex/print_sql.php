<?php
$sql_html="
	<b>CREATE TABLE</b> w04_animal(															<br/>
		<span style='padding-left:20px'/>ani_id int(10) COMMENT'索引鍵' AUTO_INCREMENT,		<br/>
		<span style='padding-left:20px'/>ani_name text COMMENT'動物名稱',					<br/>
		<span style='padding-left:20px'/>ani_type text COMMENT'動物總類',					<br/>
		<span style='padding-left:20px'/>ani_weight int COMMENT'體重',						<br/>
		<span style='padding-left:20px'/><b>PRIMARY KEY</b>(ani_id)							<br/>
	);							
";
echo $sql_html;
/***************************************************** use php to link sql
$sql="
CREATE TABLE w04_animal(
	ani_id int(10) COMMENT'索引鍵' AUTO_INCREMENT,
	ani_name text COMMENT'動物名稱',
	ani_type text COMMENT'動物總類',
	ani_weight int COMMENT'體重',
	PRIMARY KEY(ani_id));
";
mysqli_query($link,$sql);
//*****************************************************/
?>