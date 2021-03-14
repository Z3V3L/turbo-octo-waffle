<?php
    define( "TITLE", "If & Else statement");
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

                //If trabaja como boleano, si la expresión es verdadera, entonces prosigue, si no, no lo hagas.

                $foo = 5;
                $bar = 10;

                if ($foo < $bar) {
                    echo '$foo es menor que $bar <br>';
                    echo "$foo es menor que $bar <br>";  // "" permite usar variables dentro de sting.  
                }


                //Else, lo que hará si la primer condición no se cumple.

                $listeningTo = "Sorairo days";

                if ( $listeningTo == "Sono chi no sadame" ) {

                    echo "JOOOOOOOOOOOOOOOOOJO!!<br>";

                } else {

                    echo "Giga... drill... BREAKEEEEEEEEER!!<br>";
                }


                //Elseif, lo que hará si la primer condición no se cumple, pero con otra condición (pueden ser las que sean).

                $listeningTo = "Devilman";

                if ( $listeningTo == "Sono chi no sadame" ) {

                    echo "JOOOOOOOOOOOOOOOOOJO!!<br>";

                } elseif ( $listeningTo == "Devilman" ) {

                    echo "Devilmaaaaaan!!<br>";
                    
                } else {

                    echo "Giga... drill... BREAKEEEEEEEEER!!<br>";
                }
            ?>
        </div>

        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>

