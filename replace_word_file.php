<?php

$count = 0;

$input_file = $_REQUEST['input1'];
$output_file = $_REQUEST['output1'];
$input_string = $_REQUEST['input1_string'];
$output_string = $_REQUEST['new_string'];

$input_handle = fopen($input_file,'r');
$output_handle = fopen($output_file,'w');

while(!feof($input_handle))
{
    $text = fgets($input_handle);
    $count = $count + substr_count($text,$input_string);
    $text = str_replace($input_string,$output_string,$text);
    fputs($output_handle,$text);
}

echo '<br>No of strings found and changed : '.$count;
fclose($output_handle);
fclose($input_handle);
?>

