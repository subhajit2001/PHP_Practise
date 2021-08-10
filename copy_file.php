<?php
    $handle_input = fopen($_REQUEST["input1"],"r") or die("Unable to open file!!!");
    $handle_output = fopen($_REQUEST["output1"],"w") or die("Unable to open file!!!");
    while(!feof($handle_input))
    {
        $text = fgets($handle_input);
        fwrite($handle_output,$text);
    }
    fclose($handle_input);
    fclose($handle_output);
?>