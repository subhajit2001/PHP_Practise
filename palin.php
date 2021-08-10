<?php

$i = 0;
$count=0;
$text = strtoupper($_REQUEST['input1']);
$len = strlen($text);
$len_copy = $len;
$len_ch = ceil($len/2);

for($i=0;$i<$len_ch;$i++)
{
    if($text[$i]==$text[$len_copy-1])
    {
        $count++;
        $len_copy--;
    }
}

if($count==$len_ch)
{
    echo 'It is a palindrome string<br>';
}
else
{
    echo 'It is not a palindrome string<br>';
}

?>