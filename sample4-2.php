<?php

function sum($param1 ,...$numbers) { //可変パラメータは引数の最後
  $answer = 0;
  foreach ($numbers as $num) {
    $answer += $num;
  }

  return $answer;
}

$item_sum = sum('$param1', 10, 20, 30);
echo $item_sum;

?>