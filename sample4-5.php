<?php

// 参照渡し(リファレンス渡し)
function add_head(&$target) {
  for ($i=0; $i<count($target); $i++) {
    $target[$i] = '●' . $target[$i];
  }
}

$color = ['黒' , '赤', '白'];
print_r($color);
add_head($color);
print_r($color);
add_head($color);
?>