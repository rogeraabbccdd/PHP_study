<?php

  echo "<div style='color:#F00'>YA</div>";
  /*
  echo "<script>alert('YA');</script>";
  */
  echo 1;                               echo "<br/>";
  
  $text_1 ="aaaaa";
  echo $text_1;                         echo "<br/>";
  
  $int_1 = 5;
  $int_1 += 10;
  echo $int_1;                          echo "<br/>";
  echo $int_1-5;                        echo "<br/>";              
  $int_2 = 3;              
  echo $int_1.$int_2;                   echo "<br/>";
  echo $int_1+$int_2;                   echo "<hr/>";

  /*question
  設定三個變數
  $a="金"
  $b="天"
  $c="晴"
  讓網頁出現
  今日天氣晴天
  */
  
  $a="今";
  $b="天";
  $c="晴";
  
  echo $a.'日'.$b.'氣'.$c.$b;			echo "<br/>";
?>
<?=$a.'日'.$b.'氣'.$c.$b;?>