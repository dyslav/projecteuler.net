<?php
// Problem 4
// A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
// Find the largest palindrome made from the product of two 3-digit numbers.

$arr = [];
for ($i = 999; $i > 99; $i--) {
    for ($j = 999; $j > 99; $j--) {
        $addition = $i *  $j;
        $addition = (string) $addition;
        if (strlen($addition) == 6 && $addition[0] == $addition[5] && $addition[1] == $addition[4] && $addition[2] == $addition[3]) {
            $arr[] = $addition;
            break;
        } elseif (strlen($addition) == 5 && $addition[0] == $addition[4] && $addition[1] == $addition[3]) {
            
        }
    }
}

echo max($arr); //906609
