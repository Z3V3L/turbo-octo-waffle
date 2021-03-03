<!DOCTYPE html>
<html>
    <head>
        <title>PHP Syntax</title>
    </head>
    <body>

        <?php 
            echo ("Hello world"); //Or echo "Hello world"; 
        
        ?>

        <!-- COMMENTS -->
        <?php 
            //Single line comment

            #Single line comment again

            /*
            Multi line comment
            */
        ?>

        <?php 
            #   Not case sensitive
            print('hello world<br>');
            Print('hello world<br>');
            PRINT('hello world<br>');

            //  But variables are
            $name = "Jojo";
            echo "Hola " . $name . "<br>";
            echo "Hola " . $Name . "<br>";
            echo "Hola " . $NAME . "<br>";
        ?>

    </body>
</html>