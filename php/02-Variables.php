<?php
    define( "TITLE", "PHP Variables & Constants");
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
    </head>
    <body>

        <?php 
            
            // Boolean

            $loggedIn = true;


            // Integer

            $age = 23;
        

            // Floating point

            $price = 12.50;


            // String

            $variable1 = "adfas";


            #   CONSTANTS

            define( "TITLE", "PHP Variables & constants" );

            echo (TITLE);

            echo ("<br>Hello, you are $age years old");
        ?>

    </body>
</html>