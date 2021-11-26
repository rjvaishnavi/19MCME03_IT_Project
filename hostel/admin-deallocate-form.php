<?php
    ///to connect to the database
    include "myhostel_users.php";
    include "myhostel_rooms.php";
    $id = $roomno = "";

    //            This starts the php process if the request method is post upon submitting the form
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        ///////////// This is triming the excess out of the input that is taken in by the form
        $id = trim($_POST["thisid"]);
        $roomno = trim($_POST["roomno"]);
        $stat = "Y";
        $extra ="NIL";
        ///////////// This is a query to the database to make sure to check the exisitng data table has the input ID already
        $query = mysqli_query($link, "SELECT * FROM itlabexerciseusers WHERE ID = '$id'");
        ///// If it does the program will continue
        if(mysqli_num_rows($query) == 1){
        /// this is to fetch the row that contains the ID that is to be used
        $query = mysqli_query($link, "SELECT * FROM itlabexerciserooms WHERE ROOM = '$roomno'"); 
            ///// If it does the program will continue
            if(mysqli_num_rows($query) == 1){
            /// this is to fetch the row that contains the ID that is to be used
                $row = mysqli_fetch_assoc($query);
            
                    // it creates a delete 
                    $edit = mysqli_query($link,"UPDATE itlabexerciserooms SET VACANCY='$stat', HOSTELLER ='$extra' WHERE ROOM ='$roomno' ");
                    // if the query is sucessful, it will show this alert and move to the admin page
                    if($edit){
                        echo '<script> alert("The Room has been de-allocated!");  window.location.href = "./hostel_admin_page.php"</script>';

                    }
                    else{
                        // else it will show an error alert
                    echo '  <script> alert("Failed to Allocate room");  window.location.href = "./admin-deallocate.php"</script>';
                    }
        
            }
            else{
                /// if the current Isbn doesn't exist it shows an alert error 
            echo '  <script> alert("The Room number does not exist");  window.location.href = "./admin-deallocate.php"</script>';
            }    
        }
        else{
            /// if the current ID doesn't exist it shows an alert error 
        echo '  <script> alert("The ID does not exist");  window.location.href = "./admin-deallocate.php"</script>';
        }
    }

?>