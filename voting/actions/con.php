<?php
$servername = "localhost";
$username = "root";
$password = "ikim5059";
$dbname = "votingsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

else{$sql = "INSERT INTO userdata(username,mobile,password,photo,standard,
status,votes)
VALUES ('collins','999999','123','','voter',
0,0)";
}
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>