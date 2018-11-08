<?php
    if( !empty($_POST["myname"][0]) ){
        for( $i=0; $i<count($_POST["myname"]) ; $i++ ){
            $sql= "update player set p_name = '".$_POST["myname"][$i]."' where p_seq ='".$_POST["myid"][$i]."'";
            mysqli_query($link,$sql);
        }
    }

    $sql="select * from player where p_del = 0";
    $ro = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($ro);
?>
<table width="900" align="center" border=1 cellspacing="0" cellpadding="0"><!-- cellspacing 表格間距、cellpadding 表格內距 -->
    <tr>
        <td width="900" align="center" colspan="3"><a href="?g=ad_add">新增</a></td>

    </tr>
    <tr>
        <td width="300" align="center">帳號</td>
        <td width="300" align="center">使用者</td>
        <td width="300" align="center">操作</td>
    </tr>
<form method="post">
<?php do{?>
    <tr>
        <td align="center"><?=$row["p_id"]?></td>
        <td align="center"><input name="myname[]" value="<?=$row["p_name"]?>"></td>
        <td align="center"><a href="?g=ad_up&seq=<?=$row["p_seq"]?>">修改密碼</a> <a href="?g=ad_del&no=<?=$row["p_seq"]?>">刪除</a></td>
    </tr>
<input name="myid[]" value="<?=$row["p_seq"]?>" type="hidden">
<?php }while($row = mysqli_fetch_assoc($ro));?>
    <tr>
        <td align="center" colspan="3"><input type="submit" value="修改"></td>    
    </tr>
</form>
</table>