<?php
$number = 10;

// $numeric = is_numeric($number); この一行も省略可能

if (is_numeric($numeric)) { // == true を省略
  echo '数字です';
}  else {
    echo '数字ではありません';
  }
}