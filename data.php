<?php
   $fullname=$_GET['fullname'];
   $address=$_GET['address'];
   $gender=$_GET['gender'];
   $country=$_GET['country'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `studentinfo` (`studentID`, `fullname`, `address`, `gender`, `country`) VALUES (NULL,'$fullname', '$address','$gender','$country');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
