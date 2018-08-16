<?php
// Problem 7
// By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
// What is the 10 001st prime number?

function isPrimeNumber($num){
     $arr = array();
     for ($i=2; $i < $num; $i++) {
          if($num % $i === 0) {
               $arr[] = '';
               break;
          }
     }
     return (count($arr)>0) ? false : true;
}

function primeNumber($num) {
     for ($i=2, $j=0; $i < 99999999999999999; $i++) {
          if(isPrimeNumber($i)) {
               ++$j;
               if ($num === $j) {
                    return $i;
                    break;
               }
          }
     }
}

echo primeNumber(10001); //104743
?>
