<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./hostelstyle.css">
    <title>Admin Page - Adding a room | Hostel Management</title>
</head>
<body>
<!-- checks whether the session is valid or not -->

    <?php
    
        if(!isset($_COOKIE["loggedin"])){
            header("location: ./login_hostel.php");
        }

    ?>
    <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="../library/login_lib.html">Library</a>
        <a  href="./login_hostel.php">Hostels</a>
        <a  href="./hostel_admin_page.php">Admin Home</a>
        <a class="active" href="admin-add-room.php">Adding a Room </a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div>
    <br>
    <!--event.preventdefault()-->

    <div class="container" >
        <div class="card2">     
            <form class="card-form" action="admin-add-room-form.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                <!-- page for adding a hostel room-->
                   <strong>Add a Hostel Room</strong>
                   <br>
                </div>
                <div class="input">
                    <!-- to inout room no -->
                    <input type="text" name="roomno" id="roomno" class="input-field" title="Room numbers are 3 digits" pattern="[0-9]{3}" required/>
                    <label class="input-label">Room No.</label>
                </div>
                <div class="input">
                    <!-- to inout floor no -->
                    <input type="text"name="floorno" id="floorno" class="input-field" pattern="[0-9]{1,2}" title="Floor numbers are 1 or 2 digits" required/>
                    <label class="input-label">Floor No.</label>
                </div>
                <div class="action">
                    <button type ="submit" class="action-button">Add</button>
                </div>
            </form>
        </div>
    </div>
    <footer >
        <p>
            &#169; Vaishnavi Raghavajosyula (19MCME03)
        </p>
    </footer>
</body>
</html>