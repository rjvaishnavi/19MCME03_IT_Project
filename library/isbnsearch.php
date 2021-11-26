<?php
    ///to connect to the database
    include "mydb_books.php";
    $isbn = "";

    //            This starts the php process if the request method is post upon submitting the form
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        ///////////// This is triming the excess out of the input that is taken in by the form
        $isbn = trim($_POST["isbn"]);
        ///////////// This is a query to the database to make sure to check the exisitng data table has the input ID already
        $query = mysqli_query($link, "SELECT * FROM itlabexerciselibrary WHERE ISBN = '$isbn'");
        ///// If it does the program will continue
        if(mysqli_num_rows($query) == 1){
        /// this is to fetch the row that contains the ID that is to be used
        echo '  <script> alert("A Book with ISBN '. $isbn.' exists");  window.location.href = "./searchbook-page.php"</script>';
    
        }
        else{
            /// if the current Isbn doesn't exist it shows an alert error 
            echo '  <script> alert("A Book with ISBN '. $isbn.' does NOT exist");  window.location.href = "./searchbook-page.php"</script>';
        }
    }

?>