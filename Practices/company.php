<?php
$host="localhost";
$username="root";
$password="";
$db="company";

$conn= new mysqli($host,$username,$password,$db);

if($conn->connect_error){
    die("Error connecting" .$conn->connect_error);
}

$sql="SELECT * FROM employee ORDER BY SALARY DESC LIMIT 3";
$result=$conn->query($sql);

if($result->num_rows>0){
  echo "<table border=2> <tr><th>EMAIL</th> <th>PHONE_NUMBER</th> <th>HIRE_DATE</th> <th>JOB_ID</th> <th>SALARY</th></tr>"; 
  while($row=$result->fetch_assoc()){
  
  echo "<tr><td>" . $row['EMAIL'] . "</td><td>" . $row['PHONE_NUMBER'] . "</td><td>" . $row['HIRE_DATE'] ."</td><td>" . $row['JOB_ID'] ."</td><td>" . $row['SALARY'] . "</td></tr>";


  } 

  echo "</table>";
  

}

else{
    echo "0 results";
}

















$conn->close();

?>