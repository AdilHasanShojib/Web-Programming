<?php
$quantity=$_POST['pineapple'];
$tips=$_POST['tips'];
$hd=$_POST['hd'];
$loc=$_POST['loc'];

$bill=$bill*12.5;

if($quantity>=1 && $quantity<=9){
    $bill=$bill*0.95;
}

elseif($quantity>=10 && $quantity<=19){
    $bill=$bill*0.90;
}

else{
    $bill=$bill*0.85;
}

$bill=$bill+$tips;

if($hd=="1"){
  $bill=$bill+40;  
}

if($loc == 'd'){
$bill=$bill*1.20;
}

else{
    $bill=$bill*0.85;
}

echo "Your final bill is: $bill";








?>