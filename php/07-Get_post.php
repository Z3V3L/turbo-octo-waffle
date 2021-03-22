<?php
    define( "TITLE", "GET &amp; POST");

    if( isset( $_POST["post_submit"] ) ) {

        //Build a function to validate data
        function validateData( $formData ){
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );

        }

        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function

        if( !$_POST["post_name"] ){
            $nameError = "Please enter your name <br>";
        } else {
            $name = validateData( $_POST["post_name"] );
        }


        if( !$_POST["post_email"] ){
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateData( $_POST["post_email"] );
        }


    }
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

            <h4>Enviado con método $_GET</h4>
            <form action="07-form_get.php" method="get">
                <input type="text" placeholder="Name" name="name" >
                <input type="text" placeholder="Email" name="email">
                <input type="submit"name="form_submit">
            </form>

            <!-- El método GET, envia la información por medio de métodos URL, lo cual la deja expuesta, al igual que la información, por lo tanto no es conveniente para enviar información sensible como contraseñas, pero es bueno para hacer búsquedas. -->

            <hr>

            <h4>Enviado con método $_POST</h4>
            <form action="07-form_post.php" method="post">
                <input type="text" placeholder="Name" name="post_name" >
                <input type="text" placeholder="Email" name="post_email">
                <input type="submit"name="post_submit">
            </form>

            <!-- En cambio el método Form sí funciona para enviar datos sensibles -->

            <hr>

            <h4>Enviado a la página actual</h4>

            <p class="text-danger" >* Campos requeridos</p>
            <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">

                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Name" name="post_name" >
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="post_email">
                <input type="submit"name="post_submit">
            </form>

            <?php

                if( isset( $_POST["post_submit"]) ) {
                    echo "<h4>Your info</h4>";
                    echo "$name <br> $emali <br>";
                }

            ?>

        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>

