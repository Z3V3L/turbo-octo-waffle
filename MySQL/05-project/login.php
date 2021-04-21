<?php 

    //Check if the form has been submitted
    if( isset( $_POST['submit'] ) ) {
        
        //Function to validate data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
            return $formData;
        }

        //Wrap the data with our function
        $formUser = validateFormData( $_POST['user'] );
        $formPass = validateFormData( $_POST['pass'] );

    

        //Establish connection with the database
        include('../connection.php');

        //Create SQL Query
        $query = "SELECT username, email, password FROM users WHERE username='$formUser'";

        //Store the result
        $result = mysqli_query( $conn, $query );

        //Verify if result is returned
        if( mysqli_num_rows($result) > 0 ) {

            //store basic user data in variables
            while( $row = mysqli_fetch_assoc($result) ) {
                $user       = $row['username'];
                $email      = $row['email'];
                $hashedPass = $row['password'];

            }

            //Verify hashed password with the typed password
            if( password_verify( $formPass, $hashedPass ) ) {
                //Correct login
                //Start session
                session_start();

                //store data in SESSION variables
                $_SESSION['loggedInUser'] = $user;
                $_SESSION['loggedInEmail'] = $email;

                header("Location: profile.php");
            } else {

                //error message
                $loginError = "<div class='alert alert-danger'>Wrong username / password combination.</div>";

            }



        } else { //No results in database
        
            $loginError = "<div class='alert alert-danger'>No such user in database. Try again. <a class='close' data-dismiss='alert'>&times;</a></div>";

        }

    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Login</title>
    </head>
    <body>

        <div class="container">

            <h1>Login</h1>

            <p class="lead">Use this form to login in to your account</p>

            <?php echo $loginError; ?>
            

            <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            
                <div class="form-group ml-3">
                    <label class="sr-only" for="user1">Username: </label>
                    <input type="text" name="user" id="user1" placeholder="Username" class="form-control">
                </div>

                <div class="form-group mx-3">
                    <label class="sr-only" for="pass1">Password: </label>
                    <input type="password" name="pass" id="pass1" placeholder="Password" class="form-control">
                </div>

                <input type="submit" value="Submit" name="submit" class="btn btn-secondary">

            </form>

        </div>
        
        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
