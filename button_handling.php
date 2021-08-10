<html>
    <head>
        <title>
            Reading buttons
        </title>
    </head>
    <body>
        <h1>Reading buttons</h1>
        You clicked
        <?php
            if(isset($_REQUEST["button"]))
            {
                echo $_REQUEST["button"].'<br>';
            }
        ?>
    </body>
</html>