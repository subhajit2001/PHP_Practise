<?php

$dbname = $_REQUEST['dbname'];
$table_name = $_REQUEST['table_name'];
$name = $_REQUEST['name'];
$new_name = $_REQUEST['new_name'];

$server_name = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($server_name,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = 'select * from table1 where name='.'\''.$name.'\'';
if($records = mysqli_query($conn,$sql))
{
    echo 'Record found successfully.<br>';
    $sql1 = 'UPDATE '.$table_name.' SET name='.'\''.$new_name.'\''.' WHERE name='.'\''.$name.'\'';
    if ($conn->query($sql1) === TRUE) {
        echo "Record updated successfully";
    }
    else
    {
        echo "Error updating record: " . $conn->error;
    }  
} // fetch data from database
else
{
    echo $records;
    echo 'Record not found.<br>';
}


$conn->close();
?>