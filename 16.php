<?php
// Problem 16
// 2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
// What is the sum of the digits of the number 2^1000?

$str = number_format(pow(2, 1000), 0, '', '');
$sum = 0;
for ($i=0; $i < strlen($str); $i++) {
     $sum += $str[$i];
}
echo $sum; //1366
?>
