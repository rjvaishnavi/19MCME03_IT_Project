<?php
/* Database credentials. Running MySQL server with default setting (user 'root' with no password) */
    session_start();
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
        $table = "CREATE TABLE IF NOT EXISTS itlabexerciseusers(
                ID  varchar(10) NOT NULL UNIQUE,
                FNAME varchar(20) NOT NULL,
                LNAME varchar(20) NOT NULL,
                PWD char(255) NOT NULL
                );";
        mysqli_query($link, $table);
    }

?>