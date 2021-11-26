<?php
    include "mydb_books.php";
    $title = $author = $isbn = $stat = $borrower = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        ///////////// This is triming the excess out of the input that is taken in by the form
        $title = trim($_POST["title"]);
        $author = trim($_POST["author"]);
        $isbn = trim($_POST["isbn"]);
        $stat ="y"; /// when book is available it shows y when not, it shows n
        $borrower = "0";
        ///////////// This is a query to the database to make sure to check the exisitng data table has the input book isbn already
        $query = mysqli_query($link, "SELECT * FROM itlabexerciselibrary WHERE ISBN = '$isbn'");

        ///// If it dosen't the program will continue
        if(mysqli_num_rows($query) == 0){
        
            /////////// this is the insert query to insert the validated input into the data table
            mysqli_query($link, "INSERT INTO itlabexerciselibrary (ISBN, TITLE, AUTHOR, STAT, BORROWER) VALUES ('$isbn','$title','$author', '$stat', '$borrower') ");
            //mysqli_query($link, "INSERT INTO itlabexerciselibrary (ISBN, TITLE, AUTHOR, STAT, BORROWER) VALUES ('$isbn','$title','$author', '$stat','$borrower')");
            ///////////// This is a query to the database to make sure to check the exisitng data table has the input book inserted
            $query = mysqli_query($link, "SELECT * FROM itlabexerciselibrary WHERE ISBN = '$isbn'" );
                        //////////// if its is sucessfully inserted
            if(mysqli_num_rows($query) == 1){
            // an alert message is shown and the webpage is moved to the login page
            echo '<script> alert("Book added Successfully"); window.location.href = "./admin-page.php";</script>';
            // $sucess = true;
            }
            else{
            //// if it cant be inserted into the data table, it shows an alert error
            echo '<script> alert("An error has occured and book was not added");  window.location.href = "./admin-page.php"; </script>';
            // echo '<script> alert("An error has occured and your account was not created"); window.location.href = "./signup.php"; </script>';
            
            }
        }
        else{
            // if the id is already taken, it shows the alert error  
            echo '<script> alert("The ISBN '.$isbn.' is already in the system. Enter another."); window.location.href = "./addbook-page.php";</script>';          
        
        }
    
    }


?>
   