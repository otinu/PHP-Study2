<?php
/*
$pref = [
  'hokkaiodo' => '北海道',
  'aomori' => '青森県',
  'iwate' => '岩手県'
  ];


>= 以上
=> 連想配列の代入

echo $pref['iwate'];
*/

$pref['hokkaido'] = [
  '赤平市',
  '旭川市',
  '芦別市'
];

echo $pref['hokkaido'][1];

?>