<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "TIENDA_PWCI";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "select * from Usuarios";

if ($conn->query($sql) === TRUE) {
  echo "Usuarios consultados";
} else {
  echo " Error: " . $sql . " , " . $conn->error;
}

$conn->close();

