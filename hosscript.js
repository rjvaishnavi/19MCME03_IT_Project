function validadmin(){
    
    if(document.getElementById("adminid").value == "admin" && document.getElementById("adminpwd").value == "1234" ){
        alert("test1");
            return true;

    }
    else{
        alert("Invalid ID or Password!");
        return false;

    }
}