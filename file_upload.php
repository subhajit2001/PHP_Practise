<html>
    <head>
        <title>
            Reading File Data
        </title>
    </head>
    <body>
        <h1>Reading File Data</h1><br>
        The file contained:<br>
        <?php
            $handle = fopen($_FILES['userfile']['tmp_name'],"r");
            while(!feof($handle))
            {
                $text = fgets($handle);
                echo '<i>'.$text.'</i><br>';
            }
            fclose($handle);
            echo '<br><h2>The size of the file in bytes is: '.$_FILES['userfile']['size'];
        ?>
    </body>
</html>