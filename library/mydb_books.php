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

    $db = "CREATE DATABASE IF NOT EXISTS mylib";
    mysqli_query($link, $db);

    $usedb = "USE MYLIB;";
    if(mysqli_query($link, $usedb)){
        $table = "CREATE TABLE IF NOT EXISTS itlabexerciselibrary(
                ISBN   varchar(13) NOT NULL UNIQUE,
                TITLE  varchar(20) NOT NULL,
                AUTHOR varchar(20) NOT NULL,
                STAT char(1) NOT NULL,
                BORROWER VARCHAR(10)
                );";
        mysqli_query($link, $table);
    }

?>