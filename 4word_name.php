<?php

$name = $_REQUEST["input1"];
$copy_name = $name;
$count = 0;
$string = "";

for($i=0;$i<strlen($copy_name);$i++)
{
    $string = $string.$copy_name[$i];
    if($copy_name[$i]==' ')
    {
        $count++;
        if($count==3)
        {
            $last = substr($copy_name,$i,strlen($copy_name)-1);
            break;
        }
    }
}

echo 'Original name : '.$name;
echo '<br>Changed name : '.$last.', '.$string;

?>