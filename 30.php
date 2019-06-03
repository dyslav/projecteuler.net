<?php
// Surprisingly there are only three numbers that can be written as the sum of fourth powers of their digits:
//     1634 = 14 + 64 + 34 + 44
//     8208 = 84 + 24 + 04 + 84
//     9474 = 94 + 44 + 74 + 44
// As 1 = 14 is not a sum it is not included.
// The sum of these numbers is 1634 + 8208 + 9474 = 19316.
// Find the sum of all the numbers that can be written as the sum of fifth powers of their digits.

$result = 0;

for ($i = 1000; $i <= 999999; $i++) {
    $pow = 5;

    $i = (string) $i;

    $sum = 0;
    for ($j = 0, $len = strlen($i); $j < $len; $j++) { 
        $sum += $i[$j]** $pow;
    }

    if ($i == $sum) {
        $result += $i;
    }

}

echo $result; //443839
