function validadmin(){

    preventDefault();
    if(document.getElementById("adminid").value == "admin" && document.getElementById("adminpwd").value == "1234" ){
        //alert("test1");
        document.getElementById("adminForm").submit();
            return true;

    }
    else{
        alert("Invalid ID or Password!");
        return false;

    }
}