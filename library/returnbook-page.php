<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./libstyle.css">
    <title>Admin Page - Returning a Book | Library Management</title>
</head>
<body>
    <!-- checks whether the session is valid or not -->
    <?php

        if(!isset($_COOKIE["loggedin"])){
            header("location: ./login_lib.html");
        }

    ?>
    <!-- Returning a book in the library database page -->
    <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="./login_lib.html">Library</a>
     
        <a href="./admin-page.php">Admin Home</a>
        <a class="active" href="./returnbook-page.php">Returning a Book</a>
        <a href="./lib_login_stud.html">Student Login</a>
        <a href="../hostel/login_hostel.php">Hostels</a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div> 
    <br>

    <div class="container" >
        <div class="card2">     
            <form class="card-form" action="returnbook.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Return a Book</strong>
                   <br>
                </div>
                <div class="input">
                    <input type="text" id="isbn" name="isbn" class="input-field" pattern="[0-9]{13}" title="Enter an ISBN number" required/>
                    <label class="input-label">ISBN of Book </label>
                </div>
                <div class="action">
                    <button class="action-button">Return the Book</button>
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