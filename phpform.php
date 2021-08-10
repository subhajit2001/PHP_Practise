<html>
    <head>
        <title>
            Reading Data from Forms
        </title>
    </head>
    <body>
        <h1>
            Reading Data from Fields
        </h1>
        Thanks for answering,
        <?php
            echo $_REQUEST["data"].'<br><br>';
            echo 'You want pizza with: <br>';
            $text = $_REQUEST["data_area"];
            echo str_replace("\n","<br>",$text).'<br>';
            if(isset($_REQUEST["check1"]))
            {
                echo 'Do you want fries:<b>'.$_REQUEST["check1"].'</b><br><br>';
            }
            else
            {
                echo 'Do you want fries:<b>'.$_REQUEST["check2"].'</b><br><br>';
            }
            if(isset($_REQUEST["radios"]))
            {
                echo 'Do you want cold-drinks:<b>'.$_REQUEST["radios"].'</b><br><br>';
            }
            else
            {
                echo 'No radio Button was selected'.'<br><br>';
            }
            echo 'Your ice-cream flavours:'.'<br>';
            foreach ($_REQUEST["ice_cream"] as $flavor)
            {
                echo '<b>'.$flavor,'</b><br>';
            }
            if($_REQUEST["password"]=="letmein")
            {
                echo '<h2>Password Accepted</h2>OK, you\'re in.<br>Please act responsibly<br><br>';
            }
            else
            {
                echo '<h2>Password Denied</h2>';
            }
            echo 'We think you are a '.$_REQUEST["customer_type"].' customer.<br><br>';
            echo 'You clicked the image at'.$_REQUEST["imap_x"].",".$_REQUEST["imap_y"].'<br><br>';

        ?>
    </body>
</html>