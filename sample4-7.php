<?php
declare(strict_types=1); //自動型変換機能を停止
$tax = 10;

// 型の宣言

function sum(int $a, int $b): int {
  global $tax;
  $ret = ($a + $b) * ($tax / 100 + 1);

  return $ret;
}

$num1 = '100';
$num2 = 200;

$answer = sum($num1, $num2);
echo $answer;