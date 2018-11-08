<head><style>
	.main {
		width: 400px;background-color: #eee;margin: 50px auto;min-height: 50px;}
	p,form{
		text-align: center;width: 100%;padding:20px 0;}
</style></head>
<div class="main">
	<?php
	if(empty($_FILES["uppic"]["size"])){
		$return="<p>請上傳圖片</p>";
	}
	else{
		if($_FILES["uppic"]["size"]>1024*1024) 
			$return="<p>檔案限制: 1 MB</p>";
		else if($_FILES["uppic"]["type"]!="image/jpeg" && $_FILES["uppic"]["type"]!="image/png") 
			$return="<p>限定JPG或PNG</p>";
		else{
			copy($_FILES["uppic"]["tmp_name"],"upload/".$_FILES["uppic"]["name"]);
			$return="<img src='upload/".$_FILES["uppic"]["name"]."' style='width: 100%;'>";
		}
	}
	echo "<div>".$return."</div>";
	?>
	<form method="post" enctype="multipart/form-data"><!--enctye=傳檔用類別-->
		<input type="file" name="uppic">
		<input type="submit" value="upload">
	</form>
</div>
<?php
/*
homework
new file 'uppic.php',1 file's input and 1 send button,send of image to folder
過程中保持在原本的檔案畫面'uppic.php'
1. 頁面無error info, 不可找不到資料
2. 檔案1MB以上，顯示"檔案過大不能上傳"
3. 限定上傳類別，jpg/jpge/png`,if不是此兩類別，出現[僅限定上傳JPG跟PNG格式]
*/
?>