<?php
    $num = $_POST["input"];
    $copy_num = $num;

    function factorial($copy_num)
    {
        if($copy_num==0)
        {
            return 1;
        }
        else
        {
            return $copy_num*factorial($copy_num-1);
        }
    }

    $fact = factorial($copy_num);
    echo 'The factorial of '.$num.' is : '.$fact;
?> 