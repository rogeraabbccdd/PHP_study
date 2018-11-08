<?php
/* 修改密碼
1. 網頁上點修改按鈕進入修改密碼頁面，並同時送出該筆資料的索引
2. 改密碼頁面分別輸入舊密碼、新密碼、重複新密碼後送出
3. 把內容以POST傳送到同頁面，比對就密碼是否與該帳號原密碼相同
4. 比對新密碼是否與重複新密碼相同
5. 如果兩者皆符合，修改資料庫中的該筆資料的密碼為新密碼，並已MD5加密
6. 如果修改成功，回到admin(list)，否則顯示一行紅字說明帳號密碼錯誤
7. 限定密碼長度為8-16位元　ｅｃｈｏ　ｓｔｒｌｅｎ（字串）　可以得到字串長度
*/
if(!empty($_POST['oldpw'])){
    $sql="select p_pw from w04_player where p_seq='".$_GET["seq"]."'";
    $ro=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($ro);
/*    echo "
    ['oldpw']=".$_POST['oldpw']."<br/>
    ['p_pw']=".$row['p_pw']."<br/>
    ['newpw']=".$_POST['newpw']."<br/>
    ['checkpw']=".$_POST['checkpw']."<br/>";
    echo strlen($_POST['newpw']);
*/
    if(!((7<strlen($_POST['newpw']))&&(strlen($_POST['newpw'])<17)))    echo "<p style='color:red'>密碼長度需8~16</a>";
    else{
        //if( ($_POST['oldpw']==$row['p_pw']) && ($_POST['oldpw']!=$_POST['newpw']) && ($_POST['newpw']==$_POST['checkpw'])){
            //$sql="update W04_player set p_pw='".$_POST["newpw"]."' where p_seq='".$_GET["seq"]."'";
        if((md5($_POST['oldpw'])==$row['p_pw']) && ($_POST['oldpw']!=$_POST['newpw']) && ($_POST['newpw']==$_POST['checkpw'])){
            $sql="update W04_player set p_pw='".md5($_POST["newpw"])."' where p_seq='".$_GET["seq"]."'";
            mysqli_query($link,$sql);  
            header("location:?g=admin");
            }
        else echo "<p style='color:red'>帳號密碼錯誤</a>";
    }
}




?>
<form method="post">
<table width="500" algin="center" border="1" cellspacing="0">
    <tr>
        <td width="50%">輸入舊密碼</td>
        <td width="50%">
            <input type="password" name="oldpw">
        </td>
    </tr>
    <tr>
        <td>輸入新密碼</td>
        <td>
            <input type="password" name="newpw">
        </td>
    </tr>
    <tr>
        <td>再輸入新密碼</td>
        <td>
            <input type="password" name="checkpw">
        </td>
    </tr>
    <tr>
        <td colspan=2 align="center">
            <input type="submit" value="送出">
        </td>
    </tr>
</table>
</form>