<?php

$dbname = $_REQUEST['dbname'];
$table_name = $_REQUEST['table_name'];
$phone = $_REQUEST['phone'];

$server_name = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($server_name,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = 'select * from table1 where phone='.'\''.$phone.'\'';
if($records = mysqli_query($conn,$sql))
{
    echo 'Record found successfully.<br>';
    while($data = mysqli_fetch_array($records))
    {
        echo '<h2>Table 1 Contents</h2>';
        echo '<table border=2>';
        echo '<tr><th>Name</th><th>Email</th><th>Phone</th></tr>';
        echo '<tr>
        <td>'.$data['name'].'</td>
        <td>'.$data['email'].'</td>
        <td>'.$data['phone'].'</td>
        </tr>';
        echo '</table>';   	
    }
} // fetch data from database
else
{
    echo $records;
    echo 'Record not found.<br>';
}


$conn->close();
?>