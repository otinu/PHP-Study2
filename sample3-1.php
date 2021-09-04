<?php
$number1 = 10;
$number2 = '10';

if ($number1 === (int)$number2) { ///「===」は型も判定、型キャスト可能
  echo '同じです';
}

$number3 = 3;
$number4 = '3';

if ($string3 == $string4) { /// 「==」は型を合わせて判定
  echo '同じです';
}

?>