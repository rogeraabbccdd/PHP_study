<?php

    $sql="select * from news where n_seq='".$_GET["look"]."'";
    $ro = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($ro);
//1.確認欄位是否有輸入，有輸入的進行修改，沒輸入的維持原本樣式

    $tp = "";
    $ti = "";
    $cp = "";
    $co = "";


    if( isset($_POST["title"]) ){
        $ti = " n_title = '".$_POST["title"]."'";
    }
    if( isset($_POST["content"]) ){
        $co = " n_con = '".$_POST["content"]."'";
    }
    if( !empty($_FILES["tpic"]["name"]) ){
//2.如果有選擇新的圖片
//作法 1資料庫內容不動，上傳的圖檔改名和資料庫中的檔案名稱一樣，因此在上傳後會直接覆蓋舊的圖檔(回家作業)
//作法 2上傳新的圖檔及檔名並記錄在資料庫中，舊的圖檔可選擇刪除或是改名註記
        list($tpic_name,$check)=new_file("tpic");//呼叫設定檔案名稱的函式並記錄內容
        if($check==1){ exit("標題縮圖的檔案格式錯誤");}//驗證回傳結果圖片格式是否正確
        
//-----------------------------------------------------------------------------------------        
//        rename(舊檔名 , 新檔名);
//        unlink(檔名);
        rename("new_pic/title/".$row["n_pic1"]  ,"new_pic/title/xxx".$row["n_pic1"]  );
        copy( $_FILES["tpic"]["tmp_name"], "new_pic/title/".$tpic_name );
//-----------------------------------------------------------------------------------------        
        $tp =" , n_pic1 = '".$tpic_name."'";
    }

    if( isset($_POST["title"]) ){
        $sql="update news set ".$ti." , ".$co.$tp." where n_seq='".$_GET["look"]."'";
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
        <td align="center">
            <img src="new_pic/title/<?=$row["n_pic1"]?>" width="300">
            <br><input type="file" name="tpic">
        </td>
    </tr>
    <tr>
        <td align="center">標題文字</td>
        <td align="center"><input name="title" value="<?=$row["n_title"]?>"></td>
    </tr>
    <tr>
        <td align="center">內容圖片</td>
        <td align="center">
            <img src="new_pic/content/<?=$row["n_pic2"]?>" width="300">
            <br><input type="file" name="cpic">
        </td>
    </tr>
    <tr>
        <td align="center">內容文字</td>
        <td align="center">
            <textarea name="content" style="height:130px;"><?=$row["n_con"]?></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" value="送出" style="width:200px;"></td>
    </tr>
</table>
</form>