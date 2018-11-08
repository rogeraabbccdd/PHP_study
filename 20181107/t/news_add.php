<?php
    $error = 0;//偵測接收狀況的變數
    if( empty($_FILES["tpic"]["name"]) ){ $error=1;}
    if( empty($_POST["title"]) ){ $error=1;}
    if( empty($_FILES["cpic"]["name"]) ){ $error=1;}
    if( empty($_POST["content"]) ){ $error=1;}
    if($error == 0){
//1.圖片上傳 設定新的檔案名稱、判斷格式、上傳
        list($tpic_name,$check)=new_file("tpic");//呼叫設定檔案名稱的函式並記錄內容
        if($check==1){ exit("標題縮圖的檔案格式錯誤");}//驗證回傳結果圖片格式是否正確
        copy( $_FILES["tpic"]["tmp_name"], "new_pic/title/".$tpic_name );

        list($cpic_name,$check)=new_file("cpic");
        if($check==1){ exit("內容圖片的檔案格式錯誤");}
        copy( $_FILES["cpic"]["tmp_name"], "new_pic/content/".$cpic_name );
//2.資料庫新增 把輸入的內容及新的檔案名稱新增到資料庫
        $sql="insert into news value(null ,'".$_POST["title"]."','".$tpic_name."','".$_POST["content"]."','".$cpic_name."','".$time."',0,0)";
        mysqli_query($link,$sql);
    }
?>
<form method="post" enctype="multipart/form-data">
<style>
    input{
        width:450px;
        margin:10px 0 10px 0;
    }
    textarea{
        width:450px;
        margin:10px 0 10px 0;
    }
</style>
<table width="800" align="center" border="1">
    <tr>
        <td width="300" align="center">標題縮圖</td>
        <td align="center"><input type="file" name="tpic" required="required"></td>
    </tr>
    <tr>
        <td align="center">標題文字</td>
        <td align="center"><input name="title" required="required"></td>
    </tr>
    <tr>
        <td align="center">內容圖片</td>
        <td align="center"><input type="file" name="cpic" required="required"></td>
    </tr>
    <tr>
        <td align="center">內容文字</td>
        <td align="center">
            <textarea name="content" style="height:130px;" required="required"></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" value="送出" style="width:200px;"></td>
    </tr>
</table>
</form>