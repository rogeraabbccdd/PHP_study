<?php
    if( !empty($_POST["myid"]) ){
        if( !empty($_POST["mypw"]) ){
            $sql = "select * from player where p_id = '".$_POST["myid"]."' and p_pw = '".$_POST["mypw"]."'";
            $ro = mysqli_query($link,$sql);
            $check = mysqli_num_rows($ro);
            if( $check == 1 ){
                $_SESSION["id"] = $_POST["myid"];
            }
        }    
    }
?>
<form method="post">
<table width="100%" align="center" border="1">
    <tr>
        <td width="30%" height="40" align="center" >帳號</td>
        <td align="center"><input name="myid"></td>
    </tr>
    <tr>
        <td height="40" align="center" >密碼</td>
        <td align="center"><input name="mypw"></td>
    </tr>
    <tr>
        <td height="40" colspan="2" align="center" ><input type="submit" value="登入"></td>
    </tr>
</table>
</form>