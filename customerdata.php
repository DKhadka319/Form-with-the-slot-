<?php
   $customerName=$_GET['customerName'];
   $address=$_GET['address'];
   $phoneNO=$_GET['phoneNo'];
   $email=$_GET['email'];

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

$sql = "INSERT INTO `customers` (`customerID`, `customerName`, `address`, `phoneNo`, `email`) VALUES (NULL,'$customerName', '$address','$phoneNO','$email');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
