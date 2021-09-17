<?php
// クロージャ―・無名関数

function echo_price($callback) {
  echo number_format($callback(1000, 500)), '円';
}
/*
$get_sum = function ($a, $b) {
  return $a + $b;
};

echo_price(function ($a, $b) {
  return $a + $b;
});

*/

$get_sum = fn($a, $b) => $a + $b;

$sum = $get_sum(10, 35);
echo $sum;
?>