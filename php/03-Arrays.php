<?php
    define( "TITLE", "PHP Arrays");
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

                //Simple Array
                $user = array(
                            "zevel",
                            "Fernando Bejar",
                            23,
                            "male",
                            "México"
                        );
            
                //Echo the values
                echo $user[0] . "<br>";
                echo $user[1] . "<br>";
                echo $user[2] . "<br>";
                echo $user[3] . "<br>";
                echo $user[4] . "<br>";
                echo "<hr>";

                //Associative arrays
                $people = array(
                            "username"  => "zevel",
                            "fullname"  => "Fernando Bejar",
                            "age"       => 23,
                            "gender"    => "male",
                            "country"   => "México"
                        );

                //Echo the associative array
                echo $people["username"] . "<br>";
                echo $people["fullname"] . "<br>";
                echo $people["age"] . "<br>";
                echo $people["gender"] . "<br>";
                echo $people["country"] . "<br>";
                echo "<hr>";

                //Multi-dimensional arrays
                $employees = array(
                                array(
                                    "username"  => "zevel",
                                    "fullname"  => "Fernando Bejar",
                                    "age"       => 23,
                                    "gender"    => "male",
                                    "country"   => "México"
                                ),
                                array(
                                    "username"  => "jojo",
                                    "fullname"  => "Joseph Joestar",
                                    "age"       => 19,
                                    "gender"    => "male",
                                    "country"   => "England"
                                )
                                
                            );

                //Echo the values of multi-dimensional arrays
                echo $employees[1]["username"] . "<br>";
                echo $employees[1]["fullname"] . "<br>";
                echo $employees[1]["age"] . "<br>";

                echo "<hr>";
            ?>
        </div>

        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>

