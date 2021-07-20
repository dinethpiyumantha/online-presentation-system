function adminLogin(){
    var userN, userW;
    userN = document.getElementById("username").value;
    passW = document.getElementById("password").value;
    pwLen= passW.length;

    if(userN=='' || passW==''){
        alert('Username and Password should not be empty ! Enter Again !');
        document.getElementById("username").value='';
        document.getElementById("password").value='';
    }
    else if(pwLen<4){
        alert("Not Valid Password !");
    }
}

