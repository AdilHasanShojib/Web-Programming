<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myuiu";

//$userID = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1>";
  echo "<th>Serial</th><th>Name</th><th>ID</th><th>Mark</th>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["sl"]. "</td><td>" . $row["name"]. "</td><td>" . $row["id"]. "</td><td>" . $row["mark"]."</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$sql = "UPDATE student SET `name`='Doe' WHERE `mark` < 80";

if ($conn->query($sql) === TRUE) {
  echo "Name changed succesfully";
} else {
  echo "Error updating record: " . $conn->error;
}

echo "Now, see the latest Table:::<br>";

//$sql = "SELECT * FROM student";
//$sql = "SELECT * FROM student ORDER BY mark DESC LIMT 2";
//$sql = "SELECT * FROM student WHERE `id` = '$userID'";
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1>";
  echo "<th>Serial</th><th>Name</th><th>ID</th><th>Mark</th>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["sl"]. "</td><td>" . $row["name"]. "</td><td>" . $row["id"]. "</td><td>" . $row["mark"]."</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>