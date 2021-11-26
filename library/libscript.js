function validadmin(){
    // for the default admin user
    // checks whether the vales are true.
    if(document.getElementById("adminid").value == "admin" && document.getElementById("adminpwd").value == "1234" ){
            return true;

    }
    else{
        // else gives an alert 
        alert("Invalid ID or Password!");
        return false;

    }
}