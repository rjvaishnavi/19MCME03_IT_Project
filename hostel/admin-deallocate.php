<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mystyle.css">
    <link rel="stylesheet" href="./hostelstyle.css">
    <title>Admin Page - Deallocating a room | Hostel Management</title>
</head>
<body>
    <!-- checks whether the session is valid or not -->
<?php
  session_start();

  
  if(!isset($_SESSION['login'])){
      header('location:./hostel_admin_page.php');
  }
  else{
      // to print vacant rooms

      include "myhostel_rooms.php";
      $vac = "N";
      $query = mysqli_query($link, "SELECT * FROM itlabexerciserooms WHERE VACANCY = '$vac'");        
  }


?>

        <!-- the horizontal navigation bar-->
    <div class="topnav">
        <a href="../homepage.html">Home Page</a>
        <a href="../library/login_lib.html">Library</a>
        <a  href="./login_hostel.php">Hostels</a>
        <a  href="hostel_admin_page.php">Admin Home</a>
        <a class="active" href="admin-deallocate.php">Deallocating a Room </a>
        <a href="../tutoring_vids/tutoring.html">Video Classes</a>
    </div>
    <br>
    <!--event.preventdefault()-->
    <!-- Room for checking de-allocated room-->
    <div class="container" >
        <div class="card2">     
            <form class="card-form" action="admin-deallocate-form.php" method="post">
                <div class="card-info" style="padding: 3px 0px;">
                <strong>Allocated rooms:</strong>
                     <table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">
                        <tr>
                            <th style="border:1px solid rgba(89, 59, 124, 0.767);width:30%">Room No:</th>
                            <th style="border:1px solid rgba(89, 59, 124, 0.767);width:30%">Floor No:</th>
                            <th style="border:1px solid rgba(89, 59, 124, 0.767);width:30%">Hosteller:</th>
                        </tr>

                        <?php
                        if(mysqli_num_rows($query) >= 1){
                            while($row = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:30%">' . $row["ROOM"] . '</td>';
                                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:30%">' . $row["FLOORNO"] . '</td>';
                                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:30%">' . $row["HOSTELLER"] . '</td>';
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                   <br>
                   <strong>Deallocate a Hostel Room</strong>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="roomno" id="roomno" required/>
                    <label class="input-label">Room No.</label>
                </div>
                <div class="input">
                    <input type="text" type="text" name="thisid" id="thisid" class="input-field" pattern="[0-9]{2}[A-Z]{4}[0-9]{2}" title="ID should be of format ex- 19MCME03" required/>
                    <label class="input-label">ID:</label>
                </div>
                <div class="action">
                    <button type ="submit" class="action-button">De - allocate the room</button>
                </div>
            </form>
        </div>
    </div>
    <footer style="bottom:initial;" >
        <p>
            &#169; Vaishnavi Raghavajosyula (19MCME03)
        </p>
    </footer>
</body>
</html>