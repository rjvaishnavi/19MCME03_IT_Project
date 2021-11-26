<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./libstyle.css">
    <title>Student Page - Searching a Book | Library Management</title>
</head>
<body>
    <!-- checks whether the session is valid or not -->
    <?php

        if(!isset($_COOKIE["loggedin"])){
            header("location: ./login_lib.html");
        }

    ?>
    <!-- Searching a book to library database page -->
    <!-- the horizontal navigation bar-->

    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="./login_lib.html">Library</a>
        <a href="./lib_login_admin.html">Admin Login</a>
        <a href="./stud-page.php">Student Home</a>
        <a class="active" href="./searchbook-page.php">Search for a book</a>
        <a href="../hostel/login_hostel.php">Hostels</a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
        </div>
    <br>

    <div class="container" >
        <div class="card" style ="float: left; margin-left:25px;">     
            <form class="card-form" action="titlesearch.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Search by TITLE</strong>
                   <br>
                </div>
                <div class="input">
                    <input type="text" id="title" name="title" class="input-field" required/>
                    <label class="input-label">Title of Book</label>
                </div>
                <div class="action">
                    <button class="action-button">Search</button>
                </div>
            </form>
        </div>

        <div class="card" style="float: left; margin-left:25px;">     
            <form class="card-form" action="authorsearch.php" method="post">
                <div class="card-info"  style="padding: 3px 0px;">
                   <strong>Search by AUTHOR NAME</strong>
                   <br>
                </div>
                <div class="input">
                    <input type="text" id="author" name="author" class="input-field" required/>
                    <label class="input-label">Author name </label>
                </div>
                <div class="action">
                    <button class="action-button">Search</button>
                </div>
            </form>
        </div>

        <div class="card" style="float: left; margin-left:25px;">     
            <form class="card-form" action="isbnsearch.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Search by ISBN No.</strong>
                   <br>
                </div>
                <div class="input">
                    <input type="text" id="isbn" name="isbn" class="input-field" pattern="[0-9]{13}" title="Enter an ISBN number" required/>
                    <label class="input-label">ISBN no.</label>
                </div>
                <div class="action">
                    <button class="action-button">Search</button>
                </div>
            </form>
        </div>
        <br>

    </div>
    <footer>
        <p>
            &#169; Vaishnavi Raghavajosyula (19MCME03)
        </p>
    </footer>
</body>
</html>