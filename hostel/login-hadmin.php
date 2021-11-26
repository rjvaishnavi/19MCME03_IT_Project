<?php
    session_start();
    $adminid = "";
    $pwd = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $adminid = trim($_POST["adminid"]);
        $pwd = trim($_POST["adminpwd"]);
        if($adminid != "admin" || $pwd != "1234" ){
            echo '<script>alert("Incorrect admin ID or password!"); window.location.href = "./login_hostel.php";</script>';
        }
        else{
            $_SESSION["login"] = "admin";
            setcookie("loggedin", "admin", time()+ 86400);
            header("location: ./hostel_admin_page.php");

        }
    }
    

    
?>
