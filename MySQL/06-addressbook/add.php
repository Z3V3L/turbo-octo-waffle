<?php
session_start();

//If user is not logged in
if( !$_SESSION['loggedInUser'] ){

    //Send them to the login page
    header("Location: index.php");
}
//Connect to database
include('includes/connection.php');

//Include functions file
include('includes/functions.php');

//Check if add button was submitted
if( isset( $_POST["add"] ) ) {
    
    //Set all variables to empty by default
    $clientName = $clientEmail = $clientPhone = $clientAddress = $clientCompany = $clientNotes = "";

    //check to see if inputs are empty
    //create variables with form data
    //wrap the data with our function

    if( !$_POST["clientName"] ) {
        $nameError = "<div class='alert alert-danger'>Please enter a name <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
      </div>";
    } else {
        $clientName = validateFormData( $_POST["clientName"] );
    }

    if( !$_POST["clientEmail"] ) {
        $emailError = "<div class='alert alert-danger'>Please enter an Email <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
      </div>";
    } else {
        $clientEmail = validateFormData( $_POST["clientEmail"] );
    }

    //Those are not required inputs
    $clientPhone    = validateFormData( $_POST["clientPhone"] );
    $clientAddress  = validateFormData( $_POST["clientAddress"] );
    $clientCompany  = validateFormData( $_POST["clientCompany"] );
    $clientNotes    = validateFormData( $_POST["clientNotes"] );

    //if required fields have data
    if( $clientName && $clientEmail ) {

        //Create query
        $query = "INSERT INTO clients ( id, name, email, phone, address, company, notes, date_added ) VALUES ( NULL, '$clientName', '$clientEmail', '$clientPhone', '$clientAddress', '$clientCompany', '$clientNotes', CURRENT_TIMESTAMP )";

        $result = mysqli_query( $conn, $query );

        // if query was successful
        if( $result ) {

            // refresh page with query string
            header( 'Location: clients.php?alert=success' );

        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

    }
}

//close the mysqli connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Add Client</h1>

<?php echo $nameError . $emailError; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="row">
    <div class="form-group col-sm-6">
        <label for="client-name">Name *</label>
        <input type="text" class="form-control input-lg" id="client-name" name="clientName" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-email">Email *</label>
        <input type="text" class="form-control input-lg" id="client-email" name="clientEmail" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-phone">Phone</label>
        <input type="text" class="form-control input-lg" id="client-phone" name="clientPhone" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-address">Address</label>
        <input type="text" class="form-control input-lg" id="client-address" name="clientAddress" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-company">Company</label>
        <input type="text" class="form-control input-lg" id="client-company" name="clientCompany" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-notes">Notes</label>
        <textarea type="text" class="form-control input-lg" id="client-notes" name="clientNotes"></textarea>
    </div>
    <div class="col-sm-12">
            <a href="clients.php" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="add">Add Client</button>
    </div>
</form>

<?php
include('includes/footer.php');
?>