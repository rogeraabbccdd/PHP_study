<?php
  if(!empty($_GET["love"][0])) foreach($_GET["love"] as $value) echo $value;
?>
<style>
	body{
	font-size:20px;
	line-height:30px;
	}
	input{
	min-height:20px;
	min-width:20px;
	}
	
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form>
喜好
<input type="checkbox" name="love[]" value="1">吃飯 
<input type="checkbox" name="love[]" value="2">睡覺 
<input type="checkbox" name="love[]" value="3">打咚咚 
<input type="checkbox" name="love[]" value="4">殺掠 
<!--checkbox可無視name做重複選取，但注意send時會互相覆蓋，需用array解決-->

<input type="submit" value="送出"/>

</form>