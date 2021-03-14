<?php
    define( "TITLE", "Functions & arguments");
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title><?php echo TITLE; ?></title>
    </head>
    <body>

        <div class="container">
            <h1><?php echo TITLE; ?></h1>

            <?php 

                function myFunction() {

                    $a = 0;

                    do {
                        echo "$a &nbsp;";
                        $a ++;
                    } while( $a <= 100 );

                }

                // Call the function
                myFunction();
                echo "<br><br>";

                function myFunction2( $a ) {

                    do {
                        echo "$a &nbsp;";
                        $a ++;
                    } while( $a <= 50 );

                }

                // Call the new function
                
                myFunction2( 10 );
                echo "<br><br>";

                function suma( $num1, $num2) {
                    $sum = $num1 + $num2;
                    echo "$num1 + $num2 = $sum";
                }

                suma( 5, 10 );

            ?>
        </div>

        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>

