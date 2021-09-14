<?php

function make_list($list, $head = '・') {
  foreach ($list as $key => $val) {
    echo $head, $key, ': ', $val, "\n";
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
make_list($pref, '⇒');
make_list($pref, '■');
?>