<?php
echo '色を選んでください(1.黒、 2.白、 3.赤)  >';
$color = trim(fgets(STDIN));

/*
if ($color === 1) { //trimでのキーボード受付ではString型になるため、false判定
  echo '黒が選ばれました';
}　elseif($color === 2) {
  echo '白が選ばれました';
} elseif ($color === 3) {
  echo '赤が選ばれました';
}
*/

switch ($color) {
  case 1:
    echo '黒が選ばれました';
  break;
  case 2:
    echo '白が選ばれました';
  break;
  case 3:
    echo '赤が選ばれました';
  break;
}