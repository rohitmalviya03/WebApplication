<?php
$servername = "localhost";
$username = "root";
$password = 12345;
$dbname = "globalc";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name  =  $_REQUEST['name'];
  $email =  $_REQUEST['email'];
  $contact_no  =  $_REQUEST['contact'];
  $courses =  $_REQUEST['courses'];
  
  
$sql = "INSERT INTO students(name,email,contact_no,courses)
VALUES('$name','$email','$contact_no','$courses')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>