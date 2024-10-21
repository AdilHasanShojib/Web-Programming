<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="electricity_bill database";

$conn= new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error){
   
   die("Error Connection" . $conn->connect_error);

}

$loc=$_POST['loc'];
$area=$_POST['area'];
$unit=$_POST['unit'];



$sql="SELECT rate_0_75, rate_76_200, rate_201_above FROM bill_info WHERE location='$loc' AND area='$area'";
$result=$conn->query($sql);

if($result->num_rows>0){
 
 $row=$result->fetch_assoc();
 $total_bill=0;

 if($unit<=75){
   $total_bill=$unit*$row['rate_0_75'];
   
 }

 elseif($unit<=200){
     $total_bill=75*$row['rate_0_75']+($unit-75)*$row['rate_76_200'];
 }
 
 else{
    $total_bill=75*$row['rate_0_75']+125*$row['rate_76_200']+($unit-200)*$row['rate_201_above'];

 }

 if($loc=="Dhaka"){
  $total_bill=$total_bill*1.20;
 }

 else{
    $total_bill=$total_bill*1.15;
 }


echo "<h2> Your Location: $loc </h2>";
echo "<h2> Your Area: $area </h2>";
echo "<h2> Unit Consume: $unit </h2>";
echo "<h2> Total Bill: $total_bill BDT </h2>";

}


 

   



else{
    echo "0 results";
}














$conn->close();

?>