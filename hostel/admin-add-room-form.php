<?php

        include "myhostel_users.php";
        include "myhostel_rooms.php";
        $roomno = $floorno = "";
        $vac = "Y";
        $hosteller ="NIL";

        //            This starts the php process if the request method is post upon submitting the form
        if($_SERVER["REQUEST_METHOD"] == "POST"){
    
            ///////////// This is triming the excess out of the input that is taken in by the form
            $roomno = trim($_POST["roomno"]);
            $floorno = trim($_POST["floorno"]);
            ///////////// This is a query to the database to make sure to check the exisitng data table has the input room already
            $query = mysqli_query($link, "SELECT * FROM itlabexerciserooms WHERE ROOM = '$roomno'");
    
            ///// If it dosen't the program will continue
            if(mysqli_num_rows($query) == 0){

              
              /////////// this is the insert query to insert the validated input into the data table
              mysqli_query($link, "INSERT INTO itlabexerciserooms(ROOM,FLOORNO,VACANCY, HOSTELLER) VALUES('$roomno','$floorno','$vac', '$hosteller') ");
      
               ///////////// This is a query to the database to make sure to check the exisitng data table has the input room inserted
               $query = mysqli_query($link, "SELECT * FROM itlabexerciserooms WHERE ROOM = '$roomno'");
               // echo("Error description: " . mysqli_error($link));
             // echo("Error description: " . $query -> error);
              //////////// if its is sucessfully inserted
              if(mysqli_num_rows($query) == 1){
                // an alert message is shown and the webpage is moved to the login page
                echo '<script> alert("Room Added Successfully"); window.location.href = "./hostel_admin_page.php";</script>';
               // $sucess = true;
         
              }
              else{
                //// if it cant be inserted into the data table, it shows an alert error
                echo '<script> alert("An error has occured and the room was not Added");  window.location.href = "./hostel_admin_page.php"; </script>';
                    
              }
            }
            else{
              // if the id is already taken, it shows the alert error  
              echo '<script> alert("The Room '.$roomno.' is already in the system. Enter another."); window.location.href = "./admin-add-room.php";</script>';          
           
            }
     
        }

?>