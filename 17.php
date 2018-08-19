<?php
// Problem 17
// If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
// If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
// NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.

$numbers = array('0'=>'', '1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five', '6'=>'six', '7'=>'seven', '8'=>'eight','9'=>'nine', '10'=>'ten', '11'=>'eleven', '12'=>'twelve', '13'=>'thirteen', '14'=>'fourteen', '15'=>'fifteen', '16'=>'sixteen', '17'=>'seventeen', '18'=>'eighteen', '19'=>'nineteen');
$dozens = array('2'=>'twenty', '3'=>'thirty', '4'=>'forty', '5'=>'fifty', '6'=>'sixty', '7'=>'seventy', '8'=>'eighty', '9'=>'ninety');
$hundred = 'hundred';

$limit = 1000;
$sum = 0;
for ($i=1; $i <= $limit ; $i++) {
     $str = (string) $i;
     $strlenStr = strlen($str);

     if ($i < 20) {
          $sum += strlen($numbers[$i]);
     }
     elseif ($i < 100) {
          if($str[$strlenStr-1] == 0) {
               $sum += strlen($dozens[$str[0]]);
          }
          else {
               $sum += strlen($dozens[$str[0]]) + strlen($numbers[$str[$strlenStr-1]]);
          }
     }
     elseif ($i < 1000) {
          if ($str[$strlenStr-1] == 0 && $str[$strlenStr-2] == 0) {
               $sum += strlen($numbers[$str[0]]) + strlen($hundred);
          }
          elseif ($str[$strlenStr-1] < 10 && $str[$strlenStr-2] == 0) {
               $sum += strlen($numbers[$str[0]]) + strlen($hundred) + strlen($numbers[$str[$strlenStr-1]]) + strlen('and');
          }
          elseif ($str[$strlenStr-2].$str[$strlenStr-1] < 20) {
               $sum += strlen($numbers[$str[0]]) + strlen($hundred) + strlen($numbers[$str[$strlenStr-2].$str[$strlenStr-1]]) + strlen('and');
          }
          else {
               $sum += strlen($numbers[$str[0]]) + strlen($hundred) + strlen($dozens[$str[$strlenStr-2]]) + strlen($numbers[$str[$strlenStr-1]]) + strlen('and');
          }
     }
     elseif ($i === 1000) {
          $sum += strlen('onethousand');
     }
}
echo $sum; //21124
?>
