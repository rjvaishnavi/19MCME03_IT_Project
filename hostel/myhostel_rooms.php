<?php
/* Database credentials. Running MySQL server with default setting (user 'root' with no password) */
   // session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";

    $link = mysqli_connect($servername, $username, $password);

    if (!$link) {
        die("Error in connection: " . mysqli_connect_error());
    }

    $db = "CREATE DATABASE IF NOT EXISTS myhostel";
    mysqli_query($link, $db);

    $usedb = "USE MYHOSTEL;";
    if(mysqli_query($link, $usedb)){
        $table2 = "CREATE TABLE IF NOT EXISTS itlabexerciserooms(
                ROOM  varchar(4) NOT NULL UNIQUE,
                FLOORNO int(2) NOT NULL,
                VACANCY varchar(1) NOT NULL,
                HOSTELLER varchar(10) NOT NULL
                );";
        mysqli_query($link, $table2);
    }

?>