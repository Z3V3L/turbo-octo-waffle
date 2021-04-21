<?php
session_start();

if( !$_SESSION['loggedInUser'] ) {

    // Send to login page
    header("Location: index.php");
}

//Connect to database
include('includes/connection.php');

//Query & result
$query = "SELECT * FROM clients";
$result = mysqli_query( $conn, $query );

//check for query string
//Client added
if( $_GET['alert'] == 'success' ) {
    $alertMessage = "<div class='alert alert-success'>New client added! <a class='close' data-dismiss='alert'>&times;</a></div>";

    //Client updated
} elseif( $_GET['alert'] == 'updatesuccess' ) {
    $alertMessage = "<div class='alert alert-success'>Client updated! <a class='close' data-dismiss='alert'>&times;</a></div>";

    //Client deleted
} elseif( $_GET['alert'] == 'deleted' ) {
    $alertMessage = "<div class='alert alert-success'>Client deleted! <a class='close' data-dismiss='alert'>&times;</a></div>";
} 

//Close the mysql Connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Client Address Book</h1>

<?php echo $alertMessage; ?>

<table class="table table-striped table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Company</th>
        <th>Notes</th>
        <th>Edit</th>
    </tr>

    <?php 
    
        if( mysqli_num_rows($result) > 0 ) {
            //We have data!

            while( $row = mysqli_fetch_assoc($result) ) {
                echo "<tr>";

                echo "<td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['address'] . "</td><td>" . $row['company'] . "</td><td>" . $row['notes'] . "</td>";

                echo "<td><a href='edit.php?id=" . $row['id'] . "' type='button' class='btn btn-primary btn-sm'><i class='bi bi-pencil-fill'></i></a></td>";

                echo "</tr>";

            }


        } else {
            echo "<div class='alert alert-warning'>You have no clients.</div>";
        }

        mysqli_close($conn);

    ?>


    <tr>
        <td colspan="7"><div class="text-center"><a href="add.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Client</a></div></td>
    </tr>
</table>

<?php
include('includes/footer.php');
?>