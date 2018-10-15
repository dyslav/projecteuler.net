<?php
// Problem 24
// A permutation is an ordered arrangement of objects. For example, 3124 is one possible permutation of the digits 1, 2, 3 and 4. If all of the permutations are listed numerically or alphabetically, we call it lexicographic order. The lexicographic permutations of 0, 1 and 2 are:
// 012   021   102   120   201   210
// What is the millionth lexicographic permutation of the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?

function findPermutationNumber(string $digits, int $number) {
    $strLenght = strlen($digits);
    //$maxDigit = strrev($digits);
    $maxDigit = '9876543210';
    $sumPermutationDigit = array_sum(str_split($digits));
    $permutationCounter = 0;
    for ($i = $digits; $i <= $maxDigit; $i++) {
        $str = sprintf('%0'.$strLenght.'d', (string) $i);
        $arr = str_split($str);
        if ($sumPermutationDigit != array_sum($arr)) {
            unset($arr);
            continue;
        }
        $arrUnique = array_unique($arr);
        if (count($arrUnique) != $strLenght) {
            unset($arr);
            unset($arrUnique);
            continue;
        }
        $permutationCounter++;
        if($permutationCounter == $number) {
            return $str;
        }
        unset($arr);
        unset($arrUnique);
    }
}

$digits = "2654378091";
echo findPermutationNumber($digits, 50000); //

// 50k = 0239574186
// 100k = 0358926417
// 150k = 0478296351
// 200k = 0596741823
// 250k = 0726345981
// 300k = 0845697123
// 350k = 0964172385
// 400k = 1094635728
// 450k = 1324986570
// 500k = 1452679803
// 550k = 1570932864
// 600k = 1690385247
// 650k = 1809647253
// 700k = 1938240657
// 750k = 2068593471
// 800k = 2187056934
// 850k = 2407619853
// 900k = 2536981047
// 950k = 2654378091
// 1000k = 2783906415
