<?php
    if( !empty($_SESSION["id"]) ){//判斷帳號是否處於登入狀態
        unset($_SESSION["id"]);//如果存在就取消登入
    }
?>
<script>document.location.href="main.php";</script>
<?php //不管存不存在最後都離開這個網頁?>