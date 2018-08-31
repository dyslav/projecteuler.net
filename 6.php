<?php
// Problem 6
// The sum of the squares of the first ten natural numbers is,
// 1^2 + 2^2 + ... + 10^2 = 385
// The square of the sum of the first ten natural numbers is,
// (1 + 2 + ... + 10)^2 = 55^2 = 3025
// Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
// Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

function sumOfTheSquares($limit)
{
    $str = 0;
    for ($i = 1; $i <= $limit; $i++) {
        $str += $i * $i;
    }
    return $str;
}

function squareOfTheSum($limit)
{
    $str = 0;
    for ($i = 1; $i <= $limit; $i++) {
        $str += $i;
    }
    return $str * $str;
}

echo squareOfTheSum(100) - sumOfTheSquares(100); //25164150
