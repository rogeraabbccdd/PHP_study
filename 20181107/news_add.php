<?php
    $error=0;//偵測接收狀況的變數
    if(
        (empty($_FILES["tpic"]["name"])) ||
        (empty($_POST["title"])) ||
        (empty($_FILES["cpic"]["name"])) ||
        (empty($_POST["content"]))
    )   $error=1;

    if($error==0){
        list($tpic_name,$check)=newfile("tpic");
        if($check==1) exit("標題縮圖格式非jpg/png");    //else可以不用寫，因為exit成立時，程式已停止運行
        copy($_FILES["tpic"]["tmp_name"],"new_pic/title/".$tpic_name);

        list($cpic_name,$check)=newfile("cpic");
        if($check==1) exit("標題縮圖格式非jpg/png");
        copy($_FILES["cpic"]["tmp_name"],"new_pic/content/".$cpic_name);

        $nt=strtotime("+7hour");
	    $time=date("Y-m-d H:i:s",$nt);
        $sql="
        insert into w06_news
        values(
            null,
            '".$_POST['title']."',
            '".$tpic_name."',
            '".$_POST['content']."',
            '".$cpic_name."',
            '".$time."',
            0,
            0
        )        
        ";
        mysqli_query($link,$sql) or die("新增失敗");
        header("location:?g=news");
    }

?>
<style>
    input,textarea{width:450px;margin:10px 0}
</style>
<form method="post" enctype="multipart/form-data">
    <table width="800" align="center" border="1">
        <tr>
            <td width="300">標題縮圖</td>
            <td><input type="file" name="tpic"></td>
        </tr>
            <td>標題文字</td>
            <td><input type="text" name="title"></td>
        </tr>
        </tr>
            <td>內容圖片</td>
            <td><input type="file" name="cpic"></td>
        </tr>
        </tr>
            <td>內容文字</td>
            <td><textarea name="content" style="height: 300px"></textarea></td>
        </tr>
        </tr>
            <td colspan="2" align="center"><input type="submit" value="送出"></td>
        </tr>
    </table>
</form>