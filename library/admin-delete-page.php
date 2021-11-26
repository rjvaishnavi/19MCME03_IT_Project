<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./libstyle.css">
    <title>Admin Page - Delete an Account | Library Management</title>
</head>
<body>

<?php
    
        if(!isset($_COOKIE["loggedin"])){
            header("location: ./login_lib.html");
        }

?>
    <!-- deleting a student user from library database page -->
    <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="./login_lib.html">Library</a>

        <a href="./admin-page.php">Admin Home</a>
        <a class="active" href="./admin-delete-page.php">Delete an Account</a>
        <a href="./lib_login_stud.html">Student Login</a>
        <a href="../hostel/login_hostel.php">Hostels</a>
        <a href="#about">Video Classes</a>
    </div> 
    <br>

    <div class="container" >
        <div class="card2">     
            <form class="card-form" action="admin-delete.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Deleting A Student Account</strong>
                   <br>
                </div>
                <div class="input">
                    <input type="text" name="thisid" id="thisid" class="input-field" pattern="[0-9]{2}[A-Z]{4}[0-9]{2}" title="ID should be of format ex- 19MCME03" required/>
                    <label class="input-label">Enter the ID to <span style="color:red;">DELETE</span></label>
                </div>
                <div class="action">
                    <button class="action-button">Delete the Account</button>
                </div>
                <div class="card-info">
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>
            &#169; Vaishnavi Raghavajosyula (19MCME03)
        </p>
    </footer>
</body>
</html>