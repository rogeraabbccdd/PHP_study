<?php
/*
1.�����O�������䪺URL�ѼƬO�_�s�b
2.�p�G�s�b�ק��Ʈw��PLAYER��ƪ��R����쪺���e
3.���ަ��S��URL�ѼƳ᳣̫�n�������}
*/
if( !empty($_GET["no"]) ){
    $sql="update player set p_del = 1 where p_seq = '".$_GET["no"]."'";
    mysqli_query($link,$sql);
}
?>
<script>
    document.location.href="main.php?g=admin";
</script>