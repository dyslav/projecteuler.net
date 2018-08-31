<?php
// Problem 10
// The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
// Find the sum of all the primes below two million.

function isPrimeNumber($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function sumPrimeNumbersBelow($limit)
{
    $sum = 0;
    for ($i = 2; $i < $limit; $i++) {
        if (isPrimeNumber($i)) {
            $sum += $i;
        }
    }
    return $sum;
}

echo sumPrimeNumbersBelow(2000000); //142913828922
