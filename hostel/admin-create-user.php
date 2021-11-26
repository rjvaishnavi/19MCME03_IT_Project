<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./hostelstyle.css">
    <title>Admin Page - Create an Account | Hostel Management</title>
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
        <a class="active" href="admin-create-user.php">Creating a Student Account </a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div>
    <br>
 
    <div class="container" >
        <div class="card2">     
            <form class="card-form" action="admin_create_form.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Creating A Student Hostel Account</strong>
                   <br>
                </div>
                <div class="input">
                    <input type="text"  name ="fname" id="fname" class="input-field" pattern="[A-Za-z]{3,}" required/>
                    <label class="input-label">First Name</label>
                </div>
                <div class="input">
                    <input type="text" name="lname" id="lname" class="input-field" required/>
                    <label class="input-label">Last Name</label>
                </div>
                <div class="input">
                    <input type="text" name="thisid" id="thisid" class="input-field" pattern="[0-9]{2}[A-Z]{4}[0-9]{2}" title="ID should be of format ex- 19MCME03" required/>
                    <label class="input-label">ID</label>
                </div>
                <div class="action">
                    <button type ="submit" class="action-button">Create Account</button>
                </div>
            </form>
            <div class="card-info">
                <p>Default password created is the ID+Firstname</p>
            </div>
        </div>
    </div>
    <footer style="bottom:initial;">
        <p>
            &#169; Vaishnavi Raghavajosyula (19MCME03)
        </p>
    </footer>
</body>
</html>