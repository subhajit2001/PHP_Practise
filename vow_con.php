<?php

$no_vowels = 0;
$no_consonants = 0;

$text = $_REQUEST["input1"];
$text_copy = strtoupper($text);

for($i=0;$i<strlen($text);$i++)
{
    if($text_copy[$i]=='A'||$text_copy[$i]=='E'||$text_copy[$i]=='I'||$text_copy[$i]=='O'||$text_copy[$i]=='U')
    {
        $no_vowels++;
    }
    else if($text_copy[$i]==' ')
    {
        continue;
    }
    else
    {
        $no_consonants++;
    }
}

echo 'No of vowels : '.$no_vowels.'<br>';
echo 'No of consonants : '.$no_consonants;

?>