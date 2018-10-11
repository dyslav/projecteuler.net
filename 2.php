<?php
// Problem 2
// Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
// By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.

function fibonacci($num)
{
    $arr = array(0, 1);
        for ($i = 0; $i < $num; $i++) {
            $arr[] = end($arr) + prev($arr);
            unset($arr[$i-1]);
        }
    return end($arr);
}

$sum = 0;
for ($i = 1; $fi = fibonacci($i), $fi < 4000000; $i++) {
    if ($fi % 2 === 0) {
        $sum += $fi;
    }
}

echo $sum; //4613732
