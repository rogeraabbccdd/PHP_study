<?php
	echo $_FILES["mypic"]["name"]."<br/>";	//file name
	echo $_FILES["mypic"]["tmp_name"]."<br/>";//tmp url
	echo $_FILES["mypic"]["size"]."<br/>";//byte, max 2mb
	echo $_FILES["mypic"]["type"]."<br/>";//class
	copy($_FILES["mypic"]["tmp_name"],"upload/".$_FILES["mypic"]["name"]); // copy(from,to)

/*
homework
new file 'uppic.php',1 file's input and 1 send button,send of image to folder
過程中保持在原本的檔案畫面'uppic.php'
1. 頁面無error info, 不可找不到資料
2. 檔案1MB以上，顯示"檔案過大不能上傳"
3. 限定上傳類別，jpg/jpge/png`,if不是此兩類別，出現[僅限定上傳JPG跟PNG格式]



*/
?>
<form method="post" enctype="multipart/form-data"><!--enctye=傳檔用類別-->
	<input type="file" name="mypic">
	<input type="submit" value="upload">
</form>
