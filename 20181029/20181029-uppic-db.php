<?php
	include_once("linkdb.php");
	if(!empty($_FILES['mypic']['name'])){
		
		$check_time=strtotime("+7hour");
		//copy($_FILES['mypic']['tmp_name'],"pic_db/".$_FILES['mypic']['name']);
		
		$now_time=date("YmdHis",$check_time);
		//copy($_FILES['mypic']['tmp_name'],"pic_db/".$now_time.".jpg");
		$now_file=$now_time.".png";
		
		$sql="insert into w05_mypic value(null,'".$_POST["my_pic_name"]."','".$now_file."',0)";
		mysqli_query($link,$sql);
		
		copy($_FILES['mypic']['tmp_name'],"pic_db/".$now_file);
		
	}
?>

<form method="POST" enctype="multipart/form-data">
	<table width="800" align="center" border="1">
		<tr>
			<td align="center" width="200" hegith="30">圖片說明</td>
			<td align="center"><input name="my_pic_name"/></td>
		</tr>
		<tr>
			<td align="center">請選擇圖片</td>
			<td align="center"><input type="file" name="mypic"/></td>
		</tr>
		<tr>
			<td align="center" colspan="2" hegith="30"><input type="submit" value="send"/></td>
		</tr>
	</table>
</form>

<?php







/*圖片上傳系統
1. 設定資料庫 1.圖片檔名 2.圖片路徑 3.是否刪除
2. 先設定一組以日期為內容的檔名


*/

?>

