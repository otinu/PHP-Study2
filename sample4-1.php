<?php
// 連想配列を作るオリジナルメソッド
function make_list($list) {
  foreach ($list as $key => $value) {
    echo '・', $key, ':', $value, "\n";
  }
}

  $pref = [
    'hokkaido' => '北海道',
    'aomori' => '青森県',
    'iwate' => '岩手県'
  ];

  $color = [
    'red' => '赤',
    'blue' => '青',
    'black' => '黒'
  ];

make_list($pref);
make_list($color);
?>