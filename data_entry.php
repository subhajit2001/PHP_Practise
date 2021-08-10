<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];
$sex = $_REQUEST['sex'];
$qualification = $_REQUEST['Qualification'];
$phone = $_REQUEST['ph_no'];
$filename = $_REQUEST['filename'];

$handle = fopen($filename,"a");
$record = $name.','.$email.','.$dob.','.$sex.','.$qualification.','.$phone."\n";
if(fwrite($handle,$record))
{
    echo "Record Inserted Successfully";
}
else
{
    echo "Record Insertion Failure";
}
fclose($handle);

?>
