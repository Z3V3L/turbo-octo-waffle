<?php
session_start();

include('includes/functions.php');

// if login form was submitted
if( isset( $_POST['login'] ) ) {

    //Create variables & wrap data with validate function
    $formEmail = validateFormData( $_POST['email'] );
    $formPass = validateFormData( $_POST['password'] );

    //Connect to database
    include('includes/connection.php');

    //create query
    $query = "SELECT name, password FROM users WHERE email='$formEmail'";

    //Store the result
    $result = mysqli_query( $conn, $query );

    //Verify if the result is returned
    if( mysqli_num_rows($result) > 0 ) {
        
        //store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $name       = $row['name'];
            $hashedPass = $row['password'];
        }

        //Verify hashed password with submitted password
        if( password_verify( $formPass, $hashedPass ) ) {
            
            //Correct login details
            //Store data in SESSION variables
            $_SESSION['loggedInUser'] = $name;

            //redirect user to clients page
            header( 'Location: clients.php' );
            exit();
        } else {

            //error message
            $loginError = "<div class='alert alert-danger alert-dismissible'>Wrong username / password. Try again<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button></div>";
        }

    } else { //No results in database
        $loginError = "<div class='alert alert-danger'>
        No such user in database. Please try again.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
          </div>";
    }

}

//Close connection
mysqli_close($conn);

include('includes/header.php');

//$password = password_hash('qwerty', PASSWORD_DEFAULT);
//echo $password;

?>

<h1>Client Address Book</h1>
<p class="lead">Log in to your account.</p>

<?php echo $loginError; ?>

<form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <div class="form-group">
        <label for="login-email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="login-email" placeholder="email" name="email" value="<?php echo $formEmail; ?>">
    </div>
    <div class="form-group">
        <label for="login-password" class="sr-only">Password</label>
        <input type="password" class="form-control" id="login-password" placeholder="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

<?php
include('includes/footer.php');
?>
