<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./hostelstyle.css">
    <script></script>
    <title>Admin Page | Hostel Management</title>
</head>
<body>
    <!-- checks whether the session is valid or not -->

<?php

        if(!isset($_COOKIE["loggedin"])){
            header("location: ./login_hostel.php");
        }

?>
    <!-- horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="../library/login_lib.html">Library</a>
        <a  href="./login_hostel.php">Hostels</a>
        <a class="active" href="hostel_admin_page.">Admin Home</a><!--  ADD LINK TO PHP HEREREEE-->
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div>
    <br>
<!--              ///////////////////////////         NOTTTTEEE           CONVERT TO PHPPPPPPPPPPP            \\\\\\\\\\\\\\\\\\\\\\\\\\\          -->
    <div class="container" >
        <div class="card2">
          <!-- admin menu main page -->
            <form class="card-form">
                <div class="action">
                   <button class="action-button"><a href="admin-create-user.php">Create a Student Account</a></button>
                </div>
                <div class="action">
                    <button class="action-button"><a href="./admin-add-room.php">Add a Room</a></button>
                 </div>
                <div class="action">
                    <button class="action-button"><a href="admin-allocate.php">Allocate a Room</a></button>
                 </div>
                <div class="action">
                    <button class="action-button"><a href="admin-deallocate.php">Deallocate a Room</a></button>
                </div>
                <div class="action">
                </div>    
                <div class="card-info" style="padding: 3px 0px;">
                   <a href="./logout.php">Click here to log out</a>  
                    <br>
                 </div>
            </form>
        </div>
    </div>
    <footer style="bottom:initial;">
        <p>
            &#169; Vaishnavi Raghavajosyula (19MCME03)
        </p>
    </footer>
</body>
</html