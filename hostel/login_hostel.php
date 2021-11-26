<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <style src="./hostelscript.js" type="text/javascript"></style>
    
    <title>Login Selection - Hostel</title>
</head>
<body>
    <?php
      /*  include "myhostel_rooms.php";
        include "myhostel_users.php";

        if(!isset($_COOKIE['loggedin'])){
            header('location:./login_hostel.php');
        }
        else{
            if($_SESSION['login'] == 'admin'){
                header('location:./hostel_admin_page.php');
            }
            if($_SESSION['login'] == 'admin'){
                header('location:./student-page.php');
            }     
        }*/

    ?>
    <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="../library/login_lib.html">Library</a>
        <a class="active" href="./login_hostel.php">Hostels</a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div>
        <!-- hostel loging-in page -->
    <div class="container" >

        <div class="container" >
            <div class="card" style ="float: left; margin-left:20%;">     
                <form class="card-form" id="adminForm" method="post" action="./login-hadmin.php" >
                    <div class="card-info" style="padding: 3px 0px;">
                       <strong>Login for Admin</strong>
                       <br>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name ="adminid" id="adminid" value="admin" required/>
                        <label class="input-label">ID</label>
                    </div>
                    <div class="input">
                        <input type="password"  value="1234" name="adminpwd" id="adminpwd" title="Enter valid password!" pattern="1234" class="input-field" required/>
                        <label class="input-label">Password</label>
                    </div>
                    <div class="action">
                        <button type="submit" class="action-button" onclick="return validadmin();" >Login</button>
                    </div>
                </form>
            </div>
    
            <div class="card" style="float: left; margin-left:25px;">     
                <form class="card-form" method="post" action="login-hstud.php">
                    <div class="card-info"  style="padding: 3px 0px;">
                       <strong>Login for Students</strong>
                       <br>
                    </div>
                    <div class="input">
                        <input type="text"name="thisid" id="thisid" class="input-field" pattern="[0-9]{2}[A-Z]{4}[0-9]{2}" title="ID should be of format ex- 19MCME03" required/>
                        <label class="input-label">ID</label>
                    </div>
                    <div class="input">
                        <input type="password"  id="thispwd" name="thispwd" title="Enter valid password!" class="input-field" required/>
                        <label class="input-label">Password</label>
                    </div>
                    <div class="action">
                        <button type="submit" class="action-button" >Login</button>
                    </div>
                </form>
            </div>
            <div id="errorMsg" style="position:absolute;">
                Default login for admin => ID:admin; password: 1234
            </div>
    </div>
    
    <footer>
        <p>
            &#169; Vaishnavi Raghavajosyula (19MCME03)
        </p>
    </footer>
</body>
</html>