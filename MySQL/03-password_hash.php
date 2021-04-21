<?php 

include('connection.php');

?>


<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Password Hashing</title>
    </head>
    <body>

        <div class="container">

            <h1>Password hashing</h1>

            <?php 
            
                //$password = password_hash( "mypassword", PASSWORD_DEFAULT );
                //echo $password;

                $hashedPassword = '$2y$10$qFU47cxSX3WRZYRxhxZ7OOEc6O8MX2mCNVINlOnHahlKy7PyVKQsq';

                if( isset( $_POST['login'] ) ) {

                    if( password_verify( $_POST['password'], $hashedPassword ) ) {
                        echo "Password correct! :D";
                    }  else {
                        echo "Incorrect password, ¿Quién eres tu esé?";
                    }

                }


                

            ?>


            <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">

                <label for="">* Password</label>
                <input type="password" placeholder="Password" name="password">

                <input type="submit" name="login" value="Log in">

            </form>

        </div>
        
        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
