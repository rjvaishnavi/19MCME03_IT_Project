<?php

    include "myhostel_rooms.php";
    include "myhostel_users.php";
    ///to connect to the database
    $id = "";
    $pwd = ""; 
  
    //            This starts the php process if the request method is post upon submitting the form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
  
      ///////////// This is triming the excess out of the input that is taken in by the form
      $id = trim($_POST["thisid"]);
      $pwd = trim($_POST["thispwd"]);
      
      ///////////// This is a query to the database to make sure to check the exisitng data table has the input username already
      $query = mysqli_query($link, "SELECT * FROM itlabexerciseusers WHERE ID = '$id'");
      ///// If it does the program will continue
      if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_assoc($query);
        $passwd = $row['PWD'];
        if(password_verify($pwd,$passwd) === true){
            $_SESSION['login'] = "stud";
            $_SESSION['fname'] = $row["FNAME"];
            $_SESSION['id'] = $id;
            setcookie("loggedin", "stud", time()+ 86400);
            header("location: ./student-page.php");
        }
        else{
          echo '<script> alert("The ID or password is wrong. LOGIN FAILED!"); window.location.href = "./login_hostel.php"; </script>'; 
        }
      }
      else{
        echo '<script> alert("The ID or password is wrong. LOGIN FAILED!"); window.location.href = "./login_hostel.php"; </script>';
      }  
    }

    
?>