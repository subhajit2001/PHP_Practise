<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];

$server_name = "localhost";
$username = "root";
$password = "";
$dbname = "cmsasem4";


$conn = new mysqli($server_name,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = 'INSERT INTO table1 (name, email, phone) VALUES ('.'\''.$name.'\''.','.'\''.$email.'\''.','.'\''.$phone.'\''.')';

if ($conn->query($sql) === TRUE) {
    echo "Record Inserted successfully";
}
else {
    echo "<br>Record Insertion Error: " . $conn->error;
  }


$records = mysqli_query($conn,"select * from table1"); // fetch data from database

echo '<h2>Table 1 Contents</h2>';
echo '<table border=2>';
echo '<tr><th>Name</th><th>Email</th><th>Phone</th></tr>';

while($data = mysqli_fetch_array($records))
{
    echo '<tr>
    <td>'.$data['name'].'</td>
    <td>'.$data['email'].'</td>
    <td>'.$data['phone'].'</td>
    </tr>';	
}
echo '</table>';   
$conn->close();
?>