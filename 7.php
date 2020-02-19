<?php
// Problem 7
// By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
// What is the 10 001st prime number?

$start = microtime(true);

function isPrimeNumber($num)
{
    $halfNum = ceil($num / 2);
    for ($i = 2; $i <= $halfNum; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function primeNumber($num)
{
    for ($i = 2, $j = 0; $i < 99999999999999999; $i++) {
        if (isPrimeNumber($i)) {
            ++$j;
            if ($num === $j) {
                return $i;
                break;
            }
        }
    }
}

echo primeNumber(10001); //104743

$time = microtime(true) - $start;
echo "\r\n";
var_dump($time);