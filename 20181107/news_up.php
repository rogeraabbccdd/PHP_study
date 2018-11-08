<?php
    if(!empty($_GET['seq'])){  //load select this item
        $sql="select * from w06_news where n_seq='".$_GET["seq"]."'";
        $ro=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($ro);
    }

    $ti="";
    $co="";
    $tp="";
    $cp="";

    if(isset($_POST["title"]))      $ti=" n_title='".$_POST['title']."'";   //update title
    if(isset($_POST['content']))    $co=" n_con='".$_POST['content']."'";   //update content
    if(!empty($_FILES["tpic"]["tmp_name"])){    //update title's img
        list($tpic_name,$check)=newfile("tpic");
        if($check==1) exit("標題縮圖格式非jpg/png");    //else可以不用寫，因為exit成立時，程式已停止運行
        rename("new_pic/title/".$row["n_pic1"],"new_pic/title/del_".$row["n_pic1"]); //更名舊檔案
        copy($_FILES["tpic"]["tmp_name"],"new_pic/title/".$tpic_name);
        //unlink($row["n_pic1"]);         //unlink(檔名); 刪除檔案
        $tp=", n_pic1='".$tpic_name."'";
        /* demo1
        上傳新的圖檔及檔名並記錄在資料庫中，舊的圖檔可選擇刪除或是改名註記
        */
    }
    if(!empty($_FILES["cpic"]["tmp_name"])){    //update content's img
        list($cpic_name,$check)=newfile("cpic");
        if($check==1) exit("標題縮圖格式非jpg/png");
        copy($_FILES["cpic"]["tmp_name"],"new_pic/content/".$row["n_pic2"]);
        /* demo1(homework)
        資料庫內容不動，上傳的圖檔改名和資料庫中的檔案名稱一樣，因此在上傳後會直接覆蓋舊的圖檔(回家作業)
        */
    }
    if(isset($_POST["title"])){     //update sql
        $sql="update w06_news set ".$ti.",".$co.$tp.$cp." where n_seq='".$_GET['seq']."'";
        mysqli_query($link,$sql) or die("新增失敗");
        ?><script>document.location.href='?g=news'</script><?php
    }
    
?>


<style>
    input,textarea{width:450px;margin:10px 0}
    img{width:100px}
</style>

<form method="post" enctype="multipart/form-data">
    <table width="800" align="center" border="1">
        <tr>
            <td width="300">標題縮圖</td>
            <td><img src="new_pic/title/<?=$row['n_pic1']?>"><input type="file" name="tpic"></td>
        </tr>
            <td>標題文字</td>
            <td><input type="text" name="title" value="<?=$row['n_title']?>"></td>
        </tr>
        </tr>
            <td>內容圖片</td>
            <td><img src="new_pic/content/<?=$row['n_pic2']?>"><input type="file" name="cpic"></td>
        </tr>
        </tr>
            <td>內容文字</td>
            <td><textarea name="content" style="height: 300px"><?=$row['n_con']?></textarea></td>
        </tr>
        </tr>
            <td colspan="2" align="center"><input type="submit" value="送出"></td>
        </tr>
    </table>
</form>
