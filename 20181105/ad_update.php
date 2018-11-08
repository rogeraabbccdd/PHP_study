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

?>

<table width="500" algin="center" border="1" cellspacing="0">
    <tr>
        <td width="50%">輸入舊密碼</td>
        <td width="50%">
            <input type="password" name="mypw">
        </td>
    </tr>
    <tr>
        <td>輸入新密碼</td>
        <td>
            <input type="password" name="mypw">
        </td>
    </tr>
    <tr>
        <td>再輸入新密碼</td>
        <td>
            <input type="password" name="mypw">
        </td>
    </tr>
    <tr>
        <td colspan=2 align="center">
            <input type="submit" value="送出">
        </td>
    </tr>
</table>