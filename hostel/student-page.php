<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./hostelstyle.css">
    <title>Student Page | Library Management</title>
</head>
<body>
    <!-- checks whether the session is valid or not and set or not -->

    <?php
        session_start();
        
        $fname = $id =  "";
        
        if(!isset($_SESSION['login'])){
            header('location:./login_hostel.php');
        }
        else{
            // if logged in the session varibles, I am considering are the first name and last name, and they will be shown on screen.
            
            $fname = $_SESSION['fname'];
            $id = $_SESSION['id'];
            include "myhostel_rooms.php";
            $query = mysqli_query($link, "SELECT * FROM itlabexerciserooms WHERE HOSTELLER = '$id'");        
        }

    ?>

        <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="../library/login_lib.html">Library</a>
        <a  href="./login_hostel.php">Hostels</a>
        <a class="active" href="student-page.php">Student Home </a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div>
    <br>
        <!-- Student menu/ logged-in page -->
    <div class="container" >
        <div class="card2">
          
            <form class="card-form">
                <div class="card-info" style="padding: 3px 0px;">
                   <strong>Welcome to your hostel portal!</strong>
                   <p> Hello 
                   <?php
                    echo $fname.' ';
                    echo ', ID: ';
                    echo $id;
                ?>
                    </p>

                   <br>
                   <strong>My Hostel Details:</strong>
                     <table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">
                        <tr>
                            <th style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">Room No:</th>
                            <th style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">Floor No:</th>
                        </tr>

                        <?php
                        if(mysqli_num_rows($query) >= 1){
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">' . $row["ROOM"] . '</td>';
                                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">' . $row["FLOORNO"] . '</td>';
                                echo "</tr>";
                            }
                        }
                        else{
                            echo "<tr>";
                            echo '<td colspan="2" style="border:1px solid rgba(89, 59, 124, 0.767);width:100%"> NO ROOM ALLOCATED </td>';  
                            echo "</tr>";
                        }
                        ?>
                    </table>
                     <br>
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