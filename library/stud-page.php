<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./libstyle.css">
    <title>Student Page | Library Management</title>
</head>
<body>
    <!-- checks whether the session is valid or not -->

<?php
    session_start();
    
    $fname = $id =  "";
    
    if(!isset($_SESSION['login'])){
        header('location:./login_lib.html');
    }
    else{
        // if logged in the session varibles, I am considering are the first name and last name, and they will be shown on screen.
        
        $fname = $_SESSION['fname'];
        $id = $_SESSION['id'];
        include "mydb_search.php";
        $query = mysqli_query($link, "SELECT * FROM itlabexerciselibrary WHERE BORROWER = '$id'");        
    }

?>
    <!-- Student menu page -->
    <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="./login_lib.html">Library</a>
        <a href="./lib_login_admin.html">Admin Login</a> 
        <a class="active" href="./stud-page.php">Student Home</a>
        <a href="../hostel/login_hostel.php">Hostels</a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div> 
    <br>

    <div class="container" >
        <div class="card2">
          
            <form class="card-form">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Welcome</strong>
                <?php
                    echo $fname.' ';
                    echo '.<br> ID: ';
                    echo $id;
                ?>
                   <br>
                </div>
                <!--- ////////////////////////////           print list of books that are taken out under the name of student!!!!     -->    
                 <div class="card-info">
                     <strong>My borrowed books:</strong>
                     <table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">
                        <tr>
                            <th style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">Title</th>
                            <th style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">ISBN</th>
                        </tr>

                        <?php
                        if(mysqli_num_rows($query) >= 1){
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">' . $row["TITLE"] . '</td>';
                                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">' . $row["ISBN"] . '</td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                     <br>
                </div>    
                <div class="action">
                   <button class="action-button"><a href="./searchbook-page.php">Search for a Book</a></button>
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