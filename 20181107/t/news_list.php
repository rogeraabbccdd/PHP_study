<?php
    $sql="select * from news where n_del=0";
    $ro = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($ro);
    $totle = mysqli_num_rows($ro);//撈出資料總數

    //狀態文字陣列
    $look[0]="不顯示";
    $look[1]="顯示";
    //按鈕陣列
    $btn[0]="顯示";
    $btn[1]="不顯示";
    if( !empty($_GET["look"]) ){//如果修改狀態的參數存在時
    //1.驗證參數是否正確
        $sql="select * from news where n_del=0 and n_seq = '".$_GET["look"]."'";
        $ro = mysqli_query($link,$sql);
        $row = mysqli_fetch_assoc($ro);
        $totle = mysqli_num_rows($ro);
        
        if($totle == 1){
    //2.原資料狀態為?
            $now_look=$row["n_open"];
            if($now_look==1){ $input_look = 0;}
            if($now_look==0){ $input_look = 1;}
    //3.反轉修改原本狀態
            $sql="update news set n_open = '".$input_look."' where n_seq = '".$_GET["look"]."'";
            mysqli_query($link,$sql);
        }
    //4.完成後跳頁離開
    ?><script>document.location.href='?g=new'</script><?php
    }
?>
<table width="960" border="1" align="center">
    <tr><td colspan="5" align="center"><a href="?g=new_add">新增</a></td></tr>
    <tr>
        <td width="400" align="center">標題</td>
        <td width="200" align="center">縮圖</td>
        <td width="150" align="center">時間</td>
        <td width="60" align="center">狀態</td>
        <td align="center">操作</td>
    </tr>
<?php
if($totle >0){
    do{
?>
    <tr>
        <td align="center"><?=$row["n_title"]?></td>
        <td align="center"><img src="new_pic/title/<?=$row["n_pic1"]?>" width="200"></td>
        <td align="center"><?=$row["n_date"]?></td>
        <td align="center"><?=$look[$row["n_open"]]?></td>
        <td align="center">
            <a href="?g=new&look=<?=$row["n_seq"]?>"><?=$btn[$row["n_open"]]?></a>
            <a href="?g=new_up&look=<?=$row["n_seq"]?>">修改</a> 
        </td>
    </tr>
<?php
    }while($row = mysqli_fetch_assoc($ro));
}else{
?>
    <tr><td colspan="4" align="center">查無資料</td></tr>
<?php
}
?>
</table>