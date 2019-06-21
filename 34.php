<?php
// 145 is a curious number, as 1! + 4! + 5! = 1 + 24 + 120 = 145.
// Find the sum of all numbers which are equal to the sum of the factorial of their digits.
// Note: as 1! = 1 and 2! = 2 are not sums they are not included.

$sum = 0;

for ($i = 10; $i < 500000; $i++) {
    $number = (string) $i;
    $factorialSum = 0;

    for ($j = 0; $j < strlen($number); $j++) { 
        $factorialSum += fact($number[$j]);
        if ($factorialSum > $i) {
            break;
        }
    }

    if ($factorialSum == $i) {
        $sum += $i;
    }
}

echo $sum; //40730


function fact($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
      $factorial *= $i;
    }
    return $factorial;
}