<?php
// The sequence of triangle numbers is generated by adding the natural numbers. So the 7th triangle number would be 1 + 2 + 3 + 4 + 5 + 6 + 7 = 28. The first ten terms would be:
// 1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...
// Let us list the factors of the first seven triangle numbers:
//      1: 1
//      3: 1,3
//      6: 1,2,3,6
//     10: 1,2,5,10
//     15: 1,3,5,15
//     21: 1,3,7,21
//     28: 1,2,4,7,14,28
// We can see that 28 is the first triangle number to have over five divisors.
// What is the value of the first triangle number to have over five hundred divisors?

function triangularNumber($num)
{
    return ($num * ($num + 1)) / 2;
}

function howManyDivisors($num)
{
    $arr = array();
    $i = 2;
        do{
            if ($num % $i === 0) {
                $arr[] = $i;
                $num = $num / $i;
                $i = 2;
            } else {
                $i++;
            }
        } while ($i <= $num);

        $resArr = array_count_values($arr);
        $res = 1;
        foreach ($resArr as $key => $val) {
            $res *= $val+1;
        }
    return $res;
}

for ($i = 1; $i < 20000; $i++) {
    $howManyDivisors = howManyDivisors(triangularNumber($i));
    if($howManyDivisors > 500) {
        echo $i.'<sup>th</sup> triangle number is ' . triangularNumber($i) . ' and it have ' . $howManyDivisors . ' divisors.';
        break;
    }
}
