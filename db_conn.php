<?php
$servername = "cruddemo.cr4qo8eowr5r.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "Password2002";
$dbname = "crudDemo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
