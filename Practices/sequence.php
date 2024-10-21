<?php
function generateCrypticSequence($seed,$term){

$sequence =[];
$currentvalue=$seed;
$sequence[] =$currentvalue;


for($i=1;$i<$term;$i++){
  $sumOfDigits = array_product(str_split($currentvalue));
  $currentvalue += $sumOfDigits;
  $sequence[] = $currentvalue;


}

 return implode(",",$sequence);

}








$seed=(int)readline();
$term=(int)readline();

echo generateCrypticSequence($seed,$term);




?>