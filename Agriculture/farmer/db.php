<?php
$servername = "localhost";
$username = "username";
$password = " ";
$db="agri";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>