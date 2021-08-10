<?php

$table_name = $_REQUEST["tablename"];

$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "cmsasem4";

$conn = new mysqli($server_name,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "CREATE TABLE ".$table_name." (
    name VARCHAR(30) NOT NULL PRIMARY KEY,
    email VARCHAR(30) NOT NULL,
    phone VARCHAR(15))";

if ($conn->query($sql) === TRUE) {
    echo "Table ".$table_name." created successfully";
}
else {
    echo "Error creating table: " . $conn->error;
  }
  
$conn->close();
?>