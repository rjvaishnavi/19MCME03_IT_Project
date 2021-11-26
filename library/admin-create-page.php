<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./libstyle.css">
    <title>Admin Page - Create an Account | Library Management</title>
</head>
<body>
<?php
    
    if(!isset($_COOKIE["loggedin"])){
        header("location: ./login_lib.html");
    }

?>
    <!-- Adding a student user to library database page -->
    <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="./login_lib.html">Library</a>
        <a href="./admin-page.php">Admin Home</a>
        <a class="active" href="./admin-create-page.php">Creating an Account</a>
        <a href="./lib_login_stud.html">Student Login</a>
        <a href="../hostel/login_hostel.php">Hostels</a>
        <a href="#about">Video Classes</a>
    </div> 
    <br>
    <!--event.preventdefault()-->

    <div class="container" >
        <div class="card2">     
            <form class="card-form" action="admin-create.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Creating A Student Account</strong>
                   <br>
                </div>
                <div class="input">
                    <input type="text"  name ="fname" id="fname" class="input-field" pattern="[A-Za-z]{3,}" required/>
                    <label class="input-label">First Name</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" required/>
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