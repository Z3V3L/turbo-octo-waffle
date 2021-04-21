<?php

    //Did the user´s browser send a cookie for the session?
    if( isset( $_COOKIE[ session_name() ] ) ) {
        //empty cookie
        setcookie( session_name(), '', time()-86400, '/' );
    }

    //Clear al session variables
    session_unset();

    //Destroy session
    session_destroy();
    
    echo "You´ve logged out.<br>";

    //print_r($_SESSION);

    echo "<p><a href='login.php'>Log back in</a></p>";

?>