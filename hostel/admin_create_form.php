<?php
        include "myhostel_users.php";
        $erroMsg = $id = $pwd = $fname = $lname ="";

        //            This starts the php process if the request method is post upon submitting the form
        if($_SERVER["REQUEST_METHOD"] == "POST"){
    
            ///////////// This is triming the excess out of the input that is taken in by the form
            $fname = trim($_POST["fname"]);
            $lname = trim($_POST["lname"]);
            $id = trim($_POST["thisid"]);
            ///////////// This is a query to the database to make sure to check the exisitng data table has the input id already
            $query = mysqli_query($link, "SELECT * FROM itlabexerciseusers WHERE ID = '$id'");
    
            ///// If it dosen't the program will continue
            if(mysqli_num_rows($query) == 0){
                $newpwd = $id .$fname;
              // This is hashing the validated password into a new variable fpassword
              $fpassword= password_hash($newpwd, PASSWORD_DEFAULT);
              
              /////////// this is the insert query to insert the validated input into the data table
              mysqli_query($link, "INSERT INTO itlabexerciseusers(ID,FNAME,LNAME, PWD) VALUES('$id','$fname','$lname', '$fpassword') ");
      
               ///////////// This is a query to the database to make sure to check the exisitng data table has the input username inserted
              $query = mysqli_query($link, "SELECT * FROM itlabexerciseusers WHERE ID= '$id'") OR die(mysqli_error($link));
               // echo("Error description: " . mysqli_error($link));
             // echo("Error description: " . $query -> error);
              //////////// if its is sucessfully inserted
              if(mysqli_num_rows($query) == 1){
                // an alert message is shown and the webpage is moved to the login page
                echo '<script> alert("Account Created Successfully"); window.location.href = "./hostel_admin_page.php";</script>';
               // $sucess = true;
         
              }
              else{
                //// if it cant be inserted into the data table, it shows an alert error
                echo '<script> alert("An error has occured and your account was not created");  window.location.href = "./hostel_admin_page.php"; </script>';
                    
              }
            }
            else{
              // if the id is already taken, it shows the alert error  
              echo '<script> alert("The ID '.$id.' is already in the system. Enter another."); window.location.href = "./admin-create-user.php";</script>';          
           
            }
     
        }


    ?>
