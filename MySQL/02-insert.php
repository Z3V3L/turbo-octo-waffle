<?php 

include('connection.php');

if( isset( $_POST["add"] ) ) {

    //Build a function to validate data
    function validateData( $formData ){
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }

    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function

    $username = $email = $password = "";

    if( !$_POST["username"] ){
        $nameError = "Please enter your Username <br>";
    } else {
        $username = validateData( $_POST["username"] );
    }

    if( !$_POST["email"] ){
        $emailError = "Please enter your Email <br>";
    } else {
        $email = validateData( $_POST["email"] );
    }

    if( !$_POST["password"] ){
        $passwordError = "Please enter your password <br>";
    } else {
        $password = validateData( $_POST["password"] );
        $password = password_hash( $password, PASSWORD_DEFAULT );
    }

    if( $username && $email && $password ) {
        
        $query = "INSERT INTO users (id, username, password, email, signup_date, biography) VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, 'Hola, bienvenidos a éste su espacio favorito, las críticas del Zorro.')";

        if(mysqli_query( $conn, $query ) ) {
            echo "<div class='alert alert-success'>Nueva información añadida con éxito a la base de datos</div>";
        } else {
            echo "Valió queso la " . $query . "<br>" . mysqli_error($conn);
        } 

    }
    
    mysqli_close($conn);

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

        <title>MySQL Insert</title>
    </head>
    <body>

        <div class="container">

            <h1>MySQL Insert</h1>

            <p class="text-danger" >* Campos requeridos</p>

            <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">

                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Username" name="username" >

                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="email">

                <small class="text-danger">* <?php echo $passwordError; ?></small>
                <input type="password" placeholder="Password" name="password">

                <input type="submit" name="add" value="Add Entry">
            </form>

        </div>
        
        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
