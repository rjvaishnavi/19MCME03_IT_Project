<?php
    ///to connect to the database
    include "mydb_users.php";
    $id = "";
    $pwd = ""; 
  
    //            This starts the php process if the request method is post upon submitting the form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
  
      ///////////// This is triming the excess out of the input that is taken in by the form
      $id = trim($_POST["thisid"]);
      $pwd = trim($_POST["pwd"]);
      
      ///////////// This is a query to the database to make sure to check the exisitng data table has the input username already
      $query = mysqli_query($link, "SELECT * FROM itlabexerciseusers WHERE ID = '$id'");
      ///// If it does the program will continue
      if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_assoc($query);
        $passwd = $row['password'];
        if(password_verify($pwd,$passwd) === true){
            $_SESSION['login'] = "stud";
            $_SESSION['fname'] = $fname;
            $_SESSION['id'] = $id;
            setcookie("loggedin", "stud", time()+ 86400);
 
            header("location: ./stud-page.php");
        }
        else{
          echo '<script> alert("The ID or password is wrong. LOGIN FAILED!"); window.location.href = "./lib_login_stud.html"; </script>'; 
        }
      }
      else{
        echo '<script> alert("The ID or password is wrong. LOGIN FAILED!"); window.location.href = "./lib_login_stud.html"; </script>';
      }  
    }
?>