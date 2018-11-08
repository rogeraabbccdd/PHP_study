<?php
    $sql="select * from w06_news where n_del=0";
    $ro=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($ro);
    $total=mysqli_num_rows($ro);

    $look[0]="hide"; //for text array
    $look[1]="show";
    $btn[0]="<span style='color:red'>Ｘ</span>";  //for button array ,hide
    $btn[1]="<span style='color:green'>Ｏ</span>";
    if(!empty($_GET["look"])){
        $sql="select * from w06_news where n_del=0 and n_seq='".$_GET['look']."'";//驗證參數是否正確
        $ro=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($ro);
        $total=mysqli_num_rows($ro);
        if($total!=1) exit("偷改GET沒懶覺");
        //$now_look=(!$row['n_open']);
        $sql="update w06_news set n_open='".!$row['n_open']."' where n_seq='".$_GET['look']."'";
        mysqli_query($link,$sql);
?>
        <script>document.location.href='?g=news'</script>
<?php
    }
?>
<style>
    img{
        width:100px;
    }
</style>

<table width="960" border="1">
    <tr>
        <td colspan="5"><a href="?g=news_add">新增</a></td>
    </tr>
    <tr>
        <td width="100">縮圖</td>
        <td width="300">標題</td>
        <td width="200">時間</td>
        <td width="50">狀態</td>
        <td>操作</td>
    </tr>
<?php
    if($total>0){
        do{
?>
        <tr>
            <td><img src="new_pic/title/<?=$row['n_pic1']?>"></td>
            <td><?=$row['n_title']?></td>
            <td><?=$row['n_date']?></td>
            <td><?=$look[$row['n_open']]?></td>
            <td>
                <a href="?g=news&look=<?=$row['n_seq']?>"><?=$btn[$row['n_open']]?></a>
                <a href="?g=news_up&seq=<?=$row['n_seq']?>">修改</a>
                <a href="?g=news_del&no=<?=$row['n_seq']?>">刪除</a>
            </td>
        </tr>

<?php
        }while($row=mysqli_fetch_assoc($ro));
    }
    else{
?>
    <tr>
        <td colspan="4">查無資料</td>
    </tr>
<?php
    }
?>
</table>