<?php
$color = ['黒', '白', '赤'];
// $max = count($color);

/*
array_unshift($color, '緑', '黄');
print_r($color);

array_push($color, '緑', '黄');
print_r($color);
*/

$color_string = implode(',', $color);
$color_string .= ',緑,黄';
$newarray = explode(',', $color_string);

print($color_string);
print_r($newarray);

echo $color[$max-1];