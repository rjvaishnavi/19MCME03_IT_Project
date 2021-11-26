<?php
    $_SESSION["login"] = "admin";
    setcookie("loggedin", "admin", time()+ 86400);
    header("location: ./admin-page.php");
?>