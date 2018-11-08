<?php
    if( !empty($_POST["myid"]) ){
        $sql = "insert into player value(null,'".$_POST["myid"]."' ,'".md5($_POST["mypw"])."' ,'".$_POST["myname"]."' ,0)";
        mysqli_query($link,$sql);
        ?><script>document.location.href="?g=admin"</script><?php
    }
?>
<form method="post">
<table width="300" align="center">
    <tr>
        <td width="150" align="center">帳號</td>
        <td width="150" align="center"><input name="myid"></td>
    </tr>
    <tr>
        <td align="center">密碼</td>
        <td align="center"><input name="mypw" type="password"></td>
    </tr>
    <tr>
        <td align="center">使用者</td>
        <td align="center"><input name="myname"></td>
    </tr>
    <tr>
        <td align="center" colspan="2"><input type = "submit" value="送出"></td>
    </tr>
</table>
</form>