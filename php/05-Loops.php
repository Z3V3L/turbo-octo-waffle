<?php
    define( "TITLE", "Loops");
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

                //While

                $y = 15;

                while ( $y <= 20 ) {
                    echo $y . "      ";
                    $y += 1 ;
                }     
                
                echo "<br><br>";


                //For

                for ( $x = 30; $x <= 40; $x++) {
                    echo "Number $x <br>";
                }


                //Foreach

                $friends = array( "Aldair", "Camila", "Eli", "Adan", "Oscar"  );

                foreach ( $friends as $friend) {
                    echo "$friend is my friend <br>";
                }


                //Do while
                
                $x = 50;

                do {

                    echo "Mira, es $x <br>";
                    $x ++;

                } while ($x <= 40);

            ?>
        </div>

        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>

