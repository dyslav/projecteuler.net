<?php
// Problem 9
// A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
// a^2 + b^2 = c^2
// For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
// There exists exactly one Pythagorean triplet for which a + b + c = 1000.
// Find the product abc.

for ($a=3; $a < 1000; $a++) {
     if ($a % 2 === 0) {
          $b = pow($a/2, 2) - 1;
          $c = pow($a/2, 2) + 1;
     }
     else {
          $b = (pow($a, 2) - 1) / 2;
          $c = (pow($a, 2) + 1) / 2;
     }

     if ($b > $a) {
               for ($k=1; $k < 100; $k++) {
                    $a2 = $k * $a;
                    $b2 = $k * $b;
                    $c2 = $k * $c;

                    if($a2 + $b2 + $c2 === 1000)
                         echo $a2 * $b2 * $c2; //31875000
               }

     }
}
?>
