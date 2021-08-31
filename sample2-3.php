<?php
$gender = '男性';
$age = 20;

if ($gender == '男性') {
  echo '男性ですね？';
}

/*
if ($age == 20) {
  if ($age == 20) {
    echo '20歳ですね？';
  }
}
*/

/*
if ($gender == '男性' && $age == 20) {
  echo '男性で20歳ですね？';
}
*/

/*
// 排他的論理和
if ($gender == '男性' xor $age == 20) {
  echo '20歳ではない男性か、20歳の女性ですね？';
}
*/

if (&gender == '男性' && ($age == 20 || $age == 21)) {
  echo '男性で、20歳か21歳ですね？';
}
