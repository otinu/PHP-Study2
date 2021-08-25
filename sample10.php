<?php
echo '足される数＞';
$added = trim(fgets(STDIN));

echo '足す数＞';
$number = trim(fgets(STDIN));

$sum = $added + $number;
echo "$added + $number", "　＝　", "$sum";
// echo "$added + $number =", $added + $number;
?>