<?php
    $count = 0;
    $handle = fopen($_REQUEST['input1'],"r");
    $handle_output = fopen($_REQUEST['output1'],'w');
    while(!feof($handle))
    {
        $text = fgets($handle);
        fputs($handle_output,strtolower($text));
        $count = $count + CountUpper($text);
    }
    echo '<br>No of characters changed are: '.$count;
    fclose($handle);
    fclose($handle_output);
    function CountUpper($str)//No of upper case letters
    {
      $upper = 0;
      for($i=0;$i<strlen($str);$i++)
      {
        if($str[$i]>='A' && $str[$i]<='Z')
        {
          $upper++;
        }
      }
      return $upper;  
    }    
?>