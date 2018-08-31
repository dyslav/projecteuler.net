<?php
// Problem 5
// 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

function listFactor($num)
{
    global $listFactorArr;
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i === 0) {
            $listFactorArr[] = $i;
            listFactor($num / $i);
            break;
        }
    }
    return $listFactorArr;
}

function expFactor($num)
{
    return array_count_values(listFactor($num));
}

function smallestPositiveNumber($num)
{
    for ($i = 2; $i <= $num ; $i++) {
        $arr = expFactor($i);
        unset($GLOBALS['listFactorArr']);
        foreach ($arr as $key => $value) {
            if (!isset($newArr[$key])) {
                $newArr[$key] = $value;
            } elseif ($newArr[$key] < $value) {
                $newArr[$key] = $value;
            }
        }
    }
    $result = 1;
    foreach ($newArr as $key => $value) {
        $result *= pow($key, $value);
    }
    return $result;
}

echo smallestPositiveNumber(20); //232792560
