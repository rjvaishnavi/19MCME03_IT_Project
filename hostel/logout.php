<?php
// this will terminate the logged-in session
    session_start();
    //// The set cookie will now only exist for 30 seconds more, and is destroyed!
    setcookie("loggedin", "", time()- 60);
    session_destroy();
    // and move on to the login page
    header('location:./login_hostel.php');
?>