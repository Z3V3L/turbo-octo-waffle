<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>MySQL Select</title>
    </head>
    <body>

        <div class="container">

            <h1>MySQL Select</h1>

            <?php 

            include("connection.php"); 

            $query = "SELECT * FROM users";
            $result = mysqli_query( $conn, $query);

            if( mysqli_num_rows($result) > 0 ) {

                //we have data!

                echo "<table class='table table-bordered'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";

                while( $row = mysqli_fetch_assoc($result) ) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td></tr>"; 
                }

                echo "</table>";

            } else {
                echo "No results ¯\_(ツ)_/¯";
            }

            mysqli_close($conn);

            ?>

        </div>
        
        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
