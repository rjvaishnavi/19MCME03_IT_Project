<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./libstyle.css">
    <title>Admin Page | Library Management</title>
</head>
<body>

<?php

        if(!isset($_COOKIE["loggedin"])){
            header("location: ./login_lib.html");
        }

?>
    <!-- Main menu page for logging in -->
    <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="./login_lib.html">Library</a>
       <!-- <a href="./lib_login_admin.html">Admin Login</a> -->
        <a class="active" href="./admin-page.php">Admin Home</a>
        <a href="./lib_login_stud.html">Student Login</a>
        <a href="../hostel/login_hostel.php">Hostels</a>
        <a href="#about">Video Classes</a>
    </div> 
    <br>

    <div class="container" >
        <div class="card2">
          
            <form class="card-form">
                <div class="action">
                   <button class="action-button"><a href="admin-create-page.php">Create a Student Account</a></button>
                </div>
                <div class="action">
                    <button class="action-button"><a href="./admin-delete-page.php">Delete a Student Account</a></button>
                 </div>
                <div class="action">
                    <button class="action-button"><a href="./addbook-page.php">Add a Book</a></button>
                 </div>
                 <div class="action">
                    <button class="action-button"><a href="./deletebook-page.php">Delete a Book</a></button>
                 </div>
                <div class="action">
                    <button class="action-button"><a href="./issuebook-page.php">Issue a Book</a></button>
                 </div>
                <div class="action">
                    <button class="action-button"><a href="./returnbook-page.php">Return a Book</a></button>
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
</html>