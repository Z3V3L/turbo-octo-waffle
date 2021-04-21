<?php

    //Clear al session variables
    session_unset();

    //Destroy session
    session_destroy();
    
    echo "You´ve logged out.<br>";

    print_r($_SESSION);

?>