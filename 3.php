<?php
// Problem 3
// The prime factors of 13195 are 5, 7, 13 and 29.
// What is the largest prime factor of the number 600851475143 ?
function isPrimeNumber($num){
     $arr = array();
     for ($i=2; $i < $num; $i++) {
          if($num % $i === 0) {
               return false;
          }
     }
     return true;
}

function largestPrimeFactor($num) {
     for ($i=2; $i < $num; $i++) {
          if ($num % $i === 0) {
               if(isPrimeNumber($num / $i) === true) {
                    echo $num / $i;
                    break;
               }
          }
     }
}
largestPrimeFactor(600851475143); //6857
?>
